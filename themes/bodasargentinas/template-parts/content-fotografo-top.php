<div class="profesional profesional-top col-md-4">

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
    </div>
</div>