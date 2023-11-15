<?php
session_start();

if($_SESSION['email']==true){

}else{
    header('location:admin_login.php');
}

$page='home';

include('include/header.php');

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.87.0">
  <title>Admin Dashboard</title>
  <link rel="icon" type="image/png" href="../img/logo.png">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />


  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
  <link href="style/admin.css" rel="stylesheet">
</head>

<body>

 

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Thống kê </h1>
        </div>

        <div class="row">
          <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="board">
              <div class="panel panel-primary">
                <div class="number">
                  <h3>
                    <h3>400</h3>
                    <small>Week Visits</small>
                  </h3>
                </div>
                <div class="icon">
                  <i class="fa fa-eye fa-5x red"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="board">
              <div class="panel panel-primary">
                <div class="number">
                  <h3>
                    <h3>4</h3>
                    <small>sold Week</small>
                  </h3>
                </div>
                <div class="icon">
                  <i class="fa fa-shopping-cart fa-5x blue"></i>
                </div>

              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="board">
              <div class="panel panel-primary">
                <div class="number">
                  <h3>
                    <h3>100</h3>
                    <small>Comments</small>
                  </h3>
                </div>
                <div class="icon">
                  <i class="fa fa-comments fa-5x green"></i>
                </div>
              </div>
            </div>
          </div>

        </div>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
  <script>
    CKEDITOR.replace( 'description' );
  </script>
</body>

</html>

<?php

include('include/footer.php')

?>