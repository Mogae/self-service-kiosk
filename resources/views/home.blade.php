@extends('layout.master')

@section('content')
    <div class="album text-muted">
      <div class="container">

       <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading text-secondary mb-0 d-inline-block">SERVICES</h2>
                </div>

                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><p>Welcome</p></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Items-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"></i></div>
                            </div><img class="img-fluid"  src="{{asset('/image/portfolio/cabin.png')}}" alt="Image"/>
                        </div>

                        </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="{{asset('/image/portfolio/cake.png')}}" alt="Image"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="{{asset('/image/portfolio/circus.png')}}" alt="Image"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="{{asset('/image/portfolio/game.png')}}" alt="Image"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="{{asset('/image/portfolio/safe.png')}}" alt="Image"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="{{asset('/image/portfolio/submarine.png')}}" alt="Image"/>
                            
                        </div>
                    </div>
                </div>
            </div>
            <a button class="btn btn-primary" href="{{route('data.test')}}" ></i>Test</button></a>
        </section>
        <!-- Portfolio Modal-->
        <div class="portfolio-modal modal fade" id="portfolioModal0" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal0Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0"></h2>
                                    <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><p>Theory & Test Bookings</p></div>
                    <div class="divider-custom-line"></div>
                </div>
                                   
                                  <a button class="btn btn-primary" href="{{route('theory.booking')}}" ></i>Theory Booking</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a button class="btn btn-primary" href="{{route('practical.booking')}}"></i>Practical Test Booking </button></a>
                                    <!-- Portfolio Modal - Text-->
                                    <br/><br/><br/>
                                    <ul align="left"><strong>NB:Test Cycle (Stage) depend on candidate previous results</strong></ul>
                                 <ul align="left">  TEST CYCLES</ul>
                                   <ul align="left" ><li>Theory</li>
                                   <li>Yard(A pass in theory test and valid learners license required)</li>
                                   <li>Road (Pass your Yard to be eligeble)</li></ul>

                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h5 class="portfolio-modal-title text-secondary mb-0"></h5>
                                        <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><p>Licence Renewal & Duplicate(Lost/Damaged) Payment</p></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image<img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" alt="Tasty Cake"/>-->

                                     
                                     <a button class="btn btn-primary" href="{{route('dl.renewal')}}" ></i>Pay for Renewal </button></a>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a button class="btn btn-primary" href="{{route('dl.duplicate')}}" ></i>Pay for Duplicate</button></a>
									
                                    <!-- Portfolio Modal - Text-->
									<br/><br/>
                                    <ul align="left"><li>Standard Licence renewal fee is BWP 91.00 </li>
									   <li>Licence can be renewed 3 months prior the expiry date </li>
									   <li>Penalty charge BPW 9.00 daily excluding weekends & holidays</li></ul>
									   
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0"></h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><p>Renew Vehicle Licence (Lekgetho) 
</p></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                   <a button class="btn btn-primary" href="{{route('vehicleL.renew')}}" ></i>Pay for Vehicle Licence Renewal</button></a>
                                   <br/> <br/> <br/>
                                    
                                    <ul align="left"><li> Check your vehicle flagging status before renewing, flagged vehicles should pay the charge first.</li>
                                        <li>Late renewal of vehicle licence will result in penalties.</li>
                                        <li>Vehicle licence can be renewed 3 months prior expiry.</li></ul>
                                    
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0"></h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><p>View Vehicle Flagging Status & Renewal Charges </p></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <a button class="btn btn-primary" href="{{route('flagging.status')}}"></i>View Vehicle Status</button></a>
                                   <br/> <br/> <br/>
                                    <ul align="left"><li> Visit nearest Police Station to pay flagging charges</li>
                                    </ul>
                                    <button class="btn btn-primary" href="#"  data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0"></h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><p>Book for Roadthiness Test & Print Certicate</p></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                  <a button class="btn btn-primary" href="{{route('book.test')}}">Book For Test</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   <a button class="btn btn-primary" href="{{route('print.certificate')}}">Print Certificate</button></a>
                                   <br/> <br/> <br/>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0"</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><p>DRTS Offices</p></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <a button class="btn btn-primary" href="{{route('data.test')}}" ></i>Test</button></a>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>






<hr/>






		</div>
      </div>
    </div>
@endsection