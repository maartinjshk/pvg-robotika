<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>PVĢ robotika</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="includes/authenticate.php" method="post">
  <img class="mb-4" src="img/gerbonis.png" alt="" width="194" height="106">
  <input type="email" id="email" name="email" class="form-control" placeholder="E-pasts..." required autofocus>
  <input type="password" id="password" name="password" class="form-control" placeholder="Parole..." required>
  <div class="checkbox mb-3">
    <!-- <label>
      <input type="checkbox" value="remember-me"> Atcerēties mani
    </label> -->
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Ienākt</button>
  <?php
  $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

  if (strpos($fullUrl, "login=incorrect") == true) {
    echo '<div class="alert" role="alert">Nepareizs lietotājvārds un/vai parole.</div>';
  }

  ?>
  <p class="mt-5 mb-3 text-muted">&copy; 2020 Jāņa Eglīša Preiļu Valsts ģimnāzija</p>
</form>
</body>
</html>
