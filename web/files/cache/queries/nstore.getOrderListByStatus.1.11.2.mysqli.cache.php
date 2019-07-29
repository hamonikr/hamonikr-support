<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getOrderListByStatus");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl7_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl7_argument'}->createConditionValue();
if(!${'member_srl7_argument'}->isValid()) return ${'member_srl7_argument'}->getErrorMessage();
} else
${'member_srl7_argument'} = NULL;if(${'member_srl7_argument'} !== null) ${'member_srl7_argument'}->setColumnType('number');
if(isset($args->order_status)) {
${'order_status8_argument'} = new ConditionArgument('order_status', $args->order_status, 'equal');
${'order_status8_argument'}->createConditionValue();
if(!${'order_status8_argument'}->isValid()) return ${'order_status8_argument'}->getErrorMessage();
} else
${'order_status8_argument'} = NULL;if(${'order_status8_argument'} !== null) ${'order_status8_argument'}->setColumnType('char');
if(isset($args->regdate)) {
${'regdate9_argument'} = new ConditionArgument('regdate', $args->regdate, 'like_prefix');
${'regdate9_argument'}->createConditionValue();
if(!${'regdate9_argument'}->isValid()) return ${'regdate9_argument'}->getErrorMessage();
} else
${'regdate9_argument'} = NULL;if(${'regdate9_argument'} !== null) ${'regdate9_argument'}->setColumnType('date');
if(isset($args->email_address)) {
${'email_address10_argument'} = new ConditionArgument('email_address', $args->email_address, 'equal');
${'email_address10_argument'}->createConditionValue();
if(!${'email_address10_argument'}->isValid()) return ${'email_address10_argument'}->getErrorMessage();
} else
${'email_address10_argument'} = NULL;if(${'email_address10_argument'} !== null) ${'email_address10_argument'}->setColumnType('varchar');
if(isset($args->nick_name)) {
${'nick_name11_argument'} = new ConditionArgument('nick_name', $args->nick_name, 'equal');
${'nick_name11_argument'}->createConditionValue();
if(!${'nick_name11_argument'}->isValid()) return ${'nick_name11_argument'}->getErrorMessage();
} else
${'nick_name11_argument'} = NULL;if(${'nick_name11_argument'} !== null) ${'nick_name11_argument'}->setColumnType('varchar');
if(isset($args->user_name)) {
${'user_name12_argument'} = new ConditionArgument('user_name', $args->user_name, 'equal');
${'user_name12_argument'}->createConditionValue();
if(!${'user_name12_argument'}->isValid()) return ${'user_name12_argument'}->getErrorMessage();
} else
${'user_name12_argument'} = NULL;if(${'user_name12_argument'} !== null) ${'user_name12_argument'}->setColumnType('varchar');
if(isset($args->email_id)) {
${'email_id13_argument'} = new ConditionArgument('email_id', $args->email_id, 'equal');
${'email_id13_argument'}->createConditionValue();
if(!${'email_id13_argument'}->isValid()) return ${'email_id13_argument'}->getErrorMessage();
} else
${'email_id13_argument'} = NULL;if(${'email_id13_argument'} !== null) ${'email_id13_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl14_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl14_argument'}->createConditionValue();
if(!${'member_srl14_argument'}->isValid()) return ${'member_srl14_argument'}->getErrorMessage();
} else
${'member_srl14_argument'} = NULL;if(${'member_srl14_argument'} !== null) ${'member_srl14_argument'}->setColumnType('number');
if(isset($args->extra_vars)) {
${'extra_vars15_argument'} = new ConditionArgument('extra_vars', $args->extra_vars, 'like');
${'extra_vars15_argument'}->createConditionValue();
if(!${'extra_vars15_argument'}->isValid()) return ${'extra_vars15_argument'}->getErrorMessage();
} else
${'extra_vars15_argument'} = NULL;if(${'extra_vars15_argument'} !== null) ${'extra_vars15_argument'}->setColumnType('text');

${'page17_argument'} = new Argument('page', $args->{'page'});
${'page17_argument'}->ensureDefaultValue('1');
if(!${'page17_argument'}->isValid()) return ${'page17_argument'}->getErrorMessage();

${'page_count18_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count18_argument'}->ensureDefaultValue('10');
if(!${'page_count18_argument'}->isValid()) return ${'page_count18_argument'}->getErrorMessage();

${'list_count19_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count19_argument'}->ensureDefaultValue('20');
if(!${'list_count19_argument'}->isValid()) return ${'list_count19_argument'}->getErrorMessage();

${'sort_index16_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index16_argument'}->ensureDefaultValue('order.regdate');
if(!${'sort_index16_argument'}->isValid()) return ${'sort_index16_argument'}->getErrorMessage();

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
new ConditionWithoutArgument('`member`.`member_srl`','`order`.`member_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`order`.`member_srl`',$member_srl7_argument,"equal")
,new ConditionWithArgument('`order`.`order_status`',$order_status8_argument,"equal", 'and')
,new ConditionWithArgument('`order`.`regdate`',$regdate9_argument,"like_prefix", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`member`.`email_address`',$email_address10_argument,"equal", 'or')
,new ConditionWithArgument('`member`.`nick_name`',$nick_name11_argument,"equal", 'or')
,new ConditionWithArgument('`member`.`user_name`',$user_name12_argument,"equal", 'or')
,new ConditionWithArgument('`member`.`email_id`',$email_id13_argument,"equal", 'or')
,new ConditionWithArgument('`order`.`member_srl`',$member_srl14_argument,"equal", 'or')
,new ConditionWithArgument('`order`.`extra_vars`',$extra_vars15_argument,"like", 'or')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index16_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count19_argument'}, ${'page17_argument'}, ${'page_count18_argument'}));
return $query; ?>