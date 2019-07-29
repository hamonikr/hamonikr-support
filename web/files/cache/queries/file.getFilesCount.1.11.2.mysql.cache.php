<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFilesCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->upload_target_srl)) {
${'upload_target_srl2_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl2_argument'}->checkFilter('number');
${'upload_target_srl2_argument'}->createConditionValue();
if(!${'upload_target_srl2_argument'}->isValid()) return ${'upload_target_srl2_argument'}->getErrorMessage();
} else
${'upload_target_srl2_argument'} = NULL;if(${'upload_target_srl2_argument'} !== null) ${'upload_target_srl2_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate3_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate3_argument'}->createConditionValue();
if(!${'regDate3_argument'}->isValid()) return ${'regDate3_argument'}->getErrorMessage();
} else
${'regDate3_argument'} = NULL;if(${'regDate3_argument'} !== null) ${'regDate3_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`hme_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl2_argument,"equal")
,new ConditionWithArgument('`regdate`',$regDate3_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>