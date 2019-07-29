<?php
if(!defined('__XE__')) { exit(); }
return 'O:8:"stdClass":1:{s:13:"header_script";s:810:"<script>
jQuery(document).ready(function(){
  var uanaVigatorOs = navigator.userAgent;
  console.log(uanaVigatorOs);




  // 모든페이지
//  jQuery(\'.header_wrap\').remove();
  jQuery(\'footer\').remove();

  // 라이선스 구매
  jQuery(\'.list_header\').remove();
  jQuery(\'#itemlist .small.light.nuribtn\').remove();
  jQuery(\'#itemlist .search\').remove();
  
  // 라이선스 구매 - 결제버튼
  jQuery(\'#itemlist .small.blue.nuribtn\').text(\'결제\').attr(\'onclick\', \'\');

  function add_item(callback) {
    setTimeout(callback, 800, addItemsToCart(164));
  }

  jQuery(\'#itemlist .small.blue.nuribtn\').on(\'click\', function(){
    add_item(function(){window.location.href=\'cart\';});
  });


  // 장바구니
//  jQuery(\'#cartitems .menuTab\').remove();
});
</script>";}';