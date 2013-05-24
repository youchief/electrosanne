<div class="partners index">
        <h2><?php echo __('Partners'); ?> <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                <li><?php echo $this->Html->link(__('New Partner'), array('action' => 'add')); ?></li>
                                		<li><?php echo $this->Html->link(__('List Partner Types'), array('controller' => 'partner_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner Type'), array('controller' => 'partner_types', 'action' => 'add')); ?> </li>
                        </ul>
                </div></h2>

        <table cellpadding="0" cellspacing="0" class="table table-striped">
                <tr>
                                                        <th><?php echo $this->Paginator->sort('id'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('name'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('order'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('home'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('url'); ?></th>
                                                        <th><?php echo $this->Paginator->sort('partner_type_id'); ?></th>
                                                <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
                <?php foreach ($partners as $partner): ?>
	<tr>
		<td><?php echo h($partner['Partner']['id']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['name']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['order']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['home']); ?>&nbsp;</td>
		<td><?php echo h($partner['Partner']['url']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($partner['PartnerType']['name'], array('controller' => 'partner_types', 'action' => 'view', $partner['PartnerType']['id'])); ?>
		</td>
		<td><div class="btn-group">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $partner['Partner']['id']), array('class'=>'btn')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $partner['Partner']['id']), array('class'=>'btn')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $partner['Partner']['id']), array('class'=>'btn'), __('Are you sure you want to delete # %s?', $partner['Partner']['id'])) ; ?>
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
