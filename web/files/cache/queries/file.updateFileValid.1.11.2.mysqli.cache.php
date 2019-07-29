<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateFileValid");
$query->setAction("update");
$query->setPriority("");

${'isvalid37_argument'} = new Argument('isvalid', $args->{'isvalid'});
${'isvalid37_argument'}->ensureDefaultValue('Y');
${'isvalid37_argument'}->checkNotNull();
if(!${'isvalid37_argument'}->isValid()) return ${'isvalid37_argument'}->getErrorMessage();
if(${'isvalid37_argument'} !== null) ${'isvalid37_argument'}->setColumnType('char');

${'upload_target_srl38_argument'} = new ConditionArgument('upload_target_srl', $args->upload_target_srl, 'equal');
${'upload_target_srl38_argument'}->checkFilter('number');
${'upload_target_srl38_argument'}->checkNotNull();
${'upload_target_srl38_argument'}->createConditionValue();
if(!${'upload_target_srl38_argument'}->isValid()) return ${'upload_target_srl38_argument'}->getErrorMessage();
if(${'upload_target_srl38_argument'} !== null) ${'upload_target_srl38_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`isvalid`', ${'isvalid37_argument'})
));
$query->setTables(array(
new Table('`hme_files`', '`files`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`upload_target_srl`',$upload_target_srl38_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>