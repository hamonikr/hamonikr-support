<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteAlias");
$query->setAction("delete");
$query->setPriority("");
if(isset($args->alias_srl)) {
${'alias_srl29_argument'} = new ConditionArgument('alias_srl', $args->alias_srl, 'equal');
${'alias_srl29_argument'}->checkFilter('number');
${'alias_srl29_argument'}->createConditionValue();
if(!${'alias_srl29_argument'}->isValid()) return ${'alias_srl29_argument'}->getErrorMessage();
} else
${'alias_srl29_argument'} = NULL;if(${'alias_srl29_argument'} !== null) ${'alias_srl29_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl30_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl30_argument'}->checkFilter('number');
${'document_srl30_argument'}->createConditionValue();
if(!${'document_srl30_argument'}->isValid()) return ${'document_srl30_argument'}->getErrorMessage();
} else
${'document_srl30_argument'} = NULL;if(${'document_srl30_argument'} !== null) ${'document_srl30_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl31_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl31_argument'}->checkFilter('number');
${'module_srl31_argument'}->createConditionValue();
if(!${'module_srl31_argument'}->isValid()) return ${'module_srl31_argument'}->getErrorMessage();
} else
${'module_srl31_argument'} = NULL;if(${'module_srl31_argument'} !== null) ${'module_srl31_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_document_aliases`', '`document_aliases`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`alias_srl`',$alias_srl29_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl30_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl31_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>