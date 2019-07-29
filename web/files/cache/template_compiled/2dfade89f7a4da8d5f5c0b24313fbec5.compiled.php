<?php if(!defined("__XE__"))exit;?>
<?php $__Context->extra_vars = unserialize($__Context->order_info->extra_vars) ?>
<?php $__Context->address = unserialize($__Context->order_info->recipient_address) ?>
<?php $__Context->address1 = $__Context->address[0] ?>
<?php $__Context->address2 = $__Context->address[1] ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nstore/tpl','_header.html') ?>
<div id="orderlist">
	<form action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
		<input type="hidden" name="act" value="procNstoreAdminUpdateOrderDetail" />
		<input type="hidden" name="status" value="<?php echo $__Context->status ?>" />
		<input type="hidden" name="order_srl" value="<?php echo $__Context->order_srl ?>" />
		<section class="section">
			<h1><?php echo $__Context->lang->title_order_info ?></h1>
			<table class="x_table">
				<tbody>
					<tr>
						<th><?php echo $__Context->lang->order_number ?></th>
						<td><?php echo $__Context->order_info->order_srl ?></td>
						<th><?php echo $__Context->lang->order_date ?></th>
						<td><?php echo zdate($__Context->order_info->regdate) ?></td>
					</tr>
					<tr>
						<th><?php echo $__Context->lang->items ?></th>
						<td><?php echo $__Context->order_info->item_count ?></td>
						<th><?php echo $__Context->lang->mileage ?></th>
						<td><?php echo $__Context->order_info->mileage;
