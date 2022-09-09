<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supervisor: Espace Client</title>
    <script src="https://kit.fontawesome.com/ab98ebb4c8.js" crossorigin="anonymous"></script>
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

<h1 id="hellotitle">Bonjour <span id="clientname"><?php echo $username?></span>, bienvenue dans l'Espace Client</h1>

<div id="factures">
    <h2>Vos factures</h2>
    <div class="barrefacture"></div>
    <div id=facturelist>
        <div class="facture">
            <img src="image/pdf.png">
            <p class="dl">Août 2022</p>
            <p class="dl">12,67€ TTC<p>
            <p class="dl"><a href="../factures/facture_aout_2022.pdf" download>Télécharger <i class="fa-solid fa-cloud-arrow-down"></i></a></p>
        </div>
        <div id="separation"></div>
        <div class="facture">
            <img src="image/pdf.png">
            <p class="dl">Juillet 2022</p>
            <p class="dl">15,27€ TTC<p>
            <p class="dl"><a href="../factures/facture_juillet_2022.pdf" download>Télécharger <i class="fa-solid fa-cloud-arrow-down"></i></a></p>
        </div>
        <div id="separation"></div>
        <div class="facture">
            <img src="image/pdf.png">
            <p class="dl">Juin 2022</p>
            <p class="dl">10,59€ TTC<p>
            <p class="dl"><a href="../factures/facture_juin_2022.pdf" download>Télécharger <i class="fa-solid fa-cloud-arrow-down"></i></a></p>
        </div>
        <div id="separation"></div>
        <div class="facture">
            <img src="image/pdf.png">
            <p class="dl">Mai 2022</p>
            <p class="dl">18,21€ TTC<p>
            <p class="dl"><a href="../factures/facture_mai_2022.pdf" download>Télécharger <i class="fa-solid fa-cloud-arrow-down"></i></a></p>
        </div>
        
    </div>
</div>




<div id=logoutbutton>
    <a href="logout.php" id="logout"><i class="fa-solid fa-xmark"></i> Se déconnecter</a>
</div>
