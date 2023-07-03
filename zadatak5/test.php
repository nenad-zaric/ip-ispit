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
   
   echo $dao->insertTelefon("Nokia",20000);

    $telefoni = $dao->getTelefoni("Nokia",10000);
    foreach($telefoni as $telefon){
        echo $telefon['marka']." ".$telefon['cena']."<br>";
    }

    ?>
</body>
</html>