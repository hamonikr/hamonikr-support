<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1>
		<?php echo $__Context->lang->product_management ?>
		<?php if($__Context->module_info->mid){ ?><span class="path"> &gt; <a href="<?php echo getSiteUrl($__Context->module_info->domain,'','mid',$__Context->module_info->mid) ?>"<?php if($__Context->module=='admin'){ ?> target="_blank"<?php } ?>><?php echo $__Context->module_info->mid;
if($__Context->module_info->is_default=='Y'){ ?>(<?php echo $__Context->lang->is_default ?>)<?php } ?></a> </span><?php } ?>
		<a href="#aboutModule" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
	</h1>
</div>
<p class="x_alert x_alert-info" id="aboutModule" hidden><?php echo $__Context->lang->about_nproduct ?> <a href="<?php echo getUrl('experimental_mode','Y') ?>"><?php echo $__Context->lang->product_copy ?></a></p>
<?php if($__Context->module_info){ ?><ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispNproductAdminModInstList'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispNproductAdminModInstList') ?>"><?php echo $__Context->lang->page_list ?></a></li>
	<?php if($__Context->module_srl){ ?><li class="x_active"><a href="<?php echo getUrl('','module',$__Context->module,'act','dispNproductAdminItemList','module_srl',$__Context->module_srl) ?>"><?php echo $__Context->module_info->mid ?> <?php echo $__Context->lang->page_management ?></a></li><?php } ?>
	<li<?php if($__Context->act=='dispNproductAdminInsertModInst' && !$__Context->module_srl){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispNproductAdminInsertModInst') ?>"><?php echo $__Context->lang->page_creation ?></a></li>
	
	<?php if(0){ ?><li<?php if($__Context->act=='dispNproductAdminConfig'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNproductAdminConfig','module_srl','') ?>"><?php echo $__Context->lang->basic_settings ?></a></li><?php } ?>
</ul><?php } ?>
<?php if($__Context->module_srl){ ?><ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispNproductAdminItemList'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNproductAdminItemList') ?>"><?php echo $__Context->lang->product_list ?></a></li>
	<?php if($__Context->act=='dispNproductAdminUpdateItem'){ ?><li class="x_active"><a href="<?php echo getUrl('act','dispNproductAdminUpdateItem') ?>"><?php echo $__Context->lang->product_modification ?></a></li><?php } ?>
	<li<?php if($__Context->act=='dispNproductAdminInsertItem'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNproductAdminInsertItem') ?>"><?php echo $__Context->lang->product_registration ?></a></li>
	<li<?php if($__Context->act=='dispNproductAdminBulkItems'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNproductAdminBulkItems') ?>"><?php echo $__Context->lang->bulk_registration ?></a></li>
	<li<?php if($__Context->act=='dispNproductAdminDisplayCategories'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNproductAdminDisplayCategories') ?>"><?php echo $__Context->lang->maindisplay_categories ?></a></li>
	<li<?php if($__Context->act=='dispNproductAdminItemExtraSetup'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNproductAdminItemExtraSetup') ?>"><?php echo $__Context->lang->additional_registration_form ?></a></li>
	<li<?php if($__Context->act=='dispNproductAdminCategoryManagement'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNproductAdminCategoryManagement') ?>"><?php echo $__Context->lang->product_category_management ?></a></li>
	<li<?php if($__Context->act=='dispNproductAdminGroupDiscount'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNproductAdminGroupDiscount') ?>"><?php echo $__Context->lang->group_discount ?></a></li>
	<?php if($__Context->experimental_mode=='Y'){ ?>
	<li<?php if($__Context->act=='dispNproductAdminMemberDiscount'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNproductAdminMemberDiscount') ?>"><?php echo $__Context->lang->member_discount ?></a></li>
	<li<?php if($__Context->act=='dispNproductAdminQuantityDiscount'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNproductAdminQuantityDiscount') ?>"><?php echo $__Context->lang->buy_count ?></a></li> 
	<?php } ?>
	<li<?php if($__Context->act=='dispNproductAdminListSetup'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNproductAdminListSetup') ?>"><?php echo $__Context->lang->fielddisplay_settings ?></a></li>
	<li<?php if($__Context->act=='dispNproductAdminDetailListSetup'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNproductAdminDetailListSetup') ?>"><?php echo $__Context->lang->detailpage_fielddisplay_settings ?></a></li>
	<li<?php if($__Context->act=='dispNproductAdminInsertModInst'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNproductAdminInsertModInst') ?>"><?php echo $__Context->lang->page_configuration ?></a></li>
	<li<?php if($__Context->act=='dispNproductAdminSkinInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNproductAdminSkinInfo') ?>"><?php echo $__Context->lang->skin_settings ?></a></li>
	<?php if($__Context->module_info->mskin && $__Context->module_info->use_mobile=='Y'){ ?><li<?php if($__Context->act=='dispNproductAdminMobileSkinInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNproductAdminMobileSkinInfo') ?>"><?php echo $__Context->lang->mobile_skin ?></a></li><?php } ?>
	<li<?php if($__Context->act=='dispNproductAdminAdditionSetup'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNproductAdminAdditionSetup') ?>"><?php echo $__Context->lang->additional_settings ?></a></li>
	<li<?php if($__Context->act=='dispNproductAdminGrantInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNproductAdminGrantInfo') ?>"><?php echo $__Context->lang->permission_settings ?></a></li>
</ul><?php } ?>
