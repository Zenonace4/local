<?php
include "db.php";
$usu1 = $_POST['usuario1'];
$pass1 = $_POST['clave1'];
//$usu1 = $_REQUEST['usuario1'];
//$pass1 = $_REQUEST['clave1'];
//$usu1 = "valor";
//$pass1 = "valor";
if ($usu1 == "" || $pass1 == "") {
    echo "ERROR1";
} else {
    $db = new Database();
    $con = $db->conectar();
    $sql = $con->prepare("SELECT * FROM Registro where nombre=? AND valor=?");
    $sql->bindParam(1, $usu1);
    $sql->bindParam(2, $pass1);
    $sql->execute();
    $response = $sql->fetchAll(PDO::FETCH_ASSOC);
    //print_r($response);
    if (count($response) == 0) {
        echo "ERROR2";
    } else {
        echo "ACCESO";
    }
    //$sql->closeCursor();
}
?>
