<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "gssb";
 
$conn = mysqli_connect($host,$user,$pass, $db);
if(!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}
 
if(isset($_POST['submit']))
{
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
  $classe = $_POST['classe'];
	$mail = $_POST['mail'];
  $Pull = 'SANS Zip';
  $couleur = $_POST['couleur'];
  $taille = $_POST['taille'];
	$date = date("Y-m-d");

  $qu1b="SELECT numero FROM commandes WHERE  numero=(SELECT MAX(numero) FROM commandes)";  
  $rsqu1b = mysqli_query($conn, $qu1b);
  $rowqu1b = mysqli_fetch_row($rsqu1b);
  $order_id1b = $rowqu1b[0] + 1;
	
	$sql = "insert into commandes (numero,nom, prenom,classe, mail, pull, couleur, taille, date) values ('".$order_id1b."','".$nom."', '".$prenom."', '".$classe."', '".$mail."', '".$Pull."', '".$couleur."', '".$taille."', '".$date."')";
	
	$result = mysqli_query($conn, $sql);
	
	if($result)
	{
		echo "<h2 style='font-size:200%; color: rgb(255, 0, 0);'>Votre commande a bien été prise en compte ! Le prix est de 30€</h2>";
	}
	else
	{
		echo "<h2 style='font-size:200%; color: rgb(255, 0, 0);'>Il y eu un problème dans votre commande, merci de réessayer plus tard. </h2>";
	}

  echo "<h2 color: rgb(255, 0, 0);> Votre numero de commande est : $order_id1b </h2>";

}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Article 1</title>
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



      button.Commander {
        display: inline-block;
        background-color: #00ff11;
        border-radius: 10px;
        border: 4px double #000000;
        color: #ffffff;
        text-align: center;
        font-size: 28px;
        padding: 10px;
        width: 180px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }
      button.Commander span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }
      button.Commander span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }
      button.Commander:hover {
        background-color: #92ff99;
      }
      button.Commander:hover span {
        padding-right: 25px;
      }
      button.Commander:hover span:after {
        opacity: 1;
        right: 0;
      }




      button.Effacer {
        display: inline-block;
        background-color: #ff0000;
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
      button.Effacer span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }
      button.Effacer span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }
      button.Effacer:hover {
        background-color: #ff9292;
      }
      button.Effacer:hover span {
        padding-right: 25px;
      }
      button.Effacer:hover span:after {
        opacity: 1;
        right: 0;
      }


      input[type=text] {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
      }

      
      select {
        width: 50%;
        padding: 16px 20px;
        border: none;
        border-radius: 4px;
        background-color: #f1f1f1;
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
                <h1 style="font-size:340%; color: rgb(0, 0, 0);">BOUTIQUE GSSB</h1>
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
            <br><br><br>
            <h1 style="font-size:210%; color:rgb(0, 0, 0);">SWEATS A CAPUCHE SANS ZIP</h1>
        

        <div class="corps2">
            <br><br><br>
            <div class="a1-a">
            <img src="NS.jpg" onmouseover="this.src='ND.jpg'" onmouseout="this.src='NS.jpg'">
            <img src="BSZ.jpg" onmouseover="this.src='BD.jpg'" onmouseout="this.src='BSZ.jpg'">
            </div>
         </div>
         <br><br>
                  
            

            <div class="a1-c">
                
                <h1 style="font-size:200%;">A lire :</h1>
                <p style="font-size:160%;"> Le prix pour un Sweat sans Zip est de 27€. Pour payer vous avez deux solutions      possibles :</p>
                <ul>
                    <li style="font-size:150%;">soit par chèque (à l'odre du GSSB)</li>
                    <li style="font-size:150%;">soit en liquide</li>
                </ul>
                <p style="font-size:150%;">Merci de le mettre dans une enveloppe (en y inscrivant le Nom, le Prénom, la classe de l'élève, et surtout le numéro de commande) et de la déposée auprès de Mme Dumond la conseillère du niveau Seconde.</p>
                <p style="font-size:180%; color:rgb(183, 2, 2)">Aucune commande ne sera prise en compte si elle n'est pas réglée !</p>
                <br><br>
            </div>
            <br><br><br>
            <div class="a1-b">
                <br><br><br>
                <h1 style="font-size:200%;">Votre Commande :</h1>
                <hr>
                <br>

                <form form action="" method="post">

                    Choisissez la taille : <select id="taille" name="taille" required>
                      <option value="">Choisissez la taille</option>
                      <option value="S">S</option>
                      <option value="L">L</option>
                      <option value="M">M</option>
                      <option value="XL">XL</option>
                    </select>


                    <br><br><p>
                    <h3>Choisissez la couleur :</h3>
                    
                      <input type="radio" id="Noir" name="couleur" value="Noir" required> Noir

                      <input type="radio" id="Bleu" name="couleur" value="Bleu" required> Bleu
                    </p>
                    
                <br>
                <hr>
                <br>
                
                Nom de l'élève : <input type="text" name="nom" maxlength="30" pattern="[^<>?,.;/:§!%*¨$£¤=)_('°]+" required></input><br>

                Prénom de l'élève : <input type="text" name="prenom" maxlength="20" pattern="[^<>?,.;/:§!%*¨$£¤=)_('°]+" required></input><br>

                Choisissez la classe : <select id="classe" name="classe" required>
                    <option value=" ">Choisissez la classe</option>
                    <option value="6A">6e A</option>
                    <option value="6B">6e B</option>
                    <option value="6C">6e C</option>
                    <option value="6D">6e D</option>
                    <option value="6E">6e E</option>
                    <option value="6F">6e F</option>
                    <option value="6G">6e G</option>
                    <option value="5A">5e A</option>
                    <option value="5B">5e B</option>
                    <option value="5C">5e C</option>
                    <option value="5D">5e D</option>
                    <option value="5E">5e E</option>
                    <option value="5F">5e F</option>
                    <option value="5G">5e G</option>
                    <option value="4A">4e A</option>
                    <option value="4B">4e B</option>
                    <option value="4C">4e C</option>
                    <option value="4D">4e D</option>
                    <option value="4E">4e E</option>
                    <option value="4F">4e F</option>
                    <option value="4G">4e G</option>
                    <option value="3A">3e A</option>
                    <option value="3B">3e B</option>
                    <option value="3C">3e C</option>
                    <option value="3D">3e D</option>
                    <option value="3E">3e E</option>
                    <option value="3F">3e F</option>
                    <option value="3G">3e G</option>
                    <option value="2Rose">2nd Rose</option>
                    <option value="2Orange">2nd Orange</option>
                    <option value="2Verte">2nd Verte</option>
                    <option value="2Bleue">2nd Bleue</option>
                    <option value="2Indigo">2nd Indigo</option>
                    <option value="2Jaune">2nd Jaune</option>
                    <option value="2Violette">2nd Violette</option>
                    <option value="1G1">1ere G1</option>
                    <option value="1G2">1ere G2</option>
                    <option value="1G3">1ere G3</option>
                    <option value="1G4">1ere G4</option>
                    <option value="1G5">1ere G5</option>
                    <option value="1ST2S">1ere ST2S</option>
                    <option value="1STL">1ere STL</option>
                    <option value="1STMG1">1ere STMG1</option>
                    <option value="1STMG2">1ere STMG2</option>
                    <option value="TG1">Term G1</option>
                    <option value="TG2">Term G2</option>
                    <option value="TG3">Term G3</option>
                    <option value="TG4">Term G4</option>
                    <option value="TG5">Term G5</option>
                    <option value="TG6">Term G6</option>
                    <option value="TST2S">Term ST2S</option>
                    <option value="TSTL">Term STL</option>
                    <option value="TSTMG1">Term STMG1</option>
                    <option value="TSTMG2">Term STMG2</option>
                    <option value="Enseignant">Enseignant</option>
                    <option value="Ancien eleve">Ancien élève</option>
                   </select>

                   <br>
                   <br>
                   Mail : <input type="text" name="mail" maxlength="50" pattern="[^<>?/§!%*¨$£¤)_('°]+" required></input><br>
                   <br>
                   <hr>
                   <h3>Prix : 27€</h3>
                   

                   <button type="submit" name="submit" class="Commander" style="font-size:150%; color:rgb(0,0,0)">Commander</button>
                   <button type="reset" value="Effacer" class="Effacer" style="font-size:150%; color:rgb(0,0,0)">Effacer</button>
                   
                   </form>
                <br><br>
 
            </div>
            <br><br><br><br><br>
    </div>
        
    </body>

</html>