<?php 

$alert = '';
session_start();
if(!empty($_SESSION['active']))
{
    header('location: views/index.php');
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

                header('location: inicio.php');
            }else{
                $alert = 'El usuario o la clave son incorrectos';

                session_destroy();
            }


        }

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>NutriApp / Iniciar sesion</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">

  <!-- Vendor CSS Files -->
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="plugins/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="plugins/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="plugins/quill/quill.snow.css" rel="stylesheet">
  <link href="plugins/quill/quill.bubble.css" rel="stylesheet">
  <link href="plugins/remixicon/remixicon.css" rel="stylesheet">
  <link href="plugins/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="manifest" href="manifest.json">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              
              <div class="card mb-3">
                
                <div class="card-body">
                  <div class="d-flex justify-content-center py-4">
                    <a href="views/index.php" class="logo d-flex align-items-center w-auto">
                      <img src="assets/img/icon.png" alt="">
                      <span class="d-none d-lg-block"></span>
                    </a>
                  </div><!-- End Logo -->

                  <div class="pt-2 pb-">
                    <h5 class="card-title text-center pb-0 fs-4">Iniciar Sesión</h5>
                    <p class="text-center small">Ingresa tu usuario y contraseña para entrar</p>
                    <div class="alert"><p style="color: black;"><?php echo isset($alert) ? $alert : ''; ?></div></p>
                  </div>

                  
                  <form action="" method="post">
  <div class="container">
          
          
            <div class="form-group  mt-3" >
                <label class="text-dark col-sm-4" >Usuario</label>
                <div class="input-group has-validation">
                 <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person-fill"></i></span>
                <input type="text" name="usuario" class="form-control"placeholder="Usuario">
            </div>
          </div>
          


            <div class="form-group mt-3" >
                <label class="text-dark col-sm-4 col-form-label" for="staticEmail" >Contraseña</label>
                <div class="input-group has-validation">
               <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-person-fill"></i></span>
                <input type="password" name="clave"class="form-control" placeholder="Contraseña">
            </div></div>


    <hr>
    <input type="submit" class="register btn btn-primary w-100"  value="Ingresar">
  </div>
  

  <div class="container signin"> <p style="color: black;">¿No tienes una cuenta? <a  href="register.php">Regístrate ahora</a>.</p>
    


</form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="plugins/apexcharts/apexcharts.min.js"></script>
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="plugins/chart.js/chart.umd.js"></script>
  <script src="plugins/echarts/echarts.min.js"></script>
  <script src="plugins/quill/quill.min.js"></script>
  <script src="plugins/simple-datatables/simple-datatables.js"></script>
  <script src="plugins/tinymce/tinymce.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/req.js"></script>
  <script src="assets/serviceworker.js"></script>


</body>

</html>