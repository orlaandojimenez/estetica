<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Cita'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cita['Cita']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cita['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $cita['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($cita['Cita']['fecha']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Cita Servicios'); ?></h3>
	<?php if (!empty($cita['CitaServicio'])): ?>
	<table class="table table-striped>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cita Id'); ?></th>
		<th><?php echo __('Servicio Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cita['CitaServicio'] as $citaServicio): ?>
		<tr>
			<td><?php echo $citaServicio['id']; ?></td>
			<td><?php echo $citaServicio['cita_id']; ?></td>
			<td><?php echo $citaServicio['servicio_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cita_servicios', 'action' => 'view', $citaServicio['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cita_servicios', 'action' => 'edit', $citaServicio['id']),array('class' => "btn btn-sm btn-default")); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cita_servicios', 'action' => 'delete', $citaServicio['id']),array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $citaServicio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
</div>
</div>
