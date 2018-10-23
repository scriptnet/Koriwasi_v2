<div class="bg-primary text-white text-center">
  <div  class="container u-space-1">
    <span class="h6 d-block d-lg-inline-block font-weight-light mb-lg-0">
      <span class="font-weight-bold">KORIWASI</span> – agregar nuevo cliente.
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
    <form name="frmCliente" ng-submit="guardar( clienteSel, frmCliente)" class="js-validate js-step-form ng-pristine ng-valid">


    <div class="row">
      <div class="col-sm-7 mb-2 mb-sm-0">
        <div class="row">
	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">Nombre</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                      <input ng-model="clienteSel.nom_cliente" class="form-control u-form__input" type="text" name="companyName" required="" placeholder="" aria-label="" data-msg="Coloca un nombre" data-error-class="u-has-error" data-success-class="u-has-success">
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->

	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">APELLIDO</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                      <input ng-model="clienteSel.ape_cliente" class="form-control u-form__input" type="text" name="websiteURL" required="" placeholder="" aria-label="" data-msg="Coloca un apellido." data-error-class="u-has-error" data-success-class="u-has-success">
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->

	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">CELULAR</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                      <input ng-model="clienteSel.cel_cliente" class="form-control u-form__input" type="text" name="contactFirstNameCompany" required="" placeholder="" aria-label="Brian" data-msg="Coloca un número" data-error-class="u-has-error" data-success-class="u-has-success">
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->

	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">DNI</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                      <input ng-model="clienteSel.dni_cliente" class="form-control u-form__input" type="text" name="contactLastNameCompany" required="" placeholder="" aria-label="Williams" data-msg="Coloca un número." data-error-class="u-has-error" data-success-class="u-has-success">
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->

	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">EMAIL</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                      <input ng-model="clienteSel.email_cliente" class="form-control u-form__input" type="email" name="emailCompany" required="" placeholder="example@gmail.com" aria-label="example@gmail.com" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->

	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">Dirección</label>
                    <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                      <input ng-model="clienteSel.direc_cliente" class="form-control u-form__input" type="text" name="emailCompany" required="" placeholder="" aria-label="" data-msg="Dirección" data-error-class="u-has-error" data-success-class="u-has-success">
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->
	              </div>
        <p class="small">
          <span class="fa fa-info-circle mr-1"></span>
          Cliente registrado no se podrá eliminar de la base de datos. <a href="terminos.php">Leer términos</a>
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
            Apellido

          </div>
        </th>
        <th scope="col" class="font-weight-medium">
          <div class="d-flex justify-content-between align-items-center">
            Celular

          </div>
        </th>
        <th scope="col" class="font-weight-medium">
          <div class="d-flex justify-content-between align-items-center">
            Dni

          </div>
        </th>
        <th scope="col" class="font-weight-medium">
          <div class="d-flex justify-content-between align-items-center">
            Email

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
      <tr ng-repeat="cliente in clientes.cliente">
        <td class="align-middle font-weight-normal">{{cliente.nom_cliente}}</td>
        <td class="align-middle">{{cliente.ape_cliente}}</td>
        <td class="align-middle text-success">
          <span class="fas fa-mobile-alt mr-1"></span>
          {{cliente.cel_cliente}}
        </td>
        <td class="align-middle">{{cliente.dni_cliente}}</td>
        <td class="align-middle">
          <span class="fas fa-envelope text-primary small mr-1"></span>
          {{cliente.email_cliente}}
        </td>
        <td class="align-middle">
          <a ng-click="mostrarModal(cliente)" data-toggle="collapse" data-target="#cardOne" class="btn btn-sm u-btn-primary--air transition-3d-hover" data-overlay-color="#111722">
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
                  <li ng-repeat="pag in clientes.paginas" class="page-item" ng-class="
                  {'active': clientes.pag_actual === pag}">
                    <a  class="page-link" href="" data-dt-page-to="0" ng-click="moverA(pag)">
                      {{ pag }}
                    </a>
                  </li>
                  <li class="page-item">
                    <a ng-click="moverA( clientes.total_paginas )" class="page-link" href="" aria-label="Next">
                      <span aria-hidden="true">
                        »
                      </span>
                    </a>
                  </li>
                </ul>
              </nav>

              <small id="datatableInfo" class="text-secondary">Total de registros: {{clientes.conteo}} </small>
            </div>
    </div>
  </div>
  <!-- End Card -->




</div>
