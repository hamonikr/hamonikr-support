<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertNproductExtraVars");
$query->setAction("insert");
$query->setPriority("");

${'item_srl3_argument'} = new Argument('item_srl', $args->{'item_srl'});
${'item_srl3_argument'}->checkNotNull();
if(!${'item_srl3_argument'}->isValid()) return ${'item_srl3_argument'}->getErrorMessage();
if(${'item_srl3_argument'} !== null) ${'item_srl3_argument'}->setColumnType('number');

${'name4_argument'} = new Argument('name', $args->{'name'});
${'name4_argument'}->checkNotNull();
if(!${'name4_argument'}->isValid()) return ${'name4_argument'}->getErrorMessage();
if(${'name4_argument'} !== null) ${'name4_argument'}->setColumnType('varchar');
if(isset($args->value)) {
${'value5_argument'} = new Argument('value', $args->{'value'});
if(!${'value5_argument'}->isValid()) return ${'value5_argument'}->getErrorMessage();
} else
${'value5_argument'} = NULL;if(${'value5_argument'} !== null) ${'value5_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`item_srl`', ${'item_srl3_argument'})
,new InsertExpression('`name`', ${'name4_argument'})
,new InsertExpression('`value`', ${'value5_argument'})
));
$query->setTables(array(
new Table('`hme_nproduct_extra_vars`', '`nproduct_extra_vars`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>