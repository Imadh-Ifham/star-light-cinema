// Add More ShowTimes
const addMoreShowBtn = document.querySelectorAll('.addShowBtn');
addMoreShowBtn.forEach((btn) => {
    btn.addEventListener('click', () => {
        const selectedParent = btn.closest('.selected');
        if(selectedParent){
            selectedParent.querySelector('[name="showBlock"]').classList.add('hide');
            selectedParent.querySelector('.showForm').classList.remove('hide');
        }
    } );
});

// Update Movie Details Form
document.getElementById('titleBtn').addEventListener('click', () => {
    document.getElementById('detail').classList.add('hide');
    document.getElementById('form-detail').classList.remove('hide');
});
document.getElementById('descBtn').addEventListener('click', () => {
    document.getElementById('description').classList.add('hide');
    document.getElementById('form-desc').classList.remove('hide');
});

// Add Show Time  Validation
const validateForm = (x) => {
    const firstCheckbox = document.querySelector('input[type=checkbox]:checked');
    const inputDate = document.getElementById(`date${x}`).value;
    const inputPrice = document.getElementById(`price${x}`).value;
    if (!firstCheckbox) {
        alert('Please select atleast one show time!');
    } else if (!inputDate || inputDate === '') {
        alert("Please enter the date!");
    } else if (!inputPrice) {
        alert("Please enter the price!");
    } else {
        const parent = firstCheckbox.closest('.showForm');
        parent.submit();
    }
};

const decsForm = document.getElementById('form-desc');
const textArea = decsForm.querySelector('textarea');

decsForm.addEventListener('submit',function(event){
    event.preventDefault();

    var textValue = textArea.value;
    // Check for special characters
    textValue = textValue.replace(/(?<!\\)'/g,"\\'");

    textArea.value = textValue;

    decsForm.submit();
});