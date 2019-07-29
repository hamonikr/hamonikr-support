<?php if(!defined("__XE__"))exit;?><div id="progress">
	<ul>
		<li<?php if($__Context->act==''){ ?> class="active"<?php } ?>><?php echo $__Context->lang->install_progress_menu['language'] ?></li>
		<li<?php if($__Context->act=='dispInstallLicenseAgreement'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->install_progress_menu['license_agreement'] ?></li>
		<li<?php if($__Context->act=='dispInstallCheckEnv'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->install_progress_menu['condition'] ?></li>
		<li<?php if($__Context->act=='dispInstallSelectDB' && $__Context->progressMenu == '3'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->install_progress_menu['ftp'] ?></li>
		<li<?php if($__Context->act=='dispInstallSelectDB' && $__Context->progressMenu == '4'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->install_progress_menu['dbSelect'] ?></li>
		<li<?php if($__Context->act=='dispInstallDBForm'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->install_progress_menu['dbInfo'] ?></li>
		<li<?php if($__Context->act=='dispInstallConfigForm'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->install_progress_menu['configInfo'] ?></li>
		<li<?php if($__Context->act=='dispInstallManagerForm'){ ?> class="active"<?php } ?>><?php echo $__Context->lang->install_progress_menu['adminInfo'] ?></li>
	</ul>
</div>
