<?php
	if(isset($_SESSION["pseudo"]))
	{
		require("view/header-in.phtml");
	}
	else
	{
		require("view/header.phtml");	
	}
?>