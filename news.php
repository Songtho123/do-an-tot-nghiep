<?php
session_start();
error_reporting(0);
if($_SESSION['email']==true){

}else{
    header('location:admin_login.php');
}

$page='news';

include('include/header.php');
?>
<div style="margin-left:0% ; width:80%">
    <ul class="breadcrumb">
        <li class="breadcrumb-item active"><a href="Home.php">Home</a></li>
        <li class="breadcrumb-item active"><a>News</a></li>

    </ul>
</div>


<div style= "width:70% ; margin-left: 20%; margin-top: -15% " >
    <div class="text-right">
        <button class="btn"><a href="addnews.php">Add News</a></button>

    </div>
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Tiêu đề</th>
            <th>Mô tả</th>
            <th>Ngày</th>
            <th>Danh mục</th>
            <th>Hình ảnh</th>
            <th>Admin</th>
            <th>Edit</th>
            <th>Detele</th>

        </tr>
        <?php
            include ('db/connection.php');
            $page=$_GET['page'];
                if($page=="" || $page=="1"){
                $page1=0;
                }
                else{
                    $page1= ($page*6)-6;
                }

            $query=mysqli_query($conn,"select * from news limit $page1,6");
            while($row=mysqli_fetch_array($query)){
                
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['title']?></td>
            <td><?php echo substr( $row['description'],0,50)?></td>
            <td><?php echo date("d-m-Y " ,strtotime($row['date'])); ?></td>
            <td><?php echo $row['category']?></td>
            <td><img class="img img-thumbnail" src="images/<?php echo $row['thumbnail']?>" alt="" width="100" height="100"></td>
            <td><?php echo $row['admin']?></td>
            <td><a href="news_edit.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a></td>
            <td><a href="news_delete.php?del=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a></td>
        </tr>


     
        <?php } ?>
    </table>
            <ul class="pagination">
                <li class="page-item disabled" >
                    <a href="#" class="page-link">Parvious</a>
                </li>
            <?php
            $sql=mysqli_query($conn,"select * from news");
                $count=mysqli_num_rows($sql);
                $a=$count/3;
                ceil($a);
        
                for($i= 1;$i<=$a;$i++){
            ?>

                <li class="page-item"><a class="page-link" href="news.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
            <?php 
        } 
        ?>
                <li class="page-item disabled">
                <a href="#" class="page-link">Next</a>
                </li>
        </ul>            
    
</div>
<?php
include('include/footer.php')
?>