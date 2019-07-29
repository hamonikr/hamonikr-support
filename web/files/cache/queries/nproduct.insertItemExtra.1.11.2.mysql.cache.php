<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertItemExtra");
$query->setAction("insert");
$query->setPriority("");

${'extra_srl1_argument'} = new Argument('extra_srl', $args->{'extra_srl'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'extra_srl1_argument'}->ensureDefaultValue($sequence);
${'extra_srl1_argument'}->checkNotNull();
if(!${'extra_srl1_argument'}->isValid()) return ${'extra_srl1_argument'}->getErrorMessage();
if(${'extra_srl1_argument'} !== null) ${'extra_srl1_argument'}->setColumnType('number');

${'module_srl2_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl2_argument'}->checkNotNull();
if(!${'module_srl2_argument'}->isValid()) return ${'module_srl2_argument'}->getErrorMessage();
if(${'module_srl2_argument'} !== null) ${'module_srl2_argument'}->setColumnType('number');

${'column_type3_argument'} = new Argument('column_type', $args->{'column_type'});
${'column_type3_argument'}->checkNotNull();
if(!${'column_type3_argument'}->isValid()) return ${'column_type3_argument'}->getErrorMessage();
if(${'column_type3_argument'} !== null) ${'column_type3_argument'}->setColumnType('varchar');

${'column_name4_argument'} = new Argument('column_name', $args->{'column_name'});
${'column_name4_argument'}->checkNotNull();
if(!${'column_name4_argument'}->isValid()) return ${'column_name4_argument'}->getErrorMessage();
if(${'column_name4_argument'} !== null) ${'column_name4_argument'}->setColumnType('varchar');

${'column_title5_argument'} = new Argument('column_title', $args->{'column_title'});
${'column_title5_argument'}->checkNotNull();
if(!${'column_title5_argument'}->isValid()) return ${'column_title5_argument'}->getErrorMessage();
if(${'column_title5_argument'} !== null) ${'column_title5_argument'}->setColumnType('varchar');

${'required6_argument'} = new Argument('required', $args->{'required'});
${'required6_argument'}->ensureDefaultValue('N');
if(!${'required6_argument'}->isValid()) return ${'required6_argument'}->getErrorMessage();
if(${'required6_argument'} !== null) ${'required6_argument'}->setColumnType('char');
if(isset($args->default_value)) {
${'default_value7_argument'} = new Argument('default_value', $args->{'default_value'});
if(!${'default_value7_argument'}->isValid()) return ${'default_value7_argument'}->getErrorMessage();
} else
${'default_value7_argument'} = NULL;if(${'default_value7_argument'} !== null) ${'default_value7_argument'}->setColumnType('text');

${'is_active8_argument'} = new Argument('is_active', $args->{'is_active'});
${'is_active8_argument'}->ensureDefaultValue('N');
if(!${'is_active8_argument'}->isValid()) return ${'is_active8_argument'}->getErrorMessage();
if(${'is_active8_argument'} !== null) ${'is_active8_argument'}->setColumnType('char');
if(isset($args->description)) {
${'description9_argument'} = new Argument('description', $args->{'description'});
if(!${'description9_argument'}->isValid()) return ${'description9_argument'}->getErrorMessage();
} else
${'description9_argument'} = NULL;if(${'description9_argument'} !== null) ${'description9_argument'}->setColumnType('text');

${'regdate10_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate10_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate10_argument'}->isValid()) return ${'regdate10_argument'}->getErrorMessage();
if(${'regdate10_argument'} !== null) ${'regdate10_argument'}->setColumnType('date');

${'list_order11_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order11_argument'}->ensureDefaultValue('1');
if(!${'list_order11_argument'}->isValid()) return ${'list_order11_argument'}->getErrorMessage();
if(${'list_order11_argument'} !== null) ${'list_order11_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`extra_srl`', ${'extra_srl1_argument'})
,new InsertExpression('`module_srl`', ${'module_srl2_argument'})
,new InsertExpression('`column_type`', ${'column_type3_argument'})
,new InsertExpression('`column_name`', ${'column_name4_argument'})
,new InsertExpression('`column_title`', ${'column_title5_argument'})
,new InsertExpression('`required`', ${'required6_argument'})
,new InsertExpression('`default_value`', ${'default_value7_argument'})
,new InsertExpression('`is_active`', ${'is_active8_argument'})
,new InsertExpression('`description`', ${'description9_argument'})
,new InsertExpression('`regdate`', ${'regdate10_argument'})
,new InsertExpression('`list_order`', ${'list_order11_argument'})
));
$query->setTables(array(
new Table('`hme_nproduct_item_extras`', '`nproduct_item_extras`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>