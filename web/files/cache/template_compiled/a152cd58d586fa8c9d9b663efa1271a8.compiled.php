<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/nproduct/tpl/filter','insert_item.xml');$__xmlFilter->compile(); ?>
<!--#JSPLUGIN:ui--><?php Context::loadJavascriptPlugin('ui'); ?>
<!--#Meta:modules/nproduct/tpl/js/script.js--><?php $__tmp=array('modules/nproduct/tpl/js/script.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/nproduct/tpl/js/_lib/jquery.cookie.js--><?php $__tmp=array('modules/nproduct/tpl/js/_lib/jquery.cookie.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/nproduct/tpl/js/_lib/jquery.hotkeys.js--><?php $__tmp=array('modules/nproduct/tpl/js/_lib/jquery.hotkeys.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/nproduct/tpl/js/jquery.jstree.js--><?php $__tmp=array('modules/nproduct/tpl/js/jquery.jstree.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/nproduct/tpl/js/display_category.js--><?php $__tmp=array('modules/nproduct/tpl/js/display_category.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/nproduct/tpl/js/itemlist.js--><?php $__tmp=array('modules/nproduct/tpl/js/itemlist.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','_header.html') ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->inc != 'skininfo'){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<div style="clear:both;"></div>
<div class="bundle_select">
	<form aciton="./" method="get"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
		<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
		<input type="hidden" name="module_srl" value="<?php echo $__Context->module_srl ?>" />
		<ul>
			<li><?php echo $__Context->lang->item_name ?> : <input type="text" name="s_item_name" value="<?php echo $__Context->s_item_name ?>" /></li>
		</ul>
		<button type="submit" class="x_btn"><?php echo $__Context->lang->inquiry ?></button>
	</form>
