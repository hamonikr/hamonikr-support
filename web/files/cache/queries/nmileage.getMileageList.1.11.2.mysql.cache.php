<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMileageList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl1_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl1_argument'}->createConditionValue();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
} else
${'member_srl1_argument'} = NULL;if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');
if(isset($args->user_id)) {
${'user_id2_argument'} = new ConditionArgument('user_id', $args->user_id, 'equal');
${'user_id2_argument'}->createConditionValue();
if(!${'user_id2_argument'}->isValid()) return ${'user_id2_argument'}->getErrorMessage();
} else
${'user_id2_argument'} = NULL;if(${'user_id2_argument'} !== null) ${'user_id2_argument'}->setColumnType('varchar');
if(isset($args->nick_name)) {
${'nick_name3_argument'} = new ConditionArgument('nick_name', $args->nick_name, 'equal');
${'nick_name3_argument'}->createConditionValue();
if(!${'nick_name3_argument'}->isValid()) return ${'nick_name3_argument'}->getErrorMessage();
} else
${'nick_name3_argument'} = NULL;if(${'nick_name3_argument'} !== null) ${'nick_name3_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address4_argument'} = new ConditionArgument('email_address', $args->email_address, 'equal');
${'email_address4_argument'}->createConditionValue();
if(!${'email_address4_argument'}->isValid()) return ${'email_address4_argument'}->getErrorMessage();
} else
${'email_address4_argument'} = NULL;if(${'email_address4_argument'} !== null) ${'email_address4_argument'}->setColumnType('varchar');

${'page6_argument'} = new Argument('page', $args->{'page'});
${'page6_argument'}->ensureDefaultValue('1');
if(!${'page6_argument'}->isValid()) return ${'page6_argument'}->getErrorMessage();

${'page_count7_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count7_argument'}->ensureDefaultValue('10');
if(!${'page_count7_argument'}->isValid()) return ${'page_count7_argument'}->getErrorMessage();

${'list_count8_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count8_argument'}->ensureDefaultValue('20');
if(!${'list_count8_argument'}->isValid()) return ${'list_count8_argument'}->getErrorMessage();

${'sort_index5_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index5_argument'}->ensureDefaultValue('mileage.member_srl');
if(!${'sort_index5_argument'}->isValid()) return ${'sort_index5_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`mileage`.`regdate`', '`regdate`')
,new SelectExpression('`mileage`.`mileage`', '`mileage`')
,new SelectExpression('`member`.`user_id`', '`user_id`')
,new SelectExpression('`member`.`nick_name`', '`nick_name`')
,new SelectExpression('`member`.`member_srl`', '`member_srl`')
));
$query->setTables(array(
new Table('`hme_nmileage`', '`mileage`')
,new JoinTable('`hme_member`', '`member`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`mileage`.`member_srl`','`member`.`member_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`mileage`.`member_srl`',$member_srl1_argument,"equal")
,new ConditionWithArgument('`member`.`user_id`',$user_id2_argument,"equal", 'and')
,new ConditionWithArgument('`member`.`nick_name`',$nick_name3_argument,"equal", 'and')
,new ConditionWithArgument('`member`.`email_address`',$email_address4_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index5_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count8_argument'}, ${'page6_argument'}, ${'page_count7_argument'}));
return $query; ?>