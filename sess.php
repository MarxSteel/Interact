<?php
/**
 * Tutorial: PHP Login Registration system
 *
 * Page : Profile
 */

// Start Session
session_start();

// check user login
if(empty($_SESSION['user_id']))
{
    header("Location: index.php");
}

// Database connection
require __DIR__ . '/database.php';
$db = DB();

// Application library ( with DemoLib class )
require __DIR__ . '/lib/library.php';
$app = new DemoLib();

$user = $app->UserDetails($_SESSION['user_id']); // get user details

$loginUser = $user->username;
$privs = $app->PrivilegioSocio($loginUser);

$server = 'http://192.168.1.100:8888/interact/interact/';

$Titulo = "SIGED - Sistema de Gestão Distrital | MDIO Interact Brasil";
$Distrito = "1234";
$NomeUL = "Marquistei Medeiros";

$Versao = "2.2.2";



?>