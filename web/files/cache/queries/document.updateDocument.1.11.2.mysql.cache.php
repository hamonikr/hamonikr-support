<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateDocument");
$query->setAction("update");
$query->setPriority("LOW");

${'module_srl3_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl3_argument'}->checkFilter('number');
${'module_srl3_argument'}->ensureDefaultValue('0');
if(!${'module_srl3_argument'}->isValid()) return ${'module_srl3_argument'}->getErrorMessage();
if(${'module_srl3_argument'} !== null) ${'module_srl3_argument'}->setColumnType('number');

${'category_srl4_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl4_argument'}->checkFilter('number');
${'category_srl4_argument'}->ensureDefaultValue('0');
if(!${'category_srl4_argument'}->isValid()) return ${'category_srl4_argument'}->getErrorMessage();
if(${'category_srl4_argument'} !== null) ${'category_srl4_argument'}->setColumnType('number');

${'is_notice5_argument'} = new Argument('is_notice', $args->{'is_notice'});
${'is_notice5_argument'}->ensureDefaultValue('N');
${'is_notice5_argument'}->checkNotNull();
if(!${'is_notice5_argument'}->isValid()) return ${'is_notice5_argument'}->getErrorMessage();
if(${'is_notice5_argument'} !== null) ${'is_notice5_argument'}->setColumnType('char');

${'title6_argument'} = new Argument('title', $args->{'title'});
${'title6_argument'}->checkNotNull();
if(!${'title6_argument'}->isValid()) return ${'title6_argument'}->getErrorMessage();
if(${'title6_argument'} !== null) ${'title6_argument'}->setColumnType('varchar');

${'title_bold7_argument'} = new Argument('title_bold', $args->{'title_bold'});
${'title_bold7_argument'}->ensureDefaultValue('N');
if(!${'title_bold7_argument'}->isValid()) return ${'title_bold7_argument'}->getErrorMessage();
if(${'title_bold7_argument'} !== null) ${'title_bold7_argument'}->setColumnType('char');

${'title_color8_argument'} = new Argument('title_color', $args->{'title_color'});
${'title_color8_argument'}->ensureDefaultValue('N');
if(!${'title_color8_argument'}->isValid()) return ${'title_color8_argument'}->getErrorMessage();
if(${'title_color8_argument'} !== null) ${'title_color8_argument'}->setColumnType('varchar');

${'content9_argument'} = new Argument('content', $args->{'content'});
${'content9_argument'}->checkNotNull();
if(!${'content9_argument'}->isValid()) return ${'content9_argument'}->getErrorMessage();
if(${'content9_argument'} !== null) ${'content9_argument'}->setColumnType('bigtext');

${'uploaded_count10_argument'} = new Argument('uploaded_count', $args->{'uploaded_count'});
${'uploaded_count10_argument'}->ensureDefaultValue('0');
if(!${'uploaded_count10_argument'}->isValid()) return ${'uploaded_count10_argument'}->getErrorMessage();
if(${'uploaded_count10_argument'} !== null) ${'uploaded_count10_argument'}->setColumnType('number');
if(isset($args->password)) {
${'password11_argument'} = new Argument('password', $args->{'password'});
if(!${'password11_argument'}->isValid()) return ${'password11_argument'}->getErrorMessage();
} else
${'password11_argument'} = NULL;if(${'password11_argument'} !== null) ${'password11_argument'}->setColumnType('varchar');
if(isset($args->nick_name)) {
${'nick_name12_argument'} = new Argument('nick_name', $args->{'nick_name'});
if(!${'nick_name12_argument'}->isValid()) return ${'nick_name12_argument'}->getErrorMessage();
} else
${'nick_name12_argument'} = NULL;if(${'nick_name12_argument'} !== null) ${'nick_name12_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl13_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl13_argument'}->isValid()) return ${'member_srl13_argument'}->getErrorMessage();
} else
${'member_srl13_argument'} = NULL;if(${'member_srl13_argument'} !== null) ${'member_srl13_argument'}->setColumnType('number');
if(isset($args->user_id)) {
${'user_id14_argument'} = new Argument('user_id', $args->{'user_id'});
if(!${'user_id14_argument'}->isValid()) return ${'user_id14_argument'}->getErrorMessage();
} else
${'user_id14_argument'} = NULL;if(${'user_id14_argument'} !== null) ${'user_id14_argument'}->setColumnType('varchar');

${'user_name15_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name15_argument'}->ensureDefaultValue('');
if(!${'user_name15_argument'}->isValid()) return ${'user_name15_argument'}->getErrorMessage();
if(${'user_name15_argument'} !== null) ${'user_name15_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address16_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address16_argument'}->checkFilter('email');
if(!${'email_address16_argument'}->isValid()) return ${'email_address16_argument'}->getErrorMessage();
} else
${'email_address16_argument'} = NULL;if(${'email_address16_argument'} !== null) ${'email_address16_argument'}->setColumnType('varchar');
if(isset($args->homepage)) {
${'homepage17_argument'} = new Argument('homepage', $args->{'homepage'});
${'homepage17_argument'}->checkFilter('homepage');
if(!${'homepage17_argument'}->isValid()) return ${'homepage17_argument'}->getErrorMessage();
} else
${'homepage17_argument'} = NULL;if(${'homepage17_argument'} !== null) ${'homepage17_argument'}->setColumnType('varchar');

