<!DOCTYPE html>
<html lang="en">
<head>
  <title>A8ATech | Home | Latest Technology News and Updates</title>
  <meta charset="utf-8">
  <?php
    if (isset($_GET['page'])) {
        $page=$_GET['page'];
    }
 else {
    $page=1;    
    }
    $cat="all";
    include_once './include/variables.php';
    include_once './include/functions.php';
    echo $include.$include2;
    $link=connect();
    $recentq= mysqli_query($link, "select id, heading from news order by date DESC, id DESC limit 10");
    if (!$recentq) {
        echo 'Unable to fetch';
    }
    $ssq= mysqli_query($link, "select id,heading,image from news order by date DESC, id DESC limit 5");
    $num_news= mysqli_num_rows(mysqli_query($link, "select id from news "));
    $newsq= mysqli_query($link, "select * from news order by date DESC, id DESC limit 20 offset ".($page-1)*20);
  ?>

</head>
<body>
    <?php
        include_once './include/header.php';
        include_once './include/slideshow.php';
        include_once './include/news.php';
        include_once './include/footer.php'; 
    ?>
</body>
</html>


