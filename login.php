<?php
   include_once 'conexion.php';
   $conn = conectar();
   
   $usuario_login = $_POST['login_usuario'];
   $contrasena_login = $_POST['login_contrasena'];

   //Verificar que existe el usuario
   $sql = "SELECT * FROM usuarios WHERE correo= '$usuario_login'";
   $query = mysqli_query($conn, $sql);
   $usuario = mysqli_fetch_array($query);

    if(!$usuario){
        header('Location: entrar3.php');
      }
   if(password_verify(strval($contrasena_login), $usuario['contrasena'])){
      session_start();
      $_SESSION['admin'] = $usuario_login;
      $_SESSION['id'] = $usuario['usuario_id'];
      header('Location: cursos.php');
   }else{
      echo 'Contraseña Incorrecta!!!';
      header('Location: entrar2.php');
   } 
    

      
      