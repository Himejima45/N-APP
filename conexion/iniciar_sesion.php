<?php 

$alert = '';
session_start();
if(!empty($_SESSION['active']))
{
    header('location: ../views/index.php');
}else{

    if(!empty($_POST))
    {
        if(empty($_POST['usuario']) || empty($_POST['clave']))
        {
            $alert = 'Ingrese su usuario y su calve';
        }else{

            require_once "conexion/superconect.php";

            $user = mysqli_real_escape_string($conection,$_POST['usuario']);
            $pass = md5(mysqli_real_escape_string($conection,$_POST['clave']));

            $query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario= '$user' AND clave = '$pass'");
         

          
               mysqli_close($conection);

            $result = mysqli_num_rows($query);



            if($result > 0)
            {
                $data = mysqli_fetch_array($query);
                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $data['idusuario'];
                $_SESSION['nombre'] = $data['nombre'];
                $_SESSION['email']  = $data['email'];
                $_SESSION['user']   = $data['usuario'];
                $_SESSION['rol']    = $data['rol'];

                header('location: index.php');
            }else{
                $alert = 'El usuario o la clave son incorrectos';

                session_destroy();
            }


        }

    }
}
?>