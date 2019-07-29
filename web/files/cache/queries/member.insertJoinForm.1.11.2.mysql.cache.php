<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertJoinForm");
$query->setAction("insert");
$query->setPriority("");

${'member_join_form_srl1_argument'} = new Argument('member_join_form_srl', $args->{'member_join_form_srl'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'member_join_form_srl1_argument'}->ensureDefaultValue($sequence);
${'member_join_form_srl1_argument'}->checkNotNull();
if(!${'member_join_form_srl1_argument'}->isValid()) return ${'member_join_form_srl1_argument'}->getErrorMessage();
if(${'member_join_form_srl1_argument'} !== null) ${'member_join_form_srl1_argument'}->setColumnType('number');
if(isset($args->column_type)) {
${'column_type2_argument'} = new Argument('column_type', $args->{'column_type'});
if(!${'column_type2_argument'}->isValid()) return ${'column_type2_argument'}->getErrorMessage();
} else
${'column_type2_argument'} = NULL;if(${'column_type2_argument'} !== null) ${'column_type2_argument'}->setColumnType('varchar');
if(isset($args->column_name)) {
${'column_name3_argument'} = new Argument('column_name', $args->{'column_name'});
if(!${'column_name3_argument'}->isValid()) return ${'column_name3_argument'}->getErrorMessage();
} else
${'column_name3_argument'} = NULL;if(${'column_name3_argument'} !== null) ${'column_name3_argument'}->setColumnType('varchar');
if(isset($args->column_title)) {
${'column_title4_argument'} = new Argument('column_title', $args->{'column_title'});
if(!${'column_title4_argument'}->isValid()) return ${'column_title4_argument'}->getErrorMessage();
} else
${'column_title4_argument'} = NULL;if(${'column_title4_argument'} !== null) ${'column_title4_argument'}->setColumnType('varchar');

${'required5_argument'} = new Argument('required', $args->{'required'});
${'required5_argument'}->ensureDefaultValue('N');
if(!${'required5_argument'}->isValid()) return ${'required5_argument'}->getErrorMessage();
if(${'required5_argument'} !== null) ${'required5_argument'}->setColumnType('char');
if(isset($args->default_value)) {
${'default_value6_argument'} = new Argument('default_value', $args->{'default_value'});
if(!${'default_value6_argument'}->isValid()) return ${'default_value6_argument'}->getErrorMessage();
} else
${'default_value6_argument'} = NULL;if(${'default_value6_argument'} !== null) ${'default_value6_argument'}->setColumnType('text');

${'is_active7_argument'} = new Argument('is_active', $args->{'is_active'});
${'is_active7_argument'}->ensureDefaultValue('N');
if(!${'is_active7_argument'}->isValid()) return ${'is_active7_argument'}->getErrorMessage();
if(${'is_active7_argument'} !== null) ${'is_active7_argument'}->setColumnType('char');
if(isset($args->description)) {
${'description8_argument'} = new Argument('description', $args->{'description'});
if(!${'description8_argument'}->isValid()) return ${'description8_argument'}->getErrorMessage();
} else
${'description8_argument'} = NULL;if(${'description8_argument'} !== null) ${'description8_argument'}->setColumnType('text');

${'regdate9_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate9_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate9_argument'}->isValid()) return ${'regdate9_argument'}->getErrorMessage();
if(${'regdate9_argument'} !== null) ${'regdate9_argument'}->setColumnType('date');

${'list_order10_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order10_argument'}->ensureDefaultValue('1');
if(!${'list_order10_argument'}->isValid()) return ${'list_order10_argument'}->getErrorMessage();
if(${'list_order10_argument'} !== null) ${'list_order10_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_join_form_srl`', ${'member_join_form_srl1_argument'})
,new InsertExpression('`column_type`', ${'column_type2_argument'})
,new InsertExpression('`column_name`', ${'column_name3_argument'})
,new InsertExpression('`column_title`', ${'column_title4_argument'})
,new InsertExpression('`required`', ${'required5_argument'})
,new InsertExpression('`default_value`', ${'default_value6_argument'})
,new InsertExpression('`is_active`', ${'is_active7_argument'})
,new InsertExpression('`description`', ${'description8_argument'})
,new InsertExpression('`regdate`', ${'regdate9_argument'})
,new InsertExpression('`list_order`', ${'list_order10_argument'})
));
$query->setTables(array(
new Table('`hme_member_join_form`', '`member_join_form`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>