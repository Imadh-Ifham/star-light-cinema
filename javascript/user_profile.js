function editinfo(){
    var editform = document.querySelector('.edit-form');
    var editbutton = document.getElementById('editbutton');
    var profileinfo = document.querySelector('.profile-info');
   
    

    if (editform.style.display === 'none') {
        // Enter edit mode
        editbutton.textContent = 'Cancel';
        profileinfo.style.display = 'none';
        editform.style.display = 'block';
    }
    else {
        // Exit edit mode
        editbutton.textContent = 'Edit';
        profileinfo.style.display = 'block';
        editform.style.display = 'none';
    }
    

}
editinfo();

function editpassword(){

    var editform = document.querySelector('.edit-form');
    var passwordform = document.querySelector('.passwordform');
    var editpasswordbutton = document.getElementById('editpasswordbutton');
    var profileinfo = document.querySelector('.profile-info');
   
    

    if (passwordform.style.display === 'none') {
        // Enter edit mode
        editpasswordbutton.textContent = 'Cancel Edit Password';
        profileinfo.style.display = 'none';
        editform.style.display ='none'
        passwordform.style.display = 'block';
        

       
       
    }
    else {
        // Exit edit mode
        editpasswordbutton.textContent = 'Edit Password';
        profileinfo.style.display = 'block';
        editform.style.display = 'none';
        passwordform.style.display = 'none';
    }
    

}
editpassword();

function matchPassword(){
    var pw1= document.getElementById("editpassword").value;
    var pw2 =document.getElementById("confirmpassword").value;
    var passwordMatchMessage= document.getElementById("passwordMatchMessage")

    if(pw1 === pw2 && pw1 !== '' && pw2 !== ''){
        passwordMatchMessage.textContent = 'Passwords match';
        passwordMatchMessage.style.color = 'green';
    }
    else{
        passwordMatchMessage.textContent = 'Passwords do not match';
        passwordMatchMessage.style.color = 'red';
    }

    
}
document.getElementById("editpassword").addEventListener('input', matchPassword);
document.getElementById("confirmpassword").addEventListener('input', matchPassword);

matchPassword();
