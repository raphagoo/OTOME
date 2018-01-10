<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/onection.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <title>Contact</title>
  </head>
  <body>
    <div class="container">
      <form id=contact method="post" action="envoi.php">
        <h1 id="titrecontact">Contact</h1>
        <label id="textpseudo">Votre pseudo :
        </label>
        <input id=entrerpseudo type="text" name="pseudo">
        <label id="textmail">Votre email :
        </label>
        <input id="entrermailcontact" type="email" name="mail">
        <label id="textmessage" for="message">
          De quoi voulez-vous nous faire part ?
        </label>
        <textarea id="message" name="message" rows="15" cols="50">
        </textarea>
        <input id="contactbouton" type=submit value="Envoyer">
      </form>
      <div>
      <?php
        require('footer.php');
      ?>
