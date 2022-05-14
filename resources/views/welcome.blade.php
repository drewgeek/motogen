<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoNgen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('css/index3.css')}}">
    <link rel="stylesheet" defer href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="{{asset('assets/Header_Logo.webp')}}" type="image/x-icon">

    <!-- CHECK HEAD START -->
      <!-- Required meta tags -->
    <!-- <meta charset="utf-8"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- <title>Capstone e-commerce</title> -->
    <script
    src="https://kit.fontawesome.com/7d1690810f.js"
    crossorigin="anonymous"
  ></script>

    <!-- CHECK HEAD END -->

</head>
<body>
@php 

$currentRouteName = Route::currentRouteName();


$englishRouteName = $frenchRouteName =  null;
if(Str::endsWith($currentRouteName, 'fr')){
    //french 
    $englishRouteName = Str::before($currentRouteName, 'fr');
    $frenchRouteName = $currentRouteName;
}
else {
    //english

    $frenchRouteName = $currentRouteName."fr";
    $englishRouteName = $currentRouteName;
}
@endphp

<section id="first-section" class="first-section">
   
   
   <header id="headersec">
      <div id="header-div" class="header-div">
      
          <div>
          <a  href="{{route('home')}}">
       <img src="../.././assets/Header_Logo.webp" alt=""/>
   <img src="../.././assets/white-logo 2.webp" alt=""/>
</a>
</div>
  
    <ul class="right-header">
           
      <li >
         <a  href="{{route('about')}}">About Us</a>
    </li>
    <li >
         <a  href="{{route('academy')}}">Our Academy</a>
    </li>

    <li >
            <a class="contact-us-button-style" href="{{route('contact')}}">
            
                 Contact Us
             
         </a>
    </li>
    
    <li>
      <a href="https://wa.me/message/6F4AGMSN7GFEP1"> <i class="fab fa-whatsapp text-danger"></i></a>                 
    </li>

    <li>
      <a href="https://www.instagram.com/motongen_and_gearbox/"><i class="fab fa-instagram text-danger"></i></a>
    </li>
    <li >

<a href="{{route($englishRouteName)}}" title="switch to english"><img src="assets/england-flag.webp" alt="english" title="switch to english" width="20"> </a>| <a href="{{route($frenchRouteName)}}" title="passer au français"><img src="assets/france.webp" alt="french" width="20" title="passer au français"></a>


</li>
       <!-- <i class="fa fa-shopping-cart fa-lg" ></i>  -->
      
  
    </ul>  
    <div class="mobile-show">
    <div id="mobile-option">
    <i class="fa fa-bars" ></i>
</div> 
<div id="mobile-cancel">
<i class="fa fa-times" aria-hidden="true"></i>
</div>
</div> 
<!-- <div class="container p-0 test-header">
@include('layouts.nav')
</div>      -->
</div> 

</header>

   <div class="first-section-body">
       <div id="first-section-body-inner" class="first-section-body-inner">
         
           <ul id="mobile-header">
           
           <li >
              <a  href="{{route('about')}}">About Us</a>
         </li>
         <li >
              <a  href="{{route('academy')}}">Our Academy</a>
         </li>
     
         <li >
              <a class="contact-us-button-style" href="{{route('contact')}}">
                Contact Us
              </a>
         </li> 
         <li >

<a href="{{route($englishRouteName)}}" title="switch to english"><img src="assets/england-flag.webp" alt="english" title="switch to english" width="20"> </a>| <a href="{{route($frenchRouteName)}}" title="passer au français"><img src="assets/france.webp" alt="french" width="20" title="passer au français"></a>


