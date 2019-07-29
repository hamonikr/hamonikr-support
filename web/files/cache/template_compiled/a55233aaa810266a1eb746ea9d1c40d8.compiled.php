<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/nproduct/tpl/css/categorylist.css--><?php $__tmp=array('modules/nproduct/tpl/css/categorylist.css','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<div class="category-list totalcorners">
    <ul>
        <?php if($__Context->category_tree['f']&&count($__Context->category_tree['f']))foreach($__Context->category_tree['f'] as $__Context->no=>$__Context->val){ ?><li class="depth1">
            <a href="<?php echo getUrl('category',$__Context->category_index[$__Context->no]->node_id) ?>"<?php if($__Context->category_index[$__Context->no]->node_id==$__Context->category){ ?> class="active"<?php } ?>><span class="depth1"><?php echo $__Context->category_index[$__Context->no]->category_name ?></span></a>
            <?php if(count($__Context->val)){ ?><ul>
                <?php if($__Context->val&&count($__Context->val))foreach($__Context->val as $__Context->no2=>$__Context->val2){ ?><li class="depth2">
                    <a href="<?php echo getUrl('category',$__Context->category_index[$__Context->no2]->node_id) ?>"<?php if($__Context->category_index[$__Context->no2]->node_id==$__Context->category){ ?> class="active"<?php } ?>><span class="depth2"><?php echo $__Context->category_index[$__Context->no2]->category_name ?></span></a>
                    <?php if(count($__Context->val2)){ ?><ul>
                        <?php if($__Context->val2&&count($__Context->val2))foreach($__Context->val2 as $__Context->no3=>$__Context->val3){ ?><li class="depth3">
                            <a href="<?php echo getUrl('category',$__Context->category_index[$__Context->no3]->node_id) ?>"<?php if($__Context->category_index[$__Context->no3]->node_id==$__Context->category){ ?> class="active"<?php } ?>><span class="depth3"><?php echo $__Context->category_index[$__Context->no3]->category_name ?></span></a>
                            <?php if(count($__Context->val3)){ ?><ul>
                                <?php if($__Context->val3&&count($__Context->val3))foreach($__Context->val3 as $__Context->no4=>$__Context->val4){ ?><li class="depth4">
                                    <a href="<?php echo getUrl('category',$__Context->category_index[$__Context->no4]->node_id) ?>"<?php if($__Context->category_index[$__Context->no4]->node_id==$__Context->category){ ?> class="active"<?php } ?>><?php echo $__Context->category_index[$__Context->no4]->category_name ?></a>
                                </li><?php } ?>
                            </ul><?php } ?>
                        </li><?php } ?>
                    </ul><?php } ?>
                </li><?php } ?>
            </ul><?php } ?>
        </li><?php } ?>
    </ul>
</div>
