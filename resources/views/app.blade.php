<!DOCTYPE html>
<html lang="en">
<head>


    <!--
    Thank you for visiting the code. It is handmade by Gilgamesch and Amra. Checkout www.leakingsminds.com and www.webphilter.de for further information. Any ideas are welcome.
hans
ss

    -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Exame</title>


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" charset="UTF-8"></script>


    <!-- BOOTSTRAP !--->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" charset="utf-8"></script>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" >

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!-- bootstrap localhost -->
    <link rel="stylesheet" href="{{ URL::asset('/css/bootstrap.css') }}">

    <!-- personal style sheet -->
    <link rel="stylesheet" href="{{ URL::asset('/css/style.css') }}">








    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- shortcode Buttons [Eingabe SHK] -->
    <script src="{{ URL::asset('/js/personal.bundle.js') }}" charset="UTF-8"></script>

    <!-- CHART !-->
    <script src="{{ URL::asset('/js/chart.js') }}" charset="UTF-8"></script>



    <!-- Select 2 --->
    <link rel="stylesheet" href="{{ URL::asset('/css/select2.min.css') }}">
    <script src="{{ URL::asset('/js/select2.full.min.js') }}" charset="UTF-8"></script>
    <script src="{{ URL::asset('/js/de.js') }}" charset="UTF-8"></script>


    <!-- toPDF --->
    <script src="{{ URL::asset('/js/jspdf.js') }}"></script>


</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default navbar-fixed-top" >


    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">




            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{ url('home') }}">Home</a></li>



                <li> <a href="{{ url('startseite_dozent') }}">Login </a></li>




                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Über uns <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">


                        <li><a href="{{ url('ueber') }}">Über Exame</a></li>
                        <li><a href="{{ url('ueberuns') }}">Über uns</a></li>


                    </ul>
                </li>
                <li><a href="{{ url('kontakt') }}">Kontaktformular</a></li>
                <li><a href="{{ url('impressum') }}" >Impressum</a></li>
                @if (Auth::guest())
                <li><a href="{{ url('login') }}">Login</a></li>
                <li><a href="{{ url('register') }}">Registrieren</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                    </ul>
                </li>
                @endif






            </ul>
        </div>
    </div>
</nav>


<!-- <div class="hidden-sm hidden-xs hidden-md">

    <div style="position: relative; width: 100%; height:150px; float: left; z-index: 0;">
       <!--  <img src="../../img/wolken_header.jpg" style="position:absolute; width: 100%; height:auto; z-index:0;" class="img-responsive img-rounded"> -->

<h1 style="z-index: 5; position: relative; color: #FFFFFF; padding-left: 10px; padding-top: 10px;">Examensanalyse Medizin Essen</h1>




<ul class="logos">

    <li ><a href="http://www.uni-due.de" target="_blank"> <img src="{{asset('/img/ude-logo.png')}}" style="z-index: 5; position: relative; float: right; padding-right: 10px; padding-top:10px; display:block; position: fixed; right: 50px;"></a></li>
    <li class="logos"><img src="{{asset('/img/logo_header.jpg')}}" style="z-index: 5; position: relative;  padding-right: 10px; padding-top: 10px; display:block; position: fixed; right: 50px; float: right;"></li>


</ul>




<!--<div class="ex1" style="padding-left: 0px;padding-top: 10%;">

    <nav class="navbar navbar-default" role="navigation">

        <!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<!--   <div class="collapse navbar-collapse ">
      <ul class="nav navbar-nav">
          <li><a href="{{ url('home') }}">Home</a></li>

          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Über Uns <b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li><a href="{{ url('ueberuns') }}">Über uns</a></li>

                  <li><a href="{{ url('ueber') }}">Über Exame</a></li>
                  <li><a href="{{ url('weitereinfo') }}">Weitere Informationen zum Examen</a></li>
              </ul>
          </li>
      </ul> -->


<!--   <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
           <ul class="dropdown-menu">
               <li><a href="{{ url('startseite_dozent') }}">Dozenten</a></li>

               <li><a href="{{ url('eingabe') }}">Mitarbeiter</a></li>
               <li><a href="{{ url('admin') }}">Admins</a></li>
           </ul>
       </li>
       <li><a href="{{ url('kontakt') }}">Kontaktformular</a></li>
       <li><a href="{{ url('impressum') }}" >Impressum</a></li>

   </ul>
</div><!-- /.navbar-collapse -->
</nav>


</div>
</div>


<div class="visible-md visible-sm visible-xs">
    <div class="container">

        <!-- Navbar -->
        <nav class="navbar navbar-default navbar-fixed-top" >


            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url('home') }}">
                        <img src="../../img/logo.jpg" width="34" height="34"></a>
                    <a class="navbar-brand" href="https://www.uni-due.de/med/index.php" target="_blank" title="Medizinische Fakultät Universität Duisburg-Essen"> <img src="../../img/medfak.jpg" width="156" height="34"></a>
                    <a class="navbar-brand" href="https://www.uni-due.de/" target="_blank" title="Universität Duisburg-Essen"> <img src="../../img/ude-logo.png" width="88" height="34"></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">




                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('home') }}">Home</a></li>


                        <li class="dropdown">
                            <a href="{{ url('startseite_dozent') }}" >Login <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('startseite_dozent') }}">Dozenten</a></li>

                                <li><a href="{{ url('eingabe') }}">Mitarbeiter</a></li>
                                <li><a href="{{ url('admin') }}">Admins</a></li>

                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Über uns <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('ueberuns') }}">Über uns</a></li>

                                <li><a href="{{ url('ueber') }}">Über Exame</a></li>
                                <li><a href="{{ url('weitereinfo') }}">Weitere Informationen zum Examen</a></li>

                            </ul>
                        </li>
                        <li><a href="{{ url('kontakt') }}">Kontaktformular</a></li>
                        <li><a href="{{ url('impressum') }}" >Impressum</a></li>




                    </ul>
                </div>
            </div>
        </nav>
    </div>

</div>

<!--- <div class="image" style="height:auto; width: 100%;">
     <img src="../../img/wolkenheader1.png" class="header-img img-rounded img-responsive" width="100%">
 </div>!-->









@yield('content')




<span id="top-link-block" class="hidden">
    <a href="#top" class="well well-sm" onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
        <i class="glyphicon glyphicon-chevron-up"></i> Back to Top
    </a>
</span>
</body>
</html>
