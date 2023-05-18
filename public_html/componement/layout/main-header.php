<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Phone Store</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="./">Phone Store</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product">Product</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu">
              <?php
              require_once("admin\includes\scripts\api\APIs.php");
              $url = 'http://localhost:8080/brand';
              $respBrand = getList($url);
              foreach ($respBrand as $resBrand) {
                # code...
                echo '<li><a class="dropdown-item" href="category?id='.$resBrand->brandID.'">' . $resBrand->brandName . '</a></li>';
              }
              ?>
            </ul>
          </li>
        </ul>
        <div class="d-flex">
          <form class="d-flex" role="search" method="get" action="search-product">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            <?php if(isset($_SESSION['user'])){
              echo '<a href="profile"><button type="button" class="btn btn-outline-primary">'.$_SESSION['user']->userName.'</button></a>';
            }?>
          </form>
          
          <form method="post">
            <button class="btn btn-outline-info" name="cartBtn" type="submit">Cart
              <?php if (isset($_SESSION['cartItems'])) {
                echo '(' . sizeof($_SESSION['cartItems']) . ')';
              } else
                echo '(0)' ?>
              </button>
            </form>
          </div>
          <form method="post">
            <?php
            if (isset($_SESSION['user'])) {
              echo '<button class="btn btn-outline-danger" name="logoutBtn" type="submit">Logout</button>';
            } else {
              echo '<button class="btn btn-outline-danger" name="loginBtn" type="submit">Login</button>';
            }
            ?>
          </form>
        </div>
      </div>
    </nav>
<?php require("public_html\scripts\header.php");