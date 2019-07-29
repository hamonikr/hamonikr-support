<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertCategory");
$query->setAction("insert");
$query->setPriority("");

${'category_srl7_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl7_argument'}->checkFilter('number');
${'category_srl7_argument'}->checkNotNull();
if(!${'category_srl7_argument'}->isValid()) return ${'category_srl7_argument'}->getErrorMessage();
if(${'category_srl7_argument'} !== null) ${'category_srl7_argument'}->setColumnType('number');

${'parent_srl8_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl8_argument'}->checkFilter('number');
${'parent_srl8_argument'}->checkNotNull();
if(!${'parent_srl8_argument'}->isValid()) return ${'parent_srl8_argument'}->getErrorMessage();
if(${'parent_srl8_argument'} !== null) ${'parent_srl8_argument'}->setColumnType('number');
if(isset($args->title)) {
${'title9_argument'} = new Argument('title', $args->{'title'});
if(!${'title9_argument'}->isValid()) return ${'title9_argument'}->getErrorMessage();
} else
${'title9_argument'} = NULL;if(${'title9_argument'} !== null) ${'title9_argument'}->setColumnType('varchar');

${'list_order10_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order10_argument'}->checkFilter('number');
${'list_order10_argument'}->checkNotNull();
if(!${'list_order10_argument'}->isValid()) return ${'list_order10_argument'}->getErrorMessage();
if(${'list_order10_argument'} !== null) ${'list_order10_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`category_srl`', ${'category_srl7_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl8_argument'})
,new InsertExpression('`title`', ${'title9_argument'})
,new InsertExpression('`list_order`', ${'list_order10_argument'})
));
$query->setTables(array(
new Table('`hme_ai_remote_categories`', '`ai_remote_categories`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>