
#<a name='Listeners'></a>Event_listeners Listeners [:house:](index.md)


##<a name='api.resolve'></a>Event_listeners Api.resolve [:house:](index.md)


###<a name='api.resolveCivi\API\Provider\ActionObjectProvider::onApiResolve'></a>Event_listeners Api.resolveCivi\API\Provider\ActionObjectProvider::onApiResolve [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/default/files/civicrm/ext/api4/Civi/API/Provider/ActionObjectProvider.php lines: 37-99
 Methods:
```
[
    "getSubscribedEvents",
    "onApiResolve",
    "invoke",
    "getEntityNames",
    "getActionNames"
]
```

###<a name='api.resolveCivi\API\Provider\ReflectionProvider::onApiResolve'></a>Event_listeners Api.resolveCivi\API\Provider\ReflectionProvider::onApiResolve [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/API/Provider/ReflectionProvider.php lines: 36-150
 Methods:
```
[
    "getSubscribedEvents",
    "__construct",
    "onApiResolve",
    "onApiAuthorize",
    "invoke",
    "getEntityNames",
    "getActionNames"
]
```

###<a name='api.resolveCivi\API\Provider\ActionObjectProvider::onApiResolve'></a>Event_listeners Api.resolveCivi\API\Provider\ActionObjectProvider::onApiResolve [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/default/files/civicrm/ext/api4/Civi/API/Provider/ActionObjectProvider.php lines: 37-99
 Methods:
```
[
    "getSubscribedEvents",
    "onApiResolve",
    "invoke",
    "getEntityNames",
    "getActionNames"
]
```

###<a name='api.resolveCivi\API\Provider\MagicFunctionProvider::onApiResolve'></a>Event_listeners Api.resolveCivi\API\Provider\MagicFunctionProvider::onApiResolve [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/API/Provider/MagicFunctionProvider.php lines: 37-304
 Methods:
```
[
    "getSubscribedEvents",
    "__construct",
    "onApiResolve",
    "invoke",
    "getEntityNames",
    "getActionNames"
]
```

###<a name='api.resolveCivi\API\V4\MockSubscriber::snoop'></a>Event_listeners Api.resolveCivi\API\V4\MockSubscriber::snoop [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/default/files/civicrm/ext/api4/tests/phpunit/Civi/API/V4/MockSubscriber.php lines: 8-40
 Methods:
```
[
    "resetEventLog",
    "getEventLog",
    "snoop",
    "getSubscribedEvents"
]
```

##<a name='api.authorize'></a>Event_listeners Api.authorize [:house:](index.md)


###<a name='api.authorizeCivi\API\Provider\ReflectionProvider::onApiAuthorize'></a>Event_listeners Api.authorizeCivi\API\Provider\ReflectionProvider::onApiAuthorize [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/API/Provider/ReflectionProvider.php lines: 36-150
 Methods:
```
[
    "getSubscribedEvents",
    "__construct",
    "onApiResolve",
    "onApiAuthorize",
    "invoke",
    "getEntityNames",
    "getActionNames"
]
```

###<a name='api.authorizeCivi\API\Subscriber\DynamicFKAuthorization::onApiAuthorize'></a>Event_listeners Api.authorizeCivi\API\Subscriber\DynamicFKAuthorization::onApiAuthorize [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/API/Subscriber/DynamicFKAuthorization.php lines: 48-375
 Methods:
```
[
    "getSubscribedEvents",
    "__construct",
    "onApiAuthorize",
    "authorizeDelegate",
    "preventReassignment",
    "getDelegatedEntityName",
    "getDelegatedAction",
    "getDelegate",
    "isTrusted",
    "getCustomFields"
]
```

###<a name='api.authorizeCivi\API\V4\MockSubscriber::snoop'></a>Event_listeners Api.authorizeCivi\API\V4\MockSubscriber::snoop [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/default/files/civicrm/ext/api4/tests/phpunit/Civi/API/V4/MockSubscriber.php lines: 8-40
 Methods:
```
[
    "resetEventLog",
    "getEventLog",
    "snoop",
    "getSubscribedEvents"
]
```

###<a name='api.authorizeCivi\API\Subscriber\PermissionCheck::onApiAuthorize'></a>Event_listeners Api.authorizeCivi\API\Subscriber\PermissionCheck::onApiAuthorize [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/API/Subscriber/PermissionCheck.php lines: 38-136
 Methods:
```
[
    "getSubscribedEvents",
    "onApiAuthorize",
    "checkACLPermission"
]
```

##<a name='api.prepare'></a>Event_listeners Api.prepare [:house:](index.md)


###<a name='api.prepareCivi\API\Subscriber\TransactionSubscriber::onApiPrepare'></a>Event_listeners Api.prepareCivi\API\Subscriber\TransactionSubscriber::onApiPrepare [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/API/Subscriber/TransactionSubscriber.php lines: 46-176
 Methods:
```
[
    "getSubscribedEvents",
    "isTransactional",
    "isForceRollback",
    "isNested",
    "onApiPrepare",
    "onApiRespond",
    "onApiException"
]
```

