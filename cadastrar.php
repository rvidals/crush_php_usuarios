<?php

include "config.php";

    if(isset($_POST['submit'])){

        $primeiro_nome = $_POST['primeiro_nome'];
        $segundo_nome = $_POST['segundo_nome'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $genero = $_POST['genero'];

        // Data horário de Brasília

        date_default_timezone_set('America/Sao_Paulo');
        $dataLocal = date("Y-m-d H:i:s", time());


        //$sql = "INSERT INTO cliente.usuarios ('primeiro_nome', 'segundo_nome', 'email', 'password', 'genero', 'dt_cadastro')
        //        VALUES ('{$primeiro_nome}', '{$segundo_nome}', '{$email}', '{$password}', '{$genero}','{$dataLocal}')";

        $sql = "INSERT INTO `cliente`.`usuarios`
            (
            `primeiro_nome`,
            `segundo_nome`,
            `email`,
            `password`,
            `genero`,
            `dt_cadastro`)
            VALUES
            ('{$primeiro_nome}', 
            '{$segundo_nome}', 
            '{$email}', 
            '{$password}', 
            '{$genero}',
            '{$dataLocal}')";

        
        $result = $conn->query($sql);

        if($result == TRUE){
            echo "<h2> Registro criado com sucesso!</h2>";
        }else{
            echo "Falha no registro!".$sql."<br>".$conn->error;
        };

        $conn->close();

    };

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
</head>
<body>
    <h2>Cadastro de Usuários:</h2>
    <form action="" method="POST">
        <fieldset>
            Primeiro Nome:
            <input type="text" name="primeiro_nome" placeholder="João"><br><br>
            Último Nome: 
            <input type="text" name="segundo_nome" placeholder="Balão"><br><br>
            e-mail: 
            <input type="email" name="email" placeholder="jao@balao.br"><br><br>
            Senha: 
            <input type="password" name="password" placeholder="***********"><br><br>
            Genero: <select name="genero">
                         <option value="M">Masculino</option>
                         <option value="F">Feminino</option>
                         <option va1lue="N">Não Declarado</option>
                    </select><br><br>
            <input type="submit" value="submit" name="submit">
        </fieldset>
    </form>
</body>

<?php 
    echo "<a href='consultar.php'>Cliquei aqui para realizar uma consuta!</a>"
?>

</html>