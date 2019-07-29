<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentExtraVars");
$query->setAction("delete");
$query->setPriority("");

${'module_srl28_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl28_argument'}->checkFilter('number');
${'module_srl28_argument'}->checkNotNull();
${'module_srl28_argument'}->createConditionValue();
if(!${'module_srl28_argument'}->isValid()) return ${'module_srl28_argument'}->getErrorMessage();
if(${'module_srl28_argument'} !== null) ${'module_srl28_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl29_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl29_argument'}->checkFilter('number');
${'document_srl29_argument'}->createConditionValue();
if(!${'document_srl29_argument'}->isValid()) return ${'document_srl29_argument'}->getErrorMessage();
} else
${'document_srl29_argument'} = NULL;if(${'document_srl29_argument'} !== null) ${'document_srl29_argument'}->setColumnType('number');
if(isset($args->var_idx)) {
${'var_idx30_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx30_argument'}->checkFilter('number');
${'var_idx30_argument'}->createConditionValue();
if(!${'var_idx30_argument'}->isValid()) return ${'var_idx30_argument'}->getErrorMessage();
} else
${'var_idx30_argument'} = NULL;if(${'var_idx30_argument'} !== null) ${'var_idx30_argument'}->setColumnType('number');
if(isset($args->lang_code)) {
${'lang_code31_argument'} = new ConditionArgument('lang_code', $args->lang_code, 'equal');
${'lang_code31_argument'}->createConditionValue();
if(!${'lang_code31_argument'}->isValid()) return ${'lang_code31_argument'}->getErrorMessage();
} else
${'lang_code31_argument'} = NULL;if(${'lang_code31_argument'} !== null) ${'lang_code31_argument'}->setColumnType('varchar');
if(isset($args->eid)) {
${'eid32_argument'} = new ConditionArgument('eid', $args->eid, 'equal');
${'eid32_argument'}->createConditionValue();
if(!${'eid32_argument'}->isValid()) return ${'eid32_argument'}->getErrorMessage();
} else
${'eid32_argument'} = NULL;if(${'eid32_argument'} !== null) ${'eid32_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`hme_document_extra_vars`', '`document_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl28_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl29_argument,"equal", 'and')
,new ConditionWithArgument('`var_idx`',$var_idx30_argument,"equal", 'and')
,new ConditionWithArgument('`lang_code`',$lang_code31_argument,"equal", 'and')
,new ConditionWithArgument('`eid`',$eid32_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>