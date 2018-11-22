<?php
require_once "Config/Autoload.php";

Config\Autoload::runSitio();

$template = new Clases\TemplateSite();
$categoria = new Clases\Categorias();
$novedad = new Clases\Novedades();
$funciones = new Clases\PublicFunction();
$imagen = new Clases\Imagenes();

$id = isset($_GET["id"]) ? $_GET["id"] : '';
$pagina = isset($_GET["pagina"]) ? $_GET["pagina"] : '0'; 
$categoria->set("titulo", $id);
$categoriaData = $categoria->view();
$filtroNotas = array("categoria = '" . $categoriaData["cod"] . "'");
$novedadList = $novedad->list($filtroNotas, "", (9*$pagina) .','. 9, 9);
$novedadPaginador = $novedad->paginador($filtroNotas,9);

$template->set("title", "Cordoba Pymes | Novedades de ".ucfirst($categoriaData['titulo']));
$template->set("description", "Novedades ".ucfirst($categoriaData['titulo'])." sobre Pymes");
$template->set("keywords", "Novedades ".ucfirst($categoriaData['titulo']));
$template->set("favicon", LOGO);
$template->themeInit();
?>

<div class="container cuerpo mt-5">
	<div class="container">
		<div class="widget2">
			<div class="widget_title">
				<h3><?php echo ucfirst($categoriaData['titulo']); ?></h3>
			</div>
		</div>
	</div>

	<div class="container mt-10">
	<?php
	foreach ($novedadList as $nov) {
		$imagen->set("codigo", $nov['cod']);
		$img = $imagen->view();
		$fecha = explode("-", $nov['fecha']);
		?>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 notas">
			<div class="novedades">
			<a href="<?php echo URL . '/novedad/' . $funciones->normalizar_link($nov['titulo']) . "/" . $nov['id'] ?> ">
				<div class="imgNotasFront" style="background:url(<?php echo URL . '/' . $img['ruta']; ?>)center/cover"></div>
				<div class="clearfix"></div>
				<h4 class="colorPrimario"><b><?php echo $nov['titulo'] ?></b></h4>
			</a>
			<p><?php echo substr(strip_tags($nov["desarrollo"]), 0, 100) ?>[...]</p>
			<span class="f-10"><i class="fa fa-calendar"></i> <?php echo $fecha[2] . "/" . $fecha[1] . "/" . $fecha[0] ?></span>
			</div>
		</div>
		<?php
		}
	?>
	</div>	
	
<div class="clearfix"></div>
<div class="text-center">
  <ul class="pagination "> 
	<?php
	if($novedadPaginador != 1 && $novedadPaginador != 0) { 
		$links = '';
		$links .= "<li><a href='".URL."/novedades/".strtolower($funciones->normalizar_link($categoriaData["titulo"]))."/1'>1</a></li>";
		$i = max(2, $pagina - 5);
		
        if ($i > 2){
			$links .= "<li><a href='#'>...</a></li>";
		}
        for (;$i < min($pagina + 6, $novedadPaginador); $i++) {
            $links .= "<li><a href='".URL."/novedades/".strtolower($funciones->normalizar_link($categoriaData["titulo"]))."/".$i."'>".$i."</a></li>";
        }
        if ($i != $novedadPaginador){
            $links .= "<li><a href='#'>...</a></li>";
			$links .= "<li><a href='".URL."/novedades/".strtolower($funciones->normalizar_link($categoriaData["titulo"]))."/".$novedadPaginador."'>".$novedadPaginador."</a></li>";
		}	
		echo $links;
	}
	?>	
  </ul>
</div>
</div>
<?php
$template->themeEnd();
?>