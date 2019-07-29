<?php if(!defined("__XE__"))exit;?><script>
<?php if($__Context->msg){ ?>
	alert('<?php echo escape($__Context->msg, false) ?>');
<?php }else{ ?>
	parent.afterUploadConfigImage('<?php echo escape($__Context->name, false) ?>', '<?php echo escape($__Context->fileName, false) ?>', '<?php echo escape($__Context->tmpFileName, false) ?>');
<?php } ?>
</script>
