<div class="row-fluid">
        <div class="span6">
                <h1><?php echo $artist['Artist']['name']; ?></h1>
                <p><?php echo h($artist['Artist']['description']); ?></p>
                <dl>

                        <dt><?php echo __('Style'); ?></dt>
                        <dd>
                                <?php echo h($artist['Artist']['style']); ?>
                                &nbsp;
                        </dd>
                        <dt><?php echo __('Label'); ?></dt>
                        <dd>
                                <?php echo h($artist['Artist']['label']); ?>
                                &nbsp;
                        </dd>
                        <dt><?php echo __('Links'); ?></dt>
                        <dd>
                                <?php echo $this->Html->link($artist['Artist']['link1']); ?>
                                <br>
                                <?php echo $this->Html->link($artist['Artist']['link2']); ?>
                        </dd>
                </dl>
        </div>
        <div class="span6">
                <?php
                echo $this->Html->image('../../' . $this->Media->thumb(array(
                            'image' => $artist['Artist']['image'][0]['Mediafile']['src'],
                            'width' => 600,
                            'cropratio' => '16:10'
                        )));
                ?>

        </div>
</div>
<div class="row-fluid">

        <?php
        $i = 0;
        foreach ($artist['Artist']['media'] as $media):
                ?>
                <?php
                if (($i % 2) == 1) {
                       echo "</div>";
                       echo '<div class="row-fluid">';
                }
                ?>

                <div class="span6">
        <?php echo $media['Mediafile']['embed']; ?>
                </div>
<?php endforeach; ?>


</div>