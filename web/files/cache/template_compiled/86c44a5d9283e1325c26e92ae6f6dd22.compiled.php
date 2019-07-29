<?php if(!defined("__XE__"))exit;?><ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->type != 'M'){ ?> class="x_active"<?php } ?>><a href="<?php echo escape(getUrl('act', 'dispLayoutAdminInstalledList', 'type', 'P'), false) ?>">PC(<?php echo escape($__Context->pcLayoutCount, false) ?>)</a></li>
	<li<?php if($__Context->type == 'M'){ ?> class="x_active"<?php } ?>><a href="<?php echo escape(getUrl('act', 'dispLayoutAdminInstalledList', 'type', 'M'), false) ?>">Mobile(<?php echo escape($__Context->mobileLayoutCount, false) ?>)</a></li>
</ul>
<div>
	<a<?php if($__Context->act == 'dispLayoutAdminAllInstanceList'){ ?> class="active"<?php } ?> href="<?php echo escape(getUrl('act', 'dispLayoutAdminAllInstanceList', 'layout_srl', ''), false) ?>"><?php echo $__Context->lang->instance_layout ?></a> <i>|</i>
	<a<?php if($__Context->act == 'dispLayoutAdminInstalledList'){ ?> class="active"<?php } ?> href="<?php echo escape(getUrl('act', 'dispLayoutAdminInstalledList'), false) ?>"><?php echo $__Context->lang->installed_layout ?></a>
</div>
