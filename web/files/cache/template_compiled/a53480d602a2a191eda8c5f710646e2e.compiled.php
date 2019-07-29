<?php if(!defined("__XE__"))exit;?><form action="" class="search x_input-append center" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<?php if($__Context->param&&count($__Context->param))foreach($__Context->param as $__Context->key=>$__Context->val){;
if(!in_array($__Context->key, array('mid', 'vid', 'act', 'page'))){ ?><input type="hidden" name="<?php echo $__Context->key ?>" value="<?php echo $__Context->val ?>" /><?php }} ?>
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<select name="search_target" title="<?php echo $__Context->lang->search_target ?>" style="margin-right:4px">
		<option value="user_id"<?php if($__Context->search_target=='user_id'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->user_id ?></option>
		<option value="nick_name"<?php if($__Context->search_target=='nick_name'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->nick_name ?></option>
		<option value="email_address"<?php if($__Context->search_target=='email_address'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->email_address ?></option>
	</select>
	<input type="search" required name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" />
	<button class="x_btn x_btn-inverse" type="submit"><?php echo $__Context->lang->cmd_search ?></button>
	<a class="x_btn" href="<?php echo getUrl('', 'module', $__Context->module, 'act', $__Context->act) ?>"><?php echo $__Context->lang->cmd_cancel ?></a>
</form>
