<?php
error_reporting(0);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>NEWS</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />


<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="style/blog.css" rel="stylesheet">
  </head>
  <body>
    
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="#">Subscribe</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Thể Thao</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="index.php">Home</a>
      <a class="p-2 link-secondary" href="#">Bóng đá</a>
      <a class="p-2 link-secondary" href="#">Cầu lông</a>
      <a class="p-2 link-secondary" href="#">Tennis</a>
      <a class="p-2 link-secondary" href="#">Bóng bàn</a>
      <a class="p-2 link-secondary" href="#">Bóng chuyền</a>
      <a class="p-2 link-secondary" href="#">Thể thao điện tử</a>
      <a class="p-2 link-secondary" href="#">Bơi lội</a>
      <a class="p-2 link-secondary" href="#">Contact us</a>
    </nav>
  </div>
</div>

<main class="container">
<div class="card" style="width:auto">
  <img class="card-img-top" src="https://www.hot100fm.com.au/wp-content/uploads/sites/13/2022/09/news_features_sports-news-min.jpg" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title text-white " >Tin Thể Thao Mỗi Ngày</h4>
    <p class="card-text text-white">Chào mừng đến với những thông tin thể thao nóng hổi trong ngày</p>
  </div>
</div>

  <div class="row mb-2">
  <?php
          include('db/connection.php');
          $query1 =mysqli_query($conn,"select * from news order by id desc limit 1,2");
          while ($row=mysqli_fetch_array($query1)){
            $category=$row['category'];
            $date=$row['date'];
            $title=$row['title'];
            $thumbnail=$row['thumbnail'];

          
        ?>
    <div class="col-md-6">
      <div class="card flex-md d-flex flex-mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-primary"><?php echo $category ;?></strong>
            <h3 class="mb-0" ><a class="text-dark" href="single_page.php?single=<?php echo $row['id']; ?>"><?php echo $title ;?></a></h3>
            <div class="mb-1 text-muted"><?php echo $date ;?></div>
            <a href="single_page.php?single=<?php echo $row['id']; ?>">Continue reading</a>
          </div>
          <img class="card-img-right flex-auto d-none d-md-block" width="540" height="200" src="images/<?php echo $thumbnail; ?>" alt="card image cap"  >
      </div>
    </div>
        <?php } ?>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br>
  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Tin Moi
      </h3>
        <?php 
        include('db/connection.php');
        $id=$_GET['single'];
        
            $query1=mysqli_query($conn,"select * from news where category='$id' ");
        
        while ($row=mysqli_fetch_array($query1)){
        ?>
        <div class="blog-post">
        <h2 class="blog-post-title"><a href="single_page.php?single=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></h2>
        <p class="blog-post-meta"><?php echo $row['date'];?><a href="#"><?php echo $row['admin'];?><?php echo $row['category'];?></a></p>

        <p><img class="img img-thumbnail" style="height:10%;" src="images/<?php echo $row['thumbnail'];?>" width="400" height="200"></p>
        <hr>
        <blockquote class="blockquote">
          <?php echo substr( $row['description'],0,200);?>
          <a href="single_page.php?single=<?php echo $row['id'];?>" type="button" class="btn btn-link">Đọc thêm</a>
        </blockquote>
        </div>
        <?php } ?>


      <article class="blog-post">
    </div>
    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Danh mục</h4>
        <hr>
          <ol class="list-unstyled mb-0">
            <?php
                include ('db/connection.php');
                $query1=mysqli_query($conn,"select * from category");
                while($row=mysqli_fetch_array($query1)){
                    
                
            ?>
             <li><a href="category_page.php?single-<?php echo $row['category_name']; ?>"><?php echo $row['category_name']; ?></a></li>
            <?php }?>
          </ol>
        </div>  

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>


    
  </body>
</html>
