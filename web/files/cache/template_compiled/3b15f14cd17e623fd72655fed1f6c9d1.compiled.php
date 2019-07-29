<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/admin/tpl/css/admin.bootstrap.min.css--><?php $__tmp=array('modules/admin/tpl/css/admin.bootstrap.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/admin/tpl/css/admin.min.css--><?php $__tmp=array('modules/admin/tpl/css/admin.min.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->lang_type=='ko'){ ?><!--#Meta:modules/admin/tpl/css/admin_ko.css--><?php $__tmp=array('modules/admin/tpl/css/admin_ko.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->lang_type=='en'){ ?><!--#Meta:modules/admin/tpl/css/admin_en.css--><?php $__tmp=array('modules/admin/tpl/css/admin_en.css','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<div class="x popup">
    <?php echo $__Context->content ?>
</div>
<script>
	jQuery(window).load(setFixedPopupSize);
    var _isPoped = true;
</script>
