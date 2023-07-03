<?php

$msg = isset($msg)?$msg:"";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert title here</title>
</head>
<body>
    <form action="controllerKlijent.php" method="post">
        <label for="ime">Ime:</label>
        <input type="text" name="ime">
        <br>
        <input type="submit" value="Prosledi">
    </form>
    <br>
    <?php
    echo $msg;
    ?>
</body>
</html>