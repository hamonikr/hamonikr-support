<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/editor/tpl/filter','insert_editor_module_config.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/editor/tpl/js/editor_module_config.js--><?php $__tmp=array('modules/editor/tpl/js/editor_module_config.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<form action="./" method="post" class="section"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="act" value="procEditorInsertModuleConfig" />
	<input type="hidden" name="module" value="editor" />
	<input type="hidden" name="target_module_srl" value="<?php echo escape($__Context->module_info->module_srl?$__Context->module_info->module_srl:$__Context->module_srls, false) ?>" />
	<input type="hidden" name="success_return_url" value="<?php echo escape(getRequestUriByServerEnviroment(), false) ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/editor/addition_setup/1" />
    <h1><?php echo $__Context->lang->editor ?></h1>
	<table class="x_table x_table-striped x_table-hover">
		<thead>
			<tr>
				<th scope="col" style="width:160px">&nbsp;</th>
				<th scope="col"><?php echo $__Context->lang->document ?></th>
				<th scope="col"><?php echo $__Context->lang->comment ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row" style="text-align:right"><?php echo $__Context->lang->editor_skin ?></th>
				<td>
					<select name="editor_skin" onchange="getEditorSkinColorList(this.value, null, 'document')">
						<?php if($__Context->editor_skin_list&&count($__Context->editor_skin_list))foreach($__Context->editor_skin_list as $__Context->editor){ ?><option value="<?php echo escape($__Context->editor, false) ?>"<?php if($__Context->editor==$__Context->editor_config->editor_skin){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->editor, false) ?></option><?php } ?>
					</select>
					<br/>
					<select name="sel_editor_colorset" id="sel_editor_colorset"<?php if(!count($__Context->editor_colorset_list)){ ?> data-display="none"<?php } ?>>
						<?php if($__Context->editor_colorset_list&&count($__Context->editor_colorset_list))foreach($__Context->editor_colorset_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->val->name, false) ?>"<?php if($__Context->editor_config->sel_editor_colorset == $__Context->val->name){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val->title, false) ?></option><?php } ?>
					</select>
				</td>
				<td>
					<select name="comment_editor_skin" onchange="getEditorSkinColorList(this.value, null, 'comment')">
						<?php if($__Context->editor_skin_list&&count($__Context->editor_skin_list))foreach($__Context->editor_skin_list as $__Context->editor){ ?><option value="<?php echo escape($__Context->editor, false) ?>"<?php if($__Context->editor==$__Context->editor_config->comment_editor_skin){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->editor, false) ?></option><?php } ?>
					</select>
					<br/>
					<select name="sel_comment_editor_colorset" id="sel_comment_editor_colorset"<?php if(!count($__Context->editor_comment_colorset_list)){ ?> data-display="none"<?php } ?>>
						<?php if($__Context->editor_comment_colorset_list&&count($__Context->editor_comment_colorset_list))foreach($__Context->editor_comment_colorset_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->val->name, false) ?>"<?php if($__Context->editor_config->sel_comment_editor_colorset == $__Context->val->name){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val->title, false) ?></option><?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<th scope="row" style="text-align:right"><?php echo $__Context->lang->content_style ?></th>
				<td>
					<select name="content_style">
						<?php if($__Context->content_style_list&&count($__Context->content_style_list))foreach($__Context->content_style_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->key, false) ?>"<?php if($__Context->key==$__Context->editor_config->content_style||!$__Context->editor_config->content_style&&$__Context->key=='default'){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val->title, false) ?></option><?php } ?>
					</select>
				</td>
				<td>
					<select name="comment_content_style">
						<?php if($__Context->content_style_list&&count($__Context->content_style_list))foreach($__Context->content_style_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->key, false) ?>"<?php if($__Context->key==$__Context->editor_config->comment_content_style||!$__Context->editor_config->comment_content_style&&$__Context->key=='default'){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val->title, false) ?></option><?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<th scope="row" style="text-align:right"><?php echo $__Context->lang->editor_height ?></th>
				<td>
					<input type="number" min="0" name="editor_height" value="<?php echo escape($__Context->editor_config->editor_height, false) ?>" /> px
				</td>
				<td>
					<input type="number" min="0" name="comment_editor_height" value="<?php echo escape($__Context->editor_config->comment_editor_height, false) ?>" /> px
				</td>
			</tr>
			<tr>
				<th scope="row" style="text-align:right"><label for="content_font"><?php echo $__Context->lang->content_font ?></label></th>
				<td colspan="2">
					<input type="text" name="content_font" id="content_font" value="<?php echo escape(str_replace(array('"','\''),'',$__Context->editor_config->content_font), false) ?>" placeholder="Ex) Tahoma, Geneva, sans-serif" />
					<?php echo $__Context->lang->about_content_font ?>
				</td>
			</tr>
			<tr>
				<th scope="row" style="text-align:right"><label for="content_font_size"><?php echo $__Context->lang->content_font_size ?></label></th>
				<td colspan="2"><input type="text" name="content_font_size" id="content_font_size" value="<?php echo escape($__Context->editor_config->content_font_size, false) ?>" style="width:50px" /> <?php echo $__Context->lang->about_content_font_size ?></td>
			</tr>
			<tr>
				<th scope="row" style="text-align:right"><?php echo $__Context->lang->enable_autosave ?></th>
				<td colspan="2">
					<label for="enable_autosave" class="x_inline">
						<input type="checkbox" value="Y" id="enable_autosave" name="enable_autosave"<?php if($__Context->editor_config->enable_autosave=='Y'){ ?> checked="checked"<?php } ?> />
						<?php echo $__Context->lang->about_enable_autosave ?>
					</label>
				</td>
			</tr>
			<tr>
				<th scope="row" style="text-align:right"><?php echo $__Context->lang->enable_html_grant ?></th>
				<td>
					<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->k=>$__Context->v){ ?><label for="enable_html_<?php echo escape($__Context->k, false) ?>" class="x_inline"><input type="checkbox" name="enable_html_grant[]" value="<?php echo escape($__Context->k, false) ?>" id="enable_html_<?php echo escape($__Context->k, false) ?>"<?php if(in_array($__Context->k, $__Context->editor_config->enable_html_grant)){ ?> checked="checked"<?php } ?> /> <?php echo escape($__Context->v->title, false) ?></label><?php } ?>
				</td>
				<td>
					<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->k=>$__Context->v){ ?><label for="enable_comment_html_<?php echo escape($__Context->k, false) ?>" class="x_inline"><input type="checkbox" name="enable_comment_html_grant[]" value="<?php echo escape($__Context->k, false) ?>" id="enable_comment_html_<?php echo escape($__Context->k, false) ?>"<?php if(in_array($__Context->k, $__Context->editor_config->enable_comment_html_grant)){ ?> checked="checked"<?php } ?> /> <?php echo escape($__Context->v->title, false) ?></label><?php } ?>
				</td>
			</tr>
			<tr>
				<th scope="row" style="text-align:right"><?php echo $__Context->lang->upload_file_grant ?></th>
				<td>
					<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->k=>$__Context->v){ ?><label for="fileupload_<?php echo escape($__Context->k, false) ?>" class="x_inline"><input type="checkbox" name="upload_file_grant[]" value="<?php echo escape($__Context->k, false) ?>" id="fileupload_<?php echo escape($__Context->k, false) ?>"<?php if(in_array($__Context->k, $__Context->editor_config->upload_file_grant)){ ?> checked="checked"<?php } ?> /> <?php echo escape($__Context->v->title, false) ?></label><?php } ?>
				</td>
				<td>
					<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->k=>$__Context->v){ ?><label for="comment_fileupload_<?php echo escape($__Context->k, false) ?>" class="x_inline"><input type="checkbox" name="comment_upload_file_grant[]" value="<?php echo escape($__Context->k, false) ?>" id="comment_fileupload_<?php echo escape($__Context->k, false) ?>"<?php if(in_array($__Context->k, $__Context->editor_config->comment_upload_file_grant)){ ?> checked="checked"<?php } ?> /> <?php echo escape($__Context->v->title, false) ?></label><?php } ?>
				</td>
			</tr>
			<tr>
				<th scope="row" style="text-align:right"><?php echo $__Context->lang->enable_default_component_grant ?></th>
				<td>
					<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->k=>$__Context->v){ ?><label for="default_componen_<?php echo escape($__Context->k, false) ?>" class="x_inline"><input type="checkbox" name="enable_default_component_grant[]" value="<?php echo escape($__Context->k, false) ?>" id="default_componen_<?php echo escape($__Context->k, false) ?>"<?php if(in_array($__Context->k, $__Context->editor_config->enable_default_component_grant)){ ?> checked="checked"<?php } ?> /> <?php echo escape($__Context->v->title, false) ?></label><?php } ?>
				</td>
				<td>
					<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->k=>$__Context->v){ ?><label for="comment_default_component_<?php echo escape($__Context->k, false) ?>" class="x_inline"><input type="checkbox" name="enable_comment_default_component_grant[]" value="<?php echo escape($__Context->k, false) ?>" id="comment_default_component_<?php echo escape($__Context->k, false) ?>"<?php if(in_array($__Context->k, $__Context->editor_config->enable_comment_default_component_grant)){ ?> checked="checked"<?php } ?> /> <?php echo escape($__Context->v->title, false) ?></label><?php } ?>
				</td>
			</tr>
			<tr>
				<th scope="row" style="text-align:right"><?php echo $__Context->lang->enable_extra_component_grant ?></th>
				<td>
					<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->k=>$__Context->v){ ?><label for="componen_<?php echo escape($__Context->k, false) ?>" class="x_inline"><input type="checkbox" name="enable_component_grant[]" value="<?php echo escape($__Context->k, false) ?>" id="componen_<?php echo escape($__Context->k, false) ?>"<?php if(in_array($__Context->k, $__Context->editor_config->enable_component_grant)){ ?> checked="checked"<?php } ?> /> <?php echo escape($__Context->v->title, false) ?></label><?php } ?>
				</td>
				<td>
					<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->k=>$__Context->v){ ?><label for="comment_component_<?php echo escape($__Context->k, false) ?>" class="x_inline"><input type="checkbox" name="enable_comment_component_grant[]" value="<?php echo escape($__Context->k, false) ?>" id="comment_component_<?php echo escape($__Context->k, false) ?>"<?php if(in_array($__Context->k, $__Context->editor_config->enable_comment_component_grant)){ ?> checked="checked"<?php } ?> /> <?php echo escape($__Context->v->title, false) ?></label><?php } ?>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="x_clearfix">
		<button class="x_btn x_btn-primary x_pull-right" type="submit"><?php echo $__Context->lang->cmd_save ?></button>
	</div>
</form>