</li>
            <!-- <i class="fa fa-shopping-cart fa-lg" ></i>  -->
           
       
         </ul>  
   
      
              
                    <h2>DO YOU WANT A<br > REMANUFACTURED ENGINE?</h2>
                    <p >
                        MotoNgen is an engine, gearbox and axles remanufacturing company. We procure engines for our customers across the nation and West Africa coast.
                    </p>
         
       <div class="button-div">
           <button id="by-part" class="by-part">BY PART</button>
           <button id="by-vehicle" class="by-vehicle">BY VEHICLE</button>
        </div>
           <div id="input-div" class="input-div">
           <input type="search" placeholder="Search for your part here (E.g Brake pad, Toyota Corolla 2010)"/>
           <button class="search-button"><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
        <div id="vehicle" class="vehicle input-div">
            <select>
            <option value="0">Make</option>
</select>
<select>
            <option value="0">Model</option>
</select>
<select>
            <option value="0">Vehicle</option>
</select>
        <input type="search" placeholder="Search for your part here (E.g Brake pad, Toyota Corolla 2010)"/>
           <button class="search-button"><i class="fa fa-search" aria-hidden="true"></i></button>
</div>
   </div>
</div>
</section>


<section class="second-section">
    <div class="second-section-inner">
    <h1>FOR YOUR QUICK LOOK </h1>
    <div class="second-section-top-butns">
        <a class="auto-parts">ENGINE GALLERY</a>
        <a  href="{{route('engine')}}">ENGINE</a>
        <a  href="{{route('gearbox')}}">GEARBOX </a>
        <a  href="{{route('axle')}}">AXLES </a>
        <a  href="{{route('installer')}}">FIND AN INSTALLER </a>
</div>
<div id="list">


</div>


</section>
<!-- <section class="third-section">
    <div class="third-section-inner">
        <div class="  third-section-inner-left">
            <h1>BEFORE YOU GO SPENDING,GET A <span>PROFESSIONAL DIAGNOSTICS REPORT</span></h1>
            <div class="dont-worry-div">Dont worry, we would come to you.</div>
            <div class="lower-parag">
                <p>Instant Result</p>
                <p>Comprehensive</p>
                <p class="lower-exception">Save Time & Money </p>
            </div>
        </div>
        <div class=" third-section-parts ">
            <img src="assets/student.webp" alt="" />
        </div>

    </div>

</section> -->
<section class="third-section-area">
<div class="third-section-inner">
<!-- <div class="third-section-parts  third-section-inner-left">
            <h1>BEFORE YOU GO SPENDING, GET A <span>PROFESSIONAL DIAGNOSTICS REPORT</span></h1>
            <div class="dont-worry-div">Dont worry, we would come to you.</div>
            <div class="lower-parag">
                <p>Instant Result</p>
                <p>Comprehensive</p>
                <p class="lower-exception">Save Time & Money </p>
            </div>
</div>
<div class=" third-section-parts third-section-inner-right">
            <img src="assets/student.webp" alt="" />
        </div> -->
        @include('layouts.brands')
        <!-- <img src="assets/image2.jpg" alt="" /> -->
</div>
</section>
<section class="fourth-section">
  <div class="fourth-inner">
    <h1>FEATURED LISTINGS</h1>
    <div id="fourth-inner-images"></div>
  </div>
</section>
<!----last section fift section-->
<section class="fifth-section">
  <div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide carouselimg" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/assets/motongen_website_banner_small2.jpg" class="d-block w-100 " alt="..." width="500" height="600" >
        </div>
        <div class="carousel-item">
          <img src="/assets/motongen_web_banner2.jpg" class="d-block w-100" alt="..." width="500" height="600">
        </div>
        <div class="carousel-item">
          <img src="/assets/motongen_website_banner_small.jpg" class="d-block w-100" alt="..." width="500" height="600">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!-- <div class="carousel-content mycarouseltext text-center text-red">
        <h1 class="carousel-text">
          WELCOME TO MOTONGEN 
        </h1>
        <a href="#" class="btn btn-primary">Shop Now</a>
      </div> -->
    </div> 
  </div>

 
</section>
<footer class="footer-section">
    @include('layouts.footer')
</footer>
    <script src="js/main.js"></script>
      
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
        
<!-- carousel part start -->

  <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper)
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    -->

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <!-- carousel part end -->
   
</body>

</html>