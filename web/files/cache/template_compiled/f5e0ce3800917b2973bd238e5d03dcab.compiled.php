<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/cympusadmin/tpl','_header.html') ?>
<?php Context::addJsFile("modules/cympusadmin/ruleset/insertConfig.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" class="x_form-horizontal" id="fo_ncenterlite"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertConfig" />
	<input type="hidden" name="module" value="ncenterlite" />
	<input type="hidden" name="act" value="procCympusadminAdminConfig" />
	<section class="section">
		<div class="x_control-group">
			<label class="x_control-label" for="skin"><?php echo $__Context->lang->skin ?></label>
			<div class="x_controls">
				<select name="skin" id="skin" style="width:auto">
					<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->config->skin== $__Context->key || (!$__Context->config->skin && $__Context->key=='default')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
			</div>
		</div>
	</section>
	<div class="x_clearfix btnArea">
		<div class="x_pull-right">
			<button class="x_btn x_btn-primary" type="submit"><?php echo $__Context->lang->cmd_registration ?></button>
		</div>
	</div>
</form>
