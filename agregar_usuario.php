<?php
    Include 'conexion.php';
    $conn = conectar();
    $usuario_nuevo = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena2 = $_POST['contrasena2'];
    if (!filter_var($usuario_nuevo, FILTER_VALIDATE_EMAIL)) {
    header('Location: registro2.php');
    }else{
        $contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
        //Verificar que existe el usuario
        $sql = "SELECT * FROM usuarios WHERE correo= '$usuario_nuevo'";
        $query = mysqli_query($conn, $sql);
        $resultado = mysqli_fetch_array($query);

        if($resultado){
            header('location: usuexist.php');
        }else{
            if(password_verify($contrasena2, $contrasena)){
                $sql_agregar = "INSERT INTO usuarios (correo , contrasena) VALUES('$usuario_nuevo', '$contrasena')";
                $query = mysqli_query($conn, $sql_agregar);
                //Destruir las variables de conexion
                $sql_agregar = null;
                header('location: entrar.php');
            }else{
                header('location: contrasena.php');
            }
        }
    }

    
    ?>

    