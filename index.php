<?php
$current_page = "index.php";
?>
    <!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <html>
    <?php require_once ("include/head.php"); ?>

    <body>
        <?php require_once ("include/header.php"); ?>

        <section id="main">
            <?php require_once("include/sidebar.php"); ?>

            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Dashboard</h2>

                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h2>Airport Statistics <small>There are real-time updated from FireBase</small></h2>

                            <ul class="actions">
                                <li>
                                    <a href="">
                                        <i class="zmdi zmdi-refresh-alt"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="chart-edge">
                                <div id="curved-line-chart" class="flot-chart "></div>
                            </div>
                        </div>
                    </div>

                    <div class="mini-charts">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="mini-charts-item bgm-lightgreen">
                                    <div class="clearfix">
                                        <div class="chart stats-bar"></div>
                                        <div class="count">
                                            <small>Website Traffics</small>
                                            <h2>987,459</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3">
                                <div class="mini-charts-item bgm-purple">
                                    <div class="clearfix">
                                        <div class="chart stats-bar-2"></div>
                                        <div class="count">
                                            <small>Website Impressions</small>
                                            <h2>356,785K</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3">
                                <div class="mini-charts-item bgm-orange">
                                    <div class="clearfix">
                                        <div class="chart stats-line"></div>
                                        <div class="count">
                                            <small>Total Sales</small>
                                            <h2>$ 458,778</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-3">
                                <div class="mini-charts-item bgm-bluegray">
                                    <div class="clearfix">
                                        <div class="chart stats-line-2"></div>
                                        <div class="count">
                                            <small>Support Tickets</small>
                                            <h2>23,856</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dash-widgets">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div id="site-visits" class="dw-item bgm-teal">
                                    <div class="dwi-header">
                                        <div class="p-30">
                                            <div class="dash-widget-visits"></div>
                                        </div>

                                        <div class="dwih-title">For the past 30 days</div>
                                    </div>

                                    <div class="list-group lg-even-white">
                                        <div class="list-group-item media sv-item">
                                            <div class="pull-right">
                                                <div class="stats-bar"></div>
                                            </div>
                                            <div class="media-body">
                                                <small>Page Views</small>
                                                <h3>47,896,536</h3>
                                            </div>
                                        </div>

                                        <div class="list-group-item media sv-item">
                                            <div class="pull-right">
                                                <div class="stats-bar-2"></div>
                                            </div>
                                            <div class="media-body">
                                                <small>Site Visitors</small>
                                                <h3>24,456,799</h3>
                                            </div>
                                        </div>

                                        <div class="list-group-item media sv-item">
                                            <div class="pull-right">
                                                <div class="stats-line"></div>
                                            </div>
                                            <div class="media-body">
                                                <small>Total Clicks</small>
                                                <h3>13,965</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div id="pie-charts" class="dw-item bgm-cyan c-white">

                                    <div class="dw-item">
                                        <div class="dwi-header">
                                            <div class="dwih-title">Email Statistics</div>
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="text-center p-20 m-t-25">
                                            <div class="easy-pie main-pie" data-percent="75">
                                                <div class="percent">45</div>
                                                <div class="pie-title">Total Emails Sent</div>
                                            </div>
                                        </div>

                                        <div class="p-t-25 p-b-20 text-center">
                                            <div class="easy-pie sub-pie-1" data-percent="56">
                                                <div class="percent">56</div>
                                                <div class="pie-title">Bounce Rate</div>
                                            </div>
                                            <div class="easy-pie sub-pie-2" data-percent="84">
                                                <div class="percent">84</div>
                                                <div class="pie-title">Total Opened</div>
                                            </div>
                                            <div class="easy-pie sub-pie-2" data-percent="21">
                                                <div class="percent">21</div>
                                                <div class="pie-title">Total Ignored</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4 col-sm-6">
                                <div class="dw-item bgm-lime">
                                    <div id="weather-widget"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">


                        <div class="col-sm-12">
                            <!-- Calendar -->


                            <!-- Recent Posts -->
                            <div class="card">
                                <div class="card-header">
                                    <h2>Recent Announcements <small>Phasellus condimentum ipsum id auctor imperdie</small></h2>
                                    <ul class="actions">
                                        <li>
                                            <a href="">
                                                <i class="zmdi zmdi-refresh-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="zmdi zmdi-download"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="" data-toggle="dropdown">
                                                <i class="zmdi zmdi-more-vert"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a href="">Change Date Range</a>
                                                </li>
                                                <li>
                                                    <a href="">Change Graph Type</a>
                                                </li>
                                                <li>
                                                    <a href="">Other Settings</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <div class="list-group">
                                        <a class="list-group-item media" href="">
                                            <div class="pull-left">
                                                <img class="lgi-img" src="img/demo/profile-pics/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lgi-heading">David Belle</div>
                                                <small class="lgi-text">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                            </div>
                                        </a>
                                        <a class="list-group-item media" href="">
                                            <div class="pull-left">
                                                <img class="lgi-img" src="img/demo/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lgi-heading">Jonathan Morris</div>
                                                <small class="lgi-text">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                            </div>
                                        </a>
                                        <a class="list-group-item media" href="">
                                            <div class="pull-left">
                                                <img class="lgi-img" src="img/demo/profile-pics/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lgi-heading">Fredric Mitchell Jr.</div>
                                                <small class="lgi-text">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                            </div>
                                        </a>
                                        <a class="list-group-item media" href="">
                                            <div class="pull-left">
                                                <img class="lgi-img" src="img/demo/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lgi-heading">Glenn Jecobs</div>
                                                <small class="lgi-text">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                            </div>
                                        </a>
                                        <a class="list-group-item media" href="">
                                            <div class="pull-left">
                                                <img class="lgi-img" src="img/demo/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lgi-heading">Bill Phillips</div>
                                                <small class="lgi-text">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                            </div>
                                        </a>
                                        <a class="view-more" href="">View All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <?php require_once("include/footer.php"); ?>

        <?php require_once("include/preloader.php"); ?>

        <?php require_once("include/old_ie.php"); ?>

        <?php require_once("include/js.php"); ?>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <script src="js/app.min.js"></script>

        <script>
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                console.log("Not able to Detect the Location");
            }


            function showPosition(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                $.ajax("get_weather.php?lat=" + latitude + "&long=" + longitude)
                    .done(function(result) {
                        var result_object = JSON.parse(result);
                        var current_response = result_object.currently;
                        var current_icon = current_response.icon;
                        var current_temp = current_response.apparentTemperature;
                        $(".weather-status").html(parseInt(current_temp) + "°F");
                        var current_summary = current_response.summary;
                        $(".currently").html(current_summary);
                        $(".weather-info :first-child").remove();
                        $(".weather-widget .weather-icon").removeClass("wi-23").addClass("wi-"+get_whether_icon(current_icon));
                        var next_high = result_object.daily.data[0].temperatureMax;
                        var next_low = result_object.daily.data[0].temperatureMin;
                        var next_icon = result_object.daily.data[0].icon;
                        var next_next_high = result_object.daily.data[0].temperatureMax;
                        var next_next_low = result_object.daily.data[0].temperatureMin;
                        var next_next_icon = result_object.daily.data[0].icon;
                        var weather_list_tomorrow = "<span class=\"weather-list-icon wi-32\"></span><span>78/64</span><span>Thunderstorms</span>";
                    });
            }

            function get_whether_icon(icon) {
            var icon_number = 0;
            switch (icon) {
                case "clear-day":
                    icon_number = 25;
                    break;
                case "clear-night":
                    icon_number = 33;
                    break;
                case "rain":
                    icon_number = 3;
                    break;
                case "snow":
                    icon_number = 3;
                    break;
                case "sleet":
                    icon_number = 16;
                    break;
                case "wind":
                    icon_number = 25;
                    break;
                case "fog":
                    icon_number = 14;
                    break;
                case "cloudy":
                    icon_number = 26;
                    break;
                case "partly-cloudy-day":
                    icon_number = 44;
                    break;
                case "partly-cloudy-night":
                    icon_number = 44;
                    break;
            }
            }

        </script>
    </body>

    </html>
