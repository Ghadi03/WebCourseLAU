const images = document.querySelectorAll('.pictures');

images.forEach((image) => {
    image.addEventListener('click', () => {
        image.focus();
    });
});
