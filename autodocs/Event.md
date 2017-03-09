#<a name='Event.top'></a>Event

##<a name='Event.fields'></a>Event Fields

###<a name='Event.field_$field'></a>id

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
###<a name='Event.field_$field'></a>title

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
###<a name='Event.field_$field'></a>summary

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
###<a name='Event.field_$field'></a>description

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
###<a name='Event.field_$field'></a>event_type_id

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
###<a name='Event.field_$field'></a>participant_listing_id

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
###<a name='Event.field_$field'></a>is_public

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
###<a name='Event.field_$field'></a>start_date

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
###<a name='Event.field_$field'></a>end_date

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
###<a name='Event.field_$field'></a>is_online_registration

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
###<a name='Event.field_$field'></a>registration_link_text

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
###<a name='Event.field_$field'></a>registration_start_date

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
###<a name='Event.field_$field'></a>registration_end_date

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
###<a name='Event.field_$field'></a>max_participants

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
###<a name='Event.field_$field'></a>event_full_text

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
###<a name='Event.field_$field'></a>is_monetary

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
###<a name='Event.field_$field'></a>financial_type_id

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
###<a name='Event.field_$field'></a>payment_processor

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
###<a name='Event.field_$field'></a>is_map

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
###<a name='Event.field_$field'></a>is_active

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
###<a name='Event.field_$field'></a>fee_label

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
###<a name='Event.field_$field'></a>is_show_location

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
###<a name='Event.field_$field'></a>loc_block_id

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
###<a name='Event.field_$field'></a>default_role_id

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
###<a name='Event.field_$field'></a>intro_text

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
###<a name='Event.field_$field'></a>footer_text

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
###<a name='Event.field_$field'></a>confirm_title

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
###<a name='Event.field_$field'></a>confirm_text

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
###<a name='Event.field_$field'></a>confirm_footer_text

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
###<a name='Event.field_$field'></a>is_email_confirm

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
###<a name='Event.field_$field'></a>confirm_email_text

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
###<a name='Event.field_$field'></a>confirm_from_name

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
###<a name='Event.field_$field'></a>confirm_from_email

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
###<a name='Event.field_$field'></a>cc_confirm

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
###<a name='Event.field_$field'></a>bcc_confirm

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
###<a name='Event.field_$field'></a>default_fee_id

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
###<a name='Event.field_$field'></a>default_discount_fee_id

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
###<a name='Event.field_$field'></a>thankyou_title

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
###<a name='Event.field_$field'></a>thankyou_text

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
###<a name='Event.field_$field'></a>thankyou_footer_text

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
###<a name='Event.field_$field'></a>is_pay_later

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
###<a name='Event.field_$field'></a>pay_later_text

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
###<a name='Event.field_$field'></a>pay_later_receipt

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
###<a name='Event.field_$field'></a>is_partial_payment

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
###<a name='Event.field_$field'></a>initial_amount_label

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
###<a name='Event.field_$field'></a>initial_amount_help_text

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
###<a name='Event.field_$field'></a>min_initial_amount

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
###<a name='Event.field_$field'></a>is_multiple_registrations

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
###<a name='Event.field_$field'></a>max_additional_participants

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
###<a name='Event.field_$field'></a>allow_same_participant_emails

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
###<a name='Event.field_$field'></a>has_waitlist

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
###<a name='Event.field_$field'></a>requires_approval

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
###<a name='Event.field_$field'></a>expiration_time

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
###<a name='Event.field_$field'></a>allow_selfcancelxfer

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
###<a name='Event.field_$field'></a>selfcancelxfer_time

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
###<a name='Event.field_$field'></a>waitlist_text

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
###<a name='Event.field_$field'></a>approval_req_text

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
###<a name='Event.field_$field'></a>is_template

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
###<a name='Event.field_$field'></a>template_title

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
###<a name='Event.field_$field'></a>created_id

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
###<a name='Event.field_$field'></a>created_date

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
###<a name='Event.field_$field'></a>currency

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
###<a name='Event.field_$field'></a>campaign_id

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
###<a name='Event.field_$field'></a>is_share

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
###<a name='Event.field_$field'></a>is_confirm_enabled

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
###<a name='Event.field_$field'></a>parent_event_id

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
###<a name='Event.field_$field'></a>slot_label_id

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
###<a name='Event.field_$field'></a>dedupe_rule_group_id

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
###<a name='Event.field_$field'></a>is_billing_required

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
##<a name='Event.action_create'></a>Action Event.create

Base class for all create actions.: 

##<a name='Event.action_create_params'></a>Params

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
### Event.create hook calls: 
### Event.create events
##<a name='Event.action_delete'></a>Action Event.delete

"delete" inherits all the abilities of "get": 

##<a name='Event.action_delete_params'></a>Params

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
### Event.delete hook calls: 
### Event.delete events
##<a name='Event.action_get'></a>Action Event.get

Base class for all get actions.: 

##<a name='Event.action_get_params'></a>Params

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
### Event.get hook calls: 
### Event.get events
##<a name='Event.action_getActions'></a>Action Event.getActions

Get actions for an entity with a list of accepted params: 

##<a name='Event.action_getActions_params'></a>Params

* **checkPermissions** (`??`: `false`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **options** (`array`: `[]`)
  Rarely used options.
### Event.getActions hook calls: 
### Event.getActions events
##<a name='Event.action_getFields'></a>Action Event.getFields

Get fields for an entity: 

##<a name='Event.action_getFields_params'></a>Params

* **checkPermissions** (`??`: `false`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **options** (`array`: `[]`)
  Rarely used options.
### Event.getFields hook calls: 
### Event.getFields events
##<a name='Event.action_update'></a>Action Event.update

Here's an idea... if we use one action to extend another, "update" inherits all the abilities of "get": 

##<a name='Event.action_update_params'></a>Params

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
### Event.update hook calls: 
### Event.update events
###### This file was automatically generated. Do not edit directly.