<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModuleExtend");
$query->setAction("select");
$query->setPriority("");
if(isset($args->parent_module)) {
${'parent_module1_argument'} = new ConditionArgument('parent_module', $args->parent_module, 'equal');
${'parent_module1_argument'}->createConditionValue();
if(!${'parent_module1_argument'}->isValid()) return ${'parent_module1_argument'}->getErrorMessage();
} else
${'parent_module1_argument'} = NULL;if(${'parent_module1_argument'} !== null) ${'parent_module1_argument'}->setColumnType('varchar');
if(isset($args->extend_module)) {
${'extend_module2_argument'} = new ConditionArgument('extend_module', $args->extend_module, 'equal');
${'extend_module2_argument'}->createConditionValue();
if(!${'extend_module2_argument'}->isValid()) return ${'extend_module2_argument'}->getErrorMessage();
} else
${'extend_module2_argument'} = NULL;if(${'extend_module2_argument'} !== null) ${'extend_module2_argument'}->setColumnType('varchar');
if(isset($args->type)) {
${'type3_argument'} = new ConditionArgument('type', $args->type, 'equal');
${'type3_argument'}->createConditionValue();
if(!${'type3_argument'}->isValid()) return ${'type3_argument'}->getErrorMessage();
} else
${'type3_argument'} = NULL;if(${'type3_argument'} !== null) ${'type3_argument'}->setColumnType('varchar');
if(isset($args->kind)) {
${'kind4_argument'} = new ConditionArgument('kind', $args->kind, 'equal');
${'kind4_argument'}->createConditionValue();
if(!${'kind4_argument'}->isValid()) return ${'kind4_argument'}->getErrorMessage();
} else
${'kind4_argument'} = NULL;if(${'kind4_argument'} !== null) ${'kind4_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_module_extend`', '`module_extend`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`parent_module`',$parent_module1_argument,"equal")
,new ConditionWithArgument('`extend_module`',$extend_module2_argument,"equal", 'and')
,new ConditionWithArgument('`type`',$type3_argument,"equal", 'and')
,new ConditionWithArgument('`kind`',$kind4_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>