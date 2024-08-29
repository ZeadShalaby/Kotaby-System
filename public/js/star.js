document.querySelectorAll(".stars input").forEach((input) => {
    input.addEventListener("change", function () {
        let allStars = document.querySelectorAll(".stars label");
        let selectedStar = this;
        let index = Array.from(allStars).indexOf(
            selectedStar.nextElementSibling
        );

        allStars.forEach((star, i) => {
            if (i >= index) {
                star.style.color = "#ffcc00"; // لون النجوم المحددة
            } else {
                star.style.color = "#ccc"; // لون النجوم غير المحددة
            }
        });
    });
});
