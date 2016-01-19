<?php
/**
 * @package BodasArgentinas
 */
$categorias_concurso = get_field('categorias');
?>

<div class='header-small no-bottom'>
    <div class='container'>

        <div class='col-md-4'>

            <div class='breadcrum-galeria'>Concursos / <span>Participar /  <?php the_title(); ?></span></div>
        </div>

    </div>
</div>

<div class="concurso-single">

    <div class="container">
        <div class="col-md-12">
            <div class="intro-concurso">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
            </div>
        </div>
    </div>

    <?php
    //traigo el post fotografo asociado al usuario logueado

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


    //traigo los participantes del concurso 
    $participantes = get_field_object('fotografos_participantes');

    $ids_participantes = array();

    if ($participantes['value']) {
        foreach ($participantes['value'] as $participante) {
            $ids_participantes[] = $participante->ID;
        }
    }

    $participo = FALSE;
    if (in_array($id_post_fotografo, $ids_participantes)) {
        $participo = TRUE;
    }


    if (!$participo) {
        ?>

        <form id="form-subir-imagenes" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post" enctype='multipart/form-data'>
            <input type="hidden" name="action" value="image_upload"/>
            <div class="concurso-seleccion-fotos">
                <div class="container">


                    <div class="col-md-12">
                        <h3>Selección de Fotos</h3>
                        <h4>
                            Las imágenes deben tener un peso máximo de 300kB.
                        </h4>

                        <?php
                        //traigo posibles errores
                        $error = '';
                        if (isset($_GET['type'])) {
                            $error = 'Sólo se permiten archivos .jpg, .jpeg, .png y .gif.';
                        }
                        if (isset($_GET['size'])) {
                            $error = 'El tamaño máximo de archivo es 300kB';
                        }
                        if (isset($_GET['participo']) && $_GET['participo'] === 'false') {
                            $error = 'Ocurrió un error al participar del concurso';
                        }

                        if ($error !== '') {
                            ?>
                            <div class="error-message">
                                <h4><?php echo $error ?></h4>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                    <div class="col-md-6">
                        <div class="concurso-imagen">
                            <h4>Imagen #1</h4>

                            <div class="concurso-file">
                                <input type="file" name="imagenes[]" id="file1" accept="image/*" class="inputfile" data-multiple-caption="{count} files selected" /> 
                                <label for="file1">Subir archivo</label>
                            </div>

                            <select class="concurso-imagen-categoria" name="cat_imagenes[]">
                                <option value="">Seleccionar Categoría</option>
                                <?php
                                foreach ($categorias_concurso as $cat) {
                                    ?>
                                    <option value="<?php echo $cat->name ?>"><?php echo $cat->name ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="concurso-imagen">
                            <h4>Imagen #2</h4>

                            <div class="concurso-file">
                                <input type="file" name="imagenes[]" id="file2" accept="image/*" class="inputfile" data-multiple-caption="{count} files selected" /> 
                                <label for="file2">Subir archivo</label>
                            </div>

                            <select class="concurso-imagen-categoria" name="cat_imagenes[]">
                                <option value="">Seleccionar Categoría</option>
                                <?php
                                foreach ($categorias_concurso as $cat) {
                                    ?>
                                    <option value="<?php echo $cat->name ?>"><?php echo $cat->name ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="concurso-imagen">
                            <h4>Imagen #3</h4>

                            <div class="concurso-file">
                                <input type="file" name="imagenes[]" id="file3" accept="image/*" class="inputfile" data-multiple-caption="{count} files selected" /> 
                                <label for="file3">Subir archivo</label>
                            </div>

                            <select class="concurso-imagen-categoria" name="cat_imagenes[]">
                                <option value="">Seleccionar Categoría</option>
                                <?php
                                foreach ($categorias_concurso as $cat) {
                                    ?>
                                    <option value="<?php echo $cat->name ?>"><?php echo $cat->name ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="concurso-imagen">
                            <h4>Imagen #4</h4>

                            <div class="concurso-file">
                                <input type="file" name="imagenes[]" id="file4" accept="image/*" class="inputfile" data-multiple-caption="{count} files selected" /> 
                                <label for="file4">Subir archivo</label>
                            </div>

                            <select class="concurso-imagen-categoria" name="cat_imagenes[]">
                                <option value="">Seleccionar Categoría</option>
                                <?php
                                foreach ($categorias_concurso as $cat) {
                                    ?>
                                    <option value="<?php echo $cat->name ?>"><?php echo $cat->name ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="concurso-imagen">
                            <h4>Imagen #5</h4>

                            <div class="concurso-file">
                                <input type="file" name="imagenes[]" id="file5" accept="image/*" class="inputfile" data-multiple-caption="{count} files selected" /> 
                                <label for="file5">Subir archivo</label>
                            </div>

                            <select class="concurso-imagen-categoria" name="cat_imagenes[]">
                                <option value="">Seleccionar Categoría</option>
                                <?php
                                foreach ($categorias_concurso as $cat) {
                                    ?>
                                    <option value="<?php echo $cat->name ?>"><?php echo $cat->name ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="concurso-imagen">
                            <h4>Imagen #6</h4>

                            <div class="concurso-file">
                                <input type="file" name="imagenes[]" id="file6" accept="image/*" class="inputfile" data-multiple-caption="{count} files selected" /> 
                                <label for="file6">Subir archivo</label>
                            </div>

                            <select class="concurso-imagen-categoria" name="cat_imagenes[]">
                                <option value="">Seleccionar Categoría</option>
                                <?php
                                foreach ($categorias_concurso as $cat) {
                                    ?>
                                    <option value="<?php echo $cat->name ?>"><?php echo $cat->name ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="concurso-imagen">
                            <h4>Imagen #7</h4>

                            <div class="concurso-file">
                                <input type="file" name="imagenes[]" id="file7" accept="image/*" class="inputfile" data-multiple-caption="{count} files selected" /> 
                                <label for="file7">Subir archivo</label>
                            </div>

                            <select class="concurso-imagen-categoria" name="cat_imagenes[]">
                                <option value="">Seleccionar Categoría</option>
                                <?php
                                foreach ($categorias_concurso as $cat) {
                                    ?>
                                    <option value="<?php echo $cat->name ?>"><?php echo $cat->name ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="concurso-imagen">
                            <h4>Imagen #8</h4>

                            <div class="concurso-file">
                                <input type="file" name="imagenes[]" id="file8" accept="image/*" class="inputfile" data-multiple-caption="{count} files selected" /> 
                                <label for="file8">Subir archivo</label>
                            </div>

                            <select class="concurso-imagen-categoria" name="cat_imagenes[]">
                                <option value="">Seleccionar Categoría</option>
                                <?php
                                foreach ($categorias_concurso as $cat) {
                                    ?>
                                    <option value="<?php echo $cat->name ?>"><?php echo $cat->name ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="concurso-imagen">
                            <h4>Imagen #9</h4>

                            <div class="concurso-file">
                                <input type="file" name="imagenes[]" id="file9" accept="image/*" class="inputfile" data-multiple-caption="{count} files selected" /> 
                                <label for="file9">Subir archivo</label>
                            </div>

                            <select class="concurso-imagen-categoria" name="cat_imagenes[]">
                                <option value="">Seleccionar Categoría</option>
                                <?php
                                foreach ($categorias_concurso as $cat) {
                                    ?>
                                    <option value="<?php echo $cat->name ?>"><?php echo $cat->name ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="concurso-imagen">
                            <h4>Imagen #10</h4>

                            <div class="concurso-file">
                                <input type="file" name="imagenes[]" id="file10" accept="image/*" class="inputfile" data-multiple-caption="{count} files selected" /> 
                                <label for="file10">Subir archivo</label>
                            </div>

                            <select class="concurso-imagen-categoria" name="cat_imagenes[]">
                                <option value="">Seleccionar Categoría</option>
                                <?php
                                foreach ($categorias_concurso as $cat) {
                                    ?>
                                    <option value="<?php echo $cat->name ?>"><?php echo $cat->name ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                    </div>
                    <div class="col-md-12 text-center">
                        <button id="enviar-imagenes">Enviar Fotos</button>
                    </div>
                </div>
            </div>

        </form>


        <?php
    } else {

        //datos de usuario logueado

        global $current_user;
        get_currentuserinfo();

        //traigo las url de las imagenes

        $url_upload = rtrim(ABSPATH, '/') . DIRECTORY_SEPARATOR . 'wp-content' . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR . 'contest' . DIRECTORY_SEPARATOR . $post->post_name . DIRECTORY_SEPARATOR;

        $imagenes = array();


        $url_imagen = $url_upload . '*--' . $current_user->user_email . '--' . $current_user->user_firstname
                . '--' . $current_user->user_lastname . '--*';


        $lista = glob($url_imagen);

        if (count($lista) > 0) {
            ?>

            <div id="ya-participo">
                <div class="container">
                    <div class="col-md-12">
                        <h3>Ya estás participando del concurso ! </h3>
                        <h4>Estas son tus imagenes subidas</h4>

                        <?php
                        foreach ($lista as $img) {

                            $nombre_imagen = pathinfo($img, PATHINFO_FILENAME);
                            $extension_imagen = pathinfo($img, PATHINFO_EXTENSION);

                            $carpeta = get_site_url() . '/wp-content/uploads/contest/' . $post->post_name . '/';

                            array_push($imagenes, $carpeta . $nombre_imagen . '.' . $extension_imagen);
                        }


                        foreach ($imagenes as $url) {
                            ?>

                            <div class="imagen-concurso">
                                <img src="<?php echo $url; ?>" />
                            </div>

                            <?php
                        }
                    } else {
                        ?>
                        <h2>Ocurrio un error al recuperar tus imagenes</h2>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    <?php } ?>
</div>