<?php 
require_once 'DAO.php';
//error_reporting(0);
if(!isset($_SESSION)) session_start(); 


if ($_SESSION['klijent']!=""){
	$dao=new DAO();
	$klijent=$dao->getKlijent($_SESSION['klijent']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert title here</title>
</head>
<body>
<h1>Klijent podaci:</h1>
  <p>User: <?= $klijent['user'] ?></p>
  <p>Pass: <?= $klijent['pass'] ?></p>
</body>
</html>
<?php 
}else{
	header("Location:index.php");
}
?>