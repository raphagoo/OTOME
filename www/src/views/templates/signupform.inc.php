
<form method="post" action="index.php?action=SignUp" class="modal">
<div class="">
	<div class="container">
		<div id="fond">
			<div class="">
				<div id="sinscrire">
					<h1>Inscription</h1>
				</div>
			</div>
	<div class="">
<?php	if ($this->message!=="")
			echo '<div class="alert '.$this->style.'">'.$this->message.'</div>';
?>
			<div id="pseudo"  class="">
				<label class="" for="signUpLogin">Pseudo</label>
			</div>
			<div id="enterpseudo" class="">
				<input type="text" name="signUpLogin" placeholder="Pseudo">
			</div>


	    <div id="mail" class="">
	      <label class="" for="">Email</label>
			</div>
	    <div id="entermail" class="">
	      <input type="text" name="email" placeholder="Email"/>
	    </div>


			<div id="motdepasse" class="">
				<label class="" for="signUpPassword">Mot de passe</label>
			</div>
			<div id="entermotdepasse" class="">
				<input type="password" name="signUpPassword" placeholder="Mot de passe">
			</div>


			<div id="confirmation" class="">
				<label class="" for="signUpPassword2">Confirmation</label>
			</div>
			<div id="enterconfirmation" class="">
				<input type="password" name="signUpPassword2" placeholder="Confirmation">
			</div>


	    <div id="conditions" class="">
	      <label class="" for="certif">J'accepte les conditions générales d'utilisation</label>
			</div>
	    <div id="acocherregister" class="">
	      <input type="checkbox" name="certif">
	    </div>


	</div>
			<div id="validation" class="">
				<input class="" type="submit" value="Créer mon compte" />
			</div>
</form>

<!--
<form action="" method="post">

    <div id="pseudo" class="">
        <label for="">Pseudo</label>
        <input type="text" name="username" class="form-control"/>
    </div>

    <div id="mail" class="">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control "/>
    </div>

    <div id="motdepasse" class="">
        <label for="">Mot de passe</label>
        <input type="password" name="password" class="form-control"/>
    </div>

    <div id="confirmation" class="">
        <label for="">Confirmez votre mot de passe</label>
        <input type="password" name="password_confirm" class="form-control"/>
    </div>

    <div id="age">
        <label for="certif">Je certifie avoir 16 ans ou plus</label>
        <input type="checkbox" id="certif" name="certif">
    </div>
    <div id="validation">
        <button type="submit" class="btn btn-primary">M'inscrire</button>
    </div>
    </div>
</form>
-->




<!--
<div class="container">
    <div id="fond">
        <div id="sinscrire">
            <h1>S'inscrire</h1>
        </div>

        <form method="post" action="index.php?action=SignUp" class="modal">
            <div class="">
                <?php	if ($this->message!=="")
                    echo '<div class="alert '.$this->style.'">'.$this->message.'</div>';
                ?>

            <div id="pseudo" class="">
                <label class="" for="signUpLogin">Pseudo</label>
                <input type="text" name="signUpLogin" placeholder="Pseudo"  class="form-control">
            </div>

            <div id="mail" class="">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control "/>
            </div>

            <div id="motdepasse" class="">
                <label class="" for="signUpPassword">Mot de passe</label>
                <input type="password" name="signUpPassword" placeholder="Mot de passe" class="form-control">
            </div>

            <div id="confirmation" class="">
                <label class="" for="signUpPassword2">Confirmation</label>
                <input type="password" name="signUpPassword2" placeholder="Confirmation" name="password_confirm" class="form-control">
            </div>

            <div id="age">
                <label for="certif">Je certifie avoir 16 ans ou plus</label>
                <input type="checkbox" id="certif" name="certif">
            </div>

            </div>

            <div id="validation">
                <button type="submit" class="btn btn-primary">M'inscrire</button>
            </div>
    </div>
    </form>

</div>
