

<div class="bg-primary text-white text-center">
  <div  class="container u-space-1">
    <span class="h6 d-block d-lg-inline-block font-weight-light mb-lg-0">
      <span class="font-weight-bold">KORIWASI</span> – agregar nuevo Producto.
    </span>
    <a class="btn btn-sm u-btn-white transition-3d-hover font-weight-normal ml-2" href="" ng-click="mostrarModal({})" data-toggle="collapse" data-target="#cardOne">Nuevo</a>
  </div>
</div>
<!-- EDITAR GUARDAR -->
<div id="paymentDetails" class="accordion" >
<!-- Card -->
<div class="card u-card-collapse">

<div id="cardOne" class="collapse" aria-labelledby="cardHeadingOne" data-parent="#paymentDetails">
  <div class="card-body px-4">
    <!-- Card Details -->
    <form name="frmProductos" ng-submit="guardar( productosSel, frmProductos)" class="js-validate js-step-form ng-pristine ng-valid">


    <div class="row">
      <div class="col-sm-7 mb-2 mb-sm-0">
        <div class="row">
	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">Nombre</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                      <input ng-model="productosSel.Nom_producto" class="form-control u-form__input" type="text" name="companyName" required="" placeholder="" aria-label="" data-msg="Coloca un nombre" data-error-class="u-has-error" data-success-class="u-has-success">
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->

	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">categoría</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
                        <select class="form-control u-form__input" name="" ng-model="productosSel.categoria_producto" required="" data-msg="Coloca una  categoría. " data-error-class="u-has-error" data-success-class="u-has-success">
                          <option value="categoria_1">categoria 1</option>
                          <option value="categoria_2">categoria 2</option>
                          <option value="categoria_3">categoria 3</option>
                          <option value="Piezas terminadas">Piezas terminadas</option>
                        </select>
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->

	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">Proveedor</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
                        <select class="form-control u-form__input" name="" ng-model="productosSel.proveedor_producto" required="" data-msg="Coloca una proveedor. " data-error-class="u-has-error" data-success-class="u-has-success">
                          <option value="proveedor_1">proveedor 1</option>
                          <option value="proveedor_2">proveedor 2</option>
                          <option value="proveedor_3">proveedor 3</option>
                          <option value="mesa">mesa</option>
                        </select>

                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->

	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">Responsable</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
                        <select class="form-control u-form__input" name="" ng-model="productosSel.responsable_producto" required="" data-msg="Coloca una responsable_producto. " data-error-class="u-has-error" data-success-class="u-has-success">
                          <option value="1">Alex</option>
                          <option value="2">Martha</option>
                          <option value="3">Juan</option>
                          <option value="4">Luis</option>
                        </select>
                     </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->

	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">Peso</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                      <input ng-model="productosSel.peso_produco" class="form-control u-form__input" type="text" name="emailCompany" required="" placeholder="10,02" aria-label="example@gmail.com" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->

	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">Costo</label>
                    <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                      <input ng-model="productosSel.costo_producto" class="form-control u-form__input" type="text" name="emailCompany" required="" placeholder="10,02" aria-label="" data-msg="Dirección" data-error-class="u-has-error" data-success-class="u-has-success">
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->
                  <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">Precio</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                      <input ng-model="productosSel.precio_producto" class="form-control u-form__input" type="text" name="emailCompany" required="" placeholder="10,02" aria-label="example@gmail.com" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->

	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">Cantidad</label>
                    <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                      <input ng-model="productosSel.cantidad_producto" class="form-control u-form__input" type="text" name="emailCompany" required="" placeholder="10,02" aria-label="" data-msg="Dirección" data-error-class="u-has-error" data-success-class="u-has-success">
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->
                  <!-- Input Group -->
                 <div class="col-sm-12 mb-4">
                   <label class="h6 small d-block text-uppercase">Descripción</label>
                    <div class="js-form-message">
                     <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
                       <textarea ng-model="productosSel.descripcion_producto" class="form-control u-form__input" rows="2" name="description" required="" placeholder="" aria-label="" data-msg="Coloca una decripción." data-error-class="u-has-error" data-success-class="u-has-success"></textarea>
                    </div>
                   </div>
                 </div>
                 <!-- End Input Group -->
	              </div>
        <p class="small">
          <span class="fa fa-info-circle mr-1"></span>
          Producto registrado no se podrá eliminar de la base de datos. <a href="terminos.php">Leer términos</a>
        </p>
      </div>
      <div class="col-sm-5 mb-2 mb-sm-0">
        <h5 class="h6 mb-0">CITE JOYERIA KORIWASI</h5>

        <address class="font-size-14">
          SUR OESTE DEL QHAPAC ÑAM MZA. A LOTE. 2 COMPLEJO QHAPAC ÑAM<br>
          ENTRE AV. LA CANTUTA Y LA AV. II SN<br>
          TELÉFONOS: Fijo:(076) 268882 - Cel.976762484<br>
          CAJAMARCA - CAJAMARCA - CAJAMARCA
        </address>
        <button data-toggle="collapse" data-target="#cardOne" type="button" class="btn btn-xs u-btn-secondary--air">Cerrar</button>
        <button type="submit" class="btn btn-xs btn-primary">Guardar</button>
      </div>
    </div>
    </form>
    <!-- End Card Details -->
  </div>
