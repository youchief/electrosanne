<div class="partnerTypes form">
<?php echo $this->Form->create('PartnerType'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Partner Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<ul class="pager">
  <li class="previous">
    <?php echo $this->Html->link(__('Back '), array('action' => 'index')); ?>  </li>
</ul>
