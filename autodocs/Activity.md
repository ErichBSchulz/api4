
#<a name='top'></a>Activity [:house:](index.md)

Action | Params | Example
------ | ------ | -------
[create](Activity.md/#action_create) | [Params](Activity.md/#create_params) | [[Params](Activity.md/#create_example_params)] [[Result](Activity.md/#create_example_result)] [[Events](Activity.md/#create_example_events)] [[Hooks](Activity.md/#create_example_hook_calls)]
[delete](Activity.md/#action_delete) | [Params](Activity.md/#delete_params) | [[Params](Activity.md/#delete_example_params)] [[Result](Activity.md/#delete_example_result)] [[Events](Activity.md/#delete_example_events)] [[Hooks](Activity.md/#delete_example_hook_calls)]
[get](Activity.md/#action_get) | [Params](Activity.md/#get_params) | [[Params](Activity.md/#get_example_params)] [[Result](Activity.md/#get_example_result)] [[Events](Activity.md/#get_example_events)] [[Hooks](Activity.md/#get_example_hook_calls)]
[getActions](Activity.md/#action_getActions) | [Params](Activity.md/#getActions_params) | 
[getFields](Activity.md/#action_getFields) | [Params](Activity.md/#getFields_params) | 
[update](Activity.md/#action_update) | [Params](Activity.md/#update_params) | 

##<a name='action_create'></a>Action Activity.create [:house:](index.md)

Base class for all create actions.


###<a name='create_params'></a>Params [:house:](index.md)

* **values** (`array`: `[]`)
  Field values to set
* **bao** (`object`: `null`)
  Bao object based on the entity
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **checkPermissions** (`bool|string|int`: `true`)
  Whether to enforce acl permissions based on the current user.  Setting to FALSE will disable permission checks and override ACLs.
In REST/javascript this cannot be disabled.
* **options** (`array`: `[]`)
  Rarely used options.

##<a name='create_example'></a>Example [:house:](index.md)

This is the example derived from the unit tests. A log
            of hook calls and events is below the API request and response.

###<a name='create_example_params'></a>Params [:house:](index.md)

```
{
    "Values": {
        "subject": "unit testing",
        "source_contact_id": "1486"
    }
}
```

###<a name='create_example_result'></a>Result [:house:](index.md)

```
{
    "id": 3029,
    "source_record_id": null,
    "activity_type_id": null,
    "subject": "unit testing",
    "activity_date_time": null,
    "duration": null,
    "location": null,
    "phone_id": null,
    "phone_number": null,
    "details": null,
    "status_id": 1,
    "priority_id": 2,
    "parent_id": null,
    "is_test": null,
    "medium_id": null,
    "is_auto": null,
    "relationship_id": null,
    "is_current_revision": null,
    "original_id": null,
    "result": null,
    "is_deleted": null,
    "campaign_id": null,
    "engagement_level": null,
    "weight": null,
    "is_star": null
}
```

###<a name='create_example_events'></a>Events [:house:](index.md)

* [api.authorize - Activity::create](Activity.md/#create_example_events_0)
* [api.prepare - Activity::create](Activity.md/#create_example_events_1)
* [api.respond - Activity::create](Activity.md/#create_example_events_2)

####<a name='create_example_events_0'></a>api.authorize - Activity::create [:house:](index.md)

> [Civi\API\Event\AuthorizeEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/AuthorizeEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `authorize()`, `isAuthorized()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='create_example_event_params_0'></a>API Request params [:house:](index.md)

*Methods*:`__construct()`, `setValue()`, `_run()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "values": {
        "subject": "unit testing",
        "source_contact_id": "1486"
    },
    "bao": {
        "id": null,
        "source_record_id": null,
        "activity_type_id": null,
        "subject": null,
        "activity_date_time": null,
        "duration": null,
        "location": null,
        "phone_id": null,
        "phone_number": null,
        "details": null,
        "status_id": null,
        "priority_id": null,
        "parent_id": null,
        "is_test": null,
        "medium_id": null,
        "is_auto": null,
        "relationship_id": null,
        "is_current_revision": null,
        "original_id": null,
        "result": null,
        "is_deleted": null,
        "campaign_id": null,
        "engagement_level": null,
        "weight": null,
        "is_star": null,
        "_DB_DataObject_version": "1.8.12",
        "__table": "civicrm_activity",
        "N": 0,
        "_database_dsn": "",
        "_database_dsn_md5": "97f7f719d00a15909bb4f8878bafc59b",
        "_database": "dmastertes_migqg",
        "_query": {
            "condition": "",
            "group_by": "",
            "order_by": "",
            "having": "",
            "limit_start": "",
            "limit_count": "",
            "data_select": "*"
        },
        "_DB_resultid": null,
        "_resultFields": false,
        "_link_loaded": false,
        "_join": "",
        "_lastError": false
    },
    "version": 4,
    "chain": [

    ],
    "checkPermissions": false,
    "options": [

    ]
}
```


####<a name='create_example_events_1'></a>api.prepare - Activity::create [:house:](index.md)

> [Civi\API\Event\PrepareEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/PrepareEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `setApiRequest()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='create_example_event_params_1'></a>API Request params [:house:](index.md)

*Methods*:`__construct()`, `setValue()`, `_run()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "values": {
        "subject": "unit testing",
        "source_contact_id": "1486"
    },
    "bao": {
        "id": null,
        "source_record_id": null,
        "activity_type_id": null,
        "subject": null,
        "activity_date_time": null,
        "duration": null,
        "location": null,
        "phone_id": null,
        "phone_number": null,
        "details": null,
        "status_id": null,
        "priority_id": null,
        "parent_id": null,
        "is_test": null,
        "medium_id": null,
        "is_auto": null,
        "relationship_id": null,
        "is_current_revision": null,
        "original_id": null,
        "result": null,
        "is_deleted": null,
        "campaign_id": null,
        "engagement_level": null,
        "weight": null,
        "is_star": null,
        "_DB_DataObject_version": "1.8.12",
        "__table": "civicrm_activity",
        "N": 0,
        "_database_dsn": "",
        "_database_dsn_md5": "97f7f719d00a15909bb4f8878bafc59b",
        "_database": "dmastertes_migqg",
        "_query": {
            "condition": "",
            "group_by": "",
            "order_by": "",
            "having": "",
            "limit_start": "",
            "limit_count": "",
            "data_select": "*"
        },
        "_DB_resultid": null,
        "_resultFields": false,
        "_link_loaded": false,
        "_join": "",
        "_lastError": false
    },
    "version": 4,
    "chain": [

    ],
    "checkPermissions": false,
    "options": [

    ]
}
```


####<a name='create_example_events_2'></a>api.respond - Activity::create [:house:](index.md)

> [Civi\API\Event\RespondEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/RespondEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `getResponse()`, `setResponse()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='create_example_event_params_2'></a>API Request params [:house:](index.md)

*Methods*:`__construct()`, `setValue()`, `_run()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "values": {
        "subject": "unit testing",
        "source_contact_id": "1486"
    },
    "bao": {
        "id": null,
        "source_record_id": null,
        "activity_type_id": null,
        "subject": null,
        "activity_date_time": null,
        "duration": null,
        "location": null,
        "phone_id": null,
        "phone_number": null,
        "details": null,
        "status_id": null,
        "priority_id": null,
        "parent_id": null,
        "is_test": null,
        "medium_id": null,
        "is_auto": null,
        "relationship_id": null,
        "is_current_revision": null,
        "original_id": null,
        "result": null,
        "is_deleted": null,
        "campaign_id": null,
        "engagement_level": null,
        "weight": null,
        "is_star": null,
        "_DB_DataObject_version": "1.8.12",
        "__table": "civicrm_activity",
        "N": 0,
        "_database_dsn": "",
        "_database_dsn_md5": "97f7f719d00a15909bb4f8878bafc59b",
        "_database": "dmastertes_migqg",
        "_query": {
            "condition": "",
            "group_by": "",
            "order_by": "",
            "having": "",
            "limit_start": "",
            "limit_count": "",
            "data_select": "*"
        },
        "_DB_resultid": null,
        "_resultFields": false,
        "_link_loaded": false,
        "_join": "",
        "_lastError": false
    },
    "version": 4,
    "chain": [

    ],
    "checkPermissions": false,
    "options": [

    ]
}
```


###<a name='create_example_hook_calls'></a>Hook calls [:house:](index.md)

* [civicrm_apiWrappers](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_apiWrappers/) 1
* [civicrm_optionValues](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_optionValues/) 3
* [civicrm_fieldOptions](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_fieldOptions/) 1
* [civicrm_pre](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_pre/) 1
* [civicrm_postSave_civicrm_activity](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_postSave_civicrm_activity/) 1
* [civicrm_postSave_civicrm_activity_contact](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_postSave_civicrm_activity_contact/) 1
* [civicrm_postSave_civicrm_log](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_postSave_civicrm_log/) 1
* [civicrm_permission_check](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_permission_check/) 1
* [civicrm_recent](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_recent/) 1
* [civicrm_post](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_post/) 1

##<a name='action_delete'></a>Action Activity.delete [:house:](index.md)

"delete" inherits all the abilities of "get"


###<a name='delete_params'></a>Params [:house:](index.md)

* **select** (`array`: `[]`)
  Fields to return. Defaults to all non-custom fields.
* **where** (`array`: `[]`)
  Array of conditions keyed by field.  $example->addWhere('contact_type', 'IN', array('Individual', 'Household'))
* **orderBy** (`array`: `[]`)
  Array of field(s) to use in ordering the results  Defaults to id ASC
$example->addOrderBy('sort_name', 'ASC')
* **limit** (`int`: `0`)
  Maximum number of results to return.  Defaults to unlimited.
* **offset** (`??`: `0`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **checkPermissions** (`bool|string|int`: `true`)
  Whether to enforce acl permissions based on the current user.  Setting to FALSE will disable permission checks and override ACLs.
In REST/javascript this cannot be disabled.
* **options** (`array`: `[]`)
  Rarely used options.

##<a name='delete_example'></a>Example [:house:](index.md)

This is the example derived from the unit tests. A log
            of hook calls and events is below the API request and response.

###<a name='delete_example_params'></a>Params [:house:](index.md)

```
{
    "Clause": [
        "id",
        "=",
        3029
    ]
}
```

###<a name='delete_example_result'></a>Result [:house:](index.md)

```
{
    "0": "3029"
}
```

###<a name='delete_example_events'></a>Events [:house:](index.md)

* [api.authorize - Activity::delete](Activity.md/#delete_example_events_0)
* [api.prepare - Activity::delete](Activity.md/#delete_example_events_1)
* [api.authorize - Activity::getFields](Activity.md/#delete_example_events_2)
* [api.prepare - Activity::getFields](Activity.md/#delete_example_events_3)
* [api.respond - Activity::getFields](Activity.md/#delete_example_events_4)
* [api.respond - Activity::delete](Activity.md/#delete_example_events_5)
* [api.authorize - Activity::get](Activity.md/#delete_example_events_6)
* [api.prepare - Activity::get](Activity.md/#delete_example_events_7)
* [api.authorize - Activity::getFields](Activity.md/#delete_example_events_8)
* [api.prepare - Activity::getFields](Activity.md/#delete_example_events_9)
* [api.respond - Activity::getFields](Activity.md/#delete_example_events_10)
* [api.respond - Activity::get](Activity.md/#delete_example_events_11)

####<a name='delete_example_events_0'></a>api.authorize - Activity::delete [:house:](index.md)

> [Civi\API\Event\AuthorizeEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/AuthorizeEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `authorize()`, `isAuthorized()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='delete_example_event_params_0'></a>API Request params [:house:](index.md)

*Methods*:`_run()`, `addWhere()`, `addClause()`, `addOrderBy()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "select": [
        "id"
    ],
    "where": [
        [
            "id",
            "=",
            3029
        ]
    ],
    "orderBy": [

    ],
    "limit": 0,
    "offset": 0,
    "version": 4,
    "chain": [

    ],
    "checkPermissions": false,
    "options": [

    ]
}
```


####<a name='delete_example_events_1'></a>api.prepare - Activity::delete [:house:](index.md)

> [Civi\API\Event\PrepareEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/PrepareEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `setApiRequest()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='delete_example_event_params_1'></a>API Request params [:house:](index.md)

*Methods*:`_run()`, `addWhere()`, `addClause()`, `addOrderBy()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "select": [
        "id"
    ],
    "where": [
        [
            "id",
            "=",
            3029
        ]
    ],
    "orderBy": [

    ],
    "limit": 0,
    "offset": 0,
    "version": 4,
    "chain": [

    ],
    "checkPermissions": false,
    "options": [

    ]
}
```


####<a name='delete_example_events_2'></a>api.authorize - Activity::getFields [:house:](index.md)

> [Civi\API\Event\AuthorizeEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/AuthorizeEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `authorize()`, `isAuthorized()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='delete_example_event_params_2'></a>API Request params [:house:](index.md)

*Methods*:`_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "checkPermissions": false,
    "version": 4,
    "chain": [

    ],
    "options": [

    ]
}
```


####<a name='delete_example_events_3'></a>api.prepare - Activity::getFields [:house:](index.md)

> [Civi\API\Event\PrepareEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/PrepareEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `setApiRequest()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='delete_example_event_params_3'></a>API Request params [:house:](index.md)

*Methods*:`_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "checkPermissions": false,
    "version": 4,
    "chain": [

    ],
    "options": [

    ]
}
```


####<a name='delete_example_events_4'></a>api.respond - Activity::getFields [:house:](index.md)

> [Civi\API\Event\RespondEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/RespondEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `getResponse()`, `setResponse()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='delete_example_event_params_4'></a>API Request params [:house:](index.md)

*Methods*:`_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "checkPermissions": false,
    "version": 4,
    "chain": [

    ],
    "options": [

    ]
}
```


####<a name='delete_example_events_5'></a>api.respond - Activity::delete [:house:](index.md)

> [Civi\API\Event\RespondEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/RespondEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `getResponse()`, `setResponse()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='delete_example_event_params_5'></a>API Request params [:house:](index.md)

*Methods*:`_run()`, `addWhere()`, `addClause()`, `addOrderBy()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "select": [
        "id"
    ],
    "where": [
        [
            "id",
            "=",
            3029
        ]
    ],
    "orderBy": [

    ],
    "limit": 0,
    "offset": 0,
    "version": 4,
    "chain": [

    ],
    "checkPermissions": false,
    "options": [

    ]
}
```


####<a name='delete_example_events_6'></a>api.authorize - Activity::get [:house:](index.md)

> [Civi\API\Event\AuthorizeEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/AuthorizeEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `authorize()`, `isAuthorized()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='delete_example_event_params_6'></a>API Request params [:house:](index.md)

*Methods*:`addWhere()`, `addClause()`, `addOrderBy()`, `_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "select": [

    ],
    "where": [
        [
            "id",
            "=",
            3029
        ]
    ],
    "orderBy": [

    ],
    "limit": 0,
    "offset": 0,
    "version": 4,
    "chain": [

    ],
    "checkPermissions": false,
    "options": [

    ]
}
```


####<a name='delete_example_events_7'></a>api.prepare - Activity::get [:house:](index.md)

> [Civi\API\Event\PrepareEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/PrepareEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `setApiRequest()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='delete_example_event_params_7'></a>API Request params [:house:](index.md)

*Methods*:`addWhere()`, `addClause()`, `addOrderBy()`, `_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "select": [

    ],
    "where": [
        [
            "id",
            "=",
            3029
        ]
    ],
    "orderBy": [

    ],
    "limit": 0,
    "offset": 0,
    "version": 4,
    "chain": [

    ],
    "checkPermissions": false,
    "options": [

    ]
}
```


####<a name='delete_example_events_8'></a>api.authorize - Activity::getFields [:house:](index.md)

> [Civi\API\Event\AuthorizeEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/AuthorizeEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `authorize()`, `isAuthorized()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='delete_example_event_params_8'></a>API Request params [:house:](index.md)

*Methods*:`_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "checkPermissions": false,
    "version": 4,
    "chain": [

    ],
    "options": [

    ]
}
```


####<a name='delete_example_events_9'></a>api.prepare - Activity::getFields [:house:](index.md)

> [Civi\API\Event\PrepareEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/PrepareEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `setApiRequest()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='delete_example_event_params_9'></a>API Request params [:house:](index.md)

*Methods*:`_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "checkPermissions": false,
    "version": 4,
    "chain": [

    ],
    "options": [

    ]
}
```


####<a name='delete_example_events_10'></a>api.respond - Activity::getFields [:house:](index.md)

> [Civi\API\Event\RespondEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/RespondEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `getResponse()`, `setResponse()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='delete_example_event_params_10'></a>API Request params [:house:](index.md)

*Methods*:`_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "checkPermissions": false,
    "version": 4,
    "chain": [

    ],
    "options": [

    ]
}
```


####<a name='delete_example_events_11'></a>api.respond - Activity::get [:house:](index.md)

> [Civi\API\Event\RespondEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/RespondEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `getResponse()`, `setResponse()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='delete_example_event_params_11'></a>API Request params [:house:](index.md)

*Methods*:`addWhere()`, `addClause()`, `addOrderBy()`, `_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "select": [

    ],
    "where": [
        [
            "id",
            "=",
            3029
        ]
    ],
    "orderBy": [

    ],
    "limit": 0,
    "offset": 0,
    "version": 4,
    "chain": [

    ],
    "checkPermissions": false,
    "options": [

    ]
}
```


###<a name='delete_example_hook_calls'></a>Hook calls [:house:](index.md)

* [civicrm_apiWrappers](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_apiWrappers/) 4

##<a name='action_get'></a>Action Activity.get [:house:](index.md)

Base class for all get actions.


###<a name='get_params'></a>Params [:house:](index.md)

* **select** (`array`: `[]`)
  Fields to return. Defaults to all non-custom fields.
* **where** (`array`: `[]`)
  Array of conditions keyed by field.  $example->addWhere('contact_type', 'IN', array('Individual', 'Household'))
* **orderBy** (`array`: `[]`)
  Array of field(s) to use in ordering the results  Defaults to id ASC
$example->addOrderBy('sort_name', 'ASC')
* **limit** (`int`: `0`)
  Maximum number of results to return.  Defaults to unlimited.
* **offset** (`??`: `0`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **checkPermissions** (`bool|string|int`: `true`)
  Whether to enforce acl permissions based on the current user.  Setting to FALSE will disable permission checks and override ACLs.
In REST/javascript this cannot be disabled.
* **options** (`array`: `[]`)
  Rarely used options.

##<a name='get_example'></a>Example [:house:](index.md)

This is the example derived from the unit tests. A log
            of hook calls and events is below the API request and response.

###<a name='get_example_params'></a>Params [:house:](index.md)

```
{
    "Values": {
        "subject": "unit testing",
        "source_contact_id": "1486"
    }
}
```

###<a name='get_example_result'></a>Result [:house:](index.md)

```
{
    "3029": {
        "id": "3029",
        "activity_type_id": "1",
        "subject": "unit testing",
        "status_id": "1",
        "priority_id": "2",
        "is_test": "0",
        "is_auto": "0",
        "is_current_revision": "1",
        "is_deleted": "0",
        "is_star": "0"
    }
}
```

###<a name='get_example_events'></a>Events [:house:](index.md)

* [api.authorize - Activity::get](Activity.md/#get_example_events_0)
* [api.prepare - Activity::get](Activity.md/#get_example_events_1)
* [api.authorize - Activity::getFields](Activity.md/#get_example_events_2)
* [api.prepare - Activity::getFields](Activity.md/#get_example_events_3)
* [api.respond - Activity::getFields](Activity.md/#get_example_events_4)
* [api.respond - Activity::get](Activity.md/#get_example_events_5)

####<a name='get_example_events_0'></a>api.authorize - Activity::get [:house:](index.md)

> [Civi\API\Event\AuthorizeEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/AuthorizeEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `authorize()`, `isAuthorized()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='get_example_event_params_0'></a>API Request params [:house:](index.md)

*Methods*:`addWhere()`, `addClause()`, `addOrderBy()`, `_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "select": [

    ],
    "where": [
        [
            "id",
            "=",
            3029
        ]
    ],
    "orderBy": [

    ],
    "limit": 0,
    "offset": 0,
    "version": 4,
    "chain": [

    ],
    "checkPermissions": false,
    "options": [

    ]
}
```


####<a name='get_example_events_1'></a>api.prepare - Activity::get [:house:](index.md)

> [Civi\API\Event\PrepareEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/PrepareEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `setApiRequest()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='get_example_event_params_1'></a>API Request params [:house:](index.md)

*Methods*:`addWhere()`, `addClause()`, `addOrderBy()`, `_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "select": [

    ],
    "where": [
        [
            "id",
            "=",
            3029
        ]
    ],
    "orderBy": [

    ],
    "limit": 0,
    "offset": 0,
    "version": 4,
    "chain": [

    ],
    "checkPermissions": false,
    "options": [

    ]
}
```


####<a name='get_example_events_2'></a>api.authorize - Activity::getFields [:house:](index.md)

> [Civi\API\Event\AuthorizeEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/AuthorizeEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `authorize()`, `isAuthorized()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='get_example_event_params_2'></a>API Request params [:house:](index.md)

*Methods*:`_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "checkPermissions": false,
    "version": 4,
    "chain": [

    ],
    "options": [

    ]
}
```


####<a name='get_example_events_3'></a>api.prepare - Activity::getFields [:house:](index.md)

> [Civi\API\Event\PrepareEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/PrepareEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `setApiRequest()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='get_example_event_params_3'></a>API Request params [:house:](index.md)

*Methods*:`_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "checkPermissions": false,
    "version": 4,
    "chain": [

    ],
    "options": [

    ]
}
```


####<a name='get_example_events_4'></a>api.respond - Activity::getFields [:house:](index.md)

> [Civi\API\Event\RespondEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/RespondEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `getResponse()`, `setResponse()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='get_example_event_params_4'></a>API Request params [:house:](index.md)

*Methods*:`_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "checkPermissions": false,
    "version": 4,
    "chain": [

    ],
    "options": [

    ]
}
```


####<a name='get_example_events_5'></a>api.respond - Activity::get [:house:](index.md)

> [Civi\API\Event\RespondEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/RespondEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `getResponse()`, `setResponse()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='get_example_event_params_5'></a>API Request params [:house:](index.md)

*Methods*:`addWhere()`, `addClause()`, `addOrderBy()`, `_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "select": [

    ],
    "where": [
        [
            "id",
            "=",
            3029
        ]
    ],
    "orderBy": [

    ],
    "limit": 0,
    "offset": 0,
    "version": 4,
    "chain": [

    ],
    "checkPermissions": false,
    "options": [

    ]
}
```


###<a name='get_example_hook_calls'></a>Hook calls [:house:](index.md)

* [civicrm_apiWrappers](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_apiWrappers/) 2

##<a name='action_getActions'></a>Action Activity.getActions [:house:](index.md)

Get actions for an entity with a list of accepted params


###<a name='getActions_params'></a>Params [:house:](index.md)

* **checkPermissions** (`??`: `false`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **options** (`array`: `[]`)
  Rarely used options.

##<a name='action_getFields'></a>Action Activity.getFields [:house:](index.md)

Get fields for an entity


###<a name='getFields_params'></a>Params [:house:](index.md)

* **checkPermissions** (`??`: `false`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **options** (`array`: `[]`)
  Rarely used options.

##<a name='action_update'></a>Action Activity.update [:house:](index.md)

Here's an idea... if we use one action to extend another, "update" inherits all the abilities of "get"


###<a name='update_params'></a>Params [:house:](index.md)

* **values** (`array`: `[]`)
  Field values to set
* **select** (`array`: `[]`)
  Fields to return. Defaults to all non-custom fields.
* **where** (`array`: `[]`)
  Array of conditions keyed by field.  $example->addWhere('contact_type', 'IN', array('Individual', 'Household'))
* **orderBy** (`array`: `[]`)
  Array of field(s) to use in ordering the results  Defaults to id ASC
$example->addOrderBy('sort_name', 'ASC')
* **limit** (`int`: `0`)
  Maximum number of results to return.  Defaults to unlimited.
* **offset** (`??`: `0`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **checkPermissions** (`bool|string|int`: `true`)
  Whether to enforce acl permissions based on the current user.  Setting to FALSE will disable permission checks and override ACLs.
In REST/javascript this cannot be disabled.
* **options** (`array`: `[]`)
  Rarely used options.

##<a name='fields'></a>Activity Fields [:house:](index.md)


###<a name='field_id'></a>id [:house:](index.md)

```
{
    "name": "id",
    "type": 1,
    "title": "Activity ID",
    "description": "Unique  Other Activity ID",
    "required": true,
    "import": true,
    "where": "civicrm_activity.id",
    "headerPattern": "",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity"
}
```

###<a name='field_source_record_id'></a>source_record_id [:house:](index.md)

```
{
    "name": "source_record_id",
    "type": 1,
    "title": "Source Record",
    "description": "Artificial FK to original transaction (e.g. contribution) IF it is not an Activity. Table can be figured out through activity_type_id, and further through component registry.",
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity"
}
```

###<a name='field_activity_type_id'></a>activity_type_id [:house:](index.md)

```
{
    "name": "activity_type_id",
    "type": 1,
    "title": "Activity Type ID",
    "description": "FK to civicrm_option_value.id, that has to be valid, registered activity type.",
    "required": true,
    "import": true,
    "where": "civicrm_activity.activity_type_id",
    "headerPattern": "\/(activity.)?type(.id$)\/i",
    "dataPattern": "",
    "export": true,
    "default": "1",
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "optionGroupName": "activity_type",
        "optionEditPath": "civicrm\/admin\/options\/activity_type"
    }
}
```

###<a name='field_subject'></a>subject [:house:](index.md)

```
{
    "name": "subject",
    "type": 2,
    "title": "Subject",
    "description": "The subject\/purpose\/short description of the activity.",
    "maxlength": 255,
    "size": 45,
    "import": true,
    "where": "civicrm_activity.subject",
    "headerPattern": "\/(activity.)?subject\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_activity_date_time'></a>activity_date_time [:house:](index.md)

```
{
    "name": "activity_date_time",
    "type": 12,
    "title": "Activity Date",
    "description": "Date and time this activity is scheduled to occur. Formerly named scheduled_date_time.",
    "import": true,
    "where": "civicrm_activity.activity_date_time",
    "headerPattern": "\/(activity.)?date(.time$)?\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "html": {
        "type": "Select Date",
        "format": "activityDateTime"
    }
}
```

###<a name='field_duration'></a>duration [:house:](index.md)

```
{
    "name": "duration",
    "type": 1,
    "title": "Duration",
    "description": "Planned or actual duration of activity expressed in minutes. Conglomerate of former duration_hours and duration_minutes.",
    "import": true,
    "where": "civicrm_activity.duration",
    "headerPattern": "\/(activity.)?duration(s)?$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_location'></a>location [:house:](index.md)

```
{
    "name": "location",
    "type": 2,
    "title": "Location",
    "description": "Location of the activity (optional, open text).",
    "maxlength": 255,
    "size": 45,
    "import": true,
    "where": "civicrm_activity.location",
    "headerPattern": "\/(activity.)?location$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_phone_id'></a>phone_id [:house:](index.md)

```
{
    "name": "phone_id",
    "type": 1,
    "title": "Phone (called) ID",
    "description": "Phone ID of the number called (optional - used if an existing phone number is selected).",
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "FKClassName": "CRM_Core_DAO_Phone",
    "html": {
        "type": "EntityRef"
    }
}
```

###<a name='field_phone_number'></a>phone_number [:house:](index.md)

```
{
    "name": "phone_number",
    "type": 2,
    "title": "Phone (called) Number",
    "description": "Phone number in case the number does not exist in the civicrm_phone table.",
    "maxlength": 64,
    "size": 30,
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_details'></a>details [:house:](index.md)

```
{
    "name": "details",
    "type": 32,
    "title": "Details",
    "description": "Details about the activity (agenda, notes, etc).",
    "import": true,
    "where": "civicrm_activity.details",
    "headerPattern": "\/(activity.)?detail(s)?$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "html": {
        "type": "RichTextEditor"
    }
}
```

###<a name='field_status_id'></a>status_id [:house:](index.md)

```
{
    "name": "status_id",
    "type": 1,
    "title": "Activity Status",
    "description": "ID of the status this activity is currently in. Foreign key to civicrm_option_value.",
    "import": true,
    "where": "civicrm_activity.status_id",
    "headerPattern": "\/(activity.)?status(.label$)?\/i",
    "dataPattern": "",
    "export": false,
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "optionGroupName": "activity_status",
        "optionEditPath": "civicrm\/admin\/options\/activity_status"
    }
}
```

###<a name='field_priority_id'></a>priority_id [:house:](index.md)

```
{
    "name": "priority_id",
    "type": 1,
    "title": "Priority",
    "description": "ID of the priority given to this activity. Foreign key to civicrm_option_value.",
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "optionGroupName": "priority",
        "optionEditPath": "civicrm\/admin\/options\/priority"
    }
}
```

###<a name='field_parent_id'></a>parent_id [:house:](index.md)

```
{
    "name": "parent_id",
    "type": 1,
    "title": "Parent Activity Id",
    "description": "Parent meeting ID (if this is a follow-up item). This is not currently implemented",
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "FKClassName": "CRM_Activity_DAO_Activity"
}
```

###<a name='field_is_test'></a>is_test [:house:](index.md)

```
{
    "name": "is_test",
    "type": 16,
    "title": "Test",
    "import": true,
    "where": "civicrm_activity.is_test",
    "headerPattern": "\/(is.)?test(.activity)?\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "html": {
        "type": "Select"
    }
}
```

###<a name='field_medium_id'></a>medium_id [:house:](index.md)

```
{
    "name": "medium_id",
    "type": 1,
    "title": "Activity Medium",
    "description": "Activity Medium, Implicit FK to civicrm_option_value where option_group = encounter_medium.",
    "default": "NULL",
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "optionGroupName": "encounter_medium",
        "optionEditPath": "civicrm\/admin\/options\/encounter_medium"
    }
}
```

###<a name='field_is_auto'></a>is_auto [:house:](index.md)

```
{
    "name": "is_auto",
    "type": 16,
    "title": "Auto",
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity"
}
```

###<a name='field_relationship_id'></a>relationship_id [:house:](index.md)

```
{
    "name": "relationship_id",
    "type": 1,
    "title": "Relationship Id",
    "description": "FK to Relationship ID",
    "default": "NULL",
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "FKClassName": "CRM_Contact_DAO_Relationship"
}
```

###<a name='field_is_current_revision'></a>is_current_revision [:house:](index.md)

```
{
    "name": "is_current_revision",
    "type": 16,
    "title": "Is this activity a current revision in versioning chain?",
    "import": true,
    "where": "civicrm_activity.is_current_revision",
    "headerPattern": "\/(is.)?(current.)?(revision|version(ing)?)\/i",
    "dataPattern": "",
    "export": true,
    "default": "1",
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_original_id'></a>original_id [:house:](index.md)

```
{
    "name": "original_id",
    "type": 1,
    "title": "Original Activity ID ",
    "description": "Activity ID of the first activity record in versioning chain.",
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "FKClassName": "CRM_Activity_DAO_Activity"
}
```

###<a name='field_result'></a>result [:house:](index.md)

```
{
    "name": "result",
    "type": 2,
    "title": "Result",
    "description": "Currently being used to store result id for survey activity, FK to option value.",
    "maxlength": 255,
    "size": 45,
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_is_deleted'></a>is_deleted [:house:](index.md)

```
{
    "name": "is_deleted",
    "type": 16,
    "title": "Activity is in the Trash",
    "import": true,
    "where": "civicrm_activity.is_deleted",
    "headerPattern": "\/(activity.)?(trash|deleted)\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_campaign_id'></a>campaign_id [:house:](index.md)

```
{
    "name": "campaign_id",
    "type": 1,
    "title": "Campaign",
    "description": "The campaign for which this activity has been triggered.",
    "import": true,
    "where": "civicrm_activity.campaign_id",
    "headerPattern": "",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "FKClassName": "CRM_Campaign_DAO_Campaign",
    "html": {
        "type": "CheckBox"
    },
    "pseudoconstant": {
        "table": "civicrm_campaign",
        "keyColumn": "id",
        "labelColumn": "title"
    }
}
```

###<a name='field_engagement_level'></a>engagement_level [:house:](index.md)

```
{
    "name": "engagement_level",
    "type": 1,
    "title": "Engagement Index",
    "description": "Assign a specific level of engagement to this activity. Used for tracking constituents in ladder of engagement.",
    "import": true,
    "where": "civicrm_activity.engagement_level",
    "headerPattern": "",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "optionGroupName": "engagement_index",
        "optionEditPath": "civicrm\/admin\/options\/engagement_index"
    }
}
```

###<a name='field_weight'></a>weight [:house:](index.md)

```
{
    "name": "weight",
    "type": 1,
    "title": "Order",
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_is_star'></a>is_star [:house:](index.md)

```
{
    "name": "is_star",
    "type": 16,
    "title": "Is Starred",
    "description": "Activity marked as favorite.",
    "import": true,
    "where": "civicrm_activity.is_star",
    "headerPattern": "\/(activity.)?(star|favorite)\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_activity",
    "entity": "Activity",
    "bao": "CRM_Activity_BAO_Activity"
}
```
###### This file was automatically generated. Do not edit directly.