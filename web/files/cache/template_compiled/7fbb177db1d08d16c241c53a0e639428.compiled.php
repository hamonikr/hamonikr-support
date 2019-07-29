<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/inipaystandard/tpl','_header.html') ?>
<script>
	xe.lang.confirm_delete = '<?php echo $__Context->lang->confirm_delete ?>';
</script>
<table class="x_table x_table-striped x_table-hover">
	<caption>
		<strong>Total: <?php echo number_format($__Context->total_count) ?>, Page: <?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?></strong>
	</caption>
	<thead>
		<tr>
			<th scope="col"><?php echo $__Context->lang->no ?></th>
			<th scope="col"><?php echo $__Context->lang->module_category ?></th>
			<th scope="col"><?php echo $__Context->lang->mid ?></th>
			<th scope="col"><?php echo $__Context->lang->browser_title ?></th>
			<th scope="col"><?php echo $__Context->lang->regdate ?></th>
			<th scope="col"><?php echo $__Context->lang->cmd_management ?></th>
			<th scope="col"><?php echo $__Context->lang->cmd_delete ?></th>
		</tr>
	</thead>
	<tbody>
		<?php if($__Context->module_list&&count($__Context->module_list))foreach($__Context->module_list as $__Context->no=>$__Context->val){ ?><tr>
			<td><?php echo $__Context->no ?></td>
			<td>
				<?php if(!$__Context->val->module_category_srl){ ?>
					<?php if($__Context->val->site_srl){;
echo $__Context->lang->virtual_site;
} ?>
					<?php if(!$__Context->val->site_srl){;
echo $__Context->lang->not_exists;
} ?>
				<?php } ?>
				<?php if($__Context->val->module_category_srl){;
echo $__Context->module_category[$__Context->val->module_category_srl]->title;
} ?>
			</td>
			<td><?php echo $__Context->val->mid ?></td>
			<td><a href="<?php echo getSiteUrl($__Context->val->domain,'','mid',$__Context->val->mid) ?>"><?php echo $__Context->val->browser_title ?></a></td>
			<td><?php echo zdate($__Context->val->regdate,"Y-m-d") ?></td>
			<td><a href="<?php echo getUrl('act','dispInipaystandardAdminInsertModule','module_srl',$__Context->val->module_srl) ?>"><?php echo $__Context->lang->cmd_management ?></a></td>
			<td><a href="#" class="_moduleDelete" data-module-srl="<?php echo $__Context->val->module_srl ?>"><?php echo $__Context->lang->cmd_delete ?></a></td>
		</tr><?php } ?>
		<?php if(!$__Context->module_list){ ?><tr>
			<td><?php echo $__Context->lang->no_module_instance ?></td>
		</tr><?php } ?>
	</tbody>
</table>
<div class="x_clearfix">
	<?php if($__Context->page_navigation){ ?><form action="./" class="x_pagination x_pull-left"  style="margin-top:0"><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<?php 
			$__Context->urlInfo = parse_url(getRequestUriByServerEnviroment());
			parse_str($__Context->urlInfo['query'], $__Context->param);
		 ?>
		<?php if($__Context->param&&count($__Context->param))foreach($__Context->param as $__Context->key=>$__Context->val){;
if(!in_array($__Context->key, array('mid', 'vid', 'act'))){ ?><input type="hidden" name="<?php echo $__Context->key ?>" value="<?php echo $__Context->val ?>" /><?php }} ?>
		<ul>
			<li<?php if(!$__Context->page || $__Context->page == 1){ ?> class="x_disabled"<?php } ?>><a href="<?php echo getUrl('page', '') ?>">&laquo; <?php echo $__Context->lang->first_page ?></a></li>
			<?php if($__Context->page_navigation->first_page != 1 && $__Context->page_navigation->first_page + $__Context->page_navigation->page_count > $__Context->page_navigation->last_page - 1 && $__Context->page_navigation->page_count != $__Context->page_navigation->total_page){ ?>
			<?php $__Context->isGoTo = true ?>
			<li>
				<a href="#goTo" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
				<?php if($__Context->isGoTo){ ?><span id="goTo" class="x_input-append">
					<input type="number" min="1" max="<?php echo $__Context->page_navigation->last_page ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
					<button type="submit" class="x_add-on">Go</button>
				</span><?php } ?>
			</li>
			<?php } ?>
			<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
			<?php $__Context->last_page = $__Context->page_no ?>
			<li<?php if($__Context->page_no == $__Context->page){ ?> class="x_active"<?php } ?>><a  href="<?php echo getUrl('page', $__Context->page_no) ?>"><?php echo $__Context->page_no ?></a></li>
			<?php } ?>
			<?php if($__Context->last_page != $__Context->page_navigation->last_page && $__Context->last_page + 1 != $__Context->page_navigation->last_page){ ?>
			<?php $__Context->isGoTo = true ?>
			<li>
				<a href="#goTo" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
				<?php if($__Context->isGoTo){ ?><span id="goTo" class="x_input-append">
					<input type="number" min="1" max="<?php echo $__Context->page_navigation->last_page ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
					<button type="submit" class="x_add-on">Go</button>
				</span><?php } ?>
			</li>
			<?php } ?>
			<li<?php if($__Context->page == $__Context->page_navigation->last_page){ ?> class="x_disabled"<?php } ?>><a href="<?php echo getUrl('page', $__Context->page_navigation->last_page) ?>" title="<?php echo $__Context->page_navigation->last_page ?>"><?php echo $__Context->lang->last_page ?> &raquo;</a></li>
		</ul>
	</form><?php } ?>
	<span class="x_pull-right x_btn-group">
		<a class="x_btn x_pull-right" href="<?php echo getUrl('act','dispInipaystandardAdminInsertModule','module_srl','') ?>"><?php echo $__Context->lang->cmd_make ?></a>
	</span>
</div>
<form action="" class="search x_input-append center" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<?php if($__Context->param&&count($__Context->param))foreach($__Context->param as $__Context->key=>$__Context->val){;
if(!in_array($__Context->key, array('mid', 'vid', 'act', 'page', 'search_target', 'search_keyword'))){ ?><input type="hidden" name="<?php echo $__Context->key ?>" value="<?php echo $__Context->val ?>" /><?php }} ?>
	<?php if(count($__Context->module_category)){ ?><select name="module_category_srl" title="<?php echo $__Context->lang->module_category ?>" style="margin-right:4px">
		<option value=""<?php if(!$__Context->module_category_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->all ?></option>
		<option value="0"<?php if($__Context->module_category_srl==='0'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->not_exists ?></option>
		<?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>" <?php if($__Context->module_category_srl==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
	</select><?php } ?>
	<select name="search_target" title="<?php echo $__Context->lang->search_target ?>" style="margin-right:4px">
		<option value="mid"<?php if($__Context->search_target=='mid'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->mid ?></option>
		<option value="browser_title"<?php if($__Context->search_target=='browser_title'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->browser_title ?></option>
	</select>
	<input type="search" required name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword) ?>" />
	<button class="x_btn x_btn-inverse" type="submit"><?php echo $__Context->lang->cmd_search ?></button>
	<a class="x_btn" href="<?php echo getUrl('', 'module', $__Context->module, 'act', $__Context->act) ?>"><?php echo $__Context->lang->cmd_cancel ?></a>
</form>