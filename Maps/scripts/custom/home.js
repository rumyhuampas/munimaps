// JavaScript Document		
jQuery(document).ready(function() {
    var markersArray = [];
    var map = null;
    var selectedMarker = null;
    var infoBox = null;
    var infoOpt = {
		disableAutoPan: false, 
		maxWidth: 0, 
		pixelOffset: new google.maps.Size(0, 0), 
		zIndex: null, 
		boxStyle: { 
			background: "#EBEBEB", 
			opacity: 1, 
			padding: "5px",
			width: "280px"
		}, 
		closeBoxMargin: "5px", 
		closeBoxURL: "assets/images/dialog_close.png", 
		infoBoxClearance: new google.maps.Size(1, 1), 
		isHidden: false, 
		pane: "floatPane", 
		enableEventPropagation: true									
	};
        
    function initMap() {
		var mapOptions = {
	      center: new google.maps.LatLng(-26.830664139156138, -65.20325660705566),
	      zoom: 12,
	      mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
	    map = new google.maps.Map(document.getElementById("map_canvas"),
	        mapOptions);
	        
	    google.maps.event.addListener(map, "click", function(event)
	    {	
	        // display the lat/lng in your form's lat/lng fields
	        document.getElementById("latFld").value = event.latLng.lat();
	        document.getElementById("lngFld").value = event.latLng.lng();
	    });
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
	
	var contextMenu = null;
	function initializeContextMenu(){
		//	create the ContextMenuOptions object
		var contextMenuOptions={};
		contextMenuOptions.classNames={menu:'context_menu', menuSeparator:'context_menu_separator'};
		
		//	create an array of ContextMenuItem objects
		var menuItems=[];
		menuItems.push({className:'context_menu_item', eventName:'zoom_in_click', label:'Zoom in'});
		menuItems.push({className:'context_menu_item', eventName:'zoom_out_click', label:'Zoom out'});
		//	a menuItem with no properties will be rendered as a separator
		menuItems.push({});
		menuItems.push({className:'context_menu_item', eventName:'center_map_click', label:'Center map here'});
		contextMenuOptions.menuItems=menuItems;
		
		//	create the ContextMenu object
		contextMenu=new ContextMenu(map, contextMenuOptions);
		
		//	display the ContextMenu on a Map right click
		/*google.maps.event.addListener(map, 'rightclick', function(mouseEvent){
			contextMenu.show(mouseEvent.latLng);
		});*/
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
        
        google.maps.event.addListener(marker, 'click', function(mouseEvent) {
        	if(selectedMarker != null){
        		selectedMarker.setIcon('assets/images/markers/electricblue/powerlinepole.png');
        	}
        	marker.setIcon('assets/images/markers/electricyellow/powerlinepole.png');
        	selectedMarker = marker;
        	
        	//contextMenu.show(mouseEvent.latLng);
        
			jQuery.post( 
		    	'/maps/home/getPoste/',
		    	{
		    		num: marker.num
		    	},
			    function( data ){
			    	poste = JSON.parse(data);
			    	var contentString = 
			    		'<div class="widget" style="margin-top:0px; clear:none;">'+
					        '<div class="widget_title">'+
					        	'<span style="height:34px; background:url(assets/images/flash.png) no-repeat center; background-size: 100% 100%;"></span><h5 style="padding-bottom:0px;">Poste: '+ poste.Num +'</h5>'+
					        '</div>'+
				            '<div class="widget_body">'+
			            		'<ul class="dw_summary">'+
				            		'<li><span style="font-size: 12px;font-weight: bold; margin-right:10px;">Latitud:</span>'+poste.Lat+'</li>'+
		                            '<li><span style="font-size: 12px;font-weight: bold; margin-right:10px;">Longitud:</span>'+poste.Long+'</li>'+
			            		'</ul>'+
			            		'<div class="action_bar">'+
				                    '<a class="button_small whitishBtn" href="#">Editar</a>'+
				                '</div>'+
					        '</div>'+
					    '</div>';
					
					infoOpt.content = contentString;
					if(infoBox != null){
						infoBox.close();
						infoBox = null;
					}
					infoBox = new InfoBox(infoOpt);
        			infoBox.open(map, marker);
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
    //initializeContextMenu();
});