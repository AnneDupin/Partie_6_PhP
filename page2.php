<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Exercice 2</h2>

<!-- 
<?php
$bouton = $_POST['send'];
if(!empty($bouton)) {
 $nom = trim($_POST['nom']);
 $prenom = trim($_POST['prenom']);
 if(!empty($nom) && !empty($prenom)) {
 echo 'Bonjour, '.$prenom.' '.$nom;
 }
 else {
 echo 'vous n\'avez pas rempli tous 
 les champs';
 }
}
?> -->

<?php
if(isset($_POST["envoyer"])) {

if(!isset($_POST["nom"]) || $_POST["nom"]=="") {
$nom = "Ce champ doit être renseigné.";
} else {
$nom = "";
}

if(!isset($_POST["prenom"]) || $_POST["prenom"]=="") {
$prenom = "Ce champ doit être renseigné.";
} else {
$prenom = "";
}

if (($nom == "") && ($prenom == "")) {
header('index.php');
}
}

$email = "contact@exemple.com";
if (preg_match('/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/igm', $email)) {
    echo "Your email is ok.";
} else {
    echo "Wrong email.";
}


?>
</body>
</html>