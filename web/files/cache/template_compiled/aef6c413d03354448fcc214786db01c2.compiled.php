<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/install/tpl/js/install_admin.js--><?php $__tmp=array('modules/install/tpl/js/install_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','header.html') ?>
	<div id="body">
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','progress_menu.html') ?>
		<div id="content">
			<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo escape($__Context->XE_VALIDATOR_MESSAGE_TYPE, false) ?>">
				<p><?php echo escape($__Context->XE_VALIDATOR_MESSAGE, false) ?></p>
			</div><?php } ?>
			<?php Context::addJsFile("modules/install/ruleset/install.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="install" />
				<input type="hidden" name="act" value="procInstall" />
				<div class="x_control-group">
					<label for="aMail" class="x_control-label"><strong>*</strong> <?php echo $__Context->lang->email_address ?></label>
					<div class="x_controls">
						<input name="email_address" type="email" id="aMail" required />
					</div>
				</div>
				<div class="x_control-group">
					<label for="aPw1" class="x_control-label"><strong>*</strong> <?php echo $__Context->lang->password1 ?></label>
					<div class="x_controls">
						<input name="password" type="password" id="aPw1" required />
						<p><?php echo $__Context->lang->msg_password_strength ?></p>
					</div>
				</div>
				<div class="x_control-group">
					<label for="aPw2" class="x_control-label"><strong>*</strong> <?php echo $__Context->lang->password2 ?></label>
					<div class="x_controls">
						<input name="password2" type="password" id="aPw2" required />
					</div>
				</div>
				<div class="x_control-group">
					<label for="aNick" class="x_control-label"><strong>*</strong> <?php echo $__Context->lang->nick_name ?></label>
					<div class="x_controls">
						<input name="nick_name" type="text" id="aNick" required />
					</div>
				</div>
				<div class="x_control-group">
					<label for="aId" class="x_control-label"><strong>*</strong> <?php echo $__Context->lang->user_id ?></label>
					<div class="x_controls">
						<input name="user_id" type="text" id="aId" required />
					</div>
				</div>
				<div class="desc">
					<p><?php echo $__Context->lang->install_notandum ?></p>
				</div>
				<div class="ibtnArea">
					<span class="x_pull-left">
						<a href="<?php echo escape(getUrl('', 'act', 'dispInstallConfigForm'), false) ?>" class="x_btn x_btn-small x_btn-inverse"><i class="x_icon-chevron-left x_icon-white"></i> <?php echo $__Context->lang->cmd_back ?></a>
					</span>
					<span class="x_pull-right">
						<button type="submit" class="x_btn x_btn-small x_btn-inverse x_disabled" id="task-done"><i class="x_icon-ok x_icon-white"></i> <?php echo $__Context->lang->cmd_complete ?></button>
					</span>
				</div>
			</form>
		</div>
	</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','footer.html') ?>
