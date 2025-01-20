<?php define('PROJECT_ROOT', dirname(dirname(dirname(__DIR__ . '/../'))));

// session_start();
// echo PROJECT_ROOT;

require_once PROJECT_ROOT.'\src\Core\config\connexion.php';

if(isset($_POST["submit"])){
  $pdo=Connexion::connect();
$query = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = ? and password = ?");
$query->execute([$_POST["email"],$_POST['password']]);
$utilisateur = $query->fetch();
var_dump($utilisateur);
// if ($utilisateur && password_verify($_POST['password'], $utilisateur['password']))
// // {
//    header("location:index.php");
} else {
    echo "Identifiant invalid!";
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link navbar-navrel="canonical" href="https://getbootstrap.com/docs/3.3/examples/starter-template/">
    
    <title>Admin Area | Account Login</title>
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

  </head>

  <body>

    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
        
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Admin Area | <small>Account Login</small></h1>
                </div>
                
            </div>
        </div>
    </header>

    <section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <form id="login" method="POST" class="well">
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Email" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-default btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
</section>


    <!-- <footer id="footer">
        <p class="text-center">Copyright AdminStrap, &copy; 2021</p>
    </footer> -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
