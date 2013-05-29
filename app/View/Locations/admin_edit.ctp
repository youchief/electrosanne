<div class="locations form">
<?php echo $this->Form->create('Location'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Location'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		
                                        foreach (Configure::read('Config.languages') as $key => $lng) {
                                                echo $this->Form->input('Location.description.' . $lng, array('label' => 'Description (' . $lng . ')', 'type' => 'textarea', 'value' => $this->request->data['descriptionTranslation'][$key]['content']));
                                        }
		echo $this->Form->input('url');
		echo $this->Form->input('size');
		echo $this->Form->input('latitude');
		echo $this->Form->input('longitude');
		echo $this->Form->input('location_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<ul class="pager">
  <li class="previous">
    <?php echo $this->Html->link(__('Back '), array('action' => 'index')); ?>  </li>
</ul>
