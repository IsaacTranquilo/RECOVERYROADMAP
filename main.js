document.getElementById("form").addEventListener('submit', function(event){
    var password_1 = document.getElementById("password").value;
    var password_2 = document.getElementById("password_1").value;

    if(password_1 != password_2){
        alert("Password Must be Same for both fields..!");
    }

    console.log(password_1);
    console.log(password_2);
})