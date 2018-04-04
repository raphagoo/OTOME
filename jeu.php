<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Startup</title>
    <link rel="stylesheet" href="choix.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="jquery.js" type="text/javascript"></script>
</head>
<?php require('jeuphp.php'); ?>
<body>
<div id="conteneur">
    <div id="boiteimg">
        <div id="noir"></div>
        <div id="img1"></div>
    </div>

    <div id="boitedialogue">
        <div class="choix">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="radio" name="choix" value="<?php if (isset($id)){echo ($id.'0');}else{echo '1';}?>"><?php avoirinfo("choix","choix",$choix)?> <!-- Permet de récupérer le dialogue selon l'ID dans la BDD -->
                <input type="radio" name="choix" value="<?php if (isset($id)){echo ($id.'1');}else{echo '2';}?>"><?php avoirinfo("choix","choix",$choix2)?><br> <!-- Même chose -->
                <input type="submit" name="Valider" value="Valider">
            </form>
        </div>
        <div id="bouton"><button id="boutonchoix">Place au choix</button></div>
        <div id="dialogue"></div>
        <div id="test">
        </div>
    </div>
</div>
    <?php
echo "<script>";echo "
            document.getElementById('dialogue').innerHTML=";  // On éxécute la même fonction pour le dialogue d'abord le premier en id 11 puis le suivant (boucle à faire pour que la fonction soit récursive
avoirinfo("dialogue","dialogue",$id);
avoirinfo("dialogue","dialogue",$id2);
?>

</body>
</html>