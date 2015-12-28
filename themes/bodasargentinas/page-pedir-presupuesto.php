<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
get_header()
?>
<section id="pedir-presupuesto">
    <div class="header-listado">
        <div class="header-listado-contenido container">

            <div class="header-listado-titulos col-md-12">
                <h3>Novios</h3>
                <h2>PRESUPUESTO DE FOTOGRAFOS</h2>
            </div>            
        </div>
    </div>


    <form id="form-presupuesto" method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
        <input type="text" name="sex" placeholder="Sex"/>

        <input type="hidden" name="presupuesto-code" value="<?php echo wp_create_nonce('crear-presupuesto'); ?>" />
        <input type="hidden" name="action" value="crear_presupuesto" />
        <div class="ajaxing">
            <img src="<?php echo get_template_directory_uri() . '/img/loader.png' ?>" alt="Loading"/>
        </div>

        <div class="container">

            <div class="col-md-12">
                <h2>Háganos saber sus fechas de eventos, la ciudad, y algunos detalles y los mejores fotógrafos de boda responderán con su disponibilidad. </h2>
                <h3>Su dirección de correo electrónico no será visto por los fotógrafos, por lo que sólo se puede decidir a quién contactar de la lista de los fotógrafos listos. </h3>

            </div>
            <div class="col-md-4">
                <h4>Complete el formulario</h4>
                <h5>Para pedir presupuesto</h5>
                <input type="text" name="nombre" placeholder="Nombre" />
                <input type="text" name="email"  placeholder="Correo Electrónico(oculto)"/>
            </div>

            <div class="col-md-4">
                <input type="text" name="fecha_evento" placeholder="Fecha del Evento" />
                <input type="text" name="ubicacion" placeholder="Ubicación de evento(ciudad/prov/país)" />
                <input type="text" name="tipo_evento" placeholder="Tipo de evento" />
            </div>
            <div class="col-md-4">
                <textarea name="detalles" placeholder="Que detalle debemos saber acerca de su evento..."></textarea>
                <input type="submit" value="PEDIR PRESUPUESTO"/>
            </div>
        </div>



    </form>

    <div class="listado-presupuestos listado-presupuestos-activos">

        <?php
        $today = date('Ymd');

        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'presupuesto',
            'meta_query' => array(
                array(
                    'key' => 'fecha_evento',
                    'compare' => '>=',
                    'value' => $today,
                )
            ),
        );


        $presupuestosActivos = new WP_Query($args);
        ?>

        <div class="container">
            <div class="col-md-12">
                <h3>Presupuestos Activos  | <?php echo $presupuestosActivos->post_count ?></h3>

                <table>
                    <thead>
                        <tr>
                            <td>Número</td>
                            <td>Nombre</td>
                            <td>Fecha</td>
                            <td>Ubicación</td>
                            <td>Respuestas</td>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        if ($presupuestosActivos->have_posts()) : while ($presupuestosActivos->have_posts()) : $presupuestosActivos->the_post();

                                $fotografos = get_field('fotografos_aplicaron');

                                $respuestas = 0;
                                if ($fotografos) {
                                    $respuestas = count($fotografos);
                                }
                                ?>

                                <tr>
                                    <td>
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_ID() ?>
                                        </a>

                                    </td>
                                    <td>
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_field('nombre') ?>
                                        </a>

                                    </td>
                                    <td>
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_field('fecha_evento') ?>
                                        </a>

                                    </td>
                                    <td>
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_field('ubicacion') ?>
                                        </a>

                                    </td>
                                    <td>
                                        <a href="<?php the_permalink() ?>">
                                            <?php echo $respuestas; ?>
                                        </a>

                                    </td>
                                </tr>
                                <?php
                            endwhile;
                        else :
                            ?>
                            <tr>
                                <td colspan="5">
                                    No hay presupuestos activos    
                                </td>
                            </tr>

                        <?php
                        endif;
                        wp_reset_query();
                        ?>

                    </tbody>

                </table>

            </div>


        </div>

    </div>

    <div class="listado-presupuestos listado-presupuestos-inactivos">

        <?php
        $today = date('Ymd');

        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'presupuesto',
            'meta_query' => array(
                array(
                    'key' => 'fecha_evento',
                    'compare' => '<',
                    'value' => $today,
                )
            ),
        );


        $presupuestosInactivos = new WP_Query($args);
        ?>

        <div class="container">
            <div class="col-md-12">
                <h3>Presupuestos Inactivos  | <?php echo $presupuestosInactivos->post_count ?></h3>

                <table>
                    <thead>
                        <tr>
                            <td>Número</td>
                            <td>Nombre</td>
                            <td>Fecha</td>
                            <td>Ubicación</td>
                            <td>Respuestas</td>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        if ($presupuestosInactivos->have_posts()) : while ($presupuestosInactivos->have_posts()) : $presupuestosInactivos->the_post();

                                $fotografos = get_field('fotografos_aplicaron');

                                $respuestas = 0;
                                if ($fotografos) {
                                    $respuestas = count($fotografos);
                                }
                                ?>

                                <tr>
                                    <td>
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_ID() ?>
                                        </a>

                                    </td>
                                    <td>
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_field('nombre') ?>
                                        </a>

                                    </td>
                                    <td>
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_field('fecha_evento') ?>
                                        </a>

                                    </td>
                                    <td>
                                        <a href="<?php the_permalink() ?>">
                                            <?php the_field('ubicacion') ?>
                                        </a>

                                    </td>
                                    <td>
                                        <a href="<?php the_permalink() ?>">
                                            <?php echo $respuestas; ?>
                                        </a>

                                    </td>
                                </tr>
                                <?php
                            endwhile;
                        else :
                            ?>
                            <tr>
                                <td colspan="5">
                                    No hay presupuestos inactivos    
                                </td>
                            </tr>

                        <?php
                        endif;
                        wp_reset_query();
                        ?>

                    </tbody>

                </table>

            </div>


        </div>

    </div>


</section>



<?php
get_footer();