</div>
<div style="clear:both;"></div>
<div style="background:#666; height:40px;">
	<img class="zbxe_widget_output" widget="category_menu" skin="admin" colorset="light" store_type="nproduct" module_srls="<?php echo $__Context->module_srl ?>" />
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','categorylist.html') ?>
<form action="./" method="post" id="list_form" class="form"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="procNproductAdminUpdateItemList" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_srl ?>" />
	<input type="hidden" name="category" value="<?php echo $__Context->category ?>" />
	
	<div class="table event easyList">
		<table>
			<caption style="text-align:right;">
                                <a href="<?php echo getUrl('act','dispNproductAdminItemListExcelDownload') ?>" class="kso_btn"><span><?php echo $__Context->lang->excel_down ?></span></a>
                        </caption>
			<thead>
				<tr>
					<th><input type="checkbox" name="cart" value="" /></th>
					<th><?php echo $__Context->lang->list_order ?></th>
					<th><?php echo $__Context->lang->item_code ?></th>
					<th><?php echo $__Context->lang->item_name ?></th>
					<th><?php echo $__Context->lang->tax_or_not ?></th>
					<th><?php echo $__Context->lang->display_or_not ?></th>
					<th><?php echo $__Context->lang->price ?></th>
					<th><?php echo $__Context->lang->sales ?></th>
					<th><?php echo $__Context->lang->reviews ?></th>
					<th><?php echo $__Context->lang->cmd_main_display ?></th>
					<th><?php echo $__Context->lang->cmd_modify ?></th>
				</tr>
			</thead>
			<tbody id="itemlistorder">
				<?php if($__Context->list&&count($__Context->list))foreach($__Context->list as $__Context->no=>$__Context->val){ ?><tr id="record_<?php echo $__Context->val->item_srl ?>">
					<td><input type="hidden" name="item_srls[]" value="<?php echo $__Context->val->item_srl ?>" /><input type="checkbox" name="cart" value="<?php echo $__Context->val->item_srl ?>" /></td>
					<td><input type="text" name="list_order[]" style="width:80px;" value="<?php echo $__Context->val->list_order ?>" /></td>
					<td><input type="text" name="item_code[]" style="width:80px;" value="<?php echo $__Context->val->item_code ?>" /></td>
					<td><a href="<?php echo getUrl('act','dispNproductAdminUpdateItem','item_srl',$__Context->val->item_srl) ?>"><span style="margin-right:6px;"><img src="<?php echo $__Context->val->getThumbnail(30) ?>" /></span></a><input type="text" name="item_name[]" value="<?php echo $__Context->val->item_name ?>" /></td>
					<td><select name="taxfree[]" style="width:100px"><option value="N"<?php if($__Context->val->taxfree=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->taxation ?></option><option value="Y"<?php if($__Context->val->taxfree=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->no_taxation ?></option></select></td>
					<td><select name="display[]" style="width:100px"><option value="Y"<?php if($__Context->val->display=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->display ?></option><option value="N"<?php if($__Context->val->display=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->not_display ?></option></select></td>
					<td><input type="text" name="price[]" style="width:50px" value="<?php echo $__Context->val->price ?>" /></td>
					<td><?php echo number_format($__Context->val->sales_count) ?></td>
					<td><a href="<?php echo getUrl('','document_srl',$__Context->val->document_srl) ?>#content_02" target="_blank"><?php echo number_format($__Context->val->review_count) ?></a></td>
					<td><a href="#" onclick="appendToDisplayStand(<?php echo $__Context->module_srl ?>, <?php echo $__Context->val->item_srl ?>); return false;" style="text-decoration:none;"><span>▼</span></a></td>
					<td><a href="<?php echo getUrl('act','dispNproductAdminUpdateItem','item_srl',$__Context->val->item_srl) ?>"><?php echo $__Context->lang->cmd_modify ?></a></td>
				</tr><?php } ?>
				<?php if(!count($__Context->list)){ ?><tr>
					<td colspan="12"><?php echo $__Context->lang->msg_no_registered_items ?></td>
				</tr><?php } ?>
			</tbody>
		</table>
	</div>
	<div class="btnArea">
		<span class="btn"><button type="submit"><?php echo $__Context->lang->cmd_apply ?></button></span>
	</div>
</form>
<div class="search">
	<form action="" class="pagination" method="post"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="error_return_url" value="" />
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
		<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
		<?php if($__Context->order_target){ ?><input type="hidden" name="order_target" value="<?php echo $__Context->order_target ?>" /><?php } ?>
		<?php if($__Context->order_type){ ?><input type="hidden" name="order_type" value="<?php echo $__Context->order_type ?>" /><?php } ?>
		<?php if($__Context->category_srl){ ?><input type="hidden" name="category_srl" value="<?php echo $__Context->category_srl ?>" /><?php } ?>
		<?php if($__Context->childrenList){ ?><input type="hidden" name="childrenList" value="<?php echo $__Context->childrenList ?>" /><?php } ?>
		<?php if($__Context->search_keyword){ ?><input type="hidden" name="search_keyword" value="<?php echo $__Context->search_keyword ?>" /><?php } ?>
		<a href="<?php echo getUrl('page', '') ?>" class="direction">&laquo; <?php echo $__Context->lang->first_page ?></a>
		<?php if($__Context->page_navigation->first_page + $__Context->page_navigation->page_count > $__Context->page_navigation->last_page && $__Context->page_navigation->page_count != $__Context->page_navigation->total_page){ ?>
			<?php $__Context->isGoTo = true ?>
			<a href="<?php echo getUrl('page', '') ?>">1</a>
			<a href="#goTo" class="tgAnchor" title="<?php echo $__Context->lang->cmd_go_to_page ?>">...</a>
		<?php } ?>
		<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
			<?php $__Context->last_page = $__Context->page_no ?>
			<?php if($__Context->page_no == $__Context->page){ ?><strong><?php echo $__Context->page_no ?></strong><?php } ?>
			<?php if($__Context->page_no != $__Context->page){ ?><a href="<?php echo getUrl('page', $__Context->page_no) ?>"><?php echo $__Context->page_no ?></a><?php } ?>
		<?php } ?>
		<?php if($__Context->last_page != $__Context->page_navigation->last_page){ ?>
			<?php $__Context->isGoTo = true ?>
			<a href="#goTo" class="tgAnchor" title="<?php echo $__Context->lang->cmd_go_to_page ?>">...</a>
			<a href="<?php echo getUrl('page', $__Context->page_navigation->last_page) ?>"><?php echo $__Context->page_navigation->last_page ?></a>
		<?php } ?>
		<a href="<?php echo getUrl('page', $__Context->page_navigation->last_page) ?>" class="direction"><?php echo $__Context->lang->last_page ?>&raquo;</a>
		<?php if($__Context->isGoTo){ ?><span id="goTo" class="tgContent">
			<input name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
			<button type="submit">Go</button>
		</span><?php } ?>
	</form>
	<?php if(0){ ?><form action="" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<select name="search_target">
			<option value=""><?php echo $__Context->lang->search_target ?></option>
			<?php $__Context->lang->search_target_list = array_merge($__Context->lang->search_target_list, $__Context->usedIdentifiers) ?>
			<?php if($__Context->lang->search_target_list&&count($__Context->lang->search_target_list))foreach($__Context->lang->search_target_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->search_target==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?>
		</select>
		<input type="text" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" />
		<input type="submit" value="<?php echo $__Context->lang->cmd_search ?>" />
		<a href="<?php echo getUrl('search_target', '', 'search_keyword', '') ?>"><?php echo $__Context->lang->cmd_cancel ?></a>
	</form><?php } ?>
</div>
<div id="tabs">
	<div class="item_list"><?php echo $__Context->lang->about_display_categories ?><a href="<?php echo getUrl('act','dispNproductAdminDisplayCategories') ?>"><?php echo $__Context->lang->category_management ?></a></div>
	<ul>
		<li><a href="#tabs-0" category_srl="0"><?php echo $__Context->lang->product_categories ?></a></li>
		<?php if($__Context->display_categories&&count($__Context->display_categories))foreach($__Context->display_categories as $__Context->key=>$__Context->val){ ?><li category_srl="<?php echo $__Context->val->category_srl ?>">
			<?php if(!$__Context->selected_category_srl){;
$__Context->selected_category_srl = $__Context->val->category_srl;
} ?>
			<a href="#tabs-<?php echo $__Context->val->category_srl ?>" category_srl="<?php echo $__Context->val->category_srl ?>"><?php echo $__Context->val->category_name ?></a>
		</li><?php } ?>
	</ul>
	<div id="tabs-0" style="height:300px; overflow:auto;">
		<div><ul id="category_tree"></ul></div>
		<ul id="tabs0-itemlist" class="sortable lined" style="margin:0;width:500px;float:left;">
			<?php if(0){;
if($__Context->val->items&&count($__Context->val->items))foreach($__Context->val->items as $__Context->item_key=>$__Context->item_val){ ?><li id="record_<?php echo $__Context->item_val->item_srl ?>">
				<span class="iconMoveTo"></span>
				<span><?php echo $__Context->item_val->item_name ?></span>
			</li><?php }} ?>
		</ul>
	</div>
	<?php if($__Context->display_categories&&count($__Context->display_categories))foreach($__Context->display_categories as $__Context->key=>$__Context->val){ ?><div id="tabs-<?php echo $__Context->val->category_srl ?>">
		<ul class="sortable lined">
			<?php if($__Context->val->items&&count($__Context->val->items))foreach($__Context->val->items as $__Context->item_key=>$__Context->item_val){ ?><li id="record_<?php echo $__Context->item_val->item_srl ?>">
				<span class="iconMoveTo"></span>
				<span><?php echo $__Context->item_val->item_name ?></span>
				<a href="#" class="delete" onclick="delete_display_item(<?php echo $__Context->val->category_srl ?>,<?php echo $__Context->item_val->item_srl ?>); return false;"><?php echo $__Context->lang->cmd_delete ?></a>
			</li><?php } ?>
		</ul>
	</div><?php } ?>
</div>
<script type="text/javascript">
    var module_srl = <?php echo $__Context->module_srl ?>;
	var selected_category_srl = '<?php echo $__Context->selected_category_srl ?>';
	jQuery(document).ready(function() {
		init_tree(<?php echo $__Context->module_srl ?>, '#category_tree', '<?php echo $__Context->tpl_path ?>img/');
		jQuery( "#tabs" ).tabs({
			select:function(event,ui) { selected_category_srl = jQuery(ui.tab).attr('category_srl'); }
			// for jquery-ui 1.10
			, activate:function(event,ui) { selected_category_srl = jQuery(ui.newTab).attr('category_srl'); }
		});
		jQuery(".sortable").sortable({ handle:'.iconMoveTo', opacity: 0.6, cursor: 'move',
			update: function(event,ui) {
				var order = jQuery(this).sortable("serialize");
				var params = new Array();
				params['order'] = order;
				var response_tags = new Array('error','message');
				exec_xml('nproduct', 'procNproductAdminUpdateDIListOrder', params, function(ret_obj) { }, response_tags);
			}
		});
		jQuery('#list_form').submit(function() {
			var s_item_name = jQuery('.bundle_select input[name=s_item_name]').val();
			if(s_item_name.length) jQuery(this).append('<input type="hidden" name="s_item_name" value="' + s_item_name + '" />');
		});
	});
</script>