###<a name='api.prepareCivi\API\Subscriber\I18nSubscriber::onApiPrepare'></a>Event_listeners Api.prepareCivi\API\Subscriber\I18nSubscriber::onApiPrepare [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/API/Subscriber/I18nSubscriber.php lines: 37-108
 Methods:
```
[
    "getSubscribedEvents",
    "onApiPrepare",
    "setLocale"
]
```

###<a name='api.prepareCivi\API\Subscriber\APIv3SchemaAdapter::onApiPrepare'></a>Event_listeners Api.prepareCivi\API\Subscriber\APIv3SchemaAdapter::onApiPrepare [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/API/Subscriber/APIv3SchemaAdapter.php lines: 37-125
 Methods:
```
[
    "getSubscribedEvents",
    "onApiPrepare",
    "onApiPrepare_validate",
    "getDefaults",
    "getRequired"
]
```

###<a name='api.prepareCivi\API\Subscriber\WrapperAdapter::onApiPrepare'></a>Event_listeners Api.prepareCivi\API\Subscriber\WrapperAdapter::onApiPrepare [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/API/Subscriber/WrapperAdapter.php lines: 38-107
 Methods:
```
[
    "getSubscribedEvents",
    "__construct",
    "onApiPrepare",
    "onApiRespond",
    "getWrappers"
]
```

###<a name='api.prepareCivi\API\V4\MockSubscriber::snoop'></a>Event_listeners Api.prepareCivi\API\V4\MockSubscriber::snoop [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/default/files/civicrm/ext/api4/tests/phpunit/Civi/API/V4/MockSubscriber.php lines: 8-40
 Methods:
```
[
    "resetEventLog",
    "getEventLog",
    "snoop",
    "getSubscribedEvents"
]
```

###<a name='api.prepareCivi\API\Subscriber\APIv3SchemaAdapter::onApiPrepare_validate'></a>Event_listeners Api.prepareCivi\API\Subscriber\APIv3SchemaAdapter::onApiPrepare_validate [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/API/Subscriber/APIv3SchemaAdapter.php lines: 37-125
 Methods:
```
[
    "getSubscribedEvents",
    "onApiPrepare",
    "onApiPrepare_validate",
    "getDefaults",
    "getRequired"
]
```

##<a name='api.respond'></a>Event_listeners Api.respond [:house:](index.md)


###<a name='api.respondCivi\API\Subscriber\WrapperAdapter::onApiRespond'></a>Event_listeners Api.respondCivi\API\Subscriber\WrapperAdapter::onApiRespond [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/API/Subscriber/WrapperAdapter.php lines: 38-107
 Methods:
```
[
    "getSubscribedEvents",
    "__construct",
    "onApiPrepare",
    "onApiRespond",
    "getWrappers"
]
```

###<a name='api.respondCivi\API\Subscriber\ChainSubscriber::onApiRespond'></a>Event_listeners Api.respondCivi\API\Subscriber\ChainSubscriber::onApiRespond [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/API/Subscriber/ChainSubscriber.php lines: 52-213
 Methods:
```
[
    "getSubscribedEvents",
    "onApiRespond"
]
```

###<a name='api.respondCivi\API\Subscriber\TransactionSubscriber::onApiRespond'></a>Event_listeners Api.respondCivi\API\Subscriber\TransactionSubscriber::onApiRespond [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/API/Subscriber/TransactionSubscriber.php lines: 46-176
 Methods:
```
[
    "getSubscribedEvents",
    "isTransactional",
    "isForceRollback",
    "isNested",
    "onApiPrepare",
    "onApiRespond",
    "onApiException"
]
```

###<a name='api.respondCivi\API\V4\MockSubscriber::snoop'></a>Event_listeners Api.respondCivi\API\V4\MockSubscriber::snoop [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/default/files/civicrm/ext/api4/tests/phpunit/Civi/API/V4/MockSubscriber.php lines: 8-40
 Methods:
```
[
    "resetEventLog",
    "getEventLog",
    "snoop",
    "getSubscribedEvents"
]
```

###<a name='api.respondCivi\API\Subscriber\XDebugSubscriber::onApiRespond'></a>Event_listeners Api.respondCivi\API\Subscriber\XDebugSubscriber::onApiRespond [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/API/Subscriber/XDebugSubscriber.php lines: 37-66
 Methods:
```
[
    "getSubscribedEvents",
    "onApiRespond"
]
```

##<a name='DAO::post-insert'></a>Event_listeners DAO::post-insert [:house:](index.md)


###<a name='DAO::post-insertCRM_Core_BAO_RecurringEntity::triggerInsert'></a>Event_listeners DAO::post-insertCRM_Core_BAO_RecurringEntity::triggerInsert [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Core/BAO/RecurringEntity.php lines: 39-1177
 Methods:
