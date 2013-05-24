<div class="subscriptions view">
        <h2><?php  echo __('Subscription'); ?>  <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                		<li><?php echo $this->Html->link(__('Edit Subscription'), array('action' => 'edit', $subscription['Subscription']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subscription'), array('action' => 'delete', $subscription['Subscription']['id']), null, __('Are you sure you want to delete # %s?', $subscription['Subscription']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subscriptions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subscription'), array('action' => 'add')); ?> </li>
                        </ul>
                </div>
        </h2>
        <dl>
                		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthdate'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['birthdate']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marital Status'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['marital_status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nationality'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['nationality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Authorisation'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['authorisation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Driving Licence'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['driving_licence']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['work']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Spoken Languages'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['spoken_languages']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('W Morning'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['w_morning']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('W Afternoon'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['w_afternoon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('T Morning'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['t_morning']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('T Afternoon'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['t_afternoon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('T Night'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['t_night']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Morning'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['f_morning']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Afternoon'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['f_afternoon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('F Evening'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['f_evening']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sa Morning'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['sa_morning']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sa Afternoon'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['sa_afternoon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sa Evening'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['sa_evening']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Su Morning'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['su_morning']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Su Afternoon'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['su_afternoon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('M Morning'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['m_morning']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Choice One'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['choice_one']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Choice Two'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['choice_two']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Choice Three'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['choice_three']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Worked Before'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['worked_before']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Worked As In Year'); ?></dt>
		<dd>
			<?php echo h($subscription['Subscription']['worked_as_in_year']); ?>
			&nbsp;
		</dd>
        </dl>
</div>

