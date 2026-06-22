<?php
@session_cache_expire();
@session_abort();
@session_destroy();
@session_start();
include('lib/funciones.php');
    $idioma= ['Galego','Castellano'];
    $enlaceIdioma = ['info.php','info_cast.php'];
    $enlaceNav = ['index.php','ubicación.php','info.php','confirmación.php'];
    $nav = ['¡Benvidos!','Ubicación','Información','Confirmar','Galería'];
    printHeader("Información" ,$idioma , $enlaceIdioma,$enlaceNav,$nav);
?>
        <!--                                                        CONTENIDO                                                              -->
                <div class="row info-main">
                    <div class='row info-main'>
                        <p class='info-main-textdes-data'>Prevoda</p>
                        <p class="info-main-textdes">Ven celebrar a previa con nós. Esperámoste ás <b>19.00</b> en <b>Casa das Crechas</b></p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1892.3358228785946!2d-8.546105304592052!3d42.88112274539944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2efe44155034e3%3A0x8b6d558c8e491445!2sCasa%20das%20Crechas!5e1!3m2!1ses!2ses!4v1782151898088!5m2!1ses!2ses" 
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="row info-main">
                        <p class='info-main-textdes-data'>Aloxamentos</p>
                        <div class='col-11 info-main-list'>
                            <span class='info-main-list-listhead'><a class='info-main-hlink' target='_blank' href='https://www.carrishoteles.com/es/hotel-carris-casa-de-la-troya/'>Hotel Carrís Casa de la Troya</a></span><br>
                            <span class='info-main-list-listbody'><a class='info-main-list-listbody' target='_blank' href='https://www.google.com/maps/place/Hotel+Carr%C3%ADs+Casa+de+la+Troya/@42.8812769,-8.546049,1229m/data=!3m2!1e3!4b1!4m9!3m8!1s0xd2efe446a1a748f:0xe67f6d28b2b91642!5m2!4m1!1i2!8m2!3d42.881273!4d-8.5434741!16s%2Fg%2F1tmg7v5k?entry=ttu&g_ep=EgoyMDI2MDEwNy4wIKXMDSoKLDEwMDc5MjA2OUgBUAM%3D' targe='_blank'>Rúa de Acivechería, 14</a></span><br>
                            <span class='info-main-list-listbody'>981555879</span><br>
                            <span class='info-main-list-listbody'>20% dto sobre tarifa.</span><br>
                            <span class='info-main-list-listbody'>Teléfono. Indicar voda de Silvia e Pablo.</span><br>
                            <span class='info-main-list-listbody'>Teñen poucas habitacións dispoñíbeis.</span><br><br>
                        </div>
                        <div class='col-11 info-main-list'>
                            <span class='info-main-list-listhead'><a class='info-main-hlink'  target='_blank' href='https://www.rosarosae.es/'>Hotel Rosa Rosae</a></span><br>
                            <span class='info-main-list-listbody'><a class='info-main-list-listbody' target='_blank' href='https://www.google.com/maps/place/Rosa+Rosae+(Santiago+de+Compostela)/@42.872552,-8.5491085,615m/data=!3m1!1e3!4m10!3m9!1s0xd2efe3f1d787c8d:0x5c095486ec39eb5e!5m3!1s2026-01-12!4m1!1i2!8m2!3d42.8725481!4d-8.5465336!16s%2Fg%2F1tg6rdk0?entry=ttu&g_ep=EgoyMDI2MDEwNy4wIKXMDSoASAFQAw%3D%3D' targe='_blank'>Rúa da Rosa, 7</a></span><br>
                            <span class='info-main-list-listbody'>981528300</span><br>
                            <span class='info-main-list-listbody'>info@rosarosae.es</span><br>
                            <span class='info-main-list-listbody'>Individual: 80€/noite. Doble: 120€/noite. Sen almorzo</span><br>
                            <span class='info-main-list-listbody'>Individual: 90€/noite. Doble: 140€/noite. Con almorzo</span><br>
                            <span class='info-main-list-listbody'>Teléfono/Email. Indicar voda de Silvia e Pablo.</span><br><br>
                        </div>
                    </div>
                    <div class='row info-main'>
                        <span class="info-main-textdes">Debido á alta ocupación para as datas, aconsellámosvos valorar tamén a opción de airbnb e, para os que xa tedes claro que vides, facede a reserva o antes posible.</span>
                        <span class="info-main-textdes">Para os que vides en avión, o autobús <b>6A</b> sae do aeroporto cada media hora (prezo aprox. 1€) con paradas no centro da cidade na Praza de Galicia e estación de tren.</span><br><br>
                        <span class="info-main-textdes"><b>Estamos á vosa disposición para o que precisedes.</b></span><br><br>
                    </div>
                </div>
<?php
    printFooter();
    printScripts();
    printCloseHtml();
?>