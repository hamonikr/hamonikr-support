<?php if(!defined("__XE__"))exit;
if($__Context->skin_info->colorset&&count($__Context->skin_info->colorset))foreach($__Context->skin_info->colorset as $__Context->key => $__Context->val){ ?>
    <?php if($__Context->val->screenshot){ ?>
        <?php  $__Context->_img_info = getImageSize($__Context->val->screenshot); $__Context->_height = $__Context->_img_info[1]+40; $__Context->_width = $__Context->_img_info[0]+20; $__Context->_talign = "center";  ?>
    <?php }else{ ?>
        <?php  $__Context->_width = 200; $__Context->_height = 20; $__Context->_talign = "left";  ?>
    <?php } ?>
<div style="display:inline-block;*display:inline;*zoom:1;text-align:<?php echo escape($__Context->_talign, false) ?>;width:<?php echo escape($__Context->_width, false) ?>px;margin-right:10px;">
    <label for="colorset_<?php echo escape($__Context->key, false) ?>" class="x_inline">
		<input type="radio" name="colorset" value="<?php echo escape($__Context->val->name, false) ?>" id="colorset_<?php echo escape($__Context->key, false) ?>" <?php if($__Context->config->colorset==$__Context->val->name){ ?>checked="checked"<?php } ?>/>  
    	<?php echo escape($__Context->val->title, false) ?>
	</label>
    <?php if($__Context->val->screenshot){ ?>
    <br />
    <img src="/<?php echo escape($__Context->val->screenshot, false) ?>" alt="<?php echo escape($__Context->val->title, false) ?>" style="border:1px solid #888888;padding:2px;margin:2px;"/>
    <?php } ?>
</div>
<?php } ?>
