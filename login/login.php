<html>
    <head>
        <title>Login to Replika Apple</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="p">
                <a class="navbar-brand" href="#">Menu</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-center fixed-top">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                
            </div>
        </nav>
        <div class="jumbotron text-center">
              <img src="../img/apple.png" weight="150px" height="150px">
        </div>
        <form action="login_proses.php" method="post">
        <center>
        <h2>Sign In</h2>
        <table class="login">
            <tr>
                <td>
                    <label>Username</label>
                </td>
                <td>
                    <input type ="text" name="username" id="username" placeholder="Username">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Password</label>
                </td>
                <td>
                    <input type ="password" name="password" id="password" placeholder="Password">
                </td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Login" class="btn btn-outline-primary" name="login" id="login">
        <a href = "register.php" class="btn btn-outline-primary">Register</a>
        </center>
    </body>
</html>