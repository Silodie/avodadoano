<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Expires: 0");
@session_cache_expire();
@session_abort();
@session_destroy();
@session_start();
    include("lib/funciones.php");

    $idioma= ['Castellano','Galego'];
    $enlaceIdioma = ['index_cast.php','index.php',];
    $enlaceNav = ['index_cast.php','ubicación_cast.php','info_cast.php','confirmación_cast.php'];
    $nav = ['¡Bienvenidos!','Ubicación','Información','Confirmar','Galería'];
    printHeader("¡Bienvenidos!" ,$idioma , $enlaceIdioma,$enlaceNav,$nav);
?>
        <!--                                                        CONTENIDO                                                              -->
                <div class="row index-main">  
                    <div class="row ind-main">
                        <div class="col-12 col-lg-6 ">
                                <img class="ind-main-img" src="assets/img/Fotos/index_Coimbra.jpg" alt="Nós">
                        </div>
                        <div class="col-12 col-lg-6 ind-main-text">
                            <span>Después de tantas aventuras juntos, risas, viajes y momentos compartidos, decidimos dar el siguiente paso 
                                y festejar nuestro amor con las personas más importantes para nosotros.</span><br>
                            <span>Marca este día en tu calendario: el <b>10</b> de <b>octubre</b> de <b>2026</b>  a las <b>13.30h</b> nos diremos ¡<a class='ind-main-hlink' href="confirmación.php">sí, quiero</a>!</span><br>
                            <span>Queremos que sea una fiesta llena de alegría, buena música, sonrisas y, sobre todo,mucho cariño.</span><br>
                            <span><a class='ind-main-hlink' href="ubicación.php">Aquí</a> encontrarás toda la información de nuestra voda: horarios, cómo llegar, recomendaciones de alojamiento y alguna sorpresa más.</span><br>
                            <span>Prepárate para un día mágico que quedará en nuestra memoria para siempre.</span>
                        </div>
                    </div>
                </div>

<?php
    printFooter();
    printScripts();
    printCloseHtml();
?>