<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1>
		무통장입금
		<?php if($__Context->module_info->mid){ ?><span class="path"> &gt; <a href="<?php echo getSiteUrl($__Context->module_info->domain,'','mid',$__Context->module_info->mid) ?>"<?php if($__Context->module=='admin'){ ?> target="_blank"<?php } ?>><?php echo $__Context->module_info->mid;
if($__Context->module_info->is_default=='Y'){ ?>(<?php echo $__Context->lang->is_default ?>)<?php } ?></a> </span><?php } ?>
		<a href="#aboutModule" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
	</h1>
</div>
<p class="x_alert x_alert-info" id="aboutModule" hidden>.... </p>
<?php if($__Context->module_info){ ?><ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispCashpayAdminModInstList'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispCashpayAdminModInstList','module_srl','') ?>"><?php echo $__Context->lang->page_list ?></a></li>
</ul><?php } ?>
<?php if($__Context->module_srl){ ?><ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispNproductAdminSkinInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNproductAdminSkinInfo') ?>"><?php echo $__Context->lang->skin_settings ?></a></li>
	<?php if($__Context->module_info->mskin && $__Context->module_info->use_mobile=='Y'){ ?><li<?php if($__Context->act=='dispNproductAdminMobileSkinInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispNproductAdminMobileSkinInfo') ?>"><?php echo $__Context->lang->mobile_skin ?></a></li><?php } ?>
</ul><?php } ?>
