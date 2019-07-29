<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/install/tpl/js/install_admin.js--><?php $__tmp=array('modules/install/tpl/js/install_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','header.html') ?>
<div id="body">
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','progress_menu.html') ?>
	<div id="content">
		<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo escape($__Context->XE_VALIDATOR_MESSAGE_TYPE, false) ?>">
			<p><?php echo escape($__Context->XE_VALIDATOR_MESSAGE, false) ?></p>
		</div><?php } ?>
		<h2><?php echo $__Context->lang->license_agreement ?></h2>
		<form action="./" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
			<input type="hidden" name="act" value="procInstallLicenseAggrement">
			<input type="hidden" name="module" value="install">
			<div class="content-license">
				<div><?php echo $__Context->lang->license ?></div>
			</div>
			<div>
				<label><input type="checkbox" name="license_agreement" value="Y" /> <strong><?php echo $__Context->lang->cmd_license_agree ?></strong></label>
			</div>
			<div class="ibtnArea">
				<span class="x_pull-left">
					<a href="<?php echo escape(getUrl('', 'act',''), false) ?>" class="x_btn x_btn-small x_btn-inverse"><i class="x_icon-chevron-left x_icon-white"></i> <?php echo $__Context->lang->cmd_back ?></a>
				</span>
				<span class="x_pull-right">
					<button type="submit" class="x_btn x_btn-small x_btn-inverse" id="task-license-aggrement" value=""><?php echo $__Context->lang->cmd_next ?> <i class="x_icon-chevron-right x_icon-white"></i></button>
				</span>
			</div>
		</form>
	</div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','footer.html') ?>
