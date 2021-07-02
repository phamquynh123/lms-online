@extends('layouts.client')

@section('css-client')
@endsection

@section('client-content')
	<!-- Start Slider -->
	<section id="mu-slider">
        <!-- Start single slider item -->
        <div class="mu-slider-single">
            <div class="mu-slider-img">
                <figure>
                    <img src="{{ asset('bower_components/bower/Client/img/slide1.jpg') }}" alt="img">
            </figure>
            </div>
            <div class="mu-slider-content">
                <h4>Welcome To LMS</h4>
                <span></span>
                <h2>We Will Help You To Learn</h2>
                <p>LMS is the best chooise to manage your study.</p>
                {{-- <a href="#" class="mu-read-more-btn">Read More</a> --}}
            </div>
        </div>
        <div class="mu-slider-single">
            <div class="mu-slider-img">
                <figure>
                    <img src="{{ asset('bower_components/bower/Client/img/slide2.jpg') }}" alt="img">
                </figure>
            </div>
            <div class="mu-slider-content">
                    <h4>Premiumu Quality Free</h4>
                    <span></span>
                    <h2>Best Education Ever</h2>
                    <p>LMS is the best chooise to manage your study.</p>
            </div>
        </div>
        <!-- Start single slider item -->  
    </section>
    <!-- End Slider -->
    <!-- Start service  -->
    <section id="mu-service">
    <div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="mu-service-area">
                <!-- Start single service -->
                <div class="mu-service-single">
                    <span class="fa fa-book"></span>
                    <h3>Studying online</h3>
                    <p>Bảo đảm tính liên tục, an toàn trong quá trình học</p>
                </div>
                <!-- Start single service -->
                <!-- Start single service -->
                <div class="mu-service-single">
                    <span class="fa fa-users"></span>
                    <h3>Expert Teachers</h3>
                    <p>Giảng viên chuyên môn</p>
                </div>
                <!-- Start single service -->
                <!-- Start single service -->
                <div class="mu-service-single">
                    <span class="fa fa-table"></span>
                    <h3>Best Classrooms</h3>
                    <p>Lớp học hiệu quả.</p>
                </div>
                <!-- Start single service -->
            </div>
        </div>
        </div>
    </div>
    </section>
    <!-- End service  -->
    <div style="clear:both"></div>
    <div class="container pt-3" style="padding-top: 15px">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-xs-12">
                <a href="#">
                    <img src="{{ asset('bower_components/bower/Client/img/courses/default.jpg') }}" alt="img" class="img-fluid" style="width: 100%">
                </a>
                <figcaption class="mu-latest-course-imgcaption">
                    <a href="{{ route('client.mycourse', $course->slug) }}">{{ $course->name }}</a><span><i class="fa fa-clock-o"></i></span>
                    
                </figcaption>
            </div>
        
            <div class="col-lg-8 col-md-8 col-xs-12">
                <div class="mu-latest-course-single-content">
                        <h3><b>{!! $course->note !!}</b></h3>
                        
                    <p>{!! $course->description !!}</p>
                </div>
            </div>
        </div>
        <div class="register row">
            <?php 
                $url = route('registercustom') . '?slug=' . $course->slug;
            ?>
            <a href="{{ $url }}" class="btn btn-info float-right"> {{ trans('message.register') }}</a>
        </div>
    </div>


@endsection

@section('js-client')
@endsection