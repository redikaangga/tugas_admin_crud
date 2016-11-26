/*** First Chart in Dashboard page ***/

$(document).ready(function() {
	var url = "http://localhost:1234/welcome/chart";
	var row = [];
	$.getJSON( url , function(json) {
		var index = 0;

		var color = ["#92a8d1", "#eea29a", "#ffef96", "#96ceb4"];
		json.forEach(function(val){
			row[index++] = { name: val.posisi, y: val.jumlah, color: color[index] };
		});
		var dataChart = [row[0], row[1], row[2], row[3]];

		info = new Highcharts.Chart({
			chart: {
				renderTo: 'load',
				margin: [0, 0, 0, 0],
				backgroundColor: null,
				plotBackgroundColor: 'none',

			},

			title: {
				text: null
			},

			tooltip: {
				formatter: function() { 
					return this.point.name +': '+ this.y;
				} 	
			},
			series: [
			{
				borderWidth: 4,
				borderColor: '#fefbd8',
				shadow: false,	
				type: 'pie',
				name: 'Posisi',
				innerSize: '65%',
				data: dataChart,
				dataLabels: {
					enabled: false,
					color: '#000000',
					connectorColor: '#000000'
				}
			}]
		});
	});
});

/*** second Chart in Dashboard page ***/

$(document).ready(function() {
	var url = "http://localhost:1234/welcome/chartk";
	var row = [];

	$.getJSON( url , function(json) {
		var index = 0;

		var color = ["#96ceb4", "#b8a9c9", "#ff6f69", "#d9ad7c"];
		json.forEach(function(val){
			row[index++] = { name: val.asal, y: val.hasil, color: color[index] };
		});
		var dataChart = [row[0], row[1], row[2], row[3]];

		info = new Highcharts.Chart({
			chart: {
				renderTo: 'space',
				margin: [0, 0, 0, 0],
				backgroundColor: null,
				plotBackgroundColor: 'none',

			},

			title: {
				text: null
			},

			tooltip: {
				formatter: function() { 
					return this.point.name +': '+ this.y;

				} 	
			},
			series: [
			{
				borderWidth: 4,
				borderColor: '#fefbd8',
				shadow: false,	
				type: 'pie',
				name: 'SiteInfo',
				innerSize: '65%',
				data: dataChart,
				dataLabels: {
					enabled: false,
					color: '#000000',
					connectorColor: '#000000'
				}
			}]
		});
	});
});

/*** third Chart in Dashboard page ***/

$(document).ready(function() {
	var url = "http://localhost:1234/welcome/chartkel";
	var row = [];

	$.getJSON( url , function(json) {
		var data = 0;

		var color = ["#92a8d1", "#92a8d1", "#f7786b", "#f7786b"];
		json.forEach(function(val){
			row[data++] = { name: val.jenis_kelamin, y: val.jumlah, color: color[data] };
		});
		var dataChart = [row[0], row[1]];

		info = new Highcharts.Chart({
			chart: {
				renderTo: 'kelamin',
				margin: [0, 0, 0, 0],
				backgroundColor: null,
				plotBackgroundColor: 'none',

			},

			title: {
				text: null
			},

			tooltip: {
				formatter: function() { 
					return this.point.name +': '+ this.y;

				} 	
			},
			series: [
			{
				borderWidth: 4,
				borderColor: '#fefbd8',
				shadow: false,	
				type: 'pie',
				name: 'SiteInfo',
				innerSize: '65%',
				data: dataChart,
				dataLabels: {
					enabled: false,
					color: '#000000',
					connectorColor: '#000000'
				}
			}]
		});
	});
});