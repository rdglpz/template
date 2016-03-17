<?

include("mainStructure.php");

$id= 10;
$nombre = "Juan";

$db="1";
$rutaLogo= "Logo_color_umsnh.jpg";
$nombreSistema =  "Sistema Institucional de Notificaciones";
$nombreInstitucion  = "Universidad Michoacana de San Nicolás de Hidalgo";

$opcionPrincipal[0]="Recibidos";
$opcionPrincipal[1]="Enviados";
$opcionPrincipal[2]="Borradores";
$opcionPrincipal[3]="Redactar";

$urlDestino[0]="index.php";
$urlDestino[1]="index.php";
$urlDestino[2]="index.php";
$urlDestino[3]="index.php";

$mainStructure = new recibidosStructure($rutaLogo, $nombreSistema, $nombreInstitucion, $id, $db);
$mainStructure->inicializarMenus($opcionPrincipal,$urlDestino);
$mainStructure->setImgLogoSize(70);
//$mainStructure->printVariables();
$mainStructure->pestanas(1);
//$mainStructure->mainHTMLPage();
$mainStructure -> printHTML(1);





?>
