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

                .blog-post_date span {
                    color: lightgray;
                }

                .blog-post_title {
                    color: white;
                }

                .blog-post_text {
                    color: white;
                }

                .blog-post_cta {
                    color: white;
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

    .container {
        width: 80%;
        margin-left: 0%;
        max-width: 1100px;
        margin: 0 auto;
        padding: 0px;
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
        height: 60px;
        background-color: white;
        color: #333;
        text-align: center;
        text-decoration: none;
    }

    .todiv{
        padding: 5px;
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

    :root {
  --rad: .7rem;
  --dur: .3s;
  --color-dark: #2f2f2f;
  --color-light: #fff;
  --color-brand: #57bd84;
  --font-fam: 'Lato', sans-serif;
  --height: 3rem;
  --btn-width: 6rem;
  --bez: cubic-bezier(0, 0, 0.43, 1.49);
}

form {
  position: relative;
  width: 100%;
  border: 2px solid black;
  background: var(--color-brand);
  border-radius: var(--rad);
}
input, button {
  height: var(--height);
  font-family: var(--font-fam);
  border: 0;
  color: var(--color-dark);
  font-size: 1.1rem;
}
input[type="search"] {
  outline: 0; /* <-- should probably remove this for better accessibility, adding for demo aesthetics for now. */
  width: 100%;
  background: var(--color-light);
  padding: 0 1.6rem;
  border-radius: var(--rad);
  appearance: none; /* for iOS input[type="search"] roundedness issue. border-radius alone doesn't work */
  transition: all var(--dur) var(--bez);
  transition-property: width, border-radius;
  z-index: 1;
  position: relative;
}
button {
  display: none; /* prevent being able to tab to it */
  position: absolute;
  cursor: pointer;
  top: 0;
  right: 0;
  width: var(--btn-width);
  font-weight: bold;
  background: var(--color-brand);
  border-radius: 0 var(--rad) var(--rad) 0;
}
input:not(:placeholder-shown) {
  border-radius: var(--rad) 0 0 var(--rad);
  width: calc(100% - var(--btn-width));
}
input:not(:placeholder-shown) + button {
  display: block;
}

label {
  position: absolute;
  clip: rect(1px, 1px, 1px, 1px);
  padding: 0;
  border: 0;
  height: 1px;
  width: 1px;
  overflow: hidden;
}

.blog-post {
    width: 99%;
    background-color: #dbf4ff21;
    box-shadow: 0 1.4rem 8rem rgba(0, 0, 0, 0.2);
    display: flex;
    align-items: center;
    border-radius: .8rem;
    margin: 10px;
    margin-bottom: 5%;
}

.blog-post_info {
    padding: 30px;
}

.blog-post_img {
    min-width: 30%;
    max-width: 30%;
    height: 30%;
    transform: translateX(-3%);
    position: relative;
}

.blog-post_img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: .8rem;
    display: block;
}

.blog-post_img img::before {
    content: '';
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    box-shadow: .5rem .5rem 3rem 1px rgba(0, 0, 0, 0.5);
    border-radius: .8rem;
}

.blog-post_date {
    text-align: right;
}

.blog-post_date span {
    display: block;
    color: #00000080;
    font-size: 14px;
    font-weight: 500;
}

.blog-post_title {
    font-size: 20px;
    margin-top: -10px;
    text-transform: uppercase;
    color: black;
}

.blog-post_text {
    font-size: 18px;
    color: black;
}

.blog-post_cta {
    display: inline-block;
    letter-spacing: 1px;
    color: black;
}

    .container h2 {
        font-weight: 500;
    }

    .todivmetaa {
        text-align: center;
        font-size: 18px;
    }

    .todivmetaa a {
        padding: 10px 20px;
    }

    .toerror {
        font-size: 25px;
        font-weight: 500;
    }

    .topstoproj {
        text-align: center;
        font-size: 28px;
        font-weight: 550;
    }

    @media screen and (max-width: 1068px) {
        .blog-post {
            max-width: 80rem;
        }
        .blog-post_img {
            min-width: 30rem;
            max-width: 30rem;
        }
        
    }

    @media screen and (max-width: 868px) {
        .blog-post {
            max-width: 70rem;
        }

    }

    @media screen and (max-width: 768px) {
        .blog-post {
            width: 91%;
            margin-left: 5%;
            padding: 0rem;
            margin-bottom: 15%;
            flex-direction: column;
        }
        .blog-post_img {
            min-width: 80%;
            max-width: 80%;
            transform: translate(0, -1rem);
        }
    
        .blog-post_date span {
            font-size: 16px;
        }

        .blog-post_title {
            font-size: 20px;
            margin-top: 20px;
            text-transform: uppercase;
            color: black;
        }

        .blog-post_text {
            font-size: 18px;
            color: black;
        }

        .blog-post_cta {
            display: inline-block;
            padding: 10px 0px;
            letter-spacing: 1px;
            font-size: 1.2rem;
            color: black;
            border-radius: .8rem;
        }
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

        .toerror {
            margin-left: 5%;
            font-size: 22px;
            font-weight: 500;
        }

        .topstoproj {
            text-align: center;
            font-size: 25px;
            font-weight: 550;
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

        :root {
            --rad: .7rem;
            --dur: .3s;
            --color-dark: #2f2f2f;
            --color-light: #fff;
            --color-brand: #57bd84;
            --font-fam: 'Lato', sans-serif;
            --height: 3rem;
            --btn-width: 6rem;
            --bez: cubic-bezier(0, 0, 0.43, 1.49);
        }

        form {
        position: relative;
        width: 90%;
        margin-left: 5%;
        background: var(--color-brand);
        border-radius: var(--rad);
        }

        input, button {
            height: var(--height);
            font-family: var(--font-fam);
            border: 0;
            color: var(--color-dark);
            font-size: 1.2rem;
        }

        .toerror {
            margin-left: 5%;
            font-size: 22px;
            font-weight: 500;
        }

        .topstoproj {
            text-align: center;
            font-size: 25px;
            font-weight: 550;
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

    <br><p class="topstoproj">Projects</p><br>

    <form onsubmit="event.preventDefault();" role="search">
        <input id="search" type="search" placeholder="Αναζήτηση..." autofocus required />
        <button type="submit">Go</button>    
    </form>
    <br><br>

    <div class="blog-container">
        <div class="blog-post">
            <div class="blog-post_img">
                <img src="data:image/jpeg;base64" alt="" >
            </div>
            <div class="blog-post_info">
                <div class="blog-post_date">
                    <span>Sigrafeas</span>
                    <span>Date</span>
                    <span>katigoria</span>
                </div>
                <h1 class="blog-post_title">Titlos</h1>
                <p class="blog-post_text">Keimeno</p>
                <div class="todivmetaa">
                    <a href="" class="blog-post_cta">Read More</a>
                    <a href="" class="blog-post_cta">Read More</a>
                    <a href="" class="blog-post_cta">Read More</a>
                </div>
            </div>
        </div>
    <br><br><br><br>
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
                        <span id="toepi"><strong>Projects</strong></span>
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