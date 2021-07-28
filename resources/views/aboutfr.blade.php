<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoNgen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/about1.css')}}">
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
        <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <h1>À propos de Motongen</h1>
                <p>
                  MOTONGEN est une entreprise de reconditionnement et d'approvisionnement de moteurs et de boîtes de vitesses.
                </p>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <p>
                  Nous aidons nos différents clients à travers l'Afrique de l'Ouest à fournir des moteurs, des boîtes de vitesses et des essieux à leur flotte de voitures et de camions légers afin de les remettre sur la route. Nous exploitons un laboratoire de moteurs aux normes internationales qui teste, nettoie, inspecte et optimise les moteurs et les boîtes de vitesses que nous vendons à nos clients. Nos techniciens effectuent des essais en conditions réelles sur les moteurs, des tests sur dynamomètre, des tests de pression des cylindres.
                </p>
                <p id="lastchild">
                  Nos moteurs sont conformes aux spécifications OEM et corrigent les problèmes de conception d'origine. Nous sommes le seul vendeur de moteurs qui peut vous offrir une garantie d'un an.
                </p>
            </div>
        </div>
    </div>
</header>

    <main>        
        <section class="section-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left ml-4">
                        <img src="assets/shop.webp" alt="Our mission">
                    </div>
                    <div class="col-md-6 text-left">
                        <h3>OUR MISSION</h3>
                        <p>
                          Aider les propriétaires de véhicules, les propriétaires de parcs automobiles à économiser de l'argent et le temps de mise à pied de leurs véhicules, à réduire les déchets mécaniques et à leur épargner le fardeau financier que représente le renvoi de mauvais moteurs et l'achat de moteurs qui ne dureront pas.

                        </p>
                        <h3>NOTRE CULTURE</h3>
                        <p>
                          La base de notre philosophie d'entreprise se trouve dans ces mots : "Bien faire les choses. Une fois pour toutes".
                        </p>
                        <p>
                          Chez MOTONGEN, nous attendons de tous ceux qui rejoignent notre entreprise qu'ils travaillent dur et qu'ils respectent notre engagement en matière de sécurité, de qualité, de productivité, de service à la clientèle, de réduction des déchets et de contribution à nos efforts pour respecter l'environnement
                        </p>
                    </div>
                </div>
            </div>

        </section>

        <section class="section-3">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-12 text-center">

                    <h2>FAQS</h2>
                        <p>
                          FAQ sur les moteurs reconditionnés
                        </p>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                  Quelle est la différence entre un moteur d'occasion, un moteur reconstruit et un moteur reconditionné ? 
                                </button>
                              </h2>
                              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                  <strong>MOTEURS D'OCCASION</strong>
                                 <p> Les moteurs d'occasion sont prélevés directement sur un véhicule, généralement un véhicule de casse. Il n'y a aucune disposition pour le démontage, le nettoyage interne ou l'inspection d'un composant usagé. De nombreux composants d'occasion ou de casse peuvent a voir un kilométrage élevé et un mauvais historique d'entretien - une défaillance en attente. De nombreux composants d'occasion ou de casse proviennent d'un véhicule qui a été impliqué dans un accident et qui peut présenter des dommages invisibles.</p>
                                 <strong> MOTEURS RECONSTRUITS</strong>
                                 <p> La reconstruction consiste à remettre en état en nettoyant, inspectant et remplaçant les pièces très usées ou cassées. Les pièces utilisables sont réutilisées dans les limites d'usure acceptables du fabricant. La qualité des composants reconstruits est très variable et beaucoup ne sont accompagnés que d'une garantie à court terme.</p>
                                  <strong>MOTEURS RECONDITIONNÉS</strong>
                                  <p>Le reconditionnement consiste à fabriquer un produit aussi proche du neuf que possible. Tous les matériaux de base - pièces moulées de la culasse et du bloc, vilebrequin, arbre à cames et bielles - sont soigneusement inspectés, vérifiés par rapport aux spécifications mesurées de l'équipement d'origine pour des tolérances dimensionnelles correctes et usinés avec précision. Les pièces de rechange sont neuves ou requalifiées pour répondre à des normes et des tolérances très strictes.</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                  How can I trust that a used engine will still work
                                </button>
                              </h2>
                              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body bg-danger text-light">
                                    USED ENGINES -  Used engines are taken directly from a vehicle  typically a junkyard vehicle. There are no provisions for disassembly, internal cleaning, or inspection with a used component. Many used or junkyard components may have high mileage and a poor maintenance history – a failure waiting to happen.  Many used or junkyard components come from a vehicle that was involved in an accident and may have unseen damage.
                                </div>
                              </div>
                            </div>

                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fluxsixcontroler" aria-expanded="false" aria-controls="flush-collapseThree">
                                  Comment puis-je trouver un prix pour un de vos moteurs reconditionnés ?
                                </button>
                              </h2>
                              <div id="fluxsixcontroler" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                  MOTONGEN vous propose plusieurs options pour obtenir des prix sur nos moteurs reconditionnés. Nous vous encourageons à parler avec le technicien automobile qui entretient votre véhicule pour obtenir un meilleur prix. Si vous n'avez pas d'établissement avec lequel vous travaillez régulièrement, vous pouvez faire une demande
                                </div>
                              </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-six">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flushsixcontroller" aria-expanded="false" aria-controls="flushsixcontroller">
                                    Proposez-vous un moteur reconditionné pour mon véhicule ?
                                  </button>
                                </h2>
                                <div id="flushsixcontroller" class="accordion-collapse collapse" aria-labelledby="flush-six" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">
                                    Il y a de fortes chances que nous ayons un moteur reconditionné pour votre véhicule. Si ce n'est pas le cas, nous vous en procurerons un partout dans le monde. MOTONGEN reconditionne pratiquement tous les moteurs à gaz domestiques pour les voitures, les camions, les camionnettes et les SUV, ainsi que pour un certain nombre d'applications étrangères.
                                  </div>
                                </div>
                              </div>


                          </div>
                    </div>
                    <div class="col-md-6">
                        <div class="accordion accordion-flush" id="accordionfaq">
                            
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="faq-4-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-4-control" aria-expanded="false" aria-controls="faq-4-control">
                                  Où puis-je acheter vos moteurs ?
                                </button>
                              </h2>
                              <div id="faq-4-control" class="accordion-collapse collapse" aria-labelledby="faq-4-heading" data-bs-parent="#accordionfaq">
                                <div class="accordion-body bg-danger text-light">
                                  Si vous êtes une installation, une flotte ou un utilisateur commercial, vous pouvez contacter notre département des ventes au +2348033603906. Les propriétaires de véhicules peuvent acheter des moteurs MOTONGEN reconditionnés auprès de l'atelier de réparation automobile que vous fréquentez. Si vous n'avez pas d'atelier de confiance, vous pouvez trouver un installateur MOTOMI près de chez vous grâce à notre localisateur d'installateurs.
                                </div>
                              </div>
                            </div>

                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-5-control" aria-expanded="false" aria-controls="faq-5-control">
                                  Quelle est la garantie d'un moteur reconditionné MOTONGEN ?
                                </button>
                              </h2>
                              <div id="faq-5-control" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionfaq">
                                <div class="accordion-body">
                                  La plupart des applications des moteurs/boîtes de vitesses/essieux MOTONGEN sont couvertes par une garantie nationale de 1 an/10 000 kilomètres (selon la première éventualité). Des conditions générales s'appliquent. Une information complète sur la garantie est disponible sur ce site Web. Nous vendons l'huile recommandée avec nos composants pour leur donner les meilleures chances de longévité.
                                </div>
                              </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-four">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fluxfive-control" aria-expanded="false" aria-controls="fluxfive-control">
                                    Où puis-je trouver un installateur ?                                
                                 </button>
                                </h2>
                                <div id="fluxfive-control" class="accordion-collapse collapse" aria-labelledby="flush-four" data-bs-parent="#accordionfaq">
                                  <div class="accordion-body">
                                    Nous pouvons vous mettre en relation avec un installateur. Il suffit de remplir le formulaire <a href="installerfr.html">ici</a>.
                                  </div>
                                </div>
                              </div>

                          </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('layouts.footerfr')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" defer integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" defer integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
</body>
</html>