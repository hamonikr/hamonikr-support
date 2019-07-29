<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteAllList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->siteSrls)) {
${'siteSrls1_argument'} = new ConditionArgument('siteSrls', $args->siteSrls, 'in');
${'siteSrls1_argument'}->createConditionValue();
if(!${'siteSrls1_argument'}->isValid()) return ${'siteSrls1_argument'}->getErrorMessage();
} else
${'siteSrls1_argument'} = NULL;if(${'siteSrls1_argument'} !== null) ${'siteSrls1_argument'}->setColumnType('number');
if(isset($args->domain)) {
${'domain2_argument'} = new ConditionArgument('domain', $args->domain, 'like');
${'domain2_argument'}->createConditionValue();
if(!${'domain2_argument'}->isValid()) return ${'domain2_argument'}->getErrorMessage();
} else
${'domain2_argument'} = NULL;if(${'domain2_argument'} !== null) ${'domain2_argument'}->setColumnType('varchar');

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_sites`', '`sites`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$siteSrls1_argument,"in")
,new ConditionWithArgument('`domain`',$domain2_argument,"like", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>