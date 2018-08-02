<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>A8ATech | About Us</title>
        <?php
    include_once './include/variables.php';
    include_once './include/functions.php';
    echo $include.$homecss.$include2;
    $con=mysqli_connect("localhost","root","","a8atech_db");
// Check connection
if (mysqli_connect_errno())
  {
  die( "Failed to connect: " . mysqli_connect_error());
  }
  $sql="SELECT * FROM authors";
  $auth= mysqli_query($con, $sql);
 
 
  ?>
        <style>
            div.tab-content>div.tab-pane{background: white}
           .tabs{font-size: 20px}
        </style>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="100" id="abtus">
        
<?=$fbjssdk ?>
        <?php
            include_once './include/header.php';
            ?>
                <div class="jumbotron mt-4">
        <!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified">
  <li class="nav-item">
      <a class="nav-link active x tabs" data-toggle="tab" href="#abtwebsite">A8A Tech
          <span class="fa fa-info-circle float-right mr-auto"></span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link x tabs" data-toggle="tab" href="#abtsm">Follow Us<span class="fa fa-sign-in float-right mr-auto"></span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link x tabs" data-toggle="tab" href="#abtauth">Authors<span class="fa fa-pencil-square-o float-right mr-auto"></span></a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane container active bg-white" id="abtwebsite">
        <div class="jumbotron bg-white ml-auto mr-auto px-auto">
        <div class="media p-auto m-2 mx-auto row" style="background-color:#e9ecef">
            <img src="images/a8alogo.png" alt="A8A_logo" class="mr-auto mt-3 rounded-circle img-fluid" style="width:200px;">
            <div class="media-body mt-3 ml-auto mr-auto p-1">
                <h1 id="brand" class="p-2" style="font-size: 60px">A8A Tech</h1>
      <h6 class="display-4 m-auto mt-3" style="font-size:1.6rem;font-weight: 350">A8A Tech is a Tech News and Update portal where you get all the news stuff related to #technology on a daily basis.</h6>
  </div>
        </div></div>
    </div>
    
    <div class="tab-pane container fade row ml-auto mr-auto" id="abtsm">
        <div class="jumbotron col-sm-12 align-self-center mb-5" style="background: white; overflow: auto" id="fbembed">
            <h1 class="mb-4 text-center" style="color:#3B5998;"><span class="fa fa-facebook-square mr-3"></span>Facebook</h1>
            <center> <?=$fbembed ?><br><?=$fbsharebtn ?></center></div>
            <div id="instaembed" class="col-sm-12 mb-5">
                <h1 class="mb-4 text-center" style="color:#bc2a8d;"><span class="fa fa-instagram mr-3"></span>Instagram</h1>
                <center>     <?=$instaembed ?></center>
    </div>
        <div id="twitterembed" class="col-sm-12 mb-5" style="padding-bottom:30px">
                <h1 class="mb-4 text-center" style="color:#1DA1F2;"><span class="fa fa-twitter-square mr-3"></span>Twitter</h1>
                <center>  <?=$twitterembed."<br>".$twitterfollowbtn ?> </center>
            </div>
    </div>
    
    <div class="tab-pane container fade" id="abtauth">
        <div class="row p-5">
        <?php
                    while ($row = mysqli_fetch_assoc($auth)) {
                        echo '<div class="card shadow-sm m-4 col-md-5 p-0" style="">
                            <img class="card-img-top p-0" ';
                            echo 'src="images/'.$row['image'].'" alt="'.$row['name'].'" style="object-fit: cover;">';
                        
                        echo '<div class="card-body"><h4 class="card-title">'.$row['name'].'</h4>';
                        echo '<p>'.$row['about'].'</p>';
                        echo '<center><a href="'.$row['fb'].'" class="sml mx-2"><span class="fa fa-facebook-square flw" style="font-size: 40px;color: blue"></span></a>
                            <a href="'.$row['insta'].'" class="sml mx-2" target="_blank">
                                        <span class="fa fa-instagram flw" style="font-size: 40px;color:  #bc2a8d"></span></a>';
                        if ($row['twitter']!="") {
                            echo '<a href="'.$row['twitter'].'" class="sml mx-2" target="_blank">
                            <span class="fa fa-twitter-square flw" style="font-size: 40px;color: #1DA1F2"></span></a>';
                            
                        }
                        echo '</center></div></div>';
                    }       
        ?>
        </div>
</div>
    </div>
</div>
                    
        
        <?php include_once './include/footer.php'; ?>
    </body>
</html>
