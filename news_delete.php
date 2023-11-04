<?php
    include("db/connection.php");

    $id=$_GET['del'];
    $query = mysqli_query($conn,"delete from news where  id='$id'");
    if($query){
        echo "<script> alert('xoa thanh cong') </script>";
        echo"<script> window.location='http://localhost:3000/news.php'; </script>";
    }else{
        echo "vui lòng thử lại";
    }
?>