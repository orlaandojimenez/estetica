<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('ClienteTelefono'); ?>
	<fieldset>
		<legend><?php echo __('Add Cliente Telefono'); ?></legend>
	<?php
		echo $this->Form->input('cliente_id',array('class' => 'form-control','label' => 'Cliente'));
		echo $this->Form->input('telefono',array('class' => 'form-control','label' => 'Telefono'));
	?>
	</fieldset>
	<br />
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
</div>
</div>
</div>
