<?php
//fichier de configuration de notre site
#gestion affichage des erreurs php
error_reporting(E_ALL); 
ini_set('display_errors',1); 

#connexion à la base de données : 

define('SGBD','mysql'); //quel type de bdd j'utilise ?
define('HOSTNAME','91.216.107.164'); //nom de l'hôte
define('USER','rmspa784479_27clzs'); //nom de l'utilisateur
define('PASSWORD','atomatomatom'); //le mot de passe
define('DATABASE','rmspa784479_27clzs'); //nom de la base de données
/*define('SGBD','mysql'); //quel type de bdd j'utilise ?
define('HOSTNAME','localhost'); //nom de l'hôte
define('USER','root'); //nom de l'utilisateur
define('PASSWORD',''); //le mot de passe
define('DATABASE','atom'); //nom de la base de données*/
// rmspa784479_27clzs
$options = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",//forcer l'encodage utf8
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //récupération des données par défaut sous forme de tableau associatif
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING	//affichage des warning ! A commenter en prod
); 

try{//on essaie d'exécuter le code suivant...
	//je crée une instance de PDO
	$pdo = new PDO(SGBD . ':host=' . HOSTNAME . ';dbname=' . DATABASE,USER,PASSWORD,$options); 
}
catch(Exception $e){//...en cas d'erreur on récupère le type de l'erreur retournée
	die('Erreur lors de la connexion à la base de données : ' . $e->getMessage());
}

//variable d'affichage : 
$content = ""; 

//configuration url : 
define('URL_SITE','/atom/');
define('URL_SITE_BACK', URL_SITE . 'admin/');
//configuration racine site : 
define('RACINE_SITE',$_SERVER['DOCUMENT_ROOT'] . '/admin/'); 

//récupération des fonctions : 

/*

	$param1 : @string

	$param2 : @int

*/

function debug($param1,$param2 = 1)

{

	if($param2 == 1)

	{

		echo '<pre>'; 

			print_r($param1); 

		echo '</pre>'; 

	}

	else

	{

		echo '<pre>'; 

			var_dump($param1); 

		echo '</pre>'; 

	}

}



/*

fonctions utilisateurs pour gérer l'affichage en fonction de la valeur des sessions : 

*/



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



function adminEstConnecte() //administrateur

{

	if(membreEstConnecte() && $_SESSION['membre']['statut'] == 1) //l'administrateur a un statut == 1. C'est ce qui le différencie d'un simple membre connecté

	{

		return true; 

	}

	else

	{

		return false;		

	}

}



//fonctions pour les formulaires : 

/*

	@param1 String	(saisie du membre)

	@param2 Int		(longueur de la chaine)

	@param3 String	(affichage du nom du champ)

*/

function verifNum($param1,$param2,$param3)

{

	global $erreur; 

	//les expressions régulières : preg_match()

	if(!preg_match('#^[0-9]{' . $param2 . '}$#',$param1)) //seuls les chiffres de 0 à 9 sont autorisés

	//preg_match('#^[0-9]{5}$#',$param1)

	{

		$erreur .= '<div class="alert alert-danger">Le champ ' . $param3 . ' n\'est pas au bon format</div>'; 

	}

	return $erreur;

}



/*

	@param1 String	(saisie du membre)

	@param2 String	(valeur de l'expression régulière)

	@param3 String	(affichage du nom du champ)

	@param4 String	(affichage de l'expression régulière)

*/

function verifChamp($param1,$param2,$param3,$param4)

{

	global $erreur; 

	if(!preg_match("$param2",$param1))

	{

		$erreur .= "<div class='alert alert-danger'>Erreur de format sur le champ $param3. Caractères autorisés : $param4</div>"; 

	}

	return $erreur; 

}

//initialisation des sessions : 
session_start(); 




