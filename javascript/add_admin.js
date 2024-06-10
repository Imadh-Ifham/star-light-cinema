function matchPassword(){
    var pw1= document.getElementById("password").value;
    var pw2 =document.getElementById("confirm-password").value;
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
document.getElementById("password").addEventListener('input', matchPassword);
document.getElementById("confirm-password").addEventListener('input', matchPassword);

matchPassword();