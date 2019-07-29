<?php if(!defined("__XE__"))exit;
echo $__Context->page_content ?>
<?php if($__Context->grant->manager){ ?>
	<!--#Meta:modules/page/tpl/js/page_admin.js--><?php $__tmp=array('modules/page/tpl/js/page_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
    <div class="btnArea">
		<span class="btn-group">
			<button class="btn" type="button" onclick="doRemoveWidgetCache(<?php echo escape($__Context->module_info->module_srl, false) ?>); return false;"><?php echo $__Context->lang->cmd_remake_cache ?></button>
			<?php if($__Context->logged_info->is_admin=='Y'){ ?>
			<a class="btn" href="<?php echo escape(getUrl('act','dispPageAdminInfo','module_srl',$__Context->module_info->module_srl), false) ?>"><?php echo $__Context->lang->cmd_setup ?></a>
			<?php } ?>
			<?php if($__Context->module_info->page_type != 'OUTSIDE'){ ?>
			<a class="btn" href="<?php echo escape(getUrl('act','dispPageAdminContentModify','document_srl',''), false) ?>"><?php echo $__Context->lang->cmd_page_modify ?></a>
			<?php } ?>
			<?php if($__Context->module_info->use_mobile =="Y" && $__Context->module_info->page_type != 'OUTSIDE'){ ?>
			<a class="btn" href="<?php echo escape(getUrl('act','dispPageAdminMobileContent','module_srl',$__Context->module_info->module_srl), false) ?>"><?php echo $__Context->lang->mobile ?></a>
			<?php } ?>
		</span>
    </div>
<?php } ?>
