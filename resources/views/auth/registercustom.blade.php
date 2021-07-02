<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="../../images/favicon.ico">

    <title> Register </title>
   <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="{{ asset('bower_components/bower/adminTemplate/Css/bootstrap.min.css') }}">
    
    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{ asset('bower_components/bower/adminTemplate/Css/bootstrap-extend.css') }}">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('bower_components/bower/adminTemplate/Css/master_style.css') }}">

    <!-- Superieur Admin skins -->
    <link rel="stylesheet" href="{{ asset('bower_components/bower/adminTemplate/Css/_all-skins.css') }}">
    {{-- link font-awsome --}}
    <link rel="stylesheet" href="{{ asset('bower_components/bower/adminTemplate/Css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/bower/adminTemplate/Css/toastr.min.css') }}">
    <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.css">
     @routes()
</head>

<body class="hold-transition bg-img" style="background-image: url(../../images/gallery/full/6.jpg)" data-overlay="4">
    
    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">
            <div class="col-12">
                <div class="row no-gutters justify-content-md-center">
                    <div class="col-lg-4 col-md-5 col-12">
                        <div class="content-top-agile h-p100">
                            <h2>{{ trans('message.Getstarted') }} <br> {{ trans('withUs') }}</h2>
                            <p class="text-white">{{ trans('message.newMember') }}</p>

                            <div class="text-center text-white">
                                <p class="mt-20">-{{ trans('message.register') }} -</p>
                                <p class="gap-items-2 mb-20">
                                    <a class="btn btn-social-icon btn-outline btn-white" href="auth/facebook"><i class="fa fa-facebook"></i></a>
                                    <a class="btn btn-social-icon btn-outline btn-white" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="btn btn-social-icon btn-outline btn-white" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a class="btn btn-social-icon btn-outline btn-white" href="#"><i class="fa fa-instagram"></i></a>
                                </p>
                            </div>
                            <div class="text-center text-white">
                                <a href="{{asset('/')}}" class="mt-20 text-center text-white">
                                    <i class="fa fa-home"></i> {{ trans('message.GoHome') }}
                                </a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="p-40 bg-white content-bottom">
                            <form action="#" method="post" class="form-element">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info">
                                                <i class="fa fa-user-o"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control pl-15" placeholder="Full Name" name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-info border-info">
                                                <i class="fa fa-envelope-open-o"></i>
                                            </span>
                                        </div>
                                        <input type="email" class="form-control pl-15" placeholder="Email" name="email"
                                        value="@if(Auth::check()) {{ Auth::user()->email }} @endif"
                                        onchange="checkmailExist()"
                                        >
                                        <p class='email-exist'></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <p class="input-group-text bg-info border-info" style="text-align:center">
                                                <i class="fa fa-object-group"></i> {{ trans('message.course') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <select name="subject_id" id="subject_id" class="form-control pl-15">
                                            @foreach($subjects as $subject)
                                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="checkbox">
                                            <input type="checkbox" id="basic_checkbox_1" >
                                            <label for="basic_checkbox_1">{{ trans('message.agree') }}<a href="#" class="text-warning"><b>
                                            {{ trans('message.tearm') }}</b></a></label>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12 float-right text-center">
                                        <button type="submit" class="btn btn-info btn-block margin-top-10 col-2 float-right">{{ trans('message.register') }}</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form> 
                            <button type="button" class="btn btn-info vefify" onclick="sendOTP()">Verify phone</button>
                                <div id="recaptcha-container"></div>
                            <form action="" id="Phone-form">
                                
                                <input type="text" class ="input_otp">
                                <button type="button" class="btn btn-info class-verify">xasc nhanaj</button>
                            </form>

                            <div class="text-center">
                                <p class="mt-15 mb-0">{{ trans('message.hassAccount') }}<a href="{{ route('login') }}" class="text-danger ml-5"> {{ trans('message.login') }}</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- jQuery 3 -->
    <script src="{{ asset('bower_components/bower/adminTemplate/Js/jquery-3.3.1.js') }}"></script>
    <!-- popper -->
    <script src="{{ asset('bower_components/bower/adminTemplate/Js/popper.min.js') }}"></script>
    <!-- Bootstrap 4.0-->
    <script src="{{ asset('bower_components/bower/adminTemplate/Js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bower_components/bower/adminTemplate/Js/toastr.min.js') }}"></script>
    {{-- custom js --}}
    {{-- <script src ={{ asset('/js/admin.js') }}></script> --}}


{{-- <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '441817523214128',
      cookie     : true,
      xfbml      : true,
      version    : 'v4.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "http://localhost/projectAbc/public/";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

</script> --}}
 <!-- The core Firebase JS SDK is always required and must be listed first -->
 <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-app.js"></script>
 <script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-auth.js"></script>

<script>
     // Your web app's Firebase configuration
     var firebaseConfig = {
        apiKey: "AIzaSyDTvkc7ws8JX-4iizqifH2cEZF0eoRMHyY",
        authDomain: "quynh-firebase.firebaseapp.com",
        projectId: "quynh-firebase",
        storageBucket: "quynh-firebase.appspot.com",
        messagingSenderId: "848117488588",
        appId: "1:848117488588:web:fef88f5803b55128db9b69",
        measurementId: "G-M0SQ7QE5WP"
     };
     // Initialize Firebase
     firebase.initializeApp(firebaseConfig);
</script>


<script>
    //   // Your web app's Firebase configuration
    //   // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    //   firebase.auth().languageCode = 'it';
    
    //   var firebaseConfig = {
    //     apiKey: "AIzaSyDTvkc7ws8JX-4iizqifH2cEZF0eoRMHyY",
    //     authDomain: "quynh-firebase.firebaseapp.com",
    //     projectId: "quynh-firebase",
    //     storageBucket: "quynh-firebase.appspot.com",
    //     messagingSenderId: "848117488588",
    //     appId: "1:848117488588:web:fef88f5803b55128db9b69",
    //     measurementId: "G-M0SQ7QE5WP"
    //   };
    //   // Initialize Firebase
    //   firebase.initializeApp(firebaseConfig);
    //   firebase.analytics();

 
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    async function sendOTP() {
        var number = '0374352428';
        //global number phone
        var split_number = number.slice(1,11);
        var area = "+84";
        var phone = area.concat(split_number);
        window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
        try {
            let confirmationResult = await firebase.auth().signInWithPhoneNumber(phone,  window.recaptchaVerifier);
            window.confirmationResult = confirmationResult;
            coderesult = confirmationResult;
            window.recaptchaVerifier.clear();
        } catch (error) {
            window.recaptchaVerifier.clear();
        }
    }
   
    // function verify() {
    //     var code = $(".input_otp").value;
    //     coderesult.confirm(code).then(function (result) {
    //         // let user_phone = $('#porfile_phone').val();
    //         alert('dung roi');
    //         // $("#successOtpAuth").text("Đã xác minh số điện thoại");
    //         // $("#successOtpAuth").show();
    //         // setTimeout(function(){
    //         //     $("#successOtpAuth").hide();
    //         // }, 3000);
    //         // $('#modal_verify_phone').modal('hide');
   
    //     }).catch(function (error) {
    //         alert('sai roi nhe');
    //         // $("#error").text('Sai mã xác nhận ! hãy thử lại ');
    //         // $("#error").show();
    //         // $('#modal_verify_phone').modal('hide');
    //         // $('#submit_update').prop('disabled', true);
    //     });
    // }

    $(document).on('click', '.class-verify', function() {
        alert('123');
    })
</script>

<script>
    $(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".vefify").on('click', function(e) {
        e.preventDefault();
        alert("aaa");

    })
    $('#form-profile').on('submit', function(e) {
    e.preventDefault();
    $.ajax({
        dataType: 'JSON',
        method: 'post',
        cache: false,
        contentType: false,
        processData: false,
        data: new FormData(this),
        url: route('editprofile'),
        success: function(response){
            toastr.info(response.success);
            location.reload();
        }
    })
})
})
</script>
</body>
</html>
