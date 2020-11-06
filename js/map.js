jQuery(document).ready(function (e) {
    
    $(".map-container .container .column .data-points").each(function(indice){
        var estado = $(this).children(".item").children(".state").text().trim().toLowerCase();
        var codigo_estado;
        var titulo_estado;
        $(".map-container .container .column svg path").each(function(){
            titulo_estado = $(this).attr("title").toLowerCase();
            if(estado == titulo_estado){
                $(this).addClass("selected");
                codigo_estado = $(this).attr("id");
                if(indice == 0){
                    $(this).addClass("active");
                }
            }
        });
        $(this).attr("data-points", codigo_estado);
    });

    let states = document.querySelectorAll('.selected');
    states.forEach(state => {
        state.addEventListener("click", function (e) {
            e.preventDefault();

            if (document.querySelector('.selected.active')) {
                document.querySelector('.selected.active').classList.remove("active");
            }

            this.classList.add("active");

            if (document.querySelector('.data-points.active')) {
                document.querySelector('.data-points.active').classList.add("hide");
                document.querySelector('.data-points.active').classList.remove("active");
            }

            //let state_id = this.firstElementChild.id;
            let state_id = this.id;
            document.querySelectorAll('[data-points~="' + state_id + '"]')[0].classList.remove("hide")

            document.querySelectorAll('[data-points~="' + state_id + '"]')[0].classList.add("active")
        });
    });
});