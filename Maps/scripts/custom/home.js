// JavaScript Document		
jQuery(document).ready(function() {
    var markersArray = [];
    var map = null;
        
    function initMap() {
		var mapOptions = {
	      center: new google.maps.LatLng(-26.830664139156138, -65.20325660705566),
	      zoom: 12,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
	    map = new google.maps.Map(document.getElementById("map_canvas"),
	        mapOptions);
	        
	    /*google.maps.event.addListener(map, "click", function(event)
	    {
	        // place a marker
	        //placeMarker(event.latLng);
	
	        // display the lat/lng in your form's lat/lng fields
	        //document.getElementById("latFld").value = event.latLng.lat();
	        //document.getElementById("lngFld").value = event.latLng.lng();
	    });*/
	}
        
    function placePostes() {
	    jQuery.post( 
	    	'/maps/home/getPostes/',
	    	{},
		    function( data ){
		    	postes = JSON.parse(data);
		    	jQuery.each(postes, function(i, poste){	
		    		placeMarker(new google.maps.LatLng(poste[1], poste[2]), poste[0]);
		    	});
		    }
		);
	}
    
    function placeMarker(location, num) {
        // first remove all markers if there are any
        //deleteOverlays();

        var marker = new google.maps.Marker({
            position: location,
            map: map,
            icon: 'assets/images/markers/electricblue/powerlinepole.png',
            num: num
        });
        
        google.maps.event.addListener(marker, 'click', function() {
        	marker.setIcon('assets/images/markers/electricyellow/powerlinepole.png');
			jQuery.post( 
		    	'/maps/home/getPoste/',
		    	{
		    		num: marker.num
		    	},
			    function( data ){
			    	poste = JSON.parse(data);
			    	jQuery('#num').val(poste);
			    	jQuery('#lat').val();
			    	jQuery('#long').val();
			    }
			);
		});

        // add marker in markers array
        markersArray.push(marker);
    }

    // Deletes all markers in the array by removing references to them
    /*function deleteOverlays() {
        if (markersArray) {
            for (i in markersArray) {
                markersArray[i].setMap(null);
            }
        markersArray.length = 0;
        }
    }*/
    
    //--------------ONLOAD--------------
    initMap();
    placePostes();
});