<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edge of Tomorrow DVD Rentals - Contact</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/palette.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans|Roboto">
    <meta name="description" content="Edge of Tomorrow DVD Rentals.">
    <!-- contact-specific styles -->
    <style>
        .contacttable {
            width: 90%;
            margin-left: 0;
            border-left: 5px solid #FF5252;
        }

        .contacttable caption {
            text-align: left;
            padding-bottom: 1em;
        }

        .contacttable th {
            display: none;
        }

        .contacttable tbody td:first-of-type {
            padding: 1px 5px;
            width: 83px;
        }

        .contacttable tbody td:last-of-type {
            font-size: 0.8em;
        }

        h2 {
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div id="container">
        <?php include 'html_includes/header_nav.inc'; ?>
        <script type = "text/javascript">
            document.getElementById("contactNav").className = "currentpage";
        </script>
        <aside>
            <h3>Latest release</h3>
            <img src="images/gotg2.jpg" alt="Latest release - Guardians of the Galaxy Vol. 2">
            <p>
                Our latest release - Guardians of the Galaxy Vol 2.
            </p>
            <p class="copyrightnotice">
                Image courtesy <a href="http://www.imdb.com/title/tt3896198/mediaviewer/rm911094272">imdb.com</a>
            </p>
        </aside>
        <main>
            <h1>Contact Us</h1>
            <table class="contacttable">
                <caption>You can contact us using any method below.</caption>
                <thead>
                <tr>
                    <th id="contactmethod">Contact Method</th>
                    <th id="contactinformation">Contact Details</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td headers="contactmethod">Email:</td>
                    <td headers="contactinformation"><a href="mailto:contact@edgeoftomorrowdvdrentals.com">contact@edgeoftomorrowdvdrentals.com</a></td>
                </tr>
                <tr>
                    <td headers="contactmethod">Phone:</td>
                    <td headers="contactinformation">08 1234 5678</td>
                </tr>
                <tr>
                    <td headers="contactmethod">Website:</td>
                    <td headers="contactinformation"><a href="http://infotech.scu.edu.au/~jdoher10/" target="_blank">http://infotech.scu.edu.au/~jdoher10/</a></td>
                </tr>
                <tr>
                    <td headers="contactmethod">Facebook:</td>
                    <td headers="contactinformation"><a href="https://facebook.com/" target="_blank">https://facebook.com/</a></td>
                </tr>
                <tr>
                    <td headers="contactmethod">Instagram:</td>
                    <td headers="contactinformation"><a href="https://www.instagram.com/" target="_blank">https://www.instagram.com/</a></td>
                </tr>
                <tr>
                    <td headers="contactmethod">Twitter:</td>
                    <td headers="contactinformation"><a href="https://twitter.com/" target="_blank">https://twitter.com/</a></td>
                </tr>
                </tbody>
            </table>
            <h2>Store location</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7216.017151857385!2d127.78951283222352!3d-19.172979520165292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b631584adb1b5b3%3A0x867a544e5d701238!2sWolfe+Creek+Crater!5e1!3m2!1sen!2sau!4v1503317581988" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <h2>Contact form</h2>
            <form name="contactform" method="post" id="contactform" action="http://infotech.scu.edu.au/cgi-bin/echo_form" style="margin-top: 0; padding: 0">
                <fieldset style="margin-top: 0; padding: 0">
                    <p>
                        If you have any questions or comments, please get in touch! We'll reply as soon as we can.
                    </p>
                    <p>
                        All fields are required.
                    </p>
                    <div>
                        <label for="name">Name:</label>
                        <input name="name" id="name" maxlength="50" required value="" aria-required="true" aria-describedby="name-format" pattern="[A-Za-z-'\s]+">
                        <span id="name-format" class="help">Required field. Letters, spaces, - or ' only. Max 50 characters.</span>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="" required aria-required="true" aria-describedby="email-format">
                        <span id="email-format" class="help">Required field. Valid email address required. Max 50 characters.</span>
                    </div>
                    <div>
                        <label for="comments">Questions or comments:</label>
                        <textarea name="comments" id="comments" cols="40" rows="5" required aria-required="true" aria-describedby="comments-format"></textarea>
                        <span id="comments-format" class="help">Required field.</span>
                    </div>
                    <input type="submit" name="submit" id="submit" value="Submit" style="margin-left: 180px">
                    <input type="reset" name="reset" id="reset" value="Reset" style="margin-left: 10px">
                </fieldset>
            </form>
        </main>
        <?php include 'html_includes/footer.inc'; ?>
    </div>
</body>
</html>