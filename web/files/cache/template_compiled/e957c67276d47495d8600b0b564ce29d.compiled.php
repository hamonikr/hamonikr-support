<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/nproduct/tpl/js/script.js--><?php $__tmp=array('modules/nproduct/tpl/js/script.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<style>
	.x_controls ul { list-style:none; margin:0; padding:0; }
	.x_controls ul li { float:left; margin-right:10px;}
	.x_control-group .x_controls select.category { min-width:140px; }
</style>
<?php Context::addJsFile("./files/ruleset/nproduct_insertItem.xml", FALSE, "", 0, "body", TRUE, "") ?><form method="post" action="./" class="x_form-horizontal"  enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="@nproduct_insertItem" />
	<input name="module" type="hidden" value="<?php echo $__Context->module ?>" />
	<input name="act" type="hidden" value="procNproductAdminInsertItem" />
	<input name="module_srl" type="hidden" value="<?php echo $__Context->module_srl ?>" />
	<input name="mid" type="hidden" value="<?php echo $__Context->mid ?>" />
	<input name="category_id" type="hidden" value="" />
	<input name="description" type="hidden" value="" />
	<input name="document_srl" type="hidden" value="<?php echo $__Context->document_srl ?>" />
	<input name="delivery_info" type="hidden" value="" />
	<input name="item_srl" type="hidden" value="" />
	<input name="proc_module" type="hidden" value="<?php echo $__Context->module_info->proc_module ?>" />
	<h1><?php echo $__Context->lang->title_product_basicinfo ?></h1>
	<div class="x_control-group">
		<label class="x_control-label" for="category_depth1"><?php echo $__Context->lang->select_category ?></label>
		<div class="x_controls">
			<select id="category_depth1" class="category" depth="1">
				<option><?php echo $__Context->lang->category_depth1 ?></option>
			</select>
			<select id="category_depth2" class="category" depth="2">
				<option><?php echo $__Context->lang->category_depth2 ?></option>
			</select>
			<select id="category_depth3" class="category" depth="3">
				<option><?php echo $__Context->lang->category_depth3 ?></option>
			</select>
			<select id="category_depth4" class="category" depth="4">
				<option><?php echo $__Context->lang->category_depth4 ?></option>
			</select>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="item_name"><?php echo $__Context->lang->product_name ?> <em style="color:red">*</em></label>
		<div class="x_controls">
			<input name="item_name" class="lang_code" type="text" value="" id="item_name" />
			<a href="#item_name_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p id="item_name_help" class="x_help-block" hidden><?php echo $__Context->lang->about_product_name ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="item_code"><?php echo $__Context->lang->item_code ?></label>
		<div class="x_controls">
			<input name="item_code" type="text" value="" id="item_code" />
			<a href="#item_code_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p id="item_code_help" class="x_help-block" hidden><?php echo $__Context->lang->about_product_code ?></p>
		</div>
		
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="thumbnail_image"><?php echo $__Context->lang->thumbnail ?></label>
		<div class="x_controls">
			<input type="file" name="thumbnail_image" id="thumbnail_image" />
			<a href="#thumbnail_image_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p id="thumbnail_image_help" class="x_help-block" hidden><?php echo $__Context->lang->about_thumbnail_image ?></p>
		</div>
	</div>
	<?php if(0){ ?><div id="contents_file_select" class="x_control-group">
		<label class="x_control-label" for="contents_file"><?php echo $__Context->lang->contents_file ?></label>
		<div class="x_controls">
			<input type="file" name="contents_file" id="contents_file" />
			<a href="#contents_file_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p id="contents_file_help" class="x_help-block" hidden><?php echo $__Context->lang->about_contents_file ?></p>
		</div>
	</div><?php } ?>
	<div class="x_control-group">
		<label class="x_control-label" for="display"><?php echo $__Context->lang->display_or_not ?> <em style="color:red">*</em></label>
		<div class="x_controls">
			<label class="x_inline"><input type="radio" id="display_Y" name="display" value="Y" /><?php echo $__Context->lang->display ?></label>
			<label class="x_inline"><input type="radio" id="display_N" name="display" value="N" checked="checked" /><?php echo $__Context->lang->not_display ?></label>
			<a href="#display_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p id="display_help" class="x_help-block" hidden><?php echo $__Context->lang->about_display_or_not ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="price"><?php echo $__Context->lang->price ?> <em style="color:red">*</em></label>
		<div class="x_controls">
			<input name="price" type="text" value="" />
			<a href="#price_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p id="price_help" class="x_help-block" hidden><?php echo $__Context->lang->about_price ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="taxfree"><?php echo $__Context->lang->tax_or_not ?></label>
		<div class="x_controls">
			<label class="x_inline"><input type="radio" name="taxfree" value="N" checked="checked" /><?php echo $__Context->lang->taxation ?></label>
			<label class="x_inline"><input type="radio" name="taxfree" value="Y" /><?php echo $__Context->lang->no_taxation ?></label>
			<a href="#taxfree_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p id="taxfree_help" class="x_help-block" hidden><?php echo $__Context->lang->about_taxation ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<div class="x_control-label" for="editor"><?php echo $__Context->lang->description ?> <em style="color:red">*</em></div>
		<div class="x_controls">
			<?php echo $__Context->editor ?>
		</div>
	</div>
  
	<?php if($__Context->extra_vars&&count($__Context->extra_vars))foreach($__Context->extra_vars as $__Context->key=>$__Context->val){ ?>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->val->getTitle(TRUE) ?></label>
			<div class="x_controls">
				<?php echo $__Context->val->getFormHTML(FALSE) ?>
				<a href="#<?php echo $__Context->val->name ?>_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="<?php echo $__Context->val->name ?>_help" class="x_help-block" hidden><?php echo $__Context->val->desc ?></p>
			</div>
		</div>
	<?php } ?>
	<div class="x_clearfix btnArea">
		<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_submit ?></button>
	</div>
</form>
<script type="text/javascript">
	function load_categories(module_srl, node_id, target) {
		if (typeof(node_id)=='undefined') node_id = 'f.';
		if (typeof(target)=='undefined') target = '#category_depth1';
		$target = jQuery(target);
		var $first_option = jQuery(target).children().eq(0);
		$target.empty();
		$target.append($first_option);
		jQuery.ajax({
			type: 'POST',
			dataType: "json",
			contentType: "application/json; charset=utf-8",
			async : false,
			url: "./",
			data : { 
				module : "nproduct"
				, act : "getNproductCategoryList"
				, node_id : node_id
				, module_srl : module_srl
			}, 
			success : function (r) {
				if (r.error == -1) {
					alert(r.message);
				} else {
					for (i = 0; i < r.data.length; i++) {
						jQuery('<option value="' + r.data[i].attr.node_id + '">' + r.data[i].attr.node_name + '</option>').appendTo(target);
					}
				}
			}
		});
	}
	(function($) {
		jQuery(function($) {
			load_categories(<?php echo $__Context->module_srl ?>);
			$('.category').change(function() {
				var node_id = $('option:selected', this).val();
				var depth = $(this).attr('depth');
				depth = parseInt(depth);
				depth++;
				jQuery('input[name=category_id]').val(node_id);
				load_categories(<?php echo $__Context->module_srl ?>, node_id, '#category_depth'+depth);
			});
		});
	}) (jQuery);
</script>
