<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("isExistsSiteDomain");
$query->setAction("select");
$query->setPriority("");

${'domain129_argument'} = new ConditionArgument('domain', $args->domain, 'equal');
${'domain129_argument'}->checkNotNull();
${'domain129_argument'}->createConditionValue();
if(!${'domain129_argument'}->isValid()) return ${'domain129_argument'}->getErrorMessage();
if(${'domain129_argument'} !== null) ${'domain129_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`hme_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`domain`',$domain129_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>