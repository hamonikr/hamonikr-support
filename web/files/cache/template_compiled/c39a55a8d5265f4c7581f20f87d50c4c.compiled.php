<?php if(!defined("__XE__"))exit;?><section class="section">
	<h1><?php echo $__Context->lang->open_rss ?></h1>
	<p><?php echo $__Context->lang->about_open_rss ?></p>
	<?php Context::addJsFile("modules/rss/ruleset/insertRssModuleConfig.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertRssModuleConfig" />
		<input type="hidden" name="module" value="rss" />
		<input type="hidden" name="act" value="procRssAdminInsertModuleConfig" />
		<input type="hidden" name="success_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false) ?>" />
		<input type="hidden" name="target_module_srl" value="<?php echo escape($__Context->rss_config->module_srl?$__Context->rss_config->module_srl:$__Context->module_srls, false) ?>" />
		
		<div class="x_control-group">
			<label for="open_rss" class="x_control-label"><?php echo $__Context->lang->open_rss ?></label>
			<div class="x_controls">
				<select name="open_rss" id="open_rss">
					<?php if($__Context->lang->open_rss_types&&count($__Context->lang->open_rss_types))foreach($__Context->lang->open_rss_types as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->key, false) ?>"<?php if((!$__Context->rss_config->open_rss && $__Context->key == 'N') || ($__Context->rss_config->open_rss == $__Context->key)){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val, false) ?></option><?php } ?>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label for="open_total_feed" class="x_control-label"><?php echo $__Context->lang->open_feed_to_total ?></label>
			<div class="x_controls">
				<select name="open_total_feed" id="open_total_feed">
					<option value="N"<?php if(!$__Context->rss_config->open_total_feed || $__Context->rss_config->open_total_feed == 'N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
					<option value="T_N"<?php if($__Context->rss_config->open_total_feed == 'T_N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label for="feed_description" class="x_control-label"><?php echo $__Context->lang->description ?></label>
			<div class="x_controls">
				<textarea name="feed_description" id="feed_description" rows="4" cols="42" style="float:left;margin-right:8px"><?php echo htmlspecialchars($__Context->rss_config->feed_description, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?></textarea>
				<p class="x_help-block"><?php echo $__Context->lang->about_feed_description ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label for="feed_copyright" class="x_control-label"><?php echo $__Context->lang->feed_copyright ?></label>
			<div class="x_controls">
				<textarea name="feed_copyright" id="feed_copyright" rows="4" cols="42" style="float:left;margin-right:8px"><?php echo htmlspecialchars($__Context->rss_config->feed_copyright, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?></textarea>
				<p class="x_help-block"><?php echo $__Context->lang->about_feed_copyright ?></p>
			</div>
		</div>
		<div class="btnArea">
			<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_save ?></button>
		</div>
	</form>
</section>
