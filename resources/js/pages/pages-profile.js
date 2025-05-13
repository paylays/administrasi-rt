/**
 * Theme: Attex - Responsive Tailwind CSS 3 Admin Dashboard
 * Author: Coderthemes
 * Module/App: Profile
 */
import {Chart} from "chart.js/auto";

const highPerformingProduct = document.getElementById('high-performing-product');
if (highPerformingProduct) {
    const ctx = highPerformingProduct.getContext("2d");
    const gradientStroke = ctx.createLinearGradient(0, 500, 0, 150);
    gradientStroke.addColorStop(0, "#409c6b");
    gradientStroke.addColorStop(1, "#3e60d5");


    const data = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], datasets: [{
            label: "Orders",
            backgroundColor: gradientStroke,
            borderColor: gradientStroke,
            hoverBackgroundColor: gradientStroke,
            hoverBorderColor: gradientStroke,
            data: [65, 59, 80, 81, 56, 89, 40, 32, 65, 59, 80, 81]
        }, {
            label: "Revenue",
            backgroundColor: "rgba(93,106,120,0.2)",
            borderColor: "rgba(93,106,120,0.2)",
            hoverBackgroundColor: "rgba(93,106,120,0.2)",
            hoverBorderColor: "rgba(93,106,120,0.2)",
            data: [89, 40, 32, 65, 59, 80, 81, 56, 89, 40, 65, 59]
        }]
    };

    const options = {
        maintainAspectRatio: false, datasets: {
            bar: {
                barPercentage: 0.7, categoryPercentage: 0.5
            }
        }, plugins: {
            legend: {
                display: false
            }
        }, scales: {
            y: {
                grid: {
                    display: false, color: "rgba(0,0,0,0.05)"
                }, stacked: false, ticks: {
                    stepSize: 20
                }
            }, x: {
                stacked: false, grid: {
                    color: "rgba(0,0,0,0.01)"
                }
            }
        }
    };

    const chart = new Chart(highPerformingProduct, {
        type: 'bar', data: data, options: options
    });
}
