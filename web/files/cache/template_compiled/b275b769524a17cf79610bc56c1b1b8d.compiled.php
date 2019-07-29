<?php if(!defined("__XE__"))exit;
/* move current language to the top */
	$__Context->a = array($__Context->lang_type=>$__Context->lang_supported[$__Context->lang_type]);
	unset($__Context->lang_supported[$__Context->lang_type]);
	$__Context->lang_supported = array_merge($__Context->a, $__Context->lang_supported);
 ?>
<div<?php if(!$__Context->use_in_page){ ?> class="x_modal"<?php } ?> id="g11n"<?php if(!$__Context->use_in_page){ ?> hidden<?php } ?>>
	<?php if(!$__Context->use_in_page){ ?><div class="x_modal-header">
		<h1><?php echo $__Context->lang->cmd_multilingual ?></h1>
	</div><?php } ?>
	<div<?php if(!$__Context->use_in_page){ ?> class="x_modal-body"<?php } ?>>
		<div class="x_tabbable">
			<ul class="x_nav x_nav-tabs">
				<li<?php if(!$__Context->use_in_page){ ?> class="x_active"<?php } ?>><a href="#lang_create"><?php echo $__Context->lang->cmd_insert ?></a></li>
				<li<?php if($__Context->use_in_page){ ?> class="x_active"<?php } ?>><a href="#lang_search"><?php echo $__Context->lang->cmd_search ?></a></li>
			</ul>
			<div class="x_tab-content">
				<form action="" class="x_tab-pane <?php if(!$__Context->use_in_page){ ?>x_active<?php } ?> item" id="lang_create"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="act" value="<?php echo $__Context->act ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<fieldset class="editMode">
						<?php if($__Context->lang_supported&&count($__Context->lang_supported))foreach($__Context->lang_supported as $__Context->code=>$__Context->name){ ?><textarea class="<?php echo escape($__Context->code, false) ?>" rows="1" cols="12" title="<?php echo escape($__Context->name, false) ?>" style="margin-right:5px"></textarea><?php } ?>
						<div class="x_clearfix btnArea">
							<button type="reset" class="x_btn cancel x_pull-left"><?php echo $__Context->lang->cmd_cancel ?></button>
							<button type="submit" class="x_btn x_btn-primary save-useit"><?php echo $__Context->lang->use_after_save ?></button>
						</div>
					</fieldset>
				</form>
				<div class="x_tab-pane <?php if($__Context->use_in_page){ ?>x_active<?php } ?>" id="lang_search">
				</div>
			</div>
		</div>
	</div>
	<?php if(!$__Context->use_in_page){ ?><div class="x_modal-footer">
		<button type="button" class="x_btn x_pull-left" data-hide="#g11n"><?php echo $__Context->lang->cmd_close ?></button>
		<p class="x_pull-right">
			<?php 
				$__Context->link = '<a href="' . getUrl('', 'module', 'admin', 'act', 'dispAdminConfigGeneral') . '">' . $__Context->lang->about_language_list_manage['link'] . '</a>';
				$__Context->text = sprintf($__Context->lang->about_language_list_manage['text'], $__Context->link);
			 ?>
			<?php echo $__Context->text ?>
		</p>
	</div><?php } ?>
</div>
<script>
	xe.confirm_delete = '<?php echo $__Context->lang->confirm_delete ?>';
	xe.msg_confirm_save_and_use_multilingual = '<?php echo $__Context->lang->msg_confirm_save_and_use_multilingual ?>';
	xe.msg_empty_multilingual = '<?php echo $__Context->lang->msg_empty_multilingual ?>';
	xe.cmd_set_multilingual_text = '<?php echo $__Context->lang->cmd_set_multilingual_text ?>';
	xe.cmd_remove_multilingual_text = '<?php echo $__Context->lang->cmd_remove_multilingual_text ?>';
	xe.use_after_save = '<?php echo $__Context->lang->use_after_save ?>';
	xe.cmd_save = '<?php echo $__Context->lang->cmd_save ?>';
</script>
