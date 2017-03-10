
#<a name='top'></a>Event [:house:](index.md)


##<a name='create_example'></a>Example!!!!! [:house:](index.md)


###<a name='create_example_params'></a>Params [:house:](index.md)

```
{
    "Values": {
        "title": "Annual CiviCRM meet",
        "summary": "If you have any CiviCRM related issues or want to track where CiviCRM is heading, Sign up now",
        "description": "This event is intended to give brief idea about progess of CiviCRM and giving solutions to common user issues",
        "event_type_id": 1,
        "is_public": 1,
        "start_date": 20081021,
        "end_date": 20081023,
        "is_online_registration": 1,
        "registration_start_date": 20080601,
        "registration_end_date": 20081015,
        "max_participants": 100,
        "event_full_text": "Sorry! We are already full",
        "is_monetary": 0,
        "is_active": 1,
        "is_show_location": 0
    }
}
```

###<a name='create_example_result'></a>Result [:house:](index.md)

```
{
    "id": 532,
    "title": "Annual CiviCRM meet",
    "summary": "If you have any CiviCRM related issues or want to track where CiviCRM is heading, Sign up now",
    "description": "This event is intended to give brief idea about progess of CiviCRM and giving solutions to common user issues",
    "event_type_id": 1,
    "participant_listing_id": null,
    "is_public": 1,
    "start_date": 20081021,
    "end_date": 20081023,
    "is_online_registration": 1,
    "registration_link_text": null,
    "registration_start_date": 20080601,
    "registration_end_date": 20081015,
    "max_participants": 100,
    "event_full_text": "Sorry! We are already full",
    "is_monetary": 0,
    "financial_type_id": null,
    "payment_processor": null,
    "is_map": null,
    "is_active": 1,
    "fee_label": null,
    "is_show_location": 0,
    "loc_block_id": null,
    "default_role_id": null,
    "intro_text": null,
    "footer_text": null,
    "confirm_title": null,
    "confirm_text": null,
    "confirm_footer_text": null,
    "is_email_confirm": null,
    "confirm_email_text": null,
    "confirm_from_name": null,
    "confirm_from_email": null,
    "cc_confirm": null,
    "bcc_confirm": null,
    "default_fee_id": null,
    "default_discount_fee_id": null,
    "thankyou_title": null,
    "thankyou_text": null,
    "thankyou_footer_text": null,
    "is_pay_later": null,
    "pay_later_text": null,
    "pay_later_receipt": null,
    "is_partial_payment": null,
    "initial_amount_label": null,
    "initial_amount_help_text": null,
    "min_initial_amount": null,
    "is_multiple_registrations": null,
    "max_additional_participants": null,
    "allow_same_participant_emails": null,
    "has_waitlist": null,
    "requires_approval": null,
    "expiration_time": null,
    "allow_selfcancelxfer": null,
    "selfcancelxfer_time": null,
    "waitlist_text": null,
    "approval_req_text": null,
    "is_template": 0,
    "template_title": null,
    "created_id": null,
    "created_date": "20170310102826",
    "currency": null,
    "campaign_id": null,
    "is_share": null,
    "is_confirm_enabled": null,
    "parent_event_id": null,
    "slot_label_id": null,
    "dedupe_rule_group_id": null,
    "is_billing_required": null
}
```

###<a name='create_example_events'></a>Events [:house:](index.md)

```
[
    {

    },
    {

    },
    {

    }
]
```

###<a name='create_example_hook_calls'></a>Hook calls [:house:](index.md)

```
{
    "pre": 1,
    "post": 1,
    "apiWrappers": 1
}
```

##<a name='action_create'></a>Action Event.create [:house:](index.md)

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

##<a name='action_delete'></a>Action Event.delete [:house:](index.md)

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

##<a name='action_get'></a>Action Event.get [:house:](index.md)

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

##<a name='action_getActions'></a>Action Event.getActions [:house:](index.md)

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

##<a name='action_getFields'></a>Action Event.getFields [:house:](index.md)

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

##<a name='action_update'></a>Action Event.update [:house:](index.md)

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

##<a name='fields'></a>Event Fields [:house:](index.md)


###<a name='field_id'></a>id [:house:](index.md)

