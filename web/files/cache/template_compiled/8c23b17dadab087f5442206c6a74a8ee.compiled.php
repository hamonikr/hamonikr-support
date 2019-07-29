<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/member/skins/default/css/member.css--><?php $__tmp=array('modules/member/skins/default/css/member.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/member/skins/default/js/member.js--><?php $__tmp=array('modules/member/skins/default/js/member.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<section class="xm">
	<?php if($__Context->is_logged && $__Context->logged_info->menu_list && (!$__Context->member_srl || $__Context->member_srl == $__Context->logged_info->member_srl)){ ?><ul class="nav nav-tabs">
		<?php if($__Context->logged_info->menu_list&&count($__Context->logged_info->menu_list))foreach($__Context->logged_info->menu_list as $__Context->key=>$__Context->val){ ?><li<?php if($__Context->key==$__Context->act){ ?> class="active"<?php } ?>>
			<a href="<?php echo getUrl('', 'act',$__Context->key, 'mid', $__Context->mid, 'vid', $__Context->vid) ?>"><?php echo Context::getLang($__Context->val) ?></a>
		</li><?php } ?>
	</ul><?php } ?>
