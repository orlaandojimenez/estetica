<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Servicio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($servicio['Servicio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($servicio['Servicio']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($servicio['Servicio']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio'); ?></dt>
		<dd>
			<?php echo h($servicio['Servicio']['precio']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Citas'); ?></h3>
	<?php if (!empty($servicio['Cita'])): ?>
	<table class="table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($servicio['Cita'] as $cita): ?>
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
</div>
</div>
