<div class="invitations index">
        <h2><?php echo __('Invitations'); ?> <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                <li><?php echo $this->Html->link(__('New Invitation'), array('action' => 'add')); ?></li>
                                                        </ul>
                </div></h2>

        <table cellpadding="0" cellspacing="0" class="table table-striped">
                <tr>
                                                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('name'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('lastname'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('email'); ?></th>
                                                <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($invitations as $invitation): ?>
	<tr>
		<td><?php echo h($invitation['Invitation']['id']); ?>&nbsp;</td>
		<td><?php echo h($invitation['Invitation']['name']); ?>&nbsp;</td>
		<td><?php echo h($invitation['Invitation']['lastname']); ?>&nbsp;</td>
		<td><?php echo h($invitation['Invitation']['email']); ?>&nbsp;</td>
		<td><div class="btn-group">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $invitation['Invitation']['id']), array('class'=>'btn')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $invitation['Invitation']['id']), array('class'=>'btn')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $invitation['Invitation']['id']), array('class'=>'btn'), __('Are you sure you want to delete # %s?', $invitation['Invitation']['id'])) ; ?>
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
