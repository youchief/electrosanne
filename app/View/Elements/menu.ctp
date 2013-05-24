<div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <div class="container">
            <ul class="nav">
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
                        <li><?php echo $this->Html->link(__('Thursday'), "/artists") ?></li>
                        <li><?php echo $this->Html->link(__('Firday'), "/artists") ?></li>
                        <li><?php echo $this->Html->link(__('Saturday'), "/artists") ?></li>
                        <li><?php echo $this->Html->link(__('Sunday'), "/artists") ?></li>
                    </ul>
                </li>
                <li><?php echo $this->Html->link(__('ARTISTS'), array('controller'=>'artists', 'action'=>'index')) ?></li>
                <li><?php echo $this->Html->link(__('TICKETS'), "/tickets") ?></li>
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
                <li><?php echo $this->Html->link(__('HELPFULL'), "/") ?></li>
                <li><?php echo $this->Html->link(__('ABOUT'), "/") ?></li>
                <li><?php echo $this->Html->link(__('STAFF'), "/") ?></li>
                <li><?php echo $this->Html->link(__('PARTNERS'), "/") ?></li>
            </ul>
        </div>
    </div>
</div>