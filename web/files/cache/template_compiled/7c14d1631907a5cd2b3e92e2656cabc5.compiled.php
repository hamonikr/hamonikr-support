<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/autoinstall/tpl','header.html') ?>
<?php 
	$__Context->from_id = array(
		'modules/autoinstall/tpl/install/1' => 1,
		'modules/autoinstall/tpl/index/1' => 1,
		'modules/autoinstall/tpl/uninstall/1' => 1
	);
 ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE && isset($__Context->from_id[$__Context->XE_VALIDATOR_ID])){ ?><div class="message <?php echo escape($__Context->XE_VALIDATOR_MESSAGE_TYPE, false) ?>">
	<p><?php echo escape($__Context->XE_VALIDATOR_MESSAGE, false) ?></p>
</div><?php } ?>
<!--
<form action="" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="autoinstall" />
	<input type="hidden" name="act" value="procAutoinstallAdminUpdateinfo" />
	<input type="hidden" name="xe_validator_id" value="modules/autoinstall/tpl/index/1" />
	<p>
		<?php if($__Context->show_ftp_note){ ?>
			<?php $__Context->ftp_link = sprintf('<a href="%s">%s</a>', getUrl('', 'module', 'admin', 'act', 'dispAdminConfigFtp'), $__Context->lang->ftp_setup) ?>
			<?php echo escape(sprintf($__Context->lang->description_ftp_note, $__Context->ftp_link), false) ?>
		<?php } ?>
		<?php $__Context->btnUpdate = sprintf('<input type="submit" value="%s" class="x_btn x_btn-link" style="position:relative;top:-1px;text-decoration:underline !important" />', $__Context->lang->status_update) ?>
		<?php echo escape(sprintf($__Context->lang->description_update, $__Context->btnUpdate), false) ?>
	</p>
</form>
-->
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/autoinstall/tpl','list.html') ?>
