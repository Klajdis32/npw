<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klajdi</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .dark-mode {
        background-color: #282828; /* Σκοτεινό φόντο */
        color: #ffffff; /* Λευκό χρώμα κειμένου */

        .footer {
            background-color: #333;
            border-top: 1px solid white;
        }

        .todiv span {
            color: white;
        }

        .header {
            border-bottom: 1px solid white;
        }
    }

        .header {
        margin-top: 0px;
        background-color: #333;
        color: #fff;
        height: 50px;
        border-bottom: 2px solid black;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .left-item {
        flex: 1;
    }

    .right-item {
        text-align: right;
        margin-right: 30px;
    }

    .mode {
        cursor: pointer;
        width: 2%;
        margin-right: 30px;
        padding: 0px 0px;
    }

    .heikona {
        margin-top: 5px;
        padding: 30px;
    }

    
    #darkmode {
        display: block;
    }

    #lightmode {
        display: none;
    }

    .footer {
        display: flex;
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        border-top: 2px solid black;
        height: auto;
        background-color: white;
        color: #333;
        text-align: center;
        text-decoration: none;
    }

    .todiv{
        padding: 10px;
        text-decoration: none;
    }

    .toa {
        cursor: pointer;
        text-decoration: none;
    }

    .todiv img {
        width: 7%;
    }
    
    .todiv span {
        font-size: 1em;
        color: #333;
    }

    #toepi {
        border-bottom : 2px solid blue;
    }

    .left-item p {
        text-decoration: none;
        color: white;
        padding: 20px;
        font-weight: 500;
        font-size: 18px;
    }

    .container {
        width: 50%;
        margin-left: 0%;
        max-width: 1100px;
        margin: 0 auto;
        padding: 0px;
    }

    form {
        margin-bottom: 10%;
    }

    .epi{
        text-align: center;
        font-size: 23px;
        font-weight: 550;
        margin-bottom: 5%;
    }

    .minima{
        font-size: 20px;
    }

    input {
        width: 100%;
        padding: 15px;
        font-size: 16px;
        border: 2px solid black;
        border-radius: 5px;
    }

    textarea {
        width: 100%;
        max-width: 100%;
        min-width: 100%;
        max-height: 350px;
        min-height: 200px;
        padding: 15px;
        font-size: 16px;
        border: 2px solid black;
        border-radius: 5px;
    }

    .apostolh {
        margin-top: 20px;
        padding: 10px 20px;
        border: 2px solid black;
        border-radius: 5px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
    }

    .toerror {
        font-size: 18px;
        font-weight: 600;
        color: red;
    }

    .tosuccess {
        font-size: 18px;
        font-weight: 600;
        color: green;
    }

    .tolath {
        font-size: 18px;
        font-weight: 600;
        color: red;
    }

    #errormail{
        display: none;
    }

    #errorsubject{
        display: none;
    }

    #errormessage{
        display: none;
    }

    /* Κανόνες CSS για tablet */
    @media (min-width: 601px) and (max-width: 768px) {
        .container {
            width: 100%;
            margin-left: 0%;
            padding: 0px;
        }
 
        .todiv img {
            width: 15%;
        }

        .heikona {
        margin-left: 0%;
    }

        .tologoA {
            width: 40%;
        } 
        
        .todiv span {
            font-size: 1em;
            color: #333;
        }

        .divmaximg {
            display: flex;
            position: fixed;
            top: 20%;
            left: 20%;
            transform: translate(-10%, -10%);
        }

        .maxlogo {
            margin-left: 0%;
            width: 100%;
            z-index: 999;
            border-radius: 100%;
        }

        .mode {
        width: 4%;
    }

    .container {
            width: 100%;
            margin-left: 0%;
            padding: 0px;
        }
 
    }

    /* Κανόνες CSS για κινητά */
    @media (max-width: 600px) {
        .container {
            width: 100%;
            margin-left: 0%;
            padding: 0px;
        }
  
        .todiv img {
            width: 20%;
        }

        .heikona {
        margin-left: 0%;
    }

        .tologoA {
            width: 40%;
        }
        
        .todiv span {
            font-size: 1em;
            color: #333;
        }

        .divmaximg {
            display: flex;
            position: fixed;
            top: 30%;
            left: 30%;
            transform: translate(-20%, -10%);
        }

        .maxlogo {
            margin-left: 0%;
            width: 100%;
            z-index: 999;
            border-radius: 100%;
        }

        
    .mode {
        width: 6%;
    }

    .container {
            width: 100%;
            margin-left: 0%;
            padding: 0px;
        }

        
    form {
        margin-top: 10%;
        margin-bottom: 20%;
    }

    .epi{
        text-align: center;
        font-size: 25px;
        font-weight: 550;
    }

    .minima{
        margin-left: 5%;
    }

    input {
        width: 85%;
        margin-left: 5%;
    }

    textarea {
        width: 85%;
        margin-left: 5%;
    }

    textarea {
        width: 85%;
        max-width: 85%;
        min-width: 85%;
        max-height: 350px;
        min-height: 200px;
        padding: 15px;
        font-size: 16px;
        border: 2px solid black;
        border-radius: 5px;
    }


    .toerror {
        margin-left: 5%;
        width: 90%;
    }

    .tosuccess {
        margin-left: 5%;
        width: 90%;
    }
 
    }




    </style>
</head>

<body>

<div class="header">
    <div class="left-item">
        <a href="/NewPersonalWebsite/index.php" style="text-decoration: none;">
            <p>Klajdi Cami</p>
        </a>
    </div>

    <img src="images/darkmode.png" alt="" class="mode" id="darkmode">
    <img src="images/lightmode.png" alt="" class="mode" id="lightmode">
