<?php
    session_start();
    include "db_conn.php";

    if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    $user_id = $_SESSION['id'];

    $stmt = $conn->prepare("SELECT username FROM login WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($name);

    if ($stmt->fetch()) {
        $username = $name;
    } else {
        $username = "-";
    }

    $stmt->close();
?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klajdi</title>

    <!-- <link rel="stylesheet" type="text/css" href="index.css"> -->
</head>

<style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }

    ::-webkit-scrollbar {
            width: 15px; 
        }

        ::-webkit-scrollbar-track {
            background: #333; /* Χρώμα φόντου του track */
        }

        ::-webkit-scrollbar-thumb {
            background: #555; /* Χρώμα του thumb */
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #666; /* Χρώμα του thumb κατά το hover */
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

        .todivepil:hover {
            box-shadow: 5px 5px 2px 1px white;
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
        max-width: 40%;
    }

    .right-item {
        border: 2px solid white;
        max-width: 20%;
         margin-right: 30px;
    }

    .right-item p{
      padding: 0 10px;
      color: white;
      max-width: 10%;
        cursor: pointer;
    }

    .heikona {
        margin-top: 5px;
        padding: 30px;
    }
    
    .container {
        width: 50%;
        margin-left: 0%;
        max-width: 1100px;
        margin: 0 auto;
        padding: 0px;
    }

    .content {
        padding: 20px;
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
        display: flex;
        justify-content: center; 
        align-items: center;
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
        width: 5%;
    }
    
    .todiv span {
        font-size: 1em;
        color: #333;
    }

    .divlogo{
        margin-top: 30px;
        text-align: center;
    }

    .tologoA {
        cursor: pointer;
        text-align: center;
        border-radius: 100%;
        width: 20%;
        border: 2px solid grey;
    } 

    .divkeimeno {
        padding: 20px;
    }

    .divkeimeno strong {
        font-size: 20px;
    }

    .divkeimeno p {
        font-size: 18px;
    }

    #toepi {
        border-bottom : 2px solid blue;
    }

    .form-select {
        cursor: pointer;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 16px;
    }

    .mode {
        cursor: pointer;
        width: 2%;
        margin-right: 30px;
        padding: 0px 0px;
    }

    #en {
        display: block;
    }

    #gr {
        display: none;
    }

    #ge {
        display: none;
    }

    .divmaximg {
        display: flex;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .modal{
        display: none;
        overflow: hidden;
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .maxlogo {
        margin-left: 10%;
        width: 80%;
        z-index: 999;
        border-radius: 100%;
    }

    #darkmode {
        display: block;
    }

    #lightmode {
        display: none;
    }

    .left-item p {
        text-decoration: none;
        color: white;
        padding: 20px;
        font-weight: 500;
        font-size: 18px;
    }

    form{
        margin-bottom: 10%;
    }

    .epi {
        text-align: center;
        font-weight: 600;
        font-size: 22px;
    }

    input {
        font-size: 16px;
        padding: 15px;
        width: 100%;
        border-radius: 5px;
    }

    .minima {
        font-weight: 500;
        font-size: 20px;
    }

    .apostolh {
        font-size: 16px;
        cursor: pointer;
        border-radius: 5px;
        margin-top: 40px;
        padding: 15px 30px;
        font-weight: 600;
    }

    textarea {
        border: 2px solid black;
        min-height: 200px;
        max-height: 400px;
        font-size: 16px;
        padding: 15px;
        border-radius: 5px;
        width: 100%;
        min-width: 100%;
        max-width: 100%;
    }

    input[type="file"] {
    outline: none;
    padding: 4px;
    margin: -4px;
    }

    input[type="file"]:focus-within::file-selector-button,
    input[type="file"]:focus::file-selector-button {
    outline: 2px solid #0964b0;
    outline-offset: 2px;
    }

    input[type="file"]::before {
    top: 16px;
    }

    input[type="file"]::after {
    top: 14px;
    }

    /* ------- From Step 2 ------- */

    input[type="file"] {
    position: relative;
    }

    input[type="file"]::file-selector-button {
    width: 136px;
    color: transparent;
    }

    /* Faked label styles and icon */
    input[type="file"]::before {
    position: absolute;
    pointer-events: none;
    /*   top: 11px; */
    left: 40px;
    color: #0964b0;
    content: "Upload File";
    }

    input[type="file"]::after {
    position: absolute;
    pointer-events: none;
    /*   top: 10px; */
    left: 16px;
    height: 20px;
    width: 20px;
    content: "";
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%230964B0'%3E%3Cpath d='M18 15v3H6v-3H4v3c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2v-3h-2zM7 9l1.41 1.41L11 7.83V16h2V7.83l2.59 2.58L17 9l-5-5-5 5z'/%3E%3C/svg%3E");
    }

    /* ------- From Step 1 ------- */

    /* file upload button */
    input[type="file"]::file-selector-button {
    border-radius: 4px;
    padding: 0 16px;
    height: 40px;
    cursor: pointer;
    background-color: white;
    border: 1px solid rgba(0, 0, 0, 0.16);
    box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.05);
    margin-right: 16px;
    transition: background-color 200ms;
    }

    /* file upload button hover state */
    input[type="file"]::file-selector-button:hover {
    background-color: #f3f4f6;
    }

    /* file upload button active state */
    input[type="file"]::file-selector-button:active {
    background-color: #e5e7eb;
    }

    #neoproject {
        display: none;
    }

    #epiloges {
        margin-top: 40px;
        display: block;
    }

    .todivepil {
        width: 95%;
        height: 40px;
        cursor: pointer;
        box-shadow: 5px 5px 2px 1px rgba(0, 0, 255, .2);
        display: flex;
        border: 2px solid lightgrey;
        padding: 15px;
        border-radius: 15px;
        margin-bottom: 30px;
    }

    .todivepil:hover {
        box-shadow: 5px 5px 2px 1px darkgrey;
    }

    .todivepil img {
        width: 5%;
    }

    .todivepil p {
        margin-top: 10px;
        font-size: 18px;
        font-weight: 600;
    }

    #neoproject img {
        width: 5%;
        margin-top: 20px;
    }

    .tosuccess {
        text-align: left;
        width: 30%;
        display: flex;
        border: 2px solid lightgreen;
        box-shadow: 5px 5px 2px 1px rgba(0, 0, 255, .2);
        border-radius: 10px;
        padding: 10px;
        font-size: 16px;
        font-weight: 500;
        color: green;
    }

    .toerror{
        text-align: left;
        width: 30%;
        display: flex;
        border: 2px solid red;
        box-shadow: 5px 5px 2px 1px rgba(0, 0, 255, .2);
        border-radius: 10px;
        padding: 10px;
        font-size: 16px;
        font-weight: 500;
        color: red;
    }

    .tosuccess img {
        width: 25%;
        margin-right: 30px;
    }
    
    .toerror img {
        width: 25%;
        margin-right: 30px;
    }

    .tolath {
        color: red;
        font-size: 18px;
        font-weight: 500;
    }

    #errortitlos {
        display: none;
    }

    #errorsigrafeas {
        display: none;
    }

    #errorkatigoria {
        display: none;
    }

    #errorkeimeno {
        display: none;
    }

    #deleteproject {
        display: none;
        margin-top: 30px;
    }

    .topisw {
        cursor: pointer;
        width: 5%;
    }

    .taprojects {
        border: 2px solid grey;
        border-radius: 10px;
        padding: 10px;
    }

    
    .taprojects p{
        font-size: 18px;
        font-weight: 500;
    }

    .panw {
        padding: 5px;
        display: flex;  
        justify-content: space-between;
        align-items: center;
    }

    .toproject {
        border: 2px solid grey;
        padding: 5px;
        border-radius: 10px;
        display: flex;
        gap: 10;
        justify-content: space-between;
        align-items: left;
    }

    .toproject img{
        padding: 0 0px;
    }

    .todelete{
        cursor: pointer;
        width: 6%;
    }

    /* Κανόνες CSS για tablet */
    @media (min-width: 601px) and (max-width: 768px) {
        .container {
            width: 100%;
            margin-left: 0%;
            padding: 0px;
        }
 
        .todiv img {
            width: 5%;
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

    .todivepil {
        margin-left: 5%;
        width: 85%;
        cursor: pointer;
        box-shadow: 12px 12px 2px 1px lightgrey;
        display: flex;
        border: 2px solid darkgrey;
        padding: 10px;
        border-radius: 15px;
        margin-bottom: 50px;
    }

    .todivepil img {
        width: 10%;
    }

    .todivepil p {
        font-size: 18px;
        font-weight: 600;
    }

    #neoproject {
        width: 85%;
        margin-left: 5%;
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
            width: 7%;
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

    .todivepil {
        margin-left: 5%;
        width: 85%;
        cursor: pointer;
        box-shadow: 5px 5px 2px 1px rgba(0, 0, 255, .2);
        display: flex;
        border: 2px solid lightgrey;
        padding: 10px;
        border-radius: 15px;
        margin-bottom: 50px;
    }

    .todivepil img {
        width: 9%;
    }

    .todivepil p {
        font-size: 18px;
        font-weight: 600;
    }

    #neoproject {
        width: 85%;
        margin-left: 5%;
    }

    .tosuccess {
        margin-left: 5%;
        width: 40%;
    }

    .toerror{
        margin-left: 5%;
        width: 40%;
    }

    #deleteproject {
        margin-left: 5%;
        width: 90%;
    }

    
    .topisw {
        width: 8%;
    }

    }
