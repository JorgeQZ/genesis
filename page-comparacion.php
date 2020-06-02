<?php
/* Template Name: Búsqueda Avanzada
*
*/
get_header(); ?>

<!-- Filtros -->
<div class="advanced-search-container">
    <div class="filter-container">
        <div class="filter-title">
            Busca tu
            <div class="focus">
                departamento
            </div>
        </div>

        <!-- FORM -->
        <form action="">
            <!-- Filters -->
            <div class="filters">
                <!-- col -->
                <div class="col">
                    <div class="filter-cont">
                        <!-- <div class="value">Ubicación </div> -->
                        <input type="text" class="value" placeholder="Ubicación" readonly name="ubicacion" id="ubicacion">
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
                        <!-- <div class="value">Nº de recamaras </div> -->
                        <input type="text" class="value" placeholder="Nº de recamaras" readonly name="recamaras" id="recamaras">

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
                        <!-- <div class="value">Baños </div> -->
                        <input type="text" class="value" placeholder="Baños" readonly name="banos" id="banos">

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
                        <!-- <div class="value">rango de precios </div> -->
                        <input type="text" class="value" placeholder="Rango de precios" readonly name="precios" id="precios">

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
            </div>

            <div class="advanced-search-options">

                <div class="form-checkbox">
                    <input type="checkbox" name="alberca" id="alberca">
                    <label for="alberca">
                        ALBERCA
                    </label>
                </div>

                <div class="form-checkbox">
                    <input type="checkbox" name="estacionamiento" id="estacionamiento">
                    <label for="estacionamiento">
                        estacionamiento
                    </label>
                </div>

                <div class="form-checkbox">
                    <input type="checkbox" name="vigilancia" id="vigilancia">
                    <label for="vigilancia">
                        vigilancia
                    </label>
                </div>
            </div>

            <div class="advanced-search-options">

                <div class="form-checkbox">
                    <input type="checkbox" name="gym" id="gym">
                    <label for="gym">
                        gym
                    </label>
                </div>

                <div class="form-checkbox">
                    <input type="checkbox" name="areasverdes" id="areasverdes">
                    <label for="areasverdes">
                        áreas verdes
                    </label>
                </div>

                <div class="form-checkbox">
                    <input type="checkbox" name="petfriendly" id="petfriendly">
                    <label for="petfriendly">
                        pet friendly
                    </label>
                </div>
            </div>
            <!-- Busqueda avanzada -->

            <!-- Boton buscar -->
            <div class="filter-submit">
                <div class="submit-cont">
                    <input type="submit" value="Buscar">
                </div>
            </div><!-- Boton buscar -->
        </form>
        <!-- FORM -->

    </div>
</div><!-- Filtros -->

<?php
get_template_part('template-parts/contact');
get_footer(); ?>