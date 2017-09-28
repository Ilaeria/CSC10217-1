var errorMsg = '';
var firstError = '';

function validateForm()
{
    retVal = false;
    hide_required();

    testTextBox("LastName", "Last Name", getRegEx("LastName"), getErrMsg("LastName"));
    testTextBox("OtherNames", "Other Names", getRegEx("OtherNames"), getErrMsg("OtherNames"));
    testContactButtons();
    testNewsletter();
    testDropDown("Occupation", "Occupation", '', getErrMsg("Occupation"));
    testTextBox("Username", "Username", getRegEx("Username"), getErrMsg("Username"));
    testTextBox("Password", "Password", getRegEx("Password"), getErrMsg("Password"));
    testTextBox("RepeatPassword", "Repeat Password", getRegEx("RepeatPassword"), getErrMsg("RepeatPassword"));
    checkPasswordMatch();
    setDateField();

    if(errorMsg != '')
    {
        errorMsg = "The following errors occured:\n\n" + errorMsg;
        alert(errorMsg);
        if(firstError != '')
        {
            setFocus();
            retVal = false;
        }
        //reset the 2 globals
        errorMsg = '';
        firstError = '';
    }
    else
    {
        retVal = true;
    }
    return retVal;
}

function setFocus()
{
    var myControl = document.getElementById(firstError);
    myControl.focus();
    if(myControl.value != '')
    {
        myControl.select();
    }
}

function testTextBox(elementID, elementString, regEx, errMsg)
{
    var testVar = document.getElementById(elementID).value;

    if(!testVar.match(regEx))
    {
        errorMsg = errorMsg + elementString + " " + errMsg + "\n";
        show_required(elementID);
        if (firstError == '')
        {
            firstError = elementID;
        }
    }
    else
    {
        hide_shown(elementID);
    }
}

function testContactButtons()
{
    for(cnt = 0; cnt < document.myform.contact_method.length; cnt++)
    {
        if (document.myform.contact_method[cnt].checked == true)
        {
            break;
        }
    }

    if(cnt == 0)
    {
        testTextBox("email", "Email", getRegEx("email"), getErrMsg("email"));
    }
    else if(cnt == 1)
    {
        testTextBox("landline", "Landline", getRegEx("landline"), getErrMsg("landline"));
    }
    else if(cnt == 2)
    {
        testTextBox("mobile", "Mobile", getRegEx("mobile"), getErrMsg("mobile"));
    }
    else
    {
        errorMsg = errorMsg + "Contact method is required. Please select a contact method. e.g. email, landline or mobile.\n\n";
        show_required("contact_method");
        if (firstError == '')
        {
            firstError = "contact_method";
        }
    }
}

function testNewsletter()
{
    if(document.getElementById("newsletter").checked)
    {
        testTextBox("StreetAddress", "Street Address", getRegEx("StreetAddress"), getErrMsg("StreetAddress"));
        testTextBox("Suburb", "Suburb", getRegEx("Suburb"), getErrMsg("Suburb"));
        testTextBox("Postcode", "Postcode", getRegEx("Postcode"), getErrMsg("Postcode"));
    }
}

function testDropDown(elementID, elementString, regEx, errMsg)
{
    var testVar = document.getElementById(elementID).value;

    if(testVar == '')
    {
        errorMsg = errorMsg + elementString + " " + errMsg + "\n";
        show_required(elementID);
        if (firstError == '')
        {
            firstError = elementID;
        }
    }
    else
    {
        hide_shown(elementID);
    }
}

function checkPasswordMatch()
{
    if(document.getElementById("Password").value != "")
    {
        if(document.getElementById("RepeatPassword").value != document.getElementById("Password").value)
        {
            errorMsg = errorMsg + "The passwords donot match." + "\n";
            show_required("RepeatPassword");
            if (firstError == '')
            {
                firstError = "RepeatPassword";
            }
        }
    }
}

function setDateField()
{
    var date = new Date;
    var dateString = '';
    var dateField = document.getElementById("dateField");

    dateString = date.getFullYear() + '-' + (('0' + (date.getMonth()+1)).slice(-2)) + '-' + (('0' + date.getDate()).slice(-2));
    dateField.value = dateString;
}

