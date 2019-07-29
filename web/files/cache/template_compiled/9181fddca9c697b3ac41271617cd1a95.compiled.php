<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/install/tpl/js/install_admin.js--><?php $__tmp=array('modules/install/tpl/js/install_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','header.html') ?>
	<div id="body">
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','progress_menu.html') ?>
		<div id="content">
			<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo escape($__Context->XE_VALIDATOR_MESSAGE_TYPE, false) ?>">
				<p><?php echo escape($__Context->XE_VALIDATOR_MESSAGE, false) ?></p>
			</div><?php } ?>
			<form rule="mysql" action="./" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
				<input type="hidden" value="<?php echo escape($__Context->error_return_url, false) ?>" name="error_return_url">
				<input type="hidden" name="act" value="procMysqlDBSetting" />
				<input type="hidden" name="db_type" value="<?php echo escape($__Context->db_type, false) ?>" />
				<h2><?php echo escape($__Context->title, false) ?></h2>
				<div class="x_control-group">
					<label for="dbId" class="x_control-label"><strong>*</strong> <?php echo $__Context->lang->db_userid ?></label>
					<div class="x_controls"><input name="db_userid" type="text" id="dbId" required /></div>
				</div>
				<div class="x_control-group">
					<label for="dbPw" class="x_control-label"><strong>*</strong> <?php echo $__Context->lang->db_password ?></label>
					<div class="x_controls"><input name="db_password" type="password" id="dbPw" required /></div>
				</div>
				<div class="x_control-group">
					<label for="dbName" class="x_control-label"><strong>*</strong> <?php echo $__Context->lang->db_name ?></label>
					<div class="x_controls"><input name="db_database" type="text" id="dbName" required /></div>
				</div>
				<div class="desc"><?php echo $__Context->lang->db_info_desc ?></div>
				<p style="text-align:right"><a href="#advanced" data-toggle style="text-decoration:underline"><?php echo $__Context->lang->advanced_setup ?></a></p>
				<div id="advanced">
					<div class="x_control-group">
						<label for="dbHostName" class="x_control-label"><strong>*</strong> <?php echo $__Context->lang->db_hostname ?></label>
						<div class="x_controls"><input name="db_hostname" value="127.0.0.1" type="text" id="dbHostName" required /></div>
					</div>
					<div class="x_control-group">
						<label for="dbPort" class="x_control-label"><strong>*</strong> <?php echo $__Context->lang->db_port ?></label>
						<div class="x_controls"><input name="db_port" value="3306" type="text" id="dbPort" required /></div>
					</div>
					<div class="x_control-group">
						<label for="dbPrefix" class="x_control-label"><strong>*</strong> <?php echo $__Context->lang->db_table_prefix ?></label>
						<div class="x_controls"><input name="db_table_prefix" type="text" id="dbPrefix" value="xe" required /></div>
					</div>
					<div class="desc"><?php echo $__Context->lang->db_prefix_desc ?></div>
				</div>
				<div class="ibtnArea">
					<span class="x_pull-left">
						<a href="<?php echo escape(getUrl('', 'act', 'dispInstallSelectDB'), false) ?>" class="x_btn x_btn-small x_btn-inverse"><i class="x_icon-chevron-left x_icon-white"></i> <?php echo $__Context->lang->cmd_back ?></a>
					</span>
					<div class="x_pull-right">
						<button type="submit" class="x_btn x_btn-small x_btn-inverse x_disabled" id="task-db-info"><?php echo $__Context->lang->cmd_next ?> <i class="x_icon-chevron-right x_icon-white"></i></button>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','footer.html') ?>
