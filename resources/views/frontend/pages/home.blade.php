
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>labspa</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <!-- {{url('/frontend/assets/')}} -->
      <link rel="stylesheet" href="{{url('/frontend/assets/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{url('/frontend/assets/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{url('/frontend/assets/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{url('/frontend/assets/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{url('/frontend/assets/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{url('frontend/assets/images/loading.gif')}}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      @include('frontend.fixed.header')
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
              
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <span>Welcome to</span>
                                 <h1>DBPAT</h1>
                                 <h2>Digital Beauty Parlour And Treatment</h2>
                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are </p>
                                 <a href="{{route('appointment.dform')}}">Doctor Appointment </a> 
                                 <a href="{{route('appointment.fform')}}">Beautician Appointment</a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="{{url('frontend/assets/images/girl.png')}}" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
            
      <!-- end banner -->
      <!-- service -->
      <div id="service"  class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <img src="{{url('/frontend/assets/images/head.png')}}" alt="#"/> Our Services</h2>
                  </div>
               </div>
            </div>
            <div class="row">

            @foreach($services as $servic)
               <div class="col-md-4">
                  <div id="hover_chang" class="service_box">
                     <i><img src="{{url('/uploads/service/'.$servic->image)}}" alt="#"/></i>
                     <h3>{{$servic->service}}</h3>
                     <p>{{$servic->description}}</p>
                  </div>
               </div>
               @endforeach
               
               
            </div>
         </div>
      </div>
      <!-- service -->
      <!-- about -->
      <div id="about"  class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-9">
                  <div class="titlepage">
                     <h2> <img src="images/head.h.png" alt="#"/> About Our DBPAT </h2>
                     <p>Welcome to "Digital Beauty Parlour And Treatment" - the ultimate destination for all your beauty and wellness needs! Nestled in the heart of the city, 
our beauty parlour offers a unique and holistic approach to beauty with a team of highly qualified professionals.
At the heart of our beauty parlour is our team of experts. We take pride in having a harmonious blend of both doctors and beauticians to provide you with the best of both worlds.
 Our resident doctors are a board-certified dermatologist and a specialist in aesthetic medicine. they carefully curates and oversees all our skincare treatments, 
 ensuring that each one is personalized to meet your unique needs.
 </p>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- customer -->
      <div id="customer" class="customer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <img src="images/head.png" alt="#"/> Our Customer Feedback</h2>
                  </div>
               </div>
            </div>
            <div id="myCarousel" class="carousel slide customer_Carousel " data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="carousel-caption ">
                           <div class="test_box">
                              <i><img src="images/tes.png" alt="#"/></i>
                              <h4>Rohali jonson</h4>
                              <span>customer</span>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined </p>
                              <img src="images/icon.png" alt="#"/>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="test_box">
                              <i><img src="images/tes.png" alt="#"/></i>
                              <h4>Rohali jonson</h4>
                              <span>customer</span>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined </p>
                              <img src="images/icon.png" alt="#"/>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="carousel-caption">
                           <div class="test_box">
                              <i><img src="images/tes.png" alt="#"/></i>
                              <h4>Rohali jonson</h4>
                              <span>customer</span>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined </p>
                              <img src="images/icon.png" alt="#"/>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <i class="fa fa-chevron-left" aria-hidden="true"></i>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <i class="fa fa-chevron-right" aria-hidden="true"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- end customer -->
      </div>
      <!--  contact -->
      
      <!-- end contact -->
      <!--  footer -->
      @include('frontend.fixed.footer')
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{url('/frontend/assets/js/jquery.min.js')}}"></script>
      <script src="{{url('/frontend/assets/js/popper.min.js')}}"></script>
      <script src="{{url('/frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{url('/frontend/assets/js/jquery-3.0.0.min.js')}}"></script>
      <!-- sidebar -->
      <script src="{{url('/frontend/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{url('/frontend/assets/js/custom.js')}}"></script>
      <script>
         $('a[href^="#"]').on('click', function(event) {
         
          var target = $(this.getAttribute('href'));
         
          if( target.length ) {
              event.preventDefault();
              $('html, body').stop().animate({
                  scrollTop: target.offset().top
              }, 2000);
          }
         
         });
      </script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             });
         
         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js --> 
   </body>
</html>

