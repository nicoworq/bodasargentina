<?php
/*
  Template Name: Template Registro premium
 */

get_header();
?>

<section id="registro-premium">
    <div class="header-listado">
        <div class="container">
            <div class="header-listado-contenido">
                <div class="header-listado-titulos">
                    <h3>FOTÓGRAFOS & VIDEÓGRAFOS</h3>
                    <h2>REGISTRO ESTANDAR</h2>
                </div>
                <div class="header-action-bar">
                    <form id="form-buscar">
                        <input type="text" placeholder="Buscar"/>
                        <button>
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RDJDM0Q3Q0QwNkRGMTFFNTg1MEJDOEI0OEY4MTVCRTYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RDJDM0Q3Q0UwNkRGMTFFNTg1MEJDOEI0OEY4MTVCRTYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpEMkMzRDdDQjA2REYxMUU1ODUwQkM4QjQ4RjgxNUJFNiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpEMkMzRDdDQzA2REYxMUU1ODUwQkM4QjQ4RjgxNUJFNiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ppt9MsAAAAGISURBVHjanJM/KIRhGMDf75Jz4q6QTJdN+VeswkApRLFdkdhcl5FFpsuxyiAGy4lBMVwiwomFTUa3ITZuoEvxe/S8+uhz5Klfz3v3Pn/e58/nGJdERqIlqHEYhAYIwAOkYXltdXHPfBPH5dyG2oBy2IEzeIQw9EMtbMMwgZ6+BFDnfbgQA7jB6NkVXOwisARX0M79i9z59Nnr6twBo3DufibGb5Dk2AVNELd3Pq25AoZgWp/cbDyEIKeoeYiSuNIGGIAU3EIfjGGYMz/LAhRCr/wogEbY1Jrr8zhKL4LY3aMz2tSPFwS023+RE5z96CyEbACZc/VvnpIdVQw57dOdDXAsc9ZR5ZMZkEm0QBkc2R6swK7OOemROaTOMplubfi1bufnIm2hOmXOOir5rxQl5yKZoI4vATGZAHYpW4LRHbiEQxzjUIVBVrPWwIFmjql9q9e34NcNi4KcM9rtsNYsz55Q50mYI8mU41GzbFgP1EFQuy2NTuPwqjYJDTLrmH+KlCqfwbsAAwAT6HyeylWjqQAAAABJRU5ErkJggg=="/>
                        </button>
                    </form>                
                </div>
            </div>
        </div>

    </div>

    <div class="container">



        <div class="contenido-registro">


            <div class="col-md-5">
                <div id="form-registro">

                    <?php echo do_shortcode('[contact-form-7 id="212" title="Registro Estandar"]'); ?>

                </div>
            </div>
            <div class="col-md-7">
                <div class="texto-registro">
                    <?php
                    $page = get_page_by_title('Registro Estandar');
                    echo $page->post_content;
                    ?>
                </div>
            </div>




        </div>


    </div>


</section>

<?php get_footer(); ?>