<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getDocumentList");
$query->setAction("select");
$query->setPriority("");
if(isset($args->module_srl)) {
${'module_srl29_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'in');
${'module_srl29_argument'}->checkFilter('number');
${'module_srl29_argument'}->createConditionValue();
if(!${'module_srl29_argument'}->isValid()) return ${'module_srl29_argument'}->getErrorMessage();
} else
${'module_srl29_argument'} = NULL;if(${'module_srl29_argument'} !== null) ${'module_srl29_argument'}->setColumnType('number');
if(isset($args->exclude_module_srl)) {
${'exclude_module_srl30_argument'} = new ConditionArgument('exclude_module_srl', $args->exclude_module_srl, 'notin');
${'exclude_module_srl30_argument'}->checkFilter('number');
${'exclude_module_srl30_argument'}->createConditionValue();
if(!${'exclude_module_srl30_argument'}->isValid()) return ${'exclude_module_srl30_argument'}->getErrorMessage();
} else
${'exclude_module_srl30_argument'} = NULL;if(${'exclude_module_srl30_argument'} !== null) ${'exclude_module_srl30_argument'}->setColumnType('number');
if(isset($args->category_srl)) {
${'category_srl31_argument'} = new ConditionArgument('category_srl', $args->category_srl, 'in');
${'category_srl31_argument'}->createConditionValue();
if(!${'category_srl31_argument'}->isValid()) return ${'category_srl31_argument'}->getErrorMessage();
} else
${'category_srl31_argument'} = NULL;if(${'category_srl31_argument'} !== null) ${'category_srl31_argument'}->setColumnType('number');
if(isset($args->s_is_notice)) {
${'s_is_notice32_argument'} = new ConditionArgument('s_is_notice', $args->s_is_notice, 'equal');
${'s_is_notice32_argument'}->createConditionValue();
if(!${'s_is_notice32_argument'}->isValid()) return ${'s_is_notice32_argument'}->getErrorMessage();
} else
${'s_is_notice32_argument'} = NULL;if(${'s_is_notice32_argument'} !== null) ${'s_is_notice32_argument'}->setColumnType('char');
if(isset($args->member_srl)) {
${'member_srl33_argument'} = new ConditionArgument('member_srl', $args->member_srl, 'equal');
${'member_srl33_argument'}->checkFilter('number');
${'member_srl33_argument'}->createConditionValue();
if(!${'member_srl33_argument'}->isValid()) return ${'member_srl33_argument'}->getErrorMessage();
} else
${'member_srl33_argument'} = NULL;if(${'member_srl33_argument'} !== null) ${'member_srl33_argument'}->setColumnType('number');
if(isset($args->member_srls)) {
${'member_srls34_argument'} = new ConditionArgument('member_srls', $args->member_srls, 'in');
${'member_srls34_argument'}->checkFilter('number');
${'member_srls34_argument'}->createConditionValue();
if(!${'member_srls34_argument'}->isValid()) return ${'member_srls34_argument'}->getErrorMessage();
} else
${'member_srls34_argument'} = NULL;if(${'member_srls34_argument'} !== null) ${'member_srls34_argument'}->setColumnType('number');
if(isset($args->statusList)) {
${'statusList35_argument'} = new ConditionArgument('statusList', $args->statusList, 'in');
${'statusList35_argument'}->createConditionValue();
if(!${'statusList35_argument'}->isValid()) return ${'statusList35_argument'}->getErrorMessage();
} else
${'statusList35_argument'} = NULL;if(${'statusList35_argument'} !== null) ${'statusList35_argument'}->setColumnType('varchar');
if(isset($args->division)) {
${'division36_argument'} = new ConditionArgument('division', $args->division, 'more');
${'division36_argument'}->createConditionValue();
if(!${'division36_argument'}->isValid()) return ${'division36_argument'}->getErrorMessage();
} else
${'division36_argument'} = NULL;if(${'division36_argument'} !== null) ${'division36_argument'}->setColumnType('number');
if(isset($args->last_division)) {
${'last_division37_argument'} = new ConditionArgument('last_division', $args->last_division, 'below');
${'last_division37_argument'}->createConditionValue();
if(!${'last_division37_argument'}->isValid()) return ${'last_division37_argument'}->getErrorMessage();
} else
${'last_division37_argument'} = NULL;if(${'last_division37_argument'} !== null) ${'last_division37_argument'}->setColumnType('number');
if(isset($args->s_title)) {
${'s_title38_argument'} = new ConditionArgument('s_title', $args->s_title, 'like');
${'s_title38_argument'}->createConditionValue();
if(!${'s_title38_argument'}->isValid()) return ${'s_title38_argument'}->getErrorMessage();
} else
${'s_title38_argument'} = NULL;if(${'s_title38_argument'} !== null) ${'s_title38_argument'}->setColumnType('varchar');
if(isset($args->s_content)) {
${'s_content39_argument'} = new ConditionArgument('s_content', $args->s_content, 'like');
${'s_content39_argument'}->createConditionValue();
if(!${'s_content39_argument'}->isValid()) return ${'s_content39_argument'}->getErrorMessage();
} else
${'s_content39_argument'} = NULL;if(${'s_content39_argument'} !== null) ${'s_content39_argument'}->setColumnType('bigtext');
if(isset($args->s_user_name)) {
${'s_user_name40_argument'} = new ConditionArgument('s_user_name', $args->s_user_name, 'like');
${'s_user_name40_argument'}->createConditionValue();
if(!${'s_user_name40_argument'}->isValid()) return ${'s_user_name40_argument'}->getErrorMessage();
} else
${'s_user_name40_argument'} = NULL;if(${'s_user_name40_argument'} !== null) ${'s_user_name40_argument'}->setColumnType('varchar');
if(isset($args->s_user_id)) {
${'s_user_id41_argument'} = new ConditionArgument('s_user_id', $args->s_user_id, 'like');
${'s_user_id41_argument'}->createConditionValue();
if(!${'s_user_id41_argument'}->isValid()) return ${'s_user_id41_argument'}->getErrorMessage();
} else
${'s_user_id41_argument'} = NULL;if(${'s_user_id41_argument'} !== null) ${'s_user_id41_argument'}->setColumnType('varchar');
if(isset($args->s_nick_name)) {
${'s_nick_name42_argument'} = new ConditionArgument('s_nick_name', $args->s_nick_name, 'like');
${'s_nick_name42_argument'}->createConditionValue();
if(!${'s_nick_name42_argument'}->isValid()) return ${'s_nick_name42_argument'}->getErrorMessage();
} else
${'s_nick_name42_argument'} = NULL;if(${'s_nick_name42_argument'} !== null) ${'s_nick_name42_argument'}->setColumnType('varchar');
if(isset($args->s_email_address)) {
${'s_email_address43_argument'} = new ConditionArgument('s_email_address', $args->s_email_address, 'like');
${'s_email_address43_argument'}->createConditionValue();
if(!${'s_email_address43_argument'}->isValid()) return ${'s_email_address43_argument'}->getErrorMessage();
} else
${'s_email_address43_argument'} = NULL;if(${'s_email_address43_argument'} !== null) ${'s_email_address43_argument'}->setColumnType('varchar');
if(isset($args->s_homepage)) {
${'s_homepage44_argument'} = new ConditionArgument('s_homepage', $args->s_homepage, 'like');
${'s_homepage44_argument'}->createConditionValue();
if(!${'s_homepage44_argument'}->isValid()) return ${'s_homepage44_argument'}->getErrorMessage();
} else
${'s_homepage44_argument'} = NULL;if(${'s_homepage44_argument'} !== null) ${'s_homepage44_argument'}->setColumnType('varchar');
if(isset($args->s_tags)) {
${'s_tags45_argument'} = new ConditionArgument('s_tags', $args->s_tags, 'like');
${'s_tags45_argument'}->createConditionValue();
if(!${'s_tags45_argument'}->isValid()) return ${'s_tags45_argument'}->getErrorMessage();
} else
${'s_tags45_argument'} = NULL;if(${'s_tags45_argument'} !== null) ${'s_tags45_argument'}->setColumnType('text');
if(isset($args->s_member_srl)) {
${'s_member_srl46_argument'} = new ConditionArgument('s_member_srl', $args->s_member_srl, 'equal');
${'s_member_srl46_argument'}->createConditionValue();
if(!${'s_member_srl46_argument'}->isValid()) return ${'s_member_srl46_argument'}->getErrorMessage();
} else
${'s_member_srl46_argument'} = NULL;if(${'s_member_srl46_argument'} !== null) ${'s_member_srl46_argument'}->setColumnType('number');
if(isset($args->s_member_srls)) {
${'s_member_srls47_argument'} = new ConditionArgument('s_member_srls', $args->s_member_srls, 'in');
${'s_member_srls47_argument'}->createConditionValue();
if(!${'s_member_srls47_argument'}->isValid()) return ${'s_member_srls47_argument'}->getErrorMessage();
} else
${'s_member_srls47_argument'} = NULL;if(${'s_member_srls47_argument'} !== null) ${'s_member_srls47_argument'}->setColumnType('number');
if(isset($args->s_readed_count)) {
${'s_readed_count48_argument'} = new ConditionArgument('s_readed_count', $args->s_readed_count, 'more');
${'s_readed_count48_argument'}->createConditionValue();
if(!${'s_readed_count48_argument'}->isValid()) return ${'s_readed_count48_argument'}->getErrorMessage();
} else
${'s_readed_count48_argument'} = NULL;if(${'s_readed_count48_argument'} !== null) ${'s_readed_count48_argument'}->setColumnType('number');
if(isset($args->s_voted_count)) {
${'s_voted_count49_argument'} = new ConditionArgument('s_voted_count', $args->s_voted_count, 'more');
${'s_voted_count49_argument'}->createConditionValue();
if(!${'s_voted_count49_argument'}->isValid()) return ${'s_voted_count49_argument'}->getErrorMessage();
} else
${'s_voted_count49_argument'} = NULL;if(${'s_voted_count49_argument'} !== null) ${'s_voted_count49_argument'}->setColumnType('number');
if(isset($args->s_blamed_count)) {
${'s_blamed_count50_argument'} = new ConditionArgument('s_blamed_count', $args->s_blamed_count, 'less');
${'s_blamed_count50_argument'}->createConditionValue();
if(!${'s_blamed_count50_argument'}->isValid()) return ${'s_blamed_count50_argument'}->getErrorMessage();
} else
${'s_blamed_count50_argument'} = NULL;if(${'s_blamed_count50_argument'} !== null) ${'s_blamed_count50_argument'}->setColumnType('number');
if(isset($args->s_comment_count)) {
${'s_comment_count51_argument'} = new ConditionArgument('s_comment_count', $args->s_comment_count, 'more');
${'s_comment_count51_argument'}->createConditionValue();
if(!${'s_comment_count51_argument'}->isValid()) return ${'s_comment_count51_argument'}->getErrorMessage();
} else
${'s_comment_count51_argument'} = NULL;if(${'s_comment_count51_argument'} !== null) ${'s_comment_count51_argument'}->setColumnType('number');
if(isset($args->s_trackback_count)) {
${'s_trackback_count52_argument'} = new ConditionArgument('s_trackback_count', $args->s_trackback_count, 'more');
${'s_trackback_count52_argument'}->createConditionValue();
if(!${'s_trackback_count52_argument'}->isValid()) return ${'s_trackback_count52_argument'}->getErrorMessage();
} else
${'s_trackback_count52_argument'} = NULL;if(${'s_trackback_count52_argument'} !== null) ${'s_trackback_count52_argument'}->setColumnType('number');
if(isset($args->s_uploaded_count)) {
${'s_uploaded_count53_argument'} = new ConditionArgument('s_uploaded_count', $args->s_uploaded_count, 'more');
${'s_uploaded_count53_argument'}->createConditionValue();
if(!${'s_uploaded_count53_argument'}->isValid()) return ${'s_uploaded_count53_argument'}->getErrorMessage();
} else
${'s_uploaded_count53_argument'} = NULL;if(${'s_uploaded_count53_argument'} !== null) ${'s_uploaded_count53_argument'}->setColumnType('number');
if(isset($args->s_regdate)) {
${'s_regdate54_argument'} = new ConditionArgument('s_regdate', $args->s_regdate, 'like_prefix');
${'s_regdate54_argument'}->createConditionValue();
if(!${'s_regdate54_argument'}->isValid()) return ${'s_regdate54_argument'}->getErrorMessage();
} else
${'s_regdate54_argument'} = NULL;if(${'s_regdate54_argument'} !== null) ${'s_regdate54_argument'}->setColumnType('date');
if(isset($args->s_last_update)) {
${'s_last_update55_argument'} = new ConditionArgument('s_last_update', $args->s_last_update, 'like_prefix');
${'s_last_update55_argument'}->createConditionValue();
if(!${'s_last_update55_argument'}->isValid()) return ${'s_last_update55_argument'}->getErrorMessage();
} else
${'s_last_update55_argument'} = NULL;if(${'s_last_update55_argument'} !== null) ${'s_last_update55_argument'}->setColumnType('date');
if(isset($args->s_ipaddress)) {
${'s_ipaddress56_argument'} = new ConditionArgument('s_ipaddress', $args->s_ipaddress, 'like_prefix');
${'s_ipaddress56_argument'}->createConditionValue();
if(!${'s_ipaddress56_argument'}->isValid()) return ${'s_ipaddress56_argument'}->getErrorMessage();
} else
${'s_ipaddress56_argument'} = NULL;if(${'s_ipaddress56_argument'} !== null) ${'s_ipaddress56_argument'}->setColumnType('varchar');
if(isset($args->start_date)) {
${'start_date57_argument'} = new ConditionArgument('start_date', $args->start_date, 'more');
${'start_date57_argument'}->createConditionValue();
if(!${'start_date57_argument'}->isValid()) return ${'start_date57_argument'}->getErrorMessage();
} else
${'start_date57_argument'} = NULL;if(${'start_date57_argument'} !== null) ${'start_date57_argument'}->setColumnType('date');
if(isset($args->end_date)) {
${'end_date58_argument'} = new ConditionArgument('end_date', $args->end_date, 'less');
${'end_date58_argument'}->createConditionValue();
if(!${'end_date58_argument'}->isValid()) return ${'end_date58_argument'}->getErrorMessage();
} else
${'end_date58_argument'} = NULL;if(${'end_date58_argument'} !== null) ${'end_date58_argument'}->setColumnType('date');

${'page61_argument'} = new Argument('page', $args->{'page'});
${'page61_argument'}->ensureDefaultValue('1');
if(!${'page61_argument'}->isValid()) return ${'page61_argument'}->getErrorMessage();

${'page_count62_argument'} = new Argument('page_count', $args->{'page_count'});
${'page_count62_argument'}->ensureDefaultValue('10');
if(!${'page_count62_argument'}->isValid()) return ${'page_count62_argument'}->getErrorMessage();

${'list_count63_argument'} = new Argument('list_count', $args->{'list_count'});
${'list_count63_argument'}->ensureDefaultValue('20');
if(!${'list_count63_argument'}->isValid()) return ${'list_count63_argument'}->getErrorMessage();

${'sort_index59_argument'} = new Argument('sort_index', $args->{'sort_index'});
${'sort_index59_argument'}->ensureDefaultValue('list_order');
if(!${'sort_index59_argument'}->isValid()) return ${'sort_index59_argument'}->getErrorMessage();

${'order_type60_argument'} = new SortArgument('order_type60', $args->order_type);
${'order_type60_argument'}->ensureDefaultValue('asc');
if(!${'order_type60_argument'}->isValid()) return ${'order_type60_argument'}->getErrorMessage();

$query->setColumns(array(
new StarExpression()
));
$query->setTables(array(
new Table('`hme_documents`', '`documents`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module_srl`',$module_srl29_argument,"in")
,new ConditionWithArgument('`module_srl`',$exclude_module_srl30_argument,"notin", 'and')
,new ConditionWithArgument('`category_srl`',$category_srl31_argument,"in", 'and')
,new ConditionWithArgument('`is_notice`',$s_is_notice32_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srl33_argument,"equal", 'and')
,new ConditionWithArgument('`member_srl`',$member_srls34_argument,"in", 'and')
,new ConditionWithArgument('`status`',$statusList35_argument,"in", 'and')))
,new ConditionGroup(array(
new ConditionWithArgument('`list_order`',$division36_argument,"more", 'and')
,new ConditionWithArgument('`list_order`',$last_division37_argument,"below", 'and')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`title`',$s_title38_argument,"like")
,new ConditionWithArgument('`content`',$s_content39_argument,"like", 'or')
,new ConditionWithArgument('`user_name`',$s_user_name40_argument,"like", 'or')
,new ConditionWithArgument('`user_id`',$s_user_id41_argument,"like", 'or')
,new ConditionWithArgument('`nick_name`',$s_nick_name42_argument,"like", 'or')
,new ConditionWithArgument('`email_address`',$s_email_address43_argument,"like", 'or')
,new ConditionWithArgument('`homepage`',$s_homepage44_argument,"like", 'or')
,new ConditionWithArgument('`tags`',$s_tags45_argument,"like", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srl46_argument,"equal", 'or')
,new ConditionWithArgument('`member_srl`',$s_member_srls47_argument,"in", 'or')
,new ConditionWithArgument('`readed_count`',$s_readed_count48_argument,"more", 'or')
,new ConditionWithArgument('`voted_count`',$s_voted_count49_argument,"more", 'or')
,new ConditionWithArgument('`blamed_count`',$s_blamed_count50_argument,"less", 'or')
,new ConditionWithArgument('`comment_count`',$s_comment_count51_argument,"more", 'or')
,new ConditionWithArgument('`trackback_count`',$s_trackback_count52_argument,"more", 'or')
,new ConditionWithArgument('`uploaded_count`',$s_uploaded_count53_argument,"more", 'or')
,new ConditionWithArgument('`regdate`',$s_regdate54_argument,"like_prefix", 'or')
,new ConditionWithArgument('`last_update`',$s_last_update55_argument,"like_prefix", 'or')
,new ConditionWithArgument('`ipaddress`',$s_ipaddress56_argument,"like_prefix", 'or')),'and')
,new ConditionGroup(array(
new ConditionWithArgument('`last_update`',$start_date57_argument,"more", 'and')
,new ConditionWithArgument('`last_update`',$end_date58_argument,"less", 'and')),'and')
));
$query->setGroups(array());
$query->setOrder(array(
new OrderByColumn(${'sort_index59_argument'}, $order_type60_argument)
));
$query->setLimit(new Limit(${'list_count63_argument'}, ${'page61_argument'}, ${'page_count62_argument'}));
return $query; ?>