<!DOCTYPE html>
<html lang="en">
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

        @include('layouts.nav')

        </div>
        <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <h1>ABOUT MOTONGEN</h1>
                <p>
                    We’re a engine and gearbox remanufacturing and procurement company
                </p>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <p>
                    We help our various customers across West Africa provide engines, gearboxes and axles to their fleet of cars and light-weight trucks to get them back on the road. We operate an international standard engine lab that test, cleans, inspects, optimize the engines and gearbox we sell to our customers. Our technicians do live-run of engines, meter-assisted dynamometer testing,cylinder pressure test. 
                </p>
                <p id="lastchild">
                    Our engine OEM specifications, correcting problems in original design. We are the only engine seller that can offer you 1 year guarantee. Assembled by skilled technicians continuously trained in the latest technology of engine overhaul and rebuild. 
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
                          Continuous improvement in engine delivery, quality, productivity to increase longevity ensure sustainability and the reduction of mechanical waste in cars and all type of motion equipment.
                            {{-- To help vehicle owners, fleet owners save money and layoff time of there vehicles, to reduce mechanical waste and save them the financial burden of returning bad engines and buying engines that will not last. --}}

                        </p>
                        <h3>OUR CULTURE</h3>
                        <p>
                            The basis of our corporate philosophy can be found in these words: "Do It Right..once and for all.” 
                        </p>
                        <p>
                            At MotoNgen, We expect everyone who joins our company to work hard and maintain our commitment to safety, quality, productivity, customer service, the reduction of waste and contributing to our efforts of being environmentally friendly
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
                            Frequently asked questions about Remanufactured Engines
                        </p>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    What is the difference between a used, rebuilt and remanufactured engine?
                                </button>
                              </h2>
                              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                  <strong>USED ENGINES</strong>
                                  <p>Used engines are taken directly from a vehicle typically a junkyard vehicle. There are no provisions for disassembly, internal cleaning, or inspection with a used component. Many used or junkyard components may have high mileage and a poor maintenance history – a failure waiting to happen. Many used or junkyard components come from a vehicle that was involved in an accident and may have unseen damage.</p>
                                  
                                  <strong>REBUILT ENGINES</strong>
                                  <p>To rebuild is to recondition by cleaning, inspecting and replacing severely worn or broken parts. Serviceable parts are reused within the manufacturer’s acceptable wear limits. The quality of rebuilt components vary widely and many come with only a short-term warranty.</p>
                                  
                                  <strong>REMANUFACTURED ENGINES</strong>
                                  
                                  <p>To remanufacture is to make as closely to new as possible. All core material – head and block castings, crankshaft, camshaft and rods - are carefully inspected, checked against original equipment measured specifications for correct dimensional tolerances and precisely machined. Replacement parts are new or requalified to meet exacting standards and tolerances.</p>
                                  
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
                                    How can I find a price for one of your remanufactured engines?
                                </button>
                              </h2>
                              <div id="fluxsixcontroler" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    MOTONGEN offers several options for you to obtain pricing on our remanufactured engines. We encourage you to speak with the automotive technician that services your vehicle for better pricing. If you do not have a facility that you work with on a regular basis, you can make a request.
                                </div>
                              </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-six">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flushsixcontroller" aria-expanded="false" aria-controls="flushsixcontroller">
                                    Do you offer a reman engine for my vehicle?
                                  </button>
                                </h2>
                                <div id="flushsixcontroller" class="accordion-collapse collapse" aria-labelledby="flush-six" data-bs-parent="#accordionFlushExample">
                                  <div class="accordion-body">
                                    Chances are very good that we have a remanufactured engine for your Vechicle, if we do not, we will procure one for you anywhere in the world. MOTONGEN remanufactures practically any domestic gas engine for cars, trucks, vans and SUVs, as well as for a number of foreign applications.
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
                                    Where can I purchase your engines?
                                </button>
                              </h2>
                              <div id="faq-4-control" class="accordion-collapse collapse" aria-labelledby="faq-4-heading" data-bs-parent="#accordionfaq">
                                <div class="accordion-body bg-danger text-light">
                                    If you are an installation facility, fleet or a commercial user, you can contact our Sales Department at +2348033603906. Vehicle owners can purchase MOTONGEN remanufactured engines from the automotive service facility that you frequent. If you don’t have a facility that you trust, you can find a MOTOMI installer near you with our Installer Locator.
                                </div>
                              </div>
                            </div>

                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-5-control" aria-expanded="false" aria-controls="faq-5-control">
                                    What is the warranty on a MotoNgen remanufactured engine?
                                </button>
                              </h2>
                              <div id="faq-5-control" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionfaq">
                                <div class="accordion-body">
                                    Most applications for MOTONGEN engines/ gearbox/ axles are covered by a 1 Year/10,000 kilometers (whichever occurs first) nationwide warranty. Terms and conditions apply. A full warranty disclosure is available on this website. We sell the recommended oil with our components to give it the best chances of longevity.
                                </div>
                              </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-four">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fluxfive-control" aria-expanded="false" aria-controls="fluxfive-control">
                                    Where can I find an installer?                                 
                                 </button>
                                </h2>
                                <div id="fluxfive-control" class="accordion-collapse collapse" aria-labelledby="flush-four" data-bs-parent="#accordionfaq">
                                  <div class="accordion-body">
                                    We can set you up with an installer. Simply fill the form <a href="installer.html">here</a>.
                                  </div>
                                </div>
                              </div>

                          </div>
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.brands')

    </main>
    @include('layouts.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" defer integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" defer integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
</body>
</html>