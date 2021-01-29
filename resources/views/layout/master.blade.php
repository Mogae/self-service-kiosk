<!-- The application template for all views-->
  </header>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>DRTS KIOSK</title>


        <link rel="shortcut icon" type="text/css" href="{{ asset('image/logo.PNG') }}" type="image/x-icon" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('bootstrap/styles.css') }}" rel="stylesheet" crossorigin="anonymous" />

       <!-- Font Awesome icons (free version)-->
       <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>-->
         <script src="{{ URL::asset('js/all.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/scripts.js') }}"></script>
           <!-- Bootstrap core CSS -->

<link rel="stylesheet" href="{{ URL::asset('css/syles.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/heading.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('css/body.css') }}" />



    </head>
    <body id="page-top">
        
         
                </div>
        </nav>
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Drts Logo Image--><img class="masthead-avatar mb-5" src="{{asset('/image/logo.png')}}" alt="Image"/>
              
                <!-- Masthead Heading-->
                <h1 class="masthead-heading mb-0">DRTS SELF SERVICE POINT</h1>
                <!-- Icon Divider-->
               <!-- <div class="divider-custom divider-light">-->
               
                </div>
                <!-- Masthead Subheading-->
               
            </div>
        </header>

 <div class="container">
            @yield('content')
        </div>










 <!-- Copyright Section-->
        <section class="copyright py-4 text-center text-white">
            <div ><small align='left'class="pull-left">Copyright © DRTS Kiosk  <?= date('Y') ?></small>    
      </div>  <small align='left' class="pull-right"><em>--Powered by Magic Towers Pty Ltd-- </em></small>
             
        </section>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed"><a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
