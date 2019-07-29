<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMember");
$query->setAction("insert");
$query->setPriority("");

${'member_srl1_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl1_argument'}->checkFilter('number');
${'member_srl1_argument'}->checkNotNull();
if(!${'member_srl1_argument'}->isValid()) return ${'member_srl1_argument'}->getErrorMessage();
if(${'member_srl1_argument'} !== null) ${'member_srl1_argument'}->setColumnType('number');

${'user_id2_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id2_argument'}->checkFilter('userid');
${'user_id2_argument'}->checkNotNull();
if(!${'user_id2_argument'}->isValid()) return ${'user_id2_argument'}->getErrorMessage();
if(${'user_id2_argument'} !== null) ${'user_id2_argument'}->setColumnType('varchar');

${'email_address3_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address3_argument'}->checkFilter('email');
${'email_address3_argument'}->checkNotNull();
if(!${'email_address3_argument'}->isValid()) return ${'email_address3_argument'}->getErrorMessage();
if(${'email_address3_argument'} !== null) ${'email_address3_argument'}->setColumnType('varchar');

${'password4_argument'} = new Argument('password', $args->{'password'});
${'password4_argument'}->checkNotNull();
if(!${'password4_argument'}->isValid()) return ${'password4_argument'}->getErrorMessage();
if(${'password4_argument'} !== null) ${'password4_argument'}->setColumnType('varchar');

${'email_id5_argument'} = new Argument('email_id', $args->{'email_id'});
${'email_id5_argument'}->checkNotNull();
if(!${'email_id5_argument'}->isValid()) return ${'email_id5_argument'}->getErrorMessage();
if(${'email_id5_argument'} !== null) ${'email_id5_argument'}->setColumnType('varchar');

${'email_host6_argument'} = new Argument('email_host', $args->{'email_host'});
${'email_host6_argument'}->checkNotNull();
if(!${'email_host6_argument'}->isValid()) return ${'email_host6_argument'}->getErrorMessage();
if(${'email_host6_argument'} !== null) ${'email_host6_argument'}->setColumnType('varchar');

${'user_name7_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name7_argument'}->checkNotNull();
if(!${'user_name7_argument'}->isValid()) return ${'user_name7_argument'}->getErrorMessage();
if(${'user_name7_argument'} !== null) ${'user_name7_argument'}->setColumnType('varchar');

${'nick_name8_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name8_argument'}->checkNotNull();
if(!${'nick_name8_argument'}->isValid()) return ${'nick_name8_argument'}->getErrorMessage();
if(${'nick_name8_argument'} !== null) ${'nick_name8_argument'}->setColumnType('varchar');
if(isset($args->find_account_question)) {
${'find_account_question9_argument'} = new Argument('find_account_question', $args->{'find_account_question'});
if(!${'find_account_question9_argument'}->isValid()) return ${'find_account_question9_argument'}->getErrorMessage();
} else
${'find_account_question9_argument'} = NULL;if(${'find_account_question9_argument'} !== null) ${'find_account_question9_argument'}->setColumnType('number');
if(isset($args->find_account_answer)) {
${'find_account_answer10_argument'} = new Argument('find_account_answer', $args->{'find_account_answer'});
if(!${'find_account_answer10_argument'}->isValid()) return ${'find_account_answer10_argument'}->getErrorMessage();
} else
${'find_account_answer10_argument'} = NULL;if(${'find_account_answer10_argument'} !== null) ${'find_account_answer10_argument'}->setColumnType('varchar');
if(isset($args->homepage)) {
${'homepage11_argument'} = new Argument('homepage', $args->{'homepage'});
if(!${'homepage11_argument'}->isValid()) return ${'homepage11_argument'}->getErrorMessage();
} else
${'homepage11_argument'} = NULL;if(${'homepage11_argument'} !== null) ${'homepage11_argument'}->setColumnType('varchar');
if(isset($args->blog)) {
${'blog12_argument'} = new Argument('blog', $args->{'blog'});
if(!${'blog12_argument'}->isValid()) return ${'blog12_argument'}->getErrorMessage();
} else
${'blog12_argument'} = NULL;if(${'blog12_argument'} !== null) ${'blog12_argument'}->setColumnType('varchar');
if(isset($args->birthday)) {
${'birthday13_argument'} = new Argument('birthday', $args->{'birthday'});
if(!${'birthday13_argument'}->isValid()) return ${'birthday13_argument'}->getErrorMessage();
} else
${'birthday13_argument'} = NULL;if(${'birthday13_argument'} !== null) ${'birthday13_argument'}->setColumnType('char');

${'allow_mailing14_argument'} = new Argument('allow_mailing', $args->{'allow_mailing'});
${'allow_mailing14_argument'}->ensureDefaultValue('Y');
if(!${'allow_mailing14_argument'}->isValid()) return ${'allow_mailing14_argument'}->getErrorMessage();
if(${'allow_mailing14_argument'} !== null) ${'allow_mailing14_argument'}->setColumnType('char');

