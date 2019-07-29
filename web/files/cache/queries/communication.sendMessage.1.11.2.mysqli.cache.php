<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("sendMessage");
$query->setAction("insert");
$query->setPriority("");

${'message_srl6_argument'} = new Argument('message_srl', $args->{'message_srl'});
${'message_srl6_argument'}->checkNotNull();
if(!${'message_srl6_argument'}->isValid()) return ${'message_srl6_argument'}->getErrorMessage();
if(${'message_srl6_argument'} !== null) ${'message_srl6_argument'}->setColumnType('number');

${'related_srl7_argument'} = new Argument('related_srl', $args->{'related_srl'});
${'related_srl7_argument'}->ensureDefaultValue('0');
if(!${'related_srl7_argument'}->isValid()) return ${'related_srl7_argument'}->getErrorMessage();
if(${'related_srl7_argument'} !== null) ${'related_srl7_argument'}->setColumnType('number');

${'list_order8_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order8_argument'}->checkNotNull();
if(!${'list_order8_argument'}->isValid()) return ${'list_order8_argument'}->getErrorMessage();
if(${'list_order8_argument'} !== null) ${'list_order8_argument'}->setColumnType('number');

${'sender_srl9_argument'} = new Argument('sender_srl', $args->{'sender_srl'});
${'sender_srl9_argument'}->checkNotNull();
if(!${'sender_srl9_argument'}->isValid()) return ${'sender_srl9_argument'}->getErrorMessage();
if(${'sender_srl9_argument'} !== null) ${'sender_srl9_argument'}->setColumnType('number');

${'receiver_srl10_argument'} = new Argument('receiver_srl', $args->{'receiver_srl'});
${'receiver_srl10_argument'}->checkNotNull();
if(!${'receiver_srl10_argument'}->isValid()) return ${'receiver_srl10_argument'}->getErrorMessage();
if(${'receiver_srl10_argument'} !== null) ${'receiver_srl10_argument'}->setColumnType('number');

${'message_type11_argument'} = new Argument('message_type', $args->{'message_type'});
${'message_type11_argument'}->checkNotNull();
if(!${'message_type11_argument'}->isValid()) return ${'message_type11_argument'}->getErrorMessage();
if(${'message_type11_argument'} !== null) ${'message_type11_argument'}->setColumnType('char');

${'title12_argument'} = new Argument('title', $args->{'title'});
${'title12_argument'}->checkNotNull();
if(!${'title12_argument'}->isValid()) return ${'title12_argument'}->getErrorMessage();
if(${'title12_argument'} !== null) ${'title12_argument'}->setColumnType('varchar');

${'content13_argument'} = new Argument('content', $args->{'content'});
${'content13_argument'}->checkNotNull();
if(!${'content13_argument'}->isValid()) return ${'content13_argument'}->getErrorMessage();
if(${'content13_argument'} !== null) ${'content13_argument'}->setColumnType('text');

${'readed14_argument'} = new Argument('readed', $args->{'readed'});
${'readed14_argument'}->checkNotNull();
if(!${'readed14_argument'}->isValid()) return ${'readed14_argument'}->getErrorMessage();
if(${'readed14_argument'} !== null) ${'readed14_argument'}->setColumnType('char');

${'regdate15_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate15_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate15_argument'}->isValid()) return ${'regdate15_argument'}->getErrorMessage();
if(${'regdate15_argument'} !== null) ${'regdate15_argument'}->setColumnType('date');
if(isset($args->readed_date)) {
${'readed_date16_argument'} = new Argument('readed_date', $args->{'readed_date'});
if(!${'readed_date16_argument'}->isValid()) return ${'readed_date16_argument'}->getErrorMessage();
} else
${'readed_date16_argument'} = NULL;if(${'readed_date16_argument'} !== null) ${'readed_date16_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`message_srl`', ${'message_srl6_argument'})
,new InsertExpression('`related_srl`', ${'related_srl7_argument'})
,new InsertExpression('`list_order`', ${'list_order8_argument'})
,new InsertExpression('`sender_srl`', ${'sender_srl9_argument'})
,new InsertExpression('`receiver_srl`', ${'receiver_srl10_argument'})
,new InsertExpression('`message_type`', ${'message_type11_argument'})
,new InsertExpression('`title`', ${'title12_argument'})
,new InsertExpression('`content`', ${'content13_argument'})
,new InsertExpression('`readed`', ${'readed14_argument'})
,new InsertExpression('`regdate`', ${'regdate15_argument'})
,new InsertExpression('`readed_date`', ${'readed_date16_argument'})
));
$query->setTables(array(
new Table('`hme_member_message`', '`member_message`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>