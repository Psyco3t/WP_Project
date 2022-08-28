window.addEventListener('load', init);
//document.getElementById("addWish").addEventListener("click",addElement);
var count=1;

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


function onRegisterSubmit()
{
    var username=document.getElementById("registerUsername").value;
    var password=document.getElementById("registerPassword").value;
    var passwordConfirm=document.getElementById("registerPasswordConfirm").value;
    var form=document.getElementById('registerForm');


    if(username.length>0)
    {
        document.getElementById('1').innerHTML="";
        document.getElementById("registerUsername").style.border = "";
    }
    else
    {
        form.addEventListener('submit', function (e) {
            // prevent the form from submitting
            e.preventDefault();

        });
        document.getElementById('1').innerHTML="Please enter a username";
        //borders.style.border="red solid 2px";
        document.getElementById("registerUsername").style.border = "thin solid red";
    }

    if(password.length<8)
    if(password.length<8)
    {
        form.addEventListener('submit', function (e) {
            // prevent the form from submitting
            e.preventDefault();

        });
        document.getElementById('2').innerHTML="Please enter a password!";
        //borders.style.border="2px solid red";
        document.getElementById("registerPassword").style.border = "thin solid red";
    }
    else
    {
        document.getElementById('2').innerHTML="";
        document.getElementById("registerPassword").style.border = "";
    }

    if(passwordConfirm===password)
    {
        document.getElementById('3').innerHTML="";
        document.getElementById("registerPasswordConfirm").style.border = "";
    }

    else
    {
        form.addEventListener('submit', function (e) {
            // prevent the form from submitting
            e.preventDefault();

        });
        document.getElementById('3').innerHTML="Password does not match";
        //borders.style.border="2px solid red";
        document.getElementById("registerPasswordConfirm").style.border = "thin solid red";
    }
}

function addElement()
{
    var newElement=document.createElement('input');
    newElement.type="text";
    newElement.style.marginTop="15px";
    newElement.style.width="100%";
    newElement.className="form-control"
    var element=document.getElementById('wishDiv');
    newElement.appendChild(element);
    count++;
    newElement.id="wishlist"+count;
    document.getElementById('wishContainer').appendChild(newElement);


}

function highlight()
{
    var input1=document.getElementById("total");
    var input2=document.getElementById("total2");
    var input3=document.getElementById("total3");
    var input4=document.getElementById("total4");
    var input5=document.getElementById("total5");
    var input6=document.getElementById("total6");

    var compare1;
    var compare2;
    var compare3;

    if(input1.value>input2.value)
    {
        input1.style.color="red";
    }
    else if(input2.value>input1.value)
    {
        input2.style.color="red";
    }

    if(input3.value>input4.value)
    {
        input3.style.color="red";
    }
    else if(input4.value>input3.value)
    {
        input4.style.color="red";
    }

    if(input5.value>input6.value)
    {
        input5.style.color="red";
    }
    else if(input6.value>input5.value)
    {
        input6.style.color="red";
    }


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
