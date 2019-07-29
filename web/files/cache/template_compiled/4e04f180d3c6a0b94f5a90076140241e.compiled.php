<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/member/tpl','header.html') ?>
<!--#Meta:modules/member/tpl/js/signup_config.js--><?php $__tmp=array('modules/member/tpl/js/signup_config.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php Context::loadLang('modules/file/lang'); ?>
<!--#Meta:modules/editor/tpl/js/editor_module_config.js--><?php $__tmp=array('modules/editor/tpl/js/editor_module_config.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script>
	xe.lang.msg_delete_extend_form = '<?php echo $__Context->lang->msg_delete_extend_form ?>';
	xe.lang.confirm_delete = '<?php echo $__Context->lang->confirm_delete ?>';
	xe.lang.cmd_delete = '<?php echo $__Context->lang->cmd_delete ?>';
	xe.lang.msg_null_prohibited_id = '<?php echo $__Context->lang->msg_null_prohibited_id ?>';
	xe.lang.msg_null_prohibited_nick_name = '<?php echo $__Context->lang->msg_null_prohibited_nick_name ?>';
	xe.lang.msg_exists_user_id= '<?php echo $__Context->lang->msg_exists_user_id ?>';
</script>
<form action="./" class="x_form-horizontal" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="member" />
	<input type="hidden" name="act" value="procMemberAdminInsertSignupConfig" />
	<input type="hidden" name="success_return_url" value="<?php echo escape(getUrl('act', $__Context->act), false) ?>" />
	<input type="hidden" name="agreement" value="<?php echo escape($__Context->config->agreement, false) ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/member/tpl/1" />
	<div class="x_control-group">
		<label class="x_control-label" for="limit_day"><?php echo $__Context->lang->limit_day ?></label>
		<div class="x_controls">
			<input type="number" min="0" id="limit_day" name="limit_day" value="<?php echo escape($__Context->config->limit_day, false) ?>" /> <?php echo $__Context->lang->unit_day ?>
			<p class="x_help-block"><?php echo $__Context->lang->about_limit_day ?></p>
			<input type="text" name="limit_day_description" value="<?php echo escape($__Context->config->limit_day_description, false) ?>" placeholder="<?php echo $__Context->lang->limit_day_description ?>" style="width:90%" class="lang_code" />
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="prohibited_nick_name"><?php echo $__Context->lang->cmd_manage_nick_name ?></label>
		<div class="x_controls">
			<p><?php echo sprintf($__Context->lang->count_manage_nick_name, count($__Context->deniedNickNames)) ?></p>
			<ul class="textList" id="deniedNickNameList" style="margin-left:0">
				<?php if($__Context->deniedNickNames&&count($__Context->deniedNickNames))foreach($__Context->deniedNickNames as $__Context->nicknameInfo){ ?><li id="denied_<?php echo escape($__Context->nicknameInfo->nick_name, false) ?>"><?php echo escape($__Context->nicknameInfo->nick_name, false) ?> <button type="button" class="x_icon-remove" onclick="doUpdateDeniedNickName('<?php echo escape($__Context->nicknameInfo->nick_name, false) ?>','delete','<?php echo $__Context->lang->confirm_delete ?>');return false;"><?php echo $__Context->lang->delete ?></button></li><?php } ?>
			</ul>
			<textarea rows="2" cols="42" id="prohibited_nick_name" title="<?php echo $__Context->lang->add_prohibited_id ?>" style="vertical-align:top"></textarea>
			<button type="button" class="_addDeniedNickName x_btn"><?php echo $__Context->lang->add ?></button>
			<p class="x_help-inline"><?php echo $__Context->lang->multi_line_input ?></p>
		</div>
	</div>
	<?php if($__Context->useUserID){ ?><div class="x_control-group">
		<label class="x_control-label" for="prohibited_id"><?php echo $__Context->lang->cmd_manage_id ?></label>
		<div class="x_controls">
			<p><?php echo sprintf($__Context->lang->count_manage_id, count($__Context->deniedIDs)) ?></p>
			<ul class="textList" id="deniedList" style="margin-left:0">
				<?php if($__Context->deniedIDs&&count($__Context->deniedIDs))foreach($__Context->deniedIDs as $__Context->denied_info){ ?><li id="denied_<?php echo escape($__Context->denied_info->user_id, false) ?>"><?php echo escape($__Context->denied_info->user_id, false) ?> <button type="button" class="x_icon-remove" onclick="doUpdateDeniedID('<?php echo escape($__Context->denied_info->user_id, false) ?>','delete','<?php echo $__Context->lang->confirm_delete ?>');return false;"><?php echo $__Context->lang->delete ?></button></li><?php } ?>
			</ul>
			<textarea rows="2" cols="42" id="prohibited_id" title="<?php echo $__Context->lang->add_prohibited_id ?>" style="vertical-align:top"></textarea>
			<button type="button" class="_addDeniedID x_btn"><?php echo $__Context->lang->add ?></button>
			<p class="x_help-inline"><?php echo $__Context->lang->multi_line_input ?></p>
		</div>
	</div><?php } ?>
	<div class="x_control-group">
		<label class="x_control-label" for="redirect_url"><?php echo $__Context->lang->redirect_url ?></label>
		<div class="x_controls">
			<input class="module_search" type="text" name="redirect_url" value="<?php echo escape($__Context->config->redirect_url, false) ?>" />
			<?php if($__Context->config->redirect_url){ ?><button type="button" class="__redirect_url_btn x_btn"><?php echo $__Context->lang->delete ?></button><?php } ?>
			<p class="x_help-inline"><?php echo $__Context->lang->about_redirect_url ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="agreement"><?php echo $__Context->lang->agreement ?></label>
		<div class="x_controls"><?php echo $__Context->editor ?></div>
