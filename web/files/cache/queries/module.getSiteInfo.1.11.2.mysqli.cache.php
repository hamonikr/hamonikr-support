<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getSiteInfo");
$query->setAction("select");
$query->setPriority("");

${'site_srl1_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl1_argument'}->checkNotNull();
${'site_srl1_argument'}->createConditionValue();
if(!${'site_srl1_argument'}->isValid()) return ${'site_srl1_argument'}->getErrorMessage();
if(${'site_srl1_argument'} !== null) ${'site_srl1_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`modules`.`site_srl`', '`module_site_srl`')
,new SelectExpression('`modules`.`module_srl`', '`module_srl`')
,new SelectExpression('`modules`.`module`', '`module`')
,new SelectExpression('`modules`.`module_category_srl`', '`module_category_srl`')
,new SelectExpression('`modules`.`layout_srl`', '`layout_srl`')
,new SelectExpression('`modules`.`mlayout_srl`', '`mlayout_srl`')
,new SelectExpression('`modules`.`use_mobile`', '`use_mobile`')
,new SelectExpression('`modules`.`menu_srl`', '`menu_srl`')
,new SelectExpression('`modules`.`mid`', '`mid`')
,new SelectExpression('`modules`.`is_skin_fix`', '`is_skin_fix`')
,new SelectExpression('`modules`.`skin`', '`skin`')
,new SelectExpression('`modules`.`is_mskin_fix`', '`is_mskin_fix`')
,new SelectExpression('`modules`.`mskin`', '`mskin`')
,new SelectExpression('`modules`.`browser_title`', '`browser_title`')
,new SelectExpression('`modules`.`description`', '`description`')
,new SelectExpression('`modules`.`is_default`', '`is_default`')
,new SelectExpression('`modules`.`content`', '`content`')
,new SelectExpression('`modules`.`mcontent`', '`mcontent`')
,new SelectExpression('`modules`.`open_rss`', '`open_rss`')
,new SelectExpression('`modules`.`header_text`', '`header_text`')
,new SelectExpression('`modules`.`footer_text`', '`footer_text`')
,new SelectExpression('`modules`.`regdate`', '`regdate`')
,new SelectExpression('`sites`.`site_srl`', '`site_srl`')
,new SelectExpression('`sites`.`domain`', '`domain`')
,new SelectExpression('`sites`.`index_module_srl`', '`index_module_srl`')
,new SelectExpression('`sites`.`default_language`', '`default_language`')
));
$query->setTables(array(
new Table('`hme_sites`', '`sites`')
,new JoinTable('`hme_modules`', '`modules`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`modules`.`module_srl`','`sites`.`index_module_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`sites`.`site_srl`',$site_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>