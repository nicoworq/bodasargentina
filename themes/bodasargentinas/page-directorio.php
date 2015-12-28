<?php
/*
  Template Name: Template Directorio
 */

get_header();
?>

<section id="encuentre-fotografo">
    <?php
    get_template_part('template-parts/content', 'directorio-head');
    ?>

    <div class="container">
        <div class="listado-contenido">

            <div class="col-md-9">
                <div class="listado-principal">
                    <h3 class="listado-titulo">
                        <i><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAYCAYAAAAVibZIAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QTAxQTM1NUIwNkU1MTFFNUJBQkVGRTIxNjJDRjk2RDkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QTAxQTM1NUMwNkU1MTFFNUJBQkVGRTIxNjJDRjk2RDkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBMDFBMzU1OTA2RTUxMUU1QkFCRUZFMjE2MkNGOTZEOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBMDFBMzU1QTA2RTUxMUU1QkFCRUZFMjE2MkNGOTZEOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhxY33QAAATeSURBVHjafJVrTJtVGMfbl95baNENHGImYsxw88PmWGYyN2LCRWZkiJsRN9jQcUf2zctMpjPTkEXJRrlKNi4ByXQJHxhTjIFPxttQZxhDF6cxGwmCa0vbt7e39XdKJYx0NHlzznnOc/7P//k/zzlVRyIR1Vq/iiNHbCajcVCtVufJPt+Y0WAotbe1OdY6o14NCsh6DvZLkvSo1+e7ajIYNoXD4axQKKTSaDQqwKd9fv+MQa9/gvkNryyXnTt/fm4lhrQ6isVsPs6Qv+h2Zxp0umKVJGUBMgngZkmjmWSepdfp9kEmMxgM5ptNprfXZNrY0GALq1RTPllO42AOTKwwMZP+MCnLh8vLjQTdh92N+6KiKOPMb5PJ5vbOTsddoIcOHkyzJSd/ogqH81yLixoOTrW2t2+JOqjV99Suoa5u6l+H43FrYmKI5Zjb46ns6++/pRGbiRbLBxFFKSQ1GcAR0jweO6Sur60tJs0inU63AdMs2g4naLXDdrs9gn3/fTbbKSEX80LOivlhTYyNwR8IqEjz6Fm7fUDY6mpqrIBfdDmd2UlW6wX4TqBzBhr2sv3dqxUVJR1dXdeYF1dXVpZS2AH8DeJsFJRW+RnAl5DiSZYDsUA9Qb9/PYCbYDW7IuUTsixfpkN6WL4QrbYkbRejEgz+FF3XVFWlmy2Wo2KB4PMxltsDodDzVPzASkDxa2ltvQ2BAxSpCIbbhC0hIeEfURv8q5ArXdJqte3o+QhajUO/ORpRUXJ0Gs33VHwmXoGQaAYCV2D4jFijZzM440wzyLpd9OnDsFJRiNGWlhZZOGn1eiPDmrcGkDsMUQ3R1gepUY8sq2jFjZLT5Tqp1+tVEbW6qbysLFe1pMP1O07nDmTQxwOsra42wDSb77pYv15fn+vxepu4LEKKk1JvX99ngDS5XC6JligSTlR5hFbxo9G78UCR6QQ+MulfEmv6cy9dwVI6jeafa2KaWG1JSWK8IdY9vb0y0V8h+iis0jE1BxXlD71Wm4nex7xebwm9/WxbR0dULjrhpigUEiQutxT6bBDGYCi0C7BppPiqxW4fZ74T+2nAfyALCcAw39dmo3EnjK4SULDLpaee9i/p+cAyKNr00/zPEbEEwBLufjdmcRF+EU8evWnBZx0B5ru6u93/y4B+ndhe87jd4iFS8BlYvvsURID/yvc3+uyxJiVJgK+jG5z3uvuwtLI3TxZhpJggg41gbeFhCUWZsqgjjfvpsacA/BSHAvQZI/0MmtnI/B3a5gxAx/B7X1xCvpuBQEA8Ppfxf3lubu73lJSUOuxnEhYWFlLgcpGNN0ntm0sjI3PCico/BICZp0+H5gU7srPzSE/cPB1pm2H4IL2tQKiegl3bs3u3A+antm3dek5N9K4Ajy0iF+MQFi+ReEcBTKeHS2mVvayTWevZ9zE6CCpaaYjAf2FzIZV4wSTZ6x02mkxfiPT3Q8XGwSuxl+pPHLNoL6HVIUBeJP0Z9nPwnYB5FoEuYPtwfmHhVrLNNi1upZARYqLqJXe9/BTMzOHfADqLfZfoNu5/weoiofOXs7OzvtTU1G/FMXwfo0DeuP9RvPYeivUWTu/Re/no3Riv8uw3pqWlFUpLN+6NlYBx//j4l+xnmKT3PhocGor7ShFc3PmPAz7fj2Q1uHr/PwEGAPB6mmYvKOhhAAAAAElFTkSuQmCC"/></i>Directorio Premium
                    </h3>

                    <?php
                    $args = array(
                        'posts_per_page' => -1,
                        'post_type' => 'fotografos',
                        'orderby' => 'rand',
                        'tax_query' => array(
                            array('taxonomy' => 'usuario', 'field' => 'slug', 'terms' => array('Prem'))
                        )
                    );

                    $fotografos = new WP_Query($args);

                    if ($fotografos->have_posts()) : while ($fotografos->have_posts()) : $fotografos->the_post();
                            get_template_part('template-parts/content', 'fotografo-premium');
                        endwhile;
                    else :
                        ?>
                        No hay fot&oacute;grafos que respondan a estos t&eacute;rminos de b&uacute;squeda
                    <?php
                    endif;
                    wp_reset_query();
                    ?>


                    <!--
                
                     
         <a href="" class="ver-todos-profesionales">
                        VER TODOS LOS FOTOGRAFOS PREMIUM
                    </a>
                    -->



                </div>
            </div>
            <div class="col-md-3">
                <div class="listado-lateral">
                    <h3 class="listado-titulo">
                        <i><img src="<?php echo get_template_directory_uri() ?>/img/listado-standard.png"/></i>
                        Directorio Standard
                    </h3>


                    <?php
                    $args = array(
                        'posts_per_page' => -1,
                        'post_type' => 'fotografos',
                        'orderby' => 'rand',
                        'tax_query' => array(
                            array('taxonomy' => 'usuario', 'field' => 'slug', 'terms' => array('Gral'))
                        )
                    );

                    $fotografos_estandar = new WP_Query($args);
                    ?>


                    <?php
                    if ($fotografos_estandar->have_posts()) : while ($fotografos_estandar->have_posts()) : $fotografos_estandar->the_post();

                            get_template_part('template-parts/content', 'fotografo-standard');
                        endwhile;
                        ?>

                    <?php else : ?>
                        No hay fot&oacute;grafos que respondan a estos t&eacute;rminos de b&uacute;squeda
                    <?php
                    endif;
                    wp_reset_query();
                    ?>


                    <!--
        
             <a href="" class="ver-todos-profesionales">
                        VER TODOS LOS STANDARD
                    </a>
                    -->


                </div>
            </div>


        </div>
    </div>



</section>

<?php get_footer(); ?>