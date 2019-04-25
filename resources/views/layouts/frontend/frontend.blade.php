<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from wpgeeky.com/html/university-preview/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Apr 2019 06:17:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>University || Home One</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.html">
    <!-- Place favicon.ico in the root directory -->

    <!-- all css here -->
    <!-- bootstrap v3.3.7 css -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/owl.carousel.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/slicknav.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/video-js.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/style.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet" />
    <script src="{{asset('frontend/js/vendor/modernizr-2.8.3.min.js')}}"></script>



    <style>
        .fon{
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 14px;
        }
        .ig{
            background-image: url("img/tehsil.jpg");
            background-size: cover;
        }
        .sd-container {
            position: relative;
            /*float: left;*/
        }

        .sd {
            border: 1px solid #1cbaa5;
            padding: 5px 10px;
            height: 30px;
            width: 150px;
        }

        .open-button {
            position: absolute;
            top: 15px;
            right: 3px;
            width: 25px;
            height: 23px;
            background: #fff;
            pointer-events: none;
            right: 11px;
        }

        .open-button button {
            border: none;
            background: transparent;
        }
        @import url(https://fonts.googleapis.com/css?family=Montserrat);
        /* css class for the registration form generated errors */

        .profilepress-reg-status {
            border-radius: 6px;
            font-size: 17px;
            line-height: 1.471;
            padding: 10px 19px;
            background-color: #e74c3c;
            color: #ffffff;
            font-weight: normal;
            display: block;
            text-align: center;
            vertical-align: middle;
            margin: 5px 0;
        }
        /*form styles*/

        #msform {
            width: 400px;
            margin: 50px auto 550px;
            text-align: center;
            position: relative;
        }

        #msform fieldset {
            background: #652267;
            border: 0 none;
            border-radius: 3px;
            padding: 20px 30px;
            box-sizing: border-box;
            width: 100%;
            margin: 0 0%;

            position: absolute;
        }
        /*Hide all except first fieldset*/

        #msform fieldset:not(:first-of-type) {
            display: none;
        }
        /*inputs*/

        #msform input,
        #msform textarea {
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 14px;
        }
        /*buttons*/

        #msform .action-button {
            width: 100px;
            background: #27AE60;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 1px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
        }
        /*headings*/

        .fs-title {
            font-size: 15px;
            text-transform: uppercase;
            color: #2C3E50;
            margin-bottom: 10px;
        }

        .fs-subtitle {
            font-weight: normal;
            font-size: 13px;
            color: #666;
            margin-bottom: 20px;
        }
        /*progressbar*/

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            /*CSS counters to number the steps*/

            counter-reset: step;
        }

        #progressbar li {
            list-style-type: none;
            color: #fff;
            text-transform: uppercase;
            font-size: 9px;
            width: 25%;
            float: left;
            position: relative;
        }

        #progressbar li:before {
            content: counter(step);
            counter-increment: step;
            width: 20px;
            line-height: 20px;
            display: block;
            font-size: 15px;
            color: #333;
            background: white;
            border-radius: 3px;
            margin: 0 auto 5px auto;
        }
        input[type="date"]:before {
            content: attr(placeholder) !important;
            margin-right: 0.5em;
        }
        input[type="date"]:focus:before,
        input[type="date"]:valid:before {
            content: "";
        }



        #progressbar li:first-child:after {
            /*connector not needed before the first step*/

            content: none;
        }
        /*marking active/completed steps green*/
        /*The number of the step and the connector before it = green*/

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #27AE60;
            color: white;
        }
    </style>
</head>
<body>


<header>

    <div class="header-bottom" id="sticky-header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3 col-xs-8">
                    <div class="logo">
                        <a href="/">
                            <img style="width: 147px" src="img/tehsil-011.png" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-9 hidden-xs">
                    <div class="mainmenu text-right">
                        <ul id="navigation">
                            <li class="active"><a href="/">Ana Səhifə</a>
                            </li>
                            <li><a href="/university ">courses</a>
                            </li>

                            <li><a href="/about">haqqimizda</a>
                            </li>
                            <li><a href="/contact">Əlaqə</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-4 hidden-lg hidden-md hidden-sm">
                    <div class="responsive-menu-wrap floatright">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>









