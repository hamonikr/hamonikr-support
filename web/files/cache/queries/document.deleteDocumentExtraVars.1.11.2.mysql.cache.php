<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("deleteDocumentExtraVars");
$query->setAction("delete");
$query->setPriority("");

${'module_srl24_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl24_argument'}->checkFilter('number');
${'module_srl24_argument'}->checkNotNull();
${'module_srl24_argument'}->createConditionValue();
if(!${'module_srl24_argument'}->isValid()) return ${'module_srl24_argument'}->getErrorMessage();
if(${'module_srl24_argument'} !== null) ${'module_srl24_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl25_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl25_argument'}->checkFilter('number');
${'document_srl25_argument'}->createConditionValue();
if(!${'document_srl25_argument'}->isValid()) return ${'document_srl25_argument'}->getErrorMessage();
} else
${'document_srl25_argument'} = NULL;if(${'document_srl25_argument'} !== null) ${'document_srl25_argument'}->setColumnType('number');
if(isset($args->var_idx)) {
${'var_idx26_argument'} = new ConditionArgument('var_idx', $args->var_idx, 'equal');
${'var_idx26_argument'}->checkFilter('number');
${'var_idx26_argument'}->createConditionValue();
if(!${'var_idx26_argument'}->isValid()) return ${'var_idx26_argument'}->getErrorMessage();
} else
${'var_idx26_argument'} = NULL;if(${'var_idx26_argument'} !== null) ${'var_idx26_argument'}->setColumnType('number');
if(isset($args->lang_code)) {
${'lang_code27_argument'} = new ConditionArgument('lang_code', $args->lang_code, 'equal');
${'lang_code27_argument'}->createConditionValue();
if(!${'lang_code27_argument'}->isValid()) return ${'lang_code27_argument'}->getErrorMessage();
} else
${'lang_code27_argument'} = NULL;if(${'lang_code27_argument'} !== null) ${'lang_code27_argument'}->setColumnType('varchar');
if(isset($args->eid)) {
${'eid28_argument'} = new ConditionArgument('eid', $args->eid, 'equal');
${'eid28_argument'}->createConditionValue();
if(!${'eid28_argument'}->isValid()) return ${'eid28_argument'}->getErrorMessage();
} else
${'eid28_argument'} = NULL;if(${'eid28_argument'} !== null) ${'eid28_argument'}->setColumnType('varchar');

$query->setTables(array(
new Table('`hme_document_extra_vars`', '`document_extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl24_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl25_argument,"equal", 'and')
,new ConditionWithArgument('`var_idx`',$var_idx26_argument,"equal", 'and')
,new ConditionWithArgument('`lang_code`',$lang_code27_argument,"equal", 'and')
,new ConditionWithArgument('`eid`',$eid28_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>