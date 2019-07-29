<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/epay/skins/default/css/userinfo.css--><?php $__tmp=array('modules/epay/skins/default/css/userinfo.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/epay/skins/default/css/nu_btn.css--><?php $__tmp=array('modules/epay/skins/default/css/nu_btn.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/epay/skins/default/css/style.css--><?php $__tmp=array('modules/epay/skins/default/css/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<style>
.pay_btnset .btsbtn.default_btn { border: 0; color: white; font-size: 13px; width: 80px; }
.party_tbl_new.pay_table { border: 0; border-radius: 10px; overflow: hidden; }
.party_tbl_new.pay_table tr th { border: 0; border-bottom: 1px solid #bbb; }
.party_tbl_new.pay_table tr td { border: 0; border-bottom: 1px solid #ddd; }
.party_tbl_new.pay_table tr:last-child td { border-bottom: 0px; }
.pagination a { color: #bbb; }
</style>
<h1><?php echo $__Context->lang->payment_details ?></h1>
<div class="pay_btnset">
	<!--
	<a class="nu_white" href="<?php echo getUrl('', 'mid', $__Context->mid, 'act', 'dispEpayTransaction', 'start_date', 'a') ?>" ><?php echo $__Context->lang->view_all ?></a>
	<a class="nu_white" href="<?php echo getUrl('', 'mid', $__Context->mid, 'act', 'dispEpayTransaction', 'start_date', 't') ?>" ><?php echo $__Context->lang->view_today ?></a>
	<a class="nu_white" href="<?php echo getUrl('', 'mid', $__Context->mid, 'act', 'dispEpayTransaction', 'start_date', '1') ?>" ><?php echo $__Context->lang->view_1month ?></a>
	-->
	
	<a class="btsbtn default_btn" href="<?php echo getUrl('', 'mid', $__Context->mid, 'act', 'dispEpayTransaction', 'start_date', 'a') ?>" ><?php echo $__Context->lang->view_all ?></a>
	<a class="btsbtn default_btn" href="<?php echo getUrl('', 'mid', $__Context->mid, 'act', 'dispEpayTransaction', 'start_date', 't') ?>" ><?php echo $__Context->lang->view_today ?></a>
	<a class="btsbtn default_btn" href="<?php echo getUrl('', 'mid', $__Context->mid, 'act', 'dispEpayTransaction', 'start_date', '1') ?>" ><?php echo $__Context->lang->view_1month ?></a>
	<!--<a class="nu_white" href="<?php echo getUrl('', 'mid', $__Context->mid, 'act', 'dispEpayTransaction', 'start_date', '3') ?>" ><?php echo $__Context->lang->view_3months ?></a>-->
</div>
<table class="party_tbl_new pay_table">
	<thead>
		<tr>
			<th><?php echo $__Context->lang->payment_date ?></th>
			<th style="width:25%"><?php echo $__Context->lang->product ?></th>
			<th style="width:25%">라이선스</th>
			<th>만료일</th>
			<th><?php echo $__Context->lang->price ?></th>
			<th><?php echo $__Context->lang->paymethod ?></th>
			<!--<th style="width:15%;"><?php echo $__Context->lang->details ?></th>-->
			<!--<th><?php echo $__Context->lang->receipt ?></th>-->
			<!--<th class="border_last"><?php echo $__Context->lang->result ?></th> 불필요한 텍스트 ')' 가 출력되어 아래의 내용으로 변경. 수정필요.-->
			<th class="border_last">결과</th>
		</tr>
	</thead>
	<tbody>
		<?php if($__Context->epay_user_info&&count($__Context->epay_user_info))foreach($__Context->epay_user_info as $__Context->k=>$__Context->v){ ?><tr data-order-srl="<?php echo $__Context->v->order_srl ?>">
			<td><?php echo substr(zdate($__Context->v->regdate),0,10) ?></td>
			<td><?php echo $__Context->v->order_title ?></td>
			<td class="license_td">-</td>
			<td class="enddate_td">-</td>
			<td><?php echo $__Context->v->payment_amount ?> 원</td>
			<td><?php echo $__Context->v->payment_method ?></td>
			<?php if(is_array($__Context->v->extra_vars) && $__Context->v->extra_vars['vact_bankname']){ ?><td><?php echo $__Context->v->extra_vars['vact_bankname'] ?><br><?php if($__Context->v->extra_vars['vact_num']){ ?><span><?php echo $__Context->v->extra_vars['vact_num'] ?></span><?php } ?></td><?php } ?>
			<?php if(is_array($__Context->v->extra_vars) && !$__Context->v->extra_vars['vact_bankname']){ ?><td><?php echo $__Context->v->payment_method ?></td><?php } ?>
			<!--<td><span class="btn"><a  class="receipt" href="#" data-order-srl="<?php echo $__Context->v->order_srl ?>" onclick="return false;"><?php echo $__Context->lang->receipt ?></a></span></td>-->
			<?php if($__Context->v){ ?><td class="border_last"><?php echo $__Context->v->result_message ?></td><?php } ?>
		</tr><?php } ?>
	</tbody>
</table>
<div id="dialog-modal" title="dialog"></div>
<form action="" class="pagination" method="post"><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<input type="hidden" name="error_return_url" value="" />
	<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
	<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
	<a href="<?php echo getUrl('page', '') ?>" class="direction">&laquo; FIRST</a>
	<?php if($__Context->page_navigation->first_page + $__Context->page_navigation->page_count > $__Context->page_navigation->last_page && $__Context->page_navigation->page_count != $__Context->page_navigation->total_page){ ?>
		<?php $__Context->isGoTo = true ?>
		<a href="<?php echo getUrl('page', '') ?>">1</a>
		<a href="#goTo" class="tgAnchor" title="<?php echo $__Context->lang->cmd_go_to_page ?>">...</a>
	<?php } ?>
	<?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
		<?php $__Context->last_page = $__Context->page_no ?>
		<?php if($__Context->page_no == $__Context->page){ ?><strong><?php echo $__Context->page_no ?></strong><?php } ?>
		<?php if($__Context->page_no != $__Context->page){ ?><a href="<?php echo getUrl('page', $__Context->page_no) ?>"><?php echo $__Context->page_no ?></a><?php } ?>
	<?php } ?>
	<?php if($__Context->last_page != $__Context->page_navigation->last_page){ ?>
		<?php $__Context->isGoTo = true ?>
		<a href="#goTo" class="tgAnchor" title="<?php echo $__Context->lang->cmd_go_to_page ?>">...</a>
		<a href="<?php echo getUrl('page', $__Context->page_navigation->last_page) ?>"><?php echo $__Context->page_navigation->last_page ?></a>
	<?php } ?>
	<a href="<?php echo getUrl('page', $__Context->page_navigation->last_page) ?>" class="direction">LAST &raquo;</a>
	<?php if($__Context->isGoTo){ ?><span id="goTo" class="tgContent">
		<input name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
		<button type="submit">Go</button>
	</span><?php } ?>
</form>
<input class="btsbtn default_btn" onclick="location.href='/'" type="button" value="뒤로가기" style="background-color: rgb(52, 152, 219); margin-bottom: 40px;">
<script type="text/javascript">
(function($){
	$(function(){
		$('.receipt').click(function() {
			var order_srl = $(this).attr('data-order-srl');
			var $_parent = $(this).parent();
			exec_xml(
				'epay',
				'getEpayReceipt',
				{order_srl:order_srl},
				function(ret){
					var tpl = ret.tpl.replace(/<enter>/g, '\n');
					$_parent.html(tpl);
				},
				['error','message','tpl']
			);
		});
	});
})(jQuery);
jQuery(document).ready(function(){
	var uidx = "<?php echo $__Context->logged_info->member_srl ?>";	// 유저 인덱스
	// 사용자 라이선스 목록 가저오기
	jQuery.ajax({
		url : '/fnt/my_license.php',
		type : 'post',
		data : { uidx : uidx },
		dataType: 'json',
		success : function(data){
			data = JSON.parse(decodeURIComponent(data));
			var license_arr = jQuery('.license_td');
			var enddate_arr = jQuery('.enddate_td');
			
			for(var i=0; i < license_arr.length ;++i){
				var oidx = jQuery(license_arr[i]).parent().attr('data-order-srl');
				
				for(var j=0; j < data.length ;++j){
					console.log(data[j]['license']);
					if(data[j]['order_idx'] == oidx){
						jQuery(license_arr[i]).text(data[j]['license']);
						jQuery(enddate_arr[i]).text(data[j]['end_date']);
					}
				}
			}
		},
		error : function(request, status, error){
			console.log("ERROR<br><br>" + request.status + "<br>" + request.responseText + "<br>" + error);
		}
	});
});
</script>
