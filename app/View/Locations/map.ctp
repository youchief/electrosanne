<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.css" />
<!--[if lte IE 8]>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.ie.css" />
<![endif]-->

<script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
<style>
        #map { height: 400px; }
</style>

<div class="row-fluid">
        <div id="map"></div>
</div>
<hr>
<?php foreach ($locations as $location): ?>
        
        <div class="row-fluid">
                <div class="span6" >
                        <a name="<?php echo $location['Location']['id']?>"></a>
                        <h2><?php echo $location['Location']['name']?></h2>
                        <p><?php echo $location['Location']['description']; ?></p>
                </div>
                <div class="span6">
                        <?php
                        echo $this->Html->image('../../' . $this->Media->thumb(array(
                                    'image' => $location['Location']['image'][0]['Mediafile']['src'],
                                    'width' => 600,
                                    'cropratio' => '16:10'
                                )));
                        ?>
                </div>
        </div>
        <hr>
<?php endforeach; ?>

<script>


        var map = L.map('map').setView([46.52145, 6.63069], 16);


        L.tileLayer('http://{s}.tile.cloudmade.com/77798a036f8d463995eb8d14335cfbc3/93809/256/{z}/{x}/{y}.png', {

                maxZoom: 18
        }).addTo(map);

        var blackIcon = L.icon({
                iconUrl: '../img/mini-logo.png',
                iconSize: [30, 30]
        });

        var greenIcon = L.icon({
                iconUrl: '../img/mini-logo-green.png',
                iconSize: [30, 30]
        });

        var points = <?php echo json_encode($locations);
?>;
        for(var i=0;i<points.length;i++){
                var marker = L.marker([points[i]['Location']['latitude'],points[i]['Location']['longitude']], {icon: blackIcon}).addTo(map).bindPopup("<A HREF='#" + points[i]['Location']['id'] + "'>" + points[i]['Location']['name'] + "</A>");
        }


        var popup = L.popup();



</script>
<script>
        $(".scroll").click(function(event){
                event.preventDefault();
                //calculate destination place
                var dest=0;
                if($(this.hash).offset().top > $(document).height()-$(window).height()){
                        dest=$(document).height()-$(window).height();
                }else{
                        dest=$(this.hash).offset().top;
                }
                //go to destination
                $('html,body').animate({scrollTop:dest}, 1000,'swing');                
        });
</script>



