<!DOCTYPE html>
<!--suppress ALL -->
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="choix.css">
    <script src="jquery.js"></script>
</head>
<body>
<script type="text/javascript">
    function changementlieu(param1){
            $('#noir').delay(1000).fadeIn(1000);
            $('#boitedialogue').delay(1000).fadeOut(2500);
            $('#img1').delay(1000).fadeOut(2500)
                .delay(2000)
                .queue(function(n) {
                    document.getElementById('dialogue').innerHTML=infoexp[i];
                    i = i+1;
                    $('#img1').html(param1);
                    n();
                }).fadeIn(500);
            $('#boitedialogue').delay(2500).fadeIn(500);
            $('#noir').delay(2000).fadeOut(2000);
    }
</script>
<?php
if(isset($_POST['choix'])){
    $id = $_POST['choix'];
}
else{
    $id = 11;
}
$id2 = $id+1;
$id = str_replace(0,1,$id);
$dernierchar =  substr($id2,-1, 1);
$id2 = str_replace(0,1,$id2);
if ($dernierchar == 1) {
    $dernierchar = $dernierchar + 1;
}
$strlenid2 = strlen($id2)-1;
$choixx = substr($id2,0,$strlenid2);
$choix2 = $choixx.$dernierchar;
$choix = $id;
$id = intval($id);
$id2 = intval($id2);

function avoirinfo($param1, $param2, $param3)
{
    global $id2;
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
                var id2 = <?php echo $id2 ?>;
                infoexp = <?php echo json_encode($infoexp); ?>; // Récupère le tableau en PHP et le convertit en JS
                var i = 1;
                if(id2<100){
                    document.getElementById('img1').innerHTML = "<img src='ig/1_avion.jpg'>";
                }
                else if(id2>100 && id2 <1000){
                    document.getElementById('img1').innerHTML = "<img src='ig/2_4_scene-Tour-Eiffel.jpg'>";
                }
                else if(id2>1000 && id2 <2000){
                    document.getElementById('img1').innerHTML = "<img src='ig/7_entree_bibliotheque.jpg'>";
                }
                document.getElementById('dialogue').innerHTML=infoexp[0]; // Affiche la première phrase du dialogue
                $('#boitedialogue').click(function(){ // Clic sur la boite de dialogue
                    id2 = <?php echo $id2 ?>;
                    if(i < longueur-1){ // Tant que i est plus petit que la longueur du tableau
                        document.getElementById('dialogue').innerHTML=infoexp[i]; // Afficher la phrase suivante du dialogue
                        i = i+1;
                        if(id2 < 100 && i<7) {
                            document.getElementById('img1').innerHTML = "<img src='ig/1_avion.jpg'>";
                       }
                        else if(id2 <100 && 7==i){
                            changementlieu("<img src='ig/2_4_scene-Tour-Eiffel.jpg'>");
                        }
                        else if(id2 < 100 && 31==i){
                            changementlieu("<img src='ig/3_Grenier.jpg'>");
                        }
                        else if(id2 <100 && 46==i){
                            changementlieu("<img src='ig/2_4_scene-Tour-Eiffel.jpg'>");
                        }
                        else if(id2 > 100 && id2 < 1000 && i==6){
                            changementlieu("<img src='ig/5_entree-copy-1.jpg'>");
                        }
                        else if(id2 > 100 && id2 < 1000 && i==20){
                            changementlieu("");
                        }
                        else if(id2 >100 && id2 <1000 && i==45){
                            changementlieu("<img src='ig/1_avion.jpg'>");
                        }
                        else if(id2 >100 && id2 <1000 && i==62){
                           changementlieu("");
                        }
                        else if (id2 >100 && id2 <1000 && i==96){
                            changementlieu("<img src='ig/6_salon-tante.jpg'>");
                        }
                        else if(id2 >100 && id2 <1000 && i==147){
                            changementlieu("<img src='ig/7_entree_bibliotheque.jpg'>");
                        }
                        else if(id2>1000 && id2<2000 && i==28){
                            changementlieu("<img src='ig/8_amphitheatre.jpg'>");
                        }
                        else if(id2>1000 && id2<2000 && i==46){
                            changementlieu("<img src='ig/7_entree_bibliotheque.jpg'>");
                        }
                        else if(id2>1000 && id2<2000 && i==101){
                            changementlieu("<img src='ig/8_amphitheatre.jpg'>");
                        }
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
            $infos->fetch(PDO::FETCH_NUM);
            var_dump($infos);
        }
        else if($param1 == 'choix') {
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