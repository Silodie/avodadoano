<?php
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Expires: 0");
@session_cache_expire();
@session_abort();
@session_destroy();
@session_start();
include('lib/funciones.php');

    $idioma= ['Galego','Castellano'];
    $enlaceIdioma = ['ubicación.php','ubicación_cast.php'];
    $enlaceNav = ['index.php','ubicación.php','info.php','confirmación.php'];
    $nav = ['¡Benvidos!','Ubicación','Información','Confirmar','Galería'];
    printHeader("Ubicación" ,$idioma , $enlaceIdioma,$enlaceNav,$nav);
?>
        <!--                                                        CONTENIDO                                                              -->
                <div class="row ubic-main">  
                    <div class="row lug-main">
                        <p class='lug-main-textdes-data'>Pazo do Faramello</p>
                        <div class="col-11 lug-main-textdes">                            
                            <span>É un lugar único na Galiza. Nado como Real Fábrica de Papel no século XVIII, hoxe convertido en xoia barroca. Os seus xardíns franceses, a capela histórica e o rumor do río Tinto crean unha atmósfera máxica</span><br>
                            <span> Aquí, respírase historia. Dende a Traslación Xacboea ate a presenza de reis e escritores. Cada recuncho agocha poesía, natureza e memoria viva.</span><br>
                            <span>É un espazo que emociona, que atrapa, que convida a celebrar momentos inesquecíbeis. Sen dúbida, un escenario perfecto para darlle vida a un día tan especial.</span>
                        </div>
                        <div class="col-11">                            
                            <a class='lug-main-image' href='https://www.google.com/maps/place/Xard%C3%ADn+do+Recordo/@42.8101836,-8.629299,573m/data=!3m1!1e3!4m14!1m7!3m6!1s0xd2f031dbfc5f8f3:0x43e1d99e806107bd!2sPazo+do+Faramello!8m2!3d42.811042!4d-8.6287261!16s%2Fg%2F11bzs3yz7d!3m5!1s0xd2f02e297e6ba27:0x154e00799d4b44eb!8m2!3d42.8108498!4d-8.6275228!16s%2Fg%2F11g6mrvz2t?entry=ttu&g_ep=EgoyMDI2MDEwNi4wIKXMDSoASAFQAw%3D%3D' target='_blank'><img class="lug-main-img" src="assets/img/Acuarelas/pazo_ac.png" alt="Pzo_FaramAc"></a>
                        </div>
                        <div>
                             <span class="lug-main-textdes"><b>Pazo do Faramello, 15980 O Faramello, A Coruña.</b> </span><br> 
                             <span class="lug-main-textdes">Aparcadoiro: Xardín do Recordo</span><br>
                        </div>
                    </div>
                    <div class="row lug-main ">
                         <div class="col-11">
                        <br><br>
                            <span class='lug-main-textdes-data'>Autobuses</span><br>
                            <span class="lug-main-textdes">Saídas e chegadas á Rúa da Rosa. <b>Horarios todavía por confirmar</b></span><br>
                            <iframe  class='lug-main-frame-link' 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d669.1313051316504!2d-8.547237630394125!3d42.872863081046084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2efe3f1b68ea61%3A0x8c7ea1c11775199a!2sR.%20da%20Rosa%2C%2010%2C%2015701%20Santiago%20de%20Compostela%2C%20A%20Coru%C3%B1a!5e1!3m2!1ses!2ses!4v1767561072787!5m2!1ses!2ses" 
                            width="450" height="450" style="border:0;" allow="allowfullscreen" loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div><br>
                    </div>
                </div>

<?php
    printFooter();
    printScripts();
    printCloseHtml();
?>