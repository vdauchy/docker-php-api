VERSION=$(shell ./version.sh)

.PHONY: help
help: ## This help.
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_-]+:.*?## / {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)
.DEFAULT_GOAL := help

generate := .temp
generate: $(generate) ## Generate code to temporary directory.
$(generate):
	@mkdir .temp
	@docker run \
		--rm \
		--user $(shell id -u):$(shell id -g) \
		--volume $(shell pwd):/gen \
		swaggerapi/swagger-codegen-cli generate \
		-i https://docs.docker.com/engine/api/v$(VERSION).yaml \
		-l php \
		-o /gen/.temp

.PHONY: clean
clean: ## Delete temporary files.
	@rm -rf .temp

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
	@cp -r $(shell pwd)/.temp/SwaggerClient-php/* $(shell pwd)
	@sed -i 's/GIT_USER_ID/vdauchy/g' composer.json
	@sed -i 's/GIT_REPO_ID/docker-php-api/g' composer.json

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