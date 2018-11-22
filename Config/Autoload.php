<?php
namespace config;

class autoload
{
    public static function runSitio()
    {
        session_start();
        define('URL', "http://".$_SERVER['HTTP_HOST']."/CordobaPymes");
        define('CANONICAL', "http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]);
        define('TITULO', "Cordoba Pymes");
        define('TELEFONO', "5555555");
        define('CIUDAD', "San Francisco");
        define('PROVINCIA', "Cordoba");
        define('EMAIL', "web@estudiorochayasoc.com.ar");
        define('PASS_EMAIL', "weAr2010");
        define('SMTP_EMAIL', "mail.estudiorochayasoc.com.ar");
        define('DIRECCION', "direccion");
        define('LOGO', URL . "/assets/img/logo.png");
        define('APP_ID_FB', "180729959302622");
        spl_autoload_register(
            function($clase)
            {
                $ruta = str_replace("\\", "/", $clase) . ".php";
                include_once $ruta;
            }
        );
    }

    public static function runAdmin()
    {
        session_start();
        define('URLSITE',"http://192.168.0.8/CordobaPymes");
        define('URL', "http://192.168.0.8/CordobaPymes/admin");
        require_once "../Clases/Zebra_Image.php";
        spl_autoload_register(
            function ($clase)
            {
                $ruta = str_replace("\\", "/", $clase) . ".php";
                include_once "../" . $ruta;
            }
        );
    }
}
