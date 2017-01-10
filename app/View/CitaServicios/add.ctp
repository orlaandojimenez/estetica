<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('CitaServicio'); ?>
	<fieldset>
		<legend><?php echo __('Add Cita Servicio'); ?></legend>
	<?php
		echo $this->Form->input('cita_id',array('class' => 'form-control','label' => 'Cita'));
		echo $this->Form->input('servicio_id',array('class' => 'form-control','label' => 'Servicio'));
	?>
	</fieldset>
	<br />
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
</div>
</div>
</div>
</div>