${'tags18_argument'} = new Argument('tags', $args->{'tags'});
${'tags18_argument'}->ensureDefaultValue('');
if(!${'tags18_argument'}->isValid()) return ${'tags18_argument'}->getErrorMessage();
if(${'tags18_argument'} !== null) ${'tags18_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars19_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars19_argument'}->isValid()) return ${'extra_vars19_argument'}->getErrorMessage();
} else
${'extra_vars19_argument'} = NULL;if(${'extra_vars19_argument'} !== null) ${'extra_vars19_argument'}->setColumnType('text');
if(isset($args->regdate)) {
${'regdate20_argument'} = new Argument('regdate', $args->{'regdate'});
if(!${'regdate20_argument'}->isValid()) return ${'regdate20_argument'}->getErrorMessage();
} else
${'regdate20_argument'} = NULL;if(${'regdate20_argument'} !== null) ${'regdate20_argument'}->setColumnType('date');

${'last_update21_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update21_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update21_argument'}->isValid()) return ${'last_update21_argument'}->getErrorMessage();
if(${'last_update21_argument'} !== null) ${'last_update21_argument'}->setColumnType('date');

${'ipaddress22_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress22_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress22_argument'}->isValid()) return ${'ipaddress22_argument'}->getErrorMessage();
if(${'ipaddress22_argument'} !== null) ${'ipaddress22_argument'}->setColumnType('varchar');
if(isset($args->list_order)) {
${'list_order23_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order23_argument'}->isValid()) return ${'list_order23_argument'}->getErrorMessage();
} else
${'list_order23_argument'} = NULL;if(${'list_order23_argument'} !== null) ${'list_order23_argument'}->setColumnType('number');

${'update_order24_argument'} = new Argument('update_order', $args->{'update_order'});
${'update_order24_argument'}->ensureDefaultValue('0');
if(!${'update_order24_argument'}->isValid()) return ${'update_order24_argument'}->getErrorMessage();
if(${'update_order24_argument'} !== null) ${'update_order24_argument'}->setColumnType('number');

${'allow_trackback25_argument'} = new Argument('allow_trackback', $args->{'allow_trackback'});
${'allow_trackback25_argument'}->ensureDefaultValue('Y');
if(!${'allow_trackback25_argument'}->isValid()) return ${'allow_trackback25_argument'}->getErrorMessage();
if(${'allow_trackback25_argument'} !== null) ${'allow_trackback25_argument'}->setColumnType('char');

${'notify_message26_argument'} = new Argument('notify_message', $args->{'notify_message'});
${'notify_message26_argument'}->ensureDefaultValue('N');
if(!${'notify_message26_argument'}->isValid()) return ${'notify_message26_argument'}->getErrorMessage();
if(${'notify_message26_argument'} !== null) ${'notify_message26_argument'}->setColumnType('char');

${'status27_argument'} = new Argument('status', $args->{'status'});
${'status27_argument'}->ensureDefaultValue('PUBLIC');
if(!${'status27_argument'}->isValid()) return ${'status27_argument'}->getErrorMessage();
if(${'status27_argument'} !== null) ${'status27_argument'}->setColumnType('varchar');

${'commentStatus28_argument'} = new Argument('commentStatus', $args->{'commentStatus'});
${'commentStatus28_argument'}->ensureDefaultValue('ALLOW');
if(!${'commentStatus28_argument'}->isValid()) return ${'commentStatus28_argument'}->getErrorMessage();
if(${'commentStatus28_argument'} !== null) ${'commentStatus28_argument'}->setColumnType('varchar');

${'document_srl29_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl29_argument'}->checkFilter('number');
${'document_srl29_argument'}->checkNotNull();
${'document_srl29_argument'}->createConditionValue();
if(!${'document_srl29_argument'}->isValid()) return ${'document_srl29_argument'}->getErrorMessage();
if(${'document_srl29_argument'} !== null) ${'document_srl29_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module_srl`', ${'module_srl3_argument'})
,new UpdateExpression('`category_srl`', ${'category_srl4_argument'})
,new UpdateExpression('`is_notice`', ${'is_notice5_argument'})
,new UpdateExpression('`title`', ${'title6_argument'})
,new UpdateExpression('`title_bold`', ${'title_bold7_argument'})
,new UpdateExpression('`title_color`', ${'title_color8_argument'})
,new UpdateExpression('`content`', ${'content9_argument'})
,new UpdateExpression('`uploaded_count`', ${'uploaded_count10_argument'})
,new UpdateExpression('`password`', ${'password11_argument'})
,new UpdateExpression('`nick_name`', ${'nick_name12_argument'})
,new UpdateExpression('`member_srl`', ${'member_srl13_argument'})
,new UpdateExpression('`user_id`', ${'user_id14_argument'})
,new UpdateExpression('`user_name`', ${'user_name15_argument'})
,new UpdateExpression('`email_address`', ${'email_address16_argument'})
,new UpdateExpression('`homepage`', ${'homepage17_argument'})
,new UpdateExpression('`tags`', ${'tags18_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars19_argument'})
,new UpdateExpression('`regdate`', ${'regdate20_argument'})
,new UpdateExpression('`last_update`', ${'last_update21_argument'})
,new UpdateExpression('`ipaddress`', ${'ipaddress22_argument'})
,new UpdateExpression('`list_order`', ${'list_order23_argument'})
,new UpdateExpression('`update_order`', ${'update_order24_argument'})
,new UpdateExpression('`allow_trackback`', ${'allow_trackback25_argument'})
,new UpdateExpression('`notify_message`', ${'notify_message26_argument'})
,new UpdateExpression('`status`', ${'status27_argument'})
,new UpdateExpression('`comment_status`', ${'commentStatus28_argument'})
));
$query->setTables(array(
new Table('`hme_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl29_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>