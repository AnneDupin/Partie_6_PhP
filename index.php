<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>DESCODEUSES / PHP / PARTIE 6</h1>
    <h2>Exercice 1</h2>
    <p><b>Créez un formulaire avec les champs "nom" et "prénom". À l'envoie du formulaire sur une autre page. Affichez les informations saisies.</b></p>

<form method="get" action="partie1.php">

<input type="text" name="prenom" placeholder="Prénom">
<input type="text" name="nom" placeholder="Nom">
<button type="submit" value="Valider">Envoyer</button>
</form>

<a href="partie1.php">Page 1</a>

<h2>Exercice 2</h2>
<p><b>Créez un formulaire avec les champs "nom" et "prénom". À l'envoie du formulaire sur une autre page, Affichez les informations saisies. Les champs doivent être renseignés. Vérifiez la saisie.</b></p>

<!-- <form action="page2.php" method="post">
 <table>
 <tr>
 <td>Nom :</td>
 <td>
 <input type="text" name="nom" 
 value="">
 </td>
 </tr>
 <tr>
 <td>Prénom :</td>
 <td>
 <input type="text" name="prenom" 
 value="">
 </td>
 </tr>
 </table>
 <input type="submit" value="envoyer" 
 name="send">
 </form> -->

 <a href="page2.php">Page 2</a>

 <form name="form" method="post" action="page2.php">
         <fieldset>
            <legend>Nouvel utilisateur</legend>
 
            </div>
            <div class="label">Nom</div>
            <div class="champ">
               <input type="text" name="nom" />
            </div>
            <div class="label">Prénom</div>
            <div class="champ">
               <input type="text" name="prenom" />
            </div>
            <div class="label">Email</div>
            <div class="champ">
               <input type="text" name="email" />
            </div>
    
            <div class="champ">
               <input type="submit" name="valider" value="Envoyer" />

            </div>
         </fieldset>


<h2>Exercice 3</h2>
<p><b>Créez un formulaire avec les champs "civilité", "nom" et "prénom". À l'envoie du formulaire sur une autre page, Affichez les informations saisies. Les champs doivent être renseignés. Vérifiez la saisie. Empêchez l'inclusion de balises html.</b></p>
<fieldset>
            <legend>Nouvel utilisateur</legend>
            <div class="label">Civilité</div>
            <div class="champ">
               <select name="civilite">
                  <option>Mme</option>
                  <option>Mlle</option>
                  <option>M.</option>
               </select>


               <form id="form1" name="form1" method="post" action="page2.php">
<p>
Nom * :
<input name="nom" type="text" id="textfield" value="<?php
if (isset ($_POST['nom'])) {
echo $_POST['nom'];
}
?>" />
<?php
if(isset($_POST["envoyer"])) {
echo $nom;
}
?>
</p>
<p>
Prénom * :
<input name="prenom" type="text" id="textfield" value="<?php
if (isset ($_POST['prenom'])) {
echo $_POST['prenom'];
}
?>" />
<?php
if(isset($_POST["envoyer"])) {
echo $prenom;
}
?>
</p>
<p>
<input type="submit" name="envoyer" id="button" value="Envoyer" />
</p>
</form>
            <!-- </div>
            <div class="label">Nom</div>
            <div class="champ">
               <input type="text" name="nom" />
            </div>
            <div class="label">Prénom</div>
            <div class="champ">
               <input type="text" name="prenom" />
            </div>
            <div class="label">Email</div>
            <div class="champ">
               <input type="text" name="email" />
            </div>
    
            <div class="champ">
               <input type="submit" name="valider" value="Envoyer" />

            </div> -->
         </fieldset>




<h2>Exercice 4</h2>
<p><b>Créez un formulaire avec les champs "civilité", "nom" et "prénom". À l'envoie du formulaire sur la même page, Affichez les informations saisies. Les champs doivent être renseignés. Vérifiez la saisie. Empêchez l'affichage de balises html.</b></p>

<h2>Exercice 5</h2>
<p><p>Créez un formulaire avec les champs "civilité", "nom" et "prénom" ainsi qu'un bouton permettant de sélectionner un fichier à envoyer. À l'envoie du formulaire sur la même page, affichez les informations saisies. Les champs doivent être renseignés. Vérifiez la saisie. Empêchez l'affichage de balises html.</p></p>

<h2>Exercice 6</h2>
<p><b>Créez un formulaire avec les champs "civilité", "nom" et "prénom" ainsi qu'un bouton permettant de sélectionner un fichier à envoyer. À l'envoie du formulaire sur la même page, affichez les informations saisies. Les champs doivent être renseignés. Vérifiez la saisie. Empêchez l'affichage de balises html. Le fichier envoyé doit être un pdf.</b></p>

</body>
</html>