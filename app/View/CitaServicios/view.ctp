<?php echo $this->element('menu'); ?>
<br/>
<div class="container">
	<div class="row">
		<div class="col-md-12">
<h2><?php echo __('Cita Servicio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($citaServicio['CitaServicio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cita'); ?></dt>
		<dd>
			<?php echo $this->Html->link($citaServicio['Cita']['cliente_id'], array('controller' => 'citas', 'action' => 'view', $citaServicio['Cita']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Servicio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($citaServicio['Servicio']['nombre'], array('controller' => 'servicios', 'action' => 'view', $citaServicio['Servicio']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
</div>
</div>