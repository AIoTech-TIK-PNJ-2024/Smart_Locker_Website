const emptyData = document.getElementById("emptyData").innerText;

const chart = () => {
    const positiveData = document.getElementById("positiveData").innerText;
    const negativeData = document.getElementById("negativeData").innerText;
    const neutralData = document.getElementById("neutralData").innerText;

    const chartOptions = {
        series: [
            parseInt(positiveData),
            parseInt(negativeData),
            parseInt(neutralData),
        ],
        chart: {
            type: "donut",
            width: 340,
        },
        colors: ["#3C50E0", "#6577F3", "#8FD0EF"],
        labels: ["Positive", "Negative", "Neutral"],
        legend: {
            show: false,
            position: "bottom",
        },
        plotOptions: {
            pie: {
                donut: {
                    size: "65%",
                    background: "transparent",
                },
            },
        },
        dataLabels: {
            enabled: false,
        },
        responsive: [
            {
                breakpoint: 640,
                options: {
                    chart: {
                        width: 300,
                    },
                },
            },
        ],
    };

    const chartSelector = document.querySelectorAll("#chart");

    if (chartSelector.length) {
        const chartThree = new ApexCharts(
            document.querySelector("#chart"),
            chartOptions
        );
        chartThree.render();
    }
};

document.addEventListener("DOMContentLoaded", () => {
    if (emptyData == 0) {
        chart();
    }
});
