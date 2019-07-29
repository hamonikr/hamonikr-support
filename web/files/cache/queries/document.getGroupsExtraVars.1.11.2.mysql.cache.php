<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getGroupsExtraVars");
$query->setAction("select");
$query->setPriority("");

${'module_srl15_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl15_argument'}->checkFilter('number');
${'module_srl15_argument'}->checkNotNull();
${'module_srl15_argument'}->createConditionValue();
if(!${'module_srl15_argument'}->isValid()) return ${'module_srl15_argument'}->getErrorMessage();
if(${'module_srl15_argument'} !== null) ${'module_srl15_argument'}->setColumnType('number');
if(isset($args->var_idx)) {
${'var_idx16_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'notin');
${'var_idx16_argument'}->checkFilter('number');
${'var_idx16_argument'}->createConditionValue();
if(!${'var_idx16_argument'}->isValid()) return ${'var_idx16_argument'}->getErrorMessage();
} else
${'var_idx16_argument'} = NULL;if(${'var_idx16_argument'} !== null) ${'var_idx16_argument'}->setColumnType('number');
if(isset($args->eid)) {
${'eid17_argument'} = new ConditionArgument('eid', $args->eid, 'equal');
${'eid17_argument'}->createConditionValue();
if(!${'eid17_argument'}->isValid()) return ${'eid17_argument'}->getErrorMessage();
} else
${'eid17_argument'} = NULL;if(${'eid17_argument'} !== null) ${'eid17_argument'}->setColumnType('varchar');

${'sort_index18_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index18_argument'}->ensureDefaultValue('var_idx');
if(!${'sort_index18_argument'}->isValid()) return ${'sort_index18_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`module_srl`', '`module_srl`')
,new SelectExpression('`var_idx`', '`idx`')
,new SelectExpression('`eid`', '`eid`')
));
$query->setTables(array(
new Table('`hme_document_extra_vars`', '`document_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl15_argument,"equal")
,new ConditionWithArgument('`var_idx`',$var_idx16_argument,"notin", 'and')
,new ConditionWithArgument('`eid`',$eid17_argument,"equal", 'and')))
));
$query->setGroups(array(
'`module_srl`' ,'`var_idx`' ,'`eid`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index18_argument'}, "asc")
));
$query->setLimit();
return $query; ?>