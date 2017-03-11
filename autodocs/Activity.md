
#<a name='top'></a>Activity [:house:](index.md)


##<a name='action_create'></a>Action Activity.create [:house:](index.md)

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
        "subject": "unit testing",
        "source_contact_id": "1224"
    }
}
```

###<a name='create_example_result'></a>Result [:house:](index.md)

```
{
    "id": 2493,
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

##<a name='action_delete'></a>Action Activity.delete [:house:](index.md)

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

##<a name='action_get'></a>Action Activity.get [:house:](index.md)

Base class for all get actions.


###<a name='action_get_params'></a>Params [:house:](index.md)

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

##<a name='action_getActions'></a>Action Activity.getActions [:house:](index.md)

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

##<a name='action_getFields'></a>Action Activity.getFields [:house:](index.md)

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

##<a name='action_update'></a>Action Activity.update [:house:](index.md)

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