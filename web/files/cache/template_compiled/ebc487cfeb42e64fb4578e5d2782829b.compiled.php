<?php if(!defined("__XE__"))exit;?><!--#Meta:modules/install/tpl/js/install_admin.js--><?php $__tmp=array('modules/install/tpl/js/install_admin.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','header.html') ?>
	<div id="body">
		<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','progress_menu.html') ?>
		<div id="content">
			<ul class="language">
				<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->key=>$__Context->val){ ?><li>
					<?php if($__Context->l==$__Context->key){ ?><i class="x_icon-ok-sign x_icon-white" title="Selected Language"></i><?php } ?>
					<?php if($__Context->l!=$__Context->key){ ?><a href="<?php echo escape(getUrl('l', $__Context->key), false) ?>"><?php echo escape($__Context->val, false) ?></a><?php } ?>
					<?php if($__Context->l==$__Context->key){ ?><strong><?php echo escape($__Context->val, false) ?></strong><?php } ?>
				</li><?php } ?>
			</ul>
			<div class="ibtnArea">
				<span class="x_pull-right">
					<a href="<?php echo escape(getUrl('', 'act', 'dispInstallLicenseAgreement'), false) ?>" class="x_btn x_btn-small x_btn-inverse" id="task-choose-language"><?php echo $__Context->lang->cmd_next ?> <i class="x_icon-chevron-right x_icon-white"></i></a>
				</span>
			</div>
		</div>
	</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','footer.html') ?>
