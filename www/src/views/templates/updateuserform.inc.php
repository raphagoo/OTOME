<form method="post" action="index.php?action=UpdateUser" class="modal">
	<div class="">
		<h3>Modification du mot de passe</h3>
	</div>
	<div class="">
<?php	if ($this->message!=="")
			echo '<div class="alert "'.$this->style.'">'.$this->message.'</div>';
?>
		<div class="">
			<label class="" for="signUpLogin">Pseudo</label>
			<div class="">
				<input  disabled type="text" name="signUpLogin" placeholder="Pseudo" value="<?php echo $this->login; ?>">
			</div>
		</div>
		<div class="">
			<label class="" for="updatePassword">Mot de passe</label>
			<div class="">
				<input type="password" name="updatePassword" placeholder="Mot de passe">
			</div>
		</div>
		<div class="">
			<label class="" for="updatePassword2">Confirmation</label>
			<div class="">
				<input type="password" name="updatePassword2" placeholder="Confirmation">
			</div>
		</div>
	</div>
	<div class="">
		<input class="" type="submit" value="Changer de mot de passe" />
	</div>
</form>
