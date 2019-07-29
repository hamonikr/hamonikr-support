<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_header.html') ?>
<h1><?php echo $__Context->lang->member_info ?></h1>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/skins/default/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<dl class="dl-horizontal">
	<?php if($__Context->displayDatas&&count($__Context->displayDatas))foreach($__Context->displayDatas as $__Context->item){ ?>
		<dt><?php if($__Context->item->required || $__Context->item->mustRequired){ ?><em>*</em><?php } ?> <?php echo $__Context->item->title ?></dt>
		<?php if($__Context->item->value){ ?><dd><?php echo $__Context->item->value ?></dd><?php } ?>
		<?php if(!$__Context->item->value){ ?><dd style="color:#ccc">&hellip;</dd><?php } ?>
	<?php } ?>
	<dt><?php echo $__Context->lang->member_group ?></dt>
	<dd><?php echo implode(', ', $__Context->memberInfo['group_list']) ?></dd>
	<dt><?php echo $__Context->lang->signup_date ?></dt>
	<dd><?php echo zdate($__Context->memberInfo[regdate],"Y-m-d") ?></dd>
	<?php if($__Context->memberInfo[member_srl] == $__Context->logged_info->member_srl || $__Context->logged_info->is_admin == 'Y'){ ?>
		<dt><?php echo $__Context->lang->last_login ?></dt>
		<dd><?php echo zdate($__Context->memberInfo[last_login],"Y-m-d") ?></dd>
	<?php } ?>
</dl>
<?php if($__Context->memberInfo['member_srl'] == $__Context->logged_info->member_srl){ ?><div class="btnArea btn-group">
	<?php if($__Context->member_config->identifier == 'email_address'){ ?><a href="<?php echo getUrl('act', 'dispMemberModifyEmailAddress') ?>" class="btn"><?php echo $__Context->lang->cmd_modify_member_email_address ?></a><?php } ?>
	<a href="<?php echo getUrl('act','dispMemberModifyInfo','member_srl','') ?>" class="btn"><?php echo $__Context->lang->cmd_modify_member_info ?></a>
	<a href="<?php echo getUrl('act','dispMemberModifyPassword','member_srl','') ?>" class="btn"><?php echo $__Context->lang->cmd_modify_member_password ?></a>
	<a href="<?php echo getUrl('act','dispMemberLeave','member_srl','') ?>" class="btn"><?php echo $__Context->lang->cmd_leave ?></a>
</div><?php } ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_footer.html') ?>
