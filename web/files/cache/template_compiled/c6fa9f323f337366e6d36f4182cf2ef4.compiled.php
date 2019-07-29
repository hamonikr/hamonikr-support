<?php if(!defined("__XE__"))exit;?><!-- css -->
<!--#Meta:modules/editor/skins/ckeditor/css/default.css--><?php $__tmp=array('modules/editor/skins/ckeditor/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:common/xeicon/xeicon.min.css--><?php $__tmp=array('common/xeicon/xeicon.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!-- JS -->
<!--#JSPLUGIN:ckeditor--><?php Context::loadJavascriptPlugin('ckeditor'); ?>
<!--#Meta:modules/editor/tpl/js/editor_common.js--><?php $__tmp=array('modules/editor/tpl/js/editor_common.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/tpl/js/editor.app.js--><?php $__tmp=array('modules/editor/tpl/js/editor.app.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/editor/skins/ckeditor/js/xe_interface.js--><?php $__tmp=array('modules/editor/skins/ckeditor/js/xe_interface.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php  $__Context->css_content = null  ?>
<?php if($__Context->content_font || $__Context->content_font_size){ ?>
	<?php if($__Context->content_style === 'ckeditor_light'){;
$__Context->css_content = '.xe_content.editable p { margin: 0;'. chr(125);
} ?>
	<?php  $__Context->css_content .= ' .xe_content.editable { ' ?>
	<?php if($__Context->content_font){ ?>
	<?php  $__Context->css_content .= 'font-family:' . $__Context->content_font . ';'; ?>
	<?php } ?>
	<?php if($__Context->content_font_size){ ?>
	<?php  $__Context->css_content .= 'font-size:' . $__Context->content_font_size . ';'; ?>
	<?php } ?>
	<?php  $__Context->css_content .= chr(125); ?>
<?php } ?>
<div id="ckeditor_instance_<?php echo $__Context->editor_sequence ?>" data-editor-sequence="<?php echo $__Context->editor_sequence ?>" data-editor-primary-key-name="<?php echo $__Context->editor_primary_key_name ?>" data-editor-content-key-name="<?php echo $__Context->editor_content_key_name ?>" style="min-height:<?php echo $__Context->editor_height ?>px;"></div>
<?php if($__Context->allow_fileupload){ ?>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/editor/skins/ckeditor','file_upload.html') ?>
<?php } ?>
<?php 
	$__Context->editorContentCssFilemtime = filemtime(_XE_PATH_ . $__Context->content_style_path . '/editor.css');
 ?>
<script>
(function($){
	"use strict";
	// editor
	$(function(){
		<?php if(!FileHandler::exists('common/js/plugins/ckeditor/ckeditor/config.js')){ ?>CKEDITOR.config.customConfig = '';<?php } ?>
		var settings = {
			ckeconfig: {
				height: '<?php echo $__Context->editor_height ?>',
				skin: '<?php echo $__Context->colorset ?>',
				contentsCss: '<?php echo $__Context->content_style_path ?>/editor.css?<?php echo $__Context->editorContentCssFilemtime ?>',
				xe_editor_sequence: <?php echo $__Context->editor_sequence ?>,
				toolbarCanCollapse: true,
				language: "<?php echo str_replace('jp','ja',$__Context->lang_type) ?>"
			},
			loadXeComponent: true,
			enableToolbar: true,
			content_field: jQuery('[name=<?php echo $__Context->editor_content_key_name ?>]')
		};
		CKEDITOR.dtd.$removeEmpty.ins = 0;
		CKEDITOR.dtd.$removeEmpty.i = 0;
		<?php if($__Context->enable_component){ ?>
			<?php  $__Context->xe_component = array();  ?>
			<?php if($__Context->component_list&&count($__Context->component_list))foreach($__Context->component_list as $__Context->component_name => $__Context->component){ ?>
				<?php  $__Context->xe_component[] = $__Context->component_name . ":'" . htmlentities($__Context->component->title, ENT_QUOTES, 'UTF-8') . "'";  ?>
			<?php } ?>
			<?php  $__Context->xe_component = implode(',', $__Context->xe_component);  ?>
			settings.ckeconfig.xe_component_arrays = {<?php echo $__Context->xe_component ?>};
		<?php } ?>
		<?php if(!$__Context->enable_default_component){ ?>
			settings.enableToolbar = false;
			settings.ckeconfig.toolbarCanCollapse = false;
		<?php } ?>
		<?php if(!$__Context->enable_component){ ?>
			settings.loadXeComponent = false;
		<?php } ?>
		<?php if($__Context->module_type === 'comment'||Mobile::isMobileCheckByAgent()){ ?>
			settings.ckeconfig.toolbarStartupExpanded = false;
		<?php } ?>
		
		<?php if(!$__Context->html_mode){ ?>
			settings.ckeconfig.removeButtons = 'Save,Preview,Print,Cut,Copy,Paste,Source';
		<?php } ?>
		<?php if($__Context->css_content){ ?>CKEDITOR.addCss('<?php echo $__Context->css_content ?>');<?php } ?>
		var ckeApp = $('#ckeditor_instance_<?php echo $__Context->editor_sequence ?>').XeCkEditor(settings);
	});
})(jQuery);
</script>
