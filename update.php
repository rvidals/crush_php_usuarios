<?php 
    include "config.php";

    if(isset($_POST['update'])){
        $primeiro_nome = $_POST['primeiro_nome'];
        $segundo_nome = $_POST['segundo_nome'];
        $id = $_POST['idusuarios'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $genero = $_POST['genero'];
        //$dt_cadastro = $_POST['dt_cadastro'];

        $sql = "UPDATE `cliente`.`usuarios` SET
                `primeiro_nome` = '$primeiro_nome',
                `segundo_nome` = '$segundo_nome',
                `email` = '$email',
                `password` = '$password',
                `genero` = '$genero',
                `dt_cadastro` = 'NOW()'
                WHERE `idusuarios` = '$id'";

        $result = $conn->query($sql);

        if($result == TRUE){
            echo "Atualizado com sucesso!";
        }else{
            echo "Erro:".$sql."<br>".$conn->$error;
        };
    }
    if(isset($_GET['idusuarios'])){
        $id = $_GET['id'];

        $sql = "SELECT * FROM `cliente`.`usuarios` WHERE `idusuarios`= '$id'";

        $result = $conn->query($sql);

        if($request->num_rows > 0){
            while($row = $result->fetch_assoc()){ //Retorna um conjunto de dados!
                $primeiro_nome = $row['primeiro_nome'];
                $segundo_nome = $row['segundo_nome'];
                $email = $row['email'];
                $password = $row['password'];
                $genero = $row['genero'];
                $id = $row['idusuarios'];
            }

            ?>

            <h2>Formulário de Atualização</h2>

            <form action="" method="post">

                <fieldset>
                    <legend>Informação Pessoal:</legend>
                    Primeiro Nome: <br>
                    <input type="text" name="primeiro_nome" value="<?php echo $primeiro_nome;?>">
                    <input type="hidden" name="idusuarios" value="<?php echo $id;?>">
                    <br>
                    <br>
                    Último Nome: <br>
                    <input type="text" name="segundo_nome" value="<?php echo $segundo_nome;?>">
                    <br>
                    <br>
                    E-mail: <br>
                    <input type="email" name="email" value="<?php echo $email;?>">
                    <br>
                    <br>
                    Senha: <br>
                    <input type="password" name="password" value="<?php echo $password;?>">
                    <br>
                    <br>
                    Gênero: <br>
                    <input type="radio" name="genero" value="
                    <?php if($genero == 'M'){
                        echo "checked";
                    };?>">Masculino
                    <input type="radio" name="genero" value="
                    <?php if($genero == 'F'){
                        echo "checked";
                    };?>">Feminino
                    <input type="radio" name="genero" value="
                    <?php if($genero == 'N'){
                        echo "checked";
                    };?>">Não Declarar
                    <br>
                    <br>
                    <input type="submit" value="update" name="update">

                </fieldset>

            </form>

    <?php 
        }else{
            header("Location:consultar.php");
    }

}
?>