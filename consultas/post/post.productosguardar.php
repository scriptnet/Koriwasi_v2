<?php
// Incluir el archivo de base de datos
include_once("../../config/class.Database.php");

$postdata = file_get_contents("php://input");

$request = json_decode($postdata);
$request = (array) $request;

if ( isset( $request['id_producto'] )) { // verifica si esta definida o no

        $sql = "UPDATE producto
      				SET
      					Nom_producto    = '". $request['Nom_producto'] ."',
      					categoria_producto    = '". $request['categoria_producto'] ."',
                proveedor_producto    = '". $request['proveedor_producto'] ."',
      					responsable_producto       = '". $request['responsable_producto'] ."',
      					peso_produco = '". $request['peso_produco'] ."',
                costo_producto = '".$request['costo_producto']."',
                precio_producto = '".$request['precio_producto']."',
                cantidad_producto = '".$request['cantidad_producto']."',
      					descripcion_producto = '". $request['descripcion_producto'] ."'
      			WHERE id_producto=" . $request['id_producto'];

        $hecho = Database::ejecutar_idu( $sql );

if (is_numeric($hecho) OR $hecho === true) {
  $respuesta = array ( 'err'=>false, 'Mensaje'=>'Registro actualizado');

}else {
  $respuesta = array ( 'err'=>true, 'Mensaje'=>$hecho);
}
  // code...
}else { //insertar
 $sql ="INSERT INTO producto (Nom_producto, categoria_producto, proveedor_producto, responsable_producto, peso_produco, costo_producto, precio_producto, cantidad_producto, descripcion_producto)
        VALUES ('".$request['Nom_producto']."',
                '".$request['categoria_producto']."',
                '".$request['proveedor_producto']."',
                '".$request['responsable_producto']."',
                '".$request['peso_produco']."',
                '".$request['costo_producto']."',
                '".$request['precio_producto']."',
                '".$request['cantidad_producto']."',
                '".$request['descripcion_producto']."')";

                $hecho = Database::ejecutar_idu( $sql );

    if (is_numeric($hecho) OR $hecho === true) {
      $respuesta = array ( 'err'=>false, 'Mensaje'=>'Registro Insertado');

    }else {
      $respuesta = array ( 'err'=>true, 'Mensaje'=>$hecho);
    }
}

echo json_encode($respuesta);
?>
