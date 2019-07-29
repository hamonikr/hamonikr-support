<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertLog");
$query->setAction("insert");
$query->setPriority("");

${'spamfilter_log_srl3_argument'} = new Argument('spamfilter_log_srl', $args->{'spamfilter_log_srl'});
$db = DB::getInstance(); $sequence = $db->getNextSequence(); ${'spamfilter_log_srl3_argument'}->ensureDefaultValue($sequence);
if(!${'spamfilter_log_srl3_argument'}->isValid()) return ${'spamfilter_log_srl3_argument'}->getErrorMessage();
if(${'spamfilter_log_srl3_argument'} !== null) ${'spamfilter_log_srl3_argument'}->setColumnType('number');

${'ipaddress4_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress4_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress4_argument'}->isValid()) return ${'ipaddress4_argument'}->getErrorMessage();
if(${'ipaddress4_argument'} !== null) ${'ipaddress4_argument'}->setColumnType('varchar');

${'regdate5_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate5_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate5_argument'}->isValid()) return ${'regdate5_argument'}->getErrorMessage();
if(${'regdate5_argument'} !== null) ${'regdate5_argument'}->setColumnType('date');

$query->setColumns(array(
new InsertExpression('`spamfilter_log_srl`', ${'spamfilter_log_srl3_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress4_argument'})
,new InsertExpression('`regdate`', ${'regdate5_argument'})
));
$query->setTables(array(
new Table('`hme_spamfilter_log`', '`spamfilter_log`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>