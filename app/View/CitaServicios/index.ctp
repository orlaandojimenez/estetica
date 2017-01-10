<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
	<div class="page-header">
	<h2><?php echo __('Cita Servicios'); ?></h2>
	</div>
	<div class="col-md-10">
	<table class="table table-stripped" >
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cita_id'); ?></th>
			<th><?php echo $this->Paginator->sort('servicio_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($citaServicios as $citaServicio): ?>
	<tr>
		<td><?php echo h($citaServicio['CitaServicio']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($citaServicio['Cita']['cliente_id'], array('controller' => 'citas', 'action' => 'view', $citaServicio['Cita']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($citaServicio['Servicio']['nombre'], array('controller' => 'servicios', 'action' => 'view', $citaServicio['Servicio']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $citaServicio['CitaServicio']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $citaServicio['CitaServicio']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $citaServicio['CitaServicio']['id']),array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $citaServicio['CitaServicio']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	<div class="col-md-2 btn-group-vertical">
  <?php echo $this->Html->link('Nuevo Cita Servicio',array('controller' => 'cita_servicios', 'action' => 'add'),array('class' => "btn btn-sm btn-default")) ?>
  <?php echo $this->Html->link('Citas',array('controller' => 'citas', 'index' => 'index'),array('class' => "btn btn-sm btn-default")) ?>
  
	</div>
</div>
</div>
</div>
