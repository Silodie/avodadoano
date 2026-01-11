<?php
@session_cache_expire();
@session_abort();
@session_destroy();
@session_start();
include('lib/funciones.php');

$scriptsArray = ['assets/js/engadirInputs.js'];
    $idioma= ['Galego','Castellano'];
    $enlaceIdioma = ['confirmación.php','confirmación_cast.php'];
    $enlaceNav = ['index.php','ubicación.php','info.php','confirmación.php'];
    $nav = ['¡Benvidos!','Ubicación','Información','Confirmar','Galería'];
    printHeader("Confirmación" ,$idioma ,  $enlaceIdioma,$enlaceNav,$nav);

?>
        <!--                                                        CONTENIDO                                                              -->
        <div class="row main">
            <div class="col-12 container-fluid">      
                <div class="row frameStyle">
                    <div class="col-12 asistir-main">
                        <iframe class='asistir-main-form' src="https://docs.google.com/forms/d/e/1FAIpQLSe342YUffSN-RYR9gX6N8BE1Wfyn5KgtUWerB35w8d88dU8HQ/viewform?embedded=true">Cargando…</iframe>
                    </div>            
                </div>
            </div>
        </div>
<?php
    printFooterPS();
    printScripts();
    printCloseHtml();
?>