```
[
    "getStatus",
    "setStatus",
    "add",
    "quickAdd",
    "mode",
    "generate",
    "generateRecursion",
    "generateEntities",
    "generateRecursiveDates",
    "getEntitiesForParent",
    "getEntitiesFor",
    "getParentFor",
    "getPositionAndCount",
    "copyCreateEntity",
    "triggerUpdate",
    "triggerInsert",
    "triggerDelete",
    "delEntity",
    "mapFormValuesToDB",
    "getScheduleReminderDetailsById",
    "getScheduleParams",
    "getRecursionFromSchedule",
    "getInterval",
    "getReminderDetailsByEntityId",
    "updateModeLinkedEntity",
    "__construct",
    "fields",
    "fieldKeys",
    "getTableName",
    "getLog",
    "import",
    "export",
    "init",
    "getConnection",
    "reset",
    "getLocaleTableName",
    "query",
    "setFactory",
    "factory",
    "initialize",
    "keys",
    "sequenceKey",
    "getReferenceColumns",
    "table",
    "save",
    "delete",
    "log",
    "copyValues",
    "storeValues",
    "makeAttribute",
    "getAttribute",
    "transaction",
    "objectExists",
    "checkFieldExists",
    "getTableNames",
    "isDBMyISAM",
    "getDatabaseName",
    "checkConstraintExists",
    "schemaRequiresRebuilding",
    "checkFKConstraintInFormat",
    "checkFieldHasAlwaysValue",
    "checkFieldIsAlwaysNull",
    "checkTableExists",
    "checkVersion",
    "findById",
    "fetchAll",
    "fetchMap",
    "getFieldValue",
    "setFieldValue",
    "getSortString",
    "commonRetrieve",
    "deleteEntityContact",
    "executeUnbufferedQuery",
    "executeQuery",
    "singleValueQuery",
    "composeQuery",
    "freeResult",
    "copyGeneric",
    "cascadeUpdate",
    "getContactIDsFromComponent",
    "commonRetrieveAll",
    "dropAllTables",
    "escapeString",
    "escapeStrings",
    "escapeWildCardString",
    "createTestObject",
    "deleteTestObjects",
    "setCreateDefaults",
    "createTempTableName",
    "checkTriggerViewPermission",
    "debugPrint",
    "triggerRebuild",
    "checkSqlFunctionsExist",
    "dropTriggers",
    "createTriggers",
    "createReferenceColumns",
    "findReferences",
    "getReferenceCounts",
    "getReferencesToTable",
    "getGlobalSetting",
    "buildOptions",
    "getOptionLabels",
    "buildOptionsContext",
    "getFieldSpec",
    "createSQLFilter",
    "acceptedSQLOperators",
    "shortenSQLName",
    "setOptions",
    "setApiFilter",
    "addSelectWhereClause",
    "getSelectWhereClause",
    "requireSafeDBName",
    "get",
    "staticGet",
    "find",
    "fetch",
    "whereAdd",
    "orderBy",
    "affectedRows",
    "groupBy",
    "having",
    "limit",
    "selectAdd",
    "selectAs",
    "insert",
    "update",
    "fetchRow",
    "count",
    "escape",
    "databaseStructure",
    "tableName",
    "database",
    "_clear_cache",
    "_quote",
    "_connect",
    "_query",
    "_build_condition",
    "staticAutoloadTable",
    "_autoloadClass",
    "links",
    "getLinks",
    "getLink",
    "getLinkArray",
    "joinAdd",
    "setFrom",
    "toArray",
    "validate",
    "getDatabaseConnection",
    "getDatabaseResult",
    "_call",
    "fromValue",
    "toValue",
    "debug",
    "debugLevel",
    "raiseError",
    "_loadConfig",
    "free",
    "_get_table",
    "_get_keys",
    "getAlertLevel",
    "lastInsertId",
    "__call",
    "__sleep"
]
```

##<a name='hook_civicrm_post::Activity'></a>Event_listeners Hook_civicrm_post::Activity [:house:](index.md)


###<a name='hook_civicrm_post::ActivityCivi\CCase\Events::fireCaseChange'></a>Event_listeners Hook_civicrm_post::ActivityCivi\CCase\Events::fireCaseChange [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/CCase/Events.php lines: 34-110
 Methods:
```
[
    "fireCaseChange",
    "fireCaseChangeForRealz",
    "delegateToXmlListeners"
]
```

##<a name='DAO::post-delete'></a>Event_listeners DAO::post-delete [:house:](index.md)


###<a name='DAO::post-deleteCRM_Core_BAO_RecurringEntity::triggerDelete'></a>Event_listeners DAO::post-deleteCRM_Core_BAO_RecurringEntity::triggerDelete [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Core/BAO/RecurringEntity.php lines: 39-1177
 Methods:
