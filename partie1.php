<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 1</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Exercice 1</h2>
<p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_GET['prenom']; ?> !</p>

<?php
$p = $_GET['prenom'];
?>

<p>Votre nom est stocké dans la variable $n
dont le type est <?php echo gettype($p) ?>.</p>


</body>
</html>