<?php
// Incluir el archivo de base de datos
include_once("../../config/class.Database.php");

$postdata = file_get_contents("php://input");

$request = json_decode($postdata);
$request = (array) $request;

if ( isset( $request['id_cliente'] )) { // verifica si esta definida o no

        $sql = "UPDATE cliente
      				SET
      					nom_cliente    = '". $request['nom_cliente'] ."',
      					ape_cliente    = '". $request['ape_cliente'] ."',
      					cel_cliente       = '". $request['cel_cliente'] ."',
      					dni_cliente = '". $request['dni_cliente'] ."',
                direc_cliente = '".$request['direc_cliente']."',
      					email_cliente = '". $request['email_cliente'] ."'
      			WHERE id_cliente=" . $request['id_cliente'];

        $hecho = Database::ejecutar_idu( $sql );

if (is_numeric($hecho) OR $hecho === true) {
  $respuesta = array ( 'err'=>false, 'Mensaje'=>'Registro actualizado');

}else {
  $respuesta = array ( 'err'=>true, 'Mensaje'=>$hecho);
}
  // code...
}else { //insertar
 $sql ="INSERT INTO cliente(nom_cliente, ape_cliente, cel_cliente, dni_cliente, email_cliente, direc_cliente)
        VALUES ('".$request['nom_cliente']."',
                '".$request['ape_cliente']."',
                '".$request['cel_cliente']."',
                '".$request['dni_cliente']."',
                '".$request['email_cliente']."',
                '".$request['direc_cliente']."')";

                $hecho = Database::ejecutar_idu( $sql );

    if (is_numeric($hecho) OR $hecho === true) {
      $respuesta = array ( 'err'=>false, 'Mensaje'=>'Registro Insertado');

    }else {
      $respuesta = array ( 'err'=>true, 'Mensaje'=>$hecho);
    }
}

echo json_encode($respuesta);
?>
