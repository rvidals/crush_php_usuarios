<?php

//Arquivo de configuração

$servername = 'localhost';
$username = 'root';
$password = null;
$dbname = 'cliente';

//parâmetros de conexão

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){ // o connect_error indica qual erro está constando se existir!

    die("A conexão falhou!".$conn->connect_error); 

};

?>
