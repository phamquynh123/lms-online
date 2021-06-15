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

    <!-- Start about us -->
    <section id="mu-about-us">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="mu-about-us-area">
            <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                <!-- Start Title -->
                <div class="mu-title">
                    <h2>Giới thiệu</h2>
                </div>
                <p>
                    Đại học Bách Khoa Thành lập từ năm 1956, Trải qua 60 năm xây dựng và phát triển, Trường đã khẳng định vị thế của mình thông qua uy tín về chất lượng đào tạo, các hoạt động phong trào sinh viên sôi nổi, sự gắn bó giữa Nhà trường và xã hội, cam kết đào tạo đội ngũ nhân lực hùng hậu và chất lượng cao cho đất nước.
                </p>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="mu-about-us-right">                            
                {{-- <a id="mu-abtus-video" href="https://www.youtube.com/embed/FqpZ13yVUJI" target="mutube-video"> 
                <img src="assets/img/about-us.jpg" alt="img"> --}}
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/FqpZ13yVUJI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </a>                
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- End about us -->



<!-- Start latest course section -->
<section id="mu-latest-courses">
    <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="mu-latest-courses-area">
              <!-- Start Title -->
              <div class="mu-title">
                <h2>Latest Courses</h2>
              </div>
                          <!-- End Title -->
                          <!-- Start latest course content -->
              <div id="mu-latest-course-slide" class="mu-latest-courses-content">
                              @if(count($courses) > 0)
                                  @foreach($courses as $course)
                                      <div class="col-lg-4 col-md-4 col-xs-12">
                                          <div class="mu-latest-course-single">
                                              <figure class="mu-latest-course-img">
                                                  <a href="#">
                                                      <img src="{{ asset('bower_components/bower/Client/img/courses/default.jpg') }}" alt="img">
                                                  </a>
                                                  <figcaption class="mu-latest-course-imgcaption">
                                                      <a href="#">Drawing</a>
                                                      <span><i class="fa fa-clock-o"></i></span>
                                                  </figcaption>
                                              </figure>
                                              <div class="mu-latest-course-single-content">
                                                  <h4><a href="#">{{ $course->name }}</a></h4>
                                                  <p>{!! $course->description !!}</p>
                                                  {{-- <div class="mu-latest-course-single-contbottom">
                                                      <a class="mu-course-details" href="#">Details</a>
                                                      <span class="mu-course-price" href="#">$165.00</span>
                                                  </div> --}}
                                              </div>
                                          </div>
                                      </div>
                                  @endforeach
                              @endif
                
              </div>
                          <!-- End latest course content -->
                      </div>
                  </div>
              </div>
      </div>
</section>
<!-- End latest course section -->


<!-- Start our teacher -->
<section id="mu-our-teacher">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-our-teacher-area">
              <!-- begain title -->
              <div class="mu-title">
                <h2>Our Teachers</h2>
                                  <p>.</p>
                          </div>
                          <!-- end title -->
                          <!-- begain our teacher content -->
                          <div class="mu-our-teacher-content">
                                  <div class="row">
                                      @if (count($teachers) > 0)
                                      @foreach($teachers as $teacher)
                                          <div class="col-lg-3 col-md-3  col-sm-6">
                                              <div class="mu-our-teacher-single">
                                                  <figure class="mu-our-teacher-img">
                                                      {{-- <img src="assets/img/teachers/teacher-01.png" alt="teacher img"> --}}
                                                      @if ($teacher->avatar == null)
                                                          <img src={{ asset('') . config('messages.linkdefaul') }}/>
                                                  @else
                                                          <img src={{ asset(config('messages.imgDefaul')) . $teacher->avatar  }} />
                                                  @endif
                                                      <div class="mu-our-teacher-social">
                                                          <a href="#"><span class="fa fa-facebook"></span></a>
                                                          <a href="#"><span class="fa fa-twitter"></span></a>
                                                          <a href="#"><span class="fa fa-linkedin"></span></a>
                                                          <a href="#"><span class="fa fa-google-plus"></span></a>
                                                  </div>
                                                          </figure>                    
                                                          <div class="mu-ourteacher-single-content">
                                                              <h4>{{ $teacher->name }}</h4>
                                                              <span>{{ $teacher->subject }}</span>
                                                              <p>{{ $teacher->show_intro }}</p>
                                                      </div>
                                              </div>
                                          </div>
                                      @endforeach
                                      @endif
                                  </div>
                          </div>
                      </div>
                  </div>
              </div>
      </div>
</section>
<!-- End our teacher -->
@endsection



@section('js-client')
@endsection