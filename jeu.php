<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <meta charset="utf-8">
    <title>Startup</title>
    <link rel="stylesheet" href="choix.css">
    <script type="text/javascript"></script>
    <script src="jquery.js"></script>

  </head>
  <body>
    <div class="choix">
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="radio" name="choix" value="<?php if (isset($_POST['choix'])){echo ($_POST['choix'].'1');}else{echo '1';}?>"> Choix 1<br>
        <input type="radio" name="choix" value="<?php if (isset($_POST['choix'])){echo ($_POST['choix'].'2');}else{echo '2';}?>">Choix 2<br>
        <input type="submit" name="Valider" value="Valider">
      </form>
    </div>
    <div id="conteneur">
      <div class="img" id="img1"></div>
      <div id="boitedialogue">
        <div id="dialogue"></div>
        <div id="test">
      </div>
    </div>
  </div>
    <button id="boutonchoix">Place au choix</button>
    <?php require('jeuphp.php'); ?>
<?php echo
    "<script>
      var compteur = 0;
      var choixprec = 0;
      function click_choix(){\"";
        echo "\";
        document.getElementById('boutonchoix').style.visibility='visible';
        compteur = compteur+1;
        $('.choix').hide();
        $('.img').show();
        $('#conteneur').show();\"";
        switch($_POST['choix']){
          case 1:
            echo "\"
            document.getElementById('img1').innerHTML=\"";
            avoirinfo("image", "fond", $_POST['choix']);echo "\";
            document.getElementById('dialogue').innerHTML=\"";
            avoirinfo("dialogue","dialogue",1);
          break;
          case 11:
            echo "\"
            document.getElementById('img1').innerHTML=\"";
            avoirinfo("image", "fond", $_POST['choix']);echo "\";
            document.getElementById('dialogue').innerHTML=\"";
            avoirinfo("dialogue","dialogue",1);
          break;
          }
    echo "\";
      $('#boutonchoix').click(function(){
        $('#conteneur').hide();
        $('.img').hide();
        $('.choix').show();
        document.getElementById('boutonchoix').style.visibility='hidden';
      });
    }
click_choix();
</script>"; ?>
  </body>
</html>
