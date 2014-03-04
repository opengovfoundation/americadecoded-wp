var map, paper, pageWidth = 800;

var drawIt = function(){
	if($('#plot-map-container').length > 0) {
		paper = new ScaleRaphael('plot-map-container', 950, 650);

		map = paper.USMap();
		paper.scaleAll(pageWidth/map.width);


		$.getJSON(urlbase + 'js/instances.json', function(data){
			instances = data.features;

			$.each(instances, function(){
				map.plot(
						this.geometry.coordinates[0],
						this.geometry.coordinates[1],
						this.geometry.properties["site-name"] + "\n" + this.geometry.properties["created-by"],
						this.geometry.properties["site-link"],
						this.geometry.properties["status"]);
				if(this.geometry.properties["place-type"] == "state") {
					map.darkenState(this.geometry.properties["place-state"], .1);
				}
			});
		});
	}
}

$(document).ready(function(){
	drawIt();

});
