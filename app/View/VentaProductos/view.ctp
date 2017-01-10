<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Venta Producto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ventaProducto['VentaProducto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Venta'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ventaProducto['Venta']['cliente_id'], array('controller' => 'ventas', 'action' => 'view', $ventaProducto['Venta']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto Id'); ?></dt>
		<dd>
			<?php echo h($ventaProducto['VentaProducto']['producto_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($ventaProducto['VentaProducto']['cantidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($ventaProducto['VentaProducto']['total']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
</div>