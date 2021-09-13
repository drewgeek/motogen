<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoNgen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" defer href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="{{asset('assets/Header_Logo.webp')}}" type="image/x-icon">

</head>
<body>
    <header>
        <div class="container p-0">
            @include('layouts.nav')
        </div>

        <div class="container">
            <div class="row" style="margin-top: 3em">
                <div class="col-md-6 col-sm-12 col-xs-12" >
                    <h1 id="title">DO YOU WANT A<br class="d-none d-xl-block"> REMANUFACTURED ENGINE?</h1>
                    <p class="text-white">
                        MotoNgen is an engine, gearbox and axles remanufacturing company. We procure engines for our customers across the nation and West Africa coast.
                    </p>
                    <a href="{{route('contact')}}" class="btn btn-light py-2 px-5 ml-5 bold-btn">GET A QUOTE</a>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <audio controls>
                        <source src="{{asset('assets/audio.mp3')}}" type="audio/mp3">
                        <source src="{{asset('assets/audio.mpeg')}}" type="audio/mpeg">
                      Your browser does not support the audio element.
                      </audio>
                </div>
                
            </div>
                
            <div class="row" id="secondrow" style="margin-top: 5em">
                <div class="col-md-6 col-sm-12">
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    
                    <span>
                    <h1 class="text-white">
                        ABOUT  <br class="d-none d-xl-block">  MOTONGEN
                    </h1>
                    <p class="text-white">
                        MotoNgen is an engine, gearbox and axles remanufacturing company,  today we are building the nation's largest collection of remanufactured of petrol, transmissions, differentials, rear axle assemblies,  performance engines, and electric motors. 
                    </p>
                    </span>
                </div>
            </div>
        </div>

    </header>
    <main>
        <section class="section-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <img src="assets/splash.webp" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 text-left">
                        <p>
                            We procure engines, gearboxes, axles and differentials for our customers across the nation and West Africa coast.
                        </p>
                        <a href="{{route('about')}}" class="btn btn-danger px-5 py-2 bold-btn">ABOUT MOTONGEN</a>
                    </div>
                </div>
            </div>

        </section>

        <section class="section-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3  col-sm-12 text-center">
                        <h1>
                            We offer one year guarantee & remote service assist
                        </h1>
                        <p>
                            MotoNgen offers to buy your old engine/ gearbox from you or give you a discount on the engine you are buying. Yes, like an exchange. Your old engines is called a core. 
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    @include('layouts.footer')

    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
</body>
</html>