<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoNgen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/axle1.css')}}">
    <link rel="stylesheet" defer href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="assets/Header_Logo.webp" type="image/x-icon">

</head>
<body>
    <header>
        <div class="overlay"></div>
        <div class="container p-0">
            
            @include('layouts.navfr')

        </div>

        <div class="container text-left">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-white">Essieux et <br> Différentiels</h1>
                </div>
            </div>
        </div>
    </header>
    <main>

        <section class="section-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left ml-4">
                        <p class="text-danger text-uppercase">
                            Faits concernant l'essieu
                        </p>
                    </div>
                    <div class="col-md-6 text-left">
                        <p>
                            L'huile de la plupart des 4X4 n'a jamais été changée. La plupart des différentiels sont construits de manière robuste et on oublie souvent de les entretenir. Un 4X4 ou 4matic ou Quattro, qui signifient tous la même chose, possède généralement un essieu avant et arrière et une boîte de transfert au milieu de la voiture, tous reliés par l'arbre de transmission. La plupart des ateliers mécaniques ne se souviennent pas de conseiller le client sur l'entretien des essieux. Nous sommes là pour fournir. 
                        </p>
                        <p>
                            Les SUV et les ateliers automobiles doivent entretenir les différentiels avant et arrière des SUV. Le reconditionnement consiste à rendre le produit aussi proche du neuf que possible. Les composants sont soigneusement inspectés, vérifiés par rapport à l'équipement d'origine, mesurés en fonction des spécifications pour des tolérances dimensionnelles correctes et reconstruits et reconditionnées avec précision. Les pièces de rechange sont des pièces neuves ou d'occasion qui sont requalifiées pour répondre à des normes et des tolérances exactes
                        </p>
                       
                    </div>
                </div>
            </div>

        </section>

        <section class="section-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6  col-sm-12 col-xs-12">
                        <h3 class="text-uppercase text-left text-danger">
                            Essieux et <br> Différentiels
                        </h3>
                        <p>
                            Quatre roues motrices/toutes roues motrices ou 2 roues motrices. MOTONGEN propose une gamme complète de différentiels avant pour les applications à quatre roues motrices et à transmission intégrale.
                        </p>
                        <ul style="list-style: decimal;">
                            <li>
                                Les roulements sont pré-chargés conformément à la norme OEM, ce qui permet d'allonger leur durée de vie, de les faire fonctionner en douceur et de les roder correctement.
                            </li>
                            <li>
                                Les différentiels sont inspectés pour vérifier le jeu correct. Cette inspection est effectuée pour garantir une lubrification correcte des engrenages afin de réduire le bruit et d'éviter la surchauffe, ce qui est particulièrement important dans les applications à usage intensif.
                            </li>
                            <li>
                                Le motif de contact des dents est inspecté et ajusté pour utiliser la structure complète de l'engrenage. Cette procédure permet de réduire le bruit et la fatigue de l'engrenage.
                            </li>
                        </ul>
                        <p>
                            MOTONGEN propose également les moteurs & Transmission avec des assemblages d'actionneurs 4WD et AWD si la référence de la pièce est indiquée.
                        </p>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 pt-5">
                        <img src="assets/differentials.webp" alt="">
                    </div>
                </div>
                </div>
            </div>
        </section>
        @include('layouts.brands')

    </main>
    
    @include('layouts.footerfr')

    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
</body>
</html>