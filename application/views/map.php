<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        
        <link rel="stylesheet" href="<?php echo base_url('qgis/css/leaflet.css') ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('qgis/css/qgis2web.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('qgis/css/label.css') ?>" />
        <link rel="stylesheet" href="<?php echo base_url('qgis/css/MarkerCluster.css') ?>" />
        <link rel="stylesheet" href="<?php echo base_url('qgis/css/MarkerCluster.Default.css') ?>" />
        
        <script src="<?php echo base_url('qgis/js/leaflet.js')?>"></script>
        <script src="<?php echo base_url('qgis/js/leaflet-heat.js')?>"></script>
        <script src="<?php echo base_url('qgis/js/leaflet.rotatedMarker.js')?>"></script>
        <script src="<?php echo base_url('qgis/js/OSMBuildings-Leaflet.js')?>"></script>
        <script src="<?php echo base_url('qgis/js/leaflet-hash.js')?>"></script>
        <script src="<?php echo base_url('qgis/js/label.js')?>"></script>
        <script src="<?php echo base_url('qgis/js/Autolinker.min.js')?>"></script>
        <script src="<?php echo base_url('qgis/js/leaflet.markercluster.js')?>"></script>
        <style>
        #map {
            /*width: 1119px;*/
            height: 600px;
        }
        table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    border: 2px solid black;
}

tbody, tr{ display: block; }

tr:after {
    content: ' ';
    display: block;
    visibility: hidden;
    clear: both;
}


tbody {
    height: 550px;
  overflow-y: auto;
  width: 100%;
}


tbody { border-top: 2px solid black; }

tbody td {
    width: 100%;
    /*float: left;*/
    /*border-right: 1px solid black;*/
}

tbody td:last-child {
    border-right: none;
}
        </style>
        <title></title>
    </head>
    <body>
