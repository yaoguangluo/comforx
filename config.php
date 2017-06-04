<?php
//CFG 
 $CFG['main']['webSite']['frontendIp']="localhost";
 $CFG['main']['webSite']['backendIp']="104.180.91.52:8080";
 $CFG['main']['webSite']['backendIp1']="localhost:8080";
 $CFG['main']['webSite']['english']="english";
 $CFG['main']['webSite']['chinese']="chinese";
 $CFG['main']['webSite']['hindi']="hindi";
 $CFG['main']['webSite']['french']="french";
 $CFG['main']['webSite']['korean']="korean";
 $CFG['main']['webSite']['spanish']="spanish";
 $CFG['main']['webSite']['german']="german";
$CFG['main']['webSite']['Swiss']='Swiss';
$CFG['main']['webSite']['Thai']='Thai';
$CFG['main']['webSite']['Vietnamese']='Vietnamese';
$CFG['main']['webSite']['Arabic']='Arabic';
$CFG['main']['webSite']['Turkish']='Turkish';
$CFG['main']['webSite']['Japanese']='Japanese';
 
 
 $CFG['main']['webSite']['logo']="/images/logo/logo.jpg";
 $CFG['main']['webSite']['companyName']="minibuy";
 $CFG['main']['webSite']['keywords']='comforx, USA, software, search engine, database, backend, web application, android app, IOS app';
 $CFG['main']['webSite']['description']='Award-winning software developers creating custom solutions for your business.';
 
 $CFG['backend']['login']['register']="/minibuy-engine/login/register1";
 $CFG['backend']['login']['keyCheck']="/minibuy-engine/login/keyCheck1";
 $CFG['backend']['login']['login']="/minibuy-engine/login/login1";
 $CFG['backend']['login']['loginBack']="/minibuy-engine/login/loginBack1";
 $CFG['backend']['login']['changePassword']="/minibuy-engine/login/changePassword1";
 $CFG['backend']['login']['logout']="/minibuy-engine/login/logout1";
 $CFG['backend']['login']['passwordSend']="/minibuy-engine/login/passwordSend1";
 $CFG['backend']['goods']['showItems']="/minibuy-engine/goods/showItems1";
 $CFG['backend']['goods']['showItem']="/minibuy-engine/goods/showItem1";
 $CFG['backend']['goods']['showVendor']="/minibuy-engine/goods/showVendor1";
 $CFG['backend']['goods']['showCat']="/minibuy-engine/goods/showCat1";
 $CFG['backend']['goods']['showBranch']="/minibuy-engine/goods/showBranch1";
 $CFG['backend']['cart']['addCart']="/minibuy-engine/cart/addCart1";
 $CFG['backend']['cart']['showCart']="/minibuy-engine/cart/showCart1";
 $CFG['backend']['cart']['deleteCart']="/minibuy-engine/cart/deleteCart1";
 $CFG['backend']['cart']['updateCart']="/minibuy-engine/cart/updateCart1";
 $CFG['backend']['pay']['doPayment']="/minibuy-engine/pay/doPayment1";
 $CFG['backend']['pay']['doPaymentSandbox']="/minibuy-engine/pay/doPaymentSandbox1";
 $CFG['backend']['pay']['getCardsByGid']="/minibuy-engine/pay/getCardsByGid1";
 $CFG['backend']['pay']['findTotal']="/minibuy-engine/pay/findTotal1";
 $CFG['backend']['pay']['getPayInfoByGid']="/minibuy-engine/pay/getPayInfoByGid1";
 $CFG['backend']['pay']['getPayInfoByPage']="/minibuy-engine/pay/getPayInfoByPage1";
 $CFG['backend']['pay']['updateSend']="/minibuy-engine/pay/updateSend1";

 //cache
 header("Content-Type: text/html; charset=utf-8");
 header("Cache-Control: no-cache, must-revalidate"); 
 header("pramga: no-cache");
 //smarty
 require '../libs/Smarty.class.php';
 $smarty = new Smarty;
 $smarty->caching = false;
 $smarty->cache_lifetime = 0;
 //language
 if("" == $_GET["language"])
 {
    $lang1 = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']); 
    if(in_array(substr($lang1,0,5), array('zh-tw','zh_hk'))){ 
     $_GET["language"]="chinese";
     include dirname(_FILE_).'/lang/'.$CFG['main']['webSite']['chinese'].'.php';
    }elseif(in_array(substr($lang1,0,5), array('zh-cn','zh-sg'))){ 
       $_GET["language"]="chinese";
       include dirname(_FILE_).'/lang/'.$CFG['main']['webSite']['chinese'].'.php';
    }else{ 
       $_GET["language"]="english";
       include dirname(_FILE_).'/lang/'.$CFG['main']['webSite']['english'].'.php';
    } 
 }else
     {
        include dirname(_FILE_).'/lang/'.$_GET["language"].'.php';
     }
if("" == $_GET["link"])
 {
   $_GET["link"]='index.php';
 }
$smarty->assign("_GET", $_GET);
$smarty->assign("lang", $lang);
$smarty->assign("CFG", $CFG);
?>