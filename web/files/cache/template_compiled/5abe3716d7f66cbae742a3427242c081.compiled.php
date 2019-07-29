<?php if(!defined("__XE__"))exit;?><ul class="x_nav x_nav-tabs">
	<li<?php if($__Context->act == 'dispAutoinstallAdminIndex'){ ?> class="x_active"<?php } ?>><a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispAutoinstallAdminIndex'), false) ?>">All(<?php echo escape($__Context->tCount, false) ?>)</a></li>
	<li<?php if($__Context->act == 'dispAutoinstallAdminInstalledPackages'){ ?> class="x_active"<?php } ?>><a href="<?php echo escape(getUrl('', 'module', 'admin', 'act', 'dispAutoinstallAdminInstalledPackages'), false) ?>">Installed(<?php echo escape($__Context->iCount, false) ?>)</a></li>
</ul>
<?php if($__Context->act == 'dispAutoinstallAdminIndex'){ ?><nav class="x_thumbnail x_clearfix category">
	<?php if($__Context->categories&&count($__Context->categories))foreach($__Context->categories as $__Context->category){;
if($__Context->category->depth == 0){ ?><div>
		<h2><?php echo escape($__Context->category->title, false) ?></h2>
		<ul>
			<?php if($__Context->category->children&&count($__Context->category->children))foreach($__Context->category->children as $__Context->children){ ?><li<?php if($__Context->children->category_srl == $__Context->category_srl){ ?> class="active"<?php } ?>>
				<a href="<?php echo escape(getUrl('','module','admin','act','dispAutoinstallAdminIndex','category_srl',$__Context->children->category_srl,'childrenList',''), false) ?>"><?php echo escape($__Context->children->title, false) ?>(<?php echo escape($__Context->children->nPackages, false) ?>)</a>
			</li><?php } ?>
		</ul>
	</div><?php }} ?>
</nav><?php } ?>
