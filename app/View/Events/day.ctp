<div class="row-fluid">
        <div class="span12">
                <h1><?php echo $this->Time->format('l', $day) ;?></h1>
                <div class="btn-group filter option-set clearfix " data-filter-group="location">
                        <button class="btn"><a href="#" data-filter-value="">ALL</a></button>
                        <button class="btn"><a href="#" data-filter-value=".Mad">MAD</a></button>
                        <button class="btn"><a href="#" data-filter-value=".Loft">LOFT</a></button>
                        <button class="btn"><a href="#" data-filter-value=".Centrale">Place Centrale</a></button>
                        <button class="btn"><a href="#" data-filter-value=".Club">D club</a></button>
                        <button class="btn"><a href="#" data-filter-value=".Academy">RBMA</a></button>
                        <button class="btn"><a href="#" data-filter-value=".Romandie">Le Romandie</a></button>
                </div>
        </div>
</div>

<div class="row-fluid">
        <div id="events">
                <?php foreach($events as $event):?>

                        <div class="thumbnail <?php echo $event['Location']['name']?>">
                                <?php
                                echo $this->Html->image('../../' . $this->Media->thumb(array(
                                            'image' => $event['Event']['image'][0]['Mediafile']['src'],
                                            'width' => 150,
                                            'cropratio' => '16:10'
                                        )));
                                ?>
                                <b><?php echo $event['Event']['name'] ;?></b>
                                <p><?php echo $event['Location']['name']." ".$this->Time->format('H:i', $event['Event']['date']) ;?></p>
                        </div>
                
<?php endforeach; ?>
        </div>
</div>

<script>
        $(function(){
    
                var $container = $('#events'),
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
