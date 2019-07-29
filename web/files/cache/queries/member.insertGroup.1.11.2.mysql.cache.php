<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertGroup");
$query->setAction("insert");
$query->setPriority("");

${'site_srl35_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl35_argument'}->ensureDefaultValue('0');
${'site_srl35_argument'}->checkNotNull();
if(!${'site_srl35_argument'}->isValid()) return ${'site_srl35_argument'}->getErrorMessage();
if(${'site_srl35_argument'} !== null) ${'site_srl35_argument'}->setColumnType('number');

${'group_srl36_argument'} = new Argument('group_srl', $args->{'group_srl'});
${'group_srl36_argument'}->checkNotNull();
if(!${'group_srl36_argument'}->isValid()) return ${'group_srl36_argument'}->getErrorMessage();
if(${'group_srl36_argument'} !== null) ${'group_srl36_argument'}->setColumnType('number');

${'list_order37_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order37_argument'}->checkNotNull();
if(!${'list_order37_argument'}->isValid()) return ${'list_order37_argument'}->getErrorMessage();
if(${'list_order37_argument'} !== null) ${'list_order37_argument'}->setColumnType('number');

${'title38_argument'} = new Argument('title', $args->{'title'});
${'title38_argument'}->checkNotNull();
if(!${'title38_argument'}->isValid()) return ${'title38_argument'}->getErrorMessage();
if(${'title38_argument'} !== null) ${'title38_argument'}->setColumnType('varchar');

${'is_default39_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default39_argument'}->ensureDefaultValue('N');
${'is_default39_argument'}->checkNotNull();
if(!${'is_default39_argument'}->isValid()) return ${'is_default39_argument'}->getErrorMessage();
if(${'is_default39_argument'} !== null) ${'is_default39_argument'}->setColumnType('char');

${'is_admin40_argument'} = new Argument('is_admin', $args->{'is_admin'});
${'is_admin40_argument'}->ensureDefaultValue('N');
${'is_admin40_argument'}->checkNotNull();
if(!${'is_admin40_argument'}->isValid()) return ${'is_admin40_argument'}->getErrorMessage();
if(${'is_admin40_argument'} !== null) ${'is_admin40_argument'}->setColumnType('char');

${'regdate41_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate41_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate41_argument'}->isValid()) return ${'regdate41_argument'}->getErrorMessage();
if(${'regdate41_argument'} !== null) ${'regdate41_argument'}->setColumnType('date');

${'description42_argument'} = new Argument('description', $args->{'description'});
${'description42_argument'}->ensureDefaultValue('');
if(!${'description42_argument'}->isValid()) return ${'description42_argument'}->getErrorMessage();
if(${'description42_argument'} !== null) ${'description42_argument'}->setColumnType('text');

${'image_mark43_argument'} = new Argument('image_mark', $args->{'image_mark'});
${'image_mark43_argument'}->ensureDefaultValue('');
if(!${'image_mark43_argument'}->isValid()) return ${'image_mark43_argument'}->getErrorMessage();
if(${'image_mark43_argument'} !== null) ${'image_mark43_argument'}->setColumnType('text');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl35_argument'})
,new InsertExpression('`group_srl`', ${'group_srl36_argument'})
,new InsertExpression('`list_order`', ${'list_order37_argument'})
,new InsertExpression('`title`', ${'title38_argument'})
,new InsertExpression('`is_default`', ${'is_default39_argument'})
,new InsertExpression('`is_admin`', ${'is_admin40_argument'})
,new InsertExpression('`regdate`', ${'regdate41_argument'})
,new InsertExpression('`description`', ${'description42_argument'})
,new InsertExpression('`image_mark`', ${'image_mark43_argument'})
));
$query->setTables(array(
new Table('`hme_member_group`', '`member_group`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>