<?php
define("BASE_URL", "/Proyecto/views/");
require_once("../config/conexion.php");

if (isset($_SESSION["usu_id"])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../views/modulos/head.php"); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php include("modulos/header.php"); ?>
    <?php include("modulos/menu.php"); ?>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="card card-info">
                <div class="card-header">
                    <h1 class="card-title">Social Media Links</h1>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <!-- Botón para agregar red social en la parte superior izquierda -->
                <div class="row">
                    <div class="col-md-12">
                        <a href="ruta_a_agregar_red_social.php" class="btn btn-primary mb-3">Agregar Red Social</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">socmed_id</h3>
                            </div>
                            <div class="card-body">
                              
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">socmed_icono</h3>
                            </div>
                            <div class="card-body">
                              
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">socmed_url</h3>
                            </div>
                            <div class="card-body">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include("modulos/footer.php"); ?>
    <aside class="control-sidebar control-sidebar-dark"></aside>
</div>

<?php include('modulos/js.php'); ?>
<script type="text/javascript" src="js/Socialmedia.js"></script>
</body>
</html>

<?php
} else {
    header("Location:" . Conectar::ruta() . "views/404.php");
}
?>