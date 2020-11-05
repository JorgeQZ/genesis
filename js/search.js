$ = jQuery;
var d_search_form_cont = $('#GNS_search');
var d_search_form = $('#GNS_search').find("form");
var data_global;
var class_ = 'Departamento';

// Departamento Casa
$('.search_tab-option').click(function (e) {
    e.preventDefault();
    $('.search_tab-option').removeClass('active');
    $(this).addClass('active');
    class_ = $(this).attr('data-value');
    writeResultsScreen(data_global, class_);
});

// Boton que despliega los botone spara ordenar
$('#order-filter').on('click', function (e) {
    e.preventDefault();

    $('.order-options').slideDown();
    return 0;
});

d_search_form.submit(function (e) {
    e.preventDefault();

    if (validate_fields()) {
        // Requeridos
        let data = GetData();
        $.ajax({
            url: ajax_url,
            data: data,
            success: function (response) {


                if (response != '') {

                    // $('#order-filter').show();
                    // Retornando 'response' como un arraya asiosiativo
                    //Ya configurado como un cluster de desarrollos (Proyectos)
                    let desarrollos_data = clustering_depts(response);
                    data_global = desarrollos_data;
                    $('.results-container').fadeIn(750);
                    // Imprimir resultados en pantalla
                    writeResultsScreen(desarrollos_data);

                } else {
                    $('#order-filter').hide();
                    $("#column-results").empty();

                    var html = "<div><h1>Sin resultados</h1> <p>Ningún resultado arrojado por la búsqueda, intenta con otras opciones.</p><div>";
                    $("#column-results").append(html);
                }
            }
        });
    }

    return false;
});

function GetData() {
    let ubicacion = $('#ubicacion').val();
    let recamaras = $('#recamaras').val();
    let banos = $('#banos').val();
    let precios = $('#precios').val();

    // amenidades
    let alberca = $('#alberca').prop('checked');
    let estacionamiento = $('#estacionamiento').prop('checked');
    let vigilancia = $('#vigilancia').prop('checked');
    let gym = $('#gym').prop('checked');
    let areasverdes = $('#areasverdes').prop('checked');
    let petfriendly = $('#petfriendly').prop('checked');
    let data = {
        action: "js_department_search",
        ubicacion: ubicacion,
        recamaras: recamaras,
        banos: banos,
        precios: precios,
        alberca: alberca,
        estacionamiento: estacionamiento,
        vigilancia: vigilancia,
        gym: gym,
        areasverdes: areasverdes,
        petfriendly: petfriendly
    };
    return data;
}

function sort_highest(a, b) {
    return b.max_price - a.max_price
}

function sort_lowest(a, b) {
    return a.min_price - b.min_price
}

function clustering_depts(depts) {
    // Cluster donde se almacenarán los departamentos ya divididos por desarrollo
    clustered_data = [];

    // Obteniendo los slugs unicos de cada desarrollo
    cluster_indexes = depts.map(item => item.desarrollo_slug).filter((value, index, self) => self.indexOf(value) === index);

    // Recorrido de indices como DESARROLLOS
    var aux = 0;
    cluster_indexes.forEach(
        cluster_index => {
            clustered_data.push({
                'desarrollo': cluster_index,
                'departamentos': [],
                'logo': '',
                'address': '',
                'min_price': 0,
                'max_price': 0
            });

            // Recorrido de departamentos para ingresarlos al cluster
            // Correspondiente a su DESARROLLO
            depts.forEach(
                element_depts => {
                    if (cluster_index == element_depts.desarrollo_slug) {

                        clustered_data[aux]['departamentos'].push({
                            'permalink': element_depts.permalink,
                            'unidades': element_depts.unidades,
                            'precio': element_depts.precio
                        });

                        // Datos generales
                        clustered_data[aux]['logo'] = element_depts.desarrollo_logo;
                        clustered_data[aux]['address'] = element_depts.desarrollo_address;
                        clustered_data[aux]['image'] = element_depts.desarrollo_image;
                        clustered_data[aux]['name'] = element_depts.desarrollo_name;
                        clustered_data[aux]['slug'] = element_depts.desarrollo_slug;
                        clustered_data[aux]['clase'] = element_depts.clase;

                        // // Asignacion del minimo precio de departamentos
                        if (clustered_data[aux]['min_price'] == 0 || clustered_data[aux]['min_price'] > element_depts.precio) {
                            clustered_data[aux]['min_price'] = element_depts.precio;
                        }

                        // Asignacion del maximo precio de departamentos
                        if (clustered_data[aux]['max_price'] < element_depts.precio) {
                            clustered_data[aux]['max_price'] = element_depts.precio;
                        }
                    }
                }
            );

            aux = aux + 1;
        }
    );

    return clustered_data;
}

