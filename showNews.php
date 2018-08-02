<!DOCTYPE html>
<html>
    <head>
        <?php
            include_once './include/variables.php';
            include_once './include/functions.php';
            echo $include.$include2.$homecss;
            $link= connect();
            $recentq= mysqli_query($link, "select id, heading from news order by date DESC, id ASC limit 10");
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $newsq= mysqli_query($link, "select * from news where id=$id");
                $show= mysqli_fetch_assoc($newsq);
            }
        ?>
        <meta charset="UTF-8">
        <title><?=$show['heading']?> | A8A Tech | Latest Tech News and Updates</title>
        <style>@media screen and (max-width: 600px) {
           #newshd {
              font-size: 24px !important;
            }
          }
          @media screen and (min-width: 601px) {
           #newshd {
              font-size: 30px !important;
            }
          }
        </style>
        <script>
            $(document).ready(function(){
                switch($('#cat').text()){
                    case "Mobiles":
                        $('body').attr("id","mobiles");
                        break;
                    case "PCs":
                        $('body').attr("id","pcs");
                        break;
                    case "Social Media":
                        $('body').attr("id","scm");
                        break;
                    case "Others":
                        $('body').attr("id","others");
                        break;
                }
            });
        </script>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="100" >
        <?php
            include_once './include/header.php';
        ?>
        <div class="container-fluid mt-5 row mx-auto mb-5">
        <div class="container-fluid col-md-3 d-none d-md-block ml-1">
            <table class="table table-bordered table-striped p-2 slideanim1 shadow-sm" style="top: 500px">
                <thead class="thead-dark">
        <th class="text-center pt-2" style="color: white;font-family: Courier New;padding-bottom: 2px;letter-spacing: 1px">
            <h5>Recent</h5></th>
        </thead>
        <?php
            while ($recent = mysqli_fetch_assoc($recentq)){
                echo '<tr><td class="recent"><a href="showNews.php?id='.$recent['id'].'" class="l" style="color:black">'
                .$recent['heading'].'</a></td></tr>';
            }
        ?>
    </table>
        </div>
            <div class="col-md-8 ml-0 mr-auto container-fluid p-1 mx-auto">
                <div class="sticky-top px-4 pb-1 pt-4 bg-white mx-auto slideanim1 shadow-sm" style="top:50px;width: 100%;z-index: 1010">
                    <h2 class="text-justify" id="newshd" style="font-size: 25px;font-weight: bold;font-family: Montserrat"><?=$show['heading']?></h2>
                <?='<div class="clearfix m-1 p-1">
        <span class="float-left badge mx-auto ';
                                switch ($show['category']) {
                                    case 'mob':
                                        echo ' badge-dark ';
                                        $category="Mobiles";
                                        break;
                                    case 'pcs':
                                        echo ' badge-success ';
                                        $category="PCs";
                                        break;
                                    case 'scm':
                                        echo ' badge-primary ';
                                        $category="Social Media";
                                        break;
                                    case 'oth':
                                        echo ' badge-info ';
                                        $category="Others";
                                        break;
                                }
                        echo '" style="font-size: 13px" id="cat">'.$category.'</span>
  <span class="float-right badge badge-pill mx-auto ';
                        $date= dateFilter($show['date']);
                        switch ($date) {
                            case "Today":
                                echo ' badge-danger ';
                                break;
                            case "Yesterday":
                                echo ' badge-warning ';
                                break;
                            default:
                                echo ' badge-secondary ';
                                break;
                        }
                        
                        echo '" style="font-size: 13px">
  <span class="fa fa-calendar mr-1"></span>'.$date.'</span></div>'?>
                </div>
                <center><img src="images/<?= explode(",", $show['image'])[0];?>" alt="<?=$show['heading'];?>"
                             style="height: auto;width: 560px;overflow: hidden;" class="m-2 mb-1 img-fluid slideanim1 shadow-sm"/></center>
                             <br><p class="text-justify m-1 mt-3" style="font: normal 20px Georgia;line-height: 1.6"><?=$show['content'];?></p>
            </div>
            
        </div>
        <?php include_once './include/footer.php';?>
    </body>
</html>
