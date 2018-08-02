
        <div class="container-fluid mt-3 row">
        <div class="container-fluid col-md-3 d-none d-md-block">
    <table class="table table-bordered table-striped p-2 slideanim1 shadow-sm">
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
        
        <div class="container-fluid col-md-9 ml-0 mr-auto">
            <h3 class="bg-dark text-center p-1 pt-2 slideanim1" 
                style="color: white;font-family: Courier New;padding-bottom: 2px;letter-spacing: 1px;font-size: 22px;">
                News & Updates</h3>
            <div class="row p-1 mx-auto">
                <?php
                    $i=0;
                    while($news= mysqli_fetch_assoc($newsq)){
                        echo '<a href="showNews.php?id='.$news['id']
                                .'" class="newslink btn-block ';
                        if($i<4){
                            echo 'slideanim1'; $i++;
                        }else
                            echo 'slideanim';
                        echo '">  <div class="media border shadow-sm p-2  mb-1 bg-white col-md-12">
                    <img src="images/'. explode(",", $news['image'])[0].'" alt="'.$news['heading']
                                .'" class="mr-3 mt-1 rounded" style="width:60px;height: 40px;overflow:hidden">
  <div class="media-body">
    <p>'.$news['heading'].'</p><div class="clearfix m-1">
        <span class="float-left badge ';
                                switch ($news['category']) {
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
                        echo ' mx-auto" style="font-size: 13px">'.$category.'</span>
  <span class="float-right badge badge-pill mx-auto ';
                        $date= dateFilter($news['date']);
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
  <span class="fa fa-calendar mr-1"></span>'.$date.'</span></div></div></div></a>';
                    }
                ?>
              
            </div>
    <br>
    <ul class="pagination justify-content-center slideanim pagination-sm">
        <li class="page-item <?php 
        if($page==1)            echo ' d-none ';
        ?>"><a class="page-link" href="<?php echo $_SERVER['PHP_SELF']."?page=1";?>"><span class="fa fa-angle-left" style=" margin-right: 5px"></span>First</a></li>
        <li class="page-item<?php 
        if($page==1)            echo ' d-none ';
        ?>"><a class="page-link" href="<?php echo $_SERVER['PHP_SELF']."?page=".($page-1);?>"><span class="fa fa-angle-left" style=" margin-right: 5px"></span>Previous</a></li>
        <?php
        for($p=0;$p<=$num_news/20;$p++);
            echo '<li class="page-item page-link">Page '.$page.'/'.$p.'</li>';
       
        ?>
        <li class="page-item<?php 
        if($page==$p)            echo ' d-none ';
        ?>"><a class="page-link" href="<?php echo $_SERVER['PHP_SELF']."?page=".($page+1);?>">Next<span class="fa fa-angle-right" style="margin-left: 5px"></span></a></li>
      <li class="page-item<?php 
        if($page==$p)            echo ' d-none ';
        ?>"><a class="page-link" href="<?php echo $_SERVER['PHP_SELF']."?page=".$p;?>">Last<span class="fa fa-angle-right" style="margin-left: 5px"></span></a></li>
     
    </ul><center><form <?php
    if($p==1)
        echo 'style="display: none"';
    ?>
            >Go to Page: 
            <input type="number" id="pageip" name="Gotopage" min="1" max="<?=$p;?>" style="width: 50px;border-width: 2px;border-radius: 5px;border-color: #33C7FF"/>
            <button class="btn btn-info btn-sm disabled" type="submit" href="#" title="Go" id="pagenav" ><span class="fa fa-arrow-right"></span></button>
        </form></center>
        </div>
    </div>
    
