<?php if(!defined("__XE__"))exit;
Context::addJsFile("modules/nproduct/ruleset/insertModInst.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" class="x_form-horizontal" method="post"  enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertModInst" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="procNproductAdminInsertModInst" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
	<input type="hidden" name="primary_key" value="<?php echo $__Context->module_info->module_srl ?>" />
	<input type="hidden" name="delivery_info" value="<?php echo htmlspecialchars($__Context->module_info->delivery_info) ?>" />
	<section class="section">
		<h1><?php echo $__Context->lang->default_setting ?></h1>
		<div class="x_control-group">
			<label class="x_control-label" for="proc_module"><?php echo $__Context->lang->proc_module ?></label>
			<div class="x_controls">
				<?php if(!$__Context->module_info->proc_module){ ?><div>
					<select name="proc_module" id="proc_module">
						<?php if($__Context->module_list&&count($__Context->module_list))foreach($__Context->module_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->module ?>"<?php if($__Context->module_info->proc_module == $__Context->val->module){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->module ?>)</option><?php } ?>
					</select>
					<a href="#proc_module_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
					<p id="proc_module_help" class="x_help-block" hidden><?php echo $__Context->lang->about_proc_module ?></p>
				</div><?php } ?>
				<?php if($__Context->module_info->proc_module){ ?><div> <input type="hidden" name="proc_module" value="<?php echo $__Context->module_info->proc_module ?>" />
					<span class="x_input-large x_uneditable-input"><?php echo $__Context->module_list[$__Context->module_info->proc_module]->title ?>(<?php echo $__Context->module_info->proc_module ?>)</span>
				</div><?php } ?>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="mid"><?php echo $__Context->lang->mid ?></label>
			<div class="x_controls">
				<input type="text" name="mid" id="mid" value="<?php echo $__Context->module_info->mid ?>" />
				<a href="#mid_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="mid_help" class="x_help-block" hidden><?php echo $__Context->lang->about_mid ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="module_category_srl"><?php echo $__Context->lang->module_category ?></label>
			<div class="x_controls">
				<select name="module_category_srl" id="module_category_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->module_category_srl==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#module_category_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="module_category_srl_help" class="x_help-block" hidden><?php echo $__Context->lang->about_module_category ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="browser_title"><?php echo $__Context->lang->browser_title ?></label>
			<div class="x_controls">
				<input type="text" name="browser_title" value="<?php echo htmlspecialchars($__Context->module_info->browser_title) ?>"  class="lang_code" id="browser_title" />
				<a href="#browser_title_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="browser_title_help" class="x_help-block" hidden><?php echo $__Context->lang->about_browser_title ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="layout_srl"><?php echo $__Context->lang->layout ?></label>
			<div class="x_controls">
				<select name="layout_srl" id="layout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->layout_srl == $__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<a href="#layout_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="layout_srl_help" class="x_help-block" hidden><?php echo $__Context->lang->about_layout ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="skin"><?php echo $__Context->lang->skin ?></label>
			<div class="x_controls">
				<select name="skin" id="skin">
					<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->skin==$__Context->key || (!$__Context->module_info->skin && $__Context->key=='xe_board')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#skin_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="skin_help" class="x_help-block" hidden><?php echo $__Context->lang->about_skin ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="category_display"><?php echo $__Context->lang->category_display ?></label>
			<div class="x_controls">
				<select name="category_display" id="category_display">
					<option value="Y"<?php if($__Context->module_info->category_display=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->display ?></option>
					<option value="N"<?php if($__Context->module_info->category_display=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->not_display ?></option>
				</select>
				<a href="#category_display_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="category_display_help" class="x_help-block" hidden><?php echo $__Context->lang->about_category_display ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="ncart_mid"><?php echo $__Context->lang->ncart_mid ?></label>
			<div class="x_controls">
				<select name="ncart_mid" id="ncart_mid">
					<option value=""><?php echo $__Context->lang->cmd_select ?></option>
					<?php if($__Context->ncart_insts&&count($__Context->ncart_insts))foreach($__Context->ncart_insts as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->mid ?>"<?php if($__Context->val->mid==$__Context->module_info->ncart_mid){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->browser_title ?></option><?php } ?>
				</select>
				<a href="#ncart_mid_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="ncart_mid_help" class="x_help-block" hidden><?php echo $__Context->lang->about_ncart_mid ?> <a href="<?php echo getUrl('','module',$__Context->module,'act','dispNcartAdminModInstList') ?>" target="_blank"><?php echo $__Context->lang->cmd_cart_management ?></a></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="direct_gocart"><?php echo $__Context->lang->direct_gocart ?></label>
			<div class="x_controls">
				<select name="direct_gocart" id="direct_gocart">
					<option value="N"<?php if($__Context->module_info->direct_gocart=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->not_goto_cart ?></option>
					<option value="Y"<?php if($__Context->module_info->direct_gocart=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->confirm_after_putting ?></option>
				</select>
				<a href="#direct_gocart_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="direct_gocart_help" class="x_help-block" hidden><?php echo $__Context->lang->about_direct_gocart ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="editor"><?php echo $__Context->lang->cancelation_policy ?></label>
			<div class="x_controls">
				<?php echo $__Context->lang->about_cancelation_policy ?>
				<div id="editor" class="editor"><?php echo $__Context->editor ?></div>
				<label class="x_inline" for="integrate"><input type="radio" name="display_caution" id="integrate" value="Y" checked="checked" /><?php echo $__Context->lang->batch_mode ?></label>
				<label class="x_inline" for="individual"><input type="radio" name="display_caution" id="individual" value="N" /><?php echo $__Context->lang->individual_mode ?></label>
				<a href="#editor_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="editor_help" class="x_help-block" hidden><?php echo $__Context->lang->about_cancelation_policy2 ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="store_top"><?php echo $__Context->lang->print_on_top ?></label>
			<div class="x_controls">
				<textarea name="store_top" id="store_top"><?php echo $__Context->module_info->store_top ?></textarea>
				<a href="#store_top_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="store_top_help" class="x_help-block" hidden><?php echo $__Context->lang->about_print_on_top ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="store_bottom"><?php echo $__Context->lang->print_on_bottom ?></label>
			<div class="x_controls">
				<textarea name="store_bottom" id="store_bottom"><?php echo $__Context->module_info->store_bottom ?></textarea>
				<a href="#store_bottom_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="store_bottom_help" class="x_help-block" hidden><?php echo $__Context->lang->about_print_on_bottom ?></p>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->mobile_settings ?></h1>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->mobile_view ?></label>
			<div class="x_controls">
				<label class="x_inline" for="use_mobile"><input type="checkbox" name="use_mobile" id="use_mobile" value="Y"<?php if($__Context->module_info->use_mobile == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->about_mobile_view ?></label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="mlayout_srl"><?php echo $__Context->lang->mobile_layout ?></label>
			<div class="x_controls">
				<select name="mlayout_srl" id="mlayout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->mlayout_list&&count($__Context->mlayout_list))foreach($__Context->mlayout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->mlayout_srl== $__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<a href="#mobile_layout_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="mobile_layout_help" class="x_help-block" hidden><?php echo $__Context->lang->about_layout ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="mskin"><?php echo $__Context->lang->mobile_skin ?></label>
			<div class="x_controls">
				<select name="mskin" id="mskin">
					<?php if($__Context->mskin_list&&count($__Context->mskin_list))foreach($__Context->mskin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->mskin== $__Context->key || (!$__Context->module_info->skin && $__Context->key=='default')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#mobile_skin_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="mobile_skin_help" class="x_help-block" hidden><?php echo $__Context->lang->about_skin ?></p>
			</div>
		</div>
	</section>
	<div class="x_clearfix btnArea">
		<input type="submit" class="x_btn x_btn-primary" value="<?php echo $__Context->lang->cmd_registration ?>" accesskey="s" />
	</div>
</form>
