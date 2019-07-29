<?php if(!defined("__XE__"))exit;?><style>
#faceoff_migration_info img {border:1px solid #ccc;padding:5px}
</style>
<div class="x_page-header">
	<h1>
		<?php echo $__Context->lang->installed_layout ?> <a class="x_icon-question-sign" href="./admin/help/index.html#UMAN_advanced_installed_layout" target="_blank"><?php echo $__Context->lang->help ?></a>
		<?php if($__Context->layout_info){ ?><span class="path" title="<?php echo escape($__Context->layout_info->layout, false) ?>">&gt; <?php echo escape($__Context->layout_info->title, false) ?> v<?php echo escape($__Context->layout_info->version, false) ?></span><?php } ?>
		<?php if($__Context->selected_layout){ ?><span class="path" title="<?php echo escape($__Context->selected_layout->layout, false) ?>">&gt; <?php echo escape($__Context->selected_layout->title, false) ?> v<?php echo escape($__Context->selected_layout->version, false) ?></span><?php } ?>
		<?php if($__Context->selected_layout){ ?><span class="path">&gt; <?php echo escape($__Context->selected_layout->layout_title, false) ?></span><?php } ?>
	</h1>
</div>
<?php if($__Context->layout == 'faceoff'){ ?><div class="x_alert x_alert-block">
	<p><?php echo $__Context->lang->faceoff_migration[0] ?></p>
	<p><a href="#faceoff_migration_info" class="modalAnchor"><?php echo $__Context->lang->faceoff_migration[1] ?></a></p>
</div><?php } ?>
<?php if($__Context->layout == 'faceoff'){ ?><section id="faceoff_migration_info" class="x_modal">
	<div class="x_modal-header">
		<h1><?php echo $__Context->lang->faceoff_migration[1] ?></h1>
	</div>
	<div class="x_modal-body">
		<ol>
			<li>
				<p><?php echo $__Context->lang->faceoff_migration[2] ?></p>
				<?php if($__Context->lang_type == 'ko'){ ?><img src="/modules/layout/tpl/faceoff_migration/01.png" alt="" /><?php } ?>
				<?php if($__Context->lang_type != 'ko'){ ?><img src="/modules/layout/tpl/faceoff_migration/01_en.png" alt="" /><?php } ?>
			</li>
			<li>
				<p><?php echo $__Context->lang->faceoff_migration[3] ?></p>
				<?php if($__Context->lang_type == 'ko'){ ?><img src="/modules/layout/tpl/faceoff_migration/02.png" alt="" /><?php } ?>
				<?php if($__Context->lang_type != 'ko'){ ?><img src="/modules/layout/tpl/faceoff_migration/02_en.png" alt="" /><?php } ?>
			</li>
			<li>
				<p><?php echo $__Context->lang->faceoff_migration[4] ?></p>
				<img src="/modules/layout/tpl/faceoff_migration/03.png" alt="" />
			</li>
			<li>
				<p><?php echo $__Context->lang->faceoff_migration[5] ?></p>
				<?php if($__Context->lang_type == 'ko'){ ?><img src="/modules/layout/tpl/faceoff_migration/04.png" alt="" /><?php } ?>
				<?php if($__Context->lang_type != 'ko'){ ?><img src="/modules/layout/tpl/faceoff_migration/04_en.png" alt="" /><?php } ?>
			</li>
			<li>
				<p><?php echo $__Context->lang->faceoff_migration[6] ?></p>
				<?php if($__Context->lang_type == 'ko'){ ?><img src="/modules/layout/tpl/faceoff_migration/05.png" alt="" /><?php } ?>
				<?php if($__Context->lang_type != 'ko'){ ?><img src="/modules/layout/tpl/faceoff_migration/05_en.png" alt="" /><?php } ?>
			</li>
		</ol>
	</div>
	<div class="x_modal-footer">
		<button type="button" class="x_btn x_pull-left" data-hide="#faceoff_migration_info"><?php echo $__Context->lang->cmd_close ?></button>
	</div>
</section><?php } ?>
<?php 
	$__Context->validator_ids = array(
		'modules/layout/tpl/layout_all_instance_list/1' => 1,
		'modules/autoinstall/tpl/uninstall/1' => 1,
		'modules/layouts/tpl/layout_edit/1' => 1,
		'modules/layout/tpl/lyaout_info_view/1' => 1,
		'modules/layout/tpl/layout_instance_list/1' => 1,
		'modules/layout/tpl/layout_instance_list/2' => 1
	);
 ?>
<?php if($__Context->XE_VALIDATOR_MESSAGE && isset($__Context->validator_ids[$__Context->XE_VALIDATOR_ID])){ ?><div class="message <?php echo escape($__Context->XE_VALIDATOR_MESSAGE_TYPE, false) ?>">
	<p><?php echo escape($__Context->XE_VALIDATOR_MESSAGE, false) ?></p>
</div><?php } ?>
