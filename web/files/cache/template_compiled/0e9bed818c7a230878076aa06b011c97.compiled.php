<?php if(!defined("__XE__"))exit;?><div class="x_page-header">
	<h1><?php echo $__Context->lang->installed_addons ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_advanced_installed_addon" target="_blank"><?php echo $__Context->lang->help ?></a></h1>
</div>
<p><?php echo $__Context->lang->about_installed_addon ?></p>
<form action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="addon" />
	<input type="hidden" name="act" value="procAddonAdminSaveActivate" />
	<input type="hidden" name="sccess_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false) ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/addon/tpl/addon_list/1" />
	<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/addon/tpl/addon_list/1'){ ?><div class="message <?php echo escape($__Context->XE_VALIDATOR_MESSAGE_TYPE, false) ?>">
		<p><?php echo escape($__Context->XE_VALIDATOR_MESSAGE, false) ?></p>
	</div><?php } ?>
	<table class="x_table x_table-striped x_table-hover dsTg">
		<caption>
			<strong>All(<?php echo escape($__Context->addon_count, false) ?>)</strong>
			<div class="x_pull-right x_btn-group">
				<button type="button" class="x_btn x_active __simple"><?php echo $__Context->lang->simple_view ?></button>
				<button type="button" class="x_btn __detail"><?php echo $__Context->lang->detail_view ?></button>
			</div>
		</caption>
		<thead>
			<tr>
				<th class="title"><?php echo $__Context->lang->addon_name ?></th>
				<th class="nowr"><?php echo $__Context->lang->version ?></th>
				<th class="nowr"><?php echo $__Context->lang->author ?></th>
				<th class="nowr"><?php echo $__Context->lang->installed_path ?></th>
				<th class="nowr"><?php echo $__Context->lang->cmd_setup ?></th>
				<th class="nowr">PC</th>
				<th class="nowr">Mobile</th>
				<th class="nowr"><?php echo $__Context->lang->cmd_delete ?></th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->addon_list&&count($__Context->addon_list))foreach($__Context->addon_list as $__Context->addon){ ?><tr>
				<td class="title">
					<p><strong><?php echo escape($__Context->addon->title, false) ?></strong></p>
					<p><?php echo $__Context->addon->description ?></p>
					<?php if($__Context->addon->need_update == 'Y'){ ?><p class="update">
						<?php echo $__Context->lang->msg_avail_easy_update ?> <a href="<?php echo escape($__Context->addon->update_url, false) ?>&amp;return_url=<?php echo escape(urlencode(getRequestUriByServerEnviroment()), false) ?>"><?php echo $__Context->lang->msg_do_you_like_update ?></a>
					</p><?php } ?>
				</td>
				<td><?php echo escape($__Context->addon->version, false) ?></td>
				<td class="nowr">
					<?php if($__Context->addon->author&&count($__Context->addon->author))foreach($__Context->addon->author as $__Context->author){ ?>
						<?php if($__Context->author->homepage){ ?><a href="<?php echo escape($__Context->author->homepage, false) ?>" target="_blank"><?php echo escape($__Context->author->name, false) ?></a><?php } ?>
						<?php if(!$__Context->author->homepage){;
echo escape($__Context->author->name, false);
} ?>
					<?php } ?>
				</td>
				<td><?php echo escape($__Context->addon->path, false) ?></td>
				<td><a href="<?php echo escape(getUrl('act', 'dispAddonAdminSetup', 'selected_addon', $__Context->addon->addon_name), false) ?>"><?php echo $__Context->lang->cmd_setup ?></a></td>
				<td><input type="checkbox" name="pc_on[]" title="PC" value="<?php echo htmlspecialchars($__Context->addon->addon_name, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>"<?php if($__Context->addon->activated){ ?> checked="checked"<?php } ?> /></td>
				<td><input type="checkbox" name="mobile_on[]" title="Mobile" value="<?php echo htmlspecialchars($__Context->addon->addon_name, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>"<?php if($__Context->addon->mactivated){ ?> checked="checked"<?php } ?> /></td>
				<td><?php if($__Context->addon->remove_url){ ?><a href="<?php echo escape($__Context->addon->remove_url, false) ?>&amp;return_url=<?php echo escape(urlencode(getRequestUriByServerEnviroment()), false) ?>"><?php echo $__Context->lang->cmd_delete ?></a><?php } ?></td>
			</tr><?php } ?>
		</tbody>
	</table>
	<div class="x_clearfix">
		<div class="x_pull-right">
			<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_save ?></button>
		</div>
	</div>
</form>
