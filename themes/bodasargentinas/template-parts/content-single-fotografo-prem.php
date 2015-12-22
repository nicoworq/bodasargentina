<?php
/**
 * @package BodasArgentinas
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="fotografo-header">
        <div class="fotografo-datos">
            <h1>DIRECTORIO DE FOTÓGRAFOS</h1>
            <div class="fotografo-thumb">
                <?php
                if (get_the_author_meta('miniatura') != '') {
                    echo get_avatar(get_the_author_meta('ID'), 171);
                } else {
                    ?>
                    <img src="<?php echo get_template_directory_uri() . '/img/default-thumb.jpg' ?>"/>
                <?php } ?>
            </div>

            <h2 class="fotografo-nombre"><?php the_title(); ?></h2>

            <?php if (get_the_author_meta('empresa') != '') { ?> 
                <h3 class="fotografo-empresa"><?php the_author_meta('empresa'); ?></h3>
            <?php } ?>
            <div class="fotografo-datos-separador"></div>


            <div class="fotografo-ubicacion">
                <?php echo mt_categorias_post(get_the_ID()); ?>	

                <?php if (get_the_author_meta('localidad') != '') { ?>		
                    | <?php the_author_meta('localidad'); ?>
                <?php } ?> 
            </div>
            <div class="fotografo-contacto">
                <?php if (get_the_author_meta('telefono') != '') { ?>
                    <span><?php the_author_meta('telefono'); ?></span>
                <?php } ?>

                <?php if (get_the_author_meta('user_url') != '') { ?>
                    <a rel="nofollow" title="Sitio web de <?php the_title(); ?>" href="<?php the_author_meta('user_url'); ?>"> <?php echo substr(get_the_author_meta('user_url'), 7, 50); ?> </a>
                <?php } ?>

                <?php if (get_the_author_meta('blog') != '') { ?>
                    <a rel="nofollow" title="blog" href="<?php the_author_meta('blog'); ?>"> <?php echo substr(get_the_author_meta('blog'), 7, 50); ?> </a>
                <?php } ?>
                <?php if (get_the_author_meta('correo') != '') { ?>
                    <a rel="nofollow" title="correo" href="mailto:<?php the_author_meta('correo'); ?>"> <?php the_author_meta('correo'); ?> </a>
                <?php } ?>
            </div>

            <div class="fotografo-redes">

                <?php if (get_the_author_meta('facebook') != '') { ?>
                    <a rel="nofollow" title="Facebook" href="<?php the_author_meta('facebook'); ?>" target="_blank"><img src="http://www.bodasargentina.com/images/fb.jpg" /></a>
                <?php } ?>

                <?php if (get_the_author_meta('twitter') != '') { ?>
                    <a rel="nofollow" title="Twitter" href="<?php the_author_meta('twitter'); ?>" target="_blank"><img src="http://www.bodasargentina.com/images/tw.jpg" /></a>
                <?php } ?>

                <?php if (get_the_author_meta('pinterest') != '') { ?>
                    <a rel="nofollow" title="Pinterest" href="<?php the_author_meta('pinterest'); ?>" target="_blank"><img src="http://www.bodasargentina.com/images/pin.jpg" /></a>
                <?php } ?>

                <?php if (get_the_author_meta('flickr') != '') { ?>
                    <a rel="nofollow" title="Flickr" href="<?php the_author_meta('flickr'); ?>" target="_blank"><img src="http://www.bodasargentina.com/images/fk.jpg" /></a>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="fotografo-body">
        <div class="container">
            <div class="fotografo-bio">
                <?php echo substr(get_the_author_meta('user_description'), 0, 1500); ?>
            </div>

            <div  class="fotografo-galeria">

                <?php if (get_the_author_meta('fotografia-01') != '') { ?>
                    <?php $image = wp_get_attachment_image_src(get_the_author_meta('fotografia-01'), 'large'); ?>
                    <img src="<?php echo str_replace('http://bodas.worq.com.ar/', '', $image[0]); ?>" alt="Fotograf&iacute;a de <?php the_title(); ?>" title="Fotograf&iacute;a de <?php the_title(); ?>" />	
                <?php } ?>	

                <?php if (get_the_author_meta('fotografia-02') != '') { ?>
                    <?php $image = wp_get_attachment_image_src(get_the_author_meta('fotografia-02'), 'large'); ?>
                    <img src="<?php echo str_replace('http://bodas.worq.com.ar/', '', $image[0]); ?>" alt="Fotograf&iacute;a de <?php the_title(); ?>" title="Fotograf&iacute;a de <?php the_title(); ?>" />
                <?php } ?>						

                <?php if (get_the_author_meta('fotografia-03') != '') { ?>
                    <?php $image = wp_get_attachment_image_src(get_the_author_meta('fotografia-03'), 'large'); ?>
                    <img src="<?php echo str_replace('http://bodas.worq.com.ar/', '', $image[0]); ?>" alt="Fotograf&iacute;a de <?php the_title(); ?>" title="Fotograf&iacute;a de <?php the_title(); ?>" />
                <?php } ?>						

                <?php if (get_the_author_meta('fotografia-04') != '') { ?>
                    <?php $image = wp_get_attachment_image_src(get_the_author_meta('fotografia-04'), 'large'); ?>
                    <img src="<?php echo str_replace('http://bodas.worq.com.ar/', '', $image[0]); ?>" alt="Fotograf&iacute;a de <?php the_title(); ?>" title="Fotograf&iacute;a de <?php the_title(); ?>" />
                <?php } ?>

                <?php if (get_the_author_meta('fotografia-05') != '') { ?>
                    <?php $image = wp_get_attachment_image_src(get_the_author_meta('fotografia-05'), 'large'); ?>
                    <img src="<?php echo str_replace('http://bodas.worq.com.ar/', '', $image[0]); ?>" alt="Fotograf&iacute;a de <?php the_title(); ?>" title="Fotograf&iacute;a de <?php the_title(); ?>" />
                <?php } ?>					

                <?php if (get_the_author_meta('fotografia-06') != '') { ?>
                    <?php $image = wp_get_attachment_image_src(get_the_author_meta('fotografia-06'), 'large'); ?>
                    <img src="<?php echo str_replace('http://bodas.worq.com.ar/', '', $image[0]); ?>" alt="Fotograf&iacute;a de <?php the_title(); ?>" title="Fotograf&iacute;a de <?php the_title(); ?>" />
                <?php } ?>						

                <?php if (get_the_author_meta('fotografia-07') != '') { ?>
                    <?php $image = wp_get_attachment_image_src(get_the_author_meta('fotografia-07'), 'large'); ?>
                    <img src="<?php echo str_replace('http://bodas.worq.com.ar/', '', $image[0]); ?>" alt="Fotograf&iacute;a de <?php the_title(); ?>" title="Fotograf&iacute;a de <?php the_title(); ?>" />
                <?php } ?>						

                <?php if (get_the_author_meta('fotografia-08') != '') { ?>
                    <?php $image = wp_get_attachment_image_src(get_the_author_meta('fotografia-08'), 'large'); ?>
                    <img src="<?php echo str_replace('http://bodas.worq.com.ar/', '', $image[0]); ?>" alt="Fotograf&iacute;a de <?php the_title(); ?>" title="Fotograf&iacute;a de <?php the_title(); ?>" />
                <?php } ?>						

                <?php if (get_the_author_meta('fotografia-09') != '') { ?>
                    <?php $image = wp_get_attachment_image_src(get_the_author_meta('fotografia-09'), 'large'); ?>
                    <img src="<?php echo str_replace('http://bodas.worq.com.ar/', '', $image[0]); ?>" alt="Fotograf&iacute;a de <?php the_title(); ?>" title="Fotograf&iacute;a de <?php the_title(); ?>" />
                <?php } ?>						

                <?php if (get_the_author_meta('fotografia-10') != '') { ?>
                    <?php $image = wp_get_attachment_image_src(get_the_author_meta('fotografia-10'), 'large'); ?>
                    <img src="<?php echo str_replace('http://bodas.worq.com.ar/', '', $image[0]); ?>" alt="Fotograf&iacute;a de <?php the_title(); ?>" title="Fotograf&iacute;a de <?php the_title(); ?>" />		
                <?php } ?>						


            </div>
        </div>

    </div>
</article><!-- #post-## -->

<div class="encuentre-provincia">
    <h4>Encuentre el fotógrafo ideal para su boda seleccionando la provincia donde se realizara el gran evento</h4>
    
    <select class="provincias-fotografo">
        <option></option>
    </select>
</div>