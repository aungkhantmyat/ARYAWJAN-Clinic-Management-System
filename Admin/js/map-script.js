"use strict";

var LatLng = [[16.85579528401637, 96.13530250064196]];
var names = ['UIT'];
var phones = ['09-1234567']
var baseMapLayer = new ol.layer.Tile({
	source: new ol.source.OSM(),
});
var map = new ol.Map({
	target: 'map',
	layers: [baseMapLayer],
	view: new ol.View(
		{
			center: ol.proj.fromLonLat([96.135, 16.855]),
			zoom: 15
		}
	)
});
var markers = [];
for (var i = 0; i < LatLng.length; i++) {
	var coor = ol.proj.fromLonLat([LatLng[i][1], LatLng[i][0]]);
	markers.push(new ol.Feature({
		geometry: new ol.geom.Point(coor),
		name: names[i],
		description: phones[i],
		LatLng: [LatLng[i][1], LatLng[i][0]]
	}));
}




var iconStyles = new ol.style.Style({
	image: new ol.style.Icon({
		anchor: [0.5, 0.5],
		anchorXUnits: "fraction",
		anchorYUnits: "fraction",
		src: "https://maps.google.com/mapfiles/ms/icons/blue-dot.png"
	})
});


var labelStyle = new ol.style.Style({
	text: new ol.style.Text({
		font: '12px Calibri,sans-serif',
		overflow: true,
		fill: new ol.style.Fill({
			color: '#000'
		}),
		stroke: new ol.style.Stroke({
			color: '#fff',
			width: 3
		}),
		textBaseline: 'bottom',
		offsetY: -8
	})
});

var vectorSource = new ol.source.Vector({
	features: markers
});
var markerVectorLayer = new ol.layer.Vector({
	source: vectorSource,
	style: function (feature) {
		var name = feature.get('name');
		var iconStyle = iconStyles;
		labelStyle.getText().setText(name);
		return [iconStyle, labelStyle];
	}
});

map.addLayer(markerVectorLayer);

var container = document.getElementById('popup');
var content = document.getElementById('popup-content');
var closer = document.getElementById('popup-closer');

var overlay = new ol.Overlay({
	element: container,
	autoPan: true,
	autoPanAnimation: {
		duration: 250
	}
});
map.addOverlay(overlay);

map.on('pointermove', function (event) {
	var feature = map.forEachFeatureAtPixel(event.pixel,
		function (feature, layer) {
			return feature;
		});
	if (feature) {
		var coordinate = event.coordinate;
		content.innerHTML = feature.get('description');
		LatLng = feature.get('LatLng');
		overlay.setPosition(ol.proj.fromLonLat(LatLng));

	} else {
		overlay.setPosition(undefined);
		closer.blur();
	}
});

