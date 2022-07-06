function login() {
    var user=document.getElementById("email");
    var password=document.getElementById("password");
    var email=document.getElementById("email").value;
    var pass=document.getElementById("password").value;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; //goddamn regex man
    if(document.getElementById("email").value.length==0){
        alert('Please enter email');
    }
    else if (document.getElementById("password").value.length==0){
        alert('please enter password');
        return false;
    }
    else if(filter.test(user)){
        alert("Enter valid email id");
    }
    else if(document.getElementById("password").value.length<6){ //check if length is greater than 6
        alert('password length has to be greater than 6');
        return false;
    }
    else{
        console.log(email);
        console.log(pass);
    }

}

function clearFunc() {
    document.getElementById("email").value=''; //IT DO BE WORKIN!?
    document.getElementById("password").value='';
}