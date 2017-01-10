<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('Cita'); ?>
	<fieldset>
		<legend><?php echo __('Add Cita'); ?></legend>
	<?php
		echo $this->Form->input('cliente_id',array('class' => 'form-control','label' => 'Cliente'));
		echo $this->Form->input('fecha',array(
        'class' => 'form-control',
        'div' => array('class' => 'form-inline'),
        'between' => '<div class="form-group">',
        'separator' => '</div><div class="form-group">',
        'after' => '</div>'
    ));
	?>
	</fieldset>
	<br />
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
</div>
</div>
</div>
