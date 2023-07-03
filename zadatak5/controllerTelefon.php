<?php
require_once './DAO.php';


class Controller{
    private $dao;
    private $msg;


    public function __construct($dao) {
        $this->dao = $dao;
        $this->msg = '';
    }

    function doPost(){
        $id = isset($_POST['id'])?$_POST['id']:"";
        $marka = isset($_POST['marka'])?$_POST['marka']:"";
        $cena = isset($_POST['cena'])?$_POST['cena']:"";

        if(!empty($marka) && !empty($cena)){
            
            $this->dao->insertTelefon($marka, $cena);

            $telefoni = $this->dao->getTelefoni($marka, $cena);

            session_start();
            $_SESSION['telefoni'] = $telefoni;
            header("Location:prikaz.php");
            exit();
        } else {
            $msg = 'Nisu uneti svi podaci.';
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

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $controller->doPost();
}

if($_SERVER['REQUEST_METHOD'] === 'GET')
{
    $controller->doGet();
}

$message = $controller->getMessage();




?>