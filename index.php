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


    .heikona {
        margin-top: 5px;
        padding: 30px;
    }
    
    .container {
        width: 80%;
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

    #tosig {
        margin-top: -30px;
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
    }
</style>
<body>

<div class="header">
    <div class="left-item">
        <a href="/NewPersonalWebsite/index.php" style="text-decoration: none;">
            <p>Klajdi Cami</p>
        </a>
    </div>
    <div class="right-item">
        <select class="form-select" id="languages" name="languages">
            <option value="en">English</option>
            <option value="gr">Greek</option>
            <option value="ge">German</option>
        </select>
    </div>
    <img src="images/darkmode.png" alt="" class="mode" id="darkmode">
    <img src="images/lightmode.png" alt="" class="mode" id="lightmode">
</div>


<div class="container">
    <div class="divlogo">
        <img src="images/profil.jpeg" alt="" class="tologoA"><br>
        <h3>Klajdi Cami</h3>
    </div>

    <div class="modal">
        <div class="overlay"></div>
        <div class="divmaximg">
            <img src="images/profil.jpeg" alt="" class="maxlogo">
        </div>
    </div>

    <div class="divkeimeno" id="en"> 
        <p>Physicist at Aristotle University Of Thessaloniki, 2022 - current (2024) </p>

        <strong>Future subject of employment :</strong>
        <p>I can't choose yet physics has many beautiful paths.</p>

        <strong>Knowledge :</strong>
        <p>I possess an insatiable passion for learning and am always eager to acquire new knowledge. Alongside the fundamental concepts taught in school, I have actively pursued my interests in astronomy and computer programming.<br><br> In 2021, I participated in the free online astronomy courses offered by the Patras astronomical company Orion and even qualified for the first stage of the Panhellenic Astronomy and Astrophysics Student Competition. I also took part in two other competitions organized by the Greek Physicist Association.
        <br><br>Furthermore with the help of my brother , who is studying computer science at the same university, and through online resources like Github and videos from YouTube, I have learned the basics of computer languages such as C, Python and JavaScript, and I am also proficient in HTML and CSS. This knowledge has been instrumental in helping me create this webpage.
        <br><br>Moreover, I enjoy reading books on a wide range of subjects including physics, economics, science fiction and philosophy.</p>

        <strong>Outside of learning, I enjoy:</strong>
        <p>
            - Exercising.<br>
            - Traveling.<br>
            - Spend time with friends.<br>
        </p>
        <br><br><br><br>
    </div>

    <div class="divkeimeno" id="gr"> 
        <p>Σπουδάζω φυσική στο Αριστοτέλειο Πανεπιστήμιο Θεσσαλονίκης, 2022 - σήμερα (2024)</p>

        <strong>Μελλοντικό αντικείμενο απασχόλησης :</strong>
        <p>Δεν μπορώ να διαλέξω ακόμα η φυσική έχει πολλά όμορφα μονοπάτια.</p>

        <strong>Γνώσεις:</strong>
        <p>Διαθέτω ένα ακόρεστο πάθος για μάθηση και είμαι πάντα πρόθυμος να αποκτήσω νέες γνώσεις. Παράλληλα με τις θεμελιώδεις έννοιες που διδάσκονται στο σχολείο, έχω επιδιώξει ενεργά τα ενδιαφέροντά μου στην αστρονομία και τον προγραμματισμό υπολογιστών. 
            <br><br>Το 2021 συμμετείχα στα δωρεάν διαδικτυακά μαθήματα αστρονομίας που προσφέρει η Αστρονομική Εταιρεία Πάτρας Orion και μάλιστα προκρίθηκα στο πρώτο στάδιο του Πανελληνίου Μαθητικού Διαγωνισμού Αστρονομίας και Αστροφυσικής. Πήρα επίσης μέρος σε δύο άλλους διαγωνισμούς που διοργάνωσε η ΄Ενωση Ελλήνων Φυσικών. 
            <br><br>Επιπλέον, με τη βοήθεια του αδερφού μου, που σπουδάζει πληροφορική στο ίδιο πανεπιστήμιο, και μέσω διαδικτυακών πόρων όπως το Github και μέσω βίντε απο το YouTube, έμαθα τα βασικά των γλωσσών προγραμματισμού όπως C, Python καιJavaScript. Γνωρίζω ακόμη Html και Css, αυτή η γνώση με βοήθησε πολύ στο να δημιουργήσω τη συγκεκριμένη ιστοσελίδα. 
            <br><br>Επιπλέον, μου αρέσει να διαβάζω βιβλία για ένα ευρύ φάσμα θεμάτων, όπως η φυσική, τα οικονομικά, η επιστημονική φαντασία και η φιλοσοφία.
        </p>

        <strong>Εκτός μάθησης, μου αρέσει:</strong>
        <p>
            - Η γυμναστική.<br>
            - Τα ταξίδια.<br>
            - Να περνάω χρόνο με φίλους.<br>
        </p>
        <br><br><br><br>
    </div>

    <div class="divkeimeno" id="ge"> 
        <p>Physiker an der Aristoteles-Universität Thessaloniki, 2022 – aktuell (2024)</p>

        <strong>Zukünftiges Beschäftigungsthema:</strong>
        <p>Ich kann mich noch nicht entscheiden, die Physik hat viele schöne Wege.</p>

        <strong>Wissen:</strong>
        <p>Ich besitze eine unstillbare Leidenschaft für das Lernen und bin stets bestrebt, mir neues Wissen anzueignen. Neben den in der Schule gelehrten Grundkonzepten habe ich mein Interesse an Astronomie und Computerprogrammierung aktiv verfolgt. 
        <br><br>Im Jahr 2021 nahm ich an den kostenlosen Online-Astronomiekursen teil, die vom patrasischen Astronomieunternehmen Orion angeboten wurden und qualifizierte sich sogar für die erste Stufe des Panhellenischen Studentenwettbewerbs für Astronomie und Astrophysik. Ich habe auch an zwei weiteren Wettbewerben teilgenommen, die von der Griechischen Physikervereinigung organisiert wurden.
        <br><br>Außerdem mit Hilfe meiner Bruder , der an derselben Universität Informatik studiert, und über Online-Ressourcen wie Github und Videos von YouTube, Ich habe die Grundlagen von Computersprachen wie C, Python und JavaScript erlernt und beherrsche außerdem HTML und CSS. Dieses Wissen wurde Er hat mir maßgeblich bei der Erstellung dieser Webseite geholfen.
        <br><br>Außerdem lese ich gerne Bücher zu einem breiten Themenspektrum darunter Physik, Wirtschaftswissenschaften, Science-Fiction und Philosophie.</p>

        <strong>Außerhalb des Lernens macht mir Folgendes Spaß:</strong>
        <p>
            - Training.<br>
            - Reisen.<br>
            - Verbringen Sie Zeit mit Freunden.<br>
        </p>
        <br><br><br><br>
    </div>

    
    <div class="footer">
            <a href="/NewPersonalWebsite/index.php" class="toa">
                <div class="todiv">
                        <img src="images/user12.png" alt=""><br>
                        <span id="toepi"><strong>Profil</strong></span>
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
                        <span>Contact</span>
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
    document.getElementById("languages").addEventListener("change", function() {
        var selectedLanguage = this.value;

        if (selectedLanguage === "en") {
            document.getElementById("en").style.display = "block";
            document.getElementById("gr").style.display = "none";
            document.getElementById("ge").style.display = "none";
        } else if (selectedLanguage === "gr") {
            document.getElementById("en").style.display = "none";
            document.getElementById("gr").style.display = "block";
            document.getElementById("ge").style.display = "none";
        } else if (selectedLanguage === "ge") {
            document.getElementById("en").style.display = "none";
            document.getElementById("gr").style.display = "none";
            document.getElementById("ge").style.display = "block";
        }
    });

    var toLogo = document.querySelector('.tologoA');
    var modal = document.querySelector('.modal');
    var overlay = document.querySelector('.overlay');
    var body = document.body;

    toLogo.addEventListener('click', function() {
        modal.style.display = 'block';
        body.style.overflow = 'hidden';
    });

    overlay.addEventListener('click', function() {
        modal.style.display = 'none';
        body.style.overflow = 'auto';
    });

    document.addEventListener('click', function(event) {
        if (modal.style.display === 'block') {
            if (!event.target.closest('.modal') && !event.target.closest('.tologoA')) {
                modal.style.display = 'none';
                body.style.overflow = 'auto';
            }
        }
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
