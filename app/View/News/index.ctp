<?php foreach ($news as $new): ?>

        <div class="row-fluid">
                <div class="span6" >
                        <h1><?php echo $new['News']['title'] ?></h1>

                        <p><?php echo $new['News']['content'] ?></p>
                </div>
                <div class="span6">
                       

                                <?php foreach ($new['News']['media'] as $media):;?>
                                      
                                    <?php echo $media['Mediafile']['embed']; ?>
                                  
                                <?php endforeach; ?>
                        </div>
                </div>
        <hr>
<?php endforeach; ?>
