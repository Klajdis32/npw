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

    .toa1 {
        color: green;
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
        width: 80%;
        margin-left: 0%;
        max-width: 1100px;
        margin: 0 auto;
        padding: 0px;
    }

    .NasaImg {
        cursor: pointer;
        width: 50%;
        border: 2px solid darkgrey;
        border-radius: 5px;
    }

    .kinito p {
        font-weight: 500;
        font-size: 18px;
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

        
    .NasaImg {
        width: 90%;
        border: 2px solid darkgrey;
        border-radius: 5px;
    }

    .kinito p {
        width: 90%;
        margin-left: 5%;
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

            <div class="kinito">
                <div style="text-align: center; margin-top: 40px;"><h2>NASA's Astronomy Picture/Video<br> of the Day</h2></div>
                <br>
                <div class="image-container" id="imageContainer" style="text-align: center;">
                <img id="apodImg" class="NasaImg" src="" alt="NASA APOD">
                </div>          
                <br>
                <p><strong>Caption: </strong> <span id="apodCaption"></span><br><br>
                <strong>Date:</strong> <span id="apodDate"></span><br><br>
                <strong>Explanation:<br><br></strong> <span id="apodExplanation"></span><br><br>
                <strong>References:</strong> <a href="https://apod.nasa.gov/apod/" class="toa1">Apod.nasa.gov</a><br><br>
                <strong>Data provided by NASA Astronomy Picture of the Day (APOD)</strong> <a href="https://api.nasa.gov/planetary/apod" class="toa1">API</a></p>
                <br><br><br><br><br><br>
          </div>

          <script>
              // Make a request to the APOD API
              fetch('https://api.nasa.gov/planetary/apod?api_key=wNu2CW6MkRKeGOLgiAeLxoxVkLPGhQpj0KIqz0Tf')
              .then(response => response.json())
              .then(data => {
                // Check if the media type is image or shorts
                if (data.media_type === 'image') {
                  // Create a new image element
                  const image = document.createElement('img');
                  image.src = data.url;
                  image.alt = data.title;

                  // Set the image source and alt attribute of the existing image element
                  const apodImg = document.getElementById('apodImg');
                  apodImg.src = image.src;
                  apodImg.alt = image.alt;

                } else if (data.media_type === 'video') {
                  // Create a new video element
                  const video = document.createElement('iframe');
                  video.width = '100%';
                  video.height = '600';
                  video.src = data.url;
                  video.title = data.title;
                  video.frameBorder = '0';
                  video.allow = 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share';
                  video.allowFullscreen = true;

                  // Replace the image container with the video element
                  const imageContainer = document.getElementById('imageContainer');
                  imageContainer.innerHTML = '';
                  imageContainer.appendChild(video);
                }

                // Set the image caption and date
                document.getElementById('apodCaption').textContent = data.title;
                document.getElementById('apodDate').textContent = data.date;
                document.getElementById('apodExplanation').textContent = data.explanation;
              })
              .catch(error => {
                console.error('Error fetching APOD:', error);
              });
          
       

          </script>

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
                        <span>Contact</span>
                </div>
            </a>
            <a href="/NewPersonalWebsite/dap.php" class="toa">
                <div class="todiv">
                        <img src="images/astronomy.png" alt=""><br>
                        <span id="toepi"><strong>DAP</strong></span>
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