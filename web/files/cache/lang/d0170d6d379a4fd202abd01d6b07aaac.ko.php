<?php
$lang->poll='설문';
$lang->poll_stop_date='설문조사 종료일';
$lang->poll_join_count='참가자';
$lang->poll_checkcount='필수 항목 수';
$lang->cmd_poll_list='설문조사 목록 보기';
$lang->cmd_delete_checked_poll='선택 설문 삭제';
$lang->cmd_apply_poll='설문 참여';
$lang->cmd_view_result='결과 보기';
$lang->success_poll='설문 응답 감사합니다.';
$lang->msg_already_poll='이미 설문조사를 했습니다.';
$lang->msg_poll_is_null='삭제할 설문을 선택해주세요.';
$lang->msg_checked_poll_is_deleted='%d개의 설문이 삭제되었습니다.';
$lang->confirm_poll_delete='%s개의 설문을 삭제하시겠습니까?';
$lang->msg_check_poll_item='설문에 응할 항목을 선택하여 주세요. (설문조사 마다 필수 선택항목이 다를 수 있습니다.)';
$lang->msg_poll_not_exists='선택한 설문이 존재하지 않습니다.';
$lang->cmd_null_item='설문조사로 등록할 값이 없습니다. 다시 설정해주세요.';
$lang->confirm_poll_submit='설문조사에 응하시겠습니까?';
if(!is_array($lang->search_poll_target_list)){
	$lang->search_poll_target_list = array();
}
$lang->search_poll_target_list['title']='제목';
$lang->search_poll_target_list['regdate']='등록일';
$lang->search_poll_target_list['ipaddress']='IP 주소';
$lang->single_check='단일 선택';
$lang->multi_check='다중 선택';
$lang->selected_poll='선택한 설문';
