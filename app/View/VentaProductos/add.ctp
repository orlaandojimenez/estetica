<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('VentaProducto'); ?>
	<fieldset>
		<legend><?php echo __('Add Venta Producto'); ?></legend>
	<?php
	
		echo $this->Form->input('venta_id',array('class' => 'form-control','label' => 'Venta'));
		echo $this->Form->input('producto_id',array('class' => 'form-control','label' => 'Producto'));
		echo $this->Form->input('cantidad',array('class' => 'form-control','label' => 'Cantidad'));
		echo $this->Form->input('total',array('class' => 'form-control','label' => 'Total'));
	?>
	</fieldset>
	<br />
	<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
</div>
</div>
</div>
