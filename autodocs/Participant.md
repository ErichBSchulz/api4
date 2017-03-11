
#<a name='top'></a>Participant [:house:](index.md)


##<a name='action_get'></a>Action Participant.get [:house:](index.md)

Base class for all get actions.


###<a name='action_get_params'></a>Params [:house:](index.md)

* **where** (`array`: `[["is_test","=",0]]`)
  Array of conditions keyed by field.  $example->addWhere('contact_id.contact_type', 'IN', array('Individual', 'Household'))

$example->addWhere('contact_type', 'IN', array('Individual', 'Household'))
* **select** (`array`: `[]`)
  Fields to return. Defaults to all non-custom fields.
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
        "event_id": "898",
        "contact_id": "1441",
        "status_id": 2,
        "role_id": 1,
        "register_date": 20070219,
        "source": "Wimbeldon",
        "event_level": "Payment"
    }
}
```

###<a name='get_example_result'></a>Result [:house:](index.md)

```
{
    "21": {
        "id": "21",
        "contact_id": "1441",
        "event_id": "898",
        "status_id": "2",
        "role_id": "1",
        "register_date": "2007-02-19 00:00:00",
        "source": "Wimbeldon",
        "is_test": "0",
        "is_pay_later": "0"
    }
}
```

###<a name='get_example_events'></a>Events [:house:](index.md)

* [api.authorize - Participant::get](Participant.md/#get_example_events_0)
* [api.prepare - Participant::get](Participant.md/#get_example_events_1)
* [api.authorize - Participant::getFields](Participant.md/#get_example_events_2)
* [api.prepare - Participant::getFields](Participant.md/#get_example_events_3)
* [api.respond - Participant::getFields](Participant.md/#get_example_events_4)
* [api.respond - Participant::get](Participant.md/#get_example_events_5)

####<a name='get_example_events_0'></a>api.authorize - Participant::get [:house:](index.md)

> [Civi\API\Event\AuthorizeEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/AuthorizeEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `authorize()`, `isAuthorized()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='get_example_event_params_0'></a>API Request params [:house:](index.md)

*Methods*:`addWhere()`, `addClause()`, `addOrderBy()`, `_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "where": [
        [
            "is_test",
            "=",
            0
        ],
        [
            "id",
            "=",
            21
        ]
    ],
    "select": [

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


####<a name='get_example_events_1'></a>api.prepare - Participant::get [:house:](index.md)

> [Civi\API\Event\PrepareEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/PrepareEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `setApiRequest()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='get_example_event_params_1'></a>API Request params [:house:](index.md)

*Methods*:`addWhere()`, `addClause()`, `addOrderBy()`, `_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "where": [
        [
            "is_test",
            "=",
            0
        ],
        [
            "id",
            "=",
            21
        ]
    ],
    "select": [

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


####<a name='get_example_events_2'></a>api.authorize - Participant::getFields [:house:](index.md)

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


####<a name='get_example_events_3'></a>api.prepare - Participant::getFields [:house:](index.md)

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


####<a name='get_example_events_4'></a>api.respond - Participant::getFields [:house:](index.md)

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


####<a name='get_example_events_5'></a>api.respond - Participant::get [:house:](index.md)

> [Civi\API\Event\RespondEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/RespondEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `getResponse()`, `setResponse()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='get_example_event_params_5'></a>API Request params [:house:](index.md)

*Methods*:`addWhere()`, `addClause()`, `addOrderBy()`, `_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "where": [
        [
            "is_test",
            "=",
            0
        ],
        [
            "id",
            "=",
            21
        ]
    ],
    "select": [

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

##<a name='action_create'></a>Action Participant.create [:house:](index.md)

Base class for all create actions.


###<a name='action_create_params'></a>Params [:house:](index.md)

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
        "event_id": "898",
        "contact_id": "1441",
        "status_id": 2,
        "role_id": 1,
        "register_date": 20070219,
        "source": "Wimbeldon",
        "event_level": "Payment"
    }
}
```

