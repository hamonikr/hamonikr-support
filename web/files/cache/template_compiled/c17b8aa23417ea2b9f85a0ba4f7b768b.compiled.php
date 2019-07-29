<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/nmileage/tpl','_header.html') ?>
<form action="./" method="post" class="x_form-horizontal" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="procNmileageAdminConfig" />
	<div class="x_control-group">
		<label class="x_control-label" for="use_flag"><?php echo $__Context->lang->use_or_not ?></label>
		<div class="x_controls">
			<select name="use_flag">
				<option value="Y"<?php if($__Context->config->use_flag=='Y'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->use ?></option>
				<option value="N"<?php if($__Context->config->use_flag=='N'){ ?> selected="selected"<?php } ?>><?php echo $__Context->lang->notuse ?></option>
			</select>
			<a href="#use_flag_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p id="use_flag_help" class="x_help-block" hidden><?php echo $__Context->lang->help_use_flag ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="mileage_method"><?php echo $__Context->lang->mileage_method ?></label>
		<div class="x_controls">
		    <select name="mileage_method">
				<option value="nmileage"<?php if($__Context->config->mileage_method=='nmileage'){ ?> selected="selected"<?php } ?> ><?php echo $__Context->lang->use_nmileage ?></option>
				<option value="point"<?php if($__Context->config->mileage_method=='point'){ ?> selected="selected"<?php } ?> ><?php echo $__Context->lang->use_xepoint ?></option>
		    </select>
			<a href="#mileage_method_help" class="x_icon-question-sign" data-toggle><?php echo $__Context->lang->help ?></a>
			<p id="mileage_method_help" class="x_help-block" hidden><?php echo $__Context->lang->help_mileage_method ?></p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="variable_name">추천인 변수</label>
		<div class="x_controls">
			<select name="variable_name" id="variable_name">
				<option value="0"><?php echo $__Context->lang->notuse ?></option>
				<?php if($__Context->variable_name&&count($__Context->variable_name))foreach($__Context->variable_name as $__Context->key=>$__Context->val){ ?><option value="<?php echo $__Context->val ?>"<?php if($__Context->config->variable_name == $__Context->val){ ?> selected="selected"<?php } ?>><?php echo $__Context->key ?></option><?php } ?>
			</select>
			<p class="x_help-block">추천인 변수를 선택합니다. 추천인 변수를 선택하여 회원가입시 추천인에게 마일리지를 지급하도록 합니다.</p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label">추천인 마일리지 설정</label>
		<div class="x_controls">
			<label class="x_inline">
				<input type="number" name="vote_point" value="<?php echo intval($__Context->config->vote_point) ?>" />
			</label>
			<p class="x_help-block">추천인 입력시 마일리지를 얼마만큼 지급할지 설정합니다.</p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label">추천인 기록메세지</label>
		<div class="x_controls">
			<label class="x_inline">
				<input type="text" name="vote_text" value="<?php echo $__Context->config->vote_text ?>" />
			</label>
			<p class="x_help-block">마일리지 지급시 히스토리에 여기에 설정한 메세지로 히스토리를 남겨줍니다. 미기재시 기본값 : vote member</p>
		</div>
	</div>
	<div class="x_control-group">
		<label class="x_control-label" for="member_mothod">포인트 받을사람 설정</label>
		<div class="x_controls">
			<select name="member_mothod" id="member_mothod">
				<option value="all"<?php if($__Context->config->member_mothod=='all'){ ?> selected="selected"<?php } ?>>모두에게</option>
				<option value="recipient"<?php if($__Context->config->member_mothod=='recipient'){ ?> selected="selected"<?php } ?>>추천받은 사람</option>
				<option value="voteuser"<?php if($__Context->config->member_mothod=='voteuser'){ ?> selected="selected"<?php } ?>>추천한 사람</option>
			</select>
			<p class="x_help-block">포인트를 받는 사람을 설정합니다.</p>
		</div>
	</div>
	<div class="x_clearfix btnArea">
		<span class="btn"><input type="submit" value="<?php echo $__Context->lang->cmd_registration ?>" accesskey="s" /></span>
	</div>
</form>
