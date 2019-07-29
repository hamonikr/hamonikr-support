<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_header.html') ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/member/skins/default/filter','find_member_account.xml');$__xmlFilter->compile(); ?>
<style>
.xm section { width: 600px; }
.xm section p { margin-bottom: 10px; }
.xm section .input-append input { border-radius: 4px; margin-right: 5px; }
.xm section .btsbtn.default_btn { background-color: rgb(43, 193, 164); border-radius: 4px; font-size: 12px; line-height: normal; }
</style>
<section>
	<h1><?php echo $__Context->lang->cmd_find_member_account_with_email ?></h1>
	<p><?php echo $__Context->lang->about_find_member_account ?></p>
	<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/skin/default/find_member_account/1'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
		<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
	</div><?php } ?>
	<?php Context::addJsFile("modules/member/ruleset/findAccount.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="<?php echo getUrl('', 'act', 'procMemberFindAccount') ?>" method="get" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="findAccount" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="act" value="procMemberFindAccount" />
		<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />
		<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
		<input type="hidden" name="xe_validator_id" value="modules/member/skin/default/find_member_account/1" />
		<span class="input-append">
			<input type="email" name="email_address" required placeholder="<?php echo $__Context->lang->email_address ?>" title="<?php echo $__Context->lang->email_address ?>" /> 
			<!--<input type="submit" class="btn btn-inverse" value="<?php echo $__Context->lang->cmd_find_member_account ?>" />-->
			<input type="submit" class="btsbtn default_btn" value="<?php echo $__Context->lang->cmd_find_member_account ?>"/>
		</span>
	</form>
</section>
<hr>
<?php if(count($__Context->lang->find_account_question_items)>1){ ?><section>
	<h1><?php echo $__Context->lang->cmd_find_member_account_with_email_question ?></h1>
	<p><?php echo $__Context->lang->about_find_account_question ?></p>
	<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/skin/default/find_member_account/2'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
		<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
	</div><?php } ?>
	<?php Context::addJsFile("./files/ruleset/find_member_account_by_question.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="<?php echo getUrl('', 'act', 'procMemberFindAccountByQuestion') ?>" method="get" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@find_member_account_by_question" />
		<input type="hidden" name="module" value="member" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="document_srl" value="<?php echo $__Context->document_srl ?>" />	
		<input type="hidden" name="act" value="procMemberFindAccountByQuestion" />
		<input type="hidden" name="success_return_url" value="<?php echo getUrl('', 'act', 'dispMemberGetTempPassword') ?>" />
		<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
		<input type="hidden" name="xe_validator_id" value="modules/member/skin/default/find_member_account/2" />
		<div>
			<?php if($__Context->identifier == 'user_id'){ ?><input type="text" name="user_id" required placeholder="<?php echo $__Context->lang->user_id ?>" title="<?php echo $__Context->lang->user_id ?>" /><?php } ?>
		</div>
		<div>
			<input type="email" name="email_address" required placeholder="<?php echo $__Context->lang->email_address ?>" title="<?php echo $__Context->lang->email_address ?>" />
		</div>
		<div>
			<select name="find_account_question">
			<?php for($__Context->i=1,$__Context->c=count($__Context->lang->find_account_question_items);$__Context->i<=$__Context->c;$__Context->i++){ ?>
				<option value="<?php echo $__Context->i ?>"><?php echo $__Context->lang->find_account_question_items[$__Context->i] ?></option>
			<?php } ?>
			</select>
		</div>
		<div>
			<input type="text" name="find_account_answer" value="" required placeholder="<?php echo $__Context->lang->find_account_question ?>" title="<?php echo $__Context->lang->find_account_question ?>" />
		</div>
		<!--<input type="submit" class="btn btn-inverse" value="<?php echo $__Context->lang->cmd_get_temp_password ?>" style="min-width:220px" />-->
		<input type="submit" class="btsbtn default_btn" value="<?php echo $__Context->lang->cmd_get_temp_password ?>" />
	</form>
</section><?php } ?>
<hr>
<section>
	<h1><?php echo $__Context->lang->cmd_resend_auth_mail ?></h1>
	<p><?php echo $__Context->lang->about_resend_auth_mail ?></p>
	<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/skin/default/find_member_account/3'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
		<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
	</div><?php } ?>
	<?php Context::addJsFile("modules/member/ruleset/resendAuthMail.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="<?php echo getUrl('', 'act', 'procMemberResendAuthMail') ?>" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="resendAuthMail" />
		<input type="hidden" name="module" value="member" />
		<input type="hidden" name="act" value="procMemberResendAuthMail" />
		<input type="hidden" name="success_return_url" value="<?php echo getUrl(act, $__Context->act) ?>" />
		<input type="hidden" name="xe_validator_id" value="modules/member/skin/default/find_member_account/3" />
		<span class="input-append">
			<input type="email" id="email_address" name="email_address" value="" required placeholder="<?php echo $__Context->lang->email_address ?>" title="<?php echo $__Context->lang->email_address ?>" />
			<!--<input type="submit" value="<?php echo $__Context->lang->cmd_resend_auth_mail ?>" class="btn btn-inverse" />-->
			<input type="submit" value="<?php echo $__Context->lang->cmd_resend_auth_mail ?>" class="btsbtn default_btn" />
		</span>
	</form>
</section>
<input class="btsbtn default_btn" onclick="location.href='/'" type="button" value="돌아가기" style="background-color: rgb(52, 152, 219); margin-bottom: 40px;">
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/skins/default','common_footer.html') ?>
