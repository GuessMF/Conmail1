"use strict";
$(document).ready(function () {
  setTimeout(function () {
    $(function () {
      var options = {
        chart: {
          height: 300,
          type: "line",
          zoom: {
            enabled: false,
          },
        },
        dataLabels: {
          enabled: false,
          width: 2,
        },
        stroke: {
          curve: "straight",
        },
        colors: ["#1abc9c"],
        series: [
          {
            name: "Товаров",
            data: [10, 41, 35, 51, 49, 62, 69, 91, 148],
          },
        ],
        title: {
          text: "Тенденции продуктов по месяцам",
          align: "left",
        },
        grid: {
          row: {
            colors: ["#f3f6ff", "transparent"], // takes an array which will be repeated on columns
            opacity: 0.5,
          },
        },
        xaxis: {
          categories: [
            "Янв",
            "Фев",
            "Мар",
            "Апр",
            "Май",
            "Июн",
            "Июл",
            "Авг",
            "Сен",
          ],
        },
      };

      var chart = new ApexCharts(
        document.querySelector("#line-chart-1"),
        options
      );
      chart.render();
    });

    $(function () {
      var options = {
        chart: {
          height: 350,
          type: "area",
        },
        dataLabels: {
          enabled: false,
        },
        stroke: {
          curve: "smooth",
        },
        colors: ["#f1c40f", "#e74c3c"],
        series: [
          {
            name: "Товар 1",
            data: [31, 40, 28, 51, 42, 109, 100],
          },
          {
            name: "Товар 2",
            data: [11, 32, 45, 32, 34, 52, 41],
          },
        ],

        xaxis: {
          type: "datetime",
          categories: [
            "2023-06-19T00:00:00",
            "2023-06-19T01:30:00",
            "2023-06-19T02:30:00",
            "2023-06-19T03:30:00",
            "2023-06-19T04:30:00",
            "2023-06-19T05:30:00",
            "2023-06-19T06:30:00",
          ],
        },
        tooltip: {
          x: {
            format: "dd/MM/yy HH:mm",
          },
        },
      };

      var chart = new ApexCharts(
        document.querySelector("#area-chart-1"),
        options
      );

      chart.render();
    });

    $(function () {
      var options = {
        chart: {
          height: 350,
          type: "bar",
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: "55%",
            endingShape: "rounded",
          },
        },
        dataLabels: {
          enabled: false,
        },
        colors: ["#0e9e4a", "#1abc9c", "#e74c3c"],
        stroke: {
          show: true,
          width: 2,
          colors: ["transparent"],
        },
        series: [
          {
            name: "Чистая прибыль",
            data: [44, 55, 57, 56, 61, 58, 63],
          },
          {
            name: "Доход",
            data: [76, 85, 101, 98, 87, 105, 91],
          },
          {
            name: "Свободный денежный поток",
            data: [35, 41, 36, 26, 45, 48, 52],
          },
        ],
        xaxis: {
          categories: ["Фев", "Мар", "Апр", "Май", "Июн", "Июл", "Авг"],
        },
        yaxis: {
          title: {
            text: "млн.₽",
          },
        },
        fill: {
          opacity: 1,
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val + " млн.₽";
            },
          },
        },
      };
      var chart = new ApexCharts(
        document.querySelector("#bar-chart-1"),
        options
      );
      chart.render();
    });
    $(function () {
      var options = {
        chart: {
          height: 350,
          type: "bar",
          stacked: true,
          toolbar: {
            show: true,
          },
          zoom: {
            enabled: true,
          },
        },
        colors: ["#1abc9c", "#0e9e4a", "#f1c40f", "#e74c3c"],
        responsive: [
          {
            breakpoint: 480,
            options: {
              legend: {
                position: "bottom",
                offsetX: -10,
                offsetY: 0,
              },
            },
          },
        ],
        plotOptions: {
          bar: {
            horizontal: false,
          },
        },
        series: [
          {
            name: "ПРОДУКТ 1",
            data: [44, 55, 41, 67, 22, 43],
          },
          {
            name: "ПРОДУКТ 2",
            data: [13, 23, 20, 8, 13, 27],
          },
          {
            name: "ПРОДУКТ 3",
            data: [11, 17, 15, 15, 21, 14],
          },
          {
            name: "ПРОДУКТ 4",
            data: [21, 7, 25, 13, 22, 8],
          },
        ],
        xaxis: {
          type: "datetime",
          categories: [
            "06/01/2023 GMT",
            "06/02/2023 GMT",
            "06/03/2023 GMT",
            "06/04/2023 GMT",
            "06/05/2023 GMT",
            "06/06/2023 GMT",
          ],
        },
        legend: {
          position: "right",
          offsetY: 40,
        },
        fill: {
          opacity: 1,
        },
      };
      var chart = new ApexCharts(
        document.querySelector("#bar-chart-2"),
        options
      );
      chart.render();
    });

    $(function () {
      var options = {
        chart: {
          height: 320,
          type: "pie",
        },
        labels: [
          "Команда 1",
          "Команда 2",
          "Команда 3",
          "Команда 4",
          "Команда 5",
        ],
        series: [44, 55, 13, 43, 22],
        colors: ["#1abc9c", "#0e9e4a", "#00acc1", "#f1c40f", "#e74c3c"],
        legend: {
          show: true,
          position: "bottom",
        },
        dataLabels: {
          enabled: true,
          dropShadow: {
            enabled: false,
          },
        },
        responsive: [
          {
            breakpoint: 480,
            options: {
              legend: {
                position: "bottom",
              },
            },
          },
        ],
      };
      var chart = new ApexCharts(
        document.querySelector("#pie-chart-1"),
        options
      );
      chart.render();
    });
    $(function () {
      var options = {
        chart: {
          height: 320,
          type: "donut",
        },
        labels: [
          "Команда 1",
          "Команда 2",
          "Команда 3",
          "Команда 4",
          "Команда 5",
        ],
        series: [44, 55, 41, 17, 15],
        colors: ["#1abc9c", "#0e9e4a", "#00acc1", "#f1c40f", "#e74c3c"],
        legend: {
          show: true,
          position: "bottom",
        },
        plotOptions: {
          pie: {
            donut: {
              labels: {
                show: true,
                name: {
                  show: true,
                },
                value: {
                  show: true,
                },
              },
            },
          },
        },
        dataLabels: {
          enabled: true,
          dropShadow: {
            enabled: false,
          },
        },
        responsive: [
          {
            breakpoint: 480,
            options: {
              legend: {
                position: "bottom",
              },
            },
          },
        ],
      };
      var chart = new ApexCharts(
        document.querySelector("#pie-chart-2"),
        options
      );
      chart.render();
    });
  }, 700);
});
