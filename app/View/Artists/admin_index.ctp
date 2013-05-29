<div class="artists index">
        <h2><?php echo __('Artists'); ?> <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Actions
                                <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                                <li><?php echo $this->Html->link(__('New Artist'), array('action' => 'add')); ?></li>
                                <li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
                                <li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
                        </ul>
                </div></h2>
        <?php echo $this->Form->create('Artist'); ?>
        <?php echo $this->Form->input('name', array('class' => 'input-medium search-query', 'placeholder' => 'Name', 'label' => '')); ?>
        <?php echo $this->Form->end(); ?>
</form>
<table cellpadding="0" cellspacing="0" class="table table-striped">
        <tr>
                <th><?php echo $this->Paginator->sort('id'); ?></th>
                <th><?php echo $this->Paginator->sort('name'); ?></th>
                <th><?php echo $this->Paginator->sort('slug'); ?></th>
                <th><?php echo $this->Paginator->sort('style'); ?></th>
                <th><?php echo $this->Paginator->sort('label'); ?></th>
                <th><?php echo $this->Paginator->sort('link1'); ?></th>
                <th><?php echo $this->Paginator->sort('link2'); ?></th>
                <th><?php echo $this->Paginator->sort('international'); ?></th>
                <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($artists as $artist): ?>
                <tr>
                        <td><?php echo h($artist['Artist']['id']); ?>&nbsp;</td>
                        <td><?php echo h($artist['Artist']['name']); ?>&nbsp;</td>
                        <td><?php echo h($artist['Artist']['slug']); ?>&nbsp;</td>
                        <td><?php echo h($artist['Artist']['style']); ?>&nbsp;</td>
                        <td><?php echo h($artist['Artist']['label']); ?>&nbsp;</td>
                        <td><?php echo h($artist['Artist']['link1']); ?>&nbsp;</td>
                        <td><?php echo h($artist['Artist']['link2']); ?>&nbsp;</td>
                        <td><?php echo h($artist['Artist']['international']); ?>&nbsp;</td>
                        <td><div class="btn-group">
                                        <?php echo $this->Html->link(__('View'), array('action' => 'view', $artist['Artist']['id']), array('class' => 'btn')); ?>
                                        <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $artist['Artist']['id']), array('class' => 'btn')); ?>
                                        <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $artist['Artist']['id']), array('class' => 'btn'), __('Are you sure you want to delete # %s?', $artist['Artist']['id'])); ?>
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
                echo '<li>' . $this->Paginator->prev('<<', array(), null, array('class' => 'prev disabled')) . '</li>';
                echo '<li>' . $this->Paginator->numbers(array('separator' => '')) . '</li>';
                echo '<li>' . $this->Paginator->next('>>', array(), null, array('class' => 'next disabled')) . '</li>';
                ?>
        </ul>        
</div>
</div>
