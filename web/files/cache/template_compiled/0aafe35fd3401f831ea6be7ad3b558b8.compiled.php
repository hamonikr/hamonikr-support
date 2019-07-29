<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1>
		<?php echo $__Context->lang->ncart ?>
		<?php if($__Context->module_info->mid){ ?><span class="path">
			&gt; <a href="<?php echo getSiteUrl($__Context->module_info->domain,'','mid',$__Context->module_info->mid) ?>"<?php if($__Context->module=='admin'){ ?> target="_blank"<?php } ?>><?php echo $__Context->module_info->mid;
if($__Context->module_info->is_default=='Y'){ ?>(<?php echo $__Context->lang->is_default ?>)<?php } ?></a>
		</span><?php } ?>
		<a href="#aboutModule" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
	</h1>
</div>
<p class="x_alert x_alert-info" id="aboutModule" hidden><?php echo $__Context->lang->about_ncart ?></p>
<?php if($__Context->module_info){ ?><ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispNcartAdminOrderManagement'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispNcartAdminOrderManagement','module_srl','') ?>"><?php echo $__Context->lang->cart_list ?></a></li>
	<li<?php if($__Context->act=='dispNcartAdminModInstList'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispNcartAdminModInstList','module_srl','') ?>"><?php echo $__Context->lang->page_list ?></a></li>
	<?php if($__Context->module_srl){ ?><li class="x_active"><a href="<?php echo getUrl('act','dispNcartAdminInsertModInst') ?>"><?php echo $__Context->module_info->mid ?> <?php echo $__Context->lang->page_management ?></a></li><?php } ?>
	<li<?php if(!$__Context->module_srl && $__Context->act=='dispNcartAdminInsertModInst'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispNcartAdminInsertModInst') ?>"><?php echo $__Context->lang->page_creation ?></a></li>
	<li<?php if($__Context->act=='dispNcartAdminConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispNcartAdminConfig','module_srl','') ?>"><?php echo $__Context->lang->basic_setting ?></a></li>
</ul><?php } ?>
<?php if($__Context->module_srl){ ?><ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispNcartAdminInsertModInst'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNcartAdminInsertModInst') ?>"><?php echo $__Context->lang->page_setup ?></a></li>
	<li<?php if($__Context->act=='dispNcartAdminOrderForm'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNcartAdminOrderForm') ?>"><?php echo $__Context->lang->payment_form ?></a></li>
	<li<?php if($__Context->act=='dispNcartAdminSkinInfo' && $__Context->module_info->skin){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNcartAdminSkinInfo') ?>"><?php echo $__Context->lang->skin_setting ?></a></li>
	<?php if($__Context->module_info->use_mobile=='Y' && $__Context->module_info->mskin){ ?><li<?php if($__Context->act=='dispNcartAdminMobileSkinInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNcartAdminMobileSkinInfo') ?>"><?php echo $__Context->lang->mobile_skin ?></a></li><?php } ?>
</ul><?php } ?>
