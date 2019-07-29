<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertFavorite");
$query->setAction("insert");
$query->setPriority("");

${'adminFavoriteSrl5_argument'} = new Argument('adminFavoriteSrl', $args->{'adminFavoriteSrl'});
${'adminFavoriteSrl5_argument'}->checkFilter('number');
${'adminFavoriteSrl5_argument'}->checkNotNull();
if(!${'adminFavoriteSrl5_argument'}->isValid()) return ${'adminFavoriteSrl5_argument'}->getErrorMessage();
if(${'adminFavoriteSrl5_argument'} !== null) ${'adminFavoriteSrl5_argument'}->setColumnType('number');

${'site_srl6_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl6_argument'}->checkFilter('number');
${'site_srl6_argument'}->checkNotNull();
if(!${'site_srl6_argument'}->isValid()) return ${'site_srl6_argument'}->getErrorMessage();
if(${'site_srl6_argument'} !== null) ${'site_srl6_argument'}->setColumnType('number');

${'module7_argument'} = new Argument('module', $args->{'module'});
${'module7_argument'}->checkNotNull();
if(!${'module7_argument'}->isValid()) return ${'module7_argument'}->getErrorMessage();
if(${'module7_argument'} !== null) ${'module7_argument'}->setColumnType('varchar');

${'favoriteType8_argument'} = new Argument('favoriteType', $args->{'favoriteType'});
${'favoriteType8_argument'}->ensureDefaultValue('module');
if(!${'favoriteType8_argument'}->isValid()) return ${'favoriteType8_argument'}->getErrorMessage();
if(${'favoriteType8_argument'} !== null) ${'favoriteType8_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`admin_favorite_srl`', ${'adminFavoriteSrl5_argument'})
,new InsertExpression('`site_srl`', ${'site_srl6_argument'})
,new InsertExpression('`module`', ${'module7_argument'})
,new InsertExpression('`type`', ${'favoriteType8_argument'})
));
$query->setTables(array(
new Table('`hme_admin_favorite`', '`admin_favorite`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>