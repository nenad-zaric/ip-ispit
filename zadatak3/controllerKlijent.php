<?php

include_once './DAO.php';

class Controller{
    private $dao;
    private $msg;

    public function __construct($dao){
        $this->dao = $dao;
        $this->msg = '';
    }

    function doPost(){
        $user = isset($_POST['user'])?$_POST['user']:"";
        $pass = isset($_POST['pass'])?$_POST['pass']:"";
        $logInTime = isset($_POST['logInTime'])?$_POST['logInTime']:"";

        if(!empty($user) && !empty($pass)){

            $postoji = $this->dao->klijentExist($user,$pass);

            if($postoji == true){

                $klijent = $this->dao->updateLogInTime($user,$pass);

                session_start();

                $_SESSION['klijent'] = $user;
                header("Location: prikaz.php");
                exit();

            } else {
                $msg = 'Klijent sa ovim user-om i pass-om ne postoji!';
                include 'index.php';
            }

        } else {

            $msg = 'Niste popunili sve podatke.';
            include 'index.php';
        }
    }

    function doGet(){

        session_unset();
        session_destroy();
        header("Location:index.php");
        exit();
    }

    function getMessage(){
        return $this->msg;
    }
}

$dao = new DAO();
$controller = new Controller($dao);

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $controller->doPost();
}

if($_SERVER['REQUEST_METHOD'] === 'GET') {
    $controller->doGet();
}

$message = $controller->getMessage();

?>