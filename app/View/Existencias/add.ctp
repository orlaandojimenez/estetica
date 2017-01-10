<div class="existencias form">
<?php echo $this->Form->create('Existencia'); ?>
	<fieldset>
		<legend><?php echo __('Add Existencia'); ?></legend>
	<?php
		echo $this->Form->input('producto_id');
		echo $this->Form->input('cantidad');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Existencias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
