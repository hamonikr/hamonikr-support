<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/inipaystandard/tpl','_header.html') ?>
<form class="x_form-horizontal" action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="inipaystandard" />
	<input type="hidden" name="act" value="procInipaystandardAdminInsertModule" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/inipaystandard/tpl/1" />
	<section class="section">
		<h1><?php echo $__Context->lang->subtitle_primary ?></h1>
		<div class="x_control-group">
			<label class="x_control-label" for="mid"><?php echo $__Context->lang->mid ?></label>
			<div class="x_controls">
				<input type="text" name="mid" id="mid" value="<?php echo $__Context->module_info->mid ?>" />
				<a href="#mid_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="mid_help" class="x_help-block" hidden><?php echo $__Context->lang->about_mid ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="module_category_srl"><?php echo $__Context->lang->module_category ?></label>
			<div class="x_controls">
				<select name="module_category_srl" id="module_category_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->module_category_srl == $__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#module_category_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="module_category_help" class="x_help-block" hidden><?php echo $__Context->lang->about_module_category ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="lang_browser_title"><?php echo $__Context->lang->browser_title ?></label>
			<div class="x_controls">
				<input type="text" name="browser_title" id="browser_title" value="<?php if(strpos($__Context->module_info->browser_title, '$user_lang->') === false){;
