<?php if(!defined("__XE__"))exit;
Context::addJsFile("modules/layout/ruleset/updateLayout.xml", FALSE, "", 0, "body", TRUE, "") ?><form id="config_form"  action="./" enctype="multipart/form-data" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="updateLayout" />
	<input type="hidden" name="module" value="layout" />
	<input type="hidden" name="act" value="procLayoutAdminUpdate" />
	<input type="hidden" name="is_sitemap" value="<?php echo escape($__Context->is_sitemap, false) ?>" />
	<input type="hidden" name="layout_srl" value="<?php echo escape($__Context->layout_srl, false) ?>" />
	<input type="hidden" name="layout" value="<?php echo escape($__Context->selected_layout->layout, false) ?>" />
	<input type="hidden" name="_layout_type" value="<?php echo escape($__Context->selected_layout->layout_type, false) ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/layout/tpl/lyaout_info_view/1" />
	
	<div></div>
</form>
<section id="layout_config" class="x_form-horizontal">
	<?php if($__Context->selected_layout->path){ ?><div class="x_control-group">
		<label class="x_control-label"><?php echo $__Context->lang->path ?></label>
		<div class="x_controls" style="padding-top:5px">
			<?php echo escape($__Context->selected_layout->path, false) ?>
		</div>
	</div><?php } ?>
	<?php if($__Context->selected_layout->description){ ?><div class="x_control-group">
		<label class="x_control-label"><?php echo $__Context->lang->description ?></label>
		<div class="x_controls" style="padding-top:5px">
			<?php echo escape($__Context->selected_layout->description, false) ?>
		</div>
	</div><?php } ?>
	<?php if($__Context->selected_layout->author){ ?><div class="x_control-group">
		<label class="x_control-label"><?php echo $__Context->lang->author ?></label>
		<div class="x_controls" style="padding-top:5px">
			<?php if($__Context->selected_layout->author&&count($__Context->selected_layout->author))foreach($__Context->selected_layout->author as $__Context->author_info){ ?>
				<?php if($__Context->author_info->homepage){ ?>
				<a href="<?php echo escape($__Context->author_info->homepage, false) ?>" target="_blank"><?php echo escape($__Context->author_info->name, false) ?></a>
				<?php }else{ ?>
				<?php echo escape($__Context->author_info->name, false) ?>
				<?php } ?>
			<?php } ?>
		</div>
	</div><?php } ?>
	<div class="x_control-group">
		<label class="x_control-label" for="title"><?php echo $__Context->lang->title ?> <em>*</em></label>
		<div class="x_controls">
			<input type="text" id="title" name="title" value="<?php echo escape($__Context->selected_layout->layout_title, false) ?>" />
			<span class="x_help-block"><?php echo $__Context->lang->about_title ?></span>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="header_script"><?php echo $__Context->lang->header_script ?></label>
		<div class="x_controls">
			<textarea name="header_script" id="header_script" rows="4" cols="42"><?php echo escape($__Context->selected_layout->header_script, false) ?></textarea>
			<span class="x_help-block"><?php echo $__Context->lang->about_header_script ?></span>
		</div>
	</div>
	<?php if(count($__Context->selected_layout->extra_var)){ ?><section class="section">
		<h1><?php echo $__Context->lang->extra_vars ?></h1>
		<?php $__Context->cnt = 1 ?>
		<?php if($__Context->selected_layout->extra_var&&count($__Context->selected_layout->extra_var))foreach($__Context->selected_layout->extra_var as $__Context->name=>$__Context->var){ ?>
			<?php if($__Context->cnt == 1 && $__Context->var->group){ ?><div class="x_tabbable"><ul class="x_nav x_nav-tabs"><?php } ?>
			<?php if($__Context->group != $__Context->var->group){ ?>
				<li<?php if($__Context->cnt == 1){ ?> class="x_active"<?php } ?>><a href="#extra_var<?php echo escape($__Context->cnt, false) ?>" data-index="<?php echo escape($__Context->cnt, false) ?>"><?php echo escape($__Context->var->group, false) ?></a></li>
				<?php $__Context->group = $__Context->var->group ?>
				<?php $__Context->cnt ++ ?>
			<?php } ?>
		<?php } ?>
		</ul>
		<?php $__Context->group = '' ?>
		<?php $__Context->cnt = 1 ?>
		
		<?php if($__Context->selected_layout->extra_var&&count($__Context->selected_layout->extra_var))foreach($__Context->selected_layout->extra_var as $__Context->name=>$__Context->var){ ?>
		<?php if($__Context->cnt == 1 && $__Context->var->group){ ?><div class="x_tab-content"><?php } ?>
			<?php if($__Context->group != $__Context->var->group){ ?>
				<?php if($__Context->cnt != 1){ ?></div><?php } ?>
				<div<?php if($__Context->cnt != 1){ ?> style="display: none;"<?php } ?> id="extra_var<?php echo escape($__Context->cnt, false) ?>" class="x_tab-pane <?php if($__Context->cnt == 1){ ?>x_active<?php } ?>" data-index="<?php echo escape($__Context->cnt, false) ?>">
				<?php $__Context->group = $__Context->var->group ?>
				<?php $__Context->cnt ++ ?>
			<?php } ?>
			<div class="x_control-group">
				<label class="x_control-label"<?php if($__Context->var->type!='text'&&$__Context->var->type!='textarea'){ ?> for="<?php echo escape($__Context->name, false) ?>"<?php };
if($__Context->var->type=='text'||$__Context->var->type=='textarea'){ ?> for="lang_<?php echo escape($__Context->name, false) ?>"<?php } ?>><?php echo escape($__Context->var->title, false) ?></label>
				<div class="x_controls">
					<?php if($__Context->var->type == 'text'){ ?><div>
						<input type="text" name="<?php echo escape($__Context->name, false) ?>" id="<?php echo escape($__Context->name, false) ?>" class="lang_code" value="<?php if(strpos($__Context->var->value, "$__Context->user_lang->") !== false){;
echo htmlspecialchars($__Context->var->value, ENT_COMPAT | ENT_HTML401, 'UTF-8', false);
}else{;
echo escape($__Context->var->value, false);
} ?>" />
					</div><?php } ?>
					<?php if($__Context->var->type == 'textarea'){ ?><div>
						<?php $__Context->use_multilang_textarea = true ?>
						<textarea name="<?php echo escape($__Context->name, false) ?>" rows="4" cols="42" class="lang_code"><?php if(strpos($__Context->var->value, "$__Context->user_lang->") !== false){;
echo htmlspecialchars($__Context->var->value, ENT_COMPAT | ENT_HTML401, 'UTF-8', false);
}else{;
echo escape($__Context->var->value, false);
} ?></textarea>
					</div><?php } ?>
					<?php if($__Context->var->type == 'image'){ ?>
						<input type="hidden" name="<?php echo escape($__Context->name, false) ?>" id="file_<?php echo escape($__Context->name, false) ?>" value="<?php echo escape($__Context->var->value, false) ?>" />
						<div id="preview_<?php echo escape($__Context->name, false) ?>" class="x_thumbnail" style="<?php if(!$__Context->var->value){ ?>display:none;<?php } ?>max-width:210px;margin-bottom:20px;">
							<img<?php if($__Context->var->value){ ?> src="/<?php echo escape($__Context->var->value, false) ?>"<?php } ?> alt="" style="max-width:100%" />
							<div style="text-align:right">
								<button class="x_icon-remove" type="button" onclick="deleteImage('<?php echo escape($__Context->name, false) ?>')" title="<?php echo $__Context->lang->cmd_delete ?>"><?php echo $__Context->lang->cmd_delete ?></button>
							</div>
						</div>
						<form action="./" enctype="multipart/form-data" method="post" target="hiddenIframe" class="imageUpload" style="margin:0"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
							<input type="hidden" name="module" value="layout" />
							<input type="hidden" name="act" value="procLayoutAdminConfigImageUpload" />
							<input type="hidden" name="layout_srl" value="<?php echo escape($__Context->layout_srl, false) ?>" />
							<input type="hidden" name="name" value="<?php echo escape($__Context->name, false) ?>" />
							<p>
								<input type="file" name="img" id="file_select_<?php echo escape($__Context->name, false) ?>" value="" title="<?php echo $__Context->lang->uploaded_file ?>" />
								<input class="x_btn" type="submit" value="<?php echo $__Context->lang->cmd_submit ?>" style="vertical-align:top" />
							</p>
						</form>
					<?php } ?>
					<?php if($__Context->var->type == 'select'){ ?><select name="<?php echo escape($__Context->name, false) ?>" id="<?php echo escape($__Context->name, false) ?>" style="width:auto">
						<?php if($__Context->var->options&&count($__Context->var->options))foreach($__Context->var->options as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->key, false) ?>"<?php if($__Context->key == $__Context->var->value){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val->val, false) ?></option><?php } ?>
					</select><?php } ?>
					<?php if($__Context->var->type == 'checkbox'){ ?>
						<?php if($__Context->var->options&&count($__Context->var->options))foreach($__Context->var->options as $__Context->key=>$__Context->val){ ?>
							<label class="x_inline"><input type="checkbox" name="<?php echo escape($__Context->name, false) ?>[]" value="<?php echo escape($__Context->key, false) ?>"<?php if(@in_array($__Context->key, $__Context->var->value)){ ?> checked="checked"<?php } ?> /> <?php echo escape($__Context->val->val, false) ?></label>
						<?php } ?>
					<?php } ?>
					<?php if($__Context->var->type == 'radio'){ ?>
						<div class="x_thumbnails">
							<?php if($__Context->var->options&&count($__Context->var->options))foreach($__Context->var->options as $__Context->key=>$__Context->val){ ?>
								<div class="x_span2 <?php if($__Context->val->thumbnail){ ?>x_thumbnail<?php } ?>">
									<?php if($__Context->val->thumbnail){ ?><img src="/<?php echo escape($__Context->val->thumbnail, false) ?>" alt="<?php echo escape($__Context->val->val, false) ?>" /><?php } ?>
									<div class="x_caption">
										<label><input type="radio" name="<?php echo escape($__Context->name, false) ?>" value="<?php echo escape($__Context->key, false) ?>"<?php if($__Context->key == $__Context->var->value){ ?> checked="checked"<?php } ?> /> <?php echo escape($__Context->val->val, false) ?></label>
									</div>
								</div>
							<?php } ?>
						</div>
					<?php } ?>
					<?php if($__Context->var->type == 'colorpicker'){ ?>
						<?php  $__Context->use_colorpicker = true;  ?>
						<input type="text" class="color-indicator" name="<?php echo escape($__Context->name, false) ?>" id="<?php echo escape($__Context->name, false) ?>" value="<?php echo escape($__Context->var->value, false) ?>" />
						<p id="categoy_color_help" hidden style="margin:8px 0 0 0"><?php echo $__Context->lang->about_category_color ?></p>
					<?php } ?>
					<p class="x_help-block"><?php echo escape($__Context->var->description, false) ?></p>
				</div>
			</div>
		<?php } ?>
		<?php if($__Context->group){ ?></div><?php } ?>
	</section><?php } ?>
	<section class="section">
		<?php if($__Context->selected_layout->menu){ ?><h1><?php echo $__Context->lang->menu ?></h1><?php } ?>
		<?php if($__Context->selected_layout->menu){ ?><div class="x_form-horizontal">
			<?php if($__Context->selected_layout->menu&&count($__Context->selected_layout->menu))foreach($__Context->selected_layout->menu as $__Context->menu_name=>$__Context->menu_info){ ?><div class="x_control-group">
				<label class="x_control-label" for="<?php echo escape($__Context->menu_name, false) ?>"><?php echo escape($__Context->menu_info->title, false) ?>(<?php echo escape($__Context->menu_name, false) ?>)</label>
				<div class="x_controls">
					<select name="<?php echo escape($__Context->menu_name, false) ?>" id="<?php echo escape($__Context->menu_name, false) ?>">
						<option value="0"<?php if(!$__Context->menu_info->menu_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->cmd_select ?></option>
						<option<?php if($__Context->menu_info->menu_srl == -1){ ?> selected="selected"<?php } ?> value="-1"><?php echo $__Context->lang->sitemap_with_homemenu ?></option>
						<?php if($__Context->menu_list&&count($__Context->menu_list))foreach($__Context->menu_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->val->menu_srl, false) ?>"<?php if($__Context->val->menu_srl == $__Context->menu_info->menu_srl){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val->title, false) ?></option><?php } ?>
					</select>
				</div>
			</div><?php } ?>
			<div class="x_control-group">
				<label class="x_control-label"><?php echo $__Context->lang->not_apply_menu ?></label>
				<div class="x_controls">
					<label class="x_inline"><input type="checkbox" name="apply_layout" id="apply_layout" value="Y" /> <?php echo $__Context->lang->about_not_apply_menu ?></label>
				</div>
			</div>
		</div><?php } ?>
	</section>
	<div class="x_clearfix btnArea">
		<span class="etc">
			<?php if($__Context->layout){ ?><a class="x_btn" href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispLayoutAdminInstanceList', 'layout', $__Context->selected_layout->layout, 'type', $__Context->type), false) ?>"><?php echo $__Context->lang->cmd_list ?></a><?php } ?>
			<?php if(!$__Context->layout){ ?><a class="x_btn" href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispLayoutAdminAllInstanceList', 'type', $__Context->type), false) ?>"><?php echo $__Context->lang->cmd_list ?></a><?php } ?>
		</span>
		<span class="x_btn-group x_pull-right">
			<input class="x_btn x_btn-primary" type="submit" value="<?php echo $__Context->lang->cmd_save ?>" onclick="doSubmitConfig()"/>
		</span>
	</div>
</section>
<iframe name="hiddenIframe" src="about:blank" hidden></iframe>
<?php if($__Context->use_colorpicker){ ?>
	<!--#JSPLUGIN:ui.colorpicker--><?php Context::loadJavascriptPlugin('ui.colorpicker'); ?>
<?php } ?>
