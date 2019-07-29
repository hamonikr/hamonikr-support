<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentCountByDate");
$query->setAction("select");
$query->setPriority("");
if(isset($args->moduleSrlList)) {
${'moduleSrlList26_argument'} = new ConditionArgument('moduleSrlList', $args->moduleSrlList, 'in');
${'moduleSrlList26_argument'}->createConditionValue();
if(!${'moduleSrlList26_argument'}->isValid()) return ${'moduleSrlList26_argument'}->getErrorMessage();
} else
${'moduleSrlList26_argument'} = NULL;if(${'moduleSrlList26_argument'} !== null) ${'moduleSrlList26_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate27_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate27_argument'}->createConditionValue();
if(!${'regDate27_argument'}->isValid()) return ${'regDate27_argument'}->getErrorMessage();
} else
${'regDate27_argument'} = NULL;if(${'regDate27_argument'} !== null) ${'regDate27_argument'}->setColumnType('date');
if(isset($args->statusList)) {
${'statusList28_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList28_argument'}->createConditionValue();
if(!${'statusList28_argument'}->isValid()) return ${'statusList28_argument'}->getErrorMessage();
} else
${'statusList28_argument'} = NULL;if(${'statusList28_argument'} !== null) ${'statusList28_argument'}->setColumnType('varchar');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`hme_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$moduleSrlList26_argument,"in")
,new ConditionWithArgument('`regdate`',$regDate27_argument,"like_prefix", 'and')
,new ConditionWithArgument('`status`',$statusList28_argument,"in", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>