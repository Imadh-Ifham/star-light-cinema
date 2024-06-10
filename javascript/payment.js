
function validate(){
   
    var cardnumber = document.getElementById("card-no").value;
    var matchCardnumber = document.getElementById("matchCardnumber").value;


    if (isNaN(parseInt(cardnumber))) {
        matchCardnumber.textContent = 'Not valid';
        matchCardnumber.style.color = 'red';
    } else {
        matchCardnumber.textContent = '';
    }
}

  document.getElementById("card-no").addEventListener('input', validate);
  validate();
