<?php
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma-directive: no-cache");
header("Cache-directive: no-cache");
header("Cache-control: no-cache");
header("Pragma: no-cache");
header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Body & Soul Vitality</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico" />
        <link type="text/css" rel="stylesheet" href="/css/index_style.css?<?php echo time(); ?>/">
        <script src="/js/jquery-3.1.1.min.js?<?php echo time(); ?>/"></script>
        <script src="/bootstrap-3.3.7-dist/js/bootstrap.min.js?<?php echo time(); ?>/"></script>

        <link type="text/css" rel="stylesheet" href="/fancybox/source/jquery.fancybox.css?<?php echo time(); ?>/">
        <script type="text/javascript" src="/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
        <script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".fancybox").fancybox();
            });
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCd_RWXDuDnf2mHqjpTjSkEhHB8VnJxSNE&callback=initMap" type="text/javascript"></script>
        <script type='text/javascript'>function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(48.980431130496584,14.477411929638716),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(48.980431130496584,14.477411929638716)});infowindow = new google.maps.InfoWindow({content:'<strong>Body & Soul Vitality</strong><br>B. Smetany 29, České Budějovice<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
    </head>
