<?php
$imagen = new Clases\Imagenes();
$vistas = new Clases\Novedades();
$funciones = new Clases\PublicFunction();
$banners = new Clases\Banner();
$categorias = new Clases\Categorias();
//Banners Side
$categorias->set("titulo","Side");
$categoriaSide = $categorias->view();
$banners->set("categoria",$categoriaSide['cod']);
$banDataSide = $banners->listForCategory();
//
?>
<div class="widget">
			<h1 class="f-18">SEGUINOS EN LAS REDES</h1>
			<div class="widget_title"></div>
			<div class="fb-page mb-20" data-href="https://www.facebook.com/cordobapymes/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cordobapymes/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cordobapymes/">Córdoba Pymes</a></blockquote></div>			
            </div>
    <?php
    if (count($banDataSide)!='') {
    ?>
		<div class="widget">
			<?php
			$banRand = $banDataSide[array_rand($banDataSide)];
			$imagen->set("codigo",$banRand['cod']);
			$imgRand = $imagen->view();
			$banners->set("id",$banRand['id']);
			$value=$banRand['vistas']+1;
			$banners->set("vistas",$value);
			$banners->increaseViews();
			 ?>
		<a target="_blank" href="<?php echo $banRand['link'] ?>" class="mt-20"><img width="100%" src="<?php echo URL . '/' . $imgRand['ruta'] ?>" alt="<?php echo $banRand['nombre'] ?>" title="<?php echo $banRand['nombre'] ?>"></a>     
        </div>
        <?php
        }
    ?>
		<div class="widget">			
			<h2 class="f-18">ÚLTIMAS NOVEDADES</h2>
			<div class="widget_title"></div>
				<?php
					$novedadesSide = $vistas->list('', '', "10",'');
					foreach ($novedadesSide as $novSide) {
					$imagen->set("codigo", $novSide['cod']);
					$imgSide = $imagen->view();
					$fechaSide = explode("-", $novSide['fecha']);
				?>
					<div class="clearfix"></div>
					<div class="boxInfo mt-5">
						<div class="novedadesSide mt-10" style="background:url(<?php echo URL . '/'.$imgSide['ruta']; ?>)center/cover;">      
					</div>
					<a class="colorPrimario" href="<?php echo URL . '/novedad/' . $funciones->normalizar_link($novSide['titulo']) . '/' . $novSide['id'] ;?> ">
					<?php echo substr($novSide["titulo"], 0, 60); ?>...
					</a>
					<br>					
					<span class="text-right"><i class="fa fa-calendar"></i> <?php echo $fechaSide[2] . '/'. $fechaSide[1] . '/' . $fechaSide[0] ?></span>
					</div>				
				<?php
		}
		?>
		</div>
		<br>
        <?php 
            if (count($banDataSide)!='') {
                if (($key = array_search($banRand, $banDataSide)) !== false) {
                    unset($banDataSide[$key]);
                }
                if (count($banDataSide)!='') {
                    $banRand2 = $banDataSide[array_rand($banDataSide)];
                    $imagen->set("codigo",$banRand2['cod']);
                    $imgRand2 = $imagen->view();
                    $banners->set("id",$banRand2['id']);
                    $value2=$banRand2['vistas']+1;
                    $banners->set("vistas",$value2);
                    $banners->increaseViews();  
                ?>
                <a target="_blank" href="<?php echo $banRand2['link'] ?>" class="mt-20"><img width="100%" src="<?php echo URL . '/' . $imgRand2['ruta'] ?>" alt="<?php echo $banRand2['nombre'] ?>" title="<?php echo $banRand2['nombre'] ?>"></a>              
                <?php 
                }
                ?>
                <?php   
            }
			?>
		</div>
		