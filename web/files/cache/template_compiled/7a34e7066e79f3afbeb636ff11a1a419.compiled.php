<?php if(!defined("__XE__"))exit;
if($__Context->in_admin){;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/widget/tpl','header.html');
} ?>
<!--#Meta:modules/widget/tpl/js/generate_code.js--><?php $__tmp=array('modules/widget/tpl/js/generate_code.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_alert x_alert-info" id="widgetInfo" hidden><p><?php echo escape($__Context->widget_info->description, false) ?></p></div>
<div class="x_alert x_alert-info" id="codeHelp" hidden><p><?php echo $__Context->lang->about_widget_code ?></p></div>
<form id="widget_code_form" class="x_form-horizontal" action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="widget" />
	<input type="hidden" name="act" value="procWidgetGenerateCode" />
	<input type="hidden" name="selected_widget" value="<?php echo escape($__Context->widget_info->widget, false) ?>" />
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/widget/tpl','widget_generate_code.include.html') ?>
	<div class="x_clearfix btnArea">
		<a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispWidgetAdminDownloadedList'), false) ?>" class="x_btn x_pull-left"><?php echo $__Context->lang->cmd_list ?></a>
		<input type="submit" class="x_btn x_btn-primary" value="<?php echo $__Context->lang->cmd_generate_code ?>" />
	</div>
</form>
<div class="x_well">
	<h3><?php echo $__Context->lang->widget_code ?></h3>
	<p style="margin-right:14px"><textarea id="widget_code" rows="4" cols="42" style="width:100%;cursor:text;font-family:'Courier New', Courier, monospace" readonly="readonly"></textarea>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/module/tpl','include.filebox.html') ?>