```
[
    "getStatus",
    "setStatus",
    "add",
    "quickAdd",
    "mode",
    "generate",
    "generateRecursion",
    "generateEntities",
    "generateRecursiveDates",
    "getEntitiesForParent",
    "getEntitiesFor",
    "getParentFor",
    "getPositionAndCount",
    "copyCreateEntity",
    "triggerUpdate",
    "triggerInsert",
    "triggerDelete",
    "delEntity",
    "mapFormValuesToDB",
    "getScheduleReminderDetailsById",
    "getScheduleParams",
    "getRecursionFromSchedule",
    "getInterval",
    "getReminderDetailsByEntityId",
    "updateModeLinkedEntity",
    "__construct",
    "fields",
    "fieldKeys",
    "getTableName",
    "getLog",
    "import",
    "export",
    "init",
    "getConnection",
    "reset",
    "getLocaleTableName",
    "query",
    "setFactory",
    "factory",
    "initialize",
    "keys",
    "sequenceKey",
    "getReferenceColumns",
    "table",
    "save",
    "delete",
    "log",
    "copyValues",
    "storeValues",
    "makeAttribute",
    "getAttribute",
    "transaction",
    "objectExists",
    "checkFieldExists",
    "getTableNames",
    "isDBMyISAM",
    "getDatabaseName",
    "checkConstraintExists",
    "schemaRequiresRebuilding",
    "checkFKConstraintInFormat",
    "checkFieldHasAlwaysValue",
    "checkFieldIsAlwaysNull",
    "checkTableExists",
    "checkVersion",
    "findById",
    "fetchAll",
    "fetchMap",
    "getFieldValue",
    "setFieldValue",
    "getSortString",
    "commonRetrieve",
    "deleteEntityContact",
    "executeUnbufferedQuery",
    "executeQuery",
    "singleValueQuery",
    "composeQuery",
    "freeResult",
    "copyGeneric",
    "cascadeUpdate",
    "getContactIDsFromComponent",
    "commonRetrieveAll",
    "dropAllTables",
    "escapeString",
    "escapeStrings",
    "escapeWildCardString",
    "createTestObject",
    "deleteTestObjects",
    "setCreateDefaults",
    "createTempTableName",
    "checkTriggerViewPermission",
    "debugPrint",
    "triggerRebuild",
    "checkSqlFunctionsExist",
    "dropTriggers",
    "createTriggers",
    "createReferenceColumns",
    "findReferences",
    "getReferenceCounts",
    "getReferencesToTable",
    "getGlobalSetting",
    "buildOptions",
    "getOptionLabels",
    "buildOptionsContext",
    "getFieldSpec",
    "createSQLFilter",
    "acceptedSQLOperators",
    "shortenSQLName",
    "setOptions",
    "setApiFilter",
    "addSelectWhereClause",
    "getSelectWhereClause",
    "requireSafeDBName",
    "get",
    "staticGet",
    "find",
    "fetch",
    "whereAdd",
    "orderBy",
    "affectedRows",
    "groupBy",
    "having",
    "limit",
    "selectAdd",
    "selectAs",
    "insert",
    "update",
    "fetchRow",
    "count",
    "escape",
    "databaseStructure",
    "tableName",
    "database",
    "_clear_cache",
    "_quote",
    "_connect",
    "_query",
    "_build_condition",
    "staticAutoloadTable",
    "_autoloadClass",
    "links",
    "getLinks",
    "getLink",
    "getLinkArray",
    "joinAdd",
    "setFrom",
    "toArray",
    "validate",
    "getDatabaseConnection",
    "getDatabaseResult",
    "_call",
    "fromValue",
    "toValue",
    "debug",
    "debugLevel",
    "raiseError",
    "_loadConfig",
    "free",
    "_get_table",
    "_get_keys",
    "getAlertLevel",
    "lastInsertId",
    "__call",
    "__sleep"
]
```

##<a name='civi.core.install'></a>Event_listeners Civi.core.install [:house:](index.md)


###<a name='civi.core.installCivi\Core\InstallationCanary::check'></a>Event_listeners Civi.core.installCivi\Core\InstallationCanary::check [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/Core/InstallationCanary.php lines: 36-59
 Methods:
```
[
    "check"
]
```

###<a name='civi.core.installCivi\Core\DatabaseInitializer::initialize'></a>Event_listeners Civi.core.installCivi\Core\DatabaseInitializer::initialize [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/Core/DatabaseInitializer.php lines: 36-53
 Methods:
```
[
    "initialize"
]
```

##<a name='hook_civicrm_post::Case'></a>Event_listeners Hook_civicrm_post::Case [:house:](index.md)


###<a name='hook_civicrm_post::CaseCivi\CCase\Events::fireCaseChange'></a>Event_listeners Hook_civicrm_post::CaseCivi\CCase\Events::fireCaseChange [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/CCase/Events.php lines: 34-110
 Methods:
```
[
    "fireCaseChange",
    "fireCaseChangeForRealz",
    "delegateToXmlListeners"
]
```

##<a name='hook_civicrm_caseChange'></a>Event_listeners Hook_civicrm_caseChange [:house:](index.md)


###<a name='hook_civicrm_caseChangeCivi\CCase\Events::delegateToXmlListeners'></a>Event_listeners Hook_civicrm_caseChangeCivi\CCase\Events::delegateToXmlListeners [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/CCase/Events.php lines: 34-110
 Methods:
```
[
    "fireCaseChange",
    "fireCaseChangeForRealz",
    "delegateToXmlListeners"
]
```

###<a name='hook_civicrm_caseChangeCivi\CCase\SequenceListener::onCaseChange_static'></a>Event_listeners Hook_civicrm_caseChangeCivi\CCase\SequenceListener::onCaseChange_static [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/CCase/SequenceListener.php lines: 9-123
 Methods:
