<?php
/**
 * ContainerConfig
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
 * ContainerConfig Class Doc Comment
 *
 * @category Class
 * @description Configuration for a container that is portable between hosts
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContainerConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContainerConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'hostname' => 'string',
        'domainname' => 'string',
        'user' => 'string',
        'attach_stdin' => 'bool',
        'attach_stdout' => 'bool',
        'attach_stderr' => 'bool',
        'exposed_ports' => 'map[string,object]',
        'tty' => 'bool',
        'open_stdin' => 'bool',
        'stdin_once' => 'bool',
        'env' => 'string[]',
        'cmd' => 'string[]',
        'healthcheck' => '\Swagger\Client\Model\HealthConfig',
        'args_escaped' => 'bool',
        'image' => 'string',
        'volumes' => 'map[string,object]',
        'working_dir' => 'string',
        'entrypoint' => 'string[]',
        'network_disabled' => 'bool',
        'mac_address' => 'string',
        'on_build' => 'string[]',
        'labels' => 'map[string,string]',
        'stop_signal' => 'string',
        'stop_timeout' => 'int',
        'shell' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'hostname' => null,
        'domainname' => null,
        'user' => null,
        'attach_stdin' => null,
        'attach_stdout' => null,
        'attach_stderr' => null,
        'exposed_ports' => null,
        'tty' => null,
        'open_stdin' => null,
        'stdin_once' => null,
        'env' => null,
        'cmd' => null,
        'healthcheck' => null,
        'args_escaped' => null,
        'image' => null,
        'volumes' => null,
        'working_dir' => null,
        'entrypoint' => null,
        'network_disabled' => null,
        'mac_address' => null,
        'on_build' => null,
        'labels' => null,
        'stop_signal' => null,
        'stop_timeout' => null,
        'shell' => null
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
        'hostname' => 'Hostname',
        'domainname' => 'Domainname',
        'user' => 'User',
        'attach_stdin' => 'AttachStdin',
        'attach_stdout' => 'AttachStdout',
        'attach_stderr' => 'AttachStderr',
        'exposed_ports' => 'ExposedPorts',
        'tty' => 'Tty',
        'open_stdin' => 'OpenStdin',
        'stdin_once' => 'StdinOnce',
        'env' => 'Env',
        'cmd' => 'Cmd',
        'healthcheck' => 'Healthcheck',
        'args_escaped' => 'ArgsEscaped',
        'image' => 'Image',
        'volumes' => 'Volumes',
        'working_dir' => 'WorkingDir',
        'entrypoint' => 'Entrypoint',
        'network_disabled' => 'NetworkDisabled',
        'mac_address' => 'MacAddress',
        'on_build' => 'OnBuild',
        'labels' => 'Labels',
        'stop_signal' => 'StopSignal',
        'stop_timeout' => 'StopTimeout',
        'shell' => 'Shell'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hostname' => 'setHostname',
        'domainname' => 'setDomainname',
        'user' => 'setUser',
        'attach_stdin' => 'setAttachStdin',
        'attach_stdout' => 'setAttachStdout',
        'attach_stderr' => 'setAttachStderr',
        'exposed_ports' => 'setExposedPorts',
        'tty' => 'setTty',
        'open_stdin' => 'setOpenStdin',
        'stdin_once' => 'setStdinOnce',
        'env' => 'setEnv',
        'cmd' => 'setCmd',
        'healthcheck' => 'setHealthcheck',
        'args_escaped' => 'setArgsEscaped',
        'image' => 'setImage',
        'volumes' => 'setVolumes',
        'working_dir' => 'setWorkingDir',
        'entrypoint' => 'setEntrypoint',
        'network_disabled' => 'setNetworkDisabled',
        'mac_address' => 'setMacAddress',
        'on_build' => 'setOnBuild',
        'labels' => 'setLabels',
        'stop_signal' => 'setStopSignal',
        'stop_timeout' => 'setStopTimeout',
        'shell' => 'setShell'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hostname' => 'getHostname',
        'domainname' => 'getDomainname',
        'user' => 'getUser',
        'attach_stdin' => 'getAttachStdin',
        'attach_stdout' => 'getAttachStdout',
        'attach_stderr' => 'getAttachStderr',
        'exposed_ports' => 'getExposedPorts',
        'tty' => 'getTty',
        'open_stdin' => 'getOpenStdin',
        'stdin_once' => 'getStdinOnce',
        'env' => 'getEnv',
        'cmd' => 'getCmd',
        'healthcheck' => 'getHealthcheck',
        'args_escaped' => 'getArgsEscaped',
        'image' => 'getImage',
        'volumes' => 'getVolumes',
        'working_dir' => 'getWorkingDir',
        'entrypoint' => 'getEntrypoint',
        'network_disabled' => 'getNetworkDisabled',
        'mac_address' => 'getMacAddress',
        'on_build' => 'getOnBuild',
        'labels' => 'getLabels',
        'stop_signal' => 'getStopSignal',
        'stop_timeout' => 'getStopTimeout',
        'shell' => 'getShell'
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
        $this->container['hostname'] = isset($data['hostname']) ? $data['hostname'] : null;
        $this->container['domainname'] = isset($data['domainname']) ? $data['domainname'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['attach_stdin'] = isset($data['attach_stdin']) ? $data['attach_stdin'] : false;
        $this->container['attach_stdout'] = isset($data['attach_stdout']) ? $data['attach_stdout'] : true;
        $this->container['attach_stderr'] = isset($data['attach_stderr']) ? $data['attach_stderr'] : true;
        $this->container['exposed_ports'] = isset($data['exposed_ports']) ? $data['exposed_ports'] : null;
        $this->container['tty'] = isset($data['tty']) ? $data['tty'] : false;
        $this->container['open_stdin'] = isset($data['open_stdin']) ? $data['open_stdin'] : false;
        $this->container['stdin_once'] = isset($data['stdin_once']) ? $data['stdin_once'] : false;
        $this->container['env'] = isset($data['env']) ? $data['env'] : null;
        $this->container['cmd'] = isset($data['cmd']) ? $data['cmd'] : null;
        $this->container['healthcheck'] = isset($data['healthcheck']) ? $data['healthcheck'] : null;
        $this->container['args_escaped'] = isset($data['args_escaped']) ? $data['args_escaped'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['volumes'] = isset($data['volumes']) ? $data['volumes'] : null;
        $this->container['working_dir'] = isset($data['working_dir']) ? $data['working_dir'] : null;
        $this->container['entrypoint'] = isset($data['entrypoint']) ? $data['entrypoint'] : null;
        $this->container['network_disabled'] = isset($data['network_disabled']) ? $data['network_disabled'] : null;
        $this->container['mac_address'] = isset($data['mac_address']) ? $data['mac_address'] : null;
        $this->container['on_build'] = isset($data['on_build']) ? $data['on_build'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['stop_signal'] = isset($data['stop_signal']) ? $data['stop_signal'] : 'SIGTERM';
        $this->container['stop_timeout'] = isset($data['stop_timeout']) ? $data['stop_timeout'] : null;
        $this->container['shell'] = isset($data['shell']) ? $data['shell'] : null;
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
     * Gets hostname
     *
     * @return string
     */
    public function getHostname()
    {
        return $this->container['hostname'];
    }

    /**
     * Sets hostname
     *
     * @param string $hostname The hostname to use for the container, as a valid RFC 1123 hostname.
     *
     * @return $this
     */
    public function setHostname($hostname)
    {
        $this->container['hostname'] = $hostname;

        return $this;
    }

    /**
     * Gets domainname
     *
     * @return string
     */
    public function getDomainname()
    {
        return $this->container['domainname'];
    }

    /**
     * Sets domainname
     *
     * @param string $domainname The domain name to use for the container.
     *
     * @return $this
     */
    public function setDomainname($domainname)
    {
        $this->container['domainname'] = $domainname;

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
     * @param string $user The user that commands are run as inside the container.
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
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
     * @param bool $attach_stdin Whether to attach to `stdin`.
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
     * @param bool $attach_stdout Whether to attach to `stdout`.
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
     * @param bool $attach_stderr Whether to attach to `stderr`.
     *
     * @return $this
     */
    public function setAttachStderr($attach_stderr)
    {
        $this->container['attach_stderr'] = $attach_stderr;

        return $this;
    }

    /**
     * Gets exposed_ports
     *
     * @return map[string,object]
     */
    public function getExposedPorts()
    {
        return $this->container['exposed_ports'];
    }

    /**
     * Sets exposed_ports
     *
     * @param map[string,object] $exposed_ports An object mapping ports to an empty object in the form:  `{\"<port>/<tcp|udp|sctp>\": {}}`
     *
     * @return $this
     */
    public function setExposedPorts($exposed_ports)
    {
        $this->container['exposed_ports'] = $exposed_ports;

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
     * @param bool $tty Attach standard streams to a TTY, including `stdin` if it is not closed.
     *
     * @return $this
     */
    public function setTty($tty)
    {
        $this->container['tty'] = $tty;

        return $this;
    }

    /**
     * Gets open_stdin
     *
     * @return bool
     */
    public function getOpenStdin()
    {
        return $this->container['open_stdin'];
    }

    /**
     * Sets open_stdin
     *
     * @param bool $open_stdin Open `stdin`
     *
     * @return $this
     */
    public function setOpenStdin($open_stdin)
    {
        $this->container['open_stdin'] = $open_stdin;

        return $this;
    }

    /**
     * Gets stdin_once
     *
     * @return bool
     */
    public function getStdinOnce()
    {
        return $this->container['stdin_once'];
    }

    /**
     * Sets stdin_once
     *
     * @param bool $stdin_once Close `stdin` after one attached client disconnects
     *
     * @return $this
     */
    public function setStdinOnce($stdin_once)
    {
        $this->container['stdin_once'] = $stdin_once;

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
     * @param string[] $env A list of environment variables to set inside the container in the form `[\"VAR=value\", ...]`. A variable without `=` is removed from the environment, rather than to have an empty value.
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
     * @param string[] $cmd Command to run specified as a string or an array of strings.
     *
     * @return $this
     */
    public function setCmd($cmd)
    {
        $this->container['cmd'] = $cmd;

        return $this;
    }

    /**
     * Gets healthcheck
     *
     * @return \Swagger\Client\Model\HealthConfig
     */
    public function getHealthcheck()
    {
        return $this->container['healthcheck'];
    }

    /**
     * Sets healthcheck
     *
     * @param \Swagger\Client\Model\HealthConfig $healthcheck healthcheck
     *
     * @return $this
     */
    public function setHealthcheck($healthcheck)
    {
        $this->container['healthcheck'] = $healthcheck;

        return $this;
    }

    /**
     * Gets args_escaped
     *
     * @return bool
     */
    public function getArgsEscaped()
    {
        return $this->container['args_escaped'];
    }

    /**
     * Sets args_escaped
     *
     * @param bool $args_escaped Command is already escaped (Windows only)
     *
     * @return $this
     */
    public function setArgsEscaped($args_escaped)
    {
        $this->container['args_escaped'] = $args_escaped;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string $image The name of the image to use when creating the container/
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets volumes
     *
     * @return map[string,object]
     */
    public function getVolumes()
    {
        return $this->container['volumes'];
    }

    /**
     * Sets volumes
     *
     * @param map[string,object] $volumes An object mapping mount point paths inside the container to empty objects.
     *
     * @return $this
     */
    public function setVolumes($volumes)
    {
        $this->container['volumes'] = $volumes;

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
     * @param string $working_dir The working directory for commands to run in.
     *
     * @return $this
     */
    public function setWorkingDir($working_dir)
    {
        $this->container['working_dir'] = $working_dir;

        return $this;
    }

    /**
     * Gets entrypoint
     *
     * @return string[]
     */
    public function getEntrypoint()
    {
        return $this->container['entrypoint'];
    }

    /**
     * Sets entrypoint
     *
     * @param string[] $entrypoint The entry point for the container as a string or an array of strings.  If the array consists of exactly one empty string (`[\"\"]`) then the entry point is reset to system default (i.e., the entry point used by docker when there is no `ENTRYPOINT` instruction in the `Dockerfile`).
     *
     * @return $this
     */
    public function setEntrypoint($entrypoint)
    {
        $this->container['entrypoint'] = $entrypoint;

        return $this;
    }

    /**
     * Gets network_disabled
     *
     * @return bool
     */
    public function getNetworkDisabled()
    {
        return $this->container['network_disabled'];
    }

    /**
     * Sets network_disabled
     *
     * @param bool $network_disabled Disable networking for the container.
     *
     * @return $this
     */
    public function setNetworkDisabled($network_disabled)
    {
        $this->container['network_disabled'] = $network_disabled;

        return $this;
    }

    /**
     * Gets mac_address
     *
     * @return string
     */
    public function getMacAddress()
    {
        return $this->container['mac_address'];
    }

    /**
     * Sets mac_address
     *
     * @param string $mac_address MAC address of the container.
     *
     * @return $this
     */
    public function setMacAddress($mac_address)
    {
        $this->container['mac_address'] = $mac_address;

        return $this;
    }

    /**
     * Gets on_build
     *
     * @return string[]
     */
    public function getOnBuild()
    {
        return $this->container['on_build'];
    }

    /**
     * Sets on_build
     *
     * @param string[] $on_build `ONBUILD` metadata that were defined in the image's `Dockerfile`.
     *
     * @return $this
     */
    public function setOnBuild($on_build)
    {
        $this->container['on_build'] = $on_build;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return map[string,string]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param map[string,string] $labels User-defined key/value metadata.
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets stop_signal
     *
     * @return string
     */
    public function getStopSignal()
    {
        return $this->container['stop_signal'];
    }

    /**
     * Sets stop_signal
     *
     * @param string $stop_signal Signal to stop a container as a string or unsigned integer.
     *
     * @return $this
     */
    public function setStopSignal($stop_signal)
    {
        $this->container['stop_signal'] = $stop_signal;

        return $this;
    }

    /**
     * Gets stop_timeout
     *
     * @return int
     */
    public function getStopTimeout()
    {
        return $this->container['stop_timeout'];
    }

    /**
     * Sets stop_timeout
     *
     * @param int $stop_timeout Timeout to stop a container in seconds.
     *
     * @return $this
     */
    public function setStopTimeout($stop_timeout)
    {
        $this->container['stop_timeout'] = $stop_timeout;

        return $this;
    }

    /**
     * Gets shell
     *
     * @return string[]
     */
    public function getShell()
    {
        return $this->container['shell'];
    }

    /**
     * Sets shell
     *
     * @param string[] $shell Shell for when `RUN`, `CMD`, and `ENTRYPOINT` uses a shell.
     *
     * @return $this
     */
    public function setShell($shell)
    {
        $this->container['shell'] = $shell;

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


