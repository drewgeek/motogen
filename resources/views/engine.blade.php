<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoNgen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/engine.css')}}">
    <link rel="stylesheet" defer href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="shortcut icon" href="assets/Header_Logo.webp" type="image/x-icon">

</head>
<body>
    <header>
        <div class="container p-0">
           
           @include('layouts.nav')

            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h1 class="text-white text-uppercase">remanufactured & rebuilt engines</h1>
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
                            {{-- What are remanufactured and rebuilt engines? --}}
                            What is the difference between a used, rebuilt and remanufactured engine?
                        </p>
                        <div>
                            If the engine in your vehicle  is no longer performing to your expectations or has knocked, there’s no need to trade for a new or newer used vehicle. After all, you didn’t intend to replace your vehicle before the engine got tired, why would you now?
                            <br>
                        </div>
                            <div>
                            Replacing your engine with a MOTONGEN stock replacement engine will cost considerably less than replacing the vehicle. 
                            <br>
                        </div>
                            <div>
                        We offer 1 year guarantee and service remote assist. We also have the option of selling with recommended engine oil and oil filter because the wrong lubricant can cause damage to the engine.
                            </div>

                    </div>
                    <div class="col-md-6 text-left">
                        <h5> USED ENGINES </h5>
                        <p>

Used components are pulled directly from a vehicle – typically a salvaged vehicle – and does not even get its surface cleaned. There are no provisions for disassembly, internal cleaning, or inspection with a used component. Used engines and gearbox may have high mileage and a poor maintenance history – a failure waiting to happen.  Many used or junkyard components come from a vehicle that was involved in an accident and may have unseen damage. 
Motongen goes deeper by checking the engine, opening the top and bottom, video inspection of the cylinder top. 
 We sell certified used with better warranty and test.
</p>

<h5>REBUILT</h5>
<p>

At Motongen to rebuild is to recondition by cleaning, inspecting and replacing severely worn or broken parts. Serviceable parts are reused within the manufacturer’s acceptable wear limits. The quality of rebuilt components varies widely and many come with only a short term warranty. 
</p>
 <h5>

REMANUFACTURED
</h5>
<p>
At MotoNgen, to remanufacture is to make as closely to new as possible. All core material – head and block castings, crankshaft, camshaft and rods - are carefully inspected, checked against original equipment measured specifications for correct dimensional tolerances and precisely machined. Replacement parts are new or requalified to meet exacting standards and tolerances. Testing is performed to manufacturer measured specifications and original production standards. Warranty can be between 1 year to 3 years.
</p>
                       
                    </div>
                </div>
            </div>

        </section>

        <section class="section-2">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-md-4 offset-md-4 text-center">
                    <h2 class="text-uppercase" id="gearbox-title">MotoNgen’s <br> Engine Process</h2>
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
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">OVERVIEW</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">THOROUGH CLEANING</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="cranshafts-tab" data-bs-toggle="tab" data-bs-target="#cranshafts" type="button" role="tab" aria-controls="cranshafts" aria-selected="false">CRANSHAFTS</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="camshafts-tab" data-bs-toggle="tab" data-bs-target="#camshafts" type="button" role="tab" aria-controls="camshafts" aria-selected="false">CAMSHAFTS</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">CYLINDERS</button>
                  </li>

                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">CONNECTING RODS</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">HEADS</button>
                  </li>

                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">ASSEMBLY</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">QUALITY CONTROL</button>
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
                                    <h1>1 Year/20,000 Kilometers Warranty</h1>
                                    <p>
                                        MOTONGEN can offer this beefy warranty on our remanufactured gas engines because every one of them goes through our extensive "Do It Right" process that ensures worry-free operation. Our optional Premium Service Plan provides allowances for such items as towing, car rental, fluids and premium labour should a problem arise. 
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
                                    <h1>THOROUGH CLEANING</h1>
                                    <p>
                                        Every MOTONGEN reman petrol engine is partially or completely disassembled. Blocks, heads, connecting rods, crankshafts and camshafts are thoroughly cleaned through a variety of processes to remove contaminants that can result in premature wear to internal engine components and early engine failure.
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
                                <h1>CRANSHAFTS</h1>
                                <p>
                                    Crankshafts are precision machined to exact tolerances with no odd size bearings. Thrust surfaces (domestic engines) are micro-polished to provide precise surface finishes for smooth engine operation and reduced thrust bearing wear. Every journal is inspected and measured with critical accuracy. After machining, oil holes are chamfered to improve lubrication and every journal polished to a smooth finish for long bearing life. Crankshafts are thoroughly cleaned with special emphasis to flushing and brushing out oil passages to remove any contaminants.
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
                        Need an engine? More <br> on your Options
                    </h1>
                    <p class="pt-2">
                        In general, there are four types of engines <br>
                          you will come across during your search 
                    </p>
                </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="assets/remanufactured.webp" alt="Card image cap">
                            <div class="card-body" style="border-left: 1px solid red;">
                                <h6 class="text-uppercase">Remanufactured engines</h6>
                              <p class="card-text">Are engines that are rebuilt to the exact specifications of the original.</p>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card" >
                            <img class="card-img-top" src="assets/junkyardengine.webp" alt="Card image cap">
                            <div class="card-body" style="border-left: 1px solid red;">
                                <h6 class="text-uppercase">Junkyard engine</h6>
                              <p class="card-text">Most Nigerian’s rely on your Mechanic to buy the engine and face the risk of getting a Nigerian used.</p>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card" >
                            <img class="card-img-top w-75 text-center" src="assets/rebuiltengine.webp" alt="Card image cap" >
                            <div class="card-body" style="border-left: 1px solid red;">
                                <h6 class="text-uppercase">Rebuilt Engine</h6>
                              <p class="card-text">On the other hand are only fixed enough to solve the issue that caused it to fail in the first place. </p>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card" >
                            <img class="card-img-top h-75" src="assets/usedengine.webp" alt="Card image cap">
                            <div class="card-body" style="border-left: 1px solid red;">
                                <h6 class="text-uppercase">USed engines</h6>
                              <p class="card-text">If the  engine in your car, truck,  SUV is no longer performing to your expectations, there’s no need to trade for a new or newer used vehicle.</p>
                            </div>
                          </div>
                    </div>
                </div>


                
            </div>

        </section>
        @include('layouts.brands')

    </main>
    
    @include('layouts.footer')

    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
</body>
</html>