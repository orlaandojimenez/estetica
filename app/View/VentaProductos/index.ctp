<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
	<div class="page-header">
	<h2><?php echo __('Venta Productos'); ?></h2>
	</div>
	<div class="col-md-10">
	<table class="table table-stripped" >
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('venta_id'); ?></th>
			<th><?php echo $this->Paginator->sort('producto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad'); ?></th>
			<th><?php echo $this->Paginator->sort('total'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ventaProductos as $ventaProducto): ?>
	<tr>
		<td><?php echo h($ventaProducto['VentaProducto']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ventaProducto['Venta']['cliente_id'], array('controller' => 'ventas', 'action' => 'view', $ventaProducto['Venta']['id'])); ?>
		</td>
		<td><?php echo h($ventaProducto['VentaProducto']['producto_id']); ?>&nbsp;</td>
		<td><?php echo h($ventaProducto['VentaProducto']['cantidad']); ?>&nbsp;</td>
		<td><?php echo h($ventaProducto['VentaProducto']['total']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ventaProducto['VentaProducto']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ventaProducto['VentaProducto']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ventaProducto['VentaProducto']['id']),array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $ventaProducto['VentaProducto']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	<div class="col-md-2 btn-group-vertical">
  <?php echo $this->Html->link('Nueva Venta Producto',array('controller' => 'venta_productos', 'action' => 'add'),array('class' => "btn btn-sm btn-default")) ?>
  <?php echo $this->Html->link('Productos',array('controller' => 'productos', 'index' => 'index'),array('class' => "btn btn-sm btn-default")) ?>
  
	</div>
</div>
</div>