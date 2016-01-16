<?php
get_header();


$concursos = get_posts(array(
    'numberposts' => 1,
    'post_type' => 'concursos',
    'meta_key' => 'activo',
    'meta_value' => true
        ));
?>

<div class='header-small no-bottom'>
    <div class='container'>
        <div class='col-md-4'>
            <div class='breadcrum-galeria'>Fotógrafos / <span>Concursos</span></div>
        </div>
    </div>
</div>


<section id="concursos">

    <div class="container">
        <div class="col-md-12 concurso-intro">
            Donec tristique blandit hendrerit. Pellentesque finibus sit amet purus id tincidunt. Vestibulum eu odio vitae lacus aliquam interdum nec sed erat. Integer fringilla imperdiet lacus. Etiam sit amet libero est. Morbi convallis molestie odio vitae suscipit. Sed lobortis lacus risus, in pharetra lectus laoreet vitae. Pellentesque sollicitudin rutrum pharetra. Donec vel dui aliquam, bibendum sem ut, euismod orci. Quisque bibendum at magna sed commodo.
        </div>
    </div>

    <?php if ($concursos): ?>

        <?php
        foreach ($concursos as $post):

            setup_postdata($post);

            $inicio = DateTime::createFromFormat('Ymd', get_field('fecha_inicio'));
            $fin = DateTime::createFromFormat('Ymd', get_field('fecha_fin'));
            ?>
            <div id="concurso-activo">

                <div class="concurso-activo-intro">
                    <div class="container">
                        <div class="col-md-6 same-height">

                            <img src="<?php echo get_template_directory_uri() . '/img/proximo-concurso.jpg' ?>"/>
                        </div>
                        <div class="col-md-6 same-height">
                            <div class="concurso-datos">
                                <h1><?php the_title(); ?></h1>
                                <h3><?php the_field('concurso_subtitulo'); ?></h3>
                                <div class="concurso-fechas">
                                    <h3>El concurso comienza el : <?php echo $inicio->format('d/m/Y'); ?></h3>
                                    <h3>Plazo del concurso : <?php echo $fin->format('d/m/Y'); ?></h3>
                                </div>
                                <a href="<?php the_permalink() ?>" class="concurso-participar">Participar</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="concurso-activo-contenido">
                    <div class="container">
                        <div class="col-md-12">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>


            </div>

        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>

    <?php endif; ?>





</section>


<?php
get_footer();
