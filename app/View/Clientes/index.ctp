<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
	<div class="page-header">
	<h2><?php echo __('Clientes'); ?></h2>
</div>
	<div class="col-md-10">
	<table class="table table-stripped" >
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cliente['Cliente']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cliente['Cliente']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cliente['Cliente']['id']),array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	<div class="col-md-2 btn-group-vertical">
  <?php echo $this->Html->link('Nuevo Cliente',array('controller' => 'clientes', 'action' => 'add'),array('class' => "btn btn-sm btn-default")) ?>
  <?php echo $this->Html->link('Telefonos',array('controller' => 'cliente_telefonos', 'index' => 'add'),array('class' => "btn btn-sm btn-default")) ?>
  
	</div>
	
	</div>
	</div>
	</div>
	
	
