<div class="navbar navbar-inverse">
        <div class="navbar-inner">
                <div class="container">
                        <ul class="nav">
                                <li><?php echo $this->Html->link(__('NEWS'), array('controller' => 'news', 'action' => 'index')) ?></li>
                                <li class="dropdown">
                                        <a class="dropdown-toggle"
                                           data-toggle="dropdown"
                                           href="#">
                                                   <?php echo __('PROGAM'); ?>
                                                <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                                <li><?php echo $this->Html->link(__('Overview'), "/") ?></li>
                                                <li class="divider"></li>
                                                <li><?php echo $this->Html->link(__('Thursday'), array('controller' => 'events', 'action' => 'day', '2012-09-06')) ?></li>
                                                <li><?php echo $this->Html->link(__('Firday'), array('controller' => 'events', 'action' => 'day', '2012-09-07')) ?></li>
                                                <li><?php echo $this->Html->link(__('Saturday'), array('controller' => 'events', 'action' => 'day', '2012-09-08')) ?></li>
                                                <li><?php echo $this->Html->link(__('Sunday'), array('controller' => 'events', 'action' => 'day', '2012-09-09')) ?></li>
                                        </ul>
                                </li>
                                <li><?php echo $this->Html->link(__('ARTISTS'), array('controller' => 'artists', 'action' => 'index')) ?></li>
                                <li><?php echo $this->Html->link(__('TICKETS'), array('controller'=>'tickets', 'action'=>'index')) ?></li>
                                <li class="dropdown">
                                        <a class="dropdown-toggle"
                                           data-toggle="dropdown"
                                           href="#">
                                                   <?php echo __('EXTRAS'); ?>
                                                <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                                <li><?php echo $this->Html->link(__('EXPO'), "/") ?></li>
                                                <li><?php echo $this->Html->link(__('CONCOURS'), "/artists") ?></li>
                                                <li><?php echo $this->Html->link(__('HACK DAY'), "/artists") ?></li>
                                                <li><?php echo $this->Html->link(__('PICS'), "/artists") ?></li>
                                        </ul>
                                </li>
                                <li class="dropdown">
                                        <a class="dropdown-toggle"
                                           data-toggle="dropdown"
                                           href="#">
                                                   <?php echo __('HELPFULL'); ?>
                                                <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                                <li><?php echo $this->Html->link(__('MAP'), array('controller' => 'locations', 'action' => 'map')) ?></li>
                                        </ul>
                                </li>
                                <li><?php echo $this->Html->link(__('ABOUT'), "/") ?></li>
                                <li><?php echo $this->Html->link(__('STAFF'), "/") ?></li>
                                <li><?php echo $this->Html->link(__('PARTNERS'), array('controller' => 'partners', 'action' => 'index')) ?></li>
                        </ul>
                </div>
        </div>
</div>