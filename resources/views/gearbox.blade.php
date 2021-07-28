<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motomi Repairs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/gearbox1.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="assets/Header_Logo.webp" type="image/x-icon">

</head>
<body>
    <header>
        <div class="container p-0">
           
           @include('layouts.nav')

        </div>

        <div class="container text-left">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h1 class="text-white">GEARBOX</h1>
                </div>
                <div class="col-md-6 col-sm-12 pt-5">
                   
                </div>
            </div>
            <div class="row" id="make-white">
                    <div class="col-12">

                    </div>
            </div>
        </div>
    </header>
    <main>
        <section class="section-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <p class="text-danger text-uppercase">
                            What is the major cause of transmission failure is contamination?
                        </p>
                    </div>
                    <div class="col-md-6 text-left">
                        <p>
                            Would you believe a particle as small as a hair can lead to transmission failure? It can. A human hair is only 30-35 microns in diameter, while the smallest particles most transmission filters will remove are 60 microns in diameter. 
                        </p>
                        <p>
                            Small contaminants, not removed by the filter, remain suspended in the fluid until they eventually find their way to the internal components of the transmission. If transmission failure does occur, a significant amount of contaminant will collect in the cooler.
                        </p>
                       
                    </div>
                </div>
            </div>

        </section>

        <section class="section-2">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-md-8 offset-md-2  col-xs-12 text-center">

                    <h2 class="text-uppercase" id="gearbox-title">The Gearbox remanufactured <br> Process & warranty</h2>
                        <p id="gearbox-p">
                            We offer 1 YEAR/10,000 KILOMETRES  WARRANTY on our remanufactured automatic and manual  transmissions because every one of them goes through our "Do It Right" process that ensures worry-free operation. Our optional Premium Service Plan provides allowances for such items as towing, car rental, fluids and premium labor should a problem arise.                         </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center py-5">
                           <img src="assets/steps.webp" width="95%" alt="">
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-uppercase text-left">
                            how The  <br> Gearbox comes
                        </h3>
                        <p>
                            Our gearboxes are sold with the appropriate transmission oil needed because a bad transmission oil will damage the transmission in a matter of weeks.
                            Old core gearboxes can be sent to MotoNgen for a discount.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="assets/gearbox2.webp" alt="" height="100%" width="100%">
                    </div>
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