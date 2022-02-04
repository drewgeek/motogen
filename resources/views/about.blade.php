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
                          Continuous improvement in engine delivery, quality, productivity to increase longevity of vehicles, ensure sustainability and the reduction of mechanical waste in vehicles and all type of motion equipment through a recycling process.

                        </p>
                        <h3>OUR VISION</h3>
                        <p>
                          Reduce global mechanical waste, add value to salvage engines/parts.
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

        <section class="section-3 mb-8">
          <div class="container mt-4">
            <h2 class="text-center">Our Processes</h2>
            <div class="row align-items-center border-top border-bottom border-2 text-center">
              <div class="col"></div>
              <div class="col">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-danger" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="50%" height="50%">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                  </svg>
                </span> <br>
                Call/text to place order
              </div>
              <div class="col ">
                <span class="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-danger" viewBox="0 0 20 20" fill="currentColor" width="50%" height="50%">
                    <path d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                  </svg>
                </span> <br>
                Engine/Gearbox ready for shipping

              </div>
              <div class="col ">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-danger" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="50%" height="50%">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" />
                  </svg>
                </span> <br>
                Shipped to Customer or Partner workshop
              </div>
              <div class="col ">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-danger" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="50%" height="50%">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" />
                  </svg>
                </span> <br>
                Installation &amp; Test Drive
              </div>
              <div class="col ">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-danger" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="50%" height="50%">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m9 14V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l4-2 4 2 4-2 4 2z" />
                  </svg>
                </span> <br>
                Return old core &amp; get paid
              </div>
              <div class="col"></div>

            </div>
          </div>
            <div class="container">

                <div class="row pt-3">
                    <div class="col-12 text-center">

                    <h2>FAQS</h2>
                        <p>
                            Frequently asked questions about Remanufactured Engines
                        </p>
                    </div>
                </div>


                <div class="row pb-5">
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
                                  <strong>Certified Motongen VS Tokunbo Engines</strong>
                                  <p>Tokunbo engine traders do not even get their engine surface cleaned; there is no opportunity for disassembly, internal cleaning, or inspection with a used component. At Motongen, we inspect used engines and gearboxes that may have high mileage and poor maintenance history - a failure waiting to happen.
                                    Motongen goes deeper by checking the engine, opening the top and bottom, video inspecting the cylinder top and pistons, and testing the valve body and solenoids. We sell certified-used with a minimum of 3-months warranty.</p>
                                  
                                  <strong>Certified Rebuilt</strong>
                                  <p>At Motongen, we also sell rebuilt engines, gearboxes, and axles. To rebuild is to recondition by cleaning, inspecting, and replacing severely worn or broken parts. We reuse serviceable parts within the manufacturer's acceptable wear limits. The quality of rebuilt components varies widely, with many coming with only a mid-term warranty. We sell ours with a 1-year warranty.</p>
                                  
                                  <strong>Certified Remanufactured</strong>
                                  
                                  <p>At MotoNgen, we remanufacture by making it as close to new as possible. All core materials (head and block castings, crankshaft, camshaft, and rods) are carefully inspected, checked against original equipment, and measured to specification. They are machined precisely for correct dimensional tolerances. Replacement parts are new or requalified to meet exacting standards and tolerances. We test the manufacturer 's measured specifications and original production standards. Some of the engines come as imported. Warranty can be between 18w months to 3 years.</p>
                                  
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
    </main>
    @include('layouts.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" defer integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" defer integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
</body>
</html>