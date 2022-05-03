<?php

$url = "http://localhost/teste_prog/crud/";

$host="localhost";
$name="teste800k";
$usuario="root";
$senha="0";
$driver="mysql";
$db=new PDO("$driver:host=$host;dbname=$name", $usuario, $senha);

if(isset($_COOKIE['user']) && $_COOKIE['user']=='logado'){
    include('pages/genrenciador.php');
    if($_GET['p'] == 'editor')
        include('pages/editor.php');
}else{
    if($_GET['p'] == 'registro')
        include('pages/registro.php');
    elseif($_GET['p'] == 'login')
        include('pages/login.php');
    
    else
        include('pages/login.php');
}