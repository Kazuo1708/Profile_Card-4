<?php
session_start();
$developer = true;
if ($developer == true) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
?>
<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
<head>
<link href='https://www.blogger.com/static/v1/widgets/55013136-widget_css_bundle.css' rel='stylesheet' type='text/css'/>
<!-- Author : Thai Hong Lam => https://www.fb.com/THL.VN.BLACKPINK License : Premium This template is coded by me from Tran Nhat Sinh, widely shared for entertainment purposes, not commercial. Copyright belongs to Tran Nhat Sinh. Thank you very much for your attention. -->
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'/>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'/>
<link href='//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'/>
<link href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css' rel='stylesheet'/>
<link href='https://fonts.googleapis.com/css2?family=Sacramento' rel='stylesheet'/>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<meta charset='UTF-8'/>
<meta content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0' name='viewport'/>
<link href='https://imgur.com/JOcTEQx.jpg' rel='icon' type='image/x-icon'/>
<title>Chào bạn !</title>
<!-- Meta Title -->
<meta content='Chào bạn !' property='og:title'/>
<meta content='Chào bạn !' property='og:image:alt'/>
<meta content='Chào bạn !' name='twitter:title'/>
<meta content='Chào bạn !' name='twitter:image:alt'/>
<meta content='Chào bạn !' property='og:site_name'/>
<!-- Meta Image -->
<meta content='https://imgur.com/irAKynW.png' property='og:image'/>
<meta content='https://imgur.com/irAKynW.png' name='twitter:image'/>
<!-- Meta Description -->
<meta content='Hi ! I&#39;am Lam' name='description'/>
<meta content='Hi ! I&#39;am Lam' property='og:description'/>
<meta content='Hi ! I&#39;am Lam' name='twitter:description'/>
<!-- Meta Keywords -->
<meta content='Chào bạn !, ' name='keywords'/>
<meta content='Chào bạn !' property='article:tag'/>
<!-- Meta Link -->
<link href='https://chaoban-tns-ripbyhl.blogspot.com/?m=1' rel='canonical'/>
<link href='https://chaoban-tns-ripbyhl.blogspot.com/?m=1' hreflang='x-default' rel='alternate'/>
<meta content='https://chaoban-tns-ripbyhl.blogspot.com/?m=1' property='og:url'/>
<!-- Meta Theme Color -->
<meta content='#fff' name='theme-color'/>
<meta content='#fff' name='msapplication-navbutton-color'/>
<meta content='#fff' name='apple-mobile-web-app-status-bar-style'/>
<meta content='yes' name='apple-mobile-web-app-capable'/>
<style id='page-skin-1' type='text/css'><!--
/* Chèn CSS vào đây */
html,body{margin:0;padding:0;min-height:100vh;overflow:hidden;overflow-y:auto}
*{box-sizing:border-box;-moz-box-sizing:border-box;-ms-box-sizing:border-box;text-rendering:geometricPrecision}
#intro_homepage{display:flex;justify-content:center;align-items:center;position:relative;width:100%;height:100vh;margin:0!important;padding:0!important;z-index:999;background:url(https://imgur.com/cOCeZjh.png) no-repeat center center!important;background-size:cover!important}
#intro_homepage:before{content:'';opacity:1;position:absolute;top:0;right:0;bottom:0;left:0;z-index:0;background:linear-gradient(transparent,#050a18)}
#intro_homepage:after{content:'';z-index:0;position:absolute;top:0;right:0;bottom:0;left:0;background-image:linear-gradient(transparent,rgba(51,51,51,0.15) 0%,rgba(12,23,36,0.4))}
#intro_homepage .coppy-right p{color:#fff;,font-size:25px;position:fixed;bottom:10px;left:50%;transform:translateX(-50%);font-family:'Sacramento',cursive}
.intro_homepage_content{top:-30px;position:relative;z-index:3}
.intro_label h2{-webkit-animation-duration:3s;font-size:45px;font-weight:700;color:#fff;letter-spacinggg:0;margin:0 0 .25em;padding:0;font-family:'Lobster',cursive;text-transform:none;text-shadow:-1px 1px 0 grey}
.intro_label h2::first-letter{color:yellow}
.intro_label p{-webkit-animation-duration:3s;text-transform:none;font-size:16px;font-weight:400;color:rgba(255,255,255,0.7);margin:0;padding:0;letter-spacing:2px;font-family:'Roboto',sans-serif;text-shadow: -0.5px 0.5px 0 grey;}
.intro_homepage_content .mxh a{font-size:18px;color:#fff;margin:0 10px}
.intro_homepage_content .mxh a:last-child{magrin-right:0}
.intro_label{margin:0 auto;text-align:center;padding:0}
.intro_buttondown a{position:absolute;bottom:10%;left:50%;z-index:2;display:inline-block;-webkit-transform:translate(0,-50%);transform:translate(0,-50%);color:#fff;font:normal 400 20px/1 'Josefin Sans',sans-serif;letter-spacinggg:.1em;text-decoration:none;transition:opacity .3s}
.meta_{vertical-align:middle;text-align:center}
#intro_buttondown a span{position:absolute;top:-45px;left:50%;width:22px;height:22px;margin-left:-12px;border-left:1px solid #FFF;border-bottom:1px solid #fff;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-animation:sdb05 2s infinite;animation:sdb05 2s infinite;box-sizing:border-box}
#intro_buttondown a{animation:zoomInDownn 8s}
@-webkit-keyframes sdb05{0%{opacity:0}50%{opacity:1}100%{opacity:0}}
@keyframes sdb05{0%{opacity:0}50%{opacity:1}100%{opacity:0}}
#intro_buttondown a span:nth-of-type(1){-webkit-animation-delay:0s;animation-delay:0s}
#intro_buttondown a span:nth-of-type(2){-webkit-animation-delay:.2s;animation-delay:.2s}
#intro_buttondown a span:nth-of-type(3){-webkit-animation-delay:.4s;animation-delay:.4s}
.xem-hd{text-align:right;width:1080px;font-size:16px;color:#fff;text-transform:uppercase;letter-spacinggg:0;font-weight:300;position:absolute;bottom:20px;right:30px;z-index:9999}
.xem-hd a{color:rgba(255,255,255,.5);animation:slideToLeft 2s}
.dont-lamviec img{-webkit-animation-duration:3s;width:150px;height:150px;border-radius:100%;border:5px solid #dedede;box-shadow: 0 0 25px 0 rgb(0 0 0 / 10%);}
@media screen and (max-width:600px){#intro_homepage .coppy-right p{font-size:17px}.intro_label h2{font-size:38px}.intro_label p{font-size:13px}.dont-lamviec img{width:100px;height:100px;border-radius:100%}}
.xem-hd a:hover{color:#fff}
.dcmm{border:1px solid #fff;height:100%;width:100%;padding:5px}
.glitch{position:relative}
.glitch::before,.glitch::after{content:attr(data-text);position:absolute;top:0;left:0;width:100%;height:100%}
.glitch::before{left:9px;text-shadow:-2px 0 #49FC00;clip:rect(24px,550px,90px,0);animation:glitch-anim-2 15s infinite linear alternate-reverse}
.glitch::after{left:-9px;text-shadow:-2px 0 #b300fc;clip:rect(85px,550px,140px,0);animation:glitch-anim 15s infinite linear alternate-reverse}
@-webkit-keyframes glitch-anim{0%{clip:rect(85px,9999px,63px,0)}4.166666666666666%{clip:rect(119px,9999px,107px,0)}8.333333333333332%{clip:rect(74px,9999px,67px,0)}12.5%{clip:rect(107px,9999px,55px,0)}16.666666666666664%{clip:rect(1px,9999px,65px,0)}20.833333333333336%{clip:rect(66px,9999px,91px,0)}25%{clip:rect(23px,9999px,0px,0)}29.166666666666668%{clip:rect(127px,9999px,75px,0)}33.33333333333333%{clip:rect(31px,9999px,79px,0)}37.5%{clip:rect(69px,9999px,134px,0)}41.66666666666667%{clip:rect(103px,9999px,45px,0)}45.83333333333333%{clip:rect(100px,9999px,145px,0)}50%{clip:rect(142px,9999px,150px,0)}54.166666666666664%{clip:rect(14px,9999px,9px,0)}58.333333333333336%{clip:rect(54px,9999px,66px,0)}62.5%{clip:rect(117px,9999px,120px,0)}66.66666666666666%{clip:rect(40px,9999px,62px,0)}70.83333333333334%{clip:rect(57px,9999px,91px,0)}75%{clip:rect(78px,9999px,17px,0)}79.16666666666666%{clip:rect(139px,9999px,125px,0)}83.33333333333334%{clip:rect(114px,9999px,90px,0)}87.5%{clip:rect(136px,9999px,145px,0)}91.66666666666666%{clip:rect(47px,9999px,1px,0)}95.83333333333334%{clip:rect(2px,9999px,144px,0)}100%{clip:rect(102px,9999px,30px,0)}}
@keyframes glitch-anim{0%{clip:rect(85px,9999px,63px,0)}4.166666666666666%{clip:rect(119px,9999px,107px,0)}8.333333333333332%{clip:rect(74px,9999px,67px,0)}12.5%{clip:rect(107px,9999px,55px,0)}16.666666666666664%{clip:rect(1px,9999px,65px,0)}20.833333333333336%{clip:rect(66px,9999px,91px,0)}25%{clip:rect(23px,9999px,0px,0)}29.166666666666668%{clip:rect(127px,9999px,75px,0)}33.33333333333333%{clip:rect(31px,9999px,79px,0)}37.5%{clip:rect(69px,9999px,134px,0)}41.66666666666667%{clip:rect(103px,9999px,45px,0)}45.83333333333333%{clip:rect(100px,9999px,145px,0)}50%{clip:rect(142px,9999px,150px,0)}54.166666666666664%{clip:rect(14px,9999px,9px,0)}58.333333333333336%{clip:rect(54px,9999px,66px,0)}62.5%{clip:rect(117px,9999px,120px,0)}66.66666666666666%{clip:rect(40px,9999px,62px,0)}70.83333333333334%{clip:rect(57px,9999px,91px,0)}75%{clip:rect(78px,9999px,17px,0)}79.16666666666666%{clip:rect(139px,9999px,125px,0)}83.33333333333334%{clip:rect(114px,9999px,90px,0)}87.5%{clip:rect(136px,9999px,145px,0)}91.66666666666666%{clip:rect(47px,9999px,1px,0)}95.83333333333334%{clip:rect(2px,9999px,144px,0)}100%{clip:rect(102px,9999px,30px,0)}}
@-webkit-keyframes glitch-anim-2{6.666666666666667%{clip:rect(132px,9999px,149px,0)}10%{clip:rect(74px,9999px,57px,0)}13.333333333333334%{clip:rect(65px,9999px,0px,0)}16.666666666666664%{clip:rect(36px,9999px,84px,0)}20%{clip:rect(106px,9999px,19px,0)}23.333333333333332%{clip:rect(86px,9999px,142px,0)}26.666666666666668%{clip:rect(30px,9999px,2px,0)}30%{clip:rect(101px,9999px,104px,0)}33.33333333333333%{clip:rect(118px,9999px,95px,0)}36.666666666666664%{clip:rect(53px,9999px,108px,0)}40%{clip:rect(53px,9999px,112px,0)}43.333333333333336%{clip:rect(29px,9999px,64px,0)}46.666666666666664%{clip:rect(66px,9999px,63px,0)}50%{clip:rect(29px,9999px,1px,0)}53.333333333333336%{clip:rect(58px,9999px,31px,0)}56.666666666666664%{clip:rect(44px,9999px,112px,0)}60%{clip:rect(41px,9999px,118px,0)}63.33333333333333%{clip:rect(57px,9999px,105px,0)}66.66666666666666%{clip:rect(2px,9999px,41px,0)}70%{clip:rect(93px,9999px,19px,0)}73.33333333333333%{clip:rect(62px,9999px,75px,0)}76.66666666666667%{clip:rect(102px,9999px,89px,0)}80%{clip:rect(117px,9999px,125px,0)}83.33333333333334%{clip:rect(56px,9999px,116px,0)}86.66666666666667%{clip:rect(146px,9999px,67px,0)}90%{clip:rect(124px,9999px,127px,0)}93.33333333333333%{clip:rect(36px,9999px,5px,0)}96.66666666666667%{clip:rect(25px,9999px,99px,0)}100%{clip:rect(19px,9999px,84px,0)}}
@keyframes glitch-anim-2{6.666666666666667%{clip:rect(132px,9999px,149px,0)}10%{clip:rect(74px,9999px,57px,0)}13.333333333333334%{clip:rect(65px,9999px,0px,0)}16.666666666666664%{clip:rect(36px,9999px,84px,0)}20%{clip:rect(106px,9999px,19px,0)}23.333333333333332%{clip:rect(86px,9999px,142px,0)}26.666666666666668%{clip:rect(30px,9999px,2px,0)}30%{clip:rect(101px,9999px,104px,0)}33.33333333333333%{clip:rect(118px,9999px,95px,0)}36.666666666666664%{clip:rect(53px,9999px,108px,0)}40%{clip:rect(53px,9999px,112px,0)}43.333333333333336%{clip:rect(29px,9999px,64px,0)}46.666666666666664%{clip:rect(66px,9999px,63px,0)}50%{clip:rect(29px,9999px,1px,0)}53.333333333333336%{clip:rect(58px,9999px,31px,0)}56.666666666666664%{clip:rect(44px,9999px,112px,0)}60%{clip:rect(41px,9999px,118px,0)}63.33333333333333%{clip:rect(57px,9999px,105px,0)}66.66666666666666%{clip:rect(2px,9999px,41px,0)}70%{clip:rect(93px,9999px,19px,0)}73.33333333333333%{clip:rect(62px,9999px,75px,0)}76.66666666666667%{clip:rect(102px,9999px,89px,0)}80%{clip:rect(117px,9999px,125px,0)}83.33333333333334%{clip:rect(56px,9999px,116px,0)}86.66666666666667%{clip:rect(146px,9999px,67px,0)}90%{clip:rect(124px,9999px,127px,0)}93.33333333333333%{clip:rect(36px,9999px,5px,0)}96.66666666666667%{clip:rect(25px,9999px,99px,0)}100%{clip:rect(19px,9999px,84px,0)}}
@-webkit-keyframes spin{0%{-webkit-transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg)}}
@keyframes spin{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}
@-webkit-keyframes spin-reverse{0%{-webkit-transform:rotate(0deg)}100%{-webkit-transform:rotate(-360deg)}}
@keyframes spin-reverse{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(-360deg);transform:rotate(-360deg)}}
#loader-wrapper .loader-section{position:fixed;top:0;width:51%;height:100%;background:#222;z-index:10}
#loader-wrapper .loader-section.section-left{left:0}
#loader-wrapper .loader-section.section-right{right:0}
.loaded #loader-wrapper .loader-section.section-left{-webkit-transform:translateX(-100%);transform:translateX(-100%);transition:all .7s .3s cubic-bezier(0.645,0.045,0.355,1)}
.loaded #loader-wrapper .loader-section.section-right{-webkit-transform:translateX(100%);transform:translateX(100%);transition:all .7s .3s cubic-bezier(0.645,0.045,0.355,1)}
.loaded #loader{opacity:0;transition:all .3s ease-out}
.loaded #loader-wrapper{visibility:hidden;-webkit-transform:translateY(-100%);transform:translateY(-100%);transition:all .3s 1s ease-out}
.audio-play:after{background-image:url(https://cdn.jsdelivr.net/gh/ngylduy/blog/audio-play.svg)}
.audio-pause{background-image:url(https://cdn.jsdelivr.net/gh/ngylduy/blog/audio-pause.svg)}
.panel-audo{z-index:99999;position:fixed;bottom:5px;left:3%;width:90%;margin-left:auto;margin-right:auto;height:30px;background-repeat:no-repeat;width:94%;height:66px;background-repeat:no-repeat}
.panel-audo>div{height:100%;padding:0 15px}
.panel-audo a{display:block;border-radius:50%;width:40px;height:40px;background-repeat:no-repeat}
.panel-audo a:hover{box-shadow:0 2px 5px rgba(0,0,0,0.16)}
.audio-play{-webkit-animation:hava-shake 1s infinite ease-in-out;-moz-animation:hava-shake 1s infinite ease-in-out;-ms-animation:hava-shake 1s infinite ease-in-out;-o-animation:hava-shake 1s infinite ease-in-out;animation:hava-shake 1s infinite ease-in-out;-webkit-transform-origin:50% 50%;-moz-transform-origin:50% 50%;-ms-transform-origin:50% 50%;-o-transform-origin:50% 50%}
.audio-play:before{content:"";background-color:rgba(117,235,80,0.5);border-radius:50%;display:block;left:0;top:0;margin-top:-20%;margin-left:-20%;height:140%;width:140%;display:block;animation:circle-fill-anim 2.3s infinite ease-in-out}
.audio-play:after{display:block;content:"";width:100%;height:100%;position:absolute;left:0;top:0}
.d-none{display:none!important}
.d-flex{display:-ms-flexbox!important;display:flex!important}
.justify-content-between{-ms-flex-pack:justify!important;justify-content:space-between!important}
.align-items-center{-ms-flex-align:center!important;align-items:center!important}
@-moz-keyframes circle-fill-anim{0%{-moz-transform:rotate(0) scale(.7) skew(1deg);opacity:.3}50%{-moz-transform:rotate(0) -moz-scale(1) skew(1deg);opacity:.3}100%{-moz-transform:rotate(0) scale(.7) skew(1deg);opacity:.3}}
@-webkit-keyframes circle-fill-anim{0%{-webkit-transform:rotate(0) scale(.7) skew(1deg);opacity:.3}50%{-webkit-transform:rotate(0) scale(1) skew(1deg);opacity:.3}100%{-webkit-transform:rotate(0) scale(.7) skew(1deg);opacity:.3}}
@-o-keyframes circle-fill-anim{0%{-o-transform:rotate(0) scale(.7) skew(1deg);opacity:.3}50%{-o-transform:rotate(0) scale(1) skew(1deg);opacity:.3}100%{-o-transform:rotate(0) scale(.7) skew(1deg);opacity:.3}}
@-moz-keyframes hava-shake{0%{transform:rotate(0) scale(1) skew(1deg)}10%{-moz-transform:rotate(-25deg) scale(1) skew(1deg)}20%{-moz-transform:rotate(25deg) scale(1) skew(1deg)}30%{-moz-transform:rotate(-25deg) scale(1) skew(1deg)}40%{-moz-transform:rotate(25deg) scale(1) skew(1deg)}50%{-moz-transform:rotate(0) scale(1) skew(1deg)}100%{-moz-transform:rotate(0) scale(1) skew(1deg)}}
@-webkit-keyframes hava-shake{0%{-webkit-transform:rotate(0) scale(1) skew(1deg)}10%{-webkit-transform:rotate(-25deg) scale(1) skew(1deg)}20%{-webkit-transform:rotate(25deg) scale(1) skew(1deg)}30%{-webkit-transform:rotate(-25deg) scale(1) skew(1deg)}40%{-webkit-transform:rotate(25deg) scale(1) skew(1deg)}50%{-webkit-transform:rotate(0) scale(1) skew(1deg)}100%{-webkit-transform:rotate(0) scale(1) skew(1deg)}}
@-o-keyframes hava-shake{0%{-o-transform:rotate(0) scale(1) skew(1deg)}10%{-o-transform:rotate(-25deg) scale(1) skew(1deg)}20%{-o-transform:rotate(25deg) scale(1) skew(1deg)}30%{-o-transform:rotate(-25deg) scale(1) skew(1deg)}40%{-o-transform:rotate(25deg) scale(1) skew(1deg)}50%{-o-transform:rotate(0) scale(1) skew(1deg)}100%{-o-transform:rotate(0) scale(1) skew(1deg)}}
.pulse{-webkit-animation:pulse .4s linear infinite;-moz-animation:pulse .4s linear infinite;-ms-animation:pulse .4s linear infinite;animation:pulse .4s linear infinite}
@keyframes "pulse"{0%{-webkit-transform:scale(1);-moz-transform:scale(1);-o-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}50%{-webkit-transform:scale(0.8);-moz-transform:scale(0.8);-o-transform:scale(0.8);-ms-transform:scale(0.8);transform:scale(0.8)}100%{-webkit-transform:scale(1);-moz-transform:scale(1);-o-transform:scale(1);-ms-transform:scale(1);transform:scale(1)}}
@-moz-keyframes pulse{0%{-moz-transform:scale(1);transform:scale(1)}50%{-moz-transform:scale(0.8);transform:scale(0.8)}100%{-moz-transform:scale(1);transform:scale(1)}}
@-webkit-keyframes "pulse"{0%{-webkit-transform:scale(1);transform:scale(1)}50%{-webkit-transform:scale(0.8);transform:scale(0.8)}100%{-webkit-transform:scale(1);transform:scale(1)}}
@-ms-keyframes "pulse"{0%{-ms-transform:scale(1);transform:scale(1)}50%{-ms-transform:scale(0.8);transform:scale(0.8)}100%{-ms-transform:scale(1);transform:scale(1)}}
.bg-header-bubbles{top:0;left:0;width:100%;height:0;z-index:0}.bg-header-bubbles li{position:absolute;list-style-type:none!important;display:block;width:40px;height:40px;background-color:rgba(255,255,255,0.15);bottom:-100px;-webkit-animation:square 25s infinite;animation:square 25s infinite;-webkit-transition-timing-function:linear;transition-timing-function:linear}.bg-header-bubbles li:nth-child(1){left:10%}.bg-header-bubbles li:nth-child(2){left:20%;width:65px;height:65px;-webkit-animation-delay:2s;animation-delay:2s;-webkit-animation-duration:17s;animation-duration:17s}.bg-header-bubbles li:nth-child(3){left:25%;-webkit-animation-delay:4s;animation-delay:4s}.bg-header-bubbles li:nth-child(4){left:40%;width:60px;height:60px;-webkit-animation-duration:22s;animation-duration:22s;background-color:rgba(255,255,255,0.25)}.bg-header-bubbles li:nth-child(5){left:70%}.bg-header-bubbles li:nth-child(6){left:80%;width:90px;height:90px;-webkit-animation-delay:3s;animation-delay:3s;background-color:rgba(255,255,255,0.2)}.bg-header-bubbles li:nth-child(7){left:32%;width:100px;height:100px;-webkit-animation-delay:7s;animation-delay:7s}.bg-header-bubbles li:nth-child(8){left:55%;width:20px;height:20px;-webkit-animation-delay:15s;animation-delay:15s;-webkit-animation-duration:40s;animation-duration:40s}.bg-header-bubbles li:nth-child(9){left:25%;width:10px;height:10px;-webkit-animation-delay:2s;animation-delay:2s;-webkit-animation-duration:40s;animation-duration:40s;background-color:rgba(255,255,255,0.3)}.bg-header-bubbles li:nth-child(10){left:90%;width:80px;height:80px;-webkit-animation-delay:11s;animation-delay:11s}@-webkit-keyframes square {0%{-webkit-transform:translateY(0);transform:translateY(0)}100%{-webkit-transform:translateY(-700px) rotate(600deg);transform:translateY(-700px) rotate(600deg)}}@keyframes square {0%{-webkit-transform:translateY(0);transform:translateY(0)}100%{-webkit-transform:translateY(-700px) rotate(600deg);transform:translateY(-700px) rotate(600deg)}
*/
body#layout::before {
content: "RIP BY THAI HONG LAM DEP GAI MA CUNG DEP TRAI";
position: absolute;
top: 20px;
right: 20px;
z-index: 1;
padding: 10px 20px;
font-size: 28px;
color: #1B699D;
background: #fff;
border-radius: 20px;
border: 1px solid #d6d6d6;
}
body#layout .widget-content {
box-shadow: none;
}

--></style>
<meta name='google-adsense-platform-account' content='ca-host-pub-1556223355139109'/>
<meta name='google-adsense-platform-domain' content='blogspot.com'/>

</head>
<!-- Bắt đầu phần hiển thị -->
<body>
<div id='intro_homepage'>
<div class='meta_'>
<div class='intro_homepage_content'>
<div class='intro_label'>
<a class='dont-lamviec' href='https://www.facebook.com/<?php echo ("ex_fb"); ?>' imageanchor='1'>
<img border='0' class='animated zoomIn' src='<?php echo ("ex_avatar"); ?>'/></a><br/><br/>
<h2 class='_title glitch animated fadeInDown' data-text='<?php echo ("ex_name"); ?>'>
<?php echo ("ex_name"); ?></h2>
<p class='animated fadeInRight'>Hãy sống là chính mình
<br/>
Bình thường nhưng không tầm thường...<i class='fa fa-play-circle-o' onclick='document.getElementById(&#39;audio5&#39;).play();' style='font-size:18px' title='play'><i class="fa fa-headphones" aria-hidden="true"></i></i>
<audio id='audio5' preload='none'>
<source src='<?php echo ("ex_music"); ?>'></source>Trình duyệt của bạn không hỗ trợ thẻ audio, vui lòng cập nhật phiên bản mới nhất hoặc đổi trình duyệt.</audio>"</p>
</div>
<br/>
<div class='mxh'>
<a href='//facebook.com/<?php echo ("ex_fb"); ?>' rel='noopener' target='_blank' title='Theo dõi tôi trên Facebook'><i class='fa fa-facebook'></i></a>
<a href='//t.me/<?php echo ("ex_twitter"); ?>' rel='noopener' target='_blank' title='Gửi tin nhắn tôi trên Telegram'><i class='fa fa-telegram   '></i></a>
<a href='tel:<?php echo ("ex_phone"); ?>' rel='noopener' target='_blank' title='Gọi điện cho tôi'><i class='fa fa-phone'></i></a>
<a href='mailto:<?php echo ("ex_gmail"); ?>' rel='noopener' target='_blank' title='Gửi email cho tôi'><i class='fa fa-envelope-o'></i></a>
</div>
</div></div>
<div class='meta_'>
</div>
<div class='coppy-right'>
<p>
~ made with <i class='fa fa-heart animated infinite tada' style='animation-duration: 2s;color:red'></i> and <i class='fa fa-headphones animated infinite swing' style='color:#ff7062'></i>
</p></div>
<div class='panel-audo'>
<div class='d-flex justify-content-between align-items-center'>
<a class='audio-play' href='javascript:void(0)'></a>
</div>
<ul class='playlist d-none'>
<li data-audio='<?php echo ("ex_music"); ?>'>Audio</li>
<li data-audio='<?php echo ("ex_music"); ?>'>Audio</li>
<li data-audio='<?php echo ("ex_music"); ?>'>Audio</li>
<li data-audio='<?php echo ("ex_music"); ?>'>Audio</li>
</ul>
<ul class='bg-header-bubbles'><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li></ul>
</div>
</div>
<div class='navbar no-items section' id='navbar'></div>
<script>
new WOW().init();
</script>
<script src='https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js'></script>
<script>//<![CDATA[
$(document).ready(function() {
 var sounds = [];
    var activeTrack = 0;
    var musicTracker = 'noMusic';
    $('.playlist li').each(function(index, el) {
     var load = new Audio($(this).data('audio'));
  load.load();
  load.addEventListener('ended', function() {
   forward();
  });
  sounds.push(load);
    });
 $('body').on('click','.audio-play',function(){
  playPause();
 });
 $('body').on('click','.audio-pause',function(){
  playPause();
 });
    var playPause = function() {
  if (musicTracker == 'noMusic') {
   sounds[activeTrack].play();
   musicTracker = 'playMusic';
   $(".audio-play").attr('class','audio-pause');
  } else {
   sounds[activeTrack].pause();
   musicTracker = 'noMusic';
   $(".audio-pause").attr('class','audio-play');
  }
  showPlaying();
 };
 var forward = function() {
  function increment() {
   if (activeTrack < sounds.length - 1)
    activeTrack++;
   else activeTrack = 0;
  }
  if (musicTracker == 'playMusic') {
   sounds[activeTrack].pause();
   sounds[activeTrack].currentTime = 0;
   increment();
   sounds[activeTrack].play();
  } else {
   increment();
  }
 };
//Auto play 
});
//]]></script>
<!--setTimeout(() =>{ sounds[activeTrack].play(); $(".audio-play").attr('class','audio-pause'); }, 3000);-->
<script type='text/javascript'>
//<![CDATA[
document.write('<img height="80px" src="https://i.imgur.com/SXCtWIU.gif" style="position:fixed;bottom:-3px;right:0;z-index:999"/>')
//]]>
</script>
<div class='no-items section' id='codepro'></div>

<script type="text/javascript" src="https://www.blogger.com/static/v1/widgets/2767558538-widgets.js"></script>
<script type='text/javascript'>
window['__wavt'] = 'AOuZoY5MA-xB_nYLtbdPtkTIBi_lTB8IdA:1689492642925';_WidgetManager._Init('//www.blogger.com/rearrange?blogID\x3d5775378587055514031','//www.thaihonglam.sg/','5775378587055514031');
_WidgetManager._SetDataContext([{'name': 'blog', 'data': {'blogId': '5775378587055514031', 'title': 'Ch\xe0o b\u1ea1n !', 'url': 'https://www.thaihonglam.sg/', 'canonicalUrl': 'https://www.thaihonglam.sg/', 'homepageUrl': 'https://www.thaihonglam.sg/', 'searchUrl': 'https://www.thaihonglam.sg/search', 'canonicalHomepageUrl': 'https://www.thaihonglam.sg/', 'blogspotFaviconUrl': 'https://www.thaihonglam.sg/favicon.ico', 'bloggerUrl': 'https://www.blogger.com', 'hasCustomDomain': true, 'httpsEnabled': true, 'enabledCommentProfileImages': true, 'gPlusViewType': 'FILTERED_POSTMOD', 'adultContent': false, 'analyticsAccountNumber': '', 'encoding': 'UTF-8', 'locale': 'vi', 'localeUnderscoreDelimited': 'vi', 'languageDirection': 'ltr', 'isPrivate': false, 'isMobile': false, 'isMobileRequest': false, 'mobileClass': '', 'isPrivateBlog': false, 'isDynamicViewsAvailable': true, 'feedLinks': '\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Ch\xe0o b\u1ea1n ! - Atom\x22 href\x3d\x22https://www.thaihonglam.sg/feeds/posts/default\x22 /\x3e\n\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/rss+xml\x22 title\x3d\x22Ch\xe0o b\u1ea1n ! - RSS\x22 href\x3d\x22https://www.thaihonglam.sg/feeds/posts/default?alt\x3drss\x22 /\x3e\n\x3clink rel\x3d\x22service.post\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Ch\xe0o b\u1ea1n ! - Atom\x22 href\x3d\x22https://www.blogger.com/feeds/5775378587055514031/posts/default\x22 /\x3e\n', 'meTag': '\x3clink rel\x3d\x22me\x22 href\x3d\x22https://www.blogger.com/profile/16421183765568543470\x22 /\x3e\n', 'adsenseHostId': 'ca-host-pub-1556223355139109', 'adsenseHasAds': false, 'adsenseAutoAds': false, 'boqCommentIframeForm': true, 'loginRedirectParam': '', 'view': '', 'dynamicViewsCommentsSrc': '//www.blogblog.com/dynamicviews/4224c15c4e7c9321/js/comments.js', 'dynamicViewsScriptSrc': '//www.blogblog.com/dynamicviews/e4ee8544418f24e9', 'plusOneApiSrc': 'https://apis.google.com/js/platform.js', 'disableGComments': true, 'blitzPostInterstitial': true, 'interstitialAccepted': false, 'sharing': {'platforms': [{'name': 'Nh\u1eadn \u0111\u01b0\u1eddng li\xean k\u1ebft', 'key': 'link', 'shareMessage': 'Nh\u1eadn \u0111\u01b0\u1eddng li\xean k\u1ebft', 'target': ''}, {'name': 'Facebook', 'key': 'facebook', 'shareMessage': 'Chia s\u1ebb v\u1edbi Facebook', 'target': 'facebook'}, {'name': 'BlogThis!', 'key': 'blogThis', 'shareMessage': 'BlogThis!', 'target': 'blog'}, {'name': 'Twitter', 'key': 'twitter', 'shareMessage': 'Chia s\u1ebb v\u1edbi Twitter', 'target': 'twitter'}, {'name': 'Pinterest', 'key': 'pinterest', 'shareMessage': 'Chia s\u1ebb v\u1edbi Pinterest', 'target': 'pinterest'}, {'name': 'Email', 'key': 'email', 'shareMessage': 'Email', 'target': 'email'}], 'disableGooglePlus': true, 'googlePlusShareButtonWidth': 0, 'googlePlusBootstrap': '\x3cscript type\x3d\x22text/javascript\x22\x3ewindow.___gcfg \x3d {\x27lang\x27: \x27vi\x27};\x3c/script\x3e'}, 'hasCustomJumpLinkMessage': false, 'jumpLinkMessage': '\u0110\u1ecdc th\xeam', 'pageType': 'index', 'pageName': '', 'pageTitle': 'Ch\xe0o b\u1ea1n !'}}, {'name': 'features', 'data': {}}, {'name': 'messages', 'data': {'edit': 'Ch\u1ec9nh s\u1eeda', 'linkCopiedToClipboard': '\u0110\xe3 sao ch\xe9p \u0111\u01b0\u1eddng li\xean k\u1ebft v\xe0o b\u1ea3ng nh\u1edb t\u1ea1m!', 'ok': 'Ok', 'postLink': 'Li\xean k\u1ebft b\xe0i \u0111\u0103ng'}}, {'name': 'template', 'data': {'name': 'custom', 'localizedName': 'T\xf9y ch\u1ec9nh', 'isResponsive': false, 'isAlternateRendering': false, 'isCustom': true}}, {'name': 'view', 'data': {'classic': {'name': 'classic', 'url': '?view\x3dclassic'}, 'flipcard': {'name': 'flipcard', 'url': '?view\x3dflipcard'}, 'magazine': {'name': 'magazine', 'url': '?view\x3dmagazine'}, 'mosaic': {'name': 'mosaic', 'url': '?view\x3dmosaic'}, 'sidebar': {'name': 'sidebar', 'url': '?view\x3dsidebar'}, 'snapshot': {'name': 'snapshot', 'url': '?view\x3dsnapshot'}, 'timeslide': {'name': 'timeslide', 'url': '?view\x3dtimeslide'}, 'isMobile': false, 'title': 'Ch\xe0o b\u1ea1n !', 'description': '', 'url': 'https://www.thaihonglam.sg/', 'type': 'feed', 'isSingleItem': false, 'isMultipleItems': true, 'isError': false, 'isPage': false, 'isPost': false, 'isHomepage': true, 'isArchive': false, 'isLabelSearch': false}}]);
</script>
<script type='text/javascript'>
            /* Thả tim */
            ! function(e, t, a) {
                function n() {
                    c(".heart{width: 10px;height: 10px;position: fixed;background: #f00;transform: rotate(45deg);-webkit-transform: rotate(45deg);-moz-transform: rotate(45deg);}.heart:after,.heart:before{content: '';width: inherit;height: inherit;background: inherit;border-radius: 50%;-webkit-border-radius: 50%;-moz-border-radius: 50%;position: fixed;}.heart:after{top: -5px;}.heart:before{left: -5px;}"), o(), r()
                }
                function r() {
                    for (var e = 0; e < d.length; e++) d[e].alpha <= 0 ? (t.body.removeChild(d[e].el), d.splice(e, 1)) : (d[e].y--, d[e].scale += .004, d[e].alpha -= .013, d[e].el.style.cssText = "left:" + d[e].x + "px;top:" + d[e].y + "px;opacity:" + d[e].alpha + ";transform:scale(" + d[e].scale + "," + d[e].scale + ") rotate(45deg);background:" + d[e].color + ";z-index:99999");
                    requestAnimationFrame(r)
                }
                function o() {
                    var t = "function" == typeof e.onclick && e.onclick;
                    e.onclick = function(e) {
                        t && t(), i(e)
                    }
                }
                function i(e) {
                    var a = t.createElement("div");
                    a.className = "heart", d.push({
                        el: a,
                        x: e.clientX - 5,
                        y: e.clientY - 5,
                        scale: 1,
                        alpha: 1,
                        color: s()
                    }), t.body.appendChild(a)
                }
                function c(e) {
                    var a = t.createElement("style");
                    a.type = "text/css";
                    try {
                        a.appendChild(t.createTextNode(e))
                    } catch (t) {
                        a.styleSheet.cssText = e
                    }
                    t.getElementsByTagName("head")[0].appendChild(a)
                }
                function s() {
                    return "rgb(" + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + "," + ~~(255 * Math.random()) + ")"
                }
                var d = [];
                e.requestAnimationFrame = function() {
                    return e.requestAnimationFrame || e.webkitRequestAnimationFrame || e.mozRequestAnimationFrame || e.oRequestAnimationFrame || e.msRequestAnimationFrame || function(e) {
                        setTimeout(e, 1e3 / 60)
                    }
                }(), n()
            }(window, document);
            /* Kết thúc thả tim */
            /* message */
            var messageBox = document.querySelector('.js-message');
            var btn = document.querySelector('.js-message-btn');
            var card = document.querySelector('.js-profile-card');
            var closeBtn = document.querySelectorAll('.js-message-close');
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                card.classList.add('active');
            });
            closeBtn.forEach(function(element, index) {
                console.log(element);
                element.addEventListener('click', function(e) {
                    e.preventDefault();
                    card.classList.remove('active');
                });
            });
            /* end message */
            /* chạy số animate */
            function animateNumber(finalNumber, duration = 5000, startNumber = 0, callback) {
                let currentNumber = startNumber
                const interval = window.setInterval(updateNumber, 17)
                function updateNumber() {
                    if (currentNumber >= finalNumber) {
                        clearInterval(interval)
                    } else {
                        let inc = Math.ceil(finalNumber / (duration / 17))
                        if (currentNumber + inc > finalNumber) {
                            currentNumber = finalNumber
                            clearInterval(interval)
                        } else {
                            currentNumber += inc
                        }
                        callback(currentNumber)
                    }
                }
            }
            document.addEventListener('DOMContentLoaded', function() {
                animateNumber(1236889, 5000, 0, function(number) {
                    const formattedNumber = number.toLocaleString()
                    document.getElementById('count-followers').innerText = formattedNumber
                })
                animateNumber(1, 5000, 0, function(number) {
                    const formattedNumber = number.toLocaleString()
                    document.getElementById('count-following').innerText = formattedNumber
                })
                animateNumber(68, 5000, 0, function(number) {
                    const formattedNumber = number.toLocaleString()
                    document.getElementById('count-posts').innerText = formattedNumber
                })
                animateNumber(3, 5000, 0, function(number) {
                    const formattedNumber = number.toLocaleString()
                    document.getElementById('count-works').innerText = formattedNumber
                })
            })
            /* kết thúc chạy số animate */
        </script>
    <!--<head>

</head>-->
<script type='text/javascript'>
/*<![CDATA[*/
// Số bông tuyết (Không khuyến khích nhiều hơn 30-40)
var snowmax=40
// Tùy chọn màu sắc cho tuyết, có thể nhiều màu khác nhau như bên dưới
var snowcolor=new Array("#aaaacc","#ddddff","#ccccdd","#f3f3f3","#f0ffff")
// Thiết lập font chữ để tạo ra tuyết, vì các font chữ khác nhau thì hình dạng dấu * cũng khác nhau
var snowtype=new Array("Times","Arial","Times","Verdana")
// Thiết lập ký tự tạo ra tuyết (Khuyến khích: *)
var snowletter="*"
// Thiết lập tốc độ rơi xuống (Đề nghị trong khoảng 0.3-2)
var sinkspeed=0.6
// Kích thước tối đa của bông tuyết
var snowmaxsize=50
// Kích thước tối thiểu của bông tuyết
var snowminsize=8
// Thiết lập vùng tuyết rơi
// 1 cho toàn bộ trang web, 2 cho phần bên trái
// 3 cho phần trung tâm, 4 cho phần bên phải
var snowingzone=1
// Không được chỉnh code ở bên dưới
var snow=new Array()
var marginbottom
var marginright
var timer
var i_snow=0
var x_mv=new Array();
var crds=new Array();
var lftrght=new Array();
var browserinfos=navigator.userAgent
var ie5=document.all&&document.getElementById&&!browserinfos.match(/Opera/)
var ns6=document.getElementById&&!document.all
var opera=browserinfos.match(/Opera/)
var browserok=ie5||ns6||opera
function randommaker(range) {
        rand=Math.floor(range*Math.random())
    return rand
}
function initsnow() {
        if (ie5 || opera) {
                marginbottom = document.body.scrollHeight
                marginright = document.body.clientWidth-15
        }
        else if (ns6) {
                marginbottom = document.body.scrollHeight
                marginright = window.innerWidth-15
        }
        var snowsizerange=snowmaxsize-snowminsize
        for (i=0;i<=snowmax;i++) {
                crds[i] = 0;
            lftrght[i] = Math.random()*15;
            x_mv[i] = 0.03 + Math.random()/10;
                snow[i]=document.getElementById("s"+i)
                snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
                snow[i].size=randommaker(snowsizerange)+snowminsize
                snow[i].style.fontSize=snow[i].size+'px';
                snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
                snow[i].style.zIndex=1000
                snow[i].sink=sinkspeed*snow[i].size/5
                if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
                if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
                if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
                if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
                snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
                snow[i].style.left=snow[i].posx+'px';
                snow[i].style.top=snow[i].posy+'px';
        }
        movesnow()
}
function movesnow() {
        for (i=0;i<=snowmax;i++) {
                crds[i] += x_mv[i];
                snow[i].posy+=snow[i].sink
                snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i])+'px';
                snow[i].style.top=snow[i].posy+'px';
                if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
                        if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
                        if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
                        if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
                        if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
                        snow[i].posy=0
                }
        }
        var timer=setTimeout("movesnow()",50)
}
for (i=0;i<=snowmax;i++) {
        document.write("<span id='s"+i+"' style='position:absolute;top:-"+snowmaxsize+"'>"+snowletter+"</span>")
}
if (browserok) {
        window.onload=initsnow
}
//]]>
</script>
</body>
<!-- Kết thúc phần hiển thị -->
</html>