<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoNgen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/academy1.css')}}">
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
                <div class="col-md-3 col-sm-12">
                    <h1 class="text-white" style="z-index: 5; color: white;">Académie de Motongen
                    </h1>
                </div>
                <div class="col-md-9 col-sm-12 pt-5">
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
            <div class="container pb-5">
                <div class="row pb-5">
                    <div class="col-lg-10 col-md-6 col-xl-6 offset-xl-3 text-center">
                        <h2 class="text-uppercase pb-2">REJOIGNEZ NOTRE PROGRAMME DE FORMATION INTENSIVE
                        </h2>
                        <p>
                            Apprenez tout ce que vous devez savoir sur la révision du moteur et les tests de précision.
                        </p>
                    </div>
                        <div class="col-lg-10 col-md-6 col-xl-6 offset-xl-3">
                        <form class="row g-3" method="POST" action="{{url('academy')}}">
                          @csrf
                            <div class="col-md-6">
                              <label for="firstname" class="form-label">Prénom</label>
                              <input type="text" class="form-control form-control-lg" id="firstname" name="firstname" required>
                            </div>
                            <div class="col-md-6">
                              <label for="lastname" class="form-label"> Nom de famille
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

                              <div class="col-md-8">
                                <label for="address" class="form-label">Adresse de contact
                                </label>
                                <input type="text" class="form-control form-control-lg" id="address" name="address" required>
                              </div>

                              <div class="col-md-4">
                                <label for="date" class="form-label">Date de début
                                </label>
                                <input type="date" class="form-control form-control-lg" id="date" name="startDate" required>
                              </div>

                              <div class="col-md-12">
                                <label for="duration" class="form-label">Durée</label>
                                <select name="duration" id="" class="form-control form-control-lg" required>
                                    <option value="" disabled selected>Select</option>
                                    <option value="1 year">1 Year</option>
                                    <option value="2 years">2 Years</option>
                                </select>
                              </div>



                            <div class="col-12">
                                <label for="notes" class="form-label">Remarques
                                </label>
                                <textarea class="form-control" id="notes" rows="3"  name="notes" required></textarea>
                              </div>

                            <div class="col-12 text-center">
                              <button type="submit" class="btn btn-danger px-5">Soumettre
                            </button>
                            </div>
                          </form>
                        </div>
                    </div>
                    
                </div>
                </div>
        </section>
    </main>
        @include('layouts.footerfr')

    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script  defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
</body>
</html>