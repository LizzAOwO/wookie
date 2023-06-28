<?php
    Include 'conexion.php';
    $conn = conectar();
    $usuario_id = $_POST['usuario_id'];
    $usuario_nuevo = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $contrasena2 = $_POST['contrasena2'];
    $contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
    if(password_verify($contrasena2, $contrasena)){
        $sql_actualizar = "UPDATE usuarios SET correo='$usuario_nuevo', contrasena='$contrasena' WHERE usuario_id='$usuario_id'";
        $query = mysqli_query($conn, $sql_actualizar);
        header('location: cursos3.php');
    }else{
        header('location: editarusu2.php');
    }
?>