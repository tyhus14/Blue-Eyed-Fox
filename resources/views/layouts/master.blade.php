<!DOCTYPE html>
<html>
    <head>
        <title>Blue Eyed Fox</title>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset("/css/app.css") }}">
    </head>
    <body>
      <header class="header">
        <div class="container">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="/">Blue Eyed Fox</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a class="nav-item" href="/work">Work</a></li>
                    <li><a class="nav-item" href="/features">Features</a></li>
                    <li><a class="nav-item" href="/#about">About</a></li>
                    <li><a class="nav-item" href="/#contact">Contact</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </div>
      </header>



      @yield("content")

        
        <footer class="footer">
            <div class="container">
                <div class="col-xs-12 col-md-9 footer-links">
                    <a href="">Work</a> / <a href="/features">Features</a> / <a href="">About</a> / <a href="">Contact</a>
                    <span class="footer-copyright">&copy; Blue Eyed Fox, LLC 2016</span>
                </div>
                <div class="col-xs-12 col-md-3 footer-social">
                    <a href="https://www.facebook.com/Blue-Eyed-Fox-LLC-605117009616763/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/blueeyedfoxllc" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/company/9223441?trk=tyah&trkInfo=tarId%3A1419345611015%2Ctas%3Ablue%20eyed%20fox%2Cidx%3A1-1-1" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </footer>

        <script src="{{ asset("/js/modernizr-custom.js") }}"></script>
        <script src="{{ asset("/js/all.js") }}"></script>
    </body>
</html>