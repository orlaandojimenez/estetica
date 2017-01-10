<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
	<div class="page-header">
	<h2><?php echo __('Users'); ?></h2>
	</div>
	<div class="col-md-12">
	<table class="table table-stripped" >
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fullname'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('role'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['fullname']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['role']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']),array('class' => "btn btn-sm btn-default")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']),array('class' => "btn btn-sm btn-default"), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
</div>
</div>
