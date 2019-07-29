<?php if(!defined("__XE__"))exit;?><input type="hidden" name="join_form_id_list" value="<?php echo escape($__Context->id_list, false) ?>" />
<input type="hidden" name="old_column_id" value="<?php echo escape($__Context->formInfo->column_name, false) ?>" />
	<input type="hidden" name="member_join_form_srl" value="<?php echo escape($__Context->formInfo->member_join_form_srl, false) ?>" />
	<div class="x_modal-header">
		<h1><?php echo $__Context->lang->cmd_input_extend_form ?></h1>
	</div>
	<div class="x_modal-body">
		<div class="x_control-group">
			<label for="column_id" class="x_control-label"><em style="color:red">*</em> <?php echo $__Context->lang->column_id ?></label>
			<div class="x_controls">
				<input type="text" id="column_id" name="column_id" value="<?php echo escape($__Context->formInfo->column_name, false) ?>" />
				<p class="x_help-block"><?php echo $__Context->lang->about_column_id ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label for="column_title" class="x_control-label"><em style="color:red">*</em> <?php echo $__Context->lang->column_title ?></label>
			<div class="x_controls">
				<input type="text" id="column_title" name="column_title" value="<?php echo escape($__Context->formInfo->column_title, false) ?>" />
			</div>
		</div>
		<div class="x_control-group">
			<label for="columnType" class="x_control-label"><em style="color:red">*</em> <?php echo $__Context->lang->column_type ?></label>
			<div class="x_controls">
				<select id="columnType" class="typeSelect" name="column_type">
					<?php if($__Context->lang->column_type_list&&count($__Context->lang->column_type_list))foreach($__Context->lang->column_type_list as $__Context->key=>$__Context->type_info){ ?><option value="<?php echo escape($__Context->key, false) ?>"<?php if($__Context->formInfo->column_type == $__Context->key){ ?> selected="selected"<?php } ?> ><?php echo $__Context->lang->column_type_list[$__Context->key] ?></option><?php } ?>
				</select>
			</div>
		</div>
		<div class="x_control-group multiExample">
			<label for="multiSelect" class="x_control-label"><em style="color:red">*</em> <?php echo $__Context->lang->options ?></label>
			<div class="x_controls">
				<textarea rows="4" cols="42" id="multiSelect" name="default_value" style="vertical-align:top"><?php if($__Context->default_value){;
echo escape(implode('|@|', $__Context->default_value), false);
} ?></textarea>
				<p class="x_help-inline"><?php echo $__Context->lang->about_multi_type ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label for="desc" class="x_control-label"><?php echo $__Context->lang->description ?></label>
			<div class="x_controls">
				<textarea rows="4" cols="42" id="desc" name="description"><?php echo escape($__Context->formInfo->description, false) ?></textarea>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->cmd_required ?>/<?php echo $__Context->lang->cmd_optional ?></label>
			<div class="x_controls">
				<label for="radio_required" class="x_inline"><input type="radio" id="radio_required" name="required" value="Y" /> <?php echo $__Context->lang->cmd_required ?></label>
				<label for="radio_option" class="x_inline"><input type="radio" id="radio_option" name="required" value="N" /> <?php echo $__Context->lang->cmd_optional ?></label>
			</div>
		</div>
	</div>
	<div class="x_modal-footer">
		<span class="x_pull-right"><button class="x_btn x_btn-primary" type="submit" name="mode" <?php if($__Context->formInfo){ ?>value="update"<?php }else{ ?>value="insert"<?php } ?> ><?php echo $__Context->lang->cmd_save ?></button></span>
	</div>
<script>
	var $ = jQuery;
	var typeSelect = $('.typeSelect');
	var multiOption = $('.typeSelect>option[value=checkbox], .typeSelect>option[value=radio], .typeSelect>option[value=select_multiple], .typeSelect>option[value=select]');
	var multiExample = $('.multiExample');
<?php $__Context->default_value_types = array('checkbox', 'radio', 'select') ?>
<?php if(!in_array($__Context->formInfo->column_type, $__Context->default_value_types)){ ?>
	multiExample.hide();
<?php } ?>
	typeSelect.change(function(){
		if(multiOption.is(':selected')){
			multiExample.slideDown(200);
		} else {
			multiExample.slideUp(200);
		}
	});
</script>
