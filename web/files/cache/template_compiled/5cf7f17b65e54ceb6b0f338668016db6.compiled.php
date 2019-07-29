<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/tpl','header.html') ?>
<?php Context::addJsFile("modules/member/ruleset/insertLoginConfig.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" class="x_form-horizontal"  method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertLoginConfig" />
	<input type="hidden" name="module" value="member" />
	<input type="hidden" name="act" value="procMemberAdminInsertLoginConfig" />
	<input type="hidden" name="success_return_url" value="<?php echo escape(getUrl('', 'module', 'admin', 'act', $__Context->act), false) ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/member/tpl/1" />
	<div class="x_control-group">
		<label class="x_control-label" for="change_password_date"><?php echo $__Context->lang->change_password_date ?></label>
		<div class="x_controls">
			<input type="number" min="0" id="change_password_date" name="change_password_date" value="<?php echo escape($__Context->config->change_password_date, false) ?>" /> <?php echo $__Context->lang->unit_day ?>
			<p class="x_help-inline"><?php echo $__Context->lang->about_change_password_date ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<p class="x_control-label"><?php echo $__Context->lang->enable_login_fail_report ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_faq_defence_login_limit" target="_blank"><?php echo $__Context->lang->help ?></a></p>
		<div class="x_controls">
			<label class="x_inline" for="enable_login_fail_report_yes"><input type="radio" name="enable_login_fail_report" id="enable_login_fail_report_yes" value="Y"<?php if($__Context->config->enable_login_fail_report != 'N'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_yes ?></label>
			<label class="x_inline" for="enable_login_fail_report_no"><input type="radio" name="enable_login_fail_report" id="enable_login_fail_report_no" value="N"<?php if($__Context->config->enable_login_fail_report == 'N'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_no ?></label>
		</div>
	</div>
	<div class="x_control-group _limit" style="display:none">
		<label class="x_control-label" for="max_error_count"><?php echo $__Context->lang->login_trial_limit1 ?></label>
		<div class="x_controls">
			<input type="number" min="0" id="max_error_count" name="max_error_count" value="<?php echo escape($__Context->config->max_error_count, false) ?>" /> <?php echo $__Context->lang->unit_count ?>
			<p class="x_help-block"><?php echo $__Context->lang->about_login_trial_limit1 ?></p>
		</div>
	</div>
	<div class="x_control-group _limit" style="display:none">
		<label class="x_control-label" for="max_error_count_time"><?php echo $__Context->lang->login_trial_limit2 ?></label>
		<div class="x_controls">
			<input type="number" min="0" id="max_error_count_time" name="max_error_count_time" value="<?php echo escape($__Context->config->max_error_count_time, false) ?>" /> <?php echo $__Context->lang->unit_sec ?>
			<p class="x_help-block"><?php echo $__Context->lang->about_login_trial_limit2 ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="after_login_url"><?php echo $__Context->lang->after_login_url ?></label>
		<div class="x_controls">
			<input type="url" id="after_login_url" name="after_login_url" value="<?php echo escape($__Context->config->after_login_url, false) ?>" />
			<p class="x_help-inline"><?php echo $__Context->lang->about_after_login_url ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="after_logout_url"><?php echo $__Context->lang->after_logout_url ?></label>
		<div class="x_controls">
			<input type="url" id="after_logout_url" name="after_logout_url" value="<?php echo escape($__Context->config->after_logout_url, false) ?>" />
			<p class="x_help-inline"><?php echo $__Context->lang->about_after_logout_url ?></p>
		</div>
	</div>
	<div class="x_clearfix btnArea">
		<span class="x_pull-right"><input class="x_btn x_btn-primary" type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
	</div>
</form>
<script>
jQuery(function($){
	$('input[name="enable_login_fail_report"]').change(function(){
		var $limit = $(this).closest('.x_control-group').siblings('._limit');
		if($('#enable_login_fail_report_yes').is(':checked')){
			$limit.show();
		} else {
			$limit.hide();
		}
	}).change();
});
</script>
