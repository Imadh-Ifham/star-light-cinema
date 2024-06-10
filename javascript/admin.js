// Onclick navigation to Add Movie page
const addMovieBtn = document.getElementById('add-movie-btn');
addMovieBtn.addEventListener('click', function(){
    window.location.href = 'addMovie.php';
});

// Count of Movies
const totalMovie = document.querySelectorAll('.movie').length;
document.getElementById("totalMovies").textContent = totalMovie ;

// Count of Now Showing Movies
const totalPlayingMovies = document.querySelectorAll("span[style='color: green;']").length;
document.getElementById("playingMovies").textContent = totalPlayingMovies;

// Count of Up coming Movies
const totalUpcomingMovies = document.querySelectorAll("span[style='color: blue;']").length;
document.getElementById("upcomingMovies").textContent = totalUpcomingMovies;

// Movie poster img error encounter
document.addEventListener('DOMContentLoaded', function() {
    const poster = document.querySelectorAll('.movie img');
    poster.forEach(img => {
        img.onerror  = function () {
            this.src = 'module/poster8.jpg';
        };
    });
});

// Delete btn function
const deleteForm = document.querySelectorAll(".deleteForm");
deleteForm.forEach((form) =>{
    form.addEventListener("submit", function (e){
        e.preventDefault(); // prevent the default submit event

        const confirmDelete = window.confirm( "Are you sure to Delete?");
        
        if(confirmDelete){
            this.submit();
        }
    });
});
