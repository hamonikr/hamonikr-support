<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getCommentCount");
$query->setAction("select");
$query->setPriority("");
if(isset($args->status)) {
${'status1_argument'} = new ConditionArgument('status', $args->status, 'equal');
${'status1_argument'}->createConditionValue();
if(!${'status1_argument'}->isValid()) return ${'status1_argument'}->getErrorMessage();
} else
${'status1_argument'} = NULL;if(${'status1_argument'} !== null) ${'status1_argument'}->setColumnType('number');
if(isset($args->document_srl)) {
${'document_srl2_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl2_argument'}->checkFilter('number');
${'document_srl2_argument'}->createConditionValue();
if(!${'document_srl2_argument'}->isValid()) return ${'document_srl2_argument'}->getErrorMessage();
} else
${'document_srl2_argument'} = NULL;if(${'document_srl2_argument'} !== null) ${'document_srl2_argument'}->setColumnType('number');
if(isset($args->module_srl)) {
${'module_srl3_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl3_argument'}->checkFilter('number');
${'module_srl3_argument'}->createConditionValue();
if(!${'module_srl3_argument'}->isValid()) return ${'module_srl3_argument'}->getErrorMessage();
} else
${'module_srl3_argument'} = NULL;if(${'module_srl3_argument'} !== null) ${'module_srl3_argument'}->setColumnType('number');
if(isset($args->regDate)) {
${'regDate4_argument'} = new ConditionArgument('regDate', $args->regDate, 'like_prefix');
${'regDate4_argument'}->createConditionValue();
if(!${'regDate4_argument'}->isValid()) return ${'regDate4_argument'}->getErrorMessage();
} else
${'regDate4_argument'} = NULL;if(${'regDate4_argument'} !== null) ${'regDate4_argument'}->setColumnType('date');

$query->setColumns(array(
new SelectExpression('count(*)', '`count`')
));
$query->setTables(array(
new Table('`hme_comments`', '`comments`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`status`',$status1_argument,"equal")
,new ConditionWithArgument('`document_srl`',$document_srl2_argument,"equal", 'and')
,new ConditionWithArgument('`module_srl`',$module_srl3_argument,"in", 'and')
,new ConditionWithArgument('`regdate`',$regDate4_argument,"like_prefix", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>