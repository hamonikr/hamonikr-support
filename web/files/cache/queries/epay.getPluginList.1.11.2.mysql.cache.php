<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getPluginList");
$query->setAction("select");
$query->setPriority("");

${'page2_argument'} = new Argument('page', $args->{'page'});
${'page2_argument'}->ensureDefaultValue('1');
if(!${'page2_argument'}->isValid()) return ${'page2_argument'}->getErrorMessage();

${'page_count3_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count3_argument'}->ensureDefaultValue('10');
if(!${'page_count3_argument'}->isValid()) return ${'page_count3_argument'}->getErrorMessage();

${'list_count4_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count4_argument'}->ensureDefaultValue('20');
if(!${'list_count4_argument'}->isValid()) return ${'list_count4_argument'}->getErrorMessage();

${'sort_index1_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index1_argument'}->ensureDefaultValue('plugin_srl');
if(!${'sort_index1_argument'}->isValid()) return ${'sort_index1_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_epay_plugins`', '`epay_plugins`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index1_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count4_argument'}, ${'page2_argument'}, ${'page_count3_argument'}));
return $query; ?>