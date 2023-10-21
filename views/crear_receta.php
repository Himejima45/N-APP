<?php include("../include/header.php");

?>
<body>

      <?php include("../include/aside.php");?>
      <?php include("../include/nav.php");?>
      <main id="main" class="main">
   
   <div class="pagetitle">
     <h1>Crear Plan Nutricional</h1>
     <nav>
       <!-- <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
       </ol> -->
     </nav>
   </div>

   <section class="section">

       <!-- Left side columns -->
       <div class="col-lg-10">
         <div class="row">
         
         <div class="card">
           <div class="card-body">
             <div class="row text-center">
             <h5 class="card-title">Crear Plan Personalizado</h5>
 
               <!-- General Form Elements -->
               <form>
                 <div class="row mb-3 justify-content-center ">
                   <label for="inputText">Nombre del Plan</label>
                   <div class="col-lg-8">
                     <input type="text" class="form-control">
                   </div>
                 </div>
                 <div class="row mb-3 justify-content-center">
                   <label>Tipo</label>
                   <div class="col-lg-8">

                   <div>
                         <?php require_once "../conexion/conexion.php"; 
                         $conexion=conexion();
                         $sql="SELECT idtipo,nombre
                         from tipo";
                         $result=mysqli_query($conexion,$sql);
                         ?>
                         <div class="input-group mt-3">
                             <select id="tipo" class="form-control" >
                               <option value="A">Seleccione Tipo </option>
                               <?php while($ver=mysqli_fetch_row($result)): ?>
                                   <option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
                               <?php endwhile; ?>
                               option
                           </select><div class="valid-feedback">listo</div></div>
                     </div>

                   </div>
                 </div>
                 <div class="row mb-3 justify-content-center">
                   <label>Comida</label>
                   <div class="col-lg-8">
                   <?php require_once "../conexion/conexion.php"; 
                         $conection=conexion();
                         $sql="SELECT idcom,nombre
                         from comida";
                         $result=mysqli_query($conexion,$sql);
                         ?>
                         <div class="input-group mt-3">
                             <select id="comida" class="form-control" >
                               <option value="A">Seleccione comida </option>
                               <?php while($ver=mysqli_fetch_row($result)): ?>
                                   <option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
                               <?php endwhile; ?>
                               option
                           </select><div class="valid-feedback">listo</div></div>
                     </div>

                   </div>
                 </div>
                 <div class="row mb-3 justify-content-center">
                   <label>Receta</label>
                   <div class="col-lg-8">
                     <select class="form-select js-example-basic-single" id="sel_receta"></select>
                   </div>
                 </div>
 
                 <div class="row mb-3 text-center">
                   <div class="col-sm-12">
                     <button type="submit" class="btn btn-primary w-50">Crear</button>
                   </div>
                 </div>
               </div>
 
               </form><!-- End General Form Elements -->
 
             </div>
           </div>
           </div>
             </div>
           </div>
   </section>

 </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      Copyright &copy; <strong><span>Nutri-Star</span></strong>. Derechos Reservados
    </div>
    
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

   <!-- Vendor JS Files -->
   <script src="../plugins/apexcharts/apexcharts.min.js"></script>
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../plugins/echarts/echarts.min.js"></script>
  <script src="../plugins/quill/quill.min.js"></script>
  <script src="../plugins/simple-datatables/simple-datatables.js"></script>
  <script src="../plugins/php-email-form/validate.js"></script>
  <script src="../plugins/tinymce/tinymce.min.js"></script>
  <script src="../plugins/chart.js/chart.umd.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script src="../serviceworker.js"></script>
  <script src="../assets/js/rejoj.js"></script> 

</body>

</html>