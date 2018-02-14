<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  <head>
    <meta charset="utf-8">
    <title>Startup</title>
    <script type="text/javascript"></script>
    <script src="jquery.js"></script>

  </head>
  <body>
      <div class="choix" id="choix1">
        choix 1
      </div>
      <div class="choix" id="choix2">
        choix 2
      </div>
    <div class="img" id="img1">
    </div>
    <button id="validation">Place au choix</button>
    <?php require('jeuphp.php'); ?>
<?php echo
    "<script>
      var compteur = 1;
      var choixprec = 0;
      function click_choix(){
      $('#choix1').click(function(){
        $('.choix').hide();
        switch(compteur){
          case 1:
            document.getElementById('img1').innerHTML=\"";
            avoirinfo("image", "fond", 1);avoirinfo("dialogue","dialogue",1);echo "\";
            compteur = compteur+1;
          break;
          case 2:
            $('.img').show();
            document.getElementById('img1').innerHTML=\"";
            avoirinfo("image", "fond", 3);avoirinfo("dialogue","dialogue",1);echo "\";
            break;
        }
      });

      $('#choix2').click(function(){
        $('.choix').hide();
        $('#emplacementtext2').show();
        switch(compteur){
          case 1:
            $('.img').show();
            document.getElementById('img1').innerHTML=\"";
            avoirinfo("image", "fond", 3);avoirinfo("dialogue","dialogue",1);echo "\";
            compteur = compteur + 1;
          break;
          case 2:

          break;
          case 3:

          break;
        }
        });
      $('#validation').click(function(){
        $('.img').hide();
        $('.emplacement').hide();
        $('.choix').show();
      });
    }
click_choix();
</script>"; ?>
  </body>
</html>
