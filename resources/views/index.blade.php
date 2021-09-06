@extends('layouts.app')

@section('title',"Home")
@section('content')
<!-- hero banner -->
    <section class="main_banner">
        <div class="container">
            <div class="main_banner_content text-center">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-10 col-lg-8">
                        <p class="text-center text-white font-weight-light font-24 mb-1 opensans"><i>We provides always our best
                                services for our clients</i></p>
                        <h1 class="poppins semibold font-65 line-height-67 text-white text-center mb-4">Sending Real
                            Estate Proposals is now Easy!</h1>
                        <a href=""
                            class="sample_proposal_btn font-14 text-white text-center text-uppercase poppins font-weight-bold d-inline-block">SAMPLE
                            PROPOSAL</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- what we do -->
    <section class="what_we_do py-75" id="what_we_do">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-5 col-lg-4 my-auto">
                    <div class="what_we_do_left_content text-center text-md-left mb-5 mb-md-0">
                        <h4 class="color3c3c3c font-14 opensans font-weight-normal">LOREM IPSUM</h4>
                        <h2 class="poppins color3c3c3c font-weight-bold font-35 line-height-30 mb-4 pt-2">What We Do For <br
                                class="d-none d-lg-block"> You
                        </h2>
                        <p class="opensans font-16 color3c3c3c font-weight-normal line-height-30 pr-2">Donec sed odio
                            dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donecullamcorper
                            nulla non metus auctor fringilla.</p>
                        <a href="" class="color1e1f1f poppins medium font-15 border-bottom-a8a8a8 pt-2 d-inline-block">Our Pricing</a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-8">
                    <div class="what_we_do_slider1">
                        <div class="what_we_do_slide owl-carousel">
                            <div class="item">
                                <div class="what_we_do_box text-center">
                                    <img src="{{ asset('front/images/what_we_do_icon1.png') }}" alt="what_we_do_icon1"
                                        class="d-inline-block">
                                    <h4 class="color1e1f1f poppins semibold font-20 pt-4 mb-3">Feature Here</h4>
                                    <p class="opensans font-15 font-weight-normal color1e1f1f line-height-25 mb-4">
                                        Artbees is humbled and proud to be showcased in many criti allyacclaimed blogs
                                        and online magazines,
                                    </p>
                                    <a href="" class="font-15 poppins mediumn color1e1f1f border-bottom-a4a4a5">
                                        Click Here
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="what_we_do_box text-center">
                                    <img src="{{ asset('front/images/what_we_do_icon2.png') }}" alt="what_we_do_icon1"
                                        class="d-inline-block">
                                    <h4 class="color1e1f1f poppins semibold font-20 pt-4 mb-3">Feature Here</h4>
                                    <p class="opensans font-15 font-weight-normal color1e1f1f line-height-25 mb-4">
                                        Artbees is humbled and proud to be showcased in many criti allyacclaimed blogs
                                        and online magazines,
                                    </p>
                                    <a href="" class="font-15 poppins mediumn color1e1f1f border-bottom-a4a4a5">
                                        Click Here
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="what_we_do_box text-center">
                                    <img src="{{ asset('front/images/what_we_do_icon1.png') }}" alt="what_we_do_icon1"
                                        class="d-inline-block">
                                    <h4 class="color1e1f1f poppins semibold font-20 pt-4 mb-3">Feature Here</h4>
                                    <p class="opensans font-15 font-weight-normal color1e1f1f line-height-25 mb-4">
                                        Artbees is humbled and proud to be showcased in many criti allyacclaimed blogs
                                        and online magazines,
                                    </p>
                                    <a href="" class="font-15 poppins mediumn color1e1f1f border-bottom-a4a4a5">
                                        Click Here
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="what_we_do_box text-center">
                                    <img src="{{ asset('front/images/what_we_do_icon2.png') }}" alt="what_we_do_icon1"
                                        class="d-inline-block">
                                    <h4 class="color1e1f1f poppins semibold font-20 pt-4 mb-3">Feature Here</h4>
                                    <p class="opensans font-15 font-weight-normal color1e1f1f line-height-25 mb-4">
                                        Artbees is humbled and proud to be showcased in many criti allyacclaimed blogs
                                        and online magazines,
                                    </p>
                                    <a href="" class="font-15 poppins mediumn color1e1f1f border-bottom-a4a4a5">
                                        Click Here
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="what_we_do_box text-center">
                                    <img src="{{ asset('front/images/what_we_do_icon1.png') }}" alt="what_we_do_icon1"
                                        class="d-inline-block">
                                    <h4 class="color1e1f1f poppins semibold font-20 pt-4 mb-3">Feature Here</h4>
                                    <p class="opensans font-15 font-weight-normal color1e1f1f line-height-25 mb-4">
                                        Artbees is humbled and proud to be showcased in many criti allyacclaimed blogs
                                        and online magazines,
                                    </p>
                                    <a href="" class="font-15 poppins mediumn color1e1f1f border-bottom-a4a4a5">
                                        Click Here
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="what_we_do_box text-center">
                                    <img src="{{ asset('front/images/what_we_do_icon2.png') }}" alt="what_we_do_icon1"
                                        class="d-inline-block">
                                    <h4 class="color1e1f1f poppins semibold font-20 pt-4 mb-3">Feature Here</h4>
                                    <p class="opensans font-15 font-weight-normal color1e1f1f line-height-25 mb-4">
                                        Artbees is humbled and proud to be showcased in many criti allyacclaimed blogs
                                        and online magazines,
                                    </p>
                                    <a href="" class="font-15 poppins mediumn color1e1f1f border-bottom-a4a4a5">
                                        Click Here
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tours section -->
    <section class="tours" id="tours">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-7">
                    <div class="tour-left-content text-center text-md-left">
                        <h3 class="color19191a poppins semibold font-30">Lorem Ipsum Heading Here</h3>
                        <p class="opensans font-weight-normal color555655 font-16 w-75 ">Integer posuere erat a ante
                            venenatis dapibus posuere velit aliquetpraesent commodo cursus magna.</p>
                        <div class="icon_with_text pt-4 d-table d-md-flex mx-auto mx-md-0 align-items-center">
                            <img src="{{ asset('front/images/tour-icon1.png') }}" alt="tour-icon" class="mr-3 pb-3 pb-md-0">
                            <h4 class="poppins medium font-20 color1e1e1e mb-0 pb-0">Subheading Here</h4>
                        </div>
                        <p class="opensans font-weight-normal font-14 color555655 pt-3 w-75 line-height-28">Integer posuere erat a ante
                            venenatis dapibus posuere velit aliquetpraesent commodo cursus magna.</p>

                        <div class="icon_with_text pt-3 d-table d-md-flex mx-auto mx-md-0 align-items-center">
                            <img src="{{ asset('front/images/tour-icon2.png') }}" alt="tour-icon" class="mr-3 pb-3 pb-md-0">
                            <h4 class="poppins medium font-20 color1e1e1e mb-0 pb-0">Subheading Here</h4>
                        </div>
                        <p class="opensans font-weight-normal font-14 color555655 pt-3 w-75 line-height-28">Integer posuere erat a ante
                            venenatis dapibus posuere velit aliquetpraesent commodo cursus magna.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-5 pl-lg-0">
                    <div class="tour_image">
                        <img src="{{ asset('front/images/tour-image.png') }}" alt="tour-image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our pricing plan -->
    <section class="our_price_plan py-90" id="our_pricing">
        <div class="container">
            <h2 class="poppins font-weight-normal font-30 text-center text-md-left color303030 pb-60">There is just
                <span class="gradient_text font-weight-bold"> one price</span> for everything!
            </h2>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-8">
                    <div class="row justify-content-between">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                            <div class="feature_here_box text-center text-md-left pb-60">
                                <h5 class="poppins font-18 color2c3e50 medium mb-4">Feature Here</h5>
                                <p class="poppins font-weight-normal color5e7082 font-15 mb-0 line-height-25">We talked
                                    to a lot of startups, companies and recruiters in order to design the perfect theme.
                                </p>
                            </div>
                            <div class="feature_here_box text-center text-md-left pb-60">
                                <h5 class="poppins font-18 color2c3e50 medium mb-4">Feature Here</h5>
                                <p class="poppins font-weight-normal color5e7082 font-15 mb-0 line-height-25">We talked
                                    to a lot of startups, companies and recruiters in order to design the perfect theme.
                                </p>
                            </div>
                            <div class="feature_here_box text-center text-md-left">
                                <h5 class="poppins font-18 color2c3e50 medium mb-4">Feature Here</h5>
                                <p class="poppins font-weight-normal color5e7082 font-15 mb-0 line-height-25">We talked
                                    to a lot of startups, companies and recruiters in order to design the perfect theme.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-5">
                            <div class="feature_here_box text-center text-md-left pb-60">
                                <h5 class="poppins font-18 color2c3e50 medium mb-4">Feature Here</h5>
                                <p class="poppins font-weight-normal color5e7082 font-15 mb-0 line-height-25">We talked
                                    to a lot of startups, companies and recruiters in order to design the perfect theme.
                                </p>
                            </div>
                            <div class="feature_here_box text-center text-md-left pb-60">
                                <h5 class="poppins font-18 color2c3e50 medium mb-4">Feature Here</h5>
                                <p class="poppins font-weight-normal color5e7082 font-15 mb-0 line-height-25">We talked
                                    to a lot of startups, companies and recruiters in order to design the perfect theme.
                                </p>
                            </div>
                            <div class="feature_here_box text-center text-md-left">
                                <h5 class="poppins font-18 color2c3e50 medium mb-4">Feature Here</h5>
                                <p class="poppins font-weight-normal color5e7082 font-15 mb-0 line-height-25">We talked
                                    to a lot of startups, companies and recruiters in order to design the perfect theme.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 px-0">
                    <div class="pricing_box text-center mt-5 mt-md-0">
                        <ul class="list-inline list-unstyled px-5">
                            <li class="d-flex justify-content-between">
                                <p class="poppins font-weight-normal font-27 text-white">3 Credits</p>
                                <p class="poppins font-weight-normal font-27 text-white">$10</p>
                            </li>
                            <li class="d-flex justify-content-between">
                                <p class="poppins font-weight-normal font-27 text-white">5 Credits</p>
                                <p class="poppins font-weight-normal font-27 text-white">$15</p>
                            </li>
                            <li class="d-flex justify-content-between">
                                <p class="poppins font-weight-normal font-27 text-white">10 Credits</p>
                                <p class="poppins font-weight-normal font-27 text-white">$20</p>
                            </li>
                        </ul>
                        <p class="poppins font-weight-normal font-15 text-white text-center mb-4 pb-3 pt-2">*1 Propposal
                            = 1 Credit</p>
                        <a href=""
                            class="call_to_action_btn poppins font-weight-bold font-30 d-inline-block text-center">CALL
                            TO ACTION</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video section -->
    <section class="video_section py-140" id="video">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-10 col-lg-7 text-center">
                    <h4 class="text-center font-13 raleway extrabold text-white mb-3">WATCH OUR VIDEO</h4>
                    <h3 class="font-40 text-white semibold poppins text-center">Look At How Our Platform Powerful &
                        Awesome Features</h3>
                    <img src="{{ asset('front/images/play_btn.png') }}" class="pt-4">
                </div>
            </div>

        </div>
    </section>
    <!-- our feature_three_box -->
    <section class="feature_three_box">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 px-0">
                    <div class="feature_three_box1 text-center text-md-left bg-darkgrey">
                        <img src="{{ asset('front/images/feature_icon1.png') }}" alt="feature_icon1">
                        <h4 class="poppins medium font-18 text-white pt-4 mb-3">Feature Here</h4>
                        <p class="colorf9f9f9 font-14 font-weight-normal line-height-23 raleway mb-0">We encourage every team
                            member to be a whole person. We have a flexible, high trust environment that is focused on
                            doing great work.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 px-0">
                    <div class="feature_three_box1 text-center text-md-left bg-darkblack">
                        <img src="{{ asset('front/images/feature_icon2.png') }}" alt="feature_icon1">
                        <h4 class="poppins medium font-18 text-white pt-4 mb-3">Feature Here</h4>
                        <p class="colorf9f9f9 font-14 font-weight-normal line-height-23 raleway mb-0">We encourage every team
                            member to be a whole person. We have a flexible, high trust environment that is focused on
                            doing great work.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 px-0">
                    <div class="feature_three_box1 text-center text-md-left bg-skyblue">
                        <img src="{{ asset('front/images/feature_icon3.png') }}" alt="feature_icon1">
                        <h4 class="poppins medium font-18 text-white pt-4 mb-3">Feature Here</h4>
                        <p class="colorf9f9f9 font-14 font-weight-normal line-height-23 raleway mb-0">We encourage every team
                            member to be a whole person. We have a flexible, high trust environment that is focused on
                            doing great work.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our customer reviews -->
    <section class="our_customer_review py-130">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-5 my-auto">
                    <div class="our_customer_rating text-center pb-5 pb-md-0">
                        <img src="{{ asset('front/images/our_client_review_image.png') }}">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7">
                    <div class="client_review_box text-center text-md-left pb-5">
                        <p class="poppins font-weight-normal font-15 line-height-25 color2c3e50">Out believe has request
                            not how comfort evident. Up delight cousins we feeling minutes. Genius has looked end piqued
                            spring. Down has rose feel find man. Learning day desirous informed expenses material
                            returned six figure.</p>
                        <div class="d-table d-md-flex mx-auto mx-md-0 align-items-center pt-3">
                            <img src="{{ asset('front/images/client_image1.png') }}" class="mr-3 pb-3 pb-md-0" alt="client_image1">
                            <h4 class="color79848f font-15 poppins medium">Reta Schmidt — Housewife</h4>
                        </div>
                    </div>
                    <div class="client_review_box text-center text-md-left mt-0 mt-md-0">
                        <p class="poppins font-weight-normal font-15 line-height-25 color2c3e50">Out believe has request
                            not how comfort evident. Up delight cousins we feeling minutes. Genius has looked end piqued
                            spring. Down has rose feel find man. Learning day desirous informed expenses material
                            returned six figure.</p>
                        <div class="d-table d-md-flex mx-auto mx-md-0 align-items-center pt-3">
                            <img src="{{ asset('front/images/client_image2.png') }}" class="mr-3 pb-3 pb-md-0" alt="client_image1">
                            <h4 class="color79848f font-15 poppins medium">Adeline O'Reilly — Banker</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- get started -->
    <section class="get_in_touch">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-9 text-center text-md-left mb-3 mb-md-0">
                    <p class="poppins font-weight-light text-white font-36 mb-0">Still want to see more about <span
                            class="font-weight-bold">Proposals?</span></p>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 text-center text-md-left">
                    <a href=""
                        class="text-uppercase text-white font-14 opensans font-weight-bold text-center d-inline-block get_in_touch_btn">GET
                        IN TOUCH</a>
                </div>
            </div>
        </div>
    </section>


@endsection