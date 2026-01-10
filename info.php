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
                        <div class="col-7">
                            <span class='info-main-textdes-data'>Aloxamentos</span><br>
                            <!--<p class="lug-main-textdes"> Estamos á procura de espazo para todos en diferentes hoteis para facilitarvos o traballo o máximo posíbel.
                                Debido á alta ocupación para as datas (celébrase un congreso de médicos neses días), si xa tedes clara a asistencia aconsellamos que vaiades buscando e reservando
                                pola vosa conta nas diferentes plataformas dispoñíbeis (booking, airbnb, etc.)</p>
                                <p class="lug-main-textdes">En canto teñamos máis información actualizaremos a web.</p>-->
                               <table class='info-main-table'>
                                    <tr class='info-main-textdes'>
                                        <th>Hotel</th>
                                        <th>Teléfono</th>
                                        <th>Dirección</th>
                                        <th>Comentarios</th>
                                    </tr>
                                    <tr class='info-main-textau'>
                                        <td><a class='info-main-textau' target='_blank' href='https://www.carrishoteles.com/es/hotel-carris-casa-de-la-troya/'>Carrís Casa de la Troya</a></td>
                                        <td>981555879</td>
                                        <td>Rúa da Acivechería 14</td>
                                        <td >Fan un 20% de desconto sobre a tarifa vixente no momento. 
                                            Será preciso que reservedes por teléfono e digades que sodes invitados a voda de Pablo e Silvia.
                                            Teñen poucas habitacións disponibles e non as bloquean</td>
                                </tr>
                                </table>
                                <p class="lug-main-textdes">Debido a alta ocupación para as datas, recomendamos valorar tamén a opción de airbnb. Para os que xa tedes claro que vides, recomendamos facer a reserva o antes posible.</p>
                                <p class="lug-main-textdes"> Para os que vides en avión, o autobús <b>6A</b> sale cada media hora, custa sobre 1€ e vos deixa na praza de Galicia ou na estación de tren.</p>
                                <p class="lug-main-textdes"><b>Estamos á vosa disposición para o que necesitedes</b></p>
                                
                        </div>
                        <br><br>
                        <div class="col-7">
                            <span class='lug-main-textdes-data'>Prevoda</span><br>
                            <!--<p class="lug-main-textdes">Ven celebrar a previa con nós. Esperámoste ás <b>19.30</b> en <b>Entreportas</b></p>-->
                            <p class="lug-main-textdes">Más adiante indicaremos o lugar no que se celebrará o encontro.</p>
                        </div>
                         <!--<div class="col-12 lug-main-frame">
                            <iframe class='lug-main-frame-link' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d168.31750543376654!2d-8.543024343512277!3d42.881391607672256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2effbd0b9edb7f%3A0x50f8103ce3c48b47!2sBar%20Entreportas-multitasca!5e1!3m2!1ses!2ses!4v1767562121676!5m2!1ses!2ses" 
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>-->
                       <!-- <div class="col-7">
                            <span class='lug-main-textdes-data'>Perrucarías</span><br>
                            <p class="lug-main-textdes">Para elas</p>
                                <ul class="info-main-list">
                                    <li>Perrucaría 1</li>
                                    <li>Perrucaría 2</li>
                                    <li>Perrucaría 3</li>
                                </ul>
                                <p class="lug-main-textdes">Para eles</p>
                                <ul class="info-main-list">
                                    <li>Perrucaría 1</li>
                                    <li>Perrucaría 2</li>
                                    <li>Perrucaría 3</li>
                                </ul>
                        </div>
                    </div>
                </div>-->

<?php
    printFooter();
    printScripts();
    printCloseHtml();
?>