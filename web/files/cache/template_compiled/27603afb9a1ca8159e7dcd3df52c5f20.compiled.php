<?php if(!defined("__XE__"))exit;
echo $__Context->lang->msg_find_account_info ?><br />
<hr noshade="noshade" />
<ul>
	<li><?php echo $__Context->lang->site ?> : <a href="<?php echo getUrl() ?>" target="_blank"><?php echo getUrl() ?></a></li>
	<?php if($__Context->memberInfo&&count($__Context->memberInfo))foreach($__Context->memberInfo as $__Context->name=>$__Context->value){;
if(!is_object($__Context->value)&&!is_array($__Context->value)){ ?><li><?php echo $__Context->name ?> : <?php echo $__Context->value ?></li><?php }} ?>
	<li><?php echo $__Context->lang->password ?> : <span style="color:red"><?php echo $__Context->auth_args->new_password ?></span></li>
</ul>
<hr noshade="noshade" />
<?php echo $__Context->lang->msg_find_account_comment ?><br />
<a href="<?php echo $__Context->find_url ?>"><?php echo $__Context->find_url ?></a>
