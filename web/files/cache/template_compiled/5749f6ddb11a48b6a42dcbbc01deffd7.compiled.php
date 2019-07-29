<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/install/tpl/js/install_admin.js--><?php $__tmp=array('modules/install/tpl/js/install_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','header.html') ?>
	<div id="body">
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','progress_menu.html') ?>
		<div id="content">
			<form method="post" action="./"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
				<input type="hidden" name="module" value="<?php echo escape($__Context->module, false) ?>" />
				<input type="hidden" name="act" value="dispInstallDBForm" />
				<?php if(DB::getEnableList()&&count(DB::getEnableList()))foreach(DB::getEnableList() as $__Context->key=>$__Context->val){ ?><div class="x_control-group">
					<label for="db_type_<?php echo escape($__Context->val->db_type, false) ?>"><input name="db_type" type="radio" value="<?php echo escape($__Context->val->db_type, false) ?>"<?php if(!$__Context->val->enable){ ?> disabled="disabled"<?php } ?> id="db_type_<?php echo escape($__Context->val->db_type, false) ?>"<?php if($__Context->val->db_type==$__Context->defaultDatabase){ ?> checked="checked"<?php } ?> /> <?php echo escape($__Context->val->db_type, false) ?></label>
					<p><?php echo $__Context->lang->db_desc[$__Context->val->db_type] ?></p>
				</div><?php } ?>
				<?php if(DB::getDisableList()&&count(DB::getDisableList()))foreach(DB::getDisableList() as $__Context->key=>$__Context->val){ ?><div class="x_control-group x_muted">
					<label for="db_type_<?php echo escape($__Context->val->db_type, false) ?>"><input name="db_type" type="radio" value="<?php echo escape($__Context->val->db_type, false) ?>"<?php if(!$__Context->val->enable){ ?> disabled="disabled"<?php } ?> id="db_type_<?php echo escape($__Context->val->db_type, false) ?>" /> <?php echo escape($__Context->val->db_type, false) ?><em>(<?php echo $__Context->lang->can_use_when_installed ?>)</em></label>
					<p><?php echo $__Context->lang->db_desc[$__Context->val->db_type] ?></p>
				</div><?php } ?>
				<div class="ibtnArea">
					<span class="x_pull-left">
						<a href="<?php echo escape(getUrl('', 'act', 'dispInstallCheckEnv'), false) ?>" class="x_btn x_btn-small x_btn-inverse"><i class="x_icon-chevron-left x_icon-white"></i> <?php echo $__Context->lang->cmd_back ?></a>
					</span>
					<span class="x_pull-right">
						<button type="submit" class="x_btn x_btn-small x_btn-inverse" id="task-db-select"><?php echo $__Context->lang->cmd_next ?> <i class="x_icon-chevron-right x_icon-white"></i></button>
					</span>
				</div>
			</form>
		</div>
	</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','footer.html') ?>
