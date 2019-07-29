<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/page/tpl/filter','insert_page_content.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/page/tpl/js/page_admin.js--><?php $__tmp=array('modules/page/tpl/js/page_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/page/tpl/css/page.css--><?php $__tmp=array('modules/page/tpl/css/page.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/widget/tpl/js/widget.js--><?php $__tmp=array('modules/widget/tpl/js/widget.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/widget/tpl/css/widget.css--><?php $__tmp=array('modules/widget/tpl/css/widget.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div id="zonePageContent"><?php echo $__Context->page_content ?></div>
<form action="./" method="post" id="pageFo" onsubmit="return doSubmitPageContent(this);"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="mid" value="<?php echo escape($__Context->module_info->mid, false) ?>" />
	<input type="hidden" name="module" value="page" />
	<input type="hidden" name="act" value="dispPageAdminContentModify" />
	<input type="hidden" name="module_srl" value="<?php echo escape($__Context->module_info->module_srl, false) ?>" />
	<input type="hidden" name="content" value="<?php echo htmlspecialchars($__Context->content, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
	<div class="btnArea" id="pageBtnArea" hidden>
		<div class="etc">
			<span class="btn-group">
				<input class="btn" type="button" value="<?php echo $__Context->lang->cmd_box_widget_insert ?>" onclick="doAddWidgetBox()" />
				<input class="btn" type="button" value="<?php echo $__Context->lang->cmd_content_insert ?>" onclick="doAddContent('<?php echo escape($__Context->module_info->mid, false) ?>')" />
			</span>
			<select name="widget_list" style="margin:0;width:auto">
				<?php if($__Context->widget_list&&count($__Context->widget_list))foreach($__Context->widget_list as $__Context->widget){ ?>
				<option value="<?php echo escape($__Context->widget->widget, false) ?>" <?php if($__Context->widget->widget=='content'){ ?>selected="selected"<?php } ?>><?php echo escape($__Context->widget->title, false) ?></option>
				<?php } ?>
			</select>
			<input class="btn" type="button" value="<?php echo $__Context->lang->cmd_insert ?>" onclick="doAddWidget(this.form)"/>
		</div>
		<span class="btn-group">
			<input class="btn" type="submit" value="<?php echo $__Context->lang->cmd_save ?>"/>
			<input class="btn" type="button" value="<?php echo $__Context->lang->cmd_remove_all_widgets ?>" onclick="removeAllWidget()"/>
		</span>
	</div>
</form>
<div id="widgetButton" class="widgetButtons">
    <button type="button" class="widgetSetup" title="<?php echo $__Context->lang->cmd_setup ?>"><?php echo $__Context->lang->cmd_setup ?></button>
    <button type="button" class="widgetSize" title="<?php echo $__Context->lang->cmd_widget_size ?>"><?php echo $__Context->lang->cmd_widget_size ?></button>
    <button type="button" class="widgetStyle" title="<?php echo $__Context->lang->widgetstyle ?>"><?php echo $__Context->lang->widgetstyle ?></button>
    <button type="button" class="widgetCopy" title="<?php echo $__Context->lang->cmd_copy ?>"><?php echo $__Context->lang->cmd_copy ?></button>
    <button type="button" class="widgetRemove" title="<?php echo $__Context->lang->cmd_delete ?>"><?php echo $__Context->lang->cmd_delete ?></button>
</div>
<div id="widgetBoxButton" class="widgetButtons">
    <button type="button" class="widgetBoxSize" title="<?php echo $__Context->lang->cmd_widget_size ?>"><?php echo $__Context->lang->cmd_widget_size ?></button>
    <button type="button" class="widgetStyle" title="<?php echo $__Context->lang->widgetstyle ?>"><?php echo $__Context->lang->widgetstyle ?></button>
    <button type="button" class="widgetBoxRemove" title="<?php echo $__Context->lang->cmd_delete ?>"><?php echo $__Context->lang->cmd_delete ?></button>
</div>
<script>
    var confirm_delete_msg = "<?php echo $__Context->lang->confirm_delete ?>";
    xAddEventListener(window,"load",function() { doStartPageModify('zonePageContent', '<?php echo escape($__Context->module_info->module_srl, false) ?>'); jQuery('div.admin').css('background-color','transparent');});
</script>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/widget/tpl','widget_layer.html') ?>
