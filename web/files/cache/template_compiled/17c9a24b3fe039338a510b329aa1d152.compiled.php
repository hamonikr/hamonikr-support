<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/ncart/skins/default/css/reviewform.css--><?php $__tmp=array('modules/ncart/skins/default/css/reviewform.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="cartStep">
	<ul class="progress">
		<li class="cart1"><span class="cart_num">01</span><?php echo $__Context->lang->cmd_cart ?></li>
		<li class="cart2"><span class="cart_num">02</span><?php echo $__Context->lang->order ?></li>
		<li class="cart3 presentProgress"><span class="cart_num">03</span><?php echo $__Context->lang->payment ?></li>
		<li class="cart4"><span class="cart_num">04</span><?php echo $__Context->lang->order_complete ?></li>
	</ul>
</div>
<div class="item_wrap">
	<table class="item-table">
		<thead>
			<tr>
				<th><?php echo $__Context->lang->no ?></th>
				<th><?php echo $__Context->lang->item ?></th>
				<th><?php echo $__Context->lang->product_name ?></th>
				<th><?php echo $__Context->lang->quantity ?></th>
				<th><?php echo $__Context->lang->sales_price ?></th>
				<th><?php echo $__Context->lang->total_discount ?></th>
				<th><?php echo $__Context->lang->discounted_amount ?></th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->cart_info->item_list&&count($__Context->cart_info->item_list))foreach($__Context->cart_info->item_list as $__Context->no=>$__Context->val){ ?><tr>
				<td><?php echo $__Context->no+1 ?></td>
				<td>
					<a href="<?php echo getUrl('','document_srl',$__Context->val->document_srl) ?>"><img src="<?php echo $__Context->val->getThumbnail($__Context->ncart_module_info->thumbnail_width,$__Context->ncart_module_info->thumbnail_height,$__Context->ncart_module_info->thumbnail_type) ?>" /></a>
				</td>
				<td>
					<div><?php echo $__Context->val->item_name ?></div>
					<?php if($__Context->val->option_srl){ ?><div><?php echo $__Context->val->option_title ?> (<?php echo $__Context->val->printPrice($__Context->val->option_price) ?>)</div><?php } ?>
				</td>
				<td><?php echo $__Context->val->quantity ?></td>
				<td><?php echo nproductItem::formatMoney($__Context->val->sum_price) ?></td>
				<td><?php echo nproductItem::formatMoney($__Context->val->sum_discount_amount) ?><br /><?php echo $__Context->val->discount_info ?></td>
				<td><?php echo nproductItem::formatMoney($__Context->val->sum_discounted_price) ?></td>
			</tr><?php } ?>
		</tbody>
	</table>
</div>
<div class="total">
	<table class="total-table">
		<thead>
			<tr>
				<th><?php echo $__Context->lang->total_amount ?></th>
				<th></th>
				<th><?php echo $__Context->lang->total_discount ?></th>
				<th></th>
				<?php if($__Context->ncart_module_info->display_delivfee=='Y' || $__Context->cart_info->delivery_fee){ ?>
				<th><?php echo $__Context->lang->delivery_fee ?></th>
				<th></th>
				<?php } ?>
				<th class="total_price"><?php echo $__Context->lang->total_order_amount ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php echo nproductItem::formatMoney($__Context->cart_info->sum_price) ?></td>
				<td>-</td>
				<td><?php echo nproductItem::formatMoney($__Context->cart_info->total_discount_amount) ?></td>
				<?php if($__Context->ncart_module_info->display_delivfee=='Y' || $__Context->cart_info->delivery_fee){ ?>
				<td>+</td>
				<td><span id="delivery_fee"><?php echo nproductItem::formatMoney($__Context->cart_info->delivery_fee) ?></span></td>
				<?php } ?>
				<td>=</td>
				<td class="total_price" id="order_amount"><?php echo nproductItem::formatMoney($__Context->cart_info->total_price) ?></td>
			</tr>
		</tbody>
	</table>
</div>
