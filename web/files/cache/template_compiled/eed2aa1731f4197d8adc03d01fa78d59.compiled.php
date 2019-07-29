<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/admin/tpl','_header.html') ?>
<div class="content" id="content">
	<?php echo $__Context->content ?>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/admin/tpl','_footer.html') ?>
