<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getItemInfo");
$query->setAction("select");
$query->setPriority("");
if(isset($args->item_srl)) {
${'item_srl1_argument'} = new ConditionArgument('item_srl', $args->item_srl, 'equal');
${'item_srl1_argument'}->createConditionValue();
if(!${'item_srl1_argument'}->isValid()) return ${'item_srl1_argument'}->getErrorMessage();
} else
${'item_srl1_argument'} = NULL;if(${'item_srl1_argument'} !== null) ${'item_srl1_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl2_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl2_argument'}->createConditionValue();
if(!${'document_srl2_argument'}->isValid()) return ${'document_srl2_argument'}->getErrorMessage();
} else
${'document_srl2_argument'} = NULL;if(${'document_srl2_argument'} !== null) ${'document_srl2_argument'}->setColumnType('number');
if(isset($args->item_code)) {
${'item_code3_argument'} = new ConditionArgument('item_code', $args->item_code, 'equal');
${'item_code3_argument'}->createConditionValue();
if(!${'item_code3_argument'}->isValid()) return ${'item_code3_argument'}->getErrorMessage();
} else
${'item_code3_argument'} = NULL;if(${'item_code3_argument'} !== null) ${'item_code3_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_nproduct_items`', '`nproduct_items`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`item_srl`',$item_srl1_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl2_argument,"equal", 'and')
,new ConditionWithArgument('`item_code`',$item_code3_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>