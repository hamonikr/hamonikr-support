<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateDocument");
$query->setAction("update");
$query->setPriority("LOW");

${'module_srl1_argument'} = new Argument('module_srl', $args->{'module_srl'});
${'module_srl1_argument'}->checkFilter('number');
${'module_srl1_argument'}->ensureDefaultValue('0');
if(!${'module_srl1_argument'}->isValid()) return ${'module_srl1_argument'}->getErrorMessage();
if(${'module_srl1_argument'} !== null) ${'module_srl1_argument'}->setColumnType('number');

${'category_srl2_argument'} = new Argument('category_srl', $args->{'category_srl'});
${'category_srl2_argument'}->checkFilter('number');
${'category_srl2_argument'}->ensureDefaultValue('0');
if(!${'category_srl2_argument'}->isValid()) return ${'category_srl2_argument'}->getErrorMessage();
if(${'category_srl2_argument'} !== null) ${'category_srl2_argument'}->setColumnType('number');

${'is_notice3_argument'} = new Argument('is_notice', $args->{'is_notice'});
${'is_notice3_argument'}->ensureDefaultValue('N');
${'is_notice3_argument'}->checkNotNull();
if(!${'is_notice3_argument'}->isValid()) return ${'is_notice3_argument'}->getErrorMessage();
if(${'is_notice3_argument'} !== null) ${'is_notice3_argument'}->setColumnType('char');

${'title4_argument'} = new Argument('title', $args->{'title'});
${'title4_argument'}->checkNotNull();
if(!${'title4_argument'}->isValid()) return ${'title4_argument'}->getErrorMessage();
if(${'title4_argument'} !== null) ${'title4_argument'}->setColumnType('varchar');

${'title_bold5_argument'} = new Argument('title_bold', $args->{'title_bold'});
${'title_bold5_argument'}->ensureDefaultValue('N');
if(!${'title_bold5_argument'}->isValid()) return ${'title_bold5_argument'}->getErrorMessage();
if(${'title_bold5_argument'} !== null) ${'title_bold5_argument'}->setColumnType('char');

${'title_color6_argument'} = new Argument('title_color', $args->{'title_color'});
${'title_color6_argument'}->ensureDefaultValue('N');
if(!${'title_color6_argument'}->isValid()) return ${'title_color6_argument'}->getErrorMessage();
if(${'title_color6_argument'} !== null) ${'title_color6_argument'}->setColumnType('varchar');

${'content7_argument'} = new Argument('content', $args->{'content'});
${'content7_argument'}->checkNotNull();
if(!${'content7_argument'}->isValid()) return ${'content7_argument'}->getErrorMessage();
if(${'content7_argument'} !== null) ${'content7_argument'}->setColumnType('bigtext');

${'uploaded_count8_argument'} = new Argument('uploaded_count', $args->{'uploaded_count'});
${'uploaded_count8_argument'}->ensureDefaultValue('0');
if(!${'uploaded_count8_argument'}->isValid()) return ${'uploaded_count8_argument'}->getErrorMessage();
if(${'uploaded_count8_argument'} !== null) ${'uploaded_count8_argument'}->setColumnType('number');
if(isset($args->password)) {
${'password9_argument'} = new Argument('password', $args->{'password'});
if(!${'password9_argument'}->isValid()) return ${'password9_argument'}->getErrorMessage();
} else
${'password9_argument'} = NULL;if(${'password9_argument'} !== null) ${'password9_argument'}->setColumnType('varchar');
if(isset($args->nick_name)) {
${'nick_name10_argument'} = new Argument('nick_name', $args->{'nick_name'});
if(!${'nick_name10_argument'}->isValid()) return ${'nick_name10_argument'}->getErrorMessage();
} else
${'nick_name10_argument'} = NULL;if(${'nick_name10_argument'} !== null) ${'nick_name10_argument'}->setColumnType('varchar');
if(isset($args->member_srl)) {
${'member_srl11_argument'} = new Argument('member_srl', $args->{'member_srl'});
if(!${'member_srl11_argument'}->isValid()) return ${'member_srl11_argument'}->getErrorMessage();
} else
${'member_srl11_argument'} = NULL;if(${'member_srl11_argument'} !== null) ${'member_srl11_argument'}->setColumnType('number');
if(isset($args->user_id)) {
${'user_id12_argument'} = new Argument('user_id', $args->{'user_id'});
if(!${'user_id12_argument'}->isValid()) return ${'user_id12_argument'}->getErrorMessage();
} else
${'user_id12_argument'} = NULL;if(${'user_id12_argument'} !== null) ${'user_id12_argument'}->setColumnType('varchar');

