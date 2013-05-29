<div class="row-fluid">
        <?php debug($partners)?>
<h1><?php echo __('Main')?><h1>
        <?php foreach ($partners as $partner): ?>
                <div class="span4">
                        <?php
                        echo $this->Html->image('../../' . $this->Media->thumb(array(
                                    'image' => $partner['Partner']['image'][0]['Mediafile']['src'],
                                    'width' => 200,
                                    
                                )));
                        ?>
                        <h3><?php echo $partner['Partner']['name'] ?></h3>
                </div>
        <?php endforeach; ?>

</div>