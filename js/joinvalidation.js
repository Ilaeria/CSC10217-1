    function validateForm() {
        if (document.forms[0].firstName.value === "" ) {
            alert("First Name field cannot be empty.");
            return false;
        }

        if (document.forms[0].lastName.value === "" ) {
            alert("Last Name field cannot be empty.");
            return false;
        }

        if (document.forms[0].email.value === "" ) {
            alert("Email field cannot be empty.");
            return false;
        }

        return true;
    }