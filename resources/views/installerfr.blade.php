<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoNgen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/installer.css')}}">
    <link rel="stylesheet" defer href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="assets/Header_Logo.webp" type="image/x-icon">
</head>
<body>
    <header>
        <div class="container p-0">
           
           @include('layouts.navfr')

        </div>

        <div class="container text-left">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h1 class="text-white">Trouver un installateur</h1>
                    <p>Nous vous remercions de l'intérêt que vous portez aux produits reconditionnés de moteurs et de boîtes de vitesses MOTONGEN                    </p>
                </div>
            </div>
        </div>
    </header>
    <main>

      @if ($errors->any())
      <script>
        swal("Error sending your message", "{{$errors->first()}}", "error");
      </script>
      @endif

      @if (Session::get('message'))
      <script>
        swal("Thank you", "{{Session::get('message')}}", "success");
      </script>
      @endif

        <section class="section-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-10 offset-1 col-md-8 col-sm-12 text-center">
                        <h2 class="text-uppercase pb-2">Remplissez le formulaire ci-dessous pour trouver un installateur près de chez vous
                        </h2>
                        <p>
                            Si vous travaillez déjà avec un professionnel de l'automobile, il sera heureux de discuter de l'installation de nos produits. Si vous avez besoin d'un installateur, MOTONGEN est affilié à de nombreux mécaniciens professionnels, ateliers et centres de réparation automobile dans tout le pays et en Afrique de l'Ouest, et nous pouvons vous aider à en trouver un dans votre région.
                        </p>
                        <p>
                            En un rien de temps, vous repartirez dans votre véhicule avec la satisfaction de savoir que vous avez pris une décision judicieuse et économique qui vous permettra de continuer à profiter de votre voiture, camion, fourgon ou VUS actuel pendant des années

                        </p>
                        <p class="text-danger">
                            <i class="fas fa-info-circle text-danger pt-2">
                            </i>
                            MOTONGEN ne sera pas responsable des dommages causés si le moteur est installé de manière incorrecte ou médiocre ou si les lubrifiants appropriés n'ont pas été utilisés.

                        </p>
                    </div>
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2 col-lg-10 offset-1 col-md-6 col-sm-12">
                        <form class="row g-3" action="{{url('installer')}}" method="POST">
                          @csrf
                            <div class="col-md-6">
                              <label for="firstname" class="form-label">Prénom</label>
                              <input type="text" class="form-control form-control-lg" id="firstname" required name="firstname">
                            </div>
                            <div class="col-md-6">
                              <label for="lastname" class="form-label">Nom de famille
                            </label>
                              <input type="text" class="form-control form-control-lg" id="lastname" name="lastname" required>
                            </div>

                            <div class="col-md-6">
                                <label for="phone" class="form-label">Numéro de téléphone
                                </label>
                                <input type="number" class="form-control form-control-lg" id="phone" name="phone" required>
                              </div>
                              <div class="col-md-6">
                                <label for="email" class="form-label">Adresse e-mail
                                </label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                              </div>

                              <div class="col-md-6">
                                <label for="state" class="form-label">Etat</label>
                                <input type="text" class="form-control form-control-lg" id="state" name="state" required>
                              </div>
                              <div class="col-md-6">
                                <label for="city" class="form-label">Ville</label>
                                <input type="text" class="form-control form-control-lg" id="city" name="city" required>
                              </div>

                              <div class="col-md-4">
                                <label for="brand" class="form-label">Marque de voiture
                                </label>
                                <input type="text" class="form-control form-control-lg" id="brand" name="brand" required>
                              </div>
                              <div class="col-md-4">
                                <label for="model" class="form-label">Modèle de voiture
                                </label>
                                <input type="text" class="form-control form-control-lg" id="model" name="model" required>
                              </div>

                              <div class="col-md-4">
                                <label for="year" class="form-label">An</label>
                                <input type="number" maxlength="4"  name="year" class="form-control form-control-lg" id="year">
                              </div>

                           
                            <div class="col-8">
                              <label for="vin" class="form-label">VIN Numéro</label>
                              <input type="text" class="form-control form-control-lg" id="vin" name="vin" required>
                            </div>
                            
                            <div class="col-12">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="part" id="engine" value="engine">
                                <label class="form-check-label" for="engine">moteur</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="part" id="gearbox" value="gearbox">
                                <label class="form-check-label" for="gearbox">boîte de vitesses
                                </label>
                              </div>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="part" id="axle" value="axle">
                                <label class="form-check-label" for="axle">essieu
                                </label>
                              </div>
                             
                            </div>


                            <div class="col-12">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" name="kits">
                                <label class="form-check-label" for="gridCheck">
                                    Comprend un kit d'installation
                                </label>
                              </div>
                              <p class="pt-2">
                                Ces kits d'installation de moteur sont livrés avec des pièces neuves de fabricants de qualité et arriveront à l'atelier de votre installateur avec votre moteur MOTONGEN reconditionné et prêt à installer.
                              </p>
                            </div>

                            <div class="col-12">
                                <label for="exampleFormControlTextarea1" class="form-label">Remarques
                                </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="notes" required></textarea>
                              </div>

                            <div class="col-12 text-center">
                              <button type="submit" class="btn btn-danger px-5">nous faire parvenir
                            </button>
                            </div>
                          </form>
                        </div>
                    </div>
                    
                </div>
                </div>
        </section>
        @include('layouts.brands')

    </main>
    
    @include('layouts.footerfr')

    <script  defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
</body>
</html>