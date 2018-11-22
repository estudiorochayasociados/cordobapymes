<?php require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$funciones= new Clases\PublicFunction();
$email= new Clases\Email();
$template->set("title", "Cordoba Pymes | Contacto");
$template->set("description", "Formulario de contacto de nuestra pagina, para poder recibir información sobre las Pymes de Córdoba. Ademas de nuestra ubicación para poder consultarnos personalmente.");
$template->set("keywords", "Contacto");
$template->set("imagen", LOGO);
$template->themeInit();
?>
	<div class="container cuerpo">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="widget2">
					<div class="widget_title">
						<h3>Contacto</h3>
					</div>
				</div>	
				<br />
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><br/>
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d851.1340570375596!2d-62.082223498182294!3d-31.42690145230698!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x325aecfa5720e84d!2sEstudio+Rocha+y+Asociados!5e0!3m2!1ses!2sar!4v1475499470382" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
						<br/><br/>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<?php
							if (isset($_POST["enviar"])) {
								$email = $_POST["email"];
								$emisor = "info@cordobapymes.com.ar";
								$NombreEmisor = "Córdoba Pymes";
								$nombre = $_POST["nombre"];
								$asunto = "¡" . ucwords($nombre) . ", gracias por enviarnos tu mensaje!";
								$asunto2 = "¡" . ucwords($nombre) . ", nos envió un nuevo mensaje!";
								$comentario = $_POST["mensaje"];

								$pie = "<br/><br/><b><span style='font-size:13px;text-align:right'>Atte. Córdoba Pymes</b><br/>
								<b>E-mail:</b> info@cordobapymes.com.ar<br/> 								</span>";

								$mensaje = "<body style='background:#2C3E50'><div style='width:700px;margin:auto;background:#fff;padding:20px;border:1px solid #e1e1e1;font-size:14px'><img src='img/logo.png' width='350' /><br/><hr/><br/>Muchas gracias " . ucwords($nombre) . " por habernos enviado un mensaje.<br/><br/>En las próximas horas te estaremos respondiendo tus consultas.<br/>$pie</b></div></body>";
								$mensaje2 = "<body style='background:#2C3E50'><div style='width:700px;margin:auto;background:#fff;padding:20px;border:1px solid #e1e1e1;font-size:14px'><img src='img/logo.png' width='350' /><br/><hr/><br/>Recibimos un nuevo mensaje<br/><br/>Nombre: ". ucwords($nombre) . "<br/>Email: ".strtolower($email)."<br/>Comentario: $comentario<br/><br/>$pie</div></body>";
								Enviar_Sin_Spam($email, $emisor, $NombreEmisor, $asunto, $mensaje);
								Enviar_Sin_Spam_Admin($emisor, $email, $nombre, $asunto2, $mensaje2);	
							}
							?>
							<form method="post" class="contacto">
								<label class="label">
									Nombre y Apellido<br/>
									<input type="text" name="nombre" placeholder="Nombre y Apellido" class="form-control"  value="<?php echo (isset($_POST["nombre"]) ? $_POST["nombre"] : ''); ?>"/>
								</label>
								<label class="label">
									Correo electrónico<br/>
									<input type="email" name="email" placeholder="Correo electrónico" class="form-control" value="<?php echo (isset($_POST["email"]) ? $_POST["email"] : ''); ?>" />
								</label>
								<label class="label">
									Mensaje<br/>
<textarea name="mensaje" class="form-control" placeholder="Escriba su mensaje" style="height:200px"></textarea>
								</label>
                                <i>* Al enviar el formulario acepto enviar mis datos para recibir newsletter de Córdoba Pymes</i>
                                <label class="label" style="padding:0;margin:0">
									<input type="submit" name="enviar" class="form-control btn btn-info secundario borderNone"  value="ENVIAR" />
								</label>


								<p class="colorSecundario">
									<br/>
									<b>E-mail:</b> info@cordobapymes.com.ar<br/> 								
								</b>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php
$template->themeEnd();
?> 
