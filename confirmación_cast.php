<?php
@session_cache_expire();
@session_abort();
@session_destroy();
@session_start();
include('lib/funciones.php');

$scriptsArray = ['assets/js/engadirInputs.js'];
    $idioma= ['Castellano','Galego'];
    $enlaceIdioma = ['confirmación_cast.php','confirmación.php'];
    $enlaceNav = ['index_cast.php','ubicación_cast.php','info_cast.php','confirmación_cast.php'];
    $nav = ['¡Bienvenidos!','Ubicación','Información','Confirmar','Galería'];
    printHeader("Confirmación" ,$idioma ,  $enlaceIdioma,$enlaceNav,$nav);

?>
        <!--                                                        CONTENIDO                                                              -->
        <div class="row main">
            <div class="col-12 container-fluid">      
                <div class="row frameStyle">
                    <div class="col-12 asistir-main">
                        <iframe class='asistir-main-form' src="https://docs.google.com/forms/d/e/1FAIpQLSfw3GS9gcrkPDHyOf14MeArb1OdcuycZIU117NW5SY2xJo6Yg/viewform?embedded=true">Cargando…</iframe>
                    </div>            
                </div>
            </div>
        </div>
<?php
    printFooterPS();
    printScripts();
    printCloseHtml();
?>