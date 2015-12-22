<?php
/**
 * @package BodasArgentinas
 */
?>

<div class='header-small'>
    <div class='container'>

        <div class='col-md-4'>
            <div class='breadcrum-galeria'>Novios / <span>Galerías</span></div>
        </div>

    </div>
</div>

<div class="galeria-single">

    <div class="container">
        <div class="col-md-2">
            <?php get_template_part('template-parts/content', 'sidebar-galerias'); ?>
        </div>

        <div class="col-md-10">

            <h1 class="galeria-single-titulo"><?php the_title(); ?></h1>
            <div class="galeria-single-contenido">
                <?php the_content(); ?>
            </div> 
        </div>

    </div>
</div>