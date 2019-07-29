<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1>
		<?php echo $__Context->lang->order_management ?>
		<?php if($__Context->module_info->mid){ ?><span class="path">
			&gt; <a href="<?php echo getSiteUrl($__Context->module_info->domain,'','mid',$__Context->module_info->mid) ?>"<?php if($__Context->module=='admin'){ ?> target="_blank"<?php } ?>><?php echo $__Context->module_info->mid;
if($__Context->module_info->is_default=='Y'){ ?>(<?php echo $__Context->lang->is_default ?>)<?php } ?></a>
		</span><?php } ?>
		<a href="#aboutModule" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
	</h1>
</div>
<p class="x_alert x_alert-info" id="aboutModule" hidden><?php echo $__Context->lang->about_board ?></p>
<?php if($__Context->module_info){ ?><ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispNstoreAdminOrderManagement'){ ?> class="x_active"<?php } ?> ><a href="<?php echo getUrl('','mid',$__Context->mid,'module',$__Context->module,'act','dispNstoreAdminOrderManagement') ?>"><?php echo $__Context->lang->order_management ?></a></li>
	<?php if($__Context->order_srl){ ?><li<?php if($__Context->act=='dispNstoreAdminOrderDetail'){ ?> class="x_active"<?php } ?> ><a href="<?php echo getUrl('','mid',$__Context->mid,'module',$__Context->module,'act','dispNstoreAdminOrderDetail','order_srl',$__Context->order_srl) ?>"><?php echo $__Context->lang->order_details ?></a></li><?php } ?>
	<?php if(!$__Context->mid){ ?><li<?php if($__Context->act=='dispNstoreAdminModInstList'){ ?> class="x_active"<?php } ?> ><a href="<?php echo getUrl('','module',$__Context->module,'act','dispNstoreAdminModInstList') ?>"><?php echo $__Context->lang->page_list ?></a></li><?php } ?>
	<?php if(!$__Context->mid && $__Context->module_srl){ ?><li class="x_active"><a href="<?php echo getUrl('act','dispNstoreAdminItemList') ?>"><?php echo $__Context->module_info->mid ?> <?php echo $__Context->lang->page_management ?></a></li><?php } ?>
	<?php if(!$__Context->mid){ ?><li<?php if($__Context->act=='dispNstoreAdminInsertModInst' && !$__Context->module_srl){ ?> lass="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispNstoreAdminInsertModInst') ?>"><?php echo $__Context->lang->page_creation ?></a></li><?php } ?>
	<?php if(!$__Context->mid){ ?><li<?php if($__Context->act=='dispNstoreAdminConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispNstoreAdminConfig') ?>"><?php echo $__Context->lang->basic_setting ?></a></li><?php } ?>
</ul><?php } ?>
<?php if(!$__Context->mid && $__Context->module_srl){ ?><ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispNstoreAdminInsertModInst'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNstoreAdminInsertModInst') ?>"><?php echo $__Context->lang->page_configuration ?></a></li>
	<li<?php if($__Context->act=='dispNstoreAdminSkinInfo' && $__Context->module_info->skin){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNstoreAdminSkinInfo') ?>"><?php echo $__Context->lang->skin_settings ?></a></li>
	<?php if($__Context->module_info->use_mobile=='Y' && $__Context->module_info->mskin){ ?><li<?php if($__Context->act=='dispNstoreAdminMobileSkinInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNstoreAdminMobileSkinInfo') ?>"><?php echo $__Context->lang->mobile_skin ?></a></li><?php } ?>
	<li<?php if($__Context->act=='dispNstoreAdminGrantInfo' && $__Context->module_info->skin){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNstoreAdminGrantInfo') ?>"><?php echo $__Context->lang->grant ?></a></li>
</ul><?php } ?>
