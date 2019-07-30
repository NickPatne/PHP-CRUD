function valName1(FName) {
    var regName = /[A-Z][a-zA-Z][^#&<>\"~;$^%{}?]{1,20}$/g;
    if (regName.test(FName.value) == false) {

        document.getElementById("FName").style.borderColor = "red";
        document.getElementById("FName").style.borderBottomWidth = "5px";
        document.getElementById("error-fullName").innerHTML = "- Your Name Should Start with Captial Letter. <br> - Special Characters are not Allowed <br> - Length Should not beyond 20 Characters";
        // alert("Please Enter Valid ");
        return false;
    } else {
        document.getElementById("FName").style.borderColor = "Green";
        document.getElementById("FName").style.borderBottomWidth = "5px";
        document.getElementById("error-fullName").innerHTML = "";
        return true;
    }
}


//Validations for Email field
function validateEmail(Email) {
    var reg = /^([a-z0-9_\-\.])+\@([a-z])+\.([a-z]{2,3})$/;

    if (reg.test(Email.value) == false) {

        document.getElementById("Email").style.borderColor = "red";
        document.getElementById("Email").style.borderBottomWidth = "5px";
        document.getElementById("error-Email").innerHTML = "Please Enter Valid E-mail Address";
        // alert("Please Enter Valid ");
        return false;
    } else {
        document.getElementById("Email").style.borderColor = "Green";
        document.getElementById("Email").style.borderBottomWidth = "5px";
        document.getElementById("error-Email").innerHTML = "";
        return true;
    }
}



//Validation for Password
function valPass(Password) {
    var regForPass = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
    if (regForPass.test(Password.value) == false) {

        document.getElementById("Password").style.borderColor = "red";
        document.getElementById("Password").style.borderBottomWidth = "5px";
        document.getElementById("error-Password").innerHTML = " Password Must contain at least one number and one uppercase and lowercase letter,Special Character and at least 8 or more characters";
        // alert("Please Enter Valid ");
        return false;
    } else {
        document.getElementById("Password").style.borderColor = "Green";
        document.getElementById("Password").style.borderBottomWidth = "5px";
        document.getElementById("error-Password").innerHTML = "";
        return true;
    }
}


//Validation For Age

function checkAge(Age) {
    var age = document.forms["SignUp_Form"]["Age"].value;

    if (age.match(Age.value) < 18 || age.match(Age.value) > 65) {


        document.getElementById("Age").style.borderColor = "red";
        document.getElementById("Age").style.borderBottomWidth = "5px";
        document.getElementById("error-Age").innerHTML = "Age Should be 18 to 65";

        return false;
    } else {

        document.getElementById("Age").style.borderColor = "Green";
        document.getElementById("Age").style.borderBottomWidth = "5px";
        document.getElementById("error-Age").innerHTML = "";
        return true;

    }
}




function valMob(Mobile) {
    var regForMob = /^\d{10}$/;
    if (regForMob.test(Mobile.value) == false) {

        document.getElementById("Mobile").style.borderColor = "red";
        document.getElementById("Mobile").style.borderBottomWidth = "5px";
        document.getElementById("error-Mobile").innerHTML = " Please Enter Valid Mobile Number";
        // alert("Please Enter Valid ");
        return false;
    } else {
        document.getElementById("Mobile").style.borderColor = "Green";
        document.getElementById("Mobile").style.borderBottomWidth = "5px";
        document.getElementById("error-Mobile").innerHTML = "";
        return true;
    }
}



function getAnswer(Val) {
    if (Val == 'nickname' || Val == 'bestfriend' || Val == 'game') {
        document.getElementById('questioon').style.display = 'block';
    }
    if (Val == 'none') {
        document.getElementById('questioon').style.display = 'none';
    }
}