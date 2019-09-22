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
        <a class="navbar-brand" href="index.php">GaceCook</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <a class="btn btn-outline-primary" href="index.php">Login</a>
            </ul>
        </div>
    </nav>
    <div class="card mb-3" style="max-width: 540px;
    position: fixed;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);">
        <div class="row no-gutters">
            <div>
                <div class="card-body">
                    <div id="deac">
                        <?php  
                        session_start();
                        setcookie(session_name(), '', 100);
                        session_unset();
                        session_destroy();
                        $_SESSION = array();
                        ?>
                        <h4>You have been logged out</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>