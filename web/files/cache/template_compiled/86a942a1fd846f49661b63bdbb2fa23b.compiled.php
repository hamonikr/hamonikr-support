<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/widget/tpl/js/widget.js--><?php $__tmp=array('modules/widget/tpl/js/widget.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/widget/tpl/css/widget.css--><?php $__tmp=array('modules/widget/tpl/css/widget.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<form action="./" method="get" onsubmit="return addContentWidget(this); return false;" id="content_fo"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="content" value="<?php echo escape($__Context->oDocument->getContentText(), false) ?>" />
	<input type="hidden" name="mid" value="<?php echo escape($__Context->module_info->mid, false) ?>" />
	<input type="hidden" name="module_srl" value="<?php echo escape($__Context->module_srl, false) ?>" />
	<input type="hidden" name="document_srl" value="<?php echo escape($__Context->document_srl, false) ?>" />
	<input type="hidden" name="style" value="float:left;padding:none;margin:none;width:100%;" />
	<input type="hidden" name="widget_padding_left" value="" />
	<input type="hidden" name="widget_padding_right" value="" />
	<input type="hidden" name="widget_padding_top" value="" />
	<input type="hidden" name="widget_padding_bottom" value="" />
	<div class="x_modal-header">
		<h1><?php echo $__Context->lang->cmd_content_insert ?></h1>
	</div>
	<div class="x_modal-body">
		<div class="pageAddContent"></div>
		<div class="editor"><?php echo $__Context->editor ?></div>
		<script>xAddEventListener(window, 'load', doSyncPageContent);</script>
	</div>
	<div class="x_modal-footer">
		<input type="submit" value="<?php echo $__Context->lang->cmd_save ?>" class="x_btn x_btn-inverse" />
	</div>
</form>
