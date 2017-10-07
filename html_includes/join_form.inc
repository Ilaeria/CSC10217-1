<h1>Join Us</h1>
<form method="post" name="eshopsignup" id="eshopsignup" action="join.php">
    <p>
        Welcome to Edge of Tomorrow DVD Rentals and thanks for your interest in our e-shop! To sign up, we need a few details from you.
    </p>
    <fieldset id="fieldsetbasicinfo">
        <div>
            <label for="lastname">Last Name:</label>
            <input id="lastname" name="lastname" value="" pattern="[A-Za-z-'\s]+" title="lastname" aria-describedby="lastname-format" maxlength="50" class="required">
            <span id="lastname-format" class="help">Required field. Letters, spaces, - or ' only. Max 50 characters.</span>
        </div>
        <div>
            <label for="othernames">Other Names:</label>
            <input id="othernames" name="othernames" value="" pattern="[A-Za-z-'\s]+" title="othernames" aria-describedby="othernames-format" maxlength="60" class="required">
            <span id="othernames-format" class="help">Required field. Letters, spaces, - or ' only. Max 60 characters.</span>
        </div>
        <div>
            <label for="occupation">Occupation:</label>
            <select name="occupation" id="occupation" title="occupation" aria-describedby="occupation-format" class="required">
                <option value="other">Arts and Entertainment</option>
                <option value="other">Business</option>
                <option value="other">Industrial and Manufacturing</option>
                <option value="other">Law Enforcement and Armed Forces</option>
                <option value="other">Science and Technology</option>
                <option value="other">Healthcare and Medicine</option>
                <option value="other">No Occupation</option>
                <option value="other">Student</option>
                <option value="other">Retired</option>
                <option value="other">Other</option>
            </select>
            <span id="occupation-format" class="help">Required field.</span>
        </div>
    </fieldset>
    <fieldset id="fieldsetcommunicationmethod">
        <div>
            Please choose your preferred communication method and provide us with your contact details.<br>
            <input type="radio" name="communicationmethod" id="communicationemail" value="email" checked> Email<br>
            <input type="radio" name="communicationmethod" id="communicationphone" value="phone"> Daytime phone<br>
            <input type="radio" name="communicationmethod" id="communicationmobile" value="mobile"> Mobile phone<br>
        </div>
    </fieldset>
    <fieldset id="fieldsetcontactinfo">
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="" aria-describedby="email-format" class="required">
            <span id="email-format" class="help">Required if communication method is email. Valid email address required. Max 50 characters.</span>
        </div>
        <div>
            <label for="phone">Daytime phone:</label>
            <input type="tel" id="phone" name="phone" value="" pattern="^[(]{1}[0]{1}[2-36-9]{1}[)]{1}\s[0-9]{8}$" aria-describedby="phone-format" class="required" required aria-required="true">
            <span id="phone-format" class="help">Required if communication method is daytime phone. Format: (0[2,3,6,7,8,or 9]) XXXXXXXX where X is a digit.</span>
        </div>
        <div>
            <label for="mobile">Mobile phone:</label>
            <input type="tel" id="mobile" name="mobile" value="" pattern="^[0]{1}[4-5]{1}[0-9]{2}\s[0-9]{3}\s[0-9]{3}$" aria-describedby="mobile-format" class="required">
            <span id="mobile-format" class="help">Required if communication method is mobile phone. Format: 0[4 or 5]XX XXX XXX where X is a digit.</span>
        </div>
    </fieldset>

    <script type = "text/javascript">
    <!--
    //Turn off required for daytime phone and mobile phone as email is selected by default
    document.getElementById("phone").classList.remove("required");
    document.getElementById("mobile").classList.remove("required");
    -->
    </script>

    <fieldset id="fieldsetmagazine">
        <div>
            Would you like to receive our monthly magazine?<br>
            <input type="checkbox" name="magazinesubscription" id="magazinesubscription" value="yes" checked style="margin-left:0"> Yes, please mail me the monthly magazine<br>
        </div>
        <div>
            <label for="street">Street address:</label>
            <input id="street" name="street" value="" title="street" aria-describedby="street-format" maxlength="50" class="required">
            <span id="street-format" class="help">Required for magazine delivery. Street number and name. Max 50 characters.</span>
        </div>
        <div>
            <label for="state">Suburb and state:</label>
            <input id="state" name="state" value="" title="state" aria-describedby="state-format" maxlength="50" class="required">
            <span id="state-format" class="help">Required for magazine delivery. Suburb and State. Max 50 characters.</span>
        </div>
        <div>
            <label for="postcode">Postcode:</label>
            <input id="postcode" name="postcode" value="" pattern="[0-9]{4}" title="postcode" aria-describedby="postcode-format" minlength="4" maxlength="4" class="required">
            <span id="postcode-format" class="help">Required for magazine delivery. Postcode. 4 digits only.</span>
        </div>
    </fieldset>
    <fieldset id="fieldsetlogindetails">
        Please choose a username and password.<br>
        <div>
            <label for="username">Username:</label>
            <input id="username" name="username" value="" pattern="[A-Za-z]{6,10}" title="username" aria-describedby="username-format" maxlength="10" minlength="6" class="required">
            <span id="username-format" class="help">Required field. 6-10 characters only, no spaces.</span>
        </div>
        <div>
            <label for="password1">Password:</label>
            <input type="password" id="password1" name="password1" value="" pattern="\S{4,10}" title="password1" aria-describedby="password1-format" minlength="4" maxlength="10" class="required">
            <span id="password1-format" class="help">Required field. Must include 1 uppercase, 1 lowercase, 1 number, 1 symbol, no spaces. Max 10 characters.</span>
        </div>
        <div>
            <label for="password2">Re-enter password:</label>
            <input type="password" id="password2" name="password2" value="" pattern="\S{4,10}" title="password2" aria-describedby="password2-format" minlength="4" maxlength="10" class="required">
            <span id="password2-format" class="help">Required field. Must match first password above.</span>
        </div>
    </fieldset>
    <input name="joindate" id="joindate" style="display:none">
    <input type="submit" name="submit" id="submit" value="Join Now" style="margin-left: 180px">
    <input type="reset" name="reset" id="reset" value="Reset" style="margin-left: 10px">
</form>
<script type = "text/javascript" src = "js/register_form_events.js"></script>