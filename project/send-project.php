<?php
include "db_conn.php";

$titlos = $_POST['titlos'];
$sigrafeas = $_POST['sigrafeas'];
$date = $_POST['trip-start'];
$katigoria = $_POST['katigoria'];
$keimeno = $_POST['keimeno'];
$link = $_POST['link'];
$pdf = $_POST['topdf'];
$file = $_POST['tofile'];

// Έλεγχος εάν το αρχείο ανέβηκε με επιτυχία
if (isset($_FILES['myfile']['tmp_name']) && !empty($_FILES['myfile']['tmp_name'])) {
    // Αν το αρχείο υπάρχει, διαβάζουμε και μετατρέπουμε την εικόνα σε binary
    $image = addslashes(file_get_contents($_FILES['myfile']['tmp_name']));
} else {
    // Αν το αρχείο δεν υπάρχει, το καθιστούμε κενό
    $image = '';
}

// Εισαγωγή δεδομένων στη βάση δεδομένων
$sql = "INSERT INTO project (Titlos, Sigrafeas, Date, Katigoria, Image, Keimeno, Link, Pdf, File) 
VALUES ('$titlos', '$sigrafeas', '$date', '$katigoria', '$image', '$keimeno', '$link', '$pdf', '$file')";

try {
    if ($conn->query($sql) === TRUE) {
        header("Location: /NewPersonalWebsite/in/mesa.php?success=Το project προστέθηκε με επιτυχία!");
        exit(); // Βεβαιωθείτε ότι η εκτέλεση σταματάει μετά την ανακατεύθυνση
    } else {
        throw new Exception("Σφάλμα κατά την προσθήκη του project: " . $conn->error);
    }
} catch (Exception $e) {
    header("Location: /NewPersonalWebsite/in/mesa.php?error=" . urlencode($e->getMessage()));
    exit(); // Βεβαιωθείτε ότι η εκτέλεση σταματάει μετά την ανακατεύθυνση
}


// Κλείσιμο σύνδεσης
$conn->close();
?>
