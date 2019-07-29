<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateModule");
$query->setAction("update");
$query->setPriority("");

${'module4_argument'} = new Argument('module', $args->{'module'});
${'module4_argument'}->checkNotNull();
if(!${'module4_argument'}->isValid()) return ${'module4_argument'}->getErrorMessage();
if(${'module4_argument'} !== null) ${'module4_argument'}->setColumnType('varchar');
if(isset($args->module_category_srl)) {
${'module_category_srl5_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
if(!${'module_category_srl5_argument'}->isValid()) return ${'module_category_srl5_argument'}->getErrorMessage();
} else
${'module_category_srl5_argument'} = NULL;if(${'module_category_srl5_argument'} !== null) ${'module_category_srl5_argument'}->setColumnType('number');
if(isset($args->layout_srl)) {
${'layout_srl6_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl6_argument'}->isValid()) return ${'layout_srl6_argument'}->getErrorMessage();
} else
${'layout_srl6_argument'} = NULL;if(${'layout_srl6_argument'} !== null) ${'layout_srl6_argument'}->setColumnType('number');
if(isset($args->skin)) {
${'skin7_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin7_argument'}->isValid()) return ${'skin7_argument'}->getErrorMessage();
} else
${'skin7_argument'} = NULL;if(${'skin7_argument'} !== null) ${'skin7_argument'}->setColumnType('varchar');

${'is_skin_fix8_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix8_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix8_argument'}->isValid()) return ${'is_skin_fix8_argument'}->getErrorMessage();
if(${'is_skin_fix8_argument'} !== null) ${'is_skin_fix8_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin9_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin9_argument'}->isValid()) return ${'mskin9_argument'}->getErrorMessage();
} else
${'mskin9_argument'} = NULL;if(${'mskin9_argument'} !== null) ${'mskin9_argument'}->setColumnType('varchar');

${'is_mskin_fix10_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix10_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix10_argument'}->isValid()) return ${'is_mskin_fix10_argument'}->getErrorMessage();
if(${'is_mskin_fix10_argument'} !== null) ${'is_mskin_fix10_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl11_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl11_argument'}->checkFilter('number');
if(!${'menu_srl11_argument'}->isValid()) return ${'menu_srl11_argument'}->getErrorMessage();
} else
${'menu_srl11_argument'} = NULL;if(${'menu_srl11_argument'} !== null) ${'menu_srl11_argument'}->setColumnType('number');

${'mid12_argument'} = new Argument('mid', $args->{'mid'});
${'mid12_argument'}->checkNotNull();
if(!${'mid12_argument'}->isValid()) return ${'mid12_argument'}->getErrorMessage();
if(${'mid12_argument'} !== null) ${'mid12_argument'}->setColumnType('varchar');

${'browser_title13_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title13_argument'}->checkNotNull();
if(!${'browser_title13_argument'}->isValid()) return ${'browser_title13_argument'}->getErrorMessage();
if(${'browser_title13_argument'} !== null) ${'browser_title13_argument'}->setColumnType('varchar');

${'description14_argument'} = new Argument('description', $args->{'description'});
${'description14_argument'}->ensureDefaultValue('');
if(!${'description14_argument'}->isValid()) return ${'description14_argument'}->getErrorMessage();
if(${'description14_argument'} !== null) ${'description14_argument'}->setColumnType('text');

${'is_default15_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default15_argument'}->ensureDefaultValue('N');
${'is_default15_argument'}->checkNotNull();
if(!${'is_default15_argument'}->isValid()) return ${'is_default15_argument'}->getErrorMessage();
if(${'is_default15_argument'} !== null) ${'is_default15_argument'}->setColumnType('char');
if(isset($args->content)) {
${'content16_argument'} = new Argument('content', $args->{'content'});
if(!${'content16_argument'}->isValid()) return ${'content16_argument'}->getErrorMessage();
} else
${'content16_argument'} = NULL;if(${'content16_argument'} !== null) ${'content16_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent17_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent17_argument'}->isValid()) return ${'mcontent17_argument'}->getErrorMessage();
} else
${'mcontent17_argument'} = NULL;if(${'mcontent17_argument'} !== null) ${'mcontent17_argument'}->setColumnType('bigtext');

