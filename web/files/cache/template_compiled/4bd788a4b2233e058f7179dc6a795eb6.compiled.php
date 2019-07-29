<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1><?php echo $__Context->lang->inipaystandard ?> <a href="#aboutModule" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a></h1>
</div>
<p class="x_alert x_alert-info" id="aboutModule" hidden><?php echo $__Context->lang->about_inipaystandard ?></p>
<ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispInipaystandardAdminModuleList'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispInipaystandardAdminModuleList') ?>"><?php echo $__Context->lang->module_list ?></a></li>
	<li<?php if($__Context->act=='dispInipaystandardAdminInsertModule'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module','admin','act','dispInipaystandardAdminInsertModule') ?>"><?php echo $__Context->lang->insert_module ?></a></li>
</ul>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/inipaystandard/tpl/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>