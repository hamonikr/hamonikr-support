<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/admin/tpl/css/admin.bootstrap.min.css--><?php $__tmp=array('modules/admin/tpl/css/admin.bootstrap.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/install/tpl/css/install.css--><?php $__tmp=array('modules/install/tpl/css/install.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x">
	<div id="header">
		<h1><img src="/modules/install/tpl/img/xe.png" width="161" height="26" alt="XpressEngine" /></h1>
		<em>Version <strong><?php echo escape(__XE_VERSION__, false) ?></strong> <?php echo $__Context->lang->introduce_title ?></em>
	</div>
