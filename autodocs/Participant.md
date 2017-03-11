
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
        "event_id": "763",
        "contact_id": "1227",
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
    "contact_id": "1227",
    "event_id": "763",
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


####<a name='create_example_events_0'></a>api.authorize [:house:](index.md)

> [Civi\API\Event\AuthorizeEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/AuthorizeEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `authorize()`, `isAuthorized()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {

}*Methods*:`__construct()`, `setValue()`, `_run()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`


####<a name='create_example_events_1'></a>api.prepare [:house:](index.md)

> [Civi\API\Event\PrepareEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/PrepareEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `setApiRequest()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {

}*Methods*:`__construct()`, `setValue()`, `_run()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`


####<a name='create_example_events_2'></a>api.respond [:house:](index.md)

> [Civi\API\Event\RespondEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/RespondEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `getResponse()`, `setResponse()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {

}*Methods*:`__construct()`, `setValue()`, `_run()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`


###<a name='create_example_hook_calls'></a>Hook calls [:house:](index.md)

* [pre](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_pre/) 1
* [post](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_post/) 1
* [apiWrappers](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_apiWrappers/) 1

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