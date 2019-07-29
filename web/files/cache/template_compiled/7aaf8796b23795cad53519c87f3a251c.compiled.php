<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/ncart/tpl/js/script.js--><?php $__tmp=array('modules/ncart/tpl/js/script.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/ncart/tpl','_header.html') ?>
<form action="./" method="post" class="x_form-horizontal" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="procNcartAdminConfig" />
	<div class="x_control-group">
		<label class="x_control-label" for="delivery_fee"><?php echo $__Context->lang->delivery_fee ?></label>
		<div class="x_controls">
			<input type="text" name="delivery_fee" value="<?php echo $__Context->config->delivery_fee ?>" />
			<a href="#delivery_fee_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p id="delivery_fee_help" class="x_help-block" hidden><?php echo $__Context->lang->about_delivery_fee ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="freedeliv_amount"><?php echo $__Context->lang->amount_for_free_delivery ?></label>
		<div class="x_controls">
			<input type="text" name="freedeliv_amount" value="<?php echo $__Context->config->freedeliv_amount ?>" />
			<a href="#freedeliv_amount" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p id="freedeliv_amount" class="x_help-block" hidden><?php echo $__Context->lang->about_free_delivery ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="mileage_percent"><?php echo $__Context->lang->transaction_mileage ?></label>
		<div class="x_controls">
			<input type="text" name="mileage_percent" value="<?php echo $__Context->config->mileage_percent ?>"  class="inputTypeText w400" />
			<a href="#mileage_percent_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p id="mileage_percent_help" class="x_help-block" hidden><?php echo $__Context->lang->about_transaction_mileage ?></p>
		</div>
	</div>
	<!-- 통합 통화 모듈에 따른 각 쇼핑몰 기본 화폐설정 disable -->
	<!--div class="x_control-group">
		<label class="x_control-label" for="currency"><?php echo $__Context->lang->currency ?></label>
		<div class="x_controls">
			<select name="currency">
				<?php if($__Context->lang->currency_list&&count($__Context->lang->currency_list))foreach($__Context->lang->currency_list as $__Context->code=>$__Context->val){ ?><option value="<?php echo $__Context->code ?>"<?php if($__Context->config->currency==$__Context->code){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?>
			</select>
			<a href="#currency_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p id="currency_help" class="x_help-block" hidden><?php echo $__Context->lang->about_currency ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="as_sign"><?php echo $__Context->lang->currency_format ?></label>
		<div class="x_controls">
			<select name="as_sign">
				<option value="Y"<?php if($__Context->config->as_sign=='Y'){ ?> selected="selected"<?php } ?>>$ 1,234</option>
				<option value="N"<?php if($__Context->config->as_sign=='N'){ ?> selected="selected"<?php } ?>>1,234 USD</option>
			</select>
			<a href="#as_sign_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p id="as_sign_help" class="x_help-block" hidden><?php echo $__Context->lang->about_currency_format ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="decimals"><?php echo $__Context->lang->point_position ?></label>
		<div class="x_controls">
			<input type="text" name="decimals" value="<?php echo $__Context->config->decimals ?>" />
			<a href="#decimals_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p id="decimals_help" class="x_help-block" hidden><?php echo $__Context->lang->about_point_position ?></p>
		</div>
	</div-->
	<div class="x_control-group">
		<label class="x_control-label" for="guest_buy"><?php echo $__Context->lang->guest_buy ?></label>
		<div class="x_controls">
			<select name="guest_buy">
				<option value="Y"<?php if($__Context->config->guest_buy == 'Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
				<option value="N"<?php if($__Context->config->guest_buy == 'N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
		    </select>
			<a href="#guest_buy_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p id="guest_buy_help" class="x_help-block" hidden><?php echo $__Context->lang->about_guest_buy ?></p>
		</div>
	</div>
	<div class="x_clearfix btnArea">
		<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_registration ?></button>
	</div>
</form>
