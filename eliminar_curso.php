<?php
    include 'conexion.php'; 
    $conn = conectar();
    $curso_id = $_POST['cursos_id'];
    $usuario_id = $_POST['usuario_id'];

    //Verificar que existe el curso
    $sql_eliminar = "DELETE FROM alumno_cursos WHERE cursos_id = '$curso_id' and usuario_id = '$usuario_id'";
    $query = mysqli_query($conn, $sql_eliminar);
    header('location: cursos4.php');
        

        
