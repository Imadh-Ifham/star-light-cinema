// Validation for DDuration Input
const durationInput = document.getElementById('duration');

durationInput.addEventListener('input', function() {
  const maxDuration = 240; // Maximum duration allowed
  if (parseInt(this.value) > maxDuration) {
    alert('Maximum duration allowed is 240 minutes');
    this.value = maxDuration; // Set the value to the maximum if it exceeds the limit
  }
});


// ==================================
// Realted to Cast Info section start.
const addMoreBtn = document.getElementById('addCast-btn');
const castInfoContainer = document.getElementById('cast-info');

function removeCastInfo() {
    const castInfo = this.closest('.cast-info');
    castInfo.remove();
}

function validateDP() {
    const castInfo = this.closest('.cast-info');
    const castDpNameInput = castInfo.querySelector('.cast-dp-name');
    const imgElement = castInfo.querySelector('img');

    imgElement.src = 'module/cast/' + castDpNameInput.value;
    imgElement.onerror = function(){
        alert(`Movie poster image path did not match.`);
        imgElement.src = 'module/profile.jpg';
    };
}

addMoreBtn.addEventListener("click", () => {
    const newCastInfo = document.createElement('div');
    newCastInfo.classList.add('cast-info');
    newCastInfo.innerHTML = `
        <div class="cast-inputs">
            <span class="block">
                <input type="text" name="castName[]" placeholder="Actor Name" required>
                <input type="text" name="castPic[]" class="cast-dp-name" placeholder="Profile Pic Name">
            </span>
            <span id="cast-pic">
                <img src="module/system/profile.jpg" alt="Actor dp   .">
            </span>
        </div>
        <div class="cast-btns">
            <button type="button" class="remove-btn">Remove</button>
            <button type="button" class="verify-btn">Verify Pic</button>
        </div>`;
    
    castInfoContainer.appendChild(newCastInfo);

    const removeBtns = document.querySelectorAll('.remove-btn');
    removeBtns.forEach((btn) => {
        btn.addEventListener("click",removeCastInfo);
    });

    const verifyBtns = document.querySelectorAll( '.verify-btn' );
    verifyBtns.forEach((btn) => btn.addEventListener( "click", validateDP ));
});

const verifyBtns = document.querySelectorAll( '.verify-btn' );
verifyBtns.forEach((btn) => btn.addEventListener( "click", validateDP ));
// Realted to Cast Info section end.
// ==================================

// ==================================
// Realted to Show Poster section start.
const posterCheckBtn = document.getElementById('poster-check-btn');
const movieImageContainer = document.getElementById('movie-image-container');
const movieImage = document.getElementById('movie-image');

const handleImageError = () => {
    alert(`Movie poster image path did not match.`);
    movieImageContainer.style.display = 'none'; // Hide the container if image fails to load
}
const closePoster = () => movieImageContainer.style.display = 'none';

posterCheckBtn.addEventListener('click', function() {
    const posterInputField = document.getElementById('poster-name');
    
    movieImageContainer.style.display = 'none';  // Hide the current image (if any)

    if (posterInputField.value === '') {
        alert("Please enter a name for the poster");
    } else {
        // Set the src property of movieImage
        movieImage.src = "module/" + posterInputField.value;

        // Show the container only after the image loads successfully
        movieImage.onload = function() {
            movieImageContainer.style.display = 'block';
        };
    }
});
// Realted to Show Poster section end.
// ==================================

// ==================================
// Realted to Show Time section start.

/*
var x = 0;
// Function to remove newly added show time
function removeShowTime() {
    const showtime = this.closest('.showtime-group');
    showtime.remove();
    x--;
}
*/

//      ----------------------------
// Show time visibility control based on movie status start
const selectedRadio1 = document.getElementById('ongoing');
const selectedRadio2 = document.getElementById('upcoming');
const showTimeField = document.getElementById('showtime');


var htmlCode1 = `
<label><b>Date:</b></label>
<input type="date" name="show_date" id="show_date" required><br>
<i class="fa-solid fa-x close remove-btn2"></i>
<p>Hall: </p>
<label><input type="radio" name="hall" value="H-1" required>  Vega Hall</label>
<label><input type="radio" name="hall" value="H-2"> Sirius Hall</label>
<label><input type="radio" name="hall" value="H-3"> Polaris Hall(3D)</label>
<p>Time:</p>
<div id="time-block">
    <label><input type="checkbox" name="time[]" value="09:00:00"> 9.00am</label><br>
    <label><input type="checkbox" name="time[]" value="12:00:00"> 12.00pm</label><br>
    <label><input type="checkbox" name="time[]" value="15:00:00"> 3.00pm</label><br>
    <label><input type="checkbox" name="time[]" value="18:00:00"> 6.00pm</label><br>
    <label><input type="checkbox" name="time[]" value="21:00:00"> 9.00pm</label><br>
    <label><input type="checkbox" name="time[]" value="01:00:00"> 1.00am (Night Show)</label>   
</div>
<label><b>Price:</b></label>
<input type="number" name="price" id="price" required>
`;

const dynamicShowtime = () => {
    if ( selectedRadio1.checked ){
        showTimeField.innerHTML = `
            <p>Showtime : <span style="color: red;">*</span></p>
            <div id="showtime-group"><div class="showtime-group">${htmlCode1}</div></div>
            `;//<div style="text-align: center;"><button type="button" id="addShow-btn">Add More</button></div>
        
        /*
        // Add event listener to add more show time start.
        const addMoreShowTime = document.getElementById('addShow-btn');
        const showTimeContainer = document.getElementById('showtime-group');
        addMoreShowTime.addEventListener('click', function() {
            const newShowContent = document.createElement('div');
            newShowContent.classList.add("showtime-group");
            newShowContent.innerHTML = htmlCode1;
            showTimeContainer.appendChild(newShowContent);

            // Add event listener to remove more show time start.
            const removeShowBtns = document.querySelectorAll('.remove-btn2');
            removeShowBtns.forEach((btn) => {
                btn.addEventListener("click", removeShowTime);
            });
            // Add event listener to remove more show time end.
        
        });
        // Add event listener to add more show time end.
        */
        
        
    } else {
        showTimeField.innerHTML = "";
    }
}

selectedRadio1.addEventListener("change", function(){
    x=0;
    dynamicShowtime();
});
selectedRadio2.addEventListener("change", dynamicShowtime);
// Show time visibility control based on movie status end.
//     ------------------



// Related to Show Time Section Ends.
//==================================


const addMovieForm = document.getElementById('add-movie-form');
const textArea = addMovieForm.querySelector('textarea');

addMovieForm.addEventListener('submit',function(event){
    event.preventDefault();

    var textValue = textArea.value;
    // Check for special characters
    textValue = textValue.replace(/(?<!\\)'/g,"\\'");

    textArea.value = textValue;

    addMovieForm.submit();
});