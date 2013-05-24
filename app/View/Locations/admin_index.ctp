<div class="locations index">
        <h2><?php echo __('Locations'); ?> <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                <li><?php echo $this->Html->link(__('New Location'), array('action' => 'add')); ?></li>
                                		<li><?php echo $this->Html->link(__('List Location Types'), array('controller' => 'location_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location Type'), array('controller' => 'location_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
                        </ul>
                </div></h2>

        <table cellpadding="0" cellspacing="0" class="table table-striped">
                <tr>
                                                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('name'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('description'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('url'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('size'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('latitude'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('longitude'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('location_type_id'); ?></th>
                                                <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($locations as $location): ?>
	<tr>
		<td><?php echo h($location['Location']['id']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['name']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['description']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['url']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['size']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['latitude']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['longitude']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($location['LocationType']['name'], array('controller' => 'location_types', 'action' => 'view', $location['LocationType']['id'])); ?>
		</td>
		<td><div class="btn-group">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $location['Location']['id']), array('class'=>'btn')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $location['Location']['id']), array('class'=>'btn')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $location['Location']['id']), array('class'=>'btn'), __('Are you sure you want to delete # %s?', $location['Location']['id'])) ; ?>
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
