<div class="users index">
        <h2><?php echo __('Users'); ?> <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                <li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
                                		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
                        </ul>
                </div></h2>

        <table cellpadding="0" cellspacing="0" class="table table-striped">
                <tr>
                                                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('email'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('password'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('group_id'); ?></th>
                                                <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
		</td>
		<td><div class="btn-group">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id']), array('class'=>'btn')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']), array('class'=>'btn')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('class'=>'btn'), __('Are you sure you want to delete # %s?', $user['User']['id'])) ; ?>
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
