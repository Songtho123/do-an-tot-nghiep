<?php
session_start();

if($_SESSION['email']==true){

}else{
    header('location:admin_login.php');
}

$page='category';

include('include/header.php');
?>
<div style="margin-left:0% ; width:80%">
    <ul class="breadcrumb">
        <li class="breadcrumb-item active"><a href="Home.php">Home</a></li>
        <li class="breadcrumb-item active"><a>Category</a></li>

    </ul>
</div>


<div style= "width:70% ; margin-left: 20%; margin-top: -15% " >
    <div class="text-right">
        <button class="btn"><a href="addcategory.php">Add category</a></button>

    </div>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Danh mục</th>
            <th>Nội dung</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
            include ('db/connection.php');
            $query=mysqli_query($conn,"select * from category");
            while($row=mysqli_fetch_array($query)){
        
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['category_name']?></td>
            <td><?php echo substr( $row['des'],0,200)?></td>
            <td><a href="edit.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a></td>
            <td><a href="delete.php?del=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
</div>
<?php
include('include/footer.php')
?>