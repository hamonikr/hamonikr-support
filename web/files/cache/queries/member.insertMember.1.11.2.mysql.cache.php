<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertMember");
$query->setAction("insert");
$query->setPriority("");

${'member_srl71_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl71_argument'}->checkFilter('number');
${'member_srl71_argument'}->checkNotNull();
if(!${'member_srl71_argument'}->isValid()) return ${'member_srl71_argument'}->getErrorMessage();
if(${'member_srl71_argument'} !== null) ${'member_srl71_argument'}->setColumnType('number');

${'user_id72_argument'} = new Argument('user_id', $args->{'user_id'});
${'user_id72_argument'}->checkFilter('userid');
${'user_id72_argument'}->checkNotNull();
if(!${'user_id72_argument'}->isValid()) return ${'user_id72_argument'}->getErrorMessage();
if(${'user_id72_argument'} !== null) ${'user_id72_argument'}->setColumnType('varchar');

${'email_address73_argument'} = new Argument('email_address', $args->{'email_address'});
${'email_address73_argument'}->checkFilter('email');
${'email_address73_argument'}->checkNotNull();
if(!${'email_address73_argument'}->isValid()) return ${'email_address73_argument'}->getErrorMessage();
if(${'email_address73_argument'} !== null) ${'email_address73_argument'}->setColumnType('varchar');

${'password74_argument'} = new Argument('password', $args->{'password'});
${'password74_argument'}->checkNotNull();
if(!${'password74_argument'}->isValid()) return ${'password74_argument'}->getErrorMessage();
if(${'password74_argument'} !== null) ${'password74_argument'}->setColumnType('varchar');

${'email_id75_argument'} = new Argument('email_id', $args->{'email_id'});
${'email_id75_argument'}->checkNotNull();
if(!${'email_id75_argument'}->isValid()) return ${'email_id75_argument'}->getErrorMessage();
if(${'email_id75_argument'} !== null) ${'email_id75_argument'}->setColumnType('varchar');

${'email_host76_argument'} = new Argument('email_host', $args->{'email_host'});
${'email_host76_argument'}->checkNotNull();
if(!${'email_host76_argument'}->isValid()) return ${'email_host76_argument'}->getErrorMessage();
if(${'email_host76_argument'} !== null) ${'email_host76_argument'}->setColumnType('varchar');

${'user_name77_argument'} = new Argument('user_name', $args->{'user_name'});
${'user_name77_argument'}->checkNotNull();
if(!${'user_name77_argument'}->isValid()) return ${'user_name77_argument'}->getErrorMessage();
if(${'user_name77_argument'} !== null) ${'user_name77_argument'}->setColumnType('varchar');

${'nick_name78_argument'} = new Argument('nick_name', $args->{'nick_name'});
${'nick_name78_argument'}->checkNotNull();
if(!${'nick_name78_argument'}->isValid()) return ${'nick_name78_argument'}->getErrorMessage();
if(${'nick_name78_argument'} !== null) ${'nick_name78_argument'}->setColumnType('varchar');
if(isset($args->find_account_question)) {
${'find_account_question79_argument'} = new Argument('find_account_question', $args->{'find_account_question'});
if(!${'find_account_question79_argument'}->isValid()) return ${'find_account_question79_argument'}->getErrorMessage();
} else
${'find_account_question79_argument'} = NULL;if(${'find_account_question79_argument'} !== null) ${'find_account_question79_argument'}->setColumnType('number');
if(isset($args->find_account_answer)) {
${'find_account_answer80_argument'} = new Argument('find_account_answer', $args->{'find_account_answer'});
if(!${'find_account_answer80_argument'}->isValid()) return ${'find_account_answer80_argument'}->getErrorMessage();
} else
${'find_account_answer80_argument'} = NULL;if(${'find_account_answer80_argument'} !== null) ${'find_account_answer80_argument'}->setColumnType('varchar');
if(isset($args->homepage)) {
${'homepage81_argument'} = new Argument('homepage', $args->{'homepage'});
if(!${'homepage81_argument'}->isValid()) return ${'homepage81_argument'}->getErrorMessage();
} else
${'homepage81_argument'} = NULL;if(${'homepage81_argument'} !== null) ${'homepage81_argument'}->setColumnType('varchar');
if(isset($args->blog)) {
${'blog82_argument'} = new Argument('blog', $args->{'blog'});
if(!${'blog82_argument'}->isValid()) return ${'blog82_argument'}->getErrorMessage();
} else
${'blog82_argument'} = NULL;if(${'blog82_argument'} !== null) ${'blog82_argument'}->setColumnType('varchar');
if(isset($args->birthday)) {
${'birthday83_argument'} = new Argument('birthday', $args->{'birthday'});
if(!${'birthday83_argument'}->isValid()) return ${'birthday83_argument'}->getErrorMessage();
} else
${'birthday83_argument'} = NULL;if(${'birthday83_argument'} !== null) ${'birthday83_argument'}->setColumnType('char');

${'allow_mailing84_argument'} = new Argument('allow_mailing', $args->{'allow_mailing'});
${'allow_mailing84_argument'}->ensureDefaultValue('Y');
if(!${'allow_mailing84_argument'}->isValid()) return ${'allow_mailing84_argument'}->getErrorMessage();
if(${'allow_mailing84_argument'} !== null) ${'allow_mailing84_argument'}->setColumnType('char');

