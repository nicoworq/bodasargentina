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
        <div class="col-md-12">
            <div class="listado-contenido">

                <div class="listado-principal">
                
                    <?php
                    $args = array(
                        'posts_per_page' => 10,
                        'post_type' => 'fotografos',
                        'tax_query' => array(
                            array('taxonomy' => 'usuario', 'field' => 'slug', 'terms' => array('Prem'))
                        )
                    );

                    $fotografos = new WP_Query($args);

                    if ($fotografos->have_posts()) : while ($fotografos->have_posts()) : $fotografos->the_post();
                            get_template_part('template-parts/content', 'fotografo-top');
                        endwhile;
                    else :
                        ?>
                        No hay fot&oacute;grafos que respondan a estos t&eacute;rminos de b&uacute;squeda
                    <?php
                    endif;
                    wp_reset_query();
                    ?>

                    <div class="clearfix"></div>
                    <a href="<?php echo get_permalink(get_page_by_title('directorio')) ?>" class="ver-todos-profesionales">
                        VER TODOS LOS FOTOGRAFOS 
                    </a>

                </div>


            </div>
        </div>


    </div>




</section>

<?php get_footer(); ?>