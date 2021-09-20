<?php
/**
 * SystemVersionResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Docker Engine API
 *
 * The Engine API is an HTTP API served by Docker Engine. It is the API the Docker client uses to communicate with the Engine, so everything the Docker client can do can be done with the API.  Most of the client's commands map directly to API endpoints (e.g. `docker ps` is `GET /containers/json`). The notable exception is running containers, which consists of several API calls.  # Errors  The API uses standard HTTP status codes to indicate the success or failure of the API call. The body of the response will be JSON in the following format:  ``` {   \"message\": \"page not found\" } ```  # Versioning  The API is usually changed in each release, so API calls are versioned to ensure that clients don't break. To lock to a specific version of the API, you prefix the URL with its version, for example, call `/v1.30/info` to use the v1.30 version of the `/info` endpoint. If the API version specified in the URL is not supported by the daemon, a HTTP `400 Bad Request` error message is returned.  If you omit the version-prefix, the current version of the API (v1.38) is used. For example, calling `/info` is the same as calling `/v1.38/info`. Using the API without a version-prefix is deprecated and will be removed in a future release.  Engine releases in the near future should support this version of the API, so your client will continue to work even if it is talking to a newer Engine.  The API uses an open schema model, which means server may add extra properties to responses. Likewise, the server will ignore any extra query parameters and request body properties. When you write clients, you need to ignore additional properties in responses to ensure they do not break when talking to newer daemons.   # Authentication  Authentication for registries is handled client side. The client has to send authentication details to various endpoints that need to communicate with registries, such as `POST /images/(name)/push`. These are sent as `X-Registry-Auth` header as a Base64 encoded (JSON) string with the following structure:  ``` {   \"username\": \"string\",   \"password\": \"string\",   \"email\": \"string\",   \"serveraddress\": \"string\" } ```  The `serveraddress` is a domain/IP without a protocol. Throughout this structure, double quotes are required.  If you have already got an identity token from the [`/auth` endpoint](#operation/SystemAuth), you can just pass this instead of credentials:  ``` {   \"identitytoken\": \"9cbaf023786cd7...\" } ```
 *
 * OpenAPI spec version: 1.38
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.21
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * SystemVersionResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SystemVersionResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SystemVersionResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'platform' => '\Swagger\Client\Model\SystemVersionResponsePlatform',
        'components' => '\Swagger\Client\Model\SystemVersionResponseComponents[]',
        'version' => 'string',
        'api_version' => 'string',
        'min_api_version' => 'string',
        'git_commit' => 'string',
        'go_version' => 'string',
        'os' => 'string',
        'arch' => 'string',
        'kernel_version' => 'string',
        'experimental' => 'bool',
        'build_time' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'platform' => null,
        'components' => null,
        'version' => null,
        'api_version' => null,
        'min_api_version' => null,
        'git_commit' => null,
        'go_version' => null,
        'os' => null,
        'arch' => null,
        'kernel_version' => null,
        'experimental' => null,
        'build_time' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'platform' => 'Platform',
        'components' => 'Components',
        'version' => 'Version',
        'api_version' => 'ApiVersion',
        'min_api_version' => 'MinAPIVersion',
        'git_commit' => 'GitCommit',
        'go_version' => 'GoVersion',
        'os' => 'Os',
        'arch' => 'Arch',
        'kernel_version' => 'KernelVersion',
        'experimental' => 'Experimental',
        'build_time' => 'BuildTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'platform' => 'setPlatform',
        'components' => 'setComponents',
        'version' => 'setVersion',
        'api_version' => 'setApiVersion',
        'min_api_version' => 'setMinApiVersion',
        'git_commit' => 'setGitCommit',
        'go_version' => 'setGoVersion',
        'os' => 'setOs',
        'arch' => 'setArch',
        'kernel_version' => 'setKernelVersion',
        'experimental' => 'setExperimental',
        'build_time' => 'setBuildTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'platform' => 'getPlatform',
        'components' => 'getComponents',
        'version' => 'getVersion',
        'api_version' => 'getApiVersion',
        'min_api_version' => 'getMinApiVersion',
        'git_commit' => 'getGitCommit',
        'go_version' => 'getGoVersion',
        'os' => 'getOs',
        'arch' => 'getArch',
        'kernel_version' => 'getKernelVersion',
        'experimental' => 'getExperimental',
        'build_time' => 'getBuildTime'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['components'] = isset($data['components']) ? $data['components'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['api_version'] = isset($data['api_version']) ? $data['api_version'] : null;
        $this->container['min_api_version'] = isset($data['min_api_version']) ? $data['min_api_version'] : null;
        $this->container['git_commit'] = isset($data['git_commit']) ? $data['git_commit'] : null;
        $this->container['go_version'] = isset($data['go_version']) ? $data['go_version'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['kernel_version'] = isset($data['kernel_version']) ? $data['kernel_version'] : null;
        $this->container['experimental'] = isset($data['experimental']) ? $data['experimental'] : null;
        $this->container['build_time'] = isset($data['build_time']) ? $data['build_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets platform
     *
     * @return \Swagger\Client\Model\SystemVersionResponsePlatform
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param \Swagger\Client\Model\SystemVersionResponsePlatform $platform platform
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets components
     *
     * @return \Swagger\Client\Model\SystemVersionResponseComponents[]
     */
    public function getComponents()
    {
        return $this->container['components'];
    }

    /**
     * Sets components
     *
     * @param \Swagger\Client\Model\SystemVersionResponseComponents[] $components components
     *
     * @return $this
     */
    public function setComponents($components)
    {
        $this->container['components'] = $components;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets api_version
     *
     * @return string
     */
    public function getApiVersion()
    {
        return $this->container['api_version'];
    }

    /**
     * Sets api_version
     *
     * @param string $api_version api_version
     *
     * @return $this
     */
    public function setApiVersion($api_version)
    {
        $this->container['api_version'] = $api_version;

        return $this;
    }

    /**
     * Gets min_api_version
     *
     * @return string
     */
    public function getMinApiVersion()
    {
        return $this->container['min_api_version'];
    }

    /**
     * Sets min_api_version
     *
     * @param string $min_api_version min_api_version
     *
     * @return $this
     */
    public function setMinApiVersion($min_api_version)
    {
        $this->container['min_api_version'] = $min_api_version;

        return $this;
    }

    /**
     * Gets git_commit
     *
     * @return string
     */
    public function getGitCommit()
    {
        return $this->container['git_commit'];
    }

    /**
     * Sets git_commit
     *
     * @param string $git_commit git_commit
     *
     * @return $this
     */
    public function setGitCommit($git_commit)
    {
        $this->container['git_commit'] = $git_commit;

        return $this;
    }

    /**
     * Gets go_version
     *
     * @return string
     */
    public function getGoVersion()
    {
        return $this->container['go_version'];
    }

    /**
     * Sets go_version
     *
     * @param string $go_version go_version
     *
     * @return $this
     */
    public function setGoVersion($go_version)
    {
        $this->container['go_version'] = $go_version;

        return $this;
    }

    /**
     * Gets os
     *
     * @return string
     */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
     * Sets os
     *
     * @param string $os os
     *
     * @return $this
     */
    public function setOs($os)
    {
        $this->container['os'] = $os;

        return $this;
    }

    /**
     * Gets arch
     *
     * @return string
     */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
     * Sets arch
     *
     * @param string $arch arch
     *
     * @return $this
     */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;

        return $this;
    }

    /**
     * Gets kernel_version
     *
     * @return string
     */
    public function getKernelVersion()
    {
        return $this->container['kernel_version'];
    }

    /**
     * Sets kernel_version
     *
     * @param string $kernel_version kernel_version
     *
     * @return $this
     */
    public function setKernelVersion($kernel_version)
    {
        $this->container['kernel_version'] = $kernel_version;

        return $this;
    }

    /**
     * Gets experimental
     *
     * @return bool
     */
    public function getExperimental()
    {
        return $this->container['experimental'];
    }

    /**
     * Sets experimental
     *
     * @param bool $experimental experimental
     *
     * @return $this
     */
    public function setExperimental($experimental)
    {
        $this->container['experimental'] = $experimental;

        return $this;
    }

    /**
     * Gets build_time
     *
     * @return string
     */
    public function getBuildTime()
    {
        return $this->container['build_time'];
    }

    /**
     * Sets build_time
     *
     * @param string $build_time build_time
     *
     * @return $this
     */
    public function setBuildTime($build_time)
    {
        $this->container['build_time'] = $build_time;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


