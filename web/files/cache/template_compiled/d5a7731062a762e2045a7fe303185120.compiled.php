<?php if(!defined("__XE__"))exit;?>
<!--#Meta:modules/nproduct/skins/shopping/css/style.css--><?php $__tmp=array('modules/nproduct/skins/shopping/css/style.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/nproduct/skins/shopping/css/_style.list.css--><?php $__tmp=array('modules/nproduct/skins/shopping/css/_style.list.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<style>
#itemlist .item-table .btsbtn.default_btn { color: white; padding: 5px; width: 60px; }
</style>
<table class="item-table" width="100%">
	<thead>
		<tr>
			<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->k=>$__Context->v){ ?><th<?php if($__Context->k=='title'){ ?> class="item_name"<?php } ?>><?php echo $__Context->v->name ?></th><?php } ?>
		</tr>
	</thead>
	<tbody>
		<?php if($__Context->list&&count($__Context->list))foreach($__Context->list as $__Context->no=>$__Context->val){ ?><tr id="item_<?php echo $__Context->val->item_srl ?>">
			<?php if($__Context->list_config&&count($__Context->list_config))foreach($__Context->list_config as $__Context->k=>$__Context->v){ ?>
			<?php if($__Context->k == 'checkbox'){ ?><td><input type="checkbox" name="cart" value="<?php echo $__Context->val->item_srl ?>" /></td><?php } ?>
			<?php if($__Context->k == 'image'){ ?><td><a href="<?php echo getUrl('mid',$__Context->mid,'document_srl',$__Context->val->document_srl,'act','') ?>"><img src="<?php echo $__Context->val->getThumbnail($__Context->module_info->list_thumbnail_width,$__Context->module_info->list_thumbnail_height,$__Context->module_info->list_thumbnail_type) ?>" /></a></td><?php } ?>
			<?php if($__Context->v->type == 'title'){ ?><td class="item_name">
				<p><a href="<?php echo getUrl('mid',$__Context->mid,'document_srl',$__Context->val->document_srl,'act','') ?>"><?php echo $__Context->val->item_name ?></a></p>
			</td><?php } ?><!-- name -->
			<?php if($__Context->k == 'quantity'){ ?><td>
				<div class="item_num">
					<?php echo $__Context->lang->quantity ?>
					<span class="num">
						<input type="text" id="quantity_<?php echo $__Context->val->item_srl ?>" class="quantity" value="1" />
						<span class="iconUp" data-for="quantity_<?php echo $__Context->val->item_srl ?>"></span>
						<span class="iconDown" data-for="quantity_<?php echo $__Context->val->item_srl ?>"></span>
					</span>
				</div>
			</td><?php } ?>
			<?php if(!$__Context->val->discount_amount && $__Context->k == 'amount'){ ?><td><span class="item_price"><?php echo $__Context->val->printPrice() ?></span></td><?php } ?>
			<?php if($__Context->val->discount_amount && $__Context->k == 'amount'){ ?><td><span style="text-decoration:line-through;"><?php echo nproductItem::formatMoney($__Context->val->price) ?></span><br /><span class="font_size12"><strong><?php echo $__Context->val->printDiscountedPrice($__Context->val) ?></strong></span></td><?php } ?>
			<?php if($__Context->k == 'cart_buttons'){ ?><td>
				<!--<a href="#" class="small <?php echo $__Context->btn_color ?> nuribtn" onclick="addItemsToCart(<?php echo $__Context->val->item_srl ?>); return false;"><?php echo $__Context->lang->cmd_cart ?></a>-->
				<a href="#" class="btsbtn default_btn" onclick="addItemsToCart(<?php echo $__Context->val->item_srl ?>); return false;"><?php echo $__Context->lang->cmd_cart ?></a>
				<a href="#" class="small light nuribtn" onclick="addItemsToFavorites(<?php echo $__Context->val->item_srl ?>); return false;"><?php echo $__Context->lang->cmd_favorites ?></a>
			</td><?php } ?>
			<?php if($__Context->k == 'sales_count'){ ?><td><?php echo $__Context->val->sales_count ?></td><?php } ?>
			<?php if($__Context->v->idx > -1){ ?><td><?php echo $__Context->val->getExtraVarValue($__Context->k) ?></td><?php } ?>
			<?php } ?>
		</tr><?php } ?>
		<?php if(!count($__Context->list)){ ?><tr>
			<td colspan="8"><?php echo $__Context->lang->msg_no_items ?></td>
		</tr><?php } ?>
	</tbody>
</table>
