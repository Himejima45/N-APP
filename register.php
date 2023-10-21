<?php 


include "conexion/superconect.php";

if(!empty($_POST))
{
    $alert='';
    if(empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['clave']) || empty($_POST['rol']))
    {
        $alert='<p class="msg_error">Todos los campos son obligatorios.</p>';
    }else{

        $nombre = $_POST['nombre'];
        $email  = $_POST['correo'];
        $user   = $_POST['usuario'];
        $clave  = md5($_POST['clave']);
        $rol    = $_POST['rol'];


        $query = mysqli_query($conection,"SELECT * FROM usuario WHERE usuario = '$user' OR correo = '$email' ");
        $result = mysqli_fetch_array($query);

        if($result > 0){
            $alert='<p class="text-dark msg_error">El correo o el usuario ya existe.</p>';
        }else{

            $query_insert = mysqli_query($conection,"INSERT INTO usuario(nombre,correo,usuario,clave,rol)
                VALUES('$nombre','$email','$user','$clave','$rol')");
            if($query_insert){
                $alert='<p class="text-dark" class="msg_save">Usuario creado correctamente.</p>';
            }else{
                $alert='<p class="text-dark class="msg_error">Error al crear el usuario.</p>';
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

  <title>NutriApp / Inicio sesion</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">

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
<div class="card-body">
                  <div class="d-flex justify-content-center py-4">
                    <a href="index.html" class="logo d-flex align-items-center w-auto">
                      <img src="img/icon.png" alt="">
                    </a>
                  </div>
                  <div class="pt-4 pb-2">
                   

                    <h5 class="card-title text-center pb-0 fs-4">Crear Cuenta</h5>
                    <div class="alert" class="text-dark"><?php echo isset($alert) ? $alert : ''; ?></div>
                  </div>

                  <form action="" method="post">

<div class="form-group" >
  <label class="text-dark col-sm-4" for="nombre">Nombre</label>
  <div class="input-group has-validation">
  <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-lock-fill"></i></span>
  <input type="text" name="nombre" id="nombre"class="form-control" required minlength="4" maxlength="8" placeholder="Nombre completo"></div>

  <div class="form-group" >
                <label class="text-dark col-sm-4" for="correo">Correo electrónico</label>
                <div class="input-group has-validation">
  <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-envelope-fill"></i></span>
                <input  type="text" name="correo" id="correo" class="form-control" placeholder="Correo electrónico"></div>

      <div class="form-group" >
      <label class="text-dark col-sm-4" for="usuario" >Usuario</label>
          <div class="input-group has-validation">
  <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-envelope-fill"></i></span>
          <input  type="text" name="usuario" id="usuario"class="form-control" minlength="4" maxlength="8"  placeholder="Usuario"></div>

          <div class="form-group" >

              <label class="text-dark col-sm-4" for="clave">Clave</label>
              <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-envelope-fill"></i></span>
              <input type="password" name="clave" class="form-control" id="clave" placeholder="Clave de acceso"></div>
<br>
              <div class="form-group" >
                  <label class="text-dark col-sm-4" for="rol">Tipo Usuario</label>

                  <?php 

                  $query_rol = mysqli_query($conection,"SELECT * FROM rol");
                  mysqli_close($conection);
                  $result_rol = mysqli_num_rows($query_rol);

                  ?>

                  <select name="rol" id="rol">
                      <?php 
                      if($result_rol > 0)
                      {
                          while ($rol = mysqli_fetch_array($query_rol)) {
                              ?>
                              <option value="<?php echo $rol["idrol"]; ?>"><?php echo $rol["rol"] ?></option>
                              <?php 
                      # code...
                          }

                      }
                      ?>
                  </select></div>
                  <br>

                  <center><input type="submit" value="Crear usuario" class="btn btn-primary btn_save w-100"></center> 
                  <br><div class="col-12">
                      <p class="small mb-0">¿Ya tienes una cuenta? <a href="inicio.php">Entrar</a></p>
                    </div>
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
  <script src="plugins/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="serviceworker.js"></script>

</body>

</html>