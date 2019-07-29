<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/nproduct/tpl/js/_lib/jquery.cookie.js--><?php $__tmp=array('modules/nproduct/tpl/js/_lib/jquery.cookie.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/nproduct/tpl/js/_lib/jquery.hotkeys.js--><?php $__tmp=array('modules/nproduct/tpl/js/_lib/jquery.hotkeys.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/nproduct/tpl/js/jquery.jstree.js--><?php $__tmp=array('modules/nproduct/tpl/js/jquery.jstree.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/nproduct/tpl/js/category.js--><?php $__tmp=array('modules/nproduct/tpl/js/category.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/nproduct/tpl/filter','insert_category.xml');$__xmlFilter->compile(); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/nproduct/tpl/filter','update_category.xml');$__xmlFilter->compile(); ?>
<?php require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/nproduct/tpl/filter','delete_category.xml');$__xmlFilter->compile(); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','_header.html') ?>
<div class="category" style="float:left; margin-right:10px;">
	<ul id="category_tree" style="border:solid #eee 1px; min-width:300px;"></ul>
	<div><a href="#" onclick="pop_append_category(); return false;" class="x_btn" title="<?php echo $__Context->lang->about_register_category ?>"><?php echo $__Context->lang->cmd_register_category ?></a></div>
</div>
<div class="properties" style="float:left">
	<form id="fo_update" method="post" class="x_form-horizontal" onsubmit="return proc_update_category(this);" style="display:none"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module_srl" value="<?php echo $__Context->module_srl ?>" />
		<input type="hidden" name="node_id" value="" />
		<section class="section">
			<h2><?php echo $__Context->lang->cmd_modify_category ?></h2>
			<div class="x_control-group">
				<label class="x_control-label" for="category_name_s"><?php echo $__Context->lang->category_name ?></label>
				<div class="x_controls">
					<input type="text" name="category_name" class="inputTypeText w300 lang_code" value="" id="category_name_s"  />
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label">Category ID</label>
				<div class="x_controls">
					<td><span class="category_id"></span></td>
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label"><?php echo $__Context->lang->category_path ?></label>
				<div class="x_controls">
					<td><span class="route"></span></td>
				</div>
			</div>
		</section>
		<div class="x_clearfix btnArea">
			<input type="submit" class="x_btn x_btn-primary" value="<?php echo $__Context->lang->cmd_update ?>" />
			<input type="submit" class="x_btn" value="<?php echo $__Context->lang->cmd_delete ?>" onclick="proc_delete_category(this.form); return false;" />
		</div>
	</form>
	<form id="fo_insert" method="post" class="x_form-horizontal" onsubmit="return proc_insert_category(this);" style="display:none"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module_srl" value="<?php echo $__Context->module_srl ?>" />
		<input type="hidden" name="parent_node" value="" />
		<section class="section">
			<h2><?php echo $__Context->lang->cmd_register_category ?></h2>
			<div class="x_control-group">
				<label class="x_control-label" for="category_name"><?php echo $__Context->lang->category_name ?></label>
				<div class="x_controls">
					<input type="text" id="category_name" name="category_name" value="" class="lang_code" />
				</div>
			</div>
			<div class="x_control-group">
				<label class="x_control-label"><?php echo $__Context->lang->category_path ?></label>
				<div class="x_controls">
					<td><span class="route"></span></td>
				</div>
			</div>
		</section>
		<div class="x_clearfix btnArea">
			<input type="submit" class="x_btn x_btn-primary" value="<?php echo $__Context->lang->cmd_registration ?>" />
		</div>
	</form>
</div>
<script language="javascript">
	function pop_append_category() {
		jQuery('#fo_insert').show();
		jQuery('#fo_update').hide();
		jQuery('input[name=category_name]', '#fo_insert').select().focus();
		get_category_location();
	}
	function proc_insert_category(f) {
		var selected_folders = jQuery(init_tree.tree_id).jstree('get_selected');
		if (selected_folders.length <= 0) {
			alert('select one.');
		}
		node = jQuery(selected_folders[0]);
		f.parent_node.value = node.attr('node_id');
		return procFilter(f, insert_category);
	}
	function proc_update_category(f) {
		var selected_folders = jQuery(init_tree.tree_id).jstree('get_selected');
		if (selected_folders.length <= 0) {
			alert('select one.');
		}
		node = jQuery(selected_folders[0]);
		f.node_id.value = node.attr('node_id');
		return procFilter(f, update_category);
	}
	function proc_delete_category(f) {
		var selected_folders = jQuery(init_tree.tree_id).jstree('get_selected');
		if (selected_folders.length <= 0) {
			alert('select one.');
		}
		node = jQuery(selected_folders[0]);
		f.node_id.value = node.attr('node_id');
		return procFilter(f, delete_category);
	}
	(function($) {
		jQuery(function($) {
			init_tree(<?php echo $__Context->module_srl ?>, '#category_tree', '<?php echo $__Context->tpl_path ?>img/');
		});
	}) (jQuery);
</script>
