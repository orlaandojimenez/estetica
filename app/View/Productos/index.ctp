<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
	<div class="page-header">
	<h2><?php echo __('Productos'); ?></h2>
	</div>
	<div class="col-md-10">
	<table class="table table-stripped" >
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('precio'); ?></th>
			<th><?php echo $this->Paginator->sort('existencia'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($productos as $producto): ?>
	<tr>
		<td><?php echo h($producto['Producto']['id']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['precio']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['existencia']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $producto['Producto']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $producto['Producto']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $producto['Producto']['id']),array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $producto['Producto']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	<div class="col-md-2 btn-group-vertical">
  <?php echo $this->Html->link('Nuevo Producto',array('controller' => 'productos', 'action' => 'add'),array('class' => "btn btn-sm btn-default")) ?>
  <?php echo $this->Html->link('Venta productos',array('controller' => 'venta_productos', 'index' => 'index'),array('class' => "btn btn-sm btn-default")) ?>
  
	</div>
</div>
</div>
</div>