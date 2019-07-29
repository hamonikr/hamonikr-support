<?php if(!defined("__XE__"))exit;?>	</div>
	<!-- /BODY -->
	<footer class="footer">
		<p class="power">
			Powered by <strong><a href="<?php echo escape(_XE_LOCATION_SITE_, false) ?>" target="_blank">XE</a></strong>. <span class="vr">|</span>  
			<strong>Your version</strong>: <?php echo escape(__XE_VERSION__, false) ?> <span class="vr">|</span> 
			<?php if(isset($__Context->latestVersion)){ ?><strong>Latest version</strong>: <a href="<?php echo htmlspecialchars(html_entity_decode($__Context->latestVersion->url), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" target="_blank" title="<?php echo escape(zdate($__Context->latestVersion->date, 'Y-m-d'), false) ?>"><?php echo escape($__Context->latestVersion->title, false) ?></a><?php } ?>
		</p>
		<p class="cache">
			<button type="button" class="x_btn-link" onclick="doResetAdminMenu();"><?php echo $__Context->lang->cmd_admin_menu_reset ?></button> <span class="vr">|</span>  
			<button type="button" class="x_btn-link" onclick="doRecompileCacheFile();"><?php echo $__Context->lang->cmd_remake_cache ?></button> <span class="vr">|</span> 
			<button type="button" class="x_btn-link" onclick="doClearSession();"><?php echo $__Context->lang->cmd_clear_session ?></button> <span class="vr">|</span> 
			<a href="./index.php?module=admin&act=dispAdminViewServerEnv"><?php echo $__Context->lang->cmd_view_server_env ?></a> <span class="vr">|</span>
			<a href="./index.php?module=admin&act=dispAdminCheckServerEnv"><?php echo $__Context->lang->admin_check_env ?></a> <span class="vr">|</span> 
			<a href="https://github.com/xpressengine/xe-core/issues" target="_blank" style="vertical-align:middle"><?php echo $__Context->lang->bug_report ?></a>
		</p>
	</footer>
</div>
<script>
xe.current_lang = '<?php echo escape($__Context->lang_type, false) ?>';
xe.lang.confirm_run = '<?php echo $__Context->lang->confirm_run ?>';
xe.lang.confirm_reset_admin_menu = '<?php echo $__Context->lang->confirm_reset_admin_menu ?>';
admin_menu_srl = '<?php echo escape($__Context->admin_menu_srl, false) ?>';
</script>
<!--#Meta:modules/admin/tpl/js/config.js--><?php $__tmp=array('modules/admin/tpl/js/config.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
<!--#Meta:modules/session/tpl/js/session.js--><?php $__tmp=array('modules/session/tpl/js/session.js','','','');Context::loadFile($__tmp);unset($__tmp); ?>
