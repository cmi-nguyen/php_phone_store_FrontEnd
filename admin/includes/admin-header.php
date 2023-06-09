<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Admin Page</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="./">Admin</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" href="./">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Management
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="user">Users</a></li>
              <li><a class="dropdown-item" href="product">Products</a></li>

              <li><a class="dropdown-item" href="brand">Brands</a></li>
              <li><a class="dropdown-item" href="order">Orders</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="../">Visit site</a>
          </li>
        </ul>
        <div class="d-flex align-item-center">
          <p>Hello admin</p>
        <form method="post">
          <button class="btn btn-outline-info" type="submit" name="logoutBtn">Logout</button>
        </form>
        </div>

        
      </div>
    </div>
  </nav>
  <?php if (array_key_exists('logoutBtn', $_POST)) {
    session_destroy();
    echo '<script>';
    echo 'window.location = "/php_phone_store_FrontEnd/"';
    echo '</script>';
  }