<?php

/**
 * Template Name: Home Page
 */

?>

<?php get_header();?>
<!-- Banner -->
<div class="hero-banner">
    HERO BANNER
</div><!-- Banner -->

<!-- Filtros -->
<div class="filter-container">
    <div class="filter-title">
        Encuentra el departamento
        <div class="focus">
            que estabas buscando.
        </div>
    </div>

    <!-- Filters -->
    <div class="filters">
        <!-- col -->
        <div class="col">
            <div class="filter-cont">
                <div class="value">Ubicación </div>
                <ul>
                    <li>Test 1</li>
                    <li>Test 2</li>
                    <li>Test 3</li>
                </ul>
            </div>
        </div> <!-- col -->

        <!-- col -->
        <div class="col">
            <div class="filter-cont">
                <div class="value">Nº de recamaras </div>
                <ul>
                    <li>Test 1</li>
                    <li>Test 2</li>
                    <li>Test 3</li>
                </ul>
            </div>
        </div> <!-- col -->
    </div><!-- Filters -->
    <!-- Filters -->
    <div class="filters">
        <!-- col -->

        <div class="col">
            <div class="filter-cont">
                <div class="value">Baños </div>
                <ul>
                    <li>Test 1</li>
                    <li>Test 2</li>
                    <li>Test 3</li>
                </ul>
            </div>
        </div> <!-- col -->

        <!-- col -->
        <div class="col">
            <div class="filter-cont">
                <div class="value">rango de precios </div>

                <ul>
                    <li>Test 1</li>
                    <li>Test 2</li>
                    <li>Test 3</li>
                </ul>
            </div>
        </div> <!-- col -->

    </div><!-- Filters -->

    <!-- Busqueda avanzada -->
    <div class="advanced-search">
        <div class="title">
            Busqueda avanzada
            <div class="little-arrow"></div>
        </div>
    </div> <!-- Busqueda avanzada -->

    <!-- Boton buscar -->
    <div class="filter-submit">
        <div class="submit">Buscar</div>
    </div><!-- Boton buscar -->

</div><!-- Filtros -->



<!-- Contacto -->
<div class="contact-container">
    <div class="container">
        <div class="col">
            <div class="title" data-text="Contáctanos">Contáctanos</div>
            <div class="text">Si requiere ponerse en contacto con nosotros, le ofrecemos diferentes medios para que pueda hacerlo, utilice el que más le convenga y con mucho gusto le atenderemos.</div>

            <div class="form">
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" name="NOMBRE" id="NOMBRE" placeholder="NOMBRE">
                    </div>

                    <div class="form-group">
                        <input type="text" name="EMAIL" id="EMAIL" placeholder="EMAIL">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" name="TELÉFONO" id="TELÉFONO" placeholder="TELÉFONO">
                    </div>

                    <div class="form-group">
                        <div class="select-cont">
                            <div class="value">MOTIVO </div>
                            <ul>
                                <li>Información de desarrollos residenciales</li>
                                <li>Ofrecer producto/servicio</li>
                                <li>Otro</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <textarea name="" id="" cols="30" rows="10" placeholder="MENSAJE"></textarea>
                </div>
                <div class="form-row">
                    <input type="submit" value="Enviar">
                </div>
            </div>
        </div>
        <div class="col">
            <div class="content">
                <div class="row">
                    <div class="column">
                        <img src="<?php echo get_template_directory_uri().'/img/PIN.png'?>" alt="">
                    </div>
                    <div class="column">
                        Ferrocarril De Cuernavaca 76, Piso 4, Col. Lomas De Chapultepec,
                        Delegación Miguel Hidalgo C.P. 11000, CDMX.

                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <img src="<?php echo get_template_directory_uri().'/img/mail.png'?>" alt="">
                    </div>
                    <div class="column">
                        <a href="mailto:ventas@genesiscapital.mx" target="_top">
                            ventas@genesiscapital.mx
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="column">
                        <img src="<?php echo get_template_directory_uri().'/img/phone.png'?>" alt="">
                    </div>
                    <div class="column">
                        <a href="tel:01 800 0910 800" target="_top">01 800 0910 800</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contacto -->
<?php get_footer();?>
