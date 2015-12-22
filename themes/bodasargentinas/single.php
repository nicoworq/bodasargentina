<?php

/**
 * The template for displaying all single posts.
 *
 * @package BodasArgentinas
 */
get_header();
?>



<?php

while (have_posts()) : the_post();


    if (in_category('prem')) {

        get_template_part('template-parts/content', 'single-fotografo-prem');
    }
    
    $postType = get_post_type();

    if ( $postType=== 'presupuesto') {
        get_template_part('template-parts/content', 'single-presupuesto');
    }
    if ($postType === 'bodas-reales') {
        get_template_part('template-parts/content', 'single-bodas-reales');
    }
    if ($postType === 'bodas-reales') {
        get_template_part('template-parts/content', 'single-bodas-reales');
    }
    if ($postType === 'galerias') {
        get_template_part('template-parts/content', 'single-galerias');
    }
    ?>


<?php endwhile; // end of the loop.   ?>


<?php

get_footer();
