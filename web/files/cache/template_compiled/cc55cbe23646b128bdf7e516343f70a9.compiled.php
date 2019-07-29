<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/member/tpl/js/member_admin.js--><?php $__tmp=array('modules/member/tpl/js/member_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#JSPLUGIN:ui.datepicker--><?php Context::loadJavascriptPlugin('ui.datepicker'); ?>
<script>
	xe.lang.deleteProfileImage = '<?php echo $__Context->lang->msg_delete_extend_form ?>';
	xe.lang.deleteImageMark = '<?php echo $__Context->lang->msg_delete_extend_form ?>';
	xe.lang.deleteImageName = '<?php echo $__Context->lang->msg_delete_extend_form ?>';
</script>
<div class="x_page-header">
	<?php if($__Context->member_srl){ ?><h1><?php echo $__Context->lang->msg_update_member ?></h1><?php } ?>
	<?php if(!$__Context->member_srl){ ?><h1><?php echo $__Context->lang->msg_new_member ?></h1><?php } ?>
</div>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/tpl/1'){ ?><div class="message <?php echo escape($__Context->XE_VALIDATOR_MESSAGE_TYPE, false) ?>">
	<p><?php echo escape($__Context->XE_VALIDATOR_MESSAGE, false) ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/member/ruleset/insertAdminMember.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" class="x_form-horizontal"  method="post" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertAdminMember" />
	<input type="hidden" name="module" value="member" />
	<input type="hidden" name="act" value="procMemberAdminInsert" />
	<input type="hidden" name="member_srl" value="<?php echo escape($__Context->member_srl, false) ?>" />
	<input type="hidden" name="signature" value="<?php echo htmlspecialchars($__Context->member_info->signature, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" />
	<?php if($__Context->member_srl){ ?><input type="hidden" name="success_return_url" value="<?php echo escape(getUrl('act', $__Context->act), false) ?>" /><?php } ?>
	<?php if(!$__Context->member_srl){ ?><input type="hidden" name="success_return_url" value="<?php echo escape(getUrl('act', 'dispMemberAdminList'), false) ?>" /><?php } ?>
	<input type="hidden" name="xe_validator_id" value="modules/member/tpl/1" />
	<?php if($__Context->member_srl){ ?><div class="x_control-group">
		<label class="x_control-label" for="identifierForm"><em style="color:red">*</em> <?php echo escape($__Context->identifierForm->title, false) ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_login_key" target="_blank"><?php echo $__Context->lang->help ?></a></label>
		<div class="x_controls">
			<input type="hidden" name="<?php echo escape($__Context->identifierForm->name, false) ?>" value="<?php echo escape($__Context->identifierForm->value, false) ?>" />
			<input id="identifierForm" type="email" name="<?php echo escape($__Context->identifierForm->name, false) ?>" value="<?php echo escape($__Context->identifierForm->value, false) ?>" disabled="disabled" />
		</div>
	</div><?php } ?>
	<?php if(!$__Context->member_srl){ ?><div class="x_control-group">
		<label class="x_control-label" for="identifierForm"><em style="color:red">*</em> <?php echo escape($__Context->identifierForm->title, false) ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_login_key" target="_blank"><?php echo $__Context->lang->help ?></a></label>
		<div class="x_controls">
			<input id="identifierForm" type="text" name="<?php echo escape($__Context->identifierForm->name, false) ?>" value="" />
		</div>
	</div><?php } ?>
	<?php if($__Context->member_srl){ ?><div class="x_control-group">
		<label class="x_control-label" for="password"><em style="color:red">*</em> <?php echo $__Context->lang->password ?></label>
		<div class="x_controls">
			<input type="hidden" name="password" value="<?php echo escape($__Context->member_info->password, false) ?>" />
			<input id="password" type="text" name="reset_password" value="" />
		</div>
	</div><?php } ?>
	<?php if(!$__Context->member_srl){ ?><div class="x_control-group">
		<label class="x_control-label" for="password"><em style="color:red">*</em> <?php echo $__Context->lang->password ?></label>
		<div class="x_controls">
			<input id="password" type="text" name="password" value="" />
		</div>
	</div><?php } ?>
	<?php if($__Context->formTags&&count($__Context->formTags))foreach($__Context->formTags as $__Context->formTag){ ?><div class="x_control-group">
		<label class="x_control-label" for="<?php echo escape($__Context->formTag->name, false) ?>"><?php echo $__Context->formTag->title ?></label>
		<?php if($__Context->formTag->name != 'signature'){ ?><div class="x_controls"><?php echo $__Context->formTag->inputTag ?></div><?php } ?>
		<?php if($__Context->formTag->name =='signature'){ ?><div class="x_controls"><?php echo $__Context->editor ?></div><?php } ?>
	</div><?php } ?>
<style scoped>
.xpress-editor>#smart_content,
.xpress-editor>#smart_content>.tool{clear:none}
</style>
	<div class="x_control-group">
		<label class="x_control-label"><?php echo $__Context->lang->allow_mailing ?></label>
		<div class="x_controls">
			<label class="x_inline" for="mailingYes"><input type="radio" name="allow_mailing" id="mailingYes" value="Y"<?php if($__Context->member_info->allow_mailing == 'Y'){ ?> checked="checked"<?php } ?>> <?php echo $__Context->lang->cmd_yes ?></label>
			<label class="x_inline" for="mailingNo"><input type="radio" name="allow_mailing" id="mailingNo" value="N"<?php if($__Context->member_info->allow_mailing != 'Y'){ ?> checked="checked"<?php } ?> > <?php echo $__Context->lang->cmd_no ?></label>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label"><?php echo $__Context->lang->allow_message ?></label>
		<div class="x_controls">
			<?php if($__Context->lang->allow_message_type&&count($__Context->lang->allow_message_type))foreach($__Context->lang->allow_message_type as $__Context->key=>$__Context->val){ ?>
				 <label class="x_inline" for="allow_<?php echo escape($__Context->key, false) ?>"><input type="radio" name="allow_message" value="<?php echo escape($__Context->key, false) ?>"<?php if($__Context->member_info->allow_message == $__Context->key || (!$__Context->member_info->member_srl && $__Context->key == 'Y')){ ?> checked="checked"<?php } ?> id="allow_<?php echo escape($__Context->key, false) ?>" /> <?php echo escape($__Context->val, false) ?></label>
			<?php } ?>
		</div>
	</div>
	<?php if($__Context->member_srl){ ?><div class="x_control-group">
		<label class="x_control-label"><?php echo $__Context->lang->status ?></label>
		<div class="x_controls">
			<label class="x_inline" for="appoval"><input type="radio" name="denied" id="appoval" value="N"<?php if($__Context->member_info->denied != 'Y'){ ?> checked="checked"<?php } ?> > <?php echo $__Context->lang->approval ?></label>
			<label class="x_inline" for="deny"><input type="radio" name="denied" id="deny" value="Y"<?php if($__Context->member_info->denied == 'Y'){ ?> checked="checked"<?php } ?> > <?php echo $__Context->lang->denied ?></label>
		</div>
	</div><?php } ?>
	<?php if($__Context->member_srl){ ?><div class="x_control-group">
		<label class="x_control-label" for="until"><?php echo $__Context->lang->limit_date ?></label>
		<div class="x_controls">
			<input type="hidden" name="limit_date" id="date_limit_date" value="<?php echo escape($__Context->member_info->limit_date, false) ?>" />
			<input type="text" readonly placeholder="YYYY-MM-DD" class="inputDate" id="until" value="<?php echo escape(zdate($__Context->member_info->limit_date,'Y-m-d',false), false) ?>" />
			<input type="button" value="<?php echo $__Context->lang->cmd_delete ?>" class="x_btn dateRemover" />
			<span class="x_help-inline"><?php echo $__Context->lang->about_limit_date ?></span>
		</div>
	</div><?php } ?>
	<div class="x_control-group">
		<label class="x_control-label"><?php echo $__Context->lang->is_admin ?></label>
		<div class="x_controls">
			<label class="x_inline" for="is_admin"><input type="radio" name="is_admin" id="is_admin" value="Y"<?php if($__Context->member_info->is_admin == 'Y'){ ?> checked="checked"<?php } ?> > <?php echo $__Context->lang->cmd_yes ?></label>
			<label class="x_inline" for="not_admin"><input type="radio" name="is_admin" id="not_admin" value="N"<?php if($__Context->member_info->is_admin != 'Y'){ ?> checked="checked"<?php } ?> > <?php echo $__Context->lang->cmd_no ?></label>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="description"><?php echo $__Context->lang->description ?></label>
		<div class="x_controls">
			<textarea name="description" id="description" rows="2" cols="42" style="vertical-align:top"><?php echo escape($__Context->member_info->description, false) ?></textarea>
			<span class="x_help-inline"><?php echo $__Context->lang->about_member_description ?></span>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label"><?php echo $__Context->lang->member_group ?></label>
		<div class="x_controls">
			<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key=>$__Context->val){ ?><label for="group_<?php echo escape($__Context->key, false) ?>" class="x_inline">
				<input type="checkbox" name="group_srl_list[]" value="<?php echo escape($__Context->key, false) ?>" id="group_<?php echo escape($__Context->key, false) ?>"<?php if($__Context->member_info->group_list[$__Context->key]){ ?> checked="checked"<?php } ?> />
				<?php echo escape($__Context->val->title, false) ?>
			</label><?php } ?>
		</div>
	</div>
	<div class="x_clearfix btnArea">
		<?php if($__Context->member_srl){ ?><span class="x_pull-left"><button class="x_btn" type="button" onclick="history.go(-1)"><?php echo $__Context->lang->cmd_cancel ?></button></span><?php } ?>
		<span class="x_pull-right"><input class="x_btn x_btn-primary" type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
	</div>
</form>
<script>
(function($){
    $(function(){
        var option = { changeMonth: true, changeYear: true, gotoCurrent: false,yearRange:'-100:+10', dateFormat:'yy-mm-dd', onSelect:function(){
            $(this).prev('input[type="hidden"]').val(this.value.replace(/-/g,""))}
        };
        $.extend(option,$.datepicker.regional['<?php echo escape($__Context->lang_type, false) ?>']);
        $(".inputDate").datepicker(option);
		$(".dateRemover").click(function() {
			$(this).prevAll('input').val('');
			return false;
		});
    });
})(jQuery);
</script>
