<?php

require('config/conexao.php');


//VERIFICAR SE TEM AUTORIZAÇÃO
$user = auth($_SESSION['token']);
if($user){
    echo "<h1>ESSA É A PÁGINA RESTRITA 2</h1>";
    echo "<br><br><a style='background:green; color:white; text-decoration:none; padding:20px; border-radius:5px;' href='logout.php'>Sair do sistema</a>";
    
}else{
    //REDIRECIONAR PARA LOGIN
    header('location: index.php');
}