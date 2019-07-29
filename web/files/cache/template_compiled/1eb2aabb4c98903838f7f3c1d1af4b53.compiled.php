<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/nproduct/tpl/js/modinstlist.js--><?php $__tmp=array('modules/nproduct/tpl/js/modinstlist.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if(0){ ?><form action="./" method="get" onsubmit="return doChangeCategory(this);" id="fo_list"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
	<select name="module_category_srl">
		<option value=""><?php echo $__Context->lang->module_category ?></option>
		<?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_category_srl==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
	</select>
	<input type="submit" name="go_button" id="go_button" value="GO" class="buttonTypeGo" />
</form><?php } ?>
<table class="x_table">
	<thead>
		<tr>
			<th scope="col"><div><?php echo $__Context->lang->no ?></div></th>
			<?php if(0){ ?><th scope="col"><div><input type="checkbox" onclick="XE.checkboxToggleAll(); return false;" /></div></th><?php } ?>
			<th scope="col" class="half_wide"><div><?php echo $__Context->lang->proc_module ?></div></th>
			<th scope="col" class="half_wide"><div><?php echo $__Context->lang->mid ?></div></th>
			<th scope="col" class="half_wide"><div><?php echo $__Context->lang->browser_title ?></div></th>
			<th scope="col"><?php echo $__Context->lang->cmd_management ?></th>
			<th scope="col"><?php echo $__Context->lang->cmd_delete ?></th>
			<th scope="col"><div><?php echo $__Context->lang->regdate ?></div></th>
		</tr>
	</thead>
	<tbody>
		<?php if($__Context->list&&count($__Context->list))foreach($__Context->list as $__Context->no=>$__Context->val){ ?><tr>
			<td class="center number"><?php echo $__Context->no ?></td>
			<?php if(0){ ?><td class="center"><input type="checkbox" name="cart" value="<?php echo $__Context->val->module_srl ?>" /></td><?php } ?>
			<td><?php echo $__Context->module_list[$__Context->val->proc_module]->title ?></td>
			<td><?php echo htmlspecialchars($__Context->val->mid) ?></td>
			<td><a href="<?php echo getSiteUrl($__Context->val->domain,'','mid',$__Context->val->mid) ?>" onclick="window.open(this.href); return false;"><?php echo $__Context->val->browser_title ?></a></td>
			<td><?php if($__Context->val->proc_module=='nstore_digital'){ ?><a href="<?php echo getUrl('act','dispNstore_digital_contentsAdminItemList','nproduct_srl',$__Context->val->module_srl) ?>" class="x_btn"><span><?php echo $__Context->lang->contents_manage ?></span></a><?php } ?> <?php if($__Context->val->proc_module=='elearning'){ ?><a href="<?php echo getUrl('act','dispElearning_contentsAdminItemList','nproduct_srl',$__Context->val->module_srl) ?>" class="x_btn"><span><?php echo $__Context->lang->contents_manage ?></span></a><?php } ?> <a href="<?php echo getUrl('act','dispNproductAdminItemList','module_srl',$__Context->val->module_srl) ?>" class="x_btn"><span><?php echo $__Context->lang->cmd_management ?></span></a></td>
			<td><a href="#deleteInstance" class="modalAnchor deleteInstance x_btn" data-module-srl="<?php echo $__Context->val->module_srl ?>"><span><?php echo $__Context->lang->cmd_delete ?></span></a></td>
			<td><?php echo zdate($__Context->val->regdate,"Y-m-d") ?></td>
		</tr><?php } ?>
	</tbody>
</table>
<div class="x_clearfix">
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','_page_navigation.html') ?>
	<a class="x_btn x_pull-right" href="<?php echo getUrl('act','dispNproductAdminInsertModInst','module_srl','') ?>"><?php echo $__Context->lang->cmd_make ?></a>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nproduct/tpl','_search_bar.html') ?>
<form action="./" class="x_modal" method="post" id="deleteInstance"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="procNproductAdminDeleteModInst" />
	<div class="x_modal-header">
		<h1><?php echo $__Context->lang->display_page ?> : <?php echo $__Context->lang->delete ?></h1>
	</div>
	<div id="deleteForm" class="x_modal-body">
	</div>
	<div class="x_modal-footer">
		<button type="submit" class="x_btn x_btn-inverse"><?php echo $__Context->lang->cmd_delete ?></button>
	</div>
</form>
