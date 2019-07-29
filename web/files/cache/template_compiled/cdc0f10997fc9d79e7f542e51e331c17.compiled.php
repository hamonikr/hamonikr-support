<?php if(!defined("__XE__"))exit;?><div>
	<section class="member">
		<h2><?php echo $__Context->lang->member ?></h2>
		<ul>
			<?php if($__Context->latestMemberList&&count($__Context->latestMemberList))foreach($__Context->latestMemberList as $__Context->key=>$__Context->value){ ?><li>
				<?php $__Context->document = $__Context->value->variables ?>
				<a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispMemberAdminInsert', 'member_srl', $__Context->value->member_srl), false) ?>" target="_blank"><?php echo escape($__Context->value->nick_name, false) ?></a>
			</li><?php } ?>
			<?php if(!is_array($__Context->latestMemberList) || count($__Context->latestMemberList) < 1){ ?><li><?php echo $__Context->lang->no_data ?></li><?php } ?>
		</ul>
		<div class="more">
			<dl>
				<dt><?php echo $__Context->lang->menu_gnb['user'] ?>: </dt><dd><a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispMemberAdminList'), false) ?>"><?php echo escape(number_format($__Context->status->member->totalCount), false) ?> (<?php if($__Context->status->member->todayCount > 0){ ?>+<?php };
echo escape(number_format($__Context->status->member->todayCount), false) ?>)</a></dd>
			</dl>
			<a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispMemberAdminList'), false) ?>"><i>&rsaquo;</i> <?php echo $__Context->lang->more ?></a>
		</div>
	</section>
</div>
<div>
	<section class="document">
		<h2><?php echo $__Context->lang->latest_documents ?></h2>
		<ul>
			<?php if($__Context->latestDocumentList&&count($__Context->latestDocumentList))foreach($__Context->latestDocumentList as $__Context->key=>$__Context->value){ ?><li>
				<?php $__Context->document = $__Context->value->variables ?>
				<a href="<?php echo escape(getUrl('', 'document_srl', $__Context->document['document_srl']), false) ?>" target="_blank"><?php if(trim($__Context->value->getTitle())){;
echo escape($__Context->value->getTitle(), false);
}else{ ?><strong><?php echo $__Context->lang->no_title_document ?></strong><?php } ?></a> 
				<span class="side"><?php echo escape($__Context->value->getNickName(), false) ?></span>
				<form class="action" method="POST"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="module" value="admin" />
					<input type="hidden" name="act" value="procDocumentManageCheckedDocument" />
					<input type="hidden" name="cart[]" value="<?php echo escape($__Context->document['document_srl'], false) ?>" />
					<input type="hidden" name="success_return_url" value="<?php echo escape(getUrl('', 'module', 'admin'), false) ?>" />
					<button type="submit" name="type" value="trash" class="x_icon-trash"><?php echo $__Context->lang->cmd_trash ?></button>
					<button type="submit" name="type" value="delete" class="x_icon-remove"><?php echo $__Context->lang->cmd_delete ?></button>
				</form>
			</li><?php } ?>
			<?php if(!is_array($__Context->latestDocumentList) || count($__Context->latestDocumentList) < 1){ ?><li><?php echo $__Context->lang->no_data ?></li><?php } ?>
		</ul>
		<div class="more">
			<dl>
				<dt><?php echo $__Context->lang->menu_gnb_sub['document'] ?>: </dt><dd><a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispDocumentAdminList'), false) ?>"><?php echo escape(number_format($__Context->status->document->totalCount), false) ?> (<?php if($__Context->status->document->todayCount > 0){ ?>+<?php };
echo escape(number_format($__Context->status->document->todayCount), false) ?>)</a></dd>
			</dl>
			<a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispDocumentAdminList'), false) ?>"><i>&rsaquo;</i> <?php echo $__Context->lang->more ?></a>
		</div>
	</section>
	<section class="reply">
		<h2><?php echo $__Context->lang->latest_comments ?></h2>
		<ul>
			<?php if($__Context->latestCommentList&&count($__Context->latestCommentList))foreach($__Context->latestCommentList as $__Context->key=>$__Context->value){ ?><li>
				<a href="<?php echo escape(getUrl('', 'document_srl', $__Context->value->document_srl), false) ?>#comment_<?php echo escape($__Context->value->comment_srl, false) ?>" target="_blank"><?php if(trim($__Context->value->content)){;
echo escape($__Context->value->getSummary(), false);
}else{ ?><strong><?php echo $__Context->lang->no_text_comment ?></strong><?php } ?></a> 
				<span class="side"><?php echo escape($__Context->value->getNickName(), false) ?></span> 
				<form class="action"><input type="hidden" name="error_return_url" value="<?php echo htmlspecialchars(getRequestUriByServerEnviroment(), ENT_COMPAT | ENT_HTML401, 'UTF-8', false) ?>" /><input type="hidden" name="mid" value="<?php echo $__Context->mid ?>" /><input type="hidden" name="vid" value="<?php echo $__Context->vid ?>" />
					<input type="hidden" name="module" value="admin" />
					<input type="hidden" name="act" value="procCommentAdminDeleteChecked" />
					<input type="hidden" name="cart[]" value="<?php echo escape($__Context->value->comment_srl, false) ?>" />
					<input type="hidden" name="success_return_url" value="<?php echo escape(getUrl('', 'module', 'admin'), false) ?>" />
					<button type="submit" name="is_trash" value="true" class="x_icon-trash"><?php echo $__Context->lang->cmd_trash ?></button>
					<button type="submit" name="is_trash" value="false" class="x_icon-remove"><?php echo $__Context->lang->cmd_delete ?></button>
				</form>
			</li><?php } ?>
			<?php if(!is_array($__Context->latestCommentList) || count($__Context->latestCommentList) < 1){ ?><li><?php echo $__Context->lang->no_data ?></li><?php } ?>
		</ul>
		<p class="more"><a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispCommentAdminList'), false) ?>"><i>&rsaquo;</i> <?php echo $__Context->lang->more ?></a></p>
	</section>
</div>
