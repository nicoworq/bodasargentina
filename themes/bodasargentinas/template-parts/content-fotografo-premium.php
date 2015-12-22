<div class="profesional">

    <?php
    if (get_the_author_meta('miniatura') != '') {
        $imageObj = wp_get_attachment_image_src(get_the_author_meta('miniatura'), 'thumbnail');

        $image[0] = str_replace('http://bodas.worq.com.ar/', '', $imageObj[0]);
    } else {
        $image = array();
        $image[0] = get_template_directory_uri() . '/img/default-thumb.jpg';
    }

    $localidad = '';
    if (get_the_author_meta('localidad') != '') {
        $localidad = '| ' . get_the_author_meta('localidad');
    }
    ?>                    

    <div class="profesional-img">
        <a href="<?php the_permalink(); ?>" class="transitionBase" style="background-image: url(<?php echo $image[0] ?>)"></a>                           
    </div>


    <div class="profesional-contenido">
        <h4 class="profesional-nombre"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
        <p class="profesional-ubicacion"><?php echo mt_categorias_post(get_the_ID()); ?>&nbsp;<?php echo $localidad ?></p>
        <div class="profesional-telefonos">
            <?php if (get_the_author_meta('telefono') != '') { ?>

                <p> <?php the_author_meta('telefono'); ?></p> 

            <?php } ?>                           

        </div>
        <div class="profesional-web">

            <?php if (get_the_author_meta('user_url') != '') { ?>
                <a rel="nofollow" title="web" href="<?php the_author_meta('user_url'); ?>"><?php echo substr(get_the_author_meta('user_url'), 7, 50); ?> </a>
            <?php } ?>

            <?php if (get_the_author_meta('blog') != '') { ?>
                <a rel="nofollow" title="blog" href="<?php the_author_meta('blog'); ?>"> <?php echo substr(get_the_author_meta('blog'), 7, 50); ?> </a><br />
            <?php } ?>
            <?php if (get_the_author_meta('correo') != '') { ?>
                <a rel="nofollow" title="correo" href="mailto:<?php the_author_meta('correo'); ?>"> <?php the_author_meta('correo'); ?> </a><br />
            <?php } ?>




        </div>
        <div class="profesional-redes">


            <?php if (get_the_author_meta('facebook') != '') { ?>
                <a title="Facebook" href="<?php the_author_meta('facebook'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/facebook.png"/></a>
            <?php } ?>

            <?php if (get_the_author_meta('twitter') != '') { ?>
                <a title="Twitter" href="<?php the_author_meta('twitter'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/twitter.png"/></a>
            <?php } ?>

            <?php if (get_the_author_meta('pinterest') != '') { ?>
                <a title="Pinterest" href="<?php the_author_meta('pinterest'); ?>" target="_blank"> <img src="<?php echo get_template_directory_uri() ?>/img/pinterest.png"/></a>
            <?php } ?>

            <?php if (get_the_author_meta('flickr') != '') { ?>
                <a title="Flickr" href="<?php the_author_meta('flickr'); ?>" target="_blank"><img src="http://www.bodasargentina.com/images/fk.jpg" /></a>
            <?php } ?>

        </div>
    </div>
</div>