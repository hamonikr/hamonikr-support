<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertSiteAddon");
$query->setAction("insert");
$query->setPriority("");

${'site_srl111_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl111_argument'}->checkNotNull();
if(!${'site_srl111_argument'}->isValid()) return ${'site_srl111_argument'}->getErrorMessage();
if(${'site_srl111_argument'} !== null) ${'site_srl111_argument'}->setColumnType('number');

${'addon112_argument'} = new Argument('addon', $args->{'addon'});
${'addon112_argument'}->checkNotNull();
if(!${'addon112_argument'}->isValid()) return ${'addon112_argument'}->getErrorMessage();
if(${'addon112_argument'} !== null) ${'addon112_argument'}->setColumnType('varchar');

${'is_used113_argument'} = new Argument('is_used', $args->{'is_used'});
${'is_used113_argument'}->ensureDefaultValue('N');
${'is_used113_argument'}->checkNotNull();
if(!${'is_used113_argument'}->isValid()) return ${'is_used113_argument'}->getErrorMessage();
if(${'is_used113_argument'} !== null) ${'is_used113_argument'}->setColumnType('char');

${'is_used_m114_argument'} = new Argument('is_used_m', $args->{'is_used_m'});
${'is_used_m114_argument'}->ensureDefaultValue('N');
if(!${'is_used_m114_argument'}->isValid()) return ${'is_used_m114_argument'}->getErrorMessage();
if(${'is_used_m114_argument'} !== null) ${'is_used_m114_argument'}->setColumnType('char');
if(isset($args->extra_vars)) {
${'extra_vars115_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars115_argument'}->isValid()) return ${'extra_vars115_argument'}->getErrorMessage();
} else
${'extra_vars115_argument'} = NULL;if(${'extra_vars115_argument'} !== null) ${'extra_vars115_argument'}->setColumnType('text');

${'regdate116_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate116_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate116_argument'}->isValid()) return ${'regdate116_argument'}->getErrorMessage();
if(${'regdate116_argument'} !== null) ${'regdate116_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl111_argument'})
,new InsertExpression('`addon`', ${'addon112_argument'})
,new InsertExpression('`is_used`', ${'is_used113_argument'})
,new InsertExpression('`is_used_m`', ${'is_used_m114_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars115_argument'})
,new InsertExpression('`regdate`', ${'regdate116_argument'})
));
$query->setTables(array(
new Table('`hme_addons_site`', '`addons_site`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>