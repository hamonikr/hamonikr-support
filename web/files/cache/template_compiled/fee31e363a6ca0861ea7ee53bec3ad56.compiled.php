<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/tpl','header.html') ?>
<!--#Meta:modules/member/tpl/js/default_config.js--><?php $__tmp=array('modules/member/tpl/js/default_config.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php Context::addJsFile("modules/member/ruleset/insertDefaultConfig.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" class="x_form-horizontal"  method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertDefaultConfig" />
	<input type="hidden" name="module" value="member" />
	<input type="hidden" name="act" value="procMemberAdminInsertDefaultConfig" />
	<input type="hidden" name="success_return_url" value="<?php echo escape(getUrl('', 'module', 'admin', 'act', $__Context->act), false) ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/member/tpl/1" />
	<div class="x_control-group">
		<div class="x_control-label"><?php echo $__Context->lang->enable_join ?></div>
		<div class="x_controls">
			<label class="x_inline" for="enable_join_yes"><input type="radio" name="enable_join" id="enable_join_yes" value="Y"<?php if($__Context->config->enable_join == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_yes ?></label>
			<label class="x_inline" for="enable_join_no"><input type="radio" name="enable_join" id="enable_join_no" value="N"<?php if($__Context->config->enable_join != 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_no ?></label>
		</div>
	</div>
	<div class="x_control-group">
		<div class="x_control-label"><?php echo $__Context->lang->enable_confirm ?></div>
		<div class="x_controls">
			<label class="x_inline" for="enable_confirm_yes"><input type="radio" name="enable_confirm" id="enable_confirm_yes" value="Y"<?php if($__Context->config->enable_confirm == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_yes ?></label>
			<label class="x_inline" for="enable_confirm_no"><input type="radio" name="enable_confirm" id="enable_confirm_no" value="N"<?php if($__Context->config->enable_confirm != 'Y'){ ?> checked="checked"<?php } ?>/> <?php echo $__Context->lang->cmd_no ?></label>
			<p class="x_help-block"><?php echo $__Context->lang->about_enable_confirm ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<div class="x_control-label"><?php echo $__Context->lang->cmd_config_password_strength ?></div>
		<div class="x_controls">
			<label class="x_inline" for="password_strength1"><input type="radio" name="password_strength" id="password_strength1" value="low"<?php if($__Context->config->password_strength == 'low'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->password_strength_low ?>(<?php echo $__Context->lang->about_password_strength['low'] ?>)</label><br>
			<label class="x_inline" for="password_strength2"><input type="radio" name="password_strength" id="password_strength2" value="normal"<?php if(!$__Context->config->password_strength || $__Context->config->password_strength == 'normal'){ ?> checked="checked"<?php } ?>/> <?php echo $__Context->lang->password_strength_normal ?>(<?php echo $__Context->lang->about_password_strength['normal'] ?>)</label><br>
			<label class="x_inline" for="password_strength3"><input type="radio" name="password_strength" id="password_strength3" value="high"<?php if($__Context->config->password_strength == 'high'){ ?> checked="checked"<?php } ?>/> <?php echo $__Context->lang->password_strength_high ?>(<?php echo $__Context->lang->about_password_strength['high'] ?>)</label><br>
			<p class="x_help-block"><?php echo $__Context->lang->about_password_strength_config ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label"><?php echo $__Context->lang->cmd_password_hashing_algorithm ?></label>
		<div class="x_controls">
			<select name="password_hashing_algorithm" id="password_hashing_algorithm" style="width:auto">
				<?php if($__Context->password_hashing_algos&&count($__Context->password_hashing_algos))foreach($__Context->password_hashing_algos as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->key, false) ?>"<?php if($__Context->config->password_hashing_algorithm==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val, false) ?></option><?php } ?>
			</select>
			<p class="x_help-block"><?php echo $__Context->lang->about_password_hashing_algorithm ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label"><?php echo $__Context->lang->cmd_password_hashing_work_factor ?></label>
		<div class="x_controls">
			<select name="password_hashing_work_factor" id="password_hashing_work_factor" style="width:auto">
				<?php for($__Context->i=4;$__Context->i<=16;$__Context->i++){ ?><option value="<?php echo escape($__Context->i, false) ?>"<?php if($__Context->config->password_hashing_work_factor==$__Context->i){ ?> selected="selected"<?php } ?>><?php echo escape(sprintf('%02d', $__Context->i), false) ?></option><?php } ?>
			</select>
			<p class="x_help-block"><?php echo $__Context->lang->about_password_hashing_work_factor ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label"><?php echo $__Context->lang->cmd_password_hashing_auto_upgrade ?></label>
		<div class="x_controls">
			<label for="password_hashing_auto_upgrade_y" class="x_inline"><input type="radio" name="password_hashing_auto_upgrade" id="password_hashing_auto_upgrade_y" value="Y"<?php if($__Context->config->password_hashing_auto_upgrade == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_yes ?></label>
			<label for="password_hashing_auto_upgrade_n" class="x_inline"><input type="radio" name="password_hashing_auto_upgrade" id="password_hashing_auto_upgrade_n" value="N"<?php if($__Context->config->password_hashing_auto_upgrade != 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_no ?></label>
			<p class="x_help-block"><?php echo $__Context->lang->about_password_hashing_auto_upgrade ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="webmaster_name"><?php echo $__Context->lang->webmaster_name ?></label>
		<div class="x_controls">
			<input type="text" id="webmaster_name" name="webmaster_name" value="<?php echo escape($__Context->config->webmaster_name, false) ?>" size="20" />
			<p class="x_help-inline"><?php echo $__Context->lang->about_webmaster_name ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="webmaster_email"><?php echo $__Context->lang->webmaster_email ?></label>
		<div class="x_controls">
			<input type="email" id="webmaster_email" name="webmaster_email" value="<?php echo escape($__Context->config->webmaster_email, false) ?>" size="40" />
			<p class="x_help-inline"><?php echo $__Context->lang->about_webmaster_email ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="member_sync"><?php echo $__Context->lang->cmd_member_sync ?></label>
		<div class="x_controls">
			<input id="member_sync" type="button" value="<?php echo $__Context->lang->cmd_member_sync ?>" class="__sync x_btn x_btn-warning" />
			<p class="x_help-inline"><?php echo $__Context->lang->about_member_sync ?></p>
		</div>
	</div>
	<div class="btnArea x_clearfix">
		<span class="x_pull-right"><input class="x_btn x_btn-primary" type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
	</div>
</form>
