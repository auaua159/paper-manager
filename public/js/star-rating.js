let rating = 1;
const stars = document.querySelectorAll('[id^="star"]');
stars.forEach((star, index) => {
    star.addEventListener('click', () => {
        rating = index + 1;
        for (let i = 0; i < stars.length; i++) {
            if (i <= index) {
                document.getElementById(`star${i}`).classList.replace('fa-regular', 'fa-solid');
            } else {
                document.getElementById(`star${i}`).classList.replace('fa-solid', 'fa-regular');
            }
        }
    });
});