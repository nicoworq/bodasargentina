<?php

function contest_image_upload() {

    if (isset($_FILES['imagenes'])) {


        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        // traigo el concurso activo
        $concursos = get_posts(array(
            'numberposts' => 1,
            'post_type' => 'concursos',
            'meta_key' => 'activo',
            'meta_value' => true
        ));


        $url_upload = rtrim(ABSPATH, '/') . DIRECTORY_SEPARATOR . 'wp-content' . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'contest' . DIRECTORY_SEPARATOR;


        // creo el directorio del concurso
        if (!is_dir($url_upload . $concursos[0]->post_name)) {
            mkdir($url_upload . $concursos[0]->post_name);
        }


        define("UPLOAD_DIR", $url_upload . $concursos[0]->post_name . DIRECTORY_SEPARATOR);


        //traigo datos del usuario logueado
        global $current_user;
        get_currentuserinfo();


        $categorias = $_POST['cat_imagenes'];

        $name_array = $_FILES['imagenes']['name'];
        $tmp_name_array = $_FILES['imagenes']['tmp_name'];
        $type_array = $_FILES['imagenes']['type'];
        $size_array = $_FILES['imagenes']['size'];
        $error_array = $_FILES['imagenes']['error'];

      
        //limit tamaño

        foreach ($size_array as $size) {
            if (intval($size) > 300000) {
                wp_redirect(get_permalink($concursos[0]->ID) . '?size=error');
            }
        }

        //limit img

        $permit = array('image/jpeg', 'image/gif', 'image/jpg', 'image/png');

        foreach ($type_array as $type) {
            var_dump($type);
            if ($type !== '' && !in_array($type, $permit)) {
                echo '!in array';
                wp_redirect(get_permalink($concursos[0]->ID) . '?type=error');
                return false;
            }
           
        }

       

        //loopeo por las imagenes 

        $uploadOK = FALSE;

        for ($i = 0; $i < count($tmp_name_array); $i++) {

            if ($name_array[$i] !== '') {

                $name = $categorias[$i] . '--' . $current_user->user_email . '--' . $current_user->user_firstname
                        . '--' . $current_user->user_lastname . '--' . $i . '.' . pathinfo($name_array[$i], PATHINFO_EXTENSION);

                if (move_uploaded_file($tmp_name_array[$i], UPLOAD_DIR . $name)) {
                    $uploadOK = TRUE;
                } else {
                    $uploadOK = FALSE;
                }
            }
        }


        if ($uploadOK) {

            $usuario_logueado = wp_get_current_user();
            $id_fotografo = $usuario_logueado->ID;


            $args = array(
                'author' => $id_fotografo,
                'post_type' => 'fotografos',
                'orderby' => 'post_date',
                'order' => 'ASC',
                'posts_per_page' => 1
            );

            $posts_fotografo = get_posts($args);
            $id_post_fotografo = $posts_fotografo[0]->ID;
            $participantes = get_field_object('fotografos_participantes', $concursos[0]->ID);

            $ids_participantes = array();

            if ($participantes['value']) {
                foreach ($participantes['value'] as $participante) {
                    $ids_participantes[] = $participante->ID;
                }
            }

            if (!in_array($id_post_fotografo, $ids_participantes)) {
                $ids_participantes[] = $id_post_fotografo;
            }

            $field_key = 'field_569e8df1fec37'; //El field key de fotografos_participantes

            if (update_field($field_key, $ids_participantes, $concursos[0]->ID)) {
                $msg = '?participo=true';
            } else {
                $msg = '?participo=false';
            }

            wp_redirect(get_permalink($concursos[0]->ID) . $msg);
        }
    } else {
        echo 'No Files';
    }
}

function upload_error() {

    if (empty($_FILES) && empty($_POST) && isset($_SERVER['REQUEST_METHOD']) && strtolower($_SERVER['REQUEST_METHOD']) == 'post') {
        $postMax = ini_get('post_max_size');


        echo "<p>Ocurrio un error. <br/> Por favor revisa que las imagenes no superen los {$postMax} </p>";
    }
}

add_action('admin_post', 'upload_error');
add_action('admin_post_', 'upload_error');
add_action('admin_post_image_upload', 'contest_image_upload');
add_action('admin_post_no_priv_image_upload', 'contest_image_upload');
