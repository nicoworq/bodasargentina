<?php

/*
 *  PRESUPUESTO
 */

add_action('wp_ajax_nopriv_crear_presupuesto', 'crear_presupuesto');
add_action('wp_ajax_crear_presupuesto', 'crear_presupuesto');

function crear_presupuesto() {
    header('Content-type: application/json');


    //Descarto por ser un bot!
    if ($_POST['nombre'] == '' || $_POST['email'] == '') {
        echo json_encode(array('enviado' => TRUE, 'trucho' => TRUE));
        die();
    }

    //Descarto por ser un bot!
    if (isset($_POST['sex']) && $_POST['sex'] !== '') {
        echo json_encode(array('enviado' => TRUE, 'trucho' => TRUE));
        die();
    }

    //descarto por CSRF
    if (!check_ajax_referer('crear-presupuesto', 'presupuesto-code', false)) {
        echo json_encode(array('enviado' => TRUE, 'trucho' => TRUE, 'csrf' => TRUE));
        die();
    }


    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $fecha_evento = $_POST['fecha_evento'];
    $ubicacion = $_POST['ubicacion'];
    $tipo_evento = $_POST['tipo_evento'];
    $detalles = $_POST['detalles'];


    $presupuesto = array(
        'post_title' => 'Presupuesto del ' . date('d/m/Y H:i '),
        'post_type' => 'presupuesto',
        'post_status' => 'publish'
    );

    $id_post = wp_insert_post($presupuesto);

    add_post_meta($id_post, 'nombre', $nombre);
    add_post_meta($id_post, 'email', $email);
    add_post_meta($id_post, 'fecha_evento', $fecha_evento);
    add_post_meta($id_post, 'ubicacion', $ubicacion);
    add_post_meta($id_post, 'tipo_evento', $tipo_evento);
    add_post_meta($id_post, 'detalles', $detalles);
    add_post_meta($id_post, 'detalles', $detalles);


    $cuerpo_email = "<h3>Nuevo Presupuesto</h3>
                    <p>Nombre: <b>{$nombre}</b> </p>     
                    <p>Email: <b>{$email}</b></p>
                    <p>Fecha: <b>{$fecha_evento}</b> </p>                       
                    <p>Ubicacion: <b>{$ubicacion}</b></p>
                    <p>Tipo evento: <b>{$tipo_evento}</b></p>
                    <p>Detalles: <b>{$detalles}</b></p>";

    $asunto = 'Nuevo presupuesto';



    //enviar_email('Formulario de Tips FP INSUMOS', $cuerpo_email, $asunto);
    // wp_mail($tip, $asunto, $message);

    echo json_encode(array('enviado' => TRUE));
    die();
}

/*
 * APLICAR PRESUPUESTO
 */


add_action('wp_ajax_nopriv_aplicar_presupuesto', 'aplicar_presupuesto');
add_action('wp_ajax_aplicar_presupuesto', 'aplicar_presupuesto');

function aplicar_presupuesto() {

    //descarto por CSRF
    if (!check_ajax_referer('aplicar-presupuesto', 'aplicar-code', false)) {
        echo json_encode(array('enviado' => TRUE, 'trucho' => TRUE, 'csrf' => TRUE));
        die();
    }

    $usuario_logueado = wp_get_current_user();
    $id_fotografo = $usuario_logueado->ID;

    $id_presupuesto = intval($_POST['presupuesto']);

    $args = array(
        'author' => $id_fotografo,
        'post_type' => 'fotografos',
        'orderby' => 'post_date',
        'order' => 'ASC',
        'posts_per_page' => 1
    );

    $posts_fotografo = get_posts($args);

    if (!count($posts_fotografo) > 0) {
        wp_redirect(get_permalink($id_presupuesto) . '?aplicacion=false');
    }

    $id_post_fotografo = $posts_fotografo[0]->ID;

    $ids_aplicantes = array();

    $aplicantes = get_field_object('fotografos_aplicaron', $id_presupuesto);


    if ($aplicantes) {

        foreach ($aplicantes as $aplicante) {
            $ids_aplicantes[] = $aplicante->ID;
        }
    }

    if (!in_array($id_post_fotografo, $ids_aplicantes)) {
        $ids_aplicantes[] = $id_post_fotografo;
    }

    $field_key = 'field_5640decccbba7'; //El field key de fotografos_aplicaron

    if (update_field($field_key, $ids_aplicantes, $id_presupuesto)) {
        $msg = '?aplicacion=true';
    } else {
        $msg = '?aplicacion=false';
    }

    wp_redirect(get_permalink($id_presupuesto) . $msg);
}

/*
 * DESAPLICAR PRESU
 */


add_action('wp_ajax_nopriv_desaplicar_presupuesto', 'desaplicar_presupuesto');
add_action('wp_ajax_desaplicar_presupuesto', 'desaplicar_presupuesto');

function desaplicar_presupuesto() {

    //descarto por CSRF
    if (!check_ajax_referer('desaplicar-presupuesto', 'desaplicar-code', false)) {
        echo json_encode(array('enviado' => TRUE, 'trucho' => TRUE, 'csrf' => TRUE));
        die();
    }

    $usuario_logueado = wp_get_current_user();
    $id_fotografo = $usuario_logueado->ID;

    $id_presupuesto = intval($_POST['presupuesto']);

    $args = array(
        'author' => $id_fotografo,
        'post_type' => 'fotografos',
        'orderby' => 'post_date',
        'order' => 'ASC',
        'posts_per_page' => 1
    );

    $posts_fotografo = get_posts($args);

    //si no encuentro el post asociado al user logueado, cancelo
    if (!count($posts_fotografo) > 0) {
        wp_redirect(get_permalink($id_presupuesto) . '?aplicacion=false');
    }

    $id_post_fotografo = $posts_fotografo[0]->ID;

    $ids_aplicantes = array();

    $aplicantes = get_field('fotografos_aplicaron', $id_presupuesto);

    if ($aplicantes) {
        foreach ($aplicantes as $aplicante) {
            $ids_aplicantes[] = $aplicante->ID;
        }

        if (in_array($id_post_fotografo, $ids_aplicantes)) {

            $ids_aplicantes = array_diff($ids_aplicantes, array($id_post_fotografo));
        }

        if (update_field('fotografos_aplicaron', $ids_aplicantes, $id_presupuesto)) {
            $msg = '?aplicacion=true';
        } else {
            $msg = '?aplicacion=false';
        }

        wp_redirect(get_permalink($id_presupuesto) . $msg);
    } else {
        wp_redirect(get_permalink($id_presupuesto) . '?aplicacion=false');
    }



    die();
}
