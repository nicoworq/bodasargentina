<?php
/*
  Template Name: Template Inicio
 */

get_header();

$args = array(
    'posts_per_page' => 10,
    'post_type' => 'slide_home',
);

$slides_home = new WP_Query($args);
?>



<section id="home-slider">


    <div class="home-slides">
        <ul class="slides">

            <?php
            if ($slides_home->have_posts()) : while ($slides_home->have_posts()) : $slides_home->the_post();

                    $fotografo = get_field('fotografo', get_the_ID());

                    $imagen = get_field('imagen', get_the_ID());


                    $localidad = get_the_author_meta('localidad', $fotografo->post_author);
                    $nombre = get_the_author_meta('first_name', $fotografo->post_author);
                    $apellido = get_the_author_meta('last_name', $fotografo->post_author);
                    ?>
                    <li>
                        <div class="over-slider-home">
                            <div class="over-slide-home-contenido">
                                <h4 class="categoria-audiovisual">Fotografía</h4>
                                <h5 class="user-audiovisual"><?php echo $nombre . ' ' . $apellido ?>, <?php echo $localidad ?></h5>
                                <a href="<?php echo get_permalink($fotografo); ?>">VER SU PERFIL</a>
                            </div>

                        </div>
                        <img src="<?php echo str_replace('http://bodas.worq.com.ar/', '', $imagen['url']); ?> " alt="Slide"/>
                    </li>


                    <?php
                endwhile;
            else :
                ?>


                No hay Slides cargados



            <?php
            endif;
            wp_reset_query();
            ?>


            <!--

        <li>
            <div class="over-slider-home">
                <div class="over-slide-home-contenido">
                    <h4 class="categoria-audiovisual">Fotografía</h4>
                    <h5 class="user-audiovisual">MAX PELL, Rosario, Santa Fe</h5>
                    <a href="">VER SU PERFIL</a>
                </div>

            </div>
            <img src="<?php echo get_template_directory_uri() ?>/img/home-slide1.jpg" />
        </li>
        <li>
            <div class="over-slider-home">
                <div class="over-slide-home-contenido">
                    <h4 class="categoria-audiovisual">Fotografía</h4>
                    <h5 class="user-audiovisual">MAX POWER, Calamuchita, Cordoba</h5>
                    <a href="">VER SU PERFIL</a>
                </div>

            </div>
            <img src="<?php echo get_template_directory_uri() ?>/img/home-slide2.jpg" />
        </li>
        <li>
            <div class="over-slider-home">
                <div class="over-slide-home-contenido">
                    <h4 class="categoria-audiovisual">Fotografía</h4>
                    <h5 class="user-audiovisual">RUBEN GONZALES, Moron, Buenos Aires</h5>
                    <a href="">VER SU PERFIL</a>
                </div>

            </div>
            <img src="<?php echo get_template_directory_uri() ?>/img/home-slide3.jpg" />
        </li>-->

        </ul>
    </div>



</section>