<style scoped>
#smart_content,
#smart_content>.tool{clear:none !important}
</style>
	</div>
	<div class="x_control-group">
		<p class="x_control-label"><?php echo $__Context->lang->cmd_manage_form ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_faq_member_joinform" target="_blank"><?php echo $__Context->lang->help ?></a></p>
		<div class="x_controls">
			<table class="__join_form sortable x_table x_table-striped x_table-hover">
				<thead>
					<tr>
						<th scope="col" class="nowr" style="text-align:center"><?php echo $__Context->lang->target ?></th>
						<th scope="col" class="nowr" style="text-align:center"><?php echo $__Context->lang->identifier ?>
							[<a href="#helpDefault" data-toggle>?</a>]
							<div class="layer x_alert x_alert-info" id="helpDefault">
								<p><?php echo $__Context->lang->about_identifier ?></p>
							</div>
						</th>
						<th scope="col" class="nowr" style="text-align:center"><?php echo $__Context->lang->use ?></th>
						<th scope="col" class="nowr" style="text-align:center"><?php echo $__Context->lang->public ?>
							[<a href="#helpPublic" data-toggle>?</a>]
							<div class="layer x_alert x_alert-info" id="helpPublic">
								<p><?php echo $__Context->lang->about_public_item ?></p>
							</div>
						</th>
						<th scope="col" class="nowr"><?php echo $__Context->lang->cmd_required ?>/<?php echo $__Context->lang->cmd_optional ?></th>
						<th scope="col" class="desc" style="text-align:center"><?php echo $__Context->lang->description ?></th>
						<th scope="col" class="nowr" style="text-align:center"><?php echo $__Context->lang->cmd_edit ?></th>
					</tr>
				</thead>
				<tbody class="uDrag">
					<?php  $__Context->fixed_public_list = array('nick_name', 'find_account_question', 'password', 'email_address') ?>
					<?php if($__Context->config->signupForm&&count($__Context->config->signupForm))foreach($__Context->config->signupForm as $__Context->item){ ?>
					<?php if($__Context->item->isIdentifier){ ?>
					<tr class="sticky">
						<input type="hidden" name="list_order[]" value="<?php echo escape($__Context->item->name, false) ?>" />
						<input type="hidden" name="usable_list[]" value="<?php echo escape($__Context->item->name, false) ?>"/>
						<input type="hidden" name="<?php echo escape($__Context->item->name, false) ?>" value="requierd"/>
						<th scope="row">
							<span class="_title" style="display:inline-block;white-space:pre-line;overflow:inherit;width:120px;text-overflow:ellipsis;padding-left:20px"><?php echo escape($__Context->item->title, false) ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_login_key" target="_blank"><?php echo $__Context->lang->help ?></a></span>
						</th>
						<td style="text-align:center"><input type="radio" name="identifier" value="<?php echo escape($__Context->item->name, false) ?>" checked="checked" /></td>
						<td style="text-align:center"><input type="checkbox" name="usable_list[]" value="<?php echo escape($__Context->item->name, false) ?>" title="<?php echo $__Context->lang->use ?>" checked="checked"  disabled="disabled" /></td>
						<td style="text-align:center"><input type="checkbox" name="is_<?php echo escape($__Context->item->name, false) ?>_public" value="Y"<?php if($__Context->item->isPublic == 'Y'){ ?> checked="checked"<?php };
if(in_array($__Context->item->name, $__Context->fixed_public_list) || !$__Context->item->isUse){ ?> disabled="disabled"<?php } ?> /></td>
						<td class="nowr">
							<label for="<?php echo escape($__Context->item->name, false) ?>_re" class="x_inline"><input type="radio" id="<?php echo escape($__Context->item->name, false) ?>_re" name="<?php echo escape($__Context->item->name, false) ?>" value="requierd" checked="checked" disabled="disabled" /> <?php echo $__Context->lang->cmd_required ?></label>
							<label for="<?php echo escape($__Context->item->name, false) ?>_op" class="x_inline"><input type="radio" id="<?php echo escape($__Context->item->name, false) ?>_op" name="<?php echo escape($__Context->item->name, false) ?>" value="option" disabled="disabled" /> <?php echo $__Context->lang->cmd_optional ?></label>
						</td>
						<td class="desc">&nbsp;</td>
						<td style="text-align:center">&nbsp;</td>
					</tr>
					<?php }elseif($__Context->item->isDefaultForm){ ?>
					<tr<?php if($__Context->item->imageType){ ?> class="_imageType"<?php } ?>>
						<input type="hidden" name="list_order[]" value="<?php echo escape($__Context->item->name, false) ?>" />
						<?php if($__Context->item->mustRequired){ ?><input type="hidden" name="usable_list[]" value="<?php echo escape($__Context->item->name, false) ?>"/><?php } ?>
						<?php if($__Context->item->mustRequired){ ?><input type="hidden" name="<?php echo escape($__Context->item->name, false) ?>" value="requierd"/><?php } ?>
						<th scope="row">
							<div class="wrap">
								<button type="button" class="dragBtn">Move to</button>
								<span class="_title" style="display:inline-block;white-space:pre-line;overflow:inherit;width:120px;text-overflow:ellipsis" title="<?php echo escape($__Context->item->title, false) ?>"><?php echo escape($__Context->item->title, false) ?></span>
							</div>
						</th>
						<td style="text-align:center"><?php if($__Context->item->name== 'email_address' || $__Context->item->name=='user_id'){ ?><input type="radio" name="identifier" value="<?php echo escape($__Context->item->name, false) ?>" /><?php } ?></td>
						<td style="text-align:center"><input type="checkbox" name="usable_list[]" value="<?php echo escape($__Context->item->name, false) ?>" title="<?php echo escape($__Context->lang->use, false) ?>"<?php if($__Context->item->mustRequired || $__Context->item->isUse){ ?> checked="checked"<?php };
if($__Context->item->mustRequired){ ?> disabled="disabled"<?php } ?> /></td>
						<td style="text-align:center"><input type="checkbox" name="is_<?php echo escape($__Context->item->name, false) ?>_public" value="Y"<?php if($__Context->item->isPublic == 'Y'){ ?> checked="checked"<?php };
if(in_array($__Context->item->name, $__Context->fixed_public_list) || !$__Context->item->isUse){ ?> disabled="disabled"<?php } ?> /></td>
						<td class="nowr">
							<label for="<?php echo escape($__Context->item->name, false) ?>_re" class="x_inline"><input type="radio" id="<?php echo escape($__Context->item->name, false) ?>_re" name="<?php echo escape($__Context->item->name, false) ?>" value="required"<?php if($__Context->item->mustRequired || $__Context->item->required){ ?> checked="checked"<?php };
if($__Context->item->mustRequired || !$__Context->item->isUse){ ?> disabled="disabled"<?php } ?> /> <?php echo $__Context->lang->cmd_required ?></label>
							<label for="<?php echo escape($__Context->item->name, false) ?>_op" class="x_inline"><input type="radio" id="<?php echo escape($__Context->item->name, false) ?>_op" name="<?php echo escape($__Context->item->name, false) ?>" value="option"<?php if(!$__Context->item->mustRequired && ($__Context->item->isUse && !$__Context->item->required)){ ?> checked="checked"<?php };
if($__Context->item->mustRequired || !$__Context->item->isUse){ ?> disabled="disabled"<?php } ?> /> <?php echo $__Context->lang->cmd_optional ?></label>
							<?php if($__Context->item->imageType){ ?><div class="_subItem"<?php if(!$__Context->item->isUse){ ?> style="display:none"<?php } ?>>
								<label for="<?php echo escape($__Context->item->name, false) ?>_max_width" class="x_inline"><?php echo $__Context->lang->cmd_image_max_width ?> <input type="number" min="1" name="<?php echo escape($__Context->item->name, false) ?>_max_width" id="<?php echo escape($__Context->item->name, false) ?>_max_width" value="<?php echo escape($__Context->item->max_width, false) ?>" /> px</label>
								<label for="<?php echo escape($__Context->item->name, false) ?>_max_height" class="x_inline"><?php echo $__Context->lang->cmd_image_max_height ?> <input type="number" min="1" name="<?php echo escape($__Context->item->name, false) ?>_max_height" id="<?php echo escape($__Context->item->name, false) ?>_max_height" value="<?php echo escape($__Context->item->max_height, false) ?>" /> px</label>
								<label for="<?php echo escape($__Context->item->name, false) ?>_max_filesize"><?php echo $__Context->lang->allowed_filesize ?> : <input type="number" min="1" name="<?php echo escape($__Context->item->name, false) ?>_max_filesize" id="<?php echo escape($__Context->item->name, false) ?>_max_filesize" value="<?php echo escape($__Context->item->max_filesize, false) ?>" /> KB</label>
								<?php if($__Context->item->name == 'profile_image'){ ?><label for="<?php echo escape($__Context->item->name, false) ?>_transparent_thumbnail"><input type="checkbox" value="Y" name="<?php echo escape($__Context->item->name, false) ?>_transparent_thumbnail" id="<?php echo escape($__Context->item->name, false) ?>_transparent_thumbnail"<?php if($__Context->item->allow_transparent_thumbnail){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->allow_transparent_thumbnail ?></label><?php } ?>
							</div><?php } ?>
							<?php if($__Context->item->name == 'signature'){ ?><div class="_subItem"<?php if(!$__Context->item->isUse){ ?> style="display:none;padding-top:5px"<?php } ?>>
								<select id="signature_editor" name="signature_editor_skin" onchange="getEditorSkinColorList(this.value)">
								<?php if($__Context->editor_skin_list&&count($__Context->editor_skin_list))foreach($__Context->editor_skin_list as $__Context->editor_skin){ ?>
								<option value="<?php echo escape($__Context->editor_skin, false) ?>"<?php if($__Context->editor_skin==$__Context->config->signature_editor_skin){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->editor_skin, false) ?></option>
								<?php } ?>
								</select>
								<select name="sel_editor_colorset" id="sel_editor_colorset" style="display:none">
								</select>
								<script>//<![CDATA[
									getEditorSkinColorList('<?php echo escape($__Context->config->signature_editor_skin, false) ?>','<?php echo escape($__Context->config->sel_editor_colorset, false) ?>');
								//]]></script>
							</div><?php } ?>
						</td>
						<td class="desc">&nbsp;</td>
						<td style="text-align:center">&nbsp;</td>
					</tr>
					<?php }else{ ?>
					<tr>
						<th scope="row">
							<input type="hidden" name="list_order[]" value="<?php echo escape($__Context->item->name, false) ?>" />
							<input type="hidden" name="<?php echo escape($__Context->item->name, false) ?>_member_join_form_srl" value="<?php echo escape($__Context->item->member_join_form_srl, false) ?>" />
							<div class="wrap">
								<button type="button" class="dragBtn">Move to</button>
								<span class="_title" style="display:inline-block;white-space:pre-line;overflow:inherit;width:120px;text-overflow:ellipsis" title="<?php echo escape($__Context->item->title, false) ?>"><?php echo escape($__Context->item->title, false) ?></span>
							</div>
						</th>
						<td></td>
						<td style="text-align:center"><input type="checkbox" name="usable_list[]" value="<?php echo escape($__Context->item->name, false) ?>" title="<?php echo escape($__Context->lang->use, false) ?>"<?php if($__Context->item->isUse){ ?> checked="checked"<?php } ?> /></td>
						<td style="text-align:center"><input type="checkbox" name="is_<?php echo escape($__Context->item->name, false) ?>_public" value="Y"<?php if($__Context->item->isPublic == 'Y'){ ?> checked="checked"<?php };
if(!$__Context->item->isUse){ ?> disabled="disabled"<?php } ?> /></td>
						<td class="nowr">
							<label for="<?php echo escape($__Context->item->name, false) ?>_re" class="x_inline"><input type="radio" id="<?php echo escape($__Context->item->name, false) ?>_re" name="<?php echo escape($__Context->item->name, false) ?>" value="required"<?php if($__Context->item->required){ ?> checked="checked"<?php };
if(!$__Context->item->isUse){ ?> disabled="disabled"<?php } ?>/> <?php echo $__Context->lang->cmd_required ?></label>
							<label for="<?php echo escape($__Context->item->name, false) ?>_op" class="x_inline"><input type="radio" id="<?php echo escape($__Context->item->name, false) ?>_op" name="<?php echo escape($__Context->item->name, false) ?>" value="option"<?php if($__Context->item->isUse && !$__Context->item->required){ ?> checked="checked"<?php };
if(!$__Context->item->isUse){ ?> disabled="disabled"<?php } ?> /> <?php echo $__Context->lang->cmd_optional ?></label>
						</td>
						<td class="desc" title="<?php echo escape($__Context->item->description, false) ?>"><?php echo escape($__Context->item->description, false) ?></td>
						<td id="<?php echo escape($__Context->item->member_join_form_srl, false) ?>" class="nowr" style="text-align:center"><a href="#userDefine" class="modalAnchor _extendFormEdit"><?php echo $__Context->lang->cmd_edit ?></a> <i>|</i> <a href="#" class="_extendFormDelete"><?php echo $__Context->lang->cmd_delete ?></a></td>
					</tr>
					<?php } ?>
					<?php } ?>
				</tbody>
			</table>
			<a href="#userDefine" class="modalAnchor _extendFormEdit x_btn"><i class="x_icon-plus-sign"></i> <?php echo $__Context->lang->add_extend_form ?></a>
<style scoped>
.x_table .desc{white-space:nowrap;overflow:hidden;max-width:200px;text-overflow:ellipsis}
@media all and (max-width:1250px){
.x_table .desc{display:none}
}
</style>
		</div>
	</div>
	</section>
	<div class="x_clearfix btnArea">
		<span class="x_pull-right"><input class="x_btn x_btn-primary" type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
	</div>
</form>
<?php Context::addJsFile("modules/member/ruleset/insertJoinForm.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" class="x_modal" id="userDefine"  method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertJoinForm" />
	<input type="hidden" name="module" value="member" />
	<input type="hidden" name="act" value="procMemberAdminInsertJoinForm" />
	<input type="hidden" name="success_return_url" value="<?php echo escape(getUrl('act', $__Context->act), false) ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/member/tpl/1" />
	<div id="extendForm" class="x_form-horizontal">
	</div>
</form>
<style scoped>
@media all and (min-width:981px){
#userDefine{max-width:60%;margin-left:-30%}
}
</style>
