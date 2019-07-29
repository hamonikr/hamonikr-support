<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertModule");
$query->setAction("insert");
$query->setPriority("");

${'site_srl161_argument'} = new Argument('site_srl', $args->{'site_srl'});
${'site_srl161_argument'}->ensureDefaultValue('0');
${'site_srl161_argument'}->checkNotNull();
if(!${'site_srl161_argument'}->isValid()) return ${'site_srl161_argument'}->getErrorMessage();
if(${'site_srl161_argument'} !== null) ${'site_srl161_argument'}->setColumnType('number');

${'module_srl162_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl162_argument'}->checkNotNull();
if(!${'module_srl162_argument'}->isValid()) return ${'module_srl162_argument'}->getErrorMessage();
if(${'module_srl162_argument'} !== null) ${'module_srl162_argument'}->setColumnType('number');

${'module_category_srl163_argument'} = new Argument('module_category_srl', $args->{'module_category_srl'});
${'module_category_srl163_argument'}->ensureDefaultValue('0');
if(!${'module_category_srl163_argument'}->isValid()) return ${'module_category_srl163_argument'}->getErrorMessage();
if(${'module_category_srl163_argument'} !== null) ${'module_category_srl163_argument'}->setColumnType('number');

${'mid164_argument'} = new Argument('mid', $args->{'mid'});
${'mid164_argument'}->checkNotNull();
if(!${'mid164_argument'}->isValid()) return ${'mid164_argument'}->getErrorMessage();
if(${'mid164_argument'} !== null) ${'mid164_argument'}->setColumnType('varchar');
if(isset($args->skin)) {
${'skin165_argument'} = new Argument('skin', $args->{'skin'});
if(!${'skin165_argument'}->isValid()) return ${'skin165_argument'}->getErrorMessage();
} else
${'skin165_argument'} = NULL;if(${'skin165_argument'} !== null) ${'skin165_argument'}->setColumnType('varchar');

${'is_skin_fix166_argument'} = new Argument('is_skin_fix', $args->{'is_skin_fix'});
${'is_skin_fix166_argument'}->ensureDefaultValue('N');
if(!${'is_skin_fix166_argument'}->isValid()) return ${'is_skin_fix166_argument'}->getErrorMessage();
if(${'is_skin_fix166_argument'} !== null) ${'is_skin_fix166_argument'}->setColumnType('char');

${'is_mskin_fix167_argument'} = new Argument('is_mskin_fix', $args->{'is_mskin_fix'});
${'is_mskin_fix167_argument'}->ensureDefaultValue('N');
if(!${'is_mskin_fix167_argument'}->isValid()) return ${'is_mskin_fix167_argument'}->getErrorMessage();
if(${'is_mskin_fix167_argument'} !== null) ${'is_mskin_fix167_argument'}->setColumnType('char');
if(isset($args->mskin)) {
${'mskin168_argument'} = new Argument('mskin', $args->{'mskin'});
if(!${'mskin168_argument'}->isValid()) return ${'mskin168_argument'}->getErrorMessage();
} else
${'mskin168_argument'} = NULL;if(${'mskin168_argument'} !== null) ${'mskin168_argument'}->setColumnType('varchar');

${'browser_title169_argument'} = new Argument('browser_title', $args->{'browser_title'});
${'browser_title169_argument'}->checkNotNull();
if(!${'browser_title169_argument'}->isValid()) return ${'browser_title169_argument'}->getErrorMessage();
if(${'browser_title169_argument'} !== null) ${'browser_title169_argument'}->setColumnType('varchar');
if(isset($args->layout_srl)) {
${'layout_srl170_argument'} = new Argument('layout_srl', $args->{'layout_srl'});
if(!${'layout_srl170_argument'}->isValid()) return ${'layout_srl170_argument'}->getErrorMessage();
} else
${'layout_srl170_argument'} = NULL;if(${'layout_srl170_argument'} !== null) ${'layout_srl170_argument'}->setColumnType('number');
if(isset($args->description)) {
${'description171_argument'} = new Argument('description', $args->{'description'});
if(!${'description171_argument'}->isValid()) return ${'description171_argument'}->getErrorMessage();
} else
${'description171_argument'} = NULL;if(${'description171_argument'} !== null) ${'description171_argument'}->setColumnType('text');
if(isset($args->content)) {
${'content172_argument'} = new Argument('content', $args->{'content'});
if(!${'content172_argument'}->isValid()) return ${'content172_argument'}->getErrorMessage();
} else
${'content172_argument'} = NULL;if(${'content172_argument'} !== null) ${'content172_argument'}->setColumnType('bigtext');
if(isset($args->mcontent)) {
${'mcontent173_argument'} = new Argument('mcontent', $args->{'mcontent'});
if(!${'mcontent173_argument'}->isValid()) return ${'mcontent173_argument'}->getErrorMessage();
} else
${'mcontent173_argument'} = NULL;if(${'mcontent173_argument'} !== null) ${'mcontent173_argument'}->setColumnType('bigtext');

