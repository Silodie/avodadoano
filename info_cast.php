<?php
@session_cache_expire();
@session_abort();
@session_destroy();
@session_start();
include('lib/funciones.php');
    $idioma= ['Castellano','Galego'];
    $enlaceIdioma = ['info_cast.php','info.php'];
    $enlaceNav = ['index_cast.php','ubicación_cast.php','info_cast.php','confirmación_cast.php'];
    $nav = ['¡Bienvenidos!','Ubicación','Información','Confirmar','Galería'];
    printHeader("Información" ,$idioma , $enlaceIdioma,$enlaceNav,$nav);

?>
        <!--                                                        CONTENIDO                                                              -->
                <div class="row info-main">
                    <div class="row info-main">
                        <p class='info-main-textdes-data'>Alojamientos</p>
                        <div class='col-11 info-main-list'>
                            <p class='info-main-list-listhead'><a class='info-main-hlink' target='_blank' href='https://www.carrishoteles.com/es/hotel-carris-casa-de-la-troya/'>Hotel Carrís Casa de la Troya</a></p>
                            <span class='info-main-list-listbody'><a href='https://www.google.com/maps/place/Hotel+Carr%C3%ADs+Casa+de+la+Troya/@42.8812769,-8.546049,1229m/data=!3m2!1e3!4b1!4m9!3m8!1s0xd2efe446a1a748f:0xe67f6d28b2b91642!5m2!4m1!1i2!8m2!3d42.881273!4d-8.5434741!16s%2Fg%2F1tmg7v5k?entry=ttu&g_ep=EgoyMDI2MDEwNy4wIKXMDSoKLDEwMDc5MjA2OUgBUAM%3D' targe='_blank'>Rúa de Acivechería 14</a></span><br>
                            <span class='info-main-list-listbody'>981555879</span><br>
                            <span class='info-main-list-listbody'>20% dto sobre tarifa</span><br>
                            <span class='info-main-list-listbody'>Teléfono. Indicar boda de Pablo y Silvia</span><br>
                            <span class='info-main-list-listbody'>Tienen pocas habitaciones disponibles</span><br>
                        </div>
                        <div class='col-11 info-main-list'>
                            <p class='info-main-list-listhead'><a class='info-main-hlink' target='_blank' href='https://hostalmexico.com/'>Hotel México</a></p>
                            <span class='info-main-list-listbody'><a href='https://www.google.com/maps/place/M%C3%A9xico+PR/@42.872253,-8.5526118,800m/data=!3m1!1e3!4m20!1m10!3m9!1s0xd2efe3e2b7c434f:0x225f8047074303db!2sM%C3%A9xico+PR!5m2!4m1!1i2!8m2!3d42.87215!4d-8.5498!16s%2Fg%2F1thsbn2w!3m8!1s0xd2efe3e2b7c434f:0x225f8047074303db!5m2!4m1!1i2!8m2!3d42.87215!4d-8.5498!16s%2Fg%2F1thsbn2w?entry=ttu&g_ep=EgoyMDI2MDEwNy4wIKXMDSoASAFQAw%3D%3D' targe='_blank'>Rúa República Arxentina, 33</a></span><br>
                            <span class='info-main-list-listbody'>981598000 / info@hostalmexico.com</span><br>
                            <span class='info-main-list-listbody'>Individual:40€/noche. Doble:75€/noche. Desayuno:+6.50€</span><br>
                            <span class='info-main-list-listbody'>Teléfono / Email. Indicar boda de Silvia y Pablo</span><br>
                            <span class='info-main-list-listbody'>Cancelación gratuíta hasta 24h antes</span><br>
                        </div>
                        <div class='col-11 info-main-list'>
                            <p class='info-main-list-listhead'><a class='info-main-hlink' target='_blank' href='https://www.costavella.com/'>Hotel Costa Vella</a></p>
                            <span class='info-main-list-listbody'><a href='https://www.google.com/maps/place/Hotel+Costa+Vella/@42.8831088,-8.5459406,615m/data=!3m2!1e3!4b1!4m10!3m9!1s0xd2efe44ecbb4e4b:0x8fd0eb6f3ad2099f!5m3!1s2026-01-12!4m1!1i2!8m2!3d42.8831049!4d-8.5433657!16s%2Fg%2F1tfcpmm4?entry=ttu&g_ep=EgoyMDI2MDEwNy4wIKXMDSoASAFQAw%3D%3D' targe='_blank'>Rúa Porta da Pena, 17</a></span><br>
                            <span class='info-main-list-listbody'>Doble: 135€/noche</span><br>
                            <span class='info-main-list-listbody'>Hablad con nosotros para gestionarlo</span><br>
                            <span class='info-main-list-listbody'>Tienen pocas habitaciones disponibles</span><br>
                        </div>
                        <div class='col-11 info-main-list'>
                            <p class='info-main-list-listhead'><a class='info-main-hlink'  target='_blank' href='https://www.rosarosae.es/'>Hotel Rosa Rosae</a></p>
                            <span class='info-main-list-listbody'><a class='info-main-list-listbody' href='https://www.google.com/maps/place/Rosa+Rosae+(Santiago+de+Compostela)/@42.872552,-8.5491085,615m/data=!3m1!1e3!4m10!3m9!1s0xd2efe3f1d787c8d:0x5c095486ec39eb5e!5m3!1s2026-01-12!4m1!1i2!8m2!3d42.8725481!4d-8.5465336!16s%2Fg%2F1tg6rdk0?entry=ttu&g_ep=EgoyMDI2MDEwNy4wIKXMDSoASAFQAw%3D%3D' targe='_blank'>Rúa da Rosa, 7</a></span><br>
                            <span class='info-main-list-listbody'>981528300</span><br>
                            <span class='info-main-list-listbody'>Individual:100€/noche. Doble:150€/noche. El desayuno está incluido en el precio</span><br>
                            <span class='info-main-list-listbody'>Teléfono. Indicar boda de Silvia y Pablo</span><br>
                        </div>
                    </div>
                    <div class='row info-main'>
                        <span class="info-main-textdes">Debido a la alta ocupación para las fechas, recomendamos valorar también la opción de airbnb. Para los que ya tenéis claro que venís, recomendamos hacer la reserva lo antes posible.</span><br>
                        <span class="info-main-textdes">Para los que venís en avión, el autobús <b>6A</b> sale cada media hora (precio aprox. 1€). Paradas en el centro: Praza de Galicia o estación de tren.</span><br><br>
                        <span class="info-main-textdes"><b>Estamos a vuestra disposición para lo que necesitéis</b></span>
                    </div>
                    <br>
                    <div class='row info-main'>
                        <p class='info-main-textdes-data'>Preboda</p>
                        <span class="info-main-textdes">Un mes antes actualizaremos la hora y el sitio.</span>
                    <!--<p class="lug-main-textdes">Ven celebrar a previa con nós. Esperámoste ás <b>19.30</b> en <b>Entreportas</b></p>
                        <iframe class='lug-main-frame-link' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d168.31750543376654!2d-8.543024343512277!3d42.881391607672256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2effbd0b9edb7f%3A0x50f8103ce3c48b47!2sBar%20Entreportas-multitasca!5e1!3m2!1ses!2ses!4v1767562121676!5m2!1ses!2ses" 
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
                    </div>
                </div>
<?php
    printFooter();
    printScripts();
    printCloseHtml();
?>