echo $__Context->module_info->browser_title;
}else{;
echo htmlspecialchars($__Context->module_info->browser_title);
} ?>" class="lang_code" />
				<a href="#browser_title_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="browser_title_help" class="x_help-block" hidden><?php echo $__Context->lang->about_browser_title ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="layout_srl"><?php echo $__Context->lang->layout ?></label>
			<div class="x_controls">
				<select name="layout_srl" id="layout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->layout_srl== $__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<a href="#layout_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="layout_help" class="x_help-block" hidden><?php echo $__Context->lang->about_layout ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="skin"><?php echo $__Context->lang->skin ?></label>
			<div class="x_controls">
				<select name="skin" id="skin" style="width:auto">
					<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->skin== $__Context->key || (!$__Context->module_info->skin && $__Context->key=='default')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->inipay_standard_info ?></h1>
		<div class="x_control-group">
			<label class="x_control-label" for="inipay_mid"><?php echo $__Context->lang->inipay_mid ?></label>
			<div class="x_controls">
				<input type="text" name="inipay_mid" id="inipay_mid" value="<?php echo $__Context->module_info->inipay_mid ?>" />
				<a href="#inipay_mid_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="inipay_mid_help" class="x_help-block" hidden><?php echo $__Context->lang->about_inipay_mid ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="inipay_signkey">SignKey</label>
			<div class="x_controls">
				<input type="text" name="inipay_signkey" id="inipay_signkey" value="<?php echo $__Context->module_info->inipay_signkey ?>" />
				<a href="#inipay_signkey_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="inipay_signkey_help" class="x_help-block" hidden><?php echo $__Context->lang->about_inipay_signkey ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="ini_payment_test_mode"><?php echo $__Context->lang->ini_payment_test_mode ?></label>
			<div class="x_controls">
				<label for="ini_payment_test_mode"><input type="checkbox" name="ini_payment_test_mode" value="Y"<?php if($__Context->module_info->ini_payment_test_mode=='Y'){ ?> checked="checked"<?php } ?> id="ini_payment_test_mode" /><?php echo $__Context->lang->about_ini_payment_test_mode ?></label>
			</div>
		</div>
		<?php if($__Context->module_info->mid){ ?><div class="x_control-group">
			<label class="x_control-label">입금내역통보 URL</label>
			<div class="x_controls" style="margin-top:5px">
				<?php echo getFullUrl('', 'mid', $__Context->module_info->mid) ?>
				<a href="#inipay_report_url_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="inipay_report_url_help" class="x_help-block" hidden>가상계좌 사용시 상점관리자 페이지의 " 승인 > 가상계좌 > 입금 통보방식 " 메뉴에서 위 입금내역통보 URL로 설정해야 합니다.</p>
			</div>
		</div><?php } ?>
	</section>
	<section class="section">
		<h1>결제방식</h1>
		<div class="x_control-group">
			<label class="x_control-label" for="method_creditcard">신용카드</label>
			<div class="x_controls">
				<select name="method_creditcard" id="method_creditcard">
					<option value="Y"<?php if($__Context->module_info->method_creditcard=='Y'){ ?> selected="selected"<?php } ?>>사용</option>
					<option value="N"<?php if($__Context->module_info->method_creditcard=='N'){ ?> selected="selected"<?php } ?>>사용안함</option>
				</select>
				<a href="#method_creditcard_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="method_creditcard_help" class="x_help-block" hidden>신용카드 사용여부를 선택하세요. 이니시스와 계약이 되어 있어야 합니다.</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="method_directbank">계좌이체</label>
			<div class="x_controls">
				<select name="method_directbank" id="method_directbank">
					<option value="Y"<?php if($__Context->module_info->method_directbank=='Y'){ ?> selected="selected"<?php } ?>>사용</option>
					<option value="N"<?php if($__Context->module_info->method_directbank=='N'){ ?> selected="selected"<?php } ?>>사용안함</option>
				</select>
				<a href="#method_directbank_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="method_directbank_help" class="x_help-block" hidden>계좌이체 사용여부를 선택하세요. 이니시스와 계약이 되어 있어야 합니다.</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="method_virtualaccount">가상계좌</label>
			<div class="x_controls">
				<select name="method_virtualaccount" id="method_virtualaccount">
					<option value="Y"<?php if($__Context->module_info->method_virtualaccount=='Y'){ ?> selected="selected"<?php } ?>>사용</option>
					<option value="N"<?php if($__Context->module_info->method_virtualaccount=='N'){ ?> selected="selected"<?php } ?>>사용안함</option>
				</select>
				<a href="#method_virtualaccount_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="method_virtualaccount_help" class="x_help-block" hidden>가상계좌 사용여부를 선택하세요. 이니시스와 계약이 되어 있어야 합니다.</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="method_mobilephone">휴대폰소액</label>
			<div class="x_controls">
				<select name="method_mobilephone" id="method_mobilephone">
					<option value="Y"<?php if($__Context->module_info->method_mobilephone=='Y'){ ?> selected="selected"<?php } ?>>사용(콘텐츠)</option>
					<option value="M"<?php if($__Context->module_info->method_mobilephone=='M'){ ?> selected="selected"<?php } ?>>사용(실물)</option>
					<option value="N"<?php if($__Context->module_info->method_mobilephone=='N'){ ?> selected="selected"<?php } ?>>사용안함</option>
				</select>
				<a href="#method_mobilephone_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="method_mobilephone_help" class="x_help-block" hidden>휴대폰소액결제 사용여부를 선택하세요. 이니시스와 계약이 되어 있어야 합니다.</p>
			</div>
		</div>
	</section>
	<section class="section">
		<h1>가이드</h1>
		<div class="x_control-group">
			<label class="x_control-label" for="guide_creditcard">신용카드</label>
			<div class="x_controls">
				<textarea name="guide_creditcard" id="guide_creditcard"><?php if(!$__Context->module_info->guide_creditcard){;
echo $__Context->lang->default_guide_creditcard;
};
if($__Context->module_info->guide_creditcard){;
echo $__Context->module_info->guide_creditcard;
} ?></textarea>
				<a href="#guide_creditcard_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="guide_creditcard_help" class="x_help-block" hidden>신용카드 사용여부를 선택하세요. 이니시스와 계약이 되어 있어야 합니다.</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="guide_directbank">계좌이체</label>
			<div class="x_controls">
				<textarea name="guide_directbank" id="guide_directbank"><?php if(!$__Context->module_info->guide_directbank){;
echo $__Context->lang->default_guide_directbank;
};
if($__Context->module_info->guide_directbank){;
echo $__Context->module_info->guide_directbank;
} ?></textarea>
				<a href="#guide_directbank_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="guide_directbank_help" class="x_help-block" hidden>계좌이체 사용여부를 선택하세요. 이니시스와 계약이 되어 있어야 합니다.</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="guide_virtualaccount">가상계좌</label>
			<div class="x_controls">
				<textarea name="guide_virtualaccount" id="guide_virtualaccount"><?php if(!$__Context->module_info->guide_virtualaccount){;
echo $__Context->lang->default_guide_virtualaccount;
};
if($__Context->module_info->guide_virtualaccount){;
echo $__Context->module_info->guide_virtualaccount;
} ?></textarea>
				<a href="#guide_virtualaccount_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="guide_virtualaccount_help" class="x_help-block" hidden>가상계좌 사용여부를 선택하세요. 이니시스와 계약이 되어 있어야 합니다.</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="guide_mobilephone">휴대폰소액</label>
			<div class="x_controls">
				<textarea name="guide_mobilephone" id="guide_mobilephone"><?php if(!$__Context->module_info->guide_mobilephone){;
echo $__Context->lang->default_guide_mobilephone;
};
if($__Context->module_info->guide_mobilephone){;
echo $__Context->module_info->guide_mobilephone;
} ?></textarea>
				<a href="#guide_mobilephone_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="guide_mobilephone_help" class="x_help-block" hidden>휴대폰소액결제 사용여부를 선택하세요. 이니시스와 계약이 되어 있어야 합니다.</p>
			</div>
		</div>
	</section>
	
	<div class="x_clearfix btnArea">
		<div class="x_pull-right">
			<button class="x_btn x_btn-primary" type="submit"><?php echo $__Context->lang->cmd_registration ?></button>
		</div>
	</div>
</form>
<script>
(function($){
	if($('#ini_payment_test_mode').is(':checked')){
		$('#inipay_mid, #inipay_signkey').attr('readonly', 'readonly');
	}
	
	$('#ini_payment_test_mode').change(function(){
		if($('#ini_payment_test_mode').is(':checked')){
			$('#inipay_mid, #inipay_signkey').attr('readonly', 'readonly');
		}else{
			$('#inipay_mid, #inipay_signkey').removeAttr('readonly');
		}
	});
})(jQuery);
</script>