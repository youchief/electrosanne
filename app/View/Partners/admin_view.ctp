<div class="partners view">
        <h2><?php  echo __('Partner'); ?>  <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                		<li><?php echo $this->Html->link(__('Edit Partner'), array('action' => 'edit', $partner['Partner']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Partner'), array('action' => 'delete', $partner['Partner']['id']), null, __('Are you sure you want to delete # %s?', $partner['Partner']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partner Types'), array('controller' => 'partner_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner Type'), array('controller' => 'partner_types', 'action' => 'add')); ?> </li>
                        </ul>
                </div>
        </h2>
        <dl>
                		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Home'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['home']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partner Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($partner['PartnerType']['name'], array('controller' => 'partner_types', 'action' => 'view', $partner['PartnerType']['id'])); ?>
			&nbsp;
		</dd>
        </dl>
</div>

