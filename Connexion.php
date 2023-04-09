<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'gssb');
 
// Connexion à la base de données MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}

if (isset($_POST['submit'])){
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);

    if($_POST['password'] == 'BDE-2390'){
        header("Location: Commandes.php");
            }
        
    else{
      $message = "Le mot de passe est incorrect.";
    }
  }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Connexion</title>
        <link rel="stylesheet" href="Sweats.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- S'adapte au format de l'écran de l'utilisateur-->
        
        <script type = "text/javascript">  
            function Contact() {  
               alert ("Mail : bde.gssb.2022@gmail.com");  
            } 
        </script>

        <style>
        a { text-decoration: none; }

        button.Contact {
        display: inline-block;
        background-color: #6a6a6a;
        border-radius: 10px;
        border: 4px double #000000;
        color: #ffffff;
        text-align: center;
        font-size: 28px;
        padding: 10px;
        width: 150px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }
      button.Contact span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }
      button.Contact span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }
      button.Contact:hover {
        background-color: #969595;
      }
      button.Contact:hover span {
        padding-right: 25px;
      }
      button.Contact:hover span:after {
        opacity: 1;
        right: 0;
      }


      button.Accueil {
        display: inline-block;
        background-color: rgb(17, 17, 17);
        border-radius: 10px;
        border: 4px double #ffffff;
        color: #ffffff;
        text-align: center;
        font-size: 28px;
        padding: 10px;
        width: 150px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }
      button.Accueil span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }
      button.Accueil span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }
      button.Accueil:hover {
        background-color: #969595;
      }
      button.Accueil:hover span {
        padding-right: 25px;
      }
      button.Accueil:hover span:after {
        opacity: 1;
        right: 0;
      }


      button.Boutique {
        display: inline-block;
        background-color: rgb(17, 17, 17);
        border-radius: 10px;
        border: 4px double #ffffff;
        color: #ffffff;
        text-align: center;
        font-size: 28px;
        padding: 10px;
        width: 150px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }
      button.Boutique span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }
      button.Boutique span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }
      button.Boutique:hover {
        background-color: #969595;
      }
      button.Boutique:hover span {
        padding-right: 25px;
      }
      button.Boutique:hover span:after {
        opacity: 1;
        right: 0;
      }


      button.Connexion {
        display: inline-block;
        background-color: #6a6a6a;
        border-radius: 10px;
        border: 4px double #000000;
        color: #ffffff;
        text-align: center;
        font-size: 28px;
        padding: 5px;
        width: 150px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }
      button.Connexion span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }
      button.Connexion span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }
      button.Connexion:hover {
        background-color: #969595;
      }
      button.Connexion:hover span {
        padding-right: 25px;
      }
      button.Connexion:hover span:after {
        opacity: 1;
        right: 0;
      }


      input[type=password] {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
      }
        </style>

    </head>

    <body>
    <div class="en-tête">
            <br>
            <div class ="en-tête1">

                <div class="en-tête-1a">
                <a href="Connexion.php"><img src="logoGSSB.jpg"> </a>
                </div>

                <div class="en-tête-1b">
                <h1 style="font-size:340%; color:rgb(0, 0, 0);">BOUTIQUE GSSB</h1>
                </div>

            </div>
            

            <div class="en-tête2">
              <br>
              <a href="index.html"> <button type="button" style="font-size:150%; color:rgb(255, 255, 255)" class="Accueil">Accueil</button></a>
              <a href="Boutique.html"> <button type="button" style="font-size:150%; color:rgb(255, 255, 255)" class="Boutique">Boutique</button></a>
              <button type="button" onclick="Contact()" style="font-size:150%; color:rgb(255, 255, 255)" class="Contact">Contact</button>
            </div>
            <br><br>
 
        </div>

        
        <div class="corps1">
            <br>
            <h1 style="font-size:210%; color:rgb(0, 0, 0);">Se connecter :</h1>
        </div>

        <div class="connexion">
            <br>
            <form class="box" action="" method="post" name="login">

                <input type="password" class="box-input" name="password" placeholder="Mot de passe" maxlength="10" pattern="[^<>?,.;/:§!%*¨$£¤=)_('°]+">
                <button type="submit" value="Connexion " name="submit" class="Connexion" onkeypress= verifierCaracteres(event)>Connexion</button>
                
                <?php if (! empty($message)) { ?>
                    <p class="errorMessage"><?php echo $message; ?></p>
                <?php } ?>
          </form>
          <br>
        
        <p style="font-size:150%;"> Si vous avez trouvé cette page mais que vous ne faites pas parti du BDE, merci de ne pas tenter de vous connecter et nous vous invitons à retourner à la page d'Accueil du site.</p>
        <a href="Accueil.html"> <button type="button" style="font-size:150%; color:rgb(255, 255, 255)" class="Accueil">Accueil</button></a>
        <br><br>
    </div>

    
    </body>

</html>