</style>
<body>
    <div class="header">
        <div class="left-item">
            <a href="#" style="text-decoration: none;">
                <p>Klajdi Cami</p>
            </a>
        </div>
        <img src="/NewPersonalWebsite/images/darkmode.png" alt="" class="mode" id="darkmode">
        <img src="/NewPersonalWebsite/images/lightmode.png" alt="" class="mode" id="lightmode">
    </div>

    <div class="container">

        <?php
            if (isset($_GET['error'])) {
                $errorMessage = $_GET['error'];
                echo '<br><br><div class="toerror"> <img src="/NewPersonalWebsite/images/info.png" alt="">' . htmlspecialchars($errorMessage) . '</div>';
            }

            if (isset($_GET['success'])) {
                $errorMessage = $_GET['success'];
                echo '<br><br><div class="tosuccess"><img src="/NewPersonalWebsite/images/info.png" alt="">' . htmlspecialchars($errorMessage) . '</div>';
            }
        ?>


        <div id="epiloges">
            <div class="todivepil" id="new">
                <img src="/NewPersonalWebsite/images/add-file.png" alt="" class="mode" >
                <p>New Project</p>
            </div>

            <div class="todivepil"  id="delete">
                <img src="/NewPersonalWebsite/images/bin.png" alt="" class="mode" >
                <p>Delete Project</p>
            </div>

            <div class="todivepil" id="edit">
                <img src="/NewPersonalWebsite/images/edit.png" alt="" class="mode" >
                <p>Edit project</p>
            </div>
        </div>


        <div id="neoproject">
            <img src="/NewPersonalWebsite/images/back.png" alt="" class="topisw" id="back1">
            <form method="post" action="/NewPersonalWebsite/project/send-project.php" enctype="multipart/form-data" onsubmit="return validateForm();">
                <br>
                <p class="epi">Νέο Project:</p>
                <p class="minima">Τίτλος:</p>
                <input type="text" id="titlos" name="titlos" placeholder="Τίτλος του Project" autocomplete="titlos">
                <p class="tolath" id="errortitlos">Ο τίτλος είναι υποχρεωτικός!</p>

                <p class="minima">Συγγραφέας:</p>
                <input type="text" id="sigrafeas" name="sigrafeas" placeholder="Συγγραφέας του Project" autocomplete="sigrafeas">
                <p class="tolath" id="errorsigrafeas">Το project πρέπει να έχει τουλάχιστον έναν συγγραφέα!</p>

                <p class="minima">Ημερομηνία:</p>
                <input type="date" id="start" name="trip-start" value="2024-03-17"/>

                <p class="minima">Κατηγορία:</p>
                <input type="text" id="katigoria" name="katigoria" placeholder="Κατηγορία" autocomplete="katigoria">
                <p class="tolath" id="errorkatigoria">Η κατηγορία είναι υποχρεωτική</p>

                <p class="minima">Εικόνα:</p>
                <input type="file" id="myfile" name="myfile">

                <p class="minima">Κείμενο:</p>
                <textarea id="keimeno" name="keimeno" placeholder="Το κείμενο του Project"  autocomplete="keimeno" rows="5"></textarea>
                <p class="tolath" id="errorkeimeno">Παρακαλώ εισάγετε το κείμενο του project </p>

                <p class="minima">Link:</p>
                <input type="text" id="link" name="link" placeholder="Κάποιο Link" autocomplete="link">

                <p class="minima">Pdf name:</p>
                <input type="text" id="topdf" name="topdf" placeholder="To όνομα του Pdf" autocomplete="topdf">

                <p class="minima">File name:</p>
                <input type="text" id="tofile" name="tofile" placeholder="Το όνομα του File" autocomplete="tofile">

                <br>
                <div style="text-align: center;">
                    <button class="apostolh">Αποστολή</button>
                </div>
                <br><br><br><br>
            </form>
        </div>

        <div id="deleteproject">
            <img src="/NewPersonalWebsite/images/back.png" alt="" class="topisw" id="back2">
            <p class="epi">Διαγραφή  Project:</p><br>

            <div class="taprojects">
                <div class="panw">
                    <p>Id</p>
                    <p>Onoma</p>
                    <p>sigrafeas</p>
                    <p>Katigoria</p>
                    <p>Date</p>
                    <p>Delete</p>
                </div>
                <hr><br>
                <?php
                    include 'db_conn.php';

                    // Ερώτημα SQL για ανάκτηση των δεδομένων των έργων από τη βάση
                    $sql = "SELECT id, Image, Sigrafeas, Date, katigoria, Titlos, Keimeno, link, Pdf, File FROM project ORDER BY id DESC";
                    $result = $conn->query($sql);

                    // Έλεγχος αν υπάρχουν αποτελέσματα
                    if ($result->num_rows > 0) {
                        // Αν υπάρχουν αποτελέσματα
                        while($row = $result->fetch_assoc()) {
                            
                            echo ' 
                            <div class="toproject">
                                <p>' . $row["id"] . '</p>
                                <p>' . $row["Titlos"] . '</p>
                                <p>' . $row["Sigrafeas"] . '</p>
                                <p>' . $row["katigoria"] . '</p>
                                <p>' . $row["Date"] . '</p>
                                <img src="/NewPersonalWebsite/images/bin.png" alt="" class="todelete">
                            </div><br>';                  
                        }
                    } else {
                        echo '<div class="toerror"><p>0 results</p></div>';
                    }
                    // Κλείσιμο σύνδεσης
                    $conn->close();
                ?>
            </div>
        </div>

    </div>

        <div class="footer">
            <a href="#" class="toa">
                <div class="todiv">
                        <img src="/NewPersonalWebsite/images/planning.png" alt=""><br>
                        <span>Projects</span>
                </div>
            </a>
            <a href="/NewPersonalWebsite/auth/logout.php" class="toa">
                <div class="todiv">
                        <img src="/NewPersonalWebsite/images/logout.png" alt=""><br>
                        <span>logout</span>
                </div>
            </a>
        </div>

