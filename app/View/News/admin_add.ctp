<div class="news form">
        <?php echo $this->Form->create('News'); ?>
        <fieldset>
                <legend><?php echo __('Admin Add News'); ?></legend>
                <?php
                foreach (Configure::read('Config.languages') as $key => $lng) {
                        echo $this->Form->input('News.title.' . $lng, array('label' => 'Title (' . $lng . ')', 'type' => 'text'));
                }
                foreach (Configure::read('Config.languages') as $key => $lng) {
                        echo $this->Form->input('News.content.' . $lng, array('label' => 'Content (' . $lng . ')', 'type' => 'textarea'));
                }
                ?>
        </fieldset>
        <?php echo $this->Form->end(__('Submit')); ?>
</div>
<ul class="pager">
        <li class="previous">
                <?php echo $this->Html->link(__('Back '), array('action' => 'index')); ?>  </li>
</ul>
