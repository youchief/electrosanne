<div class="contactTypes view">
        <h2><?php  echo __('Contact Type'); ?>  <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                		<li><?php echo $this->Html->link(__('Edit Contact Type'), array('action' => 'edit', $contactType['ContactType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact Type'), array('action' => 'delete', $contactType['ContactType']['id']), null, __('Are you sure you want to delete # %s?', $contactType['ContactType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
                        </ul>
                </div>
        </h2>
        <dl>
                		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contactType['ContactType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contactType['ContactType']['name']); ?>
			&nbsp;
		</dd>
        </dl>
</div>

        <div class="related">
                <h3><?php echo __('Related Contacts'); ?></h3>
                <?php if (!empty($contactType['Contact'])): ?>
                <table cellpadding="0" cellspacing="0" class="table table-striped">
                        <tr>
                                		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Contact'); ?></th>
		<th><?php echo __('Contact Type Id'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        	<?php
		$i = 0;
		foreach ($contactType['Contact'] as $contact): ?>
		<tr>
			<td><?php echo $contact['id']; ?></td>
			<td><?php echo $contact['name']; ?></td>
			<td><?php echo $contact['contact']; ?></td>
			<td><?php echo $contact['contact_type_id']; ?></td>
			<td><div class="btn-group">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contacts', 'action' => 'view', $contact['id']), array('class'=>'btn')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contacts', 'action' => 'edit', $contact['id']), array('class'=>'btn')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contacts', 'action' => 'delete', $contact['id']), array('class'=>'btn'), __('Are you sure you want to delete # %s?', $contact['id'])); ?>
			</div></td>
		</tr>
	<?php endforeach; ?>
                </table>
                <?php endif; ?>

               
        </div>
