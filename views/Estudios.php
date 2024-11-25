<?php
define( "BASE_URL", "/Proyecto/views/");
/* Llamamos al archivo de conexion.php */
require_once("../config/conexion.php");
if(isset($_SESSION["usu_id"])){
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
     
      include ("../views/modulos/head.php");    
    ?>

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php
  include("modulos/header.php");
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
  include("modulos/menu.php");
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="card card-info">
            <div class="card-header">
            <h1 class="card-title">Estudios</h1>
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="inicio.php">INICIO</a></li>
                  <li class="breadcrumb-item active"><a href="usuario.php">Procesos</a></li>
                </ol>
            </div>
      </div>
    
      <div class="card-body">
        <button type="button" class="btn btn-primary mb-3" onClick="nuevo()">Crear usuario</button>
         <table id="usuario_data" class="table display responsive nowrap">
            <thead>
              <tr>
                <th class="wd-15p">Nivel Educativo</th>
                <th class="wd-15p">Institucion</th>
                <th class="wd-15p">Titulos Obtenidos</th>
                <th class="wd-15p">Fecha De Inicio</th>
                <th class="wd-15p">Fecha Finalizacion</th>
                <th class="wd-15p">Estado</th>      
              </tr>
            </thead>
          </table>
        </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php
  include("modulos/footer.php");
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
   <?php
      require_once("../modelos/EstudiosModal.php");
      
    ?>
    <script type="text/javascript" src="js/Estudios.js"></script>
  </body>
</html>
<?php
}else{
  /* Si no a iniciado sesion se redireccionara a la ventana principal */
  header("Location:".Conectar::ruta()."views/404.php");
}
?>