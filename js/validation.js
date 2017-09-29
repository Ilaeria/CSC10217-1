//Event handlers
function communicationChange(event){
    var phone = document.getElementById("phone");
    var mobile = document.getElementById("mobile");
    var email = document.getElementById("email");

    //Remove all required attributes
    phone.required = false;
    phone.setAttribute("aria-required", "false");
    mobile.required = false;
    mobile.setAttribute("aria-required", "false");
    email.required = false;
    email.setAttribute("aria-required", "false");

    //Show required attributes in right elements
    switch (event.currentTarget.value) {
        case "phone":
            phone.required = true;
            phone.setAttribute("aria-required", "true");
            break;
        case "mobile":
            mobile.required = true;
            mobile.setAttribute("aria-required", "true");
            break;
        case "email":
            email.required = true;
            email.setAttribute("aria-required", "true");
            break;
    }
}

function magazineChange(event){
    var street = document.getElementById("street");
    var state = document.getElementById("state");
    var postcode = document.getElementById("postcode");

    if(event.currentTarget.checked == true){
        //Mark address fields as compulsory
        street.required = true;
        street.setAttribute("aria-required", "true");
        state.required = true;
        state.setAttribute("aria-required", "true");
        postcode.required = true;
        postcode.setAttribute("aria-required", "true");
    }
    else {
        //Unmark address fields as compulsory
        street.required = false;
        street.setAttribute("aria-required", "false");
        state.required = false;
        state.setAttribute("aria-required", "false");
        postcode.required = false;
        postcode.setAttribute("aria-required", "false");
    }
}