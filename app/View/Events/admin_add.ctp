<div class="events form">
<?php echo $this->Form->create('Event'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Event'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('date');
		echo $this->Form->input('description');
		echo $this->Form->input('edition_id');
		echo $this->Form->input('location_id');
		echo $this->Form->input('event_type_id');
		echo $this->Form->input('Artist');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<ul class="pager">
  <li class="previous">
    <?php echo $this->Html->link(__('Back '), array('action' => 'index')); ?>  </li>
</ul>