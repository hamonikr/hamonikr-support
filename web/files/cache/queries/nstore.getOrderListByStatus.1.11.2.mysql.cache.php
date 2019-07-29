<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getOrderListByStatus");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl1_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl1_argument'}->createConditionValue();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
} else
${'member_srl1_argument'} = NULL;if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');
if(isset($args->order_status)) {
${'order_status2_argument'} = new ConditionArgument('order_status', $args->order_status, 'equal');
${'order_status2_argument'}->createConditionValue();
if(!${'order_status2_argument'}->isValid()) return ${'order_status2_argument'}->getErrorMessage();
} else
${'order_status2_argument'} = NULL;if(${'order_status2_argument'} !== null) ${'order_status2_argument'}->setColumnType('char');
if(isset($args->regdate)) {
${'regdate3_argument'} = new ConditionArgument('regdate', $args->regdate, 'like_prefix');
${'regdate3_argument'}->createConditionValue();
if(!${'regdate3_argument'}->isValid()) return ${'regdate3_argument'}->getErrorMessage();
} else
${'regdate3_argument'} = NULL;if(${'regdate3_argument'} !== null) ${'regdate3_argument'}->setColumnType('date');
if(isset($args->email_address)) {
${'email_address4_argument'} = new ConditionArgument('email_address', $args->email_address, 'equal');
${'email_address4_argument'}->createConditionValue();
if(!${'email_address4_argument'}->isValid()) return ${'email_address4_argument'}->getErrorMessage();
} else
${'email_address4_argument'} = NULL;if(${'email_address4_argument'} !== null) ${'email_address4_argument'}->setColumnType('varchar');
if(isset($args->nick_name)) {
${'nick_name5_argument'} = new ConditionArgument('nick_name', $args->nick_name, 'equal');
${'nick_name5_argument'}->createConditionValue();
if(!${'nick_name5_argument'}->isValid()) return ${'nick_name5_argument'}->getErrorMessage();
} else
${'nick_name5_argument'} = NULL;if(${'nick_name5_argument'} !== null) ${'nick_name5_argument'}->setColumnType('varchar');
if(isset($args->user_name)) {
${'user_name6_argument'} = new ConditionArgument('user_name', $args->user_name, 'equal');
${'user_name6_argument'}->createConditionValue();
if(!${'user_name6_argument'}->isValid()) return ${'user_name6_argument'}->getErrorMessage();
} else
${'user_name6_argument'} = NULL;if(${'user_name6_argument'} !== null) ${'user_name6_argument'}->setColumnType('varchar');
if(isset($args->email_id)) {
${'email_id7_argument'} = new ConditionArgument('email_id', $args->email_id, 'equal');
${'email_id7_argument'}->createConditionValue();
if(!${'email_id7_argument'}->isValid()) return ${'email_id7_argument'}->getErrorMessage();
} else
${'email_id7_argument'} = NULL;if(${'email_id7_argument'} !== null) ${'email_id7_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl8_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl8_argument'}->createConditionValue();
if(!${'member_srl8_argument'}->isValid()) return ${'member_srl8_argument'}->getErrorMessage();
} else
${'member_srl8_argument'} = NULL;if(${'member_srl8_argument'} !== null) ${'member_srl8_argument'}->setColumnType('number');
if(isset($args->extra_vars)) {
${'extra_vars9_argument'} = new ConditionArgument('extra_vars', $args->extra_vars, 'like');
${'extra_vars9_argument'}->createConditionValue();
if(!${'extra_vars9_argument'}->isValid()) return ${'extra_vars9_argument'}->getErrorMessage();
} else
${'extra_vars9_argument'} = NULL;if(${'extra_vars9_argument'} !== null) ${'extra_vars9_argument'}->setColumnType('text');

${'page11_argument'} = new Argument('page', $args->{'page'});
${'page11_argument'}->ensureDefaultValue('1');
if(!${'page11_argument'}->isValid()) return ${'page11_argument'}->getErrorMessage();

${'page_count12_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count12_argument'}->ensureDefaultValue('10');
if(!${'page_count12_argument'}->isValid()) return ${'page_count12_argument'}->getErrorMessage();

${'list_count13_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count13_argument'}->ensureDefaultValue('20');
if(!${'list_count13_argument'}->isValid()) return ${'list_count13_argument'}->getErrorMessage();

${'sort_index10_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index10_argument'}->ensureDefaultValue('order.regdate');
if(!${'sort_index10_argument'}->isValid()) return ${'sort_index10_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`order`.*')
,new SelectExpression('`member`.`member_srl`', '`member_srl`')
,new SelectExpression('`member`.`nick_name`', '`nick_name`')
,new SelectExpression('`member`.`user_name`', '`user_name`')
,new SelectExpression('`member`.`user_id`', '`user_id`')
));
$query->setTables(array(
new Table('`hme_nstore_order`', '`order`')
,new JoinTable('`hme_member`', '`member`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`member`.`member_srl`','`order`.`member_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`order`.`member_srl`',$member_srl1_argument,"equal")
,new ConditionWithArgument('`order`.`order_status`',$order_status2_argument,"equal", 'and')
,new ConditionWithArgument('`order`.`regdate`',$regdate3_argument,"like_prefix", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`member`.`email_address`',$email_address4_argument,"equal", 'or')
,new ConditionWithArgument('`member`.`nick_name`',$nick_name5_argument,"equal", 'or')
,new ConditionWithArgument('`member`.`user_name`',$user_name6_argument,"equal", 'or')
,new ConditionWithArgument('`member`.`email_id`',$email_id7_argument,"equal", 'or')
,new ConditionWithArgument('`order`.`member_srl`',$member_srl8_argument,"equal", 'or')
,new ConditionWithArgument('`order`.`extra_vars`',$extra_vars9_argument,"like", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index10_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count13_argument'}, ${'page11_argument'}, ${'page_count12_argument'}));
return $query; ?>