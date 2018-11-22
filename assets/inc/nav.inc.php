<?php
$novNav = new Clases\Novedades();
$img = new Clases\Imagenes();
$funcion = new Clases\PublicFunction();
$funciones = new Clases\PublicFunction();
$bannersNav = new Clases\Banner();
$categoriasNav = new Clases\Categorias();
//Banner Botonera------------------
$categoriasNav->set("titulo","Botonera");
$categoriaBotonera = $categoriasNav->view();
$bannersNav->set("categoria",$categoriaBotonera['cod']);
$banDataBotonera = $bannersNav->listForCategory();
//---------------------------------
?>
<!--Encabezado-->
<div class="hidden-sm hidden-xs" style="background: #444">
    <div class="container">
        <div class="row">       
            <div class="col-md-12" style="color:#fff">
                <span class="novLast">
                    <i style="vertical-align:center" class="fa fa-clock-o">
                    </i> últimas novedades:
                </span>
                <div class="news">
                    <ul>
                    
                        <?php
                        $novedadesLast = $novNav->list('','','4','');
                        foreach ($novedadesLast as $novLast) {                           
                        $fechaLast = explode("-", $novLast['fecha']);
                        ?>
                            <li>
                                <a href="<?php echo URL . '/novedad/' . $funcion->normalizar_link($novLast['titulo']) . '/' . $novLast['id']?>"><?php echo $novLast['titulo'] . ' ' . $fechaLast[2].'/'.$fechaLast[1];?></a>
                            </li> 
                        <?php
                        }//Notas_Read_Titulo()                                                  
                        ?>                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row"  style="background:url('<?php echo URL ?>/assets/img/pattern.png') center center repeat;">
    <div  class="container">
        <div class="row" style="margin-top: 10px">
            <div class="col-md-4 col-xs-12 col-sm-12">
                <a href="<?php echo URL.'/index' ?>">
                    <img src="<?php echo URL .'/' ?>assets/img/logo.png"  style="width:100%;padding:10px;" />
                </a>
            </div>
            <div class="hidden-sm hidden-xs col-md-8 col-xs-12 col-sm-12">
            <div id="cont_e304353f4983d196046445443715c674" class="pull-right"><script type="text/javascript" async src="https://www.meteored.com.ar/wid_loader/e304353f4983d196046445443715c674"></script></div>
            </div>
        </div>
    </div>

</div>
<div class="clearfix">
</div>
<!--FinEncabezado-->
<!--Nav-->
<div class="navEncabezado">
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav" style="float:left">
                    <li>
                            <a class="" href="<?php echo URL.'/index' ?>">
                                <img class="blanco" src="<?php echo URL . '/assets/archivos/iconos_categorias/Index.png' ?>" width="20" /> Inicio
                            </a>
                        </li>
                    <?php                        
                        $novNavData = $novNav->listForNav("6");
                        foreach ($novNavData as $novArr) {
                            if ($novArr['count(categoria)']>1) {
                            $img->set("codigo",$novArr["cod"]);
                            $imagen = $img->view();                            
                    ?>
                        <li>
                            <a class="" href="<?php echo URL .'/novedades/' . $funcion->normalizar_link($novArr['titulo']) ;?>">
                                <img class="blanco" src="<?php echo URL .'/'.$imagen["ruta"] ?>" width="20"/> <?php echo $novArr['titulo']; ?>                            
                            </a>
                        </li>
                    <?php
                        }
                    }
                    ?> 
                        <li class="hidden-sm hidden-xs navIconosDerecha">
                            <!-- COMIENZO codigo contacto -->
    						<span class="mr-10" >
                            <a class="" href="<?php echo URL.'/redes-sociales' ?>">
                                <img class="blanco navIconosTamaño" src="<?php echo URL . '/assets/archivos/iconos_categorias/World.png'?>"/>
                            </a>
                            </span>
                            <span class="mr-10" >
               				<a class="" href="<?php echo URL.'/contacto' ?>">
                               <img class="blanco navIconosTamaño" src="<?php echo URL . '/assets/archivos/iconos_categorias/Letter.png'?>"/>
                            </a>
                            </span>
                            <!-- FIN codigo contacto -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<?php
    if (count($banDataBotonera)!='') {
    ?>
    <div class="container bannerLarge">
    	<div class="mt-5 mb-15">
    		<div class="widget">
    			<?php 
    			$banRandBotonera = $banDataBotonera[array_rand($banDataBotonera)];
    			$img->set("codigo",$banRandBotonera['cod']);
    			$imgRandBotonera = $img->view();
    			$bannersNav->set("id",$banRandBotonera['id']);
    			$value=$banRandBotonera['vistas']+1;
    			$bannersNav->set("vistas",$value);
    			$bannersNav->increaseViews();
    			 ?>
    		<a target="_blank" href="<?php echo $banRandBotonera['link'] ?>" class="mt-20"><img width="100%" src="<?php echo URL . '/' . $imgRandBotonera['ruta'] ?>" alt="<?php echo $banRandBotonera['nombre'] ?>" title="<?php echo $banRandBotonera['nombre'] ?>"></a>     
    		</div>
    	</div>
    </div>
  <?php
    }
?>
<!--FinNav-->