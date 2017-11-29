<form class="">
	<?php if ($this->login!=null)  $this->displayCommands(); ?>	
	<a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=Logout" class="" >Déconnexion</a>
	<span class=""><?php echo $this->login; ?></span>
</form>


