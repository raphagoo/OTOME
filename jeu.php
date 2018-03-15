<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Startup</title>
    <link rel="stylesheet" href="choi.css">
    <script type="text/javascript"></script>
    <script src="jquery.js"></script>

  </head>
  <body>
  <?php require('jeuphp.php'); ?>
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
  ?>
    <div id="conteneur">
      <div class="img" id="img1"></div>
      <div id="personnage"></div>
      <div id="boitedialogue">
          <div class="choix">
              <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                  <input type="radio" name="choix" value="<?php if (isset($id)){echo ($id.'0');}else{echo '1';}?>"><?php avoirinfo("choix","choix",$choix)?><br> <!-- Permet de récupérer le dialogue selon l'ID dans la BDD -->
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

            echo "<script>\"
            document.getElementById('img1').innerHTML=\"";  // On exécute la fonction avoirinfo de jeuphp.php avec l'id set dans le formulaire (à changer)
            avoirinfo("image", "fond", 1);echo "<script>\";
            document.getElementById('dialogue').innerHTML=\"";  // On éxécute la même fonction pour le dialogue d'abord le premier en id 11 puis le suivant (boucle à faire pour que la fonction soit récursive
            avoirinfo("dialogue","dialogue",$id);
            avoirinfo("dialogue","dialogue",$id2);echo "<script>\"
            document.getElementById('personnage').innerHTML=\""; // Appel à la fonction pour récupérer les images des personnages
            avoirinfo("image", "personnages", 1); ?>
  </body>
</html>
