/*
Template Name: Color Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7 & Bootstrap 4.0.0-Alpha 6
Version: 3.0.0
Author: Sean Ngu
Website: http://www.seantheme.com/color-admin-v3.0/admin/apple/
*/

var getMonthName = function(number) {
    var month = [];
    month[0] = "January";
    month[1] = "February";
    month[2] = "March";
    month[3] = "April";
    month[4] = "May";
    month[5] = "Jun";
    month[6] = "July";
    month[7] = "August";
    month[8] = "September";
    month[9] = "October";
    month[10] = "November";
    month[11] = "December";
    
    return month[number];
};

var getDate = function(date) {
    var currentDate = new Date(date);
    var dd = currentDate.getDate();
    var mm = currentDate.getMonth() + 1;
    var yyyy = currentDate.getFullYear();
    
    if (dd < 10) {
        dd = '0' + dd;
    }
    if (mm < 10) {
        mm = '0' + mm;
    }
    currentDate = yyyy+'-'+mm+'-'+dd;
    
    return currentDate;
};

var handleVisitorsLineChart = function() {
    var aqua = '#5AC8FA';
    var aquaLight = '#63a4c1';
    var blue = '#CC6600';
    var blueLight = '#3086e4';
    var blackTransparent = 'rgba(0,0,0,0.6)';
    var whiteTransparent = 'rgba(255,255,255,0.4)';
    
    Morris.Line({
        element: 'visitors-line-chart',
        data: [
            {x: '2014-02-01', y: 60, z: 30},
            {x: '2014-03-01', y: 70, z: 40},
            {x: '2014-04-01', y: 40, z: 10},
            {x: '2014-05-01', y: 100, z: 70},
            {x: '2014-06-01', y: 40, z: 10},
            {x: '2014-07-01', y: 80, z: 50},
            {x: '2014-08-01', y: 70, z: 40}
        ],
        xkey: 'x',
        ykeys: ['y', 'z'],
        xLabelFormat: function(x) {
            x = getMonthName(x.getMonth());
            return x.toString();
        },
        labels: ['Page Views', 'Unique Visitors'],
        lineColors: [aqua, blue],
        pointFillColors: [aquaLight, blueLight],
        lineWidth: '2px',
        pointStrokeColors: [blackTransparent, blackTransparent],
        resize: true,
        gridTextFamily: 'inherit',
        gridTextColor: whiteTransparent,
        gridTextWeight: 'normal',
        gridTextSize: '12px',
        gridLineColor: 'rgba(255,255,255,0.15)',
        hideHover: 'auto',
    });
};

var handleVisitorsDonutChart = function() {
    var aqua = '#5AC8FA';
    var blue = '#CC6600';
    Morris.Donut({
        element: 'visitors-donut-chart',
        data: [
            {label: "New Visitors", value: 900},
            {label: "Return Visitors", value: 1200}
        ],
        colors: [aqua, blue],
        labelFamily: 'inherit',
        labelColor: 'rgba(255,255,255,0.4)',
        labelTextSize: '12px',
        backgroundColor: '#111'
    });
};

var handleVisitorsVectorMap = function() {
    if ($('#visitors-map').length !== 0) {
        $('#visitors-map').vectorMap({
            map: 'world_merc_en',
            scaleColors: ['#eee', '#000'],
            container: $('#visitors-map'),
            normalizeFunction: 'linear',
            hoverOpacity: 0.5,
            hoverColor: false,
            markerStyle: {
                initial: {
                    fill: '#333',
                    stroke: 'transparent',
                    r: 3
                }
            },
            regions: [{
                attribute: 'fill'
            }],
            regionStyle: {
                initial: {
                    fill: '#777',
                    "fill-opacity": 1,
                    stroke: 'none',
                    "stroke-width": 0.4,
                    "stroke-opacity": 1
                },
                hover: {
                    "fill-opacity": 0.8
                },
                selected: {
                    fill: 'yellow'
                },
                selectedHover: {
                }
            },
            series: {
                regions: [{
                values: {
                    IN:'#CC6600',
                    US:'#CC6600',
                    KR:'#CC6600'
                }
                }]
            },
            focusOn: {
                x: 0.5,
                y: 0.5,
                scale: 2
            },
            backgroundColor: '#222'
        });
    }
};

var handleScheduleCalendar = function() {
    var monthNames = ["January", "February", "March", "April", "May", "June",  "July", "August", "September", "October", "November", "December"];
    var dayNames = ["S", "M", "T", "W", "T", "F", "S"];

    var now = new Date(),
        month = now.getMonth() + 1,
        year = now.getFullYear();

    var events = [
        [
            '2/' + month + '/' + year,
            'Popover Title',
            '#',
            '#CC6600',
            'Some contents here'
        ],
        [
            '5/' + month + '/' + year,
            'Tooltip with link',
            'http://www.seantheme.com/color-admin-v1.3',
            '#222'
        ],
        [
            '18/' + month + '/' + year,
            'Popover with HTML Content',
            '#',
            '#222',
            'Some contents here <div class="text-right"><a href="http://www.google.com">view more >>></a></div>'
        ],
        [
            '28/' + month + '/' + year,
            'Color Admin V1.3 Launched',
            'http://www.seantheme.com/color-admin-v1.3',
            '#222',
        ]
    ];
    var calendarTarget = $('#schedule-calendar');
    $(calendarTarget).calendar({
        months: monthNames,
        days: dayNames,
        events: events,
        popover_options:{
            placement: 'top',
            html: true
        }
    });
    $(calendarTarget).find('td.event').each(function() {
        var backgroundColor = $(this).css('background-color');
        $(this).removeAttr('style');
        $(this).find('a').css('background-color', backgroundColor);
    });
    $(calendarTarget).find('.icon-arrow-left, .icon-arrow-right').parent().on('click', function() {
        $(calendarTarget).find('td.event').each(function() {
            var backgroundColor = $(this).css('background-color');
            $(this).removeAttr('style');
            $(this).find('a').css('background-color', backgroundColor);
        });
    });
};

var handleDashboardGritterNotification = function() {
    $(window).load(function() {
        setTimeout(function() {
            $.gritter.add({
                title: 'Welcome back, Admin!',
                text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus lacus ut lectus rutrum placerat.',
                image: 'assets/img/user-12.jpg',
                sticky: true,
                time: '',
                class_name: 'my-sticky-class'
            });
        }, 1000);
    });
};

var DashboardV2 = function () {
	"use strict";
    return {
        //main function
        init: function () {
            handleVisitorsLineChart();
            handleVisitorsDonutChart();
            handleVisitorsVectorMap();
            handleScheduleCalendar();
            handleDashboardGritterNotification();
        }
    };
}();