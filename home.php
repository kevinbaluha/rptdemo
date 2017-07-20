<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rapid Personal Transformation" name="description">
    <meta content="silverysoftware.ru" name="author">
    <title>
        RPT Global
    </title>
    <link href="/favicon.png" rel="shortcut icon">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main Stylesheet -->
    <link href="/Content/theme/css/style.css" rel="stylesheet">
    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/Content/theme/js/html5shiv.js"></script>
    <script src="/Content/theme/js/respond.min.js"></script>

    <![endif]-->
    <link href="/Content/theme/css/custom.css" rel="stylesheet">
    <link href="/Content/MultiColumn.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">


    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Mono" rel="stylesheet">

</head>
<body >
<!-- ========== HEADER START ========== -->

<header>
    <!-- ==== TOOLS START ==== -->
    <div class="tools">
        <div class="container">
            <div class="col-md-4  col-sm-4 hidden-xs nopadding">
                <a href="/en" class="">
                    <div class="header_logo" alt="{{title}}"></div>
                </a>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-12 nopadding top-menu-background">
                <nav class="top-menu_left">
                    <ul>
                        {{#menu}}
                        <li>
                            <a href="{{url}}">
                                {{label}}
                            </a>
                        </li>
                        {{/menu}}
                    </ul>
                </nav>
                <nav class="top-menu">
                    <ul>
                        {{#login}}
                        <li><a href="{{url}}"><i class="fa fa-lock"></i>&nbsp;<span>{{label}}</span></a></li>
                        {{/login}}

                        <li class="dropdown">
                            {{#language}}
                            <a href="#" class="dropdown-toggle" title="Change language">
                                <img class="flag" src="{{img}}/Content/theme/images/flag-icon-gb.png" alt="{{code}}" /> {{label}}
                                <i class="fa fa-angle-right" style="margin-left: 2px;" aria-hidden="true"></i>
                            </a>
                            {{/language}}
                            <ul class="dropdown-menu">
                                {{#languages}}
                                <li class='{{class}}'>
                                    <a href="#{{code}}" onclick="changeLanguage('{{code}})" >
                                        <img src="{{img}}" alt="{{code}}" /> {{label}}</a>
                                </li>
                                {{/languages}}
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i>&nbsp;</a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-search-box">
                                
                                <form name="search-form" role="form" action="/{{language.code}}/Search" method="get">
                                    <div class="input-group">
                                        <input name="q" type="text" placeholder="{{search}}" class="form-control">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-ar btn-primary"><i class="fa fa-search"></i></button>
                                    </span>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="col-xs-8 mobile_logo hidden-md hidden-sm hidden-lg nopadding">
                <a href="/en" class="">
                    <div class="header_logo" alt="{{title}}"></div>
                </a>
            </div>
        </div>
    </div>
    <!-- ==== TOOLS END ==== -->
    <!-- ==== NAVBAR START ==== -->
    <div class="container no-margin navbar_container">
        <div class="navbar navbar-default navbar-static-top col-sm-8 col-sm-offset-4 col-md-offset-4 col-md-8 nopadding" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <i class="fa fa-bars fa-3x" aria-hidden="true"></i> </button>
            </div>
            <nav class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    {{#navbar}}
                    <li class="dropdown {{class}}">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            {{title}}<i class="fa fa-angle-down" aria-hidden="true"></i></b>
                        </a>
                        <ul class="dropdown-menu  @*dropdown-menu-right*@">
                            {{#menu}}
                            {{#divider}}<li class="{{class}}"></li>{{/divider}}
                            <li class="{{class}}">
                                <a href="{{url}}">
                                    {{label}}
                                </a>
                            </li>
                            {{/menu}}
                        </ul>
                    </li>
                    {{/navbar}}
                </ul>
            </nav>
        </div>
    </div>
    <!-- ==== NAVBAR END ==== -->


</header>
<!-- ========== HEADER END ========== -->

<!-- ========== CONTENT START ========== -->

<section class="layout-content">

    <!-- ========== PAGE CONTENT START ========== -->
    <section id="home_page">
        {{#content}}
        <div class="container-fluid nopadding {{row}}">
            <div class="container layout">
                <div class="row no-margin">
                    <div class="{{content-class}}">
                        <h1>{{hl1}}</h1>
                        <h2>{{hl2}}</h2>
                        {{content}}
                    </div>
                </div>
            </div>
            <div class="{{sub-content-class}}">{{sub-content}}</div>
        </div>
        {{/content}}
    </section>
    <!-- ========== PAGE CONTENT END ========== -->

</section>

<!-- ========== CONTENT END ========== -->


<!-- ========== ACTIONS START ========== -->
<div class="row actions">
    <div class="container">
        <div class="col-sm-4 action" id="action_1">
            <div class="icon"></div>
            <div class="text"><a href="#">RECEIVE EVENTS & SPECIAL OFFERS</a></div>
        </div>
        <div class="col-sm-4 action" id="action_2">
            <div class="icon"></div>
            <div class="text"><a href="#">BOOK A SESSION</a></div>
        </div>
        <div class="col-sm-4 action" id="action_3">
            <div class="icon"></div>
            <div class="text"><a href="#">SEND AN ENQUIRY</a></div>
        </div>
    </div>
</div>
<!-- ========== ACTIONS END ========== -->

<!-- ========== PREFOOTER START ========== -->
<!-- ========== PREFOOTER END ========== -->
<!-- ========== FOOTER START ========== -->

<div class="row footer">
    <div class="container">
        <div class="col-sm-6">
            <div class="events">
                <h2>Upcoming events</h2>
                <div class="event">
                    <h3>Title event</h3>
                    <div class="event_desc">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    </div>
                </div>

                <div class="event">
                    <h3>Title event</h3>
                    <div class="event_desc">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    </div>
                </div>

                <div class="event">
                    <h3>Title event</h3>
                    <div class="event_desc">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="footer_logo"></div>
            <div class="social_icons">
                <a href="https://www.facebook.com/groups/reference.point.therapy"  title="RPT on Facebook">
                    <div class="social_icon facebook">
                        <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
                    </div>
                </a>
                <a href="twitter">
                    <div class="social_icon twitter">
                        <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
                    </div>
                </a>
                <a href="linkedin">
                    <div class="social_icon linkedin">
                        <i class="fa fa-linkedin fa-2x" aria-hidden="true"></i>
                    </div>
                </a>
            </div>
            <div class="copyright">
                &copy; 2009-2017 Rapid Personal Transformation. All rights reserved.
                <br>
                <a href="#">Legal</a>
            </div>
        </div>
    </div>
</div>

<!-- ========== FOOTER END ========== -->
<div id="silvery-cms-forms" class="hidden">
    <form id="locale-menu-form" action="/en/Locale/Change" method="post">
        <p>/en/Locale/Change</p>
        <input type="text" name="fromPage" value="https://dev.rptglobal.com/en/Trainers/page/1" />
        <input type="text" name="id" value="" />
    </form>
</div>

<!-- Modernizr Plugin -->
<script src="/Content/theme/js/modernizr.custom.97074.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/Content/theme/js/jquery-1.11.1.min.js"></script>
<!-- Bootstrap Plugins -->
<script src="/Content/theme/js/bootstrap.min.js"></script>
<!-- Retina Plugin -->
<script src="/Content/theme/js/retina-1.1.0.min.js"></script>
<!-- Superslides Plugin -->
<script src="/Content/theme/js/jquery.easing.1.3.js"></script>
<script src="/Content/theme/js/jquery.animate-enhanced.min.js"></script>
<script src="/Content/theme/js/jquery.superslides.js"></script>
<!-- Owl Carousel Plugin -->
<script src="/Content/theme/js/owl.carousel.min.js"></script>
<!-- Parallax ImageScroll Plugin -->
<script src="/Content/theme/js/jquery.parallax-1.1.3.js"></script>
<!-- Fancybox Plugin -->
<script src="/Content/theme/js/jquery.fancybox.js"></script>
<!-- ImagesLoaded Plugin -->
<script src="/Content/theme/js/imagesloaded.pkgd.min.js"></script>
<!-- Masonry Plugin -->
<script src="/Content/theme/js/masonry.pkgd.min.js"></script>
<!-- Progressbar Plugin -->
<script src="/Content/theme/js/bootstrap-progressbar.js"></script>
<!-- Scroll Reveal Plugin -->
<script src="/Content/theme/js/scrollReveal.js"></script>
<!-- Magic Form Processing -->
<script src="/Content/theme/js/magic.js"></script>
<!-- jQuery Settings -->
<script src="/Content/theme/js/settings.js"></script>
<!-- Mixitip plugin-->
<script src="/Content/theme/js/mixitup.js"></script>
<!-- Mixitip pagination plugin-->
<script src="/Content/theme/js/mixitup-pagination.min.js"></script>
<!-- Mixitip multifilter plugin-->
<script src="/Content/theme/js/mixitup-multifilter.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
<!-- Custom JavaScript -->
<script src="/Content/theme/js/custom.js"></script>
<!-- YoutubePopup JavaScript -->
<script src="/Content/theme/js/bootstrap.youtubepopup.js"></script>





<script type="text/javascript">
    //--- locale switch support ---//
    var SilveryCms = function ($) {
        var self = this;

        self.logOff = function () {
            $("#logoutForm").submit();
            return false;
        };

        self.changeLanguage = function (cultureCode) {
            $("#locale-menu-form > input[name='id']").val(cultureCode);
            $("#locale-menu-form").submit();
            return false;
        };

        self.createCookie = function (name, value, days) {
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                var expires = "; expires=" + date.toGMTString();
            }
            else var expires = "";
            document.cookie = name + "=" + value + expires + "; path=/";
        }
        self.readCookie = function (name) {
            var nameEq = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEq) == 0) return c.substring(nameEq.length, c.length);
            }
            return null;
        }
        self.eraseCookie = function (name) {
            this.createCookie(name, "", -1);
        }
    };
    var silveryCms = new SilveryCms($);
    var usertzo = silveryCms.readCookie("silvery-cms-usertzo");
    if (!usertzo) {
        var tzo = -(new Date()).getTimezoneOffset();
        if (tzo < 0) { usertzo = "Z" + tzo; } else { usertzo = "Z+" + tzo; }
        silveryCms.createCookie("silvery-cms-usertzo", usertzo);
    }
</script>

<script>

    function AdaptivePostsHomePage () {
        if ($(window).width() >= 751){
            $('.related_parent').width(($('.right_posts ').width() - 15)/2);
            $('.related_parent').height($('.related_parent').width()/1.62 - 7.5);
            $('#home_page .row_6 .post .post_img').css('height', $('#home_page .row_6 .post .post_img').width()/1.62+'px');
        } else {
            $('#home_page .row_6 .post .post_img').css('height', '');
            $('#home_page .row_6 .post .post_img').css('width', '');
            $('.related_parent').css('height', '');
            $('.related_parent').css('width', '');
        }

    }
    $(document).ready(function () {
        AdaptivePostsHomePage ();
        var video_width = $(window).width() * 0.8;
        if (video_width > 800){
            video_width = 800;
        }
        var video_height = video_width/1.38;
        $(".youtubepopover").YouTubeModal({autoplay:0, width:video_width, height:video_height});
        $('#YouTubeModalDialog').css('margin', -1*(video_width/2)+'px 0 0 '+(-1*(video_width/2))+'px');
        Row4BackgroundAdaptive ();
        Row5BackgroundAdaptive ();
        Row1BackgroundAdaptive ();

        if ($(window).width() <= 750){
            $('#home_page .row_3 .hidden_background').css('min-width', $(window).width()+'px');
        } else {
            $('#home_page .row_3 .hidden_background').css('min-width', '');
        }
    });

    $( window ).resize(function() {
        AdaptivePostsHomePage ();
        Row4BackgroundAdaptive ();
        Row5BackgroundAdaptive ();
        Row1BackgroundAdaptive ();

        if ($(window).width() <= 750){
            $('#home_page .row_3 .hidden_background').css('min-width', $(window).width()+'px');
        } else {
            $('#home_page .row_3 .hidden_background').css('min-width', '');
        }
    });

</script>

<script type="text/javascript">
    var settings = {
        urlAction: '/en/Trainers/page/1',
        urlCities: '/en/Trainers/CountryCities/%23',
        pat: '%23',
        anyCity: "any city...",
        loading: "loading data..."
    };

    function block(enable) {
        $("#filter-reset").prop("disabled", enable);
        $("#filter-apply").prop("disabled", enable);
    }

    function handleCountryChange() {
        block(true);

        var select = $('#city');

        select.empty();
        select.append("<option value=''>" + settings.loading + "</option>");

        var country = $('#country').val();
        $.get(settings.urlCities.replace(settings.pat, country), function (data) {
            select.empty();
            select.append("<option value=''>" + settings.anyCity + "</option>");
            for (var i = 0; i < data.length; ++i) {
                select.append("<option value='" + data[i].code + "'>" + data[i].name + "</option>");
            }
        }).fail(function () {
            select.empty();
            select.append("<option value=''>" + settings.anyCity + "</option>");
            alert("error");
        }).always(function () {
            block(false);
        });
    }

    function Row4BackgroundAdaptive () {
        if ($('.row_4').css('background-image') != 'none'){
            var url = $('.row_4').css('background-image').replace('url(', '').replace(')', '').replace("'", '').replace('"', '').replace("'", '').replace('"', '');
        } else {
            var url = $('.row_4 .hidden_background').css('background-image').replace('url(', '').replace(')', '').replace("'", '').replace('"', '').replace("'", '').replace('"', '');
        }

        var image = new Image();
        image.src = url;

        var width_img = image.width,
            height_img = image.height;

        if ($(window).width() >= 751){
            var real_width_img = ($('.row_4').outerHeight()/height_img)*width_img;
            var text_left_offset = $('.row_4 .col-sm-12:last-child .col-sm-4:first-child').offset().left;
            if (text_left_offset < real_width_img * 0.7367) {
                var diff = text_left_offset - (real_width_img * 0.7367);
                $('.row_4').css('background-position', diff+'px 0%');
            }
        } else {
            var real_height_img = ($('.row_4 .hidden_background').outerWidth()/width_img)*height_img;
            if (real_height_img < 400){
                $('.row_4 .hidden_background').css('min-height', real_height_img+'px');
            } else {
                $('.row_4 .hidden_background').css('min-height', '');
            }

        }

    }

    function Row5BackgroundAdaptive () {
        if ($('.row_5').css('background-image') != 'none'){
            var url = $('.row_5').css('background-image').replace('url(', '').replace(')', '').replace("'", '').replace('"', '').replace("'", '').replace('"', '');
        } else {
            var url = $('.row_5 .hidden_background').css('background-image').replace('url(', '').replace(')', '').replace("'", '').replace('"', '').replace("'", '').replace('"', '');
        }

        var image = new Image();
        image.src = url;

        var width_img = image.width,
            height_img = image.height;

        if ($(window).width() >= 751){
            var real_width_img = ($('.row_5').outerHeight()/height_img)*width_img;
            var text_left_offset = $('.row_5 .col-sm-12:last-child .col-sm-4:nth-child(2)').offset().left + $('.row_5 .col-sm-12:last-child .col-sm-4:nth-child(2)').outerWidth();
            if ($(window).width() - text_left_offset < real_width_img * 0.671) {
                var diff = text_left_offset - (real_width_img * 0.329);
                $('.row_5').css('background-position', diff+'px 0%');
            } else {
                $('.row_5').css('background-position', '');
            }

            var real_height_img = ($('.row_5').outerWidth()/width_img)*height_img;
            if (real_height_img < $('.row_5').outerHeight()){
                $('#home_page .row_5').css('background-size','cover');
            } else {
                $('#home_page .row_5').css('background-size','');
            }
        } else {
            var real_height_img = ($('.row_5 .hidden_background').outerWidth()/width_img)*height_img;
            if (real_height_img < 400){
                $('.row_5 .hidden_background').css('min-height', real_height_img+'px');
            } else {
                $('.row_5 .hidden_background').css('min-height', '');
            }

        }

    }

    function Row1BackgroundAdaptive () {
        if ($('.row_5').css('background-image') != 'none'){
            var url = $('.row_1').css('background-image').replace('url(', '').replace(')', '').replace("'", '').replace('"', '').replace("'", '').replace('"', '');
        } else {
            var url = $('.row_1 .hidden_background').css('background-image').replace('url(', '').replace(')', '').replace("'", '').replace('"', '').replace("'", '').replace('"', '');
        }
        var image = new Image();
        image.src = url;

        var width_img = image.width,
            height_img = image.height;

        if ($(window).width() <= 750){
            var background_pos = -1 * (($('.row_1 .hidden_background').height()/height_img) - ((($('.row_1 .hidden_background').height()/height_img) * width_img) * 0.37037) - $(window).width()/2);
            $('.row_1 .hidden_background').css('background-position', background_pos+'px 100%');
        } else {
            var background_ratio_width = ($('.row_1').outerHeight()/height_img) * width_img;
            var background_cut = background_ratio_width - $('.row_1').outerWidth();
            var background_transp_pos = background_ratio_width * 0.5171 - background_cut;
            var text_offset = $('.row_1 .col-sm-6').offset().left + $('.row_1 .col-sm-6').outerWidth();
            if (background_transp_pos < text_offset){
                var background_pos = -1 * (text_offset - background_transp_pos);
                $('.row_1').css('background-position', background_pos+'px 50%');
            } else {
                $('.row_1').css('background-position', '');
            }
        }
    }
</script>


<!-- GA Script Start -->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-80007426-1', 'auto');
    ga('send', 'pageview');
</script>
<!-- GA Script End -->
</body>
</html>
