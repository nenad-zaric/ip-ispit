<?php

session_start();
if(isset($_SESSION['telefoni'])){
    $telefoni =  $_SESSION['telefoni'];

?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>Lista skupljih telefona</h2>
        <table>
            <tr>
                <th>Marka</th>
                <th>Cena</th>
            </tr>
            <tr>
            <?php foreach($telefoni as $telefon) { ?>
                <td> <?=$telefon['marka']?> </td>
                <td> <?=$telefon['cena']?>  </td>
            </tr>
            <?php } ?>
        </table>
        <br>
        <a href="index.php">LOGOUT</a>
   
    </body>
    </html>

    
<?php } else {
    header("Location:index.php");
    exit();
}
?>