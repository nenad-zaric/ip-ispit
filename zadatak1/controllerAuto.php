<?php 

require_once './DAO.php';

class controllerAuto {
    private $msg;
    private $dao;

    function __construct($dao){
        $this->dao=$dao;
        $this->msg='';
    }

    function doPost($cena){

        if(!empty($cena)){
            $auta = $this->dao->jeftinijiOd($cena);

            session_start();

            $_SESSION['auta'] = $auta;
            header('Location:prikazJeftinijih.php');
            exit();
        } else {
            $msg = 'Cena nije prosledjena.';
            include './index.php';
        }

    }

    function doGet(){
        session_destroy();
        header("Location:index.php");
        exit();
    }

    public function getMessage(){
        return $this->msg;
      }

}

$dao = new DAO();
$controller = new controllerAuto($dao);

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $cena = $_POST['cena'];
    $controller->doPost($cena);

} elseif($_SERVER['REQUEST_METHOD'] === 'GET'){
    $controller->doGet();
}

$message = $controller->getMessage();

?>