```
[
    "singleton",
    "onCaseChange_static",
    "onCaseChange",
    "getSequenceXml",
    "createActivity"
]
```

##<a name='DAO::post-update'></a>Event_listeners DAO::post-update [:house:](index.md)


###<a name='DAO::post-updateCRM_Core_BAO_RecurringEntity::triggerUpdate'></a>Event_listeners DAO::post-updateCRM_Core_BAO_RecurringEntity::triggerUpdate [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Core/BAO/RecurringEntity.php lines: 39-1177
 Methods:
```
[
    "getStatus",
    "setStatus",
    "add",
    "quickAdd",
    "mode",
    "generate",
    "generateRecursion",
    "generateEntities",
    "generateRecursiveDates",
    "getEntitiesForParent",
    "getEntitiesFor",
    "getParentFor",
    "getPositionAndCount",
    "copyCreateEntity",
    "triggerUpdate",
    "triggerInsert",
    "triggerDelete",
    "delEntity",
    "mapFormValuesToDB",
    "getScheduleReminderDetailsById",
    "getScheduleParams",
    "getRecursionFromSchedule",
    "getInterval",
    "getReminderDetailsByEntityId",
    "updateModeLinkedEntity",
    "__construct",
    "fields",
    "fieldKeys",
    "getTableName",
    "getLog",
    "import",
    "export",
    "init",
    "getConnection",
    "reset",
    "getLocaleTableName",
    "query",
    "setFactory",
    "factory",
    "initialize",
    "keys",
    "sequenceKey",
    "getReferenceColumns",
    "table",
    "save",
    "delete",
    "log",
    "copyValues",
    "storeValues",
    "makeAttribute",
    "getAttribute",
    "transaction",
    "objectExists",
    "checkFieldExists",
    "getTableNames",
    "isDBMyISAM",
    "getDatabaseName",
    "checkConstraintExists",
    "schemaRequiresRebuilding",
    "checkFKConstraintInFormat",
    "checkFieldHasAlwaysValue",
    "checkFieldIsAlwaysNull",
    "checkTableExists",
    "checkVersion",
    "findById",
    "fetchAll",
    "fetchMap",
    "getFieldValue",
    "setFieldValue",
    "getSortString",
    "commonRetrieve",
    "deleteEntityContact",
    "executeUnbufferedQuery",
    "executeQuery",
    "singleValueQuery",
    "composeQuery",
    "freeResult",
    "copyGeneric",
    "cascadeUpdate",
    "getContactIDsFromComponent",
    "commonRetrieveAll",
    "dropAllTables",
    "escapeString",
    "escapeStrings",
    "escapeWildCardString",
    "createTestObject",
    "deleteTestObjects",
    "setCreateDefaults",
    "createTempTableName",
    "checkTriggerViewPermission",
    "debugPrint",
    "triggerRebuild",
    "checkSqlFunctionsExist",
    "dropTriggers",
    "createTriggers",
    "createReferenceColumns",
    "findReferences",
    "getReferenceCounts",
    "getReferencesToTable",
    "getGlobalSetting",
    "buildOptions",
    "getOptionLabels",
    "buildOptionsContext",
    "getFieldSpec",
    "createSQLFilter",
    "acceptedSQLOperators",
    "shortenSQLName",
    "setOptions",
    "setApiFilter",
    "addSelectWhereClause",
    "getSelectWhereClause",
    "requireSafeDBName",
    "get",
    "staticGet",
    "find",
    "fetch",
    "whereAdd",
    "orderBy",
    "affectedRows",
    "groupBy",
    "having",
    "limit",
    "selectAdd",
    "selectAs",
    "insert",
    "update",
    "fetchRow",
    "count",
    "escape",
    "databaseStructure",
    "tableName",
    "database",
    "_clear_cache",
    "_quote",
    "_connect",
    "_query",
    "_build_condition",
    "staticAutoloadTable",
    "_autoloadClass",
    "links",
    "getLinks",
    "getLink",
    "getLinkArray",
    "joinAdd",
    "setFrom",
    "toArray",
    "validate",
    "getDatabaseConnection",
    "getDatabaseResult",
    "_call",
    "fromValue",
    "toValue",
    "debug",
    "debugLevel",
    "raiseError",
    "_loadConfig",
    "free",
    "_get_table",
    "_get_keys",
    "getAlertLevel",
    "lastInsertId",
    "__call",
    "__sleep"
]
```

##<a name='hook_civicrm_unhandled_exception'></a>Event_listeners Hook_civicrm_unhandled_exception [:house:](index.md)


###<a name='hook_civicrm_unhandled_exceptionCRM_Core_LegacyErrorHandler::handleException'></a>Event_listeners Hook_civicrm_unhandled_exceptionCRM_Core_LegacyErrorHandler::handleException [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Core/LegacyErrorHandler.php lines: 6-37
 Methods:
```
[
    "handleException"
]
```

##<a name='actionSchedule.getMappings'></a>Event_listeners ActionSchedule.getMappings [:house:](index.md)


###<a name='actionSchedule.getMappingsCRM_Activity_ActionMapping::onRegisterActionMappings'></a>Event_listeners ActionSchedule.getMappingsCRM_Activity_ActionMapping::onRegisterActionMappings [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Activity/ActionMapping.php lines: 43-138
 Methods:
```
[
    "onRegisterActionMappings",
    "getRecipientTypes",
    "createQuery",
    "create",
    "__construct",
    "getId",
    "getEntity",
    "getLabel",
    "getValueHeader",
    "getStatusHeader",
    "getValueLabels",
    "getStatusLabels",
    "getDateFields",
    "getRecipientListing",
    "validateSchedule"
]
```

###<a name='actionSchedule.getMappingsCRM_Contact_ActionMapping::onRegisterActionMappings'></a>Event_listeners ActionSchedule.getMappingsCRM_Contact_ActionMapping::onRegisterActionMappings [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Contact/ActionMapping.php lines: 38-158
 Methods:
```
[
    "onRegisterActionMappings",
    "validateSchedule",
    "createQuery",
    "create",
    "__construct",
    "getId",
    "getEntity",
    "getLabel",
    "getValueHeader",
    "getStatusHeader",
    "getValueLabels",
    "getStatusLabels",
    "getDateFields",
    "getRecipientTypes",
    "getRecipientListing"
]
```

###<a name='actionSchedule.getMappingsCRM_Contribute_ActionMapping_ByPage::onRegisterActionMappings'></a>Event_listeners ActionSchedule.getMappingsCRM_Contribute_ActionMapping_ByPage::onRegisterActionMappings [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Contribute/ActionMapping/ByPage.php lines: 38-224
 Methods:
```
[
    "onRegisterActionMappings",
    "getId",
    "getEntity",
    "getLabel",
    "getValueHeader",
    "getStatusHeader",
    "getValueLabels",
    "getStatusLabels",
    "getDateFields",
    "getRecipientTypes",
    "getRecipientListing",
    "validateSchedule",
    "createQuery"
]
```

###<a name='actionSchedule.getMappingsCRM_Contribute_ActionMapping_ByType::onRegisterActionMappings'></a>Event_listeners ActionSchedule.getMappingsCRM_Contribute_ActionMapping_ByType::onRegisterActionMappings [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Contribute/ActionMapping/ByType.php lines: 38-243
 Methods:
```
[
    "onRegisterActionMappings",
    "getId",
    "getEntity",
    "getLabel",
    "getValueHeader",
    "getStatusHeader",
    "getValueLabels",
    "getStatusLabels",
    "getDateFields",
    "getRecipientTypes",
    "getRecipientListing",
    "validateSchedule",
    "createQuery"
]
```

###<a name='actionSchedule.getMappingsCRM_Event_ActionMapping::onRegisterActionMappings'></a>Event_listeners ActionSchedule.getMappingsCRM_Event_ActionMapping::onRegisterActionMappings [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Event/ActionMapping.php lines: 38-193
 Methods:
```
[
    "onRegisterActionMappings",
    "getRecipientTypes",
    "getRecipientListing",
    "createQuery",
    "create",
    "__construct",
    "getId",
    "getEntity",
    "getLabel",
    "getValueHeader",
    "getStatusHeader",
    "getValueLabels",
    "getStatusLabels",
    "getDateFields",
    "validateSchedule"
]
```

###<a name='actionSchedule.getMappingsCRM_Member_ActionMapping::onRegisterActionMappings'></a>Event_listeners ActionSchedule.getMappingsCRM_Member_ActionMapping::onRegisterActionMappings [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Member/ActionMapping.php lines: 37-156
 Methods:
```
[
    "onRegisterActionMappings",
    "createQuery",
    "create",
    "__construct",
    "getId",
    "getEntity",
    "getLabel",
    "getValueHeader",
    "getStatusHeader",
    "getValueLabels",
    "getStatusLabels",
    "getDateFields",
    "getRecipientTypes",
    "getRecipientListing",
    "validateSchedule"
]
```

##<a name='api.exception'></a>Event_listeners Api.exception [:house:](index.md)


###<a name='api.exceptionCivi\API\Subscriber\TransactionSubscriber::onApiException'></a>Event_listeners Api.exceptionCivi\API\Subscriber\TransactionSubscriber::onApiException [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/API/Subscriber/TransactionSubscriber.php lines: 46-176
 Methods:
```
[
    "getSubscribedEvents",
    "isTransactional",
    "isForceRollback",
    "isNested",
    "onApiPrepare",
    "onApiRespond",
    "onApiException"
]
```

###<a name='api.exceptionCivi\API\V4\MockSubscriber::snoop'></a>Event_listeners Api.exceptionCivi\API\V4\MockSubscriber::snoop [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/default/files/civicrm/ext/api4/tests/phpunit/Civi/API/V4/MockSubscriber.php lines: 8-40
 Methods:
```
[
    "resetEventLog",
    "getEventLog",
    "snoop",
    "getSubscribedEvents"
]
```

##<a name='civi.token.eval'></a>Event_listeners Civi.token.eval [:house:](index.md)


###<a name='civi.token.evalCivi\Token\TokenCompatSubscriber::onEvaluate'></a>Event_listeners Civi.token.evalCivi\Token\TokenCompatSubscriber::onEvaluate [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/Token/TokenCompatSubscriber.php lines: 21-132
 Methods:
```
[
    "getSubscribedEvents",
    "onEvaluate",
    "onRender"
]
```

###<a name='civi.token.evalCRM_Mailing_ActionTokens::evaluateTokens'></a>Event_listeners Civi.token.evalCRM_Mailing_ActionTokens::evaluateTokens [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Mailing/ActionTokens.php lines: 43-105
 Methods:
```
[
    "__construct",
    "evaluateToken",
    "getSubscribedEvents",
    "checkActive",
    "registerTokens",
    "getCustomTokens",
    "alterActionScheduleQuery",
    "evaluateTokens",
    "prefetch"
]
```

###<a name='civi.token.evalCRM_Activity_Tokens::evaluateTokens'></a>Event_listeners Civi.token.evalCRM_Activity_Tokens::evaluateTokens [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Activity/Tokens.php lines: 46-121
 Methods:
```
[
    "__construct",
    "checkActive",
    "alterActionScheduleQuery",
    "evaluateToken",
    "getSubscribedEvents",
    "registerTokens",
    "getCustomTokens",
    "evaluateTokens",
    "prefetch"
]
```

###<a name='civi.token.evalCRM_Contribute_Tokens::evaluateTokens'></a>Event_listeners Civi.token.evalCRM_Contribute_Tokens::evaluateTokens [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Contribute/Tokens.php lines: 37-147
 Methods:
```
[
    "__construct",
    "checkActive",
    "alterActionScheduleQuery",
    "evaluateToken",
    "getSubscribedEvents",
    "registerTokens",
    "getCustomTokens",
    "evaluateTokens",
    "prefetch"
]
```

###<a name='civi.token.evalCRM_Event_Tokens::evaluateTokens'></a>Event_listeners Civi.token.evalCRM_Event_Tokens::evaluateTokens [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Event/Tokens.php lines: 41-153
 Methods:
```
[
    "__construct",
    "checkActive",
    "alterActionScheduleQuery",
    "evaluateToken",
    "getSubscribedEvents",
    "registerTokens",
    "getCustomTokens",
    "evaluateTokens",
    "prefetch"
]
```

###<a name='civi.token.evalCRM_Mailing_Tokens::evaluateTokens'></a>Event_listeners Civi.token.evalCRM_Mailing_Tokens::evaluateTokens [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Mailing/Tokens.php lines: 37-94
 Methods:
```
[
    "__construct",
    "checkActive",
    "prefetch",
    "evaluateToken",
    "getSubscribedEvents",
    "registerTokens",
    "getCustomTokens",
    "alterActionScheduleQuery",
    "evaluateTokens"
]
```

###<a name='civi.token.evalCRM_Member_Tokens::evaluateTokens'></a>Event_listeners Civi.token.evalCRM_Member_Tokens::evaluateTokens [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Member/Tokens.php lines: 41-109
 Methods:
```
[
    "__construct",
    "checkActive",
    "alterActionScheduleQuery",
    "evaluateToken",
    "getSubscribedEvents",
    "registerTokens",
    "getCustomTokens",
    "evaluateTokens",
    "prefetch"
]
```

##<a name='civi.token.render'></a>Event_listeners Civi.token.render [:house:](index.md)


###<a name='civi.token.renderCivi\Token\TokenCompatSubscriber::onRender'></a>Event_listeners Civi.token.renderCivi\Token\TokenCompatSubscriber::onRender [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/Civi/Token/TokenCompatSubscriber.php lines: 21-132
 Methods:
```
[
    "getSubscribedEvents",
    "onEvaluate",
    "onRender"
]
```

##<a name='civi.token.list'></a>Event_listeners Civi.token.list [:house:](index.md)


###<a name='civi.token.listCRM_Mailing_ActionTokens::registerTokens'></a>Event_listeners Civi.token.listCRM_Mailing_ActionTokens::registerTokens [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Mailing/ActionTokens.php lines: 43-105
 Methods:
```
[
    "__construct",
    "evaluateToken",
    "getSubscribedEvents",
    "checkActive",
    "registerTokens",
    "getCustomTokens",
    "alterActionScheduleQuery",
    "evaluateTokens",
    "prefetch"
]
```

###<a name='civi.token.listCRM_Activity_Tokens::registerTokens'></a>Event_listeners Civi.token.listCRM_Activity_Tokens::registerTokens [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Activity/Tokens.php lines: 46-121
 Methods:
```
[
    "__construct",
    "checkActive",
    "alterActionScheduleQuery",
    "evaluateToken",
    "getSubscribedEvents",
    "registerTokens",
    "getCustomTokens",
    "evaluateTokens",
    "prefetch"
]
```

###<a name='civi.token.listCRM_Contribute_Tokens::registerTokens'></a>Event_listeners Civi.token.listCRM_Contribute_Tokens::registerTokens [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Contribute/Tokens.php lines: 37-147
 Methods:
```
[
    "__construct",
    "checkActive",
    "alterActionScheduleQuery",
    "evaluateToken",
    "getSubscribedEvents",
    "registerTokens",
    "getCustomTokens",
    "evaluateTokens",
    "prefetch"
]
```