###<a name='create_example_result'></a>Result [:house:](index.md)

```
{
    "id": 21,
    "contact_id": "1441",
    "event_id": "898",
    "status_id": 2,
    "role_id": 1,
    "register_date": "20070219",
    "source": "Wimbeldon",
    "fee_level": null,
    "is_test": null,
    "is_pay_later": null,
    "fee_amount": null,
    "registered_by_id": null,
    "discount_id": null,
    "fee_currency": null,
    "campaign_id": null,
    "discount_amount": null,
    "cart_id": null,
    "must_wait": null,
    "transferred_to_contact_id": null
}
```

###<a name='create_example_events'></a>Events [:house:](index.md)

* [api.authorize - Participant::create](Participant.md/#create_example_events_0)
* [api.prepare - Participant::create](Participant.md/#create_example_events_1)
* [api.respond - Participant::create](Participant.md/#create_example_events_2)

####<a name='create_example_events_0'></a>api.authorize - Participant::create [:house:](index.md)

> [Civi\API\Event\AuthorizeEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/AuthorizeEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `authorize()`, `isAuthorized()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='create_example_event_params_0'></a>API Request params [:house:](index.md)

*Methods*:`__construct()`, `setValue()`, `_run()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "values": {
        "event_id": "898",
        "contact_id": "1441",
        "status_id": 2,
        "role_id": 1,
        "register_date": 20070219,
        "source": "Wimbeldon",
        "event_level": "Payment"
    },
    "bao": {
        "id": null,
        "contact_id": null,
        "event_id": null,
        "status_id": null,
        "role_id": null,
        "register_date": null,
        "source": null,
        "fee_level": null,
        "is_test": null,
        "is_pay_later": null,
        "fee_amount": null,
        "registered_by_id": null,
        "discount_id": null,
        "fee_currency": null,
        "campaign_id": null,
        "discount_amount": null,
        "cart_id": null,
        "must_wait": null,
        "transferred_to_contact_id": null,
        "_DB_DataObject_version": "1.8.12",
        "__table": "civicrm_participant",
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


####<a name='create_example_events_1'></a>api.prepare - Participant::create [:house:](index.md)

> [Civi\API\Event\PrepareEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/PrepareEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `setApiRequest()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='create_example_event_params_1'></a>API Request params [:house:](index.md)

*Methods*:`__construct()`, `setValue()`, `_run()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "values": {
        "event_id": "898",
        "contact_id": "1441",
        "status_id": 2,
        "role_id": 1,
        "register_date": 20070219,
        "source": "Wimbeldon",
        "event_level": "Payment"
    },
    "bao": {
        "id": null,
        "contact_id": null,
        "event_id": null,
        "status_id": null,
        "role_id": null,
        "register_date": null,
        "source": null,
        "fee_level": null,
        "is_test": null,
        "is_pay_later": null,
        "fee_amount": null,
        "registered_by_id": null,
        "discount_id": null,
        "fee_currency": null,
        "campaign_id": null,
        "discount_amount": null,
        "cart_id": null,
        "must_wait": null,
        "transferred_to_contact_id": null,
        "_DB_DataObject_version": "1.8.12",
        "__table": "civicrm_participant",
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


####<a name='create_example_events_2'></a>api.respond - Participant::create [:house:](index.md)

> [Civi\API\Event\RespondEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/RespondEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `getResponse()`, `setResponse()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='create_example_event_params_2'></a>API Request params [:house:](index.md)

*Methods*:`__construct()`, `setValue()`, `_run()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "values": {
        "event_id": "898",
        "contact_id": "1441",
        "status_id": 2,
        "role_id": 1,
        "register_date": 20070219,
        "source": "Wimbeldon",
        "event_level": "Payment"
    },
    "bao": {
        "id": null,
        "contact_id": null,
        "event_id": null,
        "status_id": null,
        "role_id": null,
        "register_date": null,
        "source": null,
        "fee_level": null,
        "is_test": null,
        "is_pay_later": null,
        "fee_amount": null,
        "registered_by_id": null,
        "discount_id": null,
        "fee_currency": null,
        "campaign_id": null,
        "discount_amount": null,
        "cart_id": null,
        "must_wait": null,
        "transferred_to_contact_id": null,
        "_DB_DataObject_version": "1.8.12",
        "__table": "civicrm_participant",
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
* [civicrm_pre](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_pre/) 2
* [civicrm_postSave_civicrm_participant](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_postSave_civicrm_participant/) 1
* [civicrm_post](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_post/) 2
* [civicrm_optionValues](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_optionValues/) 3
* [civicrm_fieldOptions](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_fieldOptions/) 1
* [civicrm_postSave_civicrm_activity](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_postSave_civicrm_activity/) 1
* [civicrm_postSave_civicrm_activity_contact](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_postSave_civicrm_activity_contact/) 1
* [civicrm_postSave_civicrm_log](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_postSave_civicrm_log/) 2
* [civicrm_permission_check](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_permission_check/) 2
* [civicrm_recent](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_civicrm_recent/) 1

##<a name='action_delete'></a>Action Participant.delete [:house:](index.md)

"delete" inherits all the abilities of "get"


###<a name='action_delete_params'></a>Params [:house:](index.md)

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
        21
    ]
}
```

###<a name='delete_example_result'></a>Result [:house:](index.md)

```
{
    "0": "21"
}
```

###<a name='delete_example_events'></a>Events [:house:](index.md)

* [api.authorize - Participant::delete](Participant.md/#delete_example_events_0)
* [api.prepare - Participant::delete](Participant.md/#delete_example_events_1)
* [api.authorize - Participant::getFields](Participant.md/#delete_example_events_2)
* [api.prepare - Participant::getFields](Participant.md/#delete_example_events_3)
* [api.respond - Participant::getFields](Participant.md/#delete_example_events_4)
* [api.respond - Participant::delete](Participant.md/#delete_example_events_5)
* [api.authorize - Participant::get](Participant.md/#delete_example_events_6)
* [api.prepare - Participant::get](Participant.md/#delete_example_events_7)
* [api.authorize - Participant::getFields](Participant.md/#delete_example_events_8)
* [api.prepare - Participant::getFields](Participant.md/#delete_example_events_9)
* [api.respond - Participant::getFields](Participant.md/#delete_example_events_10)
* [api.respond - Participant::get](Participant.md/#delete_example_events_11)

####<a name='delete_example_events_0'></a>api.authorize - Participant::delete [:house:](index.md)

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
            21
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


####<a name='delete_example_events_1'></a>api.prepare - Participant::delete [:house:](index.md)

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
            21
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


####<a name='delete_example_events_2'></a>api.authorize - Participant::getFields [:house:](index.md)

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


####<a name='delete_example_events_3'></a>api.prepare - Participant::getFields [:house:](index.md)

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


####<a name='delete_example_events_4'></a>api.respond - Participant::getFields [:house:](index.md)

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


####<a name='delete_example_events_5'></a>api.respond - Participant::delete [:house:](index.md)

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
            21
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


####<a name='delete_example_events_6'></a>api.authorize - Participant::get [:house:](index.md)

> [Civi\API\Event\AuthorizeEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/AuthorizeEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `authorize()`, `isAuthorized()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='delete_example_event_params_6'></a>API Request params [:house:](index.md)

*Methods*:`addWhere()`, `addClause()`, `addOrderBy()`, `_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "where": [
        [
            "is_test",
            "=",
            0
        ],
        [
            "id",
            "=",
            21
        ]
    ],
    "select": [

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


####<a name='delete_example_events_7'></a>api.prepare - Participant::get [:house:](index.md)

> [Civi\API\Event\PrepareEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/PrepareEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `setApiRequest()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='delete_example_event_params_7'></a>API Request params [:house:](index.md)

*Methods*:`addWhere()`, `addClause()`, `addOrderBy()`, `_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "where": [
        [
            "is_test",
            "=",
            0
        ],
        [
            "id",
            "=",
            21
        ]
    ],
    "select": [

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


####<a name='delete_example_events_8'></a>api.authorize - Participant::getFields [:house:](index.md)

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


####<a name='delete_example_events_9'></a>api.prepare - Participant::getFields [:house:](index.md)

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


####<a name='delete_example_events_10'></a>api.respond - Participant::getFields [:house:](index.md)

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


####<a name='delete_example_events_11'></a>api.respond - Participant::get [:house:](index.md)

> [Civi\API\Event\RespondEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/RespondEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `getResponse()`, `setResponse()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`


#####<a name='delete_example_event_params_11'></a>API Request params [:house:](index.md)

*Methods*:`addWhere()`, `addClause()`, `addOrderBy()`, `_run()`, `__construct()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`

Params: 
```
{
    "where": [
        [
            "is_test",
            "=",
            0
        ],
        [
            "id",
            "=",
            21
        ]
    ],
    "select": [

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

##<a name='action_getActions'></a>Action Participant.getActions [:house:](index.md)

Get actions for an entity with a list of accepted params


###<a name='action_getActions_params'></a>Params [:house:](index.md)

* **checkPermissions** (`??`: `false`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **options** (`array`: `[]`)
  Rarely used options.

##<a name='action_getFields'></a>Action Participant.getFields [:house:](index.md)

Get fields for an entity


###<a name='action_getFields_params'></a>Params [:house:](index.md)

* **checkPermissions** (`??`: `false`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **options** (`array`: `[]`)
  Rarely used options.

##<a name='action_update'></a>Action Participant.update [:house:](index.md)

Here's an idea... if we use one action to extend another, "update" inherits all the abilities of "get"


###<a name='action_update_params'></a>Params [:house:](index.md)

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

##<a name='fields'></a>Participant Fields [:house:](index.md)


###<a name='field_id'></a>id [:house:](index.md)

```
{
    "name": "id",
    "type": 1,
    "title": "Participant ID",
    "description": "Participant Id",
    "required": true,
    "import": true,
    "where": "civicrm_participant.id",
    "headerPattern": "\/(^(participant(.)?)?id$)\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_participant",
    "entity": "Participant",
    "bao": "CRM_Event_BAO_Participant"
}
```

###<a name='field_contact_id'></a>contact_id [:house:](index.md)

```
{
    "name": "contact_id",
    "type": 1,
    "title": "Contact ID",
    "description": "FK to Contact ID",
    "required": true,
    "import": true,
    "where": "civicrm_participant.contact_id",
    "headerPattern": "\/contact(.?id)?\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_participant",
    "entity": "Participant",
    "bao": "CRM_Event_BAO_Participant",
    "FKClassName": "CRM_Contact_DAO_Contact"
}
```

###<a name='field_event_id'></a>event_id [:house:](index.md)

```
{
    "name": "event_id",
    "type": 1,
    "title": "Event",
    "description": "FK to Event ID",
    "required": true,
    "import": true,
    "where": "civicrm_participant.event_id",
    "headerPattern": "\/event id$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_participant",
    "entity": "Participant",
    "bao": "CRM_Event_BAO_Participant",
    "FKClassName": "CRM_Event_DAO_Event"
}
```

###<a name='field_status_id'></a>status_id [:house:](index.md)

```
{
    "name": "status_id",
    "type": 1,
    "title": "Participant Status",
    "description": "Participant status ID. FK to civicrm_participant_status_type. Default of 1 should map to status = Registered.",
    "required": true,
    "import": true,
    "where": "civicrm_participant.status_id",
    "headerPattern": "\/(participant.)?(status)$\/i",
    "dataPattern": "",
    "export": true,
    "default": "1",
    "table_name": "civicrm_participant",
    "entity": "Participant",
    "bao": "CRM_Event_BAO_Participant",
    "FKClassName": "CRM_Event_DAO_ParticipantStatusType",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "table": "civicrm_participant_status_type",
        "keyColumn": "id",
        "labelColumn": "label"
    }
}
```

###<a name='field_role_id'></a>role_id [:house:](index.md)

```
{
    "name": "role_id",
    "type": 2,
    "title": "Participant Role",
    "description": "Participant role ID. Implicit FK to civicrm_option_value where option_group = participant_role.",
    "maxlength": 128,
    "size": 45,
    "import": true,
    "where": "civicrm_participant.role_id",
    "headerPattern": "\/(participant.)?(role)$\/i",
    "dataPattern": "",
    "export": true,
    "default": "NULL",
    "table_name": "civicrm_participant",
    "entity": "Participant",
    "bao": "CRM_Event_BAO_Participant",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "optionGroupName": "participant_role",
        "optionEditPath": "civicrm\/admin\/options\/participant_role"
    }
}
```

###<a name='field_register_date'></a>register_date [:house:](index.md)

```
{
    "name": "register_date",
    "type": 12,
    "title": "Register date",
    "description": "When did contact register for event?",
    "import": true,
    "where": "civicrm_participant.register_date",
    "headerPattern": "\/^(r(egister\\s)?date)$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_participant",
    "entity": "Participant",
    "bao": "CRM_Event_BAO_Participant",
    "html": {
        "type": "Select Date",
        "format": "activityDateTime"
    }
}
```

###<a name='field_source'></a>source [:house:](index.md)

```
{
    "name": "source",
    "type": 2,
    "title": "Participant Source",
    "description": "Source of this event registration.",
    "maxlength": 128,
    "size": 45,
    "import": true,
    "where": "civicrm_participant.source",
    "headerPattern": "\/(participant.)?(source)$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_participant",
    "entity": "Participant",
    "bao": "CRM_Event_BAO_Participant"
}
```

###<a name='field_fee_level'></a>fee_level [:house:](index.md)

```
{
    "name": "fee_level",
    "type": 32,
    "title": "Fee level",
    "description": "Populate with the label (text) associated with a fee level for paid events with multiple levels. Note that\n      we store the label value and not the key\n    ",
    "import": true,
    "where": "civicrm_participant.fee_level",
    "headerPattern": "\/^(f(ee\\s)?level)$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_participant",
    "entity": "Participant",
    "bao": "CRM_Event_BAO_Participant"
}
```

###<a name='field_is_test'></a>is_test [:house:](index.md)

```
{
    "name": "is_test",
    "type": 16,
    "title": "Test",
    "import": true,
    "where": "civicrm_participant.is_test",
    "headerPattern": "",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_participant",
    "entity": "Participant",
    "bao": "CRM_Event_BAO_Participant"
}
```

###<a name='field_is_pay_later'></a>is_pay_later [:house:](index.md)

```
{
    "name": "is_pay_later",
    "type": 16,
    "title": "Is Pay Later",
    "import": true,
    "where": "civicrm_participant.is_pay_later",
    "headerPattern": "\/(is.)?(pay(.)?later)$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_participant",
    "entity": "Participant",
    "bao": "CRM_Event_BAO_Participant"
}
```

###<a name='field_fee_amount'></a>fee_amount [:house:](index.md)

```
{
    "name": "fee_amount",
    "type": 1024,
    "title": "Fee Amount",
    "description": "actual processor fee if known - may be 0.",
    "precision": [
        20,
        2
    ],
    "import": true,
    "where": "civicrm_participant.fee_amount",
    "headerPattern": "\/fee(.?am(ou)?nt)?\/i",
    "dataPattern": "\/^\\d+(\\.\\d{2})?$\/",
    "export": true,
    "table_name": "civicrm_participant",
    "entity": "Participant",
    "bao": "CRM_Event_BAO_Participant"
}
```

###<a name='field_registered_by_id'></a>registered_by_id [:house:](index.md)

```
{
    "name": "registered_by_id",
    "type": 1,
    "title": "Registered By ID",
    "description": "FK to Participant ID",
    "import": true,
    "where": "civicrm_participant.registered_by_id",
    "headerPattern": "",
    "dataPattern": "",
    "export": true,
    "default": "NULL",
    "table_name": "civicrm_participant",
    "entity": "Participant",
    "bao": "CRM_Event_BAO_Participant",
    "FKClassName": "CRM_Event_DAO_Participant"
}
```

###<a name='field_discount_id'></a>discount_id [:house:](index.md)

```
{
    "name": "discount_id",
    "type": 1,
    "title": "Discount ID",
    "description": "FK to Discount ID",
    "default": "NULL",
    "table_name": "civicrm_participant",
    "entity": "Participant",
    "bao": "CRM_Event_BAO_Participant",
    "FKClassName": "CRM_Core_DAO_Discount"
}
```

###<a name='field_fee_currency'></a>fee_currency [:house:](index.md)

```
{
    "name": "fee_currency",
    "type": 2,
    "title": "Fee Currency",
    "description": "3 character string, value derived from config setting.",
    "maxlength": 3,
    "size": 4,
    "import": true,
    "where": "civicrm_participant.fee_currency",
    "headerPattern": "\/(fee)?.?cur(rency)?\/i",
    "dataPattern": "\/^[A-Z]{3}$\/i",
    "export": true,
    "default": "NULL",
    "table_name": "civicrm_participant",
    "entity": "Participant",
    "bao": "CRM_Event_BAO_Participant",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "table": "civicrm_currency",
        "keyColumn": "name",
        "labelColumn": "full_name",
        "nameColumn": "name"
    }
}
```

###<a name='field_campaign_id'></a>campaign_id [:house:](index.md)

```
{
    "name": "campaign_id",
    "type": 1,
    "title": "Campaign",
    "description": "The campaign for which this participant has been registered.",
    "import": true,
    "where": "civicrm_participant.campaign_id",
    "headerPattern": "",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_participant",
    "entity": "Participant",
    "bao": "CRM_Event_BAO_Participant",
    "FKClassName": "CRM_Campaign_DAO_Campaign",
    "pseudoconstant": {
        "table": "civicrm_campaign",
        "keyColumn": "id",
        "labelColumn": "title"
    }
}
```

###<a name='field_discount_amount'></a>discount_amount [:house:](index.md)

```
{
    "name": "discount_amount",
    "type": 1,
    "title": "Discount Amount",
    "description": "Discount Amount",
    "table_name": "civicrm_participant",
    "entity": "Participant",
    "bao": "CRM_Event_BAO_Participant"
}
```

###<a name='field_cart_id'></a>cart_id [:house:](index.md)

```
{
    "name": "cart_id",
    "type": 1,
    "title": "Event Cart ID",
    "description": "FK to civicrm_event_carts",
    "table_name": "civicrm_participant",
    "entity": "Participant",
    "bao": "CRM_Event_BAO_Participant",
    "FKClassName": "CRM_Event_Cart_DAO_Cart"
}
```

###<a name='field_must_wait'></a>must_wait [:house:](index.md)

```
{
    "name": "must_wait",
    "type": 1,
    "title": "Must Wait on List",
    "description": "On Waiting List",
    "table_name": "civicrm_participant",
    "entity": "Participant",
    "bao": "CRM_Event_BAO_Participant"
}
```

###<a name='field_transferred_to_contact_id'></a>transferred_to_contact_id [:house:](index.md)

```
{
    "name": "transferred_to_contact_id",
    "type": 1,
    "title": "Transferred to Contact ID",
    "description": "FK to Contact ID",
    "import": true,
    "where": "civicrm_participant.transferred_to_contact_id",
    "headerPattern": "\/transfer(.?id)?\/i",
    "dataPattern": "",
    "export": true,
    "default": "NULL",
    "table_name": "civicrm_participant",
    "entity": "Participant",
    "bao": "CRM_Event_BAO_Participant",
    "FKClassName": "CRM_Contact_DAO_Contact"
}
```
###### This file was automatically generated. Do not edit directly.