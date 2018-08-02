<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once './include/variables.php';
        
    if(isset($_GET['id'])){
        $conn= mysqli_connect("localhost", "root", "", "a8atech_db");
        if(!$conn)
            die(mysqli_errno($conn)."Unable to connect.");
        $id=$_GET['id'];
        $sql="SELECT * FROM authors where id=".$id;
        $auth= mysqli_query($conn, $sql);
        $abtAuth= mysqli_fetch_assoc($auth);
        $sql2="SELECT id,name FROM authors";
        $dd= mysqli_query($conn, $sql2);
        
    }
    ?>
    
  <title><?=$abtAuth['name'];?> | About Author</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='icon' href='<?="images/".$abtAuth['image'];?>' type='image/x-icon'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/mousetrap/1.4.6/mousetrap.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/mousetrap/1.4.6/mousetrap-bind-dictionary.min.js'></script>
   <script src="js/abtAuth.js" type="text/javascript"></script>
<script type="text/javascript">
            
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'bn,en,gu,hi,kn,ml,mr,mt,ne,pa,sd,ta,te,ur', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
}

</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
      overflow-x: hidden;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #0483E7; /* blue */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #E75304; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      width: 100%;
      padding-top: 0px;
      padding-bottom: 0px;
      border: 0;
      height: 40px;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  .b:hover,:focus{color:#007bff}
  #top:hover,:focus{color: #044EC1}
            .flw:hover,:focus,a.sml:hover,:focus{
                transform: scale(1.1);-webkit-transform: scale(1.1);-ms-transform: scale(1.1)
            }
            a.sml{color: black;text-decoration: none}
            .link1:hover,.link1:focus,a.sml:hover.a.sml:focus{text-decoration: none;}
            .x:focus{transform: scale(1);-webkit-transform: scale(1);-ms-transform: scale(1)}
            #feedbackBtn{margin-top: 1rem;float: right}
            .btn-outline-primary{color:#007bff;background-color:transparent;background-image:none;border-color:#007bff}
            .btn-outline-primary:hover,:focus{color:#fff;background-color:#007bff;border-color:#007bff}
            .btn-outline-dark{color:#343a40;background-color:transparent;background-image:none;border-color:#343a40}
            .btn-outline-dark:hover,:focus{color:#fff;background-color:#343a40;border-color:#343a40}
  </style>
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
            color: #black;
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
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="0" id="banner">
<?=$fbjssdk ?>
    
<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" onclick="expandNav();">
            <span class="glyphicon glyphicon-chevron-down" id="navexpand" style="color: grey"></span>                        
      </button>
        <a class="navbar-brand x" href="index.php" title="Home"><span class="glyphicon glyphicon-home b" style="margin-right: 8px;">
            
            </span></a>
        <ul class="nav navbar-nav">
        <li class="dropdown">
        <a class="nav-link dropdown-toggle x" href="#" id="navdrop" data-toggle="dropdown"><?=$abtAuth['name'];?><span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li style="color: black;margin-left: 25px"><b>Authors</b></li>
            <?php
               
                for ($index = 0; $index < mysqli_num_rows($dd); $index++) {
                    $ddlist= mysqli_fetch_assoc($dd);
                    if($ddlist['id']!=$id)
                        echo '<li><a class="dropdown-item x" href="aboutAuthor.php?id='.$ddlist['id']
                            .'">'.$ddlist['name'].'</a></li>';
                    
                }
                
            ?>
            
        </ul>
        </li>
        </ul>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#who">WHO</a></li>
        <li><a href="#what">WHAT</a></li>
        <li><a href="#where">WHERE</a></li>
        <li style=" margin-left: 10px"><div id="google_translate_element" class="btn btn-light btn-outline-dark p-1 x "
                 title="Translate this page" style="margin-top: 6px"></div></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Who Container -->
<div class="container-fluid bg-1 text-center" id="who">
  <h3 class="margin">Who Am I?</h3>
  <img src="<?="images/".$abtAuth['image'];?>" class="img-responsive img-circle margin" style="display:inline"
       alt="<?=$abtAuth['name'];?>" width="350" height="350">
  <h3><?=$abtAuth['who'];?></h3>
</div>

<!-- What Container -->
<div class="container-fluid bg-2 text-center" id="what">
  <h3 class="margin">What Am I?</h3>
  <p><?=$abtAuth['what'];?></p>
  
</div>

<!-- Where Container (Grid) -->
<div class="container-fluid bg-3 text-center" id="where">    
  <h3 class="margin">Where To Find Me?</h3><br>
  <div class="row">
    <div class="col-md-4">
        <h1 style="color:#3B5998;margin-bottom: 3rem;"><span class="fa fa-facebook-square" style="margin-right: 8px"></span>Facebook</h1>
      <?=$fbembed."<br>".$fbsharebtn ?>
    </div>
    <div class="col-md-4"> 
      <h1 style="color:#bc2a8d;"><span class="fa fa-instagram" style="margin-right: 8px"></span>Instagram</h1>
      <?php
      if($abtAuth['insta']=="")
          echo $instaembed;
      else {
          echo $abtAuth['insta'];
      }
      ?>
    </div>
    <div class="col-md-4"> 
      <h1 style="color:#1DA1F2;margin-bottom: 3rem;"><span class="fa fa-twitter-square" style="margin-right: 8px"></span>Twitter</h1>
      <?php
            if ($abtAuth['twitter']=="") {
                echo $twitterembed."<br>".$twitterfollowbtn;
            } else {
                echo $abtAuth['twitter'];
            }
       ?>
    </div>
  </div>
</div>

<div class="container-fluid" style="background: #E1DEDD;margin-top: 20px;color: whitesmoke;margin-bottom: 0;padding: 10px">
    <div style="height: 20px;margin-top: 0;padding: 0" class="container-fluid">     <center>
            <p id="gtop" style="visibility: hidden" style=" ">Go to Top</p>
                <a href="#banner" title="Go to Top (T)" id="toTop" class="" style="color: #3474D8">
                    <span class="glyphicon glyphicon-chevron-up" style="font-size: 30px;" id="top"></span>
                </a></center>
    </div>
    <div class="row" style="width: 100%;margin-left: auto;margin-top: 50px ">
        <div class="col-md-4" 
             style="color: black;letter-spacing: 1px;font-family: Consolas;font-size: 17px;
             margin-bottom: 3rem;margin-left: auto; margin-right: auto">
            <h3 style="margin-left: 1.5rem">Menu</h3>
            <ul style="list-style-type: none;">
                <li class=""><a href="index.php" class="link1" title="Home (H)">Home</a></li>
                <li class=""><a href="mobiles.php" class="link1" title="Mobiles (M)">Mobiles</a></li>
                <li class=""><a href="pcs.php" class="link1 " title="PCs (P)">PCs</a></li>
                <li class=""><a href="socialmedia.php" class="link1 " title="Social Media (S)">Social Media</a></li>
                <li class=""><a href="others.php" class="link1 " title="Others (O)">Others</a></li>
                <li class=""><a href="aboutus.php" class="link1 " title="About Us (A)">About Us</a></li>
            </ul>
        </div>
        <div class=" col-md-4" style="margin-bottom: 3rem; margin-left: auto; margin-right: auto">
            <h3 class="" style="font-family: Consolas;color: black;margin-left: .5rem">Feedback :</h3>
            <form>
        <div class="form-group">
            <textarea class="form-control x" rows="4" cols="40" id="feedback" placeholder="Please give us your feedback..."></textarea>
            <input type="submit" id="feedbackBtn" href="#" class="btn btn-light btn-outline-primary mt-2 float-right x" style="letter-spacing:2px;" value="SEND FEEDBACK"/>
        </div></form></div>
        <div class="col-md-4" style="color: black;letter-spacing: 1px;font-family: Consolas;font-size: 17px;margin-bottom: 3rem; margin-left: auto; margin-right: auto">
            <h3 style="margin-left: 1.5rem">Follow Us</h3>
            <ul style=" list-style: none">   
                <li style="margin-bottom: .25rem"><a href="https://fb.com/a8atech" class="sml">
            <span class="fa fa-facebook-square flw" style="font-size: 40px;color: blue"></span>/A8ATech</a>
                            <?=$fblikebtn ?></li>
            <li style="margin-bottom: .25rem"> <a href="https://www.instagram.com/a8atech/" class="sml" target="_blank">
                        <span class="fa fa-instagram flw" style="font-size: 40px;color:  #bc2a8d"></span>/A8ATech</a></li>
                        <li style="margin-bottom: .25rem"> <a href="https://twitter.com/A8A_Tech" class="sml" target="_blank">
                                <span class="fa fa-twitter-square flw" style="font-size: 40px;color: #1DA1F2"></span>/A8A_Tech</a>
                                    <?=$twitterfollowbtn ?>  </li>                     
            </ul>
        </div>
    </div>
</div>

</body>
</html>
