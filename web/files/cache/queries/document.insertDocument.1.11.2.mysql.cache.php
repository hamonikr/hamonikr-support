<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertDocument");
$query->setAction("insert");
$query->setPriority("LOW");

${'document_srl209_argument'} = new Argument('document_srl', $args->{'document_srl'});
${'document_srl209_argument'}->checkFilter('number');
${'document_srl209_argument'}->checkNotNull();
if(!${'document_srl209_argument'}->isValid()) return ${'document_srl209_argument'}->getErrorMessage();
if(${'document_srl209_argument'} !== null) ${'document_srl209_argument'}->setColumnType('number');

${'module_srl210_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl210_argument'}->checkFilter('number');
${'module_srl210_argument'}->ensureDefaultValue('0');
if(!${'module_srl210_argument'}->isValid()) return ${'module_srl210_argument'}->getErrorMessage();
if(${'module_srl210_argument'} !== null) ${'module_srl210_argument'}->setColumnType('number');

${'category_srl211_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl211_argument'}->checkFilter('number');
${'category_srl211_argument'}->ensureDefaultValue('0');
if(!${'category_srl211_argument'}->isValid()) return ${'category_srl211_argument'}->getErrorMessage();
if(${'category_srl211_argument'} !== null) ${'category_srl211_argument'}->setColumnType('number');

${'lang_code212_argument'} = new Argument('lang_code', $args->{'lang_code'});
${'lang_code212_argument'}->ensureDefaultValue('');
if(!${'lang_code212_argument'}->isValid()) return ${'lang_code212_argument'}->getErrorMessage();
if(${'lang_code212_argument'} !== null) ${'lang_code212_argument'}->setColumnType('varchar');

${'is_notice213_argument'} = new Argument('is_notice', $args->{'is_notice'});
${'is_notice213_argument'}->ensureDefaultValue('N');
${'is_notice213_argument'}->checkNotNull();
if(!${'is_notice213_argument'}->isValid()) return ${'is_notice213_argument'}->getErrorMessage();
if(${'is_notice213_argument'} !== null) ${'is_notice213_argument'}->setColumnType('char');

${'title214_argument'} = new Argument('title', $args->{'title'});
${'title214_argument'}->checkNotNull();
if(!${'title214_argument'}->isValid()) return ${'title214_argument'}->getErrorMessage();
if(${'title214_argument'} !== null) ${'title214_argument'}->setColumnType('varchar');

${'title_bold215_argument'} = new Argument('title_bold', $args->{'title_bold'});
${'title_bold215_argument'}->ensureDefaultValue('N');
if(!${'title_bold215_argument'}->isValid()) return ${'title_bold215_argument'}->getErrorMessage();
if(${'title_bold215_argument'} !== null) ${'title_bold215_argument'}->setColumnType('char');

${'title_color216_argument'} = new Argument('title_color', $args->{'title_color'});
${'title_color216_argument'}->ensureDefaultValue('N');
if(!${'title_color216_argument'}->isValid()) return ${'title_color216_argument'}->getErrorMessage();
if(${'title_color216_argument'} !== null) ${'title_color216_argument'}->setColumnType('varchar');

${'content217_argument'} = new Argument('content', $args->{'content'});
${'content217_argument'}->checkNotNull();
if(!${'content217_argument'}->isValid()) return ${'content217_argument'}->getErrorMessage();
if(${'content217_argument'} !== null) ${'content217_argument'}->setColumnType('bigtext');

${'readed_count218_argument'} = new Argument('readed_count', $args->{'readed_count'});
${'readed_count218_argument'}->ensureDefaultValue('0');
if(!${'readed_count218_argument'}->isValid()) return ${'readed_count218_argument'}->getErrorMessage();
if(${'readed_count218_argument'} !== null) ${'readed_count218_argument'}->setColumnType('number');

${'blamed_count219_argument'} = new Argument('blamed_count', $args->{'blamed_count'});
${'blamed_count219_argument'}->ensureDefaultValue('0');
if(!${'blamed_count219_argument'}->isValid()) return ${'blamed_count219_argument'}->getErrorMessage();
if(${'blamed_count219_argument'} !== null) ${'blamed_count219_argument'}->setColumnType('number');

${'voted_count220_argument'} = new Argument('voted_count', $args->{'voted_count'});
${'voted_count220_argument'}->ensureDefaultValue('0');
if(!${'voted_count220_argument'}->isValid()) return ${'voted_count220_argument'}->getErrorMessage();
if(${'voted_count220_argument'} !== null) ${'voted_count220_argument'}->setColumnType('number');

${'comment_count221_argument'} = new Argument('comment_count', $args->{'comment_count'});
${'comment_count221_argument'}->ensureDefaultValue('0');
if(!${'comment_count221_argument'}->isValid()) return ${'comment_count221_argument'}->getErrorMessage();
if(${'comment_count221_argument'} !== null) ${'comment_count221_argument'}->setColumnType('number');

