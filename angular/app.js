var app = angular.module( 'koriwasiApp',[
		'ngRoute',
		'koriwasiApp.clientes',
		'koriwasiApp.clientesCrtl',
		'koriwasiApp.productos',
		'koriwasiApp.productosCrtl'
		]);


// controlador
app.controller('mainCtrl', ['$scope','$http', function($scope, $http){
	//bdio
	$scope.bdio = {};
	$http.get('json/bdio.json').success(function(data){
		$scope.bdio = data.bdio;
	});
 //Fin bdio
 // menu
 $scope.general = {};
 $scope.odt = {};
 $scope.ingr = {};
 $scope.contac = {};
 $scope.invent = {};
 $http.get('json/menu.json').success(function(data){
	 $scope.general = data.general;
	 $scope.odt =  data.m_ordenesdetrabajo;
	 $scope.ingr = data.m_ingresos;
	 $scope.contac = data.m_contactos;
	 $scope.invent = data.m_inventario;
 });
 // fin menu

}]);


// Rutas
// ================================================
//   Rutas
// ================================================
app.config([ '$routeProvider', function($routeProvider){

	$routeProvider
	//ponemos orden de trabajo primero porque hay errores si lo quitamos
		.when('/',{
			templateUrl: 'rutas/panel.php',
			// controller: 'dashboardCtrl'
		})
		.when('/perfil',{
			templateUrl: 'rutas/perfil.php',
			// controller: 'dashboardCtrl'
		})
		.when('/clientes/:pag',{
			templateUrl: 'rutas/clientes.php',
			controller: 'clientesCtrl'
		})

	.when('/productos/:pag',{
		templateUrl: 'rutas/productos.php',
		controller: 'productosCtrl'
	})


		.otherwise({
			redirectTo: '/'
		})

}]);
