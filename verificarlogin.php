<?php

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if ($usuario == "joao" && $senha == "12345678"){
    session_start();
    $_SESSION["usuario"] = $_POST["login"];
    header("Location: calculadora.php");
}

else{
    echo "Senha inválida";
    header("Location: index.html");
}

?>