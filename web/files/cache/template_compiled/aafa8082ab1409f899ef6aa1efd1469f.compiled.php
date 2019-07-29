<?php if(!defined("__XE__"))exit;
$__Context->db_info   = Context::getDBInfo();
	$__Context->lang_type = Context::getLangType();
	$__Context->ssl_actions = Context::getSSLActions();
	$__Context->css_files=Context::getCssFile();
	$__Context->js_files=Context::getJsFile();
 ?>
<!DOCTYPE html>
<html lang="<?php echo escape(str_replace('jp','ja',$__Context->lang_type), false) ?>">
<head>
<!-- META -->
<meta charset="utf-8">
<meta name="Generator" content="XpressEngine">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php if(Context::getMetaTag()&&count(Context::getMetaTag()))foreach(Context::getMetaTag() as $__Context->no=>$__Context->val){ ?>
<meta<?php if($__Context->val['is_http_equiv']){ ?> http-equiv="<?php echo escape($__Context->val['name'], false) ?>"<?php };
if(!$__Context->val['is_http_equiv']){ ?> name="<?php echo escape($__Context->val['name'], false) ?>"<?php } ?> content="<?php echo escape($__Context->val['content'], false) ?>">
<?php } ?>
<!-- TITLE -->
<title><?php echo escape(Context::getBrowserTitle(), false) ?></title>
<!-- CSS -->
<?php if($__Context->css_files&&count($__Context->css_files))foreach($__Context->css_files as $__Context->key=>$__Context->css_file){ ?>
<?php if($__Context->css_file['targetie']){ ?><!--[if <?php echo escape($__Context->css_file['targetie'], false) ?>]><?php if(stripos($__Context->css_file['targetie'], 'gt') === 0){ ?><!--><?php };
} ?>
<link rel="stylesheet" href="<?php echo escape($__Context->css_file['file'], false) ?>"<?php if($__Context->css_file['media'] != 'all'){ ?> media="<?php echo escape($__Context->css_file['media'], false) ?>"<?php } ?> />
<?php if($__Context->css_file['targetie']){;
if(stripos($__Context->css_file['targetie'], 'gt') === 0){ ?><!--<?php } ?><![endif]--><?php } ?>
<?php } ?>
<!-- JS -->
<script>
var current_url = "<?php echo $__Context->current_url ?>";
var request_uri = "<?php echo $__Context->request_uri ?>";
<?php if($__Context->vid){ ?>var xeVid = "<?php echo escape($__Context->vid, false) ?>";<?php } ?>
var current_mid = "<?php echo escape($__Context->mid, false) ?>";
var waiting_message = "<?php echo $__Context->lang->msg_call_server ?>";
var ssl_actions = new Array(<?php if(count($__Context->ssl_actions)){ ?>"<?php echo escape(implode('","',array_keys($__Context->ssl_actions)), false) ?>"<?php } ?>);
var default_url = "<?php echo Context::getDefaultUrl() ?>";
<?php if(Context::get('_http_port')){ ?>var http_port = <?php echo escape(Context::get("_http_port"), false) ?>;<?php } ?>
<?php if(Context::get('_https_port')){ ?>var https_port = <?php echo escape(Context::get("_https_port"), false) ?>;<?php } ?>
<?php if(Context::get('_use_ssl') && Context::get('_use_ssl') == 'always'){ ?>var enforce_ssl = true;<?php } ?>
</script>
<?php if($__Context->js_files&&count($__Context->js_files))foreach($__Context->js_files as $__Context->key=>$__Context->js_file){ ?>
<?php if($__Context->js_file['targetie']){ ?><!--[if <?php echo escape($__Context->js_file['targetie'], false) ?>]><?php if(stripos($__Context->js_file['targetie'], 'gt') === 0){ ?><!--><?php };
} ?>
<script src="<?php echo escape($__Context->js_file['file'], false) ?>"></script>
<?php if($__Context->js_file['targetie']){;
if(stripos($__Context->js_file['targetie'], 'gt') === 0){ ?><!--<?php } ?><![endif]--><?php } ?>
<?php } ?>
<!-- RSS -->
<?php if($__Context->rss_url){ ?><link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo escape($__Context->rss_url, false) ?>" /><?php } ?>
<?php if($__Context->general_rss_url){ ?><link rel="alternate" type="application/rss+xml" title="Site RSS" href="<?php echo escape($__Context->general_rss_url, false) ?>" /><?php } ?>
<?php if($__Context->rss_url){ ?><link rel="alternate" type="application/atom+xml" title="Atom" href="<?php echo escape($__Context->atom_url, false) ?>" /><?php } ?>
<?php if($__Context->general_rss_url){ ?><link rel="alternate" type="application/atom+xml" title="Site Atom" href="<?php echo escape($__Context->general_atom_url, false) ?>" /><?php } ?>
<!-- ICON -->
<?php if($__Context->favicon_url){ ?><link rel="shortcut icon" href="<?php echo escape($__Context->favicon_url, false) ?>" /><?php } ?>
<?php if($__Context->mobicon_url){ ?><link rel="apple-touch-icon" href="<?php echo escape($__Context->mobicon_url, false) ?>" /><?php } ?>
<?php echo Context::getHtmlHeader() ?>
<script>
//<![CDATA[
xe.current_lang = "<?php echo escape($__Context->lang_type, false) ?>";
xe.cmd_find = "<?php echo $__Context->lang->cmd_find ?>";
xe.cmd_cancel = "<?php echo $__Context->lang->cmd_cancel ?>";
xe.cmd_confirm = "<?php echo $__Context->lang->cmd_confirm ?>";
xe.msg_no_root = "<?php echo $__Context->lang->msg_no_root ?>";
xe.msg_no_shortcut = "<?php echo $__Context->lang->msg_no_shortcut ?>";
xe.msg_select_menu = "<?php echo $__Context->lang->msg_select_menu ?>";
//]]>
</script>
</head>
<?php $__Context->isAdminKind = false ?>
<?php if(stripos(Context::get('act'),'admin') || Context::get('module') == 'admin'){ ?>
<?php $__Context->isAdminKind = true ?>
<?php } ?>
<body<?php echo Context::getBodyClass() ?>>
<?php echo Context::getBodyHeader() ?>
<?php echo $__Context->content ?>
<?php echo Context::getHtmlFooter() ?>
<!-- ETC -->
<div class="wfsr"></div>
<?php  $__Context->js_body_files = Context::getJsFile('body')  ?>
<?php if($__Context->js_body_files&&count($__Context->js_body_files))foreach($__Context->js_body_files as $__Context->key=>$__Context->js_file){ ?>
<?php if($__Context->js_file['targetie']){ ?><!--[if <?php echo escape($__Context->js_file['targetie'], false) ?>]><?php } ?><script src="<?php echo escape($__Context->js_file['file'], false) ?>"></script><?php if($__Context->js_file['targetie']){ ?><![endif]--><?php } ?>
<?php } ?>
</body>
</html>
