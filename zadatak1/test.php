<?php require_once './DAO.php' ?>
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
$auta = $dao->jeftinijiOd(11000);

foreach($auta as $auto){
    echo $auto['marka']." ".$auto['cena']."<br>";
}

?>

</body>
</html>