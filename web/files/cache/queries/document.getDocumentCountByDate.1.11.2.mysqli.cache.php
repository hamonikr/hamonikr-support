<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->moduleSrlList)) {
${'moduleSrlList9_argument'} = new ConditionArgument('moduleSrlList', $args->moduleSrlList, 'in');
${'moduleSrlList9_argument'}->createConditionValue();
if(!${'moduleSrlList9_argument'}->isValid()) return ${'moduleSrlList9_argument'}->getErrorMessage();
} else
${'moduleSrlList9_argument'} = NULL;if(${'moduleSrlList9_argument'} !== null) ${'moduleSrlList9_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate10_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate10_argument'}->createConditionValue();
if(!${'regDate10_argument'}->isValid()) return ${'regDate10_argument'}->getErrorMessage();
} else
${'regDate10_argument'} = NULL;if(${'regDate10_argument'} !== null) ${'regDate10_argument'}->setColumnType('date');
if(isset($args->statusList)) {
${'statusList11_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList11_argument'}->createConditionValue();
if(!${'statusList11_argument'}->isValid()) return ${'statusList11_argument'}->getErrorMessage();
} else
${'statusList11_argument'} = NULL;if(${'statusList11_argument'} !== null) ${'statusList11_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`hme_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$moduleSrlList9_argument,"in")
,new ConditionWithArgument('`regdate`',$regDate10_argument,"like_prefix", 'and')
,new ConditionWithArgument('`status`',$statusList11_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>