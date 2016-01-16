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

    <form id="form-subir-imagenes" action="#" method="post">
        <div class="concurso-seleccion-fotos">
            <div class="container">
                <div class="col-md-12">
                    <h3>Selección de Fotos</h3>
                    <h4>
                        Las imágenes deben tener un peso máximo de 250kb.
                    </h4>
                </div>
                <div class="col-md-6">
                    <div class="concurso-imagen">
                        <h4>Imagen #1</h4>

                        <div class="concurso-file">
                            <input type="file" name="file" id="file" class="inputfile" />
                            <label for="file">Subir archivo</label>
                        </div>



                        <select class="concurso-imagen-categoria">
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
                <div class="col-md-6"></div>
            </div>
        </div>
    </form>
</div>