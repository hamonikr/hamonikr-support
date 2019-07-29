<?php if(!defined("__XE__"))exit;?><!--#Meta:m.layouts/default/mx.css--><?php $__tmp=array('m.layouts/default/mx.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="hd">
	<h1 class="h1"><a<?php if($__Context->layout_info->index_url){ ?> href="<?php echo $__Context->layout_info->index_url ?>"<?php };
if(!$__Context->layout_info->index_url){ ?> href="<?php echo geturl('') ?>"<?php } ?>>
	<?php if($__Context->layout_info->logo_image){ ?>
	<img src="<?php echo $__Context->layout_info->logo_image ?>"<?php if($__Context->layout_info->index_title){ ?> alt="<?php echo $__Context->layout_info->index_title ?>"<?php };
if(!$__Context->layout_info->index_title && Context::getSiteTitle()){ ?> alt="<?php echo Context::getSiteTitle() ?>"<?php } ?> />
	<?php }elseif($__Context->layout_info->index_title){ ?>
	<a href="<?php echo $__Context->layout_info->index_url ?>"><?php echo $__Context->layout_info->index_title ?></a>
	<?php }elseif(Context::getSiteTitle()){ ?>
	<?php echo Context::getSiteTitle() ?>
	<?php }else{ ?>
	Mobile XE
	<?php } ?>
	</a></h1>
	<?php if($__Context->layout_info->menu->main_menu->menu_srl){ ?>
		<?php if($__Context->act=='dispMenuMenu'){ ?>
		<div class="fr"><button type="button" class="muon" onclick="history.back()"><?php echo $__Context->lang->cmd_back ?></button></div>
		<?php }else{ ?>
		<div class="fr"><a href="<?php echo getUrl('act','dispMenuMenu','menu_srl',$__Context->layout_info->menu->main_menu->menu_srl) ?>" class="mu">Menu</a></div>
		<?php } ?>
	<?php } ?>
</div>
<?php echo $__Context->content ?>
<ul class="ft">
	<?php if($__Context->is_logged){ ?>
	<li class="fl"><a href="<?php echo getUrl('act','dispMemberLogout') ?>"><?php echo $__Context->lang->cmd_logout ?></a></li>
	<li class="fl"><a href="<?php echo getUrl('act', 'dispMemberInfo') ?>"><?php echo $__Context->lang->cmd_view_member_info ?></a></li>
	<?php }elseif($__Context->act!='dispMemberLoginForm'){ ?>
	<li class="fl"><a href="<?php echo getUrl('act','dispMemberLoginForm') ?>"><?php echo $__Context->lang->cmd_login ?>...</a></li>
	<?php } ?>
	<li class="fr"><a href="<?php echo getUrl('m',0) ?>">PC</a></li>
	<?php if(count($__Context->lang_supported)>1){ ?><li class="fr"><a href="<?php echo getUrl('act','dispModuleChangeLang','oldact',$__Context->act) ?>">LANG</a></li><?php } ?>
</ul>
<p class="cr"><?php echo $__Context->layout_info->index_title;
if(!$__Context->layout_info->index_title){;
echo Context::getSiteTitle();
} ?></p>
