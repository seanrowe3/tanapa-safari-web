<div class="safariPointsOfInterests form">
<?php echo $this->Form->create('SafariPointsOfInterest'); ?>
	<fieldset>
		<legend><?php echo __('Add Safari Points Of Interest'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('safari_id');
		echo $this->Form->input('latitude');
		echo $this->Form->input('longitude');
		echo $this->Form->input('radius');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Safari Points Of Interests'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Safaris'), array('controller' => 'safaris', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Safari'), array('controller' => 'safaris', 'action' => 'add')); ?> </li>
	</ul>
</div>
