<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/cashpay/skins/default/css/popup.css--><?php $__tmp=array('modules/cashpay/skins/default/css/popup.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/cashpay/skins/default/css/btn.css--><?php $__tmp=array('modules/cashpay/skins/default/css/btn.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php Context::loadLang('modules/cashpay/skins/default/lang'); ?>
<style>
#container { margin: auto; }
#container #header h1 { border-left: 3px solid rgb(52, 152, 219); }
#container .popTable caption { color: rgb(52, 152, 219); }
#container .orangeTop { border-top: 1px solid rgb(52, 152, 219) !important; }
#container .orangeBottom { border-bottom: 1px solid rgb(52, 152, 219) !important; }
#depositor_name { border-radius: 4px; }
.nuribtn.super {
	background-color: rgb(175, 135, 232);
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    color: white;
    cursor: pointer;
    display: inline-block;
    font-size: 15px;
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
<?php $__Context->button_title=$__Context->lang->finish_order ?>
<?php if($__Context->module_info->button_title){;
$__Context->button_title=$__Context->module_info->button_title;
} ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
        <p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<div id="container">
	<div id="header">
		<h1><?php echo $__Context->lang->payment_transaction ?></h1>
	</div> <!-- #header// -->
	<?php Context::addJsFile("modules/cashpay/ruleset/requestPayment.xml", FALSE, "", 0, "body", TRUE, "") ?><form method="post" ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="requestPayment" />
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="act" value="procCashpayDoIt" />
		<input type="hidden" name="epay_module_srl" value="<?php echo $__Context->epay_module_srl ?>" />
		<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
		<input type="hidden" name="transaction_srl" value="<?php echo $__Context->transaction_srl ?>" />
		<input type="hidden" name="price" value="<?php echo $__Context->price ?>" />
		<input type="hidden" name="select_account" value="<?php echo $__Context->select_account ?>" />
		<table class="popTable">
			<caption><?php echo $__Context->lang->product_info ?></caption>
			<tr>
				<th class="orangeTop"><?php echo $__Context->lang->product_title ?></th>
				<td class="orangeTop"><?php echo $__Context->item_name ?></td>
			</tr>
			<tr>
				<th class="orangeBottom"><?php echo $__Context->lang->amount_to_pay ?></th>
				<td class="orangeBottom"><?php echo number_format($__Context->price, $__Context->module_info->decimals) ?></td>
			</tr>
		</table><!-- .popTable// -->
		<table class="popTable mgt">
			<caption><?php echo $__Context->lang->account_info ?></caption>
			<tr>
				<th class="orangeTop"><?php echo $__Context->lang->bank_name ?></th>
				<td class="orangeTop"><?php echo $__Context->account_info->bank_name ?></td>
			</tr>
			<tr>
				<th><?php echo $__Context->lang->account_number ?></th>
				<td><?php echo $__Context->account_info->account_number ?></td>
			</tr>
			<tr>
				<th class="orangeBottom"><?php echo $__Context->lang->holder_name ?></th>
				<td class="orangeBottom"><?php echo $__Context->account_info->account_holder ?></td>
			</tr>
		</table><!-- .popTable// -->
		<table class="popTable mgt">
			<caption><?php echo $__Context->lang->payer_name ?></caption>
			<tr>
				<th class="orangeBottom"><?php echo $__Context->lang->payer_name ?></th>
				<td class="orangeBottom">
					<input type="text" id="depositor_name" name="depositor_name" class="input01 size03" />
					<p class="exTxt"><?php echo $__Context->module_info->guide_text ?></p>
				</td>
			</tr>
		</table><!-- .popTable// -->
		<div id="btnSec">
			<div>
				<button type="submit" class="nuribtn super"><?php echo $__Context->button_title ?></button>
			</div>
		</div><!-- #btnSec// -->
	</form>
</div>
