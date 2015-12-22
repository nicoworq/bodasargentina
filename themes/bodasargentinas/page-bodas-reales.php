<?php
get_header();

$args = array(
    'posts_per_page' => 10,
    'post_type' => 'bodas-reales',
);

$bodas_reales = new WP_Query($args);
?>

<section id='bodas-reales'>



    <?php
    if ($bodas_reales->have_posts()) : while ($bodas_reales->have_posts()) : $bodas_reales->the_post();

            $thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full-size');
            $url = str_replace('http://bodas.worq.com.ar/', '', $thumb['0']) ;
            
            ?>

            <div class='boda-real'>
                <div class='boda-bg' style="background-image: url(<?php echo $url; ?>)"></div>
                <div class='container'>
                    <div class='col-md-12'>
                        <h3><a href='<?php the_permalink() ?>'><?php the_title() ?></a></h3>
                    </div>
                    <div class='boda-table'>
                        <div class='col-md-9'>
                            <div class='boda-contenido'>
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class='col-md-3'>
                            <div class='boda-meta'>

                                <div class='boda-tags'>
                                    <?php the_terms(get_the_ID(),'post_tag'); ?>
                                </div>

                                <a href='<?php the_permalink() ?>'>LEER Más</a>
                            </div>


                        </div>
                    </div>

                </div>

            </div>

            <?php
        endwhile;
    else :
        ?>


        No hay Bodas reales



    <?php
    endif;
    wp_reset_query();
    ?>


</section>

<?php get_footer(); ?>

