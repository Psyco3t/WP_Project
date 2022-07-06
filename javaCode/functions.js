window.addEventListener('load', init);

function registerSuccess()
{
    alert("Registration successfull check your email");
}

function resetEmailCheck()
{
    let email=document.getElementById('forgetEmail');
    if(email.value===""){
        email.style.border="thin solid red";
    }
    else{
        email.style.border="thin solid black"
    }
}

function logoutSuccess()
{
    alert("Successfully logged out");
}

function emailSent()
{
    alert("Check Your Emails!")
}

function init() {
    document.getElementById('fl').addEventListener('click', function (e) {
        let forgetForm = document.getElementById('forget');

        if (forgetForm.style.display === "none") {
            forgetForm.style.display = "block";
        } else {
            forgetForm.style.display = "none";
        }

        e.preventDefault();
    });

}

function loginSuccess()
{
    alert("Login success");
}

function loginCheck()
{
 /*var username=document.getElementById('loginUsername').value;
 var password=document.getElementById('loginPassword').value;*/
    document.getElementById('loginUsername').style.border='thin solid red'
    document.getElementById('loginPassword').style.border='thin solid red'
}

function loggedIn()
{
    document.getElementById('logout').style.display='none';
    document.getElementById('register').style.display='none';
}

function loggedOut()
{
    document.getElementById('logout').style.display='block';
    document.getElementById('register').style.display='block';
}