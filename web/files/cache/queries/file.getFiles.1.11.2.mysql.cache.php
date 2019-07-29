<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getFiles");
$query->setAction("select");
$query->setPriority("");

${'upload_target_srl2_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl2_argument'}->checkFilter('number');
${'upload_target_srl2_argument'}->checkNotNull();
${'upload_target_srl2_argument'}->createConditionValue();
if(!${'upload_target_srl2_argument'}->isValid()) return ${'upload_target_srl2_argument'}->getErrorMessage();
if(${'upload_target_srl2_argument'} !== null) ${'upload_target_srl2_argument'}->setColumnType('number');
if(isset($args->isvalid)) {
${'isvalid3_argument'} = new ConditionArgument('isvalid', $args->isvalid, 'equal');
${'isvalid3_argument'}->createConditionValue();
if(!${'isvalid3_argument'}->isValid()) return ${'isvalid3_argument'}->getErrorMessage();
} else
${'isvalid3_argument'} = NULL;if(${'isvalid3_argument'} !== null) ${'isvalid3_argument'}->setColumnType('char');
if(isset($args->sort_index)) {
${'sort_index4_argument'} = new Argument('sort_index', $args->{'sort_index'});
if(!${'sort_index4_argument'}->isValid()) return ${'sort_index4_argument'}->getErrorMessage();
} else
${'sort_index4_argument'} = NULL;
$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl2_argument,"equal")
,new ConditionWithArgument('`isvalid`',$isvalid3_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index4_argument'}, "asc")
));
$query->setLimit();
return $query; ?>