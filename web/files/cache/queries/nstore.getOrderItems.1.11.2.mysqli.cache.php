<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getOrderItems");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl23_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl23_argument'}->createConditionValue();
if(!${'member_srl23_argument'}->isValid()) return ${'member_srl23_argument'}->getErrorMessage();
} else
${'member_srl23_argument'} = NULL;if(${'member_srl23_argument'} !== null) ${'member_srl23_argument'}->setColumnType('number');

${'order_status24_argument'} = new ConditionArgument('order_status', $args->order_status, 'more');
${'order_status24_argument'}->ensureDefaultValue('1');
${'order_status24_argument'}->createConditionValue();
if(!${'order_status24_argument'}->isValid()) return ${'order_status24_argument'}->getErrorMessage();
if(${'order_status24_argument'} !== null) ${'order_status24_argument'}->setColumnType('char');
if(isset($args->order_srl)) {
${'order_srl25_argument'} = new ConditionArgument('order_srl', $args->order_srl, 'equal');
${'order_srl25_argument'}->createConditionValue();
if(!${'order_srl25_argument'}->isValid()) return ${'order_srl25_argument'}->getErrorMessage();
} else
${'order_srl25_argument'} = NULL;if(${'order_srl25_argument'} !== null) ${'order_srl25_argument'}->setColumnType('number');
if(isset($args->startdate)) {
${'startdate26_argument'} = new ConditionArgument('startdate', $args->startdate, 'more');
${'startdate26_argument'}->createConditionValue();
if(!${'startdate26_argument'}->isValid()) return ${'startdate26_argument'}->getErrorMessage();
} else
${'startdate26_argument'} = NULL;if(${'startdate26_argument'} !== null) ${'startdate26_argument'}->setColumnType('date');
if(isset($args->enddate)) {
${'enddate27_argument'} = new ConditionArgument('enddate', $args->enddate, 'less');
${'enddate27_argument'}->createConditionValue();
if(!${'enddate27_argument'}->isValid()) return ${'enddate27_argument'}->getErrorMessage();
} else
${'enddate27_argument'} = NULL;if(${'enddate27_argument'} !== null) ${'enddate27_argument'}->setColumnType('date');

${'sort_index28_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index28_argument'}->ensureDefaultValue('purdate');
if(!${'sort_index28_argument'}->isValid()) return ${'sort_index28_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`items`.`item_srl`', '`item_srl`')
,new SelectExpression('`items`.`item_code`', '`item_code`')
,new SelectExpression('`items`.`item_name`', '`item_name`')
,new SelectExpression('`items`.`module_srl`', '`module_srl`')
,new SelectExpression('`items`.`category_id`', '`category_id`')
,new SelectExpression('`items`.`node_route`', '`node_route`')
,new SelectExpression('`items`.`document_srl`', '`document_srl`')
,new SelectExpression('`items`.`file_srl`', '`file_srl`')
,new SelectExpression('`items`.`thumb_file_srl`', '`thumb_file_srl`')
,new SelectExpression('`cart`.`order_srl`', '`order_srl`')
,new SelectExpression('`cart`.`cart_srl`', '`cart_srl`')
,new SelectExpression('`cart`.`order_status`', '`order_status`')
,new SelectExpression('`cart`.`quantity`', '`quantity`')
,new SelectExpression('`cart`.`price`', '`price`')
,new SelectExpression('`cart`.`taxfree`', '`taxfree`')
,new SelectExpression('`cart`.`invoice_no`', '`invoice_no`')
,new SelectExpression('`cart`.`express_id`', '`express_id`')
,new SelectExpression('`cart`.`discount_amount`', '`discount_amount`')
,new SelectExpression('`cart`.`discount_info`', '`discount_info`')
,new SelectExpression('`cart`.`discounted_price`', '`discounted_price`')
,new SelectExpression('`cart`.`purdate`', '`purdate`')
,new SelectExpression('`cart`.`option_srl`', '`option_srl`')
,new SelectExpression('`cart`.`option_price`', '`option_price`')
,new SelectExpression('`cart`.`option_title`', '`option_title`')
,new SelectExpression('`member`.`member_srl`', '`member_srl`')
,new SelectExpression('`member`.`user_id`', '`user_id`')
,new SelectExpression('`member`.`nick_name`', '`nick_name`')
,new SelectExpression('`member`.`user_name`', '`user_name`')
));
$query->setTables(array(
new Table('`hme_nstore_cart`', '`cart`')
,new JoinTable('`hme_nproduct_items`', '`items`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`items`.`item_srl`','`cart`.`item_srl`',"equal")))
))
,new JoinTable('`hme_member`', '`member`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`member`.`member_srl`','`cart`.`member_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`cart`.`member_srl`',$member_srl23_argument,"equal")
,new ConditionWithArgument('`cart`.`order_status`',$order_status24_argument,"more", 'and')
,new ConditionWithArgument('`cart`.`order_srl`',$order_srl25_argument,"equal", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`cart`.`purdate`',$startdate26_argument,"more", 'and')
,new ConditionWithArgument('`cart`.`purdate`',$enddate27_argument,"less", 'and')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index28_argument'}, "desc")
));
$query->setLimit();
return $query; ?>