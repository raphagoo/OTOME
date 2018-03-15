<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="choi.css">
    <script src="jquery.js"></script>
</head>
<body>
<?php
function avoirinfo($param1, $param2, $param3)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "startup";
    try {
        $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')); // Connexion + UTF-8 //
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $infos = $bdd->query("SELECT $param1 FROM $param2 WHERE id=$param3"); // SELECT en language SQL selon les parametres
        $infos->setFetchMode(PDO::FETCH_OBJ);
        if($param1 == 'dialogue'){ // Si on select du dialogue
          $infofetch = $infos->fetch(PDO::FETCH_NUM); // Récup l'info sous forme de dialogue
          $info = implode("",$infofetch);
          $infoexp = explode(".",$info); // Permet d'obtenir un tableau dont chaque variable contient une phrase
          $longueur = count($infoexp); // Compte la longueur
          ?>
          <script>
              var longueur = <?php echo "$longueur" ?>;
            var infoexp = new Array;
            infoexp = <?php echo json_encode($infoexp); ?>; // Récupère le tableau en PHP et le convertit en JS
            var i = 1;
          document.getElementById('dialogue').innerHTML=infoexp[0]; // Affiche la première phrase du dialogue
            $('#boitedialogue').click(function(){ // Clic sur la boite de dialogue
              if(i < longueur-1){ // Tant que i est plus petit que la longueur du tableau
              document.getElementById('dialogue').innerHTML=infoexp[i]; // Afficher la phrase suivante du dialogue
              i = i+1;
            }
            else{
              $('#boutonchoix').show();
              $('#dialogue').empty();
            }
            });
              $('#boutonchoix').click(function() { // Au clic sur le bouton on fait apparaître les choix.
                  $('#boutonchoix').hide();
                  $('.choix').show();
              });
        </script>
        <?php
        }
        else if ($param1 == 'image'){ // Si le SELECT est sur une image

            $infos->bindColumn(1, $image, PDO::PARAM_LOB);
            $infos->fetch(PDO::FETCH_BOUND);
            header("Content-Type: image");
            echo '<img src=';
            print_r($image); echo '>';
        }
        else {
            while ($info = $infos->fetch()) { // Si le select est sur autre chose qu'une image ou du dialogue
                echo  $info->$param1 . '<br>';
            }
        }
    } catch (PDOException $e) {
        print "Erreur! " . "<br>" . $e->getMessage();
        die();
    }
}
?>
</body>
</html>
