<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/module/tpl/js/module_admin.js--><?php $__tmp=array('modules/module/tpl/js/module_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1><?php echo $__Context->lang->installed_modules ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_advanced_installed_module" target="_blank"><?php echo $__Context->lang->help ?></a></h1>
</div>
<script>
	xe.lang.favorite_on = '<?php echo $__Context->lang->favorite ?>(<?php echo $__Context->lang->on ?>)';
	xe.lang.favorite_off = '<?php echo $__Context->lang->favorite ?>(<?php echo $__Context->lang->off ?>)';
</script>
<ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispModuleAdminContent'){ ?> class="x_active"<?php } ?>>
		<a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispModuleAdminContent'), false) ?>"><?php echo $__Context->lang->installed_modules ?></a>
	</li>
	<li<?php if($__Context->act=='dispModuleAdminCategory'){ ?> class="x_active"<?php } ?>>
		<a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispModuleAdminCategory'), false) ?>"><?php echo $__Context->lang->module_category ?></a>
	</li>
</ul>