${'allow_message15_argument'} = new Argument('allow_message', $args->{'allow_message'});
${'allow_message15_argument'}->ensureDefaultValue('Y');
if(!${'allow_message15_argument'}->isValid()) return ${'allow_message15_argument'}->getErrorMessage();
if(${'allow_message15_argument'} !== null) ${'allow_message15_argument'}->setColumnType('char');

${'denied16_argument'} = new Argument('denied', $args->{'denied'});
${'denied16_argument'}->ensureDefaultValue('N');
if(!${'denied16_argument'}->isValid()) return ${'denied16_argument'}->getErrorMessage();
if(${'denied16_argument'} !== null) ${'denied16_argument'}->setColumnType('char');
if(isset($args->limit_date)) {
${'limit_date17_argument'} = new Argument('limit_date', $args->{'limit_date'});
if(!${'limit_date17_argument'}->isValid()) return ${'limit_date17_argument'}->getErrorMessage();
} else
${'limit_date17_argument'} = NULL;if(${'limit_date17_argument'} !== null) ${'limit_date17_argument'}->setColumnType('date');

${'regdate18_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate18_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate18_argument'}->isValid()) return ${'regdate18_argument'}->getErrorMessage();
if(${'regdate18_argument'} !== null) ${'regdate18_argument'}->setColumnType('date');

${'change_password_date19_argument'} = new Argument('change_password_date', $args->{'change_password_date'});
${'change_password_date19_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'change_password_date19_argument'}->isValid()) return ${'change_password_date19_argument'}->getErrorMessage();
if(${'change_password_date19_argument'} !== null) ${'change_password_date19_argument'}->setColumnType('date');

${'last_login20_argument'} = new Argument('last_login', $args->{'last_login'});
${'last_login20_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_login20_argument'}->isValid()) return ${'last_login20_argument'}->getErrorMessage();
if(${'last_login20_argument'} !== null) ${'last_login20_argument'}->setColumnType('date');

${'is_admin21_argument'} = new Argument('is_admin', $args->{'is_admin'});
${'is_admin21_argument'}->ensureDefaultValue('N');
if(!${'is_admin21_argument'}->isValid()) return ${'is_admin21_argument'}->getErrorMessage();
if(${'is_admin21_argument'} !== null) ${'is_admin21_argument'}->setColumnType('char');
if(isset($args->description)) {
${'description22_argument'} = new Argument('description', $args->{'description'});
if(!${'description22_argument'}->isValid()) return ${'description22_argument'}->getErrorMessage();
} else
${'description22_argument'} = NULL;if(${'description22_argument'} !== null) ${'description22_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars23_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars23_argument'}->isValid()) return ${'extra_vars23_argument'}->getErrorMessage();
} else
${'extra_vars23_argument'} = NULL;if(${'extra_vars23_argument'} !== null) ${'extra_vars23_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order24_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order24_argument'}->isValid()) return ${'list_order24_argument'}->getErrorMessage();
} else
${'list_order24_argument'} = NULL;if(${'list_order24_argument'} !== null) ${'list_order24_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl1_argument'})
,new InsertExpression('`user_id`', ${'user_id2_argument'})
,new InsertExpression('`email_address`', ${'email_address3_argument'})
,new InsertExpression('`password`', ${'password4_argument'})
,new InsertExpression('`email_id`', ${'email_id5_argument'})
,new InsertExpression('`email_host`', ${'email_host6_argument'})
,new InsertExpression('`user_name`', ${'user_name7_argument'})
,new InsertExpression('`nick_name`', ${'nick_name8_argument'})
,new InsertExpression('`find_account_question`', ${'find_account_question9_argument'})
,new InsertExpression('`find_account_answer`', ${'find_account_answer10_argument'})
,new InsertExpression('`homepage`', ${'homepage11_argument'})
,new InsertExpression('`blog`', ${'blog12_argument'})
,new InsertExpression('`birthday`', ${'birthday13_argument'})
,new InsertExpression('`allow_mailing`', ${'allow_mailing14_argument'})
,new InsertExpression('`allow_message`', ${'allow_message15_argument'})
,new InsertExpression('`denied`', ${'denied16_argument'})
,new InsertExpression('`limit_date`', ${'limit_date17_argument'})
,new InsertExpression('`regdate`', ${'regdate18_argument'})
,new InsertExpression('`change_password_date`', ${'change_password_date19_argument'})
,new InsertExpression('`last_login`', ${'last_login20_argument'})
,new InsertExpression('`is_admin`', ${'is_admin21_argument'})
,new InsertExpression('`description`', ${'description22_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars23_argument'})
,new InsertExpression('`list_order`', ${'list_order24_argument'})
));
$query->setTables(array(
new Table('`hme_member`', '`member`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>