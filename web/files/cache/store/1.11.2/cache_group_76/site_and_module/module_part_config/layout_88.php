<?php
if(!defined('__XE__')) { exit(); }
return 'O:8:"stdClass":1:{s:13:"header_script";s:632:"<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
jQuery(document).ready(function(){
  // 라이선스 구매 페이지
  jQuery(\'.list_header\').remove();
  jQuery(\'#itemlist .small.light.nuribtn\').remove();
  jQuery(\'#itemlist .search\').remove();

  jQuery(\'#itemlist .small.blue.nuribtn\').text(\'결제\').attr(\'onclick\', \'\');

  function add_item(callback){
    addItemsToCart(164);
    callback();
  }
  jQuery(\'#itemlist .small.blue.nuribtn\').on(\'click\', function(){
      add_item(function(){ console.log(\'2\');window.location.href=\'cart\'; });
  });
});
</script>";}';