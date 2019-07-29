<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/admin/tpl/js/config.js--><?php $__tmp=array('modules/admin/tpl/js/config.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php Context::loadLang(''); ?>
<!--#Meta:modules/session/tpl/js/session.js--><?php $__tmp=array('modules/session/tpl/js/session.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="x_page-header">
	<h1><?php echo $__Context->lang->menu_gnb_sub['adminConfigurationGeneral'] ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_config_general" target="_blank"><?php echo $__Context->lang->help ?></a></h1>
</div>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/admin/tpl/config_general/1'){ ?><div class="message <?php echo escape($__Context->XE_VALIDATOR_MESSAGE_TYPE, false) ?>">
	<p><?php echo escape($__Context->XE_VALIDATOR_MESSAGE, false) ?></p>
</div><?php } ?>
<section class="section">
	<h1><?php echo $__Context->lang->subtitle_primary ?></h1>
	<form action="./" method="post" enctype="multipart/form-data" id="config_form" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="install" />
		<input type="hidden" name="act" value="procInstallAdminConfig" />
		<input type="hidden" name="xe_validator_id" value="modules/admin/tpl/config_general/1" />
		<div></div>
	</form>
	<div class="x_form-horizontal" id="admin_config">
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->site_title ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_config_general_site_title" target="_blank"><?php echo $__Context->lang->help ?></a></label>
			<div class="x_controls">
				<input type="text" name="site_title" value="<?php echo escape($__Context->siteTitle, false) ?>" />
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="_target_module"><?php echo $__Context->lang->start_module ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_config_general_homepage" target="_blank"><?php echo $__Context->lang->help ?></a></label>
			<div class="x_controls">
				<input class="module_search" type="text" name="index_module_srl" value="<?php echo escape($__Context->start_module->index_module_srl, false) ?>" />
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->lang_select ?></label>
			<div class="x_controls">
				<?php if($__Context->langs&&count($__Context->langs))foreach($__Context->langs as $__Context->key=>$__Context->val){ ?><label for="lang_<?php echo escape($__Context->key, false) ?>" class="x_inline">
					<input type="checkbox" name="selected_lang[]" id="lang_<?php echo escape($__Context->key, false) ?>" value="<?php echo escape($__Context->key, false) ?>"<?php if($__Context->key==$__Context->selected_lang){ ?> disabled="disabled"<?php };
if(isset($__Context->lang_selected[$__Context->key])){ ?> checked="checked"<?php } ?> />
					<?php echo escape($__Context->val, false) ?>
					<?php if($__Context->key==$__Context->selected_lang){ ?><input type="hidden" name="selected_lang[]" id="lang_<?php echo escape($__Context->key, false) ?>" value="<?php echo escape($__Context->key, false) ?>" /><?php } ?>
				</label><?php } ?>
			</div>
		</div>
		<div class="x_control-group">
			<label for="change_lang_type" class="x_control-label"><?php echo $__Context->lang->default_lang ?></label>
			<div class="x_controls">
				<select name="change_lang_type" id="change_lang_type">
					<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->key, false) ?>"<?php if($__Context->key==$__Context->selected_lang){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val, false) ?></option><?php } ?>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="time_zone"><?php echo $__Context->lang->timezone ?></label>
			<div class="x_controls">
				<select name="time_zone" id="time_zone" style="width:auto">
					<?php if($__Context->time_zone_list&&count($__Context->time_zone_list))foreach($__Context->time_zone_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->key, false) ?>"<?php if($__Context->time_zone==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val, false) ?></option><?php } ?>
				</select>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->use_mobile_view ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_config_general_mobile_view" target="_blank"><?php echo $__Context->lang->help ?></a></label>
			<div class="x_controls">
				<label for="use_mobile_view_y" class="x_inline">
					<input type="radio" name="use_mobile_view" id="use_mobile_view_y" value="Y"<?php if($__Context->use_mobile_view == 'Y'){ ?> checked="checked"<?php } ?> />
					<?php echo $__Context->lang->cmd_yes ?>
				</label>
				<label for="use_mobile_view_n" class="x_inline">
					<input type="radio" name="use_mobile_view" id="use_mobile_view_n" value="N"<?php if($__Context->use_mobile_view != 'Y'){ ?> checked="checked"<?php } ?> />
					<?php echo $__Context->lang->cmd_no ?>
				</label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->thumbnail_type ?></label>
			<div class="x_controls">
				<label for="thumbnail_type_crop" class="x_inline">
					<input type="radio" name="thumbnail_type" id="thumbnail_type_crop" value="corp"<?php if($__Context->thumbnail_type != 'ratio'){ ?> checked="checked"<?php } ?> />
					<?php echo $__Context->lang->corp ?>
				</label>
				<label for="thumbnail_type_ratio" class="x_inline">
					<input type="radio" name="thumbnail_type" id="thumbnail_type_ratio" value="ratio"<?php if($__Context->thumbnail_type == 'ratio'){ ?> checked="checked"<?php } ?> />
					<?php echo $__Context->lang->ratio ?>
				</label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="htmlFooter"><?php echo $__Context->lang->input_footer_script ?></label>
			<div class="x_controls" style="margin-right:14px">
				<textarea name="htmlFooter" id="htmlFooter" rows="4" cols="42" style="width:100%" placeholder="<?php echo $__Context->lang->detail_input_footer_script ?>" title="<?php echo $__Context->lang->detail_input_footer_script ?>"><?php echo escape($__Context->htmlFooter, false) ?></textarea>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->allow_use_favicon ?></label>
			<div class="x_controls">
				<p id="faviconPreview">
					<img src="<?php echo escape($__Context->favicon_url, false) ?>" alt="favicon" class="fn1" style="width:16px;height:16px">
					<img src="<?php echo escape($__Context->favicon_url, false) ?>" alt="favicon Image" class="fn2" style="width:16px;height:16px">
				</p>
				<label><input type="checkbox" name="is_delete_favicon" value="1" /> <?php echo $__Context->lang->cmd_delete ?></label>
				<form action="./" enctype="multipart/form-data" method="post" target="hiddenIframe" class="imageUpload" style="margin:0"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="module" value="install">
					<input type="hidden" name="act" value="procInstallAdminConfigIconUpload">
					<p>
						<input type="file" name="favicon" id="favicon" title="Favicon"/>
						<input class="x_btn" type="submit" value="<?php echo $__Context->lang->cmd_preview ?>" style="vertical-align:top">
					</p>
				</form>
				<span class="x_help-block"><?php echo $__Context->lang->about_use_favicon ?></span>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->allow_use_mobile_icon ?></label>
			<div class="x_controls">
				<p id="mobiconPreview">
					<img src="<?php echo escape($__Context->mobicon_url, false) ?>" alt="Mobile Home Icon" width="32" height="32" />
					<span>www</span>
				</p>
				<label><input type="checkbox" name="is_delete_mobicon" value="1" /> <?php echo $__Context->lang->cmd_delete ?></label>
				<form action="./" enctype="multipart/form-data" method="post" target="hiddenIframe" class="imageUpload" style="margin:0"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="module" value="install">
					<input type="hidden" name="act" value="procInstallAdminConfigIconUpload">
					<p>
						<input type="file" name="mobicon" id="mobicon" title="Mobile Home Icon"/>
						<input class="x_btn" type="submit" value="<?php echo $__Context->lang->cmd_preview ?>" style="vertical-align:top">
					</p>
				</form>
				<span class="x_help-block"><?php echo $__Context->lang->detail_use_mobile_icon ?></span>
			</div>
		</div>
		<div class="x_clearfix btnArea">
			<div class="x_pull-right">
				<button type="submit" class="x_btn x_btn-primary" onclick="doSubmitConfig()"><?php echo $__Context->lang->cmd_save ?></button>
			</div>
		</div>
	</div>
