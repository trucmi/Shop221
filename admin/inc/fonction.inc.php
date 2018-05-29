<?php

function membreEstConnecte() //simple membre

{

	if(!isset($_SESSION['membre'])) //si la session membre n'est pas définie

	{

		return false;

	}

	else

	{

		return true; 

	}

}












