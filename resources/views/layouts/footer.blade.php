
    <footer>
        <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="row">
                <div class="col-md-3">
                    <h4>
                        CONTACT US
                    </h4>
                    <p>
                        7 Kehinde Famsheke Street <br> Off Ilasan New Road, <br> Off Lekki-Epe Expressway, Lagos.
                    </p>
                    <p>
                        <i class="fas fa-phone text-danger"></i> +234806 176 7447 &nbsp; +234706 170 1143
                    </p>
                    <p> <a href="mailto:info@motongen.com">
                        <i class="fas fa-envelope text-danger"></i>
                        info@motongen.com 
                        </a>
                    </p>
                </div>
                <div class="col-md-3">
                    <h4>
                        ABOUT MOTONGEN
                    </h4>
                    <p>
                      <a href="{{route('about')}}">Our Story</a>
                    </p>
                    <p>
                      <a href="{{route('installer')}}">Our Process</a>
                    </p>
                    <p>
                      <a href="{{route('academy')}}">MotoNgen Academy</a>
                    </p>
                    <p>
                        Terms & Conditions
                    </p>
                </div>
                <div class="col-md-3">
                    <h4>
                        Join our Community
                    </h4>
                    <p>
                        Follow us and use the following <br> social media platforms to get in <br> contact with us
                    </p>
                    <p>
                        <a href="#"><i class="fab fa-facebook-f text-danger"></i></a>
                        <a href="#"> <i class="fab fa-twitter text-danger"></i></a>
                        <a href="https://www.instagram.com/motongen3/"><i class="fab fa-instagram text-danger"></i></a>
                    </p>
                </div>
                <div class="col-md-3">
                    <a class="btn btn-danger px-4 mt-3" href="{{route('contact')}}">Get a Quote</a>
                </div>
            </div>
          </div>
        </div>
            <hr style="margin: 0 4em 1em 4em;">
            <div class="row">
              <div class="col-10">
                <div class="row">
                <div class="col-md-2">
                    <img src="{{asset('assets/logo.webp')}}" alt="logo">
                </div>
                <div class="col-md-8">
                    <p style="font-size: 10px;">
                    MotoNgen is an engine, gearbox and axles remanufacturing company, today we are building the nation's largest collection of remanufactured of petrol, transmissions, differentials, rear axle assemblies, performance engines, and electric motors. We procure engines for our customers across the nation and West Africa coast.
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
  
    @if(Str::contains(Request::server('HTTP_ACCEPT_LANGUAGE'), 'fr'))
    <script>
        swal({
            title: "changer en français?",
            buttons: true,
            dangerMode: true,
            buttons: ["Non, je vais bien", "Oui s'il te plaît"],
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = "{{ route($frenchRouteName)}}";
                } 
            });
    </script>
@endif
