<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/member/tpl/js/member_admin_group.js--><?php $__tmp=array('modules/member/tpl/js/member_admin_group.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script>
	xe.lang.groupDeleteMessage = '<?php echo $__Context->lang->msg_group_delete ?>';
	xe.lang.multilingual = '<?php echo $__Context->lang->cmd_set_multilingual ?>';
	xe.lang.modify = '<?php echo $__Context->lang->cmd_modify ?>';
	xe.lang.deleteMSG = '<?php echo $__Context->lang->cmd_delete ?>';
</script>
<style>
	._imageMarkButton img { max-height:16px }
	.filebox_item{max-height:16px}
</style>
<div class="x_page-header">
	<h1><?php echo $__Context->lang->member_group ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_member_group" target="_blank"><?php echo $__Context->lang->help ?></a></h1>
</div>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/tpl/1'){ ?><div class="message <?php echo escape($__Context->XE_VALIDATOR_MESSAGE_TYPE, false) ?>">
	<p><?php echo escape($__Context->XE_VALIDATOR_MESSAGE, false) ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/member/ruleset/insertGroupConfig.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="" method="post" id="fo_member_group" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertGroupConfig" />
	<input type="hidden" name="module" value="member" />
	<input type="hidden" name="act" value="procMemberAdminGroupConfig" />
	<input type="hidden" name="xe_validator_id" value="modules/member/tpl/1" />
	<table class="sortable x_table x_table-striped x_table-hover">
		<caption>
			<strong><?php echo escape(count($__Context->group_list), false);
echo $__Context->lang->msg_groups_exist ?></strong>
			<span class="x_pull-right" style="position:relative;top:7px">
				<?php echo $__Context->lang->use_group_image_mark ?>: 
				<label for="yes" class="x_inline"><input type="radio" name="group_image_mark" id="yes" value="Y"<?php if($__Context->config->group_image_mark == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_yes ?></label>
				<label for="no" class="x_inline"><input type="radio" name="group_image_mark" id="no" value="N"<?php if($__Context->config->group_image_mark != 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->cmd_no ?></label>
			</span>
		</caption>
		<thead>
			<tr>
				<th scope="col"><em style="color:red">*</em> <?php echo $__Context->lang->group_title ?></th>
				<th scope="col"><?php echo $__Context->lang->description ?></th>
				<th scope="col"><?php echo $__Context->lang->default_group ?></th>
				<th scope="col" class="_imageMarkButton"><?php echo $__Context->lang->group_image_mark ?></th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
				<td class="_imageMarkButton">&nbsp;</td>
				<td><a href="#" class="_addGroup"><?php echo $__Context->lang->cmd_add ?></a></td>
			</tr>
		</tfoot>
		<tbody class="uDrag _groupList">
			<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->group_srl=>$__Context->group_info){ ?><tr>
				<td>
					<div class="wrap">
						<button type="button" class="dragBtn">Move to</button>
						<input type="hidden" name="group_srls[]" value="<?php echo escape($__Context->group_info->group_srl, false) ?>" />
						<input type="text" name="group_titles[]" value="<?php echo htmlspecialchars($__Context->group_info->title, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" class="lang_code" title="<?php echo $__Context->lang->group_title ?>" />
						<?php if($__Context->group_info->title == '관리그룹'){ ?><a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_faq_administrator" target="_blank"><?php echo $__Context->lang->help ?></a><?php } ?>
					</div>
				</td>
				<td><input type="text" name="descriptions[]" value="<?php echo escape($__Context->group_info->description, false) ?>" title="<?php echo $__Context->lang->description ?>" /></td>
				<td><input type="radio" name="defaultGroup" value="<?php echo escape($__Context->group_info->group_srl, false) ?>" title="Default"<?php if($__Context->group_info->is_default=='Y'){ ?> checked="checked"<?php } ?> /></td>
				<td class="_imageMarkButton">
					<input type="hidden" name="image_marks[]" value="<?php echo escape($__Context->group_info->image_mark, false) ?>" class="_imgMarkHidden" />
					<?php if($__Context->config->group_image_mark == 'Y' && $__Context->group_info->image_mark){ ?><img src="<?php echo escape($__Context->group_info->image_mark, false) ?>" alt="<?php echo htmlspecialchars($__Context->group_info->title, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><?php } ?>
					<a href="#imageMark" class="modalAnchor _imageMark filebox"><?php echo $__Context->lang->cmd_modify ?></a>
				</td>
				<td><div class="_deleteTD"<?php if($__Context->group_info->is_default == 'Y'){ ?> style="display:none"<?php } ?>><a href="#<?php echo escape($__Context->group_srl, false) ?>" class="_deleteGroup"><?php echo $__Context->lang->cmd_delete ?></a></div></td>
			</tr><?php } ?>
			<tr style="display:none" class="_template">
				<td>
					<div class="wrap">
						<button type="button" class="dragBtn">Move to</button>
						<input type="hidden" name="group_srls[]" value="new" disabled="disabled"/>
						<input type="text" name="group_titles[]" value=""  disabled="disabled" class="lang_code" />
					</div>
				</td>
				<td><input type="text" name="descriptions[]" value="" disabled="disabled" /></td>
				<td><input type="radio" name="defaultGroup" value="" title="Default" disabled="disabled" /></td>
				<td class="_imageMarkButton"><input type="hidden" name="image_marks[]" value="" class="_imgMarkHidden" disabled="disabled" />
					<a href="#imageMark" class="modalAnchor _imageMark filebox"><?php echo $__Context->lang->cmd_modify ?></a></td>
				<td><div class="_deleteTD"><a href="#new" class="_deleteGroup"><?php echo $__Context->lang->cmd_delete ?></a></div></td>
			</tr>
		</tbody>
	</table>
	<div class="x_clearfix">
		<span class="x_pull-right"><input class="x_btn x_btn-primary" type="submit" value="<?php echo $__Context->lang->cmd_save ?>" /></span>
	</div>
</form>
<section class="x_modal" id="imageMark">
	<div class="x_modal-header">
		<h1><?php echo $__Context->lang->group_image_mark ?> <?php echo $__Context->lang->cmd_setup ?></h1>
	</div>
	<div class="x_modal-body">
		<?php if($__Context->fileBoxList){ ?>
			<p><?php echo $__Context->lang->usable_group_image_mark_list ?></p>
			<div class="filebox_list">
			</div>
		<?php } ?>
	</div>
	<div class="x_modal-footer">
		<button type="button" class="x_btn x_pull-left" data-hide="#exModal-1">Close</button>
		<p class="x_pull-right"><?php echo $__Context->lang->add_group_image_mark ?>: <a href="<?php echo escape(getUrl('', 'module','admin', 'act', 'dispModuleAdminFileBox'), false) ?>" target="_blank"><?php echo $__Context->lang->link_file_box ?></a></p>
	</div>
</section>
