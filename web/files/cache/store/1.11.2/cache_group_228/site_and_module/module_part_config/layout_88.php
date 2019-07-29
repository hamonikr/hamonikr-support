<?php
if(!defined('__XE__')) { exit(); }
return 'O:8:"stdClass":1:{s:13:"header_script";s:2040:"<script src="http://lab.alexcican.com/set_cookies/cookie.js" type="text/javascript" ></script>
<script>
jQuery(document).ready(function(){
  var uanaVigatorOs = navigator.userAgent;
  console.log(uanaVigatorOs);

  // 로그인 체크 - css 
  if($.cookie("xe_logged") != undefined) { 
    jQuery(".can_see_at_login").css("display", "inline-block");
    jQuery(".can_see_at_not_login").css("display", "none"); 
  } 

  // 앱체크
  var url = new URL(location.href);
  if(url.searchParams.get("support") != null) {
    jQuery.cookie(\'sval\', url.searchParams.get("support"), { expires: 2147483647, path: \'/\'});
    jQuery.cookie(\'spck\', url.searchParams.get("spck"), { expires: 2147483647, path: \'/\'});
  }

  // 앱 웹 접속에 따른 css 변경
  if(jQuery.cookie(\'sval\') == \'HamoniKR-ME_Support\'){
    // 앱
    // 링크변경
    var idx_bt = jQuery(\'.btsbtn.default_btn\');

    for(var i=0; i < idx_bt.length ;++i){
      if(idx_bt.eq(i).attr(\'onclick\') == "location.href=\'/\'") idx_bt.eq(i).attr(\'onclick\', "location.href=\'/?support=HamoniKR-ME_Support\'");
    }

    // css
    jQuery(\'.can_see_web\').css(\'display\', \'none\');
  }else{
    //웹
    jQuery(\'#license_div\').css(\'display\', \'block\');
    jQuery(\'#noapp\').css(\'display\', \'block\');
    jQuery(\'#content_community_btn\').css(\'display\', \'block\');
  }


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