
#<a name='top'></a>Contact [:house:](index.md)


##<a name='create_example'></a>Example!!!!! [:house:](index.md)


###<a name='create_example_params'></a>Params [:house:](index.md)

```
{
    "Values": {
        "first_name": "Anthony",
        "middle_name": "J.",
        "last_name": "Anderson",
        "contact_type": "Individual"
    }
}
```

###<a name='create_example_result'></a>Result [:house:](index.md)

```
{
    "id": "861",
    "contact_type": "Individual",
    "contact_sub_type": null,
    "do_not_email": "0",
    "do_not_phone": "0",
    "do_not_mail": "0",
    "do_not_sms": "0",
    "do_not_trade": "0",
    "is_opt_out": "0",
    "legal_identifier": null,
    "external_identifier": null,
    "sort_name": null,
    "display_name": null,
    "nick_name": null,
    "legal_name": null,
    "image_URL": null,
    "preferred_communication_method": "",
    "preferred_language": null,
    "preferred_mail_format": "Both",
    "hash": "dc9180e35826b0b6e271149872480446",
    "api_key": null,
    "source": null,
    "first_name": "Anthony",
    "middle_name": "J.",
    "last_name": "Anderson",
    "prefix_id": null,
    "suffix_id": null,
    "formal_title": null,
    "communication_style_id": null,
    "email_greeting_id": "1",
    "email_greeting_custom": null,
    "email_greeting_display": null,
    "postal_greeting_id": "1",
    "postal_greeting_custom": null,
    "postal_greeting_display": null,
    "addressee_id": "1",
    "addressee_custom": null,
    "addressee_display": null,
    "job_title": null,
    "gender_id": null,
    "birth_date": null,
    "is_deceased": "0",
    "deceased_date": null,
    "household_name": null,
    "primary_contact_id": null,
    "organization_name": null,
    "sic_code": null,
    "user_unique_id": null,
    "employer_id": null,
    "is_deleted": "0",
    "created_date": "2017-03-10 10:28:25",
    "modified_date": "2017-03-10 10:28:25"
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

    },
    {

    },
    {

    },
    {

    },
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

##<a name='action_create'></a>Action Contact.create [:house:](index.md)

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

##<a name='action_delete'></a>Action Contact.delete [:house:](index.md)

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

##<a name='action_get'></a>Action Contact.get [:house:](index.md)

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

##<a name='action_getActions'></a>Action Contact.getActions [:house:](index.md)

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

##<a name='action_getFields'></a>Action Contact.getFields [:house:](index.md)

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

##<a name='action_update'></a>Action Contact.update [:house:](index.md)

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

##<a name='fields'></a>Contact Fields [:house:](index.md)


###<a name='field_id'></a>id [:house:](index.md)

```
{
    "name": "id",
    "type": 1,
    "title": "Contact ID",
    "description": "Unique Contact ID",
    "required": true,
    "import": true,
    "where": "civicrm_contact.id",
    "headerPattern": "\/internal|contact?|id$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact"
}
```

###<a name='field_contact_type'></a>contact_type [:house:](index.md)

```
{
    "name": "contact_type",
    "type": 2,
    "title": "Contact Type",
    "description": "Type of Contact.",
    "maxlength": 64,
    "size": 30,
    "export": true,
    "where": "civicrm_contact.contact_type",
    "headerPattern": "",
    "dataPattern": "",
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "table": "civicrm_contact_type",
        "keyColumn": "name",
        "labelColumn": "label",
        "condition": "parent_id IS NULL"
    }
}
```

###<a name='field_contact_sub_type'></a>contact_sub_type [:house:](index.md)

```
{
    "name": "contact_sub_type",
    "type": 2,
    "title": "Contact Subtype",
    "description": "May be used to over-ride contact view and edit templates.",
    "maxlength": 255,
    "size": 45,
    "import": true,
    "where": "civicrm_contact.contact_sub_type",
    "headerPattern": "\/C(ontact )?(subtype|sub-type|sub type)\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "table": "civicrm_contact_type",
        "keyColumn": "name",
        "labelColumn": "label",
        "condition": "parent_id IS NOT NULL"
    }
}
```

###<a name='field_do_not_email'></a>do_not_email [:house:](index.md)

```
{
    "name": "do_not_email",
    "type": 16,
    "title": "Do Not Email",
    "import": true,
    "where": "civicrm_contact.do_not_email",
    "headerPattern": "\/d(o )?(not )?(email)\/i",
    "dataPattern": "\/^\\d{1,}$\/",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_do_not_phone'></a>do_not_phone [:house:](index.md)

```
{
    "name": "do_not_phone",
    "type": 16,
    "title": "Do Not Phone",
    "import": true,
    "where": "civicrm_contact.do_not_phone",
    "headerPattern": "\/d(o )?(not )?(call|phone)\/i",
    "dataPattern": "\/^\\d{1,}$\/",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_do_not_mail'></a>do_not_mail [:house:](index.md)

```
{
    "name": "do_not_mail",
    "type": 16,
    "title": "Do Not Mail",
    "import": true,
    "where": "civicrm_contact.do_not_mail",
    "headerPattern": "\/^(d(o\\s)?n(ot\\s)?mail)|(\\w*)?bulk\\s?(\\w*)$\/i",
    "dataPattern": "\/^\\d{1,}$\/",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_do_not_sms'></a>do_not_sms [:house:](index.md)

```
{
    "name": "do_not_sms",
    "type": 16,
    "title": "Do Not Sms",
    "import": true,
    "where": "civicrm_contact.do_not_sms",
    "headerPattern": "\/d(o )?(not )?(sms)\/i",
    "dataPattern": "\/^\\d{1,}$\/",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_do_not_trade'></a>do_not_trade [:house:](index.md)

```
{
    "name": "do_not_trade",
    "type": 16,
    "title": "Do Not Trade",
    "import": true,
    "where": "civicrm_contact.do_not_trade",
    "headerPattern": "\/d(o )?(not )?(trade)\/i",
    "dataPattern": "\/^\\d{1,}$\/",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_is_opt_out'></a>is_opt_out [:house:](index.md)

```
{
    "name": "is_opt_out",
    "type": 16,
    "title": "No Bulk Emails (User Opt Out)",
    "description": "Has the contact opted out from receiving all bulk email from the organization or site domain?",
    "required": true,
    "import": true,
    "where": "civicrm_contact.is_opt_out",
    "headerPattern": "",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_legal_identifier'></a>legal_identifier [:house:](index.md)

```
{
    "name": "legal_identifier",
    "type": 2,
    "title": "Legal Identifier",
    "description": "May be used for SSN, EIN\/TIN, Household ID (census) or other applicable unique legal\/government ID.\n    ",
    "maxlength": 32,
    "size": 20,
    "import": true,
    "where": "civicrm_contact.legal_identifier",
    "headerPattern": "\/legal\\s?id\/i",
    "dataPattern": "\/\\w+?\\d{5,}\/",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_external_identifier'></a>external_identifier [:house:](index.md)

```
{
    "name": "external_identifier",
    "type": 2,
    "title": "External Identifier",
    "description": "Unique trusted external ID (generally from a legacy app\/datasource). Particularly useful for deduping operations.",
    "maxlength": 64,
    "size": 8,
    "import": true,
    "where": "civicrm_contact.external_identifier",
    "headerPattern": "\/external\\s?id\/i",
    "dataPattern": "\/^\\d{11,}$\/",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_sort_name'></a>sort_name [:house:](index.md)

```
{
    "name": "sort_name",
    "type": 2,
    "title": "Sort Name",
    "description": "Name used for sorting different contact types",
    "maxlength": 128,
    "size": 30,
    "export": true,
    "where": "civicrm_contact.sort_name",
    "headerPattern": "",
    "dataPattern": "",
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_display_name'></a>display_name [:house:](index.md)

```
{
    "name": "display_name",
    "type": 2,
    "title": "Display Name",
    "description": "Formatted name representing preferred format for display\/print\/other output.",
    "maxlength": 128,
    "size": 30,
    "export": true,
    "where": "civicrm_contact.display_name",
    "headerPattern": "",
    "dataPattern": "",
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_nick_name'></a>nick_name [:house:](index.md)

```
{
    "name": "nick_name",
    "type": 2,
    "title": "Nickname",
    "description": "Nickname.",
    "maxlength": 128,
    "size": 30,
    "import": true,
    "where": "civicrm_contact.nick_name",
    "headerPattern": "\/n(ick\\s)name|nick$\/i",
    "dataPattern": "\/^\\w+$\/",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_legal_name'></a>legal_name [:house:](index.md)

```
{
    "name": "legal_name",
    "type": 2,
    "title": "Legal Name",
    "description": "Legal Name.",
    "maxlength": 128,
    "size": 30,
    "import": true,
    "where": "civicrm_contact.legal_name",
    "headerPattern": "\/^legal|(l(egal\\s)?name)$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_image_URL'></a>image_URL [:house:](index.md)

```
{
    "name": "image_URL",
    "type": 32,
    "title": "Image Url",
    "description": "optional URL for preferred image (photo, logo, etc.) to display for this contact.",
    "import": true,
    "where": "civicrm_contact.image_URL",
    "headerPattern": "",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "File"
    }
}
```

###<a name='field_preferred_communication_method'></a>preferred_communication_method [:house:](index.md)

```
{
    "name": "preferred_communication_method",
    "type": 2,
    "title": "Preferred Communication Method",
    "description": "What is the preferred mode of communication.",
    "maxlength": 255,
    "size": 45,
    "import": true,
    "where": "civicrm_contact.preferred_communication_method",
    "headerPattern": "\/^p(ref\\w*\\s)?c(omm\\w*)|( meth\\w*)$\/i",
    "dataPattern": "\/^\\w+$\/",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "optionGroupName": "preferred_communication_method",
        "optionEditPath": "civicrm\/admin\/options\/preferred_communication_method"
    }
}
```

###<a name='field_preferred_language'></a>preferred_language [:house:](index.md)

```
{
    "name": "preferred_language",
    "type": 2,
    "title": "Preferred Language",
    "description": "Which language is preferred for communication. FK to languages in civicrm_option_value.",
    "maxlength": 5,
    "size": 6,
    "import": true,
    "where": "civicrm_contact.preferred_language",
    "headerPattern": "\/^lang\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "optionGroupName": "languages",
        "keyColumn": "name",
        "optionEditPath": "civicrm\/admin\/options\/languages"
    }
}
```

###<a name='field_preferred_mail_format'></a>preferred_mail_format [:house:](index.md)

```
{
    "name": "preferred_mail_format",
    "type": 2,
    "title": "Preferred Mail Format",
    "description": "What is the preferred mode of sending an email.",
    "maxlength": 8,
    "size": 8,
    "import": true,
    "where": "civicrm_contact.preferred_mail_format",
    "headerPattern": "\/^p(ref\\w*\\s)?m(ail\\s)?f(orm\\w*)$\/i",
    "dataPattern": "",
    "export": true,
    "default": "Both",
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "callback": "CRM_Core_SelectValues::pmf"
    }
}
```

###<a name='field_hash'></a>hash [:house:](index.md)

```
{
    "name": "hash",
    "type": 2,
    "title": "Contact Hash",
    "description": "Key for validating requests related to this contact.",
    "maxlength": 32,
    "size": 20,
    "export": true,
    "where": "civicrm_contact.hash",
    "headerPattern": "",
    "dataPattern": "",
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact"
}
```

###<a name='field_api_key'></a>api_key [:house:](index.md)

```
{
    "name": "api_key",
    "type": 2,
    "title": "Api Key",
    "description": "API Key for validating requests related to this contact.",
    "maxlength": 32,
    "size": 20,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact"
}
```

###<a name='field_source'></a>source [:house:](index.md)

```
{
    "name": "source",
    "type": 2,
    "title": "Contact Source",
    "description": "where contact come from, e.g. import, donate module insert...",
    "maxlength": 255,
    "size": 30,
    "import": true,
    "where": "civicrm_contact.source",
    "headerPattern": "\/(C(ontact\\s)?Source)$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_first_name'></a>first_name [:house:](index.md)

```
{
    "name": "first_name",
    "type": 2,
    "title": "First Name",
    "description": "First Name.",
    "maxlength": 64,
    "size": 30,
    "import": true,
    "where": "civicrm_contact.first_name",
    "headerPattern": "\/^first|(f(irst\\s)?name)$\/i",
    "dataPattern": "\/^\\w+$\/",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_middle_name'></a>middle_name [:house:](index.md)

```
{
    "name": "middle_name",
    "type": 2,
    "title": "Middle Name",
    "description": "Middle Name.",
    "maxlength": 64,
    "size": 30,
    "import": true,
    "where": "civicrm_contact.middle_name",
    "headerPattern": "\/^middle|(m(iddle\\s)?name)$\/i",
    "dataPattern": "\/^\\w+$\/",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_last_name'></a>last_name [:house:](index.md)

```
{
    "name": "last_name",
    "type": 2,
    "title": "Last Name",
    "description": "Last Name.",
    "maxlength": 64,
    "size": 30,
    "import": true,
    "where": "civicrm_contact.last_name",
    "headerPattern": "\/^last|(l(ast\\s)?name)$\/i",
    "dataPattern": "\/^\\w+(\\s\\w+)?+$\/",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_prefix_id'></a>prefix_id [:house:](index.md)

```
{
    "name": "prefix_id",
    "type": 1,
    "title": "Individual Prefix",
    "description": "Prefix or Title for name (Ms, Mr...). FK to prefix ID",
    "import": true,
    "where": "civicrm_contact.prefix_id",
    "headerPattern": "\/^(prefix|title)\/i",
    "dataPattern": "\/^(mr|ms|mrs|sir|dr)\\.?$\/i",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "optionGroupName": "individual_prefix",
        "optionEditPath": "civicrm\/admin\/options\/individual_prefix"
    }
}
```

###<a name='field_suffix_id'></a>suffix_id [:house:](index.md)

```
{
    "name": "suffix_id",
    "type": 1,
    "title": "Individual Suffix",
    "description": "Suffix for name (Jr, Sr...). FK to suffix ID",
    "import": true,
    "where": "civicrm_contact.suffix_id",
    "headerPattern": "\/^suffix$\/i",
    "dataPattern": "\/^(sr|jr)\\.?|i{2,}$\/",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "optionGroupName": "individual_suffix",
        "optionEditPath": "civicrm\/admin\/options\/individual_suffix"
    }
}
```

###<a name='field_formal_title'></a>formal_title [:house:](index.md)

```
{
    "name": "formal_title",
    "type": 2,
    "title": "Formal Title",
    "description": "Formal (academic or similar) title in front of name. (Prof., Dr. etc.)",
    "maxlength": 64,
    "size": 30,
    "import": true,
    "where": "civicrm_contact.formal_title",
    "headerPattern": "\/^title\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_communication_style_id'></a>communication_style_id [:house:](index.md)

```
{
    "name": "communication_style_id",
    "type": 1,
    "title": "Communication Style",
    "description": "Communication style (e.g. formal vs. familiar) to use with this contact. FK to communication styles in civicrm_option_value.",
    "export": true,
    "where": "civicrm_contact.communication_style_id",
    "headerPattern": "",
    "dataPattern": "",
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "optionGroupName": "communication_style",
        "optionEditPath": "civicrm\/admin\/options\/communication_style"
    }
}
```

###<a name='field_email_greeting_id'></a>email_greeting_id [:house:](index.md)

```
{
    "name": "email_greeting_id",
    "type": 1,
    "title": "Email Greeting ID",
    "description": "FK to civicrm_option_value.id, that has to be valid registered Email Greeting.",
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact"
}
```

###<a name='field_email_greeting_custom'></a>email_greeting_custom [:house:](index.md)

```
{
    "name": "email_greeting_custom",
    "type": 2,
    "title": "Email Greeting Custom",
    "description": "Custom Email Greeting.",
    "maxlength": 128,
    "size": 45,
    "import": true,
    "where": "civicrm_contact.email_greeting_custom",
    "headerPattern": "",
    "dataPattern": "",
    "export": false,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_email_greeting_display'></a>email_greeting_display [:house:](index.md)

```
{
    "name": "email_greeting_display",
    "type": 2,
    "title": "Email Greeting",
    "description": "Cache Email Greeting.",
    "maxlength": 255,
    "size": 45,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_postal_greeting_id'></a>postal_greeting_id [:house:](index.md)

```
{
    "name": "postal_greeting_id",
    "type": 1,
    "title": "Postal Greeting ID",
    "description": "FK to civicrm_option_value.id, that has to be valid registered Postal Greeting.",
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_postal_greeting_custom'></a>postal_greeting_custom [:house:](index.md)

```
{
    "name": "postal_greeting_custom",
    "type": 2,
    "title": "Postal Greeting Custom",
    "description": "Custom Postal greeting.",
    "maxlength": 128,
    "size": 45,
    "import": true,
    "where": "civicrm_contact.postal_greeting_custom",
    "headerPattern": "",
    "dataPattern": "",
    "export": false,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_postal_greeting_display'></a>postal_greeting_display [:house:](index.md)

```
{
    "name": "postal_greeting_display",
    "type": 2,
    "title": "Postal Greeting",
    "description": "Cache Postal greeting.",
    "maxlength": 255,
    "size": 45,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_addressee_id'></a>addressee_id [:house:](index.md)

```
{
    "name": "addressee_id",
    "type": 1,
    "title": "Addressee ID",
    "description": "FK to civicrm_option_value.id, that has to be valid registered Addressee.",
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact"
}
```

###<a name='field_addressee_custom'></a>addressee_custom [:house:](index.md)

```
{
    "name": "addressee_custom",
    "type": 2,
    "title": "Addressee Custom",
    "description": "Custom Addressee.",
    "maxlength": 128,
    "size": 45,
    "import": true,
    "where": "civicrm_contact.addressee_custom",
    "headerPattern": "",
    "dataPattern": "",
    "export": false,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_addressee_display'></a>addressee_display [:house:](index.md)

```
{
    "name": "addressee_display",
    "type": 2,
    "title": "Addressee",
    "description": "Cache Addressee.",
    "maxlength": 255,
    "size": 45,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_job_title'></a>job_title [:house:](index.md)

```
{
    "name": "job_title",
    "type": 2,
    "title": "Job Title",
    "description": "Job Title",
    "maxlength": 255,
    "size": 30,
    "import": true,
    "where": "civicrm_contact.job_title",
    "headerPattern": "\/^job|(j(ob\\s)?title)$\/i",
    "dataPattern": "\/\/",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_gender_id'></a>gender_id [:house:](index.md)

```
{
    "name": "gender_id",
    "type": 1,
    "title": "Gender",
    "description": "FK to gender ID",
    "import": true,
    "where": "civicrm_contact.gender_id",
    "headerPattern": "\/^gender$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "optionGroupName": "gender",
        "optionEditPath": "civicrm\/admin\/options\/gender"
    }
}
```

###<a name='field_birth_date'></a>birth_date [:house:](index.md)

```
{
    "name": "birth_date",
    "type": 4,
    "title": "Birth Date",
    "description": "Date of birth",
    "import": true,
    "where": "civicrm_contact.birth_date",
    "headerPattern": "\/^birth|(b(irth\\s)?date)|D(\\W*)O(\\W*)B(\\W*)$\/i",
    "dataPattern": "\/\\d{4}-?\\d{2}-?\\d{2}\/",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Select Date",
        "format": "birth"
    }
}
```

###<a name='field_is_deceased'></a>is_deceased [:house:](index.md)

```
{
    "name": "is_deceased",
    "type": 16,
    "title": "Deceased",
    "import": true,
    "where": "civicrm_contact.is_deceased",
    "headerPattern": "\/i(s\\s)?d(eceased)$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_deceased_date'></a>deceased_date [:house:](index.md)

```
{
    "name": "deceased_date",
    "type": 4,
    "title": "Deceased Date",
    "description": "Date of deceased",
    "import": true,
    "where": "civicrm_contact.deceased_date",
    "headerPattern": "\/^deceased|(d(eceased\\s)?date)$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Select Date",
        "format": "birth"
    }
}
```

###<a name='field_household_name'></a>household_name [:house:](index.md)

```
{
    "name": "household_name",
    "type": 2,
    "title": "Household Name",
    "description": "Household Name.",
    "maxlength": 128,
    "size": 30,
    "import": true,
    "where": "civicrm_contact.household_name",
    "headerPattern": "\/^household|(h(ousehold\\s)?name)$\/i",
    "dataPattern": "\/^\\w+$\/",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_primary_contact_id'></a>primary_contact_id [:house:](index.md)

```
{
    "name": "primary_contact_id",
    "type": 1,
    "title": "Household Primary Contact ID",
    "description": "Optional FK to Primary Contact for this household.",
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "FKClassName": "CRM_Contact_DAO_Contact",
    "html": {
        "type": "Select"
    }
}
```

###<a name='field_organization_name'></a>organization_name [:house:](index.md)

```
{
    "name": "organization_name",
    "type": 2,
    "title": "Organization Name",
    "description": "Organization Name.",
    "maxlength": 128,
    "size": 30,
    "import": true,
    "where": "civicrm_contact.organization_name",
    "headerPattern": "\/^organization|(o(rganization\\s)?name)$\/i",
    "dataPattern": "\/^\\w+$\/",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_sic_code'></a>sic_code [:house:](index.md)

```
{
    "name": "sic_code",
    "type": 2,
    "title": "Sic Code",
    "description": "Standard Industry Classification Code.",
    "maxlength": 8,
    "size": 8,
    "import": true,
    "where": "civicrm_contact.sic_code",
    "headerPattern": "\/^sic|(s(ic\\s)?code)$\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_user_unique_id'></a>user_unique_id [:house:](index.md)

```
{
    "name": "user_unique_id",
    "type": 2,
    "title": "Unique ID (OpenID)",
    "description": "the OpenID (or OpenID-style http:\/\/username.domain\/) unique identifier for this contact mainly used for logging in to CiviCRM",
    "maxlength": 255,
    "size": 45,
    "import": true,
    "where": "civicrm_contact.user_unique_id",
    "headerPattern": "\/^Open\\s?ID|u(niq\\w*)?\\s?ID\/i",
    "dataPattern": "\/^[\\w\\\/\\:\\.]+$\/",
    "export": true,
    "rule": "url",
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_employer_id'></a>employer_id [:house:](index.md)

```
{
    "name": "employer_id",
    "type": 1,
    "title": "Current Employer",
    "description": "OPTIONAL FK to civicrm_contact record.",
    "export": true,
    "where": "civicrm_contact.employer_id",
    "headerPattern": "",
    "dataPattern": "",
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "FKClassName": "CRM_Contact_DAO_Contact",
    "html": {
        "type": "EntityRef"
    }
}
```

###<a name='field_is_deleted'></a>is_deleted [:house:](index.md)

```
{
    "name": "is_deleted",
    "type": 16,
    "title": "Contact is in Trash",
    "required": true,
    "export": true,
    "where": "civicrm_contact.is_deleted",
    "headerPattern": "",
    "dataPattern": "",
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_created_date'></a>created_date [:house:](index.md)

```
{
    "name": "created_date",
    "type": 256,
    "title": "Created Date",
    "description": "When was the contact was created.",
    "required": false,
    "export": true,
    "where": "civicrm_contact.created_date",
    "headerPattern": "",
    "dataPattern": "",
    "default": "NULL",
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact"
}
```

###<a name='field_modified_date'></a>modified_date [:house:](index.md)

```
{
    "name": "modified_date",
    "type": 256,
    "title": "Modified Date",
    "description": "When was the contact (or closely related entity) was created or modified or deleted.",
    "required": false,
    "export": true,
    "where": "civicrm_contact.modified_date",
    "headerPattern": "",
    "dataPattern": "",
    "default": "CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",
    "table_name": "civicrm_contact",
    "entity": "Contact",
    "bao": "CRM_Contact_BAO_Contact"
}
```
###### This file was automatically generated. Do not edit directly.