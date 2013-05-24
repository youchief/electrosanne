<div class="invitations view">
        <h2><?php  echo __('Invitation'); ?>  <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                		<li><?php echo $this->Html->link(__('Edit Invitation'), array('action' => 'edit', $invitation['Invitation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Invitation'), array('action' => 'delete', $invitation['Invitation']['id']), null, __('Are you sure you want to delete # %s?', $invitation['Invitation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Invitations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invitation'), array('action' => 'add')); ?> </li>
                        </ul>
                </div>
        </h2>
        <dl>
                		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($invitation['Invitation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($invitation['Invitation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($invitation['Invitation']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($invitation['Invitation']['email']); ?>
			&nbsp;
		</dd>
        </dl>
</div>

