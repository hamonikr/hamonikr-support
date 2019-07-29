<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateMenuItem");
$query->setAction("update");
$query->setPriority("");
if(isset($args->menu_srl)) {
${'menu_srl277_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
if(!${'menu_srl277_argument'}->isValid()) return ${'menu_srl277_argument'}->getErrorMessage();
} else
${'menu_srl277_argument'} = NULL;if(${'menu_srl277_argument'} !== null) ${'menu_srl277_argument'}->setColumnType('number');
if(isset($args->parent_srl)) {
${'parent_srl278_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
if(!${'parent_srl278_argument'}->isValid()) return ${'parent_srl278_argument'}->getErrorMessage();
} else
${'parent_srl278_argument'} = NULL;if(${'parent_srl278_argument'} !== null) ${'parent_srl278_argument'}->setColumnType('number');
if(isset($args->name)) {
${'name279_argument'} = new Argument('name', $args->{'name'});
if(!${'name279_argument'}->isValid()) return ${'name279_argument'}->getErrorMessage();
} else
${'name279_argument'} = NULL;if(${'name279_argument'} !== null) ${'name279_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc280_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc280_argument'}->isValid()) return ${'desc280_argument'}->getErrorMessage();
} else
${'desc280_argument'} = NULL;if(${'desc280_argument'} !== null) ${'desc280_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url281_argument'} = new Argument('url', $args->{'url'});
if(!${'url281_argument'}->isValid()) return ${'url281_argument'}->getErrorMessage();
} else
${'url281_argument'} = NULL;if(${'url281_argument'} !== null) ${'url281_argument'}->setColumnType('varchar');
if(isset($args->is_shortcut)) {
${'is_shortcut282_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
if(!${'is_shortcut282_argument'}->isValid()) return ${'is_shortcut282_argument'}->getErrorMessage();
} else
${'is_shortcut282_argument'} = NULL;if(${'is_shortcut282_argument'} !== null) ${'is_shortcut282_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window283_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window283_argument'}->isValid()) return ${'open_window283_argument'}->getErrorMessage();
} else
${'open_window283_argument'} = NULL;if(${'open_window283_argument'} !== null) ${'open_window283_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand284_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand284_argument'}->isValid()) return ${'expand284_argument'}->getErrorMessage();
} else
${'expand284_argument'} = NULL;if(${'expand284_argument'} !== null) ${'expand284_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn285_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn285_argument'}->isValid()) return ${'normal_btn285_argument'}->getErrorMessage();
} else
${'normal_btn285_argument'} = NULL;if(${'normal_btn285_argument'} !== null) ${'normal_btn285_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn286_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn286_argument'}->isValid()) return ${'hover_btn286_argument'}->getErrorMessage();
} else
${'hover_btn286_argument'} = NULL;if(${'hover_btn286_argument'} !== null) ${'hover_btn286_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn287_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn287_argument'}->isValid()) return ${'active_btn287_argument'}->getErrorMessage();
} else
${'active_btn287_argument'} = NULL;if(${'active_btn287_argument'} !== null) ${'active_btn287_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls288_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls288_argument'}->isValid()) return ${'group_srls288_argument'}->getErrorMessage();
} else
${'group_srls288_argument'} = NULL;if(${'group_srls288_argument'} !== null) ${'group_srls288_argument'}->setColumnType('text');

${'menu_item_srl289_argument'} = new ConditionArgument('menu_item_srl', $args->menu_item_srl, 'equal');
${'menu_item_srl289_argument'}->checkFilter('number');
${'menu_item_srl289_argument'}->checkNotNull();
${'menu_item_srl289_argument'}->createConditionValue();
if(!${'menu_item_srl289_argument'}->isValid()) return ${'menu_item_srl289_argument'}->getErrorMessage();
if(${'menu_item_srl289_argument'} !== null) ${'menu_item_srl289_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`menu_srl`', ${'menu_srl277_argument'})
,new UpdateExpression('`parent_srl`', ${'parent_srl278_argument'})
,new UpdateExpression('`name`', ${'name279_argument'})
,new UpdateExpression('`desc`', ${'desc280_argument'})
,new UpdateExpression('`url`', ${'url281_argument'})
,new UpdateExpression('`is_shortcut`', ${'is_shortcut282_argument'})
,new UpdateExpression('`open_window`', ${'open_window283_argument'})
,new UpdateExpression('`expand`', ${'expand284_argument'})
,new UpdateExpression('`normal_btn`', ${'normal_btn285_argument'})
,new UpdateExpression('`hover_btn`', ${'hover_btn286_argument'})
,new UpdateExpression('`active_btn`', ${'active_btn287_argument'})
,new UpdateExpression('`group_srls`', ${'group_srls288_argument'})
));
$query->setTables(array(
new Table('`hme_menu_item`', '`menu_item`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`menu_item_srl`',$menu_item_srl289_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>