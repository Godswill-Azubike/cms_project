<?php
require 'includes/functions.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.80.0">
  <title>Dashboard : Blog CMS Admin</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">



  <!-- Bootstrap core CSS -->
  <link href="css/bsootstrap.min.css" rel="stylesheet">
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
  <link href="./css/dashboard.css" rel="stylesheet">
</head>

<body>

  <?php include 'includes/partials/top_header.php'; ?>

  <div class="container-fluid">
    <div class="row">
      <?php
      require 'includes/partials/side_nav.php';
      ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <a href="#" class="btn btn-sm btn-outline-secondary"><?= "Add Post" ?></a>
              <a href="#" class="btn btn-sm btn-outline-secondary">Add Category</a>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div>
        </div>

        <div class="row justify-content-center mb-5 mt-4">
          <div class="col-md-4 ">
            <div class=" shadow text-center pt-3 pb-3">
              <h4><small>Total Posts</small><br><strong>56</strong></h4>
              <a href="#" class="btn btn-sm btn-outline-secondary">view all posts</a>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class=" shadow text-center pt-3 pb-3">
              <h4><small>Total Categories</small><br><strong>56</strong></h4>
              <a href="#" class="btn btn-sm btn-outline-secondary">view all categories</a>
            </div>
          </div>
          <div class="col-md-4 ">
            <div class=" shadow text-center pt-3 pb-3">
              <h4><small>Total Admin</small><br><strong>56</strong></h4>
              <a href="#" class="btn btn-sm btn-outline-secondary">view all admins</a>
            </div>
          </div>
        </div>

        <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

        <h2>Resent Blog Post</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Created_at</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1,001</td>
                <td>Title of a longer featured blog post</td>
                <td>John Deo</td>
                <td>Travel</td>
                <td>January 12, 2021</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-secondary">edit</a>
                  <a href="#" class="btn btn-sm btn-outline-info">preview</a>
                  <a href="#" class="btn btn-sm btn-outline-danger">delete</a>
                </td>
              </tr>
              <tr>
                <td>1,002</td>
                <td>Title of a longer featured blog post</td>
                <td>John Deo</td>
                <td>visual</td>
                <td>January 12, 2021</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-secondary">edit</a>
                  <a href="#" class="btn btn-sm btn-outline-info">preview</a>
                  <a href="#" class="btn btn-sm btn-outline-danger">delete</a>
                </td>
              </tr>
              <tr>
                <td>1,003</td>
                <td>Title of a longer featured blog post</td>
                <td>John Deo</td>
                <td>Travel</td>
                <td>January 12, 2021</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-secondary">edit</a>
                  <a href="#" class="btn btn-sm btn-outline-info">preview</a>
                  <a href="#" class="btn btn-sm btn-outline-danger">delete</a>
                </td>
              </tr>
              <tr>
                <td>1,003</td>
                <td>Title of a longer featured blog post</td>
                <td>John Deo</td>
                <td>illustrative</td>
                <td>January 12, 2021</td>
                <td>
                  <a href="#" class="btn btn-sm btn-outline-secondary">edit</a>
                  <a href="#" class="btn btn-sm btn-outline-info">preview</a>
                  <a href="#" class="btn btn-sm btn-outline-danger">delete</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>


  <script src="./js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script src="./js/dashboard.js"></script>
</body>

</html>