${'trackback_count222_argument'} = new Argument('trackback_count', $args->{'trackback_count'});
${'trackback_count222_argument'}->ensureDefaultValue('0');
if(!${'trackback_count222_argument'}->isValid()) return ${'trackback_count222_argument'}->getErrorMessage();
if(${'trackback_count222_argument'} !== null) ${'trackback_count222_argument'}->setColumnType('number');

${'uploaded_count223_argument'} = new Argument('uploaded_count', $args->{'uploaded_count'});
${'uploaded_count223_argument'}->ensureDefaultValue('0');
if(!${'uploaded_count223_argument'}->isValid()) return ${'uploaded_count223_argument'}->getErrorMessage();
if(${'uploaded_count223_argument'} !== null) ${'uploaded_count223_argument'}->setColumnType('number');
if(isset($args->password)) {
${'password224_argument'} = new Argument('password', $args->{'password'});
if(!${'password224_argument'}->isValid()) return ${'password224_argument'}->getErrorMessage();
} else
${'password224_argument'} = NULL;if(${'password224_argument'} !== null) ${'password224_argument'}->setColumnType('varchar');

${'nick_name225_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name225_argument'}->checkNotNull();
if(!${'nick_name225_argument'}->isValid()) return ${'nick_name225_argument'}->getErrorMessage();
if(${'nick_name225_argument'} !== null) ${'nick_name225_argument'}->setColumnType('varchar');

${'member_srl226_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl226_argument'}->checkFilter('number');
${'member_srl226_argument'}->ensureDefaultValue('0');
if(!${'member_srl226_argument'}->isValid()) return ${'member_srl226_argument'}->getErrorMessage();
if(${'member_srl226_argument'} !== null) ${'member_srl226_argument'}->setColumnType('number');

${'user_id227_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id227_argument'}->ensureDefaultValue('');
if(!${'user_id227_argument'}->isValid()) return ${'user_id227_argument'}->getErrorMessage();
if(${'user_id227_argument'} !== null) ${'user_id227_argument'}->setColumnType('varchar');

${'user_name228_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name228_argument'}->ensureDefaultValue('');
if(!${'user_name228_argument'}->isValid()) return ${'user_name228_argument'}->getErrorMessage();
if(${'user_name228_argument'} !== null) ${'user_name228_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address229_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address229_argument'}->checkFilter('email');
if(!${'email_address229_argument'}->isValid()) return ${'email_address229_argument'}->getErrorMessage();
} else
${'email_address229_argument'} = NULL;if(${'email_address229_argument'} !== null) ${'email_address229_argument'}->setColumnType('varchar');

${'homepage230_argument'} = new Argument('homepage', $args->{'homepage'});
${'homepage230_argument'}->checkFilter('homepage');
${'homepage230_argument'}->ensureDefaultValue('');
if(!${'homepage230_argument'}->isValid()) return ${'homepage230_argument'}->getErrorMessage();
if(${'homepage230_argument'} !== null) ${'homepage230_argument'}->setColumnType('varchar');
if(isset($args->tags)) {
${'tags231_argument'} = new Argument('tags', $args->{'tags'});
if(!${'tags231_argument'}->isValid()) return ${'tags231_argument'}->getErrorMessage();
} else
${'tags231_argument'} = NULL;if(${'tags231_argument'} !== null) ${'tags231_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars232_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars232_argument'}->isValid()) return ${'extra_vars232_argument'}->getErrorMessage();
} else
${'extra_vars232_argument'} = NULL;if(${'extra_vars232_argument'} !== null) ${'extra_vars232_argument'}->setColumnType('text');

${'regdate233_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate233_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate233_argument'}->isValid()) return ${'regdate233_argument'}->getErrorMessage();
if(${'regdate233_argument'} !== null) ${'regdate233_argument'}->setColumnType('date');

${'last_update234_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update234_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update234_argument'}->isValid()) return ${'last_update234_argument'}->getErrorMessage();
if(${'last_update234_argument'} !== null) ${'last_update234_argument'}->setColumnType('date');
if(isset($args->last_updater)) {
${'last_updater235_argument'} = new Argument('last_updater', $args->{'last_updater'});
if(!${'last_updater235_argument'}->isValid()) return ${'last_updater235_argument'}->getErrorMessage();
} else
${'last_updater235_argument'} = NULL;if(${'last_updater235_argument'} !== null) ${'last_updater235_argument'}->setColumnType('varchar');

${'ipaddress236_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress236_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress236_argument'}->isValid()) return ${'ipaddress236_argument'}->getErrorMessage();
if(${'ipaddress236_argument'} !== null) ${'ipaddress236_argument'}->setColumnType('varchar');