function getRegEx(elementID)
{
    retVal = '';
    switch(elementID)
    {
        //you can source many regular expressions to suit your needs from http://regexlib.com/
        case "LastName":
            retVal = /^((?:[A-Z](?:('|(?:[a-z]{1,3}))[A-Z])?[a-z]+)|(?:[A-Z]\.))(?:([ -])((?:[A-Z](?:('|(?:[a-z]{1,3}))[A-Z])?[a-z]+)|(?:[A-Z]\.)))?$/;
            break;
        case "OtherNames":
            retVal = /^((?:[A-Z](?:('|(?:[a-z]{1,3}))[A-Z])?[a-z]+)|(?:[A-Z]\.))(?:([ -])((?:[A-Z](?:('|(?:[a-z]{1,3}))[A-Z])?[a-z]+)|(?:[A-Z]\.)))?$/;
            break;
        case "email":
            retVal = /^.+@[^\.].*\.[a-z]{2,}$/;
            break;
        case "landline":
            retVal = /^[(]{1}[0]{1}[2-36-9]{1}[)]{1}\s[0-9]{8}$/;
            break;
        case "mobile":
            retVal = /^[0]{1}[4-5]{1}[0-9]{2}\s[0-9]{3}\s[0-9]{3}$/;
            break;
        case "StreetAddress":
            retVal = /^\d{1,3}.?\d{0,3}\s[a-zA-Z]{2,30}\s[a-zA-Z]{2,15}$/;
            break;
        case "Suburb":
            retVal = /^[a-zA-Z]{2,30}\s[a-zA-Z]{2,15}$/;
            break;
        case "Postcode":
            retVal = /^[2-7]{1}[0-9]{3}$/;
            break;
        case "Username":
            retVal = /^(?=^.{6,10}$)(?=.*\d)(?=.*[a-z])(?!.*[A-Z])(?=.*[!@#$%^&amp;*()_+}{&quot;:;'?/&gt;.&lt;,])(?!.*\s).*$/;
            break;
        case "Password":
            retVal = /^(?=^.{8,10}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&amp;*()_+}{&quot;:;'?/&gt;.&lt;,])(?!.*\s).*$/;
            break;
        case "RepeatPassword":
            retVal = /^(?=^.{8,10}$)(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&amp;*()_+}{&quot;:;'?/&gt;.&lt;,])(?!.*\s).*$/;
            break;
    }
    return retVal;
}

function getErrMsg(elementID)
{
    retVal = '';
    switch(elementID)
    {
        case "LastName":
            retVal = "is required and should be capitalised and alphabetical characters only. e.g. Jones-Smith etc.\n";
            break;
        case "OtherNames":
            retVal = "is required and should be capitalised and alphabetical characters only. Billy Joe etc.\n";
            break;
        case "email":
            retVal = "is required and should be formatted correctly as an email address e.g. someone@domain.com.au\n";
            break;
        case "landline":
            retVal = "is required and should be formatted as an Australian landline number e.g. (XX) XXXXXXXX\n";
            break;
        case "mobile":
            retVal = "is required and should be formatted as an Australian mobile number e.g. XXXX XXX XXX\n";
            break;
        case "StreetAddress":
            retVal = "is required and should be formatted as a street address e.g. 7/11 Somewhere Rd\n";
            break;
        case "Suburb":
            retVal = "is required and should be formatted as Suburb State e.g. Somwhere NSW\n";
            break;
        case "Postcode":
            retVal = "is required and should be formated a numeric Australian postcode. e.g. 2488\n";
            break;
        case "Occupation":
            retVal = "is required please select from the options provided.\n";
            break;
        case "Username":
            retVal = "is required and should be formated using lower-case alpha-numeric characters only with no spaces. e.g. jbloggs104\n";
            break;
        case "Password":
            retVal = "is required and should be 8-10 characters in length and contain at least 1 uppercase letter, ";
            retVal += "\n1 lowercase letter, 1 number and 1 special character with no spaces. e.g. !QAZxsw2\n";
            break;
        case "RepeatPassword":
            retVal = "is required and should be 8-10 characters in length and contain at least 1 uppercase letter, ";
            retVal += "\n1 lowercase letter, 1 number and 1 special character with no spaces and should match the password exactly.\n";
            break;
    }
    return retVal;
}

function show_required(elementID)
{
    switch(elementID)
    {
        case "LastName":
            document.getElementById("last_name_required").style.visibility = "visible";
            document.getElementById("required_fields").style.visibility = "visible";
            break;
        case "OtherNames":
            document.getElementById("other_names_required").style.visibility = "visible";
            document.getElementById("required_fields").style.visibility = "visible";
            break;
        case "contact_method":
            document.getElementById("contact_required").style.visibility = "visible";
            document.getElementById("required_fields").style.visibility = "visible";
            break;
        case "email":
            document.getElementById("email_required").style.visibility = "visible";
            document.getElementById("required_fields").style.visibility = "visible";
            hide_shown("landline");
            hide_shown("mobile");
            hide_shown("contact");
            break;
        case "landline":
            document.getElementById("landline_required").style.visibility = "visible";
            document.getElementById("required_fields").style.visibility = "visible";
            hide_shown("email");
            hide_shown("mobile");
            hide_shown("contact");
            break;
        case "mobile":
            document.getElementById("mobile_required").style.visibility = "visible";
            document.getElementById("required_fields").style.visibility = "visible";
            hide_shown("email");
            hide_shown("landline");
            hide_shown("contact");
            break;
        case "newsletter":
            if(document.getElementById("newsletter").checked)
            {
                document.getElementById("street_address_required").style.visibility = "visible";
                document.getElementById("suburb_required").style.visibility = "visible";
                document.getElementById("postcode_required").style.visibility = "visible";
            }
            else
            {
                document.getElementById("street_address_required").style.visibility = "hidden";
                document.getElementById("suburb_required").style.visibility = "hidden";
                document.getElementById("postcode_required").style.visibility = "hidden";
            }
            break;
        case "StreetAddress":
            document.getElementById("street_address_required").style.visibility = "visible";
            break;
        case "Suburb":
            document.getElementById("suburb_required").style.visibility = "visible";
            break;
        case "Postcode":
            document.getElementById("postcode_required").style.visibility = "visible";
            break;
        case "Occupation":
            document.getElementById("occupation_required").style.visibility = "visible";
            break;
        case "Username":
            document.getElementById("username_required").style.visibility = "visible";
            break;
        case "Password":
            document.getElementById("password_required").style.visibility = "visible";
            break;
        case "RepeatPassword":
            document.getElementById("repeat_password_required").style.visibility = "visible";
            break;
    }
}

function hide_shown(elementID)
{
    switch(elementID)
    {
        case "LastName":
            document.getElementById("last_name_required").style.visibility = "hidden";
            break;
        case "OtherNames":
            document.getElementById("other_names_required").style.visibility = "hidden";
            break;
        case "contact":
            document.getElementById("contact_required").style.visibility = "hidden";
            break;
        case "email":
            document.getElementById("email_required").style.visibility = "hidden";
            break;
        case "landline":
            document.getElementById("landline_required").style.visibility = "hidden";
            break;
        case "mobile":
            document.getElementById("mobile_required").style.visibility = "hidden";
            break;
        case "newsletter":
            if(!document.getElementById("newsletter").checked)
            {
                document.getElementById("street_address_required").style.visibility = "hidden";
                document.getElementById("suburb_required").style.visibility = "hidden";
                document.getElementById("postcode_required").style.visibility = "hidden";
            }
            break;
        case "Occupation":
            document.getElementById("occupation_required").style.visibility = "hidden";
            break;
        case "Password":
            document.getElementById("password_required").style.visibility = "hidden";
            break;
        case "RepeatPassword":
            document.getElementById("repeat_password_required").style.visibility = "hidden";
            break;
        case "required_fields":
            document.getElementById("required_fields").style.visibility = "hidden";
            break;
    }
}

function hide_required()
{
    document.getElementById("last_name_required").style.visibility = "hidden";
    document.getElementById("other_names_required").style.visibility = "hidden";
    document.getElementById("contact_required").style.visibility = "hidden";
    document.getElementById("email_required").style.visibility = "hidden";
    document.getElementById("landline_required").style.visibility = "hidden";
    document.getElementById("mobile_required").style.visibility = "hidden";
    document.getElementById("street_address_required").style.visibility = "hidden";
    document.getElementById("suburb_required").style.visibility = "hidden";
    document.getElementById("postcode_required").style.visibility = "hidden";
    document.getElementById("occupation_required").style.visibility = "hidden";
    document.getElementById("username_required").style.visibility = "hidden";
    document.getElementById("password_required").style.visibility = "hidden";
    document.getElementById("repeat_password_required").style.visibility = "hidden";
    document.getElementById("required_fields").style.visibility = "hidden";
}