</body>

<script>

    function validateForm() {
        var titlos = document.getElementById("titlos").value;
        var sigrafeas = document.getElementById("sigrafeas").value;
        var katigoria = document.getElementById("katigoria").value;
        var keimeno = document.getElementById("keimeno").value;

        var errortitlos = document.getElementById("errortitlos");
        var errorsigrafeas = document.getElementById("errorsigrafeas");
        var errorkatigoria = document.getElementById("errorkatigoria");
        var errorkeimeno = document.getElementById("errorkeimeno");

        // Αρχικά απενεργοποίησε τα μηνύματα λάθους
        errortitlos.style.display = "none";
        errorsigrafeas.style.display = "none";
        errorkatigoria.style.display = "none";
        errorkeimeno.style.display = "none";

        // Έλεγχος για το αν είναι άδειο κάποιο πεδίο
        if (titlos.trim() === "") {
            errortitlos.style.display = "block";
            document.getElementById('titlos').scrollIntoView();
            return false; // Ακύρωση υποβολής φόρμας
        }

        if (sigrafeas.trim() === "") {
            errorsigrafeas.style.display = "block";
            document.getElementById('sigrafeas').scrollIntoView();
            return false; // Ακύρωση υποβολής φόρμας
        }

        if (katigoria.trim() === "") {
            errorkatigoria.style.display = "block";
            document.getElementById('katigoria').scrollIntoView();
            return false; // Ακύρωση υποβολής φόρμας
        }

        if (keimeno.trim() === "") {
            errorkeimeno.style.display = "block";
            document.getElementById('keimeno').scrollIntoView();
            return false; // Ακύρωση υποβολής φόρμας
        }

        return true; 
    }


    document.getElementById('new').addEventListener('click', function() {
        document.getElementById('epiloges').style.display = 'none';
        document.getElementById('neoproject').style.display = 'block';
    });

    document.getElementById('back1').addEventListener('click', function() {
        document.getElementById('neoproject').style.display = 'none';
        document.getElementById('epiloges').style.display = 'block';
    });

    document.getElementById('delete').addEventListener('click', function() {
        document.getElementById('epiloges').style.display = 'none';
        document.getElementById('deleteproject').style.display = 'block';
    });

    document.getElementById('back2').addEventListener('click', function() {
        document.getElementById('deleteproject').style.display = 'none';
        document.getElementById('epiloges').style.display = 'block';
    });

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
<?php
    } else {
    header("Location: /NewPersonalWebsite/auth/login.php");
    exit();
    }
?>