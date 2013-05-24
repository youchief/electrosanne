<div class="tickets index">
        <h2><?php echo __('Tickets'); ?> <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                <li><?php echo $this->Html->link(__('New Ticket'), array('action' => 'add')); ?></li>
                                                        </ul>
                </div></h2>

        <table cellpadding="0" cellspacing="0" class="table table-striped">
                <tr>
                                                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('name'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('text'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('price'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('link'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('actived'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('pass'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('order'); ?></th>
                                                <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($tickets as $ticket): ?>
	<tr>
		<td><?php echo h($ticket['Ticket']['id']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['name']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['text']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['price']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['link']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['actived']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['pass']); ?>&nbsp;</td>
		<td><?php echo h($ticket['Ticket']['order']); ?>&nbsp;</td>
		<td><div class="btn-group">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ticket['Ticket']['id']), array('class'=>'btn')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ticket['Ticket']['id']), array('class'=>'btn')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ticket['Ticket']['id']), array('class'=>'btn'), __('Are you sure you want to delete # %s?', $ticket['Ticket']['id'])) ; ?>
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
