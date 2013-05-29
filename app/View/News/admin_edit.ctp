<div class="news form">
        <?php echo $this->Form->create('News'); ?>
        <fieldset>
                <legend><?php echo __('Admin Edit News'); ?></legend>
                <?php
                echo $this->Form->input('id');
                foreach (Configure::read('Config.languages') as $key => $lng) {
                        echo $this->Form->input('New.title.' . $lng, array('label' => 'Title (' . $lng . ')', 'type' => 'text', 'value' => $this->request->data['titleTranslation'][$key]['content']));
                }
                foreach (Configure::read('Config.languages') as $key => $lng) {
                        echo $this->Form->input('New.content.' . $lng, array('label' => 'Content (' . $lng . ')', 'type' => 'textarea', 'value' => $this->request->data['contentTranslation'][$key]['content']));
                }
                echo $this->Media->input('News', 'media', 'embed');
                echo $this->Media->input('News', 'image', 'image');
                ?>
        </fieldset>
        <?php echo $this->Form->end(__('Submit')); ?>
</div>
<ul class="pager">
        <li class="previous">
                <?php echo $this->Html->link(__('Back '), array('action' => 'index')); ?>  </li>
</ul>
