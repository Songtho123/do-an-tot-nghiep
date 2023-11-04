<?php
session_start();

if($_SESSION['email']==true){

}else{
    header('location:admin_login.php');
}

$page='category';

include('include/header.php');
?>



<div style= "width:70% ; margin-left: 10%; margin-top: 5% " >


<form action="addcategory.php" method="post" name="categoryform" onsubmit="return validateform() ">
    <h1>Add category</h1> <hr>
  <div class="form-group">
    <label for="email">Danh Mục:</label>
    <input type="text" placeholder="Nhập danh mục" name="category" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="comment">Nội dung:</label>
    <textarea class="form-control" placeholder="Nhập nội dung"rows='5' name="des" id="comment"></textarea>
  </div>
  <input type="submit" name="submit" class="btn btn-primary" value="Thêm Danh Mục">
</form>
    <script>
        function validateform(){
            var x =document.forms['categoryform']['category'].value;
            if (x==""){
                alert('Danh mục phải được điền vào!');
                return false;
            }
        }

    </script>

</div>

</div>

<?php
include('include/footer.php');
?>
<?php

include('db/connection.php');

if (isset($_POST['submit'])){
    $category_name=$_POST['category'];
    $des=$_POST['des'];

    $cheak=mysqli_query($conn,"select * from category where category_name='$category_name'");
        if(mysqli_num_rows  ($cheak)> 0){
            echo "<script> alert('Danh mục đã được sử dụng!!') </scrit>";
            exit();
        }  

    $query=mysqli_query($conn,"insert into category(category_name,des) 
        values('$category_name','$des')");

    if($query){
        echo"<script> alert('Thêm danh mục thành công') </script>";
    } 
    else{
        echo "<script> alert('Thêm danh mục không thành công, vui lòng thử lại') </script>";
    }
}
?>