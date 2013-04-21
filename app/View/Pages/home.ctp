<div id="main-carousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#main-carousel" data-slide-to="1"></li>
        <li data-target="#main-carousel" data-slide-to="2"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="active item"><?php echo $this->Html->image('slide-1.png'); ?></div>
        <div class="item"><?php echo $this->Html->image('slide-2.png'); ?></div>
        <div class="item"><?php echo $this->Html->image('slide-3.png'); ?></div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#main-carousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#main-carousel" data-slide="next">&rsaquo;</a>
</div>

<script>
    $('.carousel').carousel();
</script>

<div class="row-fluid">
    <h2>HIGHLIGHTS</h2>
    <ul class="thumbnails">
        <li class="span2">
            <div class="thumbnail">
                <?php echo $this->Html->image('test.jpg'); ?>
                <b>Two Doors Cinema Club</b>
                <p>Mad - Jeudi 23h</p>
            </div>
        </li>
        <li class="span2">
            <div class="thumbnail">
                <?php echo $this->Html->image('KRAFTWERK.jpg'); ?>
                <b>Kraftwerk</b>
                <p>Mad - Jeudi 23h</p>
            </div>
        </li>
        <li class="span2">
            <div class="thumbnail">
                <?php echo $this->Html->image('PetShop.jpg'); ?>
                <b>Pet Shop Boy</b>
                <p>Mad - Jeudi 23h</p>
            </div>
        </li>
        <li class="span2">
            <div class="thumbnail">
                <?php echo $this->Html->image('Skrillex.jpg'); ?>
                <b>Skrillex</b>
                <p>Mad - Jeudi 23h</p>
            </div>
        </li>
        <li class="span2">
            <div class="thumbnail">
                <?php echo $this->Html->image('major-lazer.jpg'); ?>
                <b>Major Lazer</b>
                <p>Mad - Jeudi 23h</p>
            </div>
        </li>
        <li class="span2">
            <div class="thumbnail">
                <?php echo $this->Html->image('ENTER.jpg'); ?>
                <b>Enter</b>
                <p>Mad - Jeudi 23h</p>
            </div>
        </li>
        
    </ul>
</div>


<div class="row-fluid">
    <div class="span4">
        <h2>HOT NEWS</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn" href="#">View details »</a></p>
    </div>
    <div class="span4">
        <h2>SOCIALS</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
        <p><a class="btn" href="#">View details »</a></p>
    </div>
    <div class="span4">
        <h2>ADS</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
        <p><a class="btn" href="#">View details »</a></p>
    </div>
</div>