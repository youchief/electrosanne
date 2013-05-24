<div class="users form login">
        <div style="text-align:center">
                <?php echo $this->Html->image('logo-3xw.png', array('text-align' => 'center')); ?>
        </div>
        <?php echo $this->Form->create('User'); ?>
        <fieldset>
                
                <?php
                echo $this->Form->input('email', array(
                    'placeholder' => 'Email',
                    'class' => 'input-block-level',
                    'label' => ''
                ));
                echo $this->Form->input('password', array(
                    'placeholder' => 'Password',
                    'class' => 'input-block-level',
                ));
                ?>
        </fieldset>
        <?php echo $this->Form->end(__('Sign in')); ?>
</div>

