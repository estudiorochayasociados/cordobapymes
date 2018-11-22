<?php
require_once "Config/Autoload.php";
Config\Autoload::runSitio();
$template = new Clases\TemplateSite();
$template->set("title", "Cordoba Pymes | Redes Sociales");
$template->set("description", "Toda las novedades de las Pymes en las redes sociales para que estés al tanto de las novedades mas recientes.");
$template->set("keywords", "Redes Sociales");
$template->set("favicon", "url"); 
$template->themeInit();
?>
<!-- Place <div> tag where you want the feed to appear -->
<div id="curator-feed"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>
<!-- The Javascript can be moved to the end of the html page before the </body> tag -->
<script type="text/javascript">
/* curator-feed */
(function(){
var i, e, d = document, s = "script";i = d.createElement("script");i.async = 1;
i.src = "https://cdn.curator.io/published/b7e19e9b-12e2-4972-a8d9-4d1af6046c94.js";
e = d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
})();
</script>
<?php
$template->themeEnd();
?>