${'open_rss18_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss18_argument'}->ensureDefaultValue('Y');
${'open_rss18_argument'}->checkNotNull();
if(!${'open_rss18_argument'}->isValid()) return ${'open_rss18_argument'}->getErrorMessage();
if(${'open_rss18_argument'} !== null) ${'open_rss18_argument'}->setColumnType('char');

${'header_text19_argument'} = new Argument('header_text', $args->{'header_text'});
${'header_text19_argument'}->ensureDefaultValue('');
if(!${'header_text19_argument'}->isValid()) return ${'header_text19_argument'}->getErrorMessage();
if(${'header_text19_argument'} !== null) ${'header_text19_argument'}->setColumnType('text');

${'footer_text20_argument'} = new Argument('footer_text', $args->{'footer_text'});
${'footer_text20_argument'}->ensureDefaultValue('');
if(!${'footer_text20_argument'}->isValid()) return ${'footer_text20_argument'}->getErrorMessage();
if(${'footer_text20_argument'} !== null) ${'footer_text20_argument'}->setColumnType('text');
if(isset($args->mlayout_srl)) {
${'mlayout_srl21_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl21_argument'}->isValid()) return ${'mlayout_srl21_argument'}->getErrorMessage();
} else
${'mlayout_srl21_argument'} = NULL;if(${'mlayout_srl21_argument'} !== null) ${'mlayout_srl21_argument'}->setColumnType('number');

${'use_mobile22_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile22_argument'}->ensureDefaultValue('N');
if(!${'use_mobile22_argument'}->isValid()) return ${'use_mobile22_argument'}->getErrorMessage();
if(${'use_mobile22_argument'} !== null) ${'use_mobile22_argument'}->setColumnType('char');

${'site_srl23_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl23_argument'}->checkFilter('number');
${'site_srl23_argument'}->ensureDefaultValue('0');
${'site_srl23_argument'}->checkNotNull();
${'site_srl23_argument'}->createConditionValue();
if(!${'site_srl23_argument'}->isValid()) return ${'site_srl23_argument'}->getErrorMessage();
if(${'site_srl23_argument'} !== null) ${'site_srl23_argument'}->setColumnType('number');

${'module_srl24_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl24_argument'}->checkFilter('number');
${'module_srl24_argument'}->checkNotNull();
${'module_srl24_argument'}->createConditionValue();
if(!${'module_srl24_argument'}->isValid()) return ${'module_srl24_argument'}->getErrorMessage();
if(${'module_srl24_argument'} !== null) ${'module_srl24_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module`', ${'module4_argument'})
,new UpdateExpression('`module_category_srl`', ${'module_category_srl5_argument'})
,new UpdateExpression('`layout_srl`', ${'layout_srl6_argument'})
,new UpdateExpression('`skin`', ${'skin7_argument'})
,new UpdateExpression('`is_skin_fix`', ${'is_skin_fix8_argument'})
,new UpdateExpression('`mskin`', ${'mskin9_argument'})
,new UpdateExpression('`is_mskin_fix`', ${'is_mskin_fix10_argument'})
,new UpdateExpression('`menu_srl`', ${'menu_srl11_argument'})
,new UpdateExpression('`mid`', ${'mid12_argument'})
,new UpdateExpression('`browser_title`', ${'browser_title13_argument'})
,new UpdateExpression('`description`', ${'description14_argument'})
,new UpdateExpression('`is_default`', ${'is_default15_argument'})
,new UpdateExpression('`content`', ${'content16_argument'})
,new UpdateExpression('`mcontent`', ${'mcontent17_argument'})
,new UpdateExpression('`open_rss`', ${'open_rss18_argument'})
,new UpdateExpression('`header_text`', ${'header_text19_argument'})
,new UpdateExpression('`footer_text`', ${'footer_text20_argument'})
,new UpdateExpression('`mlayout_srl`', ${'mlayout_srl21_argument'})
,new UpdateExpression('`use_mobile`', ${'use_mobile22_argument'})
));
$query->setTables(array(
new Table('`hme_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl23_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl24_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>