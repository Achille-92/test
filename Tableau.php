<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Tableau</title>
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


      button.Commandes {
        display: inline-block;
        background-color: #6a6a6a;
        border-radius: 10px;
        border: 4px double #000000;
        color: #ffffff;
        text-align: center;
        font-size: 28px;
        padding: 10px;
        width: 160px;
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
            <h1 style="font-size:210%; color:rgb(0, 0, 0);">Tableau COLLEGE ET LYCEE :</h1>
        </div>

        <div class="connexion">
            <br>
            <a href="Commandes.php"> <button type="button" style="font-size:150%; color:rgb(255, 255, 255)" class="Commandes">Commandes</button></a>
            <br>

            <?php
            $ANS = 0;
            $ANL = 0;
            $ANM = 0;
            $ANXL = 0;
            $ARS = 0;
            $ARL = 0;
            $ARM = 0;
            $ARXL = 0;
            $ABS = 0;
            $ABL = 0;
            $ABM = 0;
            $ABXL = 0;

            $SNS = 0;
            $SNL = 0;
            $SNM = 0;
            $SNXL = 0;  
            $SBS = 0;
            $SBL = 0;
            $SBM = 0;
            $SBXL = 0;
            $SVS = 0;
            $SVL = 0;
            $SVM = 0;
            $SVXL = 0;
           
           $pdo = new PDO('mysql:host=localhost;dbname=gssb;charset=utf8', 'root', '');
           $sql = "SELECT pull, couleur, taille FROM commandes";

           

           foreach ($pdo->query($sql) as $row) {

            if ($row['pull'] == 'AVEC Zip') {

                if ($row['couleur'] == 'Noir') {
                    if ($row['taille'] == 'S') {
                        $ANS = $ANS + 1;
                    }

                    if ($row['taille'] == 'L') {
                        $ANL = $ANL + 1;
                    }

                    if ($row['taille'] == 'M') {
                        $ANM = $ANM + 1;
                    }

                    if ($row['taille'] == 'XL') {
                        $ANXL = $ANXL + 1;
                    }

                }
                if ($row['couleur'] == 'Bleu')
                {
                    if ($row['taille'] == 'S') {
                        $ABS = $ABS + 1;
                    }

                    if ($row['taille'] == 'L') {
                        $ABL = $ABL + 1;
                    }

                    if ($row['taille'] == 'M') {
                        $ABM = $ABM + 1;
                    }

                    if ($row['taille'] == 'XL') {
                        $ABXL = $ABXL + 1;
                    }

                }

                if ($row['couleur'] == 'Rouge')
                {
                    if ($row['taille'] == 'S') {
                        $ARS = $ARS + 1;
                    }

                    if ($row['taille'] == 'L') {
                        $ARL = $ARL + 1;
                    }

                    if ($row['taille'] == 'M') {
                        $ARM = $ARM + 1;
                    }

                    if ($row['taille'] == 'XL') {
                        $ARXL = $ARXL + 1;
                    }

                }


            }
            if ($row['pull'] == 'SANS Zip') {
                if ($row['couleur'] == 'Noir') {
                    if ($row['taille'] == 'S') {
                        $SNS = $SNS + 1;
                    }

                    if ($row['taille'] == 'L') {
                        $SNL = $SNL + 1;
                    }

                    if ($row['taille'] == 'M') {
                        $SNM = $SNM + 1;
                    }

                    if ($row['taille'] == 'XL') {
                        $SNXL = $SNXL + 1;
                    }

                }

                if ($row['couleur'] == 'Bleu')
                {
                   if ($row['taille'] == 'S') {
                       $SBS = $SBS + 1;
                   }

                   if ($row['taille'] == 'L') {
                       $SBL = $SBL + 1;
                   }

                   if ($row['taille'] == 'M') {
                       $SBM = $SBM + 1;
                   }

                   if($row['taille'] == 'XL') {
                       $SBXL = $SBXL + 1;
                   }

               }

            }

            

           }

           echo "<table>";
           echo "<tr>";

           echo "<th>AVEC Zip</th>";
           echo "<th>S</th>";
           echo "<th>L</th>";
           echo "<th>M</th>";
           echo "<th>XL</th>";

           echo "</tr>";

           echo "<tr>";
                echo "<td> Noir </td>";
                echo "<td>" . $ANS . "</td>";
                echo "<td>" . $ANL . "</td>";
                echo "<td>" . $ANM . "</td>";
                echo "<td>" . $ANXL . "</td>";
           echo "</tr>";

           echo "<tr>";
                echo "<td> Rouge </td>";
                echo "<td>" . $ARS . "</td>";
                echo "<td>" . $ARL . "</td>";
                echo "<td>" . $ARM . "</td>";
                echo "<td>" . $ARXL . "</td>";
           echo "</tr>";

           echo "<tr>";
                echo "<td> Bleu </td>";
                echo "<td>" . $ABS . "</td>";
                echo "<td>" . $ABL . "</td>";
                echo "<td>" . $ABM . "</td>";
                echo "<td>" . $ABXL . "</td>";
           echo "</tr>";

           echo "</table>";


           echo "<br>";
           echo "<br>";


           echo "<table>";
           echo "<tr>";

           echo "<th>SANS Zip</th>";
           echo "<th>S</th>";
           echo "<th>L</th>";
           echo "<th>M</th>";
           echo "<th>XL</th>";

           echo "</tr>";

           echo "<tr>";
                echo "<td> Noir </td>";
                echo "<td>" . $SNS . "</td>";
                echo "<td>" . $SNL . "</td>";
                echo "<td>" . $SNM . "</td>";
                echo "<td>" . $SNXL . "</td>";
           echo "</tr>";

           echo "<tr>";
                echo "<td> Bleu </td>";
                echo "<td>" . $SBS . "</td>";
                echo "<td>" . $SBL . "</td>";
                echo "<td>" . $SBM . "</td>";
                echo "<td>" . $SBXL . "</td>";
           echo "</tr>";

           echo "</table>";



        ?>


       
        <br><br>
    </div>

    
    </body>
</html>