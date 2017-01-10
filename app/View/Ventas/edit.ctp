<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('Venta'); ?>
	<fieldset>
		<legend><?php echo __('Add Venta'); ?></legend>
	<?php
	echo $this->Form->input('id');
		echo $this->Form->input('cliente_id',array('class' => 'form-control','label' => 'Nombre'));
	?>
	</fieldset>
	<br />
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
</div>
</div>
</div>
