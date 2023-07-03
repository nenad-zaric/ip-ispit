<?php
$msg = isset($msg)?$msg:"";
?>
<?php include_once './partials/template1.php'  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controllerTelefon.php" method="post">
    <table>
        <tr>
            <th>Marka</th>
            <th>Cena</th>
        </tr>
        <tr>
            <td> <input type="text" name="marka"> </td>
            <td> <input type="text" name="cena">  </td>
        </tr>
        <tr>
            <td colspan="2"> <input type="submit" value="Prosledi"> </td>
        </tr>
    </table>
    </form>
    <br>
    <?php
    echo $msg;
    ?>
</body>
</html>
<?php include_once './partials/template2.php'  ?>