<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nmileage/tpl','_header.html') ?>
<!--#Meta:modules/nmileage/tpl/js/mileagelist.js--><?php $__tmp=array('modules/nmileage/tpl/js/mileagelist.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="table even easyList">
	<table>
		<thead>
			<th><?php echo $__Context->lang->regdate ?></th>
			<th><?php echo $__Context->lang->email_address ?></th>
			<th><?php echo $__Context->lang->nick_name ?></th>
			<th><?php echo $__Context->lang->classify ?></th>
			<th><?php echo $__Context->lang->item ?></th>
			<th><?php echo $__Context->lang->amount ?></th>
			<th><?php echo $__Context->lang->balance ?></th>
			<th><?php echo $__Context->lang->remark ?></th>
		</thead>
		<tbody>
			<?php if($__Context->list&&count($__Context->list))foreach($__Context->list as $__Context->key=>$__Context->val){ ?><tr>
				<td><?php echo zdate($__Context->val->regdate) ?></td> 
				<td><?php echo $__Context->val->email_address ?></td> 
				<td><?php echo $__Context->val->nick_name ?></td> 
				<td><?php if($__Context->val->action=='1'){ ?><span><?php echo $__Context->lang->plus ?></span><?php };
if($__Context->val->action=='2'){ ?><span><?php echo $__Context->lang->minus ?></span><?php } ?></td> 
				<td><?php echo $__Context->val->title ?></td> 
				<td><?php echo number_format($__Context->val->amount) ?></td> 
				<td><?php echo number_format($__Context->val->balance) ?></td> 
				<td><?php if($__Context->val->order_srl){ ?><span><?php echo $__Context->lang->order_number ?>: <a href="<?php echo getUrl('act','dispNcartAdminOrderDetail','order_srl',$__Context->val->order_srl) ?>" target="_blank"><?php echo $__Context->val->order_srl ?></a></span><?php } ?></td> 
			</tr><?php } ?>
		</tbody>
	</table>
</div>
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
		<a href="<?php echo getUrl('page', '') ?>" class="direction">&laquo; FIRST</a>
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
		<a href="<?php echo getUrl('page', $__Context->page_navigation->last_page) ?>" class="direction">LAST &raquo;</a>
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
