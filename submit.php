<?php 
if (isset($_POST["nome"]) && !empty($_POST["nome"]) && isset($_POST["email"]) && !empty($_POST["email"])) {
	$nome = $_POST["nome"];
	include("sucesso.php");	
} else {
	echo "dados invalidos!";
}
