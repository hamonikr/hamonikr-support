<?php if(!defined("__XE__"))exit;?>
<?php $__Context->is_https = strtoupper(parse_url($__Context->current_url, 0)) == 'HTTPS' ?>
<!--#Meta:modules/krzip/tpl/css/default.css--><?php $__tmp=array('modules/krzip/tpl/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if(!$__Context->is_https){ ?><!--#Meta:http://dmaps.daum.net/map_js_init/postcode.v2.js--><?php $__tmp=array('http://dmaps.daum.net/map_js_init/postcode.v2.js','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<?php if($__Context->is_https){ ?><!--#Meta:https://spi.maps.daum.net/imap/map_js_init/postcode.v2.js--><?php $__tmp=array('https://spi.maps.daum.net/imap/map_js_init/postcode.v2.js','','','');Context::loadFile($__tmp);unset($__tmp);
} ?>
<!--#Meta:modules/krzip/tpl/js/daumapi.js--><?php $__tmp=array('modules/krzip/tpl/js/daumapi.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="krZip" id="krzip-<?php echo escape($__Context->template_config->sequence_id, false) ?>" data-postcode-format="<?php echo escape($__Context->template_config->postcode_format, false) ?>">
	<input type="hidden" name="<?php echo escape($__Context->template_config->column_name, false) ?>[]" class="krzip-hidden-postcode" value="<?php echo escape($__Context->template_config->values[0], false) ?>" />
	<input type="hidden" name="<?php echo escape($__Context->template_config->column_name, false) ?>[]" class="krzip-hidden-roadAddress" value="<?php echo escape($__Context->template_config->values[1], false) ?>" />
	<input type="hidden" name="<?php echo escape($__Context->template_config->column_name, false) ?>[]" class="krzip-hidden-jibunAddress" value="<?php echo escape($__Context->template_config->values[2], false) ?>" />
	<input type="hidden" name="<?php echo escape($__Context->template_config->column_name, false) ?>[]" class="krzip-hidden-detailAddress" value="<?php echo escape($__Context->template_config->values[3], false) ?>" />
	<input type="hidden" name="<?php echo escape($__Context->template_config->column_name, false) ?>[]" class="krzip-hidden-extraAddress" value="<?php echo escape($__Context->template_config->values[4], false) ?>" />
	<div class="krzip-postcode-wrap">
		<label><?php echo $__Context->lang->cmd_krzip_postcode ?></label>
		<input type="text" class="krzip-postcode" value="<?php echo escape($__Context->template_config->values[0], false) ?>" disabled="disabled" />
		<input type="button" class="krzip-search btn" value="<?php echo $__Context->lang->cmd_search ?>" />
	</div>
	<div class="krzip-address-wrap">
		<label><?php echo $__Context->lang->cmd_krzip_address ?></label>
		<input type="text" class="krzip-roadAddress<?php if($__Context->template_config->show_box == 'only_road'){ ?> krzip-input-expand<?php } ?>" value="<?php echo escape($__Context->template_config->values[1], false) ?>" disabled="disabled" />
		<input<?php if($__Context->template_config->show_box == 'all'){ ?> type="text"<?php };
if($__Context->template_config->show_box == 'only_road'){ ?> type="hidden"<?php } ?> class="krzip-jibunAddress" value="<?php echo escape($__Context->template_config->values[2], false) ?>" disabled="disabled" />
		<input<?php if($__Context->template_config->show_box == 'all'){ ?> type="text"<?php };
if($__Context->template_config->show_box == 'only_road'){ ?> type="hidden"<?php } ?> type="text" class="krzip-extraAddress" value="<?php echo escape($__Context->template_config->values[4], false) ?>" disabled="disabled" />
	</div>
	<div class="krzip-detailAddress-wrap">
		<label><?php echo $__Context->lang->cmd_krzip_detail_address ?></label>
		<input type="text" class="krzip-detailAddress<?php if($__Context->template_config->show_box == 'only_road'){ ?> krzip-input-expand<?php } ?>" value="<?php echo escape($__Context->template_config->values[3], false) ?>" />
	</div>
	<div class="krzip-guide"></div>
</div>
<script>
//<![CDATA[
xe.lang.msg_krzip_road_address_expectation = "<?php echo $__Context->lang->msg_krzip_road_address_expectation ?>";
xe.lang.msg_krzip_jibun_address_expectation = "<?php echo $__Context->lang->msg_krzip_jibun_address_expectation ?>";
jQuery("#krzip-<?php echo escape($__Context->template_config->sequence_id, false) ?>").Krzip();
//]]>
</script>
