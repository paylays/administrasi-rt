import ApexCharts from "apexcharts/dist/apexcharts";

const jenisKelaminPie = document.querySelector("#jenis-kelamin");

if (jenisKelaminPie) {
    const colors = jenisKelaminPie.dataset.colors ? jenisKelaminPie.dataset.colors.split(",") : ["#3e60d5", "#fa5c7c"];
    const series = jenisKelaminPie.dataset.values ? JSON.parse(jenisKelaminPie.dataset.values) : [0, 0];
    const labels = jenisKelaminPie.dataset.labels ? JSON.parse(jenisKelaminPie.dataset.labels) : ["Laki-laki", "Perempuan"];

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

    const chart = new ApexCharts(jenisKelaminPie, options);
    chart.render();
}
