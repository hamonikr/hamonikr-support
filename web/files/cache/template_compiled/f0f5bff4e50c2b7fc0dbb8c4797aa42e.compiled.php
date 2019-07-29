<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/member/tpl/js/member_admin_list.js--><?php $__tmp=array('modules/member/tpl/js/member_admin_list.js','body','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script>
	xe.lang.msg_select_user = '<?php echo $__Context->lang->msg_select_user ?>';
	xe.lang.msg_delete_user = '<?php echo $__Context->lang->msg_delete_user ?>';
</script>
<div class="x_page-header">
	<h1><?php echo $__Context->lang->user_list ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_member_list" target="_blank"><?php echo $__Context->lang->help ?></a></h1>
</div>
<?php if($__Context->XE_VALIDATOR_MESSAGE && $__Context->XE_VALIDATOR_ID == 'modules/member/tpl/1'){ ?><div class="message <?php echo escape($__Context->XE_VALIDATOR_MESSAGE_TYPE, false) ?>">
	<p><?php echo escape($__Context->XE_VALIDATOR_MESSAGE, false) ?></p>
</div><?php } ?>
<form action="" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<table id="memberList" class="x_table x_table-striped x_table-hover">
		<caption>
			<a href="<?php echo escape(getUrl('filter_type', '', 'page', ''), false) ?>"<?php if(!$__Context->filter_type){ ?> class="active"<?php } ?>><?php echo $__Context->lang->cmd_show_all_member;
if(!$__Context->filter_type){ ?>(<?php echo escape($__Context->total_count, false) ?>)<?php } ?></a>
			<i>|</i>
			<a href="<?php echo escape(getUrl('filter_type', 'super_admin', 'page', ''), false) ?>"<?php if($__Context->filter_type=='super_admin'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->cmd_show_super_admin_member;
if($__Context->filter_type=='super_admin'){ ?>(<?php echo escape($__Context->total_count, false) ?>)<?php } ?></a>
			<i>|</i>
			<a href="<?php echo escape(getUrl('filter_type', 'enable', 'page', ''), false) ?>"<?php if($__Context->filter_type=='enable'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->approval;
if($__Context->filter_type=='enable'){ ?>(<?php echo escape($__Context->total_count, false) ?>)<?php } ?></a>
			<i>|</i>
			<a href="<?php echo escape(getUrl('filter_type', 'disable', 'page', ''), false) ?>"<?php if($__Context->filter_type=='disable'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->denied;
if($__Context->filter_type=='disable'){ ?>(<?php echo escape($__Context->total_count, false) ?>)<?php } ?></a>
			<div class="x_pull-right x_btn-group">
				<a class="x_btn x_btn-inverse" href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispMemberAdminInsert'), false) ?>"><?php echo $__Context->lang->msg_new_member ?></a>
				<a href="#listManager" data-value="modify" class="modalAnchor _member x_btn"><?php echo $__Context->lang->modify ?></a>
				<a href="#listManager" data-value="delete" class="modalAnchor _member x_btn"><?php echo $__Context->lang->delete ?></a>
			</div>
		</caption>
		<thead>
			<tr>
				<th scope="col" class="nowr"><?php echo $__Context->lang->email ?></th>
				<?php if($__Context->usedIdentifiers&&count($__Context->usedIdentifiers))foreach($__Context->usedIdentifiers as $__Context->name=>$__Context->title){ ?><th scope="col" class="nowr"><?php echo escape($__Context->title, false) ?></th><?php } ?>
				<th scope="col" class="nowr"><a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispMemberAdminList', 'sort_index', 'regdate', 'sort_order', ($__Context->sort_order == 'asc') ? 'desc' : 'asc', 'selected_group_srl', $__Context->selected_group_srl), false) ?>"><?php echo $__Context->lang->signup_date;
if($__Context->sort_index == 'regdate'){ ?> <?php if($__Context->sort_order=='asc'){ ?><em>▲</em><?php };
if($__Context->sort_order != 'asc'){ ?><em>▼</em><?php };
} ?></a></th>
				<th scope="col" class="nowr"><a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispMemberAdminList', 'sort_index', 'last_login', 'sort_order',  ($__Context->sort_order == 'asc') ? 'desc' : 'asc', 'selected_group_srl', $__Context->selected_group_srl), false) ?>"><?php echo $__Context->lang->last_login;
if($__Context->sort_index == 'last_login'){ ?> <?php if($__Context->sort_order=='asc'){ ?><em>▲</em><?php };
if($__Context->sort_order != 'asc'){ ?><em>▼</em><?php };
} ?></a></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->member_group ?></th>
				<th scope="col" class="nowr"><?php echo $__Context->lang->inquiry ?>/<?php echo $__Context->lang->cmd_modify ?></th>
				<th scope="col">
					<input type="checkbox" title="Check All" data-name="user" />
				</th>
			</tr>
		</thead>
		<tbody>
			<?php if($__Context->member_list&&count($__Context->member_list))foreach($__Context->member_list as $__Context->no=>$__Context->member_info){ ?><tr>
				<?php $__Context->member_info = get_object_vars($__Context->member_info) ?>
				<td class="nowr">
					<a href="#popup_menu_area" class="member_<?php echo escape($__Context->member_info['member_srl'], false) ?>" title="Info"><?php echo escape(getEncodeEmailAddress($__Context->member_info['email_address']), false) ?></a>
				</td>
				<?php  $__Context->member_info['group_list'] = implode(', ', $__Context->member_info['group_list']) ?>
				<?php if($__Context->usedIdentifiers&&count($__Context->usedIdentifiers))foreach($__Context->usedIdentifiers as $__Context->name=>$__Context->title){ ?><td class="nowr"><?php echo escape($__Context->member_info[$__Context->name], false) ?></td><?php } ?>
				<td class="nowr" title="<?php echo escape(zdate($__Context->member_info['regdate'], 'Y-m-d H:i:s'), false) ?>"><?php echo escape(zdate($__Context->member_info['regdate'], 'Y-m-d'), false) ?></td>
				<td class="nowr" title="<?php echo escape(zdate($__Context->member_info['last_login'], 'Y-m-d H:i:s'), false) ?>"><?php echo escape(zdate($__Context->member_info['last_login'], 'Y-m-d'), false) ?></td>
				<td><?php echo escape($__Context->member_info['group_list'], false) ?>&nbsp;</td>
				<td class="nowr"><a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispMemberAdminInsert', 'member_srl', $__Context->member_info['member_srl']), false) ?>"><?php echo $__Context->lang->inquiry ?>/<?php echo $__Context->lang->cmd_modify ?></a></td>
				<?php $__Context->used_values = '' ?>
				<?php if($__Context->usedIdentifiers&&count($__Context->usedIdentifiers))foreach($__Context->usedIdentifiers as $__Context->name=>$__Context->title){ ?>
					<?php $__Context->used_values .= "\t".$__Context->member_info[$__Context->name] ?>
				<?php } ?>
				<td><input type="checkbox" name="user" value="<?php echo escape($__Context->member_info['member_srl']."\t".$__Context->member_info['email_address'].$__Context->used_values."\t".$__Context->member_info['group_list'], false) ?>"<?php if($__Context->member_info['is_admin'] == 'Y'){ ?> disabled="disabled"<?php } ?>/></td>
			</tr><?php } ?>
			<?php if($__Context->total_count==0){ ?><tr>
				<td><?php echo $__Context->lang->msg_no_result ?></td>
			</tr><?php } ?>
		</tbody>
	</table>
</form>
<div class="x_clearfix">
	<?php if($__Context->page_navigation){ ?><form action="./" class="x_pagination x_pull-left"  style="margin:0"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="<?php echo escape($__Context->module, false) ?>" />
		<input type="hidden" name="act" value="<?php echo escape($__Context->act, false) ?>" />
		<?php if($__Context->order_target){ ?><input type="hidden" name="order_target" value="<?php echo escape($__Context->order_target, false) ?>" /><?php } ?>
		<?php if($__Context->order_type){ ?><input type="hidden" name="order_type" value="<?php echo escape($__Context->order_type, false) ?>" /><?php } ?>
		<?php if($__Context->category_srl){ ?><input type="hidden" name="category_srl" value="<?php echo escape($__Context->category_srl, false) ?>" /><?php } ?>
		<?php if($__Context->childrenList){ ?><input type="hidden" name="childrenList" value="<?php echo escape($__Context->childrenList, false) ?>" /><?php } ?>
		<?php if($__Context->search_keyword){ ?><input type="hidden" name="search_keyword" value="<?php echo escape($__Context->search_keyword, false) ?>" /><?php } ?>
		<ul>
			<li<?php if(!$__Context->page || $__Context->page == 1){ ?> class="x_disabled"<?php } ?>><a href="<?php echo escape(getUrl('page', ''), false) ?>">&laquo; <?php echo $__Context->lang->first_page ?></a></li>
	
			<?php if($__Context->page_navigation->first_page != 1 && $__Context->page_navigation->first_page + $__Context->page_navigation->page_count > $__Context->page_navigation->last_page - 1 && $__Context->page_navigation->page_count != $__Context->page_navigation->total_page){ ?>
				<?php $__Context->isGoTo = true ?>
				<li>
					<a href="#goTo" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
					<?php if($__Context->isGoTo){ ?><span id="goTo" class="x_input-append">
						<input type="number" min="1" max="<?php echo escape($__Context->page_navigation->last_page, false) ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
						<button type="submit" class="x_add-on">Go</button>
					</span><?php } ?>
				</li>
			<?php } ?>
	
			<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
				<?php $__Context->last_page = $__Context->page_no ?>
				<li<?php if($__Context->page_no == $__Context->page){ ?> class="x_active"<?php } ?>><a  href="<?php echo escape(getUrl('page', $__Context->page_no), false) ?>"><?php echo escape($__Context->page_no, false) ?></a></li>
			<?php } ?>
	
			<?php if($__Context->last_page != $__Context->page_navigation->last_page && $__Context->last_page + 1 != $__Context->page_navigation->last_page){ ?>
				<?php $__Context->isGoTo = true ?>
				<li>
					<a href="#goTo" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
					<?php if($__Context->isGoTo){ ?><span id="goTo" class="x_input-append">
						<input type="number" min="1" max="<?php echo escape($__Context->page_navigation->last_page, false) ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
						<button type="submit" class="x_add-on">Go</button>
					</span><?php } ?>
				</li>
				
			<?php } ?>
	
			<li<?php if($__Context->page == $__Context->page_navigation->last_page){ ?> class="x_disabled"<?php } ?>><a href="<?php echo escape(getUrl('page', $__Context->page_navigation->last_page), false) ?>" title="<?php echo escape($__Context->page_navigation->last_page, false) ?>"><?php echo $__Context->lang->last_page ?> &raquo;</a></li>
		</ul>
	</form><?php } ?>
	<div class="x_pull-right x_btn-group">
		<a class="x_btn x_btn-inverse" href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispMemberAdminInsert'), false) ?>"><?php echo $__Context->lang->msg_new_member ?></a>
		<a href="#listManager" data-value="modify" class="modalAnchor _member x_btn"><?php echo $__Context->lang->modify ?></a>
		<a href="#listManager" data-value="delete" class="modalAnchor _member x_btn"><?php echo $__Context->lang->delete ?></a>
	</div>
</div>
<form action="./" method="get" class="search center x_input-append" ><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="module" value="<?php echo escape($__Context->module, false) ?>" />
	<select name="selected_group_srl" style="margin-right:4px">
		<option value="0"><?php echo $__Context->lang->all_group ?></option>
		<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key => $__Context->val){ ?>
		<option value="<?php echo escape($__Context->val->group_srl, false) ?>" <?php if($__Context->selected_group_srl==$__Context->val->group_srl){ ?>selected="selected"<?php } ?>><?php echo escape($__Context->val->title, false) ?></option>
		<?php } ?>
	</select>
	<select name="search_target" style="margin-right:4px" title="<?php echo $__Context->lang->search_target ?>">
		<?php $__Context->lang->search_target_list = array_merge($__Context->usedIdentifiers, $__Context->lang->search_target_list) ?>
		<?php if($__Context->lang->search_target_list&&count($__Context->lang->search_target_list))foreach($__Context->lang->search_target_list as $__Context->key=>$__Context->val){ ?><option value="<?php echo escape($__Context->key, false) ?>"<?php if($__Context->search_target==$__Context->key){ ?> selected="selected"<?php } ?>><?php echo escape($__Context->val, false) ?></option><?php } ?>
	</select>
	<input type="search" name="search_keyword" value="<?php echo htmlspecialchars($__Context->search_keyword, ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" style="width:140px">
	<button class="x_btn x_btn-inverse" type="submit"><?php echo $__Context->lang->cmd_search ?></button>
	<a class="x_btn" href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispMemberAdminList', 'page', $__Context->page), false) ?>"><?php echo $__Context->lang->cmd_cancel ?></a>
</form>
<section class="x_modal" id="listManager">
	<?php Context::addJsFile("modules/member/ruleset/updateSeletecdMemberInfo.xml", FALSE, "", 0, "body", TRUE, "") ?><form action="./"  method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="updateSeletecdMemberInfo" />
	<input type="hidden" name="module" value="member" />
	<input type="hidden" name="act" value="procMemberAdminSelectedMemberManage" />
	<input type="hidden" name="success_return_url" value="<?php echo escape(getUrl('act', $__Context->act), false) ?>" />
	<input type="hidden" name="xe_validator_id" value="modules/member/tpl/1" />
		<div class="x_modal-header">
			<h1><?php echo $__Context->lang->cmd_selected_user_manage ?>: <span class="_sub"></span></h1>
		</div>
		<div class="x_modal-body">
			<table class="x_table x_table-striped x_table-hover">
				<thead>
					<tr>
						<th scope="col"><?php echo $__Context->lang->email_address ?></th>
						<?php if($__Context->usedIdentifiers&&count($__Context->usedIdentifiers))foreach($__Context->usedIdentifiers as $__Context->name=>$__Context->title){ ?><th scope="col"><?php echo escape($__Context->title, false) ?></th><?php } ?>
						<th scope="col" class="text"><?php echo $__Context->lang->member_group ?></th>
						<th scope="col">&nbsp;</th>
					</tr>
				</thead>
				<tbody id="popupBody">
				</tbody>
			</table>
			<div class="x_control-group _moveTarget" hidden>
				<h3><?php echo $__Context->lang->member_group ?></h3>
				<?php if($__Context->group_list&&count($__Context->group_list))foreach($__Context->group_list as $__Context->key=>$__Context->val){ ?><label for="g<?php echo escape($__Context->val->group_srl, false) ?>" class="x_inline"><input type="checkbox" name="groups[]" id="g<?php echo escape($__Context->val->group_srl, false) ?>" value="<?php echo escape($__Context->val->group_srl, false) ?>"/> <?php echo escape($__Context->val->title, false) ?></label><?php } ?>
			</div>
			<div class="x_control-group _moveTarget" hidden>
				<h3><?php echo $__Context->lang->denied ?></h3>
				<label class="x_inline" for="appoval"><input type="radio" name="denied" id="appoval" value="N" /> <?php echo $__Context->lang->approval ?></label>
				<label class="x_inline" for="deny"><input type="radio" name="denied" id="deny" value="Y" /> <?php echo $__Context->lang->denied ?></label>
			</div>
			<div class="x_control-group _moveTarget" hidden>
				<h3><?php echo $__Context->lang->about_send_message ?></h3>
				<textarea rows="5" cols="42" id="message" style="width:98%" name="message" title="<?php echo $__Context->lang->about_send_message ?>"></textarea>
			</div>
		</div>
		<div class="x_modal-footer">
			<button type="button" class="x_btn x_pull-left" data-hide="#listManager"><?php echo $__Context->lang->cmd_close ?></button>
			<span class="x_btn-group x_pull-right">
				<button type="submit" name="type" value="modify|delete" class="x_btn x_btn-inverse"><?php echo $__Context->lang->confirm ?></button>
			</span>
		</div>
	</form>
</section>
<script>
jQuery(function($){
	// Modal anchor activation
	var $memberList = $('#memberList');
	$memberList.find(':checkbox').change(function(){
		var $modalAnchor = $('a[data-value]');
		if($memberList.find('tbody :checked').length == 0){
			$modalAnchor.removeAttr('href').addClass('x_disabled');
		} else {
			$modalAnchor.attr('href','#listManager').removeClass('x_disabled');
		}
	}).change();
	// Modal anchor button action
	$('a[data-value]').click(function(){
		if($memberList.find(':checked').length != 0){
			var $this = $(this);
			var $moveTarget = $('._moveTarget');
			var thisValue = $this.attr('data-value');
			var thisText = $this.text();
			$('#listManager').find('.x_modal-header ._sub').text(thisText).end().find('[type="submit"]').val(thisValue).text(thisText);
			if(thisValue == 'delete'){
				$moveTarget.hide().next().css('borderTopWidth','0');
			} else {
				$moveTarget.show().next().css('borderTopWidth','1px');
			}
		}
	});
});
</script>
