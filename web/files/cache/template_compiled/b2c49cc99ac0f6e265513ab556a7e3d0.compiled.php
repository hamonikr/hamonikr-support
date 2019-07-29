<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/ncart/skins/default/css/style.css--><?php $__tmp=array('modules/ncart/skins/default/css/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/ncart/skins/default/css/btn.css--><?php $__tmp=array('modules/ncart/skins/default/css/btn.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/ncart/skins/default/css/ordercomplete.css--><?php $__tmp=array('modules/ncart/skins/default/css/ordercomplete.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/ncart/skins/default','header.html') ?>
<style>
.cartStep { margin-bottom: 20px; }
.menuTab { margin-top: 0; }
.menuTab li.active a {     background: #404040; color: #ddd; text-align: center; }
.item-table { border-radius: 10px; overflow: hidden; }
.ordercomplete h3 { font-size: 18px; }
.order-table { border-radius: 0 0 10px 10px; overflow: hidden; }
</style>
<div class="ordercomplete <?php echo $__Context->module_info->colorset ?>">
	<div class="cartStep">
		<ul class="progress step3">
			<li class="cart1"><?php echo $__Context->lang->cmd_cart ?></li>
			<li class="cart2"><?php echo $__Context->lang->title_order_payment ?></li>
			<li class="cart3 presentProgress"><?php echo $__Context->lang->order_complete ?></li>
		</ul>
	</div>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/ncart/skins/default','_header.html') ?>
	<?php if(!$__Context->logged_info){ ?><font color="red"><h5><?php echo $__Context->lang->about_order_number ?></h5></font><?php } ?>
	<table class="item-table">
		<thead>
			<tr>
				<th>No</th>
				<th><?php echo $__Context->lang->item ?></th>
				<th><?php echo $__Context->lang->product_name ?></th>
				<th><?php echo $__Context->lang->quantity ?></th>
				<th><?php echo $__Context->lang->sales_price ?></th>
				<th><?php echo $__Context->lang->total_discount ?></th>
				<th><?php echo $__Context->lang->discounted_amount ?></th>
				<?php if(!$__Context->logged_info){ ?><th ><?php echo $__Context->lang->order_number ?></th><?php } ?>
			</tr>
		</thead>
		<?php $__Context->total_price=0 ?>
		<tbody>
			<?php if(count($__Context->order_info->item_list)){;
if($__Context->order_info->item_list&&count($__Context->order_info->item_list))foreach($__Context->order_info->item_list as $__Context->no=>$__Context->val){ ?><tr>
				<?php $__Context->item_sum = $__Context->val->price * $__Context->val->quantity ?>
				<td><?php echo $__Context->no+1 ?></td>
				<td>
					<a href="<?php echo getUrl('','document_srl',$__Context->val->document_srl) ?>"><img src="<?php echo $__Context->val->getThumbnail(80,80) ?>" /></a>
				</td>
				<td>
					<div><?php echo $__Context->val->item_name ?></div>
					<?php if($__Context->val->option_srl){ ?><div><?php echo $__Context->val->option_title ?> (<?php echo $__Context->val->printPrice($__Context->option_price) ?>)</div><?php } ?>
				</td>
				<td><?php echo number_format($__Context->val->quantity) ?></td>
				<td><?php echo nproductItem::printPrice($__Context->val->price) ?></td>
				<td><?php echo nproductItem::formatMoney($__Context->val->discount_amount) ?><br /><?php echo $__Context->val->discount_info ?></td>
				<td class="item_price"><?php echo nproductItem::printPrice($__Context->val->price  * $__Context->val->quantity) ?></td>
				<?php if(!$__Context->logged_info){ ?><td><font color=red><h2><?php echo $__Context->val->order_srl ?></h2></font></td><?php } ?>
				<?php $__Context->total_price+=$__Context->item_sum ?>
			</tr><?php }} ?>
			<?php if(!count($__Context->order_info->item_list)){ ?><tr>
				<td colspan="8"><?php echo $__Context->lang->msg_no_items ?></td>
			</tr><?php } ?>
		</tbody>
	</table>
	<?php if($__Context->payment_info->payment_method=='VA' || $__Context->payment_info->payment_method=='BT'){ ?><div>
		<h3 class="title_benefits"><span><?php echo $__Context->lang->bankaccount_info ?></span></h3>
		<table class="order-table">
			<caption><?php echo $__Context->lang->about_bankaccount_info ?></caption>
			<tr>
				<th><?php echo $__Context->lang->account_number ?></th><td><?php echo $__Context->payment_info->vact_num ?></td>
			</tr>
			<tr>
				<th><?php echo $__Context->lang->bank_name ?></th><td><?php echo $__Context->payment_info->vact_bankname ?></td>
			</tr>
			<tr>
				<th><?php echo $__Context->lang->account_holder ?></th><td><?php echo $__Context->payment_info->vact_name ?></td>
			</tr>
			<tr>
				<th><?php echo $__Context->lang->deposit_amount ?></th><td><?php echo $__Context->payment_info->payment_amount ?></td>
			</tr>
			<?php if($__Context->payment_info->vact_inputname){ ?><tr>
				<th><?php echo $__Context->lang->sender_name ?></th><td><?php echo $__Context->payment_info->vact_inputname ?></td>
			</tr><?php } ?>
			<?php if($__Context->payment_info->vact_date){ ?><tr>
				<th><?php echo $__Context->lang->send_date ?></th><td><?php echo zdate($__Context->payment_info->vact_date,'Y-m-d') ?></td>
			</tr><?php } ?>
		</table>
	</div><?php } ?>
	<?php if($__Context->payment_info->state == '3'){ ?><div>
		<h3 class="title_benefits"><span>Payment Error Report</span></h3>
		<div class="message error">
			<p><?php echo $__Context->payment_info->result_code ?> : <?php echo $__Context->payment_info->result_message ?></p>
		</div>
	</div><?php } ?>
	
	<?php if($__Context->fieldset_list&&count($__Context->fieldset_list))foreach($__Context->fieldset_list as $__Context->key=>$__Context->val){ ?><div class="fieldset">
		<h3><?php echo $__Context->val->fieldset_title ?></h3>
		<table class="order-table">
			<?php if($__Context->val->fields&&count($__Context->val->fields))foreach($__Context->val->fields as $__Context->key2=>$__Context->field){ ?><tr>
				<th><?php echo $__Context->field->html->title ?></th><td><?php if(is_array($__Context->field->value)){ ?><span><?php echo implode(' ', $__Context->field->value) ?></span><?php };
if(!is_array($__Context->field->value)){ ?><span><?php echo $__Context->field->value ?></span><?php } ?></td>
			</tr><?php } ?>
		</table>
	</div><?php } ?>
	
	<!-- 구매혜택
	<?php if($__Context->logged_info){ ?><h3 class="title_benefits"><span><?php echo $__Context->lang->purchase_benefit ?></span></h3><?php } ?>
	<?php if($__Context->logged_info){ ?><table class="order-table">
		<tbody>
			<tr>
				<th><?php echo $__Context->lang->mileage ?></th>
				<td colspan="3"><?php echo nproductItem::formatMoney($__Context->order_info->mileage) ?> <?php echo $__Context->lang->purchase_benefit_postfix ?></td>
			</tr>
		</tbody>
	</table><?php } ?>
	-->
	
	<div class="btn_continue">
		<?php if($__Context->module_info->continuous_url){ ?><a href="<?php echo $__Context->module_info->continuous_url ?>" class="nuribtn navy large"><?php echo $__Context->lang->cmd_continue_shopping ?></a><?php } ?>
		<input class="btsbtn default_btn" onclick="location.href='/'" type="button" value="라이선스 등록하기" style="background-color: rgb(52, 152, 219);" />
		<input class="btsbtn default_btn" onclick="location.href='/billing_list'" type="button" value="결제내역" />
	</div>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/ncart/skins/default','footer.html') ?>
