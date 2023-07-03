<?php
require_once './DAO.php';

class Controller {
    private $dao;
    private $msg;

    public function __construct($dao) {
        $this->dao = $dao;
        $this->msg = '';
    }

    function doPost() {
        $id = isset($_POST['id'])?$_POST['id']:"";
        $ime = isset($_POST['ime'])?$_POST['ime']:"";
        $prezime = isset($_POST['prezime'])?$_POST['prezime']:"";

        if(!empty($ime)) {

            $postoji = $this->dao->getKlijentByImePrezime($ime,$prezime);

            if($postoji == true) {

                $klijent = $this->dao->deleteKlijent($ime);

                session_start();

                $_SESSION['klijent'] = $ime;
                header("Location:prikaz.php");
                exit();
            } else {

                $msg = 'Klijent sa ovim imenom ne postoji.';
                include 'index.php';
            }

        } else {
            $msg = 'Niste uneli ime klijenta!';
            include 'index.php';
        }
    }

        function doGet() {

            session_unset();
            session_destroy();
            header("Location:index.php");
            exit();
        }


        function getMessage() {
            return $this->msg;
        }
}

$dao = new DAO();
$controller = new Controller($dao);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->doPost();
}

if($_SERVER['REQUEST_METHOD'] === 'GET') {
    $controller->doGet();
}

$message = $controller->getMessage();



?>