#<a name='Participant.top'></a>Participant

##<a name='Participant.fields'></a>Participant Fields

###<a name='Participant.field_$field'></a>id

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
###<a name='Participant.field_$field'></a>contact_id

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
###<a name='Participant.field_$field'></a>event_id

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
###<a name='Participant.field_$field'></a>status_id

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
###<a name='Participant.field_$field'></a>role_id

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
###<a name='Participant.field_$field'></a>register_date

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
###<a name='Participant.field_$field'></a>source

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
###<a name='Participant.field_$field'></a>fee_level

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
###<a name='Participant.field_$field'></a>is_test

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
###<a name='Participant.field_$field'></a>is_pay_later

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
###<a name='Participant.field_$field'></a>fee_amount

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
###<a name='Participant.field_$field'></a>registered_by_id

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
###<a name='Participant.field_$field'></a>discount_id

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
###<a name='Participant.field_$field'></a>fee_currency

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
###<a name='Participant.field_$field'></a>campaign_id

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
###<a name='Participant.field_$field'></a>discount_amount

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
###<a name='Participant.field_$field'></a>cart_id

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
###<a name='Participant.field_$field'></a>must_wait

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
###<a name='Participant.field_$field'></a>transferred_to_contact_id

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
##<a name='Participant.action_get'></a>Action Participant.get

Base class for all get actions.: 

##<a name='Participant.action_get_params'></a>Params

* **where** (`array`: `[["is_test","=",0]]`)
  Array of conditions keyed by field.
* **select** (`array`: `[]`)
  Fields to return. Defaults to all non-custom fields.
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
### Participant.get hook calls: 
### Participant.get events
##<a name='Participant.action_create'></a>Action Participant.create

Base class for all create actions.: 

##<a name='Participant.action_create_params'></a>Params

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
### Participant.create hook calls: 
### Participant.create events
##<a name='Participant.action_delete'></a>Action Participant.delete

"delete" inherits all the abilities of "get": 

##<a name='Participant.action_delete_params'></a>Params

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
### Participant.delete hook calls: 
### Participant.delete events
##<a name='Participant.action_getActions'></a>Action Participant.getActions

Get actions for an entity with a list of accepted params: 

##<a name='Participant.action_getActions_params'></a>Params

* **checkPermissions** (`??`: `false`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **options** (`array`: `[]`)
  Rarely used options.
### Participant.getActions hook calls: 
### Participant.getActions events
##<a name='Participant.action_getFields'></a>Action Participant.getFields

Get fields for an entity: 

##<a name='Participant.action_getFields_params'></a>Params

* **checkPermissions** (`??`: `false`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **options** (`array`: `[]`)
  Rarely used options.
### Participant.getFields hook calls: 
### Participant.getFields events
##<a name='Participant.action_update'></a>Action Participant.update

Here's an idea... if we use one action to extend another, "update" inherits all the abilities of "get": 

##<a name='Participant.action_update_params'></a>Params

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
### Participant.update hook calls: 
### Participant.update events
###### This file was automatically generated. Do not edit directly.