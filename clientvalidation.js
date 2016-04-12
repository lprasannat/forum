function validateFirstName(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('please enter first name');
    }
    /*else if (textbox.validity.typeMismatch){
     textbox.setCustomValidity('please enter a valid email address');
     }*/
    else {
        textbox.setCustomValidity('');
    }
    return true;
}
function validateLastName(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('please enter last name');
    }
    /*else if (textbox.validity.typeMismatch){
     textbox.setCustomValidity('please enter a valid email address');
     }*/
    else {
        textbox.setCustomValidity('');
    }
    return true;
}
function validateUserName(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('please enter user name');
    }
    /*else if (textbox.validity.typeMismatch){
     textbox.setCustomValidity('please enter a valid email address');
     }*/
    else {
        textbox.setCustomValidity('');
    }
    return true;
}

function validateEmail(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('Required email address');
    } else if (textbox.validity.typeMismatch) {
        textbox.setCustomValidity('please enter a valid email address');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}
function validatePassword(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('please enter password');
    } else if ((textbox.value.length) < 8) {
        textbox.setCustomValidity('please enter a valid password');
    }  else {
        textbox.setCustomValidity('');
    }
    return true;
}

function validateMobileNumber(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('please enter mobilenumber');
    } else if (isNaN(textbox.value))
    {
        textbox.setCustomValidity('please enter only digits');
    } else if ((textbox.value.length) != 10) {
        textbox.setCustomValidity('please enter a valid mobile number');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}

function validateAddressLine1(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('please enter addressline1');
    }
    /*else if (textbox.validity.typeMismatch){
     textbox.setCustomValidity('please enter a valid email address');
     }*/
    else {
        textbox.setCustomValidity('');
    }
    return true;
}
function validateAddressLine2(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('please enter addressline2');
    }
    /*else if (textbox.validity.typeMismatch){
     textbox.setCustomValidity('please enter a valid email address');
     }*/
    else {
        textbox.setCustomValidity('');
    }
    return true;
}
function validateCity(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('please enter city');
    }
    /*else if (textbox.validity.typeMismatch){
     textbox.setCustomValidity('please enter a valid email address');
     }*/
    else {
        textbox.setCustomValidity('');
    }
    return true;
}
function validateState(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('please enter state');
    }
    /*else if (textbox.validity.typeMismatch){
     textbox.setCustomValidity('please enter a valid email address');
     }*/
    else {
        textbox.setCustomValidity('');
    }
    return true;
}
function validateCountry(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('please enter country');
    }
    /*else if (textbox.validity.typeMismatch){
     textbox.setCustomValidity('please enter a valid email address');
     }*/
    else {
        textbox.setCustomValidity('');
    }
    return true;
}
function validateZipCode(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('please enter Zipcode');
    } else if ((textbox.value.length) != 6) {
        textbox.setCustomValidity('please enter a valid  zipcode');
    } else {
        textbox.setCustomValidity('');
    }
    return true;
}