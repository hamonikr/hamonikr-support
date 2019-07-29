<?php if(!defined("__XE__"))exit;?><script type="text/javascript">
	var fieldset = new Array();
	<?php if($__Context->fieldset_list&&count($__Context->fieldset_list))foreach($__Context->fieldset_list as $__Context->key=>$__Context->val){ ?>
		<?php if($__Context->val->fields&&count($__Context->val->fields))foreach($__Context->val->fields as $__Context->key2=>$__Context->field){ ?>
		fieldset[fieldset.length] = { column_type:'<?php echo $__Context->field->column_type ?>', column_name:'<?php echo $__Context->field->column_name ?>', column_title:'<?php echo $__Context->field->column_title ?>' };
		<?php } ?>
	<?php } ?>
</script>
