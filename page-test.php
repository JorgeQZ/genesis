<?php
/**
 * Template Name: Test
 * Description: Just trying new code
 */
?>
<?php get_header(); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<script>
var model = [{
        address: "Av. Cvln. Jorge Alvarez del Castillo 1433,<br /> Country Club, Guadalajara",
        clase: "Casa",
        departamentos: [{
                permalink: "http://localhost:8888/genesis/departamento/montalva-ambar/",
                unidades: "1",
                precio: "2486000"
            },
            {
                permalink: "http://localhost:8888/genesis/departamento/montalva-granate/",
                unidades: "1",
                precio: "2486000",
            },
            {
                permalink: "http://localhost:8888/genesis/departamento/montalva-jade/",
                unidades: "1",
                precio: "2486000",
            }
        ],
        desarrollo: "montalva",
        image: "http://localhost:8888/genesis/wp-content/uploads/2020/10/dept-montalva-528x560.png",
        logo: "http://localhost:8888/genesis/wp-content/uploads/2020/10/dept-logo-montalva.png",
        max_price: "2486000",
        min_price: "2486000",
        name: "Essentia Country",
        slug: "montalva",
    },
    {
        address: "Cto. Bosques de Bolognia 163,<br /> Cuautitln Izcalli.",
        clase: "Departamento",
        departamentos: [{
            permalink: "http://localhost:8888/genesis/departamento/bolognia-a/",
            unidades: "1",
            precio: "4084000"
        }],
        desarrollo: "bolognia",
        image: "http://localhost:8888/genesis/wp-content/uploads/2020/10/dept-bologna.png",
        logo: "http://localhost:8888/genesis/wp-content/uploads/2020/10/dept-logo-bolognia.png",
        max_price: "4084000",
        min_price: "4084000",
        name: "Bolognia Residencial",
        slug: "bolognia",
    },
    {
        address: "Av. de Cristo 101, Xocoyahualco 54080, <br />Tlalnepantla Edo. Méx.<br />",
        clase: "Departamento",
        departamentos: [{
                permalink: "http://localhost:8888/genesis/departamento/ancora-e/",
                unidades: "1",
                precio: "7912052"
            },
            {
                permalink: "http://localhost:8888/genesis/departamento/ancora-b/",
                precio: "5228662",
                unidades: "1"
            },
            {
                permalink: "http://localhost:8888/genesis/departamento/ancora-a/",
                precio: "5107546",
                unidades: "1"
            }
        ],
        desarrollo: "ancora",
        image: "http://localhost:8888/genesis/wp-content/uploads/2020/10/dept-img.jpg",
        logo: "http://localhost:8888/genesis/wp-content/uploads/2020/10/dept-logo-ancora.png",
        max_price: "7912052",
        min_price: "5107546",
        name: "SATÉLITE RESIDENCIAL",
        slug: "ancora"
    }
]
</script>
<?php get_footer(); ?>
