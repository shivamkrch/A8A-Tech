<?php
$include="<meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='icon' href='images/a8alogo.png' type='image/x-icon'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/mousetrap/1.4.6/mousetrap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/mousetrap/1.4.6/mousetrap-bind-dictionary.min.js'></script>
<script src='js/jQueryRotate.js' type='text/javascript'></script>
  <script src='js/a8ajs.js' type='text/javascript'></script>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <style>
  @font-face {
   font-family: Elephant;
   src: url(fonts/ELEPHNT.TTF);
}
body{font-family: Verdana;background:#F7F6F5}
@font-face {
   font-family: Consolas;
   src: url(fonts/consola.ttf);
}           
@font-face {
   font-family: Verdana;
   src: url(fonts/verdana.ttf);
}
@font-face {
   font-family: Georgia;
   src: url(fonts/georgia.ttf);
}
            #banner{background: #F7F6F5 !important;top:0px !important;height:80px}
            #brand{text-decoration: none;color: #017EED;font-weight: bolder;font-family: Elephant;font-size: 40px;text-shadow: -10px 15px 25px #746B6A;}
            #domain:hover,#domain:focus {color: #F67205;text-shadow: -6px 10px 20px #746B6A;}
            .l,.newslink,.page-link{color: black}
            .newslink:hover,:focus{text-decoration:none;}
            .recent{text-align: justify}
            .sh{color:#fff;background:rgb(0,0,0,0.5);bottom:10px;padding:3px }
            .link:hover,:focus{text-decoration:none;color:#fff}
            #subBtn:focus{color: whitesmoke}
            #subBtn:focus:hover{color: black}
            .nav-link{letter-spacing: 1px;font-family: Montserrat;font-size:15px}
            .animate-zoom {animation:animatezoom 0.6s}@keyframes animatezoom{from{transform:scale(0)} to{transform:scale(1)}}
           .close{color: white}
           .slideanim, .slideanim1 {visibility:hidden;}
           .page-item{border-radius: 3px}
           .nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #3B3F43;
}
           .x:focus,.l:focus{transform: scale(1);-webkit-transform: scale(1);-ms-transform: scale(1)}
.slide {
    /* The name of the animation */
    animation-name: slide;
    -webkit-animation-name: slide; 
    /* The duration of the animation */
    animation-duration: 1.2s; 
    -webkit-animation-duration: 1.2s;
    /* Make the element visible */
    visibility: visible; 
}

/* Go from 0% to 100% opacity (see-through) and specify the percentage from when to slide in the element along the Y-axis */
@keyframes slide {
    0% {
        opacity: 0;
        transform: translateY(100%);
    } 
    100% {
        opacity: 1;
        transform: translateY(0%);
    } 
}
@-webkit-keyframes slide {
    0% {
        opacity: 0;
        -webkit-transform: translateY(100%);
    } 
    100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
    }
}

  </style>";
$include2='<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script type="text/javascript">
            
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: "en", includedLanguages: "bn,en,gu,hi,kn,ml,mr,mt,ne,pa,sd,ta,te,ur", layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, "google_translate_element");
}

</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style>
    .goog-te-banner-frame.skiptranslate {display: none !important;} 
