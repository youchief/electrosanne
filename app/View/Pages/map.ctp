<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.css" />
<!--[if lte IE 8]>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.ie.css" />
<![endif]-->

<script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
<style>
        #map { height: 400px; }
</style>

<div id="map"></div>
<?php foreach($locations as $location){
        echo "<script>";
        echo "L.marker([46.520677,6.630791], {icon: greenIcon}).addTo(map).bindPopup('<b>Place Centrale</b>');";
        echo "</script>";
}
?>
<script>
    
    
        var map = L.map('map').setView([46.52145, 6.63069], 16);

             
        L.tileLayer('http://{s}.tile.cloudmade.com/77798a036f8d463995eb8d14335cfbc3/93809/256/{z}/{x}/{y}.png', {
                
                maxZoom: 18
        }).addTo(map);

        var blackIcon = L.icon({
                iconUrl: '../img/mini-logo.png',
                iconSize:     [30, 30]
        });
    
        var greenIcon = L.icon({
                iconUrl: '../img/mini-logo-green.png',
                iconSize:     [30, 30]
        });
        
        

//        var marker = L.marker([46.520677,6.630791], {icon: greenIcon}).addTo(map).bindPopup("<b>Place Centrale</b>");
//        var marker = L.marker([46.520999,6.631182],{icon: blackIcon}).addTo(map).bindPopup("<b>D! club</b>");
//        var marker = L.marker([46.521827,6.627309], {icon: blackIcon}).addTo(map).bindPopup("<A HREF='/pages/mad'>Mad</A>");
//        var marker = L.marker([46.520044,6.635812], {icon: blackIcon}).addTo(map).bindPopup("<b>Bourg</b>");
//        var marker = L.marker([46.522715,6.633216], {icon: greenIcon}).addTo(map).bindPopup("<b>Great Escape</b>");
        var popup = L.popup();

    
	
</script>