</div>

<div class="container">

    <form method="post" action="/NewPersonalWebsite/email/send-email.php" onsubmit="return validateForm();">
      <p class="epi">Επικοινωνία:<br></p>
      <p class="minima">Email:</p>
      <input type="text" id="email" name="email" placeholder="Ηλεκτρονικό ταχυδρομείο (example@gmail.com)" autocomplete="email"><br>
      <p class="tolath" id="errormail">Παρακαλώ εισάγετε έγκυρη διεύθυνση email !</p>
      <p class="minima">Θέμα:</p>
      <input type="text" id="subject" name="subject" placeholder="Subject" autocomplete="Subject">
      <p class="tolath" id="errorsubject">Παρακαλώ εισάγετε ένα θέμα !</p>
      <p class="minima">Μήνυμα:</p>
      <textarea id="message" name="message" placeholder="Message"  autocomplete="message" rows="5"></textarea>
      <p class="tolath" id="errormessage">Παρακαλώ εισάγετε ένα μήνυμα !</p>
        <?php
            if (isset($_GET['error'])) {
                $errorMessage = $_GET['error'];
                echo '<br><br><div class="toerror">' . htmlspecialchars($errorMessage) . '</div>';
            }

            if (isset($_GET['success'])) {
                $errorMessage = $_GET['success'];
                echo '<br><br><div class="tosuccess">' . htmlspecialchars($errorMessage) . '</div>';
            }
        ?>
        <br>
        <div style="text-align: center;">
            <button class="apostolh">Αποστολή</button>
        </div>
      <br> <br>
    </form>

</div>

  
    <div class="footer">
            <a href="/NewPersonalWebsite/index.php" class="toa">
                <div class="todiv">
                        <img src="images/user12.png" alt=""><br>
                        <span>Profil</span>
                </div>
            </a>
            <a href="/NewPersonalWebsite/projects.php" class="toa">
                <div class="todiv">
                        <img src="images/planning.png" alt=""><br>
                        <span>Projects</span>
                </div>
            </a>
            <a href="/NewPersonalWebsite/auth/login.php" class="toa">
                <div class="todiv">
                        <img src="images/enter.png" alt=""><br>
                        <span>Login</span>
                </div>
            </a>
            <a href="/NewPersonalWebsite/contact.php" class="toa">
                <div class="todiv">
                        <img src="images/send1.png" alt=""><br>
                        <span id="toepi"><strong>Contact</strong></span>
                </div>
            </a>
            <a href="/NewPersonalWebsite/dap.php" class="toa">
                <div class="todiv">
                        <img src="images/astronomy.png" alt=""><br>
                        <span>DAP</span>
                </div>
            </a>
    </div>
</div>

</body>

<script>
    function validateForm() {
        var email = document.getElementById("email").value;
        var subject = document.getElementById("subject").value;
        var message = document.getElementById("message").value;
        var errorMail = document.getElementById("errormail");
        var errorSubject = document.getElementById("errorsubject");
        var errorMessage = document.getElementById("errormessage");

        // Έλεγχος εάν το email είναι έγκυρο
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            errorMail.style.display = "block";
            return false; // Ακύρωση υποβολής φόρμας
        } else {
            errorMail.style.display = "none";
        }

        // Έλεγχος εάν έχει συμπληρωθεί το θέμα
        if (subject.trim() === "") {
            errorSubject.style.display = "block";
            return false; // Ακύρωση υποβολής φόρμας
        } else {
            errorSubject.style.display = "none";
        }

        // Έλεγχος εάν έχει συμπληρωθεί το μήνυμα
        if (message.trim() === "") {
            errorMessage.style.display = "block";
            return false; // Ακύρωση υποβολής φόρμας
        } else {
            errorMessage.style.display = "none";
        }

        return true; // Υποβολή φόρμας
    }

    document.addEventListener("DOMContentLoaded", function() {
    // Έλεγχος αν υπάρχει αποθηκευμένη προτίμηση για dark mode
    const isDarkMode = localStorage.getItem("darkModeEnabled") === "true";

    // Εάν έχει αποθηκευτεί η προτίμηση για dark mode, εφαρμόζουμε το αντίστοιχο στυλ
    if (isDarkMode) {
        document.body.classList.add("dark-mode");
        document.getElementById("darkmode").style.display = "none";
        document.getElementById("lightmode").style.display = "block";
    }

    // Προσθέτουμε ακροατές στα κουμπιά dark mode και light mode
    document.getElementById("darkmode").addEventListener("click", function() {
        enableDarkMode();
    });

    document.getElementById("lightmode").addEventListener("click", function() {
        disableDarkMode();
    });

    // Συνάρτηση για ενεργοποίηση dark mode
    function enableDarkMode() {
        document.body.classList.add("dark-mode");
        document.getElementById("darkmode").style.display = "none";
        document.getElementById("lightmode").style.display = "block";
        // Αποθηκεύουμε την επιλογή του χρήστη στο localStorage
        localStorage.setItem("darkModeEnabled", "true");
    }

    // Συνάρτηση για απενεργοποίηση dark mode
    function disableDarkMode() {
        document.body.classList.remove("dark-mode");
        document.getElementById("darkmode").style.display = "block";
        document.getElementById("lightmode").style.display = "none";
        // Αφαιρούμε την αποθηκευμένη προτίμηση από το localStorage
        localStorage.removeItem("darkModeEnabled");
    }
});

    </script>

</html>