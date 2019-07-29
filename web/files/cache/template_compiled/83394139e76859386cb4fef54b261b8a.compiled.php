<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/ncart/tpl/css/style.css--><?php $__tmp=array('modules/ncart/tpl/css/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div id="orderlist">
	<table class="item-table">
		<thead>
			<tr>
				<th><?php echo $__Context->lang->order_number ?></th>
				<th><?php echo $__Context->lang->order_date ?></th>
				<th><?php echo $__Context->lang->items ?></th>
				<th><?php echo $__Context->lang->mileage ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $__Context->order_info->order_srl ?></td>
				<td><?php echo zdate($__Context->order_info->regdate) ?></td>
				<td><?php echo $__Context->order_info->item_count ?></td>
				<td><?php echo nproductItem::formatMoney($__Context->order_info->mileage);
if($__Context->order_info->mileage_save=='Y'){ ?><div>(적립완료)</div><?php } ?></td>
			</tr>
		</tbody>
	</table>
	<h4><?php echo $__Context->lang->title_payment_details ?></h4>
	<table class="item-table">
		<thead>
			<tr>
				<th><?php echo $__Context->lang->paymethod ?></th>
				<th><?php echo $__Context->lang->use_mileage ?></th>
				<?php if(in_array($__Context->payment_info->payment_method,array('VA','BT'))){ ?>
				<th><?php echo $__Context->lang->account_number ?></th>
				<th><?php echo $__Context->lang->bank_name ?></th>
				<th><?php echo $__Context->lang->account_holder ?></th>
				<th><?php echo $__Context->lang->sender_name ?></th>
				<th><?php echo $__Context->lang->send_date ?></th>
				<?php } ?>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo $__Context->payment_method[$__Context->order_info->payment_method] ?></td>
				<td><?php echo nproductItem::formatMoney($__Context->order_info->use_mileage) ?></td>
				<?php if(in_array($__Context->payment_info->payment_method,array('VA','BT'))){ ?>
				<td><?php echo $__Context->payment_info->vact_num ?></td>
				<td><?php echo $__Context->payment_info->vact_bankname ?></td>
				<td><?php echo $__Context->payment_info->vact_name ?></td>
				<td><?php echo $__Context->payment_info->vact_inputname ?></td>
				<?php if(0){ ?><td><?php echo $__Context->payment_info->vact_regnum ?></td><?php } ?>
				<td><?php if($__Context->payment_info->vact_date){ ?><span><?php echo zdate($__Context->payment_info->vact_date,'Y-m-d') ?></span><?php };
if(!$__Context->payment_info->vact_date){ ?><span>-</span><?php } ?></td>
				<?php if(0){ ?><td><?php echo $__Context->payment_info->vact_time ?></td><?php } ?>
				<?php } ?>
			</tr>
		</tbody>
	</table>
	<!--
	<h4>[주문정보]</h4>
	<ul class="orderDetail">
		<li>주문번호 : <?php echo $__Context->order_info->order_srl ?></li>
		<li>주문일자 : <?php echo zdate($__Context->order_info->regdate) ?></li>
		<li>수령인 : <?php echo $__Context->order_info->recipient_name ?></li>
		<li>휴대전화 : <?php echo $__Context->order_info->recipient_cellphone ?></li>
		<li>일반전화 : <?php echo $__Context->order_info->recipient_telnum ?></li>
		<li>주소 : <?php echo unserialize($__Context->order_info->recipient_address) ?></li>
		<li>품목갯수 : <?php echo $__Context->order_info->item_count ?></li>
		<li>적립금 : <?php echo $__Context->order_info->mileage ?></li>
	</ul>
	<h4>[결제정보]</h4>
	<div>
		<ul class="orderDetail">
			<li>결제방식 : <?php echo $__Context->payment_method[$__Context->order_info->payment_method] ?></li>
			<li>적립금 사용 : <?php echo $__Context->order_info->use_mileage ?></li>
			<?php if($__Context->payment_info->payment_method=='VA'){ ?>
			<li>계좌번호 : <?php echo $__Context->payment_info->vact_num ?></li>
			<li>은행코드 : <?php echo $__Context->payment_info->vact_bankcode ?></li>
			<li>예금주명 : <?php echo $__Context->payment_info->vact_name ?></li>
			<li>송금자명 : <?php echo $__Context->payment_info->vact_inputname ?></li>
			<?php if(0){ ?><li>주민번호 : <?php echo $__Context->payment_info->vact_regnum ?></li><?php } ?>
			<li>송금일자 : <?php echo zdate($__Context->payment_info->vact_date,'Y-m-d') ?> 까지</li>
			<?php if(0){ ?><li>송금시간 : <?php echo $__Context->payment_info->vact_time ?></li><?php } ?>
			<?php } ?>
		</ul>
	</div>
	-->
	<h4><?php echo $__Context->lang->title_ordered_items ?></h4>
	<table class="item-table">
		<thead>
			<tr>
				<th><?php echo $__Context->lang->contract_number ?></th>
				<th><?php echo $__Context->lang->item ?></th>
				<th><?php echo $__Context->lang->product_name ?></th>
				<th><?php echo $__Context->lang->quantity ?></th>
				<th><?php echo $__Context->lang->item_price ?></th>
				<th><?php echo $__Context->lang->discount ?></th>
				<th><?php echo $__Context->lang->amount ?></th>
				<?php if(0){ ?><th><?php echo $__Context->lang->order_status ?></th><?php } ?>
			</tr>
		</thead>
		<?php $__Context->total_price=0 ?>
		<tbody>
			<?php if($__Context->order_info->item_list&&count($__Context->order_info->item_list))foreach($__Context->order_info->item_list as $__Context->no=>$__Context->val){ ?><tr>
				<td><?php echo $__Context->val->cart_srl ?></td>
				<td><a href="<?php echo getUrl('act','dispNstoreItemDetail','item_srl',$__Context->val->item_srl) ?>"><img src="<?php echo $__Context->val->getThumbnail(40) ?>" /></a></td>
				<td>
					<div><?php echo $__Context->val->item_name ?></div>
					<?php if($__Context->val->option_srl){ ?><div><?php echo $__Context->val->option_title ?> (<?php echo $__Context->val->printPrice($__Context->val->option_price) ?>)</div><?php } ?>
				</td>
				<td><?php echo $__Context->val->quantity ?></td>
				<td><?php echo nproductItem::formatMoney($__Context->val->price * $__Context->val->quantity) ?></td>
				<td><?php echo nproductItem::formatMoney($__Context->val->discount_amount) ?><br /><?php echo $__Context->val->discount_info ?></td>
				<td><?php echo nproductItem::formatMoney($__Context->val->discounted_price) ?></td>
				<?php if(0){ ?><td>
					<span class="ko_text red"><?php echo $__Context->order_status[$__Context->val->order_status] ?></span><br />
					<?php if(in_array($__Context->val->order_status,array('3','4'))){ ?><a href="<?php echo $__Context->delivery_inquiry_urls[$__Context->val->express_id];
echo $__Context->val->invoice_no ?>" class="kso_btn" target="_blank"><span><?php echo $__Context->lang->cmd_trace_delivery ?></span></a><?php } ?>
				</td><?php } ?>
				<?php $__Context->total_price+=$__Context->val->price ?>
			</tr><?php } ?>
		</tbody>
	</table>
	<table class="item-table">
		<thead>
			<tr>
				<th><?php echo $__Context->lang->total_order_amount ?></th>
				<th></th>
				<th><?php echo $__Context->lang->total_discount ?></th>
				<th></th>
				<th><?php echo $__Context->lang->delivery_fee ?></th>
				<th></th>
				<th><?php echo $__Context->lang->payment_amount ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php if($__Context->order_info->delivfee_inadvance=='Y'){ ?>
					<?php $__Context->delivfee_inadvance = $__Context->lang->prepay ?>
				<?php } ?>
				<?php if($__Context->order_info->delivfee_inadvance!='Y'){ ?>
					<?php $__Context->delivfee_inadvance = $__Context->lang->cash_on_delivery ?>
				<?php } ?>
				<td><?php echo nproductItem::formatMoney($__Context->order_info->sum_price) ?></td>
				<td>-</td>
				<td><?php echo nproductItem::formatMoney($__Context->order_info->total_discount_amount) ?></td>
				<td>+</td>
				<td><?php echo nproductItem::formatMoney($__Context->order_info->delivery_fee) ?><div><?php echo $__Context->delivfee_inadvance ?></div></td>
				<td>=</td>
				<td><?php echo nproductItem::formatMoney($__Context->order_info->total_price) ?></td>
			</tr>
		</tbody>
	</table>
</div>
