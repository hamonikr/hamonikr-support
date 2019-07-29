<?php if(!defined("__XE__"))exit;?><!--#Meta:widgets/category_menu/skins/admin/css/megamenu.css--><?php $__tmp=array('widgets/category_menu/skins/admin/css/megamenu.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:widgets/category_menu/skins/admin/js/megamenu.js--><?php $__tmp=array('widgets/category_menu/skins/admin/js/megamenu.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<script>
	jQuery("#menu").megaMenu('hover_fade');
</script>
<div>
<div id="menu_container" class="menu_blue" style="position:absolute;">
	<!-- depth 1 -->
    <ul id="menu">
        <?php if($__Context->category_tree['f']&&count($__Context->category_tree['f']))foreach($__Context->category_tree['f'] as $__Context->no=>$__Context->val){ ?><li>
            <a class="drop" href="<?php echo getUrl('category',$__Context->category_index[$__Context->no]->node_id) ?>"><span class="depth1"><?php echo $__Context->category_index[$__Context->no]->category_name ?></span></a>
			<!-- depth 2 -->
			<div class="fullwidth">
				<?php if(count($__Context->val)){;
if($__Context->val&&count($__Context->val))foreach($__Context->val as $__Context->no2=>$__Context->val2){ ?><div class="col_2">
						<a href="<?php echo getUrl('category',$__Context->category_index[$__Context->no2]->node_id) ?>"><h5 class="depth2"><?php echo $__Context->category_index[$__Context->no2]->category_name ?></h5></a>
						<!-- depth 3 -->
						<?php if(count($__Context->val2)){ ?><ul>
							<?php if($__Context->val2&&count($__Context->val2))foreach($__Context->val2 as $__Context->no3=>$__Context->val3){ ?><li>
								<a href="<?php echo getUrl('category',$__Context->category_index[$__Context->no3]->node_id) ?>"><span class="depth3"><?php echo $__Context->category_index[$__Context->no3]->category_name ?></span></a>
								<!-- depth 4 -->
								<?php if(count($__Context->val3)){ ?><ul>
									<?php if($__Context->val3&&count($__Context->val3))foreach($__Context->val3 as $__Context->no4=>$__Context->val4){ ?><li>
										<a href="<?php echo getUrl('category',$__Context->category_index[$__Context->no4]->node_id) ?>"><?php echo $__Context->category_index[$__Context->no4]->category_name ?></a>
									</li><?php } ?>
								</ul><?php } ?>
							</li><?php } ?>
						</ul><?php } ?>
				</div><?php }} ?>
			</div>
        </li><?php } ?>
    </ul>
</div>
</div>
