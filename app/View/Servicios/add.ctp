<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('Servicio'); ?>
	<fieldset>
		<legend><?php echo __('Add Servicio'); ?></legend>
	<?php
		echo $this->Form->input('nombre',array('class' => 'form-control','label' => 'Nombre'));
		echo $this->Form->input('descripcion',array('class' => 'form-control','label' => 'Descripcion'));
		echo $this->Form->input('precio',array('class' => 'form-control','label' => 'Precio'));
	?>
	</fieldset>
	<br />
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
</div>
</div>
</div>
