<?php
require 'flight/Flight.php';
require_once './DAO.php';

Flight::route('/', function(){
    echo 'hello world!';
});

Flight::route('POST', function(){
    $dao = new DAO();
    $cena=Flight::request()->data->cena;
    $result=$dao->jeftinijiOd($cena);
    var_dump(Fligt::request()->data->cena);
    echo json_encode($result);
});

Flight::route('GET /@cena', function($cena){
    $dao = new DAO();
    $result=$dao->jeftinijiOd($cena);
    echo json_encode($result);
});

Flight::route('GET ', function(){
    $dao=new DAOStudent();
    $result=$dao->getStudentById($id);
    echo json_encode($result);
});
Flight::route('PUT ', function(){
    $dao=new DAOStudent();
    var_dump(Flight::request()->data->ime);
    $ime=Flight::request()->data->ime;
    $prezime=Flight::request()->data->prezime;
    $brIndexa=Flight::request()->data->brIndexa;
    $result=$dao->update($id,$ime,$prezime,$brIndexa);
    echo json_encode($result);
});


Flight::start();
