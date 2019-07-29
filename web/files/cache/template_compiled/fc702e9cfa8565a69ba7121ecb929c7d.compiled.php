<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/ncart/skins/en_eng/css/style.css--><?php $__tmp=array('modules/ncart/skins/en_eng/css/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/ncart/skins/en_eng/css/cartitems.css--><?php $__tmp=array('modules/ncart/skins/en_eng/css/cartitems.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/ncart/skins/en_eng/css/btn.css--><?php $__tmp=array('modules/ncart/skins/en_eng/css/btn.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/ncart/tpl/skin.js/script.js--><?php $__tmp=array('modules/ncart/tpl/skin.js/script.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/ncart/tpl/skin.js/cartitems.js--><?php $__tmp=array('modules/ncart/tpl/skin.js/cartitems.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/ncart/skins/en_eng','header.html') ?>
<div id="cartitems" class="<?php echo $__Context->module_info->colorset ?>">
	<div class="cartStep">
		<ul class="progress">
			<li class="cart1 presentProgress"><span class="cart_num">01</span><?php echo $__Context->lang->cmd_cart ?></li>
                        <li class="cart2"><span class="cart_num">02</span><?php echo $__Context->lang->order ?></li>
                        <li class="cart3"><span class="cart_num">03</span><?php echo $__Context->lang->payment ?></li>
                        <li class="cart4"><span class="cart_num">04</span><?php echo $__Context->lang->order_complete ?></li>
		</ul>
	</div>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/ncart/skins/en_eng','_header.html') ?>
	<div class="list_top">
		<span class="s_title">SHOPPING LIST</span>
		<span><?php echo sprintf($__Context->lang->msg_items_in_cart, count($__Context->list)) ?></span>
	</div>
	<table class="item-table">
		<thead>
			<tr>
				<th><input type="checkbox" value="<?php echo $__Context->val->cart_srl ?>" onclick="XE.checkboxToggleAll('cart',{doClick:true}); return false;" /></th>
				<th><?php echo $__Context->lang->item ?></th>
				<th><?php echo $__Context->lang->product_name ?></th>
				<th><?php echo $__Context->lang->sales_price ?></th>
				<th><?php echo $__Context->lang->quantity ?></th>
				<th><?php echo $__Context->lang->discount ?></th>
				<th><?php echo $__Context->lang->sum ?></th>
				<th><?php echo $__Context->lang->order ?></th>
			</tr>
		</thead>
		<tbody>
			<?php if(count($__Context->list)){;
if($__Context->list&&count($__Context->list))foreach($__Context->list as $__Context->no=>$__Context->val){ ?><tr>
				<?php $__Context->item_sum = $__Context->val->price * $__Context->val->quantity ?>
				<td><input type="checkbox" name="cart" value="<?php echo $__Context->val->cart_srl ?>" checked="checked" /></td>
				<td>
					<a class="product_img" href="<?php echo getUrl('','document_srl',$__Context->val->document_srl) ?>"><img src="<?php echo $__Context->val->getThumbnail($__Context->module_info->thumbnail_width,$__Context->module_info->thumbnail_height,$__Context->module_info->thumbnail_type) ?>" /></a>
				</td>
				<td>
					<div>
						<div class="item_name"><a href="<?php echo getUrl('','document_srl',$__Context->val->document_srl) ?>"><?php echo $__Context->val->item_name ?></a></div>
						<?php if($__Context->val->option_srl){ ?><div class="item_option"><?php echo $__Context->val->option_title ?> (<?php echo $__Context->val->printPrice($__Context->val->option_price) ?>)</div><?php } ?>
					</div>
				</td>
				<td><?php echo nproductItem::formatMoney($__Context->val->price) ?></td>
				<td>
					<div id="item_<?php echo $__Context->val->item_srl ?>" class="num_input">
						<input type="text" id="<?php echo $__Context->val->cart_srl ?>" class="quantity" value="<?php echo $__Context->val->quantity ?>" />
						<div class="iconUp" data-for="<?php echo $__Context->val->cart_srl ?>"></div><div class="iconDown" data-for="<?php echo $__Context->val->cart_srl ?>"></div>
					</div>
					<div><a class="gray_btn"><span class="updateQuantity" data-for="<?php echo $__Context->val->cart_srl ?>"><?php echo $__Context->lang->cmd_change ?></span></a></div>
				</td>
				<td><?php echo nproductItem::formatMoney($__Context->val->sum_discount_amount) ?><br /><?php echo $__Context->val->discount_info ?></td>
				<td class="item_price"><?php echo nproductItem::formatMoney($__Context->val->sum_discounted_price) ?></td>
				<td>
					<a href="#" class="blue_btn" onclick="progressOrderIndividual(<?php echo $__Context->val->cart_srl ?>,'<?php echo $__Context->login_chk ?>');"><span><?php echo $__Context->lang->cmd_order ?></span></a><br /><br />
					<a href="#" class="gray_btn2" href="#" onclick="deleteCartItem(<?php echo $__Context->val->cart_srl ?>); return false;"><span><?php echo $__Context->lang->cmd_remove ?></span></a>
				</td>
			</tr><?php }} ?>
			<?php if(!count($__Context->list)){ ?><tr>
				<td colspan="8"><?php echo $__Context->lang->msg_no_items ?></td>
			</tr><?php } ?>
		</tbody>
	</table>
	<div class="cart_command">
		<span><?php echo $__Context->lang->selected_items ?> </span><a href="#" class="black_btn" id="deleteCart" href="#" onclick="return false;"><span><?php echo $__Context->lang->cmd_delete ?></span></a>
	</div>
	<div class="total">
		<table class="total-table">
			<thead>
				<tr>
					<th><?php echo $__Context->lang->total_amount ?></th>
					<th></th>
					<th><?php echo $__Context->lang->total_discount ?></th>
					<th></th>
					<th><?php echo $__Context->lang->delivery_fee ?></th>
					<th></th>
					<th class="total_price"><?php echo $__Context->lang->payment_amount ?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo nproductItem::formatMoney($__Context->sum_price) ?></td>
					<td>-</td>
					<td><span><?php echo nproductItem::formatMoney($__Context->total_discount_amount) ?></span></td>
					<td>+</td>
					<?php if($__Context->val){ ?><td><span><?php echo nproductItem::formatMoney($__Context->delivery_fee) ?></span></td><?php } ?>
					<?php if(!$__Context->val){ ?><td><span>0</span></td><?php } ?>
					<td>=</td>
					<?php if($__Context->val){ ?><td class="total_price"><?php echo nproductItem::formatMoney($__Context->total_price) ?></td><?php } ?>
					<?php if(!$__Context->val){ ?><td class="total_price">0</td><?php } ?>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="command">
		<a href="#" class="red_btn" onclick="progressOrderItems('<?php echo $__Context->login_chk ?>'); return false;"><span><?php echo $__Context->lang->cmd_order ?></span></a>
	</div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/ncart/skins/en_eng','footer.html') ?>
<script>
	var g_total_items = <?php echo count($__Context->list) ?>;
	xe.lang.msg_select_items_in_order_to_delete = '<?php echo $__Context->lang->msg_select_items_in_order_to_delete ?>';
	xe.lang.msg_order_selected_items = '<?php echo $__Context->lang->msg_order_selected_items ?>';
</script>
