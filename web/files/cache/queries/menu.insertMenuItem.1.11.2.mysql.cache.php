<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMenuItem");
$query->setAction("insert");
$query->setPriority("");

${'menu_item_srl136_argument'} = new Argument('menu_item_srl', $args->{'menu_item_srl'});
${'menu_item_srl136_argument'}->checkFilter('number');
${'menu_item_srl136_argument'}->checkNotNull();
if(!${'menu_item_srl136_argument'}->isValid()) return ${'menu_item_srl136_argument'}->getErrorMessage();
if(${'menu_item_srl136_argument'} !== null) ${'menu_item_srl136_argument'}->setColumnType('number');

${'parent_srl137_argument'} = new Argument('parent_srl', $args->{'parent_srl'});
${'parent_srl137_argument'}->checkFilter('number');
${'parent_srl137_argument'}->ensureDefaultValue('0');
if(!${'parent_srl137_argument'}->isValid()) return ${'parent_srl137_argument'}->getErrorMessage();
if(${'parent_srl137_argument'} !== null) ${'parent_srl137_argument'}->setColumnType('number');

${'menu_srl138_argument'} = new Argument('menu_srl', $args->{'menu_srl'});
${'menu_srl138_argument'}->checkFilter('number');
${'menu_srl138_argument'}->checkNotNull();
if(!${'menu_srl138_argument'}->isValid()) return ${'menu_srl138_argument'}->getErrorMessage();
if(${'menu_srl138_argument'} !== null) ${'menu_srl138_argument'}->setColumnType('number');

${'name139_argument'} = new Argument('name', $args->{'name'});
${'name139_argument'}->checkNotNull();
if(!${'name139_argument'}->isValid()) return ${'name139_argument'}->getErrorMessage();
if(${'name139_argument'} !== null) ${'name139_argument'}->setColumnType('text');
if(isset($args->desc)) {
${'desc140_argument'} = new Argument('desc', $args->{'desc'});
if(!${'desc140_argument'}->isValid()) return ${'desc140_argument'}->getErrorMessage();
} else
${'desc140_argument'} = NULL;if(${'desc140_argument'} !== null) ${'desc140_argument'}->setColumnType('varchar');
if(isset($args->url)) {
${'url141_argument'} = new Argument('url', $args->{'url'});
if(!${'url141_argument'}->isValid()) return ${'url141_argument'}->getErrorMessage();
} else
${'url141_argument'} = NULL;if(${'url141_argument'} !== null) ${'url141_argument'}->setColumnType('varchar');

${'is_shortcut142_argument'} = new Argument('is_shortcut', $args->{'is_shortcut'});
${'is_shortcut142_argument'}->ensureDefaultValue('N');
${'is_shortcut142_argument'}->checkNotNull();
if(!${'is_shortcut142_argument'}->isValid()) return ${'is_shortcut142_argument'}->getErrorMessage();
if(${'is_shortcut142_argument'} !== null) ${'is_shortcut142_argument'}->setColumnType('char');
if(isset($args->open_window)) {
${'open_window143_argument'} = new Argument('open_window', $args->{'open_window'});
if(!${'open_window143_argument'}->isValid()) return ${'open_window143_argument'}->getErrorMessage();
} else
${'open_window143_argument'} = NULL;if(${'open_window143_argument'} !== null) ${'open_window143_argument'}->setColumnType('char');
if(isset($args->expand)) {
${'expand144_argument'} = new Argument('expand', $args->{'expand'});
if(!${'expand144_argument'}->isValid()) return ${'expand144_argument'}->getErrorMessage();
} else
${'expand144_argument'} = NULL;if(${'expand144_argument'} !== null) ${'expand144_argument'}->setColumnType('char');
if(isset($args->normal_btn)) {
${'normal_btn145_argument'} = new Argument('normal_btn', $args->{'normal_btn'});
if(!${'normal_btn145_argument'}->isValid()) return ${'normal_btn145_argument'}->getErrorMessage();
} else
${'normal_btn145_argument'} = NULL;if(${'normal_btn145_argument'} !== null) ${'normal_btn145_argument'}->setColumnType('varchar');
if(isset($args->hover_btn)) {
${'hover_btn146_argument'} = new Argument('hover_btn', $args->{'hover_btn'});
if(!${'hover_btn146_argument'}->isValid()) return ${'hover_btn146_argument'}->getErrorMessage();
} else
${'hover_btn146_argument'} = NULL;if(${'hover_btn146_argument'} !== null) ${'hover_btn146_argument'}->setColumnType('varchar');
if(isset($args->active_btn)) {
${'active_btn147_argument'} = new Argument('active_btn', $args->{'active_btn'});
if(!${'active_btn147_argument'}->isValid()) return ${'active_btn147_argument'}->getErrorMessage();
} else
${'active_btn147_argument'} = NULL;if(${'active_btn147_argument'} !== null) ${'active_btn147_argument'}->setColumnType('varchar');
if(isset($args->group_srls)) {
${'group_srls148_argument'} = new Argument('group_srls', $args->{'group_srls'});
if(!${'group_srls148_argument'}->isValid()) return ${'group_srls148_argument'}->getErrorMessage();
} else
${'group_srls148_argument'} = NULL;if(${'group_srls148_argument'} !== null) ${'group_srls148_argument'}->setColumnType('text');

${'listorder149_argument'} = new Argument('listorder', $args->{'listorder'});
${'listorder149_argument'}->checkNotNull();
if(!${'listorder149_argument'}->isValid()) return ${'listorder149_argument'}->getErrorMessage();
if(${'listorder149_argument'} !== null) ${'listorder149_argument'}->setColumnType('number');

${'regdate150_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate150_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate150_argument'}->isValid()) return ${'regdate150_argument'}->getErrorMessage();
if(${'regdate150_argument'} !== null) ${'regdate150_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`menu_item_srl`', ${'menu_item_srl136_argument'})
,new InsertExpression('`parent_srl`', ${'parent_srl137_argument'})
,new InsertExpression('`menu_srl`', ${'menu_srl138_argument'})
,new InsertExpression('`name`', ${'name139_argument'})
,new InsertExpression('`desc`', ${'desc140_argument'})
,new InsertExpression('`url`', ${'url141_argument'})
,new InsertExpression('`is_shortcut`', ${'is_shortcut142_argument'})
,new InsertExpression('`open_window`', ${'open_window143_argument'})
,new InsertExpression('`expand`', ${'expand144_argument'})
,new InsertExpression('`normal_btn`', ${'normal_btn145_argument'})
,new InsertExpression('`hover_btn`', ${'hover_btn146_argument'})
,new InsertExpression('`active_btn`', ${'active_btn147_argument'})
,new InsertExpression('`group_srls`', ${'group_srls148_argument'})
,new InsertExpression('`listorder`', ${'listorder149_argument'})
,new InsertExpression('`regdate`', ${'regdate150_argument'})
));
$query->setTables(array(
new Table('`hme_menu_item`', '`menu_item`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>