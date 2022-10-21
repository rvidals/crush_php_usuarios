<?php 

    include "config.php";

    if(isset($GET['idusuarios'])){
        $id = $$_GET['idusuarios'];
        $sql = "DELETE FROM cliente.usuarios WHERE `idusuarios` = '$id'";

        $result = $conn -> query($sql);

        if($result == TRUE){
            echo "Registro deletado com sucesso!";
        };
    }
?>