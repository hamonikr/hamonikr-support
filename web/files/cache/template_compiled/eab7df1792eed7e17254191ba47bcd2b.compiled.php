<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/ncart/tpl/js/modinstlist.js--><?php $__tmp=array('modules/ncart/tpl/js/modinstlist.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/ncart/tpl','_header.html') ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
<p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<!-- 목록 -->
<form action="./" method="get" onsubmit="return doChangeCategory(this);" id="fo_list"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
<table class="x_table">
<thead>
    <tr>
        <th scope="col"><div><?php echo $__Context->lang->no ?></div></th>
        <th scope="col" class="half_wide"><div><?php echo $__Context->lang->mid ?></div></th>
        <th scope="col" class="half_wide"><div><?php echo $__Context->lang->browser_title ?></div></th>
        <th scope="col"><div><?php echo $__Context->lang->regdate ?></div></th>
		<th scope="col"><?php echo $__Context->lang->cmd_management ?></th>
		<th scope="col"><?php echo $__Context->lang->cmd_delete ?></th>
    </tr>
</thead>
<tbody>
    <?php if($__Context->store_list&&count($__Context->store_list))foreach($__Context->store_list as $__Context->no => $__Context->val){ ?>
    <tr>
        <td class="center number"><?php echo $__Context->no+1 ?></td>
        <td><?php echo htmlspecialchars($__Context->val->mid) ?></td>
        <td><a href="<?php echo getSiteUrl($__Context->val->domain,'','mid',$__Context->val->mid) ?>" onclick="window.open(this.href); return false;"><?php echo $__Context->val->browser_title ?></a></td>
        <td><?php echo zdate($__Context->val->regdate,"Y-m-d") ?></td>
        <td><a href="<?php echo getUrl('act','dispNcartAdminInsertModInst','module_srl',$__Context->val->module_srl) ?>"><span><?php echo $__Context->lang->cmd_management ?></span></a></td>
        <td><a href="#deleteInstance" class="modalAnchor deleteInstance" data-module-srl="<?php echo $__Context->val->module_srl ?>"><span><?php echo $__Context->lang->cmd_delete ?></span></a></td>
    </tr>
    <?php } ?>
</tbody>
</table>
</form>
<div class="x_clearfix">
	<a href="<?php echo getUrl('act','dispNcartAdminInsertModInst','module_srl','') ?>" class="x_btn"><?php echo $__Context->lang->cmd_make ?></a>
</div>
<!-- 페이지 네비게이션 -->
<?php if(0){ ?><div class="pagination a1">
    <a href="<?php echo getUrl('page','','module_srl','') ?>" class="prevEnd"><?php echo $__Context->lang->first_page ?></a> 
    <?php while($__Context->page_no = $__Context->page_navigation->getNextPage()){ ?>
        <?php if($__Context->page == $__Context->page_no){ ?>
            <strong><?php echo $__Context->page_no ?></strong> 
        <?php }else{ ?>
            <a href="<?php echo getUrl('page',$__Context->page_no,'module_srl','') ?>"><?php echo $__Context->page_no ?></a> 
        <?php } ?>
    <?php } ?>
    <a href="<?php echo getUrl('page',$__Context->page_navigation->last_page,'module_srl','') ?>" class="nextEnd"><?php echo $__Context->lang->last_page ?></a>
</div><?php } ?>
<div class="x_modal" id="deleteInstance">
	<form action="./" class="fg form" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
		<input type="hidden" name="act" value="procNcartAdminDeleteModInst" />
		<div id="deleteForm">
		</div>
	</form>
</div>
