(function($) {
	$.fn.mygmap = function(opts){
		marks = opts.marks;
		return $(this).each(function(){
			var map = $(this).gmap3({
				action:'init',
				options:{
					center:opts.center,
					zoom: opts.zoom
				}
			}
			,{
				action:'addMarkers',
				markers : marks,
				marker:{
					events:{
						click:function(marker,event,data){
							$(location).attr('href',data.url);
						},
						mouseover: function(marker,event,data){
							$(this).gmap3(
								{ action:'clear', name:'overlay'},
								{ action:'addOverlay',
									latLng: marker.getPosition(),
									content:  '<div class="infobulle ui-state-default ui-corner-all"><a href="'+ data.url +'">' + data.ville + '</a></div>',
									offset: { x:-46, y:-73 }
								}
							);
						}
					}
				}
			});
			
			$.each(marks,function(i,el){
				$("#gmap").gmap3({ 
					action: 'addCircle',
					center: [el.lat, el.lng],
					radius : 10000,
					fillColor : "#33B",
					strokeColor : "#009"
				});
			});
		});
	}	
}(jQuery));