<?php
include('db/connection.php');

$id=$_GET['del'];
$query=mysqli_query($conn, "delete from category where id='$id' ");
if($query) {  
    echo "<script> alert('xóa thành công') </script>"; 
    echo"<script> window.location='http://localhost:3000/category.php'; </script>";
}else{
    echo "<script> alert('vui lòng thử lại thành công') </script>";
}
?>