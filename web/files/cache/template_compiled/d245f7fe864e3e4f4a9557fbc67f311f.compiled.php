<?php if(!defined("__XE__"))exit;?><form action="" class="search x_input-append center" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<?php if($__Context->param&&count($__Context->param))foreach($__Context->param as $__Context->key=>$__Context->val){;
if(!in_array($__Context->key, array('mid', 'vid', 'act', 'page'))){ ?><input type="hidden" name="<?php echo $__Context->key ?>" value="<?php echo $__Context->val ?>" /><?php }} ?>
	<?php if(count($__Context->module_category)){ ?><select name="module_category_srl" title="<?php echo $__Context->lang->module_category ?>" style="margin-right:4px">
		<option value="0"<?php if($__Context->module_category_srl==='0'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->not_exists ?></option>
		<?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>" <?php if($__Context->module_category==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
	</select><?php } ?>
	<select name="search_target" title="<?php echo $__Context->lang->search_target ?>" style="margin-right:4px">
		<option value="mid"<?php if($__Context->search_target=='mid'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->mid ?></option>
		<option value="browser_title"<?php if($__Context->search_target=='browser_title'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->browser_title ?></option>
	</select>
	<input type="search" required name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" />
	<button class="x_btn x_btn-inverse" type="submit"><?php echo $__Context->lang->cmd_search ?></button>
	<a class="x_btn" href="<?php echo getUrl('', 'module', $__Context->module, 'act', $__Context->act) ?>"><?php echo $__Context->lang->cmd_cancel ?></a>
</form>
