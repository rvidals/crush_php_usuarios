<?php

    include "config.php";

    $sql = "SELECT * FROM cliente.usuarios";
    $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
    <title>Página de Consulta</title>
    <head>
        
        <link rel="stylesheet" 
        href="https://maxcdn.bootstrapcdn.com/3.4.0/css/bootstrap.min.css">
        
    </head>
    <body>

        <div class="container">
        <h2>Usuários:</h2>
        <table class="table">
            <thead>
                    <tr>
                        <th>ID</th>
                        <th>Primeiro Nome</th>
                        <th>Último Nome</th>
                        <th>Email</th>
                        <th>Gênero</th>
                        <th>Data do Cadastro</th>
                        <th>Actiom</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()){

                    ?>

                    <tr>
                        <td><?php echo $row['idusuarios']; ?></td>
                        <td><?php echo $row['primeiro_nome']; ?></td>
                        <td><?php echo $row['segundo_nome']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['genero']; ?></td>
                        <td><?php echo $row['dt_cadastro']; ?></td>

                        <td> 
                            <a class="btn btn-info" href="update.php?id=<?php echo $row['idusuarios'];?>">Editar: </a>&nbsp;
                            <a class="btn btn-denger" href="delete.php?id=<?php echo $row['idusuarios'];?>">Deletar: </a>
                        </td>
                    </tr>
                
                <?php
                }}
                ?>

                </tbody>
            </table>
            
        
        </div>

    </body>
</html>