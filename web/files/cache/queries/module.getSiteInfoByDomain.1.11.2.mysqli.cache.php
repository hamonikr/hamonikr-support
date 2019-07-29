<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteInfoByDomain");
$query->setAction("select");
$query->setPriority("");

${'domain3_argument'} = new ConditionArgument('domain', $args->domain, 'equal');
${'domain3_argument'}->checkNotNull();
${'domain3_argument'}->createConditionValue();
if(!${'domain3_argument'}->isValid()) return ${'domain3_argument'}->getErrorMessage();
if(${'domain3_argument'} !== null) ${'domain3_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('`sites`.`site_srl`', '`site_srl`')
,new SelectExpression('`sites`.`domain`', '`domain`')
,new SelectExpression('`sites`.`index_module_srl`', '`index_module_srl`')
,new SelectExpression('`sites`.`default_language`', '`default_language`')
,new SelectExpression('`modules`.*')
));
$query->setTables(array(
new Table('`hme_sites`', '`sites`')
,new Table('`hme_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`sites`.`domain`',$domain3_argument,"equal")
,new ConditionWithoutArgument('`modules`.`module_srl`','`sites`.`index_module_srl`',"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>