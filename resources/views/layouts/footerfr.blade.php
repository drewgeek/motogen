
    <footer>
        <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="row">
                <div class="col-md-3">
                    <h4>
                        Nous contacter
                    </h4>
                    <p>
                        7 Kehinde Famsheke Street <br> Ilasa Road, Lekki Expressway
                    </p>
                    <p>
                        <i class="fas fa-phone text-danger"></i> 0817 093 9116
                    </p>
                    <p> <a href="mailto:info@motongen.com">
                        <i class="fas fa-envelope text-danger"></i>
                        info@motongen.com 
                        </a>
                    </p>
                </div>
                <div class="col-md-3">
                    <h4>
                        À PROPOS DE MOTONGEN
                    </h4>
                    <p>
                      <a href="{{route('aboutfr')}}">Notre histoire
                    </a>
                    </p>
                    <p>
                      <a href="{{route('installer')}}">Notre processus
                    </a>
                    </p>
                    <p>
                      <a href="{{route('academy')}}">Académie MotoNgen</a>
                    </p>
                    <p>
                        Termes et Conditions
                    </p>
                </div>
                <div class="col-md-3">
                    <h4>
                        Rejoignez notre communauté
                    </h4>
                    <p>
                        Suivez-nous et utilisez ce qui suit plateformes de médias sociaux pour entrer en contact avec nous
                    </p>
                    <p>
                        <a href="#"><i class="fab fa-facebook-f text-danger"></i></a>
                        <a href="#"> <i class="fab fa-twitter text-danger"></i></a>
                        <a href="https://www.instagram.com/motongen3/"><i class="fab fa-instagram text-danger"></i></a>
                    </p>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-danger px-4 mt-3" href="{{route('contactfr')}}">Obtenir un Devis</a>
                </div>
            </div>
          </div>
        </div>
            <hr style="margin: 0 4em 1em 4em;">
            <div class="row">
              <div class="col-10 offset-1">
                <div class="row">
                <div class="col-md-2 text-center">
                    <img src="{{asset('assets/logo.webp')}}" alt="logo">
                </div>
                <div class="col-md-8">
                    <p style="font-size: 10px;">
                        MOTONGEN est une entreprise de reconditionnement et d'approvisionnement de moteurs et de boîtes de vitesses. Nous aidons nos différents clients à travers l'Afrique de l'Ouest à fournir des moteurs, des boîtes de vitesses et des essieux à leur flotte de voitures et de camions légers afin de les remettre sur la route.
                    </p>
                </div>
                <div class="col-md-2">

                    @php 

                    $currentRouteName = Route::currentRouteName();

                    $englishRouteName = $frenchRouteName =  null;
                    if(Str::endsWith($currentRouteName, 'fr')){
                        //french 
                        $englishRouteName = Str::before($currentRouteName, 'fr');
                        $frenchRouteName = $currentRouteName;
                    }else {
                        //english

                        $frenchRouteName = $currentRouteName."fr";
                        $englishRouteName = $currentRouteName;
                    }
                @endphp
                
                <a href="{{route($englishRouteName)}}" title="switch to english"><img src="assets/england-flag.webp" alt="english" title="switch to english" width="25"> </a>| <a href="{{route($frenchRouteName)}}" title="passer au français"><img src="assets/france.webp" alt="french" width="25" title="passer au français"></a>
                </div>
            </div>
        </div>
            </div>
        </div>
    </footer>

    @if(Str::contains(Request::server('HTTP_ACCEPT_LANGUAGE'), 'en'))
                <script>
                    swal({
                        title: "Change to english?",
                        buttons: true,
                        dangerMode: true,
                        buttons: ["Nope, I'm good", "Yes please"],
                        })
                        .then((willDelete) => {
                            if (willDelete) {
                                window.location.href = "{{ route($englishRouteName)}}";
                            } 
                        });
                </script>
    @endif
  