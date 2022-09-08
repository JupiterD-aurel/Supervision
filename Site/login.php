<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supervisor: Connexion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>


<?php include('header.php')?>

<?php 
$error = "";
$success = "";
session_start();
if(isset($_SESSION['username']))
{
    if($_SESSION['username'] === "admin")
    {
        header("Location: client.php"); 
    }
}

if(isset($_POST['submit'])){
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];
    if($username === "admin" && $password === "admin")
    {
        $error = "";
        $_SESSION["username"] = $username;
        header("Location: client.php");
    }
    else
    {
        $error = "E-Mail ou Mot de passe incorrect !";
    }
}


?>

<link rel="stylesheet" href="css/login.css">
<body>
    <div id="boxes">
        <form action="" method="POST">
            <div class="login-box">
                <h1>Connexion</h1>
                <div class="textbox">
                    <input type="text" placeholder="E-Mail" name="username" value="" autocomplete="off">
                </div>
                <div class="textbox">
                    <input type="password" placeholder="Mot de passe" name="password" value="" autocomplete="off">
                </div>
                <input class="button" type="submit" name="submit" value="Se connecter">
                <p class="errormessage"><?php echo $error?></p>
                <p>Vous n'avez pas de compte sur notre site ? <a href="register.php">Créer un compte !</a></p>
            </div>
        </form>
    </div>
</body>