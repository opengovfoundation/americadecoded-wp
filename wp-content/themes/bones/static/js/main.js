var map, paper;

var drawIt = function(){
	if($('#plot-map-container').length > 0) {
		paper = new ScaleRaphael('plot-map-container', 950, 650);

		map = paper.USMap();
		paper.scaleAll($('.map').outerWidth()/map.width);


		var svg = document.querySelector("svg");
		svg.removeAttribute("width");
		svg.removeAttribute("height");


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
					map.darkenState(this.geometry.properties["place-state"], 0.1);
				}
			});
		});
	}
};

/*
 * Move the content below the floating header
 */
function fixSizes() {
	$('body').css('padding-top', $('.main-header').outerHeight(true));

	paper.changeSize($('.map').outerWidth(), $('.map').outerWidth() / 2);
}

$(document).ready(function(){
	drawIt();
	fixSizes();

	$(window).on("debouncedresize", function( event ) {
		fixSizes();
	});
});