body { top: 0px !important; }
div#google_translate_element div.goog-te-gadget-simple {
            border: none;
            background-color: transparent;
            /*background-color: #17548d;*/ /*#e3e3ff*/
        }
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value:hover {
            text-decoration: none;
        }
         div#google_translate_element:hover div.goog-te-gadget-simple a.goog-te-menu-value span{color:black}
         
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span{
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            margin-left:4px; letter-spacing: 1px
        }

        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span:hover
        {
            color: black;
        }
        
        .goog-te-gadget-icon {
            display: none !important;
            /*background: url("url for the icon") 0 0 no-repeat !important;*/
        }

        /* Remove the down arrow */
        /* when dropdown open */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="color: rgb(213, 213, 213);"] {
            display: none;
        }
        /* after clicked/touched */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="color: rgb(118, 118, 118);"]{
            display: none;
        }
        /* on page load (not yet touched or clicked) */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="color: rgb(155, 155, 155);"]{
            display: none;
        }

        /* Remove span with left border line | (next to the arrow) in Chrome & Firefox */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="border-left: 1px solid rgb(187, 187, 187);"]{
            display: none;
        }
        /* Remove span with left border line | (next to the arrow) in Edge & IE11 */
        div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span[style="border-left-color: rgb(187, 187, 187); border-left-width: 1px; border-left-style: solid;"]{
            display: none;
        }
 
        /* OVERRIDE GOOGLE TRANSLATE WIDGET CSS END */
        #snackbar {
    visibility: hidden; /* Hidden by default. Visible on click */
    min-width: 250px; /* Set a default minimum width */
    margin-left: -125px; /* Divide value of min-width by 2 */
     background: #28a745;/* Black background color */
    color: #fff; /* White text color */
    text-align: center; /* Centered text */
    border-radius: 2px; /* Rounded borders */
    padding: 16px; /* Padding */
    position: fixed; /* Sit on top of the screen */
    z-index: 2000; /* Add a z-index if needed */
    left: 50%; /* Center the snackbar */
    bottom: 30px; /* 30px from the bottom */
    font-weight: bold;
    font-size: 20px;
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
    visibility: visible; /* Show the snackbar */

/* Add animation: Take 0.5 seconds to fade in and out the snackbar. 
However, delay the fade out process for 2.5 seconds */
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
    from {bottom: -55px; opacity: 0;} 
    to {bottom: 300px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: -55px; opacity: 0;}
    to {bottom: 100px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 100px; opacity: 1;} 
    to {bottom: -55px; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 100px; opacity: 1;}
    to {bottom: -55px; opacity: 0;}
}
    </style> ';
$homecss="<style>#home{color:#98A0A8;}"
        . "#home:hover{color:#C6C9CD}</style>";
$instaembed='<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/BkwULpYg11O/" data-instgrm-version="8" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                    <div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> 
                            <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); 
                                 display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;">
                            </div>
                            
                        </div> 
                        <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BkwULpYg11O/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">
                                A8A Tech is a Tech News and Update portal where you get all the news stuff related to #technology on a daily basis. @shivamkrch @n.a.n.d.a.n_s.h.a.r.m.a @vipuljay @rs_jha945</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                    A post shared by <a href="https://www.instagram.com/a8atech/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> A8A Tech</a> (@a8atech) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-07-03T03:46:20+00:00">Jul 2, 2018 at 8:46pm PDT</time></p></div></blockquote> 
                <script async defer src="//www.instagram.com/embed.js"></script>';
$fbjssdk='<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, "script", "facebook-jssdk"));</script>';
$twitterembed='<a class="twitter-timeline" data-width="600" data-theme="light" data-link-color="#2B7BB9" href="https://twitter.com/A8A_Tech?ref_src=twsrc%5Etfw">Tweets by A8A_Tech</a>'
        . ' <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>';
$fbembed='<div class="fb-page col-sm" data-href="https://www.facebook.com/A8ATech/" data-tabs="messages" data-width="500" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/A8ATech/" class="fb-xfbml-parse-ignore">
                <a href="https://www.facebook.com/A8ATech/">A8A Tech</a>
            </blockquote>
    </div>';
$fbsharebtn='<div class="fb-share-button mt-3" data-href="https://www.facebook.com/A8ATech/" data-layout="button" data-size="large" data-mobile-iframe="true">
                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2FA8ATech%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a>
                </div>';
$fblikebtn='<div class="fb-like mb-1" data-href="https://fb.com/a8atech" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>';
$twitterfollowbtn='<a href="https://twitter.com/A8A_Tech?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-screen-name="false" data-show-count="false">Follow @A8A_Tech</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>';
$customscrollbar='<style>/* width */
::-webkit-scrollbar {
    width: 8px;
   
}

/* Track */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey; 
    border: 0px;
    background: #D0D0D2;
    
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: rgb(0,0,0,0.5); 
    border-radius: 0px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: rgb(0,0,0,0.8); 
    
}</style>';



