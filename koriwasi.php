<?php
// Inicializar la sesión
session_start();
// mostrar datos
require_once 'config/conexion.php';
$user = $_SESSION['username'];
$var_consulta = "SELECT nom_user, nom_area FROM usuario
INNER JOIN area ON area.area_id = usuario.id_area WHERE nom_user = '" . $user . "'";
$var_resultado = $bd->query($var_consulta);
if ($var_resultado->num_rows>0)
{

	while ($var_fila=$var_resultado->fetch_array())
	{


      $name = $var_fila["nom_user"];
      $area = $var_fila["nom_area"];

	}
}


if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="" dir="ltr" ng-app="koriwasiApp" ng-controller="mainCtrl" >
  <head>
    <meta charset="utf-8">

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KORIWASI</title>

      <!-- CSS Global Compulsory -->
   <link rel="stylesheet" href="css/bootstrap.css">

   <!-- CSS Implementing Plugins -->
   <link rel="stylesheet" href="css/fontawesome-all.min.css">
   <link rel="stylesheet" href="css/custombox.min.css">
   <link rel="stylesheet" href="css/animate.min.css">
   <link rel="stylesheet" href="css/hs.megamenu.css">
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
   <link rel="stylesheet" href="css/flatpickr.min.css">

   <!-- CSS Front Template -->
   <link rel="stylesheet" href="css/front.css">

	 <!--  angualrjs-->
	 <script src="angular/lib/angular.min.js"></script>
	 <script src="angular/lib/angular-route.min.js"></script>
	 <!--  controladores-->
	  <script src="angular/app.js"></script>
		<script src="angular/controladores/clientesCtrl.js"></script>
		<script src="angular/controladores/productosCtrl.js"></script>
		<!--  Servicios-->
		<script src="angular/servicios/clientes_servicio.js"></script>
		<script src="angular/servicios/productos_servicio.js"></script>

  </head>
  <body>

    <!-- ========== MAIN ========== -->
 <main id="content" role="main">
   <!-- Breadcrumb Section -->
   <div class="bg-primary">
     <div class="container u-space-1-top pb-3">
       <div class="row">
         <div class="col-lg-5 order-lg-2 text-lg-right mb-4 mb-lg-0">
           <div class="d-flex d-lg-inline-block justify-content-between justify-content-lg-end align-items-center align-items-lg-start">
             <!-- Breadcrumb -->
             <ol class="breadcrumb breadcrumb-white breadcrumb-no-gutter mb-0">

               <li class="breadcrumb-item"><a class="breadcrumb-link" href="index.php">Login</a></li>
               <li class="breadcrumb-item active" aria-current="page">Panel</li>
             </ol>
             <!-- End Breadcrumb -->

             <!-- Breadcrumb Nav Toggle Button -->
             <div class="d-lg-none">
               <button type="button" class="navbar-toggler btn u-hamburger u-hamburger--white"
                       aria-label="Toggle navigation"
                       aria-expanded="false"
                       aria-controls="breadcrumbNavBar"
                       data-toggle="collapse"
                       data-target="#breadcrumbNavBar">
                 <span id="breadcrumbHamburgerTrigger" class="u-hamburger__box">
                   <span class="u-hamburger__inner"></span>
                 </span>
               </button>
             </div>
             <!-- End Breadcrumb Nav Toggle Button -->
           </div>
         </div>

         <div class="col-lg-7 order-lg-1">
           <!-- User Info -->
           <div class="media d-block d-sm-flex align-items-sm-center">
             <div class="u-lg-avatar position-relative mb-3 mb-sm-0 mr-3">
               <img class="u-lg-avatar rounded-circle" src="img/img2.jpg" alt="Image Description">
               <span class="u-badge u-badge-border-success u-badge--md u-badge-pos--bottom-right-0 rounded-circle">
                 <span class="fa fa-check"></span>
               </span>
             </div>
             <div class="media-body">
               <h1 class="h3 text-white font-weight-medium mb-1"><?php echo $name; ?></h1>
               <span class="d-block text-white"><?php echo $area; ?></span>
             </div>
           </div>
           <!-- End User Info -->
         </div>
       </div>
     </div>

     <div ng-include="'includes/menu.html'">

     </div>
   </div>
   <!-- End Breadcrumb Section -->

   <!-- Content Section -->
   <div class="u-bg-light-blue-50">
     <div class="container u-space-2" ng-view>


     </div>
   </div>
   <!-- End Content Section -->
 </main>
 <!-- ========== END MAIN ========== -->

   <!-- ========== SECONDARY CONTENTS ========== -->

  <!-- Request Payment Modal Window -->

	<div id="requestPaymentModal" class="js-request-payment-window u-modal-window bg-transparent" style="width: 600px;">
	  <div class="bg-white rounded mb-9">
	    <!-- Header -->
	    <header class="d-flex justify-content-between align-items-center u-bg-light-blue-50 rounded-top py-3 px-5">
	      <h3 class="h6 mb-0">Nueva cotización</h3>

	      <button class="btn btn-xs u-btn--icon u-btn-text-secondary" type="button" onclick="Custombox.modal.close();">
	        <span class="fas fa-times"></span>
	      </button>
	    </header>
	    <!-- End Header -->

	    <hr class="my-0">

	    <!-- Request Payment Form -->
	    <form class="js-validate js-step-form"
	          data-progress-id="#progressStepForm"
	          data-steps-id="#contentStepForm"
	          novalidate="novalidate">
	      <!-- Progress Step Form -->
	      <div id="progressStepForm" class="js-step-progress row text-center u-form-steps p-5">
	        <div class="col-sm-4 mb-3 mb-sm-0">
	          <span class="d-block u-icon u-icon-primary--air u-icon--lg rounded-circle u-form-steps__icon mx-auto mb-2">
	            <span class="fa fa-user-circle u-icon__inner"></span>
	          </span>
	          Cliente
	        </div>
	        <div class="col-sm-4 mb-3 mb-sm-0">
	          <span class="d-block u-icon u-icon-primary--air u-icon--lg rounded-circle u-form-steps__icon mx-auto mb-2">
	            <span class="fa fa-file-invoice-dollar u-icon__inner"></span>
	          </span>
	          Productos
	        </div>
	        <div class="col-sm-4 mb-3 mb-sm-0">
	          <span class="d-block u-icon u-icon-primary--air u-icon--lg rounded-circle u-form-steps__icon mx-auto mb-2">
	            <span class="fa fa-paperclip u-icon__inner"></span>
	          </span>
	          Total
	        </div>
	      </div>
	      <!-- End Progress Step Form -->

	      <hr class="my-0">

	      <!-- Content Step Form -->
	      <div id="contentStepForm" class="p-5 mb-5">
	        <div id="selectPlayerStep" class="active">
	          <!-- Recent Payers List -->
	          <div id="recentPayersList" data-target-group="idAddNewPayer">
	            <!-- Link -->
	            <div class="d-flex justify-content-end mb-3">
	              <a class="js-animation-link d-inline-block small u-link-muted" href="javascript:;"
	                 data-target="#addNewPayer"
	                 data-link-group="idAddNewPayer">
	                <span class="fa fa-plus mr-1"></span>
	                Agregar nuevo cliente
	              </a>
	            </div>
	            <!-- End Link -->

	            <!-- Add Members -->
	            <div class="js-focus-state input-group u-form mb-4">
	              <input class="form-control u-form__input" type="email" placeholder="Buscar nombre" aria-label="Buscar nombre">
	            </div>
	            <!-- End Add Members -->

	            <!-- Most Recent Payers List -->
	            <div class="mb-4">
	              <!-- Payers List -->
	              <a class="d-block d-sm-flex align-items-sm-center u-info-v2 rounded p-2 mb-2" style="text-decoration: none;" href="javascript:;" data-next-step="#paymentDetailsStep">
	                <div class="media align-items-center">
	                  <span class="u-icon u-icon-success--air u-icon--lg rounded-circle mr-3">
	                        <span class="u-icon__inner font-size-26">S</span>
	                </span>
	                  <div class="media-body">
	                    <h4 class="h6 mb-0">Sebastian Diaz</h4>
	                    <small class="d-block text-secondary">sebastiandiaz@gmail.com</small>
	                  </div>
	                </div>
	              </a>
	              <!-- End Payers List -->
	              <!-- Payers List -->
	              <a class="d-block d-sm-flex align-items-sm-center u-info-v2 rounded p-2 mb-2" style="text-decoration: none;" href="javascript:;" data-next-step="#paymentDetailsStep">
	                <div class="media align-items-center">
	                  <span class="u-icon u-icon-success--air u-icon--lg rounded-circle mr-3">
	                        <span class="u-icon__inner font-size-26">S</span>
	                </span>
	                  <div class="media-body">
	                    <h4 class="h6 mb-0">Sebastian Diaz</h4>
	                    <small class="d-block text-secondary">sebastiandiaz@gmail.com</small>
	                  </div>
	                </div>
	              </a>
	              <!-- End Payers List -->
	              <!-- Payers List -->
	              <a class="d-block d-sm-flex align-items-sm-center u-info-v2 rounded p-2 mb-2" style="text-decoration: none;" href="javascript:;" data-next-step="#paymentDetailsStep">
	                <div class="media align-items-center">
	                  <span class="u-icon u-icon-success--air u-icon--lg rounded-circle mr-3">
	                        <span class="u-icon__inner font-size-26">S</span>
	                </span>
	                  <div class="media-body">
	                    <h4 class="h6 mb-0">Sebastian Diaz</h4>
	                    <small class="d-block text-secondary">sebastiandiaz@gmail.com</small>
	                  </div>
	                </div>
	              </a>
	              <!-- End Payers List -->
	              <!-- Payers List -->
	              <a class="d-block d-sm-flex align-items-sm-center u-info-v2 rounded p-2 mb-2" style="text-decoration: none;" href="javascript:;" data-next-step="#paymentDetailsStep">
	                <div class="media align-items-center">
	                  <span class="u-icon u-icon-success--air u-icon--lg rounded-circle mr-3">
	                        <span class="u-icon__inner font-size-26">S</span>
	                </span>
	                  <div class="media-body">
	                    <h4 class="h6 mb-0">Sebastian Diaz</h4>
	                    <small class="d-block text-secondary">sebastiandiaz@gmail.com</small>
	                  </div>
	                </div>
	              </a>
	              <!-- End Payers List -->
	            </div>
	            <!-- End Most Recent Payers List -->
	          </div>
	          <!-- End Recent Payers List -->

	          <!-- Add New Payer -->
	          <div id="addNewPayer" data-target-group="idAddNewPayer" style="display: none;">
	            <!-- Button Group -->
	            <div class="btn-group btn-group-toggle d-flex mb-5">
	              <a class="js-animation-link btn btn-sm u-btn-secondary--air flex-fill active" href="javascript:;"
	                 data-target="#companyType"
	                 data-link-group="idPayerType">
	                Company
	              </a>
	              <a class="js-animation-link btn btn-sm u-btn-secondary--air flex-fill" href="javascript:;"
	                 data-target="#individualType"
	                 data-link-group="idPayerType">
	                Individual
	              </a>
	            </div>
	            <!-- End Button Group -->

	            <!-- Company Type Payer -->
	            <div id="companyType" data-target-group="idPayerType">
	              <div class="row">
	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">Company name</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                      <input class="form-control u-form__input" type="text" name="companyName" required
	                             placeholder="Pixeel"
	                             aria-label="Pixeel"
	                             data-msg="Please enter a valid name."
	                             data-error-class="u-has-error"
	                             data-success-class="u-has-success">
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->

	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">Website URL</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                      <input class="form-control u-form__input" type="URL" name="websiteURL" required
	                             placeholder="example.com"
	                             aria-label="example.com"
	                             data-msg="Please enter a valid website URL."
	                             data-error-class="u-has-error"
	                             data-success-class="u-has-success">
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->

	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">Contact first name</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                      <input class="form-control u-form__input" type="text" name="contactFirstNameCompany" required
	                             placeholder="Brian"
	                             aria-label="Brian"
	                             data-msg="Please enter a valid name."
	                             data-error-class="u-has-error"
	                             data-success-class="u-has-success">
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->

	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">Contact last name</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                      <input class="form-control u-form__input" type="text" name="contactLastNameCompany" required
	                             placeholder="Williams"
	                             aria-label="Williams"
	                             data-msg="Please enter a valid name."
	                             data-error-class="u-has-error"
	                             data-success-class="u-has-success">
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->

	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">Email</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                      <input class="form-control u-form__input" type="email" name="emailCompany" required
	                             placeholder="example@gmail.com"
	                             aria-label="example@gmail.com"
	                             data-msg="Please enter a valid email address."
	                             data-error-class="u-has-error"
	                             data-success-class="u-has-success">
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->

	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">Country</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group u-form">
	                      <select class="custom-select custom-select-sm">
	                        <option selected>Select country</option>
	                        <option value="AF">Afghanistan</option>

	                      </select>
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->
	              </div>
	            </div>
	            <!-- End Company Type Payer -->

	            <!-- Individual Type Payer -->
	            <div id="individualType" data-target-group="idPayerType" style="display: none;">
	              <div class="row">
	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">Contact first name</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                      <input class="form-control u-form__input" type="text" name="contactFirstNameIndividual" required
	                             placeholder="Brian"
	                             aria-label="Brian"
	                             data-msg="Please enter a valid name."
	                             data-error-class="u-has-error"
	                             data-success-class="u-has-success">
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->

	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">Contact last name</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                      <input class="form-control u-form__input" type="text" name="contactLasttNameIndividual" required
	                             placeholder="Williams"
	                             aria-label="Williams"
	                             data-msg="Please enter a valid name."
	                             data-error-class="u-has-error"
	                             data-success-class="u-has-success">
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->

	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">Email</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                      <input class="form-control u-form__input" type="email" name="emailIndividual" required
	                             placeholder="example@gmail.com"
	                             aria-label="example@gmail.com"
	                             data-msg="Please enter a valid email address."
	                             data-error-class="u-has-error"
	                             data-success-class="u-has-success">
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->

	                <!-- Input Group -->
	                <div class="col-sm-6 mb-4">
	                  <label class="h6 small d-block text-uppercase">Country</label>
	                  <div class="js-form-message">
	                    <div class="js-focus-state input-group u-form">
	                      <select class="custom-select custom-select-sm">
	                        <option selected>Select country</option>
	                        <option value="AF">Afghanistan</option>
	                        <option value="AX">Åland Islands</option>

	                      </select>
	                    </div>
	                  </div>
	                </div>
	                <!-- End Input Group -->
	              </div>
	            </div>
	            <!-- End Individual Type Payer -->
	          </div>
	          <!-- End Add New Payer -->

	          <!-- Buttons -->
	          <div class="d-flex justify-content-end">
	            <button type="button" class="btn btn-sm btn-primary u-btn-primary transition-3d-hover mr-1" data-next-step="#paymentDetailsStep">Siguiente</button>
	            <button type="submit" class="btn btn-sm u-btn-secondary--air transition-3d-hover" onclick="Custombox.modal.close();">Cancelar oninvalid=""</button>
	          </div>
	          <!-- End Buttons -->
	        </div>

	        <div id="paymentDetailsStep" style="display: none;">
	          <div class="row">
	            <!-- Input Group -->
	            <div class="col-sm-4 mb-4">
	              <label class="h6 small d-block text-uppercase">Id del producto</label>
	              <div class="js-form-message">
	                <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                  <input class="form-control u-form__input" type="text" name="id_producto" required
	                         placeholder="1"
	                         aria-label="1"
	                         data-msg=""
	                         data-error-class="u-has-error"
	                         data-success-class="u-has-success">
	                </div>
	              </div>
	            </div>
	            <!-- End Input Group -->

	            <!-- Select -->
	            <div class="col-sm-4 mb-4">
	              <label class="h6 small d-block text-uppercase">Nombre</label>
	              <div class="js-form-message">
	                <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                  <input class="form-control u-form__input" type="text" name="id_producto" required
	                         placeholder=""
	                         aria-label=""
	                         data-msg=""
	                         data-error-class="u-has-error"
	                         data-success-class="u-has-success">
	                </div>
	              </div>
	            </div>
	            <!-- End Select -->
	            <!-- Select -->
	            <div class="col-sm-4 mb-4">
	              <label class="h6 small d-block text-uppercase">Precio</label>
	              <div class="js-form-message">
	                <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                  <input class="form-control u-form__input" type="text" name="id_producto" required
	                         placeholder=""
	                         aria-label=""
	                         data-msg=""
	                         data-error-class="u-has-error"
	                         data-success-class="u-has-success">
	                </div>
	              </div>
	            </div>
	            <!-- End Select -->
	          </div>
	          <div class="row">
	            <!-- Input Group -->
	            <div class="col-sm-4 mb-4">
	              <label class="h6 small d-block text-uppercase">U.Medida</label>
	              <div class="js-form-message">
	                <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                  <input class="form-control u-form__input" type="text" name="id_producto" required
	                         placeholder=""
	                         aria-label=""
	                         data-msg=""
	                         data-error-class="u-has-error"
	                         data-success-class="u-has-success">
	                </div>
	              </div>
	            </div>
	            <!-- End Input Group -->

	            <!-- Select -->
	            <div class="col-sm-4 mb-4">
	              <label class="h6 small d-block text-uppercase">Cantidad</label>
	              <div class="js-form-message">
	                <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                  <input class="form-control u-form__input" type="text" name="id_producto" required
	                         placeholder=""
	                         aria-label=""
	                         data-msg=""
	                         data-error-class="u-has-error"
	                         data-success-class="u-has-success">
	                </div>
	              </div>
	            </div>
	            <!-- End Select -->
	            <!-- Select -->
	            <div class="col-sm-4 mb-4">
	              <label class="h6 small d-block text-uppercase">Sub total</label>
	              <div class="js-form-message">
	                <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                  <input class="form-control u-form__input" type="text" name="id_producto" required
	                         placeholder=""
	                         aria-label=""
	                         data-msg=""
	                         data-error-class="u-has-error"
	                         data-success-class="u-has-success">
	                </div>
	              </div>
	            </div>
	            <!-- End Select -->
	          </div>

	          <!-- Input -->
	          <div class="mb-4">
	            <label class="h6 small d-block text-uppercase">Descripción</label>
	            <div class="js-form-message">
	              <div class="js-focus-state input-group input-group-sm u-form--sm">
	                <textarea class="form-control u-form__input" rows="2" name="description" required
	                          placeholder=""
	                          aria-label=""
	                          data-msg="Coloca una decripción."
	                          data-error-class="u-has-error"
	                          data-success-class="u-has-success"></textarea>
	              </div>
	            </div>
	          </div>
	          <!-- End Input -->
	          <div class="row">
	            <!-- Input Group -->
	            <div class="col-sm-4 mb-4">
	              <label class="h6 small d-block text-uppercase">Fecha de salida</label>
	              <div id="datepickerWrapper" class="u-datepicker u-datepicker--top input-group input-group-sm u-form u-form--sm">
	                <input class="js-range-datepicker form-control u-form__input bg-transparent border-right-0" type="text" placeholder="F.salida" aria-label="Fecha de salida"
	                       data-rp-wrapper="#datepickerWrapper"
	                       data-rp-date-format="d/m/Y">
	                <div class="input-group-append u-form__append">
	                  <span class="input-group-text u-form__text rounded-right">
	                    <span class="far fa-calendar-alt u-form__text-inner"></span>
	                  </span>
	                </div>
	              </div>
	            </div>
	            <!-- End Input Group -->

	            <!-- Select -->
	            <div class="col-sm-4 mb-4">
	              <label class="h6 small d-block text-uppercase">Area</label>
	              <div class="js-form-message">
	                <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                  <select class="form-control u-form__input" name="">
	                    <option value="2">Diseño</option>
	                    <option value="3">Mesa</option>
	                    <option value="4">Casting</option>
	                  </select>

	                </div>
	              </div>
	            </div>
	            <!-- End Select -->
	            <!-- Select -->
	            <div class="col-sm-4 mb-4">
	              <label class="h6 small d-block text-uppercase">Procesos</label>
	              <div class="js-form-message">
	                <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                  <select class="form-control u-form__input" name="">
	                    <option value="1">1</option>
	                    <option value="2">2</option>
	                    <option value="3">3</option>
	                  </select>
	                </div>
	              </div>
	            </div>
	            <!-- End Select -->
	          </div>
	          <!-- Datepicker -->
	          <div class="mb-4">
	            <label class="d-block small text-uppercase font-weight-medium">Imagen</label>
	            <div class="js-form-message">
	              <div class="js-focus-state input-group input-group-sm u-form u-form--sm">
	                <input class="form-control u-form__input" type="text" name="id_producto" required
	                       placeholder=""
	                       aria-label=""
	                       data-msg=""
	                       data-error-class="u-has-error"
	                       data-success-class="u-has-success">
	              </div>
	            </div>
	          </div>
	          <!-- End Datepicker -->

	          <!-- Buttons -->
	          <div class="d-flex justify-content-end">
	            <button type="button" class="btn btn-sm btn-primary u-btn-primary transition-3d-hover mr-1" data-next-step="#attachDocumentsStep">Siguiente</button>
	            <a class="btn btn-sm u-btn-secondary--air transition-3d-hover mr-1" href="javascript:;" data-previous-step="#selectPlayerStep">Atrás</a>
	          </div>
	          <!-- End Buttons -->
	        </div>

	        <div id="attachDocumentsStep" style="display: none;">
	          <div class="mb-4">
	              <p>Sub Total: </p>
	              <p>IGV(): </p>
	              <p>TOTAL: </p>
	          </div>



	          <!-- Buttons -->
	          <div class="d-flex justify-content-end">
	            <button type="submit" class="btn btn-sm btn-primary u-btn-primary transition-3d-hover mr-1">Guardar</button>
	            <a class="btn btn-sm u-btn-secondary--air transition-3d-hover mr-1" href="javascript:;" data-previous-step="#paymentDetailsStep">Atrás</a>
	          </div>
	          <!-- End Buttons -->
	        </div>
	      </div>
	      <!-- End Content Step Form -->
	    </form>
	    <!-- End Request Payment Form -->
	  </div>

	</div>

  <!-- End Request Payment Modal Window -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fa fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->



    <!-- JS Global Compulsory -->
      <script src="js/jquery.min.js"></script>
      <script src="js/jquery-migrate.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
			<script src="js/jquery.exitintent.min.js"></script>

      <!-- JS Implementing Plugins -->
      <script src="js/hs.megamenu.js"></script>
			<script src="js/jquery.dataTables.min.js"></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/jquery.validate.min.js"></script>
      <script src="js/custombox.min.js"></script>
      <script src="js/flatpickr.min.js"></script>
      <script src="js/appear.js"></script>
      <script src="js/circles.min.js"></script>

      <!-- JS Front -->
      <script src="js/hs.core.js"></script>
      <script src="js/hs.header.js"></script>
      <script src="js/hs.unfold.js"></script>
			<script src="js/hs.datatables.js"></script>
      <script src="js/hs.malihu-scrollbar.js"></script>
      <script src="js/hs.focus-state.js"></script>
      <script src="js/hs.validation.js"></script>
      <script src="js/hs.modal-window.js"></script>
      <script src="js/hs.step-form.js"></script>
      <script src="js/hs.show-animation.js"></script>
      <script src="js/hs.range-datepicker.js"></script>
      <script src="js/hs.chart-pie.js"></script>
      <script src="js/hs.progress-bar.js"></script>
      <script src="js/hs.go-to.js"></script>
      <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 767,
        hideTimeOut: 0
      });

      // initialization of HSMegaMenu component
      $('.js-breadcrumb-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991,
        hideTimeOut: 0
      });
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          $(this).find('input[type="search"]').focus();
        }
      });

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of forms
      $.HSCore.helpers.HSFocusState.init();

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate');

      // initialization of autonomous popups
      $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-request-payment-window', {
        autonomous: true
      });

      // initialization of step form
      $.HSCore.components.HSStepForm.init('.js-step-form');

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');

      // initialization of range datepicker
      $.HSCore.components.HSRangeDatepicker.init('.js-range-datepicker');

      // initialization of chart pies
      var items = $.HSCore.components.HSChartPie.init('.js-pie');

      // initialization of horizontal progress bars
      var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress', {
        direction: 'horizontal',
        indicatorSelector: '.js-hr-progress-bar'
      });

      var verticalProgressBars = $.HSCore.components.HSProgressBar.init('.js-vr-progress', {
        direction: 'vertical',
        indicatorSelector: '.js-vr-progress-bar'
      });

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
	<!-- JS Plugins Init. -->
<script>
  $(document).on('ready', function () {
    // initialization of datatables
    $.HSCore.components.HSDatatables.init('.js-datatable');
  });
</script>
  </body>
</html>
