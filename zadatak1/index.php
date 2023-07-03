<?php 
$msg=isset($msg)?$msg:"";
?>

<?php include_once './partials/template1.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert title here</title>
</head>
<body>
    <form action="controllerAuto.php" method="post">
        <label for="cena">Cena:</label>
        <input type="number" name="cena" id="cena"> <br>
        <input type="submit" value="Pretrazi">
    </form>
    <?php
    echo $msg;
    ?>
</body>
</html>


<?php include_once './partials/template2.php' ?>