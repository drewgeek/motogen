
        <nav class="navbar navbar-expand-lg">

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

            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('homefr')}}">
                @if(Route::currentRouteName() == 'contact' || Route::currentRouteName() == 'contactfr')
                <img src="{{asset('assets/logo.webp')}}" alt="logo">
                @else 
                  <img src="{{asset('assets/Header_Logo.webp')}}" alt="">
                <img src="{{asset('assets/white-logo 2.webp')}}" alt="logo">
                @endif
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-right text-light"></i>
               
            </button>

              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <div class="ms-auto"></div>
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('aboutfr')}}">Notre histoire</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Nos produits
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{route('enginefr')}}">MOTEUR</a></li>
                        <li><a class="dropdown-item" href="{{route('gearboxfr')}}">BOÎTE DE VITESSES
                        </a></li>
                        <li><a class="dropdown-item" href="{{route('axlefr')}}">ESSIEUX </a></li>
                        <li><a class="dropdown-item" href="{{route('installerfr')}}">TROUVER UN INSTALLATEUR
                        </a></li>
                    </ul>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('academyfr')}}">Notre Académie
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link btn btn-light py-1 px-3" href="{{route('contactfr')}}">
                        <span>
                            Nous contacter
                        </span>
                    </a>
                  </li>

                  <div>
                    <a href="{{route($englishRouteName)}}" title="switch to english"><img src="assets/england-flag.webp" alt="english" title="switch to english" width="20"> </a>| <a href="{{route($frenchRouteName)}}" title="passer au français"><img src="assets/france.webp" alt="french" width="20" title="passer au français"></a>
                </div>

                </ul>

                
                   
              </div>
            </div>
          </nav>


    
