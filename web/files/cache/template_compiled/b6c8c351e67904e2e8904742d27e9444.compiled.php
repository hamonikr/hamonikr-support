<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nmileage/tpl','_header.html') ?>
<?php Context::addJsFile("modules/nmileage/ruleset/insertModInst.xml", FALSE, "", 0, "body", TRUE, "") ?><form class="x_form-horizontal" action="./" method="post" enctype="multipart/form-data" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertModInst" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="procNmileageAdminInsertModInst" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
	<input type="hidden" name="primary_key" value="<?php echo $__Context->module_info->module_srl ?>" />
	<section class="section">
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
				<select name="module_category_srl">
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
				<input type="text" name="browser_title" value="<?php echo htmlspecialchars($__Context->module_info->browser_title) ?>" id="browser_title" class="lang_code" />
				<a href="#browser_title_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
		    	<p id="browser_title_help" class="x_help-block" hidden><?php echo $__Context->lang->about_browser_title ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="layout_srl"><?php echo $__Context->lang->layout ?></label>
			<div class="x_controls">
				<select name="layout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->layout_srl==$__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<a href="#layout_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
		    	<p id="layout_srl_help" class="x_help-block" hidden><?php echo $__Context->lang->about_layout ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="skin"><?php echo $__Context->lang->skin ?></label>
			<div class="x_controls">
				<select name="skin">
					<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>" <?php if($__Context->module_info->skin==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#skin_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
		   		<p id="skin_help" class="x_help-block" hidden><?php echo $__Context->lang->about_skin ?></p>
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
		<button class="x_btn x_btn-primary" type="submit"><?php echo $__Context->lang->cmd_registration ?></button>
	</div>
</form>
