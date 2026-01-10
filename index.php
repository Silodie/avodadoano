<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Expires: 0");
@session_cache_expire();
@session_abort();
@session_destroy();
@session_start();
    include("lib/funciones.php");

    printHeader("¡Benvidos!");

?>
        <!--                                                        CONTENIDO                                                              -->
                <div class="row index-main">  
                    <div class="row ind-main ">
                        <div class="col-12- col-lg-6 ">
                                <img class="ind-main-img" src="assets/img/Fotos/index_Coimbra.jpg" alt="Nós">
                        </div>
                        <div class="col-12 col-lg-6 ind-main-text">
                            <span>Despois de tantas aventuras xuntos, risas, viaxes e momentos compartidos, decidimos dar o seguinte paso e 
                                festexar o noso amor coas persoas máis importantes para nós.</span><br>
                            <span>Marca este día no teu almanaque: O <b>10</b> de <b>outubro</b> do <b>2026</b> dirémonos ¡<a class='ind-main-hlink' href="gsheetAsistir.php">si, quero</a>!</span><br>
                            <span>Queremos que sexa unha festa chea de ledicia, boa música, sorrisos e, sobre todo, moito agarimo.</span><br>
                            <span><a class='ind-main-hlink' href="lugar.php">Aquí</a> atoparás toda a información da nosa voda: horarios, cómo chegar, recomendacións de aloxamento e algunha sorpresa máis.</span><br>
                            <span>Prepárate para un día máxico que quedará na nosa memoria para sempre.</span>
                        </div>
                    </div>
                </div>

<?php
    printFooter();
    printScripts();
    printCloseHtml();
?>