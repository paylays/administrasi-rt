import ApexCharts from "apexcharts/dist/apexcharts";

const pengajuanChartEl = document.querySelector("#tren-pengajuan-surat-line");

if (pengajuanChartEl) {
    const colors = pengajuanChartEl.dataset.colors.split(",");
    const labels = JSON.parse(pengajuanChartEl.dataset.labels);
    const values = JSON.parse(pengajuanChartEl.dataset.values);

    const options = {
        chart: {
            height: 380,
            type: 'line',
            zoom: { enabled: false },
        },
        colors: colors,
        stroke: {
            width: 3,
            curve: 'smooth'
        },
        series: [{
            name: "Pengajuan Surat",
            data: values
        }],
        xaxis: {
            categories: labels
        },
        dataLabels: {
            enabled: false
        },
        title: {
            text: 'Pengajuan Surat / Bulan',
            align: 'center'
        },
        grid: {
            borderColor: '#f1f3fa',
            row: {
                colors: ['transparent', 'transparent'],
                opacity: 0.2
            },
        },
        responsive: [{
            breakpoint: 600,
            options: {
                chart: { height: 300 },
                legend: { show: false }
            }
        }]
    };

    new ApexCharts(pengajuanChartEl, options).render();
}
