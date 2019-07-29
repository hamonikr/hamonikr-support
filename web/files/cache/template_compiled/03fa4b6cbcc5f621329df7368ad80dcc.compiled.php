<?php if(!defined("__XE__"))exit;?><meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, user-scalable=yes" />
<div class="x">
<p class="skipNav"><a href="#content"><?php echo $__Context->lang->skip_to_content ?></a></p>
	<header class="header">
		<h1>
			<a href="<?php echo escape(getUrl('','module','admin'), false) ?>"><img src="<?php echo escape(getUrl(''), false);
echo escape($__Context->gnb_title_info->adminLogo, false) ?>" alt="<?php echo escape($__Context->gnb_title_info->adminTitle, false) ?>" /> <?php echo escape($__Context->gnb_title_info->adminTitle, false) ?></a>
		</h1>
		<p class="site"><a href="<?php echo escape(getFullUrl(''), false) ?>"><?php echo escape($__Context->xe_default_url, false) ?></a></p>
		<div class="account">
			<ul>
				<li><a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispMemberAdminInfo', 'is_admin', 'Y', 'member_srl', $__Context->logged_info->member_srl), false) ?>"><?php echo escape($__Context->logged_info->email_address, false) ?></a></li>
				<li><a href="<?php echo escape(getUrl('', 'module','admin','act','procAdminLogout'), false) ?>"><?php echo $__Context->lang->cmd_logout ?></a></li>
				<li><a href="#lang" class="lang" data-toggle><?php echo escape($__Context->lang_supported[$__Context->lang_type], false) ?></a>
					<ul id="lang" class="x_dropdown-menu">
						<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key=>$__Context->val){ ?><li<?php if($__Context->key==$__Context->lang_type){ ?> class="x_active"<?php } ?>><a href="<?php echo escape(getUrl('l',$__Context->key), false) ?>" data-langcode="<?php echo escape($__Context->key, false) ?>" onclick="doChangeLangType('<?php echo escape($__Context->key, false) ?>'); return false;"><?php echo escape($__Context->val, false) ?></a></li><?php } ?>
					</ul>
				</li>
			</ul>
		</div>
	</header>
	<!-- BODY -->
	<div class="body <?php if($__Context->_COOKIE['__xe_admin_gnb_status'] == 'close'){ ?>wide<?php } ?>">
		<!-- GNB -->
		<nav class="gnb <?php if($__Context->_COOKIE['__xe_admin_gnb_status'] == 'open'){ ?>open<?php } ?>" id="gnb">
			<a href="#gnbNav"><i class="x_icon-align-justify x_icon-white"></i><b></b> Menu Open/Close</a>
			<ul id="gnbNav" class="ex">
			<script>
				var __xe_admin_gnb_txs = new Array();
			</script>
			<?php if($__Context->gnbUrlList&&count($__Context->gnbUrlList))foreach($__Context->gnbUrlList AS $__Context->key=>$__Context->value){ ?>
				<?php if(strstr($__Context->value['menu_name_key'], 'configuration')){ ?>
				<li<?php if($__Context->_COOKIE['__xe_admin_gnb_tx_favorite'] == 'open'){ ?> class="open"<?php } ?>>
					<script>
						__xe_admin_gnb_txs.push('__xe_admin_gnb_tx_favorite');
					</script>
					<a href="#favorite" data-href="favorite" title="<?php echo $__Context->lang->favorite ?>"><span class="tx"><?php echo $__Context->lang->favorite ?></span></a>
					<ul id="favorite"<?php if($__Context->_COOKIE['__xe_admin_gnb_tx_favorite'] == 'open'){ ?> style="display:block"<?php } ?>>
						<?php if($__Context->favorite_list&&count($__Context->favorite_list))foreach($__Context->favorite_list as $__Context->favorite){ ?><li>
							<?php if($__Context->favorite->title){ ?><a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', $__Context->favorite->admin_index_act), false) ?>" title="<?php echo escape($__Context->favorite->title, false) ?>"><?php echo escape($__Context->favorite->title, false) ?></a><?php } ?>
							<?php if(!$__Context->favorite->title){ ?><a><?php echo $__Context->lang->msg_not_founded ?></a><?php } ?>
							<form class="remove" action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
								<input type="hidden" name="module" value="admin" />
								<input type="hidden" name="act" value="procAdminToggleFavorite" />
								<input type="hidden" name="site_srl" value="0" />
								<input type="hidden" name="module_name" value="<?php echo escape($__Context->favorite->module, false) ?>" />
								<input type="hidden" name="success_return_url" value="<?php echo escape(getUrl('', 'module', 'admin'), false) ?>" />
								<button type="submit" class="x_close" title="<?php echo $__Context->lang->cmd_delete ?>">&times;</button>
							</form>
						</li><?php } ?>
						<?php if(!is_array($__Context->favorite_list) || count($__Context->favorite_list) < 1){ ?><li><a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispModuleAdminContent'), false) ?>"><?php echo $__Context->lang->no_data ?></a></li><?php } ?>
					</ul>
				</li>
				<?php } ?>
				<li class="<?php if($__Context->parentSrl==$__Context->key || $__Context->value['href']=='index.php?module=admin' && !$__Context->mid && !$__Context->act){ ?>active open<?php }elseif($__Context->_COOKIE['__xe_admin_gnb_tx_' . md5($__Context->value['href'])] == 'open'){ ?>open<?php } ?>">
					<script>
						__xe_admin_gnb_txs.push('<?php echo escape('__xe_admin_gnb_tx_' . md5($__Context->value['href']), false) ?>');
					</script>
					<a href="<?php echo escape(getFullUrl(''), false);
echo escape($__Context->value['href'], false) ?>" data-href="<?php echo escape(md5($__Context->value['href']), false) ?>" title="<?php echo escape($__Context->value['text'], false) ?>"><span class="tx"><?php echo escape($__Context->value['text'], false) ?></span></a>
					<?php if(count($__Context->value['list'])){ ?><ul<?php if($__Context->_COOKIE['__xe_admin_gnb_tx_' . md5($__Context->value['href'])] == 'open'){ ?> style="display:block"<?php } ?>>
						<?php if($__Context->value['list']&&count($__Context->value['list']))foreach($__Context->value['list'] as $__Context->key2=>$__Context->value2){;
if($__Context->value2['text']!=''){ ?><li<?php if($__Context->value2['text'] == $__Context->subMenuTitle){ ?> class="active_"<?php } ?> ><a href="<?php echo escape(getFullUrl(''), false);
echo $__Context->value2['href'] ?>" title="<?php echo escape($__Context->value2['text'], false) ?>"><?php echo escape($__Context->value2['text'], false) ?></a></li><?php }} ?>
					</ul><?php } ?>
				</li>
			<?php } ?>
			</ul>
		</nav>
		<!-- /GNB -->
