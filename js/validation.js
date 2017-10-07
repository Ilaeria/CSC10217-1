//Event handlers
function communicationChange(event){
    var phone = document.getElementById("phone");
    var mobile = document.getElementById("mobile");
    var email = document.getElementById("email");

    //Remove all required attributes
    phone.className = phone.classList.remove("required");
    mobile.className = mobile.classList.remove("required");
    email.className = email.classList.remove("required");
    phone.required = false;
    phone.setAttribute("aria-required", "false");

    //Show required attributes in right elements
    switch (event.currentTarget.value) {
        case "phone":
            phone.classList.add("required");
            break;
        case "mobile":
            mobile.classList.add("required");
            break;
        case "email":
            email.classList.add("required");
            break;
    }
}

function magazineChange(event){
    var street = document.getElementById("street");
    var state = document.getElementById("state");
    var postcode = document.getElementById("postcode");

    if(event.currentTarget.checked == true){
        //Mark address fields as compulsory
        street.classList.add("required");
        state.classList.add("required");
        postcode.classList.add("required");
    }
    else {
        //Unmark address fields as compulsory
        street.classList.remove("required");
        state.classList.remove("required");
        postcode.classList.remove("required");
    }
}