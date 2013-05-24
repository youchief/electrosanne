<div class="partnerTypes view">
        <h2><?php  echo __('Partner Type'); ?>  <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                		<li><?php echo $this->Html->link(__('Edit Partner Type'), array('action' => 'edit', $partnerType['PartnerType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Partner Type'), array('action' => 'delete', $partnerType['PartnerType']['id']), null, __('Are you sure you want to delete # %s?', $partnerType['PartnerType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Partner Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
                        </ul>
                </div>
        </h2>
        <dl>
                		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($partnerType['PartnerType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($partnerType['PartnerType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo h($partnerType['PartnerType']['order']); ?>
			&nbsp;
		</dd>
        </dl>
</div>

        <div class="related">
                <h3><?php echo __('Related Partners'); ?></h3>
                <?php if (!empty($partnerType['Partner'])): ?>
                <table cellpadding="0" cellspacing="0" class="table table-striped">
                        <tr>
                                		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Order'); ?></th>
		<th><?php echo __('Home'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Partner Type Id'); ?></th>
                                <th class="actions"><?php echo __('Actions'); ?></th>
                        </tr>
                        	<?php
		$i = 0;
		foreach ($partnerType['Partner'] as $partner): ?>
		<tr>
			<td><?php echo $partner['id']; ?></td>
			<td><?php echo $partner['name']; ?></td>
			<td><?php echo $partner['order']; ?></td>
			<td><?php echo $partner['home']; ?></td>
			<td><?php echo $partner['url']; ?></td>
			<td><?php echo $partner['partner_type_id']; ?></td>
			<td><div class="btn-group">
				<?php echo $this->Html->link(__('View'), array('controller' => 'partners', 'action' => 'view', $partner['id']), array('class'=>'btn')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'partners', 'action' => 'edit', $partner['id']), array('class'=>'btn')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'partners', 'action' => 'delete', $partner['id']), array('class'=>'btn'), __('Are you sure you want to delete # %s?', $partner['id'])); ?>
			</div></td>
		</tr>
	<?php endforeach; ?>
                </table>
                <?php endif; ?>

               
        </div>
