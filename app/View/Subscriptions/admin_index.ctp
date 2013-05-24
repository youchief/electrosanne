<div class="subscriptions index">
        <h2><?php echo __('Subscriptions'); ?> <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                <li><?php echo $this->Html->link(__('New Subscription'), array('action' => 'add')); ?></li>
                                                        </ul>
                </div></h2>

        <table cellpadding="0" cellspacing="0" class="table table-striped">
                <tr>
                                                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('name'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('lastname'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('image'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('street'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('city'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('zip'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('email'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('phone'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('birthdate'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('sex'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('marital_status'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('nationality'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('authorisation'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('driving_licence'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('work'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('spoken_languages'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('size'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('w_morning'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('w_afternoon'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('t_morning'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('t_afternoon'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('t_night'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('f_morning'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('f_afternoon'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('f_evening'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('sa_morning'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('sa_afternoon'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('sa_evening'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('su_morning'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('su_afternoon'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('m_morning'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('choice_one'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('choice_two'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('choice_three'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('comment'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('worked_before'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('worked_as_in_year'); ?></th>
                                                <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($subscriptions as $subscription): ?>
	<tr>
		<td><?php echo h($subscription['Subscription']['id']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['name']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['lastname']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['image']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['street']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['city']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['zip']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['email']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['phone']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['birthdate']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['sex']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['marital_status']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['nationality']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['authorisation']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['driving_licence']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['work']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['spoken_languages']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['size']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['w_morning']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['w_afternoon']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['t_morning']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['t_afternoon']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['t_night']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['f_morning']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['f_afternoon']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['f_evening']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['sa_morning']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['sa_afternoon']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['sa_evening']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['su_morning']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['su_afternoon']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['m_morning']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['choice_one']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['choice_two']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['choice_three']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['comment']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['worked_before']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['worked_as_in_year']); ?>&nbsp;</td>
		<td><div class="btn-group">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subscription['Subscription']['id']), array('class'=>'btn')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subscription['Subscription']['id']), array('class'=>'btn')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subscription['Subscription']['id']), array('class'=>'btn'), __('Are you sure you want to delete # %s?', $subscription['Subscription']['id'])) ; ?>
		</div></td>
	</tr>
<?php endforeach; ?>
        </table>
        <p>
                <?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>        </p>
        <div class="pagination">
                <ul>      
                        <?php
		echo  '<li>'.$this->Paginator->prev('<<', array(), null, array('class' => 'prev disabled')).'</li>';
		echo '<li>'.$this->Paginator->numbers(array('separator' => '')).'</li>';
		echo '<li>'.$this->Paginator->next('>>', array(), null, array('class' => 'next disabled')).'</li>';
	?>
                </ul>        
        </div>
</div>
