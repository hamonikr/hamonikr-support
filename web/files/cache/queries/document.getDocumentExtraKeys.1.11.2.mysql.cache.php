<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentExtraKeys");
$query->setAction("select");
$query->setPriority("");

${'module_srl243_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl243_argument'}->checkFilter('number');
${'module_srl243_argument'}->checkNotNull();
${'module_srl243_argument'}->createConditionValue();
if(!${'module_srl243_argument'}->isValid()) return ${'module_srl243_argument'}->getErrorMessage();
if(${'module_srl243_argument'} !== null) ${'module_srl243_argument'}->setColumnType('number');
if(isset($args->var_idx)) {
${'var_idx244_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx244_argument'}->checkFilter('number');
${'var_idx244_argument'}->createConditionValue();
if(!${'var_idx244_argument'}->isValid()) return ${'var_idx244_argument'}->getErrorMessage();
} else
${'var_idx244_argument'} = NULL;if(${'var_idx244_argument'} !== null) ${'var_idx244_argument'}->setColumnType('number');

${'sort_index245_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index245_argument'}->ensureDefaultValue('var_idx');
if(!${'sort_index245_argument'}->isValid()) return ${'sort_index245_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`module_srl`', '`module_srl`')
,new SelectExpression('`var_idx`', '`idx`')
,new SelectExpression('`var_name`', '`name`')
,new SelectExpression('`var_type`', '`type`')
,new SelectExpression('`var_is_required`', '`is_required`')
,new SelectExpression('`var_search`', '`search`')
,new SelectExpression('`var_default`', '`default`')
,new SelectExpression('`var_desc`', '`desc`')
,new SelectExpression('`eid`', '`eid`')
));
$query->setTables(array(
new Table('`hme_document_extra_keys`', '`document_extra_keys`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl243_argument,"equal")
,new ConditionWithArgument('`var_idx`',$var_idx244_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index245_argument'}, "asc")
));
$query->setLimit();
return $query; ?>