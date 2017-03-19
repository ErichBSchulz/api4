
# <a name='top'></a>Entity [:house:](index.md)

Action | Params | Example
------ | ------ | -------
[get](Entity.md/#action_get) | [Params](Entity.md/#get_params) | 
[getActions](Entity.md/#action_getActions) | [Params](Entity.md/#getActions_params) | 

## <a name='action_get'></a>Action Entity.get [:house:](index.md)

Get entities


### <a name='get_params'></a>Params [:house:](index.md)

* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **checkPermissions** (`bool|string|int`: `true`)
  Whether to enforce acl permissions based on the current user.  Setting to FALSE will disable permission checks and override ACLs.
In REST/javascript this cannot be disabled.
* **options** (`array`: `[]`)
  Rarely used options.

## <a name='action_getActions'></a>Action Entity.getActions [:house:](index.md)

Get actions for an entity with a list of accepted params


### <a name='getActions_params'></a>Params [:house:](index.md)

* **checkPermissions** (`??`: `false`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **options** (`array`: `[]`)
  Rarely used options.
###### This file was automatically generated. Do not edit directly.