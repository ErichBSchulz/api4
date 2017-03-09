#<a name='Activity.top'></a>Activity

##<a name='Activity.fields'></a>Activity Fields

###<a name='Activity.field_$field'></a>id

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
###<a name='Activity.field_$field'></a>source_record_id

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
###<a name='Activity.field_$field'></a>activity_type_id

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
###<a name='Activity.field_$field'></a>subject

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
###<a name='Activity.field_$field'></a>activity_date_time

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
###<a name='Activity.field_$field'></a>duration

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
###<a name='Activity.field_$field'></a>location

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
###<a name='Activity.field_$field'></a>phone_id

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
###<a name='Activity.field_$field'></a>phone_number

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
###<a name='Activity.field_$field'></a>details

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
###<a name='Activity.field_$field'></a>status_id

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
###<a name='Activity.field_$field'></a>priority_id

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
###<a name='Activity.field_$field'></a>parent_id

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
###<a name='Activity.field_$field'></a>is_test

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
###<a name='Activity.field_$field'></a>medium_id

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
###<a name='Activity.field_$field'></a>is_auto

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
###<a name='Activity.field_$field'></a>relationship_id

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
###<a name='Activity.field_$field'></a>is_current_revision

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
###<a name='Activity.field_$field'></a>original_id

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
###<a name='Activity.field_$field'></a>result

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
###<a name='Activity.field_$field'></a>is_deleted

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
###<a name='Activity.field_$field'></a>campaign_id

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
###<a name='Activity.field_$field'></a>engagement_level

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
###<a name='Activity.field_$field'></a>weight

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
###<a name='Activity.field_$field'></a>is_star

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
##<a name='Activity.action_create'></a>Action Activity.create

Base class for all create actions.: 

##<a name='Activity.action_create_params'></a>Params

* **values** (`array`: `[]`)
  Field values to set
* **bao** (`object`: `null`)
  Bao object based on the entity
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **checkPermissions** (`bool|string|int`: `true`)
  Whether to enforce acl permissions based on the current user.
* **options** (`array`: `[]`)
  Rarely used options.
### Activity.create hook calls: 
### Activity.create events
##<a name='Activity.action_delete'></a>Action Activity.delete

"delete" inherits all the abilities of "get": 

##<a name='Activity.action_delete_params'></a>Params

* **select** (`array`: `[]`)
  Fields to return. Defaults to all non-custom fields.
* **where** (`array`: `[]`)
  Array of conditions keyed by field.
* **orderBy** (`array`: `[]`)
  Array of field(s) to use in ordering the results
* **limit** (`int`: `0`)
  Maximum number of results to return.
* **offset** (`??`: `0`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **checkPermissions** (`bool|string|int`: `true`)
  Whether to enforce acl permissions based on the current user.
* **options** (`array`: `[]`)
  Rarely used options.
### Activity.delete hook calls: 
### Activity.delete events
##<a name='Activity.action_get'></a>Action Activity.get

Base class for all get actions.: 

##<a name='Activity.action_get_params'></a>Params

* **select** (`array`: `[]`)
  Fields to return. Defaults to all non-custom fields.
* **where** (`array`: `[]`)
  Array of conditions keyed by field.
* **orderBy** (`array`: `[]`)
  Array of field(s) to use in ordering the results
* **limit** (`int`: `0`)
  Maximum number of results to return.
* **offset** (`??`: `0`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **checkPermissions** (`bool|string|int`: `true`)
  Whether to enforce acl permissions based on the current user.
* **options** (`array`: `[]`)
  Rarely used options.
### Activity.get hook calls: 
### Activity.get events
##<a name='Activity.action_getActions'></a>Action Activity.getActions

Get actions for an entity with a list of accepted params: 

##<a name='Activity.action_getActions_params'></a>Params

* **checkPermissions** (`??`: `false`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **options** (`array`: `[]`)
  Rarely used options.
### Activity.getActions hook calls: 
### Activity.getActions events
##<a name='Activity.action_getFields'></a>Action Activity.getFields

Get fields for an entity: 

##<a name='Activity.action_getFields_params'></a>Params

* **checkPermissions** (`??`: `false`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **options** (`array`: `[]`)
  Rarely used options.
### Activity.getFields hook calls: 
### Activity.getFields events
##<a name='Activity.action_update'></a>Action Activity.update

Here's an idea... if we use one action to extend another, "update" inherits all the abilities of "get": 

##<a name='Activity.action_update_params'></a>Params

* **values** (`array`: `[]`)
  Field values to set
* **select** (`array`: `[]`)
  Fields to return. Defaults to all non-custom fields.
* **where** (`array`: `[]`)
  Array of conditions keyed by field.
* **orderBy** (`array`: `[]`)
  Array of field(s) to use in ordering the results
* **limit** (`int`: `0`)
  Maximum number of results to return.
* **offset** (`??`: `0`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **checkPermissions** (`bool|string|int`: `true`)
  Whether to enforce acl permissions based on the current user.
* **options** (`array`: `[]`)
  Rarely used options.
### Activity.update hook calls: 
### Activity.update events
###### This file was automatically generated. Do not edit directly.