</section>
<section class="section">
	<h1>embed Filter <?php echo $__Context->lang->subtitle_embed_whitelist ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_config_embed_filter" target="_blank"><?php echo $__Context->lang->help ?></a></h1>
	<form action="./" method="post" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="admin" />
		<input type="hidden" name="act" value="procAdminUpdateEmbedWhitelist" />
		<input type="hidden" name="xe_validator_id" value="modules/admin/tpl/config_general/1" />
		<div class="x_control-group">
			<label class="x_control-label" for="embed_white_iframe">iFrame <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_config_embed_filter_iframe" target="_blank"><?php echo $__Context->lang->help ?></a></label>
			<div class="x_controls" style="margin-right:14px">
				<textarea name="embed_white_iframe" id="embed_white_iframe" rows="4" style="width:100%;"><?php echo escape($__Context->embed_white_iframe, false) ?></textarea>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="embed_white_object">object/embed</label>
			<div class="x_controls" style="margin-right:14px">
				<textarea name="embed_white_object" id="embed_white_object" rows="4" cols="42" style="width:100%;"><?php echo escape($__Context->embed_white_object, false) ?></textarea>
			</div>
		</div>
		<div class="x_clearfix btnArea">
			<div class="x_pull-right">
				<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_save ?></button>
			</div>
		</div>
	</form>
