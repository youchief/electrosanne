<div class="view">
        <p class="lead">
                Welcome on your admin dashborad. Here are all the section you can reach. Use links below, menu items or actions in the selectbox to performe any duty you like... Enjoy our new tool ! 0_o
        </p>
        <div class="row-fluid">
                <div class="span12">
                        <?php echo $this->Html->link('Artists', array('controller' => 'artists', 'action' => 'index', 'plugin' => false), array('class' => 'btn btn-large btn-success')); ?>
                        <?php echo $this->Html->link('Events', array('controller' => 'events', 'action' => 'index', 'plugin' => false), array('class' => 'btn btn-large btn-primary')); ?>
                        <?php echo $this->Html->link('Locations', array('controller' => 'locations', 'action' => 'index', 'plugin' => false), array('class' => 'btn btn-large')); ?>
                        <?php echo $this->Html->link('News', array('controller' => 'news', 'action' => 'index', 'plugin' => false), array('class' => 'btn btn-large btn-info')); ?>
                        <?php echo $this->Html->link('Subscriptions', array('controller' => 'subscriptions', 'action' => 'index', 'plugin' => false), array('class' => 'btn btn-large btn-warning')); ?>
                        <?php echo $this->Html->link('Contacts', array('controller' => 'contacts', 'action' => 'index', 'plugin' => false), array('class' => 'btn btn-large btn-danger')); ?>
                        <?php echo $this->Html->link('Invitations', array('controller' => 'invitations', 'action' => 'index', 'plugin' => false), array('class' => 'btn btn-large btn-inverse')); ?>
                        <?php echo $this->Html->link('Partners', array('controller' => 'partners', 'action' => 'index', 'plugin' => false), array('class' => 'btn btn-large btn-success')); ?>
                        <?php echo $this->Html->link('Tickets', array('controller' => 'tickets', 'action' => 'index', 'plugin' => false), array('class' => 'btn btn-large btn-primary')); ?>
                </div>
        </div >       
</div>



            'Artsits'                      => array('controller'=>'artists','action'=>'index', 'plugin' => false),
            'Contacts'                      => array('controller'=>'contacts','action'=>'index', 'plugin' => false),
            'Editions'                      => array('controller'=>'editions','action'=>'index', 'plugin' => false),
            'Events'                      => array('controller'=>'events','action'=>'index', 'plugin' => false),
            'Invitations'                      => array('controller'=>'invitations','action'=>'index', 'plugin' => false),
            'Locations'                      => array('controller'=>'locations','action'=>'index', 'plugin' => false),
            'News'                      => array('controller'=>'news','action'=>'index', 'plugin' => false),
            'Partners'                      => array('controller'=>'partners','action'=>'index', 'plugin' => false),
            'Subscriptions'                      => array('controller'=>'subscriptions','action'=>'index', 'plugin' => false),
            'Tickets'                      => array('controller'=>'tickets','action'=>'index', 'plugin' => false),