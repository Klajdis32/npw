<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    $uname = $_POST['uname'];
    $pass = $_POST['password'];

    // Χρησιμοποιήστε προετοιμασμένα ερωτήματα για ασφαλή εκτέλεση SQL
    $sql = "SELECT id, username, password FROM login WHERE username=?";
    $stmt = mysqli_prepare($conn, $sql);

    // Έλεγχος αν υπάρχει σφάλμα στην προετοιμασία του ερωτήματος
    if ($stmt === false) {
        die("Σφάλμα στην προετοιμασία του ερωτήματος: " . mysqli_error($conn));
    }

    // Συνδέστε την παράμετρο του ονόματος χρήστη
    mysqli_stmt_bind_param($stmt, "s", $uname);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    // Ελέγχουμε αν υπάρχει αποτέλεσμα
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        if ($row && password_verify($pass, $row['password'])) {
            // Ο κωδικός πρόσβασης είναι σωστός
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
            header("Location: /NewPersonalWebsite/in/mesa.php");
            exit();
        } else {
            // Λάθος όνομα χρήστη ή κωδικός πρόσβασης
            header("Location: /NewPersonalWebsite/auth/login.php?error=Λανθασμένο όνομα χρήστη ή κωδικός πρόσβασης");
            exit();
        }
    } else {
        // Σφάλμα κατά την εκτέλεση του ερωτήματος
        header("Location: /NewPersonalWebsite/auth/login.php?error=Σφάλμα κατά την εκτέλεση του ερωτήματος");
        exit();
    }
} else {
    header("Location: /NewPersonalWebsite/auth/login.php");
    exit();
}
?>