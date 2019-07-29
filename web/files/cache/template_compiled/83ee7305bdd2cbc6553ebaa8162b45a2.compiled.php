<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/module/tpl/filter','insert_grant.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/module/tpl/js/module_admin.js--><?php $__tmp=array('modules/module/tpl/js/module_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script>
    jQuery( function() { jQuery('.grant_default').change( function(event) { doShowGrantZone(); } ); doShowGrantZone() } );
</script>
<form action="./" method="post" onsubmit="return procFilter(this, insert_grant)" id="fo_obj"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module_srl" value="<?php echo escape($__Context->module_srl, false) ?>" />
	<input type="hidden" name="admin_member" value="<?php if($__Context->admin_member&&count($__Context->admin_member))foreach($__Context->admin_member as $__Context->key => $__Context->val){;
if($__Context->member_config->identifier == 'email_address'){;
echo escape($__Context->val->email_address, false) ?>,<?php }else{;
echo escape($__Context->val->user_id, false) ?>,<?php };
} ?>" />
	
	<div class="section x_form-horizontal">
		<h1><?php echo $__Context->lang->module_admin ?></h1>
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
				<a href="#adminListHelp" class="x_icon-question-sign" data-toggle="#adminListHelp"><?php echo $__Context->lang->help ?></a>
				<span id="adminListHelp" hidden><?php echo $__Context->lang->about_admin_id ?></span>
			</div>
		</div>
	</div>
	<div class="section">
		<h1><?php echo $__Context->lang->permission_setting ?></h1>
		<div class="x_form-horizontal">
			<?php if($__Context->grant_list&&count($__Context->grant_list))foreach($__Context->grant_list as $__Context->grant_name=>$__Context->grant_item){ ?><div class="x_control-group">
				<label for="<?php echo escape($__Context->grant_name, false) ?>_default" class="x_control-label"><?php echo escape($__Context->grant_item->title, false) ?></label>
				<div class="x_controls">
					<select name="<?php echo escape($__Context->grant_name, false) ?>_default" id="<?php echo escape($__Context->grant_name, false) ?>_default" class="grant_default">
						<?php if($__Context->grant_item->default == 'guest'){ ?><option value="0" <?php if($__Context->default_grant[$__Context->grant_name]=='all'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->grant_to_all ?></option><?php } ?>
						<?php if($__Context->grant_item->default != 'manager'){ ?><option value="-1" <?php if($__Context->default_grant[$__Context->grant_name]=='member'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->grant_to_login_user ?></option><?php } ?>
						<?php if($__Context->grant_item->default != 'manager'){ ?><option value="-2" <?php if($__Context->default_grant[$__Context->grant_name]=='site'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->grant_to_site_user ?></option><?php } ?>
						<option value="-3" <?php if($__Context->default_grant[$__Context->grant_name]=='manager'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->grant_to_admin ?></option>
						<option value="" <?php if($__Context->default_grant[$__Context->grant_name]=='group'){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->grant_to_group ?></option>
					</select>
					<?php if($__Context->grant_name == 'access'){ ?><p class="x_help-inline"><a href="#<?php echo escape($__Context->grant_name, false) ?>" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a> <span hidden id="<?php echo escape($__Context->grant_name, false) ?>"><?php echo $__Context->lang->about_grant_deatil ?></span></p><?php } ?>
					<div id="zone_<?php echo escape($__Context->grant_name, false) ?>" hidden style="margin:8px 0 0 0">
						<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->group_srl => $__Context->group_item){ ?>
						<label for="grant_<?php echo escape($__Context->grant_name, false) ?>_<?php echo escape($__Context->group_srl, false) ?>" class="x_inline"><input type="checkbox" class="checkbox" name="<?php echo escape($__Context->grant_name, false) ?>" value="<?php echo escape($__Context->group_item->group_srl, false) ?>" id="grant_<?php echo escape($__Context->grant_name, false) ?>_<?php echo escape($__Context->group_srl, false) ?>"<?php if(is_array($__Context->selected_group[$__Context->grant_name])&&in_array($__Context->group_srl,$__Context->selected_group[$__Context->grant_name])){ ?> checked="checked"<?php } ?> /> <?php echo escape($__Context->group_item->title, false) ?></label>
						<?php } ?>
					</div>
				</div>
			</div><?php } ?>
		</div>
	</div>
	<div class="x_clearfix btnArea">
		<div class="x_pull-right">
			<button class="x_btn x_btn-primary" type="submit"><?php echo $__Context->lang->cmd_save ?></button>
		</div>
	</div>
</form>
