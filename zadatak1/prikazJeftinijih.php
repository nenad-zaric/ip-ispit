<?php

session_start();
if(!isset($_SESSION['auta'])){
    header('Location:index.php');
    exit();
}

$auta = $_SESSION['auta'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert title here</title>
</head>
<body>
    <h2>Lista jeftinijih automobila</h2>

    <table>
        <tr>
            <th>Marka</th>
            <th>Cena</th>
        </tr>
        <?php foreach($auta as $auto) { ?> 
        <tr>
            <td> <?php echo $auto['marka'];  ?></td>
            <td> <?php echo $auto['cena']; ?> </td>
        </tr>  
        <?php } ?>
    </table>

    <br>
    <a href="index.php">LOGOUT</a>

</body>
</html>