${'user_name13_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name13_argument'}->ensureDefaultValue('');
if(!${'user_name13_argument'}->isValid()) return ${'user_name13_argument'}->getErrorMessage();
if(${'user_name13_argument'} !== null) ${'user_name13_argument'}->setColumnType('varchar');
if(isset($args->email_address)) {
${'email_address14_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address14_argument'}->checkFilter('email');
if(!${'email_address14_argument'}->isValid()) return ${'email_address14_argument'}->getErrorMessage();
} else
${'email_address14_argument'} = NULL;if(${'email_address14_argument'} !== null) ${'email_address14_argument'}->setColumnType('varchar');
if(isset($args->homepage)) {
${'homepage15_argument'} = new Argument('homepage', $args->{'homepage'});
${'homepage15_argument'}->checkFilter('homepage');
if(!${'homepage15_argument'}->isValid()) return ${'homepage15_argument'}->getErrorMessage();
} else
${'homepage15_argument'} = NULL;if(${'homepage15_argument'} !== null) ${'homepage15_argument'}->setColumnType('varchar');

${'tags16_argument'} = new Argument('tags', $args->{'tags'});
${'tags16_argument'}->ensureDefaultValue('');
if(!${'tags16_argument'}->isValid()) return ${'tags16_argument'}->getErrorMessage();
if(${'tags16_argument'} !== null) ${'tags16_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars17_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars17_argument'}->isValid()) return ${'extra_vars17_argument'}->getErrorMessage();
} else
${'extra_vars17_argument'} = NULL;if(${'extra_vars17_argument'} !== null) ${'extra_vars17_argument'}->setColumnType('text');
if(isset($args->regdate)) {
${'regdate18_argument'} = new Argument('regdate', $args->{'regdate'});
if(!${'regdate18_argument'}->isValid()) return ${'regdate18_argument'}->getErrorMessage();
} else
${'regdate18_argument'} = NULL;if(${'regdate18_argument'} !== null) ${'regdate18_argument'}->setColumnType('date');

${'last_update19_argument'} = new Argument('last_update', $args->{'last_update'});
${'last_update19_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_update19_argument'}->isValid()) return ${'last_update19_argument'}->getErrorMessage();
if(${'last_update19_argument'} !== null) ${'last_update19_argument'}->setColumnType('date');

${'ipaddress20_argument'} = new Argument('ipaddress', $args->{'ipaddress'});
${'ipaddress20_argument'}->ensureDefaultValue($_SERVER['REMOTE_ADDR']);
if(!${'ipaddress20_argument'}->isValid()) return ${'ipaddress20_argument'}->getErrorMessage();
if(${'ipaddress20_argument'} !== null) ${'ipaddress20_argument'}->setColumnType('varchar');
if(isset($args->list_order)) {
${'list_order21_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order21_argument'}->isValid()) return ${'list_order21_argument'}->getErrorMessage();
} else
${'list_order21_argument'} = NULL;if(${'list_order21_argument'} !== null) ${'list_order21_argument'}->setColumnType('number');

${'update_order22_argument'} = new Argument('update_order', $args->{'update_order'});
${'update_order22_argument'}->ensureDefaultValue('0');
if(!${'update_order22_argument'}->isValid()) return ${'update_order22_argument'}->getErrorMessage();
if(${'update_order22_argument'} !== null) ${'update_order22_argument'}->setColumnType('number');

