<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/nproduct/skins/merryj/css/nu_btn.css--><?php $__tmp=array('modules/nproduct/skins/merryj/css/nu_btn.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/nproduct/skins/merryj/css/style.css--><?php $__tmp=array('modules/nproduct/skins/merryj/css/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/nproduct/skins/merryj/css/_style.list.css--><?php $__tmp=array('modules/nproduct/skins/merryj/css/_style.list.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
	
<div class="item-table">
	<?php if($__Context->list&&count($__Context->list))foreach($__Context->list as $__Context->no=>$__Context->val){ ?><div id="item_<?php echo $__Context->val->item_srl ?>" class="item_list">
		<div class="thumb_wrap">
			<a href="<?php echo getUrl('mid',$__Context->mid,'document_srl',$__Context->val->document_srl,'act','') ?>"><img src="<?php echo $__Context->val->getThumbnail($__Context->module_info->list_thumbnail_width,$__Context->module_info->list_thumbnail_height,$__Context->module_info->list_thumbnail_type) ?>" /></a>
		</div><!-- thumb_wrap -->
		<div class="item_center">
			<div class="item_name" >
				<p><a href="<?php echo getUrl('mid',$__Context->mid,'document_srl',$__Context->val->document_srl,'act','') ?>"><?php echo $__Context->val->item_name ?></a></p>
			</div><!-- name -->
			<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->k=>$__Context->v){ ?>
				<?php if($__Context->v->idx > -1 && $__Context->val->getExtraVarValue($__Context->k) != NULL){ ?><div class="extra"><?php echo $__Context->val->getExtraVarTitle($__Context->k) ?> : <?php echo $__Context->val->getExtraVarValue($__Context->k) ?></div><?php } ?>
			<?php } ?>
			<?php if(!$__Context->val->discount_amount){ ?><div class="price_box">
				<span class="item_price discount_price"><?php echo $__Context->val->printPrice() ?></span>
				<span class="star_score">
					회원평점 : 
					<span class="review-star">
						<?php for($__Context->i = 0; $__Context->i < 5; $__Context->i++){ ?>
							<?php if($__Context->i < $__Context->val->review->average){ ?><img src="/modules/nproduct/skins/merryj/img/starOn.gif" alt="" /><?php } ?>
							<?php if($__Context->i >= $__Context->val->review->average){ ?><img src="/modules/nproduct/skins/merryj/img/starOff.gif" alt="" /><?php } ?>
						<?php } ?>
					</span> | 리뷰 : (<?php echo $__Context->val->review->count ?>)
				</span>
			</div><?php } ?>
			<?php if($__Context->val->discount_amount){ ?><div class="discount_box">
				<span style="text-decoration:line-through; color:#999;"><?php echo nproductItem::formatMoney($__Context->val->price) ?></span>
				<span class="discount_price"><strong><?php echo $__Context->val->printDiscountedPrice() ?></strong></span>
			</div><?php } ?>
		</div><!-- item_center -->
		<div class="item_right">
			<div class="item_check">
				<input type="checkbox" name="cart" value="<?php echo $__Context->val->item_srl ?>" />
				<div class="item_num">
					<span class="item_area">
						<?php echo $__Context->lang->quantity ?>
					</span>
					<span class="num">
						<input type="text" id="quantity_<?php echo $__Context->val->item_srl ?>" class="quantity" value="1" />
						<span class="iconUp" data-for="quantity_<?php echo $__Context->val->item_srl ?>"></span>
						<span class="iconDown" data-for="quantity_<?php echo $__Context->val->item_srl ?>"></span>
					</span>
				</div>
			</div>
			<div class="btn_right">
				<a href="#" class="m_btn nu_skyblue btn_etc" onclick="direct_order(<?php echo $__Context->val->item_srl ?>, '<?php echo $__Context->module_info->ncart_mid ?>'); return false;"><span><?php echo $__Context->lang->cmd_direct_order ?></span></a>
				<a href="#" class="m_btn nu_gray" onclick="addItemsToCart(<?php echo $__Context->val->item_srl ?>); return false;"><?php echo $__Context->lang->cmd_cart ?></a>
				<a href="#" class="m_btn" onclick="addItemsToFavorites(<?php echo $__Context->val->item_srl ?>); return false;"><?php echo $__Context->lang->cmd_favorites ?></a>
			</div>
			<?php if($__Context->k == 'sales_count'){ ?><div class="sales">(<?php echo $__Context->lang->sales_count ?> : <?php echo $__Context->val->sales_count ?>)</div><?php } ?>
		</div><!-- item_right -->
	</div><?php } ?>
	<?php if(!count($__Context->list)){ ?><div>
		<div colspan="8"><?php echo $__Context->lang->msg_no_items ?></div>
	</div><?php } ?>
</div>
