<?php

include_once './partials/template1.php';

session_start();
if(isset($_SESSION['auti'])) {
    $auti = $_SESSION['auti'];
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table border="2">
    <tr>
        <th>Marka</th>
        <th>Cena</th>
    </tr>
    <?php foreach($auti as $auto) { ?> 
    <tr>
        <td> <?= $auto['marka'] ?> </td>
        <td> <?= $auto['cena'] ?>  </td>
    </tr>
    
    <?php } ?>
    </table> 
</body>
</html>


<?php } else {
    header("Location:index.php");
}
include_once './partials/template2.php';
?>