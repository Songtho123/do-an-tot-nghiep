<?php
session_start();

if($_SESSION['email']==true){

}else{
    header('location:admin_login.php');
}

$page='product';

include('include/header.php');

?>

<div style="margin-left:0% ; width:80%">
    <ul class="breadcrumb">
        <li class="breadcrumb-item active"><a href="Home.php">Home</a></li>
        <li class="breadcrumb-item active"><a href="news.php">News</a></li>
        <li class="breadcrumb-item active"><a>Add news</a></li>
    </ul>
</div>

ư
<div style= "width:70% ; margin-left: 20%; margin-top: -15% " >

<form action="addnews.php" method="post" enctype="multipart/form-data" name="categoryform" onsubmit="return validateform() ">
    <h1>Add News</h1> <hr>
  <div class="form-group">
    <label for="email">Tiêu đề</label>
    <input type="text" placeholder="Thêm tiêu đề" name="title" class="form-control" id="email">
  </div>

  <div class="form-group">
    <label for="comment">Mô tả</label>
    <textarea class="form-control" placeholder="Thêm mô tả" rows='5' name="description" id="comment"></textarea>
  </div>

  <div class="form-group">
    <label for="inputZip">Ngày</label>
    <input  type="date" name="date" class="form-control">
  </div>

  <div class="form-group">
    <label for="email">Hình ảnh</label>
    <input type="file"  name="thumbnail" class="form-control img-thumbnail" id="email">
  </div>

  <div class="form-group">
    <label for="email">Danh mục:</label>
    <select class="form-control" name="category"  >
    <?php
        include('db/connection.php');

        $sql=mysqli_query($conn,"select * from category");
        while($row=mysqli_fetch_array($sql)){

            ?>
            <option><?php echo $row['category_name'];?></option>
            <?php }?>
    </select>
  </div>
    <div class="form-group">
            <label for="admin">Admin</label>
            <input type="text" class="form-control" disabled value="<?php echo $_SESSION['email']; ?>">
    </div>

  <input type="submit" name="submit" class="btn btn-primary" value="Thêm tin">
</form>
    <script>
        function validateform(){
            var x =document.forms['categoryform']['title'].value;
            var y =document.forms['categoryform']['description'].value;
            var z =document.forms['categoryform']['date'].value;
            var w =document.forms['categoryform']['category'].value;

            if (x==""){
                alert('thieu tieu de!');
                return false;
            }
            if (y==""){
                alert('thieu noi dung!');
                return false;
            }
            if (z==""){
                alert('thieu ngay!');
                return false;
            }
            if (w==""){
                alert('thieu danh muc!');
                return false;
            }
        }

    </script>

</div>

</div>

<?php
include('include/footer.php');

        include ('db/connection.php');
        if(isset($_POST['submit'])){
            $title=$_POST['title'];
            $description=$_POST['description'];
            $date=$_POST['date'];
            $thumbnail=$_FILES['thumbnail']['name'];
            $tmp_thumbnail=$_FILES['thumbnail']['tmp_name'];
            $category=$_POST['category'];
            $admin=$_SESSION['email'];
            move_uploaded_file($tmp_thumbnail,"images/$thumbnail");

            $query1=mysqli_query($conn,"insert into news(title,description,date,thumbnail,category,admin)values('$title','$description',$date,'$thumbnail','$category','$admin')");
            if($query1){

                echo "<script> alert('thêm tin tuc thanh cong') </script>";
            }else{
                echo "<script> alert('vui long thu lai') </script>";
            }
        }



?>