<?php
$banners = new Clases\Banner();
$categorias = new Clases\Categorias();
$imagen = new Clases\Imagenes();
//Banner Pie------------------
$categorias->set("titulo","Pie");
$categoriaPie = $categorias->view();
$banners->set("categoria",$categoriaPie['cod']);
$banDataPie = $banners->listForCategory();
//---------------------------------
?>
<?php
if (count($banDataPie)!='') {
?>
<div class="container">
	<div class="mt-10 mb-5">
		<div class="widget">
			<?php 
			$banRandPie = $banDataPie[array_rand($banDataPie)];
			$imagen->set("codigo",$banRandPie['cod']);
			$imgRandPie = $imagen->view();
			$banners->set("id",$banRandPie['id']);
			$value=$banRandPie['vistas']+1;
			$banners->set("vistas",$value);
			$banners->increaseViews();
			 ?>
		<a target="_blank" href="<?php echo $banRandPie['link'] ?>" class="mt-20"><img width="100%" src="<?php echo URL . '/' . $imgRandPie['ruta'] ?>" alt="<?php echo $banRandPie['nombre'] ?>" title="<?php echo $banRandPie['nombre'] ?>"></a>     
		</div>
	</div>
</div>
<?php
}
?>
<div class="clearfix"><br /></div> 
<footer style="background:#111;">
	<div class="container">
		<a href="http://www.estudiorochayasoc.com" target="_blank" ><img src="http://estudiorochayasoc.com/images/logo-blanco.png" width="110" style="padding:5px 0px" /></a>
		<span class="align-right" style="color:#f1f1f1;float:right;padding:5px 0px">03564-426508 / info@cordobapymes.com.ar</span>
	</div>
</footer>
<?php
if(isset($_POST["btnSuscripto"])) {
	$emailSuscripto = isset($_POST["suscripto"]) ? $_POST["suscripto"] : '';
	$dataSuscripto = Suscripto_TraerPorId($emailSuscripto);
	if($dataSuscripto[0] == '' && $emailSuscripto != '') {
		if (filter_var($emailSuscripto, FILTER_VALIDATE_EMAIL)) {
			$idConn = Conectarse();
			$sql = "INSERT INTO `suscriptobase`(`EmailSuscriptos`, `FechaSuscriptos`)VALUES ('$emailSuscripto', NOW())";
			$resultado = mysql_query($sql, $idConn);
			?><script>alert("¡Excelente! Tu correo ya está suscripto.")</script><?php 
		}
	} else {
		?><script>alert("Lo sentimos, ese correo ya está suscripto.")</script><?php 
	}
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php echo URL."/" ?>assets/js/bootstrap.min.js"></script> 

<script language="javascript">
	jQuery(document).ready(function(){
		$(".dropdown").hover(
			function() { $('.dropdown-menu', this).stop().fadeIn("fast");
		},
		function() { $('.dropdown-menu', this).stop().fadeOut("fast");
	});
	});
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=175360699291374";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
</script>