<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getMileageHistory");
$query->setAction("select");
$query->setPriority("");
if(isset($args->member_srl)) {
${'member_srl1_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl1_argument'}->createConditionValue();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
} else
${'member_srl1_argument'} = NULL;if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');

${'page3_argument'} = new Argument('page', $args->{'page'});
${'page3_argument'}->ensureDefaultValue('1');
if(!${'page3_argument'}->isValid()) return ${'page3_argument'}->getErrorMessage();

${'page_count4_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count4_argument'}->ensureDefaultValue('10');
if(!${'page_count4_argument'}->isValid()) return ${'page_count4_argument'}->getErrorMessage();

${'list_count5_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count5_argument'}->ensureDefaultValue('10');
if(!${'list_count5_argument'}->isValid()) return ${'list_count5_argument'}->getErrorMessage();

${'sort_index2_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index2_argument'}->ensureDefaultValue('history.regdate');
if(!${'sort_index2_argument'}->isValid()) return ${'sort_index2_argument'}->getErrorMessage();

$query->setColumns(array(
new SelectExpression('`history`.`history_srl`', '`history_srl`')
,new SelectExpression('`history`.`order_srl`', '`order_srl`')
,new SelectExpression('`history`.`action`', '`action`')
,new SelectExpression('`history`.`title`', '`title`')
,new SelectExpression('`history`.`amount`', '`amount`')
,new SelectExpression('`history`.`balance`', '`balance`')
,new SelectExpression('`history`.`regdate`', '`regdate`')
,new SelectExpression('`member`.`user_id`', '`user_id`')
,new SelectExpression('`member`.`nick_name`', '`nick_name`')
,new SelectExpression('`member`.`member_srl`', '`member_srl`')
,new SelectExpression('`member`.`email_address`', '`email_address`')
));
$query->setTables(array(
new Table('`hme_nmileage_history`', '`history`')
,new JoinTable('`hme_member`', '`member`', "left join", array(
new ConditionGroup(array(
new ConditionWithoutArgument('`history`.`member_srl`','`member`.`member_srl`',"equal")))
))
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`history`.`member_srl`',$member_srl1_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index2_argument'}, "desc")
));
$query->setLimit(new Limit(${'list_count5_argument'}, ${'page3_argument'}, ${'page_count4_argument'}));
return $query; ?>