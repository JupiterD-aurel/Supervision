
<?php
session_start();
?>
<link rel="stylesheet" href="css/header.css">
<link rel="icon" href="image/favicon.png">


<nav>
    <div class="logo">
            <a href="index.php"><img src="image/logo.png" alt="logo-s.suppervisor" width="100px" height="50px"></div></a>

    <div class="home">
            <a href="produit.php"><strong>PRODUIT</strong></a>
            <a href="histoire.php"><strong>HISTOIRE</strong></a>
            <a href="contact.php"><strong>CONTACT</strong></a>
            <?php
            if(isset($_SESSION['username']))
            {
                echo "<a href='client.php' id='lgnbutton'><strong>Espace Client</strong></a>";
            }
            else
            {
                echo "<a href='login.php' id='lgnbutton'><strong>SE CONNECTER</strong></a>";
            }
            ?>  
                
        </div>
    </div>
</nav>
<div class="barre"></div>
