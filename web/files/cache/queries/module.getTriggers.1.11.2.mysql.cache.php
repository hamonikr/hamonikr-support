<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getTriggers");
$query->setAction("select");
$query->setPriority("");
if(isset($args->trigger_name)) {
${'trigger_name10_argument'} = new ConditionArgument('trigger_name', $args->trigger_name, 'equal');
${'trigger_name10_argument'}->createConditionValue();
if(!${'trigger_name10_argument'}->isValid()) return ${'trigger_name10_argument'}->getErrorMessage();
} else
${'trigger_name10_argument'} = NULL;if(${'trigger_name10_argument'} !== null) ${'trigger_name10_argument'}->setColumnType('varchar');
if(isset($args->called_position)) {
${'called_position11_argument'} = new ConditionArgument('called_position', $args->called_position, 'equal');
${'called_position11_argument'}->createConditionValue();
if(!${'called_position11_argument'}->isValid()) return ${'called_position11_argument'}->getErrorMessage();
} else
${'called_position11_argument'} = NULL;if(${'called_position11_argument'} !== null) ${'called_position11_argument'}->setColumnType('varchar');

${'16_argument'} = new Argument('', $args->{''});
${'16_argument'}->ensureDefaultValue('called_method');
if(!${'16_argument'}->isValid()) return ${'16_argument'}->getErrorMessage();

${'15_argument'} = new Argument('', $args->{''});
${'15_argument'}->ensureDefaultValue('type');
if(!${'15_argument'}->isValid()) return ${'15_argument'}->getErrorMessage();

${'14_argument'} = new Argument('', $args->{''});
${'14_argument'}->ensureDefaultValue('module');
if(!${'14_argument'}->isValid()) return ${'14_argument'}->getErrorMessage();

${'13_argument'} = new Argument('', $args->{''});
${'13_argument'}->ensureDefaultValue('called_position');
if(!${'13_argument'}->isValid()) return ${'13_argument'}->getErrorMessage();

${'12_argument'} = new Argument('', $args->{''});
${'12_argument'}->ensureDefaultValue('trigger_name');
if(!${'12_argument'}->isValid()) return ${'12_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_module_trigger`', '`module_trigger`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`trigger_name`',$trigger_name10_argument,"equal")
,new ConditionWithArgument('`called_position`',$called_position11_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'12_argument'}, "asc")
,new OrderByColumn(${'13_argument'}, "asc")
,new OrderByColumn(${'14_argument'}, "asc")
,new OrderByColumn(${'15_argument'}, "asc")
,new OrderByColumn(${'16_argument'}, "asc")
));
$query->setLimit();
return $query; ?>