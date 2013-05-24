<div class="eventTypes view">
        <h2><?php  echo __('Event Type'); ?>  <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                		<li><?php echo $this->Html->link(__('Edit Event Type'), array('action' => 'edit', $eventType['EventType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Event Type'), array('action' => 'delete', $eventType['EventType']['id']), null, __('Are you sure you want to delete # %s?', $eventType['EventType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Event Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
                        </ul>
                </div>
        </h2>
        <dl>
                		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eventType['EventType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($eventType['EventType']['name']); ?>
			&nbsp;
		</dd>
        </dl>
</div>

        <div class="related">
                <h3><?php echo __('Related Events'); ?></h3>
                <?php if (!empty($eventType['Event'])): ?>
                <table cellpadding="0" cellspacing="0" class="table table-striped">
                        <tr>
                                		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Edition Id'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Event Type Id'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        	<?php
		$i = 0;
		foreach ($eventType['Event'] as $event): ?>
		<tr>
			<td><?php echo $event['id']; ?></td>
			<td><?php echo $event['name']; ?></td>
			<td><?php echo $event['date']; ?></td>
			<td><?php echo $event['description']; ?></td>
			<td><?php echo $event['edition_id']; ?></td>
			<td><?php echo $event['location_id']; ?></td>
			<td><?php echo $event['event_type_id']; ?></td>
			<td><div class="btn-group">
				<?php echo $this->Html->link(__('View'), array('controller' => 'events', 'action' => 'view', $event['id']), array('class'=>'btn')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'events', 'action' => 'edit', $event['id']), array('class'=>'btn')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'events', 'action' => 'delete', $event['id']), array('class'=>'btn'), __('Are you sure you want to delete # %s?', $event['id'])); ?>
			</div></td>
		</tr>
	<?php endforeach; ?>
                </table>
                <?php endif; ?>

               
        </div>
