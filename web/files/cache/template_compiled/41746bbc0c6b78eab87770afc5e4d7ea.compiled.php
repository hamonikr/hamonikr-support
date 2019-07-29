<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/cashpay/tpl','_header.html') ?>
<?php Context::addJsFile("modules/cashpay/ruleset/insertModInst.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" class="x_form-horizontal" method="post"  enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertModInst" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="procCashpayAdminInsertModInst" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
	<input type="hidden" name="primary_key" value="<?php echo $__Context->module_info->module_srl ?>" />
	<input type="hidden" name="delivery_info" value="<?php echo htmlspecialchars($__Context->module_info->delivery_info) ?>" />
	<section class="section">
		<h1><?php echo $__Context->lang->basic_settings ?></h1>
		<div class="x_control-group">
			<label class="x_control-label" for="mid"><?php echo $__Context->lang->mid ?></label>
			<div class="x_controls">
				<input type="text" name="mid" id="mid" value="<?php echo $__Context->module_info->mid ?>" />
				<a href="#mid_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="mid_help" class="x_help-block" hidden><?php echo $__Context->lang->about_mid ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="module_category_srl"><?php echo $__Context->lang->module_category ?></label>
			<div class="x_controls">
				<select name="module_category_srl" id="module_category_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->module_category_srl==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#module_category_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="module_category_srl_help" class="x_help-block" hidden><?php echo $__Context->lang->about_module_category ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="browser_title"><?php echo $__Context->lang->browser_title ?></label>
			<div class="x_controls">
				<input type="text" name="browser_title" value="<?php echo htmlspecialchars($__Context->module_info->browser_title) ?>"  class="lang_code" id="browser_title" />
				<a href="#browser_title_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="browser_title_help" class="x_help-block" hidden><?php echo $__Context->lang->about_browser_title ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="layout_srl"><?php echo $__Context->lang->layout ?></label>
			<div class="x_controls">
				<select name="layout_srl" id="layout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->layout_srl == $__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<a href="#layout_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="layout_srl_help" class="x_help-block" hidden><?php echo $__Context->lang->about_layout ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="skin"><?php echo $__Context->lang->skin ?></label>
			<div class="x_controls">
				<select name="skin" id="skin">
					<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->skin==$__Context->key || (!$__Context->module_info->skin && $__Context->key=='xe_board')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#skin_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="skin_help" class="x_help-block" hidden><?php echo $__Context->lang->about_skin ?></p>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->basic_settings ?></h1>
		<div class="x_control-group">
			<label class="x_control-label" for="account_title"><?php echo $__Context->lang->account_title ?></label>
			<div class="x_controls">
				<input type="text" name="account_title" id="account_title" value="<?php echo $__Context->module_info->account_title ?>" />
				<a href="#account_title_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="account_title_help" class="x_help-block" hidden><?php echo $__Context->lang->about_account_title ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="bank_name"><?php echo $__Context->lang->bank_name ?></label>
			<div class="x_controls">
				<input type="text" name="bank_name" id="bank_name" value="<?php echo $__Context->module_info->bank_name ?>" />
				<a href="#bank_name_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="bank_name_help" class="x_help-block" hidden><?php echo $__Context->lang->about_bank_name ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="account_number"><?php echo $__Context->lang->account_number ?></label>
			<div class="x_controls">
				<input type="text" name="account_number" id="account_number" value="<?php echo $__Context->module_info->account_number ?>" />
				<a href="#account_number_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="account_number_help" class="x_help-block" hidden><?php echo $__Context->lang->about_account_number ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="account_holder"><?php echo $__Context->lang->account_holder ?></label>
			<div class="x_controls">
				<input type="text" name="account_holder" id="account_holder" value="<?php echo $__Context->module_info->account_holder ?>" />
				<a href="#account_holder_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="account_holder_help" class="x_help-block" hidden><?php echo $__Context->lang->about_account_holder ?></p>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->option_settings ?></h1>
		<div class="x_control-group">
			<label class="x_control-label" for="description"><?php echo $__Context->lang->payment_description ?></label>
			<div class="x_controls">
				<textarea name="description" id="description"><?php echo $__Context->module_info->description ?></textarea>
				<a href="#description_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="description_help" class="x_help-block" hidden><?php echo $__Context->lang->about_payment_description ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="guide_text"><?php echo $__Context->lang->guide_text ?></label>
			<div class="x_controls">
				<textarea name="guide_text" id="guide_text"><?php echo $__Context->module_info->guide_text ?></textarea>
				<a href="#guide_text_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="guide_text_help" class="x_help-block" hidden><?php echo $__Context->lang->about_guide_text ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="button_title"><?php echo $__Context->lang->button_title ?></label>
			<div class="x_controls">
				<input type="text" name="button_title" id="button_title" value="<?php echo $__Context->module_info->button_title ?>" />
				<a href="#button_title_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="button_title_help" class="x_help-block" hidden><?php echo $__Context->lang->about_button_title ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="login_required"><?php echo $__Context->lang->login_required ?></label>
			<div class="x_controls">
				<select name="login_required" id="login_required">
					<option value="N"<?php if($__Context->module_info->login_required=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->login_not_required ?></option>
					<option value="Y"<?php if($__Context->module_info->login_required=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->payment_after_login ?></option>
				</select>
				<a href="#login_required_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="login_required_help" class="x_help-block" hidden><?php echo $__Context->lang->about_login_required ?></p>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->mobile_settings ?></h1>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->mobile_view ?></label>
			<div class="x_controls">
				<label class="x_inline" for="use_mobile"><input type="checkbox" name="use_mobile" id="use_mobile" value="Y"<?php if($__Context->module_info->use_mobile == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->about_mobile_view ?></label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="mlayout_srl"><?php echo $__Context->lang->mobile_layout ?></label>
			<div class="x_controls">
				<select name="mlayout_srl" id="mlayout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->mlayout_list&&count($__Context->mlayout_list))foreach($__Context->mlayout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->mlayout_srl== $__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<a href="#mobile_layout_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="mobile_layout_help" class="x_help-block" hidden><?php echo $__Context->lang->about_layout ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="mskin"><?php echo $__Context->lang->mobile_skin ?></label>
			<div class="x_controls">
				<select name="mskin" id="mskin">
					<?php if($__Context->mskin_list&&count($__Context->mskin_list))foreach($__Context->mskin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->mskin== $__Context->key || (!$__Context->module_info->skin && $__Context->key=='default')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#mobile_skin_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="mobile_skin_help" class="x_help-block" hidden><?php echo $__Context->lang->about_skin ?></p>
			</div>
		</div>
	</section>
	<div class="x_clearfix btnArea">
		<input type="submit" class="x_btn x_btn-primary" value="<?php echo $__Context->lang->cmd_registration ?>" accesskey="s" />
	</div>
</form>
