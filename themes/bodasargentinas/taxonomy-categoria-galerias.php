<?php
get_header();
$taxonomiaActual = $wp_query->queried_object;
$args = array(
    'post_type' => 'galerias',
    'tax_query' => array(
        array(
            'taxonomy' => 'categoria-galerias',
            'field' => 'slug',
            'terms' => $taxonomiaActual->slug,
        ),
    ),
);
$galerias = new WP_Query($args);
?>
<div class='header-small'>
    <div class='container'>
        <div class='col-md-4'>
            <div class='breadcrum-galeria'>Novios / <span>Galerías</span></div>
        </div>
    </div>
</div>

<div class='listado-galerias-categoria'>
    <div class='container'>
        <div class='col-md-2'>            
            <?php get_template_part('template-parts/content', 'sidebar-galerias'); ?>
        </div>
        <div class='col-md-10'>

            <div id="contenedor-galerias">
                <?php
                if ($galerias->have_posts()) {
                    while ($galerias->have_posts()) {
                        $galerias->the_post();
                        $portada = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium');
                        ?>
                        <div class='col-md-6 contenedor-galeria'>
                            <a class='galeria' href="<?php the_permalink(); ?>" style="background-image: url(<?php echo  str_replace('http://bodas.worq.com.ar/', '',  $portada[0]) ?>);">
                                <div class='galeria-over'></div>
                                <div class='galeria-texto'>
                                    <h3><?php the_title(); ?></h3>
                                    <h4>Concurso</h4>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                } else {
                    ?>

                    <h1>No se han encontrado Galerias. Intenta con otra Categoria</h1>
                    <?php
                }

                wp_reset_postdata();
                ?>
            </div>

        </div>
    </div>
</div>