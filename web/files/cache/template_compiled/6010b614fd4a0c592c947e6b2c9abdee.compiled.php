<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/ncart/skins/default/css/style.css--><?php $__tmp=array('modules/ncart/skins/default/css/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/ncart/skins/default/css/orderitems.css--><?php $__tmp=array('modules/ncart/skins/default/css/orderitems.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/ncart/skins/default/css/btn.css--><?php $__tmp=array('modules/ncart/skins/default/css/btn.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/ncart/tpl/skin.js/script.js--><?php $__tmp=array('modules/ncart/tpl/skin.js/script.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/ncart/tpl/skin.js/orderitems.js--><?php $__tmp=array('modules/ncart/tpl/skin.js/orderitems.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#JSPLUGIN:ui--><?php Context::loadJavascriptPlugin('ui'); ?>
<!--#JSPLUGIN:ui.datepicker--><?php Context::loadJavascriptPlugin('ui.datepicker'); ?>
<style>
#orderitems .cartStep { margin-bottom: 20px; }
.menuTab { margin-top: 0; }
.menuTab li.active a { background: #404040; color: #ddd; text-align: center; }
.item-table { border-radius: 10px; overflow: hidden; }
#orderitems .payment-table { border-bottom: 0; }
.payment_title { border-radius: 10px 0 0 0; }
#select_method { background: #f9f9f4; border-bottom: 1px solid #ededed; border-radius: 0 10px 0 0; }
.payment_info { border-radius: 0 0 10px 10px; margin-top: 0; padding: 15px 20px; }
.btn_wrap .btn.nbtn{
	background-color: rgb(175, 135, 232);
	background-image: none;
	border: 1px solid transparent;
	border-radius: 4px;
	color: white;
	cursor: pointer;
	display: inline-block;
	font-size: 13px;
	font-weight: bold;
	line-height: 1.42857143;
	margin-bottom: 40px;
	padding: 6px 12px;
	text-align: center;
	touch-action: manipulation;
	user-select: none;
	vertical-align: middle;
	white-space: nowrap;
	width: 160px;
	-moz-user-select: none;
	-ms-touch-action: manipulation;
	-ms-user-select: none;
	-webkit-user-select: none;
}
</style>
<?php $__Context->omittedItemCount = 0 ?>
<?php $__Context->address = unserialize($__Context->default_address->address) ?>
<?php $__Context->address1 = $__Context->address[0] ?>
<?php $__Context->address2 = $__Context->address[1] ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
	<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<div id="orderitems" class="<?php echo $__Context->module_info->colorset ?>">
	<div class="cartStep">
		<ul class="progress step2">
			<li class="cart1"><?php echo $__Context->lang->cmd_cart ?></li>
			<li class="cart2 presentProgress"><?php echo $__Context->lang->title_order_payment ?></li>
			<li class="cart3"><?php echo $__Context->lang->order_complete ?></li>
		</ul>
	</div>
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/ncart/skins/default','_header.html') ?>
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
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->list&&count($__Context->list))foreach($__Context->list as $__Context->no=>$__Context->val){ ?>
				<tr>
					<td><?php echo $__Context->no+1 ?></td>
					<td>
						<a href="<?php echo getUrl('','document_srl',$__Context->val->document_srl) ?>"><img src="<?php echo $__Context->val->getThumbnail($__Context->module_info->thumbnail_width,$__Context->module_info->thumbnail_height,$__Context->module_info->thumbnail_type) ?>" /></a>
					</td>
					<td>
						<div><?php echo $__Context->val->item_name ?></div>
						<?php if($__Context->val->option_srl){ ?><div><?php echo $__Context->val->option_title ?> (<?php echo $__Context->val->printPrice($__Context->val->option_price) ?>)</div><?php } ?>
					</td>
					<td><?php echo $__Context->val->quantity ?></td>
					<td><?php echo nproductItem::formatMoney($__Context->val->sum_price) ?></td>
					<td><?php echo nproductItem::formatMoney($__Context->val->sum_discount_amount) ?><br /><?php echo $__Context->val->discount_info ?></td>
					<td><?php echo nproductItem::formatMoney($__Context->val->sum_discounted_price) ?></td>
				</tr>
				<?php if($__Context->val->omittedItems&&count($__Context->val->omittedItems))foreach($__Context->val->omittedItems as $__Context->no2=>$__Context->val2){ ?><tr>
					<td colspan="7">
						<a href="<?php echo getUrl('','document_srl',$__Context->val2->document_srl) ?>"><?php echo sprintf($__Context->lang->msg_omitted_item_exist, $__Context->val2->item_name) ?></a>
					</td>
					<?php $__Context->omittedItemCount++ ?>
				</tr><?php } ?>
				<?php if($__Context->val->minimumOrderItems){ ?><tr>
					<td colspan="7">
						<a href="<?php echo getUrl('','document_srl',$__Context->val->document_srl) ?>"><?php echo $__Context->val->minimumOrderItems ?></a>
					</td>
					<?php $__Context->omittedItemCount++ ?>
				</tr><?php } ?>
			<?php } ?>
		</tbody>
	</table>
	<!--
	<?php if($__Context->logged_info){ ?><h3 class="title_benefits" ><?php echo $__Context->lang->purchase_benefit ?></h3><?php } ?>
	<?php if($__Context->logged_info){ ?><table class="order-table">
		<tbody>
			<tr>
				<th><?php echo $__Context->lang->mileage ?></th>
				<td colspan="3"><?php echo round($__Context->total_price * ((float)$__Context->config->mileage_percent/100)) ?> <?php echo $__Context->lang->purchase_benefit_postfix ?></td>
			</tr>
		</tbody>
	</table><?php } ?>
	-->
	<form id="fo_insert_order" action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="act" value="procNcartMileagePayment">
		<input type="hidden" name="target_module" value="ncart" />
		<input type="hidden" name="cartnos" value="<?php echo $__Context->cartnos ?>" />
		<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
		<input type="hidden" name="xe_mid" value="<?php echo $__Context->mid ?>" />
		<?php if($__Context->logged_info && $__Context->module_info->display_delivfee=='Y' || !$__Context->logged_info){ ?>
			<h3 class="title_ordererInfo"><?php echo $__Context->lang->purchaser_info ?></h3>
			<table class="order-table">
				<tbody>
					<?php if($__Context->module_info->display_delivfee=='Y'){ ?><tr>
						<th><?php echo $__Context->lang->delivery_fee_payment ?></th>
						<td>
							<input name="delivfee_inadvance" id="delivfee_inadvance_1" type="radio" checked="checked" value="Y" /><label for="delivfee_inadvance_1"><?php echo $__Context->lang->prepay ?></label>
							<input name="delivfee_inadvance" id="delivfee_inadvance_2" type="radio" value="N" /><label for="delivfee_inadvance_2"><?php echo $__Context->lang->cash_on_delivery ?></label>
						</td>
					</tr><?php } ?>
					<?php if(!$__Context->logged_info){ ?><tr>
						<th><?php echo $__Context->lang->password ?></th>
						<td>
							<span><input name="non_password1" id="non_password1" type="password" /><font color='red'><?php echo $__Context->lang->about_order_number ?></font></span>
						</td>
					</tr><?php } ?>
					<?php if(!$__Context->logged_info){ ?><tr>
						<th><?php echo $__Context->lang->password3 ?></th>
						<td>
							<span><input name="non_password2" id="non_password2" type="password" /></span>
						</td>
					</tr><?php } ?>
				</tbody>
			</table>
		<?php } ?>
		
		<?php if($__Context->fieldset_list&&count($__Context->fieldset_list))foreach($__Context->fieldset_list as $__Context->key=>$__Context->val){ ?><div class="fieldset">
			<h3><?php echo $__Context->val->fieldset_title ?></h3>
			<table>
				<?php if($__Context->module_info->display_delivdest=='Y' && $__Context->key==0){ ?><thead id="section1">
					<?php if($__Context->logged_info){ ?><tr id="section1">
						<th>
							<?php echo $__Context->lang->select_address ?>
						</th>
						<td class="destination">
							<ul>
								<?php if($__Context->address_list&&count($__Context->address_list))foreach($__Context->address_list as $__Context->addr_key=>$__Context->addr_val){ ?><li><input type="radio" name="sel_destination" id="sel_<?php echo $__Context->addr_val->address_srl ?>" onclick="apply_address_info(<?php echo $__Context->addr_val->address_srl ?>);" value="<?php echo $__Context->addr_val->address_srl ?>"<?php if($__Context->addr_val->default=='Y'){ ?> checked="checked"<?php } ?> /><label for="sel_<?php echo $__Context->addr_val->address_srl ?>"><?php echo $__Context->addr_val->title ?></label></li><?php } ?>
								<li><a class="nuribtn light small" id="popAddressBook" href="#" onclick="return false;"><span><?php echo $__Context->lang->cmd_addresslist ?></span></a></li>
								<li><a class="nuribtn light small" id="popRecentAddress" href="#" onclick="return false;"><span><?php echo $__Context->lang->cmd_recent_addresses ?></span></a></li>
							</ul>
						</td>	
					</tr><?php } ?>
				</thead><?php } ?>
				<tbody id="section2">
					<?php if($__Context->val->fields&&count($__Context->val->fields))foreach($__Context->val->fields as $__Context->key2=>$__Context->field){ ?><tr>
						<th>
							<label for="column_title"><?php echo $__Context->field->html->title ?></label>
						</th>
						<td class="<?php echo $__Context->field->column_type ?>"><?php echo $__Context->field->html->inputTag ?></td>
					</tr><?php } ?>
				</tbody>
			</table>
		</div><?php } ?>
		
		<!--
		<h3 class="title_mileage"<?php if(!$__Context->logged_info){ ?> style="display:none"<?php } ?>><?php echo $__Context->lang->use_mileage ?></h3>
		<table class="order-table"<?php if(!$__Context->logged_info){ ?> style="display:none"<?php } ?>>
			<tbody>
				<tr>
					<th><?php echo $__Context->lang->use_mileage ?></th>
					<td colspan="3"><input type="hidden" name="use_mileage" value="0" /><input class="line_input" type="text" name="input_mileage" value="0" /> (<?php echo $__Context->lang->current_mileage ?> : <?php echo nproductItem::formatMoney($__Context->my_mileage) ?>)</td>
				</tr>
			</tbody>
		</table>
		-->
	</form>
	<div class="total">
		<table class="total-table">
			<thead>
				<tr style="background-color: rgba(0,0,0,0) !important">
					<th><?php echo $__Context->lang->total_amount ?></th>
					<th></th>
					<th><?php echo $__Context->lang->total_discount ?></th>
					<th></th>
					<?php if($__Context->module_info->display_delivfee=='Y' || $__Context->delivery_fee){ ?>
						<th><?php echo $__Context->lang->delivery_fee ?></th>
						<th></th>
					<?php } ?>
					<th class="total_price"><?php echo $__Context->lang->total_order_amount ?></th>
				</tr>
			</thead>
			<tbody>
				<tr style="background-color: rgba(0,0,0,0) !important">
					<td><?php echo nproductItem::formatMoney($__Context->sum_price) ?></td>
					<td>-</td>
					<td><?php echo nproductItem::formatMoney($__Context->total_discount_amount) ?></td>
					<?php if($__Context->module_info->display_delivfee=='Y' || $__Context->delivery_fee){ ?>
						<td>+</td>
						<td><span id="delivery_fee"><?php echo nproductItem::formatMoney($__Context->delivery_fee) ?></span></td>
					<?php } ?>
					<td>=</td>
					<td class="total_price" id="order_amount"><?php echo nproductItem::formatMoney($__Context->total_price) ?></td>
				</tr>
			</tbody>
		</table>
	</div>
	<h3 class="title_paymentInfo"><?php echo $__Context->lang->input_payment_info ?></h3>
	<div class="payment-table">
		<p class="font_size11"><?php echo $__Context->lang->about_input_payment_info ?></p><br />
		<?php if(!$__Context->omittedItemCount){ ?><div class="payment-table">
			<?php echo $__Context->epay_form ?>
		</div><?php } ?>
		<?php if($__Context->omittedItemCount){ ?><div class="payment-table">
			<?php echo $__Context->lang->msg_omitted_items_payment_guide ?>
		</div><?php } ?>
	</div>
</div>
<div id="modal-dialog"></div>
<?php if($__Context->config->decimals){;
$__Context->decimals = $__Context->config->decimals;
} ?>
<?php if(!$__Context->config->decimals){;
$__Context->decimals = 0;
} ?>
<script type="text/javascript">
        var g_decimals = <?php echo $__Context->decimals ?>;
</script>
<?php if($__Context->purchaser->cellphone){ ?>
<?php $__Context->purchaser->cellphone = implode('-',$__Context->purchaser->cellphone) ?>
<?php } ?>
<?php if($__Context->purchaser->telnum){ ?>
<?php $__Context->purchaser->telnum = implode('-',$__Context->purchaser->telnum) ?>
<?php } ?>
<script>
<?php if($__Context->is_logged){ ?>
	var purchaser_name = '<?php echo $__Context->purchaser->name ?>';
	<?php if($__Context->config->address_input=='krzip'){ ?>
		var purchaser_address = '<?php echo $__Context->purchaser->address[0] ?>';
		var purchaser_address2 = '<?php echo $__Context->purchaser->address[1] ?>';
		var purchaser_postcode = '';
	<?php } ?>
	<?php if($__Context->config->address_input!='krzip'){ ?>
		var purchaser_address = '<?php echo $__Context->purchaser->address ?>';
		var purchaser_address2 = '<?php echo $__Context->purchaser->address2 ?>';
		var purchaser_postcode = '<?php echo $__Context->purchaser->postcode ?>';
	<?php } ?>
	var purchaser_cellphone = '<?php echo $__Context->purchaser->cellphone ?>';
	var purchaser_telnum = '<?php echo $__Context->purchaser->telnum ?>';
	var purchaser_chk = 'Y';
	var my_mileage = <?php echo $__Context->my_mileage ?>;
<?php } ?>
<?php if(!$__Context->is_logged){ ?>
	var purchaser_chk= 'N';
	var my_mileage = 0;
<?php } ?>
var default_recipient = '<?php echo $__Context->default_address->recipient ?>';
var default_cellphone = '<?php echo $__Context->default_address->cellphone ?>';
var default_telnum = '<?php echo $__Context->default_address->telnum ?>';
var default_postcode = '<?php echo $__Context->default_address->postcode ?>';
var default_address = '<?php echo $__Context->address1 ?>';
var default_address2 = '<?php echo $__Context->address2 ?>';
var total_price = <?php echo $__Context->total_price ?>;
var my_mileage = <?php echo $__Context->my_mileage ?>;
var delivery_fee = <?php echo $__Context->delivery_fee ?>;
(function($) {
	jQuery(function($) {
		var address_srl = $('input[name=sel_destination]:checked').val();
		if (address_srl) apply_address_info(address_srl);
	});
}) (jQuery);
</script>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/ncart/skins/default','fieldset.html') ?>
