<?php if(!defined("__XE__"))exit;?><div class="x">
	<div class="x_page-header">
		<h1>
			<?php echo $__Context->lang->epay_module ?>
			<?php if($__Context->module_info->mid){ ?><span class="path">
				&gt; <a href="<?php echo getSiteUrl($__Context->module_info->domain,'','mid',$__Context->module_info->mid) ?>"<?php if($__Context->module=='admin'){ ?> target="_blank"<?php } ?>><?php echo $__Context->module_info->mid;
if($__Context->module_info->is_default=='Y'){ ?>(<?php echo $__Context->lang->is_default ?>)<?php } ?></a>
			</span><?php } ?>
			<a href="#aboutModule" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
		</h1>
	</div>
	<p class="x_alert x_alert-info" id="aboutModule" hidden><?php echo $__Context->lang->about_epay ?></p>
	<?php if($__Context->module_info){ ?><ul class="x_nav x_nav-tabs">
		<li<?php if($__Context->act=='dispEpayAdminTransactions'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispEpayAdminTransactions') ?>"><?php echo $__Context->lang->payment_details ?></a></li>
		<?php if(!$__Context->mid){ ?><li<?php if($__Context->act=='dispEpayAdminEpayList'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispEpayAdminEpayList') ?>"><?php echo $__Context->lang->page_list ?></a></li><?php } ?>
		<?php if(!$__Context->mid && $__Context->module_srl){ ?><li class="x_active"><a href="<?php echo getUrl('','module',$__Context->module,'act','dispEpayAdminInsertEpay') ?>"><?php echo $__Context->module_info->mid ?> <?php echo $__Context->lang->page_management ?></a></li><?php } ?>
		<?php if(!$__Context->mid){ ?><li<?php if($__Context->act=='dispEpayAdminInsertEpay' && !$__Context->module_srl){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispEpayAdminInsertEpay') ?>"><?php echo $__Context->lang->page_creation ?></a></li><?php } ?>
		<?php if(!$__Context->mid){ ?><li<?php if($__Context->act=='dispEpayAdminPluginList'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispEpayAdminPluginList') ?>"><?php echo $__Context->lang->plugin ?></a></li><?php } ?>
		<?php if($__Context->plugin_srl){ ?><li<?php if($__Context->act=='dispEpayAdminUpdatePlugin'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispEpayAdminUpdatePlugin') ?>"><?php echo $__Context->lang->plugin_configuration ?></a></li><?php } ?>
		<?php if(!$__Context->mid){ ?><li<?php if($__Context->act=='dispEpayAdminInsertPlugin'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispEpayAdminInsertPlugin') ?>"><?php echo $__Context->lang->plugin_creation ?></a></li><?php } ?>
	</ul><?php } ?>
	<?php if(!$__Context->mid && $__Context->module_srl){ ?><ul class="x_nav x_nav-tabs">
		<?php if($__Context->module_srl){ ?><li<?php if($__Context->act=='dispEpayAdminInsertEpay'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispEpayAdminInsertEpay') ?>"><?php echo $__Context->lang->page_configuration ?></a></li><?php } ?>
		<li<?php if($__Context->act=='dispEpayAdminSkinInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispEpayAdminSkinInfo') ?>"><?php echo $__Context->lang->skin ?></a></li>
		<?php if($__Context->module_info->mskin && $__Context->module_info->use_mobile=='Y'){ ?><li<?php if($__Context->act=='dispEpayAdminMobileSkinInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispEpayAdminMobileSkinInfo') ?>"><?php echo $__Context->lang->mobile_skin ?></a></li><?php } ?>
		<li<?php if($__Context->act=='dispEpayAdminGrantInfo' && $__Context->module_info->skin){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispEpayAdminGrantInfo') ?>"><?php echo $__Context->lang->grant ?></a></li>
	</ul><?php } ?>
</div>
