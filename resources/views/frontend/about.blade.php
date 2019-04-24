@extends('layouts.frontend.frontend')
@section('content')
<div class="breadcumb-area bg-1">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="breadcumb-wrap text-center">
                    <h2>Haqqimizda</h2>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcumb-area end -->

<!-- about-area start -->
<div class="about-area ptb-120 bg-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xs-12">
                <div class="about-img">
                    <img src="img/about.jpg" alt="" />
                </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xs-12">
                <div class="about-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis praesentium corrupti nemo eaque modi ducimus sequi porro. Ea voluptas architecto, tenetur iusto, explicabo, quos officiis esse inventore doloribus dolore nisi facilis quidem ipsum recusandae, consequuntur. Odit, laborum. Consequatur ea quae expedita sint optio recusandae aperiam, odio iure a repellendus alias explicabo labore dolores vitae dolorem, voluptatum voluptas in veniam quia architecto exercitationem nisi odit suscipit impedit! Impedit consequatur ratione obcaecati, voluptates quod expedita distinctio deserunt voluptate cumque assumenda accusamus temporibus magnam, ipsum repellat placeat. Inventore beatae, explicabo dolorum nam dignissimos omnis harum, sit earum esse voluptates dolorem expedita. Laudantium cum iure similique, nulla eius reiciendis quae consequatur harum doloribus ut tempore explicabo consequuntur alias dolores ipsa maiores dolore. Obcaecati, non reprehenderit. Amet quasi qui, facere sit, ipsum enim corporis illo nobis laudantium ut, dolorem tenetur atque saepe voluptatibus rem incidunt deserunt iure assumenda sunt quaerat ex. Maxime animi, voluptatibus dolorum illum deserunt ex fugit itaque molestiae aspernatur iure eius, architecto facere expedita culpa ipsum! Odit nemo id maiores molestias nisi fuga numquam vel quam mollitia quia vero, voluptatem ipsam soluta pariatur quibusdam delectus dicta, illo inventore doloremque eligendi porro! Velit libero minima deserunt sequi ipsam deleniti alias porro quiuert nemo id maiores molestias non reprehen</p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-area end -->

<!-- funfact-area start -->
<div class="funfact-area bg-img-3">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="funfact-wrap text-center">
                    <span class="counter">3500</span>
                    <h2>Year Of Experience</h2>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="funfact-wrap text-center">
                    <span class="counter">470</span>
                    <h2>Year Of Experience</h2>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="funfact-wrap text-center">
                    <span class="counter">22233</span>
                    <h2>Year Of Experience</h2>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="funfact-wrap text-center">
                    <span class="counter">100000</span><span>%</span>
                    <h2>Year Of Experience</h2>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- brand-area start -->
<div class="brand-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="brand-active">
                @foreach($partners as $partner)
                    <div class="col-xs-12">
                        <div class="brand-item">
                            <img src="{{asset('photo/'.$partner->img)}}"" alt="" />
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection