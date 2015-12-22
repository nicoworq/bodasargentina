<?php
$thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full-size');
$url = str_replace('http://bodas.worq.com.ar/', '', $thumb[0]);

?>


<div class="boda-real">
    <div class='boda-bg' style="background-image: url(<?php echo $url; ?>)"></div>


    <div class="container">
        <div class='col-md-12'>
            <h3><?php the_title() ?></h3>

            <div class='boda-contenido'>
                <?php
                the_content();
                ?>
            </div>
        </div>

    </div>
</div>

