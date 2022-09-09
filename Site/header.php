
<?php
$status = session_status();
if($status == PHP_SESSION_NONE){
    session_start();
}
?>
<link rel="stylesheet" href="css/header.css">
<link rel="icon" href="image/favicon.png">
<script src="https://kit.fontawesome.com/ab98ebb4c8.js" crossorigin="anonymous"></script>


<nav>
    <div class="logo">
            <a href="index.php"><img src="image/logo.png" alt="logo-s.suppervisor" width="100px" height="50px"></div></a>

    <div class="home">
            <a href="service.php"><strong>SERVICE</strong></a>
            <a href="histoire.php"><strong>HISTOIRE</strong></a>
            <a href="contact.php"><strong>CONTACT</strong></a>
            <?php
            if(isset($_SESSION['username']))
            {
                echo "<a href='client.php' id='lgnbutton'><i class='fa-solid fa-user'></i> <strong>ESPACE CLIENT</strong></a>";
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
