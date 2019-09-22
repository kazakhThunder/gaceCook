<?php
 include('conn.php');
?>

<html>
<head>
    <title>GaceCook</title>
</head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/bootstrap-theme.css" rel="stylesheet" />

<body style="height:100%">
<script src="js/bootstrap.min.js"></script>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">GaceCook</a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <a class="btn btn-outline-primary" href="signup.html">Sign up</a>
    </ul>
  </div>
</nav>
<div class="card mb-3" style="max-width: 540px;
    position: fixed;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);">
  <div class="row no-gutters">
    <div class="col-md-6">
      <img src="Houseboats-in-Srinagar.jpg" class="card-img" alt="..." height="100%">
    </div>
    <div class="col-md-6">
      <div class="card-body">
          <div>
      <h4>Sign in</h4>
      </div>  
      <form action="signin.php" method="POST">
        <div class="form-group">
             <input type="text" name="username"  placeholder="Username">
             </div><div class="form-group">
             <input type="password" name="pass" placeholder="Password">
             <a class="float-right" href="forgot.html">Forgot password?</a>
             </div>
            <div class="form-group">
            <input type="submit" value="Sign in" class="btn btn-primary btn-lg">
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>