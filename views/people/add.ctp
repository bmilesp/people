<div class="people form">
<?php echo $this->Form->create('Person');?>
	<fieldset>
		<legend><?php __('Add Person'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('middle_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List People', true), array('action' => 'index'));?></li>
	</ul>
</div>