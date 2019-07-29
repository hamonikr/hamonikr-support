<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertGroup");
$query->setAction("insert");
$query->setPriority("");

${'user_id107_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id107_argument'}->checkNotNull();
if(!${'user_id107_argument'}->isValid()) return ${'user_id107_argument'}->getErrorMessage();
if(${'user_id107_argument'} !== null) ${'user_id107_argument'}->setColumnType('varchar');

${'regdate108_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate108_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate108_argument'}->isValid()) return ${'regdate108_argument'}->getErrorMessage();
if(${'regdate108_argument'} !== null) ${'regdate108_argument'}->setColumnType('date');

${'description109_argument'} = new Argument('description', $args->{'description'});
${'description109_argument'}->ensureDefaultValue('');
if(!${'description109_argument'}->isValid()) return ${'description109_argument'}->getErrorMessage();
if(${'description109_argument'} !== null) ${'description109_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order110_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order110_argument'}->isValid()) return ${'list_order110_argument'}->getErrorMessage();
} else
${'list_order110_argument'} = NULL;if(${'list_order110_argument'} !== null) ${'list_order110_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`user_id`', ${'user_id107_argument'})
,new InsertExpression('`regdate`', ${'regdate108_argument'})
,new InsertExpression('`description`', ${'description109_argument'})
,new InsertExpression('`list_order`', ${'list_order110_argument'})
));
$query->setTables(array(
new Table('`hme_member_denied_user_id`', '`member_denied_user_id`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>