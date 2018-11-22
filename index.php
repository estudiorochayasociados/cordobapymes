<?php

use Clases\Banner;
require_once "Config/Autoload.php";

Config\Autoload::runSitio();

$template = new Clases\TemplateSite();
$imagen = new Clases\Imagenes();
$vistas = new Clases\Novedades();
$funciones = new Clases\PublicFunction();
$banners = new Clases\Banner();
$categorias = new Clases\Categorias();

$template->set("title", "Cordoba Pymes | Empresa");
$template->set("description", "Todas las novedades sobre las Pymes en Córdoba, novedades generales, sobre política, regionales, sociales y económicas acerca de las Pymes de nuestra provincia.");
$template->set("keywords", "Novedades en Córdobapymes,Pymes de Córdoba");
$template->set("imagen", LOGO);
$template->themeInit();
?>
<div class="container cuerpo">
		<div class="col-md-9">
			<div class="row">
				<div id="myCarousel3" class="carousel slide slidePrincipal" data-ride="carousel">
					<div class="carousel-inner" role="listbox">   
					   <?php
							$novedadesCar = $vistas->list('', '',"4",'');
							foreach ($novedadesCar as $novC) {
								$imagen->set("codigo", $novC['cod']);
								$imgC = $imagen->view();
								$pos = array_search($novC, $novedadesCar);
						?>
						   <div  class="item <?php if ($pos == 0) {
							echo "active";
							} ?> " style="background:url('<?php echo URL ?>/<?php echo $imgC['ruta'] ?>') no-repeat center center;" >
						   <a href="<?php echo URL . '/novedad/' . $funciones->normalizar_link($novC['titulo']) . "/" . $novC['id'] ?> "> <div class="carousel-caption"><?php echo $novC['titulo'] ?></div>    </a>      
						 </div> 

						<?php
				}
				?>                 	 
					</div>
						<a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev" style="padding-top: 20%">
						<span class="fa fa-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next" style="padding-top: 20%">
						<span class="fa fa-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<div class="widget2">
				<div class="widget_title">
						<h3>Últimas novedades</h3>
					</div>
				</div>					
				<div class="widget2 flex-wrap">
						<?php
						$novedades = $vistas->list('', '', '9','');
						foreach ($novedades as $nov) {
						$imagen->set("codigo", $nov['cod']);
						$img = $imagen->view();
						$fecha = explode("-", $nov['fecha']);
						?>						
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 notas">
								<div class="novedades">
								<a href="<?php echo URL . '/novedad/' . $funciones->normalizar_link($nov['titulo']) . "/" . $nov['id'] ?> ">
									<div class="imgNotasFront" style="background:url(<?php echo URL.'/'. $img['ruta']; ?>)center/cover"></div>
									</a>
									<div class="clearfix"></div>
								<a href="<?php echo URL . '/novedad/' . $funciones->normalizar_link($nov['titulo']) . "/" . $nov['id'] ?> ">
								<h4 class="colorPrimario"><b><?php echo $nov['titulo'] ?></b></h4>
								</a>
								<p><?php echo substr(strip_tags($nov["desarrollo"]), 0, 80) ?>[...]</p>
								</div>
							</div>
						<?php
						}/*<span class="f-10"><i class="fa fa-calendar"></i> <?php echo $fecha[2] . "/" . $fecha[1] . "/" . $fecha[0] ?></span>*/
					?>					
					</div>
			</div>			
		</div>
	<div class="col-md-3 mt-5 ">
		<?php $template->themeSide(); ?>
	</div>
</div>
<?php
$template->themeEnd();
?>