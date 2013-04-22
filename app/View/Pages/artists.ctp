<div class="row-fluid">
    <div class="span12">
        <h2>ARTISTS</h2>
        <div class="btn-group filter option-set clearfix " data-filter-group="day">
            <button class="btn"><a href="#" data-filter-value="">ALL</a></button>
            <button class="btn"><a href="#" data-filter-value=".thursday">THURSDAY</a></button>
            <button class="btn"><a href="#" data-filter-value=".friday">FRIDAY</a></button>
            <button class="btn"><a href="#" data-filter-value=".SATURDAY">SATURDAY</a></button>
            <button class="btn"><a href="#" data-filter-value=".SUNDAY">SUNDAY</a></button>
        </div>
        <div class="btn-group filter option-set clearfix " data-filter-group="location">
            <button class="btn"><a href="#" data-filter-value="">ALL</a></button>
            <button class="btn"><a href="#" data-filter-value=".mad">MAD</a></button>
            <button class="btn"><a href="#" data-filter-value=".loft">LOFT</a></button>
            <button class="btn"><a href="#" data-filter-value=".central">CENTRAL</a></button>
            <button class="btn"><a href="#" data-filter-value=".d">D club</a></button>
        </div>
    </div>
</div>
<div id="artists">
    <div class="row-fluid">

        <ul class="thumbnails ">    
            <li class="span2">
                <div class="thumbnail thursday mad">
                    <?php echo $this->Html->image('KRAFTWERK.jpg'); ?>
                    <b>Kraftwerk</b>
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
                <div class="thumbnail friday d">
                    <?php echo $this->Html->image('PetShop.jpg'); ?>
                    <b>Pet Shop Boy</b>
                    <p>Mad - Jeudi 23h</p>
                </div>
            </li>
            <li class="span2">
                <div class="thumbnail friday loft">
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
        <ul class="thumbnails ">   
            <li class="span2">
                <div class="thumbnail">
                    <?php echo $this->Html->image('KRAFTWERK.jpg'); ?>
                    <b>Kraftwerk</b>
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


        </ul>
    </div>
</div>


<script>
    $(function(){
    
        var $container = $('#artists'),
        filters = {};

        $container.isotope({
            itemSelector : '.thumbnail',
            masonry: {
                columnWidth: 80
            }
        });

        // filter buttons
        $('.filter a').click(function(){
            var $this = $(this);
            // don't proceed if already selected
            if ( $this.hasClass('selected') ) {
                return;
            }
      
            var $optionSet = $this.parents('.option-set');
            // change selected class
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');
      
            // store filter value in object
            // i.e. filters.color = 'red'
            var group = $optionSet.attr('data-filter-group');
            filters[ group ] = $this.attr('data-filter-value');
            // convert object into array
            var isoFilters = [];
            for ( var prop in filters ) {
                isoFilters.push( filters[ prop ] )
            }
            var selector = isoFilters.join('');
            $container.isotope({ filter: selector });

            return false;
        });

    });
</script>