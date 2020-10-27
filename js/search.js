$ = jQuery;
var d_search_form_cont = $('#GNS_search');
var d_search_form = $('#GNS_search').find("form");
var templateUrl = '<?= get_bloginfo("template_url"); ?>';
depts = [
    {
        id: 120,
        name: "Bologna 2",
        permalink: "http://localhost:8888/genesis/departamento/bologna-2-2/",
        desarrollo: "Bolognia",
        desarrollo_slug: "bolognia"
    },
    {
        id: 119,
        name: "Bologna 1",
        permalink: "http://localhost:8888/genesis/departamento/bologna-1-2/",
        desarrollo: "Bolognia",
        desarrollo_slug: "bolognia"
    },
    {
        id: 118,
        name: "Bologna 2",
        permalink: "http://localhost:8888/genesis/departamento/bologna-2-3/",
        desarrollo: "Bolognia",
        desarrollo_slug: "bolognia"
    },
    {
        id: 64,
        name: "Bologna 2",
        permalink: "http://localhost:8888/genesis/departamento/bologna-2/",
        desarrollo: "Bolognia",
        desarrollo_slug: "bolognia"
    },
    {
        id: 62,
        name: "Bologna 1",
        permalink: "http://localhost:8888/genesis/departamento/bologna-1/",
        desarrollo: "Bolognia",
        desarrollo_slug: "bolognia"
    },
    {
        id: 35,
        name: "Ancora",
        permalink: "http://localhost:8888/genesis/departamento/ancora/",
        desarrollo: "ANCORA",
        desarrollo_slug: "ancora"
    }
];

d_search_form.submit(function (e) {
    e.preventDefault();



    if (validate_fields()) {

        // Requeridos
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
        }

        $.ajax({
            url: ajax_url,
            data: data,
            success: function (response) {
                $(".results").empty();
                $("#column-results").empty();
                if (response != '') {
                    let departments = clustering_depts(response);

                    // Bucle de DESARROLLO

                    for (var departament in departments) {
                        if (departments.hasOwnProperty(departament)) {
                            let d_nombre = departments[departament][0].desarrollo_name;
                            let d_address = departments[departament][0].desarrollo_address;
                            let d_image = departments[departament][0].desarrollo_image;
                            let d_logo = departments[departament][0].desarrollo_logo;


                            var item_html = '';
                            item_html += "<div class='item'>";
                            item_html += "<div class='col'><img src='" + d_image + "' alt='' class='dept-img'></div>";
                            item_html += "    <div class='col'>";
                            item_html += "        <img src='" + d_logo + "'  alt='' class='logo'>";
                            item_html += "        <div class='address'>";
                            item_html += "            <img src='" + templateUrl + "/img/pin-aqua.png'  alt='' class='pin'>";
                            item_html += "            <div class='text'>" + d_address + "</div>";
                            item_html += "        </div>";
                            item_html += "        <div class='title'>" + d_nombre + "</div>";

                            // Bucle de departamentos
                            for (var number_key in departments[departament]) {

                                let dep_string = 'Departamento';

                                let unities = departments[departament][number_key].unidades;
                                let precio = formatNumber(departments[departament][number_key].precio);
                                let link = departments[departament][number_key].permalink;

                                if (unities >= 1) {
                                    dep_string = 'Departamentos'
                                }

                                item_html += "        <div class='price-dept'>";
                                item_html += "            <div class='price'> " + unities + ' ' + dep_string + " desde <span>$" + precio + " </span> </div>";
                                item_html += "            <a href='" + link + "' class='link'>ver</a>";
                                item_html += "        </div>";
                                item_html += "        <hr>";
                            }
                            // Fin de bulce de departamentos

                            item_html += "    </div>";
                            item_html += "</div>";
                            $("#column-results").append(item_html);
                        }
                    }

                } else {
                    var html = "<li class='no-result'>No matching movies found. Try a different filter or search keyword</li>";
                    $(".results").append(html);
                }
            }
        });
    }

    return false;
});


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


function clustering_depts(depts) {
    // Cluster donde se almacenarán los departamentos ya divididos por desarrollo
    clustered_data = [];

    // Obteniendo los slugs unicos de cada desarrollo
    cluster_indexes = depts.map(item => item.desarrollo_slug).filter((value, index, self) => self.indexOf(value) === index);

    // Recorrido de indices como DESARROLLOS
    cluster_indexes.forEach(
        cluster_index => {
            clustered_data[cluster_index] = [];

            // Recorrido de departamentos para ingresarlos al cluster
            // Correspondiente a su DESARROLLO
            depts.forEach(
                element_depts => {
                    if (cluster_index == element_depts.desarrollo_slug) {
                        clustered_data[cluster_index].push(element_depts);
                    }
                }
            );
        }
    );

    return clustered_data;
}

// Formato de miles en numeros
function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}
