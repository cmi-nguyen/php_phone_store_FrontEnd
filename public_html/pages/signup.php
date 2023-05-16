<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Phone Store</title>
</head>


<body class="text-center">
    

<main class="form-signin w-100 m-auto">
  <form method="post">
    
    <h1 class="h3 mb-3 fw-normal">Sign up</h1>

    <div class="form-floating">
      <input type="text" required class="form-control" id="floatingInput" placeholder="username" name="username">
      <label for="floatingInput">username</label>
    </div>
    <div class="form-floating">
      <input type="password" required class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
      <input type="text" required class="form-control" id="floatingInput" placeholder="name" name="name">
      <label for="floatingPassword">name</label>
    </div>
    <div class="form-floating">
      <input type="text" required class="form-control" id="floatingInput" placeholder="address" name="address">
      <label for="floatingPassword">Address</label>
    </div>
    <div class="form-floating">
      <input type="text" required class="form-control" id="floatingInput" placeholder="phone" name="phone">
      <label for="floatingPassword">Phone number</label>
    </div>
    <div class="form-floating">
      <input type="email" required class="form-control" id="floatingInput" placeholder="email" name="email">
      <label for="floatingPassword">email</label>
    </div>
    <button class=" btn btn-primary" type="submit" name="signupBtn">Sign-up</button>
    <p class="mt-5 mb-3 text-body-secondary">© 2017–2023</p>
  </form>
</main>


    
  

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>
<?php 
require_once("public_html\scripts\signup.php");