<script type="text/javascript">
	$( document ).ready(function() {
		"use strict";
		if( $('#chart_6').length > 0 ){
		var ctx6 = document.getElementById("chart_6").getContext("2d");
		var data6 = {
			 labels: [
			"Padi",
			"Jagung",
			"Ubi Kayu",
			"Ubi Jalar",
			"Ubi Kacang Tanah"
		],
		datasets: [
			{
				data: [2, 1, 2,1,23],
				backgroundColor: [
					"rgba(234,101,162,.8)",
					"rgba(241,91,38,.8)",
					"rgba(241,91,38,.8)",
					"rgba(241,91,38,.8)",
					"rgba(252,176,59,.8)"
				],
				hoverBackgroundColor: [
					"rgba(234,101,162,.8)",
					"rgba(241,91,38,.8)",
					"rgba(252,176,59,.8)"
				]
			}]
		};
		
		var pieChart  = new Chart(ctx6,{
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
</script>