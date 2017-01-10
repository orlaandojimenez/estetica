<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
	<div class="page-header">
	<h2><?php echo __('Citas'); ?></h2>
	</div>
	<div class="col-md-10">
	<table class="table table-stripped" >
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($citas as $cita): ?>
	<tr>
		<td><?php echo h($cita['Cita']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cita['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $cita['Cliente']['id'])); ?>
		</td>
		<td><?php echo h($cita['Cita']['fecha']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cita['Cita']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cita['Cita']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cita['Cita']['id']),array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $cita['Cita']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	<div class="col-md-2 btn-group-vertical">
  <?php echo $this->Html->link('Nueva Cita',array('controller' => 'citas', 'action' => 'add'),array('class' => "btn btn-sm btn-default")) ?>
  <?php echo $this->Html->link('Cita Servicios',array('controller' => 'cita_servicios', 'index' => 'index'),array('class' => "btn btn-sm btn-default")) ?>
  
	</div>
</div>
</div>
</div>