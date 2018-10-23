var app = angular.module('koriwasiApp.productos',[]);


app.factory('Productos', ['$http', '$q', function($http, $q){

	var self = {

		'cargando'		: false,
		'err'     		: false,
		'conteo' 		: 0,
		'producto' 		: [],
		'pag_actual'    : 1,
		'pag_siguiente' : 1,
		'pag_anterior'  : 1,
		'total_paginas' : 1,
		'paginas'	    : [],


		guardar: function( producto){
			var d = $q.defer();
				$http.post('consultas/post/post.productosguardar.php', producto )
					.success(function( respuesta ){
						self.cargarPagina(self.pag_actual);
						d.resolve();
								console.log(producto);
					});

			return d.promise;
		},

		cargarPagina: function( pag ){

			var d = $q.defer();

			$http.get('consultas/get/get.productos.php?pag=' + pag )
				.success(function( data ){

					self.err           = data.err;
					self.conteo        = data.conteo;
					self.producto      = data.producto;
					self.pag_actual    = data.pag_actual;
					self.pag_siguiente = data.pag_siguiente;
					self.pag_anterior  = data.pag_anterior;
					self.total_paginas = data.total_paginas;
					self.paginas       = data.paginas;

					return d.resolve();
				});



			return d.promise;
		}


	};


	return self;


}]);
