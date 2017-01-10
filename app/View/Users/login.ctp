<!DOCTYPE html>
<html>
<head>
  <?php echo $this->Html->charset(); ?>
  <title>
    <?php echo $cakeDescription ?>:
    <?php echo $this->fetch('title'); ?>
  </title>

  <link href='https://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
  <?php
    echo $this->Html->meta('icon');

    echo $this->Html->css(array('style.css','bootstrap.min','bootstrap-theme.min'));
    echo $this->Html->script(array('bootstrap.min'));

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
  ?>
</head>
<style>
.bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
}
.bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
}
.bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
}
.container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
}
.navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
}

.navbar-nav li a:hover {
    color: #1abc9c !important;
}
body {
    font: 20px "Montserrat", sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
}

h1 {
font-family: 'Covered By Your Grace', cursive;
}

p {font-size: 16px;}
.margin {margin-bottom: 45px;}
</style>
<body>
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>

   
 </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-left">
    <li>
      <?php echo $this->Html->link('MAX GALÁN BARBER SHOP',array('controller' => 'pages', 'action' => 'home')) ?>
    </li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
       <?php echo $this->Form->create('User', array('class' => 'navbar-form navbar-right')); ?>
            <div class="form-group">
              <?php echo $this->Form->input('username', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Usuario')); ?>
            </div>
            <div class="form-group">
              <?php echo $this->Form->input('password', array('label' => false, 'class' => 'form-control', 'placeholder' => 'Contraseña')); ?>
            </div>
            <?php echo $this->Form->button('Acceder', array('class' => 'btn btn-success')); ?>
            <?php echo $this->Form->end(); ?>
      </ul>
    </div>
	 </div>
</nav>
<div class="container-fluid bg-1 text-center">
  <h1>Max Galán</h1>
  <img src="http://i2.esmas.com/editorial-televisa/2011/10/03/282516/E_ponla-a-remojar-tu-tipo-de-cara-2.jpg" class="img-circle " alt="Bird" >
  <h1>Barber Shop</h1>
</div>
<div class="container-fluid bg-2 text-center">
<div class="row">
  <div class="col-md-5">
  <h1>¿Quienes somos?</h1>
  <img src="http://g02.a.alicdn.com/kf/HTB15f5YIXXXXXaBXXXXq6xXFXXX4/Del-sal%C3%B3n-2015-del-pelo-pared-del-vinilo-belleza-peluquer%C3%ADa-tijeras-herramientas-de-corte-de-pelo.jpg" class="img-circle " alt="Bird" >
  </div>
  <div class="col-md-6">
  <h2>Somos una barbería dedicada a satisfacer a nuestros clientes con sus cortes de cabellos y de barba, brindamos diferentes servicios como:
  <br />
  Corte de cabello clásico y urbano, afeitado tradicional y arreglo de barba y bigote.
  <br />
  Tinte, facial, manicure y pedicure. Para hombre y mujer.
  </h2>
  </div>
  </div>
</div>

<div class="container-fluid bg-3 text-center">
  <h2 class="text-center">Contacto</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Ponte en contacto con nosotros!</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Luis Donaldo Colosio S/N Col. La joya
Santa Catarina, N.L.</p>
      <p><span class="glyphicon glyphicon-phone"></span> 
01 81 1854 4175</p>
      <p><span class="glyphicon glyphicon-thumbs-up"></span><a href="https://www.facebook.com/Max-Galan-Barber-Sal%C3%B3n-1147680268580331/?fref=ts"> Fb: Max Galan Barber Salón</a></p> 
    </div>
    <div class="col-sm-6">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comentario" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Enviar</button>
        </div>
      </div> 
    </div>
  </div>
</div>
<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(25.688089, -100.450088);

function initialize() {
var mapProp = {
center:myCenter,
zoom:12,
scrollwheel:false,
draggable:false,
mapTypeId:google.maps.MapTypeId.ROADMAP
};

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
position:myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>


</body>
</html>
