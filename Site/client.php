<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supervisor: Espace Client</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="css/login.css"> 
</head>
<?php
$status = session_status();
if($status == PHP_SESSION_NONE){
    session_start();
}
?>

<?php
if(isset($_SESSION['username']))
{
    $username = $_SESSION['username'];
}
else{
    header("Location: login.php"); 
}
?>

<?php include('header.php')?>

<h1 id="hellotitle">Bonjour <?php echo $username?>, bienvenue dans l'Espace Client</h1>
<div id=logoutbutton>
    <a href="logout.php" id="logout">Se déconnecter</a>
</div>