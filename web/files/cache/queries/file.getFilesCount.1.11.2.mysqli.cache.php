<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFilesCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->upload_target_srl)) {
${'upload_target_srl1_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl1_argument'}->checkFilter('number');
${'upload_target_srl1_argument'}->createConditionValue();
if(!${'upload_target_srl1_argument'}->isValid()) return ${'upload_target_srl1_argument'}->getErrorMessage();
} else
${'upload_target_srl1_argument'} = NULL;if(${'upload_target_srl1_argument'} !== null) ${'upload_target_srl1_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate2_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate2_argument'}->createConditionValue();
if(!${'regDate2_argument'}->isValid()) return ${'regDate2_argument'}->getErrorMessage();
} else
${'regDate2_argument'} = NULL;if(${'regDate2_argument'} !== null) ${'regDate2_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`hme_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl1_argument,"equal")
,new ConditionWithArgument('`regdate`',$regDate2_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>