<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/tpl','header.html') ?>
<!--#Meta:modules/member/tpl/js/design_config.js--><?php $__tmp=array('modules/member/tpl/js/design_config.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<form action="./" class="x_form-horizontal" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="member" />
	<input type="hidden" name="act" value="procMemberAdminInsertDesignConfig" />
	<input type="hidden" name="success_return_url" value="<?php echo escape(getUrl('', 'module', 'admin', 'act', $__Context->act), false) ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/member/tpl/1" />
	<div class="x_control-group">
		<label class="x_control-label" for="layout"><?php echo $__Context->lang->layout ?> <a data-admin-toggle="#help_menuName" class="x_icon-question-sign" href="./admin/help/index.html#UMAN_layout" target="_blank"><?php echo $__Context->lang->help ?></a></label>
		<div class="x_controls">
			<select id="layout" name="layout_srl">
				<option value="0"><?php echo $__Context->lang->notuse ?></option>
				<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->val->layout_srl, false) ?>"<?php if($__Context->val->layout_srl == $__Context->config->layout_srl){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val->title, false) ?> (<?php echo escape($__Context->val->layout, false) ?>)</option><?php } ?>
			</select>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="skin"><?php echo $__Context->lang->skin ?> <a data-admin-toggle="#help_menuName" class="x_icon-question-sign" href="./admin/help/index.html#UMAN_skin" target="_blank"><?php echo $__Context->lang->help ?></a></label>
		<div class="x_controls">
			<select id="skin" name="skin" onchange="doGetSkinColorset(this.options[this.selectedIndex].value)">
				<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->key, false) ?>"<?php if($__Context->config->skin==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val->title, false) ?> (<?php echo escape($__Context->key, false) ?>)</option><?php } ?>
			</select>
		</div>
	</div>
	<div id="colorset" class="x_control-group"<?php if(!$__Context->config->colorset){ ?> style="display:none"<?php } ?>>
		<label class="x_control-label" for="member_colorset"><?php echo $__Context->lang->colorset ?></label>
		<div class="x_controls"><div id="member_colorset"></div></div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="mlayout"><?php echo $__Context->lang->mobile_layout ?></label>
		<div class="x_controls">
			<select id="mlayout" name="mlayout_srl">
				<option value="0"><?php echo $__Context->lang->notuse ?></option>
				<?php if($__Context->mlayout_list&&count($__Context->mlayout_list))foreach($__Context->mlayout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->val->layout_srl, false) ?>"<?php if($__Context->val->layout_srl == $__Context->config->mlayout_srl){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val->title, false) ?> (<?php echo escape($__Context->val->layout, false) ?>)</option><?php } ?>
			</select>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="mskin"><?php echo $__Context->lang->mobile_skin ?></label>
		<div class="x_controls">
			<select id="mskin" name="mskin">
				<?php if($__Context->mskin_list&&count($__Context->mskin_list))foreach($__Context->mskin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->key, false) ?>"<?php if($__Context->config->mskin==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val->title, false) ?> (<?php echo escape($__Context->key, false) ?>)</option><?php } ?>
			</select>
		</div>
	</div>
	<div class="x_clearfix btnArea">
		<span class="x_pull-right"><input class="x_btn x_btn-primary" type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
	</div>
</form>
<script>
    jQuery(function() { doGetSkinColorset("<?php echo escape($__Context->config->skin, false) ?>"); });
</script>
