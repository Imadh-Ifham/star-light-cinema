const movieGroup = document.querySelectorAll('.movie-gallery-container img');
movieGroup.forEach(img => {
    img.onerror  = function () {
        this.src = 'module/poster8.jpg';
    };
});