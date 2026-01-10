<?php
@session_start();
include('lib/funciones.php');

$scriptsArray = ['assets/js/engadirInputs.js'];


    printHeader("¿Ves?");
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