${'allow_message85_argument'} = new Argument('allow_message', $args->{'allow_message'});
${'allow_message85_argument'}->ensureDefaultValue('Y');
if(!${'allow_message85_argument'}->isValid()) return ${'allow_message85_argument'}->getErrorMessage();
if(${'allow_message85_argument'} !== null) ${'allow_message85_argument'}->setColumnType('char');

${'denied86_argument'} = new Argument('denied', $args->{'denied'});
${'denied86_argument'}->ensureDefaultValue('N');
if(!${'denied86_argument'}->isValid()) return ${'denied86_argument'}->getErrorMessage();
if(${'denied86_argument'} !== null) ${'denied86_argument'}->setColumnType('char');
if(isset($args->limit_date)) {
${'limit_date87_argument'} = new Argument('limit_date', $args->{'limit_date'});
if(!${'limit_date87_argument'}->isValid()) return ${'limit_date87_argument'}->getErrorMessage();
} else
${'limit_date87_argument'} = NULL;if(${'limit_date87_argument'} !== null) ${'limit_date87_argument'}->setColumnType('date');

${'regdate88_argument'} = new Argument('regdate', $args->{'regdate'});
${'regdate88_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'regdate88_argument'}->isValid()) return ${'regdate88_argument'}->getErrorMessage();
if(${'regdate88_argument'} !== null) ${'regdate88_argument'}->setColumnType('date');

${'change_password_date89_argument'} = new Argument('change_password_date', $args->{'change_password_date'});
${'change_password_date89_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'change_password_date89_argument'}->isValid()) return ${'change_password_date89_argument'}->getErrorMessage();
if(${'change_password_date89_argument'} !== null) ${'change_password_date89_argument'}->setColumnType('date');

${'last_login90_argument'} = new Argument('last_login', $args->{'last_login'});
${'last_login90_argument'}->ensureDefaultValue(date("YmdHis"));
if(!${'last_login90_argument'}->isValid()) return ${'last_login90_argument'}->getErrorMessage();
if(${'last_login90_argument'} !== null) ${'last_login90_argument'}->setColumnType('date');

${'is_admin91_argument'} = new Argument('is_admin', $args->{'is_admin'});
${'is_admin91_argument'}->ensureDefaultValue('N');
if(!${'is_admin91_argument'}->isValid()) return ${'is_admin91_argument'}->getErrorMessage();
if(${'is_admin91_argument'} !== null) ${'is_admin91_argument'}->setColumnType('char');
if(isset($args->description)) {
${'description92_argument'} = new Argument('description', $args->{'description'});
if(!${'description92_argument'}->isValid()) return ${'description92_argument'}->getErrorMessage();
} else
${'description92_argument'} = NULL;if(${'description92_argument'} !== null) ${'description92_argument'}->setColumnType('text');
if(isset($args->extra_vars)) {
${'extra_vars93_argument'} = new Argument('extra_vars', $args->{'extra_vars'});
if(!${'extra_vars93_argument'}->isValid()) return ${'extra_vars93_argument'}->getErrorMessage();
} else
${'extra_vars93_argument'} = NULL;if(${'extra_vars93_argument'} !== null) ${'extra_vars93_argument'}->setColumnType('text');
if(isset($args->list_order)) {
${'list_order94_argument'} = new Argument('list_order', $args->{'list_order'});
if(!${'list_order94_argument'}->isValid()) return ${'list_order94_argument'}->getErrorMessage();
} else
${'list_order94_argument'} = NULL;if(${'list_order94_argument'} !== null) ${'list_order94_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`member_srl`', ${'member_srl71_argument'})
,new InsertExpression('`user_id`', ${'user_id72_argument'})
,new InsertExpression('`email_address`', ${'email_address73_argument'})
,new InsertExpression('`password`', ${'password74_argument'})
,new InsertExpression('`email_id`', ${'email_id75_argument'})
,new InsertExpression('`email_host`', ${'email_host76_argument'})
,new InsertExpression('`user_name`', ${'user_name77_argument'})
,new InsertExpression('`nick_name`', ${'nick_name78_argument'})
,new InsertExpression('`find_account_question`', ${'find_account_question79_argument'})
,new InsertExpression('`find_account_answer`', ${'find_account_answer80_argument'})
,new InsertExpression('`homepage`', ${'homepage81_argument'})
,new InsertExpression('`blog`', ${'blog82_argument'})
,new InsertExpression('`birthday`', ${'birthday83_argument'})
,new InsertExpression('`allow_mailing`', ${'allow_mailing84_argument'})
,new InsertExpression('`allow_message`', ${'allow_message85_argument'})
,new InsertExpression('`denied`', ${'denied86_argument'})
,new InsertExpression('`limit_date`', ${'limit_date87_argument'})
,new InsertExpression('`regdate`', ${'regdate88_argument'})
,new InsertExpression('`change_password_date`', ${'change_password_date89_argument'})
,new InsertExpression('`last_login`', ${'last_login90_argument'})
,new InsertExpression('`is_admin`', ${'is_admin91_argument'})
,new InsertExpression('`description`', ${'description92_argument'})
,new InsertExpression('`extra_vars`', ${'extra_vars93_argument'})
,new InsertExpression('`list_order`', ${'list_order94_argument'})
));
$query->setTables(array(
new Table('`hme_member`', '`member`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>