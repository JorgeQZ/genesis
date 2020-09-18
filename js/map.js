jQuery(document).ready(function (e) {

    let states = document.querySelectorAll('.selected');
    states.forEach(state => {
        state.addEventListener("click", function (e) {
            e.preventDefault();

            if (document.querySelector('.selected.active')) {
                document.querySelector('.selected.active').classList.remove("active");
            }

            this.classList.add("active");

            if (document.querySelector('.data-points.active')) {
                document.querySelector('.data-points.active').classList.remove("active");
            }

            let state_id = this.firstElementChild.id;



        });
    });


    console.log(
        document.querySelectorAll('.data-points.active')[0].dataset.points
    )
});