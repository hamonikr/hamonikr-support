<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateFileValid");
$query->setAction("update");
$query->setPriority("");

${'isvalid250_argument'} = new Argument('isvalid', $args->{'isvalid'});
${'isvalid250_argument'}->ensureDefaultValue('Y');
${'isvalid250_argument'}->checkNotNull();
if(!${'isvalid250_argument'}->isValid()) return ${'isvalid250_argument'}->getErrorMessage();
if(${'isvalid250_argument'} !== null) ${'isvalid250_argument'}->setColumnType('char');

${'upload_target_srl251_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl251_argument'}->checkFilter('number');
${'upload_target_srl251_argument'}->checkNotNull();
${'upload_target_srl251_argument'}->createConditionValue();
if(!${'upload_target_srl251_argument'}->isValid()) return ${'upload_target_srl251_argument'}->getErrorMessage();
if(${'upload_target_srl251_argument'} !== null) ${'upload_target_srl251_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`isvalid`', ${'isvalid250_argument'})
));
$query->setTables(array(
new Table('`hme_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl251_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>