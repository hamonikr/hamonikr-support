<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/module/tpl/js/multi_order.js--><?php $__tmp=array('modules/module/tpl/js/multi_order.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/module/tpl/js/module_list.js--><?php $__tmp=array('modules/module/tpl/js/module_list.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/module/tpl/js/mid.js--><?php $__tmp=array('modules/module/tpl/js/mid.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#JSPLUGIN:ui.colorpicker--><?php Context::loadJavascriptPlugin('ui.colorpicker'); ?>
<div class="x_control-group">
	<label class="x_control-label" for="skin"><?php echo $__Context->lang->skin ?></label>
	<div class="x_controls">
		<select name="skin" id="skin">
			<option value=""><?php echo $__Context->lang->select ?></option>
			<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->skin_name=>$__Context->skin){ ?><option value="<?php echo escape($__Context->skin_name, false) ?>"><?php echo escape($__Context->skin->title, false) ?>(<?php echo escape($__Context->skin_name, false) ?>)</option><?php } ?>
		</select>
		<input type="button" class="x_btn" value="<?php echo $__Context->lang->cmd_select ?>" />
	</div>
</div>
<div class="x_control-group">
	<label class="x_control-label" for="colorset"><?php echo $__Context->lang->colorset ?></label>
	<div class="x_controls">
		<select name="colorset" id="widget_colorset">
		</select>
	</div>
</div>
<div class="x_control-group">
	<label class="x_control-label" for="widget_cache"><?php echo $__Context->lang->widget_cache ?></label>
	<div class="x_controls">
		<input type="number" name="widget_cache" id="widget_cache" value="0" size="2" /> <?php echo $__Context->lang->unit_min ?>
		<p class="x_help-inline"><?php echo $__Context->lang->about_widget_cache ?></p>
	</div>
</div>
<?php $__Context->suggestion_id = 0 ?>
<?php if($__Context->widget_info->extra_var&&count($__Context->widget_info->extra_var))foreach($__Context->widget_info->extra_var as $__Context->id=>$__Context->var){ ?>
	<?php $__Context->suggestion_id++ ?>
	<?php if(!$__Context->not_first && !$__Context->var->group){ ?><section class="extra_vars section"><?php } ?>
	<?php if($__Context->group != $__Context->var->group){ ?>
		<?php if($__Context->not_first){ ?></section><?php } ?>
		<section class="extra_vars section">
		<h1><?php echo escape($__Context->var->group, false) ?></h1>
		<?php $__Context->group = $__Context->var->group ?>
	<?php } ?>
	<?php $__Context->not_first = true ?>
	<div class="x_control-group <?php if($__Context->var->type == 'mid' || $__Context->var->type == 'module_srl_list'){ ?>moduleSearch moduleSearch1 modulefinder<?php } ?>">
		<label class="x_control-label"<?php if($__Context->var->type != 'radio' && $__Context->var->type != 'checkbox'){ ?> for="<?php echo escape($__Context->id, false) ?>"<?php } ?>><?php echo escape($__Context->var->name, false) ?></label>
		<div class="x_controls">
			<?php if($__Context->var->type == 'text'){ ?>
				<input type="text" name="<?php echo escape($__Context->id, false) ?>" />
			<?php } ?>
			<?php if($__Context->var->type == 'color'){ ?>
				<input type="text" name="<?php echo escape($__Context->id, false) ?>" value="" id="<?php echo escape($__Context->id, false) ?>" class="color-indicator" style="width:178px" />
			<?php } ?>
			<?php if($__Context->var->type == 'textarea'){ ?>
				<?php if($__Context->var->type == 'textarea'){ ?><textarea name="<?php echo escape($__Context->id, false) ?>" id="<?php echo escape($__Context->id, false) ?>" rows="8" cols="42"></textarea><?php } ?>
			<?php } ?>
			<?php if($__Context->var->type == 'select'){ ?>
				<select name="<?php echo escape($__Context->id, false) ?>" id="<?php echo escape($__Context->id, false) ?>">
					<?php if($__Context->var->options&&count($__Context->var->options))foreach($__Context->var->options as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->key, false) ?>"><?php echo escape($__Context->val, false) ?></option><?php } ?>
				</select>
			<?php } ?>
			<?php if($__Context->var->type == 'select-multi-order'){ ?>
				<?php if($__Context->var->init_options && is_array($__Context->var->init_options)){ ?>
				<?php $__Context->inits = array_keys($__Context->var->init_options) ?>
				<input type="hidden" name="<?php echo escape($__Context->id, false) ?>" value="<?php echo escape(implode(',', $__Context->inits), false) ?>" />
				<?php }else{ ?>
				<input type="hidden" name="<?php echo escape($__Context->id, false) ?>" value="" />
				<?php } ?>
				<div style="display:inline-block;padding-top:3px">
					<label><?php echo $__Context->lang->display_no ?></label>
					<select class="multiorder_show" size="8" multiple="multiple" style="vertical-align:top;margin-bottom:5px">
						<?php if($__Context->var->options&&count($__Context->var->options))foreach($__Context->var->options as $__Context->key=>$__Context->val){;
if(!$__Context->var->init_options[$__Context->key]){ ?><option value="<?php echo escape($__Context->key, false) ?>"<?php if($__Context->var->default_options[$__Context->key]){ ?> default="true"<?php } ?>><?php echo escape($__Context->val, false) ?></option><?php }} ?>
					</select>
					<br>
					<button type="button" class="x_btn multiorder_add" style="vertical-align:top"><?php echo $__Context->lang->cmd_insert ?></button>
				</div>
				<div style="display:inline-block;padding-top:3px">
					<label><?php echo $__Context->lang->display_yes ?></label>
					<select class="multiorder_selected" size="8" multiple="multiple" style="vertical-align:top;margin-bottom:5px">
						<?php if($__Context->var->options&&count($__Context->var->options))foreach($__Context->var->options as $__Context->key=>$__Context->val){;
if($__Context->var->init_options[$__Context->key]){ ?><option value="<?php echo escape($__Context->key, false) ?>"<?php if($__Context->var->default_options[$__Context->key]){ ?> default="true"<?php } ?>><?php echo escape($__Context->val, false) ?></option><?php }} ?>
					</select>
					<br>
					<button type="button" class="x_btn multiorder_up" style="margin:0 -5px 0 0;border-radius:2px 0 0 2px"><?php echo $__Context->lang->cmd_move_up ?></button>
					<button type="button" class="x_btn multiorder_down" style="margin:0 -5px 0 0;border-radius:0"><?php echo $__Context->lang->cmd_move_down ?></button>
					<button type="button" class="x_btn multiorder_del" style="border-radius:0 2px 2px 0"><?php echo $__Context->lang->cmd_delete ?></button>
				</div>
				<script>
					xe.registerApp(new xe.MultiOrderManager('<?php echo escape($__Context->id, false) ?>'));
				</script>
			<?php } ?>
			<?php if($__Context->var->type == 'mid_list'){ ?>
				<?php if($__Context->mid_list&&count($__Context->mid_list))foreach($__Context->mid_list as $__Context->module_category_srl=>$__Context->modules){ ?><fieldset>
					<?php if(count($__Context->mid_list) > 1){ ?>
						<?php if($__Context->modules->title){ ?><legend><?php echo escape($__Context->modules->title, false) ?></legend><?php } ?>
						<?php if(!$__Context->modules->title){ ?><legend><?php echo $__Context->lang->none_category ?></legend><?php } ?>
					<?php } ?>
					<?php if($__Context->modules->list&&count($__Context->modules->list))foreach($__Context->modules->list as $__Context->key=>$__Context->val){ ?><div>
						<label class="x_inline"><input type="checkbox" value="<?php echo escape($__Context->key, false) ?>" name="<?php echo escape($__Context->id, false) ?>" /> <?php echo escape($__Context->key, false) ?> (<?php echo escape($__Context->val->browser_title, false) ?>)</label>
					</div><?php } ?>
				</fieldset><?php } ?>
			<?php } ?>
			<?php if($__Context->var->type == 'member_group'){ ?>
				<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key=>$__Context->val){ ?>
					<label class="x_inline"><input type="checkbox" value="<?php echo escape($__Context->key, false) ?>" name="<?php echo escape($__Context->id, false) ?>" id="chk_member_gruop_<?php echo escape($__Context->id, false) ?>_<?php echo escape($__Context->key, false) ?>" /> <?php echo escape($__Context->val->title, false) ?></label>
				<?php } ?>
			<?php } ?>
			<?php if($__Context->var->type == 'module_srl_list'){ ?>
				<input type="hidden" name="<?php echo escape($__Context->id, false) ?>" value="" />
				<select class="modulelist_selected" size="8" multiple="multiple" style="vertical-align:top;margin-bottom:5px"></select>
				<p class="x_help-inline"><?php echo escape($__Context->var->description, false) ?></p>
				<br>
				<a href="#" id="__module_srl_list_<?php echo escape($__Context->id, false) ?>" class="x_btn moduleTrigger" data-multiple="true" style="margin:0 -5px 0 0;border-radius:2px 0 0 2px"><?php echo $__Context->lang->cmd_add ?></a>
				<button type="button" class="x_btn modulelist_up" style="margin:0 -5px 0 0;border-radius:0"><?php echo $__Context->lang->cmd_move_up ?></button>
				<button type="button" class="x_btn modulelist_down" style="margin:0 -5px 0 0;border-radius:0"><?php echo $__Context->lang->cmd_move_down ?></button>
				<button type="button" class="x_btn modulelist_del" style="border-radius:0 2px 2px 0"><?php echo $__Context->lang->cmd_delete ?></button>
				<script>
					xe.registerApp(new xe.ModuleListManager('<?php echo escape($__Context->id, false) ?>'));
				</script>
			<?php } ?>
			<?php if($__Context->var->type == 'mid'){ ?>
				<input type="hidden" name="<?php echo escape($__Context->id, false) ?>" value="" />
				<input type="text" readonly="readonly" />
				<a href="#" class="x_btn moduleTrigger"><?php echo $__Context->lang->cmd_select ?></a>
				<button type="button" class="x_btn delete"><?php echo $__Context->lang->cmd_delete ?></button>
				<script>
					xe.registerApp(new xe.MidManager('<?php echo escape($__Context->id, false) ?>'));
				</script>
			<?php } ?>
			<?php if($__Context->var->type == 'filebox'){ ?>
				<?php $__Context->use_filebox = true ?>
				<input type="hidden" name="<?php echo escape($__Context->id, false) ?>" />
				<a class="x_btn modalAnchor filebox" href="#modalFilebox"><?php echo $__Context->lang->cmd_select ?></a>
			<?php } ?>
			<?php if($__Context->var->type == 'menu'){ ?>
				<select name="<?php echo escape($__Context->id, false) ?>">
					<option value="">-</option>
					<?php if($__Context->menu_list&&count($__Context->menu_list))foreach($__Context->menu_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->val->menu_srl, false) ?>"><?php echo escape($__Context->val->title, false) ?></option><?php } ?>
				</select>
			<?php } ?>
			<?php if($__Context->var->type == 'radio'){ ?>
				<?php if($__Context->var->options&&count($__Context->var->options))foreach($__Context->var->options as $__Context->key=>$__Context->val){ ?><label>
					<input type="radio" name="<?php echo escape($__Context->id, false) ?>" id="<?php echo escape($__Context->id, false) ?>_<?php echo escape($__Context->key, false) ?>" value="<?php echo escape($__Context->key, false) ?>" > <?php echo escape($__Context->val, false) ?>
				</label><?php } ?>
			<?php } ?>
			<?php if($__Context->var->type == 'checkbox'){ ?>
				<?php if($__Context->var->options&&count($__Context->var->options))foreach($__Context->var->options as $__Context->key=>$__Context->val){ ?><label>
					<input type="checkbox" name="<?php echo escape($__Context->id, false) ?>" id="<?php echo escape($__Context->id, false) ?>_<?php echo escape($__Context->key, false) ?>" value="<?php echo escape($__Context->key, false) ?>" > <?php echo escape($__Context->val, false) ?>
				</label><?php } ?>
			<?php } ?>
			<?php if($__Context->var->description){ ?><p><?php echo escape($__Context->var->description, false) ?></p><?php } ?>
		</div>
	</div>
<?php } ?>
</section>
<script>
	xe.current_lang = "<?php echo escape($__Context->lang_type, false) ?>";
</script>
