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

</head>
<body>
    <section class="first-section">
   
   <header>
      <div class="header-div">
          <div>
       <img src="../.././assets/Header_Logo.webp" alt=""/>
   <img src="../.././assets/white-logo 2.webp" alt=""/>
</div>
  
    <ul class="right-header">
           
      <li >
         <a  href="{{route('about')}}">Our Story</a>
    </li>
    <li >
         <a  href="{{route('academy')}}">Our Academy</a>
    </li>

    <li >
            <a class="contact-us-button-style" href="{{route('contact')}}">
            
                 Contact Us
             
         </a>
    </li> 
       <!-- <i class="fa fa-shopping-cart fa-lg" ></i>  -->
      
  
    </ul>  

  
       
</div> 

</header>
  
   <div class="first-section-body">
       <div class="first-section-body-inner">
      
              
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
    <ul class="second-section-top-butns">
        <li class="auto-parts">AUTO PARTS</li>
        <li><a  href="{{route('engine')}}">ENGINE</a></li>
        <li><a  href="{{route('gearbox')}}">GEARBOX </a></li>
        <li><a  href="{{route('axle')}}">AXLES </a></li>
        <li><a  href="{{route('installer')}}">FIND AN INSTALLER </a></li>
</ul>
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
        <img src="assets/image2.jpg" alt="" />
</div>
</section>
<section class="fourth-section">
    <div class="fourth-inner">
        <h1>FEATURED LISTINGS</h1>
        <div id="fourth-inner-images">


</div>
</div>
</section>
<section class="fifth-section">
<i id="arrow-lefts" class="fa fa-angle-left fa-2x" aria-hidden="true"></i>
    <div id="fifth-section-inner">
        <h1>TOP PARTS</h1>
        <div class="fifth-section-image-and-arrow">
        
        <div id="fifth-inner-images">

        </div>
        
</div>
        <!-- <button id="arrow-right">arrow</button>
        <button id="arrow-left">left</button> -->
        <div class="fifth-section-img-div">

        </div>


</div>
<i id="arrow-right" class="fa fa-angle-right fa-2x" aria-hidden="true"></i>
</section>
    <script src="js/main.js"></script>
   
   
</body>
</html>