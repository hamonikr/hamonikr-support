<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/member/tpl/js/signup_check.js--><?php $__tmp=array('modules/member/tpl/js/signup_check.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#JSPLUGIN:ui--><?php Context::loadJavascriptPlugin('ui'); ?>
<!--#JSPLUGIN:ui.datepicker--><?php Context::loadJavascriptPlugin('ui.datepicker'); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_header.html') ?>
    <h1 style="border-bottom:1px solid #ccc"><?php echo $__Context->lang->cmd_signup ?></h1>
	<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/skins'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
		<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
	</div><?php } ?>
    <?php Context::addJsFile("./files/ruleset/insertMember.xml", FALSE, "", 0, "body", TRUE, "") ?><form  id="fo_insert_member" action="./" method="post" enctype="multipart/form-data" class="form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@insertMember" />
		<input type="hidden" name="act" value="procMemberInsert" />
		<input type="hidden" name="xe_validator_id" value="modules/member/skins" />
		<input type="hidden" name="success_return_url" value="<?php echo getUrl('act','dispMemberInfo') ?>" />
		<?php if($__Context->member_config->agreement){ ?><div class="agreement">
			<div class="text">
				<?php echo $__Context->member_config->agreement ?>
			</div>
			<div class="confirm">
				<label for="accept_agree">
					<input type="checkbox" name="accept_agreement" value="Y" id="accept_agree" />
					<?php echo $__Context->lang->about_accept_agreement ?>
				</label>
			</div>
		</div><?php } ?>
		<div class="control-group">
			<label for="<?php echo $__Context->identifierForm->name ?>" class="control-label"><em style="color:red">*</em> <?php echo $__Context->identifierForm->title ?></label>
			<div class="controls">
				<input<?php if($__Context->identifierForm->name!='email_address'){ ?> type="text"<?php };
if($__Context->identifierForm->name=='email_address'){ ?> type="email"<?php } ?> name="<?php echo $__Context->identifierForm->name ?>" id="<?php echo $__Context->identifierForm->name ?>" value="<?php echo $__Context->identifierForm->value ?>" required />
			</div>
		</div>
		<div class="control-group">
			<label for="password" class="control-label"><em style="color:red">*</em> <?php echo $__Context->lang->password ?></label>
			<div class="controls">
				<input type="password" name="password" id="password" value="" required />
				<p class="help-inline"><?php echo $__Context->lang->about_password_strength[$__Context->member_config->password_strength] ?></p>
			</div>
		</div>
		<div class="control-group">
			<label for="password2" class="control-label"><em style="color:red">*</em> <?php echo $__Context->lang->password3 ?></label>
			<div class="controls">
				<input type="password" name="password2" id="password2" value="" required />
			</div>
		</div>
		<?php if($__Context->formTags&&count($__Context->formTags))foreach($__Context->formTags as $__Context->formTag){;
if($__Context->formTag->name != 'signature'){ ?><div class="control-group">
			<label for="<?php echo $__Context->formTag->name ?>" class="control-label"><?php echo $__Context->formTag->title ?></label>
			<div class="controls"><?php echo $__Context->formTag->inputTag ?></div>
		</div><?php }} ?>
		<div class="control-group" style="display: none;">
			<div class="control-label"><?php echo $__Context->lang->allow_mailing ?></div>
			<div class="controls" style="padding-top:5px">
				<label for="mailingYes"><input type="radio" name="allow_mailing" id="mailingYes" value="Y"<?php if($__Context->member_info->allow_mailing == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_yes ?></label>
				<label for="mailingNo"><input type="radio" name="allow_mailing" id="mailingNo" value="N"<?php if($__Context->member_info->allow_mailing != 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_no ?></label>
			</div>
		</div>
		<div class="control-group" style="display: none;">
			<div class="control-label"><?php echo $__Context->lang->allow_message ?></div>
			<div class="controls" style="padding-top:5px">
				<?php if($__Context->lang->allow_message_type&&count($__Context->lang->allow_message_type))foreach($__Context->lang->allow_message_type as $__Context->key=>$__Context->val){ ?><label for="allow_<?php echo $__Context->key ?>"><input type="radio" name="allow_message" value="<?php echo $__Context->key ?>"<?php if($__Context->member_info->allow_message == $__Context->key || (!$__Context->member_info && $__Context->key == 'Y')){ ?> checked="checked"<?php } ?> id="allow_<?php echo $__Context->key ?>" /> <?php echo $__Context->val ?></label><?php } ?>
			</div>
		</div>
		<div class="btnArea" style="border-top:1px solid #ccc;padding-top:10px">
			<!--<input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" class="btn btn-inverse pull-right" />
			<a href="<?php echo getUrl('act','','member_srl','') ?>" class="btn pull-left can_see_web"><?php echo $__Context->lang->cmd_cancel ?></a>-->
			<input class="btsbtn default_btn" onclick="location.href='/'" type="button" value="돌아가기" style="background-color: rgb(52, 152, 219);">
			<input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" class="btsbtn default_btn" />
		</div>
	</form>
<script>
jQuery(function($){
	// label for setup
	$('.control-label[for]').each(function(){
		var $this = $(this);
		if($this.attr('for') == ''){
			$this.attr('for', $this.next().children(':visible:first').attr('id'));
		}
	});
});
(function($){
	$(function(){
		var option = { changeMonth: true, changeYear: true, gotoCurrent: false,yearRange:'-100:+10', dateFormat:'yy-mm-dd', onSelect:function(){
			$(this).prev('input[type="hidden"]').val(this.value.replace(/-/g,""))}
		};
		$.extend(option,$.datepicker.regional['<?php echo $__Context->lang_type ?>']);
		$(".inputDate").datepicker(option);
		$(".dateRemover").click(function() {
			$(this).prevAll('input').val('');
			return false;});
	});
})(jQuery);
</script>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_footer.html') ?>
