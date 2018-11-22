<?php require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones= new Clases\PublicFunction();
$email= new Clases\Email();
$template->themeInit();
?>
<div class="container" style="height:400px;">
<!-- Start Breadcumbs Area -->
<div class="breadcumbs-area breadcumbs-bg-2 bc-area-padding">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center mt-100">
                        <h2>
                            404 Página no encontrada
						</h2>
						<p class="return">La página no existe o no está disponible en este momento.</p>
                                <p><a class="btn theme-btn" href="<?= URL; ?>/index"><i class="fa fa-arrow-circle-left"></i> Ir al inicio</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcumbs Area -->
</div>

<?php
$template->themeEnd();
?> 
