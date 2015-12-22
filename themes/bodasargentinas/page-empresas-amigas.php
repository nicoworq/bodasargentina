<?php
get_header();
?>

<div class='header-small'>
    <div class='container'>

        <div class='col-md-4'>
            <div class='breadcrum-galeria'>Empresas Amigas</div>
        </div>

    </div>
</div>

<div id="empresas-amigas">

    <?php
    $empresas = get_bookmarks();
    ?>

    <div class="contenedor-empresas">
        <div class="fila-empresas">

            <?php
            foreach ($empresas as $emp) {
                ?>
            <a class="empresa-amiga" href="<?php echo $emp->link_url; ?>" target="blank">
                    <div class="empresa-amiga-imagen transitionBase" style="background-image:url(<?php echo $emp->link_image ?>) ">
                    </div>
                    <h5><?php echo $emp->link_name ?> <br/>
                        <?php echo $emp->link_description ?></h5>
                </a>

                <?php
            }
            ?>

        </div>




    </div>
</div>


<?php get_footer(); ?>