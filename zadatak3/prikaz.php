<?php
session_start();

if (isset($_SESSION['klijent'])) {
    // Postoji sesija - prikaz ulogovanog korisnika
    $klijent = $_SESSION['klijent'];
    echo "<h1>Dobrodošli, $klijent!</h1>";

    echo "<a href='controllerKlijent.php'>Logout</a>";
} else {
    // Nema sesije - redirekcija na index.php
    header("Location: index.php");
    exit();
}
?>
    