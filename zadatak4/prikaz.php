<?php

session_start();

if(isset($_SESSION['klijent'])) {

    $klijent = $_SESSION['klijent'];
    echo "Obrisan je klijent sa imenom: $klijent";
} else {

    header("Location:index.php");
    exit();

}

?>