<?php
/**
 * ExecConfig
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
 * The Engine API is an HTTP API served by Docker Engine. It is the API the Docker client uses to communicate with the Engine, so everything the Docker client can do can be done with the API.  Most of the client's commands map directly to API endpoints (e.g. `docker ps` is `GET /containers/json`). The notable exception is running containers, which consists of several API calls.  # Errors  The API uses standard HTTP status codes to indicate the success or failure of the API call. The body of the response will be JSON in the following format:  ``` {   \"message\": \"page not found\" } ```  # Versioning  The API is usually changed in each release, so API calls are versioned to ensure that clients don't break. To lock to a specific version of the API, you prefix the URL with its version, for example, call `/v1.30/info` to use the v1.30 version of the `/info` endpoint. If the API version specified in the URL is not supported by the daemon, a HTTP `400 Bad Request` error message is returned.  If you omit the version-prefix, the current version of the API (v1.39) is used. For example, calling `/info` is the same as calling `/v1.39/info`. Using the API without a version-prefix is deprecated and will be removed in a future release.  Engine releases in the near future should support this version of the API, so your client will continue to work even if it is talking to a newer Engine.  The API uses an open schema model, which means server may add extra properties to responses. Likewise, the server will ignore any extra query parameters and request body properties. When you write clients, you need to ignore additional properties in responses to ensure they do not break when talking to newer daemons.   # Authentication  Authentication for registries is handled client side. The client has to send authentication details to various endpoints that need to communicate with registries, such as `POST /images/(name)/push`. These are sent as `X-Registry-Auth` header as a [base64url encoded](https://tools.ietf.org/html/rfc4648#section-5) (JSON) string with the following structure:  ``` {   \"username\": \"string\",   \"password\": \"string\",   \"email\": \"string\",   \"serveraddress\": \"string\" } ```  The `serveraddress` is a domain/IP without a protocol. Throughout this structure, double quotes are required.  If you have already got an identity token from the [`/auth` endpoint](#operation/SystemAuth), you can just pass this instead of credentials:  ``` {   \"identitytoken\": \"9cbaf023786cd7...\" } ```
 *
 * OpenAPI spec version: 1.39
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
 * ExecConfig Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExecConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'execConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'attach_stdin' => 'bool',
        'attach_stdout' => 'bool',
        'attach_stderr' => 'bool',
        'detach_keys' => 'string',
        'tty' => 'bool',
        'env' => 'string[]',
        'cmd' => 'string[]',
        'privileged' => 'bool',
        'user' => 'string',
        'working_dir' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'attach_stdin' => null,
        'attach_stdout' => null,
        'attach_stderr' => null,
        'detach_keys' => null,
        'tty' => null,
        'env' => null,
        'cmd' => null,
        'privileged' => null,
        'user' => null,
        'working_dir' => null
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
        'attach_stdin' => 'AttachStdin',
        'attach_stdout' => 'AttachStdout',
        'attach_stderr' => 'AttachStderr',
        'detach_keys' => 'DetachKeys',
        'tty' => 'Tty',
        'env' => 'Env',
        'cmd' => 'Cmd',
        'privileged' => 'Privileged',
        'user' => 'User',
        'working_dir' => 'WorkingDir'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attach_stdin' => 'setAttachStdin',
        'attach_stdout' => 'setAttachStdout',
        'attach_stderr' => 'setAttachStderr',
        'detach_keys' => 'setDetachKeys',
        'tty' => 'setTty',
        'env' => 'setEnv',
        'cmd' => 'setCmd',
        'privileged' => 'setPrivileged',
        'user' => 'setUser',
        'working_dir' => 'setWorkingDir'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attach_stdin' => 'getAttachStdin',
        'attach_stdout' => 'getAttachStdout',
        'attach_stderr' => 'getAttachStderr',
        'detach_keys' => 'getDetachKeys',
        'tty' => 'getTty',
        'env' => 'getEnv',
        'cmd' => 'getCmd',
        'privileged' => 'getPrivileged',
        'user' => 'getUser',
        'working_dir' => 'getWorkingDir'
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
        $this->container['attach_stdin'] = isset($data['attach_stdin']) ? $data['attach_stdin'] : null;
        $this->container['attach_stdout'] = isset($data['attach_stdout']) ? $data['attach_stdout'] : null;
        $this->container['attach_stderr'] = isset($data['attach_stderr']) ? $data['attach_stderr'] : null;
        $this->container['detach_keys'] = isset($data['detach_keys']) ? $data['detach_keys'] : null;
        $this->container['tty'] = isset($data['tty']) ? $data['tty'] : null;
        $this->container['env'] = isset($data['env']) ? $data['env'] : null;
        $this->container['cmd'] = isset($data['cmd']) ? $data['cmd'] : null;
        $this->container['privileged'] = isset($data['privileged']) ? $data['privileged'] : false;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['working_dir'] = isset($data['working_dir']) ? $data['working_dir'] : null;
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
     * Gets attach_stdin
     *
     * @return bool
     */
    public function getAttachStdin()
    {
        return $this->container['attach_stdin'];
    }

    /**
     * Sets attach_stdin
     *
     * @param bool $attach_stdin Attach to `stdin` of the exec command.
     *
     * @return $this
     */
    public function setAttachStdin($attach_stdin)
    {
        $this->container['attach_stdin'] = $attach_stdin;

        return $this;
    }

    /**
     * Gets attach_stdout
     *
     * @return bool
     */
    public function getAttachStdout()
    {
        return $this->container['attach_stdout'];
    }

    /**
     * Sets attach_stdout
     *
     * @param bool $attach_stdout Attach to `stdout` of the exec command.
     *
     * @return $this
     */
    public function setAttachStdout($attach_stdout)
    {
        $this->container['attach_stdout'] = $attach_stdout;

        return $this;
    }

    /**
     * Gets attach_stderr
     *
     * @return bool
     */
    public function getAttachStderr()
    {
        return $this->container['attach_stderr'];
    }

    /**
     * Sets attach_stderr
     *
     * @param bool $attach_stderr Attach to `stderr` of the exec command.
     *
     * @return $this
     */
    public function setAttachStderr($attach_stderr)
    {
        $this->container['attach_stderr'] = $attach_stderr;

        return $this;
    }

    /**
     * Gets detach_keys
     *
     * @return string
     */
    public function getDetachKeys()
    {
        return $this->container['detach_keys'];
    }

    /**
     * Sets detach_keys
     *
     * @param string $detach_keys Override the key sequence for detaching a container. Format is a single character `[a-Z]` or `ctrl-<value>` where `<value>` is one of: `a-z`, `@`, `^`, `[`, `,` or `_`.
     *
     * @return $this
     */
    public function setDetachKeys($detach_keys)
    {
        $this->container['detach_keys'] = $detach_keys;

        return $this;
    }

    /**
     * Gets tty
     *
     * @return bool
     */
    public function getTty()
    {
        return $this->container['tty'];
    }

    /**
     * Sets tty
     *
     * @param bool $tty Allocate a pseudo-TTY.
     *
     * @return $this
     */
    public function setTty($tty)
    {
        $this->container['tty'] = $tty;

        return $this;
    }

    /**
     * Gets env
     *
     * @return string[]
     */
    public function getEnv()
    {
        return $this->container['env'];
    }

    /**
     * Sets env
     *
     * @param string[] $env A list of environment variables in the form `[\"VAR=value\", ...]`.
     *
     * @return $this
     */
    public function setEnv($env)
    {
        $this->container['env'] = $env;

        return $this;
    }

    /**
     * Gets cmd
     *
     * @return string[]
     */
    public function getCmd()
    {
        return $this->container['cmd'];
    }

    /**
     * Sets cmd
     *
     * @param string[] $cmd Command to run, as a string or array of strings.
     *
     * @return $this
     */
    public function setCmd($cmd)
    {
        $this->container['cmd'] = $cmd;

        return $this;
    }

    /**
     * Gets privileged
     *
     * @return bool
     */
    public function getPrivileged()
    {
        return $this->container['privileged'];
    }

    /**
     * Sets privileged
     *
     * @param bool $privileged Runs the exec process with extended privileges.
     *
     * @return $this
     */
    public function setPrivileged($privileged)
    {
        $this->container['privileged'] = $privileged;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string $user The user, and optionally, group to run the exec process inside the container. Format is one of: `user`, `user:group`, `uid`, or `uid:gid`.
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets working_dir
     *
     * @return string
     */
    public function getWorkingDir()
    {
        return $this->container['working_dir'];
    }

    /**
     * Sets working_dir
     *
     * @param string $working_dir The working directory for the exec process inside the container.
     *
     * @return $this
     */
    public function setWorkingDir($working_dir)
    {
        $this->container['working_dir'] = $working_dir;

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


