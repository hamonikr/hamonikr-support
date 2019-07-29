<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentExtraKeys");
$query->setAction("delete");
$query->setPriority("");

${'module_srl21_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl21_argument'}->checkFilter('number');
${'module_srl21_argument'}->checkNotNull();
${'module_srl21_argument'}->createConditionValue();
if(!${'module_srl21_argument'}->isValid()) return ${'module_srl21_argument'}->getErrorMessage();
if(${'module_srl21_argument'} !== null) ${'module_srl21_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl22_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl22_argument'}->checkFilter('number');
${'document_srl22_argument'}->createConditionValue();
if(!${'document_srl22_argument'}->isValid()) return ${'document_srl22_argument'}->getErrorMessage();
} else
${'document_srl22_argument'} = NULL;if(isset($args->var_idx)) {
${'var_idx23_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx23_argument'}->checkFilter('number');
${'var_idx23_argument'}->createConditionValue();
if(!${'var_idx23_argument'}->isValid()) return ${'var_idx23_argument'}->getErrorMessage();
} else
${'var_idx23_argument'} = NULL;if(${'var_idx23_argument'} !== null) ${'var_idx23_argument'}->setColumnType('number');

$query->setTables(array(
new Table('`hme_document_extra_keys`', '`document_extra_keys`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl21_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl22_argument,"equal", 'and')
,new ConditionWithArgument('`var_idx`',$var_idx23_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>