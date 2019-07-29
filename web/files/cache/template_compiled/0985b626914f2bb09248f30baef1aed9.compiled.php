<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/epay/tpl','header.html') ?>
<!--#Meta:modules/epay/tpl/js/epaylist.js--><?php $__tmp=array('modules/epay/tpl/js/epaylist.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE){ ?><div class="message <?php echo $__Context->XE_VALIDATOR_MESSAGE_TYPE ?>">
        <p><?php echo $__Context->XE_VALIDATOR_MESSAGE ?></p>
</div><?php } ?>
<!-- 정보 -->
<div class="summary">
</div>
<!-- 목록 -->
<form action="./" class="x_input-append" method="get" onsubmit="return doChangeCategory(this);" id="fo_list"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
	<div>
		<input type="hidden" name="module" value="<?php echo $__Context->module ?>" />
		<input type="hidden" name="act" value="<?php echo $__Context->act ?>" />
		<select name="module_category_srl">
		    <option value=""><?php echo $__Context->lang->module_category ?></option>
		    <option value="0" <?php if($__Context->module_category_srl==="0"){ ?>selected="selected"<?php } ?>><?php echo $__Context->lang->not_exists ?></option>
		    <?php if($__Context->module_category&&count($__Context->module_category))foreach($__Context->module_category as $__Context->key => $__Context->val){ ?>
		    <option value="<?php echo $__Context->key ?>" <?php if($__Context->module_category_srl==$__Context->key){ ?>selected="selected"<?php } ?>><?php echo $__Context->val->title ?></option>
		    <?php } ?>
		    <option value="">---------</option>
		    <option value="-1"><?php echo $__Context->lang->cmd_management ?></option>
		</select>
		<input type="submit" name="go_button" id="go_button" value="GO" class="x_btn x_btn-inverse buttonTypeGo" />
	</div>
</form>
<table class="x_table x_table-striped x_table-hover">
	<caption style="text-align:left; margin-bottom:10px;">Total <?php echo number_format($__Context->total_count) ?>, Page <?php echo number_format($__Context->page) ?>/<?php echo number_format($__Context->total_page) ?></caption>  
	<thead>
	    <tr>
		<th scope="col"><div><?php echo $__Context->lang->no ?></div></th>
		<th scope="col" class="nowr"><?php echo $__Context->lang->module_category ?></th>
		<th scope="col" class="half_wide"><div><?php echo $__Context->lang->mid ?></div></th>
		<th scope="col" class="half_wide"><div><?php echo $__Context->lang->browser_title ?></div></th>
		<th scope="col"><?php echo $__Context->lang->regdate ?></th>
		<th scope="col"><?php echo $__Context->lang->cmd_setup ?></th>
		<th scope="col"><?php echo $__Context->lang->cmd_copy ?></th>
		<th scope="col"><?php echo $__Context->lang->cmd_delete ?></th>
	    </tr>
	</thead>
	<tbody>
	    <?php if($__Context->epay_list&&count($__Context->epay_list))foreach($__Context->epay_list as $__Context->no => $__Context->val){ ?>
	    <tr>
		<td class="center number"><?php echo $__Context->no ?></td>
		<td>
		    <?php if(!$__Context->val->module_category_srl){ ?>
			<?php if($__Context->val->site_srl){ ?>
			<?php echo $__Context->lang->virtual_site ?>
			<?php }else{ ?>
			<?php echo $__Context->lang->not_exists ?>
			<?php } ?>
		    <?php }else{ ?>
			<?php echo $__Context->module_category[$__Context->val->module_category_srl]->title ?>
		    <?php } ?>
		</td>
		<td><?php echo htmlspecialchars($__Context->val->mid) ?></td>
		<td><a href="<?php echo getUrl('','module','epay','act','dispEpayTransaction','mid',$__Context->val->mid) ?>" onclick="window.open(this.href); return false;"><?php echo $__Context->val->browser_title ?></a></td>
		<td><?php echo zdate($__Context->val->regdate,"Y-m-d") ?></td>
		<td><a href="<?php echo getUrl('act','dispEpayAdminInsertEpay','module_srl',$__Context->val->module_srl) ?>" class="buttonSet buttonSetting"><span><?php echo $__Context->lang->cmd_setup ?></span></a></td>
		<td><a href="<?php echo getUrl('','module','module','act','dispModuleAdminCopyModule','module_srl',$__Context->val->module_srl) ?>" onclick="popopen(this.href);return false;" class="buttonSet buttonCopy"><span><?php echo $__Context->lang->cmd_copy ?></span></a></td>
		<td><a href="#deleteInstance" class="modalAnchor deleteInstance" data-module-srl="<?php echo $__Context->val->module_srl ?>"><span><?php echo $__Context->lang->cmd_delete ?></span></a></td>
	    </tr>
	    <?php } ?>
	</tbody>
</table>
<div class="x_btn-group x_pull-right">
	<a href="<?php echo getUrl('act','dispEpayAdminInsertEpay','module_srl','') ?>" class="x_btn"><span><?php echo $__Context->lang->cmd_make ?></span></a>
</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/epay/tpl','_page_navigation.html') ?>
<!-- 페이지 네비게이션 -->
<?php if(0){ ?><div class="x_clearfix">
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
                <input type="hidden" name="module" value="cympusadmin" />
                <input type="hidden" name="act" value="procEpayAdminDeleteModInst" />
                <div id="deleteForm">
                </div>
        </form>
</div>
