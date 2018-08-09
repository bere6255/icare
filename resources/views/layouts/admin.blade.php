<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modernize an Admin Panel Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="../../admin/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="../../admin/css/bar.css">
    <!--// Bars Css -->
    <!-- Calender Css -->
    <link rel="stylesheet" type="text/css" href="../../admin/css/pignose.calender.css" />
    <!--// Calender Css -->
    <!-- Common Css -->
    <link href="../../admin/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="../../admin/css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="../../admin/css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        @yield('sidenav')

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            @yield('header')
            <!--// top-bar -->

                  @yield('content')

            <!--// Countdown -->
            <!-- Copyright -->
            @yield('footer')
            <!--// Copyright -->
        </div>
    </div>


    <!-- Required common Js -->
    <script src='../../admin/js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- loading-gif Js -->
    <script src="../../admin/js/modernizr.js"></script>
    <script>
        //paste this code under head tag or in a seperate js file.
        // Wait for window load
        $(window).load(function () {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
    <!--// loading-gif Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- Graph -->
    <script src="../../admin/js/SimpleChart.js"></script>
    <!--// Graph -->
    <!-- Bar-chart -->
    <script src="../../admin/js/rumcaJS.js"></script>
    <script src="../../admin/js/example.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <!--// Bar-chart -->
    <!-- Calender -->
    <script src="../../admin/js/moment.min.js"></script>
    <script src="../../admin/js/pignose.calender.js"></script>
    <script>
        //<![CDATA[
        $(function () {
            $('.calender').pignoseCalender({
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '.');
                }
            });

            $('.multi-select-calender').pignoseCalender({
                multiple: true,
                select: function (date, obj) {
                    obj.calender.parent().next().show().text('You selected ' +
                        (date[0] === null ? 'null' : date[0].format('YYYY-MM-DD')) +
                        '~' +
                        (date[1] === null ? 'null' : date[1].format('YYYY-MM-DD')) +
                        '.');
                }
            });
        });
        //]]>
    </script>
    <!--// Calender -->

    <!-- profile-widget-dropdown js-->
    <script src="../../admin/js/script.js"></script>
    <!--// profile-widget-dropdown js-->
    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <script src='../../admin/js/circle_bar.js'></script>
    <script>
        var chartData = {
            "barCircleMobile": [{
                    "index": 0.3,
                    "value": 17436920,
                    "fill": "#202e66",
                    "label": "Total Seekers"
                },
                {
                    "index": 0.4,
                    "value": 10884799,
                    "fill": "#283874",
                    "label": "Active Seekers"
                },
                {
                    "index": 0.5,
                    "value": 10257432,
                    "fill": "#2e3e7e",
                    "label": "Complited Booking"
                },
                {
                    "index": 0.6,
                    "value": 6110024,
                    "fill": "#394b91",
                    "label": "Total Booking"
                },
                {
                    "index": 0.7,
                    "value": 3895612,
                    "fill": "#4a5da6",
                    "label": "flag Seekers"
                },

            ],
            "barCircleWeb": [{
                    "index": 0.3,
                    "value": 31588490,
                    "fill": "#e04646",
                    "label": "Total Providers"
                },
                {
                    "index": 0.4,
                    "value": 26260662,
                    "fill": "#e65252",
                    "label": "Active Providers"
                },
                {
                    "index": 0.5,
                    "value": 24263463,
                    "fill": "#ee6f6f",
                    "label": "Complited Booking"
                },
                {
                    "index": 0.6,
                    "value": 12795112,
                    "fill": "#5573ea",
                    "label": "Total Booking"
                },
                {
                    "index": 0.7,
                    "value": 11959167,
                    "fill": "#4c6ef5",
                    "label": "Flag Providers"
                },

            ]
        };

        function drawBarCircleChart(data, target, values, labels) {
            var w = 362,
                h = 362,
                size = data[0].value * 1.15,
                radius = 200,
                sectorWidth = .1,
                radScale = 25,
                sectorScale = 1.45,
                target = d3.select(target),
                valueText = d3.select(values),
                labelText = d3.select(labels);


            var arc = d3.svg.arc()
                .innerRadius(function (d, i) {
                    return (d.index / sectorScale) * radius + radScale;
                })
                .outerRadius(function (d, i) {
                    return ((d.index / sectorScale) + (sectorWidth / sectorScale)) * radius + radScale;
                })
                .startAngle(Math.PI)
                .endAngle(function (d) {
                    return Math.PI + (d.value / size) * 2 * Math.PI;
                });

            var path = target.selectAll("path")
                .data(data);

            //TODO: seperate color and index from data object, make it a pain to update object order
            path.enter().append("svg:path")
                .attr("fill", function (d, i) {
                    return d.fill
                })
                .attr("stroke", "#D1D3D4")
                .transition()
                .ease("elastic")
                .duration(1000)
                .delay(function (d, i) {
                    return i * 100
                })
                .attrTween("d", arcTween);

            valueText.selectAll("tspan").data(data).enter()
                .append("tspan")
                .attr({
                    x: 50,
                    y: function (d, i) {
                        return i * 14
                    },
                    "text-anchor": "end"
                })
                .text(function (d, i) {
                    return data[i].value
                });

            labelText.selectAll("tspan").data(data).enter()
                .append("tspan")
                .attr({
                    x: 0,
                    y: function (d, i) {
                        return i * 14
                    }
                })
                .text(function (d, i) {
                    return data[i].label
                });

            function arcTween(b) {
                var i = d3.interpolate({
                    value: 0
                }, b);
                return function (t) {
                    return arc(i(t));
                };
            }
        }

        // Animation Queue
        setTimeout(function () {
            drawBarCircleChart(chartData.barCircleWeb, "#circleBar-web-chart", "#circleBar-web-values",
                "#circleBar-web-labels")
        }, 500);
        setTimeout(function () {
            drawBarCircleChart(chartData.barCircleMobile, "#circleBar-mobile-chart", "#circleBar-mobile-values",
                "#circleBar-mobile-labels")
        }, 800);

        d3.select("#circleBar-web-icon")
            .transition()
            .delay(500)
            .duration(500)
            .attr("opacity", "1");
        d3.select("#circleBar-web-text")
            .transition()
            .delay(750)
            .duration(500)
            .attr("opacity", "1");

        d3.select("#circleBar-web-clipLabels")
            .transition()
            .delay(600)
            .duration(1250)
            .attr("height", "150");

        d3.select("#circleBar-mobile-icon")
            .transition()
            .delay(800)
            .duration(500)
            .attr("opacity", "1");
        d3.select("#circleBar-mobile-text")
            .transition()
            .delay(1050)
            .duration(500)
            .attr("opacity", "1");
        d3.select("#circleBar-mobile-clipLabels")
            .transition()
            .delay(900)
            .duration(1250)
            .attr("height", "150");
    </script>
    <!-- //dropdown nav -->
    <script src="../../admin/js/percentage-circles.js"></script>
    <!-- Js for bootstrap working-->
    <script src="../../admin/js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>
