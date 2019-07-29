<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateSite");
$query->setAction("update");
$query->setPriority("");
if(isset($args->index_module_srl)) {
${'index_module_srl291_argument'} = new Argument('index_module_srl', $args->{'index_module_srl'});
if(!${'index_module_srl291_argument'}->isValid()) return ${'index_module_srl291_argument'}->getErrorMessage();
} else
${'index_module_srl291_argument'} = NULL;if(${'index_module_srl291_argument'} !== null) ${'index_module_srl291_argument'}->setColumnType('number');
if(isset($args->domain)) {
${'domain292_argument'} = new Argument('domain', $args->{'domain'});
if(!${'domain292_argument'}->isValid()) return ${'domain292_argument'}->getErrorMessage();
} else
${'domain292_argument'} = NULL;if(${'domain292_argument'} !== null) ${'domain292_argument'}->setColumnType('varchar');
if(isset($args->default_language)) {
${'default_language293_argument'} = new Argument('default_language', $args->{'default_language'});
if(!${'default_language293_argument'}->isValid()) return ${'default_language293_argument'}->getErrorMessage();
} else
${'default_language293_argument'} = NULL;if(${'default_language293_argument'} !== null) ${'default_language293_argument'}->setColumnType('varchar');

${'site_srl294_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl294_argument'}->checkFilter('number');
${'site_srl294_argument'}->checkNotNull();
${'site_srl294_argument'}->createConditionValue();
if(!${'site_srl294_argument'}->isValid()) return ${'site_srl294_argument'}->getErrorMessage();
if(${'site_srl294_argument'} !== null) ${'site_srl294_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`index_module_srl`', ${'index_module_srl291_argument'})
,new UpdateExpression('`domain`', ${'domain292_argument'})
,new UpdateExpression('`default_language`', ${'default_language293_argument'})
));
$query->setTables(array(
new Table('`hme_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl294_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>