<?php if(!defined("__XE__"))exit;
require_once('./classes/xml/XmlJsFilter.class.php');$__xmlFilter=new XmlJsFilter('modules/epay/tpl/filter','insert_epay.xml');$__xmlFilter->compile(); ?>
<!--#Meta:modules/epay/tpl/js/script.js--><?php $__tmp=array('modules/epay/tpl/js/script.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/epay/tpl','header.html') ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
        <p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<?php Context::addJsFile("modules/epay/ruleset/insertModInst.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./" class="x_form-horizontal" method="post" enctype="multipart/form-data"  ><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="insertModInst" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="procEpayAdminInsertEpay" />
	<input type="hidden" name="page" value="<?php echo $__Context->page ?>" />
	<input type="hidden" name="module_srl" value="<?php echo $__Context->module_info->module_srl ?>" />
	<section class="section">
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->mid ?></label>
			<div class="x_controls">
				<input type="text" name="mid" value="<?php echo $__Context->module_info->mid ?>" class="inputTypeText w200" />
				<a href="#mid_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="mid_help" class="x_help-block" hidden><?php echo $__Context->lang->about_mid ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->module_category ?></label>
			<div class="x_controls">
				<select name="module_category_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->module_category_srl==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#module_category_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="module_category_srl_help" class="x_help-block" hidden><?php echo $__Context->lang->about_module_category ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->browser_title ?></label>
			<div class="x_controls">
				<input type="text" name="browser_title" value="<?php echo htmlspecialchars($__Context->module_info->browser_title) ?>"  class="inputTypeText w400 lang_code" id="browser_title"/>
				<a href="#browser_title_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="browser_title_help" class="x_help-block" hidden><?php echo $__Context->lang->about_browser_title ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->layout ?></label>
			<div class="x_controls">
				<select name="layout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->layout_list&&count($__Context->layout_list))foreach($__Context->layout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->layout_srl==$__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<a href="#layout_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="layout_srl_help" class="x_help-block" hidden><?php echo $__Context->lang->about_layout ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->skin ?></label>
			<div class="x_controls">
				<select name="skin">
					<?php if($__Context->skin_list&&count($__Context->skin_list))foreach($__Context->skin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->skin==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#skin_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="skin_help" class="x_help-block" hidden><?php echo $__Context->lang->about_skin ?></p>
			</div>
		</div>
		<?php if(0){ ?><div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->mobile_view ?></label>
			<div class="x_controls">
				<input type="checkbox" name="use_mobile" value="Y"<?php if($__Context->module_info->use_mobile=='Y'){ ?> checked="checked"<?php } ?> />
				<a href="#use_mobile_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="use_mobile_help" class="x_help-block" hidden><?php echo $__Context->lang->about_mobile_view ?></p>
			</div>
		</div><?php } ?>
		<?php if(0){ ?><div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->mobile_layout ?></label>
			<div class="x_controls">
				<select name="mlayout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->mlayout_list&&count($__Context->mlayout_list))foreach($__Context->mlayout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->mlayout_srl==$__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<a href="#mlayout_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="mlayout_srl_help" class="x_help-block" hidden><?php echo $__Context->lang->about_layout ?></p>
			</div>
		</div><?php } ?>
		<?php if(0){ ?><div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->skin ?></label>
			<div class="x_controls">
				<select name="mskin">
					<?php if($__Context->mskin_list&&count($__Context->mskin_list))foreach($__Context->mskin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->mskin==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#skin_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="skin_help" class="x_help-block" hidden><?php echo $__Context->lang->about_skin ?></p>
			</div>
		</div><?php } ?>
		<div class="x_control-group">
			<label class="x_control-label">연동모듈</label>
			<div class="x_controls">
			    <select name="pg1_module_srl">
					<option value=""><?php echo $__Context->lang->cmd_select ?></option>
					<?php if($__Context->pg_modules&&count($__Context->pg_modules))foreach($__Context->pg_modules as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->module_srl ?>"<?php if($__Context->val->module_srl==$__Context->module_info->pg1_module_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->browser_title ?> <?php echo $__Context->val->mid ?></option><?php } ?>
				</select>
				<a href="#pg1_module_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="pg1_module_srl_help" class="x_help-block" hidden>연동모듈을 선택하세요.</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label">연동모듈</label>
			<div class="x_controls">
			    <select name="pg2_module_srl">
					<option value=""><?php echo $__Context->lang->cmd_select ?></option>
					<?php if($__Context->pg_modules&&count($__Context->pg_modules))foreach($__Context->pg_modules as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->module_srl ?>"<?php if($__Context->val->module_srl==$__Context->module_info->pg2_module_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->browser_title ?> <?php echo $__Context->val->mid ?></option><?php } ?>
				</select>
				<a href="#pg2_module_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="pg2_module_srl_help" class="x_help-block" hidden>연동모듈을 선택하세요.</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label">연동모듈</label>
			<div class="x_controls">
			    <select name="pg3_module_srl">
					<option value=""><?php echo $__Context->lang->cmd_select ?></option>
					<?php if($__Context->pg_modules&&count($__Context->pg_modules))foreach($__Context->pg_modules as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->module_srl ?>"<?php if($__Context->val->module_srl==$__Context->module_info->pg3_module_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->browser_title ?> <?php echo $__Context->val->mid ?></option><?php } ?>
				</select>
				<a href="#pg3_module_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="pg3_module_srl_help" class="x_help-block" hidden>연동모듈을 선택하세요.</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label">연동모듈</label>
			<div class="x_controls">
			    <select name="pg4_module_srl">
					<option value=""><?php echo $__Context->lang->cmd_select ?></option>
					<?php if($__Context->pg_modules&&count($__Context->pg_modules))foreach($__Context->pg_modules as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->module_srl ?>"<?php if($__Context->val->module_srl==$__Context->module_info->pg4_module_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->browser_title ?> <?php echo $__Context->val->mid ?></option><?php } ?>
				</select>
				<a href="#pg4_module_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="pg4_module_srl_help" class="x_help-block" hidden>연동모듈을 선택하세요.</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->plugin ?></label>
			<div class="x_controls">
				<select name="plugin_srl">
					<option value=""><?php echo $__Context->lang->cmd_select ?></option>
					<?php if($__Context->plugins&&count($__Context->plugins))foreach($__Context->plugins as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->plugin_srl ?>"<?php if($__Context->val->plugin_srl==$__Context->module_info->plugin_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#plugin_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="plugin_srl_help" class="x_help-block" hidden><?php echo $__Context->lang->about_plugin ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->plugin ?></label>
			<div class="x_controls">
			    <select name="plugin2_srl">
					<option value=""><?php echo $__Context->lang->cmd_select ?></option>
					<?php if($__Context->plugins&&count($__Context->plugins))foreach($__Context->plugins as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->plugin_srl ?>"<?php if($__Context->val->plugin_srl==$__Context->module_info->plugin2_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#plugin2_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="plugin2_srl_help" class="x_help-block" hidden><?php echo $__Context->lang->about_plugin ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->plugin ?></label>
			<div class="x_controls">
			    <select name="plugin3_srl">
					<option value=""><?php echo $__Context->lang->cmd_select ?></option>
					<?php if($__Context->plugins&&count($__Context->plugins))foreach($__Context->plugins as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->plugin_srl ?>"<?php if($__Context->val->plugin_srl==$__Context->module_info->plugin3_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#plugin3_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="plugin3_srl_help" class="x_help-block" hidden><?php echo $__Context->lang->about_plugin ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->plugin ?></label>
			<div class="x_controls">
			    <select name="plugin4_srl">
					<option value=""><?php echo $__Context->lang->cmd_select ?></option>
					<?php if($__Context->plugins&&count($__Context->plugins))foreach($__Context->plugins as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->plugin_srl ?>"<?php if($__Context->val->plugin_srl==$__Context->module_info->plugin4_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#plugin4_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="plugin4_srl_help" class="x_help-block" hidden><?php echo $__Context->lang->about_plugin ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->plugin ?></label>
			<div class="x_controls">
			    <select name="plugin5_srl">
					<option value=""><?php echo $__Context->lang->cmd_select ?></option>
					<?php if($__Context->plugins&&count($__Context->plugins))foreach($__Context->plugins as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->plugin_srl ?>"<?php if($__Context->val->plugin_srl==$__Context->module_info->plugin5_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#plugin5_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="plugin5_srl_help" class="x_help-block" hidden><?php echo $__Context->lang->about_plugin ?></p>
			</div>
		</div>
	</section>
	<section class="section">
		<h1><?php echo $__Context->lang->mobile_settings ?></h1>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->mobile_view ?></label>
			<div class="x_controls">
				<label class="x_inline" for="use_mobile"><input type="checkbox" name="use_mobile" id="use_mobile" value="Y"<?php if($__Context->module_info->use_mobile == 'Y'){ ?> checked="checked"<?php } ?> /> <?php echo $__Context->lang->about_mobile_view ?></label>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="mlayout_srl"><?php echo $__Context->lang->mobile_layout ?></label>
			<div class="x_controls">
				<select name="mlayout_srl" id="mlayout_srl">
					<option value="0"><?php echo $__Context->lang->notuse ?></option>
					<?php if($__Context->mlayout_list&&count($__Context->mlayout_list))foreach($__Context->mlayout_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->layout_srl ?>"<?php if($__Context->module_info->mlayout_srl== $__Context->val->layout_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?> (<?php echo $__Context->val->layout ?>)</option><?php } ?>
				</select>
				<a href="#mobile_layout_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="mobile_layout_help" class="x_help-block" hidden><?php echo $__Context->lang->about_layout ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label" for="mskin"><?php echo $__Context->lang->mobile_skin ?></label>
			<div class="x_controls">
				<select name="mskin" id="mskin">
					<?php if($__Context->mskin_list&&count($__Context->mskin_list))foreach($__Context->mskin_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->key ?>"<?php if($__Context->module_info->mskin== $__Context->key || (!$__Context->module_info->skin && $__Context->key=='default')){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option><?php } ?>
				</select>
				<a href="#mobile_skin_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="mobile_skin_help" class="x_help-block" hidden><?php echo $__Context->lang->about_skin ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label">연동모듈</label>
			<div class="x_controls">
			    <select name="m_pg1_module_srl">
					<option value=""><?php echo $__Context->lang->cmd_select ?></option>
					<?php if($__Context->pg_modules&&count($__Context->pg_modules))foreach($__Context->pg_modules as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->module_srl ?>"<?php if($__Context->val->module_srl==$__Context->module_info->m_pg1_module_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->browser_title ?> <?php echo $__Context->val->mid ?></option><?php } ?>
				</select>
				<a href="#m_pg1_module_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="m_pg1_module_srl_help" class="x_help-block" hidden>연동모듈을 선택하세요.</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label">연동모듈</label>
			<div class="x_controls">
			    <select name="m_pg2_module_srl">
					<option value=""><?php echo $__Context->lang->cmd_select ?></option>
					<?php if($__Context->pg_modules&&count($__Context->pg_modules))foreach($__Context->pg_modules as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->module_srl ?>"<?php if($__Context->val->module_srl==$__Context->module_info->m_pg2_module_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->browser_title ?> <?php echo $__Context->val->mid ?></option><?php } ?>
				</select>
				<a href="#m_pg2_module_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="m_pg2_module_srl_help" class="x_help-block" hidden>연동모듈을 선택하세요.</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label">연동모듈</label>
			<div class="x_controls">
			    <select name="m_pg3_module_srl">
					<option value=""><?php echo $__Context->lang->cmd_select ?></option>
					<?php if($__Context->pg_modules&&count($__Context->pg_modules))foreach($__Context->pg_modules as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val->module_srl ?>"<?php if($__Context->val->module_srl==$__Context->module_info->m_pg3_module_srl){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->browser_title ?> <?php echo $__Context->val->mid ?></option><?php } ?>
				</select>
				<a href="#m_pg3_module_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="m_pg3_module_srl_help" class="x_help-block" hidden>연동모듈을 선택하세요.</p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->plugin ?></label>
			<div class="x_controls">
				<select name="plugin_srl_mobile1">
					<option value=""><?php echo $__Context->lang->cmd_select ?></option>
				<?php if($__Context->plugins&&count($__Context->plugins))foreach($__Context->plugins as $__Context->key=>$__Context->val){ ?>
					<option value="<?php echo $__Context->val->plugin_srl ?>"<?php if($__Context->val->plugin_srl==$__Context->module_info->plugin_srl_mobile1){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
				<?php } ?>
				</select>
				<a href="#plugin_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="plugin_srl_help" class="x_help-block" hidden><?php echo $__Context->lang->about_plugin ?></p>
			</div>
		</div>
		<div class="x_control-group">
			<label class="x_control-label"><?php echo $__Context->lang->plugin ?></label>
			<div class="x_controls">
				<select name="plugin_srl_mobile2">
					<option value=""><?php echo $__Context->lang->cmd_select ?></option>
				<?php if($__Context->plugins&&count($__Context->plugins))foreach($__Context->plugins as $__Context->key=>$__Context->val){ ?>
					<option value="<?php echo $__Context->val->plugin_srl ?>"<?php if($__Context->val->plugin_srl==$__Context->module_info->plugin_srl_mobile2){ ?> selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
				<?php } ?>
				</select>
				<a href="#plugin_srl_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
				<p id="plugin_srl_help" class="x_help-block" hidden><?php echo $__Context->lang->about_plugin ?></p>
			</div>
		</div>
	</section>
	<div class="x_clearfix btnArea">
		<button type="submit" class="x_btn x_btn-primary" accesskey="s"><?php echo $__Context->lang->cmd_registration ?></button>
		<a href="<?php echo getUrl('','module',$__Context->module,'act','dispEpayAdminEpayList') ?>" class="x_btn"><?php echo $__Context->lang->cmd_back ?></a>
	</div>
</form>
