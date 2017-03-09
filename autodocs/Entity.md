#<a name='top'></a>Entity

##<a name='action_get'></a>Action Entity.get

Get entities: 

##<a name='action_get_params'></a>Params

* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **checkPermissions** (`bool|string|int`: `true`)
  Whether to enforce acl permissions based on the current user.
* **options** (`array`: `[]`)
  Rarely used options.
### Entity.get hook calls: 
### Entity.get events
##<a name='action_getActions'></a>Action Entity.getActions

Get actions for an entity with a list of accepted params: 

##<a name='action_getActions_params'></a>Params

* **checkPermissions** (`??`: `false`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **options** (`array`: `[]`)
  Rarely used options.
### Entity.getActions hook calls: 
### Entity.getActions events
###### This file was automatically generated. Do not edit directly.