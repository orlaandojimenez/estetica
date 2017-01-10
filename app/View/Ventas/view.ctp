<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Venta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($venta['Venta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($venta['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $venta['Cliente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Venta Productos'); ?></h3>
	<?php if (!empty($venta['VentaProducto'])): ?>
	<table class="table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Venta Id'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Total'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($venta['VentaProducto'] as $ventaProducto): ?>
		<tr>
			<td><?php echo $ventaProducto['id']; ?></td>
			<td><?php echo $ventaProducto['venta_id']; ?></td>
			<td><?php echo $ventaProducto['producto_id']; ?></td>
			<td><?php echo $ventaProducto['cantidad']; ?></td>
			<td><?php echo $ventaProducto['total']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'venta_productos', 'action' => 'view', $ventaProducto['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'venta_productos', 'action' => 'edit', $ventaProducto['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'venta_productos', 'action' => 'delete', $ventaProducto['id']),array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $ventaProducto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
</div>
</div>