<?php
function overlay($slide, $postId) {
    return "<div class='overlay'>
            <div class='editPosterBox'>
                <i class='fa-solid fa-x closeEdit'></i>
                <h2>Slide <span>$slide</span></h2>
                <form action='CRUD/Poster/UPDATE.php' method='POST'>
                    <br><br>
                    <input type='hidden' name='posterID' value='$postId' />
                    <input type='text' placeholder='Poster Name' id='slidePosterName' name='slidePosterName'><br><br>
                    <input type='text' placeholder='Related Movie Name' name='slideMovieName'><br><br><br>
                    <button type='submit' name='posterDone'>Done</button>
                </form>
        </div>
    </div>";
}

// Array to hold edit poster IDs and corresponding edit poster parameters
$editPosters = [
    1 => ['editPosterID' => 'editPosterID1', 'editPoster' => 'editPoster1'],
    2 => ['editPosterID' => 'editPosterID2', 'editPoster' => 'editPoster2'],
    3 => ['editPosterID' => 'editPosterID3', 'editPoster' => 'editPoster3'],
    4 => ['editPosterID' => 'editPosterID4', 'editPoster' => 'editPoster4'],
    5 => ['editPosterID' => 'editPosterID5', 'editPoster' => 'editPoster5']
];

// Loop through edit posters array to check if any edit poster is set in $_GET
foreach ($editPosters as $x => $editPoster) {
    if (isset($_GET[$editPoster['editPosterID']])) {
        $slide = $_GET[$editPoster['editPoster']];
        $postId = $_GET[$editPoster['editPosterID']];
        echo overlay($slide, $postId);
        break; // Exit loop after displaying the overlay for the first matching edit poster
    }
}
?>
<script>
    const closeBtn = document.querySelector(".closeEdit");
    closeBtn.addEventListener('click', function(){
        window.history.back();
    })
</script>
