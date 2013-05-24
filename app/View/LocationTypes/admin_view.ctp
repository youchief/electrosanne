<div class="locationTypes view">
        <h2><?php  echo __('Location Type'); ?>  <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                		<li><?php echo $this->Html->link(__('Edit Location Type'), array('action' => 'edit', $locationType['LocationType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Location Type'), array('action' => 'delete', $locationType['LocationType']['id']), null, __('Are you sure you want to delete # %s?', $locationType['LocationType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Location Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
                        </ul>
                </div>
        </h2>
        <dl>
                		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($locationType['LocationType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($locationType['LocationType']['name']); ?>
			&nbsp;
		</dd>
        </dl>
</div>

        <div class="related">
                <h3><?php echo __('Related Locations'); ?></h3>
                <?php if (!empty($locationType['Location'])): ?>
                <table cellpadding="0" cellspacing="0" class="table table-striped">
                        <tr>
                                		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Size'); ?></th>
		<th><?php echo __('Latitude'); ?></th>
		<th><?php echo __('Longitude'); ?></th>
		<th><?php echo __('Location Type Id'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        	<?php
		$i = 0;
		foreach ($locationType['Location'] as $location): ?>
		<tr>
			<td><?php echo $location['id']; ?></td>
			<td><?php echo $location['name']; ?></td>
			<td><?php echo $location['description']; ?></td>
			<td><?php echo $location['url']; ?></td>
			<td><?php echo $location['size']; ?></td>
			<td><?php echo $location['latitude']; ?></td>
			<td><?php echo $location['longitude']; ?></td>
			<td><?php echo $location['location_type_id']; ?></td>
			<td><div class="btn-group">
				<?php echo $this->Html->link(__('View'), array('controller' => 'locations', 'action' => 'view', $location['id']), array('class'=>'btn')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'locations', 'action' => 'edit', $location['id']), array('class'=>'btn')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'locations', 'action' => 'delete', $location['id']), array('class'=>'btn'), __('Are you sure you want to delete # %s?', $location['id'])); ?>
			</div></td>
		</tr>
	<?php endforeach; ?>
                </table>
                <?php endif; ?>

               
        </div>
