<div class="existencias view">
<h2><?php echo __('Existencia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($existencia['Existencia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($existencia['Producto']['nombre'], array('controller' => 'productos', 'action' => 'view', $existencia['Producto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($existencia['Existencia']['cantidad']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Existencia'), array('action' => 'edit', $existencia['Existencia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Existencia'), array('action' => 'delete', $existencia['Existencia']['id']), array(), __('Are you sure you want to delete # %s?', $existencia['Existencia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Existencias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Existencia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
