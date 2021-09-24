VERSION=$(shell ./version.sh)
GIT_USER=vdauchy
GIT_REPO=docker-php-api

.PHONY: help
help: ## This help.
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_-]+:.*?## / {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)
.DEFAULT_GOAL := help

TEMP_DIR := .temp
$(TEMP_DIR):
	@mkdir $(TEMP_DIR)
	@docker run \
		--rm \
		--user $(shell id -u):$(shell id -g) \
		--volume $(shell pwd):/gen \
		swaggerapi/swagger-codegen-cli generate \
		-i https://docs.docker.com/engine/api/v$(VERSION).yaml \
		-l php \
		-o /gen/$(TEMP_DIR)

.PHONY: generate
generate: $(TEMP_DIR) ## Generate code to temporary directory.

.PHONY: clean
clean: ## Delete temporary files.
	@rm -rf $(TEMP_DIR)

.PHONY: nuke
nuke: ## Delete ALL generated files.
	@find . -mindepth 1 \
		! -name 'version.sh' \
		! -name 'Makefile' \
		! -name '.gitignore' \
		! -path "./.git*" -print0 \
	| xargs -0  -I {} rm -rf {}

.PHONY: import
import: generate ## Import generated files to project's root.
	@cp -r $(TEMP_DIR)/SwaggerClient-php/* .
	@sed -i 's/GIT_USER_ID/$(GIT_USER)/g' composer.json
	@sed -i 's/GIT_REPO_ID/$(GIT_REPO)/g' composer.json
	@sed -i 's/GIT_USER_ID/$(GIT_USER)/g' README.md
	@sed -i 's/GIT_REPO_ID/$(GIT_REPO)/g' README.md
	@sed -i 's/*@dev/^$(VERSION)/g' README.md

.PHONY: update
update: | nuke generate import clean  ## Update the code (ie: generate, import and clean).

.PHONY: test
test: vendor
	@docker run \
            --interactive \
            --rm \
            --tty \
            --user $(shell id -u):$(shell id -g) \
            --tmpfs /tmp \
            --workdir=/project \
            --volume $(shell pwd):/project \
            vdauchy/php-cli-alpine:7.4 \
            vendor/bin/phpunit

.PHONY: version
version:
	@echo $(VERSION)

vendor: composer.json $(wildcard composer.lock) ## Install php dependencies.
	@docker run \
            --interactive \
            --rm \
            --tty \
            --user $(shell id -u):$(shell id -g) \
            --tmpfs /tmp \
            --workdir=/project \
            --volume $(shell pwd):/project \
            vdauchy/php-cli-alpine:7.4 \
            composer install

.PHONY: tag
tag: ## Tag and push the tag with the current version.
	git tag $(VERSION)
	git push origin $(VERSION)