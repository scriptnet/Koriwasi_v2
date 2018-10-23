var app = angular.module('koriwasiApp.clientesCrtl', []);


// ================================================
//   Controlador de clientes
// ================================================
app.controller('clientesCtrl', ['$scope','$routeParams', 'Clientes', function($scope, $routeParams, Clientes){

	var pag = $routeParams.pag;

	$scope.clientes = {};
	$scope.clienteSel = {};

	$scope.moverA = function( pag ){

		Clientes.cargarPagina( pag ).then( function(){
			$scope.clientes = Clientes;
			
		});

	};


	$scope.moverA(pag);

//Mostrar modal de edicion
	$scope.mostrarModal = function(cliente){
		//console.log(cliente);
		angular.copy( cliente, $scope.clienteSel );
		$("#modal_cliente").modal();

	}

//FUNCION PARA GUARDAR

$scope.guardar = function( cliente, frmCliente){
	Clientes.guardar( cliente ).then(function(){
		//coadigo cuando se actualizo
		//oculta modal despues de modificar
		$("#modal_cliente").modal('hide');
			//Limpia el formulario
			$scope.clienteSel = {};
		// frmCliente.autoValidateFormOptions.resetForm();
	});

}


}]);
