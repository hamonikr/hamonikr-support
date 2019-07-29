<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1><?php echo $__Context->lang->cmd_member_config ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_member_config" target="_blank"><?php echo $__Context->lang->help ?></a></h1>
</div>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/tpl/1'){ ?><div class="message <?php echo escape($__Context->XE_VALIDATOR_MESSAGE_TYPE, false) ?>">
	<p><?php echo escape($__Context->XE_VALIDATOR_MESSAGE, false) ?></p>
</div><?php } ?>
<ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act == 'dispMemberAdminConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispMemberAdminConfig'), false) ?>"><?php echo $__Context->lang->member_default_info ?></a></li>
	<li id="signupTab"<?php if($__Context->act == 'dispMemberAdminSignUpConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispMemberAdminSignUpConfig'), false) ?>"><?php echo $__Context->lang->cmd_signup ?></a></li>
	<li<?php if($__Context->act == 'dispMemberAdminLoginConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispMemberAdminLoginConfig'), false) ?>"><?php echo $__Context->lang->cmd_login ?></a></li>
	<li<?php if($__Context->act == 'dispMemberAdminDesignConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispMemberAdminDesignConfig'), false) ?>"><?php echo $__Context->lang->cmd_set_design_info ?></a></li>
</ul>
<?php if($__Context->act === 'dispMemberAdminSignUpConfig' && $__Context->config->enable_join !== 'Y'){ ?>
	<div class="x_msg-warn message error">
		<p><?php echo $__Context->lang->warn_member_setting ?></p>
	</div>
<?php } ?>
