<!DOCTYPE html>
<div id="html">
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Login - Admin Noticias</title>
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css"/>
      <!-- Custom styles for this template -->
      <link href="css/login.css" rel="stylesheet">
    </head>

    <body class="admin">
      <div class="container">

        <form id="form-login" class="form-signin" method="POST" action="index.php?action=login">
          <h2 class="form-signin-heading">Login - Admin Noticias</h2>
          <label for="txtEmail" class="sr-only">Email</label>
          <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email" required autofocus>
          <label for="txtPassword" class="sr-only">Password</label>
          <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Password" required>
          {if count($errores) gt 0}
            <div class="alert alert-danger" role="alert">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              <span class="sr-only">Error:</span>
              {foreach $errores as $error}
                {$error}
              {/foreach}
            </div>
          {/if}
          <button class="btn btn-lg btn-primary btn-block" type="submit">LOGIN</button>
        </form>

      </div>

    <script src="../js/jquery.js"></script>
    <script src="js/md5.js"></script>
    <script src="js/loginlistener.js"></script>

    </body>
  </html>
</div>