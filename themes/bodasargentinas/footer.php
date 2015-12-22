<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package BodasArgentinas
 */
?>

</div><!-- #content -->

<footer  role="contentinfo">

    <div class="footer-contenedor">
        <div class="footer-col">

            <a href="<?php echo site_url(); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/img/logo-bodas-argentinas-footer.png" alt="Bodas Argentinas"/>
            </a>
            <p class="info-sitio">
                Red nacional de fotógrafos de bodas que aman la fotografía. Los novios podrán conocer y contactar a los profesionales de todo el país. Recorrer sus perfiles, ver sus trabajos y los servicios que brindan. El objetivo de este sitio es la difusión del trabajo de tan dedicados profesionales y a su vez brindar a los novios un medio de contacto para seleccionar el fotógrafo ideal para su boda.

            </p>
            <p class="terminos">Términos y condiciones: </p>
            <p class="cuentas">
                <a href="">Premium</a> - <a href="">Estandar</a>
            </p>
        </div>

        <div class="footer-col footer-col-menu">
            <h3 class="titulo-menu-footer">NOVIOS</h3>
            <ul class="menu-footer">                
                <li><a href="">· Encuentre Fotógrafo</a></li>
                <li><a href="">· Encuentre Videógrafo</a></li>
                <li><a href="">· Pida Presupuestos de Foto / Video</a></li>
                <li><a href="">· Galería de Fotos</a></li>
                <li><a href="">· Fotógrafos TOP</a></li>
                <li><a href="">· Bodas Reales</a></li>
            </ul>
        </div>
        <div class="footer-col footer-col-menu">
            <h3 class="titulo-menu-footer">FOTÓGRAFOS</h3>
            <ul class="menu-footer">                
                <li><a href="">· Unite a Bodas</a></li>
                <li><a href="">· Beneficios a Miembros</a></li>
                <li><a href="">· Próximo Consurso</a></li>           
            </ul>
            <h3 class="titulo-menu-footer">VIDEÓGRAFOS</h3>
            <ul class="menu-footer">                
                <li><a href="">· Unite a Bodas</a></li>
                <li><a href="">· Beneficios a Miembros</a></li>

            </ul>
        </div>

        <div class="footer-col footer-col-suscribir">
            <h3 class="titulo-menu-footer">SUSCRIBITE </h3>
            <form id="form-suscribir">
                <input type="text" placeholder="Ingresá tu email" name="email"/>
                <button>
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAASCAYAAAC9+TVUAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NTFFNEM1NUIwNjU2MTFFNUIwNDdFMkMzQ0UwQUM3QzkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NTFFNEM1NUMwNjU2MTFFNUIwNDdFMkMzQ0UwQUM3QzkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo1MUU0QzU1OTA2NTYxMUU1QjA0N0UyQzNDRTBBQzdDOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo1MUU0QzU1QTA2NTYxMUU1QjA0N0UyQzNDRTBBQzdDOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PpBV1yQAAAIDSURBVHjaYpyxIpABG9BQdEuyNIjtvXZ378zTV5bU/fv35xcDDsCES4KRkZGJlZWT10DTr9xCP6GTlYWTB5daZp8QTawSb97fPffv379f0uI6zuLCapZcnEISz19fP/L376/vRBsCAi/eXDvy89e3t3KSBp4igopGvDwSis9fXz3058/Pr0QbAgKv3t069fXbu4eyEgYewgLy+gK8MmrPXl879PvP989EGwL22od7Fz5+en5TTsrYW0hATleIT1bz2avrh3//+faJaENA4P2nx9dev7t3WkZczxnkNSDWA4bR4V+/v3xgnL8+XpiLTUCMgeHff0IG/fv397eCjEWAqV5EKzMTK/uLNzcOHzw5JZnx2csr+wT4ZLVBSggZ8v8/w39QemFn4xYCRT9I7O2HBxeYGCgEjKAURQ3vsPz8+ektCBNjq4y4oaueuk8RyIBnr67sPXBqWurnry/usxDrbCVZm1BHs+z5LCzs3I+fn9928PSMjK/fXz8GyRFliKaSW7KNcep0JiZm1odPz2w8dHZm1rfvb5/B5AkaoqPqk2NtlDgJlCXvPj6+6ui5Wbnff3x8hawGryGGmiEVZnqRbSADbt7fP+/4hQWlP399foeujgW3F9xTTHUjWkAGXL61bcLpy0trgfnlCza1LPiS1q/f3z9dv7sHWCgtrcdXKAEEGABJW/NjwKDAtAAAAABJRU5ErkJggg=="/>

                </button>
            </form>

            <h3 class="titulo-menu-footer titulo-menu-footer-contacto">CONTACTO / SEGUINOS </h3>
            <a href="" class="email-contacto">info@bodasargentina.com</a>
            <a href="" class="email-contacto">fotografos@bodasargentina.com</a>
            <div class="redes-sociales">
                <a href="www.facebook.com" target="blank">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QzlEQ0MzMjYwNjU2MTFFNUFFQzU4RkUzOUExQjFBMEQiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QzlEQ0MzMjcwNjU2MTFFNUFFQzU4RkUzOUExQjFBMEQiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpDOURDQzMyNDA2NTYxMUU1QUVDNThGRTM5QTFCMUEwRCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpDOURDQzMyNTA2NTYxMUU1QUVDNThGRTM5QTFCMUEwRCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PhJ12a4AAAHdSURBVHjaYozJKWJQV1G0CfPxalWSlzNnYWFhZ6AB+PPnz897Dx+dXLVlW/XNO/ePMDRPmGzzGyj4n04AZBfIToabd+8d+k9ncOvu/cOMv3///kGr4MUX7IwgFzAMAGChpmG/fv/+fuf+g6Ov3r67D/IROzsbt6aqihM/H58kzSzefeDIhHU7djR9+fr9PbJ4aWbKFj0tPm+aWHz01JkFi9auL8QmB4xIrFHJRBXfHj46DZfc9x8/PtEsju8/enIOxubn4xX3dnYo4eflFWNlZeVUlJc1pYnF37//+Pjv37+/ML6+poabp5NDCSF9FGWnrqmzXIGW/rl66/YBZB/LSUnpwvjOtpaZxnq6QVT18eUbN/egi3389Pnl5U83X8L4TjYW6TRLXPiAiLCwIlXj+NevX994uDkF//7//+/7tx8f4QaysrBzsLFywS0WFFCgehyDwNsPHx4V1DbLw/iu9taZcSFB0wjpo3lQj1o8avGoxTQHFBcgoBLs4rUbW2F8MRFhZXkZaSOaW0x2UIOamvS2FGQn071Hj0/R22Jgi+U006rNW6v+/P37i26+Bdq1cvOWSmZpFc1HN+/ePyQhKqICbCdJMDExsdAqeO88eHh81tKViTfv3DsMEGAAtxmy1xa8SGgAAAAASUVORK5CYII="/>
                </a>
                <a href="pinterest.com" target="blank">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6RDVENjgzQ0YwNjU2MTFFNTk0NzFDRTA1MThEQTg5QkIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6RDVENjgzRDAwNjU2MTFFNTk0NzFDRTA1MThEQTg5QkIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpENUQ2ODNDRDA2NTYxMUU1OTQ3MUNFMDUxOERBODlCQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpENUQ2ODNDRTA2NTYxMUU1OTQ3MUNFMDUxOERBODlCQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Po6yG7UAAAaPSURBVHjanFdpUFNX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"/>
                </a>
            </div>
        </div>
    </div>




</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
