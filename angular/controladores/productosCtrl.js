var app = angular.module('koriwasiApp.productosCrtl', []);
// ================================================
//   Controlador de productos
// ================================================
app.controller('productosCtrl', ['$scope','$routeParams', 'Productos', function($scope, $routeParams, Productos){

	var pag = $routeParams.pag;

	$scope.productos = {};
	$scope.productosSel = {};

	$scope.moverA = function( pag ){
		Productos.cargarPagina( pag ).then( function(){
			$scope.productos = Productos;
		});
	};
	
	$scope.moverA(pag);

//Mostrar modal de edicion
	$scope.mostrarModal = function(producto){
		angular.copy( producto, $scope.productosSel );
	}

//FUNCION PARA GUARDAR

$scope.guardar = function( producto, frmProductos){
	Productos.guardar( producto ).then(function(){

			//Limpia el formulario
			$scope.productosSel = {};

	});

}


}]);
