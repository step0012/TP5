<?php
session_start();
/* SCRIPT FRONTAL AFFICHAGE DE CAPTCHA
* AFFICHER UNE IMAGE G�N�R�E EN PHP */
$codesaisi = $_POST['codesaisi'];
echo "<h1 class='center'>Tp Captcha</h1>
    <p class='center'>Veuillez rentrez le code du captcha ci-dessous !</p>";
echo "<img src='script-captchas.php' alt='captchas' />";
if(isset($_POST['submit']))
{
    if(!empty($_POST['code']))
    {
        echo "Code sécurité doit être impérativement saisi";
    }
    elseif($codesaisi == $_SESSION['code'])
    {
        echo "<p class='vert'>Code de sécurité valide</p>";
    }
    else
    {
        echo "<p class='rouge'>Code sécurité invalide</p> ";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Captcha</title>
</head>
<body>
    <form method="POST" action="index.php">
        <input type="text" name="codesaisi">
        <input type="submit" name="submit">
    </form>
</body>
</html>