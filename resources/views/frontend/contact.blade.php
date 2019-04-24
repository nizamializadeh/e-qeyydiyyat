@extends('layouts.frontend.frontend')
@section('content')
    <div class="breadcumb-area bg-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Əlaqə</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcumb-area end -->

    <!-- contact-area start -->
    <div class="contact-area ptb-120 bg-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="contact-wrap">
                        <p>#123 King , Melbourne vic 3000, Sydney New City, Australia</p>
                        <p>(+08) 9673 123 765,(+08) 9673 148 112</p>
                        <p>hello@university.com</p>
                    </div>
                </div>
                <div class="col-md-8 col-xs-12">
                    <div class="contact-form">
                        <div class="cf-msg"></div>
                        <form action="http://wpgeeky.com/html/university-preview/mail.php" method="post" id="cf">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" placeholder="Ad" id="fname" name="fname">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" placeholder="Email" id="email" name="email">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" placeholder="Mövzu" id="subject" name="subject">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="contact-textarea" placeholder="Mesajiniz" id="msg" name="msg"></textarea>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <button id="submit" class="cont-submit btn-contact" name="submit">Göndər</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection