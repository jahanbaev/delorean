<?php

 $host = "192.168.100.56";
 $user = "root";
 $password = "";
 $db = "user";
 
 $con = mysqli_connect($host,$user,$password,$db);

$id = $_GET['id'];

 $sql = "select id from login where id = '$id'";
 
 $result = mysqli_query($con,$sql);
 
 if(mysqli_num_rows($result)<1){
$status = "error";
echo ($status);
 }
 else{
$row = mysqli_fetch_assoc($result);

$status = "ok";

echo ($status);

 }

 $query = "UPDATE `login` SET `users`= users + 1 WHERE `id` =  '$id' "; 
   
 $result = mysqli_query($con, $query); 

 mysqli_close($con);

?>