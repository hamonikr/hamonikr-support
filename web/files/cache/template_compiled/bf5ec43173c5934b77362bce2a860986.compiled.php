<?php if(!defined("__XE__"))exit;?><section class="section">
	<h1><?php echo $__Context->lang->document ?></h1>
	<form action="./" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="document" />
		<input type="hidden" name="act" value="procDocumentInsertModuleConfig" />
		<input type="hidden" name="success_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false) ?>" />
		<input type="hidden" name="target_module_srl" value="<?php echo escape($__Context->module_info->module_srl?$__Context->module_info->module_srl:$__Context->module_srls, false) ?>" />
		<div class="x_control-group">
			<label for="use_history" class="x_control-label"><?php echo $__Context->lang->history ?></label>
			<div class="x_controls">
				<select name="use_history" id="use_history">
					<option value="N"<?php if($__Context->document_config->use_history=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
					<option value="Y"<?php if($__Context->document_config->use_history=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
					<option value="Trace"<?php if($__Context->document_config->use_history=='Trace'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->trace_only ?></option>
				</select>
				<p class="x_help-inline"><?php echo $__Context->lang->about_use_history ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label for="use_vote_up" class="x_control-label"><?php echo $__Context->lang->cmd_vote ?></label>
			<div class="x_controls">
				<select name="use_vote_up" id="use_vote_up">
					<option value="Y"<?php if($__Context->document_config->use_vote_up=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
					<option value="S"<?php if($__Context->document_config->use_vote_up=='S'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use_and_display ?></option>
					<option value="N"<?php if($__Context->document_config->use_vote_up=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label for="use_vote_down" class="x_control-label"><?php echo $__Context->lang->cmd_vote_down ?></label>
			<div class="x_controls">
				<select name="use_vote_down" id="use_vote_down">
					<option value="Y"<?php if($__Context->document_config->use_vote_down=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
					<option value="S"<?php if($__Context->document_config->use_vote_down=='S'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use_and_display ?></option>
					<option value="N"<?php if($__Context->document_config->use_vote_down=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
				</select>
			</div>
		</div>
		<div class="btnArea">
			<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_save ?></button>
		</div>
	</form>
</section>
