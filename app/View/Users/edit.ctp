<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-6">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
	echo $this->Form->input('id');
		echo $this->Form->input('fullname',array('class' => 'form-control','label' => 'Nombre Completo'));
		echo $this->Form->input('username',array('class' => 'form-control','label' => 'Usuario'));
		echo $this->Form->input('role',array('class' => 'form-control','label' => 'Rol',
		'type'=>'select','options'=>array('admin'=>'Administrador','user'=>'Usuario'),array('class'=>'form-control')));
	?>
	</fieldset>
<br />
<?php echo $this->Form->end(array('label' => 'Submit', 'class' => 'btn btn-success')); ?>
</div>
</div>
</div>
</div>
