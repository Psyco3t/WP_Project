window.addEventListener('load', init);

function checkSelect()
{
    var form=document.getElementById('selectForm');
    var Select=document.getElementById('select').value;
    console.log('ass');
    console.log(Select);
    if (Select=='default')
    {
        form.addEventListener('submit', function (e) {
            // prevent the form from submitting
            e.preventDefault();

        });

        document.getElementById('1').innerHTML="Please select a table!";
        //borders.style.border="red solid 2px";
        document.getElementById("select").style.border = "thin solid red";
    }
    else
    {
        document.getElementById('1').innerHTML="";
        document.getElementById("select").style.border = "";
    }
}

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

function checkName()
{
    var name=document.getElementById('newTable').value;
    var form=document.getElementById('selectForm');
    if(name.length!=0)
    {
        document.getElementById('2').innerHTML="";
        document.getElementById("newTable").style.border = "";
    }
    else
    {
        form.addEventListener('submit', function (e) {
            // prevent the form from submitting
            e.preventDefault();

        });
        document.getElementById('2').innerHTML="Enter a longer name for a table";
        document.getElementById("newTable").style.border = "thin solid red";
    }
}

function calculateTotal()
{
    const num1=parseInt(document.getElementById('total').value);
    const num2=parseInt(document.getElementById('total2').value);
    const num3=parseInt(document.getElementById('total3').value);
    const num4=parseInt(document.getElementById('total4').value);
    const num5=parseInt(document.getElementById('total5').value);
    const num6=parseInt(document.getElementById('total6').value);

    const total=+num1+num2+num3+num4+num5+num6;
    document.getElementById('TotalSpent').value=total;

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
