<?php if(!defined("__XE__"))exit;?><section class="section">
	<h1>SEO</h1>
	<form action="./" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="seo" />
		<input type="hidden" name="act" value="procSeoAdminInsertModuleConfig" />
		<input type="hidden" name="success_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false) ?>" />
		<input type="hidden" name="target_module_srl" value="<?php echo escape($__Context->module_info->module_srl, false) ?>" />
		
		<div class="x_control-group">
			<label for="meta_description" class="x_control-label"><?php echo $__Context->lang->description ?></label>
			<div class="x_controls">
				<input type="text" id="meta_description" name="meta_description" style="width: 50%;" value="<?php echo htmlspecialchars($__Context->seo_module_part_config->meta_description, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
			</div>
		</div>
		<div class="btnArea">
			<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_save ?></button>
		</div>
	</form>
</section>