<section id="accesos-home">


    <a href="<?php echo get_permalink(get_page_by_title('directorio')); ?>" class="acceso">
        <i class="acceso-icono">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAATCAYAAACKsM07AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Rjc4QzVBMUEwNkQ5MTFFNTg4ODNGRkNDRENCOUU2ODQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Rjc4QzVBMUIwNkQ5MTFFNTg4ODNGRkNDRENCOUU2ODQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpGNzhDNUExODA2RDkxMUU1ODg4M0ZGQ0NEQ0I5RTY4NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpGNzhDNUExOTA2RDkxMUU1ODg4M0ZGQ0NEQ0I5RTY4NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pvpqcl4AAAJDSURBVHjarJRLSFVRFIbPuVxKoyikrGYRZEhihJKjchBBQYWDahAURdpIaiRBRCMnNQjBJj1EKJQI6UGTiOxFAy0KzG6JN51cKCLoTWZe7+1f8W3ZHu9r4IKPvc8+e6+1z7/WOmE2mw18G2w+5qZ7xGWxRIRBbrPDP0WzuGsLDVcuzdoQx+kyDZtFGevT4pSoFCPiT44g5rxcrBfHXYCoxRl3iy4xzHOFWIPzTQTIZWWcaRRrxficALp9u8a9OPnIzWK8v+E534CTAEcJ3vWKM+K2SMlfzPP/Khw42mKbFoqM59jsE7evE6dN3sjlBoVd7qU5EqtyfOFkHL1HxS5uH6D3Z2EZP8vaUzDbCqb7SVEtVohfnF0s7omVMRYmlf2keK+5kURXc/5F7OT5guhkbmtf2bOFM22iSX5GXWE4SUJpF0aSd44v2ieeiQfo/pa5re1nvwVZROAGT4WZKoqa6V4l7ouH4hE5cocvijtim+hnrKXUMyT6f4BYngDrGB+jbR3NNAY2rxfLxRP2Wj9MS55ZnZsvQJpxgZjyEufMdfcUe/wzQSkB3jFaIr9RLX1iO/Qh0Xexg72JQp0ctSHxHM0PigNUUDfvb/J7OIJUA95foKQAaUquH6dLRSu4CjkhziNTG/1UskSusQ6Lv9R+StwCm3eICXGIkg0KBohmH+tBpmv0RhNYYq/y7nr0kHxliknk2zC3NJlWs/ZB/CjhbGA/u9/c6E2RvWmvFONFLmc5qnE/uxdiI40yn2Zf+PqfAAMAXQ6eoVNjiugAAAAASUVORK5CYII="/>
        </i>
        <h2>BUSCAR UN FOTÓGRAFO</h2>
    </a>



    <a href="" class="acceso acceso-bordes">
        <i class="acceso-icono">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAATCAYAAACKsM07AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Rjc4QzVBMUEwNkQ5MTFFNTg4ODNGRkNDRENCOUU2ODQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Rjc4QzVBMUIwNkQ5MTFFNTg4ODNGRkNDRENCOUU2ODQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpGNzhDNUExODA2RDkxMUU1ODg4M0ZGQ0NEQ0I5RTY4NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpGNzhDNUExOTA2RDkxMUU1ODg4M0ZGQ0NEQ0I5RTY4NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pvpqcl4AAAJDSURBVHjarJRLSFVRFIbPuVxKoyikrGYRZEhihJKjchBBQYWDahAURdpIaiRBRCMnNQjBJj1EKJQI6UGTiOxFAy0KzG6JN51cKCLoTWZe7+1f8W3ZHu9r4IKPvc8+e6+1z7/WOmE2mw18G2w+5qZ7xGWxRIRBbrPDP0WzuGsLDVcuzdoQx+kyDZtFGevT4pSoFCPiT44g5rxcrBfHXYCoxRl3iy4xzHOFWIPzTQTIZWWcaRRrxficALp9u8a9OPnIzWK8v+E534CTAEcJ3vWKM+K2SMlfzPP/Khw42mKbFoqM59jsE7evE6dN3sjlBoVd7qU5EqtyfOFkHL1HxS5uH6D3Z2EZP8vaUzDbCqb7SVEtVohfnF0s7omVMRYmlf2keK+5kURXc/5F7OT5guhkbmtf2bOFM22iSX5GXWE4SUJpF0aSd44v2ieeiQfo/pa5re1nvwVZROAGT4WZKoqa6V4l7ouH4hE5cocvijtim+hnrKXUMyT6f4BYngDrGB+jbR3NNAY2rxfLxRP2Wj9MS55ZnZsvQJpxgZjyEufMdfcUe/wzQSkB3jFaIr9RLX1iO/Qh0Xexg72JQp0ctSHxHM0PigNUUDfvb/J7OIJUA95foKQAaUquH6dLRSu4CjkhziNTG/1UskSusQ6Lv9R+StwCm3eICXGIkg0KBohmH+tBpmv0RhNYYq/y7nr0kHxliknk2zC3NJlWs/ZB/CjhbGA/u9/c6E2RvWmvFONFLmc5qnE/uxdiI40yn2Zf+PqfAAMAXQ6eoVNjiugAAAAASUVORK5CYII="/>
        </i>
        <h2>BUSCAR UN VIDEÓGRAFO</h2>
    </a>



    <a href="<?php echo get_permalink(get_page_by_title('Pedir Presupuesto')); ?>" class="acceso">
        <i class="acceso-icono">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAATCAYAAACKsM07AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Rjc4QzVBMUEwNkQ5MTFFNTg4ODNGRkNDRENCOUU2ODQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Rjc4QzVBMUIwNkQ5MTFFNTg4ODNGRkNDRENCOUU2ODQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpGNzhDNUExODA2RDkxMUU1ODg4M0ZGQ0NEQ0I5RTY4NCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpGNzhDNUExOTA2RDkxMUU1ODg4M0ZGQ0NEQ0I5RTY4NCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pvpqcl4AAAJDSURBVHjarJRLSFVRFIbPuVxKoyikrGYRZEhihJKjchBBQYWDahAURdpIaiRBRCMnNQjBJj1EKJQI6UGTiOxFAy0KzG6JN51cKCLoTWZe7+1f8W3ZHu9r4IKPvc8+e6+1z7/WOmE2mw18G2w+5qZ7xGWxRIRBbrPDP0WzuGsLDVcuzdoQx+kyDZtFGevT4pSoFCPiT44g5rxcrBfHXYCoxRl3iy4xzHOFWIPzTQTIZWWcaRRrxficALp9u8a9OPnIzWK8v+E534CTAEcJ3vWKM+K2SMlfzPP/Khw42mKbFoqM59jsE7evE6dN3sjlBoVd7qU5EqtyfOFkHL1HxS5uH6D3Z2EZP8vaUzDbCqb7SVEtVohfnF0s7omVMRYmlf2keK+5kURXc/5F7OT5guhkbmtf2bOFM22iSX5GXWE4SUJpF0aSd44v2ieeiQfo/pa5re1nvwVZROAGT4WZKoqa6V4l7ouH4hE5cocvijtim+hnrKXUMyT6f4BYngDrGB+jbR3NNAY2rxfLxRP2Wj9MS55ZnZsvQJpxgZjyEufMdfcUe/wzQSkB3jFaIr9RLX1iO/Qh0Xexg72JQp0ctSHxHM0PigNUUDfvb/J7OIJUA95foKQAaUquH6dLRSu4CjkhziNTG/1UskSusQ6Lv9R+StwCm3eICXGIkg0KBohmH+tBpmv0RhNYYq/y7nr0kHxliknk2zC3NJlWs/ZB/CjhbGA/u9/c6E2RvWmvFONFLmc5qnE/uxdiI40yn2Zf+PqfAAMAXQ6eoVNjiugAAAAASUVORK5CYII="/>
        </i>
        <h2>PEDIR PRESUPUESTO PARA BODA</h2>
    </a>

