
#<a name='top'></a>Contribution [:house:](index.md)


##<a name='action_create'></a>Action Contribution.create [:house:](index.md)

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
        "contact_id": "1248",
        "financial_type_id": 1,
        "total_amount": 7.3
    }
}
```

###<a name='create_example_result'></a>Result [:house:](index.md)

```
{
    "id": 117,
    "contact_id": "1248",
    "financial_type_id": 1,
    "contribution_page_id": null,
    "payment_instrument_id": 4,
    "receive_date": null,
    "non_deductible_amount": null,
    "total_amount": "7.3",
    "fee_amount": 0,
    "net_amount": 7.3,
    "trxn_id": null,
    "invoice_id": null,
    "currency": "USD",
    "cancel_date": null,
    "cancel_reason": null,
    "receipt_date": null,
    "thankyou_date": null,
    "source": null,
    "amount_level": null,
    "contribution_recur_id": null,
    "is_test": null,
    "is_pay_later": null,
    "contribution_status_id": "1",
    "address_id": null,
    "check_number": null,
    "campaign_id": null,
    "creditnote_id": null,
    "tax_amount": null,
    "revenue_recognition_date": null
}
```

###<a name='create_example_events'></a>Events [:house:](index.md)


####<a name='create_example_events_0'></a>api.authorize [:house:](index.md)

> [Civi\API\Event\AuthorizeEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/AuthorizeEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `authorize()`, `isAuthorized()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {

}*Methods*:`__construct()`, `setValue()`, `_run()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`$params: {
    "values": {
        "contact_id": "1248",
        "financial_type_id": 1,
        "total_amount": 7.3
    },
    "bao": {
        "_relatedObjects": [

        ],
        "_component": null,
        "trxn_result_code": null,
        "id": null,
        "contact_id": null,
        "financial_type_id": null,
        "contribution_page_id": null,
        "payment_instrument_id": null,
        "receive_date": null,
        "non_deductible_amount": null,
        "total_amount": null,
        "fee_amount": null,
        "net_amount": null,
        "trxn_id": null,
        "invoice_id": null,
        "currency": null,
        "cancel_date": null,
        "cancel_reason": null,
        "receipt_date": null,
        "thankyou_date": null,
        "source": null,
        "amount_level": null,
        "contribution_recur_id": null,
        "is_test": null,
        "is_pay_later": null,
        "contribution_status_id": null,
        "address_id": null,
        "check_number": null,
        "campaign_id": null,
        "creditnote_id": null,
        "tax_amount": null,
        "revenue_recognition_date": null,
        "_DB_DataObject_version": "1.8.12",
        "__table": "civicrm_contribution",
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


####<a name='create_example_events_1'></a>api.prepare [:house:](index.md)

> [Civi\API\Event\PrepareEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/PrepareEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `setApiRequest()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {

}*Methods*:`__construct()`, `setValue()`, `_run()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`$params: {
    "values": {
        "contact_id": "1248",
        "financial_type_id": 1,
        "total_amount": 7.3
    },
    "bao": {
        "_relatedObjects": [

        ],
        "_component": null,
        "trxn_result_code": null,
        "id": null,
        "contact_id": null,
        "financial_type_id": null,
        "contribution_page_id": null,
        "payment_instrument_id": null,
        "receive_date": null,
        "non_deductible_amount": null,
        "total_amount": null,
        "fee_amount": null,
        "net_amount": null,
        "trxn_id": null,
        "invoice_id": null,
        "currency": null,
        "cancel_date": null,
        "cancel_reason": null,
        "receipt_date": null,
        "thankyou_date": null,
        "source": null,
        "amount_level": null,
        "contribution_recur_id": null,
        "is_test": null,
        "is_pay_later": null,
        "contribution_status_id": null,
        "address_id": null,
        "check_number": null,
        "campaign_id": null,
        "creditnote_id": null,
        "tax_amount": null,
        "revenue_recognition_date": null,
        "_DB_DataObject_version": "1.8.12",
        "__table": "civicrm_contribution",
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


####<a name='create_example_events_2'></a>api.authorize [:house:](index.md)

> [Civi\API\Event\AuthorizeEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/AuthorizeEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `authorize()`, `isAuthorized()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {
    "id": 37,
    "version": 3,
    "params": {
        "sequential": 1,
        "option_group_id": "account_relationship",
        "name": "Sales Tax Account is",
        "version": 3
    },
    "extra": null,
    "fields": null,
    "entity": "OptionValue",
    "action": "get",
    "function": "civicrm_api3_option_value_get",
    "is_generic": false
}


####<a name='create_example_events_3'></a>api.authorize [:house:](index.md)

> [Civi\API\Event\AuthorizeEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/AuthorizeEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `authorize()`, `isAuthorized()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {
    "id": 38,
    "version": 3,
    "params": {
        "action": "get",
        "version": 3
    },
    "extra": null,
    "fields": null,
    "entity": "OptionValue",
    "action": "getfields",
    "function": "civicrm_api3_generic_getfields",
    "is_generic": true
}


####<a name='create_example_events_4'></a>api.prepare [:house:](index.md)

> [Civi\API\Event\PrepareEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/PrepareEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `setApiRequest()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {
    "id": 38,
    "version": 3,
    "params": {
        "action": "get",
        "version": 3
    },
    "extra": null,
    "fields": {
        "action": {
            "api.aliases": [
                "api_action"
            ]
        }
    },
    "entity": "OptionValue",
    "action": "getfields",
    "function": "civicrm_api3_generic_getfields",
    "is_generic": true
}


####<a name='create_example_events_5'></a>api.respond [:house:](index.md)

> [Civi\API\Event\RespondEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/RespondEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `getResponse()`, `setResponse()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {
    "id": 38,
    "version": 3,
    "params": {
        "action": "get",
        "version": 3
    },
    "extra": null,
    "fields": {
        "action": {
            "api.aliases": [
                "api_action"
            ]
        }
    },
    "entity": "OptionValue",
    "action": "getfields",
    "function": "civicrm_api3_generic_getfields",
    "is_generic": true
}


####<a name='create_example_events_6'></a>api.prepare [:house:](index.md)

> [Civi\API\Event\PrepareEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/PrepareEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `setApiRequest()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {
    "id": 37,
    "version": 3,
    "params": {
        "sequential": 1,
        "option_group_id": 62,
        "name": "Sales Tax Account is",
        "version": 3
    },
    "extra": null,
    "fields": {
        "id": {
            "name": "id",
            "type": 1,
            "title": "Option Value ID",
            "description": "Option ID",
            "required": true,
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue",
            "api.aliases": [
                "option_value_id"
            ]
        },
        "option_group_id": {
            "name": "option_group_id",
            "type": 1,
            "title": "Option Group ID",
            "description": "Group which this option belongs to.",
            "required": true,
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue",
            "FKClassName": "CRM_Core_DAO_OptionGroup",
            "html": {
                "type": "Select",
                "size": 6,
                "maxlength": 14
            },
            "pseudoconstant": {
                "table": "civicrm_option_group",
                "keyColumn": "id",
                "labelColumn": "name"
            },
            "FKApiName": "OptionGroup",
            "api.aliases": [
                "option_group_name"
            ]
        },
        "label": {
            "name": "label",
            "type": 2,
            "title": "Option Label",
            "description": "Option string as displayed to users - e.g. the label in an HTML OPTION tag.",
            "required": true,
            "maxlength": 512,
            "size": 45,
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "value": {
            "name": "value",
            "type": 2,
            "title": "Option Value",
            "description": "The actual value stored (as a foreign key) in the data record. Functions which need lookup option_value.title should use civicrm_option_value.option_group_id plus civicrm_option_value.value as the key.",
            "required": true,
            "maxlength": 512,
            "size": 45,
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "name": {
            "name": "name",
            "type": 2,
            "title": "Option Name",
            "description": "Stores a fixed (non-translated) name for this option value. Lookup functions should use the name as the key for the option value row.",
            "maxlength": 255,
            "size": 45,
            "import": true,
            "where": "civicrm_option_value.name",
            "headerPattern": "",
            "dataPattern": "",
            "export": true,
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "grouping": {
            "name": "grouping",
            "type": 2,
            "title": "Option Grouping Name",
            "description": "Use to sort and\/or set display properties for sub-set(s) of options within an option group. EXAMPLE: Use for college_interest field, to differentiate partners from non-partners.",
            "maxlength": 255,
            "size": 45,
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "filter": {
            "name": "filter",
            "type": 1,
            "title": "Filter",
            "description": "Bitwise logic can be used to create subsets of options within an option_group for different uses.",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "is_default": {
            "name": "is_default",
            "type": 16,
            "title": "Option is Default?",
            "description": "Is this the default option for the group?",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "weight": {
            "name": "weight",
            "type": 1,
            "title": "Order",
            "description": "Controls display sort order.",
            "required": true,
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "description": {
            "name": "description",
            "type": 32,
            "title": "Option Description",
            "description": "Optional description.",
            "rows": 8,
            "cols": 60,
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue",
            "html": {
                "type": "TextArea",
                "rows": 8,
                "cols": 60
            }
        },
        "is_optgroup": {
            "name": "is_optgroup",
            "type": 16,
            "title": "Option is Header?",
            "description": "Is this row simply a display header? Expected usage is to render these as OPTGROUP tags within a SELECT field list of options?",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "is_reserved": {
            "name": "is_reserved",
            "type": 16,
            "title": "Option Is Reserved?",
            "description": "Is this a predefined system object?",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "is_active": {
            "name": "is_active",
            "type": 16,
            "title": "Option Is Active",
            "description": "Is this option active?",
            "default": "1",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "component_id": {
            "name": "component_id",
            "type": 1,
            "title": "Option Component",
            "description": "Component that this option value belongs\/caters to.",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue",
            "FKClassName": "CRM_Core_DAO_Component",
            "html": {
                "type": "Select",
                "size": 6,
                "maxlength": 14
            },
            "pseudoconstant": {
                "table": "civicrm_component",
                "keyColumn": "id",
                "labelColumn": "name"
            }
        },
        "domain_id": {
            "name": "domain_id",
            "type": 1,
            "title": "Option Domain",
            "description": "Which Domain is this option value for",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue",
            "FKClassName": "CRM_Core_DAO_Domain",
            "pseudoconstant": {
                "table": "civicrm_domain",
                "keyColumn": "id",
                "labelColumn": "name"
            },
            "FKApiName": "Domain"
        },
        "visibility_id": {
            "name": "visibility_id",
            "type": 1,
            "title": "Option Visibility",
            "default": "NULL",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "icon": {
            "name": "icon",
            "type": 2,
            "title": "Icon",
            "description": "crm-i icon class",
            "maxlength": 255,
            "size": 45,
            "default": "NULL",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "color": {
            "name": "color",
            "type": 2,
            "title": "Color",
            "description": "Hex color value e.g. #ffffff",
            "maxlength": 255,
            "size": 45,
            "default": "NULL",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        }
    },
    "entity": "OptionValue",
    "action": "get",
    "function": "civicrm_api3_option_value_get",
    "is_generic": false
}


####<a name='create_example_events_7'></a>api.authorize [:house:](index.md)

> [Civi\API\Event\AuthorizeEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/AuthorizeEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `authorize()`, `isAuthorized()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {
    "id": 39,
    "version": 3,
    "params": {
        "version": 3,
        "field": "option_group_id",
        "context": "validate"
    },
    "extra": null,
    "fields": null,
    "entity": "OptionValue",
    "action": "getoptions",
    "function": "civicrm_api3_generic_getoptions",
    "is_generic": true
}


####<a name='create_example_events_8'></a>api.authorize [:house:](index.md)

> [Civi\API\Event\AuthorizeEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/AuthorizeEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `authorize()`, `isAuthorized()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {
    "id": 40,
    "version": 3,
    "params": {
        "action": "getoptions",
        "version": 3
    },
    "extra": null,
    "fields": null,
    "entity": "OptionValue",
    "action": "getfields",
    "function": "civicrm_api3_generic_getfields",
    "is_generic": true
}


####<a name='create_example_events_9'></a>api.prepare [:house:](index.md)

> [Civi\API\Event\PrepareEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/PrepareEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `setApiRequest()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {
    "id": 40,
    "version": 3,
    "params": {
        "action": "getoptions",
        "version": 3
    },
    "extra": null,
    "fields": {
        "action": {
            "api.aliases": [
                "api_action"
            ]
        }
    },
    "entity": "OptionValue",
    "action": "getfields",
    "function": "civicrm_api3_generic_getfields",
    "is_generic": true
}


####<a name='create_example_events_10'></a>api.respond [:house:](index.md)

> [Civi\API\Event\RespondEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/RespondEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `getResponse()`, `setResponse()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {
    "id": 40,
    "version": 3,
    "params": {
        "action": "getoptions",
        "version": 3
    },
    "extra": null,
    "fields": {
        "action": {
            "api.aliases": [
                "api_action"
            ]
        }
    },
    "entity": "OptionValue",
    "action": "getfields",
    "function": "civicrm_api3_generic_getfields",
    "is_generic": true
}


####<a name='create_example_events_11'></a>api.prepare [:house:](index.md)

> [Civi\API\Event\PrepareEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/PrepareEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `setApiRequest()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {
    "id": 39,
    "version": 3,
    "params": {
        "version": 3,
        "field": "option_group_id",
        "context": "validate"
    },
    "extra": null,
    "fields": {
        "field": {
            "title": "Field name",
            "api.required": 1,
            "type": 2,
            "name": "field"
        },
        "context": {
            "title": "Context",
            "type": 2,
            "options": {
                "get": "get: all options are returned, even if they are disabled; labels are translated.",
                "create": "create: options are filtered appropriately for the object being created\/updated; labels are translated.",
                "search": "search: searchable options are returned; labels are translated.",
                "validate": "validate: all options are returned, even if they are disabled; machine names are used in place of labels.",
                "abbreviate": "abbreviate: enabled options are returned; labels are replaced with abbreviations.",
                "match": "match: enabled options are returned using machine names as keys; labels are translated."
            },
            "name": "context"
        }
    },
    "entity": "OptionValue",
    "action": "getoptions",
    "function": "civicrm_api3_generic_getoptions",
    "is_generic": true
}


####<a name='create_example_events_12'></a>api.authorize [:house:](index.md)

> [Civi\API\Event\AuthorizeEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/AuthorizeEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `authorize()`, `isAuthorized()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {
    "id": 41,
    "version": 3,
    "params": {
        "version": 3,
        "action": "create"
    },
    "extra": null,
    "fields": null,
    "entity": "OptionValue",
    "action": "getfields",
    "function": "civicrm_api3_generic_getfields",
    "is_generic": true
}


####<a name='create_example_events_13'></a>api.prepare [:house:](index.md)

> [Civi\API\Event\PrepareEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/PrepareEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `setApiRequest()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {
    "id": 41,
    "version": 3,
    "params": {
        "version": 3,
        "action": "create"
    },
    "extra": null,
    "fields": {
        "action": {
            "api.aliases": [
                "api_action"
            ]
        }
    },
    "entity": "OptionValue",
    "action": "getfields",
    "function": "civicrm_api3_generic_getfields",
    "is_generic": true
}


####<a name='create_example_events_14'></a>api.respond [:house:](index.md)

> [Civi\API\Event\RespondEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/RespondEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `getResponse()`, `setResponse()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {
    "id": 41,
    "version": 3,
    "params": {
        "version": 3,
        "action": "create"
    },
    "extra": null,
    "fields": {
        "action": {
            "api.aliases": [
                "api_action"
            ]
        }
    },
    "entity": "OptionValue",
    "action": "getfields",
    "function": "civicrm_api3_generic_getfields",
    "is_generic": true
}


####<a name='create_example_events_15'></a>api.respond [:house:](index.md)

> [Civi\API\Event\RespondEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/RespondEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `getResponse()`, `setResponse()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {
    "id": 39,
    "version": 3,
    "params": {
        "version": 3,
        "field": "option_group_id",
        "context": "validate"
    },
    "extra": null,
    "fields": {
        "field": {
            "title": "Field name",
            "api.required": 1,
            "type": 2,
            "name": "field"
        },
        "context": {
            "title": "Context",
            "type": 2,
            "options": {
                "get": "get: all options are returned, even if they are disabled; labels are translated.",
                "create": "create: options are filtered appropriately for the object being created\/updated; labels are translated.",
                "search": "search: searchable options are returned; labels are translated.",
                "validate": "validate: all options are returned, even if they are disabled; machine names are used in place of labels.",
                "abbreviate": "abbreviate: enabled options are returned; labels are replaced with abbreviations.",
                "match": "match: enabled options are returned using machine names as keys; labels are translated."
            },
            "name": "context"
        }
    },
    "entity": "OptionValue",
    "action": "getoptions",
    "function": "civicrm_api3_generic_getoptions",
    "is_generic": true
}


####<a name='create_example_events_16'></a>api.respond [:house:](index.md)

> [Civi\API\Event\RespondEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/RespondEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `getResponse()`, `setResponse()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {
    "id": 37,
    "version": 3,
    "params": {
        "sequential": 1,
        "option_group_id": 62,
        "name": "Sales Tax Account is",
        "version": 3
    },
    "extra": null,
    "fields": {
        "id": {
            "name": "id",
            "type": 1,
            "title": "Option Value ID",
            "description": "Option ID",
            "required": true,
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue",
            "api.aliases": [
                "option_value_id"
            ]
        },
        "option_group_id": {
            "name": "option_group_id",
            "type": 1,
            "title": "Option Group ID",
            "description": "Group which this option belongs to.",
            "required": true,
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue",
            "FKClassName": "CRM_Core_DAO_OptionGroup",
            "html": {
                "type": "Select",
                "size": 6,
                "maxlength": 14
            },
            "pseudoconstant": {
                "table": "civicrm_option_group",
                "keyColumn": "id",
                "labelColumn": "name"
            },
            "FKApiName": "OptionGroup",
            "api.aliases": [
                "option_group_name"
            ]
        },
        "label": {
            "name": "label",
            "type": 2,
            "title": "Option Label",
            "description": "Option string as displayed to users - e.g. the label in an HTML OPTION tag.",
            "required": true,
            "maxlength": 512,
            "size": 45,
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "value": {
            "name": "value",
            "type": 2,
            "title": "Option Value",
            "description": "The actual value stored (as a foreign key) in the data record. Functions which need lookup option_value.title should use civicrm_option_value.option_group_id plus civicrm_option_value.value as the key.",
            "required": true,
            "maxlength": 512,
            "size": 45,
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "name": {
            "name": "name",
            "type": 2,
            "title": "Option Name",
            "description": "Stores a fixed (non-translated) name for this option value. Lookup functions should use the name as the key for the option value row.",
            "maxlength": 255,
            "size": 45,
            "import": true,
            "where": "civicrm_option_value.name",
            "headerPattern": "",
            "dataPattern": "",
            "export": true,
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "grouping": {
            "name": "grouping",
            "type": 2,
            "title": "Option Grouping Name",
            "description": "Use to sort and\/or set display properties for sub-set(s) of options within an option group. EXAMPLE: Use for college_interest field, to differentiate partners from non-partners.",
            "maxlength": 255,
            "size": 45,
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "filter": {
            "name": "filter",
            "type": 1,
            "title": "Filter",
            "description": "Bitwise logic can be used to create subsets of options within an option_group for different uses.",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "is_default": {
            "name": "is_default",
            "type": 16,
            "title": "Option is Default?",
            "description": "Is this the default option for the group?",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "weight": {
            "name": "weight",
            "type": 1,
            "title": "Order",
            "description": "Controls display sort order.",
            "required": true,
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "description": {
            "name": "description",
            "type": 32,
            "title": "Option Description",
            "description": "Optional description.",
            "rows": 8,
            "cols": 60,
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue",
            "html": {
                "type": "TextArea",
                "rows": 8,
                "cols": 60
            }
        },
        "is_optgroup": {
            "name": "is_optgroup",
            "type": 16,
            "title": "Option is Header?",
            "description": "Is this row simply a display header? Expected usage is to render these as OPTGROUP tags within a SELECT field list of options?",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "is_reserved": {
            "name": "is_reserved",
            "type": 16,
            "title": "Option Is Reserved?",
            "description": "Is this a predefined system object?",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "is_active": {
            "name": "is_active",
            "type": 16,
            "title": "Option Is Active",
            "description": "Is this option active?",
            "default": "1",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "component_id": {
            "name": "component_id",
            "type": 1,
            "title": "Option Component",
            "description": "Component that this option value belongs\/caters to.",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue",
            "FKClassName": "CRM_Core_DAO_Component",
            "html": {
                "type": "Select",
                "size": 6,
                "maxlength": 14
            },
            "pseudoconstant": {
                "table": "civicrm_component",
                "keyColumn": "id",
                "labelColumn": "name"
            }
        },
        "domain_id": {
            "name": "domain_id",
            "type": 1,
            "title": "Option Domain",
            "description": "Which Domain is this option value for",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue",
            "FKClassName": "CRM_Core_DAO_Domain",
            "pseudoconstant": {
                "table": "civicrm_domain",
                "keyColumn": "id",
                "labelColumn": "name"
            },
            "FKApiName": "Domain"
        },
        "visibility_id": {
            "name": "visibility_id",
            "type": 1,
            "title": "Option Visibility",
            "default": "NULL",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "icon": {
            "name": "icon",
            "type": 2,
            "title": "Icon",
            "description": "crm-i icon class",
            "maxlength": 255,
            "size": 45,
            "default": "NULL",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        },
        "color": {
            "name": "color",
            "type": 2,
            "title": "Color",
            "description": "Hex color value e.g. #ffffff",
            "maxlength": 255,
            "size": 45,
            "default": "NULL",
            "table_name": "civicrm_option_value",
            "entity": "OptionValue",
            "bao": "CRM_Core_BAO_OptionValue"
        }
    },
    "entity": "OptionValue",
    "action": "get",
    "function": "civicrm_api3_option_value_get",
    "is_generic": false
}


####<a name='create_example_events_17'></a>api.respond [:house:](index.md)

> [Civi\API\Event\RespondEvent](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/RespondEvent.php#L28) extends [Civi\API\Event\Event](https://github.com/civicrm/civicrm-core/blob/master/Civi/API/Event/Event.php#L28)

*Methods:* `getResponse()`, `setResponse()`

*Inherits:* `__construct()`, `getApiKernel()`, `getApiProvider()`, `getApiRequest()`, `isPropagationStopped()`, `stopPropagation()`, `setDispatcher()`, `getDispatcher()`, `getName()`, `setName()`

*Api Request:* {

}*Methods*:`__construct()`, `setValue()`, `_run()`, `__set()`, `setVersion()`, `__call()`, `execute()`, `getParams()`, `getParamInfo()`, `getEntity()`, `getAction()`, `offsetExists()`, `offsetGet()`, `offsetSet()`, `offsetUnset()`, `baoToArray()`$params: {
    "values": {
        "contact_id": "1248",
        "financial_type_id": 1,
        "total_amount": 7.3
    },
    "bao": {
        "_relatedObjects": [

        ],
        "_component": null,
        "trxn_result_code": null,
        "id": null,
        "contact_id": null,
        "financial_type_id": null,
        "contribution_page_id": null,
        "payment_instrument_id": null,
        "receive_date": null,
        "non_deductible_amount": null,
        "total_amount": null,
        "fee_amount": null,
        "net_amount": null,
        "trxn_id": null,
        "invoice_id": null,
        "currency": null,
        "cancel_date": null,
        "cancel_reason": null,
        "receipt_date": null,
        "thankyou_date": null,
        "source": null,
        "amount_level": null,
        "contribution_recur_id": null,
        "is_test": null,
        "is_pay_later": null,
        "contribution_status_id": null,
        "address_id": null,
        "check_number": null,
        "campaign_id": null,
        "creditnote_id": null,
        "tax_amount": null,
        "revenue_recognition_date": null,
        "_DB_DataObject_version": "1.8.12",
        "__table": "civicrm_contribution",
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


###<a name='create_example_hook_calls'></a>Hook calls [:house:](index.md)

* [pre](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_pre/) 1
* [post](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_post/) 1
* [apiWrappers](https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_apiWrappers/) 1

##<a name='action_delete'></a>Action Contribution.delete [:house:](index.md)

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

##<a name='action_get'></a>Action Contribution.get [:house:](index.md)

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

##<a name='action_getActions'></a>Action Contribution.getActions [:house:](index.md)

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

##<a name='action_getFields'></a>Action Contribution.getFields [:house:](index.md)

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

##<a name='action_update'></a>Action Contribution.update [:house:](index.md)

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

##<a name='fields'></a>Contribution Fields [:house:](index.md)


###<a name='field_id'></a>id [:house:](index.md)

```
{
    "name": "id",
    "type": 1,
    "title": "Contribution ID",
    "description": "Contribution ID",
    "required": true,
    "import": true,
    "where": "civicrm_contribution.id",
    "headerPattern": "",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution"
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
    "where": "civicrm_contribution.contact_id",
    "headerPattern": "\/contact(.?id)?\/i",
    "dataPattern": "\/^\\d+$\/",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "FKClassName": "CRM_Contact_DAO_Contact",
    "html": {
        "type": "EntityRef"
    }
}
```

###<a name='field_financial_type_id'></a>financial_type_id [:house:](index.md)

```
{
    "name": "financial_type_id",
    "type": 1,
    "title": "Financial Type",
    "description": "FK to Financial Type for (total_amount - non_deductible_amount).",
    "export": true,
    "where": "civicrm_contribution.financial_type_id",
    "headerPattern": "",
    "dataPattern": "",
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "FKClassName": "CRM_Financial_DAO_FinancialType",
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

###<a name='field_contribution_page_id'></a>contribution_page_id [:house:](index.md)

```
{
    "name": "contribution_page_id",
    "type": 1,
    "title": "Contribution Page ID",
    "description": "The Contribution Page which triggered this contribution",
    "import": true,
    "where": "civicrm_contribution.contribution_page_id",
    "headerPattern": "",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "FKClassName": "CRM_Contribute_DAO_ContributionPage",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "table": "civicrm_contribution_page",
        "keyColumn": "id",
        "labelColumn": "title"
    }
}
```

###<a name='field_payment_instrument_id'></a>payment_instrument_id [:house:](index.md)

```
{
    "name": "payment_instrument_id",
    "type": 1,
    "title": "Payment Method",
    "description": "FK to Payment Instrument",
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "optionGroupName": "payment_instrument",
        "optionEditPath": "civicrm\/admin\/options\/payment_instrument"
    }
}
```

###<a name='field_receive_date'></a>receive_date [:house:](index.md)

```
{
    "name": "receive_date",
    "type": 12,
    "title": "Date Received",
    "description": "Date contribution was received - not necessarily the creation date of the record",
    "import": true,
    "where": "civicrm_contribution.receive_date",
    "headerPattern": "\/receive(.?date)?\/i",
    "dataPattern": "\/^\\d{4}-?\\d{2}-?\\d{2} ?(\\d{2}:?\\d{2}:?(\\d{2})?)?$\/",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "html": {
        "type": "Select Date",
        "format": "activityDateTime"
    }
}
```

###<a name='field_non_deductible_amount'></a>non_deductible_amount [:house:](index.md)

```
{
    "name": "non_deductible_amount",
    "type": 1024,
    "title": "Non-deductible Amount",
    "description": "Portion of total amount which is NOT tax deductible. Equal to total_amount for non-deductible financial types.",
    "precision": [
        20,
        2
    ],
    "import": true,
    "where": "civicrm_contribution.non_deductible_amount",
    "headerPattern": "\/non?.?deduct\/i",
    "dataPattern": "\/^\\d+(\\.\\d{2})?$\/",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_total_amount'></a>total_amount [:house:](index.md)

```
{
    "name": "total_amount",
    "type": 1024,
    "title": "Total Amount",
    "description": "Total amount of this contribution. Use market value for non-monetary gifts.",
    "required": true,
    "precision": [
        20,
        2
    ],
    "import": true,
    "where": "civicrm_contribution.total_amount",
    "headerPattern": "\/^total|(.?^am(ou)?nt)\/i",
    "dataPattern": "\/^\\d+(\\.\\d{2})?$\/",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "html": {
        "type": "Text"
    }
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
    "where": "civicrm_contribution.fee_amount",
    "headerPattern": "\/fee(.?am(ou)?nt)?\/i",
    "dataPattern": "\/^\\d+(\\.\\d{2})?$\/",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_net_amount'></a>net_amount [:house:](index.md)

```
{
    "name": "net_amount",
    "type": 1024,
    "title": "Net Amount",
    "description": "actual funds transfer amount. total less fees. if processor does not report actual fee during transaction, this is set to total_amount.",
    "precision": [
        20,
        2
    ],
    "import": true,
    "where": "civicrm_contribution.net_amount",
    "headerPattern": "\/net(.?am(ou)?nt)?\/i",
    "dataPattern": "\/^\\d+(\\.\\d{2})?$\/",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_trxn_id'></a>trxn_id [:house:](index.md)

```
{
    "name": "trxn_id",
    "type": 2,
    "title": "Transaction ID",
    "description": "unique transaction id. may be processor id, bank id + trans id, or account number + check number... depending on payment_method",
    "maxlength": 255,
    "size": 45,
    "import": true,
    "where": "civicrm_contribution.trxn_id",
    "headerPattern": "\/tr(ansactio|x)n(.?id)?\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_invoice_id'></a>invoice_id [:house:](index.md)

```
{
    "name": "invoice_id",
    "type": 2,
    "title": "Invoice ID",
    "description": "unique invoice id, system generated or passed in",
    "maxlength": 255,
    "size": 45,
    "import": true,
    "where": "civicrm_contribution.invoice_id",
    "headerPattern": "\/invoice(.?id)?\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "html": {
        "type": "Text"
    }
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
    "where": "civicrm_contribution.currency",
    "headerPattern": "\/cur(rency)?\/i",
    "dataPattern": "\/^[A-Z]{3}$\/i",
    "export": true,
    "default": "NULL",
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
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

###<a name='field_cancel_date'></a>cancel_date [:house:](index.md)

```
{
    "name": "cancel_date",
    "type": 12,
    "title": "Cancel Date",
    "description": "when was gift cancelled",
    "import": true,
    "where": "civicrm_contribution.cancel_date",
    "headerPattern": "\/cancel(.?date)?\/i",
    "dataPattern": "\/^\\d{4}-?\\d{2}-?\\d{2} ?(\\d{2}:?\\d{2}:?(\\d{2})?)?$\/",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "html": {
        "type": "Select Date",
        "format": "activityDateTime"
    }
}
```

###<a name='field_cancel_reason'></a>cancel_reason [:house:](index.md)

```
{
    "name": "cancel_reason",
    "type": 32,
    "title": "Cancel Reason",
    "import": true,
    "where": "civicrm_contribution.cancel_reason",
    "headerPattern": "\/(cancel.?)?reason\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_receipt_date'></a>receipt_date [:house:](index.md)

```
{
    "name": "receipt_date",
    "type": 12,
    "title": "Receipt Date",
    "description": "when (if) receipt was sent. populated automatically for online donations w\/ automatic receipting",
    "import": true,
    "where": "civicrm_contribution.receipt_date",
    "headerPattern": "\/receipt(.?date)?\/i",
    "dataPattern": "\/^\\d{4}-?\\d{2}-?\\d{2} ?(\\d{2}:?\\d{2}:?(\\d{2})?)?$\/",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "html": {
        "type": "Select Date",
        "format": "activityDateTime"
    }
}
```

###<a name='field_thankyou_date'></a>thankyou_date [:house:](index.md)

```
{
    "name": "thankyou_date",
    "type": 12,
    "title": "Thank-you Date",
    "description": "when (if) was donor thanked",
    "import": true,
    "where": "civicrm_contribution.thankyou_date",
    "headerPattern": "\/thank(s|(.?you))?(.?date)?\/i",
    "dataPattern": "\/^\\d{4}-?\\d{2}-?\\d{2} ?(\\d{2}:?\\d{2}:?(\\d{2})?)?$\/",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
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
    "title": "Contribution Source",
    "description": "Origin of this Contribution.",
    "maxlength": 255,
    "size": 45,
    "import": true,
    "where": "civicrm_contribution.source",
    "headerPattern": "\/source\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_amount_level'></a>amount_level [:house:](index.md)

```
{
    "name": "amount_level",
    "type": 32,
    "title": "Amount Label",
    "import": true,
    "where": "civicrm_contribution.amount_level",
    "headerPattern": "",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_contribution_recur_id'></a>contribution_recur_id [:house:](index.md)

```
{
    "name": "contribution_recur_id",
    "type": 1,
    "title": "Recurring Contribution ID",
    "description": "Conditional foreign key to civicrm_contribution_recur id. Each contribution made in connection with a recurring contribution carries a foreign key to the recurring contribution record. This assumes we can track these processor initiated events.",
    "export": true,
    "where": "civicrm_contribution.contribution_recur_id",
    "headerPattern": "",
    "dataPattern": "",
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "FKClassName": "CRM_Contribute_DAO_ContributionRecur"
}
```

###<a name='field_is_test'></a>is_test [:house:](index.md)

```
{
    "name": "is_test",
    "type": 16,
    "title": "Test",
    "import": true,
    "where": "civicrm_contribution.is_test",
    "headerPattern": "",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_is_pay_later'></a>is_pay_later [:house:](index.md)

```
{
    "name": "is_pay_later",
    "type": 16,
    "title": "Is Pay Later",
    "import": true,
    "where": "civicrm_contribution.is_pay_later",
    "headerPattern": "",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "html": {
        "type": "CheckBox"
    }
}
```

###<a name='field_contribution_status_id'></a>contribution_status_id [:house:](index.md)

```
{
    "name": "contribution_status_id",
    "type": 1,
    "title": "Contribution Status ID",
    "import": true,
    "where": "civicrm_contribution.contribution_status_id",
    "headerPattern": "\/status\/i",
    "dataPattern": "",
    "export": true,
    "default": "1",
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "optionGroupName": "contribution_status",
        "optionEditPath": "civicrm\/admin\/options\/contribution_status"
    }
}
```

###<a name='field_address_id'></a>address_id [:house:](index.md)

```
{
    "name": "address_id",
    "type": 1,
    "title": "Contribution Address",
    "description": "Conditional foreign key to civicrm_address.id. We insert an address record for each contribution when we have associated billing name and address data.",
    "export": true,
    "where": "civicrm_contribution.address_id",
    "headerPattern": "",
    "dataPattern": "",
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "FKClassName": "CRM_Core_DAO_Address"
}
```

###<a name='field_check_number'></a>check_number [:house:](index.md)

```
{
    "name": "check_number",
    "type": 2,
    "title": "Check Number",
    "maxlength": 255,
    "size": 6,
    "import": true,
    "where": "civicrm_contribution.check_number",
    "headerPattern": "\/check(.?number)?\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
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
    "description": "The campaign for which this contribution has been triggered.",
    "import": true,
    "where": "civicrm_contribution.campaign_id",
    "headerPattern": "",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "FKClassName": "CRM_Campaign_DAO_Campaign",
    "html": {
        "type": "Select"
    },
    "pseudoconstant": {
        "table": "civicrm_campaign",
        "keyColumn": "id",
        "labelColumn": "title"
    }
}
```

###<a name='field_creditnote_id'></a>creditnote_id [:house:](index.md)

```
{
    "name": "creditnote_id",
    "type": 2,
    "title": "Credit Note ID",
    "description": "unique credit note id, system generated or passed in",
    "maxlength": 255,
    "size": 45,
    "import": true,
    "where": "civicrm_contribution.creditnote_id",
    "headerPattern": "\/creditnote(.?id)?\/i",
    "dataPattern": "",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_tax_amount'></a>tax_amount [:house:](index.md)

```
{
    "name": "tax_amount",
    "type": 1024,
    "title": "Tax Amount",
    "description": "Total tax amount of this contribution.",
    "precision": [
        20,
        2
    ],
    "import": true,
    "where": "civicrm_contribution.tax_amount",
    "headerPattern": "\/tax(.?am(ou)?nt)?\/i",
    "dataPattern": "\/^\\d+(\\.\\d{2})?$\/",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "html": {
        "type": "Text"
    }
}
```

###<a name='field_revenue_recognition_date'></a>revenue_recognition_date [:house:](index.md)

```
{
    "name": "revenue_recognition_date",
    "type": 12,
    "title": "Revenue Recognition Date",
    "description": "Stores the date when revenue should be recognized.",
    "import": true,
    "where": "civicrm_contribution.revenue_recognition_date",
    "headerPattern": "\/revenue(.?date)?\/i",
    "dataPattern": "\/^\\d{4}-?\\d{2}-?\\d{2} ?(\\d{2}:?\\d{2}:?(\\d{2})?)?$\/",
    "export": true,
    "table_name": "civicrm_contribution",
    "entity": "Contribution",
    "bao": "CRM_Contribute_BAO_Contribution",
    "html": {
        "type": "Select Date",
        "format": "activityDateTime"
    }
}
```
###### This file was automatically generated. Do not edit directly.