###<a name='civi.token.listCRM_Event_Tokens::registerTokens'></a>Event_listeners Civi.token.listCRM_Event_Tokens::registerTokens [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Event/Tokens.php lines: 41-153
 Methods:
```
[
    "__construct",
    "checkActive",
    "alterActionScheduleQuery",
    "evaluateToken",
    "getSubscribedEvents",
    "registerTokens",
    "getCustomTokens",
    "evaluateTokens",
    "prefetch"
]
```

###<a name='civi.token.listCRM_Mailing_Tokens::registerTokens'></a>Event_listeners Civi.token.listCRM_Mailing_Tokens::registerTokens [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Mailing/Tokens.php lines: 37-94
 Methods:
```
[
    "__construct",
    "checkActive",
    "prefetch",
    "evaluateToken",
    "getSubscribedEvents",
    "registerTokens",
    "getCustomTokens",
    "alterActionScheduleQuery",
    "evaluateTokens"
]
```

###<a name='civi.token.listCRM_Member_Tokens::registerTokens'></a>Event_listeners Civi.token.listCRM_Member_Tokens::registerTokens [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Member/Tokens.php lines: 41-109
 Methods:
```
[
    "__construct",
    "checkActive",
    "alterActionScheduleQuery",
    "evaluateToken",
    "getSubscribedEvents",
    "registerTokens",
    "getCustomTokens",
    "evaluateTokens",
    "prefetch"
]
```

##<a name='actionSchedule.prepareMailingQuery'></a>Event_listeners ActionSchedule.prepareMailingQuery [:house:](index.md)


###<a name='actionSchedule.prepareMailingQueryCRM_Mailing_ActionTokens::alterActionScheduleQuery'></a>Event_listeners ActionSchedule.prepareMailingQueryCRM_Mailing_ActionTokens::alterActionScheduleQuery [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Mailing/ActionTokens.php lines: 43-105
 Methods:
```
[
    "__construct",
    "evaluateToken",
    "getSubscribedEvents",
    "checkActive",
    "registerTokens",
    "getCustomTokens",
    "alterActionScheduleQuery",
    "evaluateTokens",
    "prefetch"
]
```

###<a name='actionSchedule.prepareMailingQueryCRM_Activity_Tokens::alterActionScheduleQuery'></a>Event_listeners ActionSchedule.prepareMailingQueryCRM_Activity_Tokens::alterActionScheduleQuery [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Activity/Tokens.php lines: 46-121
 Methods:
```
[
    "__construct",
    "checkActive",
    "alterActionScheduleQuery",
    "evaluateToken",
    "getSubscribedEvents",
    "registerTokens",
    "getCustomTokens",
    "evaluateTokens",
    "prefetch"
]
```

###<a name='actionSchedule.prepareMailingQueryCRM_Contribute_Tokens::alterActionScheduleQuery'></a>Event_listeners ActionSchedule.prepareMailingQueryCRM_Contribute_Tokens::alterActionScheduleQuery [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Contribute/Tokens.php lines: 37-147
 Methods:
```
[
    "__construct",
    "checkActive",
    "alterActionScheduleQuery",
    "evaluateToken",
    "getSubscribedEvents",
    "registerTokens",
    "getCustomTokens",
    "evaluateTokens",
    "prefetch"
]
```

###<a name='actionSchedule.prepareMailingQueryCRM_Event_Tokens::alterActionScheduleQuery'></a>Event_listeners ActionSchedule.prepareMailingQueryCRM_Event_Tokens::alterActionScheduleQuery [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Event/Tokens.php lines: 41-153
 Methods:
```
[
    "__construct",
    "checkActive",
    "alterActionScheduleQuery",
    "evaluateToken",
    "getSubscribedEvents",
    "registerTokens",
    "getCustomTokens",
    "evaluateTokens",
    "prefetch"
]
```

###<a name='actionSchedule.prepareMailingQueryCRM_Mailing_Tokens::alterActionScheduleQuery'></a>Event_listeners ActionSchedule.prepareMailingQueryCRM_Mailing_Tokens::alterActionScheduleQuery [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Mailing/Tokens.php lines: 37-94
 Methods:
```
[
    "__construct",
    "checkActive",
    "prefetch",
    "evaluateToken",
    "getSubscribedEvents",
    "registerTokens",
    "getCustomTokens",
    "alterActionScheduleQuery",
    "evaluateTokens"
]
```

###<a name='actionSchedule.prepareMailingQueryCRM_Member_Tokens::alterActionScheduleQuery'></a>Event_listeners ActionSchedule.prepareMailingQueryCRM_Member_Tokens::alterActionScheduleQuery [:house:](index.md)


source: /opt/buildkit/build/dmaster/sites/all/modules/civicrm/CRM/Member/Tokens.php lines: 41-109
 Methods:
```
[
    "__construct",
    "checkActive",
    "alterActionScheduleQuery",
    "evaluateToken",
    "getSubscribedEvents",
    "registerTokens",
    "getCustomTokens",
    "evaluateTokens",
    "prefetch"
]
```
###### This file was automatically generated. Do not edit directly.