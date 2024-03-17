<!DOCTYPE html>
<html lang="en">
<head>
    <title>Σύνδεση | Be A Beast</title>
    <!-- <link rel="icon" href="/images1/LogoNew-re.png"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;

}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #ff512f,
        #f09819
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    text-size-adjust: 100%;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 20px;
    margin-left: 20%;
    width: 60%;
    background-color: #ffffff;
    color: #080710;
    padding: 5px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

.logo{
    border-radius: 10%;
    width: 40%;
}

#signIn {
    margin-left: 20%;
    width: 60%;
    cursor: pointer;
    background-color: #e4740c;
    color: white;
    text-align: center;
    border-radius: 20px;
}


#signIn:hover {
    background-color: #ff6600;
}

#cookieConsent {
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: #5e5041;
    color: #fff;
    padding: 10px;
    text-align: center;
    box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.2);
    z-index: 9999;
}


#apodoxh {
    background-color: #151418;
    color: #fff;
    border: none;
    margin-top: 0px;
    width: 20%;
    padding: 10px 20px;
    cursor: pointer;
}

#apodoxh:hover {
    background-color: #f57c00;
}

#closeButton {
    position: absolute;
    top: 10px;
    right: 25px;
    background-color: transparent;
    border: none;
    color: #000; /* Μαύρο χρώμα για το "X" */
    font-size: 20px;
    cursor: pointer;
    outline: none; /* Καταργούμε το περίγραμμα γύρω από το κουμπί */
}

.hforma{
    z-index: 999;
	
}

section 
{
  position: absolute;
  width: 100vw;
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 2px;
  flex-wrap: wrap;
  overflow: hidden;
}
section::before 
{
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  background: linear-gradient(#000,rgb(255, 166, 0),#000);
  animation: animate 5s linear infinite;
}
@keyframes animate 
{
  0%
  {
    transform: translateY(-100%);
  }
  100%
  {
    transform: translateY(100%);
  }
}
section span 
{
  position: relative;
  display: block;
  width: calc(6.25vw - 2px);
  height: calc(6.25vw - 2px);
  background: #181818;
  z-index: 2;
  transition: 1.5s;
}

::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: black;
  border-radius: 20px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: rgba(241, 241, 241, 0.829);
  border-radius: 20px;
  height: 20px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}

      #consent-bar {
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 300px;
        border-radius: 20px;
        margin-bottom: 50px;
        background-color: rgb(255, 255, 255);
        border: 2px solid black;
        text-align: center;
        font-size: 14px;
        z-index: 9999;
      }

      #consent-button{
        border-radius: 10px;
        width: 40%;
        background-color: chocolate;
        color: white;
        border: none;
        padding: 15px 20px;
        font-size: 14px;
        cursor: pointer;
        margin-top: 0px;
      }

      #consent-button:hover {
        background-color: rgb(255, 186, 122);
        border: 1px solid black;
        color: black;
      }

       #discline-button {
        margin-left: 5px;
        border-radius: 10px;
        background-color: rgb(255, 255, 255);
        border: 1px solid black;
        color: black;
        padding: 10px 16px;
        font-size: 14px;
        cursor: pointer; /* Το χρώμα που θα εφαρμόζεται όταν το ποντίκι είναι πάνω από το κουμπί */
      }

      #discline-button {
        margin-left: 5px;
        border-radius: 10px;
        background-color: rgb(255, 255, 255);
        border: 1px solid black;
        color: black;
        padding: 10px 16px;
        font-size: 14px;
        cursor: pointer; /* Το χρώμα που θα εφαρμόζεται όταν το ποντίκι είναι πάνω από το κουμπί */
      }

      .error{
        color: red;
      } 

      .topisw{
        margin-left: -10px;
      }


      @media (max-width: 768px) {
          #keimeno{
            margin-right: -10px;
          }

          #taspan{
            display: none;
          }

          #apodoxh {
          background-color: #151418;
          color: #fff;
          border: none;
          margin-top: 0px;
          width: 80%;
          padding: 10px 20px;
          cursor: pointer;
      }

      #consent-bar {
        bottom: 0;
        left: 0px;
      }

      .hforma{
          z-index: 999;
          max-height: 750px; /* Ορίζετε το μέγιστο ύψος που θέλετε να δώσετε στη φόρμα */
          overflow-y: auto; 
      }

      form{
          width: 100%;
          background-color: rgba(53, 53, 53, 0.945);
          backdrop-filter: none;
          border: 2px solid rgba(255,255,255,0.1);
          box-shadow: 0 0 40px rgba(8,7,16,0.6);
          padding: 55px 35px;
		  overflow-y: auto; 
      }

    
      
  }

    </style>
</head>
<body>

     <form class="hforma" action="epe.php" method="POST">
        <a class="topisw" href="/NewPersonalWebsite/"><svg height="41" viewBox="0 0 20 15" width="41" xmlns="http://www.w3.org/2000/svg"><path d="m4.5 8.5-4-4 4-4" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" transform="translate(7 6)"/></svg><p style="margin-top: -33px; margin-left: 30px;">Πίσω στην αρχική</p></a><br>

        <label>Όνομα:</label>
        <input type="text" id="name" name="uname" placeholder="Name" autocomplete="name">

        <label>Κωδικός πρόσβασης:</label>
        
        <div style="position: relative;">
            <input type="password" id="password" name="password" placeholder="Password" autocomplete="current-password"
                style="padding-right: 30px;">
            <i class="far fa-eye" id="togglePassword"
                style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
        </div>
        <br>
        <?php if (isset($_GET['error'])) { ?>
     		  <p class="error"><?php echo $_GET['error']; ?></p>
      	<?php } ?>

        <button type="submit">Συνδεθείτε</button>
        <br><br>
    </form>
    6985

        
</body>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".hforma");
    const nameInput = document.getElementById("name");
    const passwordInput = document.getElementById("password");

    form.addEventListener("submit", function (event) {
      if (!nameInput.value || !passwordInput.value) {
        event.preventDefault();
        alert("Παρακαλώ συμπληρώστε όλα τα πεδία εισόδου.");
      }
    });
  });

    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>




</html>