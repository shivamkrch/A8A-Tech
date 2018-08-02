<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>A8ATech | Latest PC News</title>
        <?php
        if (isset($_GET['page'])) {
        $page=$_GET['page'];
        }
        else {
        $page=1;    
        }
        $cat="pcs";
        include_once './include/variables.php';
        include_once './include/functions.php';
        echo $include.$homecss.$include2;
        $link=connect();
        $recentq= mysqli_query($link, "select id, heading from news where category='$cat' order by date DESC, id DESC limit 10");
        $ssq= mysqli_query($link, "select id,heading,image from news where category='$cat' order by date DESC, id DESC limit 5");
        $num_news= mysqli_num_rows(mysqli_query($link, "select id from news where category='$cat'"));
        $newsq= mysqli_query($link, "select * from news where category='$cat' order by date DESC, id DESC limit 20 offset ".($page-1)*20);
      ?>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="100" id="pcs">
        <?php
            include_once './include/header.php';
            include_once './include/slideshow.php';
            include_once './include/news.php';
            include_once './include/footer.php'; ?>
    </body>
</html>
