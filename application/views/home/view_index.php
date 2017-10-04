<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nacho Ruiz Compés</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url(); ?>assets/css/creative.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/form.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- This is what you need -->
    <script src="<?php echo base_url(); ?>assets/vendor/sweetalert2/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/sweetalert2/sweetalert2.min.css">

    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Nacho Ruiz Compés</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Cobertura</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Contratar Seguro</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Oferta de seguros de accidentes colectivos 2017/2018</h1>
				<br><h2 id="homeHeading">Dirigida a Universidad de Zaragoza</h2>
                <hr>
				<h3 id="homeHeading">Nacho Ruiz Compés</h3>
                <p>Corredor de Seguros<br> Nº Autorizacion DGA F-0122GA - Nº Colegiado: 76032</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Cobertura</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Cobertura</h2>
                    <hr class="light">
                    <p class="text-faded">Durante la Estancia en Instalaciones Universidad de Zaragoza, actividades comprendidas dentro del estudio correspondientes y RIESGO IN ITINIRE</p>
					<br>
					<h2 class="section-heading">Garantías y Sumas Aseguradas por Persona</h2>
                    <hr class="light">
                    <p class="text-faded">Fallecimiento accidental: 9.000€</p>
					<hr class="light">
                    <p class="text-faded">Invalidez Permanente Baremo: 18.000€</p>
					<hr class="light">
                    <p class="text-faded">Gastos Sanitarios:
					<br>Ilimitados en centros concertados en territorio Nacional (Máximo 2 años)</p>
					<br>
					<h2 class="section-heading">PRIMA NETA POR PERSONA: 5,66€</h2>
					<br>					
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Contratar seguro</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contratar Seguro</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container" id="contratar">
            <div class="row">
                <div class="col-md-12">
                    <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?> 
                    <?php 
                      $at = array('id' => 'forms' );
                      echo form_open('home/index',$at); 
                    ?>
                        <div class="row">
                           <div class="col-md-12">
                               <div class="input-field">
                                   <label for="name">
                                        Nombre y Apellidos <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="text" id="name" name="name" required value="<?php echo set_value('name'); ?>">
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-5">
                               <div class="input-field">
                                   <label for="nif">NIF <i class="fa fa-asterisk"></i></label>
                                   <input type="text" id="nif" name="nif" required value="<?php echo set_value('nif'); ?>">
                               </div>
                           </div>
                           <div class="col-md-7">
                               <div class="input-field">
                                   <label for="date">Fecha nacimiento <i class="fa fa-asterisk"></i></label>
                                   <input type="date" id="date" name="date" required value="<?php echo set_value('date'); ?>">
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-6">
                               <div class="input-field">
                                   <label for="profesion">Profesión <i class="fa fa-asterisk"></i></label>
                                   <input type="text" id="profesion" name="profesion" required value="<?php echo set_value('profesion'); ?>">
                               </div>
                           </div>
                       </div>
                       <hr>

                       <div class="row">
                           <div class="col-md-12">
                               <div class="input-field">
                                   <label for="domicilio">
                                        Domicilio <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="text" id="domicilio" name="domicilio" required value="<?php echo set_value('domicilio'); ?>">
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-4">
                               <div class="input-field">
                                   <label for="localidad">
                                        Localidad <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="text" id="localidad" name="localidad" required value="<?php echo set_value('localidad'); ?>">
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="input-field">
                                   <label for="codigo_postal">
                                        Código postal <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="text" id="codigo_postal" name="codigo_postal" required onkeypress="return valida(event)" value="<?php echo set_value('codigo_postal'); ?>">
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="input-field">
                                   <label for="Pais">
                                        País <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="text" id="pais" name="pais" required value="<?php echo set_value('pais'); ?>">
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-4">
                               <div class="input-field">
                                   <label for="provincia">
                                        Provincia <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="text" id="provincia" name="provincia" required value="<?php echo set_value('provincia'); ?>">
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="input-field">
                                   <label for="telefono">
                                        Teléfono <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="text" id="telefono" name="telefono" required onkeypress="return valida(event)" value="<?php echo set_value('telefono'); ?>">
                               </div>
                           </div>
                           <div class="col-md-4">
                               <div class="input-field">
                                   <label for="otro_telefono">
                                        Otro teléfono
                                    </label>
                                   <input type="text" id="otro_telefono" name="otro_telefono" onkeypress="return valida(event)" value="<?php echo set_value('otro_telefono'); ?>">
                               </div>
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-md-6">
                               <div class="input-field">
                                   <label for="email">
                                        E-mail <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="email" id="email" name="email" required value="<?php echo set_value('email'); ?>">
                               </div>
                           </div>
                       </div>
                       <hr>
                       <div class="row">
                           <div class="col-md-12">
                                <div class="input-field">
                                    <label for="">
                                        Estado Civil <i class="fa fa-asterisk"></i>
                                    </label>
                                </div>
                                <div class="row" id="radios">
                                    <div class="col-md-4">
                                        <div class="input-field radio">
                                            <input type="radio" value="Soltero/a" id="soltero" name="edo_civil" required <?php echo  set_radio('edo_civil', 'Soltero/a'); ?>>
                                            <label for="soltero">Soltero/a</label>
                                        </div>
                                     </div>
                                    <div class="col-md-4">
                                        <div class="input-field radio">
                                            <input type="radio" value="Casado/a" id="casado" name="edo_civil" required <?php echo  set_radio('edo_civil', 'Casado/a'); ?>>
                                            <label for="casado">Casado/a</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-field radio">
                                            <input type="radio" value="Divorciado/a" id="divorciado" name="edo_civil" required <?php echo  set_radio('edo_civil', 'Divorciado/a'); ?>>
                                            <label for="divorciado">Divorciado/a</label>
                                         </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-field radio">
                                            <input type="radio" value="Viudo/a" id="viudo" name="edo_civil" required <?php echo  set_radio('edo_civil', 'Viudo/a'); ?>>
                                            <label for="viudo">Viudo/a</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-field">
                                    <label for="">
                                       Sexo <i class="fa fa-asterisk"></i>
                                    </label>
                                </div>
                                <div class="row" id="radios">
                                    <div class="col-md-4">
                                        <div class="input-field radio">
                                            <input type="radio" value="Hombre" id="hombre" name="sexo" required <?php echo  set_radio('sexo', 'Hombre'); ?>>
                                            <label for="hombre">Hombre</label>
                                        </div>
                                     </div>
                                     <div class="col-md-4">
                                        <div class="input-field radio">
                                            <input type="radio" value="Mujer" id="mujer" name="sexo" required <?php echo  set_radio('sexo', 'Mujer'); ?>>
                                            <label for="mujer">Mujer</label>
                                        </div>
                                     </div>
                                </div>
                            </div>
                       </div>
                       <hr>
                         <div class="row">
                           <div class="col-md-12">
                                <div class="input-field">
                                    <label for="">
                                        BENIFICIARIOS <i class="fa fa-asterisk"></i>
                                    </label>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>El cónyugue, en su defecto los hijos, en su defecto los padres, y en su defecto, los herederos legales (esta designación será la que aparezca en caso de ausencia de designación expresa)</p>
                                     </div>
                                </div>
                                <div class="row bene" id="radios">
                                    <div class="col-md-6">
                                        <div class="input-field radio">
                                            <input type="radio" id="conyugue" value="conyugue" name="beneficiarios" required onclick="input_no_required();" <?php echo  set_radio('beneficiarios', 'conyugue'); ?>>
                                            <label for="conyugue">Cónyugue, en su defecto los hijos, en su defecto los padres, y en su defecto, los herederos legales (esta designación será la que aparezca en caso de ausencia de designación expresa)</label>
                                        </div>
                                     </div>
                                     <div class="col-md-4">
                                        <div class="input-field radio">
                                            <input type="radio" value="otros" id="otros" name="beneficiarios" required onclick="input_required();" <?php echo  set_radio('beneficiarios', 'otros'); ?>>
                                            <label for="otros">Otros (rellenar nombre y apellidos, NIF y fecha de nacimiento)</label>
                                        </div>
                                     </div>
                                </div>
                            </div>
                       </div>
                       <div class="row" id="data_bene" style="display: none;">
                           <div class="col-md-12">
                               <div class="input-field">
                                   <label for="name_bene">
                                        Nombre y Apellidos <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="text" id="name_bene_1" name="name_bene_1" required><br><br>
                                   <input type="text" id="name_bene_2" name="name_bene_2"><br><br>
                                   <input type="text" id="name_bene_3" name="name_bene_3"><br><br>
                               </div>
                           </div>
                           <div class="col-md-5">
                               <div class="input-field">
                                   <label for="nif_bene">
                                        Nif <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="text" id="nif_bene_1" name="nif_bene_1" required><br><br>
                                   <input type="text" id="nif_bene_2" name="nif_bene_2"><br><br>
                                   <input type="text" id="nif_bene_3" name="nif_bene_3"><br><br>
                               </div>
                           </div>
                           <div class="col-md-7">
                               <div class="input-field">
                                   <label for="date_bene">
                                        Fecha nacimiento <i class="fa fa-asterisk"></i>
                                    </label>
                                   <input type="date" id="date_bene_1" name="date_bene_1" required><br><br>
                                   <input type="date" id="date_bene_2" name="date_bene_2"><br><br>
                                   <input type="date" id="date_bene_3" name="date_bene_3"><br><br>
                               </div>
                           </div>
                       </div>
                       <hr>
                       <div class="row">
                           <div class="col-md-12">
                                <div class="input-field">
                                    <label for="">
                                        FORMA DE PAGO <i class="fa fa-asterisk"></i>
                                    </label>
                                </div>
                                <div class="row fp" id="radios">
                                    <div class="col-md-4">
                                        <div class="input-field radio">
                                            <input type="radio" value="transfe" id="transfe" name="fp_cash" required <?php echo  set_radio('fp_cash', 'transfe'); ?>>
                                            <label for="transfe">Transferencia / Ingreso en cuenta</label>
                                        </div>
                                     </div>
                                    <div class="col-md-4">
                                        <div class="input-field radio">
                                            <input type="radio" value="card" id="card" name="fp_cash" required <?php echo  set_radio('fp_cash', 'card'); ?>>
                                            <label for="card">Tarjeta</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <br>
                                <p>El pago del Seguro se puede efectuar mendiante:</p>
                                <p>- Transferencia Bancaria a favor de Jose Ignacio Cómpes: <b>ES38 2085 8366 8003 3040 1759</b> - Entidad IBERCAJA</p>
                                <p>- Ingreso Directo en misma cuenta</p>
                                <p>Una vez recibida la solicitud debídamente cumplimentada y copia del pago efectuado, se expedirá certificado en un máximo de 48 horas.</p>
                                <p>Por favor enviar datos a mjroble@mapfre.com . Teléfono: 636 787 815 para cualquier duda.</p>
                            </div>
                       </div>
                       <div class="row">
                          <div class="col-md-12">
                            <div class="terminos">
                              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.

                              Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.
                            </div>
                            <label>
                              <input type="checkbox" name="terminos_1" value="SI" required> Acepto Ley de protección de datos
                            </label>
                            <p></p>
                         </div>
                       </div>
                       <div class="row">
                          <div class="col-md-12">
                            <div class="terminos">
                              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.

                              Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl. Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.
                            </div>
                            <label>
                              <input type="checkbox" name="terminos_2" value="SI" required> Autorizo mi datos para fines comerciales
                            </label>
                            <p></p>

                         </div>
                       </div>
                       <button type="submmit" class="btn btn-primary">Enviar</button></center>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section>

    

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Nacho Ruiz Compés</h2>
				Corredor de Seguros
            </div>
        </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contacta con nosotros</h2>
                    <hr class="primary">
                    <p>Contacta con nosotros y te ofreceremos el seguro que mejor se adapte a tus necesidades</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>653 793 549</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:nachoruizmediacion@gmail.com">nachoruizmediacion@gmail.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/js/creative.min.js"></script>
    <script>
        function valida(e){
            tecla = (document.all) ? e.keyCode : e.which;          
            patron =/^([0-9])*[-]?[0-9]*$/;
            tecla_final = String.fromCharCode(tecla);
            return patron.test(tecla_final);
        }
        function input_no_required(){
            document.getElementById("name_bene_1").removeAttribute("required");
            document.getElementById("nif_bene_1").removeAttribute("required");
            document.getElementById("date_bene_1").removeAttribute("required");
            document.getElementById("data_bene").setAttribute("style", "display:none"); 
        }
        function input_required(){
            document.getElementById("name_bene_1").setAttribute("required", ""); 
            document.getElementById("nif_bene_1").setAttribute("required", ""); 
            document.getElementById("date_bene_1").setAttribute("required", ""); 
            document.getElementById("data_bene").removeAttribute("style");
        }
        <?php if ($swal): ?>
        swal(
            'Procesado correctamente!',
            'Hacer la transferencia bancaria y enviar el justificante al correo info@nachoruizmediacion.es',
            'success'
        ).then(function () {
            window.location.replace("<?php echo site_url('home/pdf/'.$numero); ?>");
        }, function (dismiss) {
            window.location.replace("<?php echo site_url('home/pdf/'.$numero); ?>");
        });
        <?php endif; ?>
    </script>


</body>

</html>
