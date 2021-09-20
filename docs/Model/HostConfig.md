# HostConfig

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**binds** | **string[]** | A list of volume bindings for this container. Each volume binding is a string in one of these forms:  - &#x60;host-src:container-dest&#x60; to bind-mount a host path into the container. Both &#x60;host-src&#x60;, and &#x60;container-dest&#x60; must be an _absolute_ path. - &#x60;host-src:container-dest:ro&#x60; to make the bind mount read-only inside the container. Both &#x60;host-src&#x60;, and &#x60;container-dest&#x60; must be an _absolute_ path. - &#x60;volume-name:container-dest&#x60; to bind-mount a volume managed by a volume driver into the container. &#x60;container-dest&#x60; must be an _absolute_ path. - &#x60;volume-name:container-dest:ro&#x60; to mount the volume read-only inside the container.  &#x60;container-dest&#x60; must be an _absolute_ path. | [optional] 
**container_id_file** | **string** | Path to a file where the container ID is written | [optional] 
**log_config** | [**\Swagger\Client\Model\HostConfigLogConfig**](HostConfigLogConfig.md) |  | [optional] 
**network_mode** | **string** | Network mode to use for this container. Supported standard values are: &#x60;bridge&#x60;, &#x60;host&#x60;, &#x60;none&#x60;, and &#x60;container:&lt;name|id&gt;&#x60;. Any other value is taken as a custom network&#39;s name to which this container should connect to. | [optional] 
**port_bindings** | [**\Swagger\Client\Model\PortMap**](PortMap.md) |  | [optional] 
**restart_policy** | [**\Swagger\Client\Model\RestartPolicy**](RestartPolicy.md) |  | [optional] 
**auto_remove** | **bool** | Automatically remove the container when the container&#39;s process exits. This has no effect if &#x60;RestartPolicy&#x60; is set. | [optional] 
**volume_driver** | **string** | Driver that this container uses to mount volumes. | [optional] 
**volumes_from** | **string[]** | A list of volumes to inherit from another container, specified in the form &#x60;&lt;container name&gt;[:&lt;ro|rw&gt;]&#x60;. | [optional] 
**mounts** | [**\Swagger\Client\Model\Mount[]**](Mount.md) | Specification for mounts to be added to the container. | [optional] 
**cap_add** | **string[]** | A list of kernel capabilities to add to the container. | [optional] 
**cap_drop** | **string[]** | A list of kernel capabilities to drop from the container. | [optional] 
**dns** | **string[]** | A list of DNS servers for the container to use. | [optional] 
**dns_options** | **string[]** | A list of DNS options. | [optional] 
**dns_search** | **string[]** | A list of DNS search domains. | [optional] 
**extra_hosts** | **string[]** | A list of hostnames/IP mappings to add to the container&#39;s &#x60;/etc/hosts&#x60; file. Specified in the form &#x60;[\&quot;hostname:IP\&quot;]&#x60;. | [optional] 
**group_add** | **string[]** | A list of additional groups that the container process will run as. | [optional] 
**ipc_mode** | **string** | IPC sharing mode for the container. Possible values are:  - &#x60;\&quot;none\&quot;&#x60;: own private IPC namespace, with /dev/shm not mounted - &#x60;\&quot;private\&quot;&#x60;: own private IPC namespace - &#x60;\&quot;shareable\&quot;&#x60;: own private IPC namespace, with a possibility to share it with other containers - &#x60;\&quot;container:&lt;name|id&gt;\&quot;&#x60;: join another (shareable) container&#39;s IPC namespace - &#x60;\&quot;host\&quot;&#x60;: use the host system&#39;s IPC namespace  If not specified, daemon default is used, which can either be &#x60;\&quot;private\&quot;&#x60; or &#x60;\&quot;shareable\&quot;&#x60;, depending on daemon version and configuration. | [optional] 
**cgroup** | **string** | Cgroup to use for the container. | [optional] 
**links** | **string[]** | A list of links for the container in the form &#x60;container_name:alias&#x60;. | [optional] 
**oom_score_adj** | **int** | An integer value containing the score given to the container in order to tune OOM killer preferences. | [optional] 
**pid_mode** | **string** | Set the PID (Process) Namespace mode for the container. It can be either:  - &#x60;\&quot;container:&lt;name|id&gt;\&quot;&#x60;: joins another container&#39;s PID namespace - &#x60;\&quot;host\&quot;&#x60;: use the host&#39;s PID namespace inside the container | [optional] 
**privileged** | **bool** | Gives the container full access to the host. | [optional] 
**publish_all_ports** | **bool** | Allocates an ephemeral host port for all of a container&#39;s exposed ports.  Ports are de-allocated when the container stops and allocated when the container starts. The allocated port might be changed when restarting the container.  The port is selected from the ephemeral port range that depends on the kernel. For example, on Linux the range is defined by &#x60;/proc/sys/net/ipv4/ip_local_port_range&#x60;. | [optional] 
**readonly_rootfs** | **bool** | Mount the container&#39;s root filesystem as read only. | [optional] 
**security_opt** | **string[]** | A list of string values to customize labels for MLS systems, such as SELinux. | [optional] 
**storage_opt** | **map[string,string]** | Storage driver options for this container, in the form &#x60;{\&quot;size\&quot;: \&quot;120G\&quot;}&#x60;. | [optional] 
**tmpfs** | **map[string,string]** | A map of container directories which should be replaced by tmpfs mounts, and their corresponding mount options. For example: &#x60;{ \&quot;/run\&quot;: \&quot;rw,noexec,nosuid,size&#x3D;65536k\&quot; }&#x60;. | [optional] 
**uts_mode** | **string** | UTS namespace to use for the container. | [optional] 
**userns_mode** | **string** | Sets the usernamespace mode for the container when usernamespace remapping option is enabled. | [optional] 
**shm_size** | **int** | Size of &#x60;/dev/shm&#x60; in bytes. If omitted, the system uses 64MB. | [optional] 
**sysctls** | **map[string,string]** | A list of kernel parameters (sysctls) to set in the container. For example: &#x60;{\&quot;net.ipv4.ip_forward\&quot;: \&quot;1\&quot;}&#x60; | [optional] 
**runtime** | **string** | Runtime to use with this container. | [optional] 
**console_size** | **int[]** | Initial console size, as an &#x60;[height, width]&#x60; array. (Windows only) | [optional] 
**isolation** | **string** | Isolation technology of the container. (Windows only) | [optional] 
**masked_paths** | **string[]** | The list of paths to be masked inside the container (this overrides the default set of paths) | [optional] 
**readonly_paths** | **string[]** | The list of paths to be set as read-only inside the container (this overrides the default set of paths) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


