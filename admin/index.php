<?php
require_once "../Config/Autoload.php";
Config\Autoload::runAdmin();

$template = new Clases\TemplateAdmin();
$template->set("title", "Admin 2");
$template->set("description", "Admin");
$template->set("keywords", "Inicio");
$template->set("favicon", "url");
$template->themeInit();
$admin    = new Clases\Admin();
$funciones= new Clases\PublicFunction();


if (!isset($_SESSION["admin"])) {
    $admin->loginForm();
} else {
    $op = isset($_GET["op"]) ? $_GET["op"] : 'inicio';
	$accion = isset($_GET["accion"]) ? $_GET["accion"] : 'ver';
	
	if($op != '') {
		include "inc/".$op."/".$accion.".php";		
	} 
}

$template->themeEnd();