${'allow_trackback23_argument'} = new Argument('allow_trackback', $args->{'allow_trackback'});
${'allow_trackback23_argument'}->ensureDefaultValue('Y');
if(!${'allow_trackback23_argument'}->isValid()) return ${'allow_trackback23_argument'}->getErrorMessage();
if(${'allow_trackback23_argument'} !== null) ${'allow_trackback23_argument'}->setColumnType('char');

${'notify_message24_argument'} = new Argument('notify_message', $args->{'notify_message'});
${'notify_message24_argument'}->ensureDefaultValue('N');
if(!${'notify_message24_argument'}->isValid()) return ${'notify_message24_argument'}->getErrorMessage();
if(${'notify_message24_argument'} !== null) ${'notify_message24_argument'}->setColumnType('char');

${'status25_argument'} = new Argument('status', $args->{'status'});
${'status25_argument'}->ensureDefaultValue('PUBLIC');
if(!${'status25_argument'}->isValid()) return ${'status25_argument'}->getErrorMessage();
if(${'status25_argument'} !== null) ${'status25_argument'}->setColumnType('varchar');

${'commentStatus26_argument'} = new Argument('commentStatus', $args->{'commentStatus'});
${'commentStatus26_argument'}->ensureDefaultValue('ALLOW');
if(!${'commentStatus26_argument'}->isValid()) return ${'commentStatus26_argument'}->getErrorMessage();
if(${'commentStatus26_argument'} !== null) ${'commentStatus26_argument'}->setColumnType('varchar');

${'document_srl27_argument'} = new ConditionArgument('document_srl', $args->document_srl, 'equal');
${'document_srl27_argument'}->checkFilter('number');
${'document_srl27_argument'}->checkNotNull();
${'document_srl27_argument'}->createConditionValue();
if(!${'document_srl27_argument'}->isValid()) return ${'document_srl27_argument'}->getErrorMessage();
if(${'document_srl27_argument'} !== null) ${'document_srl27_argument'}->setColumnType('number');

$query->setColumns(array(
new UpdateExpression('`module_srl`', ${'module_srl1_argument'})
,new UpdateExpression('`category_srl`', ${'category_srl2_argument'})
,new UpdateExpression('`is_notice`', ${'is_notice3_argument'})
,new UpdateExpression('`title`', ${'title4_argument'})
,new UpdateExpression('`title_bold`', ${'title_bold5_argument'})
,new UpdateExpression('`title_color`', ${'title_color6_argument'})
,new UpdateExpression('`content`', ${'content7_argument'})
,new UpdateExpression('`uploaded_count`', ${'uploaded_count8_argument'})
,new UpdateExpression('`password`', ${'password9_argument'})
,new UpdateExpression('`nick_name`', ${'nick_name10_argument'})
,new UpdateExpression('`member_srl`', ${'member_srl11_argument'})
,new UpdateExpression('`user_id`', ${'user_id12_argument'})
,new UpdateExpression('`user_name`', ${'user_name13_argument'})
,new UpdateExpression('`email_address`', ${'email_address14_argument'})
,new UpdateExpression('`homepage`', ${'homepage15_argument'})
,new UpdateExpression('`tags`', ${'tags16_argument'})
,new UpdateExpression('`extra_vars`', ${'extra_vars17_argument'})
,new UpdateExpression('`regdate`', ${'regdate18_argument'})
,new UpdateExpression('`last_update`', ${'last_update19_argument'})
,new UpdateExpression('`ipaddress`', ${'ipaddress20_argument'})
,new UpdateExpression('`list_order`', ${'list_order21_argument'})
,new UpdateExpression('`update_order`', ${'update_order22_argument'})
,new UpdateExpression('`allow_trackback`', ${'allow_trackback23_argument'})
,new UpdateExpression('`notify_message`', ${'notify_message24_argument'})
,new UpdateExpression('`status`', ${'status25_argument'})
,new UpdateExpression('`comment_status`', ${'commentStatus26_argument'})
));
$query->setTables(array(
new Table('`hme_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`document_srl`',$document_srl27_argument,"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>