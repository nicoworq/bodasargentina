<?php
$localidad = '';
if (get_the_author_meta('localidad') != '') {
    $localidad = '| ' . ucfirst(get_the_author_meta('localidad'));
}
?>    

<div class="profesional-standard">
    <h4 class="profesional-standard-nombre">
        <?php the_title(); ?>
    </h4>
    <div class="profesional-standard-ubicacion">
        <?php echo mt_categorias_post(get_the_ID()); ?> &nbsp;  <?php echo $localidad ?>
    </div>


    <?php if (get_the_author_meta('telefono') != '') { ?>
        <div class="profesional-standard-telefono">
            <?php the_author_meta('telefono'); ?>
        </div>
    <?php } ?>  

    <div class="profesional-standard-email">
        <?php if (get_the_author_meta('email') != '') { ?>
            <a rel="nofollow" title="correo" href="mailto:<?php the_author_meta('email'); ?>"> <?php the_author_meta('email'); ?> </a><br />
        <?php } ?>
    </div>
    <div class="profesional-standard-separador"></div>

</div>