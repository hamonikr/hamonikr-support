<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/autoinstall/tpl','category.html') ?>
<div class="x_clearfix" style="margin-bottom:10px">
	<?php if($__Context->act == 'dispAutoinstallAdminIndex'){ ?><div class="x_pull-left sort">
		<?php if($__Context->order_target == 'newest'){ ?>
			<?php if($__Context->order_type == 'desc'){;
$__Context->_newest_order_type = 'asc';
}else{;
$__Context->_newest_order_type = 'desc';
} ?>
		<?php }else{ ?>
			<?php $__Context->_newest_order_type = 'desc' ?>
		<?php } ?>
		<?php if($__Context->order_target == 'download'){ ?>
			<?php if($__Context->order_type == 'desc'){;
$__Context->_download_order_type = 'asc';
}else{;
$__Context->_download_order_type = 'desc';
} ?>
		<?php }else{ ?>
			<?php $__Context->_download_order_type = 'desc' ?>
		<?php } ?>
		<?php if($__Context->order_target == 'popular'){ ?>
			<?php if($__Context->order_type == 'desc'){;
$__Context->_popular_order_type = 'asc';
}else{;
$__Context->_popular_order_type = 'desc';
} ?>
		<?php }else{ ?>
			<?php $__Context->_popular_order_type = 'desc' ?>
		<?php } ?>
		<a href="<?php echo escape(getUrl('order_target','newest','order_type',$__Context->_newest_order_type,page,''), false) ?>"<?php if($__Context->order_target == 'newest'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->order_newest ?> <?php if($__Context->order_target == 'newest'){ ?><i<?php if($__Context->_newest_order_type == 'asc'){ ?> class="x_icon-circle-arrow-down"<?php };
if($__Context->_newest_order_type == 'desc'){ ?> class="x_icon-circle-arrow-up"<?php } ?>><?php echo escape($__Context->_newest_order_type, false) ?></i><?php } ?></a>
		<i>|</i>
		<a href="<?php echo escape(getUrl('order_target','download','order_type',$__Context->_download_order_type,page,''), false) ?>"<?php if($__Context->order_target == 'download'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->order_download ?> <?php if($__Context->order_target == 'download'){ ?><i<?php if($__Context->_download_order_type == 'asc'){ ?> class="x_icon-circle-arrow-down"<?php };
if($__Context->_download_order_type == 'desc'){ ?> class="x_icon-circle-arrow-up"<?php } ?>><?php echo escape($__Context->_download_order_type, false) ?></i><?php } ?></a>
		<i>|</i>
		<a href="<?php echo escape(getUrl('order_target','popular','order_type',$__Context->_popular_order_type,page,''), false) ?>"<?php if($__Context->order_target == 'popular'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->order_popular ?> <?php if($__Context->order_target == 'popular'){ ?><i<?php if($__Context->_popular_order_type == 'asc'){ ?> class="x_icon-circle-arrow-down"<?php };
if($__Context->_popular_order_type == 'desc'){ ?> class="x_icon-circle-arrow-up"<?php } ?>><?php echo escape($__Context->_popular_order_type, false) ?></i><?php } ?></a></li>
	</div><?php } ?>
</div>
<div id="__list_simple">
	<div style="overflow:hidden;margin-bottom:10px">
		<strong style="position:relative;top:10px">
			<?php if($__Context->current_category){;
echo escape($__Context->current_category, false);
} ?>
			<?php if(!$__Context->current_category){ ?>All<?php } ?>
			(<?php echo escape(sprintf('%d', $__Context->page_navigation->total_count), false) ?>)
		</strong>
		<div class="x_btn-group x_pull-right">
			<button class="x_btn x_active __btn_simple"><?php echo $__Context->lang->simple_view ?></button>
			<button class="x_btn __btn_detail"><?php echo $__Context->lang->detail_view ?></button>
		</div>
	</div>
	<div class="list">
		<?php if($__Context->item_list&&count($__Context->item_list))foreach($__Context->item_list as $__Context->key=>$__Context->item){ ?>
			<?php  $__Context->target_url = $__Context->original_site."?mid=download&package_srl=".$__Context->item->package_srl;  ?>
			<div class="x_thumbnail">
				<div class="thumb" style="min-height:80px">
					<img src="<?php echo escape(str_replace('./', $__Context->uri, $__Context->item->item_screenshot_url), false) ?>" alt="" style="width:80px;height:80px" />
				</div>
				<div class="text">
					<h3><span class="x_label x_label-info"><?php echo escape($__Context->item->category, false) ?></span> <a href="<?php echo escape($__Context->target_url, false) ?>" title="<?php echo escape($__Context->item->title, false) ?>" target="_blank"><?php echo escape($__Context->item->title, false) ?></a></h3>
					<p>
						<?php if((int)$__Context->item->package_voter > 0){ ?>
							<span class="starRating"><span style="width:<?php echo escape(sprintf("%d",$__Context->item->package_voted/$__Context->item->package_voter*20), false) ?>%"><?php echo escape(sprintf("%0.1f",$__Context->item->package_voted/$__Context->item->package_voter*2), false);
echo escape(sprintf($__Context->lang->rate, $__Context->item->package_start), false) ?></span></span>
							<span class="x_badge"><?php echo escape(sprintf("%0.1f",$__Context->item->package_voted/$__Context->item->package_voter*2), false) ?>/<?php echo escape(number_format($__Context->item->package_voter), false) ?></span>
						<?php } ?>
						<?php if((int)$__Context->item->package_voter <= 0){ ?>
							<span class="starRating"><span style="width:0%">0</span></span>
							<span class="x_badge">0/0</span>
						<?php } ?>
					</p>
					<p class="x_btn-group" style="text-align:right">
						<?php if($__Context->item->current_version && $__Context->item->need_update != 'Y'){ ?><a class="x_btn x_disabled" href="#"><?php echo $__Context->lang->installed ?></a><?php } ?>
						<?php if(!$__Context->item->current_version){ ?><a class="x_btn" href="<?php echo escape(getUrl('act','dispAutoinstallAdminInstall','package_srl',$__Context->item->package_srl), false) ?>"><i class="x_icon-download-alt"></i> <?php echo $__Context->lang->install ?></a><?php } ?>
						<?php if($__Context->item->current_version && $__Context->item->avail_remove){ ?><a class="x_btn" href="<?php echo escape(getUrl('act','dispAutoinstallAdminUninstall','package_srl',$__Context->item->package_srl), false) ?>"><i class="x_icon-remove"></i> <?php echo $__Context->lang->cmd_delete ?></a><?php } ?>
						<?php if($__Context->item->current_version && $__Context->item->need_update == 'Y'){ ?><a class="x_btn" href="<?php echo escape(getUrl('act','dispAutoinstallAdminInstall','package_srl',$__Context->item->package_srl), false) ?>"><i class="x_icon-refresh"></i> <?php echo $__Context->lang->update ?></a><?php } ?>
					</p>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<table id="__list_detail" class="x_table x_table-striped x_table-hover" style="display:none">
	<caption>
		<strong>
			<?php if($__Context->current_category){;
echo escape($__Context->current_category, false);
} ?>
			<?php if(!$__Context->current_category){ ?>All<?php } ?>
			(<?php echo escape(sprintf('%d', $__Context->page_navigation->total_count), false) ?>)
		</strong>
		<div class="x_btn-group x_pull-right">
			<button class="x_btn x_active __btn_simple"><?php echo $__Context->lang->simple_view ?></button>
			<button class="x_btn __btn_detail"><?php echo $__Context->lang->detail_view ?></button>
		</div>
	</caption>
	<thead>
		<tr>
			<th scope="col" class="nowr"><?php echo $__Context->lang->thumbnail ?></th>
			<th scope="col" class="nowr"><?php echo $__Context->lang->name ?></th>
			<th scope="col" class="nowr"><?php echo $__Context->lang->distribute_version ?></th>
			<th scope="col" class="nowr"><?php echo $__Context->lang->current_version ?></th>
			<th scope="col" class="nowr"><?php echo $__Context->lang->run ?></th>
		</tr>
	</thead>
	<tbody>
		<?php if($__Context->item_list&&count($__Context->item_list))foreach($__Context->item_list as $__Context->key=>$__Context->item){ ?><tr>
			<?php  $__Context->target_url = $__Context->original_site."?mid=download&package_srl=".$__Context->item->package_srl;  ?>
			<td>
				<div class="x_thumbnail" style="width:80px;height:80px">
					<img src="<?php echo escape(str_replace('./', $__Context->uri, $__Context->item->item_screenshot_url), false) ?>" alt="" width="100" height="100" />
				</div>
			</td>
			<td>
				<p><span class="x_label x_label-info"><?php echo escape($__Context->item->category, false) ?></span> <a href="<?php echo escape($__Context->target_url, false) ?>" target="_blank"><?php echo escape($__Context->item->title, false) ?></a></p>
				<p style="margin:5px 0"><?php echo escape(cut_str($__Context->item->package_description,200), false) ?></p>
				<p style="margin:5px 0">
					<?php if((int)$__Context->item->package_voter > 0){ ?>
						<span class="starRating"><span style="width:<?php echo escape(sprintf("%d",$__Context->item->package_voted/$__Context->item->package_voter*20), false) ?>%"><?php echo escape(sprintf("%0.1f",$__Context->item->package_voted/$__Context->item->package_voter*2), false);
echo escape(sprintf($__Context->lang->rate, $__Context->item->package_start), false) ?></span></span>
						<span class="x_badge"><?php echo escape(sprintf("%0.1f",$__Context->item->package_voted/$__Context->item->package_voter*2), false) ?>/<?php echo escape(number_format($__Context->item->package_voter), false) ?></span>
					<?php } ?>
					<?php if((int)$__Context->item->package_voter <= 0){ ?>
						<span class="starRating"><span style="width:0%">0</span></span>
						<span class="x_badge">0/0</span>
					<?php } ?>
					<?php echo $__Context->lang->package_update ?>: <time title="<?php echo escape(zdate($__Context->item->item_regdate, "Y-m-d H:i"), false) ?>"><?php echo escape(zdate($__Context->item->item_regdate, "Y-m-d"), false) ?></time> 
					<i>|</i>
					<?php echo $__Context->lang->package_downloaded_count ?>: <?php echo escape(number_format($__Context->item->package_downloaded), false) ?>
					<i>|</i>
				</p>
				<?php if($__Context->item->deps){ ?><p><?php echo $__Context->lang->dependant_list ?>:</p><?php } ?>
				<?php if($__Context->item->deps){ ?><ul class="">
					<?php if($__Context->item->deps&&count($__Context->item->deps))foreach($__Context->item->deps as $__Context->package_srl){ ?><li><?php echo escape($__Context->installed[$__Context->package_srl]->title, false) ?></li><?php } ?>
				</ul><?php } ?>
			</td>
			<td><?php echo escape($__Context->item->item_version, false) ?></td>
			<td><?php echo escape($__Context->item->current_version, false) ?></td>
			<td>
				<span class="x_btn-group">
					<?php if($__Context->item->current_version && $__Context->item->need_update != 'Y'){ ?><a class="x_btn x_disabled" href="#"><?php echo $__Context->lang->installed ?></a><?php } ?>
					<?php if(!$__Context->item->current_version){ ?><a class="x_btn" href="<?php echo escape(getUrl('act','dispAutoinstallAdminInstall','package_srl',$__Context->item->package_srl), false) ?>"><i class="x_icon-download-alt"></i> <?php echo $__Context->lang->install ?></a><?php } ?>
					<?php if(!$__Context->show_ftp_note && $__Context->item->current_version && $__Context->item->avail_remove){ ?><a class="x_btn" href="<?php echo escape(getUrl('act','dispAutoinstallAdminUninstall','package_srl',$__Context->item->package_srl), false) ?>"><i class="x_icon-remove"></i> <?php echo $__Context->lang->cmd_delete ?></a><?php } ?>
					<?php if($__Context->item->current_version && $__Context->item->need_update == 'Y'){ ?><a class="x_btn" href="<?php echo escape(getUrl('act','dispAutoinstallAdminInstall','package_srl',$__Context->item->package_srl), false) ?>"><i class="x_icon-refresh"></i> <?php echo $__Context->lang->update ?></a><?php } ?>
				</span>
			</td>
		</tr><?php } ?>
	</tbody>
</table>
<div class="x_clearfix" style="margin-top:-10px">
	<?php if($__Context->page_navigation){ ?><form action="./" class="x_pagination x_pull-left" ><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="admin" />
		<input type="hidden" name="act" value="<?php echo escape($__Context->act, false) ?>" />
		<input type="hidden" name="order_target" value="<?php echo escape($__Context->order_target, false) ?>" />
		<input type="hidden" name="order_type" value="<?php echo escape($__Context->order_type, false) ?>" />
		<input type="hidden" name="search_keyword" value="<?php echo escape($__Context->search_keyword, false) ?>" />
		<ul>
			<li<?php if(!$__Context->page || $__Context->page == 1){ ?> class="x_disabled"<?php } ?>><a href="<?php echo escape(getUrl('page', ''), false) ?>">&laquo; <?php echo $__Context->lang->first_page ?></a></li>
			<?php if($__Context->page_navigation->first_page != 1 && $__Context->page_navigation->first_page + $__Context->page_navigation->page_count > $__Context->page_navigation->last_page - 1 && $__Context->page_navigation->page_count != $__Context->page_navigation->total_page){ ?>
			<?php $__Context->isGoTo = true ?>
			<li>
				<a href="#goTo" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
				<?php if($__Context->isGoTo){ ?><span id="goTo" class="x_input-append">
					<input type="number" min="1" max="<?php echo escape($__Context->page_navigation->last_page, false) ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
					<button type="submit" class="x_add-on">Go</button>
				</span><?php } ?>
			</li>
			<?php } ?>
			<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
			<?php $__Context->last_page = $__Context->page_no ?>
			<li<?php if($__Context->page_no == $__Context->page){ ?> class="x_active"<?php } ?>><a  href="<?php echo escape(getUrl('page', $__Context->page_no), false) ?>"><?php echo escape($__Context->page_no, false) ?></a></li>
			<?php } ?>
			<?php if($__Context->last_page != $__Context->page_navigation->last_page && $__Context->last_page + 1 != $__Context->page_navigation->last_page){ ?>
			<?php $__Context->isGoTo = true ?>
			<li>
				<a href="#goTo" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
				<?php if($__Context->isGoTo){ ?><span id="goTo" class="x_input-append">
					<input type="number" min="1" max="<?php echo escape($__Context->page_navigation->last_page, false) ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
					<button type="submit" class="x_add-on">Go</button>
				</span><?php } ?>
			</li>
			<?php } ?>
		<li<?php if($__Context->page == $__Context->page_navigation->last_page){ ?> class="x_disabled"<?php } ?>><a href="<?php echo escape(getUrl('page', $__Context->page_navigation->last_page), false) ?>" title="<?php echo escape($__Context->page_navigation->last_page, false) ?>"><?php echo $__Context->lang->last_page ?> &raquo;</a></li>
		</ul>
	</form><?php } ?>
	<?php if($__Context->act!=dispAutoinstallAdminInstalledPackages){ ?><form action="./" class="search x_input-append x_pull-right" ><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="admin" />
		<input type="hidden" name="act" value="<?php echo escape($__Context->act, false) ?>" />
		<input type="hidden" name="order_target" value="<?php echo escape($__Context->order_target, false) ?>" />
		<input type="hidden" name="order_type" value="<?php echo escape($__Context->order_type, false) ?>" />
		<input type="search" name="search_keyword" required title="Search" value="<?php echo escape($__Context->search_keyword, false) ?>" />
		<button class="x_btn x_btn-inverse" type="submit"><?php echo $__Context->lang->cmd_search ?></button>
		<a href="<?php echo escape(getUrl('page', '', 'search_keyword', ''), false) ?>" class="x_btn"><?php echo $__Context->lang->cmd_cancel ?></a>
	</form><?php } ?>
</div>
<script>
jQuery(function($){
	var $btnSimple = $('.__btn_simple');
	var $btnDetail = $('.__btn_detail');
	var $listSimple = $('#__list_simple');
	var $listDetail = $('#__list_detail');
	$btnSimple.click(function(){
		$btnSimple.addClass('x_active');
		$btnDetail.removeClass('x_active');
		$listSimple.show();
		$listDetail.hide();
		setCookie('__autoinstall_view_type', 'simple');
	});
	$btnDetail.click(function(){
		$btnSimple.removeClass('x_active');
		$btnDetail.addClass('x_active');
		$listSimple.hide();
		$listDetail.show();
		setCookie('__autoinstall_view_type', 'detail');
	});
	var viewType = getCookie('__autoinstall_view_type');
	if(viewType == 'detail'){
		$btnDetail.trigger('click');
	}
	$('.list>.x_thumbnail:odd').addClass('even');
	$('.list>.x_thumbnail:even').addClass('odd');
});
</script>
