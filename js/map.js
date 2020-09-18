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
                document.querySelector('.data-points.active').classList.add("hide");
                document.querySelector('.data-points.active').classList.remove("active");
            }

            let state_id = this.firstElementChild.id;
            document.querySelectorAll('[data-points~="' + state_id + '"]')[0].classList.remove("hide")

            document.querySelectorAll('[data-points~="' + state_id + '"]')[0].classList.add("active")
        });
    });
});