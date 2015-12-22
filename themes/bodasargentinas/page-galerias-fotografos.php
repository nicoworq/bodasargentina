<?php
get_header();


$taxonomies = array(
    'categoria-galerias',
);

$args = array(
    'hide_empty' => false,
);

$categoriasGaleria = get_terms($taxonomies, $args);
?>




<section id="categoria-galerias">

    <?php ?>
    <div class='header-section'>

        <h1>Galerías</h1>
        <h2>Explora nuestras galerias destacadas y encuentra fotos explendidas</h2>
    </div>

    <div class="container listado-categorias">
        
        
        <?php
        foreach ($categoriasGaleria as $cat) {

            $imgCategoria = get_field('imagen_de_portada', 'categoria-galerias_' . $cat->term_id);
            
            
            ?>

            <div class=' col-md-3 contenedor-categoria-galeria'>
                <a href="<?php echo get_term_link($cat->term_id,'categoria-galerias')?>" class='categoria-galeria' style="background-image: url(<?php echo $imgCategoria['sizes']['medium'] ?>);">
                    <h3><?php echo $cat->name ?></h3>
                </a>

            </div>

            <?php
        }
        ?>



    </div>

</section>


<?php
get_footer();
