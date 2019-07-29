<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateModule");
$query->setAction("update");
$query->setPriority("");

${'module253_argument'} = new Argument('module', $args->{'module'});
${'module253_argument'}->checkNotNull();
if(!${'module253_argument'}->isValid()) return ${'module253_argument'}->getErrorMessage();
if(${'module253_argument'} !== null) ${'module253_argument'}->setColumnType('varchar');
if(isset($args->module_category_srl)) {
${'module_category_srl254_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
if(!${'module_category_srl254_argument'}->isValid()) return ${'module_category_srl254_argument'}->getErrorMessage();
} else
${'module_category_srl254_argument'} = NULL;if(${'module_category_srl254_argument'} !== null) ${'module_category_srl254_argument'}->setColumnType('number');
if(isset($args->layout_srl)) {
${'layout_srl255_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl255_argument'}->isValid()) return ${'layout_srl255_argument'}->getErrorMessage();
} else
${'layout_srl255_argument'} = NULL;if(${'layout_srl255_argument'} !== null) ${'layout_srl255_argument'}->setColumnType('number');
if(isset($args->skin)) {
${'skin256_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin256_argument'}->isValid()) return ${'skin256_argument'}->getErrorMessage();
} else
${'skin256_argument'} = NULL;if(${'skin256_argument'} !== null) ${'skin256_argument'}->setColumnType('varchar');

${'is_skin_fix257_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix257_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix257_argument'}->isValid()) return ${'is_skin_fix257_argument'}->getErrorMessage();
if(${'is_skin_fix257_argument'} !== null) ${'is_skin_fix257_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin258_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin258_argument'}->isValid()) return ${'mskin258_argument'}->getErrorMessage();
} else
${'mskin258_argument'} = NULL;if(${'mskin258_argument'} !== null) ${'mskin258_argument'}->setColumnType('varchar');

${'is_mskin_fix259_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix259_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix259_argument'}->isValid()) return ${'is_mskin_fix259_argument'}->getErrorMessage();
if(${'is_mskin_fix259_argument'} !== null) ${'is_mskin_fix259_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl260_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl260_argument'}->checkFilter('number');
if(!${'menu_srl260_argument'}->isValid()) return ${'menu_srl260_argument'}->getErrorMessage();
} else
${'menu_srl260_argument'} = NULL;if(${'menu_srl260_argument'} !== null) ${'menu_srl260_argument'}->setColumnType('number');

${'mid261_argument'} = new Argument('mid', $args->{'mid'});
${'mid261_argument'}->checkNotNull();
if(!${'mid261_argument'}->isValid()) return ${'mid261_argument'}->getErrorMessage();
if(${'mid261_argument'} !== null) ${'mid261_argument'}->setColumnType('varchar');

${'browser_title262_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title262_argument'}->checkNotNull();
if(!${'browser_title262_argument'}->isValid()) return ${'browser_title262_argument'}->getErrorMessage();
if(${'browser_title262_argument'} !== null) ${'browser_title262_argument'}->setColumnType('varchar');

${'description263_argument'} = new Argument('description', $args->{'description'});
${'description263_argument'}->ensureDefaultValue('');
if(!${'description263_argument'}->isValid()) return ${'description263_argument'}->getErrorMessage();
if(${'description263_argument'} !== null) ${'description263_argument'}->setColumnType('text');

${'is_default264_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default264_argument'}->ensureDefaultValue('N');
${'is_default264_argument'}->checkNotNull();
if(!${'is_default264_argument'}->isValid()) return ${'is_default264_argument'}->getErrorMessage();
if(${'is_default264_argument'} !== null) ${'is_default264_argument'}->setColumnType('char');
if(isset($args->content)) {
${'content265_argument'} = new Argument('content', $args->{'content'});
if(!${'content265_argument'}->isValid()) return ${'content265_argument'}->getErrorMessage();
} else
${'content265_argument'} = NULL;if(${'content265_argument'} !== null) ${'content265_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent266_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent266_argument'}->isValid()) return ${'mcontent266_argument'}->getErrorMessage();
} else
${'mcontent266_argument'} = NULL;if(${'mcontent266_argument'} !== null) ${'mcontent266_argument'}->setColumnType('bigtext');

