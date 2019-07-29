<?php if(!defined("__XE__"))exit;?><script src="/modules/board/tpl/js/board_admin.js"></script>
<script src="/modules/board/tpl/modules/module/tpl/js/module_admin.js"></script>
<script>
</script>
<?php Context::addJsFile("modules/board/ruleset/insertBoardForBasic.xml", FALSE, "", 0, "body", TRUE, "") ?><form  id="fo_obj" class="x_form-horizontal" action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertBoardForBasic" />
	<input type="hidden" name="act" value="procBoardAdminUpdateBoardFroBasic" />
	<input type="hidden" name="board_name" value="<?php echo escape($__Context->module_info->mid, false) ?>" />
	<input type="hidden" name="module_srl" value="<?php echo escape($__Context->module_info->module_srl, false) ?>" />
	<input type="hidden" name="admin_member" value="<?php if($__Context->admin_member&&count($__Context->admin_member))foreach($__Context->admin_member as $__Context->key => $__Context->val){;
if($__Context->member_config->identifier == 'email_address'){;
echo escape($__Context->val->email_address, false) ?>,<?php }else{;
echo escape($__Context->val->user_id, false) ?>,<?php };
} ?>" />
	<div class="x_control-group">
		<label class="x_control-label" for="lang_header_text"><?php echo $__Context->lang->header_text ?></label>
		<div class="x_controls">
			<textarea name="header_text" id="header_text" class="lang_code" rows="8" cols="42" placeholder="<?php echo $__Context->lang->about_header_text ?>"><?php echo htmlspecialchars($__Context->module_info->header_text) ?></textarea>
			<a href="#header_text_help" class="x_icon-question-sign" data-toggle style="vertical-align:top;margin-top:6px"><?php echo $__Context->lang->help ?></a>
			<p id="header_text_help" class="x_help-block" hidden><?php echo $__Context->lang->about_header_text ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="lang_footer_text"><?php echo $__Context->lang->footer_text ?></label>
		<div class="x_controls">
			<textarea name="footer_text" id="footer_text" class="lang_code" rows="8" cols="42" placeholder="<?php echo $__Context->lang->about_footer_text ?>"><?php echo htmlspecialchars($__Context->module_info->footer_text) ?></textarea>
			<a href="#footer_text_help" class="x_icon-question-sign" data-toggle style="vertical-align:top;margin-top:6px"><?php echo $__Context->lang->help ?></a>
			<p id="footer_text_help" class="x_help-block" hidden><?php echo $__Context->lang->about_footer_text ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label"><?php echo $__Context->lang->order_type ?></label>
		<div class="x_controls">
			<select name="order_target" id="order_target" title="<?php echo $__Context->lang->order_target ?>">
				<?php if($__Context->order_target&&count($__Context->order_target))foreach($__Context->order_target as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->key, false) ?>"<?php if($__Context->module_info->order_target== $__Context->key){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val, false) ?></option><?php } ?>
			</select>
			<select name="order_type" id="order_type" title="<?php echo $__Context->lang->order_type ?>">
				<option value="asc"<?php if($__Context->module_info->order_type != 'desc'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->order_asc ?></option>
				<option value="desc"<?php if($__Context->module_info->order_type == 'desc'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->order_desc ?></option>
			</select>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="list_count"><?php echo $__Context->lang->list_count ?></label>
		<div class="x_controls">
			<input type="text" name="list_count" id="list_count" value="<?php echo escape($__Context->module_info->list_count?$__Context->module_info->list_count:20, false) ?>" style="width:30px" />
			<p class="x_help-inline"><?php echo $__Context->lang->about_list_count ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label"><?php echo $__Context->lang->status ?></label>
		<div class="x_controls">
			<input type="hidden" name="use_status[]" value="PUBLIC" />
			<label class="x_inline"><input type="checkbox" name="" value="" checked="checked" disabled="disabled" /> <?php echo escape($__Context->document_status_list['PUBLIC'], false) ?></label>
			<?php if($__Context->document_status_list&&count($__Context->document_status_list))foreach($__Context->document_status_list as $__Context->key=>$__Context->value){ ?>
				<?php if($__Context->key != 'PRIVATE' && $__Context->key != 'TEMP' && $__Context->key != 'PUBLIC'){ ?>
					<label class="x_inline" for="<?php echo escape($__Context->key, false) ?>"><input type="checkbox" name="use_status[]" id="<?php echo escape($__Context->key, false) ?>" value="<?php echo escape($__Context->key, false) ?>"<?php if(@in_array($__Context->key, $__Context->module_info->use_status) || ($__Context->key == 'PUBLIC' && !$__Context->module_srl)){ ?> checked="checked"<?php } ?> /> <?php echo escape($__Context->value, false) ?></label>
				<?php } ?>
			<?php } ?>
			<p class="x_help-block"><?php echo $__Context->lang->about_use_status ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<?php if($__Context->member_config->identifier == 'email_address'){ ?><label class="x_control-label">
			<?php echo $__Context->lang->admin_email_address ?>
		</label><?php } ?>
		<?php if($__Context->member_config->identifier != 'email_address'){ ?><label class="x_control-label">
			<?php echo $__Context->lang->admin_id ?>
		</label><?php } ?>
		<div class="x_controls">
			<div class="x_input-append" style="margin-bottom:8px">
				<select name="_admin_member" multiple="multiple" size="<?php echo escape(count($__Context->admin_member)?count($__Context->admin_member):1, false) ?>">
					<?php if($__Context->admin_member&&count($__Context->admin_member))foreach($__Context->admin_member as $__Context->key=>$__Context->val){ ?><option<?php if($__Context->member_config->identifier=='email_address'){ ?> value="<?php echo escape($__Context->val->email_address, false) ?>"<?php };
if($__Context->member_config->identifier!='email_address'){ ?> value="<?php echo escape($__Context->val->user_id, false) ?>"<?php } ?>>
						<?php echo escape($__Context->val->nick_name, false) ?> (<?php if($__Context->member_config->identifier=='email_address'){;
echo escape($__Context->val->email_address, false);
};
if($__Context->member_config->identifier!='email_address'){;
echo escape($__Context->val->user_id, false);
} ?>)
					</option><?php } ?>
				</select>
				<button class="x_btn" type="button" onclick="doDeleteAdmin()"><?php echo $__Context->lang->cmd_delete ?></button>
			</div>
			<br>
			<div class="x_input-append">
				<input type="text" name="admin_id" />
				<button class="x_btn" type="button" onclick="doInsertAdmin()"><?php echo $__Context->lang->cmd_insert ?></button>
			</div>
			<a href="#adminListHelp" class="x_icon-question-sign"><?php echo $__Context->lang->help ?></a>
			<span id="adminListHelp" hidden><?php echo $__Context->lang->about_admin_id ?></span>
		</div>
	</div>
	<p style="text-align:right;border-top:1px dotted #ddd;padding:10px 0"><a href="<?php echo escape($__Context->setupUrl, false) ?>" style="text-decoration:underline"><?php echo $__Context->lang->advanced_settings ?></a></p>
</form>
