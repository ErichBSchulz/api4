#<a name='Contribution.top'></a>Contribution

##<a name='Contribution.fields'></a>Contribution Fields

###<a name='Contribution.field_$field'></a>id

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
###<a name='Contribution.field_$field'></a>contact_id

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
###<a name='Contribution.field_$field'></a>financial_type_id

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
###<a name='Contribution.field_$field'></a>contribution_page_id

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
###<a name='Contribution.field_$field'></a>payment_instrument_id

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
###<a name='Contribution.field_$field'></a>receive_date

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
###<a name='Contribution.field_$field'></a>non_deductible_amount

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
###<a name='Contribution.field_$field'></a>total_amount

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
###<a name='Contribution.field_$field'></a>fee_amount

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
###<a name='Contribution.field_$field'></a>net_amount

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
###<a name='Contribution.field_$field'></a>trxn_id

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
###<a name='Contribution.field_$field'></a>invoice_id

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
###<a name='Contribution.field_$field'></a>currency

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
###<a name='Contribution.field_$field'></a>cancel_date

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
###<a name='Contribution.field_$field'></a>cancel_reason

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
###<a name='Contribution.field_$field'></a>receipt_date

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
###<a name='Contribution.field_$field'></a>thankyou_date

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
###<a name='Contribution.field_$field'></a>source

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
###<a name='Contribution.field_$field'></a>amount_level

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
###<a name='Contribution.field_$field'></a>contribution_recur_id

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
###<a name='Contribution.field_$field'></a>is_test

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
###<a name='Contribution.field_$field'></a>is_pay_later

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
###<a name='Contribution.field_$field'></a>contribution_status_id

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
###<a name='Contribution.field_$field'></a>address_id

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
###<a name='Contribution.field_$field'></a>check_number

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
###<a name='Contribution.field_$field'></a>campaign_id

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
###<a name='Contribution.field_$field'></a>creditnote_id

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
###<a name='Contribution.field_$field'></a>tax_amount

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
###<a name='Contribution.field_$field'></a>revenue_recognition_date

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
##<a name='Contribution.action_create'></a>Action Contribution.create

Base class for all create actions.: 

##<a name='Contribution.action_create_params'></a>Params

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
### Contribution.create hook calls: 
### Contribution.create events
##<a name='Contribution.action_delete'></a>Action Contribution.delete

"delete" inherits all the abilities of "get": 

##<a name='Contribution.action_delete_params'></a>Params

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
### Contribution.delete hook calls: 
### Contribution.delete events
##<a name='Contribution.action_get'></a>Action Contribution.get

Base class for all get actions.: 

##<a name='Contribution.action_get_params'></a>Params

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
### Contribution.get hook calls: 
### Contribution.get events
##<a name='Contribution.action_getActions'></a>Action Contribution.getActions

Get actions for an entity with a list of accepted params: 

##<a name='Contribution.action_getActions_params'></a>Params

* **checkPermissions** (`??`: `false`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **options** (`array`: `[]`)
  Rarely used options.
### Contribution.getActions hook calls: 
### Contribution.getActions events
##<a name='Contribution.action_getFields'></a>Action Contribution.getFields

Get fields for an entity: 

##<a name='Contribution.action_getFields_params'></a>Params

* **checkPermissions** (`??`: `false`)
  ??
* **version** (`int`: `4`)
  Api version number; cannot be changed.
* **chain** (`array`: `[]`)
  A list of api actions to execute on the results.
* **options** (`array`: `[]`)
  Rarely used options.
### Contribution.getFields hook calls: 
### Contribution.getFields events
##<a name='Contribution.action_update'></a>Action Contribution.update

Here's an idea... if we use one action to extend another, "update" inherits all the abilities of "get": 

##<a name='Contribution.action_update_params'></a>Params

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
### Contribution.update hook calls: 
### Contribution.update events
###### This file was automatically generated. Do not edit directly.