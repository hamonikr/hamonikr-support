<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateJoinForm");
$query->setAction("update");
$query->setPriority("");
if(isset($args->column_type)) {
${'column_type1_argument'} = new Argument('column_type', $args->{'column_type'});
if(!${'column_type1_argument'}->isValid()) return ${'column_type1_argument'}->getErrorMessage();
} else
${'column_type1_argument'} = NULL;if(${'column_type1_argument'} !== null) ${'column_type1_argument'}->setColumnType('varchar');
if(isset($args->column_name)) {
${'column_name2_argument'} = new Argument('column_name', $args->{'column_name'});
if(!${'column_name2_argument'}->isValid()) return ${'column_name2_argument'}->getErrorMessage();
} else
${'column_name2_argument'} = NULL;if(${'column_name2_argument'} !== null) ${'column_name2_argument'}->setColumnType('varchar');
if(isset($args->column_title)) {
${'column_title3_argument'} = new Argument('column_title', $args->{'column_title'});
if(!${'column_title3_argument'}->isValid()) return ${'column_title3_argument'}->getErrorMessage();
} else
${'column_title3_argument'} = NULL;if(${'column_title3_argument'} !== null) ${'column_title3_argument'}->setColumnType('varchar');

${'required4_argument'} = new Argument('required', $args->{'required'});
${'required4_argument'}->ensureDefaultValue('N');
if(!${'required4_argument'}->isValid()) return ${'required4_argument'}->getErrorMessage();
if(${'required4_argument'} !== null) ${'required4_argument'}->setColumnType('char');
if(isset($args->default_value)) {
${'default_value5_argument'} = new Argument('default_value', $args->{'default_value'});
if(!${'default_value5_argument'}->isValid()) return ${'default_value5_argument'}->getErrorMessage();
} else
${'default_value5_argument'} = NULL;if(${'default_value5_argument'} !== null) ${'default_value5_argument'}->setColumnType('text');

${'is_active6_argument'} = new Argument('is_active', $args->{'is_active'});
${'is_active6_argument'}->ensureDefaultValue('N');
if(!${'is_active6_argument'}->isValid()) return ${'is_active6_argument'}->getErrorMessage();
if(${'is_active6_argument'} !== null) ${'is_active6_argument'}->setColumnType('char');
if(isset($args->description)) {
${'description7_argument'} = new Argument('description', $args->{'description'});
if(!${'description7_argument'}->isValid()) return ${'description7_argument'}->getErrorMessage();
} else
${'description7_argument'} = NULL;if(${'description7_argument'} !== null) ${'description7_argument'}->setColumnType('text');

${'member_join_form_srl8_argument'} = new ConditionArgument('member_join_form_srl', $args->member_join_form_srl, 'equal');
${'member_join_form_srl8_argument'}->checkFilter('number');
${'member_join_form_srl8_argument'}->checkNotNull();
${'member_join_form_srl8_argument'}->createConditionValue();
if(!${'member_join_form_srl8_argument'}->isValid()) return ${'member_join_form_srl8_argument'}->getErrorMessage();
if(${'member_join_form_srl8_argument'} !== null) ${'member_join_form_srl8_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`column_type`', ${'column_type1_argument'})
,new UpdateExpression('`column_name`', ${'column_name2_argument'})
,new UpdateExpression('`column_title`', ${'column_title3_argument'})
,new UpdateExpression('`required`', ${'required4_argument'})
,new UpdateExpression('`default_value`', ${'default_value5_argument'})
,new UpdateExpression('`is_active`', ${'is_active6_argument'})
,new UpdateExpression('`description`', ${'description7_argument'})
));
$query->setTables(array(
new Table('`hme_member_join_form`', '`member_join_form`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`member_join_form_srl`',$member_join_form_srl8_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>