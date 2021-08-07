<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Login Multi User | ngodingcerdas</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/floating-labels/">

    

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">



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

    
    <!-- Custom styles for this template -->
    <link href="assets/dist/css/floating-labels.css" rel="stylesheet">
  </head>
  <body>
    
<form class="form-signin" method="POST" action="cek_login.php">
  <div class="text-center mb-4">
    <img class="mb-4" src="assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Form Login</h1>
    <p>Masukan Username dan Password anda dengan Benar!</p>
  </div>

  <div class="form-label-group">
    <input type="text" class="form-control" name="username" placeholder="Masukan Username Anda!" required autofocus>
    <label>Masukan Username anda</label>
  </div>

  <div class="form-label-group">
    <input type="password" name="password" class="form-control" placeholder="Masukan Password Anda!" required>
    <label>Masukan Password Anda</label>
  </div>

  <div class="form-label-group">
    <select class="form-control" name="level">
      <option value="pegawai">Pegawai</option>
      <option value="operator">Operator</option>
      <option value="admin">Administrator</option>
    </select>
  </div>

  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted text-center">&copy; Ref<b>Cerdas</b> 2020-<?= date('Y') ?></p>
</form>


    
  </body>
</html>
