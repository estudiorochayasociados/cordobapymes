<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();

$id       = isset($_GET["id"]) ? $_GET["id"] : '';
$novedad     = new Clases\Novedades();
$novedad->set("id",$id);
$novedadData = $novedad->view();
$novedadSide = new Clases\Novedades();
$imagenesSide = new Clases\Imagenes();
$imagen = new Clases\Imagenes();
$imagen->set("codigo",$novedadData['cod']);
$imagenData = $imagen->view();
$template->set("title", "Cordoba Pymes | ".$novedadData['titulo']);
$template->set("description", $novedadData['description']);
$template->set("keywords", $novedadData['keywords']);
$template->set("favicon", LOGO);
$template->themeInit();
$fecha = explode("-",$novedadData['fecha']);
$funciones = new Clases\PublicFunction();
?>
<div class="container cuerpo">
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"> 
				<div class="widget2">
					<div class="widget_title">
						<h3><?php echo $novedadData['titulo'] ?></h3>
					</div>
					<div class="clearfix"></div>
				</div>	
				<img class="imgNovedad" src="<?php echo URL .'/' . $imagenData['ruta'] ?>"/>
				<hr/>
				<p class="lineHeight"><?php echo  ($novedadData['desarrollo']); ?></p>				
				<p><i class="fa fa-calendar"></i> <b> </b> <?php echo $fecha[2]."/".$fecha[1]."/".$fecha[0] ?></p>				
			</div>
	<div class="col-md-3 mt-5">
		<?php $template->themeSide(); ?>
	</div>
</div>
<?php
$template->themeEnd();
?>