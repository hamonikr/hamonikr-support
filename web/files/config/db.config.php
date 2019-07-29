<?php if(!defined("__XE__")) exit();
$db_info = (object)array (
  'master_db' => 
  array (
    'db_type' => 'mysql',
    'db_port' => '3306',
    'db_hostname' => '127.0.0.1',
    'db_userid' => 'hkrme_support',
    'db_password' => 'exitem08EXITEM)*',
    'db_database' => 'hkrme_subscription',
    'db_table_prefix' => 'hme_',
  ),
  'slave_db' => 
  array (
    0 => 
    array (
      'db_type' => 'mysql',
      'db_port' => '3306',
      'db_hostname' => '127.0.0.1',
      'db_userid' => 'hkrme_support',
      'db_password' => 'exitem08EXITEM)*',
      'db_database' => 'hkrme_subscription',
      'db_table_prefix' => 'hme_',
    ),
  ),
  'default_url' => 'https://support.hamonikr.org/',
  'use_mobile_view' => 'Y',
  'use_rewrite' => 'N',
  'time_zone' => '+0900',
  'use_prepared_statements' => 'Y',
  'qmail_compatibility' => 'N',
  'use_db_session' => 'N',
  'use_ssl' => 'none',
  'sitelock_whitelist' => 
  array (
    0 => '127.0.0.1',
  ),
  'use_sso' => 'N',
  'use_html5' => 'N',
  'admin_ip_list' => NULL,
);
