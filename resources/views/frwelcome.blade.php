<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoNgen Repairs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <link rel="stylesheet" defer href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="{{asset('assets/Header_Logo.webp')}}" type="image/x-icon">

</head>
<body>
    <header>
        <div class="container p-0">
            @include('layouts.navfr')
        </div>

        <div class="container" >
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h1 id="title">Voulez-vous que <br class="d-none d-xl-block"> votre moteur soit remis a neuf?</h1>
                    <p class="text-white">
                        MOTONGEN est une entreprise de reconditionnement et d'approvisionnement de moteurs et de boîtes de vitesses. Nous aidons nos différents clients à travers l'Afrique de l'Ouest à fournir des moteurs, des boîtes de vitesses et des essieux à leur flotte de voitures et de camions légers afin de les remettre sur la route.
                    </p>
                    <button class="btn btn-light py-2 px-5 ml-5 bold-btn">Obtenir un Devis</button>
                </div>
            </div>
                
            <div class="row" id="secondrow">
                <div class="col-md-6 col-sm-12"></div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <span>
                    <h1 class="text-white">
                        À PROPOS   <br class="d-none d-xl-block">  DE NOUS
                    </h1>
                    <p class="text-white">
                        MOTONGEN est une entreprise de reconditionnement et d'approvisionnement de moteurs et de boîtes de vitesses. Nous aidons nos différents clients à travers l'Afrique de l'Ouest à fournir des moteurs, des boîtes de vitesses et des essieux à leur flotte de voitures et de camions légers afin de les remettre sur la route.
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
                        <button class="btn btn-danger px-5 py-2 bold-btn">À PROPOS DE MOTONGEN</button>
                    </div>
                </div>
            </div>

        </section>

        <section class="section-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3  col-sm-12 text-center">
                        <h1>
                            Nous offrons une garantie d'un an et service d'assistance à distance.
                        </h1>
                        <p>
                            MOTONGEN propose de vous acheter votre ancien moteur/boîte de vitesses ou de vous accorder une remise sur le moteur que vous achetez. Oui, comme un échange. Votre ancien moteur s'appelle un noyau
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    @include('layouts.footerfr')

    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
</body>
</html>