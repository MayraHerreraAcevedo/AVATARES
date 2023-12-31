
<!DOCTYPE html>
<html>
    <head>

<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="login-registration.js"></script>

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $(function () {

	  var login_window = $("#login-dialog").dialog({autoOpen: false,
		  height: 280,
		  width: 520,
		  modal: true,
		  closeText: '',
		  close: function () {
			  register_window.dialog("close");
		  }

	  });

	  $("#login-div").button().on("click", function () {
		  login_window.dialog("open");
	  });

	  var register_window = $("#register-dialog").dialog({autoOpen: false,
		  height: 530,
		  width: 520,
		  modal: true,
		  closeText: '',
		  close: function () {
			  register_window.dialog("close");
		  }

	  });

	  $("#register-div").button().on("click", function () {
		  register_window.dialog("open");
	  });
  });

</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>

    <body>
<div role="navigation" class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="https://www.baulphp.com" class="navbar-brand">BAULPHP</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="https://www.baulphp.com">Portada</a></li>
           
          </ul>
         
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
	
    
    
       
        <div class="container">
 <h2> Generar avatar con inicial de nombre usando PHP </h2>
            <div class="inner-container">
            
                <div id="button-container">
                    <div class="login-box">
                        <input type="button" class="btn btn-primary" value="Acceder" id="login-div">
                    </div>
                    <div class="register-box">
                        <input type="button" class="btn btn-success" value="Registro"  id="register-div">
                    </div>

                </div>
				<div class="thank-you-registration">
				</div>
                <div class="form-container">
                    <div id="login-dialog" title="Iniciar Sesion" style="display:none;">
                        <form id="login-form" action="" method="post" role="form" >
                            <div class="input-row">
                                <span id="email-info"></span>
                                <input type="email" name="login-email-id" id="login-email-id"  class="input-field" placeholder="Email ID">
                            </div>
                            <div class="input-row">
                                <span id="password-info"></span>
                                <input type="password" name="login-password" id="login-password"  class="input-field"  placeholder="Password">
                            </div>
                            <div class="submit-button">
                                <input type="button" class="btn btn-primary" value="Acceder" onclick="ajaxLogin()">
                            </div>
                        </form>

                        <div class="success-message" id="login-success-message" style="display:none"></div>
                        <div class="error-message" id="login-error-message" style="display:none"></div>
                        <div id="ajaxloader" style="display:none">
                            <img src="LoaderIcon.gif" id="loaderId" />
                        </div>
                    </div>
                    <div id="register-dialog" class="register-class" title="Registrate"  style="display:none;">
                        <form id="register-form" action="" method="post" role="form">
                            <div class="input-row">
                                <span id="first-name-info"></span>
                                <input type="text" name="first-name" id="first-name"  class="input-field" placeholder="Nombres" value="">
                            </div>
                            <div class="input-row">
                                <span id="last-name-info"></span>
                                <input type="text" name="last-name" id="last-name"  class="input-field" placeholder="Apellidos" value="">
                            </div>
                            <div class="input-row">
                                <span id="register-email-info"></span>
                                <input type="email" name="register-email-id" id="register-email-id" class="input-field" placeholder="Email" value="">
                            </div>
                            <div class="input-row">
                                <span id="contact-no-info"></span>
                                <input type="text" name="contact-number" id="contact-number"  maxlength="10" class="input-field" placeholder="Celular">
                            </div>
                            <div class="input-row">
                                <span id="register-passwd-info"></span>
                                <input type="password" name="register-password" id="register-password" class="input-field" placeholder="Password">
                            </div>
                            <div class="input-row">
                                <span id="confirm-passwd-info"></span>
                                <input type="password" name="confirm-password" id="confirm-password" class="input-field" placeholder="Confirma Password">
                            </div>
                            <div class="submit-button">
                                <input type="button" class="btn btn-primary" value="Registrarme" onclick="ajaxRegistration()">
                            </div>
                            
                        </form>
                        
                        <div class="success-message" id="register-success-message" style="display:none"></div>
                        <div class="error-message" id="register-error-message" style="display:none"></div>

                    </div><!-- End register dialog form  -->

                </div> <!-- form container -->


            </div> <!-- inner container -->
        </div> <!--  container -->
        
    </body>
</html>