<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
	<div class="page-header">
	<h2><?php echo __('Servicios'); ?></h2>
	</div>
	<div class="col-md-10">
	<table class="table table-stripped" >
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('precio'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($servicios as $servicio): ?>
	<tr>
		<td><?php echo h($servicio['Servicio']['id']); ?>&nbsp;</td>
		<td><?php echo h($servicio['Servicio']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($servicio['Servicio']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($servicio['Servicio']['precio']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $servicio['Servicio']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $servicio['Servicio']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $servicio['Servicio']['id']),array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $servicio['Servicio']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	<div class="col-md-2 btn-group-vertical">
  <?php echo $this->Html->link('Nuevo Servicio',array('controller' => 'servicios', 'action' => 'add'),array('class' => "btn btn-sm btn-default")) ?>
  <?php echo $this->Html->link('Cita Servicios',array('controller' => 'cita_servicios', 'action' => 'index'),array('class' => "btn btn-sm btn-default")) ?>
  
	</div>
</div>
</div>
</div>