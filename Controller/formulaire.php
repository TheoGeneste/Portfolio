<?php
   include_once "../View/contact.php"; 
   include_once "../Model/bdd.php";
   $bdd = new Bdd();

if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"])  && isset($_POST["ville"]) && isset($_POST["message"])) {

    
	$bdd->insertExpediteur($_POST["email"],$_POST["nom"], $_POST["prenom"], $_POST["ville"], $_POST["message"]);
	
	header(include_once "../View/contact.php");
    }
?>