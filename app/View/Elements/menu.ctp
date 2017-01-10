<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>

   <style>
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
</style>
 </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-left">
    <li>
      <?php echo $this->Html->link('MAX GALÁN BARBER SHOP',array('controller' => 'pages', 'action' => 'home')) ?>
    </li>
    </ul>
      <ul class="nav navbar-nav navbar-right">
       <li>
                  <?php echo $this->Html->link('Clientes',array('controller' => 'clientes', 'action' => 'index')) ?>
        </li>
        <li>
                  <?php echo $this->Html->link('Servicios',array('controller' => 'servicios', 'action' => 'index')) ?>
        </li>
        <li>
                  <?php echo $this->Html->link('Productos',array('controller' => 'productos', 'action' => 'index')) ?>
        </li>
        <li>
                  <?php echo $this->Html->link('Citas',array('controller' => 'citas', 'action' => 'index')) ?>
        </li>
        <li>
                  <?php echo $this->Html->link('Ventas',array('controller' => 'ventas', 'action' => 'index')) ?>
        </li>
        <li>
                  <?php echo $this->Html->link('Usuarios',array('controller' => 'users', 'action' => 'index')) ?>
        </li>
        <li >
      <?php echo $this->Html->link('Salir',array('controller' => 'users', 'action' => 'logout')) ?>
    </li>
      </ul>
       
      
    </ul>
    </div>
	 </div>
</nav>