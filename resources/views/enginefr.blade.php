<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoNgen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/engine1.css')}}">
    <link rel="stylesheet" defer href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="assets/Header_Logo.webp" type="image/x-icon">

</head>
<body>
    <header>
        <div class="container p-0">
           
           @include('layouts.navfr')

            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h1 class="text-white text-uppercase">moteurs reconditionnés et reconstruits</h1>
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
                            Que sont les moteurs reconditionnés et reconstruits ?
                        </p>
                    </div>
                    <div class="col-md-6 text-left">
                        <p>
                            Si le moteur de votre véhicule ne répond plus à vos attentes ou est complètement en panne, il n'est pas nécessaire de l'échanger contre un véhicule d'occasion ou neuf. Après tout, vous n'aviez pas l'intention de remplacer votre véhicule avant que le moteur ne soit fatigué, pourquoi le feriez-vous maintenant ?
                            </p>
                            <p>
                                Le remplacement de votre moteur par un moteur de rechange de stock MOTONGEN coûtera beaucoup moins cher que le remplacement du véhicule. 
                            </p>
                            <p>
                                Nous offrons une garantie d'un an. 1 an de service d'assistance à distance. Nous avons la possibilité de vendre avec l'huile moteur et le filtre à huile recommandés, car un mauvais lubrifiant peut endommager le moteur.
                        </p>
                       
                    </div>
                </div>
            </div>

        </section>

        <section class="section-2">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-md-4 offset-md-4 text-center">
                    <h2 class="text-uppercase" id="gearbox-title">Le processus moteur <br> de MOTONGEN</h2>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-3">
            <div class="container text-center">
                <div class="row">
                <div class="col-md-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Aperçu</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">NETTOYAGE COMPLET</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="cranshafts-tab" data-bs-toggle="tab" data-bs-target="#cranshafts" type="button" role="tab" aria-controls="cranshafts" aria-selected="false">vilebrequins
                </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">vilebrequins
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">CYLINDRES</button>
                  </li>

                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">BIELLES</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">TÊTES</button>
                  </li>

                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">ASSEMBLÉ</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">CONTRÔLE DE QUALITÉ
                    </button>
                  </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row mt-4">
                            <div class="col-md-10 col-xs-12">
                                <div class="pray">
                                <img src="assets/bmw.webp" alt="pray" width="100%" height="100%">
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-12 col-xs-12 text-white">
                                <div class="panel text-left ">
                                    <h1>GARANTIE DE 1 AN/10 000 KILOMÈTRES</h1>
                                    <p>
                                        MOTONGEN est en mesure d'offrir une telle garantie sur ses moteurs à gaz reconditionné, car chacun d'entre eux est soumis à notre processus complet "Do It Right" qui garantit un fonctionnement sans souci. Notre plan de service premium optionnel prévoit des indemnités pour des éléments tels que le remorquage, la location de voiture, les fluides et la main-d'œuvre de qualité en cas de problème 
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                
                    </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row mt-4">
                        <div class="col-md-10">
                            <div class="pray">
                            <img src="assets/cleaning.webp" alt="Thorough cleaning" width="100%" height="100%">
                            </div>
                        </div>
                        <div class="col-md-2 text-white">
                            <div class="panel text-left ">
                                <h1>NETTOYAGE COMPLET
                                </h1>
                                <p>
                                    Chaque moteur à essence reconditionné MOTONGEN est partiellement ou totalement démonté. Les blocs, les culasses, les bielles, les vilebrequins et les arbres à cames sont soigneusement nettoyés par divers procédés afin d'éliminer les contaminants susceptibles d'entraîner une usure prématurée des composants internes du moteur et une défaillance précoce de celui-ci.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="cranshafts" role="tabpanel" aria-labelledby="cranshafts-tab">
                    <div class="row mt-4">
                        <div class="col-md-10">
                            <div class="pray">
                            <img src="assets/cleaning.webp" alt="Thorough cleaning" width="100%" height="100%">
                            </div>
                        </div>

                        <div class="col-md-2 text-white">
                            <div class="panel text-left ">
                                <h1>LES VILEBREQUINS</h1>
                                <p>
                                    Les vilebrequins sont usinés avec précision selon des tolérances exactes, sans paliers de taille impaire. Les surfaces de butée (moteurs domestiques) sont micro-polies afin de fournir des finitions de surface précises pour un fonctionnement régulier du moteur et une usure réduite des paliers de butée. Chaque tourillon est inspecté et mesuré avec une précision critique. Après l'usinage, les trous d'huile sont chanfreinés pour améliorer la lubrification et chaque tourillon est poli jusqu'à obtenir une finition lisse pour une longue durée de vie du roulement. Les vilebrequins sont nettoyés en profondeur en mettant l'accent sur le rinçage et le brossage des passages d'huile pour éliminer tous les contaminants.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>

              </div>

              </div>
                </div>
            </div>
        </section >
        <section class="section-4">
            <div class="container">
                <div class="row pb-5">
                    <div class="col-md-6 offset-md-3 text-center">

                    <h1 class="text-uppercase engine">
                        Avez-vous besoin d'un moteur ?  <br>
                        Plus d'informations sur les options qui s'offrent à vous
                    </h1>
                    <p class="pt-2">
                        En général, il existe quatre types de moteurs vous rencontrerez lors de votre recherche
                    </p>
                </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="assets/remanufactured.webp" alt="Card image cap">
                            <div class="card-body" style="border-left: 1px solid red;">
                                <h6 class="text-uppercase">MOTEURS RECONDITIONNÉS ET RECONSTRUITS</h6>
                              <p class="card-text">Les moteurs reconditionnés sont des moteurs reconstruits selon les spécifications exactes de l'original.</p>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card" >
                            <img class="card-img-top" src="assets/junkyardengine.webp" alt="Card image cap">
                            <div class="card-body" style="border-left: 1px solid red;">
                                <h6 class="text-uppercase">Moteur de dépotoir</h6>
                              <p class="card-text">La plupart des gens s'en remettent à leur mécanicien pour acheter le moteur et courent le risque d'obtenir un moteur utilisé localement ou mal révisé avec une garantie de deux semaines..</p>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card" >
                            <img class="card-img-top w-75 text-center" src="assets/rebuiltengine.webp" alt="Card image cap" >
                            <div class="card-body" style="border-left: 1px solid red;">
                                <h6 class="text-uppercase">Les moteurs reconstruits</h6>
                              <p class="card-text">quant à eux, ne sont réparés que pour résoudre le problème qui a provoqué la panne initiale</p>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card" >
                            <img class="card-img-top h-75" src="assets/usedengine.webp" alt="Card image cap">
                            <div class="card-body" style="border-left: 1px solid red;">
                                <h6 class="text-uppercase">Moteurs d'occasion
                                </h6>
                              <p class="card-text">Si le moteur de votre voiture, camion, SUV ne répond plus à vos attentes, il n'est pas nécessaire de l'échanger contre un véhicule d'occasion neuf ou plus récent.
                            </p>
                            </div>
                          </div>
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