${'list_order237_argument'} = new Argument('list_order', $args->{'list_order'});
${'list_order237_argument'}->ensureDefaultValue('0');
if(!${'list_order237_argument'}->isValid()) return ${'list_order237_argument'}->getErrorMessage();
if(${'list_order237_argument'} !== null) ${'list_order237_argument'}->setColumnType('number');

${'update_order238_argument'} = new Argument('update_order', $args->{'update_order'});
${'update_order238_argument'}->ensureDefaultValue('0');
if(!${'update_order238_argument'}->isValid()) return ${'update_order238_argument'}->getErrorMessage();
if(${'update_order238_argument'} !== null) ${'update_order238_argument'}->setColumnType('number');

${'allow_trackback239_argument'} = new Argument('allow_trackback', $args->{'allow_trackback'});
${'allow_trackback239_argument'}->ensureDefaultValue('Y');
if(!${'allow_trackback239_argument'}->isValid()) return ${'allow_trackback239_argument'}->getErrorMessage();
if(${'allow_trackback239_argument'} !== null) ${'allow_trackback239_argument'}->setColumnType('char');

${'notify_message240_argument'} = new Argument('notify_message', $args->{'notify_message'});
${'notify_message240_argument'}->ensureDefaultValue('N');
if(!${'notify_message240_argument'}->isValid()) return ${'notify_message240_argument'}->getErrorMessage();
if(${'notify_message240_argument'} !== null) ${'notify_message240_argument'}->setColumnType('char');

${'status241_argument'} = new Argument('status', $args->{'status'});
${'status241_argument'}->ensureDefaultValue('PUBLIC');
if(!${'status241_argument'}->isValid()) return ${'status241_argument'}->getErrorMessage();
if(${'status241_argument'} !== null) ${'status241_argument'}->setColumnType('varchar');

${'commentStatus242_argument'} = new Argument('commentStatus', $args->{'commentStatus'});
${'commentStatus242_argument'}->ensureDefaultValue('ALLOW');
if(!${'commentStatus242_argument'}->isValid()) return ${'commentStatus242_argument'}->getErrorMessage();
if(${'commentStatus242_argument'} !== null) ${'commentStatus242_argument'}->setColumnType('varchar');

$query->setColumns(array(
new InsertExpression('`document_srl`', ${'document_srl209_argument'})
,new InsertExpression('`module_srl`', ${'module_srl210_argument'})
,new InsertExpression('`category_srl`', ${'category_srl211_argument'})
,new InsertExpression('`lang_code`', ${'lang_code212_argument'})
,new InsertExpression('`is_notice`', ${'is_notice213_argument'})
,new InsertExpression('`title`', ${'title214_argument'})
,new InsertExpression('`title_bold`', ${'title_bold215_argument'})
,new InsertExpression('`title_color`', ${'title_color216_argument'})
,new InsertExpression('`content`', ${'content217_argument'})
,new InsertExpression('`readed_count`', ${'readed_count218_argument'})
,new InsertExpression('`blamed_count`', ${'blamed_count219_argument'})
,new InsertExpression('`voted_count`', ${'voted_count220_argument'})
,new InsertExpression('`comment_count`', ${'comment_count221_argument'})
,new InsertExpression('`trackback_count`', ${'trackback_count222_argument'})
,new InsertExpression('`uploaded_count`', ${'uploaded_count223_argument'})
,new InsertExpression('`password`', ${'password224_argument'})
,new InsertExpression('`nick_name`', ${'nick_name225_argument'})
,new InsertExpression('`member_srl`', ${'member_srl226_argument'})
,new InsertExpression('`user_id`', ${'user_id227_argument'})
,new InsertExpression('`user_name`', ${'user_name228_argument'})
,new InsertExpression('`email_address`', ${'email_address229_argument'})
,new InsertExpression('`homepage`', ${'homepage230_argument'})
,new InsertExpression('`tags`', ${'tags231_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars232_argument'})
,new InsertExpression('`regdate`', ${'regdate233_argument'})
,new InsertExpression('`last_update`', ${'last_update234_argument'})
,new InsertExpression('`last_updater`', ${'last_updater235_argument'})
,new InsertExpression('`ipaddress`', ${'ipaddress236_argument'})
,new InsertExpression('`list_order`', ${'list_order237_argument'})
,new InsertExpression('`update_order`', ${'update_order238_argument'})
,new InsertExpression('`allow_trackback`', ${'allow_trackback239_argument'})
,new InsertExpression('`notify_message`', ${'notify_message240_argument'})
,new InsertExpression('`status`', ${'status241_argument'})
,new InsertExpression('`comment_status`', ${'commentStatus242_argument'})
));
$query->setTables(array(
new Table('`hme_documents`', '`documents`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>