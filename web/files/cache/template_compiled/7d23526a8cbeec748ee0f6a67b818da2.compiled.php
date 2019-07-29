<?php if(!defined("__XE__"))exit;?><section class="section">
	<h1><?php echo $__Context->lang->file ?></h1>
	<?php Context::addJsFile("modules/file/ruleset/fileModuleConfig.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="fileModuleConfig" />
		<input type="hidden" name="module" value="file" />
		<input type="hidden" name="act" value="procFileAdminInsertModuleConfig" />
		<input type="hidden" name="success_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false) ?>" />
		<input type="hidden" name="target_module_srl" value="<?php echo escape($__Context->module_info->module_srl?$__Context->module_info->module_srl:$__Context->module_srls, false) ?>" />
		<div class="x_control-group">
			<label for="allowed_filesize" class="x_control-label"><?php echo $__Context->lang->allowed_filesize ?></label>
			<div class="x_controls">
				<input type="number" min="0" name="allowed_filesize" id="allowed_filesize" value="<?php echo escape($__Context->file_config->allowed_filesize, false) ?>" size="3" /> MB
				<p class="x_help-inline"><?php echo $__Context->lang->about_allowed_filesize ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label for="allowed_attach_size" class="x_control-label"><?php echo $__Context->lang->allowed_attach_size ?></label>
			<div class="x_controls">
				<input type="number" min="0" name="allowed_attach_size" id="allowed_attach_size" value="<?php echo escape($__Context->file_config->allowed_attach_size, false) ?>" size="3" /> MB
				/ <?php echo escape(ini_get('upload_max_filesize'), false) ?>
				<p class="x_help-inline"><?php echo $__Context->lang->about_allowed_attach_size ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label for="allowed_filetypes" class="x_control-label"><?php echo $__Context->lang->allowed_filetypes ?></label>
			<div class="x_controls">
				<input type="text" name="allowed_filetypes" id="allowed_filetypes" value="<?php echo escape($__Context->file_config->allowed_filetypes, false) ?>" />
				<p class="x_help-inline"><?php echo $__Context->lang->about_allowed_filetypes ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->enable_download_group ?></label>
			<div class="x_controls">
				<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->k=>$__Context->v){ ?><label for="grant_<?php echo escape($__Context->key, false) ?>_<?php echo escape($__Context->v->group_srl, false) ?>"><input type="checkbox" name="download_grant[]" value="<?php echo escape($__Context->v->group_srl, false) ?>" id="grant_<?php echo escape($__Context->key, false) ?>_<?php echo escape($__Context->v->group_srl, false) ?>"<?php if(in_array($__Context->v->group_srl, $__Context->file_config->download_grant)){ ?> checked="checked"<?php } ?> /> <?php echo escape($__Context->v->title, false) ?></label><?php } ?>
			</div>
		</div>
		<div class="btnArea">
			<button class="x_btn x_btn-primary" type="submit"><?php echo $__Context->lang->cmd_save ?></button>
		</div>
	</form>
</section>
