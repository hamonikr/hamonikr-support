<?php if(!defined("__XE__"))exit;?><!--#JSPLUGIN:jquery.fileupload--><?php Context::loadJavascriptPlugin('jquery.fileupload'); ?>
<!--#JSPLUGIN:jquery.finderSelect--><?php Context::loadJavascriptPlugin('jquery.finderSelect'); ?>
<!--#JSPLUGIN:handlebars--><?php Context::loadJavascriptPlugin('handlebars'); ?>
<?php Context::loadLang('modules/editor/skins/ckeditor/lang'); ?>
<?php if($__Context->allow_fileupload){ ?><div id="xefu-container-<?php echo $__Context->editor_sequence ?>" class="xefu-container xe-clearfix" data-editor-sequence="<?php echo $__Context->editor_sequence ?>">
	
	<div class="xefu-dropzone">
		<span class="xefu-btn fileinput-button xefu-act-selectfile">
			<span><i class="xi-icon xi-file-add"></i> <?php echo $__Context->lang->edit->upload_file ?></span>
			<input id="xe-fileupload" type="file" class="fileupload-processing " value="<?php echo $__Context->lang->edit->upload_file ?>" name="Filedata" data-auto-upload="true" data-editor-sequence="<?php echo $__Context->editor_sequence ?>" multiple />
		</span>
		<p class="xefu-dropzone-message"><?php echo $__Context->lang->ckeditor_about_file_drop_area ?></p>
		<p class="upload_info"><?php echo $__Context->lang->allowed_filesize ?> : <span class="allowed_filesize">0MB</span> <span>(<?php echo $__Context->lang->allowed_filetypes ?> : <span class="allowed_filetypes">*.*</span>)</span></p>
		<p class="xefu-progress-status" style="display: none;"><?php echo $__Context->lang->ckeditor_file_uploading ?> (<span class="xefu-progress-percent">0%</span>)</p>
		<div class="xefu-progressbar" style="display: none;"><div></div></div>
	</div>
	
	<div class="xefu-controll xe-clearfix">
		<div style="float: left;">
			<?php echo $__Context->lang->ckeditor_file_count ?> (<span class="attached_size"></span> / <span class="allowed_attach_size"></span>)
		</div>
		<div style="float: right">
			<input type="button" class="xefu-btn xefu-act-link-selected" style=" vertical-align: middle; vertical-align: middle;" value="<?php echo $__Context->lang->edit->link_file ?>">
			<input type="button" class="xefu-btn xefu-act-delete-selected" style=" vertical-align: middle; vertical-align: middle;" value="<?php echo $__Context->lang->edit->delete_selected ?>">
		</div>
	</div>
	<div class="xefu-list">
		<div class="xefu-list-images">
			<ul>
			</ul>
		</div>
		<div class="xefu-list-files">
			<ul>
			</ul>
		</div>
	</div>
</div><?php } ?>
<script>
	jQuery(function($){
		// uploader
		<?php if($__Context->allow_fileupload){ ?>
		var setting = {
			maxFileSize: <?php echo $__Context->file_config->allowed_filesize ?>,
			limitMultiFileUploadSize: <?php echo $__Context->file_config->allowed_filesize ?>
		};
		var uploader = $('#xefu-container-<?php echo $__Context->editor_sequence ?>').xeUploader(setting);
		window.xe.msg_exceeds_limit_size = '<?php echo $__Context->lang->msg_exceeds_limit_size ?>';
		window.xe.msg_checked_file_is_deleted = '<?php echo $__Context->lang->msg_checked_file_is_deleted ?>';
		window.xe.msg_file_cart_is_null = '<?php echo $__Context->lang->msg_file_cart_is_null ?>';
		window.xe.msg_checked_file_is_deleted = '<?php echo $__Context->lang->msg_checked_file_is_deleted ?>';
		window.xe.msg_not_allowed_filetype = '<?php echo $__Context->lang->msg_not_allowed_filetype ?>';
		window.xe.msg_file_upload_error = '<?php echo $__Context->lang->msg_file_upload_error ?>';
		<?php } ?>
	});
</script>
