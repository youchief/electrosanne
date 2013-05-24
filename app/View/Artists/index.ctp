<div class="row-fluid">
        <div class="span12">
                <h2>ARTISTS</h2>
                <div class="btn-group filter option-set clearfix " data-filter-group="day">
                        <button class="btn"><a href="#" data-filter-value="">ALL</a></button>
                        <button class="btn"><a href="#" data-filter-value=".06-09-12">THURSDAY</a></button>
                        <button class="btn"><a href="#" data-filter-value=".07-09-12">FRIDAY</a></button>
                        <button class="btn"><a href="#" data-filter-value=".08-09-12">SATURDAY</a></button>
                        <button class="btn"><a href="#" data-filter-value=".09-09-12">SUNDAY</a></button>
                </div>
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
        <div id="artists">

                <?php foreach ($artists as $artist): ?> 

                        <div class="thumbnail <?php echo $artist['Event'][0]['Location']['name'] ?> <?php echo date('d-m-y', strtotime($artist['Event'][0]['date'])) ?>">
                                <?php
                                echo $this->Html->image('../../' . $this->Media->thumb(array(
                                            'image' => $artist['Artist']['image'][0]['Mediafile']['src'],
                                            'width' => 150,
                                            'cropratio' => '16:10'
                                        )));
                                ?>
                                <b><?php echo $this->Html->link($artist['Artist']['name'], array('controller'=>'artists', 'action'=>'view', $artist['Artist']['id']))?></b>
                                <p><?php echo $artist['Event'][0]['Location']['name'] . " " . date('d-m-y h:i', strtotime($artist['Event'][0]['date'])) ?></p>
                        </div>


<?php endforeach; ?>
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
