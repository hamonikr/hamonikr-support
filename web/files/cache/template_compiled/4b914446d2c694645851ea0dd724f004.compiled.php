<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/install/tpl/js/install_admin.js--><?php $__tmp=array('modules/install/tpl/js/install_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','header.html') ?>
	<div id="body">
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','progress_menu.html') ?>
		<div id="content">
			<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo escape($__Context->XE_VALIDATOR_MESSAGE_TYPE, false) ?>">
				<p><?php echo escape($__Context->XE_VALIDATOR_MESSAGE, false) ?></p>
			</div><?php } ?>
			<form action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
				<input type="hidden" name="act" value="procConfigSetting" />
				<input type="hidden" name="use_rewrite" value="<?php echo escape($__Context->use_rewrite, false) ?>" />
				<div class="x_control-group">
					<select name="time_zone" style="width:100%">
						<?php if($__Context->time_zone&&count($__Context->time_zone))foreach($__Context->time_zone as $__Context->key=>$__Context->val){ ?><option id="<?php echo escape($__Context->key, false) ?>" value="<?php echo escape($__Context->key, false) ?>"<?php if($__Context->key==date('O')){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val, false) ?></option><?php } ?>
					</select>
					<p><?php echo $__Context->lang->about_time_zone ?></p>
				</div>
				<div class="ibtnArea">
					<span class="x_pull-left">
						<button type="button" onclick="document.backForm.submit()" class="x_btn x_btn-small x_btn-inverse"><i class="x_icon-chevron-left x_icon-white"></i> <?php echo $__Context->lang->cmd_back ?></button>
					</span>
					<span class="x_pull-right">
						<button type="submit" class="x_btn x_btn-small x_btn-inverse" id="task-settings"><?php echo $__Context->lang->cmd_next ?> <i class="x_icon-chevron-right x_icon-white"></i></button>
					</span>
				</div>
			</form>
			<form name="backForm" method="post" action="./"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
				<input type="hidden" name="module" value="<?php echo escape($__Context->module, false) ?>" />
				<input type="hidden" name="act" value="dispInstallDBForm" />
				<input type="hidden" name="db_type" value="<?php echo escape($__Context->db_type, false) ?>" />
			</form>
		</div>
	</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','footer.html') ?>
