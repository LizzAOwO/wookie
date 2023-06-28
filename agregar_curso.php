<?php
    include 'conexion.php'; 
    $conn = conectar();
    $curso_id = $_POST['cursos_id'];
    $usuario_id = $_POST['usuario_id'];

    //Verificar que existe el curso
    $sql = "SELECT * FROM alumno_cursos WHERE cursos_id = '$curso_id' and usuario_id = '$usuario_id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        $sql_agregar = "INSERT INTO alumno_cursos (cursos_id , usuario_id) VALUES('$curso_id', '$usuario_id')";
        echo $sql_agregar;
        $query = mysqli_query($conn, $sql_agregar);
        header('location: cursos2.php');
    }else{
        header('location: cursos_dis.php');
    }