if($__Context->order_info->mileage_save=='Y'){ ?><div>(<?php echo $__Context->lang->mileage_saved ?>)</div><?php } ?></td>
					</tr>
					<?php if($__Context->order_info->recipient_name){ ?><tr>
						<th><?php echo $__Context->lang->recipient ?></th>
						<td colspan="3"><?php echo $__Context->order_info->recipient_name ?></td>
					</tr><?php } ?>
					<?php if($__Context->order_info->recipient_cellphone){ ?><tr>
						<th><?php echo $__Context->lang->cellphone ?></th>
						<td colspan="3"><?php echo $__Context->order_info->recipient_cellphone ?></td>
					</tr><?php } ?>
					<?php if($__Context->order_info->recipient_telnum){ ?><tr>
						<th><?php echo $__Context->lang->telnum ?></th>
						<td colspan="3"><?php echo $__Context->order_info->recipient_telnum ?></td>
					</tr><?php } ?>
					<?php if($__Context->address1){ ?><tr>
						<th><?php echo $__Context->lang->address ?></th>
						<td colspan="3"><?php if($__Context->order_info->recipient_postcode){ ?><span>(<?php echo $__Context->order_info->recipient_postcode ?>)</span><?php };
echo $__Context->address1 ?> <?php echo $__Context->address2 ?></td>
					</tr><?php } ?>
					<?php if($__Context->extra_vars&&count($__Context->extra_vars))foreach($__Context->extra_vars as $__Context->key=>$__Context->val){ ?><tr>
						<th><?php echo $__Context->key ?></th>
						<td colspan="3"><?php if(is_array($__Context->val)){ ?><span><?php echo implode(' ', $__Context->val) ?></span><?php };
if(!is_array($__Context->val)){ ?><span><?php echo $__Context->val ?></span><?php } ?></td>
					</tr><?php } ?>
				</tbody>
			</table>
		</section>
		<section class="section">
			<h1><?php echo $__Context->lang->title_payment_details ?></h1>
			<table class="x_table">
				<thead>
					<tr>
						<th><?php echo $__Context->lang->paymethod ?></th>
						<th><?php echo $__Context->lang->use_mileage ?></th>
						<?php if($__Context->payment_info->payment_method=='VA' || $__Context->payment_info->payment_method=='BT'){ ?>
						<th><?php echo $__Context->lang->account_number ?></th>
						<th><?php echo $__Context->lang->bank_code ?></th>
						<th><?php echo $__Context->lang->account_holder ?></th>
						<th><?php echo $__Context->lang->sender_name ?></th>
						<?php if($__Context->payment_info->vact_date){ ?><th><?php echo $__Context->lang->send_date ?></th><?php } ?>
						<?php } ?>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $__Context->payment_method[$__Context->order_info->payment_method] ?></td>
						<td><?php echo $__Context->order_info->use_mileage ?></td>
						<?php if($__Context->payment_info->payment_method=='VA' || $__Context->payment_info->payment_method=='BT'){ ?>
						<td><?php echo $__Context->payment_info->vact_num ?></td>
						<td><?php echo $__Context->payment_info->vact_bankname ?>(<?php echo $__Context->payment_info->vact_bankcode ?>)</td>
						<td><?php echo $__Context->payment_info->vact_name ?></td>
						<td><?php echo $__Context->payment_info->vact_inputname ?></td>
						<?php if($__Context->payment_info->vact_date){ ?><td><?php echo zdate($__Context->payment_info->vact_date,'Y-m-d') ?></td><?php } ?>
						<?php } ?>
					</tr>
				</tbody>
			</table>
		</section>
		<section class="section">
			<h1><?php echo $__Context->lang->title_delivery_info ?></h1>
			<table class="x_table">
				<tr>
					<th><?php echo $__Context->lang->delivery_company ?></th>
					<th><?php echo $__Context->lang->invoice_no ?></th>
				</tr>
				<tr>
					<td><select name="primary_express_id"><?php if($__Context->delivery_companies&&count($__Context->delivery_companies))foreach($__Context->delivery_companies as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->order_info->express_id==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?></select></td>					
					<td><input type="text" name="primary_invoice_no" value="<?php echo $__Context->order_info->invoice_no ?>" /></td>
				</tr>
			</table>
		</section>
		<section class="section">
			<h1><?php echo $__Context->lang->title_ordered_items ?></h1>
			<table class="x_table">
				<thead>
					<tr>
						<th><?php echo $__Context->lang->contract_number ?></th>
						<th><?php echo $__Context->lang->product ?></th>
						<th><?php echo $__Context->lang->product_name ?></th>
						<th><?php echo $__Context->lang->quantity ?></th>
						<th><?php echo $__Context->lang->price ?></th>
						<th><?php echo $__Context->lang->discount ?></th>
						<th><?php echo $__Context->lang->order_amount ?></th>
						<th><?php echo $__Context->lang->order_status ?></th>
						<th><?php echo $__Context->lang->individual_delivery_company ?></th>
						<th><?php echo $__Context->lang->individual_invoice_no ?></th>
					</tr>
				</thead>
				<?php $__Context->total_price=0 ?>
				<tbody>
					<?php if($__Context->order_info->item_list&&count($__Context->order_info->item_list))foreach($__Context->order_info->item_list as $__Context->no=>$__Context->item){ ?><tr>
						<td><input type="hidden" name="cart_srls[]" value="<?php echo $__Context->item->cart_srl ?>" /><?php echo $__Context->item->cart_srl ?></td>
						<td><a href="<?php echo getUrl('','module',$__Context->module,'act','dispNproductAdminUpdateItem','module_srl',$__Context->item->module_srl,'item_srl',$__Context->item->item_srl) ?>"><img src="<?php echo $__Context->item->getThumbnail(40) ?>" /></a></td>
						<td>
							<div><?php echo $__Context->item->item_name ?></div>
							<?php if($__Context->item->option_srl){ ?><div><?php echo $__Context->item->option_title ?> (<?php echo $__Context->item->printPrice($__Context->item->option_price) ?>)</div><?php } ?>
						</td>
						<td><?php echo $__Context->item->quantity ?></td>
						<td><?php echo nproductItem::formatMoney($__Context->item->price) ?></td>
						<td><?php echo nproductItem::formatMoney($__Context->item->discount_amount) ?><br /><?php echo $__Context->item->discount_info ?></td>
						<td><?php echo nproductItem::formatMoney($__Context->item->discounted_price) ?></td>
						<td>
							<span class="ko_text red"><?php echo $__Context->order_status[$__Context->item->order_status] ?></span><br />
							<?php if(in_array($__Context->item->order_status,array('3','4'))){ ?><a href="<?php echo $__Context->delivery_inquiry_urls[$__Context->item->express_id];
echo $__Context->item->invoice_no ?>" class="kso_btn" target="_blank"><span>배송추적</span></a><?php } ?>
						</td>
						<td><select name="express_id[]"><?php if($__Context->delivery_companies&&count($__Context->delivery_companies))foreach($__Context->delivery_companies as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->item->express_id==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?></select></td>
						<td><input type="text" name="invoice_no[]" value="<?php echo $__Context->item->invoice_no ?>" /></td>
						<?php $__Context->total_price+=$__Context->item->price ?>
					</tr><?php } ?>
				</tbody>
			</table>
		</section>
		<div class="btnArea">
			<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_save ?></button>
		</div>
	</form>
</div>