${'module174_argument'} = new Argument('module', $args->{'module'});
${'module174_argument'}->checkNotNull();
if(!${'module174_argument'}->isValid()) return ${'module174_argument'}->getErrorMessage();
if(${'module174_argument'} !== null) ${'module174_argument'}->setColumnType('varchar');

${'is_default175_argument'} = new Argument('is_default', $args->{'is_default'});
${'is_default175_argument'}->ensureDefaultValue('N');
${'is_default175_argument'}->checkNotNull();
if(!${'is_default175_argument'}->isValid()) return ${'is_default175_argument'}->getErrorMessage();
if(${'is_default175_argument'} !== null) ${'is_default175_argument'}->setColumnType('char');
if(isset($args->menu_srl)) {
${'menu_srl176_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl176_argument'}->checkFilter('number');
if(!${'menu_srl176_argument'}->isValid()) return ${'menu_srl176_argument'}->getErrorMessage();
} else
${'menu_srl176_argument'} = NULL;if(${'menu_srl176_argument'} !== null) ${'menu_srl176_argument'}->setColumnType('number');

${'open_rss177_argument'} = new Argument('open_rss', $args->{'open_rss'});
${'open_rss177_argument'}->ensureDefaultValue('Y');
${'open_rss177_argument'}->checkNotNull();
if(!${'open_rss177_argument'}->isValid()) return ${'open_rss177_argument'}->getErrorMessage();
if(${'open_rss177_argument'} !== null) ${'open_rss177_argument'}->setColumnType('char');
if(isset($args->header_text)) {
${'header_text178_argument'} = new Argument('header_text', $args->{'header_text'});
if(!${'header_text178_argument'}->isValid()) return ${'header_text178_argument'}->getErrorMessage();
} else
${'header_text178_argument'} = NULL;if(${'header_text178_argument'} !== null) ${'header_text178_argument'}->setColumnType('text');
if(isset($args->footer_text)) {
${'footer_text179_argument'} = new Argument('footer_text', $args->{'footer_text'});
if(!${'footer_text179_argument'}->isValid()) return ${'footer_text179_argument'}->getErrorMessage();
} else
${'footer_text179_argument'} = NULL;if(${'footer_text179_argument'} !== null) ${'footer_text179_argument'}->setColumnType('text');

${'regdate180_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate180_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate180_argument'}->isValid()) return ${'regdate180_argument'}->getErrorMessage();
if(${'regdate180_argument'} !== null) ${'regdate180_argument'}->setColumnType('date');
if(isset($args->mlayout_srl)) {
${'mlayout_srl181_argument'} = new Argument('mlayout_srl', $args->{'mlayout_srl'});
if(!${'mlayout_srl181_argument'}->isValid()) return ${'mlayout_srl181_argument'}->getErrorMessage();
} else
${'mlayout_srl181_argument'} = NULL;if(${'mlayout_srl181_argument'} !== null) ${'mlayout_srl181_argument'}->setColumnType('number');

${'use_mobile182_argument'} = new Argument('use_mobile', $args->{'use_mobile'});
${'use_mobile182_argument'}->ensureDefaultValue('N');
if(!${'use_mobile182_argument'}->isValid()) return ${'use_mobile182_argument'}->getErrorMessage();
if(${'use_mobile182_argument'} !== null) ${'use_mobile182_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`site_srl`', ${'site_srl161_argument'})
,new InsertExpression('`module_srl`', ${'module_srl162_argument'})
,new InsertExpression('`module_category_srl`', ${'module_category_srl163_argument'})
,new InsertExpression('`mid`', ${'mid164_argument'})
,new InsertExpression('`skin`', ${'skin165_argument'})
,new InsertExpression('`is_skin_fix`', ${'is_skin_fix166_argument'})
,new InsertExpression('`is_mskin_fix`', ${'is_mskin_fix167_argument'})
,new InsertExpression('`mskin`', ${'mskin168_argument'})
,new InsertExpression('`browser_title`', ${'browser_title169_argument'})
,new InsertExpression('`layout_srl`', ${'layout_srl170_argument'})
,new InsertExpression('`description`', ${'description171_argument'})
,new InsertExpression('`content`', ${'content172_argument'})
,new InsertExpression('`mcontent`', ${'mcontent173_argument'})
,new InsertExpression('`module`', ${'module174_argument'})
,new InsertExpression('`is_default`', ${'is_default175_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl176_argument'})
,new InsertExpression('`open_rss`', ${'open_rss177_argument'})
,new InsertExpression('`header_text`', ${'header_text178_argument'})
,new InsertExpression('`footer_text`', ${'footer_text179_argument'})
,new InsertExpression('`regdate`', ${'regdate180_argument'})
,new InsertExpression('`mlayout_srl`', ${'mlayout_srl181_argument'})
,new InsertExpression('`use_mobile`', ${'use_mobile182_argument'})
));
$query->setTables(array(
new Table('`hme_modules`', '`modules`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>