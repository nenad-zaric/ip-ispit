<?php

$msg = isset($msg)?$msg:"";

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
    <form action="controllerKlijent.php" method="POST">
    <table>
        <tr>
            <th>User</th>
            <th>Pass</th>
        </tr>
        <tr>
            <td> <input type="text" name="user"> </td>
            <td> <input type="text" name="pass"> </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Azuriraj">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <?php echo $msg; ?>
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<?php include_once './partials/template2.php' ?>