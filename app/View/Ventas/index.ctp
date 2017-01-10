<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
	<div class="page-header">
	<h2><?php echo __('Ventas'); ?></h2>
	</div>
	<div class="col-md-10">
	<table class="table table-stripped" >
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ventas as $venta): ?>
	<tr>
		<td><?php echo h($venta['Venta']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($venta['Cliente']['nombre'], array('controller' => 'clientes', 'action' => 'view', $venta['Cliente']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $venta['Venta']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $venta['Venta']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $venta['Venta']['id']),array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $venta['Venta']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	<div class="col-md-2 btn-group-vertical">
  <?php echo $this->Html->link('Nueva Venta',array('controller' => 'ventas', 'action' => 'add'),array('class' => "btn btn-sm btn-default")) ?>
  <?php echo $this->Html->link('Venta Productos',array('controller' => 'venta_productos', 'index' => 'index'),array('class' => "btn btn-sm btn-default")) ?>
  
	</div>
</div>
</div>
