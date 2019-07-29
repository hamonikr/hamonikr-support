<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/nstore/tpl/js/escrow.js--><?php $__tmp=array('modules/nstore/tpl/js/escrow.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/nstore/tpl/js/ordermanagement.js--><?php $__tmp=array('modules/nstore/tpl/js/ordermanagement.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nstore/tpl','_header.html') ?>
<?php if(count($__Context->list)){ ?>
	<?php $__Context->list_keys = array_keys($__Context->list) ?>
	<?php $__Context->first_order = $__Context->list[$__Context->list_keys[0]] ?>
	<?php $__Context->extra_vars = unserialize($__Context->first_order->extra_vars) ?>
	<?php if($__Context->extra_vars){ ?>
		<?php $__Context->keys = array_keys($__Context->extra_vars) ?>
		<?php $__Context->representative = $__Context->keys[0] ?>
	<?php } ?>
<?php } ?>
<div style="margin-bottom:20px;">
	<?php if(0){ ?><a href="<?php echo getUrl('','mid',$__Context->mid,'module',$__Context->module,'act',$__Context->act,'status','0') ?>"<?php if($__Context->status=='0'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->cmd_cart ?></a><?php } ?> <i>|</i>
	<a href="<?php echo getUrl('','mid',$__Context->mid,'module',$__Context->module,'act',$__Context->act,'status','1') ?>"<?php if($__Context->status=='1'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->wait_deposit ?></a> <i>|</i>
	<a href="<?php echo getUrl('','mid',$__Context->mid,'module',$__Context->module,'act',$__Context->act,'status','2') ?>"<?php if($__Context->status=='2'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->deposit_done ?></a> <i>|</i>
	<a href="<?php echo getUrl('','mid',$__Context->mid,'module',$__Context->module,'act',$__Context->act,'status','3') ?>"<?php if($__Context->status=='3'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->prepare_delivery ?></a> <i>|</i>
	<a href="<?php echo getUrl('','mid',$__Context->mid,'module',$__Context->module,'act',$__Context->act,'status','4') ?>"<?php if($__Context->status=='4'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->on_delivery ?></a> <i>|</i>
	<a href="<?php echo getUrl('','mid',$__Context->mid,'module',$__Context->module,'act',$__Context->act,'status','5') ?>"<?php if($__Context->status=='5'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->delivery_done ?></a> <i>|</i>
	<a href="<?php echo getUrl('','mid',$__Context->mid,'module',$__Context->module,'act',$__Context->act,'status','6') ?>"<?php if($__Context->status=='6'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->transaction_done ?></a> <i>|</i>
	<a href="<?php echo getUrl('','mid',$__Context->mid,'module',$__Context->module,'act',$__Context->act,'status','A') ?>"<?php if($__Context->status=='A'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->cancelled ?></a> <i>|</i>
	<a href="<?php echo getUrl('','mid',$__Context->mid,'module',$__Context->module,'act',$__Context->act,'status','B') ?>"<?php if($__Context->status=='B'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->returns ?></a> <i>|</i>
	<a href="<?php echo getUrl('','mid',$__Context->mid,'module',$__Context->module,'act',$__Context->act,'status','C') ?>"<?php if($__Context->status=='C'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->exchanges ?></a> <i>|</i>
	<a href="<?php echo getUrl('','mid',$__Context->mid,'module',$__Context->module,'act',$__Context->act,'status','D') ?>"<?php if($__Context->status=='D'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->refund ?></a> <i>|</i>
</div>
<form id="searchForm" action="./" method="get" class="x_input-append" ><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
	<input type="hidden" name="status" value="<?php echo $__Context->status ?>" />
	<input type="hidden" name="error_return_url" value="" />
	<div>
		<select name="s_year" style="width:80px;">
			<option value=""<?php if(!$__Context->s_year){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->all ?></option>
			<?php for($__Context->i=(intval(date('Y'))+2);$__Context->i>=(intval(date('Y'))-10);$__Context->i--){ ?><option value="<?php echo $__Context->i ?>"<?php if($__Context->s_year==$__Context->i){ ?> selected="selected"<?php } ?>><?php echo $__Context->i ?></option><?php } ?>
		</select>
		<select name="s_month" style="width:54px;">
			<option value=""<?php if(!$__Context->s_month){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->all ?></option>
			<?php for($__Context->i=1;$__Context->i<=12;$__Context->i++){ ?><option value="<?php echo sprintf('%02u', $__Context->i) ?>"<?php if($__Context->s_month==$__Context->i){ ?> selected="selected"<?php } ?>><?php echo $__Context->i ?></option><?php } ?>
		</select>
	</div>
	<select name="search_key">
		<option value="email_address"<?php if($__Context->search_key=='email_address'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->email_address ?></option>
		<?php if($__Context->usedIdentifiers&&count($__Context->usedIdentifiers))foreach($__Context->usedIdentifiers as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>" selected="selected"|cond=="$search_key==$key"><?php echo Context::getLang($__Context->key) ?></option><?php } ?>
		<option value="member_srl"<?php if($__Context->search_key=='member_srl'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->member_srl ?></option>
		<?php if($__Context->representative){ ?><option value="extra_vars"<?php if($__Context->search_key=='extra_vars'){ ?> selected="selected"<?php } ?>><?php echo sprintf($__Context->lang->info_purchaser_input, $__Context->representative) ?></option><?php } ?>
	</select>
	<input type="text" name="search_value" value="<?php echo $__Context->search_value ?>" />
	<button class="x_btn x_btn-inverse" type="submit"><?php echo $__Context->lang->inquiry ?></button>
</form>
<form action="./" method="post" class="x_input-append x_clearfix" id="fo_orderlist"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="procNstoreAdminUpdateStatus" />
	<input type="hidden" name="status" value="<?php echo $__Context->status ?>"/>
	<div id="orderlist" class="table even easyList">
		<table class="x_table x_table-striped x_table-hover" summary="<?php echo $__Context->lang->order_management_details ?>">
			<caption style="text-align:right; margin-bottom:10px;">
				<a href="<?php echo getUrl('act','procNstoreAdminOrderExcelDownload') ?>"><?php echo $__Context->lang->cmd_download_by_product ?></a>
				<a href="<?php echo getUrl('act','procNstoreAdminCSVDownloadByOrder') ?>"> | <?php echo $__Context->lang->cmd_download_by_order ?></a>
			</caption>
			<thead style="clear:both;">
				<tr>
					<th scope="col"><input type="checkbox" title="Check All" id="check_all" /></th>
					<th scope="col"><?php echo $__Context->lang->order_date ?></th>
					<th scope="col"><?php echo $__Context->lang->product_name ?></th>
					<th scope="col"><?php echo $__Context->lang->items ?></th>
					<th scope="col"><?php echo $__Context->lang->payamount ?></th>
					<?php if($__Context->usedIdentifiers&&count($__Context->usedIdentifiers))foreach($__Context->usedIdentifiers as $__Context->key=>$__Context->val){ ?><th scope="col"><?php echo Context::getLang($__Context->key) ?></th><?php } ?>
					<?php if($__Context->representative){ ?><th scope="col"><?php echo $__Context->representative ?></th><?php } ?>
					<th scope="col"><?php echo $__Context->lang->title_delivery_info ?></th>
					<?php if($__Context->module_config->escrow_yn=='Y'){ ?><th scope="col"><?php echo $__Context->lang->escrow ?></th><?php } ?>
					<th scope="col"><?php echo $__Context->lang->title_order_info ?></th>
					<th scope="col"><?php echo $__Context->lang->cmd_print_ordersheet ?></th>
				</tr>
			</thead>
			<?php $__Context->total_price=0 ?>
			<tbody>
				<?php if($__Context->list&&count($__Context->list))foreach($__Context->list as $__Context->no=>$__Context->order){ ?><tr>
					<?php $__Context->order_arr = get_object_vars($__Context->order) ?>
					<td><input type="hidden" name="order_srls[]" value="<?php echo $__Context->order->order_srl ?>" /><input type="checkbox" name="cart[]" value="<?php echo $__Context->order->order_srl ?>" /></td>
					<td>
						<div><?php echo zdate($__Context->order->regdate,'Y-m-d') ?></div>
						<div>(<a href="<?php echo getUrl('act','dispNstoreAdminOrderDetail','order_srl',$__Context->order->order_srl) ?>"><?php echo $__Context->order->order_srl ?></a>)</div>
					</td>
					<td><span title="<?php echo $__Context->order->title ?>"><?php echo cut_str($__Context->order->title, 34) ?></span></td>
					<td><?php echo number_format($__Context->order->item_count) ?></td>
					<td><?php echo nproductItem::formatMoney($__Context->order->total_price) ?></td>
					<?php if($__Context->usedIdentifiers&&count($__Context->usedIdentifiers))foreach($__Context->usedIdentifiers as $__Context->key=>$__Context->val){ ?><td><a href="#popup_menu_area" class="member_<?php echo $__Context->order->member_srl ?>" title="<?php echo $__Context->order_arr[$__Context->key] ?>"><?php echo cut_str($__Context->order_arr[$__Context->key],6) ?></a></td><?php } ?>
					<?php if($__Context->representative){ ?><td>
						<?php $__Context->extra_vars = unserialize($__Context->order->extra_vars) ?>
						<?php if($__Context->extra_vars){ ?>
						<?php $__Context->val = array_shift($__Context->extra_vars) ?>
						<?php echo cut_str($__Context->val, 6) ?>
						<?php } ?>
					</td><?php } ?>
					<td>
						<select name="express_id[]" style="width:156px; display:block; margin-bottom:4px;">
							<?php if($__Context->delivery_companies&&count($__Context->delivery_companies))foreach($__Context->delivery_companies as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->key == $__Context->order->express_id || (!$__Context->order->express_id && $__Context->key == $__Context->config->default_delivery_company)){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?>
						</select>
						<input type="text" name="invoice_no[]" style="width:140px;" value="<?php echo $__Context->order->invoice_no ?>" placeholder="<?php echo $__Context->lang->invoice_no ?>" />
						<?php if($__Context->order->invoice_no){ ?><a href="<?php echo $__Context->delivery_inquiry_urls[$__Context->order->express_id];
echo $__Context->order->invoice_no ?>" target="_blank"><span><?php echo $__Context->lang->cmd_trace_delivery ?></span></a><?php } ?>
					</td>
					<?php if($__Context->module_config->escrow_yn=='Y'){ ?><td class="escrow" data-order-srl="<?php echo $__Context->order->order_srl ?>">
						<?php if($__Context->status!='0'){ ?><a href="#" id="escrow_<?php echo $__Context->order->order_srl ?>" onclick="window.open('<?php echo getUrl('act','dispNstoreAdminEscrowDelivery','order_srl',$__Context->order->order_srl) ?>', 'popup', 'left=50, top=20, width=700, scrollbars=yes, height=700, toolbars=no'); return false;" data-order-srl="<?php echo $__Context->order->order_srl ?>"><img src="/modules/nstore/tpl/img/loading.gif" /></a><?php } ?>
					</td><?php } ?>
					<td><a href="#viewOrderInfo" class="modalAnchor viewOrderInfo" data-mid="<?php echo $__Context->mid ?>" data-order-srl="<?php echo $__Context->order->order_srl ?>"><?php echo $__Context->lang->title_order_info ?></a></td>
					<td>
						<?php if($__Context->status!='0'){ ?><a href="#" onclick="window.open('<?php echo getUrl('act','dispNstoreAdminOrderSheet','order_srl',$__Context->order->order_srl) ?>', 'addressbook_popup', 'left=50, top=20, width=700, scrollbars=yes, height=700, toolbars=no'); return false;"><span><?php echo $__Context->lang->cmd_print_ordersheet ?></span></a><?php } ?>
					</td>
					<?php $__Context->total_price+=$__Context->order->price ?>
				</tr><?php } ?>
				<?php if(!count($__Context->list)){ ?><tr>
					<td colspan="9"><?php echo $__Context->lang->msg_no_order_list ?></td>
				</tr><?php } ?>
			</tbody>
		</table>
		<div class="x_control-group">
			<?php unset($__Context->order_status['0']) ?>
			<div class="x_controls x_pull-left">
				<label class="x_control-label x_inline" for="order_status"><?php echo $__Context->lang->cmd_selected_order ?></label>
				<select name="order_status" id="order_status">
					<option value="2"<?php if($__Context->status=='1'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->deposit_done ?></option>
					<option value="3"<?php if($__Context->status=='2'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->prepare_delivery ?></option>
					<option value="4"<?php if($__Context->status=='3'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->on_delivery ?></option>
					<option value="5"<?php if($__Context->status=='4'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->delivery_done ?></option>
					<option value="6"<?php if($__Context->status=='5'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->transaction_done ?></option>
					<option value="A"<?php if($__Context->status=='6'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->cancelled ?></option>
					<option value="B"<?php if($__Context->status=='A'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->returns ?></option>
					<option value="C"<?php if($__Context->status=='B'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->exchanges ?></option>
					<option value="D"<?php if($__Context->status=='C'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->refund ?></option>
					<option value="Z"><?php echo $__Context->lang->cmd_delete ?></option>
				</select>
				<button class="x_btn x_btn-inverse" onclick="update_status();return false;"><?php echo $__Context->lang->cmd_apply ?></button>
			</div><!-- //x_controls -->
		</div><!-- //x_control-group -->
		<button type="submit" name="act" value="procNstoreAdminUpdateDeliveryInfo" class="x_btn x_btn-inverse x_pull-right"><?php echo $__Context->lang->cmd_save_delivery_info ?></button>
	</div><!-- //orderlist -->
</form>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nstore/tpl','_page_navigation.html') ?>
<form action="./" class="x_modal" method="post" id="viewOrderInfo"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<div class="x_modal-header">
		<h1><?php echo $__Context->lang->title_order_info ?></h1>
	</div>
	<div id="orderInfo" class="x_modal-body" style="max-height:600px">
	</div>
</form>
<div class="x_modal" id="deleteOrders">
	<form action="./" class="fg form" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
		<input type="hidden" name="act" value="procNstoreAdminDeleteOrders" />
		<input type="hidden" name="module_srl" value="<?php echo $__Context->module_srl ?>" />
		<input type="hidden" name="status" value="<?php echo $__Context->status ?>" />
		<input type="hidden" name="success_return_url" value="<?php echo getUrl('act', $__Context->act) ?>" />
		<div id="deleteForm">
		</div>
	</form>
</div>
<span style="display:none;"><a href="#deleteOrders" class="modalAnchor deleteOrders">Hidden Button For Delete</a></span>
<script>
	function update_status() 
	{
		var order_status = jQuery('select[name=order_status]').val();
		if (order_status == 'Z') {
			jQuery('a.modalAnchor.deleteOrders').trigger('open.mw');
		} else {
			var $fo = jQuery('#fo_orderlist');
			$fo.submit();
		}
	}
	(function($){
		$('.escrow').escrow();
	})(jQuery);
/*
	function update_status(stat) {
		var order_srls = makeList();
		//var str = order_srls.join(',');
		var params = new Array();
		params['order_srls'] = order_srls;
		params['order_status'] = stat;
		exec_xml('store', 'procNstoreUpdateStatus', params, function(ret_obj) { alert(ret_obj['message']); });
	}
*/
</script>
