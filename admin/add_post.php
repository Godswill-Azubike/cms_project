<?php
require 'includes/functions.php';
require 'includes/controller/post_controller.php';

$cat_sql = $conn->query("SELECT * FROM categories");

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

  <?php require 'includes/partials/top_header.php'; ?>

  <div class="container-fluid">
    <div class="row">
      <?php require 'includes/partials/side_nav.php'; ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard / Add Post</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <a href="#" class="btn btn-sm btn-outline-secondary">All Post</a>
              <a href="#" class="btn btn-sm btn-outline-secondary">All Category</a>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div>
        </div>


        <div class="card shadow p-4 my-4">
          <h5>New blog post</h5>
          <form action="add_post.php" method="POST" enctype="multipart/form-data">

            <div class="form-group my-3">
              <label for="post_title">Post Title</label>
              <input type="text" class="form-control" name="post_title" value="">
            </div>

            <div class="form-group my-3">
              <label for="post_author">Post Author</label>
              <input type="text" class="form-control" name="post_auth" value="">
            </div>

            <div class="form-group">
              <label for="post_cat">Select Post Category</label>
              <select class="form-control" name="post_cat">
                <option value="" selected></option>
                <?php
                while ($cat = $cat_sql->fetch_assoc()) {
                ?>
                  <option value="<?= $cat['id'] ?>"><?= $cat['cat_name'] ?></option>

                <?php
                }
                ?>
              </select>
            </div>

            <div class="form-gorup my-3">
              <label for=post_body>Post Body</label>
              <textarea cols="30" rows="10" class="form-control" name="post_body"></textarea>
            </div>

            <div class="form-group my-3">
              <label for="post_image">Post Image</label>
              <input type="file" class="form-control" name="post_image">
            </div>

            <button type="submit" name="submit_post" class="btn btn-sm btn-dark">Pusblish Post</button>

          </form>
        </div>

      </main>
    </div>
  </div>


  <script src="./js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" crossorigin="anonymous"></script>
  <script src="./js/dashboard.js"></script>

  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>
    tinymce.init({
      selector: 'textarea'
    });
  </script>
</body>

</html>