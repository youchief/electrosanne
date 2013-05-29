<div class="tickets form">
        <?php echo $this->Form->create('Ticket'); ?>
        <fieldset>
                <legend><?php echo __('Admin Edit Ticket'); ?></legend>
                <?php
                echo $this->Form->input('id');
                foreach (Configure::read('Config.languages') as $key => $lng) {
                        echo $this->Form->input('Ticket.name.' . $lng, array('label' => 'Description (' . $lng . ')', 'type' => 'text', 'value' => $this->request->data['nameTranslation'][$key]['content']));
                }
                foreach (Configure::read('Config.languages') as $key => $lng) {
                        echo $this->Form->input('Ticket.text.' . $lng, array('label' => 'Description (' . $lng . ')', 'type' => 'text', 'value' => $this->request->data['textTranslation'][$key]['content']));
                }

                echo $this->Form->input('price');
                echo $this->Form->input('link');
                echo $this->Form->input('actived');
                echo $this->Form->input('pass');
                echo $this->Form->input('order');
                echo $this->Media->input('Ticket', 'image', 'image');
                ?>
        </fieldset>
        <?php echo $this->Form->end(__('Submit')); ?>
</div>
<ul class="pager">
        <li class="previous">
                <?php echo $this->Html->link(__('Back '), array('action' => 'index')); ?>  </li>
</ul>
