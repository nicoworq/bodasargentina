
<?php
$taxonomies = array(
    'categoria-galerias',
);

$args = array(
    'hide_empty' => false,
);



if (is_single()) {
    $terms = wp_get_post_terms(get_the_ID(), 'categoria-galerias');

    $taxonomiaActual = $terms[0];
} else {
    $taxonomiaActual = $wp_query->queried_object;
}

$categoriasGaleria = get_terms($taxonomies, $args);
?>
<div id="sidebar-galerias">
    <h3>Categorías</h3>
    <ul id='navegacion-categoria-galeria'>
        <?php
        foreach ($categoriasGaleria as $cat) {

            $class = '';
            if ($taxonomiaActual->slug === $cat->slug) {
                $class = 'active';
            }
            ?>
            <li>  
                <a class='<?php echo $class; ?>' href="<?php echo get_term_link($cat->term_id, 'categoria-galerias'); ?>">
                    <?php echo $cat->name; ?>
                </a>
            </li>
            <?php
        }
        ?>
    </ul>
</div>