<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark">Peta Kediri</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-7">
											<div id="map">
											<script src="<?php echo base_url('qgis/data/json_Administrasi0.js') ?>"></script>
        <script>
        
        // function toggleAppearance(){
        //     var dataDiv = document.getElementById("data-table");
        //     if(dataDiv.style.visibility == "hidden"){
        //         dataDiv.style.visibility = "visible";
        //     }
        //     var ch = document.getElementById("chart_6");
        //     if(ch.style.visibility == "hidden"){
        //     	ch.style.visibility = "visible";
        //     }
        // }
        function highlightFeature(e) {
            highlightLayer = e.target;

            if (e.target.feature.geometry.type === 'LineString') {
              highlightLayer.setStyle({
                color: '#ffff00',
              });
            } else {
              highlightLayer.setStyle({
                fillColor: '#ffff00',
                fillOpacity: 1
              });
            }
        }
        L.ImageOverlay.include({
            getBounds: function () {
                return this._bounds;
            }
        });
        var map = L.map('map', {
            zoomControl:true, maxZoom:90, minZoom:1
        }).fitBounds([[-8.02236596475,111.686067969],[-7.58931817125,112.533170232]]);
        var hash = new L.Hash(map);
        map.attributionControl.addAttribution('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a>');
        var feature_group = new L.featureGroup([]);
        var bounds_group = new L.featureGroup([]);
        var raster_group = new L.LayerGroup([]);
        var basemap0 = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors,<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
            maxZoom: 90
        });
        basemap0.addTo(map);
        var initialOrder = new Array();
        var layerOrder = new Array();
        function stackLayers() {
            for (index = 0; index < initialOrder.length; index++) {
                map.removeLayer(initialOrder[index]);
                map.addLayer(initialOrder[index]);
            }
        }
        function restackLayers() {
            for (index = 0; index < layerOrder.length; index++) {
                layerOrder[index].bringToFront();
            }
        }
        layerControl = L.control.layers({},{},{collapsed:false});
        function geoJson2heat(geojson, weight) {
          return geojson.features.map(function(feature) {
            return [
              feature.geometry.coordinates[1],
              feature.geometry.coordinates[0],
              feature.properties[weight]
            ];
          });
        }
        function pop_Administrasi0(feature, layer) {
        	if(feature.properties['KECAMATAN']=='NGANCAR'){
        		layer.setStyle(styleKecNgancar(feature));
        	}
        	// layer.on({
         //        mouseout: function(e) {
         //            layer.setStyle(doStyleAdministrasi0(feature));

         //        },
         //        click: highlightFeature,
         //    });
            layer.on('click', function(e) {
                var dt = document.getElementById('data-table');
                if(dt.style.visibility="hidden"){
                    dt.style.visibility="visible";
                }
                var ch = document.getElementById("chart_6");
                if(ch.style.visibility == "hidden"){
            		ch.style.visibility = "visible";
            	}
            	$( document ).ready(function() {
		"use strict";
		if( $('#chart_6').length > 0 ){
		var pieChart;
		// pieChart.destroy();
		// pieChart.destroy();
		$('#chart_6').replaceWith('<canvas id="chart_6"></canvas>');
		var ctx6 = document.getElementById("chart_6").getContext("2d");
		var data6 = {
			 labels: [
			"Padi",
			"Jagung",
			"Ubi Kayu",
			"Ubi Jalar",
			"Kacang Tanah"
		],
		datasets: [
			{
				data: [feature.properties['LUAS_PADI'], feature.properties['LUAS_JAGUN'], feature.properties['L_UBIKAYU'], feature.properties['L_UBIJALAR'], feature.properties['L_KTANAH']],
				// data: [100, 10, 4, 3, 2],
				backgroundColor: [
					"rgba(128,255,0,.8)",
					"rgba(255,255,102,.8)",
					"rgba(153,76,0,.8)",
					"rgba(255,51,51,.8)",
					"rgba(252,176,59,.8)"
				],
				hoverBackgroundColor: [
					"rgba(128,255,0,.8)",
					"rgba(255,255,102,.8)",
					"rgba(153,76,0,.8)",
					"rgba(255,51,51,.8)",
					"rgba(252,176,59,.8)"
				]
			}]
		};
		
		pieChart  = new Chart(ctx6,{
			type: 'pie',
			data: data6,
			options: {
				animation: {
					duration:	3000
				},
				responsive: true,
				legend: {
					labels: {
					fontFamily: "Varela Round",
					fontColor:"#2f2c2c"
					}
				},
				tooltips: {
					backgroundColor:'rgba(47,44,44,.9)',
					cornerRadius:0,
					footerFontFamily:"'Varela Round'"
				}
			}
		});
		}
	});
                // document.getElementById('data-id').innerHTML = feature.properties['OBJECTID']; 
                // document.getElementById('data-iddesa').innerHTML = feature.properties['FID_IDDESA']; 
                // document.getElementById('data-region').innerHTML = feature.properties['REGION']; 
                document.getElementById('data-desa').innerHTML = feature.properties['DESA']; 
                document.getElementById('data-kecamatan').innerHTML = feature.properties['KECAMATAN']; 
                document.getElementById('data-kabupaten').innerHTML = feature.properties['KABUPATEN']; 
                document.getElementById('data-provinsi').innerHTML = feature.properties['PROVINSI']; 
                document.getElementById('data-negara').innerHTML = feature.properties['NEGARA']; 
                // document.getElementById('data-kodeunsur').innerHTML = feature.properties['KODE_UNSUR']; 
                // document.getElementById('data-topnym').innerHTML = feature.properties['TOPONYM'];
                document.getElementById('data-luasdesa').innerHTML = feature.properties['LUAS_DESA'];
                document.getElementById('data-luaskeca').innerHTML = feature.properties['LUAS_KECA'];
                document.getElementById('data-padi').innerHTML = feature.properties['LUAS_PADI'];
                document.getElementById('data-jagung').innerHTML = feature.properties['LUAS_JAGUN'];
                document.getElementById('data-ubikayu').innerHTML = feature.properties['L_UBIKAYU'];
                document.getElementById('data-ubijalar').innerHTML = feature.properties['L_UBIJALAR'];
                document.getElementById('data-ktanah').innerHTML = feature.properties['L_KTANAH'];

                // document.getElementById('chart_6').innerHTML = feature.properties['LUAS_PADI'];
                // document.getElementById('chart_6').innerHTML = feature.properties['LUAS_JAGUN'];
                // document.getElementById('chart_6').innerHTML = feature.properties['L_UBIKAYU'];
                // document.getElementById('chart_6').innerHTML = feature.properties['L_UBIJALAR'];
                // document.getElementById('chart_6').innerHTML = feature.properties['L_KTANAH'];
                // document.getElementById('data-luaskabu').innerHTML = feature.properties['LUAS_KABU'];
                // document.getElementById('data-luasprov').innerHTML = feature.properties['LUAS_PROV'];
                // document.getElementById('data-luasunsur').innerHTML = feature.properties['LUAS_UNSUR'];
                // document.getElementById('data-webprov').innerHTML = feature.properties['WEB_PROV'];
                // document.getElementById('data-webkabu').innerHTML = feature.properties['WEB_KABU'];
                // document.getElementById('data-shape').innerHTML = feature.properties['Shape_Leng'];
                // document.getElementById('data-shapearea').innerHTML = feature.properties['Shape_Area']; 
            });
            layer.on('mouseover', function(e) {
                document.getElementById('namadesa').innerHTML = 'Desa : '+feature.properties['DESA'];
            });
            var popupContent = '<table><tr><td colspan="2">' + (feature.properties['OBJECTID'] !== null ? Autolinker.link(String(feature.properties['OBJECTID'])) : '') + '</td></tr><tr><td colspan="2">' + (feature.properties['FID_IDDESA'] !== null ? Autolinker.link(String(feature.properties['FID_IDDESA'])) : '') + '</td></tr><tr><td colspan="2">' + (feature.properties['REGION'] !== null ? Autolinker.link(String(feature.properties['REGION'])) : '') + '</td></tr><tr><td colspan="2">' + (feature.properties['DESA'] !== null ? Autolinker.link(String(feature.properties['DESA'])) : '') + '</td></tr><tr><td colspan="2">' + (feature.properties['KECAMATAN'] !== null ? Autolinker.link(String(feature.properties['KECAMATAN'])) : '') + '</td></tr><tr><td colspan="2">' + (feature.properties['KABUPATEN'] !== null ? Autolinker.link(String(feature.properties['KABUPATEN'])) : '') + '</td></tr><tr><td colspan="2">' + (feature.properties['PROVINSI'] !== null ? Autolinker.link(String(feature.properties['PROVINSI'])) : '') + '</td></tr><tr><td colspan="2">' + (feature.properties['NEGARA'] !== null ? Autolinker.link(String(feature.properties['NEGARA'])) : '') + '</td></tr><tr><td colspan="2">' + (feature.properties['KODE_UNSUR'] !== null ? Autolinker.link(String(feature.properties['KODE_UNSUR'])) : '') + '</td></tr><tr><td colspan="2">' + (feature.properties['TOPONYM'] !== null ? Autolinker.link(String(feature.properties['TOPONYM'])) : '') + '</td></tr><tr><td colspan="2">' + (feature.properties['LUAS_DESA'] !== null ? Autolinker.link(String(feature.properties['LUAS_DESA'])) : '') + '</td></tr><tr><td colspan="2">' + (feature.properties['LUAS_KECA'] !== null ? Autolinker.link(String(feature.properties['LUAS_KECA'])) : '') + '</td></tr><tr><td colspan="2">' + (feature.properties['LUAS_KABU'] !== null ? Autolinker.link(String(feature.properties['LUAS_KABU'])) : '') + '</td></tr><tr><td colspan="2">' + (feature.properties['LUAS_PROV'] !== null ? Autolinker.link(String(feature.properties['LUAS_PROV'])) : '') + '</td></tr><tr><td colspan="2">' + (feature.properties['LUAS_UNSUR'] !== null ? Autolinker.link(String(feature.properties['LUAS_UNSUR'])) : '') + '</td></tr><tr><td colspan="2">' + (feature.properties['WEB_PROV'] !== null ? Autolinker.link(String(feature.properties['WEB_PROV'])) : '') + '</td></tr><tr><td colspan="2">' + (feature.properties['WEB_KABU'] !== null ? Autolinker.link(String(feature.properties['WEB_KABU'])) : '') + '</td></tr><tr><td colspan="2">' + (feature.properties['Shape_Leng'] !== null ? Autolinker.link(String(feature.properties['Shape_Leng'])) : '') + '</td></tr><tr><td colspan="2">' + (feature.properties['Shape_Area'] !== null ? Autolinker.link(String(feature.properties['Shape_Area'])) : '') + '</td></tr><tr><td colspan="2">' + '<a href=data.php?'+feature.properties['OBJECTID']+'>show<a/>' +'</td></tr></table>';
            // var popupContent = '<table><tr><td colspan="2">' ++ '</td></tr></table>';
            // toggleAppearance();
            // layer.openPopup();
            // layer.bindPopup(popupContent);

        }
        function styleKecNgancar(feature){
        	return {
                weight: 1.04,
                color: '#000000',
                fillColor: '#ffff00',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                opacity: 1.0,
                fillOpacity: 1.0
            };
        }
        function doStyleAdministrasi0(feature) {
            return {
                weight: 1.04,
                color: '#000000',
                fillColor: '#d6cd68',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                opacity: 1.0,
                fillOpacity: 1.0
            };
        }
        var json_Administrasi0JSON = new L.geoJson(json_Administrasi0, {
            onEachFeature: pop_Administrasi0,
            style: doStyleAdministrasi0
        });
        layerOrder[layerOrder.length] = json_Administrasi0JSON;
        bounds_group.addLayer(json_Administrasi0JSON);
        initialOrder[initialOrder.length] = json_Administrasi0JSON;
        feature_group.addLayer(json_Administrasi0JSON);
        raster_group.addTo(map);
        feature_group.addTo(map);
        stackLayers();
        map.on('overlayadd', restackLayers);
        </script>

       
											</div>
										</div>
										<div class="col-sm-5">
											<h2 id="namadesa">Desa : </h2>
											<div id="data-table" style="visibility: hidden;" class="table-wrap">
												<table class="table top-countries">
													<tbody>
														<!-- <table class="table"> -->
														<tr><td>Desa </td><td colspan="2" id="data-desa">' + (feature.properties['DESA'] !== null ? Autolinker.link(String(feature.properties['DESA'])) : '') + 
            '</td><td></td></tr><tr><td>Kecamatan </td><td colspan="2" id="data-kecamatan">' + (feature.properties['KECAMATAN'] !== null ? Autolinker.link(String(feature.properties['KECAMATAN'])) : '') + 
            '</td><td></td></tr><tr><td>Kabupaten </td><td colspan="2" id="data-kabupaten">' + (feature.properties['KABUPATEN'] !== null ? Autolinker.link(String(feature.properties['KABUPATEN'])) : '') + 
            '</td><td></td></tr><tr><td>Provinsi </td><td colspan="2" id="data-provinsi">' + (feature.properties['PROVINSI'] !== null ? Autolinker.link(String(feature.properties['PROVINSI'])) : '') + 
            '</td><td></td></tr><tr><td>Negara </td><td colspan="2" id="data-negara">' + (feature.properties['NEGARA'] !== null ? Autolinker.link(String(feature.properties['NEGARA'])) : '') + 
            '</td><td></td></tr><tr><td>Luas Desa (km2) </td><td colspan="2" id="data-luasdesa">' + (feature.properties['LUAS_DESA'] !== null ? Autolinker.link(String(feature.properties['LUAS_DESA'])) : '') + 
            '</td><td></td></tr><tr><td>Luas Kecamatan (km2) </td><td colspan="2" id="data-luaskeca">' + (feature.properties['LUAS_KECA'] !== null ? Autolinker.link(String(feature.properties['LUAS_KECA'])) : '') + 
            '</td><td></td></tr><tr><td>Padi (ha) </td><td colspan="2" id="data-padi">' + (feature.properties['LUAS_PADI'] !== null ? Autolinker.link(String(feature.properties['LUAS_PADI'])) : '') + 
            '</td><td></td></tr><tr><td>Jagung (ha) </td><td colspan="2" id="data-jagung">' + (feature.properties['LUAS_JAGUN'] !== null ? Autolinker.link(String(feature.properties['LUAS_JAGUN'])) : '') + 
            '</td><td></td></tr><tr><td>Ubi Kayu (ha) </td><td colspan="2" id="data-ubikayu">' + (feature.properties['L_UBIKAYU'] !== null ? Autolinker.link(String(feature.properties['L_UBIKAYU'])) : '') + 
            '</td><td></td></tr><tr><td>Ubi Jalar (ha) </td><td colspan="2" id="data-ubijalar">' + (feature.properties['L_UBIJALAR'] !== null ? Autolinker.link(String(feature.properties['L_UBIJALAR'])) : '') + 
            '</td><td></td></tr><tr><td>Kacang Tanah (ha) </td><td colspan="2" id="data-ktanah">' + (feature.properties['L_KTANAH'] !== null ? Autolinker.link(String(feature.properties['L_KTANAH'])) : '') + 
            '</td><td></td></tr>
            <!-- </table> -->
            <!-- </table> -->
													</tbody>
												</table>
											</div>
								
										</div>
									</div>
								
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
				<div class="col-lg-6">
                        <div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark"><i class="icon-map mr-10"></i>Chart Distribusi</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<!-- <div id="morris_area_chart" class="morris-chart"></div> -->
									<canvas id="chart_6" width="100" height="200"  style="visibility: hidden;"></canvas>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="panel panel-default card-view">
							<div class="panel-heading">
								<div class="pull-left">
									<h6 class="panel-title txt-dark"><i class="icon-chart mr-10"></i>Grafik Luas Panen Tanaman Pangan (Hektar)</h6>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="panel-wrapper collapse in">
								<div class="panel-body">
									<div id="morris_bar_chart" class="morris-chart"></div>
								</div>
							</div>
						</div>
                    </div>
                    </div>

				</body>
				</html>