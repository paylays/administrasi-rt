import ApexCharts from "apexcharts/dist/apexcharts";

var el = document.querySelector("#status-pengajuan-surat-bar");

if (el) {
    var sedang = parseInt(el.dataset.sedang || 0);
    var selesai = parseInt(el.dataset.selesai || 0);
    var ditolak = parseInt(el.dataset.ditolak || 0);

    var options = {
        chart: {
            height: 380,
            type: 'bar',
            toolbar: {
                show: false
            }
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: '45%',
                distributed: true
            }
        },
        dataLabels: {
            enabled: false
        },
        series: [{
            name: "Jumlah",
            data: [sedang, selesai, ditolak]
        }],
        colors: ["#ffc107", "#28a745", "#dc3545"],
        xaxis: {
            categories: ["Sedang Diverifikasi", "Selesai", "Ditolak"],
            labels: {
                style: {
                    fontSize: '14px'
                }
            }
        },
        grid: {
            borderColor: '#f1f3fa'
        },
        legend: {
            show: false
        }
    };

    var chart = new ApexCharts(el, options);
    chart.render();
}
