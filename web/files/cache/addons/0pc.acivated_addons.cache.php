<?php if(!defined("__XE__")) exit();
$_m = Context::get('mid');
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/autolink/autolink.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "autolink";
$addon_time_log->called_extension = "autolink";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/member_communication/member_communication.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "member_communication";
$addon_time_log->called_extension = "member_communication";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/member_extra_info/member_extra_info.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "member_extra_info";
$addon_time_log->called_extension = "member_extra_info";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);
$before_time = microtime(true);
$rm = '';
$ml = array(
);
$addon_file = './addons/resize_image/resize_image.addon.php';
if(file_exists($addon_file)){
if($rm === 'no_run_selected'){
if(!isset($ml[$_m])){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}else{
if(isset($ml[$_m]) || count($ml) === 0){
unset($addon_info); $addon_info = unserialize(base64_decode('')); @include($addon_file);
}}}
$after_time = microtime(true);
$addon_time_log = new stdClass();
$addon_time_log->caller = $called_position;
$addon_time_log->called = "resize_image";
$addon_time_log->called_extension = "resize_image";
writeSlowlog("addon",$after_time-$before_time,$addon_time_log);