<?php
/**
 * @package BodasArgentinas
 */
?>

<div class='header-small'>
    <div class='container'>

        <div class='col-md-4'>
            <?php
            $bread = 'Novios / <span>Galerías</span>';
            if (isset($_GET['premio'])) {
                $bread = 'Premios / <span>Galerías</span>';
            }
            ?>
            <div class='breadcrum-galeria'><?php echo $bread ?></div>
        </div>

    </div>
</div>

<div class="galeria-single">

    <div class="container">
        <div class="col-md-3">
            <?php
            if (isset($_GET['premio'])) {
                get_template_part('template-parts/content', 'sidebar-galerias-premios'); 
            }else{
                get_template_part('template-parts/content', 'sidebar-galerias'); 
            }
            
            
            ?>
        </div>

        <div class="col-md-9">

            <h1 class="galeria-single-titulo"><?php the_title(); ?></h1>
            <div class="galeria-single-contenido">
                <?php the_content(); ?>
            </div> 
        </div>

    </div>
</div>