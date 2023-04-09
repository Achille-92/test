<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Commandes Primaire</title>
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

      button.Tableau {
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
      button.Tableau span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }
      button.Tableau span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }
      button.Tableau:hover {
        background-color: #969595;
      }
      button.Tableau:hover span {
        padding-right: 25px;
      }
      button.Tableau:hover span:after {
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


      button.Commandes {
        display: inline-block;
        background-color: #6a6a6a;
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
      button.Commandes span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }
      button.Commandes span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }
      button.Commandes:hover {
        background-color: #969595;
      }
      button.Commandes:hover span {
        padding-right: 25px;
      }
      button.Commandes:hover span:after {
        opacity: 1;
        right: 0;
      }
        
        table {
          border-collapse: collapse;
        }
        td,
        th {
          padding: 10px;
          border-bottom: 1px solid #000000;
          text-align: center;
        }
    </style>


    </head>

    <body>
        <div class="en-tête">
            <br>
            <div class ="en-tête1">

                <div class="en-tête-1a">
                <img src="logoGSSB.jpg" >  
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

        <br><br>
        <div class="corps1">
            <br>
            <h1 style="font-size:210%; color:rgb(0, 0, 0);">Commandes PRIMAIRE :</h1>
        </div>

        <div class="connexion">
            <br>
            <a href="TableauPrimaire.php"> <button type="button" style="font-size:150%; color:rgb(255, 255, 255)" class="Tableau">Tableau</button></a>
            <a href="Commandes.php"> <button type="button" style="font-size:150%; color:rgb(255, 255, 255)" class="Commandes">Collège/Lycée</button></a>
            <br>

            <?php
           echo "<table>";
           echo "<tr>";
           echo "<th>Numéro</th>";
           echo "<th>Nom</th>";
           echo "<th>Prénom</th>";
           echo "<th>Classe</th>";
           echo "<th>Mail</th>";
           echo "<th>Pull</th>";
           echo "<th>Couleur</th>";
           echo "<th>Taille</th>";
           echo "<th>Date</th>";

           echo "</tr>";
           echo "</table>";
           
           $pdo = new PDO('mysql:host=localhost;dbname=gssb;charset=utf8', 'root', '');
           $sql = "SELECT * FROM primaire";
           foreach ($pdo->query($sql) as $row) {
            echo "<table>";
        
            echo "<tr>";
            echo "<td>" . $row['numero'] . "</td>";
                echo "<td>" . $row['nom'] . "</td>";
                echo "<td>" . $row['prenom'] . "</td>";
                echo "<td>" . $row['classe'] . "</td>";
                echo "<td>" . $row['mail'] . "</td>";
                echo "<td>" . $row['pull'] . "</td>";
                echo "<td>" . $row['couleur'] . "</td>";
                echo "<td>" . $row['taille'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
            echo "</tr>";
        
        echo "</table>";
    }

            //$sql = "DELETE FROM `commandes` WHERE `nom` = :name";
            //$stmt = $pdo->prepare($sql);
           //Le nom que nous souhaitons supprimer de notre table 'users'
            //$name = 'Cazot-Moukabed';
            //$stmt->bindValue(':name', $name);
            //$res = $stmt->execute();

        ?>


       
        <br><br>
    </div>

    
    </body>
</html>