<?php if(!defined("__XE__"))exit;?>
<div class="x_page-header">
	<h1>
		<?php echo $__Context->lang->mileage ?>
		<?php if($__Context->module_info->mid){ ?><span class="path">
			&gt; <a href="<?php echo getSiteUrl($__Context->module_info->domain,'','mid',$__Context->module_info->mid) ?>"<?php if($__Context->module=='admin'){ ?> target="_blank"<?php } ?>><?php echo $__Context->module_info->mid;
if($__Context->module_info->is_default=='Y'){ ?>(<?php echo $__Context->lang->is_default ?>)<?php } ?></a>
		</span><?php } ?>
		<a href="#aboutModule" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
	</h1>
</div>
<p class="x_alert x_alert-info" id="aboutModule" hidden><?php echo $__Context->lang->about_nmileage ?></p>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php if($__Context->module_info){ ?><ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispNmileageAdminAllMileageHistory'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispNmileageAdminAllMileageHistory') ?>"><?php echo $__Context->lang->cmd_mileage_history ?></a></li>
	<li<?php if($__Context->act=='dispNmileageAdminMileageList'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispNmileageAdminMileageList') ?>"><?php echo $__Context->lang->mileage ?></a></li>
	<?php if($__Context->act=='dispNmileageAdminMileageHistory'){ ?><li class="x_active"><a href="<?php echo getUrl('','module',$__Context->module,'act','dispNmileageAdminMileageHistory') ?>"><?php echo $__Context->lang->mileage_detail ?></a></li><?php } ?>
	<li<?php if($__Context->act=='dispNmileageAdminModInstList'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispNmileageAdminModInstList','module_srl','') ?>"><?php echo $__Context->lang->page_list ?></a></li>
	<?php if($__Context->module_srl){ ?><li class="x_active"><a href="<?php echo getUrl('act','dispNmileageAdminInsertModInst') ?>"><?php echo $__Context->module_info->mid ?> <?php echo $__Context->lang->page_management ?></a></li><?php } ?>
	<li<?php if(!$__Context->module_srl && $__Context->act=='dispNmileageAdminInsertModInst'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispNmileageAdminInsertModInst','module_srl','') ?>"><?php echo $__Context->lang->page_creation ?></a></li>
	<li<?php if($__Context->act=='dispNmileageAdminConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispNmileageAdminConfig','module_srl','') ?>"><?php echo $__Context->lang->setup ?></a></li>
</ul><?php } ?>
<?php if($__Context->module_srl){ ?><ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispNmileageAdminInsertModInst'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNmileageAdminInsertModInst') ?>"><?php echo $__Context->lang->page_setup ?></a></li>
	<li<?php if($__Context->act=='dispNmileageAdminSkinInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNmileageAdminSkinInfo') ?>"><?php echo $__Context->lang->cmd_skin_setup ?></a></li>
	<?php if($__Context->module_info->mskin && $__Context->module_info->use_mobile=='Y'){ ?><li<?php if($__Context->act=='dispNmileageAdminMobileSkinInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNmileageAdminMobileSkinInfo') ?>"><?php echo $__Context->lang->cmd_mobile_skin_setup ?></a></li><?php } ?>
</ul><?php } ?>