</section>
<section class="section collapsed">
	<h1><?php echo $__Context->lang->subtitle_advanced ?></h1>
	<form action="./" method="post" enctype="multipart/form-data" class="x_form-horizontal"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="install" />
		<input type="hidden" name="act" value="procInstallAdminSaveTimeZone" />
		<input type="hidden" name="xe_validator_id" value="modules/admin/tpl/config_general/1" />
		<div class="x_control-group">
			<label class="x_control-label" for="admin_ip_list"><?php echo $__Context->lang->admin_ip_limit ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_config_general_admin_iplist" target="_blank"><?php echo $__Context->lang->help ?></a></label>
			<div class="x_controls">
				<textarea name="admin_ip_list" id="admin_ip_list" rows="4" cols="42" placeholder="<?php echo escape($__Context->IP, false) ?>(<?php echo $__Context->lang->local_ip_address ?>)" style="margin-right:10px"><?php echo escape($__Context->admin_ip_list, false) ?></textarea>
				<p class="x_help-block"><?php echo $__Context->lang->about_ipaddress_input ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="default_url"><?php echo $__Context->lang->default_url ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_config_general_default_url" target="_blank"><?php echo $__Context->lang->help ?></a></label>
			<div class="x_controls">
				<input type="url" name="default_url" id="default_url" value="<?php echo escape($__Context->default_url, false) ?>"/>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->use_ssl ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_config_general_ssl" target="_blank"><?php echo $__Context->lang->help ?></a></label>
			<div class="x_controls">
				<?php if($__Context->lang->ssl_options&&count($__Context->lang->ssl_options))foreach($__Context->lang->ssl_options as $__Context->key => $__Context->val){ ?>
				<label for="ssl_<?php echo escape($__Context->key, false) ?>" class="x_inline"><input type="radio" name="use_ssl" id="ssl_<?php echo escape($__Context->key, false) ?>" value="<?php echo escape($__Context->key, false) ?>"<?php if($__Context->use_ssl==$__Context->key){ ?> checked="checked"<?php } ?> /> <?php echo escape($__Context->val, false) ?></label>
				<?php } ?>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->server_ports ?></label>
			<div class="x_controls">
				<label for="http_port" class="x_inline" style="margin-bottom:0;padding-top:0">HTTP: <input type="number" name="http_port" id="http_port" size="5" value="<?php echo escape($__Context->http_port, false) ?>" /></label>
				<label for="https_port" class="x_inline" style="margin-bottom:0;padding-top:0">HTTPS: <input type="number" name="https_port" id="https_port" size="5" value="<?php echo escape($__Context->https_port, false) ?>" /></label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->use_rewrite ?></label>
			<div class="x_controls">
				<label for="use_rewrite_y" class="x_inline"><input type="radio" name="use_rewrite" id="use_rewrite_y" value="Y"<?php if($__Context->use_rewrite == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_yes ?></label>
				<label for="use_rewrite_n" class="x_inline"><input type="radio" name="use_rewrite" id="use_rewrite_n" value="N"<?php if($__Context->use_rewrite != 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_no ?></label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->use_sso ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_config_general_sso" target="_blank"><?php echo $__Context->lang->help ?></a></label>
			<div class="x_controls">
				<label for="sso_y" class="x_inline"><input type="radio" name="use_sso" id="sso_y" value="Y"<?php if($__Context->use_sso=='Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_yes ?></label>
				<label for="sso_n" class="x_inline"><input type="radio" name="use_sso" id="sso_n" value="N"<?php if($__Context->use_sso!='Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_no ?></label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->use_db_session ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_config_general_db_session" target="_blank"><?php echo $__Context->lang->help ?></a></label>
			<div class="x_controls">
				<label for="use_db_session_y" class="x_inline"><input type="radio" name="use_db_session" id="use_db_session_y" value="Y"<?php if($__Context->use_db_session=='Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_yes ?></label>
				<label for="use_db_session_n" class="x_inline"><input type="radio" name="use_db_session" id="use_db_session_n" value="N"<?php if($__Context->use_db_session!='Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_no ?></label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->qmail_compatibility ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_config_general_qmail" target="_blank"><?php echo $__Context->lang->help ?></a></label>
			<div class="x_controls">
				<label for="qmail_compatibility_y" class="x_inline"><input type="radio" name="qmail_compatibility" id="qmail_compatibility_y" value="Y"<?php if($__Context->qmail_compatibility=='Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_yes ?></label>
				<label for="qmail_compatibility_n" class="x_inline"><input type="radio" name="qmail_compatibility" id="qmail_compatibility_n" value="N"<?php if($__Context->qmail_compatibility!='Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_no ?></label>
			</div>
		</div>
		<div class="x_clearfix btnArea">
			<div class="x_pull-right">
				<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_save ?></button>
			</div>
		</div>
	</form>
</section>
<section class="section <?php if($__Context->use_sitelock != 'Y'){ ?>collapsed<?php } ?>">
	<h1><?php echo $__Context->lang->subtitle_sitelock ?></h1>
	<?php Context::addJsFile("modules/admin/ruleset/sitelock.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" method="post" enctype="multipart/form-data" class="x_form-horizontal" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="sitelock" />
		<input type="hidden" name="module" value="admin" />
		<input type="hidden" name="act" value="procAdminUpdateSitelock" />
		<input type="hidden" name="xe_validator_id" value="modules/admin/tpl/config_general/1" />
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->use_sitelock ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_config_general_sitelock" target="_blank"><?php echo $__Context->lang->help ?></a></label>
			<div class="x_controls">
				<label for="use_sitelock_y" class="x_inline"><input type="radio" name="use_sitelock" id="use_sitelock_y" value="Y"<?php if($__Context->use_sitelock=='Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_yes ?></label>
				<label for="use_sitelock_n" class="x_inline"><input type="radio" name="use_sitelock" id="use_sitelock_n" value="N"<?php if($__Context->use_sitelock!='Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_no ?></label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="sitelock_whitelist"><?php echo $__Context->lang->sitelock_whitelist ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_config_general_sitelock_whitelist" target="_blank"><?php echo $__Context->lang->help ?></a></label>
			<div class="x_controls">
				<textarea name="sitelock_whitelist" id="sitelock_whitelist" rows="4" cols="42" placeholder="<?php echo escape($__Context->IP, false) ?>(<?php echo $__Context->lang->local_ip_address ?>)" style="margin-right:10px"><?php echo escape($__Context->sitelock_whitelist, false) ?></textarea>
				<span class="x_help-block"><?php echo $__Context->lang->sitelock_warning_whitelist ?></span>
				<span class="x_help-block"><?php echo $__Context->lang->your_ip ?> : <?php echo escape($__Context->remote_addr, false) ?></span>
				<br />
				<p class="x_help-block"><?php echo $__Context->lang->about_ipaddress_input ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="sitelock_title"><?php echo $__Context->lang->sitelock_title ?></label>
			<div class="x_controls">
				<input type="text" name="sitelock_title" id="sitelock_title" value="<?php echo escape($__Context->sitelock_title, false) ?>"/>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="sitelock_message"><?php echo $__Context->lang->sitelock_message ?></label>
			<div class="x_controls" style="margin-right:14px">
				<textarea name="sitelock_message" id="sitelock_message" rows="4" cols="42" style="width:100%;"><?php echo escape($__Context->sitelock_message, false) ?></textarea>
				<span class="x_help-block"><?php echo $__Context->lang->sitelock_message_help ?></span>
			</div>
		</div>
		<div class="x_clearfix btnArea">
			<div class="x_pull-right">
				<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_save ?></button>
			</div>
		</div>
	</form>
</section>
<iframe name="hiddenIframe" src="about:blank" hidden></iframe>
<script>
function afterUploadConfigImage(name, fileName, tmpFileName)
{
	jQuery('#' + name + 'Preview img').attr('src', tmpFileName);
	jQuery('#' + name).val('');
}
function alertUploadMessage(msg) {
	alert(msg);
}
function doSubmitConfig()
{
	var $forms = jQuery('#admin_config').find('input[name][type="hidden"], input[name][type="text"], input[name][type="checkbox"]:checked, select[name], textarea[name], input[name][type="radio"]:checked');
	var $configForm = jQuery('#config_form');
	var $container = $configForm.children('div');
	$container.empty();
	$forms.each(function($)
	{
		var $this = jQuery(this);
		if($this.parents('.imageUpload').length) return;
		var $input = jQuery('<input>').attr('type', 'hidden').attr('name', $this.attr('name')).val($this.val());
		$container.append($input);
	});
	$configForm.submit();
}
</script>
