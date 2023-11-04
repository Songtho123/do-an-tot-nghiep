<?php
session_start();
error_reporting(0);
if($_SESSION['email']==true){

}else{
    header('location:admin_login.php');
}

$page='product';

include('include/header.php');
?>
<?php
include ('db/connection.php');
    $id=$_GET['edit'];
    $query=mysqli_query($conn,"select * from news where id='$id'");
    while($row=mysqli_fetch_array($query)){
    $id=$row['id'];
    $title=$row['title'];
    $description=$row['description'];
    $date=$row['date'];
    $thumbnail=$row['thumbnail'];
    $category=$row['category'];
}
?>

<div style="margin-left:0% ; width:80%">
    <ul class="breadcrumb">
        <li class="breadcrumb-item active"><a href="Home.php">Home</a></li>
        <li class="breadcrumb-item active"><a href="news.php">News</a></li>
        <li class="breadcrumb-item active"><a>Update news</a></li>
    </ul>
</div>


<div style= "width:70% ; margin-left: 20%; margin-top: -15% " >

<form action="news_edit.php" method="post" enctype="multipart/form-data" name="categoryform" onsubmit="return validateform() ">
    <h1>Update News</h1> <hr>
  <div class="form-group">
    <label for="email">Tiêu đề</label>
    <input type="text" value="<?php echo $title; ?>" placeholder="Thêm tiêu đề" name="title" class="form-control" id="email">
  </div>

  <div class="form-group">
    <label for="comment">Mô tả</label>
    <textarea class="form-control"  rows='10' name="description" id="comment"><?php echo $description; ?> </textarea>
  </div>

  <div class="form-group">
    <label for="date">Ngày</label>
    <input type="date" value="<?php echo $date; ?>" name="date" class="form-control" id="date">
  </div>

  <div class="form-group">
    <label for="email">Hình ảnh</label>
    <input type="file" value="<?php echo $thumbnail; ?>"  name="thumbnail" class="form-control img-thumbnail" id="email">
    <img class="img img-thumbnail" src="images/<?php echo $thumbnail; ?>" alt="" width="100" height="100"> 
  </div>
    <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
  <div class="form-group">
    <label for="email">Danh mục:</label>
    <select class="form-control" name="category" >
    <?php
        include('db/connection.php');

        $query=mysqli_query($conn,"select * from category");
        while($row=mysqli_fetch_array($query)){
           
            ?>
            <option ><?php echo $row['category_name'];?></option>
            <?php }?>
    </select>
  </div>

  <input type="submit" name="submit" class="btn btn-primary" value="Update">
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
            // if (y.length<100){
            //     alert('thieu noi dung!');
            //     return false;
            // }
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
?>

<?php
    include ('db/connection.php');
    if(isset($_POST['submit'])){
        $id=$_POST['id'];
        $title=$_POST['title'];
        $description=$_POST['description'];
        $date=$_POST['date'];
        $thumbnail=$_FILES['thumbnail']['name'];
        $tmp_thumbnail=$_FILES['thumbnail']['tmp_name'];
        $category=$_POST['category'];
        move_uploaded_file($tmp_thumbnail,"images/$thumbnail");

        $sql=mysqli_query($conn,"update news set title='$title', description='$description', date='date', thumbnail='$thumbnail', category='$category' where id='$id'");
        if($sql){
            echo "<script> alert('thêm tin tuc thanh cong') </script>";
            echo"<script> window.location='http://localhost:3000/news.php'; </script>";
            }else{
                echo "<script> alert('vui long thu lai') </script>";
        }
    }
?>