<?php if(!defined("__XE__"))exit;?><div class="x_clearfix">
        <?php if($__Context->page_navigation){ ?><form action="./" class="x_pagination x_pull-left"  style="margin-top:0"><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
                <?php 
                        $__Context->urlInfo = parse_url(getRequestUriByServerEnviroment());
                        parse_str($__Context->urlInfo['query'], $__Context->param);
                 ?>
                <?php if($__Context->param&&count($__Context->param))foreach($__Context->param as $__Context->key=>$__Context->val){;
if(!in_array($__Context->key, array('mid', 'vid', 'act'))){ ?><input type="hidden" name="<?php echo $__Context->key ?>" value="<?php echo $__Context->val ?>" /><?php }} ?>
                <ul>
                        <li<?php if(!$__Context->page || $__Context->page == 1){ ?> class="x_disabled"<?php } ?>><a href="<?php echo getUrl('page', '') ?>">&laquo; <?php echo $__Context->lang->first_page ?></a></li>
                        <?php if($__Context->page_navigation->first_page != 1 && $__Context->page_navigation->first_page + $__Context->page_navigation->page_count > $__Context->page_navigation->last_page - 1 && $__Context->page_navigation->page_count != $__Context->page_navigation->total_page){ ?>
                        <?php $__Context->isGoTo = true ?>
                        <li>
                                <a href="#goTo" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
                                <?php if($__Context->isGoTo){ ?><span id="goTo" class="x_input-append">
                                        <input type="number" min="1" max="<?php echo $__Context->page_navigation->last_page ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
                                        <button type="submit" class="x_add-on">Go</button>
                                </span><?php } ?>
                        </li>
                        <?php } ?>
                        <?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
                        <?php $__Context->last_page = $__Context->page_no ?>
                        <li<?php if($__Context->page_no == $__Context->page){ ?> class="x_active"<?php } ?>><a  href="<?php echo getUrl('page', $__Context->page_no) ?>"><?php echo $__Context->page_no ?></a></li>
                        <?php } ?>
                        <?php if($__Context->last_page != $__Context->page_navigation->last_page && $__Context->last_page + 1 != $__Context->page_navigation->last_page){ ?>
                        <?php $__Context->isGoTo = true ?>
                        <li>
                                <a href="#goTo" data-toggle title="<?php echo $__Context->lang->cmd_go_to_page ?>">&hellip;</a>
                                <?php if($__Context->isGoTo){ ?><span id="goTo" class="x_input-append">
                                        <input type="number" min="1" max="<?php echo $__Context->page_navigation->last_page ?>" required name="page" title="<?php echo $__Context->lang->cmd_go_to_page ?>" />
                                        <button type="submit" class="x_add-on">Go</button>
                                </span><?php } ?>
                        </li>
                        <?php } ?>
                        <li<?php if($__Context->page == $__Context->page_navigation->last_page){ ?> class="x_disabled"<?php } ?>><a href="<?php echo getUrl('page', $__Context->page_navigation->last_page) ?>" title="<?php echo $__Context->page_navigation->last_page ?>"><?php echo $__Context->lang->last_page ?> &raquo;</a></li>
                </ul>
        </form><?php } ?>
</div>
