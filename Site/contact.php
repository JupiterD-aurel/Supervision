<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supervisor: Contact</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="css/main.css">

</head>
<?php include('header.php')?>

<body>
<?php
$mess = "";
$succmess = "";
if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $mail = $_POST["mail"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    if(empty($name))
    {
        $mess = "Le champ 'Prénom' est requis pour envoyer le message !";
    }
    elseif(empty($lastname))
    {
        $mess = "Le champ 'Nom' est requis pour envoyer le message";
    }
    elseif(empty($mail))
    {
        $mess = "Le champ 'E-Mail' est requis pour envoyer le message";
    }
    elseif(empty($subject))
    {
        $mess = "Le champ 'Objet' est requis pour envoyer le message";
    }
    elseif(empty($message))
    {
        $mess = "Le champ 'message' est requis pour envoyer le message";
    }
    else
    {
        $succmess = "Message envoyé !";
        $user = "root";
        $pass = "";
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=siteperso', $user, $pass);

            $sql = "INSERT INTO messages (name, lastname, email, subject, message) VALUES (:name, :lastname, :email, :subject, :message);";
            $stmt = $dbh->prepare($sql);
            $stmt->execute(array('name' => $name, 'lastname' => $lastname, 'email' => $mail, 'subject' => $subject, 'message' => $message));


            $dbh = null;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
?>


<h1 class="heading"> Parler avec<span> nous</span> </h1>

<section class="contact" id="contact">
<p id="errormessage"><?php echo $mess?></p><p id="successmessage"><?php echo $succmess?></p>
<div class="row">
    <form action="" method="POST">
        <input type="text" placeholder="Prénom" class="box" name="name">
        <input type="text" placeholder="Nom" class="box" name="lastname">
        <input type="email" placeholder="E-Mail" class="box" name="mail">
        <input type="text" placeholder="Sujet" class="box" name="subject">
        <textarea name="message" id="" cols="25" rows="10" class="box message" placeholder="Message"></textarea>
        <button type="submit" name="submit" class="btn"> Envoyer <i class="fas fa-paper-plane"></i> </button>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="script.js"></script>
</body>
</section>