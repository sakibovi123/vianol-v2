//Yearly chart//

var yearly = {
    chart: {
        height: 230,
        type: 'bar',
        toolbar: {
            show: false,
        },

        dropShadow: {
            enabled: true,
            top: 1,
            left: 1,
            blur: 1,
            color: '#515365',
            opacity: 0.3,
        }
    },

    colors: ['#9384D1', '#617BE3'],

    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
        },
    },

    dataLabels: {
        enabled: false,
    },

    Legend: {
        position: 'bottom',
        horizontalAlign: 'center',
        fontSize: '14px',
        markers: {
            width: 10,
            height: 10,
        },

        itemMargin: {
            horizontal: 0,
            vertical: 8
        }
    },

    grid: {
        borderColor: '#f7f7f7',
    },

    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },

    series: [{
        name: 'Direct',
        data: [58, 44, 55, 57, 56, 61, 58, 63, 60, 66, 56, 63]

    }, {
        name: 'Organic',
        data: [91, 76, 85, 101, 98, 87, 105, 91, 114, 94, 66, 70]
    }],

    xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    },

    fill: {
        type: 'gradient',
        gradient: {
            shade: 'dark',
            type: 'vertical',
            shadeIntensity: 0.3,
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 0.8,
            stops: [0, 100]
        }
    },

    tooltip: {
        theme: 'dark',
        y: {
            formatter: function (val) {
                return val
            }
        }
    }
}

//Monthly chart//
var monthly = {
    chart: {
        height: 230,
        type: 'bar',
        toolbar: {
            show: false,
        },

        dropShadow: {
            enabled: true,
            top: 1,
            left: 1,
            blur: 1,
            color: '#515365',
            opacity: 0.3,
        }
    },

    colors: ['#9384D1', '#617BE3'],

    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '55%',
        },
    },

    dataLabels: {
        enabled: false,
    },

    Legend: {
        position: 'bottom',
        horizontalAlign: 'center',
        fontSize: '14px',
        markers: {
            width: 10,
            height: 10,
        },

        itemMargin: {
            horizontal: 0,
            vertical: 8
        }
    },

    grid: {
        borderColor: '#f7f7f7',
    },

    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },

    series: [{
        name: 'Direct',
        data: [58, 44, 55, 57, 56, 61, 58, 58, 44, 55, 57, 56, 61, 58, 44, 55, 57, 56, 61, 58, 44, 55, 57, 56, 61, 58, 44, 55, 57, 56, 61]

    }, {
        name: 'Organic',
        data: [91, 76, 85, 101, 98, 87, 105, 91, 76, 85, 101, 98, 87, 91, 76, 85, 101, 98, 87, 91, 76, 85, 101, 98, 87, 91, 76, 85, 101, 98, 87]
    }],

    xaxis: {
        categories: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'],
    },

    fill: {
        type: 'gradient',
        gradient: {
            shade: 'dark',
            type: 'vertical',
            shadeIntensity: 0.3,
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 0.8,
            stops: [0, 100]
        }
    },

    tooltip: {
        theme: 'dark',
        y: {
            formatter: function (val) {
                return val
            }
        }
    }
}


//Weekly chart//
var weekly = {
    chart: {
        height: 230,
        type: 'bar',
        toolbar: {
            show: false,
        },

        dropShadow: {
            enabled: true,
            top: 1,
            left: 1,
            blur: 1,
            color: '#515365',
            opacity: 0.3,
        }
    },

    colors: ['#9384D1', '#617BE3'],

    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '55%',
        },
    },

    dataLabels: {
        enabled: false,
    },

    Legend: {
        position: 'bottom',
        horizontalAlign: 'center',
        fontSize: '14px',
        markers: {
            width: 10,
            height: 10,
        },

        itemMargin: {
            horizontal: 0,
            vertical: 8
        }
    },

    grid: {
        borderColor: '#f7f7f7',
    },

    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },

    series: [{
        name: 'Direct',
        data: [58, 44, 55, 57, 56, 61, 58]

    }, {
        name: 'Organic',
        data: [91, 76, 85, 101, 98, 87, 105]
    }],

    xaxis: {
        categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
    },

    fill: {
        type: 'gradient',
        gradient: {
            shade: 'dark',
            type: 'vertical',
            shadeIntensity: 0.3,
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 0.8,
            stops: [0, 100]
        }
    },

    tooltip: {
        theme: 'dark',
        y: {
            formatter: function (val) {
                return val
            }
        }
    }
}


//Rendering chart//
var d_1C_3 = new ApexCharts(
    document.querySelector('#yearly'), yearly
);
d_1C_3.render();

var d_1C_3 = new ApexCharts(
    document.querySelector('#monthly'), monthly
);
d_1C_3.render();

var d_1C_3 = new ApexCharts(
    document.querySelector('#weekly'), weekly
);
d_1C_3.render();

//Traffic chart//
var options = {
    chart: {
        type: 'donut',
        width: '100%',
        height: '310px',
    },

    colors: ['#9384D1', '#FF6D60', '#F79540'],

    legend: {
        position: 'bottom',
        horizontalAlign: 'center',
        fontSize: '14px',
        itemMargin: {
            horizontal: 6,
            vertical: 8
        }
    },

    plotOptions: {
        pie: {
            donut: {
                size: '65%',
                background: 'transparent',
                labels: {
                    show: true,
                    name: {
                        show: true,
                        fontSize: '20px',
                        fontFamily: 'Helvetica, Arial, sans-serif',
                        fontWeight: 500,
                        color: undefined,
                        offsetY: -10,
                    },
                    value: {
                        show: true,
                        fontSize: '26px',
                        fontFamily: 'Helvetica, Arial, sans-serif',
                        fontWeight: 600,
                        color: '#ddd',
                        offsetY: 16,
                        formatter: function (val) {
                            return val
                        }
                    },
                    total: {
                        show: true,
                        showAlways: true,
                        label: 'Total',
                        color: '#617BE3',
                        formatter: function (w) {
                            return w.globals.seriesTotals.reduce((a, b) => {
                                return a + b
                            }, 0)
                        }
                    }
                }
            },
        }
    },

    series: [60, 30, 10],
    labels: ['Referrel', 'Google', 'Others'],

   /*/ responsive: [{
        breakpoint: 1599,
        opitions: {
            chart: {
                width: '270px',
                height: '355px'
            },

            legend: {
                position: 'bottom'
            }
        },

        breakpoint: 1439,
        opitions: {
            chart: {
                width: '270px',
                height: '355px'
            },

            legend: {
                position: 'bottom'
            },

            plotOptions: {
                pie: {
                    donut: {
                        size: '65%',
                    }
                }
            }
        },
   }]*/
}

var chart = new ApexCharts(document.querySelector("#chart-2"), options);

chart.render();