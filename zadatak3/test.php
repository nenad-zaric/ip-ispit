<?php include_once './DAO.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $dao = new DAO();
    echo $dao->klijentExist("ivana","jdjsjjkk");

    echo $dao->updateLogInTime("marija","swkkjswk");
    
    ?>
</body>
</html>