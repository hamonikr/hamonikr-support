<?php if(!defined("__XE__"))exit;
$__tpl=TemplateHandler::getInstance();echo $__tpl->compile('modules/widget/tpl','header.html') ?>
<table class="x_table x_table-striped x_table-hover dsTg">
	<caption>
		<strong>All(<?php echo escape($__Context->tCount, false) ?>)</strong>
		<div class="x_pull-right x_btn-group">
			<button class="x_btn x_active __simple"><?php echo $__Context->lang->simple_view ?></button>
			<button class="x_btn __detail"><?php echo $__Context->lang->detail_view ?></button>
		</div>
	</caption>
	<thead>
		<tr>
			<th scope="col"><?php echo $__Context->lang->widget_name ?></th>
			<th scope="col"><?php echo $__Context->lang->version ?></th>
			<th scope="col"><?php echo $__Context->lang->author ?></th>
			<th scope="col"><?php echo $__Context->lang->path ?></th>
			<th scope="col"><?php echo $__Context->lang->cmd_generate_code ?></th>
			<th scope="col"><?php echo $__Context->lang->cmd_delete ?></th>
		</tr>
	</thead>
	<tbody>
		<?php if($__Context->widget_list&&count($__Context->widget_list))foreach($__Context->widget_list as $__Context->widget){ ?><tr>
			<td class="title">
				<p><strong><?php echo escape($__Context->widget->title, false) ?></strong></p>
				<p><?php echo $__Context->widget->description ?></p>
				<?php if($__Context->widget->need_update == 'Y'){ ?><p class="update">
					<?php echo $__Context->lang->msg_avail_easy_update ?> <a href="<?php echo escape($__Context->widget->update_url, false) ?>&amp;return_url=<?php echo escape(urlencode(getRequestUriByServerEnviroment()), false) ?>"><?php echo $__Context->lang->msg_do_you_like_update ?></a>
				</p><?php } ?>
			</td>
			<td><?php echo escape($__Context->widget->version, false) ?></td>
			<td>
				<?php if($__Context->widget->author&&count($__Context->widget->author))foreach($__Context->widget->author as $__Context->author){ ?>
					<?php if($__Context->author->homepage){ ?><a href="<?php echo escape($__Context->author->homepage, false) ?>" target="_blank"><?php echo escape($__Context->author->name, false) ?></a><?php } ?>
					<?php if(!$__Context->author->homepage){;
echo escape($__Context->author->name, false);
} ?>
				<?php } ?>
			</td>
			<td><?php echo escape($__Context->widget->path, false) ?></td>
			<td><a class="x_btn x_btn-link" href="<?php echo escape(getUrl('act', 'dispWidgetAdminGenerateCode', 'selected_widget', $__Context->widget->widget), false) ?>"><?php echo $__Context->lang->cmd_generate_code ?></a></td>
			<td><?php if($__Context->widget->remove_url){ ?><a class="x_btn x_btn-link" href="<?php echo escape($__Context->widget->remove_url, false) ?>&amp;return_url=<?php echo escape(urlencode(getRequestUriByServerEnviroment()), false) ?>"><?php echo $__Context->lang->cmd_delete ?></a><?php } ?></td>
		</tr><?php } ?>
	</tbody>
</table>
