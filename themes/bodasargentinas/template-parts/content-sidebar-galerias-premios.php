
<?php
$taxonomies = array(
    'premio-galerias',
);

$args = array(
    'hide_empty' => false,
);



if (is_single()) {
    $terms = wp_get_post_terms(get_the_ID(), 'premio-galerias');

    $taxonomiaActual = $terms[0];
} else {
    $taxonomiaActual = $wp_query->queried_object;
}

$categoriasGaleria = get_terms($taxonomies, $args);
?>
<div id="sidebar-galerias">
    <h3>Premios</h3>
    <ul id='navegacion-categoria-galeria'>
        <?php
        foreach ($categoriasGaleria as $cat) {

            $class = '';
            if ($taxonomiaActual->slug === $cat->slug) {
                $class = 'active';
            }
            ?>
            <li>  
                <a class='<?php echo $class; ?>' href="<?php echo get_term_link($cat->term_id, 'premio-galerias'); ?>">
                    <?php echo $cat->name; ?>
                </a>
            </li>
            <?php
        }
        ?>
    </ul>
</div>