<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/ncart/skins/en_eng/css/style.css--><?php $__tmp=array('modules/ncart/skins/en_eng/css/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<ul class="menuTab">
	<li<?php if(in_array($__Context->act,array(NULL, 'dispNcartCartItems','dispNcartOrderItems','dispNcartOrderComplete'))){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('act','dispNcartCartItems') ?>"><?php echo $__Context->lang->cmd_cart ?></a></li>
	<?php if($__Context->logged_info){ ?><li<?php if($__Context->act=='dispNcartFavoriteItems'){ ?> class="active"<?php } ?> ><a href="<?php echo getUrl('act','dispNcartFavoriteItems') ?>"><?php echo $__Context->lang->cmd_favorites ?></a></li><?php } ?>
	<?php if(0){ ?><li<?php if(in_array($__Context->act,array('dispNcartOrderList','dispNcartOrderDetail'))){ ?> class="active"<?php } ?>><a href="<?php echo getUrl('act','dispNcartOrderList','non_password','0') ?>">결제내역</a></li><?php } ?>
</ul>
