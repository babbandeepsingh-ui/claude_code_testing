<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <link rel="stylesheet" href="{{ url('/') }}/css/manrope.css" />
    <link rel="stylesheet" href="{{ url('/') }}/css/poppins.css" />
    <link rel="stylesheet" href="{{ url('/') }}/css/style.min.css" />
    <!-- <link rel="stylesheet" href="{{ url('/') }}/css/style.css" /> -->
	  <link rel="icon" href="/images/favicon.ico" type="image/png" sizes="16x16">
    <!-- Start cookieyes banner -->  
    <script id="cookieyes" type="text/javascript" src="https://cdn-cookieyes.com/client_data/fc066c462e75884ad291318a.js"></script> 
    <!-- End cookieyes banner -->
</head>
<body>
  <div class="overlay_cookie"></div>
   @include('inc.header')

 <?php //include('inc.side_menu') ?>

  @yield('content')
  @include('inc.footer')

  <div class="quick-btn <?php if(Request::is('contact')){echo 'hide-quick-btn';} ?>">
    <a href="{{url('contact')}}">
        <img src="{{asset('images/quick-btn.svg')}}" alt="" class="img-fluid" loading="lazy">
    </a>
</div>

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script> -->
<script src="https://unpkg.com/counterup2@2.0.2/dist/index.js">	</script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
<script>
    setTimeout(function(){
    $("button#cky-btn-accept, button#cky-btn-reject").click(function(){
      $("body").css("overflow-y","auto");
      $(".overlay_cookie").hide();
      });
    }, 100);

    setTimeout(function(){
      if($("#cky-consent").css("display")=="block")
      {
        $(".overlay_cookie").show();
        $("body").css("overflow-y","hidden");
      }
    else if($("#cky-consent").css("display")=="none")
    {
      $("body").css("overflow-y","auto");
      $(".overlay_cookie").hide();
    }
    }, 100);
</script>

<!-- <script>
  AOS.init();
</script> -->
</body>
</html>