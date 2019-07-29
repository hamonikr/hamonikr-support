<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/module/tpl/js/multi_order.js--><?php $__tmp=array('modules/module/tpl/js/multi_order.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<h3 class="h3"><?php echo $__Context->lang->cmd_list_setting ?></h3>
<p><?php echo $__Context->lang->about_list_config ?></p>
<form class="x_form-horizontal" action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="procNproductAdminInsertListConfig" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_srl ?>" />
	<input type="hidden" name="success_return_url" value="<?php echo getRequestUriByServerEnviroment() ?>" />
	<?php $__Context->list = array_keys($__Context->list_config) ?>
	<input type="hidden" name="list" value="<?php echo implode(',', $__Context->list) ?>" />
	<select class="multiorder_show" size="8" multiple="multiple" style="width:290px;height:290px;vertical-align:top">
		<?php if($__Context->extra_vars&&count($__Context->extra_vars))foreach($__Context->extra_vars as $__Context->key=>$__Context->val){;
if(!$__Context->list_config[$__Context->key]){ ?><option value="<?php echo $__Context->key ?>"><?php echo $__Context->val->name ?></option><?php }} ?>
	</select>
	<button type="button" class="x_btn multiorder_add"><?php echo $__Context->lang->cmd_insert ?></button>
	<select class="multiorder_selected" size="8" multiple="multiple" style="width:290px;height:290px;vertical-align:top">
		<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"><?php echo $__Context->val->name ?></option><?php } ?>
	</select>
	<button type="button" class="x_btn multiorder_up"><?php echo $__Context->lang->cmd_move_up ?></button>
	<button type="button" class="x_btn multiorder_down"><?php echo $__Context->lang->cmd_move_down ?></button>
	<button type="button" class="x_btn multiorder_del"><?php echo $__Context->lang->cmd_delete ?></button>
	<script type="text/javascript">
		xe.registerApp(new xe.MultiOrderManager('list'));
	</script>
	<div class="x_clearfix btnArea">
		<input type="submit" class="x_btn x_btn-primary" value="<?php echo $__Context->lang->cmd_save ?>" />
	</div>
</form>
