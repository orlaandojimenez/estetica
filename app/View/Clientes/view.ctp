<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Citas'); ?></h3>
	<?php if (!empty($cliente['Cita'])): ?>
	<table class="table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cliente['Cita'] as $cita): ?>
		<tr>
			<td><?php echo $cita['id']; ?></td>
			<td><?php echo $cita['cliente_id']; ?></td>
			<td><?php echo $cita['fecha']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'citas', 'action' => 'view', $cita['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'citas', 'action' => 'edit', $cita['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'citas', 'action' => 'delete', $cita['id']),array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $cita['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Related Cliente Telefonos'); ?></h3>
	<?php if (!empty($cliente['ClienteTelefono'])): ?>
	<table class="table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cliente['ClienteTelefono'] as $clienteTelefono): ?>
		<tr>
			<td><?php echo $clienteTelefono['id']; ?></td>
			<td><?php echo $clienteTelefono['cliente_id']; ?></td>
			<td><?php echo $clienteTelefono['telefono']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cliente_telefonos', 'action' => 'view', $clienteTelefono['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cliente_telefonos', 'action' => 'edit', $clienteTelefono['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cliente_telefonos', 'action' => 'delete', $clienteTelefono['id']),array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $clienteTelefono['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Related Ventas'); ?></h3>
	<?php if (!empty($cliente['Venta'])): ?>
	<table class="table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cliente['Venta'] as $venta): ?>
		<tr>
			<td><?php echo $venta['id']; ?></td>
			<td><?php echo $venta['cliente_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ventas', 'action' => 'view', $venta['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ventas', 'action' => 'edit', $venta['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ventas', 'action' => 'delete', $venta['id']),array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $venta['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
</div>
</div>
