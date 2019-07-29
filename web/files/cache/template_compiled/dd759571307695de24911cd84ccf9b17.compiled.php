<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/epay/skins/default/css/style.css--><?php $__tmp=array('modules/epay/skins/default/css/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/epay/skins/default/css/btn.css--><?php $__tmp=array('modules/epay/skins/default/css/btn.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/epay/tpl/js/common.js--><?php $__tmp=array('modules/epay/tpl/js/common.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if(count($__Context->payment_methods)){ ?><div class="payment_wrapper">
	<div class="payment_title"><?php echo $__Context->lang->paymethod ?></div>
	<form id="epay_form" method="post" action="./"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="act" value="" />
		<input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" />
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
		<!-- <input type="hidden" name="cartnos" value="<?php echo $__Context->cartnos ?>" /> -->
		<input type="hidden" name="epay_module_srl" value="<?php echo $__Context->epay_module_srl ?>" />
		<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
		<input type="hidden" name="item_name" value="<?php echo $__Context->item_name ?>" />
		<input type="hidden" name="price" value="<?php echo $__Context->price ?>" />
		<input type="hidden" name="purchaser_name" value="<?php echo $__Context->purchaser_name ?>" />
		<input type="hidden" name="purchaser_email" value="<?php echo $__Context->purchaser_email ?>" />
		<input type="hidden" name="purchaser_telnum" value="<?php echo $__Context->purchaser_telnum ?>" />
		<input type="hidden" name="target_module" value="<?php echo $__Context->target_module ?>" />
		<!-- <input type="hidden" name="order_srl" value="<?php echo $__Context->order_srl ?>" /> -->
		<!-- <input type="hidden" name="transaction_srl" value="<?php echo $__Context->transaction_srl ?>" /> -->
		<ul id="select_method">
			<?php $__Context->count=0 ?>
			<?php if($__Context->payment_methods&&count($__Context->payment_methods))foreach($__Context->payment_methods as $__Context->key=>$__Context->val){ ?><li>
				<label for="<?php echo $__Context->key ?>"><input type="radio" name="payment_method" id="<?php echo $__Context->key ?>" data-mid="<?php echo $__Context->val->mid ?>" data-module="<?php echo $__Context->val->module ?>" data-act="<?php echo $__Context->val->act ?>" data-mode="<?php echo $__Context->val->mode ?>" value="<?php echo $__Context->val->payment_method ?>"<?php if($__Context->count==0){ ?> checked="checked"<?php } ?> /><?php echo $__Context->val->title ?></label>
				<?php $__Context->count++ ?>
			</li><?php } ?>
		</ul>
		<?php $__Context->count=0 ?>
		<div class="payment_info">
			<?php if($__Context->payment_methods&&count($__Context->payment_methods))foreach($__Context->payment_methods as $__Context->key=>$__Context->val){ ?><div id="guide_<?php echo $__Context->key ?>" class="guide"<?php if($__Context->count>0){ ?> style="display:none;"<?php } ?>>
				<?php echo $__Context->val->guide ?>
				<?php $__Context->count++ ?>
			</div><?php } ?>
		</div>
		<div class="btn_wrap">
			<button type="submit" class="btn nbtn"><?php if($__Context->epay_module_info->button_text){;
echo $__Context->epay_module_info->button_text;
};
if(!$__Context->epay_module_info->button_text){;
echo $__Context->lang->cmd_place_order;
} ?></button>
		</div>
	</form>
</div><?php } ?>
<div class="payment_wrapper">
	<?php echo $__Context->form_data ?>
</div>
<?php if(count($__Context->payment_methods)){ ?><script>
	(function($) {
		jQuery(function($) {
			$('#epay_form').submit(function() {
				var mid = $('#select_method input[name=payment_method]:checked').attr('data-mid');
				var module = $('#select_method input[name=payment_method]:checked').attr('data-module');
				var act = $('#select_method input[name=payment_method]:checked').attr('data-act');
				var mode = $('#select_method input[name=payment_method]:checked').attr('data-mode');
				if (mode == 'ajax') {
					var params = new Array();
					var responses = ['error','message','tpl'];
					exec_xml(module, act, params, function(ret_obj) {
						var tpl = ret_obj.tpl.replace(/<enter>/g, '\n');
						$('#payment_form').html(tpl);
						inipay_submit('fo_insert_order');
					}, responses);
					return false;
				} else {
					var join_form_id = '<?php echo $__Context->join_form ?>';
					var dest_form = null;
					if(join_form_id.length)
					{
						copy_form('epay_form', '<?php echo $__Context->join_form ?>');
						dest_form = document.getElementById('<?php echo $__Context->join_form ?>');
					}
					else
					{
						dest_form = this;
					}
					if (mid) $('input[name=mid]', dest_form).val(mid);
					if (module) $('input[name=module]', dest_form).val(module);
					if (act) $('input[name=act]', dest_form).val(act);
				}
				if (dest_form != this)
				{
					var $btn = jQuery('<input type="submit" style="display:none;" />');
					$btn.appendTo(dest_form);
					$btn.click();
					return false;
				}
			});
			$('#epay_form input[name=payment_method]').click(function() {
				var id = $(this).attr('id');
				$('#epay_form .payment_info > div').hide();
				$('#epay_form .payment_info div#guide_'+id).show();
			});
		});
	}) (jQuery);
</script><?php } ?>
