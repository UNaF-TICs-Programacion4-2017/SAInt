$(document).ready(function () {

    // Build the chart
    Highcharts.chart('pie', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Curso 6° I'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Alumnos Presentes',
                y: 56.33
            }, {
                name: 'Alumnos Ausentes',
                y: 24.03,
                sliced: true,
                selected: true
            }, {
                name: 'Alumnos Retirados',
                y: 10.38
            }]
        }]
    });
});