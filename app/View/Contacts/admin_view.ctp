<div class="contacts view">
        <h2><?php  echo __('Contact'); ?>  <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                		<li><?php echo $this->Html->link(__('Edit Contact'), array('action' => 'edit', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact'), array('action' => 'delete', $contact['Contact']['id']), null, __('Are you sure you want to delete # %s?', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Types'), array('controller' => 'contact_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Type'), array('controller' => 'contact_types', 'action' => 'add')); ?> </li>
                        </ul>
                </div>
        </h2>
        <dl>
                		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo h($contact['Contact']['contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contact['ContactType']['name'], array('controller' => 'contact_types', 'action' => 'view', $contact['ContactType']['id'])); ?>
			&nbsp;
		</dd>
        </dl>
</div>

