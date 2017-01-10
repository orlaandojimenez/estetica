<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Add Cliente'); ?></legend>
	<?php
		echo $this->Form->input('nombre',array('class' => 'form-control','label' => 'Nombre'));
		echo $this->Form->input('apellido',array('class' => 'form-control','label' => 'Apellido'));
		echo $this->Form->input('direccion',array('class' => 'form-control','label' => 'Direccion'));
		echo $this->Form->input('email',array('class' => 'form-control','label' => 'Email'));
	?>
	</fieldset>
	<br />
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
</div>
	</div>
</div>

