<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/currency/tpl','_header.html') ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
        <p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<form action="./" method="post" class="form" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="procCurrencyAdminConfig" />
	<fieldset class="section">
		<ul>
			<li>
				<p class="q"><?php echo $__Context->lang->select_currency ?></p>
				<p class="a">
					<select name="currency">
						<?php if($__Context->lang->currency_list&&count($__Context->lang->currency_list))foreach($__Context->lang->currency_list as $__Context->code=>$__Context->val){ ?><option value="<?php echo $__Context->code ?>"<?php if($__Context->config->currency==$__Context->code){ ?> selected="selected"<?php } ?>><?php echo $__Context->val ?></option><?php } ?>
					</select>
				</p>
				<p class="desc"><?php echo $__Context->lang->about_select_currency ?></p>
			</li>
			<li>
			<p class="q"><?php echo $__Context->lang->currency_format ?></p>
				<p class="a">
					<select name="as_sign">
						<option value="Y"<?php if($__Context->config->as_sign=='Y'){ ?> selected="selected"<?php } ?>>$ 1,234</option>
						<option value="N"<?php if($__Context->config->as_sign=='N'){ ?> selected="selected"<?php } ?>>1,234 USD</option>
					</select>
				</p>
				<p class="desc"><?php echo $__Context->lang->about_currency_format ?></p>
			</li>
			<li>
				<p class="q"><?php echo $__Context->lang->decimal_place ?></p>
				<p class="a">
					<input type="text" name="decimals" value="<?php echo $__Context->config->decimals ?>" />
				</p>
				<p class="desc"><?php echo $__Context->lang->about_decimal_place ?></p>
			</li>
		</ul>
	</fieldset>
	<div class="btnArea">
		<button type="submit" class="x_btn"><?php echo $__Context->lang->cmd_registration ?></button>
	</div>
</form>