${'open_rss267_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss267_argument'}->ensureDefaultValue('Y');
${'open_rss267_argument'}->checkNotNull();
if(!${'open_rss267_argument'}->isValid()) return ${'open_rss267_argument'}->getErrorMessage();
if(${'open_rss267_argument'} !== null) ${'open_rss267_argument'}->setColumnType('char');

${'header_text268_argument'} = new Argument('header_text', $args->{'header_text'});
${'header_text268_argument'}->ensureDefaultValue('');
if(!${'header_text268_argument'}->isValid()) return ${'header_text268_argument'}->getErrorMessage();
if(${'header_text268_argument'} !== null) ${'header_text268_argument'}->setColumnType('text');

${'footer_text269_argument'} = new Argument('footer_text', $args->{'footer_text'});
${'footer_text269_argument'}->ensureDefaultValue('');
if(!${'footer_text269_argument'}->isValid()) return ${'footer_text269_argument'}->getErrorMessage();
if(${'footer_text269_argument'} !== null) ${'footer_text269_argument'}->setColumnType('text');
if(isset($args->mlayout_srl)) {
${'mlayout_srl270_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl270_argument'}->isValid()) return ${'mlayout_srl270_argument'}->getErrorMessage();
} else
${'mlayout_srl270_argument'} = NULL;if(${'mlayout_srl270_argument'} !== null) ${'mlayout_srl270_argument'}->setColumnType('number');

${'use_mobile271_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile271_argument'}->ensureDefaultValue('N');
if(!${'use_mobile271_argument'}->isValid()) return ${'use_mobile271_argument'}->getErrorMessage();
if(${'use_mobile271_argument'} !== null) ${'use_mobile271_argument'}->setColumnType('char');

${'site_srl272_argument'} = new ConditionArgument('site_srl', $args->site_srl, 'equal');
${'site_srl272_argument'}->checkFilter('number');
${'site_srl272_argument'}->ensureDefaultValue('0');
${'site_srl272_argument'}->checkNotNull();
${'site_srl272_argument'}->createConditionValue();
if(!${'site_srl272_argument'}->isValid()) return ${'site_srl272_argument'}->getErrorMessage();
if(${'site_srl272_argument'} !== null) ${'site_srl272_argument'}->setColumnType('number');

${'module_srl273_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl273_argument'}->checkFilter('number');
${'module_srl273_argument'}->checkNotNull();
${'module_srl273_argument'}->createConditionValue();
if(!${'module_srl273_argument'}->isValid()) return ${'module_srl273_argument'}->getErrorMessage();
if(${'module_srl273_argument'} !== null) ${'module_srl273_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module`', ${'module253_argument'})
,new UpdateExpression('`module_category_srl`', ${'module_category_srl254_argument'})
,new UpdateExpression('`layout_srl`', ${'layout_srl255_argument'})
,new UpdateExpression('`skin`', ${'skin256_argument'})
,new UpdateExpression('`is_skin_fix`', ${'is_skin_fix257_argument'})
,new UpdateExpression('`mskin`', ${'mskin258_argument'})
,new UpdateExpression('`is_mskin_fix`', ${'is_mskin_fix259_argument'})
,new UpdateExpression('`menu_srl`', ${'menu_srl260_argument'})
,new UpdateExpression('`mid`', ${'mid261_argument'})
,new UpdateExpression('`browser_title`', ${'browser_title262_argument'})
,new UpdateExpression('`description`', ${'description263_argument'})
,new UpdateExpression('`is_default`', ${'is_default264_argument'})
,new UpdateExpression('`content`', ${'content265_argument'})
,new UpdateExpression('`mcontent`', ${'mcontent266_argument'})
,new UpdateExpression('`open_rss`', ${'open_rss267_argument'})
,new UpdateExpression('`header_text`', ${'header_text268_argument'})
,new UpdateExpression('`footer_text`', ${'footer_text269_argument'})
,new UpdateExpression('`mlayout_srl`', ${'mlayout_srl270_argument'})
,new UpdateExpression('`use_mobile`', ${'use_mobile271_argument'})
));
$query->setTables(array(
new Table('`hme_modules`', '`modules`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`site_srl`',$site_srl272_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl273_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>