function writeResultsScreen(departments, class_ = 'Departamento') {

    // Limpia de la pantalla de resultados
    $("#column-results").empty();

    // Bucle de DESARROLLOS
    var class_objts = 0;
    for (var departament in departments) {
        let d_clase = departments[departament]['clase'];
        if (departments.hasOwnProperty(departament) && d_clase == class_) {
            class_objts = class_objts + 1;

            let d_nombre = departments[departament]['name'];
            let d_address = departments[departament]['address'];
            let d_image = departments[departament]['image'];
            let d_logo = departments[departament]['logo'];

            // console.log(d_address);
            var item_html = '';
            item_html += "<div class='item'>";
            item_html += "<div class='col'><img src='" + d_image + "' alt='' class='dept-img'></div>";
            item_html += "    <div class='col'>";
            item_html += "        <img src='" + d_logo + "'  alt='' class='logo'>";
            item_html += "        <div class='address'>";
            item_html += "            <img src='http://localhost:8888/genesis/wp-content/themes/genesis/img/pin-aqua.png'  alt='' class='pin'>";
            item_html += "            <div class='text'>" + d_address + "</div>";
            item_html += "        </div>";
            item_html += "        <div class='title'>" + d_nombre + "</div>";
            // Bucle de departamentos
            for (var number_key in departments[departament]['departamentos']) {
                let dep_string = '';
                let unities = departments[departament]['departamentos'][number_key].unidades;
                let price = formatNumber(departments[departament]['departamentos'][number_key].precio);
                let link = departments[departament]['departamentos'][number_key].permalink;
                if (unities > 1) {
                    dep_string = 'Departamentos';
                }
                else {
                    dep_string = 'Departamento';
                }
                item_html += "        <div class='price-dept'>";
                item_html += "            <div class='price'> " + unities + ' ' + dep_string + " desde <span>$" + price + " </span> </div>";
                item_html += "            <a href='" + link + "' class='link'>ver</a>";
                item_html += "        </div>";
                item_html += "        <hr>";
            }

            // Fin de bulce de departamentos
            item_html += "    </div>";
            item_html += "</div>";
            // $("#column-results").append(item_html);
            $(item_html).hide().appendTo('#column-results').fadeIn(750);
        }
    }

    if (class_objts == 0) {
        var html = "<div><h1>Sin resultados</h1> <p>Ningún resultado para <strong>" + class_ + "s</strong> arrojado por la búsqueda, intenta con otras opciones.</p><div>";
        $("#column-results").append(html);
    }
}

function validate_fields() {
    var data = $('#GNS_search').find("form").serializeArray();
    let aux_empty_fields = 0;
    data.forEach(function (element, index) {
        if (element.value === "") {
            $('#' + element.name).css({
                'border-color': 'red',
                'box-shadow': '0 0 12px red'
            });
            aux_empty_fields++;
        }
    });

    if (aux_empty_fields >= 1) {
        return false;
    } else {
        return true;
    }
}

// Formato de miles en numeros
function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}


// Orden de menor a mayor ** Primero se imprime el mayor y consecuente
function Sort_to_Hight() {
    if (data_global) {
        const toSortHighest = [...data_global];
        writeResultsScreen(toSortHighest.sort(sort_highest), class_);
    }

    $('.order-options').slideUp();
}

// Orden de mayor a mejor ** Primero se imprime el menor y consecuente
function Sort_to_Low() {
    if (data_global) {
        const toSortLowest = [...data_global];
        writeResultsScreen(toSortLowest.sort(sort_lowest), class_);
    }

    $('.order-options').slideUp();
}
