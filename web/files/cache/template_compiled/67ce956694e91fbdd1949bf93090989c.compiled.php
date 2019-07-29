<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','header.html') ?>
<div id="body">
	<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','progress_menu.html') ?>
	<div id="content">
		<ul>
			<?php if($__Context->checklist&&count($__Context->checklist))foreach($__Context->checklist as $__Context->key=>$__Context->val){;
if(!$__Context->val){ ?><li>
				<?php  $__Context->isDisable = TRUE ?>
				<strong><?php echo $__Context->lang->install_checklist_title[$__Context->key];
if($__Context->key == 'php_version'){ ?>(Ver. <?php echo escape($__Context->phpversion, false) ?>)<?php } ?></strong>
				:
				<em><i class="x_icon-ban-circle x_icon-white"></i> <?php echo $__Context->lang->disable ?></em>
				<p><?php echo escape(sprintf($__Context->lang->install_checklist_desc[$__Context->key], __XE_MIN_PHP_VERSION__), false) ?></p>
				<?php if($__Context->key == 'php_version' && $__Context->phpversion_warning === true){ ?><p>
					<?php echo escape(sprintf($__Context->lang->install_checklist_desc['php_version_warning'], __XE_RECOMMEND_PHP_VERSION__), false) ?> <a href="http://php.net/supported-versions.php" target="_blank">[<?php echo $__Context->lang->more ?>]</a>
				</p><?php } ?>
			</li><?php }} ?>
		</ul>
		<?php if(!$__Context->isDisable){ ?><div>
			<p>
				<i class="x_icon-ok-sign x_icon-white"></i>
				<strong>XE <?php echo escape(__XE_VERSION__, false) ?></strong> <?php echo $__Context->lang->install_condition_enable ?>
			</p>
			<ul id="details">
				<?php if($__Context->checklist&&count($__Context->checklist))foreach($__Context->checklist as $__Context->key=>$__Context->val){ ?><li>
					<strong><?php echo $__Context->lang->install_checklist_title[$__Context->key];
if($__Context->key == 'php_version'){ ?>(Ver. <?php echo escape($__Context->phpversion, false) ?>)<?php } ?></strong>
					:
					<em><?php echo $__Context->lang->enable ?></em>
					<?php if($__Context->key == 'php_version' && $__Context->phpversion_warning === true){ ?><p>
						<?php echo escape(sprintf($__Context->lang->install_checklist_desc['php_version_warning'], __XE_RECOMMEND_PHP_VERSION__), false) ?> <a href="http://php.net/supported-versions.php" target="_blank">[<?php echo $__Context->lang->more ?>]</a>
					</p><?php } ?>
				</li><?php } ?>
			</ul>
		</div><?php } ?>
		<?php if($__Context->use_rewrite == 'N' && $__Context->checklist['permission'] == true){ ?><div>
			<p>
				<i class="x_icon-ok-sign x_icon-white"></i>
				<?php echo $__Context->lang->disable_rewrite ?>
				<?php if($__Context->use_nginx == 'Y'){ ?><br> <?php echo $__Context->lang->about_nginx_rewrite;
} ?>
			</p>
		</div><?php } ?>
		<div class="ibtnArea">
			<span class="x_pull-left">
				<a href="<?php echo escape(getUrl('', 'act','dispInstallLicenseAgreement'), false) ?>" class="x_btn x_btn-small x_btn-inverse"><i class="x_icon-chevron-left x_icon-white"></i> <?php echo $__Context->lang->cmd_back ?></a>
			</span>
			<span class="x_pull-right">
				<?php if($__Context->install_enable){ ?><a class="x_btn x_btn-small x_btn-inverse" id="task-checklist-confirm" href="<?php echo escape(getUrl('','act','dispInstallSelectDB'), false) ?>"><?php echo $__Context->lang->cmd_install_next ?> <i class="x_icon-chevron-right x_icon-white"></i></a><?php } ?>
				<?php if(!$__Context->install_enable){ ?><a class="x_btn x_btn-small x_btn-inverse" id="task-checklist-fix" href="<?php echo escape(getUrl('','act',$__Context->act), false) ?>"><?php echo $__Context->lang->cmd_install_fix_checklist ?> <i class="x_icon-chevron-right x_icon-white"></i></a><?php } ?>
			</span>
		</div>
	</div>
<?php $__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/install/tpl','footer.html') ?>
