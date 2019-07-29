<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/cympusadmin/skins/default/css/style.css--><?php $__tmp=array('modules/cympusadmin/skins/default/css/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/cympusadmin/skins/default/css/default.css--><?php $__tmp=array('modules/cympusadmin/skins/default/css/default.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/cympusadmin/skins/default/js/toggle.js--><?php $__tmp=array('modules/cympusadmin/skins/default/js/toggle.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/cympusadmin/skins/default/js/updatenews.js--><?php $__tmp=array('modules/cympusadmin/skins/default/js/updatenews.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__Context->oElearningClass = getClass('elearning') ?>
<div id="admin_wrap">
	<div class="left_panel">
		<h1><a href="<?php echo getUrl('','module','cympusadmin') ?>"><?php echo $__Context->lang->title_admin ?></a></h1>
		<div class="date">
			<?php echo date("Y-m-d",time()) ?>
			<?php $__Context->numofweekday = date("w",time()) ?>
			<?php $__Context->weekdays = array('0'=>$__Context->lang->sunday,'1'=>$__Context->lang->monday,'2'=>$__Context->lang->tuesday,'3'=>$__Context->lang->wednesday,'4'=>$__Context->lang->thursday,'5'=>$__Context->lang->friday,'6'=>$__Context->lang->saturday) ?>
			<?php echo $__Context->weekdays[$__Context->numofweekday] ?>
		</div>
		<?php if(0){ ?><div class="capacity">
			<p class="capacity_box">
				<span>總計 20.0G / 16.5G 剩餘</span>
				<span class="graph"><span class="graph_inset"></span></span>
				<span>3% 使用</span>
			</p>
		</div><?php } ?>
		<!-- Menu -->
		<div class="sub_navi">
			<ul>
				<?php $__Context->idxno=1 ?>
				<?php if($__Context->cympusadmin_menu&&count($__Context->cympusadmin_menu))foreach($__Context->cympusadmin_menu as $__Context->key=>$__Context->val){ ?><li>
				<a<?php if(0){ ?> href="<?php echo getUrl('','module','cympusadmin','act',$__Context->val->action[0]) ?>"<?php } ?> onClick="toggleset('opqrst_sub_<?php echo $__Context->idxno ?>')" <?php if($__Context->val->selected){ ?> class="active"<?php } ?> title="<?php echo strip_tags($__Context->val->description) ?>"><?php if(!$__Context->val->selected){ ?><img src="/modules/cympusadmin/skins/default/img/menu_<?php echo $__Context->val->icon ?>.png" class="menu_img"/><?php };
if($__Context->val->selected){ ?><img src="/modules/cympusadmin/skins/default/img/menuover_<?php echo $__Context->val->icon ?>.png" class="menuover_img"><?php };
echo $__Context->val->title ?></a>
					<?php $__Context->idxno++ ?>
					<?php if($__Context->val->selected){;
$__Context->selected_submenu=$__Context->val;
} ?>
					<?php if($__Context->val->submenu){ ?><ul id="opqrst_sub" class="opqrst_sub_<?php echo $__Context->idxno - 1 ?>">
						<?php if($__Context->val->submenu&&count($__Context->val->submenu))foreach($__Context->val->submenu as $__Context->key2=>$__Context->val2){ ?><li>
							<?php if(!$__Context->val2->mid){;
$__Context->url = getUrl('','module','cympusadmin','act',$__Context->val2->action[0]);
} ?>
							<?php if($__Context->val2->mid){;
$__Context->url = getUrl('','mid',$__Context->val2->mid,'act',$__Context->val2->action[0]);
} ?>
							<a href="<?php echo $__Context->url ?>"<?php if($__Context->val2->selected){ ?> class="active"<?php } ?> title="<?php echo strip_tags($__Context->val2->description) ?>"><?php echo $__Context->val2->title ?></a>
							<?php if($__Context->val2->selected){;
$__Context->selected_submenu=$__Context->val2;
} ?>
						</li><?php } ?>
					</ul><?php } ?>
				</li><?php } ?>
			</ul>
		</div><!-- Menu -->
	</div><!-- left_panel -->
	<div class="right_panel">
		<div class="right_top">
			<?php if(!$__Context->oElearningClass){ ?><div class="updatenews">
				<div class="updatenews_obj">
					<div class="updatenews_box">
						<?php if($__Context->news&&count($__Context->news))foreach($__Context->news as $__Context->key=>$__Context->val){ ?><div>
							 <a class="updatenews_title" href="<?php echo $__Context->val->url ?>"><?php echo $__Context->val->title ?></a>
						 </div><?php } ?>
   					</div>
 		 		</div>
			</div><?php } ?>
		</div>
	</div>
	<div class="right_navi">
		<span>Home</span><?php if($__Context->cympusadmin_selected_menu){ ?><span> &gt <?php echo $__Context->cympusadmin_selected_menu->title ?></span><?php };
if($__Context->selected_submenu){ ?><span> &gt <?php echo $__Context->selected_submenu->title ?></span><?php } ?>
	</div>
	
	<!-- Content -->
	<div id="content" class="cympusadmin_content x">
	<?php echo $__Context->content ?>
	</div><!-- Content -->
	<div id="admin_footer">
		<div class="footer_left">
			CYMPUS ADMIN v<?php echo $__Context->cympus_modinfo->version ?> - <?php echo $__Context->cympus_modinfo->date ?>
		</div>
		<div class="footer_right">
			<a href="?module=admin" target="_blank" title="<?php echo $__Context->lang->about_dashboard ?>"><?php echo $__Context->lang->dashboard ?></a>
			<span class="footer_copy">Copyright  © <strong><a<?php if(!$__Context->oElearningClass){ ?> href="http://www.xeshoppingmall.com"<?php };
if($__Context->oElearningClass){ ?> href="<?php echo $__Context->lang->link_url ?>"<?php } ?> title="visiting NURIGO" target="_blank"><?php echo $__Context->lang->link_text ?></a></strong> all rights reserved.</span>
		</div>
	</div><!-- admin_footer -->
</div><!-- admin_wrap -->
