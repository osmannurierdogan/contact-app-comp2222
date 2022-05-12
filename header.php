<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Project</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <style>
    .nav-link {
      font-size: 1.15rem;
    }

    .contact-link:visited, .contact-link:link{
      font-size: 1.25rem;
      /*color: blueviolet;
      color: rgba(255, 30, 30, 0.8);*/
      text-decoration: none;
    }
  </style>
</head>
<?php
include 'dbconnection.php';
?>

<body>
  <header class="mb-5 pb-4">
    <nav class="navbar fixed-top navbar-light bg-success">
      <div class="container-fluid">
        <a class="navbar-brand text-light" href="index.php">Address Book Application</a>
        <div class="navbar-nav d-flex flex-row">
          <a class="px-4 nav-link text-light active" aria-current="page" href="add.php">Add</a>
          <a class="px-4 nav-link text-light" href="delete.php">Delete</a>
          <a class="px-4 nav-link text-light" href="search.php">Search</a>
          <a class="px-4 nav-link text-light" href="listAll.php">List All</a>
        </div>
      </div>
    </nav>
  </header>