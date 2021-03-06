<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vân & Martin</title>
    <link rel="icon" href="img/favicon.png" type="image/png">

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="font/DISTGRG-webfont.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet" type="text/css"> 

    <!-- Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-hand-spock-o"></i> <span class="light">Vân & Martin</span> 
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#details">Details</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#location">Location</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
<!--                     <li>
                        <a class="page-scroll" href="#countdown">Countdown</a>
                    </li> -->
					<li>
                        <a class="page-scroll" href="#gallery">Gallery</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <!--<h1 class="brand-heading">Vân & Martin</h1>-->
                        <img class="header-logo" src="img/martinvan-logo.png" alt="Vân & Martin"  > 
                        <p class="intro-text">Two worlds unite on July 22nd 2017</p>
                        <a href="#details" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="details" class="container content-section text-left">
        <div class="container text-center">
                <h2><i class="fa fa-list"></i> Details</h2>
        </div>
        <div class="row">
            <div class="col-lg-5 mt-50">
                <h3><i class="fa fa-user-secret"></i> Dresscode</h3>
                <p> <q>Festlich leger.</q> </p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 mt-50">
                <h3><i class="fa fa-gift"></i> Geschenke</h3>
                <p> Natürlich freuen wir uns über Geschenke, am meisten über einen kleinen finanziellen Beitrag zum sehr bald anstehenden Umzug.</p>
                <p> Of course, we'd be very happy about gifts, the most about a small financial support for our upcoming move.</p>
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-5 mt-50">
                <h3><i class="fa fa-bomb"></i> Surprises</h3>
                <p>Wir lieben Überraschungen, so lange sie angenehm sind. Habt Ihr eine gute Idee, wendet euch an die Trauzeugen.</p>
                <p>We love surpises, as long as they are pleasant. In case You have a good idea, contact our wittnesses.</p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 mt-50">
                <h3><i class="fa fa-users"></i> Begleitung</h3>
                <p> Kinder, Lebens- oder Ehepartner, bitte alle mitbringen. Bitte Bescheid geben, wieviele Ihr seid.</p>
                <p> Children, partener oder spouse, bring all. Please let us know, with how many You'll show up.</p>
            </div>
            <div class="container text-center">
            <a href="#location" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="location" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2><i class="fa fa-globe"></i> Location</h2>
                    <p>Vereinsheim Turnverein 1848 Ober-Olm e.V.</p>
                    <p>Essenheimer Str. 19</p>
                    <p>55270 Ober-Olm</p>
                </div>
            </div>
        </div>
        <div class="container">
        <h2><i class="fa fa-rocket"></i> How to get there</h2>
        </div>
        <div id="map"></div>
                    <a href="#contact" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2><i class="fa fa-crosshairs"></i> Contacts</h2>
                <h3>Bride</h3>
                <p><a href="mailto:phamthivan.qn.vietnam@gmail.com">Vân</a>
                </p>
                <h3>Broom</h3>
                <p><a href="mailto:m.wolfes@t-online.de">Martin</a>
                </p>
                <h3>Wittneses</h3>
                <p><a href="mailto:carola@die-adolfs.de">Carola</a>
                </p>
                <p><a href="mailto:martinhattemer@gmail.com">Martin</a>
                </p>
            </div>
        </div>
    </section>
    
    <section id="countdown" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="counter">
                    <div id="countingdown"></div>
                </div> <!-- /.Counter Div -->
            </div><!-- /.col Div -->
        </div><!-- /.row Div -->
    </section>

    <section id="gallery" class="container content-section text-center">
    	<h2><i class="fa fa-photo"></i> Gallery</h2>
    	<!-- <?php include 'gallery/images.php'; ?> -->
    	<div id="images"></div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Looking forward to seeing you all there!</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
