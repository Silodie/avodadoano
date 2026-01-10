<?php
@session_cache_expire();
@session_abort();
@session_destroy();
@session_start();
include('lib/funciones.php');

    printHeader("Información");
?>
        <!--                                                        CONTENIDO                                                              -->
                <div class="row main">  
                    <div class="row info-main ">
                        <div class="col-12 info-main-alox">
                            <span class='info-main-textdes-data'>Aloxamentos</span><br>
                               <table class='col-12 info-main-table'>
                                    <tr class='info-main-table-texthead'>
                                        <th>Hotel</th>
                                        <th>Dirección</th>
                                        <th>Teléfono</th>
                                        <th>Email</th>
                                        <th>Prezo</th>
                                        <th>Cómo reservar</th>
                                        <th>Comentarios</th>
                                    </tr>
                                    <tr class='info-main-table-textbody'>
                                        <td><a class='info-main-textau info-main-hlink' target='_blank' href='https://www.carrishoteles.com/es/hotel-carris-casa-de-la-troya/'>Carrís Casa de la Troya</a></td>
                                        <td><a class='info-main-textau info-main-hlink' href='https://www.google.com/maps/place/Hotel+Carr%C3%ADs+Casa+de+la+Troya/@42.8812769,-8.546049,1229m/data=!3m2!1e3!4b1!4m9!3m8!1s0xd2efe446a1a748f:0xe67f6d28b2b91642!5m2!4m1!1i2!8m2!3d42.881273!4d-8.5434741!16s%2Fg%2F1tmg7v5k?entry=ttu&g_ep=EgoyMDI2MDEwNy4wIKXMDSoKLDEwMDc5MjA2OUgBUAM%3D' targe='_blank'> Rúa da Acivechería 14</a></td>
                                        <td>981555879</td>
                                        <td>casadelatroya@carrishoteles.com</td>
                                        <td>20% de desconto sobre a tarifa vixente no momento</td>
                                        <td>Por teléfono indicando que sodes invitados á voda de Pablo e Silvia</td>
                                        <td>Teñen poucas habitacións dispoñíbeis</td>
                                    </tr>
                                    <tr class='info-main-table-textbody'>
                                        <td><a class='info-main-textau info-main-hlink' target='_blank' href='https://hostalmexico.com/'>Hotel México</a></td>
                                        <td><a class='info-main-textau info-main-hlink' href='https://www.google.com/maps/place/M%C3%A9xico+PR/@42.872253,-8.5526118,800m/data=!3m1!1e3!4m20!1m10!3m9!1s0xd2efe3e2b7c434f:0x225f8047074303db!2sM%C3%A9xico+PR!5m2!4m1!1i2!8m2!3d42.87215!4d-8.5498!16s%2Fg%2F1thsbn2w!3m8!1s0xd2efe3e2b7c434f:0x225f8047074303db!5m2!4m1!1i2!8m2!3d42.87215!4d-8.5498!16s%2Fg%2F1thsbn2w?entry=ttu&g_ep=EgoyMDI2MDEwNy4wIKXMDSoASAFQAw%3D%3D' targe='_blank'>Rúa República Arxentina, 33</a></td>
                                        <td>981598000</td>
                                        <td>info@hostalmexico.com</td>
                                        <td>Hab. Individual: 40€/noite <br> Hab. Dobles: 75€/noite <br>Almorzo (opcional): +6.50€</td>
                                        <td>Por teléfono/email indicando que é para o enlace de Silvia e Pablo</td>
                                        <td>Piden número de tarxeta para a confirmación.<br>Cancelación gratuita ata o día antes.</td>
                                    </tr>
                                    <tr class='info-main-table-textbody'>
                                        <td><a class='info-main-textau info-main-hlink' target='_blank' href='https://www.costavella.com/'>Hotel Costa Vella</a></td>
                                        <td><a class='info-main-textau info-main-hlink' href='https://www.google.com/maps/place/Hotel+Costa+Vella/@42.8831088,-8.5459406,615m/data=!3m2!1e3!4b1!4m10!3m9!1s0xd2efe44ecbb4e4b:0x8fd0eb6f3ad2099f!5m3!1s2026-01-12!4m1!1i2!8m2!3d42.8831049!4d-8.5433657!16s%2Fg%2F1tfcpmm4?entry=ttu&g_ep=EgoyMDI2MDEwNy4wIKXMDSoASAFQAw%3D%3D' targe='_blank'>Rúa da Porta da Pena, 17</a></td>
                                        <td> - </td>
                                        <td> - </td>
                                        <td>Hab. Dobles: 135€/noite</td>
                                        <td>Falade con nós para xestionalo</td>
                                        <td>Teñen poucas habitacións dispoñíbeis</td>
                                    </tr>
                                    <tr class='info-main-table-textbody'>
                                        <td><a class='info-main-textau info-main-hlink' target='_blank' href='https://www.rosarosae.es/'>Hotel Rosa Rosae</a></td>
                                        <td><a class='info-main-textau info-main-hlink' href='https://www.google.com/maps/place/Rosa+Rosae+(Santiago+de+Compostela)/@42.872552,-8.5491085,615m/data=!3m1!1e3!4m10!3m9!1s0xd2efe3f1d787c8d:0x5c095486ec39eb5e!5m3!1s2026-01-12!4m1!1i2!8m2!3d42.8725481!4d-8.5465336!16s%2Fg%2F1tg6rdk0?entry=ttu&g_ep=EgoyMDI2MDEwNy4wIKXMDSoASAFQAw%3D%3D' targe='_blank'>Rúa da Rosa, 7</a></td>
                                        <td>981528300</td>
                                        <td> - </td>
                                        <td>Hab. individual: 100€/noite (almorzo incluido) <br> Hab. Dobles: 150€/noite (almorzo incluido)</td>
                                        <td>Por teléfono indicando que é para o enlace de Silvia e Pablo</td>
                                        <td>-</td>
                                    </tr>
                                </table>
                                <p class="lug-main-textdes">Debido a alta ocupación para as datas, recomendamos valorar tamén a opción de airbnb. Para os que xa tedes claro que vides, recomendamos facer a reserva o antes posible.</p>
                                <p class="lug-main-textdes"> Para os que vides en avión, o autobús <b>6A</b> sale cada media hora, custa sobre 1€ e vos deixa na praza de Galicia ou na estación de tren.</p>
                                <p class="lug-main-textdes"><b>Estamos á vosa disposición para o que necesitedes</b></p>
                                
                        </div>
                        <br><br>
                        <div class="col-12">
                            <span class='lug-main-textdes-data'>Prevoda</span><br>
                            <!--<p class="lug-main-textdes">Ven celebrar a previa con nós. Esperámoste ás <b>19.30</b> en <b>Entreportas</b></p>-->
                            <p class="lug-main-textdes">Más adiante indicaremos o lugar no que se celebrará o encontro.</p>
                        </div>
                         <!--<div class="col-12 lug-main-frame">
                            <iframe class='lug-main-frame-link' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d168.31750543376654!2d-8.543024343512277!3d42.881391607672256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2effbd0b9edb7f%3A0x50f8103ce3c48b47!2sBar%20Entreportas-multitasca!5e1!3m2!1ses!2ses!4v1767562121676!5m2!1ses!2ses" 
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>-->
                    </div>
                </div>
<?php
    printFooter();
    printScripts();
    printCloseHtml();
?>