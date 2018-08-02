
        <style>
            .img-ss{height: 20%;width: 100%}
            .ci{visibility: hidden}
            #slideshow:hover .ci{visibility: visible}
            .carousel-indicators{position:absolute;right:0;bottom:3px;left:0;
                                z-index:15;display:-ms-flexbox;display:flex;-ms-flex-pack:center;
                                justify-content:center;padding-left:0;margin-right:15%;margin-left:15%;list-style:none}
            .carousel-indicators li{position:relative;-ms-flex:0 1 auto;flex:0 1 auto;
                                    width:8px;height:8px;border-radius: 50%;
                                    margin-right:5px;margin-left:5px;
                                    text-indent:-999px;cursor:pointer;
                                   background-color:rgba(255,255,255,.5)}
            .carousel-indicators .active{background-color:#fff;width: 9px;height: 9px}
            .carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 3px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
}
@media screen and (min-width: 601px){
    #slideshow{height: 315px;width: 560px}
}
@media screen and (max-width:600px){
    .sh{font-size: 4vw;}
}
        </style>
    
        <div class="container" style="margin-top: 10px;overflow: hidden">
        <div id="slideshow" class="carousel shadow-sm slide mx-auto" data-ride="carousel" data-interval="4000"
            data-pause="false" style="overflow: hidden;border-radius: 2px;background: black">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#slideshow" data-slide-to="0" class="active"></li>
    <li data-target="#slideshow" data-slide-to="1"></li>
    <li data-target="#slideshow" data-slide-to="2"></li>
    <li data-target="#slideshow" data-slide-to="3"></li>
    <li data-target="#slideshow" data-slide-to="4"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner" style="">
      <?php
      $i=0;
      
        while ($ss = mysqli_fetch_assoc($ssq)) {
            echo '<div class="carousel-item';
            if ($i==0) {
                echo ' active';
                $i=1;
            }
            echo '"><a href="showNews.php?id='.$ss['id'].'" >  <img src="images/'. explode(",", $ss['image'])[0].'" alt="'.$ss['heading'].
                    '" class="img-ss align-middle img-fluid" style="object-fit:cover"/></a>
        <div class="carousel-caption">
            <a href="showNews.php?id='.$ss['id'].'" title="'.$ss['heading'].'" class="link"> 
                <h5 class="sh p-2">'.$ss['heading'].'</h5></a></div></div>';
        }
      ?>

  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev ci" href="#slideshow" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next ci" href="#slideshow" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

        </div></div>
