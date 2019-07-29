<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentExtraVars");
$query->setAction("select");
$query->setPriority("");

${'document_srl5_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'in');
${'document_srl5_argument'}->checkNotNull();
${'document_srl5_argument'}->createConditionValue();
if(!${'document_srl5_argument'}->isValid()) return ${'document_srl5_argument'}->getErrorMessage();
if(${'document_srl5_argument'} !== null) ${'document_srl5_argument'}->setColumnType('number');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_document_extra_vars`', '`extra_vars`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`extra_vars`.`module_srl`','-1',"more", 'and')
,new ConditionWithArgument('`extra_vars`.`document_srl`',$document_srl5_argument,"in", 'and')
,new ConditionWithoutArgument('`extra_vars`.`var_idx`','-2',"more", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>