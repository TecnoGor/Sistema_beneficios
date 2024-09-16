import Chart from 'chart.js/auto'


let canvas1 = document.getElementById('chart1').getContext('2d');

var chart = new Chart(canvas1,
{
	type:"doughnut",
	data: {
		labels: ['Jefes de Familia','Integrantes','Menores de Edad','Adultos mayores'],
		datasets: [{
			label: '# de persona',
			data: [70,5,3,10],
			backgroundColor: [
				'#fff',
				'#f00',
				'#00f',
				'#0f0'
				]
		}]
	}
});