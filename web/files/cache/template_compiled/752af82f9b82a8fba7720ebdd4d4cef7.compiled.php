<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1>
		CympusAdmin
		<?php if($__Context->module_info->mid){ ?><span class="path"> &gt; <a href="<?php echo getSiteUrl($__Context->module_info->domain,'','mid',$__Context->module_info->mid) ?>"<?php if($__Context->module=='admin'){ ?> target="_blank"<?php } ?>><?php echo $__Context->module_info->mid;
if($__Context->module_info->is_default=='Y'){ ?>(<?php echo $__Context->lang->is_default ?>)<?php } ?></a> </span><?php } ?>
		<a href="#aboutModule" data-toggle class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
	</h1>
</div>
<?php if($__Context->module_info){ ?><ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispCympusadminAdminModInstList'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispCympusadminAdminModInstList') ?>"><?php echo $__Context->lang->page_list ?></a></li>
	<?php if($__Context->module_srl){ ?><li class="x_active"><a href="<?php echo getUrl('','module',$__Context->module,'act','dispCympusadminAdminItemList','module_srl',$__Context->module_srl) ?>"><?php echo $__Context->module_info->mid ?> <?php echo $__Context->lang->page_management ?></a></li><?php } ?>
	<li<?php if($__Context->act=='dispCympusadminAdminInsertModInst' && !$__Context->module_srl){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispCympusadminAdminInsertModInst') ?>"><?php echo $__Context->lang->page_creation ?></a></li>
	<li<?php if($__Context->act=='dispCympusadminAdminConfig' && !$__Context->module_srl){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('','module',$__Context->module,'act','dispCympusadminAdminConfig') ?>">모듈설정</a></li>
</ul><?php } ?>
<?php if($__Context->module_srl){ ?><ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act=='dispCympusadminAdminInsertModInst'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispCympusadminAdminInsertModInst') ?>"><?php echo $__Context->lang->page_configuration ?></a></li>
	<li<?php if($__Context->act=='dispCympusadminAdminGrantInfo'){ ?> class="x_active"<?php } ?>><a href="<?php echo getUrl('act','dispCympusadminAdminGrantInfo') ?>"><?php echo $__Context->lang->permission_settings ?></a></li>
</ul><?php } ?>