</div>
</div>
<!-- End Card -->
  </div>

  <!-- FIN EDITAR GUARDAR -->





<div class="card-deck d-block d-lg-flex mb-6 ng-scope">

  <!-- Card -->
  <div class="card mb-12 mb-lg-0">


    <div class="card-body p-5">

      <!-- Transaction Table -->
<div class="table-responsive-md u-datatable">
  <table class=" table table-borderless u-datatable__content mb-5">

    <thead>
      <tr class="text-uppercase font-size-14">
        <th scope="col" class="font-weight-medium">
          <div class="d-flex justify-content-between align-items-center">
            Nombre

          </div>
        </th>
        <th scope="col" class="font-weight-medium">
          <div class="d-flex justify-content-between align-items-center">
            categoría

          </div>
        </th>
        <th scope="col" class="font-weight-medium">
          <div class="d-flex justify-content-between align-items-center">
            Proveedor

          </div>
        </th>
        <th scope="col" class="font-weight-medium">
          <div class="d-flex justify-content-between align-items-center">
            Responsanble

          </div>
        </th>
        <th scope="col" class="font-weight-medium">
          <div class="d-flex justify-content-between align-items-center">
            Peso

          </div>
        </th>
        <th scope="col" class="font-weight-medium">
          <div class="d-flex justify-content-between align-items-center">
            Más

          </div>
        </th>
      </tr>
    </thead>
    <tbody class="font-size-14">
      <tr ng-repeat="producto in productos.producto">
        <td class="align-middle font-weight-normal">{{producto.Nom_producto}}</td>
        <td class="align-middle">{{producto.categoria_producto}}</td>
        <td class="align-middle text-success">
          <span class="fas fa-mobile-alt mr-1"></span>
          {{producto.proveedor_producto}}
        </td>
        <td class="align-middle">{{producto.responsable_producto}}</td>
        <td class="align-middle">
          <span class="fas fa-envelope text-primary small mr-1"></span>
          {{producto.peso_produco}}
        </td>
        <td class="align-middle">
          <a ng-click="mostrarModal(producto)" data-toggle="collapse" data-target="#cardOne" class="btn btn-sm u-btn-primary--air transition-3d-hover" data-overlay-color="#111722">
              <span class="fa fa-edit font-size-13 mr-2"></span>
              Editar
            </a>
        </td>
      </tr>

    </tbody>

  </table>

</div>
<!-- End Transaction Table -->
<div class="d-flex justify-content-between align-items-center">
              <nav id="datatablePagination" aria-label="Activity pagination">
                <ul class="pagination mb-0">
                  <li ng-click="moverA(1)" class="page-item">
                    <a class="page-link" href="" aria-label="Previous">
                      <span aria-hidden="true">
                        «
                      </span>
                    </a>
                  </li>
                  <li ng-repeat="pag in producto.paginas" class="page-item" ng-class="
                  {'active': producto.pag_actual === pag}">
                    <a  class="page-link" href="" data-dt-page-to="0" ng-click="moverA(pag)">
                      {{ pag }}
                    </a>
                  </li>
                  <li class="page-item">
                    <a ng-click="moverA( producto.total_paginas )" class="page-link" href="" aria-label="Next">
                      <span aria-hidden="true">
                        »
                      </span>
                    </a>
                  </li>
                </ul>
              </nav>

              <small id="datatableInfo" class="text-secondary">Total de registros: {{productos.conteo}} </small>
            </div>
    </div>
  </div>
  <!-- End Card -->




</div>