```
{
    "name": "id",
    "type": 1,
    "title": "Event ID",
    "description": "Event",
    "required": true,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event"
}
```

###<a name='field_title'></a>title [:house:](index.md)

```
{
    "name": "title",
    "type": 2,
    "title": "Event Title",
    "description": "Event Title (e.g. Fall Fundraiser Dinner)",
    "maxlength": 255,
    "size": 45,
    "import": true,
    "where": "civicrm_event.title",
    "headerPattern": "\/(event.)?title$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_summary'></a>summary [:house:](index.md)

```
{
    "name": "summary",
    "type": 32,
    "title": "Event Summary",
    "description": "Brief summary of event. Text and html allowed. Displayed on Event Registration form and can be used on other CMS pages which need an event summary.",
    "rows": 4,
    "cols": 60,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "TextArea"
    }
}
```

###<a name='field_description'></a>description [:house:](index.md)

```
{
    "name": "description",
    "type": 32,
    "title": "Event Description",
    "description": "Full description of event. Text and html allowed. Displayed on built-in Event Information screens.",
    "rows": 8,
    "cols": 60,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "TextArea"
    }
}
```

###<a name='field_event_type_id'></a>event_type_id [:house:](index.md)

```
{
    "name": "event_type_id",
    "type": 1,
    "title": "Event Type",
    "description": "Event Type ID.Implicit FK to civicrm_option_value where option_group = event_type.",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "optionGroupName": "event_type",
        "optionEditPath": "civicrm\/admin\/options\/event_type"
    }
}
```

###<a name='field_participant_listing_id'></a>participant_listing_id [:house:](index.md)

```
{
    "name": "participant_listing_id",
    "type": 1,
    "title": "Participant Listing",
    "description": "Should we expose the participant list? Implicit FK to civicrm_option_value where option_group = participant_listing.",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "optionGroupName": "participant_listing",
        "optionEditPath": "civicrm\/admin\/options\/participant_listing"
    }
}
```

###<a name='field_is_public'></a>is_public [:house:](index.md)

```
{
    "name": "is_public",
    "type": 16,
    "title": "Is Event Public",
    "description": "Public events will be included in the iCal feeds. Access to private event information may be limited using ACLs.",
    "default": "1",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_start_date'></a>start_date [:house:](index.md)

```
{
    "name": "start_date",
    "type": 12,
    "title": "Event Start Date",
    "description": "Date and time that event starts.",
    "import": true,
    "where": "civicrm_event.start_date",
    "headerPattern": "\/^start|(s(tart\\s)?date)$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Select Date"
    }
}
```

###<a name='field_end_date'></a>end_date [:house:](index.md)

```
{
    "name": "end_date",
    "type": 12,
    "title": "Event End Date",
    "description": "Date and time that event ends. May be NULL if no defined end date\/time",
    "import": true,
    "where": "civicrm_event.end_date",
    "headerPattern": "\/^end|(e(nd\\s)?date)$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Select Date"
    }
}
```

###<a name='field_is_online_registration'></a>is_online_registration [:house:](index.md)

```
{
    "name": "is_online_registration",
    "type": 16,
    "title": "Is Online Registration",
    "description": "If true, include registration link on Event Info page.",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_registration_link_text'></a>registration_link_text [:house:](index.md)

```
{
    "name": "registration_link_text",
    "type": 2,
    "title": "Event Registration Link Text",
    "description": "Text for link to Event Registration form which is displayed on Event Information screen when is_online_registration is true.",
    "maxlength": 255,
    "size": 45,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_registration_start_date'></a>registration_start_date [:house:](index.md)

```
{
    "name": "registration_start_date",
    "type": 12,
    "title": "Registration Start Date",
    "description": "Date and time that online registration starts.",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Select Date"
    }
}
```

###<a name='field_registration_end_date'></a>registration_end_date [:house:](index.md)

```
{
    "name": "registration_end_date",
    "type": 12,
    "title": "Registration End Date",
    "description": "Date and time that online registration ends.",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Select Date"
    }
}
```

###<a name='field_max_participants'></a>max_participants [:house:](index.md)

```
{
    "name": "max_participants",
    "type": 1,
    "title": "Max Participants",
    "description": "Maximum number of registered participants to allow. After max is reached, a custom Event Full message is displayed. If NULL, allow unlimited number of participants.",
    "default": "NULL",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_event_full_text'></a>event_full_text [:house:](index.md)

```
{
    "name": "event_full_text",
    "type": 32,
    "title": "Event Information",
    "description": "Message to display on Event Information page and INSTEAD OF Event Registration form if maximum participants are signed up. Can include email address\/info about getting on a waiting list, etc. Text and html allowed.",
    "rows": 4,
    "cols": 60,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "TextArea"
    }
}
```

###<a name='field_is_monetary'></a>is_monetary [:house:](index.md)

```
{
    "name": "is_monetary",
    "type": 16,
    "title": "Is this a PAID event?",
    "description": "If true, one or more fee amounts must be set and a Payment Processor must be configured for Online Event Registration.",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_financial_type_id'></a>financial_type_id [:house:](index.md)

```
{
    "name": "financial_type_id",
    "type": 1,
    "title": "Financial Type",
    "description": "Financial type assigned to paid event registrations for this event. Required if is_monetary is true.",
    "default": "NULL",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "table": "civicrm_financial_type",
        "keyColumn": "id",
        "labelColumn": "name"
    }
}
```

###<a name='field_payment_processor'></a>payment_processor [:house:](index.md)

```
{
    "name": "payment_processor",
    "type": 2,
    "title": "Payment Processor",
    "description": "Payment Processors configured for this Event (if is_monetary is true)",
    "maxlength": 128,
    "size": 45,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "table": "civicrm_payment_processor",
        "keyColumn": "id",
        "labelColumn": "name"
    }
}
```

###<a name='field_is_map'></a>is_map [:house:](index.md)

```
{
    "name": "is_map",
    "type": 16,
    "title": "Map Enabled",
    "description": "Include a map block on the Event Information page when geocode info is available and a mapping provider has been specified?",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_is_active'></a>is_active [:house:](index.md)

```
{
    "name": "is_active",
    "type": 16,
    "title": "Is Active",
    "description": "Is this Event enabled or disabled\/cancelled?",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_fee_label'></a>fee_label [:house:](index.md)

```
{
    "name": "fee_label",
    "type": 2,
    "title": "Fee Label",
    "maxlength": 255,
    "size": 45,
    "import": true,
    "where": "civicrm_event.fee_label",
    "headerPattern": "\/^fee|(f(ee\\s)?label)$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_is_show_location'></a>is_show_location [:house:](index.md)

```
{
    "name": "is_show_location",
    "type": 16,
    "title": "show location",
    "description": "If true, show event location.",
    "default": "1",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_loc_block_id'></a>loc_block_id [:house:](index.md)

```
{
    "name": "loc_block_id",
    "type": 1,
    "title": "Location Block ID",
    "description": "FK to Location Block ID",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "FKClassName": "CRM_Core_DAO_LocBlock"
}
```

###<a name='field_default_role_id'></a>default_role_id [:house:](index.md)

```
{
    "name": "default_role_id",
    "type": 1,
    "title": "Default Role",
    "description": "Participant role ID. Implicit FK to civicrm_option_value where option_group = participant_role.",
    "import": true,
    "where": "civicrm_event.default_role_id",
    "headerPattern": "",
    "dataPattern": "",
    "export": true,
    "default": "1",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "optionGroupName": "participant_role",
        "optionEditPath": "civicrm\/admin\/options\/participant_role"
    }
}
```

###<a name='field_intro_text'></a>intro_text [:house:](index.md)

```
{
    "name": "intro_text",
    "type": 32,
    "title": "Introductory Message",
    "description": "Introductory message for Event Registration page. Text and html allowed. Displayed at the top of Event Registration form.",
    "rows": 6,
    "cols": 50,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "TextArea"
    }
}
```

###<a name='field_footer_text'></a>footer_text [:house:](index.md)

```
{
    "name": "footer_text",
    "type": 32,
    "title": "Footer Message",
    "description": "Footer message for Event Registration page. Text and html allowed. Displayed at the bottom of Event Registration form.",
    "rows": 6,
    "cols": 50,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "TextArea"
    }
}
```

###<a name='field_confirm_title'></a>confirm_title [:house:](index.md)

```
{
    "name": "confirm_title",
    "type": 2,
    "title": "Confirmation Title",
    "description": "Title for Confirmation page.",
    "maxlength": 255,
    "size": 45,
    "default": "NULL",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_confirm_text'></a>confirm_text [:house:](index.md)

```
{
    "name": "confirm_text",
    "type": 32,
    "title": "Confirm Text",
    "description": "Introductory message for Event Registration page. Text and html allowed. Displayed at the top of Event Registration form.",
    "rows": 6,
    "cols": 50,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "TextArea"
    }
}
```

###<a name='field_confirm_footer_text'></a>confirm_footer_text [:house:](index.md)

```
{
    "name": "confirm_footer_text",
    "type": 32,
    "title": "Footer Text",
    "description": "Footer message for Event Registration page. Text and html allowed. Displayed at the bottom of Event Registration form.",
    "rows": 6,
    "cols": 50,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "TextArea"
    }
}
```

###<a name='field_is_email_confirm'></a>is_email_confirm [:house:](index.md)

```
{
    "name": "is_email_confirm",
    "type": 16,
    "title": "Is confirm email",
    "description": "If true, confirmation is automatically emailed to contact on successful registration.",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_confirm_email_text'></a>confirm_email_text [:house:](index.md)

```
{
    "name": "confirm_email_text",
    "type": 32,
    "title": "Confirmation Email Text",
    "description": "text to include above standard event info on confirmation email. emails are text-only, so do not allow html for now",
    "rows": 4,
    "cols": 50,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "TextArea"
    }
}
```

###<a name='field_confirm_from_name'></a>confirm_from_name [:house:](index.md)

```
{
    "name": "confirm_from_name",
    "type": 2,
    "title": "Confirm From Name",
    "description": "FROM email name used for confirmation emails.",
    "maxlength": 255,
    "size": 45,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_confirm_from_email'></a>confirm_from_email [:house:](index.md)

```
{
    "name": "confirm_from_email",
    "type": 2,
    "title": "Confirm From Email",
    "description": "FROM email address used for confirmation emails.",
    "maxlength": 255,
    "size": 45,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_cc_confirm'></a>cc_confirm [:house:](index.md)

```
{
    "name": "cc_confirm",
    "type": 2,
    "title": "Cc Confirm",
    "description": "comma-separated list of email addresses to cc each time a confirmation is sent",
    "maxlength": 255,
    "size": 45,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_bcc_confirm'></a>bcc_confirm [:house:](index.md)

```
{
    "name": "bcc_confirm",
    "type": 2,
    "title": "Bcc Confirm",
    "description": "comma-separated list of email addresses to bcc each time a confirmation is sent",
    "maxlength": 255,
    "size": 45,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_default_fee_id'></a>default_fee_id [:house:](index.md)

```
{
    "name": "default_fee_id",
    "type": 1,
    "title": "Default Fee ID",
    "description": "FK to civicrm_option_value.",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event"
}
```

###<a name='field_default_discount_fee_id'></a>default_discount_fee_id [:house:](index.md)

```
{
    "name": "default_discount_fee_id",
    "type": 1,
    "title": "Default Discount Fee ID",
    "description": "FK to civicrm_option_value.",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event"
}
```

###<a name='field_thankyou_title'></a>thankyou_title [:house:](index.md)

```
{
    "name": "thankyou_title",
    "type": 2,
    "title": "ThankYou Title",
    "description": "Title for ThankYou page.",
    "maxlength": 255,
    "size": 45,
    "default": "NULL",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_thankyou_text'></a>thankyou_text [:house:](index.md)

```
{
    "name": "thankyou_text",
    "type": 32,
    "title": "ThankYou Text",
    "description": "ThankYou Text.",
    "rows": 6,
    "cols": 50,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "TextArea"
    }
}
```

###<a name='field_thankyou_footer_text'></a>thankyou_footer_text [:house:](index.md)

```
{
    "name": "thankyou_footer_text",
    "type": 32,
    "title": "Footer Text",
    "description": "Footer message.",
    "rows": 6,
    "cols": 50,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "TextArea"
    }
}
```

###<a name='field_is_pay_later'></a>is_pay_later [:house:](index.md)

```
{
    "name": "is_pay_later",
    "type": 16,
    "title": "Pay Later Allowed",
    "description": "if true - allows the user to send payment directly to the org later",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_pay_later_text'></a>pay_later_text [:house:](index.md)

```
{
    "name": "pay_later_text",
    "type": 32,
    "title": "Pay Later Text",
    "description": "The text displayed to the user in the main form",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_pay_later_receipt'></a>pay_later_receipt [:house:](index.md)

```
{
    "name": "pay_later_receipt",
    "type": 32,
    "title": "Pay Later Receipt Text",
    "description": "The receipt sent to the user instead of the normal receipt text",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_is_partial_payment'></a>is_partial_payment [:house:](index.md)

```
{
    "name": "is_partial_payment",
    "type": 16,
    "title": "Partial Payments Enabled",
    "description": "is partial payment enabled for this event",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_initial_amount_label'></a>initial_amount_label [:house:](index.md)

```
{
    "name": "initial_amount_label",
    "type": 2,
    "title": "Initial Amount Label",
    "description": "Initial amount label for partial payment",
    "maxlength": 255,
    "size": 45,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_initial_amount_help_text'></a>initial_amount_help_text [:house:](index.md)

```
{
    "name": "initial_amount_help_text",
    "type": 32,
    "title": "Initial Amount Help Text",
    "description": "Initial amount help text for partial payment",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_min_initial_amount'></a>min_initial_amount [:house:](index.md)

```
{
    "name": "min_initial_amount",
    "type": 1024,
    "title": "Minimum Initial Amount",
    "description": "Minimum initial amount for partial payment",
    "precision": [
        20,
        2
    ],
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_is_multiple_registrations'></a>is_multiple_registrations [:house:](index.md)

```
{
    "name": "is_multiple_registrations",
    "type": 16,
    "title": "Allow Multiple Registrations",
    "description": "if true - allows the user to register multiple participants for event",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_max_additional_participants'></a>max_additional_participants [:house:](index.md)

```
{
    "name": "max_additional_participants",
    "type": 1,
    "title": "Maximum number of additional participants per registration",
    "description": "Maximum number of additional participants that can be registered on a single booking",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event"
}
```

###<a name='field_allow_same_participant_emails'></a>allow_same_participant_emails [:house:](index.md)

```
{
    "name": "allow_same_participant_emails",
    "type": 16,
    "title": "Does Event allow multiple registrations from same email address?",
    "description": "if true - allows the user to register multiple registrations from same email address.",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_has_waitlist'></a>has_waitlist [:house:](index.md)

```
{
    "name": "has_waitlist",
    "type": 16,
    "title": "Waitlist Enabled",
    "description": "Whether the event has waitlist support.",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_requires_approval'></a>requires_approval [:house:](index.md)

```
{
    "name": "requires_approval",
    "type": 16,
    "title": "Requires Approval",
    "description": "Whether participants require approval before they can finish registering.",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_expiration_time'></a>expiration_time [:house:](index.md)

```
{
    "name": "expiration_time",
    "type": 1,
    "title": "Expiration Time",
    "description": "Expire pending but unconfirmed registrations after this many hours.",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_allow_selfcancelxfer'></a>allow_selfcancelxfer [:house:](index.md)

```
{
    "name": "allow_selfcancelxfer",
    "type": 16,
    "title": "Allow Self-service Cancellation or Transfer",
    "description": "Allow self service cancellation or transfer for event?",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_selfcancelxfer_time'></a>selfcancelxfer_time [:house:](index.md)

```
{
    "name": "selfcancelxfer_time",
    "type": 1,
    "title": "Self-service Cancellation or Transfer Time",
    "description": "Number of hours prior to event start date to allow self-service cancellation or transfer.",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_waitlist_text'></a>waitlist_text [:house:](index.md)

```
{
    "name": "waitlist_text",
    "type": 32,
    "title": "Waitlist Text",
    "description": "Text to display when the event is full, but participants can signup for a waitlist.",
    "rows": 4,
    "cols": 60,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "TextArea"
    }
}
```

###<a name='field_approval_req_text'></a>approval_req_text [:house:](index.md)

```
{
    "name": "approval_req_text",
    "type": 32,
    "title": "Approval Req Text",
    "description": "Text to display when the approval is required to complete registration for an event.",
    "rows": 4,
    "cols": 60,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "TextArea"
    }
}
```

###<a name='field_is_template'></a>is_template [:house:](index.md)

```
{
    "name": "is_template",
    "type": 16,
    "title": "Is an Event Template",
    "description": "whether the event has template",
    "required": true,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_template_title'></a>template_title [:house:](index.md)

```
{
    "name": "template_title",
    "type": 2,
    "title": "Event Template Title",
    "description": "Event Template Title",
    "maxlength": 255,
    "size": 45,
    "import": true,
    "where": "civicrm_event.template_title",
    "headerPattern": "\/(template.)?title$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_created_id'></a>created_id [:house:](index.md)

```
{
    "name": "created_id",
    "type": 1,
    "title": "Created By Contact ID",
    "description": "FK to civicrm_contact, who created this event",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "FKClassName": "CRM_Contact_DAO_Contact"
}
```

###<a name='field_created_date'></a>created_date [:house:](index.md)

```
{
    "name": "created_date",
    "type": 12,
    "title": "Event Created Date",
    "description": "Date and time that event was created.",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event"
}
```

###<a name='field_currency'></a>currency [:house:](index.md)

```
{
    "name": "currency",
    "type": 2,
    "title": "Currency",
    "description": "3 character string, value from config setting or input via user.",
    "maxlength": 3,
    "size": 4,
    "import": true,
    "where": "civicrm_event.currency",
    "headerPattern": "\/cur(rency)?\/i",
    "dataPattern": "\/^[A-Z]{3}$\/i",
    "export": true,
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
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
    "description": "The campaign for which this event has been created.",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "FKClassName": "CRM_Campaign_DAO_Campaign",
    "html": {
        "type": "EntityRef"
    },
    "pseudoconstant": {
        "table": "civicrm_campaign",
        "keyColumn": "id",
        "labelColumn": "title"
    }
}
```

###<a name='field_is_share'></a>is_share [:house:](index.md)

```
{
    "name": "is_share",
    "type": 16,
    "title": "Is shared through social media",
    "description": "Can people share the event through social media?",
    "default": "1",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_is_confirm_enabled'></a>is_confirm_enabled [:house:](index.md)

```
{
    "name": "is_confirm_enabled",
    "type": 16,
    "title": "Is the booking confirmation screen enabled?",
    "description": "If false, the event booking confirmation screen gets skipped",
    "default": "1",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_parent_event_id'></a>parent_event_id [:house:](index.md)

```
{
    "name": "parent_event_id",
    "type": 1,
    "title": "Parent Event ID",
    "description": "Implicit FK to civicrm_event: parent event",
    "default": "NULL",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "EntityRef"
    }
}
```

###<a name='field_slot_label_id'></a>slot_label_id [:house:](index.md)

```
{
    "name": "slot_label_id",
    "type": 1,
    "title": "Subevent Slot Label ID",
    "description": "Subevent slot label. Implicit FK to civicrm_option_value where option_group = conference_slot.",
    "default": "NULL",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "Select"
    }
}
```

###<a name='field_dedupe_rule_group_id'></a>dedupe_rule_group_id [:house:](index.md)

```
{
    "name": "dedupe_rule_group_id",
    "type": 1,
    "title": "Dedupe Rule",
    "description": "Rule to use when matching registrations for this event",
    "default": "NULL",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "FKClassName": "CRM_Dedupe_DAO_RuleGroup",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "table": "civicrm_dedupe_rule_group",
        "keyColumn": "id",
        "labelColumn": "title",
        "nameColumn": "name"
    }
}
```

###<a name='field_is_billing_required'></a>is_billing_required [:house:](index.md)

```
{
    "name": "is_billing_required",
    "type": 16,
    "title": "Is billing block required",
    "description": "if true than billing block is required this event",
    "table_name": "civicrm_event",
    "entity": "Event",
    "bao": "CRM_Event_BAO_Event",
    "html": {
        "type": "CheckBox"
    }
}
```
###### This file was automatically generated. Do not edit directly.