@yield('content')







<footer>
    <div class="footer-top ptb-120">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class=" footer-widget">
                        <div class="col-md-4">
                            <img 	 src="img/tehsildemo-01.png" alt="" />

                        </div>
                        <div class="col-md-6" >
                            <p>#123 King , Melbourne vic 3000, Sydney New City, Australia</p>
                            <p>(+08) 9673 123 765,(+08) 9673 148 112</p>
                            <p>hello@university.com</p>
                        </div>

                        <div class="socil-icon col-md-2" >
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 	<div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="copyright">
                            &copy; COPYRIGHT univercity 2017. DESIGN BY <a href="#">perculatheme</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
</footer>
<!-- footer-area end -->

<!-- all js here -->
<!-- jquery latest version -->

<script src="{{asset('frontend/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/video.js')}}"></script>
<script src="{{asset('frontend/js/jquery.slicknav.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('frontend/js/counterup.main.js')}}"></script>
<script src="{{asset('frontend/js/videojs-ie8.min.js')}}"></script>
<script src="{{asset('frontend/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/js/plugins.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<script>

    //jQuery time
    (function($) {
        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        $(".next").click(function() {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //activate next step on progressbar using the index of next_fs
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
            }, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale current_fs down to 80%
                    scale = 1 - (1 - now) * 0.2;
                    //2. bring next_fs from the right(50%)
                    left = (now * 50) + "%";
                    //3. increase opacity of next_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'transform': 'scale(' + scale + ')'
                    });
                    next_fs.css({
                        'left': left,
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
            });
        });

        $(".previous").click(function() {
            if (animating) return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
            }, {
                step: function(now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = ((1 - now) * 50) + "%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({
                        'left': left
                    });
                    previous_fs.css({
                        'transform': 'scale(' + scale + ')',
                        'opacity': opacity
                    });
                },
                duration: 800,
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
            });
        });

    })(jQuery);


</script>
<script>

    $('#select1').on('change',function (e) {
        var select_id =e.target.value;
        $.get('/ajax-set1?select_id='+select_id,function (data) {
            $('#select2').empty();
            $.each(data,function (index,selectObj) {
                console.log(selectObj);
                $('#select2').append('<option value="'+selectObj.id  +'">'+selectObj.name+'</option>');
            });
        });
    });

    $('#select2').on('change',function (e) {
        var select_id =e.target.value;
        $.get('/ajax-set2?select_id='+select_id,function (data) {
            $('#select3').empty();
            $.each(data,function (index,selectObj) {
                $('#select3').append('<option value="'+selectObj.id  +'">'+selectObj.name+'</option>');
            });
        });
    });
    $('#select3').on('change',function (e) {
        var select_id =e.target.value;
        $.get('/ajax-set3?select_id='+select_id,function (data) {
            $('#select4').empty();
            $.each(data,function (index,selectObj) {
                $('#select4').append('<option value="'+selectObj.id  +'">'+selectObj.name+'</option>');
            });
        });
    });

    $('#country').on('change',function (e) {
        var country_id =e.target.value;
        $.get('/ajax-set?country_id='+country_id,function (data) {
            console.log(data);
            $('#unis').empty();
            $.each(data,function (index,uni) {
                console.log(uni.id)
                $('#unis').append('<div class="col-md-4">  <div class="course-item">   <div class="course-img"><img src="photo/'+uni.header+'" alt="" />    </div> <div class="course-content"> <h3><a href="#">'+uni.header+'</a></h3><div class="course-meta"><ul><li><i class="fa fa-globe" aria-hidden="true"></i>'+uni.name+'</li><li><i class="fa fa-clock-o"></i>'+uni.year+'</li></ul> <a href="/universitydetail'+uni.id+' " class="btn-style">Ətraflı</a>          </div>   </div></div>');
            });
        });
    });
</script>
</body>

</html>

