<div class="detalle-presupuesto">
    <div class="container">
        <div class="col-md-8">
            <div class="datos-presupuesto">
                <h1>Solicitud Nro <?php the_ID() ?></h1>

                <h3><span>Nombre:</span> <?php the_field('nombre'); ?></h3>
                <h3><span>Fecha:</span> <?php the_field('fecha_evento'); ?></h3>
                <h3><span>Ubicación:</span> <?php the_field('ubicacion'); ?></h3>
                <h3><span>Tipo de Evento:</span> <?php the_field('tipo_evento'); ?></h3>
                <h3><span>Detalles:</span></h3>
                <div class="detalles-evento">
                    <?php the_field('detalles'); ?>
                </div>
            </div>


        </div>
        <div class="col-md-4">
            <div class="aplicar">
                <h1>Fotógrafos aplican aquí</h1>

                <?php
                $hoy = date('d/m/Y');

                $fecha_evento = get_field('fecha_evento');




                if (is_user_logged_in()) {


                    if ($fecha_evento < $hoy) {
                        ?>
                        <div class="ya-aplico">
                            Lo sentimos, este presupuesto ha caducado. Solamente puedes aplicar a presupuestos activos.
                            <br/>
                            <div class="clearfix"></div>
                            <a id="volver-presupuesto" href="<?php echo get_permalink(get_page_by_title('Pedir Presupuesto')) ?>">Volver</a>
                        </div>
                        <?php
                    } else {


                        if (fotografo_aplico(get_the_ID())) {
                            ?>
                            <div class="ya-aplico">
                                Ya has aplicado a este presupuesto.


                                <form id="form-desaplicar" method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
                                    <input type="hidden" name="action" value="desaplicar_presupuesto" />              
                                    <input type="hidden" name="desaplicar-code" value="<?php echo wp_create_nonce('desaplicar-presupuesto'); ?>" />
                                    <input type="hidden" name="presupuesto" value="<?php the_ID() ?>" />
                                    <button id="desaplicar-presupuesto" data-id-presupuesto="<?php ?>" data-id-fotografo="">Desaplicar</button>
                                </form>
                            </div>
                            <?php
                        } else {
                            ?>
                            <p>Si usted es un audaz fotografo y quiere responder a esta solicitud, por favor haga click en el siguiente boton</p>
                            <form id="form-aplicar" method="post" action="<?php echo admin_url('admin-ajax.php'); ?>">
                                <input type="hidden" name="action" value="aplicar_presupuesto" />              
                                <input type="hidden" name="aplicar-code" value="<?php echo wp_create_nonce('aplicar-presupuesto'); ?>" />
                                <input type="hidden" name="presupuesto" value="<?php the_ID() ?>" />
                                <button id="aplicar-presupuesto" data-id-presupuesto="<?php ?>" data-id-fotografo="">Aplicar</button>
                            </form>
                            <?php
                        }
                    }
                } else {
                    ?>
                    <div class='registrate'>
                        Debes estar registrado para aplicar a este presupuesto. 
                    </div>
                    <?php
                }
                ?>



            </div>

        </div>
    </div>
    <div class="container">
        <div class="fotografos-aplicantes">
            <div class="col-md-12">
                <h2>Fotógrafos que aplicaron</h2>
                <div class="listado-aplicantes">
                    <?php
                    $aplicantes = get_field('fotografos_aplicaron');
                    if ($aplicantes) {
                        foreach (get_field('fotografos_aplicaron') as $post) {
                            setup_postdata($post);

                            get_template_part('template-parts/content', 'fotografo-premium');
                        }

                        wp_reset_postdata();
                    } else {
                        ?>
                        <div class="sin-aplicantes">
                            Aún no hay aplicantes. Puedes ser el primero ! 
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>
</div>
