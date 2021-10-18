<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoNgen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="assets/Header_Logo.webp" type="image/x-icon">

</head>
<body>
    <header>
        <div class="container p-0" style="min-height: 10vmin;">
            
            @include('layouts.navfr')

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
            <div class="container pb-5">
                <div class="row mb-5">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 col-md-8 offset-md-2 col-sm-12 text-center">
                        <h1 class="text-uppercase title">
                            Entrez les détails de votre moteur et de la marque de votre voiture ci-dessous
                        </h1>
                    </div>
                </div>



                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 col-md-8 offset-md-2 col-sm-12">
                          <div class="container">
                        <form class="row g-3" action="{{url('contactform')}}" method="POST">
                            @csrf
                            <div class="col-md-6">
                              <label for="firstname" class="form-label">Prénom
                            </label>
                              <input type="text" name="firstname" class="form-control form-control-lg" id="firstname" required>
                            </div>
                            <div class="col-md-6">
                              <label for="lastname" class="form-label">nom de famille
                            </label>
                              <input type="text"  name="lastname" class="form-control form-control-lg" id="lastname" required>
                            </div>

                            <div class="col-md-6">
                                <label for="phone" class="form-label">numéro de téléphone
                                </label>
                                <input type="number" name="phone" class="form-control form-control-lg" id="phone" required>
                              </div>
                              <div class="col-md-6">
                                <label for="email" class="form-label">Adresse e-mail
                                </label>
                                <input type="email" name="email" class="form-control form-control-lg" id="email" required>
                              </div>

                              <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">marque de voiture
                                </label>
                                <input type="text" name="brand" class="form-control form-control-lg" id="car-brand" required>
                              </div>

                              <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">modèle de voiture
                                </label>
                                <input type="text" name="model" class="form-control form-control-lg" id="car-model" required>
                              </div>

                              <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">An
                                </label>
                                <input type="number" name="year" class="form-control form-control-lg" id="car-year" maxlength="4" required>
                            </div>

                            <div class="col-md-8 ">
                                <label for="inputAddress2" class="form-label">VIN numéro
                                </label>
                                <input type="text" name="vin" class="form-control form-control-lg" id="vin-number">
                              </div>
                              
                              <div class="col-12">
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="part" id="inlineRadio1" value="engine" required>
                                  <label class="form-check-label" for="inlineRadio1">moteur</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="part" id="inlineRadio2" value="engine" required>
                                  <label class="form-check-label" for="inlineRadio2">boîte de vitesses
                                </label>
                                </div>
  
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="part" id="inlineRadio2" value="engine" required>
                                  <label class="form-check-label" for="inlineRadio2">essieu</label>
                                </div>
                              </div>
  
                            <div class="col-12">
                                <label for="notes" class="form-label">Remarques
                                </label>
                                <textarea class="form-control" id="notes" rows="3" name="notes" required></textarea>
                              </div>

                            <div class="col-12 text-center">
                              <button type="submit" class="btn btn-danger px-5">nous faire parvenir</button>
                            </div>
                          </form>
                        </div>
                        </div>
                    </div>
                    
                </div>
                </div>
        </section>
        @include('layouts.brands')

    </main>
        @include('layouts.footerfr')
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>

    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    


</body>
</html>