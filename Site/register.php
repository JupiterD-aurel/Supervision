<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supervisor: Inscription</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>


<?php include('header.php')?>

<?php 
$error = "";
$mess = "";
$status = session_status();
if($status == PHP_SESSION_NONE){
    session_start();
}

if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $mail = $_POST["mail"];
    $password = $_POST["password"];
    if(empty($name))
    {
        $error = "Le champ 'Prénom' est requis !";
    }
    elseif(empty($lastname))
    {
        $error = "Le champ 'Nom' est requis !";
    }
    elseif(empty($mail))
    {
        $error = "Le champ 'E-Mail' est requis !";
    }
    elseif(empty($password))
    {
        $error = "Le champ 'Mot de passe' est requis !";
    }
    else
    {
        $mess = "Compte créer avec succès ! Connectez vous !";
    }
}

if(isset($_SESSION['username']))
{
    if($_SESSION['username'] === "admin")
    {
        header("Location: client.php"); 
    }
}


?>

<link rel="stylesheet" href="css/login.css">
<body>
    <div id="boxes">
        <form action="" method="POST">
            <div class="login-box">
                <h1>Inscription</h1>
                <div class="textbox">
                    <input type="text" placeholder="Prénom" name="name" value="" autocomplete="off">
                </div>
                <div class="textbox">
                    <input type="text" placeholder="Nom" name="lastname" value="" autocomplete="off">
                </div>
                <div class="textbox">
                    <input type="email" placeholder="E-Mail" name="mail" value="" autocomplete="off">
                </div>
                <div class="textbox">
                    <input type="password" placeholder="Mot de passe" name="password" value="" autocomplete="off">
                </div>
                <input class="button" type="submit" name="submit" value="S'inscrire">
                <p class="errormessage"><?php echo $error?></p>
                <p class="successmessage"><?php echo $mess?></p>
                <p>Vous avez déjà un compte ? <a href="login.php">Connectez-vous !</a></p>
            </div>
        </form>
    </div>
</body>