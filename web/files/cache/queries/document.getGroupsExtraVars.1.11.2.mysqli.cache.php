<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getGroupsExtraVars");
$query->setAction("select");
$query->setPriority("");

${'module_srl1_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->checkNotNull();
${'module_srl1_argument'}->createConditionValue();
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');
if(isset($args->var_idx)) {
${'var_idx2_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'notin');
${'var_idx2_argument'}->checkFilter('number');
${'var_idx2_argument'}->createConditionValue();
if(!${'var_idx2_argument'}->isValid()) return ${'var_idx2_argument'}->getErrorMessage();
} else
${'var_idx2_argument'} = NULL;if(${'var_idx2_argument'} !== null) ${'var_idx2_argument'}->setColumnType('number');
if(isset($args->eid)) {
${'eid3_argument'} = new ConditionArgument('eid', $args->eid, 'equal');
${'eid3_argument'}->createConditionValue();
if(!${'eid3_argument'}->isValid()) return ${'eid3_argument'}->getErrorMessage();
} else
${'eid3_argument'} = NULL;if(${'eid3_argument'} !== null) ${'eid3_argument'}->setColumnType('varchar');

${'sort_index4_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index4_argument'}->ensureDefaultValue('var_idx');
if(!${'sort_index4_argument'}->isValid()) return ${'sort_index4_argument'}->getErrorMessage();

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
new ConditionWithArgument('`module_srl`',$module_srl1_argument,"equal")
,new ConditionWithArgument('`var_idx`',$var_idx2_argument,"notin", 'and')
,new ConditionWithArgument('`eid`',$eid3_argument,"equal", 'and')))
));
$query->setGroups(array(
'`module_srl`' ,'`var_idx`' ,'`eid`' ));
$query->setOrder(array(
new OrderByColumn(${'sort_index4_argument'}, "asc")
));
$query->setLimit();
return $query; ?>