</section>

<section id="tendencias-home">
    <h2>TENDENCIAS EN LA FOTOGRAFÍA DE BODAS</h2>
    <div class="tendencia">
        <div class="tendencia-imagenes">
            <h4>Getting<br/>
                Ready</h4>
            <div class="slide-tendencias">
                <ul class="slides">
                    <li><img src="<?php echo get_template_directory_uri() ?>/img/tendencias1.jpg" /></li>
                </ul>
            </div>
        </div>
        <div class="tendencia-contenido">
            <h3>Preparativos<br/> Novios</h3>
            <p>Se retrata a los novios en sus preparativos para la boda, son momentos muy especiales, cada detalle, cada instante está cargado de una emoción única.</p>
            <a href="<?php echo get_term_link(79,'categoria-galerias') ?>">VER GALERÍAS</a>
        </div>
    </div>
    <div class="tendencia tendencia-2">
        <div class="tendencia-contenido">
            <h3>Una nueva forma<br/> de recordar</h3>
            <p>Se trata de una sesión fotográfica posterior a la boda. Es una sesión relajada, descontracturada,  donde perder el miedo a “que se ensucie” el vestido, la sesión puede planearse en lugares raros, e inéditos.
                Esto permite tener otro nuevo tipo de recuerdos y sobre todo para divertirse mucho.</p>
            <a href="<?php echo get_term_link(82,'categoria-galerias') ?>">VER GALERÍAS</a>
        </div>
        <div class="tendencia-imagenes">
            <h4>Trash<br/>
                The Dress. TTD</h4>
            <div class="slide-tendencias">
                <ul class="slides">
                    <li><img src="<?php echo get_template_directory_uri() ?>/img/tendencias2.jpg" /></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="tendencia">
        <div class="tendencia-imagenes">
            <h4>Engagement<br/> Session</h4>
            <div class="slide-tendencias">
                <ul class="slides">
                    <li><img src="<?php echo get_template_directory_uri() ?>/img/tendencias3.jpg" /></li>
                </ul>
            </div>
        </div>
        <div class="tendencia-contenido">
            <h3>sesión de
                <br/> compromiso</h3>
            <p>Los novios realizan una sesión fotográfica en las que inmortalizan sus últimas días como novios, son fotografías creativas y divertidas para mostrar el día de la fiesta. Se puede utilizar su historia, cómo se conocieron, sus gustos y hobbies. Se busca un clima casual. Eligen un lugar, una vestimenta con estilo propio y accesorios.</p>
            <a href="<?php echo get_term_link(78,'categoria-galerias') ?>">VER GALERÍAS</a>
        </div>
    </div>


</section>

<section id="empresas-amigas-home">
    <h3>EMPRESAS AMIGAS</h3>
    <h4>QUE PUEDEN  AYUDARTE A PLANIFICAR TU BODA + TENDENCIAS + ESTILOS + INSPIRACIÓN</h4>
    <a href="<?php echo get_permalink(get_page_by_title('Empresas Amigas')); ?>" class="ver-todas-empresas">VER TODAS</a>

    <?php
    $empresas = get_bookmarks(array('limit' => 8, 'category_name' => 'Mostrar en Home'));
    ?>

    <div class="contenedor-empresas">
        <div class="fila-empresas">

            <?php
            foreach ($empresas as $emp) {
                ?>
                <a class="empresa-amiga" href="<?php echo $emp->link_url; ?>" target="blank">
                    <div class="empresa-amiga-imagen transitionBase" style="background-image:url(<?php echo $emp->link_image ?>) ">
                    </div>
                    <h5><?php echo $emp->link_name ?> <br/>
                        <?php echo $emp->link_description ?></h5>
                </a>

                <?php
            }
            ?>

        </div>




    </div>
</section>

<?php get_footer(); ?>