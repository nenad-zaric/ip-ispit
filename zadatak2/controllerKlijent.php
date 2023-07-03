<?php

require_once './DAO.php';

class Controller{
    private $dao;
    private $msg;

    public function __construct($dao){
        $this->dao = $dao;
        $this->msg = '';
    }

    function doPost(){
        
        $id=isset($_POST["id"])?$_POST['id']:"";
		$user=isset($_POST["user"])?$_POST['user']:"";
        $pass=isset($_POST["pass"])?$_POST['pass']:"";
		
            if(!empty($user) && !empty($pass)){

                $postoji = $this->dao->getKlijentByUser($user);

                if($postoji == true) {

                $klijent = $this->dao->updatePass($user,$pass);

                session_start();
                $_SESSION['klijent'] = $user;
                header("Location:prikaz.php");  
                exit();
                } else {
                    $msg = 'Korisnik sa ovim imenom ne postoji.';
                    include 'index.php';
                }
            }
            else {
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

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $controller->doPost();
}
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $controller->doGet();
}

$message = $controller->getMessage();

?>