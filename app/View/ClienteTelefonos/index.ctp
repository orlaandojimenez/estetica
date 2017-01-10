<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
	<div class="page-header">
	<h2><?php echo __('Cliente Telefonos'); ?></h2>
	</div>
	<div class="col-md-10">
	<table class="table table-stripped" >
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clienteTelefonos as $clienteTelefono): ?>
	<tr>
		<td><?php echo h($clienteTelefono['ClienteTelefono']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clienteTelefono['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $clienteTelefono['Cliente']['id'])); ?>
		</td>
		<td><?php echo h($clienteTelefono['ClienteTelefono']['telefono']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clienteTelefono['ClienteTelefono']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clienteTelefono['ClienteTelefono']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clienteTelefono['ClienteTelefono']['id']),array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $clienteTelefono['ClienteTelefono']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	<div class="col-md-2 btn-group-vertical">
  <?php echo $this->Html->link('Nuevo Telefono',array('controller' => 'cliente_telefonos', 'action' => 'add'),array('class' => "btn btn-sm btn-default")) ?>
  <?php echo $this->Html->link('Clientes',array('controller' => 'clientes', 'action' => 'index'),array('class' => "btn btn-sm btn-default")) ?>
  
	</div>

</div>
	</div>
	</div>

