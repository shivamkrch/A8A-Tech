<?php

$conn= mysqli_connect("localhost", "root", "", "a8atech_db");
if(!$conn)
    die ("Error connecting.");
$sql="SELECT email from subscriptions";
$result= mysqli_query($conn, $sql);
$subscribed=array();
while ($row = mysqli_fetch_array($result)) {
    $subscribed[]=$row[0];
}
$email=$_GET['email'];
if(in_array($email, $subscribed))
        $check['sub']=TRUE;
    else {
        $check['sub']=FALSE;
}
echo json_encode($check);
