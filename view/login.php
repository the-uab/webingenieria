<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Iniciar Seción</title>

  <!-- CSS  -->
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
  <header>
    <div class="navbar-fixed">
      <nav class="orange" role="navigation">
        <div class="nav-wrapper container">
          <a id="logo-container" href="#" class="brand-logo">
            <img src="../multimedia/img/logoing.jpg" alt="log" class="circle responsive-img" height="30" width="30">FACULDAD DE INGENIERÍA
          </a>
          <ul class="right hide-on-med-and-down">
            <li><a href="login.php"><i class="fa fa-sign-in"></i>Login</a></li>
            <li><a href="../index.php">Menu</a></li>
          </ul>

          <ul id="nav-mobile" class="side-nav">
            <div>
              <h5 class="center-align"><img src="../multimedia/img/logoing.jpg" alt="log" class="circle responsive-img" height="25" width="25"></h5>
            </div><hr>
            <li><a href="#"><i class="fa fa-sign-in"></i>Login</a></li>
            <li><a href="#">Menu</a></li>
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse menu">
            <i class="fa fa-navicon"></i>
          </a>
        </div>
      </nav>
    </div>
  </header>

  <body>
    <div class="container">
      <div class="row">
        <div class="col s12 m6 offset-m3">
          <div class="card z-depth-4">
            <div class="card-content">
              <span class="card-title black-text">Inicio Sesión</span>
              <br>
              <br>
                <form method="POST" class="responsive">
                  <div class="row">
                    <div class="input-field col s12">
                      <input name="usermane" type="text" class="validate">
                      <label for="text">Usuario</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input name="password" type="password" class="validate">
                      <label for="password">Contraceña</label>
                    </div>
                  </div>
                  <div class="card-action center">
                    <input type="submit" class="btn" value="Ingresar">                    
                  </div>
                </form>
            </div>
          </div>
        </div>    
      </div>
      
</body>
<!--  Scripts-->
    <footer class="page-footer orange lighten-2">
          <div class="container">
            <div class="row">
              <div class="col l5 s12">
                <h5 class="white-text">Facultad de Ingeniería</h5>
                <p class="grey-text text-lighten-4">Tu presente y tu futuro.</p>
              </div>
              <div class="col l4 s12">
                <h5 class="white-text">Enlaces</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Acerca de nosotros</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Misión y Visión</a></li>
                  <li><a class="grey-text text-lighten-3" href="view/contactos.php">Contactos</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Sistemas</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Redes y Telecomunicaciones</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Ambiental</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Noticias</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Testimonios</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Cisco</a></li>
                </ul>
              </div>
              <div class="col l3 s12">
                <h5 class="white-text">Registro</h5>
                <p class="grey-text text-lighten-4">Registrate y recibe las ultimas noticias.</p>
                <form data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" class="rd-mailform form-classic form-inline offset-top-15" novalidate="novalidate">
                  <div class="form-group has-error">
                    <input id="contact-email" type="email" name="email" data-constraints="@Email @Required" class="form-control form-control-has-validation"><span class="form-validation">El email es requerido.</span>
                    <label for="contact-email" class="form-label rd-input-label">Ingresa tu E-mail</label>
                  </div>
                  <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
                </form>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Copyright DidSoft
            <a class="grey-text text-lighten-4 right" href="#!">UAB</a>
            </div>
          </div>
        </footer>

<script src="../js/jquery.min.js"></script>
<script src="../js/materialize.min.js"></script>
<script src="../js/init.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $('.slider').slider();
  });
</script>
</html>