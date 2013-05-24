<div class="artists form">
<?php echo $this->Form->create('Artist'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Artist'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('slug');
		echo $this->Form->input('description');
		echo $this->Form->input('style');
		echo $this->Form->input('label');
		echo $this->Form->input('link1');
		echo $this->Form->input('link2');
		echo $this->Form->input('international');
		echo $this->Form->input('Event');
                                   echo $this->Media->input('Artist', 'media');
                                   echo $this->Media->input('Artist', 'image');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<ul class="pager">
  <li class="previous">
    <?php echo $this->Html->link(__('Back '), array('action' => 'index')); ?>  </li>
</ul>
