<?php
session_start();
error_reporting(0);
if($_SESSION['email']==true){

}else{
    header('location:admin_login.php');
}
$page='category';
include('include/header.php');

?>

<?php
include('db/connection.php');
$id=$_GET['edit'];

$query=mysqli_query($conn,"select * from category where id='$id' ");

    while   ($row=mysqli_fetch_array($query)){
        $category=$row['category_name'];
        $des=$row['des'];
    }
?>
<div style="margin-left:0% ; width:80%">
    <ul class="breadcrumb">
        <li class="breadcrumb-item active"><a href="Home.php">Home</a></li>
        <li class="breadcrumb-item active"><a href="category.php">Category</a></li>
        <li class="breadcrumb-item active"><a>Edit Category</a></li>`

    </ul>
</div>



<div style= "width:70% ; margin-left: 20%; margin-top: -15% " >


<form action="edit.php" method="post" name="categoryform" onsubmit="return validateform()">
    <h1>Update Category</h1> <hr>
  <div class="form-group">
    <label for="email">Danh Mục:</label>
    <input type="text" name="category" value="<?php echo $category; ?>" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="comment">Nội dung:</label>
    <textarea class="form-control" rows='5' name="des" id="comment"><?php echo $des; ?></textarea>
  </div>
  <input type="hidden" name="id" value="<?php echo $_POST['edit'] ?> ">
  <input type="submit" name="submit" class="btn btn-primary" value="Chỉnh sửa Danh Mục">
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
    include('db/connection.php');
    if(isset($_POST['submit'])){   
        $id=$_POST['id'];
        $category=$_POST['category'];
        $des=$_POST['des'];

        $query1=mysqli_query($conn,"upadte category set category_name='$category', des='$des' , where id='$id' ");
        if($query1){
            echo"<script> alert('sửa thành công') </script>";
            echo"<script> window.location='http://localhost/tintuc/category.php'; </script>";
        }else{
            echo"<script> alert('sửa không thành công') </script>";
        }
    }
?>
<?php
    include('include/footer.php') ;
?>