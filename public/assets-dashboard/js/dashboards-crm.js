"use strict";
! function() {
    let o, i, t, n, l;
    t = isDarkStyle ? (o = config.colors_dark.cardColor, i = config.colors_dark.textMuted, n = config.colors_dark.bodyColor, l = config.colors_dark.borderColor, "dark") : (o = config.colors.cardColor, i = config.colors.textMuted, n = config.colors.bodyColor, l = config.colors.borderColor, "");
    var e = document.querySelector("#salesLastYear"),
        r = {
            chart: {
                height: 78,
                type: "area",
                parentHeightOffset: 0,
                toolbar: {
                    show: !1
                },
                sparkline: {
                    enabled: !0
                }
            },
            markers: {
                colors: "transparent",
                strokeColors: "transparent"
            },
            grid: {
                show: !1
            },
            colors: [config.colors.success],
            fill: {
                type: "gradient",
                gradient: {
                    shade: t,
                    shadeIntensity: .8,
                    opacityFrom: .6,
                    opacityTo: .25
                }
            },
            dataLabels: {
                enabled: !1
            },
            stroke: {
                width: 2,
                curve: "smooth"
            },
            series: [{
                data: [200, 55, 400, 250]
            }],
            xaxis: {
                show: !0,
                lines: {
                    show: !1
                },
                labels: {
                    show: !1
                },
                stroke: {
                    width: 0
                },
                axisBorder: {
                    show: !1
                }
            },
            yaxis: {
                stroke: {
                    width: 0
                },
                show: !1
            },
            tooltip: {
                enabled: !1
            }
        },
        e = (null !== e && new ApexCharts(e, r).render(), document.querySelector("#sessionsLastMonth")),
        r = {
            chart: {
                type: "bar",
                height: 78,
                parentHeightOffset: 0,
                stacked: !0,
                toolbar: {
                    show: !1
                }
            },
            series: [{
                name: "PRODUCT A",
                data: [4, 3, 6, 4, 3]
            }, {
                name: "PRODUCT B",
                data: [-3, -4, -3, -2, -3]
            }],
            plotOptions: {
                bar: {
                    horizontal: !1,
                    columnWidth: "30%",
                    barHeight: "100%",
                    borderRadius: 5,
                    startingShape: "rounded",
                    endingShape: "rounded"
                }
            },
            dataLabels: {
                enabled: !1
            },
            tooltip: {
                enabled: !1
            },
            stroke: {
                curve: "smooth",
                width: 1,
                lineCap: "round",
                colors: [o]
            },
            legend: {
                show: !1
            },
            colors: [config.colors.primary, config.colors.success],
            grid: {
                show: !1,
                padding: {
                    top: -41,
                    right: -10,
                    left: -8,
                    bottom: -22
                }
            },
            xaxis: {
                categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
                labels: {
                    show: !1
                },
                axisBorder: {
                    show: !1
                },
                axisTicks: {
                    show: !1
                }
            },
            yaxis: {
                show: !1
            },
            responsive: [{
                breakpoint: 1441,
                options: {
                    plotOptions: {
                        bar: {
                            columnWidth: "40%"
                        }
                    }
                }
            }, {
                breakpoint: 1300,
                options: {
                    plotOptions: {
                        bar: {
                            columnWidth: "50%"
                        }
                    }
                }
            }, {
                breakpoint: 1200,
                options: {
                    plotOptions: {
                        bar: {
                            borderRadius: 6,
                            columnWidth: "20%"
                        }
                    }
                }
            }, {
                breakpoint: 1025,
                options: {
                    plotOptions: {
                        bar: {
                            borderRadius: 6,
                            columnWidth: "20%"
                        }
                    },
                    chart: {
                        height: 80
                    }
                }
            }, {
                breakpoint: 900,
                options: {
                    plotOptions: {
                        bar: {
                            borderRadius: 6
                        }
                    }
                }
            }, {
                breakpoint: 782,
                options: {
                    plotOptions: {
                        bar: {
                            columnWidth: "30%"
                        }
                    }
                }
            }, {
                breakpoint: 426,
                options: {
                    plotOptions: {
                        bar: {
                            borderRadius: 5,
                            columnWidth: "35%"
                        }
                    },
                    chart: {
                        height: 78
                    }
                }
            }, {
                breakpoint: 376,
                options: {
                    plotOptions: {
                        bar: {
                            borderRadius: 6
                        }
                    }
                }
            }],
            states: {
                hover: {
                    filter: {
                        type: "none"
                    }
                },
                active: {
                    filter: {
                        type: "none"
                    }
                }
            }
        },
        e = (null !== e && new ApexCharts(e, r).render(), document.querySelector("#revenueGrowth")),
        r = {
            chart: {
                height: 170,
                type: "bar",
                parentHeightOffset: 0,
                toolbar: {
                    show: !1
                }
            },
            plotOptions: {
                bar: {
                    barHeight: "80%",
                    columnWidth: "30%",
                    startingShape: "rounded",
                    endingShape: "rounded",
                    borderRadius: 6,
                    distributed: !0
                }
            },
            tooltip: {
                enabled: !1
            },
            grid: {
                show: !1,
                padding: {
                    top: -20,
                    bottom: -12,
                    left: -10,
                    right: 0
                }
            },
            colors: [config.colors_label.success, config.colors_label.success, config.colors_label.success, config.colors_label.success, config.colors.success, config.colors_label.success, config.colors_label.success],
            dataLabels: {
                enabled: !1
            },
            series: [{
                data: [25, 40, 55, 70, 85, 70, 55]
            }],
            legend: {
                show: !1
            },
            xaxis: {
                categories: ["M", "T", "W", "T", "F", "S", "S"],
                axisBorder: {
                    show: !1
                },
                axisTicks: {
                    show: !1
                },
                labels: {
                    style: {
                        colors: i,
                        fontSize: "13px",
                        fontFamily: "Public Sans"
                    }
                }
            },
            yaxis: {
                labels: {
                    show: !1
                }
            },
            states: {
                hover: {
                    filter: {
                        type: "none"
                    }
                }
            },
            responsive: [{
                breakpoint: 1471,
                options: {
                    plotOptions: {
                        bar: {
                            columnWidth: "50%"
                        }
                    }
                }
            }, {
                breakpoint: 1350,
                options: {
                    plotOptions: {
                        bar: {
                            columnWidth: "57%"
                        }
                    }
                }
            }, {
                breakpoint: 1032,
                options: {
                    plotOptions: {
                        bar: {
                            columnWidth: "60%"
                        }
                    }
                }
            }, {
                breakpoint: 992,
                options: {
                    plotOptions: {
                        bar: {
                            columnWidth: "40%",
                            borderRadius: 8
                        }
                    }
                }
            }, {
                breakpoint: 855,
                options: {
                    plotOptions: {
                        bar: {
                            columnWidth: "50%",
                            borderRadius: 6
                        }
                    }
                }
            }, {
                breakpoint: 440,
                options: {
                    plotOptions: {
                        bar: {
                            columnWidth: "40%"
                        }
                    }
                }
            }, {
                breakpoint: 381,
                options: {
                    plotOptions: {
                        bar: {
                            columnWidth: "45%"
                        }
                    }
                }
            }]
        };

    function s(t, e) {
        var r = config.colors_label.primary,
            s = config.colors.primary,
            a = [];
        for (let o = 0; o < t.length; o++) o === e ? a.push(s) : a.push(r);
        return {
            chart: {
                height: 258,
                parentHeightOffset: 0,
                type: "bar",
                toolbar: {
                    show: !1
                }
            },
            plotOptions: {
                bar: {
                    columnWidth: "32%",
                    startingShape: "rounded",
                    borderRadius: 7,
                    distributed: !0,
                    dataLabels: {
                        position: "top"
                    }
                }
            },
            grid: {
                show: !1,
                padding: {
                    top: 0,
                    bottom: 0,
                    left: -10,
                    right: -10
                }
            },
            colors: a,
            dataLabels: {
                enabled: !0,
                formatter: function(o) {
                    return o + "k"
                },
                offsetY: -20,
                style: {
                    fontSize: "15px",
                    colors: [n],
                    fontWeight: "500",
                    fontFamily: "Public Sans"
                }
            },
            series: [{
                data: t
            }],
            legend: {
                show: !1
            },
            tooltip: {
                enabled: !1
            },
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep"],
                axisBorder: {
                    show: !0,
                    color: l
                },
                axisTicks: {
                    show: !1
                },
                labels: {
                    style: {
                        colors: i,
                        fontSize: "13px",
                        fontFamily: "Public Sans"
                    }
                }
            },
            yaxis: {
                labels: {
                    offsetX: -15,
                    formatter: function(o) {
                        return parseInt(+o) + "k"
                    },
                    style: {
                        fontSize: "13px",
                        colors: i,
                        fontFamily: "Public Sans"
                    },
                    min: 0,
                    max: 6e4,
                    tickAmount: 6
                }
            },
            responsive: [{
                breakpoint: 1441,
                options: {
                    plotOptions: {
                        bar: {
                            columnWidth: "41%"
                        }
                    }
                }
            }, {
                breakpoint: 590,
                options: {
                    plotOptions: {
                        bar: {
                            columnWidth: "61%",
                            borderRadius: 5
                        }
                    },
                    yaxis: {
                        labels: {
                            show: !1
                        }
                    },
                    grid: {
                        padding: {
                            right: 0,
                            left: -20
                        }
                    },
                    dataLabels: {
                        style: {
                            fontSize: "12px",
                            fontWeight: "400"
                        }
                    }
                }
            }]
        }
    }
    null !== e && new ApexCharts(e, r).render();
    var e = $.ajax({
            url: assetsPath + "json/earning-reports-charts.json",
            dataType: "json",
            async: !1
        }).responseJSON,
        r = document.querySelector("#earningReportsTabsOrders"),
        a = s(e.data[0].chart_data, e.data[0].active_option),
        r = (null !== r && new ApexCharts(r, a).render(), document.querySelector("#earningReportsTabsSales")),
        a = s(e.data[1].chart_data, e.data[1].active_option),
        r = (null !== r && new ApexCharts(r, a).render(), document.querySelector("#earningReportsTabsProfit")),
        a = s(e.data[2].chart_data, e.data[2].active_option),
        r = (null !== r && new ApexCharts(r, a).render(), document.querySelector("#earningReportsTabsIncome")),
        a = s(e.data[3].chart_data, e.data[3].active_option),
        e = (null !== r && new ApexCharts(r, a).render(), document.querySelector("#salesLastMonth")),
        r = {
            series: [{
                name: "Sales",
                data: [32, 27, 27, 30, 25, 25]
            }, {
                name: "Visits",
                data: [25, 35, 20, 20, 20, 20]
            }],
            chart: {
                height: 340,
                type: "radar",
                toolbar: {
                    show: !1
                }
            },
            plotOptions: {
                radar: {
                    polygons: {
                        strokeColors: l,
                        connectorColors: l
                    }
                }
            },
            stroke: {
                show: !1,
                width: 0
            },
            legend: {
                show: !0,
                fontSize: "13px",
                position: "bottom",
                labels: {
                    colors: n,
                    useSeriesColors: !1
                },
                markers: {
                    height: 10,
                    width: 10,
                    offsetX: -3
                },
                itemMargin: {
                    horizontal: 10
                },
                onItemHover: {
                    highlightDataSeries: !1
                }
            },
            colors: [config.colors.primary, config.colors.info],
            fill: {
                opacity: [1, .85]
            },
            markers: {
                size: 0
            },
            grid: {
                show: !1,
                padding: {
                    top: 0,
                    bottom: -5
                }
            },
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
                labels: {
                    show: !0,
                    style: {
                        colors: [i, i, i, i, i, i],
                        fontSize: "13px",
                        fontFamily: "Public Sans"
                    }
                }
            },
            yaxis: {
                show: !1,
                min: 0,
                max: 40,
                tickAmount: 4
            },
            responsive: [{
                breakpoint: 769,
                options: {
                    chart: {
                        height: 400
                    }
                }
            }]
        };
    null !== e && new ApexCharts(e, r).render();
    a = document.querySelectorAll(".chart-progress"), a && a.forEach(function(o) {
        var t = config.colors[o.dataset.color],
            e = o.dataset.series,
            t = {
                chart: {
                    height: 53,
                    width: 43,
                    type: "radialBar"
                },
                plotOptions: {
                    radialBar: {
                        hollow: {
                            size: "33%"
                        },
                        dataLabels: {
                            show: !1
                        },
                        track: {
                            background: config.colors_label.secondary
                        }
                    }
                },
                stroke: {
                    lineCap: "round"
                },
                colors: [t],
                grid: {
                    padding: {
                        top: -15,
                        bottom: -15,
                        left: -5,
                        right: -15
                    }
                },
                series: [e],
                labels: ["Progress"]
            };
        new ApexCharts(o, t).render()
    }), e = document.querySelector("#projectStatusChart"), r = {
        chart: {
            height: 240,
            type: "area",
            toolbar: !1
        },
        markers: {
            strokeColor: "transparent"
        },
        series: [{
            data: [2e3, 2e3, 4e3, 4e3, 3050, 3050, 2e3, 2e3, 3050, 3050, 4700, 4700, 2750, 2750, 5700, 5700]
        }],
        dataLabels: {
            enabled: !1
        },
        grid: {
            show: !1,
            padding: {
                left: -10,
                right: -5
            }
        },
        stroke: {
            width: 3,
            curve: "straight"
        },
        colors: [config.colors.warning],
        fill: {
            type: "gradient",
            gradient: {
                opacityFrom: .6,
                opacityTo: .15,
                stops: [0, 95, 100]
            }
        },
        xaxis: {
            labels: {
                show: !1
            },
            axisBorder: {
                show: !1
            },
            axisTicks: {
                show: !1
            },
            lines: {
                show: !1
            }
        },
        yaxis: {
            labels: {
                show: !1
            },
            min: 1e3,
            max: 6e3,
            tickAmount: 5
        },
        tooltip: {
            enabled: !1
        }
    };
    null !== e && new ApexCharts(e, r).render()
}();