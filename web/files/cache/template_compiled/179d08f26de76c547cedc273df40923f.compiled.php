<?php if(!defined("__XE__"))exit;?>
<section class="section">
	<h1><?php echo $__Context->lang->layout_image_repository ?></h1>
	<p><?php echo nl2br($__Context->lang->about_layout_image_repository) ?></p>
	<ul class="x_thumbnails uploaded_image_list">
		<?php if($__Context->layout_image_list&&count($__Context->layout_image_list))foreach($__Context->layout_image_list as $__Context->no=>$__Context->file){ ?><li class="x_span2" style="float:none;display:inline-block;_display:inline;zoom:1;vertical-align:top">
			<?php $__Context->ext=substr(strrchr($__Context->file,'.'),1) ?>
			<div class="x_thumbnail a uploaded_image x_clearfix">
				<?php if($__Context->ext == 'swf' || $__Context->ext == 'flv'){ ?><script>
					//<![CDATA[
					displayMultimedia('<?php echo escape(getUrl(''), false);
echo escape($__Context->layout_image_path, false);
echo escape($__Context->file, false) ?>', '100px', '100px');
					//]]>
				</script><?php } ?>
				<?php if($__Context->ext != 'swf' && $__Context->ext != 'flv'){ ?><img src="<?php echo escape(getUrl(''), false);
echo escape($__Context->layout_image_path, false);
echo escape($__Context->file, false) ?>" /><?php } ?>
				<div style="width:100%;word-wrap:break-word">
					<p class="uploaded_image_path" style="margin:5px 0 0 0;font:11px/1.25 Tahoma, Geneva, sans-serif"><?php echo escape($__Context->layout_image_path, false);
echo escape($__Context->file, false) ?></p>
					<form action="./" method="post" class="x_pull-right" style="margin:0;padding:0"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
						<input type="hidden" name="module" value="layout" />
						<input type="hidden" name="act" value="procLayoutAdminUserImageDelete" />
						<input type="hidden" name="layout_srl" value="<?php echo escape($__Context->layout_srl, false) ?>" />
						<input type="hidden" name="filename" value="<?php echo escape($__Context->file, false) ?>" />
						<input class="x_icon-remove" type="submit" value="<?php echo $__Context->lang->cmd_delete ?>" title="<?php echo $__Context->lang->cmd_delete ?>" style="width:14px" />
					</form>
				</div>
			</div>
		</li><?php } ?>
	</ul>
	<?php Context::addJsFile("modules/layout/ruleset/imageUpload.xml", FALSE, "", 0, "body", TRUE, "") ?><form  action="./" method="post" enctype="multipart/form-data"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="imageUpload" />
		<input type="hidden" name="module" value="layout" />
		<input type="hidden" name="act" value="procLayoutAdminUserImageUpload" />
		<input type="hidden" name="layout_srl" value="<?php echo escape($__Context->layout_srl, false) ?>" />
		<input type="file" name="user_layout_image" value="" title="<?php echo $__Context->lang->uploaded_file ?>" />
		<p><?php echo $__Context->lang->msg_layout_image_target ?></p>
		<div class="x_clearfix btnArea">
			<div class="x_pull-right">
				<button type="submit" class="x_btn x_btn-primary"><?php echo $__Context->lang->cmd_upload ?></button>
			</div>
		</div>
	</form>
</section>
<?php if($__Context->selected_layout->type == 'faceoff'){ ?>
	<section class="section">
		<h1><?php echo $__Context->lang->faceoff_export ?></h1>
		<p><?php echo nl2br($__Context->lang->about_faceoff_export) ?></p>
		<p>
			<a class="x_btn" href="<?php echo escape(getUrl('', 'act', 'procLayoutAdminUserLayoutExport', 'layout_srl', $__Context->layout_srl), false) ?>"><?php echo $__Context->lang->layout_btn_export ?></a>
		</p>
	</section>
<?php } ?>
<?php Context::addJsFile("modules/layout/ruleset/codeUpdate.xml", FALSE, "", 0, "body", TRUE, "") ?><form id="fo_layout"  action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="codeUpdate" />
	<input type="hidden" name="module" value="layout" />
	<input type="hidden" name="layout_srl" value="<?php echo escape($__Context->layout_srl, false) ?>" />
	<input type="hidden" name="act" value="procLayoutAdminCodeUpdate" />
	<textarea name="code_css" rows="8" cols="42" style="display:none;"><?php echo escape($__Context->layout_code_css, false) ?></textarea>
	<section class="section">
		<h1>HTML<small> - layout.html</small></h1>
		<div style="margin-right:14px">
			<textarea name="code" rows="8" cols="42" style="width:100%; height:300px; font:12px 'DejaVu Sans Mono', monospace;"><?php echo escape($__Context->layout_code, false) ?></textarea>
		</div>
		<div>
			<?php if($__Context->widget_list&&count($__Context->widget_list))foreach($__Context->widget_list as $__Context->widget){ ?> <i class="vr">|</i> <a href="<?php echo escape(getUrl('','module','admin','act','dispWidgetAdminGenerateCode','selected_widget',$__Context->widget->widget), false) ?>" target="_blank"><?php echo escape($__Context->widget->title, false) ?></a><?php } ?>
		</div>
	</section>
	<div class="x_clearfix btnArea">
		<span class="x_pull-left">
			<button type="submit" class="x_btn" name="mode" value="reset"><?php echo $__Context->lang->cmd_reset ?></button>
		</span>
		<span class="x_pull-right">
			<button type="submit" class="x_btn x_btn-primary" name="mode" value="save"><?php echo $__Context->lang->cmd_save ?></button>
		</span>
	</div>
</form>
<?php Context::addJsFile("modules/layout/ruleset/codeUpdate.xml", FALSE, "", 0, "body", TRUE, "") ?><form id="fo_layout"  action="./" method="post"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" /><input type="hidden" name="ruleset" value="codeUpdate" />
	<input type="hidden" name="module" value="layout" />
	<input type="hidden" name="layout_srl" value="<?php echo escape($__Context->layout_srl, false) ?>" />
	<input type="hidden" name="act" value="procLayoutAdminCodeUpdate" />
	<textarea name="code" rows="8" cols="42" style="display:none;"><?php echo escape($__Context->layout_code, false) ?></textarea>
	<section class="section">
		<h1>CSS<small> - layout.css</small></h1>
		<div style="margin-right:14px">
			<textarea name="code_css" rows="8" cols="42" style="width:100%; height:300px; font:12px 'DejaVu Sans Mono', monospace;"><?php echo escape($__Context->layout_code_css, false) ?></textarea>
		</div>
	</section>
	<div class="x_clearfix btnArea">
		<span class="x_pull-left">
			<button type="submit" class="x_btn" name="mode" value="reset"><?php echo $__Context->lang->cmd_reset ?></button>
		</span>
		<span class="x_pull-right">
			<button type="submit" class="x_btn x_btn-primary" name="mode" value="save"><?php echo $__Context->lang->cmd_save ?></button>
		</span>
	</div>
</form>
