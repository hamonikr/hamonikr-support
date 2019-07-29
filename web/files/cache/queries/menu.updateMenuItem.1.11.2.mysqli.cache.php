<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMenuItem");
$query->setAction("update");
$query->setPriority("");
if(isset($args->menu_srl)) {
${'menu_srl28_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
if(!${'menu_srl28_argument'}->isValid()) return ${'menu_srl28_argument'}->getErrorMessage();
} else
${'menu_srl28_argument'} = NULL;if(${'menu_srl28_argument'} !== null) ${'menu_srl28_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl29_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
if(!${'parent_srl29_argument'}->isValid()) return ${'parent_srl29_argument'}->getErrorMessage();
} else
${'parent_srl29_argument'} = NULL;if(${'parent_srl29_argument'} !== null) ${'parent_srl29_argument'}->setColumnType('number');
if(isset($args->name)) {
${'name30_argument'} = new Argument('name', $args->{'name'});
if(!${'name30_argument'}->isValid()) return ${'name30_argument'}->getErrorMessage();
} else
${'name30_argument'} = NULL;if(${'name30_argument'} !== null) ${'name30_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc31_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc31_argument'}->isValid()) return ${'desc31_argument'}->getErrorMessage();
} else
${'desc31_argument'} = NULL;if(${'desc31_argument'} !== null) ${'desc31_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url32_argument'} = new Argument('url', $args->{'url'});
if(!${'url32_argument'}->isValid()) return ${'url32_argument'}->getErrorMessage();
} else
${'url32_argument'} = NULL;if(${'url32_argument'} !== null) ${'url32_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut33_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
if(!${'is_shortcut33_argument'}->isValid()) return ${'is_shortcut33_argument'}->getErrorMessage();
} else
${'is_shortcut33_argument'} = NULL;if(${'is_shortcut33_argument'} !== null) ${'is_shortcut33_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window34_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window34_argument'}->isValid()) return ${'open_window34_argument'}->getErrorMessage();
} else
${'open_window34_argument'} = NULL;if(${'open_window34_argument'} !== null) ${'open_window34_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand35_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand35_argument'}->isValid()) return ${'expand35_argument'}->getErrorMessage();
} else
${'expand35_argument'} = NULL;if(${'expand35_argument'} !== null) ${'expand35_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn36_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn36_argument'}->isValid()) return ${'normal_btn36_argument'}->getErrorMessage();
} else
${'normal_btn36_argument'} = NULL;if(${'normal_btn36_argument'} !== null) ${'normal_btn36_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn37_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn37_argument'}->isValid()) return ${'hover_btn37_argument'}->getErrorMessage();
} else
${'hover_btn37_argument'} = NULL;if(${'hover_btn37_argument'} !== null) ${'hover_btn37_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn38_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn38_argument'}->isValid()) return ${'active_btn38_argument'}->getErrorMessage();
} else
${'active_btn38_argument'} = NULL;if(${'active_btn38_argument'} !== null) ${'active_btn38_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls39_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls39_argument'}->isValid()) return ${'group_srls39_argument'}->getErrorMessage();
} else
${'group_srls39_argument'} = NULL;if(${'group_srls39_argument'} !== null) ${'group_srls39_argument'}->setColumnType('text');

${'menu_item_srl40_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'equal');
${'menu_item_srl40_argument'}->checkFilter('number');
${'menu_item_srl40_argument'}->checkNotNull();
${'menu_item_srl40_argument'}->createConditionValue();
if(!${'menu_item_srl40_argument'}->isValid()) return ${'menu_item_srl40_argument'}->getErrorMessage();
if(${'menu_item_srl40_argument'} !== null) ${'menu_item_srl40_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`menu_srl`', ${'menu_srl28_argument'})
,new UpdateExpression('`parent_srl`', ${'parent_srl29_argument'})
,new UpdateExpression('`name`', ${'name30_argument'})
,new UpdateExpression('`desc`', ${'desc31_argument'})
,new UpdateExpression('`url`', ${'url32_argument'})
,new UpdateExpression('`is_shortcut`', ${'is_shortcut33_argument'})
,new UpdateExpression('`open_window`', ${'open_window34_argument'})
,new UpdateExpression('`expand`', ${'expand35_argument'})
,new UpdateExpression('`normal_btn`', ${'normal_btn36_argument'})
,new UpdateExpression('`hover_btn`', ${'hover_btn37_argument'})
,new UpdateExpression('`active_btn`', ${'active_btn38_argument'})
,new UpdateExpression('`group_srls`', ${'group_srls39_argument'})
));
$query->setTables(array(
new Table('`hme_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item_srl`',$menu_item_srl40_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>