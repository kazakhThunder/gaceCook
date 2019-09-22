
<html>
<head>
    <title>GaceCook</title>
</head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/bootstrap-theme.css" rel="stylesheet" />
<body style="height:100%">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.min.js"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">GaceCook</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <a class="btn btn-outline-primary" href="logout.php">Log out</a>
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
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            Name: <?php
                            if (session_status()==PHP_SESSION_NONE) {
                                session_start();
                            }
                            echo $_SESSION["name"];
                      ?>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action"> Age: <?php
                            echo $_SESSION["age"];
                            ?></a>
                        
                        <a href="deac.html"
                            class="list-group-item list-group-item-action btn btn-outline-primary active">Deactivate
                            account
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>