<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertFile");
$query->setAction("insert");
$query->setPriority("");

${'file_srl1_argument'} = new Argument('file_srl', $args->{'file_srl'});
${'file_srl1_argument'}->checkNotNull();
if(!${'file_srl1_argument'}->isValid()) return ${'file_srl1_argument'}->getErrorMessage();
if(${'file_srl1_argument'} !== null) ${'file_srl1_argument'}->setColumnType('number');

${'upload_target_srl2_argument'} = new Argument('upload_target_srl', $args->{'upload_target_srl'});
${'upload_target_srl2_argument'}->checkFilter('number');
${'upload_target_srl2_argument'}->ensureDefaultValue('0');
${'upload_target_srl2_argument'}->checkNotNull();
if(!${'upload_target_srl2_argument'}->isValid()) return ${'upload_target_srl2_argument'}->getErrorMessage();
if(${'upload_target_srl2_argument'} !== null) ${'upload_target_srl2_argument'}->setColumnType('number');
if(isset($args->sid)) {
${'sid3_argument'} = new Argument('sid', $args->{'sid'});
if(!${'sid3_argument'}->isValid()) return ${'sid3_argument'}->getErrorMessage();
} else
${'sid3_argument'} = NULL;if(${'sid3_argument'} !== null) ${'sid3_argument'}->setColumnType('varchar');

${'module_srl4_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl4_argument'}->checkFilter('number');
${'module_srl4_argument'}->ensureDefaultValue('0');
${'module_srl4_argument'}->checkNotNull();
if(!${'module_srl4_argument'}->isValid()) return ${'module_srl4_argument'}->getErrorMessage();
if(${'module_srl4_argument'} !== null) ${'module_srl4_argument'}->setColumnType('number');

${'source_filename5_argument'} = new Argument('source_filename', $args->{'source_filename'});
${'source_filename5_argument'}->checkNotNull();
if(!${'source_filename5_argument'}->isValid()) return ${'source_filename5_argument'}->getErrorMessage();
if(${'source_filename5_argument'} !== null) ${'source_filename5_argument'}->setColumnType('varchar');

${'uploaded_filename6_argument'} = new Argument('uploaded_filename', $args->{'uploaded_filename'});
${'uploaded_filename6_argument'}->checkNotNull();
if(!${'uploaded_filename6_argument'}->isValid()) return ${'uploaded_filename6_argument'}->getErrorMessage();
if(${'uploaded_filename6_argument'} !== null) ${'uploaded_filename6_argument'}->setColumnType('varchar');

${'file_size7_argument'} = new Argument('file_size', $args->{'file_size'});
${'file_size7_argument'}->ensureDefaultValue('0');
${'file_size7_argument'}->checkNotNull();
if(!${'file_size7_argument'}->isValid()) return ${'file_size7_argument'}->getErrorMessage();
if(${'file_size7_argument'} !== null) ${'file_size7_argument'}->setColumnType('number');

${'direct_download8_argument'} = new Argument('direct_download', $args->{'direct_download'});
${'direct_download8_argument'}->ensureDefaultValue('N');
${'direct_download8_argument'}->checkNotNull();
if(!${'direct_download8_argument'}->isValid()) return ${'direct_download8_argument'}->getErrorMessage();
if(${'direct_download8_argument'} !== null) ${'direct_download8_argument'}->setColumnType('char');
if(isset($args->comment)) {
${'comment9_argument'} = new Argument('comment', $args->{'comment'});
if(!${'comment9_argument'}->isValid()) return ${'comment9_argument'}->getErrorMessage();
} else
${'comment9_argument'} = NULL;if(${'comment9_argument'} !== null) ${'comment9_argument'}->setColumnType('varchar');

${'download_count10_argument'} = new Argument('download_count', $args->{'download_count'});
${'download_count10_argument'}->ensureDefaultValue('0');
if(!${'download_count10_argument'}->isValid()) return ${'download_count10_argument'}->getErrorMessage();
if(${'download_count10_argument'} !== null) ${'download_count10_argument'}->setColumnType('number');

${'member_srl11_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl11_argument'}->ensureDefaultValue('0');
if(!${'member_srl11_argument'}->isValid()) return ${'member_srl11_argument'}->getErrorMessage();
if(${'member_srl11_argument'} !== null) ${'member_srl11_argument'}->setColumnType('number');

${'is_cover12_argument'} = new Argument('is_cover', $args->{'is_cover'});
${'is_cover12_argument'}->ensureDefaultValue('N');
if(!${'is_cover12_argument'}->isValid()) return ${'is_cover12_argument'}->getErrorMessage();
if(${'is_cover12_argument'} !== null) ${'is_cover12_argument'}->setColumnType('char');

${'regdate13_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate13_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate13_argument'}->isValid()) return ${'regdate13_argument'}->getErrorMessage();
if(${'regdate13_argument'} !== null) ${'regdate13_argument'}->setColumnType('date');

${'ipaddress14_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress14_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress14_argument'}->isValid()) return ${'ipaddress14_argument'}->getErrorMessage();
if(${'ipaddress14_argument'} !== null) ${'ipaddress14_argument'}->setColumnType('varchar');

${'isvalid15_argument'} = new Argument('isvalid', $args->{'isvalid'});
${'isvalid15_argument'}->ensureDefaultValue('N');
if(!${'isvalid15_argument'}->isValid()) return ${'isvalid15_argument'}->getErrorMessage();
if(${'isvalid15_argument'} !== null) ${'isvalid15_argument'}->setColumnType('char');

$query->setColumns(array(
new InsertExpression('`file_srl`', ${'file_srl1_argument'})
,new InsertExpression('`upload_target_srl`', ${'upload_target_srl2_argument'})
,new InsertExpression('`sid`', ${'sid3_argument'})
,new InsertExpression('`module_srl`', ${'module_srl4_argument'})
,new InsertExpression('`source_filename`', ${'source_filename5_argument'})
,new InsertExpression('`uploaded_filename`', ${'uploaded_filename6_argument'})
,new InsertExpression('`file_size`', ${'file_size7_argument'})
,new InsertExpression('`direct_download`', ${'direct_download8_argument'})
,new InsertExpression('`comment`', ${'comment9_argument'})
,new InsertExpression('`download_count`', ${'download_count10_argument'})
,new InsertExpression('`member_srl`', ${'member_srl11_argument'})
,new InsertExpression('`cover_image`', ${'is_cover12_argument'})
,new InsertExpression('`regdate`', ${'regdate13_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress14_argument'})
,new InsertExpression('`isvalid`', ${'isvalid15_argument'})
));
$query->setTables(array(
new Table('`hme_files`', '`files`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>