<div class="subscriptions form">
<?php echo $this->Form->create('Subscription'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Subscription'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('lastname');
		echo $this->Form->input('image');
		echo $this->Form->input('street');
		echo $this->Form->input('city');
		echo $this->Form->input('zip');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('birthdate');
		echo $this->Form->input('sex');
		echo $this->Form->input('marital_status');
		echo $this->Form->input('nationality');
		echo $this->Form->input('authorisation');
		echo $this->Form->input('driving_licence');
		echo $this->Form->input('work');
		echo $this->Form->input('spoken_languages');
		echo $this->Form->input('size');
		echo $this->Form->input('w_morning');
		echo $this->Form->input('w_afternoon');
		echo $this->Form->input('t_morning');
		echo $this->Form->input('t_afternoon');
		echo $this->Form->input('t_night');
		echo $this->Form->input('f_morning');
		echo $this->Form->input('f_afternoon');
		echo $this->Form->input('f_evening');
		echo $this->Form->input('sa_morning');
		echo $this->Form->input('sa_afternoon');
		echo $this->Form->input('sa_evening');
		echo $this->Form->input('su_morning');
		echo $this->Form->input('su_afternoon');
		echo $this->Form->input('m_morning');
		echo $this->Form->input('choice_one');
		echo $this->Form->input('choice_two');
		echo $this->Form->input('choice_three');
		echo $this->Form->input('comment');
		echo $this->Form->input('worked_before');
		echo $this->Form->input('worked_as_in_year');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<ul class="pager">
  <li class="previous">
    <?php echo $this->Html->link(__('Back '), array('action' => 'index')); ?>  </li>
</ul>
