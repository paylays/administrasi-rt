import ApexCharts from "apexcharts/dist/apexcharts";

const usiaPie = document.querySelector("#usia-warga");

if (usiaPie) {
    const colors = usiaPie.dataset.colors ? usiaPie.dataset.colors.split(",") : ["#3e60d5", "#47ad77", "#ffc107", "#dc3545"];
    const series = usiaPie.dataset.values ? JSON.parse(usiaPie.dataset.values) : [];
    const labels = usiaPie.dataset.labels ? JSON.parse(usiaPie.dataset.labels) : [];

    const options = {
        chart: {
            height: 320,
            type: 'pie',
        },
        series: series,
        labels: labels,
        colors: colors,
        legend: {
            show: true,
            position: 'bottom',
            horizontalAlign: 'center',
            verticalAlign: 'middle',
            floating: false,
            fontSize: '14px',
            offsetX: 0,
            offsetY: 7
        },
        responsive: [{
            breakpoint: 600,
            options: {
                chart: {
                    height: 240
                },
                legend: {
                    show: false
                },
            }
        }]
    };

    const chart = new ApexCharts(usiaPie, options);
    chart.render();
}
